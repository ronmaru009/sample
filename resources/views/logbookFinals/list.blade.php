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
                background-color: #007FFF;
            }

            .table-striped>tbody>tr:nth-child(odd)>td, 
            .table-striped>tbody>tr:nth-child(odd)>th {
             background-color: #5500FF; 
            }

            div .alert{
                color: black;
                font-family: sans-serif;
            }

            input[type="text"]{
                color: black;
                font-family: sans-serif;
            }

        </style>
    </head>
    <body background="{{URL::asset('img/red2.jpg')}}">

        <div class="flex-center position-ref full-height">

            @if (Route::has('login'))
                <div class="top-right links">

                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
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
                    
                    @if (Session::has('flash_message'))
                        <div class="alert alert-info">
                            {{Session::get('flash_message')}}
                        </div>
                    @endif
                     @if (Session::has('flash_message_edit'))
                        <div class="alert alert-success">
                            {{Session::get('flash_message_edit')}}
                        </div>
                    @endif
                    @if (Session::has('flash_message_delete'))
                        <div class="alert alert-danger">
                            {{Session::get('flash_message_delete')}}
                        </div>
                    @endif



                   <table class="table table-striped table-hover" id="example" >
                    <thead>    
                       <tr>
                           <th>DATE</th>
                           <th>FIRST NAME</th>
                           <th>LAST NAME</th>
                           <th>DESTINATION</th>
                           <th>TIME IN</th>
                           <th>TIME OUT</th>
                       </tr>
                    </thead>

                       <form method="get" action="/logbookFinals/home">
                           {{csrf_field()}}

                           @foreach($logs as $loglist)
                           <tr>
                            <td>{{$loglist->date}}</td>
                            <td>{{$loglist->fname}}</td>
                            <td>{{$loglist->lname}}</td>
                            <td>{{$loglist->destination}}</td>
                            <td>{{$loglist->timein}}</td>
                            <td>{{$loglist->timeout}}</td>
                            <td><a href="/logbookFinals/edit/{{$loglist->id}}" name="edit" value="edit" class="btn btn-success">EDIT</a></td>
                            <td><a href="/logbookFinals/delete/{{$loglist->id}}" name="delete" value="delete" class="btn btn-danger">DELETE</a></td>


                           </tr>
                           @endforeach   

                           <button type="submit" class="btn btn-primary">ADD</button>   
                       </form>


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
    <script>
        $('div.alert').delay(3000).slideUp(300);
    </script>
    <script>
    
    function myFunction() {
      // Declare variables 
      var input, filter, table, tr, td, i;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("example");
      tr = table.getElementsByTagName("tr");

      // Loop through all table rows, and hide those who don't match the search query
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
          if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        } 
      }
    }

</script>

    </body>
</html>
