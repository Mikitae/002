<?php

/**
 * Created by PhpStorm.
 * User: Никитка
 * Date: 10.03.2017
 * Time: 23:21
 */
class News_Db
{
    private $mysqli;

    public function __construct()
    {
        $this->mysqli = new mysqli('localhost','root','','php_lessons');

        //echo $this->mysqli->error;
        $this->mysqli->set_charset('utf8');
    }

    public function GetAllNews(){
        $res = $this->mysqli->query("SELECT * FROM `news`");
        while ($new_str = mysqli_fetch_array($res)){
            $back[] = $new_str;
        }
        return $back;
    }


    public function AddNews($text){
        $this->mysqli->query("INSERT INTO `news` (`text`) VALUES ('".$text."')");
        //echo $this->mysqli->error;
    }


}