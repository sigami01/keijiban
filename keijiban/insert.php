<?php
        mb_internal_encoding("utf8");
        $pdo = new PDO("mysql:dbname=kana;host=localhost;","root","mysql");
        $pdo->exec("
        insert into kana_keijiban(handlename,title,comments)
        values('".$_POST['handlename']."',
        '".$_POST['title']."',
        '".$_POST['comments']."');
        ");?>

<!doctype html>
<html lang="ja">

    <head>
        <meta charset ="utf-8">
        <title>掲示板</title>
        <link rel="stylesheet" type="text/css" href="style2.css">
    </head>
    
    <body>
        
      <?php  header("Location:http://localhost/kana-keijiban/index.php")?>

    </body>