<?php

require_once('Models/Task.php');
require_once('function.php');

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todoアプリ</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
   <header>
   <a href="index.php" class="topsite">Team-A</a>
   <a href="create.php" class= "create" >Create</a>
   </header>

   <div class="card">
   <!-- ここからforeach -->
        <div class="card-image">
     <!-- なにか画像入れたかったら入れる -->

             <div class="card-body">
                 <h2 class="card-title">データ読み込む</h2>
                 <p class="card-text">データ読み込む</p>

                 <!-- edit機能入れる -->


                 <!-- delet機能入れる -->


             </div>
        </div>
   </div>
</body>
</html>