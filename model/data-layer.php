<?php
class DataLayer
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
}