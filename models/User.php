<?php

class User{
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

    public function __construct($fname, $lname, $email, $phone, $password, $house_no, $street, $upazila, $district, $city, $country, $image)
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
    }
}