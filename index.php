<?php
    $con = new PDO("mysql:host=localhost;dbname=saudacao", "root", "ifpradm!@#2017");
    
    $rs = $con->query("SELECT * FROM saudacao");
    while($row = $rs->fetch(PDO::FETCH_OBJ)){
      echo $row->message . "<br />";
    }