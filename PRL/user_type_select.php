<?php

//include_once '../BLL/user_info.php';
//
////i declared object from the user_info class to be used later.
//$user_info = new user_info();
//
//$rs = $user_info->user_type_select($_GET['user_phone']);
//
//echo json_encode($rs->fetch_assoc());
$con=new mysqli("localhost","root","","myschool_db");

$st=$con->prepare("SELECT user_type FROM user_info "
                        . "WHERE user_phone = ?");



$st->bind_param("s", $_GET["user_phone"]);


$st->execute();


$rs=$st->get_result();



$row=$rs->fetch_assoc();


echo json_encode($row);

