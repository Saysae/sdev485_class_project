<?php
class ScheduleData
{
    /**
     * This field represents our database connection object
     * @var PDO
     */
    private $_dbh;

    /** data-layer constructor
     *
     */
    function __construct()
    {
        //TODO: Move try-catch from config.php to here
        require_once($_SERVER['DOCUMENT_ROOT'] . '/../config.php');
        $this->_dbh = $_dbh;
        $this->_dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->_dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }

    function saveSchedule($schedule)
    {
        $sql = "INSERT INTO schedule_class (token, fall, winter, spring, summer) 
                VALUES (:token, :fall, :winter, :spring, :summer)";

        $statement = $this->_dbh->prepare($sql);

        $token = $schedule->getToken();
        $fall = $schedule->getFall();
        $winter = $schedule->getWinter();
        $spring = $schedule->getSpring();
        $summer = $schedule->getSummer();

        $statement->bindParam(':token', $token, PDO::PARAM_STR);
        $statement->bindParam(':token', $fall, PDO::PARAM_STR);
        $statement->bindParam(':token', $winter, PDO::PARAM_STR);
        $statement->bindParam(':token', $spring, PDO::PARAM_STR);
        $statement->bindParam(':token', $summer, PDO::PARAM_STR);

        $statement->execute();

        $id = $this->_dbh->lastInsertId();
        echo "Row insert $id";
        return $id;

    }

    function viewSchedule()
    {
        //1. Define query
        $sql = "SELECT * FROM schedule_class";

        //2. Prepare statement
        $statement = $this->_dbh->prepare($sql);

        //3. Execute the prepapred statement
        $statement->execute();

        //4. Process the result
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}