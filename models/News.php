<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 25.05.2018
 * Time: 18:10
 */


class News
{
    public static function getNewsItemById($id)
    {


        $mysql=Db::getConnection();

        if($mysql->connect_errno)
        {
            echo 'connect error';
        }
        $newsList=array();

        if( $result=$mysql->query('SELECT id, title, date, short_content '
            .'FROM nphotography WHERE id='.$id
        ))
        {
            while ($row = $result->fetch_assoc()) {

                $newsList['id']=$row['id'];
                $newsList['title']=$row['title'];
                $newsList['date']=$row['date'];
                $newsList['short_content']=$row['short_content'];

            }
        }
        return  $newsList;
    }

    public static function getNewsList()
    {


        $mysql=Db::getConnection();

        if($mysql->connect_errno)
        {
            echo 'connect error';
        }
        $newsList=array();

        if( $result=$mysql->query('SELECT id, title, date, short_content '
            .'FROM nphotography '
            .'ORDER BY date DESC '
            .'LIMIT 10'
        ))
        {
            $i=0;
            while ($row = $result->fetch_assoc()) {

                $newsList[$i]['id']=$row['id'];
                $newsList[$i]['title']=$row['title'];
                $newsList[$i]['date']=$row['date'];
                $newsList[$i]['short_content']=$row['short_content'];
                   $i++;
            }
        }
        return $newsList;
    }

}