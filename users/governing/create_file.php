<?php
$userone = '$user_one';
$usertwo = '$user_two';
$txt = "<?php
session_start();
$userone = '{$_SESSION['mail']}';
$usertwo = '{$_SESSION['m']}';
";
$writ = fopen("governing/dop_file/$bd.php", "w+");
fwrite($writ, $txt);
if (file_exists("governing/dop_file/$bd.php")){
  if (file_exists("governing/dop_file/$db.php")){

  }
}
else{
  $writ = fopen("governing/dop_file/$bd.php", "w+");
  fwrite($writ, $txt);
}
