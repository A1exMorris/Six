<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 25.05.2018
 * Time: 19:23
 */
class Db
{
    public static function getConnection()
    {
        $paramPath=ROOT.'/config/db_params.php';
        $params=include($paramPath);

        $mysql=new mysqli($params['host'],$params['user'],$params['password'],$params['dbname']);


        return $mysql;

    }
}