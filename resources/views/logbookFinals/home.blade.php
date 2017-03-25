<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="/css/app.css" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: white;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                overflow: auto;
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

            #tym{
                font-size: 40px;
            }

            input[type="text"]{
                color: black;
                font-family: sans-serif;
            }
            input[type="date"]{
                color: black;
                font-family: sans-serif;
            }
            input[type="time"]{
                color: black;
                font-family: sans-serif;
            }
            div .alert{
                color: black;
                font-family: sans-serif;
            }

        </style>
    </head>
    <body background="{{URL::asset('img/red2.jpg')}}">

        <div class="flex-center position-ref full-height">

            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('logbookFinals/index') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                   Logbook

                </div>
                <div id="tym">
                    Current Time: {{ date('h:i:s a') }} 
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </div>
                @endif
                
                    <form method="POST" action="/logbookFinals/add">
                        {{csrf_field()}}

                        <div class="form-group">
                          <label for="fname">Date</label>
                          <input type="date" class="form-control" id="date" name="date" placeholder="Enter Date Today"  required>
                        </div>
                      
                        <div class="form-group">
                          <label for="fname">First Name</label>
                          <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname" required>
                        </div>

                        <div class="form-group">
                          <label for="lname">Last Name</label>
                          <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Last Name" required>
                        </div>

                        <div class="form-group">
                          <label for="destination">Destination</label>
                          <input type="text" class="form-control" id="destination" name="destination" placeholder="Enter Destination" required>
                        </div>

                        <div class="form-group">
                          <label for="timein">Time In</label>
                          <input type="time" class="form-control" id="timein" name="timein" placeholder="Enter Time In" required>
                        </div>

                        <div class="form-group">
                          <label for="timein">Time Out</label>
                          <input type="time" class="form-control" id="timeout" name="timeout" placeholder="Enter Time Out" required>
                        </div>

                       

                        <button type="submit" class="btn btn-default">Submit</button>
                     </form>



                     
                
                
                <div class="links">
                    <a href="https://laravel.com/docs">About Us</a>
                    <a href="https://laracasts.com">Contact Us</a>
                    <a href="https://laravel-news.com">Support</a>
                   
                </div>
            </div>
        </div>
        
        s
        <script src="/js/app.js"></script>
    </body>
</html>
