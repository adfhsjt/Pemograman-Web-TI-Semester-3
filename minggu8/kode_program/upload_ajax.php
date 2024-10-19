<?php
if (isset($_FILES['files']['name'][0])) {
    $totalFiles = count($_FILES['files']['name']);

    // Loop melalui semua file yang diunggah
    for ($i = 0; $i < $totalFiles; $i++) {
        $errors = array();
        $file_name = $_FILES['files']['name'][$i];
        $file_size = $_FILES['files']['size'][$i];
        $file_tmp = $_FILES['files']['tmp_name'][$i];
        $file_type = $_FILES['files']['type'][$i];
        @$file_ext = strtolower(end(explode('.', $file_name)));

        $extensions = array("png", "jpg", "jpeg", "gif");

        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "Ekstensi file yang diizinkan adalah PNG, JPG, JPEG, atau GIF.";
        }
        if ($file_size > 2097152) {
            $errors[] = 'Ukuran file tidak boleh lebih dari 2 MB';
        }
        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, "documents/" . $file_name);
            echo "File $file_name berhasil diunggah.";
        } else {
            echo "$file_name Gagal Diunggah!!<br> ";
            echo implode("<br>", $errors);
            echo "<br>";
        }
    }
}


