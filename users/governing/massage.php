<?php
session_start();
$g = $_SESSION['m'];
$mail = $_SESSION['mail'];
if ($g == $mail){
  header("Location: http://ошибка");
  exit();
}
require "check_from_massage.php";
$bd = $_SESSION['bd'];
$mail = $_SESSION['mail'];
$g = $_SESSION['m'];
require "bdd.php";
if (file_exists("dop_file/$db.php")){
  require "dop_file/$db.php";
}
else {
  require "dop_file/$bd.php";
}
    $massage = $_GET['massage'];
 if (strlen($massage) < 1 or strlen($massage) > 90){
   $error = 1;
 }
 if ($mail == $user_one){
   $gtr = 'massage1';
 }
 else{
   $gtr = 'massage2';
 }
 if ($g == $mail){
   $err = 1;
 }
 if ($mail == $user_one){
   $la = "user1";
   $lol = "1";
 }
 else{
   $la = "user2";
   $lol = "2";
 }
 if ($qwe != 1){
   $corop = $db;
 }
 else{
   $corop = $bd;
 }
 if ($error != 1){
if (isset($_GET['submit'])){
  if ($qwe != 1){
  $roma = "INSERT INTO $bd({$gtr}, {$la}) VALUES ('{$massage}', '{$lol}')";
     $mice = mysqli_query($link , $roma) or die("немає запису" . mysqli_error($link));
     header("Location: massage.php");
   }
   else{
     $roma = "INSERT INTO $db({$gtr}, {$la}) VALUES ('{$massage}', '{$lol}')";
        $mice = mysqli_query($link , $roma) or die("немає запису" . mysqli_error($link));
        header("Location: massage.php");
   }
}
}
require "str.php";
?>
<!DOCTYPE>
<html>
 <head>
  <title> переписки </title>
  <link rel="stylesheet" href="style.css" type = "text/css">
</head>
<body>
 <form action ="massage.php" methot="get">
      <div class = massage>
<?php
if ($user_one == $mail) {
$sop = '<div class = "masage-style">';
$sop2 = '<div class = "masage-style2">';
} else{
  $sop = '<div class = "masage-style2">';
  $sop2 = '<div class = "masage-style">';
}
if ($qwe != 1){
$ret = "SELECT massage1, massage2 from {$bd}";
   $resu = mysqli_query($link , $ret) or die("о" . mysqli_error($link));
   if ($resu == TRUE){
     $nir = 1;
     $mala = mysqli_num_rows($resu);
       for ($i = 0 ; $i < $mala ; ++$i){
          $kurva = $mac[$i];
          if ($kurva == 1){
            echo $sop;
          }
          if ($kurva == 2){
            echo $sop2;
          }
         $ret = mysqli_fetch_row($resu);
         for ($j = 0 ; $j < 3 ; ++$j){
           echo "$ret[$j]";
         }
        echo "</div>";
       }
   }
 }
 else{
 $ret = "SELECT massage1, massage2 from {$db}";
    $resu = mysqli_query($link , $ret) or die("ошибка" . mysqli_error($link));
    if ($resu == TRUE){
      $nir = 1;
      $mala = mysqli_num_rows($resu);
        for ($i = 0 ; $i < $mala ; ++$i){
          $kurva = $mac[$i];
          if ($kurva == 1){
            echo $sop;
          }
          if ($kurva == 2){
            echo $sop2;
          }
          $ret = mysqli_fetch_row($resu);
          for ($j = 0 ; $j < 3 ; ++$j){
            echo "$ret[$j]";
          }
         echo "</div>";
        }
    }
  }
?>
</div>
   <input type="text" id = "massage" name="massage">
    <input type="submit" id="submit" name="submit" value="отправить">
  </form>
 </body>
</html>
