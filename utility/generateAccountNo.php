<?php

function createAccountNumber(){
    static $count = 0;
    $count++;
    return "10000". strval($count);
    
}
