<?php
     require "php/login.php";
?>
<!DOCTYPE html>
<html lang="ru">
<meta charset="utf-8" />
 <head>
  <title> логін </title>
     <link rel="stylesheet" href="media/register.css" type="text/css">
</head>
    <body>
          <div class="logotip">
<div class="foto">
     <?php echo $foto; ?>
        </div>
    </div>
    <a href="main.php"> Главная </a>
        <div class = "form">
 <form action = "/login.php" methot="get" >
       <p> <input type="text" id="mail" name="mail" placeholder="email" value = "<?php echo $mail; ?>">
      <p> <input type="password" id="password" name="password" placeholder="Пароль" value = "<?php echo $password; ?>">
     <p> <input type = "submit" id="submit" name="submit" value= "отправить" /> </p>
   </form>
         </div>
           </div>

 </body>
     </html>
