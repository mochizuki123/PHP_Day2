<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>今年の冬読むべきお勧め本</title>
    <p1>引用元 https://smartlog.jp/210265#28S4</p1>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>

    header nav{
        font-size: 20px;
    }

    body {
        width: 50%;
        margin-left: 40px;
    }

    div {
            padding: 10px;
            font-size: 16px;
        }

    
    .navbar-default{
        background-color:  #2FA6E9;
        font-size: 20px;
    }

    
    .label-1{
        margin-left:10px;
    }
    
    .form-list input{
            margin-left:25px;
            }

    .form-list textArea {
            margin-left:20px;
            }

    .fieldset.submit {
            margin-left:30px;
            }


</style>
</head>

<body>

    <!-- Head[Start] -->
    <header>
        <nav class="navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">My 今年の冬読むべきお勧め本</a></div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <form method="post" action="insert.php">
        <div class="jumbotron">
            <fieldset class="fieldset">
                <legend>ブックマーク登録</legend>
             <ul  class="form-list">
                <li><label>書籍名：<input type="text" name="bookname"></label><br></li>
                <li><label>URL：<input type="text" name="url"></label><br></li>
                <li><label>コメント<textArea name="comment" rows= "4" cols="40"></textArea></label></li>
                <br>
                <label for="favorite">お気に入り:</label>
                <input type="checkbox" id="favorite" name="favorite" value="True">
            </ul>
                <br><br>
            <div>
                <input type="submit" value="送信">
            </div>
            </fieldset>
        </div>
    </form>
    <!-- Main[End] -->


</body>

</html>
