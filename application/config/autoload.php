<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

$autoload['packages'] = array();
$autoload['libraries'] = array('database','session','encryption');
$autoload['drivers'] = array();
$autoload['helper'] = array('url','form','AN_fungsi','file');
$autoload['config'] = array();
$autoload['language'] = array();
$autoload['model'] = array('Mlogin');
