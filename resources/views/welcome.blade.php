<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Masum Osman Khan</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

        <script type="text/javascript">
            $(document).ready(function(){
                $('#wrapper').fadeIn(2000);
            });
        </script>
    </head>


<body>
    {{-- <div id="imgHolder"> --}}
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div id="wrapper">
                    <div class="title m-b-md">
                        Osman gani khan Masum
                    </div>

                    {{-- <div class="title m-b-md">
                        Hey...<span> I'm Masum</span>
                    </div> --}}

                    <h1 id="fullstack">Full Stack Developer | Backend Enthusiast</h1>
                    <div class="links">
                        <a href="http://bit.ly/2LsDGyz"  target="_blank">GitHub</a>
                        <a href="http://bit.ly/2XclDie"  target="_blank">Stackoverflow</a>
                        <a href="http://bit.ly/2XgJ4f3"  target="_blank">LinkedIn</a>
                        <a href="http://bit.ly/2FGwlYa"  target="_blank">Facebook</a>
                        <a href="mailto:ogkmasum@gmail.com?">Mail Masum</a>
                    </div>
                    <br>
                    
                    <a href="/resume/Osman-Resume.pdf" download><button class="button" style="vertical-align:middle"><span>resumé</span></button></a>
                </div>   
            </div>
        </div>
    {{-- </div>         --}}
</body>
</html>
