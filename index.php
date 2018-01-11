<?php

//Require autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();

//Define a default route
$f3->route('GET /', function(){
    echo "Pet Home";
});

// Run fat free
$f3->run();