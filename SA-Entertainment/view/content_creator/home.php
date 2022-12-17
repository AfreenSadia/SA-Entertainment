<?php
session_start();

if (!isset($_SESSION['userEmail']) && !isset($_SESSION['userType'])) {
    header('location: ../../index.php?err=invalid_request');
}

if ($_SESSION['userType'] != 'content_creator') {
    header('location: ../../index.php?err=invalid_request');
}

?>

<html>

<head>
    <title>Content Creator | Home</title>
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
            <td colspan="5">
                <h1>
                    Upload Contents
                </h1>
            </td>
        </tr>
        <tr>
            <td class="w-20">
                <div class="menu-tile bg-color-gray">
                    <a href="upload_book.php">
                        <h2>
                            Upload Books
                        </h2>
                    </a>
                </div>
            </td>
            <td class="w-20">
                <div class="menu-tile bg-color-skyblue">
                    <a href="upload_movie.php">
                        <h2>
                            Upload Movies
                        </h2>
                    </a>
                </div>
            </td>
            <td class="w-20">
                <div class="menu-tile bg-color-gray">
                    <a href="upload_music.php">
                        <h2>
                            Upload Music
                        </h2>
                    </a>
                </div>
            </td>
            <td class="w-20">
                <div class="menu-tile bg-color-skyblue">
                    <a href="upload_tv_series.php">
                        <h2>
                            Upload TV Series
                        </h2>
                    </a>
                </div>
            </td>
            <td class="w-20">
                <div class="menu-tile bg-color-gray">
                    <a href="upload_game.php">
                        <h2>
                            Upload Games
                        </h2>
                    </a>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="5">
                <h1>
                    Uploaded Contents
                </h1>
            </td>
        </tr>
        <tr>
            <td class="w-20">
                <div class="menu-tile bg-color-gray">
                    <a href="uploaded_book.php">
                        <h2>
                            Uploaded Books
                        </h2>
                    </a>
                </div>
            </td>
            <td class="w-20">
                <div class="menu-tile bg-color-skyblue">
                    <a href="uploaded_movie.php">
                        <h2>
                            Uploaded Movies
                        </h2>
                    </a>
                </div>
            </td>
            <td class="w-20">
                <div class="menu-tile bg-color-gray">
                    <a href="uploaded_music.php">
                        <h2>
                            Uploaded Music
                        </h2>
                    </a>
                </div>
            </td>
            <td class="w-20">
                <div class="menu-tile bg-color-skyblue">
                    <a href="uploaded_tv_series.php">
                        <h2>
                            Uploaded TV Series
                        </h2>
                    </a>
                </div>
            </td>
            <td class="w-20">
                <div class="menu-tile bg-color-gray">
                    <a href="uploaded_game.php">
                        <h2>
                            Uploaded Games
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