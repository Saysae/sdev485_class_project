<?php



class Student
{

    private $_token;
    private $_fall;
    private$_winter;
    private $_spring;
    private $_summer;

    private $_advisor;

    public function __construct($token = "", $fall = "", $winter = "",
                                $spring = "", $summer = "", $advisor = "")
    {

        $this->_token = "";
        $this->_fall = "";
        $this->_winter = "";
        $this->_spring = "";
        $this->_summer = "";
        $this->_advisor = "";

    }

    /**
     * @return string
     */
    public function getAdvisor(): string
    {
        return $this->_advisor;
    }

    /**
     * @param string $advisor
     */
    public function setAdvisor(string $advisor): void
    {
        $this->_advisor = $advisor;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->_token;
    }

    /**
     * @param string $token
     */
    public function setToken(string $token): void
    {
        $this->_token = $token;
    }

    /**
     * @return string
     */
    public function getFall(): string
    {
        return $this->_fall;
    }

    /**
     * @param string $fall
     */
    public function setFall(string $fall): void
    {
        $this->_fall = $fall;
    }

    /**
     * @return string
     */
    public function getWinter(): string
    {
        return $this->_winter;
    }

    /**
     * @param string $winter
     */
    public function setWinter(string $winter): void
    {
        $this->_winter = $winter;
    }

    /**
     * @return string
     */
    public function getSpring(): string
    {
        return $this->_spring;
    }

    /**
     * @param string $spring
     */
    public function setSpring(string $spring): void
    {
        $this->_spring = $spring;
    }

    /**
     * @return string
     */
    public function getSummer(): string
    {
        return $this->_summer;
    }

    /**
     * @param string $summer
     */
    public function setSummer(string $summer): void
    {
        $this->_summer = $summer;
    }


}