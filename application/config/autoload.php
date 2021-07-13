<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$autoload['packages'] = array();

$autoload['libraries'] = array('database','session','form_validation','cart');

$autoload['drivers'] = array();

$autoload['helper'] = array('url','html','form','file','string');

$autoload['config'] = array();

$autoload['language'] = array();

$autoload['model'] = array('AdminModel','UserModel');
?>