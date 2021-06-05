<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$autoload['packages'] = array();

$autoload['libraries'] = array('email', 'encryption', 'database', 'session', 'form_validation');

$autoload['drivers'] = array();

$autoload['helper'] = array('url','cookie', 'file');


$autoload['config'] = array();

$autoload['language'] = array();

$autoload['model'] = array('Admin_model');
