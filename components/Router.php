<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 24.05.2018
 * Time: 16:42
 */
class Router
{

    private $routes;

    /**
     * Router constructor.
     */
    public function __construct()
    {
        $routesPath=ROOT.'/config/routes.php';
        $this->routes = include($routesPath);
    }

    /**
     * Return request string
     * @return string8
     *
     */
    private  function getURI()
    {
        if(!empty($_SERVER['REQUEST_URI'])){
            return trim($_SERVER['REQUEST_URI'],'/');
        }
    }


    /**
     *
     */
    public function run()
    {
        //�������� ������ �������
        $uri=$this->getURI();

        //��������� ������� ������ ������� � routes.php
        foreach ($this->routes as $uriPattern => $path)
        {
          if(preg_match("~$uriPattern~",$uri)){
              $segments=explode('/',$path);
              $controllerName=array_shift($segments).'Controller';
              $controllerName=ucfirst($controllerName);

              $actionName='action'.ucfirst(array_shift($segments));

              $controllerFile=ROOT.'/controllers/'.$controllerName.'.php';

              //���������� ���� ������ �����������

              if(file_exists($controllerFile))
              {
                  include_once ($controllerFile);
              }
              $controllerObject=new $controllerName;

              $result=$controllerObject->$actionName();
              if($result!=null)
              {
                  break;
              }

          };
        }

        //���� ���� �� ���������� ����� ���������� � action



        //������� ������ � ������� ������ �����


    }

}