create DATABASE if not EXISTS bank_management;

use bank_management;

create table accounts(
    id INT PRIMARY KEY AUTO_INCREMENT,
    first_name varchar(100) not null,
    last_name varchar(100) not null,
    email varchar(100) not null unique,
    phone varchar(15) not null unique,
    password varchar(255) not null,
    house_no varchar(255) not null,
    street varchar(255) not null,
    upazila varchar(255) not null,
    district varchar(255) not null,
    city varchar(255) not null,
    country varchar(255) not null,
    image varchar(255) not null,
    account_no varchar(255) not null,
    account_type varchar(255) not null,
    balance decimal(15,2) default(0.00),
);