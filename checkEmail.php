<?php
/**
 *Author: Richard Cerone
 *Checks that the entered email is correct.
 **/
   include 'db.php'; //Import database info.
    
    //Query database for match on email entered.
    $result = mysqli_query($connect, "SELECT * FROM user WHERE email ='".$_POST['email']."' LIMIT 1");
    
    //Check that database isn't empty.
    if(mysqli_num_rows($result) > 0)
    {
        $row = mysqli_fetch_assoc($result); //Fetch row info from database.
        $match = true; 
        $message = "Login successful"; //This message string should never be used.
    }
    else //No match found.
    {
        $match = false; 
        $message = "Email was incorrect, please try again.";
    }
    
    //Create array to store approved credentials.
    $array = array(
            "match" => $match,
            "message" => $message
    );
    
    //Send data back to index.php for processing.
    echo json_encode($array);
?> 