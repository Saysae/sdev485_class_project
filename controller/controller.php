<?php

class Controller
{
    private $_f3;

    function __construct($f3)
    {
        $this->_f3 = $f3;
    }

    function submit()
    {

        //if the form has been submitted
        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            var_dump( ($_POST));

            $schedule = $_POST['schedule'];

            $this->_f3->set('studentToken', $schedule);

            //create a new Student object
            $student = new Student();
            $student->setToken($schedule);
            $token = $_POST['token'];
            $this->_f3->set('studentToken', $schedule);

            $student->setFall($schedule);
            $fall = $_POST['fall'];
            $this->_f3->set('studentFall', $schedule);

            $student->setWinter($schedule);
            $winter = $_POST['winter'];
            $this->_f3->set("studentFall", $schedule);


            $student->setSpring($schedule);
            $spring = $_POST['spring'];
            $student->setSpring($schedule);
            $this->_f3->set("studentSpring", $schedule);

            $_SESSION['schedule'] = $schedule;

        }
    }
}