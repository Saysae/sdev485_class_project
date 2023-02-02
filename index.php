<?php

//Turn on error reporting
ini_set('display_error', 1);
error_reporting(E_ALL);
//Require the autoload file
require_once('vendor/autoload.php');
session_start();
$f3 = Base::instance();
$con = new ControllerSchedule($f3);

//Define a default route
$f3->route('GET /', function() {
    //echo '<h1>Hello, World</h1>';

    // create a new view object, a new template, template is a fat-free function
    //and renders the view page
    $GLOBALS['con']->home();
});

$f3->route('GET|POST /form', function() {
    $GLOBALS['con']->form();
});

$f3->route('GET|POST /summary', function() {
    $GLOBALS['con']->summary();
});

//Run fat free
// -> is invoking the run() method in the fat-free
$f3->run();