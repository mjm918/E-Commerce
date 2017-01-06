<?php
/**
 * Created by PhpStorm.
 * User: mohammad
 * Date: 6/01/17
 * Time: 12:43 PM
 */
?>
<!DOCTYPE html>
    <head>
        <!--For Mobile rendering-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script>
            /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
            function myFunction() {
                var nav = document.getElementById("responsiveTopnav");
                if (nav.className === "topnav") {
                    nav.className += " responsive";
                } else {
                    nav.className = "topnav";
                }
            }
        </script>
    </head>
    <body>
        <ul class="topnav" id="responsiveTopnav">
            <li><a href="#home">Home</a></li>
            <li><a href="#news">News</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#about">About</a></li>
            <li class="icon">
                <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
            </li>
        </ul>
    </body>
    <!--Link for project css-->
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</html>
