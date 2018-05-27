<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 24.05.2018
 * Time: 16:43
 */

include_once ROOT.'/models/News.php';
class NewsController
{

    public function actionIndex()
    {


        $newsList=array();
        $newsList=News::getNewsList();

        require_once (ROOT.'/views/news/index.php');

        return true;
    }



    public function actionView($id)
    {


        if($id) {

            $getNews = News::getNewsItemById($id);

            require_once (ROOT.'/views/news/view.php');

        }
        return true;
    }

}