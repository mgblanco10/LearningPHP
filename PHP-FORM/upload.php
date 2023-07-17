<?php
if(isset($_FILES['file1']) && isset($_FILES['file2']) && isset($_FILES['file3'])) {
    $file1 = $_FILES['file1'];
    $file2 = $_FILES['file2'];
    $file3 = $_FILES['file3'];

    $filename1 = $file1['name'];
    $filename2 = $file2['name'];
    $filename3 = $file3['name'];

    $allowed_types = array("image/jpg", "image/jpeg", "image/png");
    if(!in_array($file1['type'], $allowed_types) || !in_array($file2['type'], $allowed_types) || !in_array($file3['type'], $allowed_types)){
        header("Location: index.php");
        exit();
    }

    $uploadDir = "uploads/";

    move_uploaded_file($file1['tmp_name'], $uploadDir . $filename1);

    $numberedFilename2 = $filenameWithoutExtension2 = pathinfo($filename2, PATHINFO_FILENAME) . "_2." . pathinfo($filename2, PATHINFO_EXTENSION);
    move_uploaded_file($file2['tmp_name'], $uploadDir . $numberedFilename2);

    $extension3 = pathinfo($filename3, PATHINFO_EXTENSION); 
    $filenameWithoutExtension3 = pathinfo($filename3, PATHINFO_FILENAME); 

    $finalFilename3 = $filenameWithoutExtension3 . "_3." . $extension3;
    $counter = 1;
    while(file_exists($uploadDir . $finalFilename3)){
        $finalFilename3 = $filenameWithoutExtension3 . "_3_" . $counter . "." . $extension3;
        $counter++;
    }
    move_uploaded_file($file3['tmp_name'], $uploadDir . $finalFilename3);

    header("Location: success.php?filename1=" . urlencode($filename1) . "&filename2=" . urlencode($numberedFilename2) . "&filename3=" . urlencode($finalFilename3));
    exit();
} else {
    header("Location: index.php");
    exit();
}
?>



<!DOCTYPE html>
<html>
    <head>
        <title>Upload Images php</title>
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <div class="container">
            <h1>Imagen cargada exitosamente</h1>
            <img src="uploads/<?= $filename ?>" alt="imagen cargada">
            <a class="btn upload-more-btn" href="index.php">Más descargas</a>
        </div>
    </body>
</html>

