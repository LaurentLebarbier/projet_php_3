<?php
   try{
      $pdo=new PDO("mysql:host=localhost;dbname=utilisateur","laurent","h9xt2ya1");
   }
   catch(PDOException $e){
      echo $e->getMessage();
   }
