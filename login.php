<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login / Sign Up - furni.shop</title>
    <link rel="stylesheet" href="login.css" />
  </head>
  <body>
    <div class="form__container">
      <div class="form__box">
        <!-- Login Form -->
        <form id="loginForm" class="login__form active">
          <h2>Login to Your Account</h2>
          <div class="form__group">
            <label for="login-email">Email</label>
            <input type="email" id="login-email" placeholder="Enter your email" required />
          </div>
          <div class="form__group">
            <label for="login-password">Password</label>
            <input type="password" id="login-password" placeholder="Enter your password" required />
          </div>
          <div class="form__group">
            <button type="submit" class="btn login__btn">Login</button>
          </div>
          <p>Don't have an account? <a href="#" id="showSignup">Sign Up</a></p>
        </form>

        <!-- Sign Up Form -->
        <form id="signupForm" class="signup__form">
          <h2>Create a New Account</h2>
          <div class="form__group">
            <label for="signup-username">Username</label>
            <input type="text" id="signup-username" placeholder="Enter your username" required />
          </div>
          <div class="form__group">
            <label for="signup-email">Email</label>
            <input type="email" id="signup-email" placeholder="Enter your email" required />
          </div>
          <div class="form__group">
            <label for="signup-password">Password</label>
            <input type="password" id="signup-password" placeholder="Enter your password" required />
          </div>
          <div class="form__group">
            <label for="signup-confirm-password">Confirm Password</label>
            <input
              type="password"
              id="signup-confirm-password"
              placeholder="Confirm your password"
              required
            />
          </div>
          <div class="form__group">
            <button type="submit" class="btn signup__btn">Sign Up</button>
          </div>
          <p>Already have an account? <a href="#" id="showLogin">Login</a></p>
        </form>
      </div>
    </div>

    <script src="login.js"></script>
  </body>
</html>
