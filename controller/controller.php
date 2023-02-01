<?php

class ControllerSchedule
{
    private $_f3;

    function __construct($f3)
    {
        $this->_f3 = $f3;
    }

    function home()
    {
        $view = new Template();
        echo $view->render('views/home.html');
    }
    function submit()
    {

        //if the form has been submitted
        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            $allowed_chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            $result_token = "";
            for ($i = 0; $i < 6; $i++)
            {
                $picked = rand(0, strlen($allowed_chars) - 1);
                $result_token = $result_token . $allowed_chars[$picked];
            }

            $advisor= $_POST['advisor'];
            $fall = $_POST['fall'];
            $winter = $_POST['winter'];
            $spring = $_POST['spring'];
            $summer = $_POST['summer'];

            $this->_f3->set('advisor', $advisor);
            $this->_f3->set('fall', $fall);
            $this->_f3->set('winter', $fall);
            $this->_f3->set('spring', $fall);
            $this->_f3->set('summer', $summer);

/*
            $advisor = "";
            $fall = "";
            $winter = "";
            $spring = "";
            $summer = "";

            if(isset($_POST['advisor']))
            {
                $advisor = $_POST['advisor'];
            }
            if(isset($_POST['fall']))
            {
                $fall = $_POST['fall'];
            }
            if(isset($_POST['winter']))
            {
                $winter = $_POST['winter'];
            }
            if(isset($_POST['spring']))
            {
                $spring = $_POST['spring'];
            }
            if(isset($_POST['summer']))
            {
                $summer = $_POST['summer'];
            }
*/

            $student = new Student();
            $_SESSION['student'] = $student;
/*          $student->setAdvisor($advisor);
            $student->setFall($fall);
            $student->setWinter($winter);
            $student->setSpring($spring);
            $student->setSummer($summer);
            $student->setToken($result_token);
*/

            $_SESSION['student']->setAdvisor($advisor);
            $_SESSION['student']->setFall($fall);
            $_SESSION['student']->setWinter($winter);
            $_SESSION['student']->setSpring($spring);
            $_SESSION['student']->setSummer($summer);
            $_SESSION['student']->setToken($result_token);


            $view = new Template();
            echo $view->render('views/form.html');

        }
    }

    function summary()
    {
        var_dump($_SESSION['schedule']);
        $view = new Template();
        echo $view->render('views/summary.html');
    }


}