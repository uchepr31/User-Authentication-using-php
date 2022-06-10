<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

registerUser($username,  $email,  $password);

}

function registerUser($username, $email, $password){
    //save data into the file
    
    $file_open = fopen("../storage/users.csv", "a");
    $no_rows = count(file("../storage/users.csv"));
    if($no_rows > 1)
    {
    $no_rows = ($no_rows - 1) + 1;
    }

   fputcsv($file_open, $_POST); //this is used to convert the opened file into a .csv file format and then write something into the file
   fclose($file_open);
}
echo "$username\n you have successfully registered";


