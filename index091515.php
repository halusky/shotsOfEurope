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

                <div class = "location"> <a href = "#London"> London  </a> </div>
                <div class = "location"> <a href = "#Oxford"> Oxford </a> </div>
                <div class = "location"> <a href = "#Stuttgart"> Stuttgart </a> </div>
                <div class = "location"> <a href = "#Prague"> Prague </a> </div>
                <div class = "location"> <a href = "#Olomoucs"> Olomoucs </a> </div>
                <div class = "location"> <a href = "#Zdiar"> Zdiar </a> </div>
                <div class = "location"> <a href = "#Bratislava"> Bratislava </a> </div>

        </div>


    </div>

    <div id = "transition"> Hello (in every language)  </div>

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

            <!-- London -->

            <div id = "picturesContainer">

                <!--<img class = "leftImg" src = "pictures/Westminster.jpg" alt = "">-->
                <!--<img class = "rightImg" src = "pictures/Westminster.jpg" alt = "">-->
                <!--&lt;!&ndash;Activated by button &ndash;&gt;-->
                <!--<div class = "picturesHidden" id = "hiddenLondon">-->
                    <!--<img class = "leftImg" src = "pictures/Westminster.jpg" alt = "">-->
                    <!--<img class = "rightImg" src = "pictures/Westminster.jpg" alt = "">-->
                <!--</div>-->


                <img class = "Img" src = "pictures/Westminster.jpg" alt = "">
                <img class = "Img" src = "pictures/Westminster.jpg" alt = "">
                <img class = "Img" src = "pictures/Westminster.jpg" alt = "">
                <img class = "Img" src = "pictures/Westminster.jpg" alt = "">

                <div class = "picturesHidden" id = "hiddenLondon">
                    <img class = "leftImg" src = "pictures/Westminster.jpg" alt = "">
                    <img class = "rightImg" src = "pictures/Westminster.jpg" alt = "">
                </div>


            </div>

            <div class = "moreButton" id = "londonButton">

                <button type = "button" onclick = "loadPicsLondon()"> +more... </button>

            </div>


            <!-- Paris -->

            <h2> Paris </h2>

            <div id = "picturesContainer">
                <img class = "leaderImg" src = "pictures/Westminster.jpg" alt = "">
                <img class = "leftImg" src = "pictures/Westminster.jpg" alt = "">
                <img class = "rightImg" src = "pictures/Westminster.jpg" alt = "">
                <!--<img class = "nextImg" src = "pictures/Westminster.jpg" alt = "">-->

            </div>

            <div class = "moreButton" id = "oxfordButton">
                <button type = "button"> +more... </button>
            </div>



        </div>
    </div>





</body>
</html>