<?php

class Staff extends Employee
{
    public $title;

    public function __construct($name, $address, $phone, $email, $office, $salary, $dateHired, $title)
    {
        parent::__construct($name, $address, $phone, $email, $office, $salary, $dateHired);
        $this->title = $title;
    }
}

?>
