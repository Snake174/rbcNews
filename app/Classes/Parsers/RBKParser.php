<?php

namespace App\Classes\Parsers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use App\Models\News;
use App\Classes\Interfaces\IParse;
use DiDom\Document;

class RBKParser implements IParse
{
    private $URL = 'https://www.rbc.ru/';
    private $newsCount = 15;

    public function Parse()
    {
        $response = Http::get($this->URL);
        $root = new Document($response->body());
        $links = $root->find('#js_news_feed_banner > .js-news-feed-list > a.news-feed__item');
        unset($root);

        for ($i = 0, $cnt = count($links); $i < $cnt; $i++)
        {
            if ($i > $this->newsCount)
            {
                unset($links);
                return;
            }

            $link = $links[$i];
            Log::debug($link->attr('href'));

            $response = Http::get($link->attr('href'));
            $doc = new Document($response->body());
            $mainImage = $doc->first('.article__main-image > .article__main-image__wrap > img');
            $descriptions = $doc->find('.article__text > p');
            $description = '';

            foreach ($descriptions as $d)
                $description .= trim($d->text());

            unset($doc);

            if ($description == '')
                continue;

            $title = mb_substr($description, 0, 195);
            $title .= ' ...';

            if ($mainImage)
                $mainImage = $mainImage->attr('src');
            else
                $mainImage = '';

            News::firstOrCreate([
                'image' => $mainImage,
                'title' => $title,
                'description' => $description
            ]);
        }

        unset($links);
    }
}
