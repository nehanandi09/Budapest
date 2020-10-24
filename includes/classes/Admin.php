<?php

class Admin
{
    private $con;
    public function __construct($con)
    {
        $this->con = $con;
    }

    public function login($empID, $pw){

        $query = mysqli_query($this->con, "SELECT * FROM admin WHERE EmpID='$empID' AND Password='$pw' ");

        if (mysqli_num_rows($query) == 1) {
            return true;
        } else {
            return false;
        }
    }
}