<?php

class my_con {

    public function my_con() {
        $con = new mysqli("localhost", "root", "", 'myschool_db');
        mysqli_query($con, "SET NAMES 'utf8'");
        mysqli_query($con, 'SET CHARACTER SET utf8');
        return $con;
    }

}
