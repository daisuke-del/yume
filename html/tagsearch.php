<?php
require_once("util.php");
$gobackURL = "index.php";



require_once( dirname( __FILE__ ) . '/dns3.php' );
$dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";

if (isset($_POST['chara']) && is_array($_POST['chara'])) {
  $chara = $_POST['chara'];
}else{
  echo 'タグを選択してください';
}

if(in_array('big', $chara)){
  $big = 'big';
}else{
  $big = NULL;
}

if(in_array('beauty', $chara)){
  $beauty = '+beauty';
}else{
  $beauty = NULL;
}

if(in_array('style', $chara)){
  $style = '+style';
}else{
  $style = NULL;
}

if(in_array('erotic', $chara)){
  $erotic = '+erotic';
}else{
  $erotic = NULL;
}

if(in_array('young', $chara)){
  $young = '+young';
}else{
  $young = NULL;
}

if(in_array('old', $chara)){
  $old = '+old';
}else{
  $old = NULL;
}

if(in_array('strange', $chara)){
  $strange = '+strange';
}else{
  $strange = NULL;
}

if(in_array('pig', $chara)){
  $pig = '+pig';
}else{
  $pig = NULL;
}

if(in_array('hip', $chara)){
  $hip = '+hip';
}else{
  $hip = NULL;
}

//MySQLデータベースに接続する
try {
  $pdo = new PDO($dsn, $user, $password);
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


  //SQL文を作る
  $sql = "SELECT T1.name,image,instagram,twitter,video FROM bbs2 AS T1 INNER JOIN bbs2_1 AS T2 ON T1.name = T2.name ORDER BY ($big $beauty $style $erotic $young $old $strange $pig $hip) DESC";

  


        //プリペイドステートメントを作る
        $stm = $pdo->prepare($sql);
        //プレースホルダに値をバインドする
        
        //SQL文を実行する
        $stm->execute();



      } catch (Exception $e) {
        echo '<span class="error">エラーがありました。</span><br>';
        echo $e->getMessage();
      }
?>

<!DOCTYPE html>
<html lang=ja>
  <head>
    <meta charset="utf-8">
    <title>タグ検索</title>
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div>

      <h1>検索結果</h1>


      <?php foreach ($stm as $row): ?>
      
        <?php echo $row[0]?><br>
        <a class="thumbnail" href="<?php echo $row[1]?>" target="_blank"><image src="<?php echo $row[1]?>"></a><br>
        <a href= "<?php echo $row[2]?>"><?php echo $row[0]?>のinstagram</a><br>
        <a href= "<?php echo $row[3]?>"><?php echo $row[0]?>のtwitter</a><br>
        <a href="<?php echo $row[4]?>"><?php echo $row[0]?>の作品</a><br><br>
      
      <?php endforeach; ?>

      

    </div>
  </body>
</html>

