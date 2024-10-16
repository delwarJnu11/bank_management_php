<?php

require_once __DIR__ ."/../models/Account.php";

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

}

require_once __DIR__ . "/../views/pages/createAccount.view.php";