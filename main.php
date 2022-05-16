<?php
session_start();
if(isset($_SESSION['logged_user'])){
  $log = "1";
}
?>
<!DOCTYPE html>
  <html>
    <head>
 <title>z-corporation </title>
  <link rel="stylesheet" href="media/style.css" type="text/css">
  </head>
  <body>
   <div class="logotip">
       <div class="fot">
       <img src="media/log.png" height = "205px" width = "250px">
        <br>
       </div>
       <p align="center" class="rom">
   z-corporation
   </p>
<ul class = "menu-main">
       <li><a href = ""> Главная </a></li>
       <?php
       if ($log == 1){
       echo '<li><a href = "massage.php"> Переписки </a></li>';
     }
       ?>
       <li><a href = ""> Новости в кибер мире </a></li>
       <li><a href = "users_list.php">Пользователи</a></li>
   </ul>

       </div>
<div class="menu1">
<form>
  <?php
      if ($log != 1){
      echo '<a href = "register.php" class="register"> регистрация </a>';
      echo '<a href = "login.php" class="login"> вход </a>';
}
?>
 </form>
</div>
               <div class="osnova">
    <div class ="text">
     Приветствую тебя странник!
</div>
                   </div>
                   <div class="podval">
<form action="/main.php" methot="post">
   <input type = "submit" id="submit" name="relax" value= "вийти" />
</form>
                       подвал
                   </div>
</div>
   </body>
</html>
<?php
if(isset($_GET['relax'])){
  session_destroy();
}
?>
