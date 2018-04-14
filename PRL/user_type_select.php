<?php

include_once '../BLL/user_info.php';

//i declared object from the user_info class to be used later.
$user_info = new user_info();

$rs = $user_info->area_select_governorate_id($_GET['user_phone']);

echo json_encode($rs->fetch_assoc());
