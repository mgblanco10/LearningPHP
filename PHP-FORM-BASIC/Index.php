<!-- <!DOCTYPE html>
<html>
    <head>
        <title>Upload Images php</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <div class="container">
        <form action="prueba.php" method="post" enctype="multipart/form-data">
            Name:
            <input class="name" type="text" name="name"><br>
            Lastname:
            <input class="lastname" type="text" name="lastname"><br>
            <div class="genero">
                Género:
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
</html> -->










<!DOCTYPE html>
<html>
<head>
    <title>Upload Images php</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <form action="upload.php" method="post" enctype="multipart/form-data">
            Name:
            <input class="name" type="text" name="name"><br>
            Lastname:
            <input class="lastname" type="text" name="lastname"><br>
            <div class="genero">
                Género:
                <input type="radio" name="gender" value="female">Femenino
                <input type="radio" name="gender" value="male">Masculino
                <input type="radio" name="gender" value="transgender">Transgénero
                <input type="radio" name="gender" value="binary">Binario
                <input type="radio" name="gender" value="nonbinary">No Binario
                <input type="radio" name="gender" value="other">Otro
                <input type="radio" name="gender" value="noresponse">No quiero responder
            </div>

            <div class="checkbox">
                Bootcamp:
                <input type="checkbox" id="frontEnd" name="front" value="frontEnd">
                <label for="vehicle1"> Front-end</label>
                <input type="checkbox" id="fullStack" name="fullStack" value="fullStack">
                <label for="vehicle2"> Full-stack</label>
                <input type="checkbox" id="femCoders" name="femCoders" value="femCoders">
                <label for="vehicle3"> FemCoders</label>
            </div>
            Password:
            <input class="password" type="password" name="password">
            Comentario:
            <textarea class="textareaComment" name="comment" rows="5" cols="40"></textarea>
            <img class="upload-img" src="assets/img/icono.png"/>

            <input type="file" name="file1" id="file1" class="file"/>
               
            <input type="file" name="file2" id="file2" class="file"/>
             
            <input type="file" name="file3" id="file3" class="file"/>

            <input type="submit" class="btn" name="upload" value="Upload"/>
        </form>
    </div>
</body>
</html>
