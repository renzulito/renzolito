  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - LilyAqua Creations</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body class="background-image">

    <div class="headings">
      <div class="logo">
        <a href="index.html" class="logo-link">
          <img src="ima/pinklogo.jpg" alt="LilyAqua Creations Logo">
        </a>
      </div>
      <div class="title">
        <h1>LilyAqua Creations</h1>
      </div>
    </div>
    <hr>

    <main class="login-container">
      <h2>Welcome Back!</h2>
      <form action="admin.html" class="login-form">
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" placeholder="Enter your username">
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" placeholder="Enter your password" required>
        </div>
        <button type="submit">Login</button>
      </form>
      <div class="agreement">
        <input type="checkbox" id="agree" name="agree">
        <label for="agree">
          I have read and agree to the <a href="https://privacy.gov.ph/data-privacy-act/" target="_blank">R.A. 10173, also known as the Data Privacy Act of 2012 (DPA)</a>.
        </label>
      </div>
    </main>

    <footer>
      <hr>
      <p>&COPY; Copyright 2024 Renz Patrick Angelo R. Bison, All Rights Reserved | <a href="index.html">Home</a></p>
    </footer>

  </body>
  </html>
  <?php
  session_start();
  ?>
