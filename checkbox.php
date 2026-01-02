<!DOCTYPE html>
<html>
<head>
  <title>Registrasi</title>
</head>
<body>
<form action="contact.php" method="post">
  <fieldset>
    <legend>Registrasi</legend>
    <p>
      <label>Nama:</label>
      <input type="text" name="nama" placeholder="Nama lengkap..." />
    </p>
    <p>
      <label>Username:</label>
      <input type="text" name="username" placeholder="Username..." />
    </p>
    <p>
      <label>Email:</label>
      <input type="email" name="email" placeholder="Your email..." />
    </p>
    <p>
      <label>Password:</label>
      <input type="password" name="password" placeholder="Password..." />
    </p>
    <p>
      <label>Jenis kelamin:</label>
      <label><input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki</label>
      <label><input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan</label>
    </p>
    <p>
      <label>Agama:</label>
      <select name="agama">
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Hindu">Hindu</option>
        <option value="Budha">Budha</option>
      </select>
    </p>
    <p>
      <label>Biografi:</label>
      <textarea name="biografi"></textarea>
    </p>

    <p>
      <input type="submit" name="submit" value="Daftar" />
    </p>
  </fieldset>
</form>
</body>
</html>
