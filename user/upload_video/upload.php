<?php

if (isset($_POST['submit']) && isset($_FILES['my_video'])) {

    include "db_conn.php";

    $video_name = $_FILES['my_video']['name'];
    $tmp_name = $_FILES['my_video']['tmp_name'];
    $error = $_FILES['my_video']['error'];

    if ($error === 0) {
        $video_ex = pathinfo($video_name, PATHINFO_EXTENSION);
        $video_ex_lc = strtolower($video_ex);
        $allowed_exs = array("mp4", "webm", "avi", "flv");

        if (in_array($video_ex_lc, $allowed_exs)) {
            $new_video_name = uniqid("video-", true) . '.' . $video_ex_lc;
            $video_upload_path = 'uploads/' . $new_video_name;
            move_uploaded_file($tmp_name, $video_upload_path);

            // Sekarang, masukkan jalur video ke dalam database
            $sql = "INSERT INTO videos(video_url) VALUES('$new_video_name')";

            if (!mysqli_query($conn, $sql)) {
                echo "Error: " . mysqli_error($conn);
            } else {
                header("Location: view.php");
            }
        } else {
            $em = "Anda tidak dapat mengunggah jenis file ini";
            header("Location: index.php?error=$em");
        }
    }

} else {
    header("Location: index.php");
}
