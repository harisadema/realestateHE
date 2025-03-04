<!-- Template Name: Custom Login Page -->
<?php /* Template Name: Login Page */ ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <style>
    /* Background with dark overlay */
    body {
      background: url('<?php echo get_template_directory_uri(); ?>/images/login.jpg') no-repeat center center;
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 90vh;
      margin: 0;
    }
    .bg-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5); /* Darker background effect */
      z-index: 0;
    }
    .login-box {
      position: relative;
      z-index: 1;
      background: #DCD7C9;
      padding: 2.5rem;
      border-radius: 1rem;
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
      width: 100%;
      max-width: 420px;
    }
    h2 {
      font-size: 2rem;
      font-weight: bold;
      text-align: center;
      margin-bottom: 2rem;
      color: black;
    }
    label {
      display: block;
      font-size: 0.9rem;
      font-weight: 600;
      margin-bottom: 0.5rem;
      color: #333;
    }
    input {
      width: 94%;
      padding: 0.75rem;
      font-size: 1rem;
      border: 1px solid #ddd;
      border-radius: 0.5rem;
      margin-bottom: 1.5rem;
      transition: all 0.3s ease;
    }
    input:focus {
      outline: none;
      border-color: #000;
    }


    .login-btn {
      background: #A27B5C;
      color: #DCD7C9;
      padding: 0.75rem;
      font-size: 1rem;
      font-weight: bold;
      border: none;
      border-radius: 0.5rem;
      cursor: pointer;
      width: 100%;
      transition: all 0.3s ease;
    }
    .login-btn:hover {
      background: #8C5A38;
    }

  </style>
</head>
<body>
  <div class="bg-overlay"></div>

  <div class="login-box">
    <h2>Login to Your Account</h2>

    <form method="post" action="<?php echo wp_login_url(); ?>">
      <label for="user_login">Username or Email</label>
      <input type="text" id="user_login" name="log" required>

      <label for="user_pass">Password</label>
      <input type="password" id="user_pass" name="pwd" required>


      <button type="submit" class="login-btn" >Login</button>
    </form>


  </div>

  <?php wp_footer(); ?>
</body>
</html>
