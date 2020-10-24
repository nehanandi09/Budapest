<?php

class Room
{
    private $con;
    public function __construct($con)
    {
        $this->con = $con;
    }

    public function bookroom($name, $em, $place, $guests, $phone, $checkIn, $checkOut){

        $result = mysqli_query($this->con, "INSERT INTO room VALUES ('','$name', '$em', '$place', '$guests','$phone','$checkIn', $checkOut)");

        return $result;
    }

}