<?php

/************************************************************************************************** ***/

namespace App\Connect;


class Singleton
{

    private $_mysqli,
        $_result;

    public static $instance;

    public static function getInstance(): Singleton
    {
        if (!isset(self::$instance)) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }

    public function __construct()
    {
        $this->_mysqli = new \mysqli('localhost', 'root', '', 'friends');
        if ($this->_mysqli->connect_error) {
            die($this->_mysqli->connect_error);
        }
    }

    public function query($sql)
    {
        $this->_result = $this->_mysqli->query($sql);
        return $this->_result;
    }
}
/*************************************************************************************************** ***/

