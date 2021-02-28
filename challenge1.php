<?php
  function Century($year){
    $data = ceil($year/100);
    echo($data);
 }
 
 Century(1700); //17
 Century(1905); //20
?>
