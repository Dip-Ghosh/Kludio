<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #f8fafc;
                background-image: url('https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.facebook.com%2Fspacedawgbd%2Fvideos%2Fcoca-cola-covid-19-campaign-by-care%2F639207696673013%2F&psig=AOvVaw0xx07TCvScjPxE1iKZ607A&ust=1604079995326000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCPij3uit2uwCFQAAAAAdAAAAABAJ');
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
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
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Kludio Asia
                </div>

                <div class="links">
                    <a href="#">BIRIYANI</a>
                    <a href="#">About</a>
                    <a href="#">FOOD</a>
                    <a href="#">NEWS</a>

                </div>
            </div>
        </div>
    </body>
</html>
