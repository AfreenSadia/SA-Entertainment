<?php
session_start();
if (!isset($_SESSION['userEmail']) && !isset($_SESSION['userType'])) {
    header('location: ../../index.php?err=invalid_request');
}

if ($_SESSION['userType'] != 'paid_subscriber') {
    header('location: ../../index.php?err=invalid_request');
}

if (isset($_GET['err'])) {
    echo $_GET['err'];
}

if (isset($_GET['msg'])) {
    echo $_GET['msg'];
}
?>

<html>

<head>
    <title>Paid Subscriber | Share Snap</title>
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
            <!-- <tr>
                <td>
                    
                </td>
            </tr> -->
            <tr class = "body">
                <td colspan="5" align="center">
                        <h2>
                            Share Snap with world!!
                        </h2>
                    <form method="post" action="../../controller/paid_subscriber/share_snap_controller.php" enctype="multipart/form-data">
                    <fieldset>
                        <legend style="color: blue;"><b>SHARE SNAP!!</b></legend>
                        <table class="w-100">
                             <tr>
                                <td class="w-25"></td>
                                <td class="w-25">Caption</td>
                                <td class="w-25">
                                    <input type="text" id="caption" name="caption" value="" required />
                                </td>
                                <td class="w-25"></td>
                            </tr>
                            <tr>
                                <td class="w-25"></td>
                                <td class="w-25">File</td>
                                <td class="w-25">
                                    <input type="file" id="pictureFile" name="pictureFile" value="" required />
                                </td>
                                <td class="w-25"></td>
                            </tr>
                            <tr>
                                <td class="w-25"></td>
                                <td class="w-25">Is Open for General Subscriber</td>
                                <td class="w-25">
                                    <input type="radio" id="y" name="isOpenForGenSub" value="y" required /> Yes
                                    <input type="radio" id="n" name="isOpenForGenSub" value="n" /> No
                                </td>
                                <td class="w-25"></td>
                            </tr>
                            <tr>
                                <td class="w-25"></td>
                                <td class="w-25"></td>
                                <td class="w-25">
                                    <input type="submit" id="submit" name="submit" value="share" />
                                </td>
                                <td class="w-25"></td>
                            </tr>
                            </fieldset>
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