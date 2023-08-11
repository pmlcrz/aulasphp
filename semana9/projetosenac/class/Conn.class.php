<?php

class Conn {
    
    public static $Host = HOST;
    public static $User = USER;
    public static $Pass = PASS;
    public static $Dbname = DBNAME;    
    
    private static $Connect = null;
    
    //Conectar com o banco de dados utilizando o PDO
    private static function Conectar(){
        try{
            if(self::$Connect == null):
                self::$Connect = new PDO('mysql:host=' . self::$Host . ';dbname=' . self::$Dbname, self::$User, self::$Pass);
            endif;
        } catch (Exception $e) {
            echo 'Mensagem: ' . $e->getMessage();
            die;
        }
        return self::$Connect;
    }  
    
    function getConn(){
        return self::Conectar();
    }
   
}
