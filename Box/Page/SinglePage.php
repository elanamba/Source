<?php
  
    include 'functions.php'; 

    $game = getGame($_GET['gameId']);
    $steps = getSteps($_GET['gameId']);
    //var_dump($steps);
    //$games = getAllGames();
?>

<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="X-UA-Compatible" content="text/html"  charset="utf-8">
    <title>Single Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="singlepage.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
</head>
<body >
    <div class="container-fluid">
        <div claas="row">
            <div class="container">
                <div class="row"> 
                    <div > 
                         <?php

                                echo "<b>" . $game['name'] . "</b>";
                                
                                
                                echo "<br>";

                                echo $game['description'];

                                echo "<br>";
                                echo "<br>";

                                echo "<b>Time frame:</b> " . $game['time_frame'] .  " <b> Group size:</b> " . $game['group_size'];  


                                echo "<br>";
                                echo "<br>";
                                echo "<br>";
                                echo "<br>";

        
                                foreach($steps as $k =>$step){
                                    echo "<b>Чекор " . $step['step_order'] . "</b>";
                                    echo "<br>";
                                   
                                    echo $step['description'];
                                    echo "<br>";
                                    echo "<hr>";
                                }
                        ?>
                    </div>        
                </div>    
            </div>        
        </div>        
    </div>
    <!-- se mi se pomestuva ako imam css (i ova neznaes Eleno)-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</body>
</html>