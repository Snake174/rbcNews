<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>RBC News Parser</title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="content-language" content="ru" />
        <meta name="format-detection" content="telephone=no" />
        <meta http-equiv="x-rim-auto-match" content="none">
        <meta name="viewport" content="initial-scale=1, width=device-width" />
        <meta name="mobile-web-app-capable" content="yes" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link href="//cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
        <style>
            html, body {
                -webkit-font-smoothing: antialiased;
            }
            html {
                position: relative;
                min-height: 100%;
            }
            p {
                padding: 5px 0;
            }
            .card {
                margin-bottom: 10px;
            }
            .container-main {
                padding: 50px 10px 100px;
            }
            .footer {
                position: absolute;
                bottom: 0;
                width: 100%;
                height: 60px;
                line-height: 60px;
            }
        </style>
    </head>
    <body>
        <div class="container container-fluid container-main">
            @yield('content')
        </div>

        <footer class="footer bg-dark">
            <div class="container">
                <span class="text-muted float-end">&copy; 2021, Serebryannikov Evgeniy</span>
            </div>
        </footer>

        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    </body>
</html>
