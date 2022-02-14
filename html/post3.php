<?php

require_once("util.php");
$gobackURL = "bbs3.php";

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


    if($big == 1){
      $sql = "UPDATE bbs2_1 SET big = big+1 WHERE name = :name";
      $stm = $pdo->prepare($sql);
      $stm->bindValue(':name',$name2,PDO::PARAM_STR);
      $stm->execute();
    }else {
      $sql= NULL;
    }

    if($beauty == 1){
      $sql2 = "UPDATE bbs2_1 SET beauty = beauty+1 WHERE name = :name";
      $stm = $pdo->prepare($sql2);
      $stm->bindValue(':name',$name2,PDO::PARAM_STR);
      $stm->execute();
    }else {
      $sql2= NULL;
    }

    if($style == 1){
      $sql3 = "UPDATE bbs2_1 SET style = style+1 WHERE name = :name";
      $stm = $pdo->prepare($sql3);
      $stm->bindValue(':name',$name2,PDO::PARAM_STR);
      $stm->execute();
    }else {
      $sql3= NULL;
    }

    if($erotic == 1){
      $sql4 = "UPDATE bbs2_1 SET erotic = erotic+1 WHERE name = :name";
      $stm = $pdo->prepare($sql4);
      $stm->bindValue(':name',$name2,PDO::PARAM_STR);
      $stm->execute();
    }else {
      $sql4= NULL;
    }

    if($young == 1){
      $sql6 = "UPDATE bbs2_1 SET young = young+1 WHERE name = :name";
      $stm = $pdo->prepare($sql6);
      $stm->bindValue(':name',$name2,PDO::PARAM_STR);
      $stm->execute();
    }else {
      $sql6= NULL;
    }

    if($old == 1){
      $sql7 = "UPDATE bbs2_1 SET old = old+1 WHERE name = :name";
      $stm = $pdo->prepare($sql7);
      $stm->bindValue(':name',$name2,PDO::PARAM_STR);
      $stm->execute();
    }else {
      $sql7 = NULL;
    }

    if($strange == 1){
      $sql8 = "UPDATE bbs2_1 SET strange = strange+1 WHERE name = :name";
      $stm = $pdo->prepare($sql8);
      $stm->bindValue(':name',$name2,PDO::PARAM_STR);
      $stm->execute();
    }else {
      $sql8 = NULL;
    }

    if($pig == 1){
      $sql9 = "UPDATE bbs2_1 SET pig = pig+1 WHERE name = :name";
      $stm = $pdo->prepare($sql9);
      $stm->bindValue(':name',$name2,PDO::PARAM_STR);
      $stm->execute();
    }else {
      $sql9 = NULL;
    }

    if($hip == 1){
      $sql10 = "UPDATE bbs2_1 SET hip = hip+1 WHERE name = :name";
      $stm = $pdo->prepare($sql10);
      $stm->bindValue(':name',$name2,PDO::PARAM_STR);
      $stm->execute();
    }else {
      $sql10 = NULL;
    }



      echo "投票は完了しました！";
    }catch (Exception $e){
      echo '<span class="error">エラーがありました。</span><br>';
      echo $e->getMessage();}
      ?>
  
     </p><br>
     <p><a href="<?php echo $gobackURL ?>">続けて女優を登録する</a></p><br>
    <a href="index.php" class="buttonre">TOPに戻る</a>

  </body>
</html>
