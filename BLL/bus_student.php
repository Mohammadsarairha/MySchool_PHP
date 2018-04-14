<?php

include_once '../DAL/my_db.php';

class bus_student extends my_db {

    //here by this function i'll get the bus students from the bus_student
    //db table.
    public function bus_students_get() {
        return $this->get_all_data('SELECT bus_name, st_name '
                        . 'FROM `bus`, `student` , `bus_student` '
                        . 'WHERE bus_student.driver_phone = bus.driver_phone '
                        . 'AND student.id = bus_student.std_id');
    }

}
