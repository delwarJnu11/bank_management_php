<?php

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

   public function __construct($fname, $lname, $email, $phone, $password, $house_no, $street, $upazila, $district, $city, $country, $image, $account_type, $account_no = "000", $balance = 0.00) 
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
        $this->account_no = $account_no;
        $this->account_type = $account_type;
        $this->balance = $balance;
   }

   public function createAccount($db)
   {
        $statement = $db->prepare("INSERT INTO accounts(first_name, last_name, email, phone, password, house_no, street, upazila, district, city, country, image, account_no, account_type, balance) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        $statement->bind_param(
            "ssssssssssssssd",
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

        $statement->execute();

        // Get the last inserted ID
        $accountId = $db->insert_id;

        // Create the unique account number
        $accountNumber = "10000". strval($accountId);

        // Update the account with the generated account number
        $updateStmt = $db->prepare("UPDATE accounts SET account_no = ? WHERE id = ?");
        $updateStmt->bind_param('si', $accountNumber, $accountId);
        $updateStmt->execute();
    }

    // Show all Accounts Details
    public static function getAllUsersAccount($db)
    {
        $query = "select * from accounts";
        $users = $db->query($query);
        return $users;
    }

    // Get Specific user account
    public static function getSingleUser($id, $db)
    {
        $statement = $db->prepare("SELECT * FROM accounts WHERE id = :id");
        $statement->bind_param("i",$id);
        $user = $statement->execute();
        return $user;
    }

}
