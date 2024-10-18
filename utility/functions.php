<?php

// Create Account Number
function createAccountNumber(){
    static $count = 0;
    $count++;
    return "10000". strval($count);
    
}

// Upload image
function uploadImage($image){
    $name = $image['name'];
    $tmp_name = $image['tmp_name'];
    $size = $image['size'];
    $error = $image['error'];

    $supportedImages = ["jpg", "jpeg", "png", "webp", "avif", "gif", "jfif"];
    $ext = pathinfo($name, PATHINFO_EXTENSION);

    if(!$error){
        if(in_array($ext, $supportedImages)){
            if($size < 1024 * 1024){
                move_uploaded_file($tmp_name, "assets/images/{$name}");
                return;
            }else{
                return "File size too large. max size 1 MB.";
            }
        }else{
            return "File type not supported.";
        }
    }else{
        return "There was an error occured!";
    }
}
