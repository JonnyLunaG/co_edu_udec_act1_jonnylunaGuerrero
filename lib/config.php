<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/co_edu_udec_act1_jonnylunaguerrero/lib/php-activerecord/ActiveRecord.php';
ActiveRecord\Config::initialize(function($cfg)
{
   $cfg->set_model_directory($_SERVER['DOCUMENT_ROOT'].'/co_edu_udec_act1_jonnylunaguerrero/model/entidades');
   $cfg->set_connections(
     array(
       'development' => 'mysql://root:@localhost/todovehiculos'       
     )
   );
});
