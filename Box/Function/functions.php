<?php

function getGame($gameId) {
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword ="";
    $dbName = "brainster_box";
    $pdo = new PDO('mysql:host='.$dbServername.';dbname='.$dbName.';charset=utf8', $dbUsername, $dbPassword);

    $stmt = $pdo->prepare("SELECT game.`name`, game.`facility_level`,
                                  game.`description`, game.`time_frame`, game.`group_size` 
                           FROM `game` WHERE game.`id` = ? ");

    $stmt->execute([$gameId]);
    
    $game = $stmt->fetch();

    //$game = [ "name" => $row['name'],
    //           "description" => $row['description'],
    //            "facility_level" => $row['facility_level'],
    //            "time_frame" => $row['time_frame'],
    //            "group_size" => $row['group_size']                      
    //    ];          
    return $game;
}

function getAllGames() {
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword ="";
    $dbName = "brainster_box";
    $pdo = new PDO('mysql:host='.$dbServername.';dbname='.$dbName.';charset=utf8', $dbUsername, $dbPassword);

    $stmt = $pdo->prepare("SELECT game.`id`, game.`name`, game.`category`,
                                  game.`time_frame`, game.`image_name` 
                           FROM `game` ");
    $stmt->execute();
    $games = $stmt->fetchAll();

    return $games;
}
function getSteps($step) {
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword ="";
    $dbName = "brainster_box";
    $pdo = new PDO('mysql:host='.$dbServername.';dbname='.$dbName.';charset=utf8', $dbUsername, $dbPassword);

    $stmt = $pdo->prepare("SELECT step.`description`, step.`step_order` FROM `step` INNER JOIN `game` ON step.`game_id` = game.`id` WHERE game.`id` = ? ORDER BY step.`step_order` ASC");

    $stmt->execute([$step]);
    $data = $stmt->fetchAll();

    //foreach( as $k=>$v){ 
    //    echo "Opis: " . $v['description'];
    //   echo "<br>";
    //    echo "Cekor: " . $v['step_order'];
        
    //    echo "<br>";
    //    echo "<br>";
    //}  

    return $data;
}

