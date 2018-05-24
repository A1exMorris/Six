<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 24.05.2018
 * Time: 14:54
 */
/*$string ='Ó÷åíèê ñèäèò çà ïàğòîé';
$pattern='/Óà/';

$result=preg_match($pattern,$string);

var_dump($result);*/

//FrontController



//1. Îáùèå íàñòğîéêè
ini_set('display_errors',1);
error_reporting(E_ALL);

//2. Ïîäêëş÷åíèå ôàéëîâ ñèñòåìû
define('ROOT',dirname(__FILE__));
require_once (ROOT.'/components/Router.php');


//3. Óñòàíîâêà ñîåäèíåíèÿ ñ ÁÄ
//4. Âûçîâ Router
$router=new Router();
$router->run();