<?php

// 新規作成でcreateのメソッドを使うためtask.phpを読み込み
require_once('Models/Task.php');

// create.phpからtitleとcontentsの内容のデータの受け取り
$title = $_POST['title'];
$contents = $_POST['contents'];
    // いつ作られたかの情報
$currentTime = date("Y/m/d H:i:s");

// DBへのデータの保存
// Task.phpのなかのメソッドを実行
// インスタンス化し$taskに代入
$task = new Task();
$task->create([$title, $contents, $currentTime]);


// create.php→index.phpへリダイレクト
header('location:index.php');
exit;