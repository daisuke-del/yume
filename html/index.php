<?php 
$info = file_get_contents("info.text");
?>


<!DOCTYPE html>
<html lang="ja">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width,initial-scale=1.0">
      <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
      <link rel="stylesheet" href="css/style.css">
      <script type='text/javascript' src='/yume/js/submitbtn.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <title>AV女優検索MAX</title>

    <script type='text/javascript' src='/yume/js/jquery-3.6.0.min.js'></script>
    <script type='text/javascript' src='/yume/js/submitbtn.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    </head>

    <body>
      <?php include("navbar.php"); ?>

    <div class="bigwrapper">
    <a class="infotext" href="bbs3.php"><?php echo $info; ?></a>
      <div class="wrapper">

        <section class="main">

          <h1>お気に入りを探そう！</h1>

          <div class="archive">

             <form method="POST" action="tagsearch.php">
               <p>タグを選ぼう</p>
                <div class="selectionTag">

                <ul>
                  <li><div class="checking">
                  <input type="checkbox" id="big" name="chara[]" value="big" class="check" />
                  <label for="big" class="checkbox">巨乳</label>
                  </div></li>

                  <li><div class="checking">
                  <input type="checkbox" id="beauty" name="chara[]" value="beauty" class="check" />
                  <label for="beauty" class="checkbox">美人</label>
                  </div></li>

                  <li><div class="checking">
                  <input type="checkbox" id="style" name="chara[]" value="style" class="check" />
                  <label for="style" class="checkbox">スタイルが良い</label>
                  </div></li>

                  <li><div class="checking">
                  <input type="checkbox" id="erotic" name="chara[]" value="erotic" class="check"/>
                  <label for="erotic" class="checkbox">エロい</label>
                  </div></li>

                  <li><div class="checking">
                  <input type="checkbox" id="young" name="chara[]" value="young" class="check"/>
                  <label for="young" class="checkbox">幼い</label>
                  </div></li>

                  <li><div class="checking">
                  <input type="checkbox" id="old" name="chara[]" value="old" class="check" />
                  <label for="old" class="checkbox">熟女</label>
                  </div></li>

                  <li><div class="checking">
                  <input type="checkbox" id="strange" name="chara[]" value="strange" class="check" />
                  <label for="strange" class="checkbox">変態</label>
                  </div></li>

                  <li><div class="checking">
                  <input type="checkbox" id="pig" name="chara[]" value="pig" class="check" />
                  <label for="pig" class="checkbox">ぽっちゃり</label>
                  </div></li>

                  <li><div class="checking">
                  <input type="checkbox" id="hip" name="chara[]" value="hip" class="check"/>
                  <label for="hip" class="checkbox">尻が良い</label>
                  </div></li>
               </ul>
               </div>

               <input type="submit" class="btn btn-primary" value="検索" id="btn1">
            </form>
           </div>
        </section>

             <section class="side">
                <h3>その他の検索方法</h3>
                <form action="search.php" method="POST">

                  <div class= "namesearch">
                      <label>名前を検索：<br>
                      <input type="text" name="name" placeholder="名前をご入力ください"></label>
                     <input type="submit" value="検索"></li>
                  </div><br>
                  </form>
                    
                <form action="searchkana.php" method="POST">
                  <div class="namesearch">
                  <label>呼び仮名で検索：<br>
                      <input type="text" name="kananame" placeholder="カタカナでご入力ください"></label>
                     <input type="submit" value="検索"></li>
                  </div>
               </form><br>


               <form action="search50.php" method="POST">
                  <div class="namesearch3">
                  <label>50音検索：<br>
                  <select name="name_50">
                        <option value="ア">あ</option>
                        <option value="イ">い</option>
                        <option value="ウ">う</option>
                        <option value="エ">え</option>
                        <option value="オ">お</option>
                        <option value="カ">か</option>
                        <option value="キ">き</option>
                        <option value="ク">く</option>
                        <option value="ケ">け</option>
                        <option value="コ">こ</option>
                        <option value="サ">さ</option>
                        <option value="シ">し</option>
                        <option value="ス">す</option>
                        <option value="セ">せ</option>
                        <option value="ソ">そ</option>
                        <option value="タ">た</option>
                        <option value="チ">ち</option>
                        <option value="ツ">つ</option>
                        <option value="テ">て</option>
                        <option value="ト">と</option>
                        <option value="ナ">な</option>
                        <option value="ニ">に</option>
                        <option value="ヌ">ぬ</option>
                        <option value="ネ">ね</option>
                        <option value="ノ">の</option>
                        <option value="ハ">は</option>
                        <option value="ヒ">ひ</option>
                        <option value="フ">ふ</option>
                        <option value="ヘ">へ</option>
                        <option value="ホ">ほ</option>
                        <option value="マ">ま</option>
                        <option value="ミ">み</option>
                        <option value="ム">む</option>
                        <option value="メ">め</option>
                        <option value="モ">も</option>
                        <option value="ヤ">や</option>
                        <option value="ユ">ゆ</option>
                        <option value="ヨ">よ</option>
                        <option value="ラ">ら</option>
                        <option value="リ">り</option>
                        <option value="ル">る</option>
                        <option value="レ">れ</option>
                        <option value="ロ">ろ</option>
                        <option value="ワ">わ</option>
                        <option value="ヲ">を</option>
                        <option value="ン">ん</option>
                        </select>
                     <input type="submit" value="検索"></li>
                  </div>
               </form>

             </section>
          </div>  
      </div>
        <div class="footer">
          <div class="footer-logo">AV女優検索MAX</div>
      </div>
    </body>
</html>