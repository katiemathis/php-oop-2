<?php

require_once __DIR__ . '/classes.User.php';

class UserRegistrato extends User {

    public $registered = true;
    public $discount = 20;

    public function setDiscount() {
            if ($this->discount = 20) {
                $this->discount = 20;
            }

            else $this->discount = 0;
        }

}