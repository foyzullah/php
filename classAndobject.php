<?php
class Employee {
    public $name;
    public $age;
    public $education;
    public $address;

    public function info( $name, $age, $education, $address ) {

        $this->name      = $name;
        $this->age       = $age;
        $this->education = $education;
        $this->address   = $address;
        return 'Name: ' . $name . ', Age: ' . $age . ', Education: ' . $education . ', Address: ' . $address;
    }
}

// $foyz = new Employee();
// $foyz->info( 'Foyzullah', '32', 'Bsc in CSE', 'Satkhira' );

class AnotherClass {
    public $name = 'Abdullah';

    public function name() {
        return $this->name;
    }
}

echo ( new AnotherClass )->name();
