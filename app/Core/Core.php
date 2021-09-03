<?php
class Core
{
            public function start($url)
            { 
                 $action=isset($url["action"])?$url["action"]:"index";   

                 $controller=isset($url["page"])?ucfirst($url["page"]."Controller"):"HomeController";

                 if(!class_exists($controller))
                 {
                             $controller="ErrorController";
                 } 
                 call_user_func_array(array(new $controller, $action),array());
                 //echo $controller;    
            }
} 