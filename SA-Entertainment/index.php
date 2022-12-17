<?php
if (isset($_GET['err'])) {
  if ($_GET['err'] == 'invalid_request') {
    echo "invalid request error..";
  }

  if ($_GET['err'] == 'null') {
    echo "null username/password";
  }
}
?>

<html>

<head>
  <title>Index</title>
  <link rel="stylesheet" href="assets/style.css">
  <script src="script/login.js"></script>
</head>

<body>
  <table class="container-table">
    <tr class="top-menu-bar">
      <td class="w-20">
        <img class="logo" src="assets/common/logo.png" alt="Logo" />
      </td>
      <td colspan="4" align="right">

      </td>
    </tr>
    <tr>
      <td class="w-20"></td>
      <td class="w-15"></td>
      <td class="w-30">
        <form id="login_form" method="post" action="controller/login_controller.php">
          <fieldset>
            <legend>LOGIN</legend>
            <table>
              <tr>
                <td>Email </td>
                <td>:</td>
                <td><input type="email" id="email" name="email" value="" onblur="validateEmail()" required></td>
              </tr>
              <tr>
                <td>Password </td>
                <td>:</td>
                <td><input type="password" id="password" name="password" value="" onblur="validatePassword()" required></td>
              </tr>
            </table>
            <hr>
            <input type="submit" id="submit" name="submit" value="Login">
          </fieldset>
          <div width="100%" align="center">
            Register As <br>
            <a href="view/admin/registration.php" align="center">
              || Admin ||
            </a>
            <a href="view/paid_subscriber/registration.php" align="center">
              Paid Subscriber ||
            </a>
            <a href="view/general_subscriber/registration.php" align="center">
              General Subscriber ||
            </a>
            <a href="view/content_creator/registration.php" align="center">
              Content Creator ||
            </a>
          </div>
        </form>
      </td>
      <td class="w-15"></td>
      <td class="w-20"></td>
    </tr>
  </table>
</body>
<footer>
  <table class="footer-bar">
    <tr align="center">
      <td class="w-20"></td>
      <td class="w-20">
        <a href="../common/about_us.php">
          <span class="top-menu-item">
            About Us
          </span>
        </a>
      </td>
      <td class="w-20">
        <footer style="margin: 10px">Copyright &copy; 2022</footer>
      </td>
      <td class="w-20">
        <a href="../common/contact_us.php">
          <span class="top-menu-item">
            Contact Us
          </span>
        </a>
      </td>
      <td class="w-20"></td>
    </tr>
  </table>
</footer>

</html>