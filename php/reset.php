<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $newpassword = $_POST['password'];

resetPassword($email, $newpassword);
}

function resetPassword($email, $newpassword){
$csv_file = array_map('str_getcsv', file('../storage/users.csv'));


$csv_file_email_column = array_column($csv_file, 1);

$search_the_array = array_search($email, $csv_file_email_column) ;  // used to search the array

if (($search_the_array = array_search($email, $csv_file_email_column)) !== FALSE){

     $new_row = ($csv_file[$search_the_array]);      // take the result of the search and store it in the variable called $new_row 
 
     // modify the password here
    $new_row[2] = $newpassword;      
      
    $updated = $new_row ;     

    $csv_file[$search_the_array] = $updated;
    echo'Password changed successfully';
}

else {
        echo'User does not exist';
    }


$output = fopen('../storage/users.csv', 'w'); 
foreach ($csv_file as $insert) {
    fputcsv($output, $insert);
}

fclose($output);

} 


                    
                
                    
 













  
                      
            
            
                
               


                
                
                   
               
        
       
   
    



  
 










