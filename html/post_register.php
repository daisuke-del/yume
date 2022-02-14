<?php

require_once("util.php");
$gobackURL = "register.php";

$errors = [];

if (!isset($_POST["name"])||($_POST["name"]==="")){
  $errors[] = "名前が空です。";
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
    <title>投票結果</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/tablestyle.css">
  </head>
  <body>
  
    <?php
    $name = $_POST["name"];
    $name2 = preg_replace("/(| )/", "",$name);
    $instagram = $_POST["instagram"];
    $twitter = $_POST['twitter'];
    $video = $_POST['video'];



    try {
      $pdo = new PDO($dsn, $user, $password);
      $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


      $sql = "INSERT INTO bbs_register (name,instagram,twitter,video) VALUES(:name, :instagram, :twitter, :video)";

      $stm = $pdo->prepare($sql);

      $stm->bindValue(':name',$name2,PDO::PARAM_STR);
      $stm->bindValue(':instagram',$instagram,PDO::PARAM_STR);
      $stm->bindValue(':twitter',$twitter,PDO::PARAM_STR);
      $stm->bindValue(':video',$video,PDO::PARAM_STR);
      
      $stm->execute();

      echo "登録依頼を受け付けました！";
    }catch (Exception $e){
      echo '<span class="error">エラーがありました。</span><br>';
      echo $e->getMessage();}
      ?>


  
     </p><br>
     <p><a href="<?php echo $gobackURL ?>">続けて登録依頼する</a></p><br>
    <a href="index.php" class="buttonre">TOPに戻る</a>

  </body>
</html>
