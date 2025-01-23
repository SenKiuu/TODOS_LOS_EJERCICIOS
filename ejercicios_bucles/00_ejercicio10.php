<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>diana</title>
    <style>
        .circle {
    width: 100px; 
    height: 100px; 
    border-radius: 100%; 
    }  
    .disparo {
    width: 10px; 
    height: 10px; 
    border-radius: 50%; 
    }dado
    </style>
</head>
    <body>
        <?php 
        $cirulos =  10;

        for($i = 0; $i < $cirulos ; $i++ ){
            $disparo = rand(1,10);
            if($i %2 == 0){
                echo '<div class="circle" style="background-color: red;"></div>';
            }else{
                echo '<div class="circle" style="background-color: white;"></div>';

            }
            echo '<div class="disparo" style="background-color: red;"></div>';


        }
        
        ?>
    </body>
</html>