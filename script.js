//ON load Page event
var myTimer;

function spinner() {
    myTimer = setTimeout(showPage, 3000);
}

function showPage() {
    document.getElementById("loader").style.display = "none";
    document.getElementById("loadtext").style.display = "none";
    document.getElementById("head").style.display = "block";
    document.getElementById("passbook").style.display = "grid";
    document.getElementById("customers").style.display = "flex";

}


//Scroll Effects

$(function () {
    if ($(window).width() > 786) {
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