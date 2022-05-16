<?php
$mails = '$mails';
$names = '$names';
$r = '$_SESSION["mail"];';
$d = '$_SESSION["bd"] = $bd;';
$b = '$_SESSION["db"] = $db;';
$rrr = '$_SESSION["m"] = $mails;';
$db = '$db';
$ma = '$ma';
$bd = '$bd';
$nice = '$_GET["mas"]';
$text = "<?php
    require 'users/$mail/$mail-1.php';
       require 'governing/check_m.php';
?>
<html>
 <head>
 <title> <?php echo '$name';?> </title>
 <link rel = 'stylesheet' href = 'governing/style-users.css' type = 'text/css'>
 </head>
 <body>
 <style>
 .header{
   text-align: center;
   font-size: 100px;
   text-color: red;
 }
 </style>
 <div class = 'header'>
    <?php echo '$name';?>
    </div>
    <form action = '<?php echo '$mail.php' ?>' methot = 'get'>
      <input type = 'submit' name = 'mas' id = 'mas'>
    </form>
 </body>
 </html>";
 $texto = "<?php
 session_start();
   $mails = '{$mail}';
   $rrr
   $names = '{$name}';
   $ma = {$r}
   $bd = $mails.$ma;
   $db = $ma.$mails;
   $d
   $b
   if (isset({$nice})){
     header('Location: governing/massage.php');
   }";
