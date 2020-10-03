//ON load Page event
var myTimer;

function spinner() {
    myTimer = setTimeout(showPage, 3000);
}

function showPage() {
    document.getElementById("loader").style.display = "none";
    document.getElementById("loadtext").style.display = "none";
    document.getElementById("navbar").style.display = "block";
}


//Scroll Effects

$(function () {
    if ($(window).width() > 786) {
        var x = $(window).width();
        window.console.log(x);
        $(window).scroll(function () {
            if ($(document).scrollTop() > 40) {
                $('#aboutus').fadeIn(4000);
            }
            if ($(document).scrollTop() > 200) {
                $('.jumbotron').css('width', '100vw');
            }
        });
    }
});