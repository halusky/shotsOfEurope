<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>ShotsOfEurope</title>
    <link href ="stylesheet.css" type="text/css" rel="stylesheet" media="all">
    <script type='text/javascript' src='shotsofeurope.js'></script>
</head>
<body>


    <div id = "background">
        <img src = "pictures/background.png">
    </div>

    <div id = "headerBox">
        <div id = "logoBox">
                <img src = "pictures/SE3white.png">
                <!--<img src = "pictures/SEblack.png">-->
        </div>

        <div id = "navigationBox">

                <!--<div class = "location" id = "linkLondon"> London </div>-->
                <!--<div class = "location" id = "linkOxford"> Oxford </div>-->
                <!--<div class = "location" id = "linkStuttgart"> Stuttgart </div>-->
                <!--<div class = "location" id = "linkPrague"> Prague </div>-->
                <!--<div class = "location" id = "linkOlomoucs"> Olomoucs </div>-->
                <!--<div class = "location" id = "linkZdiar"> Zdiar </div>-->
                <!--<div class = "location" id = "linkBratislava"> Bratislava </div>-->


                <div class = "location" id = "linkLondon">  <a href = "" onclick="return false;"> London  </a> </div>
                <div class = "location" id = "linkOxford"> <a href = "" onclick="return false;"> Oxford </a> </div>
                <div class = "location" id = "linkStuttgart"> <a href = "#Stuttgart" onclick="return false;"> Stuttgart </a> </div>
                <div class = "location" id = "linkPrague"> <a href = "#Prague" onclick="return false;"> Prague </a> </div>
                <div class = "location" id = "linkOlomoucs"> <a href = "#Olomoucs" onclick="return false;"> Olomoucs </a> </div>
                <div class = "location" id = "linkZdiar"> <a href = "#Zdiar" onclick="return false;"> Zdiar </a> </div>
                <div class = "location" id = "linkBratislava"> <a href = "#Bratislava" onclick="return false;"> Bratislava </a> </div>

        </div>

    </div>

    <div id = "transition">

        <img id = "transitionPic" src = "pictures/SoEgreetings.png">

    </div>

    <!--<button type = "button" onclick = "smoothScroll('#London')"> +firstButton... </button>-->


    <div id = "main">
        <div id = "navigationBox2">
            <div id = "logoBox2">
                <img src = "pictures/SE3black.png">
                <!--<img src = "pictures/SEblack.png">-->
            </div>
            <div id = "box2Items">
                <div class = "location"> <a href = "#London"> London  </a> </div>
                <div class = "location"> <a href = "#Oxford"> Oxford </a> </div>
                <div class = "location"> <a href = "#Stuttgart"> Stuttgart </a> </div>
                <div class = "location"> <a href = "#Prague"> Prague </a> </div>
                <div class = "location"> <a href = "#Olomoucs"> Olomoucs </a> </div>
                <div class = "location"> <a href = "#Zdiar"> Zdiar </a> </div>
                <div class = "location"> <a href = "#Bratislava"> Bratislava </a> </div>
            </div>

        </div>

        <div id="container">



            <div id = "picturesContainer">

                <!--<img class = "leftImg" src = "pictures/Westminster.jpg" alt = "">-->
                <!--<img class = "rightImg" src = "pictures/Westminster.jpg" alt = "">-->
                <!--<!--Activated by button -->
                <!--<div class = "picturesHidden" id = "hiddenLondon">-->
                    <!--<img class = "leftImg" src = "pictures/Westminster.jpg" alt = "">-->
                    <!--<img class = "rightImg" src = "pictures/Westminster.jpg" alt = "">-->
                <!--</div>-->

                <div id = "London">
                    <img class = "Img" src = "pictures/Westminster.jpg" alt = "">
                    <img class = "Img" src = "pictures/Westminster.jpg" alt = "">
                    <img class = "Img" src = "pictures/Westminster.jpg" alt = "">
                    <img class = "Img" src = "pictures/Westminster.jpg" alt = "">

                    <div class = "picturesHidden" id = "hiddenLondon">
                        <img class = "Img" src = "pictures/Westminster.jpg" alt = "">
                        <img class = "Img" src = "pictures/Westminster.jpg" alt = "">
                    </div>
                </div>

            </div>

            <div class = "moreButton" id = "londonButton">

                <!--<button type = "button" onclick = "loadPicsLondon()"> +more... </button>-->
                <button type = "button" onclick = "smoothScroll(#London)"> +more... </button>

            </div>


            <!-- Paris -->

            <h2> Oxford </h2>

            <div id = "picturesContainer">
                <div id = "Oxford">

                    <img class = "Img" src = "pictures/Westminster.jpg" alt = "">
                    <img class = "Img" src = "pictures/Westminster.jpg" alt = "">
                    <img class = "Img" src = "pictures/Westminster.jpg" alt = "">
                    <img class = "Img" src = "pictures/Westminster.jpg" alt = "">
                <!--<img class = "nextImg" src = "pictures/Westminster.jpg" alt = "">-->
            </div>
                </div>
            <div class = "moreButton" id = "oxfordButton">
                <button type = "button"> +more... </button>
            </div>


            <!--<button type = "button" onclick = "smoothScroll('#London')"> +lastButton... </button>-->


        </div>
    </div>





</body>
</html>