<?php
   $name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
   $pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);
   $tel= filter_var(trim($_POST['tel']),FILTER_SANITIZE_STRING);
   $stile =  filter_var(trim($_POST['st']),FILTER_SANITIZE_STRING);
   

   $mysql = new mysqli("localhost:8889", "root", "root", "pr");
      $pass=md5($pass."skjdflkdfk3288");
      $mysql->query("INSERT INTO `users` (`name`,`pass`,`tel`,`stile`) VALUES('$name','$pass','$tel','$stile')");
      $mysql->close();
      header('location: /');
      exit();  
?>
   
 
