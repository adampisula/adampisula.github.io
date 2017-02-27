<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>ADAM PISULA</title>

        <!--JS-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

        <!--CSS-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400&amp;subset=latin-ext" rel="stylesheet">
        <link href="css/header.css" rel="stylesheet" />
        <link href="css/body.css" rel="stylesheet" />
        <link href="css/navbar.css" rel="stylesheet" />
        <link href="css/home.css" rel="stylesheet" />
        <link href="css/aboutme.css" rel="stylesheet" />
        <link href="css/portfolio.css" rel="stylesheet" />
    </head>
    <?php
        $directory = 'img/';
        $files = glob($directory.'*.png');

        $random = rand(0, count($files) - 1);

        echo "<script>jQuery(document).ready(function() { jQuery('body').css('background-image', 'url(" . $files[$random] . ")')});</script>";
    ?>
    <body>
        <div class="home">
            <h1 class="header">ADAM PISULA</h1>
        </div>
        <div class="aboutme">
            <h1 class="header">ABOUT ME</h1>
        </div>
        <div class="portfolio">
            <h1 class="header">PORTFOLIO</h1>
        </div>
        <div class="navbar">
            <p class="home">HOME</p>
            <p class="aboutme">ABOUT ME</p>
            <p class="portfolio">PORTFOLIO</p>
        </div>
    </body>
    <script>
        $('div.navbar p.home').click(function() {
            $('html, body').animate({
                scrollTop: $('div.home').offset().top
            }, 'slow');
        });
        
        $('div.navbar p.aboutme').click(function() {
            $('html, body').animate({
                scrollTop: $('div.aboutme').offset().top
            }, 'slow');
        });

        $('div.navbar p.portfolio').click(function() {
            $('html, body').animate({
                scrollTop: $('div.portfolio').offset().top
            }, 'slow');
        });
    </script>
</html>