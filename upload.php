<?php
$target_dir = "assets/img/";

$target_file = $target_dir . basename(str_replace(" ", "", $_FILES["image"]["name"]));
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Cek apakah file adalah gambar
$check = getimagesize($_FILES["image"]["tmp_name"]);
if ($check === false) {
    echo "File is not an image.";
    $uploadOk = 0;
}

// Cek apakah file sudah ada
if (file_exists($target_file)) {
    // Tambahkan timestamp biar gak nabrak
    $target_file = $target_dir . time() . "_" . basename($_FILES["image"]["name"]);
}

// Cek ukuran file
if ($_FILES["image"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Cek ekstensi
$allowed_types = ["jpg", "jpeg", "png", "gif"];
if (!in_array($imageFileType, $allowed_types)) {
    echo "Only JPG, JPEG, PNG & GIF allowed.";
    $uploadOk = 0;
}

// Upload file
if ($uploadOk == 1) {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        // Berhasil upload
    } else {
        echo "Error uploading file.";
        $target_file = null;
    }
} else {
    $target_file = null;
}
?>
