<?php

define('WEB_ROOT', '/');

function redirect($msg){
    session_start();
    $_SESSION['message']=$msg;
    header("Location: " . WEB_ROOT);
    die();
}

if(isset($_POST['email'])){
    $email = $_POST['email'];
    $add = TRUE;
    $file = "emails.txt";
    $handle = fopen($file, "r");
    if ($handle) {
        while (($line = fgets($handle)) !== false) {
            // process the line read.
                if(strtolower($email . "\n") === strtolower($line)){
                    $add = FALSE;
                    break;
                }
        }
        fclose($handle);
    } else {                
        redirect('Error opening the file');
    } 
    if ($add === TRUE){
        $ret = file_put_contents($file, $email . "\n", FILE_APPEND | LOCK_EX);
        if($ret === false) {
            redirect('Error writing the file');
        } else {
            redirect("Success!");
        }
    } else {
        redirect("Email already exists");
    }
} else {
    redirect('No email to process');
}