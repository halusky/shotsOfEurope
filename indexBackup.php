<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>ShotsOfEurope</title>
    <link href ="stylesheet3.css" type="text/css" rel="stylesheet" media="all">
    <script type='text/javascript' src='shotsofeurope.js'></script>
</head>
<body>
<div id = "header">
    <div id = "title"> shots of Europe </div>

    <div id = "about"> About </div>

    <div id = "navigation">
        <ul id = "locations">
            <li><a href = "#London"> London  </a></li>
            <li><a href = "#Paris"> Paris </a></li>
            <li><a href = "#Budapest"> Budapest </a></li>
            <li><a href = "#Denmark"> Denmark </a></li>

        </ul>
    </div>
</div>
<div id='container'>

    <!-- London -->

    <h2> London </h2>

    <div id = "picturesContainer">
        <img class = "leaderImg" src = "pictures/Westminster.jpg" alt = "">
        <img class = "leftImg" src = "pictures/Westminster.jpg" alt = "">
        <img class = "rightImg" src = "pictures/Westminster.jpg" alt = "">
        <!--Activated by button -->
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






</body>
</html>