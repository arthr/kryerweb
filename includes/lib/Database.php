<?php
class Database
{
    protected $_dbName;
    private static $_dbHost = MYSQL_HOST ;
    private static $_dbUsername = MYSQL_USER;
    private static $_dbUserPassword = MYSQL_PASS;
     
    private static $_cont  = null;
     
    public function __construct($dbName) {
        if($dbName == 'server'):
            $this->_dbName = BANCO_SERVER;
        elseif($dbName == 'web'):
            $this->_dbName = BANCO_WEB;
        endif;
    }
     
    public function connect()
    {
       // One connection through whole application
       if ( null == self::$_cont )
       {     
        try
        {
          self::$_cont =  new PDO( "mysql:host=".self::$_dbHost.";"."dbname=".$this->_dbName, self::$_dbUsername, self::$_dbUserPassword); 
        }
        catch(PDOException $e)
        {
          die($e->getMessage()); 
        }
       }
       return self::$_cont;
    }
     
    public static function disconnect()
    {
        self::$_cont = null;
    }
}
