<?php
  
    include 'functions.php'; 

    $games = getAllGames();
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Landing Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="landingpage.css">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
</head>
<body >
<div class="container-fluid all"   >
      <div id="bg-up">
        
    </div>
      <div class = "row" >
        <div class="container">
          <div class="row">
            <div>
              <div id="mySidenav" class="sidenav ">
                <a href="javascript:void(0)" class="closebtn text-dark br"  style="font-size:20px;cursor:pointer" onclick="closeNav()">&times;</a>          
                <a class="text-warning"href="http://localhost/Register.php"><h6>Регистрирај се</h6></a>
                <a class="text-warning" href="http://localhost/Login.php"><h6>Најави се</h6></a><hr>
                <a href="https://brainster.co/about"><h6>За нас</h6></a><hr>
                <a href="https://www.facebook.com/pg/brainster.co/photos/?ref=page_internal"><h6>Галерија</h6></a><hr>
                <a href="https://brainster.co/contact"><h6>Контакт</h6></a><hr>
              </div>
              
              <span class="text-warning" style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776; Мени</span>
            </div>  
          </div>
        </div>
        <div class="text-center col-4">
            <img src="logo.png" alt="logo.png" style="height:50px;">  
        </div>
        <div class="text-center col-4">
          <button type="button" class="btn btn-warning btn-sm "><b>Обука за компании</b></button>
        </div>   
        <div class="text-center col-4">  
            <button type="button" class="btn btn-dark btn-sm  text-warning"><b>Вработи наши студенти</b></button>
        </div>   
      </div>  
    <div class="row">
      <div class="container text-white text-center mt-5">
          <div class="row text-center">
            <div class="col-md-12">
                <h6 clas="">Изработено од студентите на академијата
                  <span class="text-warning"><ins>Brainster</ins></span></h6>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <h5>FUTURE-PROOF YOUR ORGANIZATION</h5>
                <p>Find out how to unlock progress in your business. Understand your current state, indetify
                    opportunity areas and prepare to take charge of your organization's future.</p>
            </div>
          </div>
          <div class="row mb-5">
            <div class="col-12">
              <button type="button" class="btn btn-warning"><b>Takethe assessment</b></button>
            </div>
          </div>
      </div> 
    </div>
    
    <div class="row mt-2">
        <div class="container">
          <div class="row ">
            <div>
              <?php
              foreach ($games as $key => $game) {
                  if ($key % 3 == 0) {
                      echo "<div class='row'>";
                  }

                  $img = $game['image_name'];
                  $name = $game['name'];
                  $category = $game['category'];
                  $id = $game['id'];
                  $time = $game['time_frame'];

                  echo "<div class='col-xs-12 col-sm-6 col-md-4 p-2'>";
                  echo "<div class='thumbnail bg-light'>";
                  echo "<img src='$img' alt='Game image' class='img-thumbnail'>";
                  echo "<div class='caption border text-left'>";
                  echo "<h6><b>$name</b></h6>";
                  echo "<b>Категорија:</b> <a href='SinglePage.php?gameId=$id' role='button'> $category</a><br>";
                  echo "<em>Времетраење</em><br>"; //neznam kako da si ispecatm fontaweson 
                  echo " $time";
                  echo "</div>";
                  echo "</div>";
                  echo "</div>";

                  if ($key % 3 == 2) {
                      echo "</div>";
                  }
              }
              ?>
            </div>  
          </div>
        </div>
    </div>

         
  <div id="bg-down" class="row mt-5">
  <div class="row mt-5">
  <div class="container text-white text-center mt-5">
          <div class="row text-center">
            <div class="col-md-12">
                <h6 clas="">Изработено од студентите на академијата
                  <span class="text-warning"><ins>Brainster</ins></span></h6>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-12">
              <h5>FUTURE-PROOF YOUR ORGANIZATION</h5>
                <p>Find out how to unlock progress in your business. Understand your current state, indetify
                    opportunity areas and prepare to take charge of your organization's future.</p>
            </div>
          </div>
          <div class="row mb-5">
            <div class="col-12">
              <button type="button" class="btn btn-warning"><b>Takethe assessment</b></button>
            </div>
          </div>
      </div> 
  <div> 
</div>                  
 <div class="row">
   <div>
     <h6>About us</h6>
  </div>  
  <div>
     <h6>Contact</h6>
  </div>
  <div>
     <h6>Gallery</h6>
  </div>    
</div>
</div>  
  




<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  </body>
</html>