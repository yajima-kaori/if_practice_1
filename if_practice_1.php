<?php
// 24時間単位の現在時
// $hour = date('G');
$hour = 6;

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title></title>
  <link href="style.css" rel="stylesheet" type="text/css">
</head>

<?php if( $hour >= 6 && $hour <= 17) : ?>
<?php
echo
"<body class=\"day\">
  <h1 class=\"day\">昼と夜でページの見た目が変わります。</h1>
</body>";
?>
<?php else  : ?>
<?php
  echo
"<body class=\"night\">
  <h1 class=\"night\">昼と夜でページの見た目が変わります。</h1>
</body>";
?>
<?php endif;?>
</html>