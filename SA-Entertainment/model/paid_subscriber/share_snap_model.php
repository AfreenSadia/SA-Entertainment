<?php
require_once(__DIR__ . '/../db_conn.php');

function insertSnap($share_snap)
{
    $connection = getConnection();
    $sqlQuery = "INSERT INTO share_snap(Caption,File,UploadedBy,UploadedAt,IsOpenForGenSub) VALUES
                ('{$share_snap['caption']}','{$share_snap['file']}','{$share_snap['uploadedBy']}','{$share_snap['uploadedAt']}','{$share_snap['isOpenForGenSub']}')";

    $status = mysqli_query($connection, $sqlQuery);
    mysqli_close($connection);
    return $status;
}
?>
<!-- . -->