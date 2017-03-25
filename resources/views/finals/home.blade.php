<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap - Prebuilt Layout</title>

<!-- Bootstrap -->
<link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ URL::asset('style.css') }} rel="stylesheet" type="text/css">
<style>
  @charset "utf-8";
body{
    overflow: hidden;
  background-image:url(../img/bg.jpg);
  background-size:cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
  
}
#logo {
    float: left;
    width: 35%;
    height: 30%;
    margin: -60px 35%;
}

a {
    text-decoration: none;
    color: white;
    font-family: "HERO LIGHT";
    font-size: 30px;
    border: 1px solid;
    padding: 5px;
    transition: 1.5s;
    
        
}

form {
    margin: 20px;
}

a:hover{
    background-color: bisque;
    text-decoration: none;
}

a:visited {
    text-decoration: none;
}

#links {
    margin: 0 33%;
    position: relative;
    text-align: center;
    top:-70px;
    
    
    
}

#wrapper{
top: 0;
left: 0;
width: 100%;
height: 100%;
background-color: black;
z-index: 1000;
position: fixed;
}
#loader {
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    width: 100%;
    height: 100%;

}

.loaded #loader{
  opacity: 0;
  transition:  0.5s;

}

.loaded #wrapper{
    opacity: 0;
    transition: 1s;
  visibility: hidden;
}
img {
    width: 1366px;
    height: 100%;
}

#login {
    width: 30%;
    display: none;
}

#loginform{
  display: none;
}

#signupform{
  display: none;
}
</style>

</head>
<body>
    
    <div id="wrapper">
	<div id="loader">
	<img src="{{ URL::asset('img/load.gif') }}">
		
        </div>
	</div>
    
      <div id="login">
        <button type="button" id="loginbtn">LOGIN</button>
            <button type="button" id="signupbtn">SIGN UP</button>
          
        <form id="loginform">
          <label>USERNAME</label>
              <input type="text" required></input><br/>
          <label>PASSWORD</label>
              <input type="password" required></input>
            <br/><br/>
        </form>

        <form id="signupform">
          <label>FIRSTNAME:</label>
            <input type="text" name="fname" required><br>
          <label>LASTNAME: </label>
            <input type="text" name="lname" required><br>
          <label>CONTACT NUMBER: </label>
            <input type="number" name="lname"><br>
          <label>EMAIL: </label>
            <input type="email" name="lname"><br>

          <button>SUBMIT</button>




        </form>  
              
              
      </div> 
  <div class="container-fluid" id="body"> 
  
   <img id="logo" src="{{ URL
   ::asset('img/logo2.png') }}">
      <br><br><br><br>
      <div id="links">
      <br><br><br><br>
          <button id="show">BEGIN YOUR JOURNEY</button> 
      
      </div>

      
  </div>
  
      
    
    
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="{{ URL::asset('js/jquery-1.11.2.min.js') }}"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="{{ URL::asset('js/bootstrap.js') }}"></script>
<script src="{{ URL::asset('js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ URL::asset('js/main.js') }}"></script>
<script>
  
// $("#show").click(function(){
//         $("#body").fadeOut(1000);
//     });

</script>
</body>
</html>
