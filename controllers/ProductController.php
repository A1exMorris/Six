<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 24.05.2018
 * Time: 16:43
 */

class ProductController
{

    public function actionView()
    {
        echo 'actionView run';
        return true;
    }

    public function actionList($category)
    {
        echo 'actionList run';
        echo '<br>'.$category;
        return true;
    }

}