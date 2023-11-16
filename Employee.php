<?php

class Employee extends Person
{
    public $office;
    public $salary;
    public $dateHired;

    public function __construct($name, $address, $phone, $email, $office, $salary, $dateHired)
    {
        parent::__construct($name, $address, $phone, $email);
        $this->office = $office;
        $this->salary = $salary;
        $this->dateHired = $dateHired;
    }
}

?>
