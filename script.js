$(document).ready(function() {

    $(window).scroll(function() {
        if($(this).scrollTop() > 40){
            $('#topBtn').fadeIn();
            console.log("true");
        } else{
            $('#topBtn').fadeOut();
            consol.log("false");
        }
    });

    $("#topBtn").click(function(){
        $('html ,body').animate({scrollTop : 0},800);
    });
  });