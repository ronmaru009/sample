<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: white;
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
                color: white;
                border:  1px solid white;
                padding: 10px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                transition: 1s;
                border-radius:  5px;
            }

            .links a:hover{
                color: orange;
                border: 1px solid white;
                padding: 20px;
                border-radius: 15px;
                
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .bg{
                position: absolute !important;
                top: 0 !important;
                left: 0 !important;
                z-index: -100000000 !important;
            }

        </style>
    </head>
    <body background="{{URL::asset('img/red2.jpg')}}">

         @if (Session::has('flash_message_login'))
                        <div class="alert alert-danger">
                            {{Session::get('flash_message_login')}}
                        </div>
                    @endif
        
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
                   ADD COMPOUND LOGBOOK 
                </div>

                

                <div class="links">
                    <a href="{{url('/logbookFinals/home')}}">ADD NEW RECORD</a>
                    <a href="{{url('/logbookFinals/list')}}">LOG BOOK</a>
                    <a href="https://laracasts.com">Contact Us</a>
                    <a href="https://laravel-news.com">Support</a>
                   
                </div>
            </div>
        </div>
    </body>
</html>
