<?php
class ContactController
{
            public function index()
            {
               try {
                     $loader=new \Twig\Loader\FilesystemLoader('app/View');
                     $twig=new \Twig\Environment($loader); 
                     $tmp=$twig->load('contact.html');
                     $params=array();
                     $params['contacts']=Contacts::get();
                     $printCode=$tmp->render($params);
                     echo $printCode;
                     
                   }

               catch(Exception $e)
                   {
                      echo $e->getMessage();
                   }
                
            }
            public function formContact()
            {
               try {
                     $loader=new \Twig\Loader\FilesystemLoader('app/View');
                     $twig=new \Twig\Environment($loader); 
                     $tmp=$twig->load('addContact.html');
                     $params=array();
                     //$params['contacts']=Contacts::listar();
                     $printCode=$tmp->render($params);
                     echo $printCode;
                     
                   }

               catch(Exception $e)
                   {
                      echo $e->getMessage();
                   }
                
            }
            public function create()
            {
               try {
                     $loader=new \Twig\Loader\FilesystemLoader('app/View');
                     $twig=new \Twig\Environment($loader); 
                     $tmp=$twig->load('addContact.html');
                     $params=array();
                      
                         
                     $error= Help::validate($_POST);
                     $upload= Help::upload($_FILES); 
                     if(!is_array($upload)  &&  count($error)==0)
                     {
                        $create=new Contacts();
                        $create->setName($_POST["name"]);
                        $create->setEmail($_POST["email"]);  
                        $create->setMessage($_POST["message"]);  
                        $create->setTelephone($_POST["telephone"]);  
                        $create->setAddressIp($_SERVER["HTTP_ORIGIN"]); 
                        $create->setDateCreated(date("Y-m-d h:i:s"));       
                        $create->created();
                        //EmailService::SendEMail(array("email"=>"osvaldomateusquissola1234@gmail.com","name"=>"Osvaldo","subject"=>"fsjfsfgjsfgjsfs","body"=>"fggdfgdgdfgdfgd","altBody"=>"hdhfgfgdhddhggdhgdgjgdg"));
                        $params['message']="Dados cadastrado com sucesso";
                     }
                     else
                     {
                        $params['errors']=array("field"=>$error,"upload"=>$upload);
                        //$params['messageupload']=$upload;
                     }
                     $printCode=$tmp->render($params);
                     echo $printCode; 
                   }

               catch(Exception $e)
                   {
                      echo $e->getMessage();
                   }
                
            }
}