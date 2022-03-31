<?php
  $num=$_GET['num'];
  $sum=0;
  for ($i=0; $i < strlen($num);$i++)
  {
    $sum += intval(substr($num, $i, 1));
  }
  echo "Sum - $sum\n";
