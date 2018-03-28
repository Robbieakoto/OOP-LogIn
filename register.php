<?php
require_once 'core/init.php';

    if(Input::exists()){
       echo Input::get('username');
    }

?>
<form action=""  method ="post">
    <div class="field">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" value="" autocomplete="off">
    </div><br>

    <div class="field">
        <label for="password">Choose a Password</label>
        <input type="password" name="password" id="password>
    </div><br>

    <div class="field">
        <label for="password_again">Repeat Password</label>
        <input type="password" name="password" id="password_again">
    </div><br>

    <div class="field">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" >
    </div><br>

    <input type="submit" value="REGISTER">


</form>