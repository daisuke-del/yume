<?php
require_once( dirname( __FILE__ ) . '/dns3.php' );
$dsn = "mysql:host={$host};dbname={$dnName};charset=utf8";
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>レコードを取り出す</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="tablestyle.css">
  </head>

  <body>
    <div>
      <?php
       try {
         $pdo =new PDO($dsn, $user, $password);
         $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ATTR_ERRMODE_EXCEPTION);
         echo "データベース{$dbName}に接続しました。","<br>";
         $sql = "SELECT * FROM bbs";
         $stm = $pdo->prepare($sql);
         $stm->execute();
         $result = $stm->fetchAll(PDO::FETCH_AASOC);

         echo "<table>";
         echo "<thead><tr>";
         echo "<th>","ID","</th>";
         echo "<th>","name","</th>";
         echo "<th>","instagram","</th>";
         echo "<th>","twitter","</th>";
         echo "<th>","tag","</th>";
         echo "</th></thead>";

         echo"<tbody>";
         foreach ($result as $row){
           echo "<tr>";
           echo "<td>", es($row['id']),"</td>";
           echo "<td>", es($row['name']), "</td>";
           echo "<td>", es($row['instagram']),"</td>";
           echo "<td>", es($row['twitter']),"</td>";
           echo "<td>", es($row['tag']), "</td>";
           echo "</tr>";
          }
          echo "</tbody>";
          echo "</table>";
         }catch (Exception $e) {
           echo '<span class="error">エラーがありました。</span><br>';
           echo $e->getMessage();
           exit();
         }
         ?>
    </div>
  </body>
</html>
