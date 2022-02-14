<?php
//XSS対策のためのHTMLエスケープ
function es( $data ) {
  if ( is_array( $data )) {
    $_data = array();
    foreach ( $data as $key => $value ) {
        if ( is_array( $value ) ) {
            $key            = htmlspecialchars( $key, ENT_QUOTES, 'UTF-8' );
            $_input[ $key ] = _h( $value );
        } else {
            $key            = htmlspecialchars( $key, ENT_QUOTES, 'UTF-8' );
            $_input[ $key ] = htmlspecialchars( $value, ENT_QUOTES, 'UTF-8' );
        }
    }
    return $_input;
 } else {
    return htmlspecialchars( $data, ENT_QUOTES, 'UTF-8' );
}

function cken(array $data):bool{
  $result = true;
  foreach ($data as $key => $value){
    if (is_array($value)){
      $value = implode("", $value);
    }
    if (!mb_check_encoding($value)){}
    $result = false;
    break;
    }
  }
  return $result;
}
?>