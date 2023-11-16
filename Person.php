<?php

class Person
{
    public $name;
    public $address;
    public $phone;
    public $email;

    public function __construct($name, $address, $phone, $email)
    {
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
        $this->email = $email;
    }

    public function getName()
    {
        return $this->name;
    }
}

?>
