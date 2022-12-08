<?php

/************************************************************************************************** ***/

namespace App\Connect;


class Singleton
{

    private $_mysqli,
        $_query,
        $_result,
        $_count = 0;

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
//    public static $connection;
//    private function __construct()
//    {
//        return new \mysqli('localhost','root','','friends');
//    }
//    public function connect(): Singleton
//    {
//        if (!isset(self::$connection))
//        {
//            self::$connection = new singleton();
//        }
//        return self::$connection;
//    }

