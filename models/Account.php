<?php

require_once __DIR__ . "/../utility/functions.php";

class Account{
    public $first_name;
    public $last_name;
    public $email;
    public $phone;
    public $password;
    public $house_no;
    public $street;
    public $upazila;
    public $district;
    public $city;
    public $country;
    public $image;
    private $account_no; 
    private $balance;
    public $account_type;

   public function __construct($fname, $lname, $email, $phone, $password, $house_no, $street, $upazila, $district, $city, $country, $image, $account_type, $balance = 0.00) 
   {
        $this->first_name = $fname;
        $this->last_name = $lname;
        $this->email = $email;
        $this->phone = $phone;
        $this->password = $password;
        $this->house_no = $house_no;
        $this->street = $street;
        $this->upazila = $upazila;
        $this->district = $district;
        $this->city = $city;
        $this->country = $country;
        $this->image = $image;
        $this->account_no = createAccountNumber();
        $this->account_type = $account_type;
        $this->balance = $balance;
   }

   public function createAccount($db){
    
    $statement = $db->prepare("INSERT INTO accounts(first_name, last_name, email, phone, password, house_no, street, upazila, district, city, country, image, account_no, account_type, balance) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $statement->bind_param(
        "ssssssssssssssi", 
        $this->first_name, 
        $this->last_name, 
        $this->email,
        $this->phone, 
        $this->password, 
        $this->house_no, 
        $this->street, 
        $this->upazila, 
        $this->district, 
        $this->city, 
        $this->country, 
        $this->image, 
        $this->account_no, 
        $this->account_type, 
        $this->balance
    );

    return $statement->execute();
}

}