<?php
   $name = filter_var(trim($_POST['aname']),FILTER_SANITIZE_STRING);
   $pass = filter_var(trim($_POST['apass']),FILTER_SANITIZE_STRING);
   $pass=md5($pass."skjdflkdfk3288");
   $mysql = new mysqli("localhost:8889", "root", "root", "pr");
   $result = $mysql->query("SELECT * FROM `users` WHERE `name`='$name' AND `pass`='$pass'");
   $user=$result->fetch_assoc();
   if(count($user)==0){
      header('Location:/');
      exit();
   }
   setcookie('user',$user['name'],time()+3600*24,"/");
   $mysql->close();
   header('location:/№7.html');
   exit();
?>
