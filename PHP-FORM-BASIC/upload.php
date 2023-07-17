<!-- <?php
echo '<h1>Imagenes cargadas exitosamente</h1>';

if (isset($_POST['upload'])) {
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $comment = $_POST['comment'];

    echo "Name escrito en el input: $name<br>";
    echo "Lastname escrito en el input: $lastname<br>";
    echo "Género seleccionado en el radio: $gender<br>";
    echo "Comentario escrito en el textarea: $comment<br>";

    if (!empty($_FILES['file1']['name'])) {
        $file1Name = $_FILES['file1']['name'];
        $file1Tmp = $_FILES['file1']['tmp_name'];
        move_uploaded_file($file1Tmp, "uploads/$file1Name");
        echo "File 1: $file1Name<br>";
        echo '<img src="uploads/' . $file1Name . '" alt="Imagen 1" style="width: 150px;"><br>';
    }

    if (!empty($_FILES['file2']['name'])) {
        $file2Name = $_FILES['file2']['name'];
        $file2Tmp = $_FILES['file2']['tmp_name'];
        $file2Name = "2_" . $file2Name;
        move_uploaded_file($file2Tmp, "uploads/$file2Name");
        echo "File 2: $file2Name<br>";
        echo '<img src="uploads/' . $file2Name . '" alt="Imagen 2" style="width: 150px;"><br>';
    }

    if (!empty($_FILES['file3']['name'])) {
        $file3Name = $_FILES['file3']['name'];
        $file3Tmp = $_FILES['file3']['tmp_name'];
        $targetPath = "uploads/$file3Name";

        if (file_exists($targetPath)) {
            $file3Name = "3_" . $file3Name;
        }

        move_uploaded_file($file3Tmp, "uploads/$file3Name");
        echo "File 3: $file3Name<br>";
        echo '<img src="uploads/' . $file3Name . '" alt="Imagen 3" style="width: 150px;"><br>';
    }
}

echo '<a class="btn upload-more-btn" href="index.php">Cargar más</a>';
?> -->











<?php
echo '<h1>Imagenes cargadas exitosamente</h1>';

if (isset($_POST['upload'])) {
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $comment = $_POST['comment'];

    $frontEndChecked = isset($_POST['front']) ? $_POST['front'] : '';
    $fullStackChecked = isset($_POST['fullStack']) ? $_POST['fullStack'] : '';
    $femCodersChecked = isset($_POST['femCoders']) ? $_POST['femCoders'] : '';
    $password = $_POST['password'];

    echo "Name escrito en el input: $name<br>";
    echo "Lastname escrito en el input: $lastname<br>";
    echo "Género seleccionado en el radio: $gender<br>";
    echo "Comentario escrito en el textarea: $comment<br>";
    echo "Bootcamp seleccionado:<br>";
    
    if ($frontEndChecked != '') {
        echo "Front-end<br>";
    }
    if ($fullStackChecked != '') {
        echo "Full-stack<br>";
    }
    if ($femCodersChecked != '') {
        echo "FemCoders<br>";
    }
    echo "Contraseña escrita:  $password<br>";

    echo '<div style="display: flex; flex-direction: row; margin: 20px; font-size:20px; font-weight: bolder;">'; 

    if (!empty($_FILES['file1']['name'])) {
        $file1Name = $_FILES['file1']['name'];
        $file1Tmp = $_FILES['file1']['tmp_name'];
        move_uploaded_file($file1Tmp, "uploads/$file1Name");
        echo "File 1: $file1Name<br>";
        echo '<img src="uploads/' . $file1Name . '" alt="Imagen 1" style="width: 150px;">';
    }

    if (!empty($_FILES['file2']['name'])) {
        $file2Name = $_FILES['file2']['name'];
        $file2Tmp = $_FILES['file2']['tmp_name'];
        $file2Name = "2_" . $file2Name;
        move_uploaded_file($file2Tmp, "uploads/$file2Name");
        echo "File 2: $file2Name<br>";
        echo '<img src="uploads/' . $file2Name . '" alt="Imagen 2" style="width: 150px;">';
    }

    if (!empty($_FILES['file3']['name'])) {
        $file3Name = $_FILES['file3']['name'];
        $file3Tmp = $_FILES['file3']['tmp_name'];
        $targetPath = "uploads/$file3Name";

        if (file_exists($targetPath)) {
            $file3Name = "3_" . $file3Name;
        }

        move_uploaded_file($file3Tmp, "uploads/$file3Name");
        echo "File 3: $file3Name<br>";
        echo '<img src="uploads/' . $file3Name . '" alt="Imagen 3" style="width: 150px;">';
    }

    echo '</div>'; 
}

echo '<a style="display: flex;justify-content:center; margin: 20px;" href="index.php">Volver al Formulario</a>';
?>


