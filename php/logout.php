<?php

function logout(){

if($_SESSION['user'] == $_POST['email']){
    session_destroy();
    header("location: ../forms/login.html");
    
}

}
logout();


