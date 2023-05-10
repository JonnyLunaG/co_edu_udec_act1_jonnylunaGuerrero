<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/co_edu_udec_act1_jonnylunaguerrero/lib/config.php';

class Usuario extends ActiveRecord\Model{
    public static $primary_key = 'cedula';
    public static $has_many = array(array('vehiculos'));
}
