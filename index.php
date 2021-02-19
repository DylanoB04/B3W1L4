<?php 
    date_default_timezone_set("Europe/Amsterdam");

    $current_time=date('h:i');
    $hour=date('H');

    if($hour>='6'&&$hour<'12'){
        $class="images/morning.png";
        $text="Goede morgen!";
    }elseif($hour>='12'&&$hour<'18'){
        $class="images/afternoon.png";
        $text="Goede middag!";
    }elseif($hour>='18'&&$hour<'23'){
        $class="images/evening.png";
        $text="Goede avond!";
    }else{
        $class="images/night.png";
        $text="Goede nacht!";
    }
?>

<!DOCTYPE HTML>
<html lang="EN">
    <head>
        <meta charset="UTF-8">
        <title>B3W1L4</title>
    </head>
        <body>

            <div id="container">
                <h1 id="text"><?php echo "$text"?></h1>
                <h1 id="text2">het is nu <?php echo "$current_time"?></h1>
            </div>
        
        </body>

        <style>
            @font-face{
                font-family: "myFont";
                src: url('altoysitalic.ttf');
            }
            body{
                background-image: url('<?php echo $class ?>');
                background-size: cover;
            }

            #text{
                color: white;
                text-align: center;
                padding-top: 13%;
                font-size: 60px;
                font-family: "myFont";
            }

            #text2{
                color: white;
                text-align: center;
                font-size: 60px;
                font-family: "myFont";
            }
        </style>
</html>