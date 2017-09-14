$(document).ready(function(){
    $(".logind").hide();
    $("#loggen").on("click", function(){
        $(".logind").slideToggle();
    });
});