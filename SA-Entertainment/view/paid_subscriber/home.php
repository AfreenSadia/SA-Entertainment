<?php
session_start();

if (!isset($_SESSION['userEmail']) && !isset($_SESSION['userType'])) {
    header('location: ../../index.php?err=invalid_request');
}

if ($_SESSION['userType'] != 'paid_subscriber') {
    header('location: ../../index.php?err=invalid_request');
}
?>

<html>

<head>
    <title>Paid Subscriber Home</title>
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
                <a href="share_snap.php">
                    <span class="top-menu-item">
                        Snap!
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
            <td class="w-20">
                <div class="menu-tile bg-color-gray">
                    <a href="book.php">
                        <h2>
                            Books
                        </h2>
                    </a>
                </div>
            </td>
            <td class="w-20">
                <div class="menu-tile bg-color-mediumaquamarine">
                    <a href="movie.php">
                        <h2>
                            Movies
                        </h2>
                    </a>
                </div>
            </td>
            <td class="w-20">
                <div class="menu-tile bg-color-gray">
                    <a href="music.php">
                        <h2>
                            Music
                        </h2>
                    </a>
                </div>
            </td>
            <td class="w-20">
                <div class="menu-tile bg-color-mediumaquamarine">
                    <a href="tv_series.php">
                        <h2>
                            TV Series
                        </h2>
                    </a>
                </div>
            </td>
            <td class="w-20">
                <div class="menu-tile bg-color-gray">
                    <a href="game.php">
                        <h2>
                            Games
                        </h2>
                    </a>
                </div>
            </td>
        </tr>
        <!-- <tr>
            <td colspan="5">
                <h1 align="center">
                    What's new!!
                </h1>
            </td>
        </tr> -->
        <tr>
            <td width="16%">
                <img height="20%" width="100%" src="../../assets/paid_subscriber/images/books.jpg" alt="book">
            </td>
            <td width="16%">
                <img height="20%" width="100%" src="../../assets/paid_subscriber/images/movie.jpg" alt="movie">
            </td>
            <td width="16%">
                <img height="20%" width="100%" src="../../assets/paid_subscriber/images/music.jpg" alt="music">
            </td>
            <td width="16%">
                <img height="20%" width="100%" src="../../assets/paid_subscriber/images/series.jpg" alt="series">
            </td>
            <td width="16%">
                <img height="20%" width="100%" src="../../assets/paid_subscriber/images/game.jpg" alt="game">
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