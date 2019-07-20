<?php

if($_SERVER['REQUEST_METHOD'] == "POST") {

    $fn=$ln=$co=$email =$num=$empl=$dep= $text = $password = "";
    $fnerror=$lnerror=$coerror=$emailErr =$numerror =$emlerror=$texterror= $paserror= $emlerror=$deperror= "";


        $dbServername = "localhost";
        $dbUsername = "root";
        $dbPassword ="";
        $dbName = "brainster_box";
        

        $conn = mysqli_connect($dbServername,$dbName, $dbUsername, $dbPassword);  //neznam sto mu e
        
      
        $errors ="";

        if(!empty($_POST['firstname'])){
            $fn = $_POST['firstname'];
        }elseif (empty($fn)){
            $fnerror="Please enter firstname";
            echo "<span style='color:red';>Please enter First name </span><br>";
        }
        if(!empty($_POST['lastname'])){
            $ln=$_POST['lastname'];
        }elseif(empty($ln)){
            $lnerror="Please enter lastname";
            echo "<span style='color:red';>Please enter Last Name </span><br>";
        }
        if(!empty($_POST['company'])){
            $co = $_POST['company'];
        }elseif(empty($co)){
            $coerror = "Please enter your company";
            echo "<span style='color:red';>Please enter Company </span><br>";
        }
        if (!empty($_POST["email"])) {
            $email = $_POST['email'];                    
        } elseif (empty($email)){
            $emailErr = "Please enter email";
            echo "<span style='color:red';>Please enter Email </span><br>";
        }    
        if(!empty($_POST['phone_number'])){
            $num = $_POST['phone_number'];
        }elseif(empty($num)){
            $numerror = "Please enter your phone number";
            echo "<span style='color:red';>Please enter your phone number </span><br>";
        }
        if(isset($_POST['numOfEmployes'])){
            $empl=$_POST['numOfEmployes'];
        }elseif(empty($empl)){
            $emlerror= "Please enter Number Of Employes";
            echo "<span style='color:red';>Please enter your Number Of Employes </span><br>";
        }
        if(!empty($_POST['departmen'])){
            $dep = $_POST['departmen'];
        }elseif(empty($dep)){
            $deperror= "Please enter Departmen";
            echo "<span style='color:red';>Please enter Deparmen </span><br>";
        }
        if(!empty($_POST['password'])){
            $password = $_POST['password'];
        }elseif(empty($dep)){
            $paserror= "Please enter your password";
            echo "<span style='color:red';>Please enter your password </span><br>"; 
        }
        if ($errors == '') {
            $errors ="$fnerror=$lnerror=$coerror=$emailErr =$numerror =$emlerror=$texterror= $paserror= $emlerror=$deperror=\n";
            file_put_contents('errorlog.txt', $errors, FILE_APPEND);

            $SavedEroors = file_get_contents("errorlog.txt");
            $SavedErrorsArray = explode("\n", $SavedEroors);
        }else {
            $sql = "INSERT INTO user(firstname.lastname,company,email,phone_number,numOfEmployes,departmen,message_user,password) 
                                VALUES ('$fn','$ln','$co','$email', '$num','$empl','$dep','$text','$password')"; 
            if ($conn->query($sql) === TRUE) {
            // echo "New record created successfully";
            print_r($_POST);
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();
        }
    }     
         
                           
