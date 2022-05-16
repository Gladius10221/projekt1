<?php
    require 'users/ew/ew-1.php';
       require 'governing/check_m.php';
?>
<html>
 <head>
 <title> <?php echo 'ihor';?> </title>
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
    <?php echo 'ihor';?>
    </div>
    <form action = '<?php echo 'ew.php' ?>' methot = 'get'>
      <input type = 'submit' name = 'mas' id = 'mas'>
    </form>
 </body>
 </html>