<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>ShotsOfEurope</title>
    <link href ="stylesheet.css" type="text/css" rel="stylesheet" media="all">
    <script type='text/javascript' src='shotsofeurope.js'></script>

</head>
<body>
    <div id = "landing">

        <div id = "background">
            <img src = "pictures/background.png">

        </div>

        <div id = "headerBox">
            <div id = "logoBox">
                <img src = "pictures/SE3white.png">

            </div>

            <div id = "navigationBox">



                <div class = "location" id = "linkLondon">  <a href = "" onclick="return false;"> London  </a> </div>
                <div class = "location" id = "linkOxford"> <a href = "" onclick="return false;"> Oxford </a> </div>
                <div class = "location" id = "linkStuttgart"> <a href = "#Stuttgart" onclick="return false;"> Stuttgart </a> </div>
                <div class = "location" id = "linkPrague"> <a href = "#Prague" onclick="return false;"> Prague </a> </div>
                <div class = "location" id = "linkOlomoucs"> <a href = "#Olomoucs" onclick="return false;"> Olomoucs </a> </div>
                <div class = "location" id = "linkZdiar"> <a href = "#Zdiar" onclick="return false;"> Zdiar </a> </div>
                <div class = "location" id = "linkBratislava"> <a href = "#Bratislava" onclick="return false;"> Bratislava </a> </div>

            </div>

        </div>

    </div>

    <div id = "transition">

        <img id = "transitionPic" src = "pictures/SoEgreetings.png">

    </div>




    <div id = "main">
        <div id = "navigationBox2">
            <div id = "logoBox2">
                <img src = "pictures/SE3black.png">
                <!--<img src = "pictures/SEblack.png">-->
            </div>
            <div id = "box2Items">

                <div class = "location" id = "linkLondon">  <a href = "" onclick="return false;"> London  </a> </div>
                <div class = "location" id = "linkOxford"> <a href = "" onclick="return false;"> Oxford </a> </div>
                <div class = "location" id = "linkStuttgart"> <a href = "#Stuttgart" onclick="return false;"> Stuttgart </a> </div>
                <div class = "location" id = "linkPrague"> <a href = "#Prague" onclick="return false;"> Prague </a> </div>
                <div class = "location" id = "linkOlomoucs"> <a href = "#Olomoucs" onclick="return false;"> Olomoucs </a> </div>
                <div class = "location" id = "linkZdiar"> <a href = "#Zdiar" onclick="return false;"> Zdiar </a> </div>
                <div class = "location" id = "linkBratislava"> <a href = "#Bratislava" onclick="return false;"> Bratislava </a> </div>
            </div>

        </div>

        <div id="container">

            <div id = "picturesContainer">
                <h1> London </h1>
                <div id = "London">
                    <div id = "imgLeft">
                        <img class = "Img" src = "pictures/locationPics/London - 1.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/London - 2.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/London - 3.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/London - 4.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/London - 5.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/London - 6.jpg" alt = "">
                    </div>
                    <div id = "imgRight">

                        <img class = "Img" src = "pictures/locationPics/London - 8.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/London - 7.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/London - 9.jpg" alt = "">
                    </div>

                    <!--<div class = "picturesHidden" id = "hiddenLondon">-->
                        <!--<img class = "Img" src = "pictures/locationPics/London - 10.jpg" alt = "">-->
                        <!--<img class = "Img" src = "pictures/locationPics/London - 11.jpg" alt = "">-->
                    <!--</div>-->
                </div>

            </div>

            <div class = "moreButton" id = "londonButton">
                <button type = "button" onclick = "loadPicsLondon()"> +more... </button>
            </div>

            <h2> Oxford </h2>

            <div id = "picturesContainer">
                <h1> Oxford </h1>
                <div id = "Oxford">
                    <div id = "imgLeft">
                        <img class = "Img" src = "pictures/locationPics/Oxford - 1.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Oxford - 2.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Oxford - 5.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Oxford - 6.jpg" alt = "">
                    </div>
                    <div id = "imgRight">
                        <img class = "Img" src = "pictures/locationPics/Oxford - 3.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Oxford - 4.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Oxford - 7.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Oxford - 8.jpg" alt = "">
                    </div>
                <!--<img class = "nextImg" src = "pictures/Westminster.jpg" alt = "">-->
            </div>
                </div>
            <div class = "moreButton" id = "oxfordButton">
                    <button type = "button" onclick = ""> +more... </button>
            </div>

            <h2> Stuttgart </h2>

            <div id = "picturesContainer">
                <h1> Stuttgart </h1>
                <div id = "Stuttgart">
                    <div id = "imgLeft">
                        <img class = "Img" src = "pictures/locationPics/Stuttgart - 1.jpg" alt = "">
                    </div>
                    <div id = "imgRight">
                        <img class = "Img" src = "pictures/locationPics/Stuttgart - 2.jpg" alt = "">
                    </div>
                </div>
            </div>

            <h2> Prague </h2>

            <div id = "picturesContainer">
                <h1> Prague </h1>
                <div id = "Prague">
                    <div id = "imgLeft">
                        <img class = "Img" src = "pictures/locationPics/Prague - 1.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Prague - 2.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Prague - 5.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Prague - 6.jpg" alt = "">
                    </div>
                    <div id = "imgRight">
                        <img class = "Img" src = "pictures/locationPics/Prague - 3.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Prague - 4.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Prague - 7.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Prague - 8.jpg" alt = "">
                    </div>
                    <!--<img class = "nextImg" src = "pictures/Westminster.jpg" alt = "">-->
                </div>
            </div>
            <div class = "moreButton" id = "oxfordButton">
                <button type = "button" onclick = ""> +more... </button>
            </div>

            <h2> Olomoucs </h2>

            <div id = "picturesContainer">
                <h1> Olomoucs </h1>
                <div id = "Olomoucs">
                    <div id = "imgLeft">
                        <img class = "Img" src = "pictures/locationPics/Olomoucs - 1.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Olomoucs - 2.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Olomoucs - 5.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Olomoucs - 6.jpg" alt = "">
                    </div>
                    <div id = "imgRight">
                        <img class = "Img" src = "pictures/locationPics/Olomoucs - 3.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Olomoucs - 4.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Olomoucs - 7.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Olomoucs - 8.jpg" alt = "">
                    </div>
                    <!--<img class = "nextImg" src = "pictures/Westminster.jpg" alt = "">-->
                </div>
            </div>
            <div class = "moreButton" id = "oxfordButton">
                <button type = "button" onclick = ""> +more... </button>
            </div>

            <h2> Zdiar </h2>

            <div id = "picturesContainer">
                <h1> Zdiar </h1>
                <div id = "Zdiar">
                    <div id = "imgLeft">
                        <img class = "Img" src = "pictures/locationPics/Zdiar - 1.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Zdiar - 2.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Zdiar - 5.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Zdiar - 6.jpg" alt = "">
                    </div>
                    <div id = "imgRight">
                        <img class = "Img" src = "pictures/locationPics/Zdiar - 3.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Zdiar - 4.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Zdiar - 7.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Zdiar - 8.jpg" alt = "">
                    </div>
                    <!--<img class = "nextImg" src = "pictures/Westminster.jpg" alt = "">-->
                </div>
            </div>
            <div class = "moreButton" id = "oxfordButton">
                <button type = "button" onclick = ""> +more... </button>
            </div>

            <h2> Bratislava </h2>

            <div id = "picturesContainer">
                <h1> Bratislava </h1>
                <div id = "Bratislava">
                    <div id = "imgLeft">
                        <img class = "Img" src = "pictures/locationPics/Bratislava - 1.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Bratislava - 2.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Bratislava - 5.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Bratislava - 6.jpg" alt = "">
                    </div>
                    <div id = "imgRight">
                        <img class = "Img" src = "pictures/locationPics/Bratislava - 3.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Bratislava - 4.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Bratislava - 7.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Bratislava - 8.jpg" alt = "">
                    </div>
                    <!--<img class = "nextImg" src = "pictures/Westminster.jpg" alt = "">-->
                </div>
            </div>
            <div class = "moreButton" id = "oxfordButton">
                <button type = "button" onclick = ""> +more... </button>
            </div>

            <h2> Budapest </h2>

            <div id = "picturesContainer">
                <h1> Budapest </h1>
                <div id = "Budapest">
                    <div id = "imgLeft">
                        <img class = "Img" src = "pictures/locationPics/Budapest - 1.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Budapest - 2.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Budapest - 5.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Budapest - 6.jpg" alt = "">
                    </div>
                    <div id = "imgRight">
                        <img class = "Img" src = "pictures/locationPics/Budapest - 3.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Budapest - 4.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Budapest - 7.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Budapest - 8.jpg" alt = "">
                    </div>
                    <!--<img class = "nextImg" src = "pictures/Westminster.jpg" alt = "">-->
                </div>
            </div>
            <div class = "moreButton" id = "oxfordButton">
                <button type = "button" onclick = ""> +more... </button>
            </div>

            <h2> Pecs </h2>

            <div id = "picturesContainer">
                <h1> Pecs </h1>
                <div id = "Pecs">
                    <div id = "imgLeft">
                        <img class = "Img" src = "pictures/locationPics/Pecs - 1.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Pecs - 2.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Pecs - 5.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Pecs - 6.jpg" alt = "">
                    </div>
                    <div id = "imgRight">
                        <img class = "Img" src = "pictures/locationPics/Pecs - 3.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Pecs - 4.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Pecs - 7.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Pecs - 8.jpg" alt = "">

                    </div>
                    <!--<img class = "nextImg" src = "pictures/Westminster.jpg" alt = "">-->
                </div>
            </div>
            <div class = "moreButton" id = "oxfordButton">
                <button type = "button" onclick = ""> +more... </button>
            </div>

            <h2> Paris </h2>

            <div id = "picturesContainer">
                <h1> Paris </h1>
                <div id = "Paris">
                    <div id = "imgLeft">
                        <img class = "Img" src = "pictures/locationPics/Paris - 1.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Paris - 2.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Paris - 5.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Paris - 6.jpg" alt = "">
                    </div>
                    <div id = "imgRight">
                        <img class = "Img" src = "pictures/locationPics/Paris - 3.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Paris - 4.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Paris - 7.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Paris - 8.jpg" alt = "">
                    </div>
                    <!--<img class = "nextImg" src = "pictures/Westminster.jpg" alt = "">-->
                </div>
            </div>
            <div class = "moreButton" id = "oxfordButton">
                <button type = "button" onclick = ""> +more... </button>
            </div>

            <h2> Heidelberg </h2>

            <div id = "picturesContainer">
                <h1> Heidelberg </h1>
                <div id = "Heidelberg">
                    <div id = "imgLeft">
                        <img class = "Img" src = "pictures/locationPics/Heidelberg - 1.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Heidelberg - 2.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Heidelberg - 5.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Heidelberg - 6.jpg" alt = "">
                    </div>
                    <div id = "imgRight">
                        <img class = "Img" src = "pictures/locationPics/Heidelberg - 3.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Heidelberg - 4.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Heidelberg - 7.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Heidelberg - 8.jpg" alt = "">
                    </div>
                    <!--<img class = "nextImg" src = "pictures/Westminster.jpg" alt = "">-->
                </div>
            </div>
            <div class = "moreButton" id = "oxfordButton">
                <button type = "button" onclick = ""> +more... </button>
            </div>

            <h2> Frankfurt </h2>

            <div id = "picturesContainer">
                <h1> Frankfurt </h1>
                <div id = "Frankfurt">
                    <div id = "imgLeft">
                        <img class = "Img" src = "pictures/locationPics/Frankfurt - 1.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Frankfurt - 2.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Frankfurt - 5.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Frankfurt - 6.jpg" alt = "">
                    </div>
                    <div id = "imgRight">
                        <img class = "Img" src = "pictures/locationPics/Frankfurt - 3.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Frankfurt - 4.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Frankfurt - 7.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Frankfurt - 8.jpg" alt = "">
                    </div>
                    <!--<img class = "nextImg" src = "pictures/Westminster.jpg" alt = "">-->
                </div>
            </div>
            <div class = "moreButton" id = "oxfordButton">
                <button type = "button" onclick = ""> +more... </button>
            </div>

            <h2> Istanbul </h2>

            <div id = "picturesContainer">
                <h1> Istanbul </h1>
                <div id = "Istanbul">
                    <div id = "imgLeft">
                        <img class = "Img" src = "pictures/locationPics/Istanbul - 1.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Istanbul - 2.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Istanbul - 5.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Istanbul - 6.jpg" alt = "">
                    </div>
                    <div id = "imgRight">
                        <img class = "Img" src = "pictures/locationPics/Istanbul - 3.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Istanbul - 4.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Istanbul - 7.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Istanbul - 8.jpg" alt = "">
                    </div>
                    <!--<img class = "nextImg" src = "pictures/Westminster.jpg" alt = "">-->
                </div>
            </div>
            <div class = "moreButton" id = "oxfordButton">
                <button type = "button" onclick = ""> +more... </button>
            </div>

            <h2> Bulgaria </h2>

            <div id = "picturesContainer">
                <h1> Bulgaria </h1>
                <div id = "Bulgaria">
                    <div id = "imgLeft">
                        <img class = "Img" src = "pictures/locationPics/Bulgaria - 1.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Bulgaria - 2.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Bulgaria - 5.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Bulgaria - 6.jpg" alt = "">
                    </div>
                    <div id = "imgRight">
                        <img class = "Img" src = "pictures/locationPics/Bulgaria - 3.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Bulgaria - 4.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Bulgaria - 7.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Bulgaria - 8.jpg" alt = "">
                    </div>
                    <!--<img class = "nextImg" src = "pictures/Westminster.jpg" alt = "">-->
                </div>
            </div>
            <div class = "moreButton" id = "oxfordButton">
                <button type = "button" onclick = ""> +more... </button>
            </div>

            <h2> Thessaloniki </h2>

            <div id = "picturesContainer">
                <h1> Thessaloniki </h1>
                <div id = "Thessaloniki">
                    <div id = "imgLeft">
                        <img class = "Img" src = "pictures/locationPics/Thessaloniki - 1.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Thessaloniki - 2.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Thessaloniki - 5.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Thessaloniki - 6.jpg" alt = "">
                    </div>
                    <div id = "imgRight">
                        <img class = "Img" src = "pictures/locationPics/Thessaloniki - 3.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Thessaloniki - 4.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Thessaloniki - 7.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Thessaloniki - 8.jpg" alt = "">
                    </div>
                    <!--<img class = "nextImg" src = "pictures/Westminster.jpg" alt = "">-->
                </div>
            </div>
            <div class = "moreButton" id = "oxfordButton">
                <button type = "button" onclick = ""> +more... </button>
            </div>

            <h2> Athens </h2>

            <div id = "picturesContainer">
                <h1> Athens </h1>
                <div id = "Athens">
                    <div id = "imgLeft">
                        <img class = "Img" src = "pictures/locationPics/Athens - 1.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Athens - 2.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Athens - 5.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Athens - 6.jpg" alt = "">
                    </div>
                    <div id = "imgRight">
                        <img class = "Img" src = "pictures/locationPics/Athens - 3.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Athens - 4.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Athens - 7.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Athens - 8.jpg" alt = "">
                    </div>
                    <!--<img class = "nextImg" src = "pictures/Westminster.jpg" alt = "">-->
                </div>
            </div>
            <div class = "moreButton" id = "oxfordButton">
                <button type = "button" onclick = ""> +more... </button>
            </div>

            <h2> Rome </h2>

            <div id = "picturesContainer">
                <h1> Rome </h1>
                <div id = "Rome">
                    <div id = "imgLeft">
                        <img class = "Img" src = "pictures/locationPics/Rome - 1.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Rome - 2.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Rome - 5.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Rome - 6.jpg" alt = "">
                    </div>
                    <div id = "imgRight">
                        <img class = "Img" src = "pictures/locationPics/Rome - 3.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Rome - 4.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Rome - 7.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Rome - 8.jpg" alt = "">
                    </div>
                    <!--<img class = "nextImg" src = "pictures/Westminster.jpg" alt = "">-->
                </div>
            </div>
            <div class = "moreButton" id = "oxfordButton">
                <button type = "button" onclick = ""> +more... </button>
            </div>

            <h2> Copenhagen </h2>

            <div id = "picturesContainer">
                <h1> Copenhagen </h1>
                <div id = "Copenhagen">
                    <div id = "imgLeft">
                        <img class = "Img" src = "pictures/locationPics/Copenhagen - 1.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Copenhagen - 2.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Copenhagen - 5.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Copenhagen - 6.jpg" alt = "">
                    </div>
                    <div id = "imgRight">
                        <img class = "Img" src = "pictures/locationPics/Copenhagen - 3.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Copenhagen - 4.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Copenhagen - 7.jpg" alt = "">
                        <img class = "Img" src = "pictures/locationPics/Copenhagen - 8.jpg" alt = "">
                    </div>
                    <!--<img class = "nextImg" src = "pictures/Westminster.jpg" alt = "">-->
                </div>
            </div>
            <div class = "moreButton" id = "oxfordButton">
                <button type = "button" onclick = ""> +more... </button>
            </div>

        </div>
    </div>





</body>
</html>