<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>UnBer</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                background-image: url("https://user-images.githubusercontent.com/32500464/33210456-73c336cc-d101-11e7-8ad0-1dd72a2de52d.jpeg");
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-position: 33% 50%;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                width:100%;
                text-align: right;
                right: 0px;
                top: 0px;
                border-top-style: solid;
                border-top-color: black;
                border-right-style: solid;
                border-left-style: solid;
                border-bottom-style: solid;
            border-bottom-color: black;
                background-color:black;
                padding:20px 03px 20px 03px;
            }

            .top-right a:hover {
        background-color:#F8F8FF;
            color:black;
            padding: 20px;
            }

            .content {
                text-align: center;
                color: #FFFFFF;
            }

            .title {
                font-size: 100px;
                
            }

            .links > a {
                color: #ffffff;
                padding: 30px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                width:100%;

            }

            .titulo{
                color: #000000;
                font-size: 100px;      
                letter-spacing: .1rem;
                text-decoration: none;
            }

            .p {
                color: #000000;
                text-align: center;
                font-weight:600;
                font-family: 'Raleway', sans-serif;
                letter-spacing: .1rem;
               }
            
        </style>
    </head>

    <body>
        <div class="flex-center position-ref full-height">
                @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">UnBer</a>
                    @else
                        <a href="{{ route('login') }}">Entrar</a>
                        <a href="{{ route('register') }}">Registro</a>
                    @endauth
                </div>
            @endif
            <div class="content">  
                    <a class="titulo" href="{{ url('/home') }}">UnBer</a>                 
                <p class="p">Mestres ensinando mestres</p>
            </div>
        </div>
        
    </body>
</html>