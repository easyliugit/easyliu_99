<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>基礎九九乘法表</title>
</head>
<body>
<?php 
<h3>基礎九九乘法表</h3>
for($j=1;$j<=9;$j++){ //行
    echo '<tr>'; 
    for($i=1;$i<=9;$i++){ //列
        echo "<td> $j X $i =" . ($j*$i) . "</td>";
     }
    echo "</tr>";
}
?>
</body>
</html>