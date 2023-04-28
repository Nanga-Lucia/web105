<?php
include ('database.php'); 
        $firstName = $lastName = $email = $password = $rpassword = " ";
        $fnameErr = $lnameErr = $emailErr = $passwordErr =   $rpassword = " ";
        
        // function test_input($data){
        //   $data = trim($data);
        //   $data = stripslashes($data);
        //   $data = htmlspecialchars($data);
        //   return $data;
        // }

        if($_SERVER['REQUEST_METHOD'] == "POST"){
            if(!empty($_POST['firstName']) OR !empty($_POST['lastName']) OR !empty($_POST['email']) OR !empty($_POST['password'])) {
            if(!preg_match("/^[a-zA-Z-' ]*$/", $firstName)){
                $fnameErr = "Only characters and wide spaces allowed";
              }
              if(!preg_match("/^[a-zA-Z-' ]*$/", $_POST['lastName'])){
                $lnameErr = "Only characters and wide spaces allowed";
              }
              if(strlen($_POST['password'])<8){
                $passwordErr = "Password should not be less than 8 characters";
              }
              if(!preg_match("/[0-9]/", $_POST['password']) && !preg_match("/[a-z]i/", $_POST['password'])){
                $passwordErr = "Password should contain at least one letter";
              }
              if($_POST['password']!== $_POST['rpassword']){
                $rpassword = "password must match";
              }
           }
           $firstName = $_POST['firstName'];
           $lastName = $_POST['lastName'];
           $email = $_POST['email'];
           $password = $_POST['password'];
           $password_hash = password_hash($password, PASSWORD_DEFAULT);

           $query = "SELECT email FROM employer_db WHERE email = '$email'";
           $result = mysqli_query($conn, $query);
           //echo "$result";
           $row = mysqli_num_rows($result);
           if($row>0){
            echo "<script>alert('Email already exist')</script>";
            echo "<script>windon.open('employer_signup.php')</script>";
           }else{
           $insert_query = "INSERT INTO employer_db (first_name, last_name, email, password_hash) VALUES ('$firstName', '$lastName', '$email', '$password_hash')";
           $result_query = mysqli_query($conn, $insert_query);
           if($result_query){
             echo "<script>alert('Registration successful')</script>";
             echo "<script>window.open('index.html')</script>";
         }
       }   
    }   
        
 
       