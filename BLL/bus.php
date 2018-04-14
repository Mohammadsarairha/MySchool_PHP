<?php

include_once '../DAL/my_db.php';

class bus extends my_db {

    //here by this function i'll get the bus location from the bus
    //db table based on the user phone no.
    public function user_type_select($user_phone) {
        return $this->get_data("SELECT user_type FROM user_info "
                        . "WHERE user_phone = ?"
                        , "s", array(&$user_phone));
    }

}
