<?php session_start(); ?>
<html>
 <head>
    <title> Переписки </title>
    <link rel = "stylesheet" href = "media/massage.css" type = "text/css">
  </head>
<body>
<?php
if (isset($_SESSION['mail'])){
$tyt = $_SESSION['mail'];
 require "users/governing/dop_file/table/$tyt.php";
 require "users/users/$tu/$tu.php";
}
?>
</body>
</html>
