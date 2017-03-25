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
            table td {
                color: white;
                font-size: 17px;
            }
            .table-hover tbody tr:hover td, .table-hover tbody tr:hover th {
                background-color: #CCCCFF;
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

            .table-striped>tbody>tr:nth-child(odd)>td, 
            .table-striped>tbody>tr:nth-child(odd)>th {
             background-color: #CCFFCC; 
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
                
                   
                    
                       <form method="POST" action="/logbookFinals/save">
                        {{csrf_field()}}

                        <input type="hidden" name="id" value="{{$logs->id}}">

                        <div class="form-group">
                          <label for="fname">Date</label>
                          <input type="date" class="form-control" id="date" name="date" value="{{$logs->date}}">
                        </div>
                      
                        <div class="form-group">
                          <label for="fname">First Name</label>
                          <input type="text" class="form-control" id="fname" value="{{$logs->fname}}" name="fname" required>
                        </div>

                        <div class="form-group">
                          <label for="lname">Last Name</label>
                          <input type="text" class="form-control" id="lname" name="lname" value="{{$logs->lname}}" required>
                        </div>

                        <div class="form-group">
                          <label for="destination">Destination</label>
                          <input type="text" class="form-control" id="destination" name="destination" value="{{$logs->destination}}" required>
                        </div>

                        <div class="form-group">
                          <label for="timein">Time In</label>
                          <input type="time" class="form-control" id="timein" name="timein" value="{{$logs->timein}}">
                        </div>

                        <div class="form-group">
                          <label for="timeout">Time Out</label>
                          <input type="time" class="form-control" id="timeout" name="timeout" value="{{$logs->timeout}}">
                        </div>

                       

                        <button type="submit" class="btn btn-info">SAVE</button>


                   </table>
                
                  

                <div class="links">
                    <a href="https://laravel.com/docs">About Us</a>
                    <a href="https://laracasts.com">Contact Us</a>
                    <a href="https://laravel-news.com">Support</a>
                   
                </div>
            </div>
        </div>
        
        <script src="/js/app.js"></script>
        <script src="/js/jquery-3.1.1.min.js"></script>
        <script src="/js/jquery.simplePagination.js"></script>
        
        <script>

        $(function() {
            $("#example").simplePagination({
                previousButtonClass: "btn btn-danger",
                nextButtonClass: "btn btn-danger",
               
            });


        });
    </script>

    </body>
</html>
