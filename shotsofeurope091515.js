/**
 * Created by matthewyun on 9/14/15.
 */


function loadPicsLondon() {
//    window.alert("Button clicked.");
    var hiddenLondonVar = document.querySelector("#hiddenLondon");
    var londonButtonVar = document.querySelector("#londonButton");
    hiddenLondonVar.style.display = "inline";
    londonButtonVar.style.display = "none";

    var sticky = document.querySelector("#navigationBox2");

    window.alert(sticky);

}

/** Function to get coordinates of element relative to top of window. from http://javascript.info/tutorial/coordinates **/

function getOffsetRect(elem) {
    // (1)
    var box = elem.getBoundingClientRect();

    var body = document.body;
    var docElem = document.documentElement;

    // must consider scroll because getBoundingClientRect is relative to Window => changes as you scroll
    var scrollTop = window.pageYOffset || docElem.scrollTop || body.scrollTop;
    var scrollLeft = window.pageXOffset || docElem.scrollLeft || body.scrollLeft;

    // The document (`html` or `body`) can be shifted from left-upper corner in IE. Get the shift.
    var clientTop = docElem.clientTop || body.clientTop || 0;
    var clientLeft = docElem.clientLeft || body.clientLeft || 0;

    // Add scrolls to window-relative coordinates and subtract the shift of `html/body` to get coordinates in the whole document.
    var top  = box.top +  scrollTop - clientTop;
    var left = box.left + scrollLeft - clientLeft;

    return { top: Math.round(top), left: Math.round(left) }
}

/**** Fix left hand navigation column ****/

window.onload = function () {      // wait for window to load or querySelector return null

    var sticky = document.querySelector("#navigationBox2");
    var stickyPos = getOffsetRect(sticky).top;      //  distance between top of navigationBox2 and beginning of window


        addEventListener("scroll", function () {       //when navigationBox2 reaches top of screen, add new class with 'fixed' position value
        if (window.pageYOffset > stickyPos) {
            sticky.classList.add("fixBox");
        } else {
            sticky.classList.remove("fixBox");
        }
    });
};


/**** Module to load more pictures ****/

//<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
//
//jQuery("document").ready(function($){
//
//    var nav = $('#navigation');
//
//    $(window).scroll(function () {
//    if ($(this).scrollTop() > 136) {
//    nav.addClass("f");
//    } else {
//    nav.removeClass("f");
//    }
//    });
//
//    });





