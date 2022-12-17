<?php
require_once(__DIR__ . '/../../controller/general_subscriber/movie_controller.php');

if (!isset($_SESSION['userEmail']) && !isset($_SESSION['userType'])) {
    header('location: ../../index.php?err=invalid_request');
}

if ($_SESSION['userType'] != 'general_subscriber') {
    header('location: ../../index.php?err=invalid_request');
}

$movies = getGeneralSubscriberMovies();
?>

<html>

<head>
    <title>General Subscriber | Movies</title>
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
            <th class="w-20">Title</th>
            <th class="w-20">Author</th>
            <th class="w-20">Genre</th>
            <th class="w-20">Uploaded At</th>
            <th class="w-20">Action</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($movies)) {
            $title = $row['Title'];
            $author = $row['Author'];
            $genre = $row['Genre'];
            $uploadedAt = $row['UploadedAt'];
            $filePath = $row['File'];
        ?>
            <tr>
                <td class="w-20">
                    <?php echo $title ?>
                </td>
                <td class="w-20">
                    <?php echo $author ?>
                </td>
                <td class="w-20">
                    <?php echo $genre ?>
                </td>
                <td class="w-20">
                    <?php echo $uploadedAt ?>
                </td>
                <td class="w-20">
                    <a href="<?php echo $filePath . ".mp4" ?>">Download</a>&nbsp;&nbsp;&nbsp;
                    <input type="button" value="Add to Favourite" onclick="addToFavAjax('<?php echo $title ?>', '<?php echo $_SESSION['userEmail'] ?>')">
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
<script>
    function addToFavAjax(title, email) {
        if (!title) {
            alert('Title cannot be empty');
            return;
        }

        if (!email) {
            alert('Email cannot be empty');
            return;
        }

        let fav = {
            'title': title,
            'email': email
        };

        let data = JSON.stringify(fav);

        let xhttp = new XMLHttpRequest();
        xhttp.open('POST', '../../controller/general_subscriber/add_fav_movie_controller.php?', true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send('json=' + data);
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                alert(this.responseText);
            }
        }
    }
</script>

</html>