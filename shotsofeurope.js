/**
 * Created by matthewyun on 9/14/15.
 */

(function () {

    function LoadPics() {
        var loaded = document.querySelectorAll("#London .Img");
        var numberLoaded = loaded.length;
        var picSource = "pictures/locationPics/"
        var numberofPics = 20;
    }

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

    var getOffsetRect = function (elem) {

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
        var top = box.top + scrollTop - clientTop;
        var left = box.left + scrollLeft - clientLeft;

        return { top: Math.round(top), left: Math.round(left)}
    };


    /**** Functions to execute once window has loaded ****/

    window.onload = function () {      // wait for window to load

        /** to lock second navigation box when it's scrolled to top of page (need to wait for window to load or querySelector will return NULL **/

        var lockBox = (function (){
            var sticky = document.querySelector("#navigationBox2");
            var stickyPos = getOffsetRect(sticky).top;      //  distance between top of navigationBox2 and beginning of window

            addEventListener("scroll", function () {       //when navigationBox2 reaches top of screen, add new class with 'fixed' position value
                if (window.pageYOffset > stickyPos) {
                    sticky.classList.add("fixBox");
                } else {
                    sticky.classList.remove("fixBox");
                }
            });
        })();



        /** to have links exec the smoothScroll function **/

       var scrollListener = (function (){
            var link = document.querySelectorAll(".location");

            console.log(link);

            var linkLen = link.length - 1;             // there's double-counting of elements with this class name. good to eliminate in future.
            console.log(linkLen);

            for (i = 0; i < linkLen; i++) {
                link[i].addEventListener("click", function () {

                    if (this.id == "linkLondon") {
                        smoothScroll("#London");
                    }
                    else if (this.id == "linkOxford") {
                        smoothScroll("#Oxford");
                    }
                    else if (this.id == "linkStuttgart") {
                        smoothScroll("#Stuttgart");
                    }
                })
            }

        })();


//        var img = document.createElement("img");
//    img.src = "http://www.google.com/intl/en_com/images/logo_plain.png";
//
//    var src = document.getElementById("header");
//    src.appendChild(img);

        (function LoadPics() {
            var location = "London";
            var loaded = document.querySelectorAll("#London .Img");
            var numberLoaded = loaded.length - 1;
            var img = document.createElement("img");

            var numberOfPics = 20;

            if (numberLoaded < numberOfPics) {
                var i = numberLoaded + 1;
                var limit = i + 4;
                while (i <= limit) {
                    console.log(i);
                    img.src = "pictures/locationPics/" + location + " " + "-" + " " + i + ".jpg";
                    var test = loaded[numberLoaded];
                    test.innerHTML("hello");
//                loaded[numberLoaded].appendChild(img);
                    i += 1;
                }
            }

            console.log(numberLoaded);
            console.log(loaded);
            console.log(loaded[numberLoaded]);
        })();

    };


    /*** Smooth scrolling ***/

    var smoothScroll = function (location) {

        var loc = location;

        var elem = document.querySelector(loc);

        var pos = getOffsetRect(elem).top;     //distance from top of window

        var curr = window.pageYOffset || document.body.scrollTop;     //current position

        var dis = Math.round(pos - curr);

        var jump = Math.round(dis / 10);

        var leaps = dis / jump;

        var timer = 20;

        if (Math.abs(dis) < 100) {
            window.scrollTo(0, pos);
        }
        else if (dis > 0) {       //scroll down
            for (var i = leaps; i > 0; i--) {

                setTimeout(
                        "window.scrollTo(0, " + curr + ")", timer);
//            console.log("curr" + " " + curr);
                timer = timer + 20;
                curr = curr + jump;
//            console.log(timer);
            }
        }
        else if (dis < 0) {       //scroll up
            for (var i = leaps; i > 0; i--) {
                setTimeout(
                        "window.scrollTo(0, " + curr + ")", timer);
//            console.log("curr" + " " + curr);
                timer = timer + 20;
                curr = curr + jump;
//            console.log(timer);

            }
        }
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

})();
