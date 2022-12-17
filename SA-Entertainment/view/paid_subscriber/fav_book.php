<?php
require_once(__DIR__ . '/../../controller/paid_subscriber/fav_book_controller.php');

if (!isset($_SESSION['userEmail']) && !isset($_SESSION['userType'])) {
    header('location: ../../index.php?err=invalid_request');
}

if ($_SESSION['userType'] != 'paid_subscriber') {
    header('location: ../../index.php?err=invalid_request');
}

$books = getPaidSubscriberFavBooks();
?>

<html>

<head>
    <title>Paid Subscriber | Favorite Books</title>
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
            <th class="w-20"></th>
            <th class="w-20"></th>
            <th class="w-20">Title</th>
            <th class="w-20"></th>
            <th class="w-20"></th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($books)) {
            $title = $row['BookTitle'];
        ?>
            <tr>
                <td class="w-20">
                </td>
                <td class="w-20">
                </td>
                <td class="w-20">
                    <?php echo $title ?>
                </td>
                <td class="w-20">
                </td>
                <td class="w-20">
                </td>
            </tr>
        <?php
        }
        ?>
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