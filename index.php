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

   <div class="row">
   <?php foreach ($tasks as $task) : ?>
        <div class="card">
            <!-- なにか画像入れたかったら入れる -->

             <div class="card-body">
                 <h2 class="card-title type1"><? echo $task["title"]; ?></h2>
                 <p class="card-text type1"><? echo $task["contents"]; ?></p>

                 <div class="card-endtext">
                 <a href="edhit.php?id=<? echo $task['id']; ?>">EDIT</a>
                 <form action="delete.php" method="POST">
                     <input type="hidden" name="id" value="<? echo $task['id']; ?>">
                     <button type="submit" class="text-detale">DETELE</button>
                 </form>
                 </div>
             </div>
        </div>
   <?php endforeach; ?>
   </div>
</body>
</html>