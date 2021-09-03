<?php

require_once('app/Core/Core.php');
require_once('lib/DataBase/ConnectDb.php');
require_once('app/Models/Contact.php');
require_once('app/Helper/Help.php');
require_once('app/Controllers/ContactController.php');
require_once('app/Controllers/HomeController.php');
require_once('app/Controllers/ErrorController.php');
require_once('vendor/autoload.php');
require_once('app/Services/Email/Email.php');
$tmp=file_get_contents('app/Template/base.html');
ob_start();
  $core=new core();
  $core->start($_GET);
  $printCode=ob_get_contents();
ob_end_clean();
$printScr=str_replace('{{Area_dinamica}}',$printCode,$tmp);
echo $printScr;