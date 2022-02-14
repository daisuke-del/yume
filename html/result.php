<?php

require_once("util.php");
$gobackURL = "bbs.php";

$errors = [];

if (!isset($_POST["name"])||($_POST["name"]==="")){
  $errors[] = "名前が空です。";
}
if (!isset($_POST["instagram"])||($_POST["instagram"]==="")){
  $errors[] = "女優のinstagramのURLを貼り付けてください";
}



//エラーがあった時
if(count($errors)>0){
  echo `<ol class="error">`;
  foreach($errors as $value){
    echo "<li>",$value,"</li>";
  }
  echo "</ol>";
  echo "<hr>";
  echo "<a href=" , $gobackURL, ">戻る</a>";
  exit();
}

//データベース
require_once( dirname( __FILE__ ) . '/dns3.php' );
$dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";
?>



<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>レコード追加</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/tablestyle.css">
  </head>
  <body>
    <div>
      
    <?php
    $name = $_POST["name"];
    $instagram = $_POST["instagram"];
    $twitter = $_POST["twitter"];
    $big = $_POST["big"];
    $beauty = $_POST["beauty"];
    $style = $_POST["style"];
    $erotic = $_POST["erotic"];
    $young = $_POST["young"];
    $old = $_POST["old"];
    $strange = $_POST["strange"];
    $pig = $_POST["pig"];
    $hip = $_POST["hip"];


    try {
      $pdo = new PDO($dsn, $user, $password);
      $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $sql = "INSERT INTO bbs (name,instagram,twitter,big,beauty,style,erotic,young,old,strange,pig,hip) VALUES(:name, :instagram, :twitter, :big, :beauty, :style, :erotic, :young, :old, :strange, :pig, :hip)";
      $stm = $pdo->prepare($sql);

      $stm->bindValue(':name',$name,PDO::PARAM_STR);
      $stm->bindValue(':instagram',$instagram,PDO::PARAM_STR);
      $stm->bindValue(':twitter',$twitter,PDO::PARAM_STR);
      $stm->bindValue(':big',$big,PDO::PARAM_STR);
      $stm->bindValue(':beauty',$beauty,PDO::PARAM_STR);
      $stm->bindValue(':style',$style,PDO::PARAM_STR);
      $stm->bindValue(':erotic',$erotic,PDO::PARAM_STR);
      $stm->bindValue(':young',$young,PDO::PARAM_STR);
      $stm->bindValue(':old',$old,PDO::PARAM_STR);
      $stm->bindValue(':strange',$strange,PDO::PARAM_STR);
      $stm->bindValue(':pig',$pig,PDO::PARAM_STR);
      $stm->bindValue(':hip',$hip,PDO::PARAM_STR);
      

      if($stm->execute()){
        $sql = "SELECT * FROM bbs";
        $stm = $pdo->prepare($sql);
        $stm->execute();


        $result = $stm->fetchAll(PDO::FETCH_ASSOC);

        //テーブルのタイトル行
        echo "<table>";
        echo "<thead><tr>";
        echo "<th>","ID","</th>";
        echo "<th>","名前","</th>";
        echo "<th>","インスタ","</th>";
        echo "<th>","ツイッター","</th>";
        echo "<th>","巨乳","</th>";
        echo "<th>","美女","</th>";
        echo "<th>","スタイル","</th>";
        echo "<th>","エロい","</th>";
        echo "<th>","若い","</th>";
        echo "<th>","熟女","</th>";
        echo "<th>","変態","</th>";
        echo "<th>","ぽっちゃり","</th>";
        echo "<th>","尻","</th>";
        echo "</th></thead>";

        //値を取り出して行に表示する
        echo "<tbody>";
        foreach($result as $row){
          echo "<tr>";
          echo "<td>", es($row['id']),"</td>";
          echo "<td>", es($row['name']),"</td>";
          echo "<td>", es($row['instagram']),"</td>";
          echo "<td>", es($row['twitter']),"</td>";
          echo "<td>", es($row['big']),"</td>";
          echo "<td>", es($row['beauty']),"</td>";
          echo "<td>", es($row['style']),"</td>";
          echo "<td>", es($row['erotic']),"</td>";
          echo "<td>", es($row['young']),"</td>";
          echo "<td>", es($row['old']),"</td>";
          echo "<td>", es($row['strange']),"</td>";
          echo "<td>", es($row['pig']),"</td>";
          echo "<td>", es($row['hip']),"</td>";
          echo "</tr>";
        }
        echo "<tbody>";
        echo "</table>";
      }else {
        echo '<span class="error">追加エラーがありました。</span><br>';
      };
    }catch (Exception $e){
      echo '<span class="error">エラーがありました。</span><br>';
      echo $e->getMessage();
    }
    ?>
   <hr>
   <p><a href="<?php echo $gobackURL ?>">戻る</a></p>
    </div>
  </body>
</html>
