<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];


loginUser($email, $password);

}

function loginUser($email, $password){
    
     //  Finish this function to check if username and password from file match that which is passed from the form

    $filename =  fopen("../storage/users.csv", "r");
    while (($getdata = fgetcsv($filename)) !== FALSE) {

        if ($getdata[1]== $email && $getdata[2]== $password ) {
            session_start();
            $_SESSION["user"] =  $email;
            header("Location: ../dashboard.php");
        }
        
        else {
            header("Location: ../forms/login.html ");
        }
        
    }




}

