<!DOCTYPE html>
<html>
<head>
  <title>Hasil Registrasi</title>
</head>
<body>

<h3>Hasil Registrasi</h3>

<?php
if (isset($_POST["submit"])) {
  echo "Nama: " . ($_POST["nama"] ?? "") . "<br>";
  echo "Username: " . ($_POST["username"] ?? "") . "<br>";
  echo "Email: " . ($_POST["email"] ?? "") . "<br>";
  echo "Password: " . ($_POST["password"] ?? "") . "<br>";
  echo "Jenis Kelamin: " . ($_POST["jenis_kelamin"] ?? "") . "<br>";
  echo "Agama: " . ($_POST["agama"] ?? "") . "<br>";
  echo "Biografi: " . nl2br($_POST["biografi"] ?? "") . "<br>";
} else {
  echo "Form belum dikirim.";
}
?>

</body>
</html>
