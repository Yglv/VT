<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HTML table</title>
</head>
<body>
<table style="border-collapse: collapse;border:2px solid black">
    <?php
    if(isset($_GET['rows']))
        $num_of_rows = ($_GET['rows']);
    else return;
    $step = 256 / $num_of_rows;
    $color = 255;
    for ($i=0; $i < $num_of_rows; $i++) {
        $color_string = sprintf("%02X%02X%02X", $color, $color, $color);
        echo "<tr bgcolor='$color_string' style='display:block;width: 200px'>
               <td style=';border: 2px solid black; width: 200px'>$i</td>
               </tr>";
        $color -= $step;
    }
    ?>
</table>
</body>
</html>