<?php

if(isset($_POST['bookRoomButton'])){
    $name = $_POST['name'];
    $email= $_POST['email'];
    $guests = $_POST['guests'];
    $place = $_POST['place'];
    $phone = $_POST['phone'];
    $checkIn = $_POST['checkIn'];
    $checkOut = $_POST['checkOut'];

    $roomSuccesful = $room->bookroom($name, $email, $place, $guests, $phone, $checkIn, $checkOut);

    if($roomSuccesful){
        $_SESSION['email']=$email;
        $message="Your room has been booked";
        echo "<script type='text/javascript'>('$message');</script>";
        header("Location: bookRoom.php");
    } 
}