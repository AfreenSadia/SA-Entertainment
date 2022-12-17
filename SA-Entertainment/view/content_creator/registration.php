<?php
   
?>

<html>

<head>
  <title>Content Creator Registration</title>
  <link rel="stylesheet" href="../../assets/style.css">
  <script src="../../script/content_creator/registration.js"></script>
</head>

<body>
  <table class="container-table">
    <tr class="top-menu-bar">
      <td class="w-20">
        <img class="logo" src="../../assets/common/logo.png" alt="Logo" />
      </td>
      <td colspan="4" align="right">
        <a href="../../index.php">
          <span class="top-menu-item">
            Login
          </span>
        </a>
      </td>
    </tr>
    <tr>
      <td class="w-20"></td>
      <td class="w-15"></td>
      <td class="w-30">
        <form id="registration_form" method="post" action="../../controller/content_creator/registration_controller.php">
          <fieldset>
            <legend>CONTENT CREATOR REGISTRATION</legend>
            <table>
              <tr>
                <td>Name </td>
                <td>:</td>
                <td>
                  <input type="text" id="name" name="name" value="" onblur="validateName()" required></td>
              </tr>
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
              <tr>
                <td>Confirm Password </td>
                <td>:</td>
                <td><input type="password" id="confirmPassword" name="confirmPassword" onblur="validateConfirmPassword()" required></td>
              </tr>
            </table>
            <hr>
            <table>
              <tr>
                <fieldset>
                  <legend>Gender</legend>
                  <input type="radio" id="male" name="gender" value="Male" required /> Male
                  <input type="radio" id="female" name="gender" value="Female" /> Female
                  <input type="radio" id="other" name="gender" value="Other" /> Other
                </fieldset>
              </tr>
              <tr>
                <fieldset>
                  <legend>Date of Birth</legend>
                  <input type="date" id="dob" name="dob" onblur="validateDob()" required>
                </fieldset>
              </tr>
            </table>
            <hr>
            <input type="submit" id="submit" name="submit" value="Register">
            <input type="button" id="reset" name="reset" value="Reset" onclick="resetRegistration()">
          </fieldset>
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