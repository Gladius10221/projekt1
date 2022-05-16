<?php
     require "php/register.php";
     require "php/page.php";
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
 <head>
  <title> регістрація </title>
     <link rel="stylesheet" href="media/register.css" type="text/css">
 </head>
    <body>
          <div class="logotip">
<div class="foto">
     <?php echo $foto; ?>
        </div>
    </div>
    <a href = "main.php">Главная</a>
        <div class = "form">
 <form action = "/register.php" methot="post" >
<p> <input type="text" id="name"  name="name" placeholder="Имя" value="<?php echo $name; ?>">
 </p>
       <p> <input type="text" id="mail" name="mail" placeholder="email" value = "<?php echo $mail; ?>">
      <p> <input type="password" id="password" name="password" placeholder="пароль" value = "<?php echo $password; ?>">
     <p> <input type = "submit" id="submit" name="submit" value= "відправити" /> </p>
   </form>
         </div>
           </div>
<?php
        echo $erorname;
        echo $pss;
        echo $mmm;
        if ($error != "пздц"){
          if (isset($_GET['submit'])){
        mkdir("users/users/$mail", 0700);
      }
        $writed = fopen("users/$mail.php", "w");
        fwrite($writed, $text);
        fclose($writed);
        $ht = fopen("users/users/$mail/$mail-1.php", "w");
        fwrite($ht, $texto);
        fclose($ht);
        $txt = '<?php

        ';
        $ge = fopen("users/governing/dop_file/table/$mail.php", "w");
        fwrite($ge, $txt);
        fclose($ge);
      }
    $gop = fopen("php/users_list.php", "a");
    $hp = "
echo '<a href = users/$mail.php >', '<div class = hav>', '$mail', '</div>', '</a>';
    ";
    if ($mail != false){
    fwrite($gop, $hp);
  }
?>
   </body>
     </html>
