<?php

include_once '../BLL/bus.php';

//i declared object from the bus class to be used later.
$bus = new bus();

$rs = $bus->bus_location_get($_GET['driver_phone']);

echo json_encode($rs->fetch_assoc());
