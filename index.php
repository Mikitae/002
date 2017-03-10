<?php
/**
 * Created by PhpStorm.
 * User: Никитка
 * Date: 10.03.2017
 * Time: 23:07
 */

require_once __DIR__.'/Model/News_Db.php';




$news = new News_Db();
//$news->AddNews('Ага');
$all_news = $news->GetAllNews();

foreach ($all_news as $value){
    echo "Текст: ".$value['text']." | Дата: ".$value['date']."<br>";
}

