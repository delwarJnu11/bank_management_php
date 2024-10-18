<?php


require_once __DIR__ . "/../config/db_config.php";
require_once __DIR__ ."/../models/Account.php";
require_once __DIR__ . "/../utility/functions.php";

if(isset($_POST['createAccount'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $house_no = $_POST['house_no'];
    $street = $_POST['street'];
    $upazila = $_POST['upazila'];
    $district = $_POST['district'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $image = $_FILES['image'];
    $account_type = $_POST['account_type'];
    $balance = $_POST['balance'];

    // Patterns
    $emailPattern = "/^[a-zA-Z0-9_\.%]{3,80}@[a-z]{3,10}\.[a-z]{2,3}$/";
    $phonePattern = "/^(\+8801|8801|01)[3-9]{1}[0-9]{8}$/";
    $passwordPattern = "/^(?=.*[A-Z])(?=.*[@#$%&*_\-!])(?=.*[0-9])[A-Za-z0-9@#$%&*_\-!]{6,}$/";

    $errors = [];

    // First name Validation
    if(!$first_name){
        $errors['first_name'] = "First Name is required!";
    }

    // Last name Validation
    if(!$last_name){
        $errors['last_name'] = "Last Name is required!";
    }

    // Eamil Validation
    if(!$email){
        $errors['email'] = "Email is required!";
    }else{
        if(!preg_match($emailPattern,$email)){
            $errors['email'] = "Please provide valid email.";
        }
    }

    // Phone Validation
    if(!$phone){
        $errors['phone'] = "Phone Number is required!";
    }else{
        if(!preg_match($phonePattern,$phone)){
            $errors['phone'] = "Please provide valid BD Phone Number.";
        }
    }

    // Password Validation
    if(!$password){
        $errors['password'] = "Password is required!";
    }else{
        if(!preg_match($passwordPattern,$password)){
            $errors['password'] = "password must be contains with uppercase, Number and special Characters.";
        }
    }

    // House No Validation
    if(!$house_no){
        $errors['house_no'] = "House No is required!";
    }

    // Street Validation
    if(!$street){
        $errors['street'] = "Street is required!";
    }

    // Upazila Validation
    if(!$upazila){
        $errors['upazila'] = "Upazila is required!";
    }
    
    // District Validation
    if(!$district){
        $errors['district'] = "District is required!";
    }

    // City Validation
    if(!$city){
        $errors['city'] = "City is required!";
    }

    // Country Validation
    if(!$country){
        $errors['country'] = "Country is required!";
    }

    // Account Type Validation
    if(!$account_type){
        $errors['account_type'] = "Account Type is required!";
    }

    // Image Validation
    if(!$image['name']){
        $errors['image'] = "Image is required!";
    }


    if($first_name && $last_name && preg_match($emailPattern, $email) && preg_match($phonePattern, $phone) && preg_match($passwordPattern, $password) && $house_no && $street && $upazila && $district && $city && $country && $account_type && $image['name']){
        
        $newAccount = new Account($first_name, $last_name,$email, $phone, $password, $house_no, $street, $upazila, $district, $city, $country, $image['name'],$account_type, $balance);

        $newAccount->createAccount($db);


        // upload image and send its name to the database
        $message = uploadImage($image);
    }

    


}

require_once __DIR__ . "/../views/pages/createAccount.view.php";