<?php
class HomeController
{
            public function index()
            {
               try {
                     $loader=new \Twig\Loader\FilesystemLoader('app/View');
                     $twig=new \Twig\Environment($loader); 
                     $tmp=$twig->load('home.html');
                     $params=array();
                     $params['name']='Osvaldo';
                     $printCode=$tmp->render($params);
                     echo $printCode;
                     //$list
                   }

               catch(Exception $e)
                   {
                      echo $e->getMessage();
                   }
                
            }
}