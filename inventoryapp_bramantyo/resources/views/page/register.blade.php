<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
</head>

<body>
  <header>
    <h1>Buat Account Baru!</h1>
    <br>
    <p><a href="/">Kembali Halaman Utama</a></p>
  </header>
  <main>
    <h2>Sign Up Form</h2>
    <form action="/welcome" method="POST">
      @csrf
      <label for="first-name">First Name:</label><br>
      <input type="text" id="first-name" name="first-name" required><br>
      <br>

      <label for="last-name">Last Name:</label><br>
      <input type="text" id="last-name" name="last-name" required><br>
      <br>

      <label for="gender">Gender:</label><br>
      <br>
      <input type="radio" id="gender-male" name="gender" value="male">
      <label for="gender-male">Male</label>
      <br>

      <input type="radio" id="gender-female" name="gender" value="female">
      <label for="gender-female">Female</label>
      <br>

      <input type="radio" id="gender-other" name="gender" value="other">
      <label for="gender-other">Other</label>
      <br>
      <br>


      <label for="nationality">Nationality</label><br>
      <br>
      <select id="nationality" name="nationality" required>
        <option value="indonesia">Indonesian</option>
        <option value="malaysia">Malaysian</option>
        <option value="singapore">Singaporean</option>
        <option value="australia">Australian</option>
        <option value="cambodia">Cambodian</option>
      </select>
      <br>
      <br>

      <label for="language">Language Spoken:</label><br>
      <br>
      <input type="checkbox" id="language-bahasa" name="language" value="bahasa">
      <label for="language-bahasa">Bahasa Indonesia</label>
      <br>

      <input type="checkbox" id="language-english" name="language" value="english">
      <label for="language-english">English</label>
      <br>

      <input type="checkbox" id="language-other" name="language" value="other">
      <label for="language-other">Other</label>
      <br>
      <br>

      <label for="bio">Bio:</label><br>
      <textarea id="bio" name="bio" rows="7" cols="30" placeholder="Tell us about yourself..."
        required></textarea>
      <br>
      <input type="submit" value="Sign Up">

    </form>
  </main>

</body>

</html>
