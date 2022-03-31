<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  <table style='border-collapse: collapse;border:2px solid black'>
    <?php
      $num_of_rows=$_GET['rows'];
      for ($i=1;$i<=$num_of_rows;$i++)
        echo "<tr style='display:block;width: 200px'>
        <td style='border: 2px solid black; width: 200px'>$i</td>
        </tr>";
      ?>
  </table>
</body>
</html>

