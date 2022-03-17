<?php

class User {

    public $name;
    private $email = 'default';
    public $registered = false;
    public $discount = 0;
    protected $creditCardExpYear;

    public function __construct($name, $email, $registered)
    {
        $this->name = $name;
        $this->email = $email;
        $this->registered = $registered;
        
        
    }

    public function setValidExp($creditCardExpYear) {
        if (is_numeric($creditCardExpYear) && $creditCardExpYear <= 2022) {
            $this->creditCardExpYear = $creditCardExpYear;
        }
        else return 'Error - Card Expired';
    }


    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }

} 