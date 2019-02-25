<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Masum Osman Khan</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                color: #f4f6f7;
                font-family: 'Nunito', sans-serif;
                font-weight: 500;
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
                font-size: 50px;
                font-weight: normal;
            }

            .links > a {
                color: #f4f6f7; 
                padding-right:10px;
                padding-left:10px;
                padding-top:10px;
                /* padding-bottom:10px; */
                font-size: 20px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                /* text-transform: uppercase; */
            }

            a:hover {
                color: aqua;
            }

            .m-b-md {
                margin-bottom: 20px;
            }

            #imgHolder{
                background-image: url('/images/back.png');
                -webkit-background-size: cover;
                -moz-background-size:cover;
                -o-background-size:cover;
                background-size: cover; 
            }
        </style>
    </head>
    <body>
        <div id="imgHolder">
                <div class="flex-center position-ref full-height">
                        {{-- @if (Route::has('login'))
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
                        @endif --}}
            
                        <div class="content">
                            <div class="title m-b-md">
                                Osman Gani Khan Masum
                            </div>
                            <h1>Full Stack Developer | Backend Enthusiast</h1>
                            <div class="links">
                                <a href="https://github.com/Masum-Osman">GitHub</a>
                                <a href="https://stackoverflow.com/users/7086610/masum-osman-khan">Stackoverflow</a>
                                <a href="https://www.linkedin.com/in/masum-osman-khan-b36826b9/">LinkedIn</a>
                                <a href="https://www.facebook.com/profile.php?id=100002783125800">Facebook</a>
                                <a href="https://nova.laravel.com">Nova</a>
                                <a href="https://forge.laravel.com">Forge</a>
                                <a href="mailto:ogkmasum@gmail.com?">Mail Masum</a>
                            </div>
                        </div>
                    </div>
        </div>
        
    </body>
</html>
