<?php
session_start();

if (!isset($_SESSION['userEmail']) && !isset($_SESSION['userType'])) {
    header('location: ../../index.php?err=invalid_request');
}

if ($_SESSION['userType'] != 'admin') {
    header('location: ../../index.php?err=invalid_request');
}

?>
<html>

<head>
    <title>Admin Home</title>
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
                <form method="post" action="../../controller/logout_controller.php">
                    <input type="submit" name="logoutSubmit" value="Log Out" />
                </form>
            </td>
        </tr>
        <tr>
            <td colspan="5" class="w-20" align="center">
                <h1><b>Welcome To Admin Home Page</b></h1>
            </td>
        </tr>
        <tr>
            <td colspan="2" class="w-20" align="center">
                <div class="menu-tile bg-color-darkgrey">
                    <a href="approved_book.php">
                        <h2>
                            Books
                        </h2>
                    </a>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2" class="w-20" align="center">
                <div class="menu-tile bg-color-steelblue">
                    <a href="approved_movie.php">
                        <h2>
                            Movies
                        </h2>
                    </a>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2" class="w-20" align="center">
                <div class="menu-tile bg-color-darkgrey">
                    <a href="approved_music.php">
                        <h2>
                            Musics
                        </h2>
                    </a>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2" class="w-20" align="center">
                <div class="menu-tile bg-color-steelblue">
                    <a href="approved_game.php">
                        <h2>
                            Games
                        </h2>
                    </a>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2" class="w-20" align="center">
                <div class="menu-tile bg-color-darkgrey">
                    <a href="approved_tv_series.php">
                        <h2>
                            Tv Series
                        </h2>
                    </a>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="5" class="w-20" align="center">
                <div class="menu-tile bg-color-darkgrey">
                    <a href="total_user.php">
                        <h2>
                            Total User
                        </h2>
                    </a>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2" class="w-20" align="center">
                <div class="menu-tile bg-color-steelblue">
                    <a href="total_content_creator.php">
                        <h2>
                            Total Content Creator
                        </h2>
                    </a>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2" class="w-20" align="center">
                <div class="menu-tile bg-color-darkgrey">
                    <a href="total_paid_subscriber.php">
                        <h2>
                            Total Paid Subscriber
                        </h2>
                    </a>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2" class="w-20" align="center">
                <div class="menu-tile bg-color-steelblue">
                    <a href="total_general_subscriber.php">
                        <h2>
                            Total General Subscriber
                        </h2>
                    </a>
                </div>
            </td>
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