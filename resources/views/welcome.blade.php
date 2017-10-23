<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                font-size: medium;
            }

            .full-height {
                height: 100vh;
            }
            div.gallery {
                margin: 5px;
                border: 1px solid #ccc;
                float: left;
                width: 180px;
            }

            div.gallery:hover {
                border: 1px solid #777;
            }

            div.gallery img {
                width: 100%;
                height: auto;
            }

            div.desc {
                padding: 15px;
                text-align: center;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: left;
            }

            .title {
                font-size: 32px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .tags {
                list-style: none;
                margin: 0;
                overflow: hidden;
                padding: 0;
            }

            .tags li {
                float: left;
            }

            .tag {
                background: #eee;
                border-radius: 3px 0 0 3px;
                color: #999;
                display: inline-block;
                height: 26px;
                line-height: 26px;
                padding: 0 20px 0 23px;
                position: relative;
                margin: 0 10px 10px 0;
                text-decoration: none;
                -webkit-transition: color 0.2s;
            }

            .tag::before {
                background: #fff;
                border-radius: 10px;
                box-shadow: inset 0 1px rgba(0, 0, 0, 0.25);
                content: '';
                height: 6px;
                left: 10px;
                position: absolute;
                width: 6px;
                top: 10px;
            }

            .tag::after {
                background: #fff;
                border-bottom: 13px solid transparent;
                border-left: 10px solid #eee;
                border-top: 13px solid transparent;
                content: '';
                position: absolute;
                right: 0;
                top: 0;
            }

            .tag:hover {
                background-color: crimson;
                color: white;
            }

            .tag:hover::after {
                border-left-color: crimson;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel files
                    @yield('form')


                </div>
                @yield('images')
                <div>

                </div>
            </div>
        </div>


        <script>
        $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
        });

        </script>
    </body>
</html>
