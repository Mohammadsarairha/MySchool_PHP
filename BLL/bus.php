<?php

include_once '../DAL/my_db.php';

class bus extends my_db {

    //here by this function i'll get the bus location from the bus
    //db table based on the user phone no.
    public function bus_location_get($driver_phone) {
        return $this->get_data("SELECT lat, lang FROM `bus` "
                        . "WHERE driver_phone = ?"
                        , "s", array(&$driver_phone));
    }

}
