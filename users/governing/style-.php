<?php
//цей файл при кожній обнові міняє значення на протилежне, там 2 значення
session_start();
echo $_SESSION['style'];
if (isset($_SESSION['style'])){
    $b = 6;
}
    $h = 4;
   $_SESSION['style'] = '<div class = "masage-style2">';
if ($h == 4){
     if ($b != 6){
   echo '<div class = "masage-style">';
}
if ($b == 6){
unset($_SESSION['style']);
}
$b = 5;
}
