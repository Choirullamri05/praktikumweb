<?php error_reporting(0); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Kalkulator Operator</title>
</head>
<body>

<form action="" method="post">
  <label>Bilangan 1 :</label>
  <input type="text" name="bil1"><br>

  <label>Bilangan 2 :</label>
  <input type="text" name="bil2"><br>

  <label>Operator :</label>
  <select name="op">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
  </select><br><br>

  <input type="submit" name="hitung" value="Hitung">
</form>

<?php
if (isset($_POST["hitung"])) {
  $a = (float)($_POST["bil1"] ?? 0);
  $b = (float)($_POST["bil2"] ?? 0);
  $op = $_POST["op"] ?? "+";

  switch ($op) {
    case "+": $hasil = $a + $b; break;
    case "-": $hasil = $a - $b; break;
    case "*": $hasil = $a * $b; break;
    case "/": $hasil = ($b == 0) ? "Tidak bisa dibagi 0" : ($a / $b); break;
    default: $hasil = "Operator tidak valid";
  }

  echo "<h2>Hasil Adalah : $hasil</h2>";
}
?>

</body>
</html>
