<?php

require_once __DIR__ . '/User.php';

class Registrato extends User {

    public $registered = true;
    public $discount = 20;


}