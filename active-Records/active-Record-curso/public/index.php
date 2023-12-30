<?php

require '../vendor/autoload.php';

//use app\database\activerecord\Delete;
//use app\database\activerecord\Find;

use app\database\activerecord\FindAll;
//use app\database\activerecord\FindBy;
use app\database\models\User;
//use app\database\activerecord\Insert;
//use app\database\activerecord\Update;

$user = new User;
//$user->firstName = 'Danilo';
//$user->lastName = 'Arantes';

var_dump( $user->execute(new FindAll()));

//var_dump($user);