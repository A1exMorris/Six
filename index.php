<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 24.05.2018
 * Time: 14:54
 */

//FrontController

//1. ����� ���������
ini_set('display_errors',1);
error_reporting(E_ALL);

//2. ����������� ������ �������
define('ROOT',dirname(__FILE__));
require_once (ROOT.'/components/Router.php');
require_once (ROOT."/components/Db.php");

//3. ��������� ���������� � ��



//4. ����� Router
$router=new Router();
$router->run();