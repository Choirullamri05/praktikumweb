<?php error_reporting(0); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Kalkulator</title>
</head>
<body>

<form action="" method="post">
  <label>Bilangan 1 :</label>
  <input type="text" name="bil1"><br>

  <label>Bilangan 2 :</label>
  <input type="text" name="bil2"><br>

  <input type="submit" value="Hitung">
</form>

<?php
$bilangan1 = $_POST["bil1"];
$bilangan2 = $_POST["bil2"];
$hitung = $bilangan1 + $bilangan2;

if (isset($_POST["bil1"]) && isset($_POST["bil2"])) {
  echo "<h2>Hasil Adalah : $hitung</h2>";
}
?>

</body>
</html>
