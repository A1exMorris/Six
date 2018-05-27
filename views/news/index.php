<?php foreach ($newsList as $newsItem):?>
<div >
    <li><a href="/Six/news/<?php echo $newsItem['id']?>"> <?php echo $newsItem['id']?></a></li>
    <li><?php echo $newsItem['title']?></li>
    <li><?php echo $newsItem['date']?></li>
    <li><?php echo $newsItem['short_content']?></li>
    <br>
</div>
<?php endforeach;?>

/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 24.05.2018
 * Time: 16:44
 */
