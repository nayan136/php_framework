<?php

class Router
{
    public static function route($url){

        //set controller
        $controller = (isset($url[0]) && $url[0]!='')?ucwords($url[0])."Controller":DEFAULT_CONTROLLER;
        array_shift($url);
        $function = (isset($url[0]) && $url[0]!='')?ucwords($url[0]):DEFAULT_FUNCTION;
        array_shift($url);
        $parameter = $url;
        if(method_exists($controller,$function)){
            call_user_func_array([$controller, $function],$parameter);
        }else{
            die("Function not found in class ".$controller);
        }
    }
}