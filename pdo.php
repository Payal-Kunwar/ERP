<?php
 $pdo = new PDO('mysql:host=localhost;dbname=erp','root','');
 //see the errors folder for details...
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  ?>