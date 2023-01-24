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

            //create a new Student object
            $student = new Student();

            $advisor= $_POST['advisor'];
            $student->setAdvisor($schedule);
            $this->_f3->set('studentAdvisor', $schedule);

            $fall = $_POST['fall'];
            $student->setFall($schedule);
            $this->_f3->set('studentFall', $schedule);

            $winter = $_POST['winter'];
            $student->setWinter($schedule);
            $this->_f3->set("studentFall", $schedule);

            $spring = $_POST['spring'];
            $student->setSpring($schedule);
            $this->_f3->set("studentSpring", $schedule);


            $allowed_chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            $result_token = "";
            for ($i = 0; $i < 6; $i++)
            {
            $picked = rand(0, strlen($allowed_chars) - 1);
            $result_token = $result_token . $allowed_chars[$picked];
            }

            $student->setToken($result_token);
            $this->_f3->set('studentToken', $schedule);

            $_SESSION['schedule'] = $schedule;

            $view = new Template();
            echo $view->render('views/form.html');

        }
    }
}