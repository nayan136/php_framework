<?php


class View
{
    public static function render($view_name,$data=[])
    {
        $arr = explode(".",$view_name);
//        var_dump($arr);
        $file = implode(DS,$arr);
//        echo $file."<br>";
        if(file_exists(ROOT.DS.'app'.DS.'view'.DS.$file.'.php')){
            require_once(ROOT.DS.'app'.DS.'view'.DS.$file.'.php');
        }else{
            die("View Does not exist");
        }
    }
}