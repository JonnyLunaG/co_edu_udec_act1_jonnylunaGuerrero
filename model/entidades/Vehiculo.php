<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/co_edu_udec_act1_jonnylunaGuerrero/lib/config.php';

class Vehiculo extends ActiveRecord\Model{
    public static $belongs_to = array(array('usuario')); 
}
