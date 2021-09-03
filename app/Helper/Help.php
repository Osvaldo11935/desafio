<?php
class Help
{
     public static function validate($data)
     {
       $errors=array();   
         
       foreach ($data as $key=>$value )
       {
          //$$key=trim(strip_tags($value));
          if(empty($value))
          {
             $errors[]=array("field"=>$key,"message"=>"O campo ".$key."não pode ser vazio");
          }
       }
       if(isset($data["email"]))
       {
                   if(!filter_var($data["email"],FILTER_VALIDATE_EMAIL))
                   $errors[]=array("field"=>$key,"message"=>"Email invalido");
       }
       return $errors;
     }
     public static function upload($file)
     {
             
            if(isset($file['file'])){
                        //if(count($file['file']))
                        $errors= array();
                        $file_name = $file['file']['name'];
                        $file_size =$file['file']['size'];
                        $file_tmp =$file['file']['tmp_name'];
                        //$file_type=$file['file']['type'];
                        $exts= array("pdf","doc","docx","odt","txt");
                        $startFilename=explode('.',$file['file']['name']);
                        $file_ext=strtolower(end($startFilename));
                        if(in_array($file_ext,$exts)== false){
                           array_push($errors,'extension de ficheiro invalida, extensão permitidas(pdf,doc,docx,odt,txt) .');

                                  
                        }
                        //var_dump($file_size);
                        if($file_size > 512000){
                           array_push($errors,'o tamanho do ficheiro excede os 500Kb');
                          
                        }
                        if(empty($errors)==true){
                                    $path="app/Files/".$file_name;
                                    move_uploaded_file($file_tmp,$path);
                                   return $path;
                        }else{
                              return ($errors);
                        }
                           
                           
                           
                           
            }                  
     }          
}