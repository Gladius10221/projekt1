<?php
    require 'users/zabrodotskij/zabrodotskij-1.php';
       require 'governing/check_m.php';
?>
<html>
 <head>
 <title> <?php echo 'gladius';?> </title>
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
    <?php echo 'gladius';?>
    </div>
    <form action = '<?php echo 'zabrodotskij.php' ?>' methot = 'get'>
      <input type = 'submit' name = 'mas' id = 'mas'>
    </form>
 </body>
 </html>