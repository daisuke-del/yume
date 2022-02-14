
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>投票ページ</title>

    <script type='text/javascript' src='/yume/js/jquery-3.6.0.min.js'></script>
    <script type='text/javascript' src='/yume/js/checkbox2.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  </head>

  <body>
    <h1 class="formtitle">お気に入りの女優に投票しよう！</h1>
    <form action="post3.php" method="POST">
      <div class="form-group">
        <label>女優名※必須</label>
        <input type="text" name="name" class="form-control">
      </div>
      <label>女優の特徴に当てはまるタグを3つ選択してください※必須</label>
      <div class="form-group">
       <ul>
          <li><div class="checking">
          <input type="hidden" name="big" value="" /> 
          <input type="checkbox" id="big" name="big" value=1 class="check" />
          <label for="big" class="checkbox">巨乳</label>
          </div></li>

          <li><div class="checking">
          <input type="hidden" name="beauty" value="" /> 
          <input type="checkbox" id="beauty" name="beauty" value=1 class="check" />
          <label for="beauty" class="checkbox">美人</label>
          </div></li>

          <li><div class="checking">
          <input type="hidden" name="style" value="" /> 
          <input type="checkbox" id="style" name="style" value=1 class="check" />
          <label for="style" class="checkbox">スタイルが良い</label>
          </div></li>

          <li><div class="checking">
          <input type="hidden" name="erotic" value="" /> 
          <input type="checkbox" id="erotic" name="erotic" value=1 class="check"/>
          <label for="erotic" class="checkbox">エロい</label>
          </div></li>

          <li><div class="checking">
          <input type="hidden" name="young" value="" /> 
          <input type="checkbox" id="young" name="young" value=1 class="check"/>
          <label for="young" class="checkbox">幼い</label>
          </div></li>

          <li><div class="checking">
          <input type="hidden" name="old" value="" /> 
          <input type="checkbox" id="old" name="old" value=1 class="check" />
          <label for="old" class="checkbox">熟女</label>
          </div></li>

          <li><div class="checking">
          <input type="hidden" name="strange" value="" />   
          <input type="checkbox" id="strange" name="strange" value=1 class="check" />
          <label for="strange" class="checkbox">変態</label>
          </div></li>

          <li><div class="checking">
          <input type="hidden" name="pig" value="" /> 
          <input type="checkbox" id="pig" name="pig" value=1 class="check" />
          <label for="pig" class="checkbox">ぽっちゃり</label>
          </div></li>

          <li><div class="checking">
          <input type="hidden" name="hip" value="" /> 
          <input type="checkbox" id="hip" name="hip" value=1 class="check"/>
          <label for="hip" class="checkbox">尻が良い</label>
          </div></li>
       </ul>
      </div>

      <input type="submit" class="btn btn-primary" value="投票">
    </form>
    <a href="index.php" class="buttontotop">TOPに戻る</a>
  </body>
</html>