<?php
session_start();
if (!isset($_SESSION['userEmail']) && !isset($_SESSION['userType'])) {
    header('location: ../../index.php?err=invalid_request');
}

if ($_SESSION['userType'] != 'content_creator') {
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
    <title>Content Creator | Upload Music </title>
    <link rel="stylesheet" href="../../assets/style.css">
    <script src="../../script/content_creator/upload_music.js"></script>
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
                    <form method="post" action="../../controller/content_creator/upload_music_controller.php" enctype="multipart/form-data">
                        <table class="w-100">
                            <tr>
                                <td class="w-25"></td>
                                <td class="w-25">Title</td>
                                <td class="w-25">
                                    <input type="text" id="title" name="title" value="" onblur="validateTitle()" required />
                                </td>
                                <td class="w-25"></td>
                            </tr>
                            <tr>
                                <td class="w-25"></td>
                                <td class="w-25">Artist</td>
                                <td class="w-25">
                                    <input type="text" id="artist" name="artist" value="" onblur="validateArtist()" required />
                                </td>
                                <td class="w-25"></td>
                            </tr>
                            <tr>
                                <td class="w-25"></td>
                                <td class="w-25">Genre</td>
                                <td class="w-25">
                                    <input type="text" id="genre" name="genre" value="" onblur="validateGenre()" required />
                                </td>
                                <td class="w-25"></td>
                            </tr>
                            <tr>
                                <td class="w-25"></td>
                                <td class="w-25">File</td>
                                <td class="w-25">
                                    <input type="file" id="musicFile" name="musicFile" value="" onblur="validateMusicFile()" accept=".mp3" required />
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
                                    <input type="submit" id="submit" name="submit" value="Upload Music" />
                                </td>
                                <td class="w-25"></td>
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