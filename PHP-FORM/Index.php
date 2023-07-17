<!DOCTYPE html>
<html>
    <head>
        <title>Upload Images php</title>
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <div class="container">
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            Name:
            <input class="name" type="text" name="name"><br>
            Lastname:
            <input class="lastname" type="text" name="lastname"><br>
            <div class="genero">
                Genero:
                <input type="radio" name="gender" value="female">Femenino
                <input type="radio" name="gender" value="male">Masculino
                <input type="radio" name="gender" value="male">Transgenero
                <input type="radio" name="gender" value="male">Binario
                <input type="radio" name="gender" value="male"> No Binario
                <input type="radio" name="gender" value="other">Otro
                <input type="radio" name="gender" value="male">No quiero responder
            </div>
            Comentario: 
            <textarea class="textareaComment" name="comment" rows="5" cols="40"></textarea>
            <img class="upload-img" src="assets/img/icono.png"/>

            <input type="file" name="file1" id="file1" />
               
            <input type="file" name="file2" id="file2" />
             
            <input type="file" name="file3" id="file3" />

            <input type="submit" class="btn" name="upload" value="Upload"/>
        </form>
        </div>
    </body>
</html>