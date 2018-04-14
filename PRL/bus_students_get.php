<?php

include_once '../BLL/bus_student.php';

//i declared object from the bus class to be used later.
$bus_student = new bus_student();

$rs = $bus_student->bus_students_get();

$array = array(); //this array to store the results from the db
while ($row = $rs->fetch_assoc()) {
    array_push($array, $row);
}

echo json_encode($array);
