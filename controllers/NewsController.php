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


        echo 'Список новостей';

        $newsList=array();
        $newsList=News::getNewsList();
        echo '<pre>';
        print_r($newsList);
        echo '</pre>';
        return true;
    }



    public function actionView($id)
    {
        echo 'просмотр 1 новости';

        if($id) {

            $getNews = News::getNewsItemById($id);

            echo $id;
            echo '<pre>';
            print_r($getNews);
            echo '</pre>';

        }
        return true;
    }

}