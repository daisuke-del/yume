<?php
$msg = null; //アップロード状況を表すメッセージ
$alert = null; //メッセージのデザイン用

//アップロード処理
if (isset($_FILES['image']) && is_uploaded_file($_FILES['image']['tmp_name'])){
  $old_name = $_FILES['image']['tmp_name'];
  $new_name = $_FILES['image']['name'];
  if (move_uploaded_file($old_name, 'album/'.$new_name)){
    $msg = 'アップロードしました';
    $alert = 'success';
  }else{
    $msg = 'アップロードできませんでした';
    $alert = 'danger';
  }
}
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
      <title>画像アップロード</title>

    <script type='text/javascript' src='/yume/js/jquery-3.6.0.min.js'></script>
    <script type='text/javascript' src='/yume/js/submitbtn.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    

    </head>

    <body>

      <h1>画像アップロード</h1>
      <?php
      if ($msg){
        echo '<div class="alert alert-'.$alert.'" role="alert">'.$msg.'</div>';
      }
      ?>
      <form action="upload.php" method="post" enctype="multipart/form-data">
        <div>
          <label>アップロードファイル</label>
          <input type="file" name="image" class="form-control-file">
        </div>
        <input type="submit" value="アップロードする">
      </form>

</body>
</html>