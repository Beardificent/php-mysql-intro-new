<?php


require 'Controller/Connection.php';

?>


<form method="post">
    <p>
        <label for="firstName">First Name:</label><br/>
        <input type="text" name="first_name" id="firstName">
    </p>
    <p>
        <label for="lastName">Last Name:</label><br/>
        <input type="text" name="last_name" id="lastName">
    </p>
    <p>
        <label for="emailAddress">Email Address:</label><br/>
        <input type="text" name="email" id="emailAddress">
    </p>
    <p>
        <label for="password">Password:</label><br/>
        <input type="text" name="password" id="password">
    </p>
    <p>
        <label for="passwordConfirm">Confirm password:</label><br/>
        <input type="text" name="passwordConfirm" id="passwordConfirm">
    </p>
    <input type="submit" value="Submit">
</form>
