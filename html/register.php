<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>女優登録</title>

    <script type='text/javascript' src='/yume/js/jquery-3.6.0.min.js'></script>
    <script type='text/javascript' src='/yume/js/checkbox2.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  </head>

  <body>
    <h1 class="formtitle">お気に入りの女優に投票しよう！</h1>
    <form action="post_register.php" method="POST">

      <div class="form-group">
      <label for="namebox">【必須】女優名</label><br>
        <input type="text" name="name" class="form-control" id="namebox">
      </div><br>
      <div class="form-group">
        <label for="instagrambox">instagramのURLを貼り付けてください</label><br>
        <input type="text" name="instagram"   class="form-control" id="instagrambox">
      </div><br>

      <div class="form-group">
        <label for="twitterbox">twitterのURLを貼り付けてください</label><br>
        <input type="text" name="twitter" class="form-control" id="twitterbox">
      </div><br>

      <div class="form-group">
        <label for="videobox">出演作品のリンクを貼り付けてください</label><br>
        <input type="text" name="video" class="form-control" id="videobox">
      </div><br>

      <input type="submit" class="btn btn-primary" value="登録">
    </form>
    <a href="index.php" class="buttontotop">TOPに戻る</a>
  </body>
</html>
