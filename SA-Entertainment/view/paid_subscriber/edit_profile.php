<?php
require_once(__DIR__ . '/../../controller/paid_subscriber/profile_controller.php');

if (!isset($_SESSION['userEmail']) && !isset($_SESSION['userType'])) {
    header('location: ../../index.php?err=invalid_request');
}

if ($_SESSION['userType'] != 'paid_subscriber') {
    header('location: ../../index.php?err=invalid_request');
}

$profileData = getProfileData();
?>

<html>

<head>
    <title>Paid Subscriber | Edit Profile</title>
    <link rel="stylesheet" href="../../assets/style.css">
</head>

<body>
    <table class="container-table">
        <tbody>
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
                    <form method="post" action="../../controller/logout_controller.php">
                        <input type="submit" name="logoutSubmit" value="Log Out" />
                    </form>
                </td>
            </tr>
            <tr>
                <td colspan="5">
                    <form method="post" action="../../controller/paid_subscriber/edit_profile_controller.php" enctype="multipart/form-data">
                        <table>
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
                                    <input type="file" id="profilePicture" name="profilePicture" value="" />
                                </td>
                                <td class="w-20"></td>
                                <td class="w-20">Name</td>
                                <td class="w-20">
                                    <input type="text" id="name" name="name" value="<?php echo $profileData['Name']; ?>" />
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
                                    <textarea type="text" rows="5" id="biography" name="biography">
                                    <?php echo $profileData['Biography']; ?>
                                </textarea>
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
                            <tr>
                                <td class="w-20"></td>
                                <td class="w-20"></td>
                                <td class="w-20"></td>
                                <td class="w-20">
                                    <input type="submit" id="submit" name="submit" value="Save" />
                                </td>
                                <td class="w-20"></td>
                            </tr>
                        </table>
                    </form>
                </td>
            </tr>
        </tbody>

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