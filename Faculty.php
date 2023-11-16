<?php

class Faculty extends Employee
{
    public $officeHours;
    public $rank;

    public function __construct($name, $address, $phone, $email, $office, $salary, $dateHired, $officeHours, $rank)
    {
        parent::__construct($name, $address, $phone, $email, $office, $salary, $dateHired);
        $this->officeHours = $officeHours;
        $this->rank = $rank;
    }
}

?>
