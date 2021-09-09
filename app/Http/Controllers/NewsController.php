<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('pages.news', ['news' => $news]);
    }

    public function showNew($id)
    {
        $new = News::where('id', $id)->first();
        return view('pages.new', ['new' => $new]);
    }
}
