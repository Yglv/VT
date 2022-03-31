<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
  $arr=array(1,2,3,array(4,5,array(6,7,array(8,9,array(10)))));
  for($a=0;$a<count($arr);$a++) {
      if (is_array($arr[$a])) {
          $size_a = count($arr[$a]);
      } else {
          $elem=$arr[$a];
          echo "<span style='color:red'>$elem </span>";
          continue;
      }
      for ($b = 0; $b < $size_a; $b++) {
          if (is_array($arr[$a][$b])) {
              $size_b = count($arr[$a][$b]);
          } else {
              $elem=$arr[$a][$b];
              echo "<span style='color:blue'>$elem </span>";
              continue;
          }
          for ($c = 0; $c < $size_b; $c++) {
              if (is_array($arr[$a][$b][$c])) {
                  $size_c = count($arr[$a][$b][$c]);
              } else {
                  $elem=$arr[$a][$b][$c];
                  echo "<span style='color:green'>$elem </span>";
                  continue;
              }
              for ($d = 0; $d < $size_c; $d++) {
                  if (is_array($arr[$a][$b][$c][$d])) {
                      $size_d = count($arr[$a][$b][$c][$d]);
                  } else {
                      $elem=$arr[$a][$b][$c][$d];
                      echo "<span style='color:blueviolet'>$elem </span>";
                      continue;
                  }
                  for ($e = 0; $e < $size_d; $e++) {
                      $elem=$arr[$a][$b][$c][$d][$e];
                      echo "<span style='color:yellow'>$elem </span>";
                  }
              }
          }
      }
  }
  ?>
  </body>
</html>