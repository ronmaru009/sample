$(document).ready(function(){

$("#show").click(function(){
        $("#body").fadeOut(1000);
        $("#login").fadeIn(1000);

    });

$("#loginbtn").click(function(){
	$("#loginform").fadeIn(1000);
	$("#signupform").fadeOut(1000);

});

$("#signupbtn").click(function(){
	$("#signupform").fadeIn(1000);
	$("#loginform").fadeOut(1000);

});





setTimeout(function(){
$('body').addClass('loaded');


}, 1000);

  
    

});