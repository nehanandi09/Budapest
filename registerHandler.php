<?php

function sanitizeFormPassword($inputText)
{
    $inputText = strip_tags($inputText);
    return $inputText;
}

function sanitizeFormString($inputText)
{
    $inputText = strip_tags($inputText); //strips all html elements within a string
    $inputText = str_replace(" ", "", $inputText);
    $inputText = ucfirst(strtolower($inputText)); //first character is upper cased, strtolower converts rest of the characters to lower case
    return $inputText;
}

if(isset($_POST['registerButton'])) {
    
    $firstName = sanitizeFormString($_POST['first_name']);
    $lastName = sanitizeFormString($_POST['last_name']);
    $email = sanitizeFormString($_POST['email']);
    $password = sanitizeFormPassword($_POST['password']);
    $gender = sanitizeFormString($_POST['gender']);
    $date = $_POST['birthdate'];

    $wasSuccessful = $account->register($firstName, $lastName, $email, $password,$gender, $date);

    if ($wasSuccessful) {
        $_SESSION['email'] = $email;
        header("Location: bookRoom.php");
    }
}