<html>
<body>
<?php
$pdo = new PDO("mysql:host=localhost;dbname=blueshop;charset=utf8", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $pdo->prepare("SELECT * FROM product");
$stmt->execute();
echo"<table border='1'>";
echo "<tr>";
echo "<th>"; echo "รหัสสินค้า : " ; echo "</th>"; 
echo "<th>"; echo "ชื่อสินค้า  : "; echo "</th>";
echo "<th>";  echo "รายละเอียดสินค้า  : " ; echo "</th>";
echo "<th>"; echo "ราคา: " ; echo "</th>";
echo "</tr>";

while($row = $stmt->fetch())
{
    echo "<tr>";
    echo "<td>" .$row["pid"] ."</td>";
    echo "<td>".$row ["pname"] . "</td>";
    echo "<td>".$row ["pdetail"] ."</td>";
    echo "<td>".$row ["price"] . " บาท "."</td>";
    echo "</tr>";
}
echo"</table>";
?>
</body>
</html>