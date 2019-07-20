<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="register.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="main.js"></script>
</head>
<body >
<div class = "container-fluid ">
    <div class="row">
        <img src="logo.png" alt="logo.png" style="height:70px;"><br>
        <div class="row mt-5">
       <div class="container mt-5 text-warning">
            <div class="row mr-3">
                <h3 >Let's learn</h3><br>
            </div>
            <div class="row">                   
                <h4>Let's play</h4><br>
            </div>        
            <div class="row">                    
                <h2>and win</h2>
            </div>
       </div>             
    </div>
       
            <div class="container"> 
            <div class="row">
                <form class="form-group contact-form" method = "POST" action="fun_reg.php">
                    
                        
                            <input type="text" name="firstname" class="form-control " placeholder="First Name" readonly><br>
                       
                            <input type="password" name="pass" class="form-control"placeholder="Password" readonly>

                            <button class="btn  btn-warning mt-3 float-right" type="submit" name="submit" value="Submit"><b>Submit</b></button>
                                            
                    
                </form>
            </div>    
    </div> 
                         
</div>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>