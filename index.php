<?php

require_once 'core/init.php';

$user = DB::getInstance()->query("SELECT * FROM users");



$user = DB::getInstance()->update('users',4, array(
    'name'=>'Eyram',
    'password'=>'newpassword',
   
));



