<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SIGN.IN</title>
    <link rel="stylesheet" href="css\styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
  </head>
  <body>
    <div class="container">
      <div class="title">Registration</div>
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name:</span>
            <input type="text" placeholder="Enter your Name" required>
          </div>
          <div class="input-box">
            <span class="details">Username:</span>
            <input type="text" placeholder="Enter your Username" required>
          </div>
          <div class="input-box">
            <span class="details">Email:</span>
            <input type="email" placeholder="Enter your Email">
          </div>
          <div class="input-box">
            <span class="details">Phone-Number:</span>
            <input type="tel" placeholder="Enter your Number" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required>
          </div>
          <div class="input-box">
            <span class="details">Password:</span>
            <input type="password" placeholder="Enter your Password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password:</span>
            <input type="password" placeholder="Confirm your Password"required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title">Gender:</span>
          <div class="category">
            <label for="dot-1">
              <span class="dot one"></span>
              <sapn class="gender">Male</sapn>
            </label>
            <label for="dot-2">
              <span class="dot two"></span>
              <sapn class="gender">Female</sapn>
            </label>
            <label for="dot-3">
              <span class="dot three"></span>
              <sapn class="gender">Other</sapn>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="REGISTER">
        </div>
      </form>
    </div>
  </body>
</html>
