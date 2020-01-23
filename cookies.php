<?php
   setcookie("name", "AlfieVillarin", time()+3600, "/","", 0);
   setcookie("age", "24", time()+3600, "/", "",  0);
?>
<html>
   
   <head>
      <title>Setting Cookies with PHP</title>
   </head>
   
   <body>
      <?php echo "Set Cookies"?>
   </body>
   
</html>