<?php
require_once(__DIR__ . '/../../controller/content_creator/profile_controller.php');

if (!isset($_SESSION['userEmail']) && !isset($_SESSION['userType'])) {
    header('location: ../../index.php?err=invalid_request');
}

if ($_SESSION['userType'] != 'content_creator') {
    header('location: ../../index.php?err=invalid_request');
}

$profileData = getProfileData();
?>

<html>

<head>
    <title>Content Creator | Profile</title>
    <link rel="stylesheet" href="../../assets/style.css">
</head>

<body>
    <table class="container-table">
        <tr class="top-menu-bar">
            <td class="w-20">
                <img class="logo" src="../../assets/common/logo.png" alt="Logo" />
            </td>
            <td colspan="4" align="right">
                <a href="notifications.php">
                    <span class="top-menu-item">
                        Notifications
                    </span>
                </a>
                <a href="settings.php">
                    <span class="top-menu-item">
                        Settings
                    </span>
                </a>
                <a href="profile.php">
                    <span class="top-menu-item">
                        My Profile
                    </span>
                </a>
                <a href="edit_profile.php">
                    <span class="top-menu-item">
                        Edit Profile
                    </span>
                </a>
                <form method="post" action="../../controller/logout_controller.php">
                    <input type="submit" name="logoutSubmit" value="Log Out" />
                </form>
            </td>
        </tr>
        <tr>
            <td rowspan="5" class="w-20">
                <?php if ($profileData['Picture'] == "") {
                ?>
                    <img src="../../assets/common/user.jpg" class="profile-picture" alt="Profile Picture">
                <?php
                } else {
                ?>
                    <img src="<?php echo $profileData['Picture'] . ".jpg"; ?>" class="profile-picture" alt="Profile Picture">
                <?php
                } ?>
            </td>
            <td class="w-20"></td>
            <td class="w-20">Name</td>
            <td class="w-20">
                <?php echo $profileData['Name']; ?>
            </td>
            <td class="w-20"></td>
        </tr>
        <tr>
            <td class="w-20"></td>
            <td class="w-20">
                <hr class="new1">Biography
            </td>
            <td class="w-20">
                <hr class="new1">
                <?php echo $profileData['Biography']; ?>
            </td>
            <td class="w-20"></td>
        </tr>
        <tr>
            <td class="w-20"></td>
            <td class="w-20">
                <hr class="new1">Gender
            </td>
            <td class="w-20">
                <hr class="new1">
                <?php echo $profileData['Gender']; ?>
            </td>
            <td class="w-20"></td>
        </tr>
        <tr>
            <td class="w-20"></td>
            <td class="w-20">
                <hr class="new1">Email
            </td>
            <td class="w-20">
                <hr class="new1">
                <?php echo $profileData['Email']; ?>
            </td>
            <td class="w-20"></td>
        </tr>
        <tr>
            <td class="w-20"></td>
            <td class="w-20">
                <hr class="new1">DOB
            </td>
            <td class="w-20">
                <hr class="new1">
                <?php echo $profileData['DOB']; ?>
            </td>
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