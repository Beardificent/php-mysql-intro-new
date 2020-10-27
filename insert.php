<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];

    if(empty($firstName) || empty($lastName) || empty($email)){
        $status = "All fields are mandatory.";
    }else {
        if(!preg_match('/^[\p{L} ]+$/u',$firstName) || !preg_match('/^[\p{L} ]+$/u',$lastName)){
          $status = "Check your spelling.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $status = "Please enter a valid email";
        }
    }
}

?>


<form action="insert.php" method="post">
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
