<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>ADAM PISULA</title>

		<link rel="apple-touch-icon" sizes="57x57" href="favicons/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="favicons/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="favicons/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="favicons/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="favicons/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="favicons/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="favicons/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
        <link rel="manifest" href="favicons/manifest.json">
        <meta name="msapplication-TileColor" content="#333333">
        <meta name="msapplication-TileImage" content="favicons/ms-icon-144x144.png">
        <meta name="theme-color" content="#333333">

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
        <link href="css/portfolio-thumbnail.css" rel="stylesheet" />
    </head>
    <?php
        $directory = 'img/';
        $files = glob($directory.'*.png');

        $random = rand(0, count($files) - 1);

        echo "<script>jQuery(document).ready(function() { jQuery('body').css('background-image', 'url(" . $files[$random] . ")')});</script>";
    ?>
    <body>
        <div class="home">
            <div class="header">
                <h1 class="header">ADAM&nbsp;PISULA</h1>
            </div>
        </div>
        <div class="aboutme">
            <h1 class="header">ABOUT ME</h1>
        </div>
        <div class="portfolio">
            <div class="center">
                <?php
                    $handle = fopen("src/projects.txt", "r") or die("Unable to open projects.txt!");
                    $projects = array();

                    while (($line = fgets($handle)) !== false) {
                        $expline = explode('|', $line);

                        $name = $expline[0];
                        $thumbnail = "projects/".strtolower($name).".png";
                        $address = $expline[1];
                        $github = $expline[2];
                        $authors = $expline[3];
                        $status = $expline[4];
                        
                        if($status == 0)
                            $status = "ONLY AN IDEA &#128161";
                        else if($status == 1)
                            $status = "IN PROGRESS ↺";
                        else
                            $status = "IT'S DONE!";

                        echo "<div class='thumbnail' style='background-image: url(".$thumbnail.")'><div class='filter'></div><a href='".$address." target='_blank'><b>".$name."</b> ↯</a><br>".$authors."<br>".$status."</div>";
                    }

                    fclose($handle);
                ?>
            </div>
        </div>
        <div class="navbar">
            <p class="home">HOME</p>
            <p class="aboutme">ABOUT ME</p>
            <p class="portfolio">PORTFOLIO</p>
        </div>
    </body>
    <script>
        //LOGO
        $(document).ready(function() { resize(); var header = $('h1.header'); header.unselectable = "on"; });
        $(window).resize(function() { resize(); });

        function isMobile() {
            if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4)))
                return true;
            else
                return false;
        }

        function resize() {
            if($(document).width() < 430) {
                $('div.navbar p.home').text('H');
                $('div.navbar p.aboutme').text('AM');
                $('div.navbar p.portfolio').text('P');
            }
            else {
                $('div.navbar p.home').text('HOME');
                $('div.navbar p.aboutme').text('ABOUT ME');
                $('div.navbar p.portfolio').text('PORTFOLIO');
            }

            if($(document).width() < 600)
                $('div.header').html('<img src="src/logo.png" class="header" alt="ADAM PISULA" title="ADAM PISULA" width="125" height="125" />');
            else
                $('div.header').html('<h1 class="header">ADAM&nbsp;PISULA</h1>');
        }
        
        //NAVBAR
        $('div.navbar p.home').click(function() {
            $('html, body').animate({
                scrollTop: $('div.home').offset().top
            }, 'slow');
        });
        
        $('div.navbar p.aboutme, div.header').click(function() {
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