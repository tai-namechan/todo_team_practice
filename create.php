<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todoアプリ</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body class="create-body">
    <div class="create-head">
        <div class="create-head-left">
            <nav>
                <a href="index.php" class="toppage-jump">Todo</a>
            </nav>
        </div>
    </div>

    <h1 class="createh1">
        <p class="create-title">Welcome to <br>To do Create</p>
    </h1>
    <div class="createmethod">
        <div class="formlist">
            <form action="store.php" method="post">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                </div>

                <div class="form-group">
                    <label for="contents">Contents</label>
                    <textarea class="form-control" name="contents" id="contents" cols="30" rows="10" placeholder="Contents"></textarea>
                </div>
                <div class="create-postbutton">
                <!-- 戻るボタン -->
                    <button type="button" onclick="history.back()">CANCEL</button>
                <!-- 送信ボタン -->
                    <button type="submit" class="post-btn">POST</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>