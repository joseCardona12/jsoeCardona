<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="content">
    <div class="content__01">
        <form action="receptor.php" method="POST">
            <div>
                <label for="name">Nombre</label>
                <input type="text" name="name" id="in" required>
            </div>

            <div>
                <label for="correo">Correo</label>
                <input type="text" name="correo" id="in" required>
            </div>

            <div>
                <label for="pass">contraseña</label>
                <input type="password" name="pass" id="in" required>
            </div>

            <div class="btn">
                <input type="submit" value="Registrarse" name="enviar">     
            </div>
            
        </form>
    </div>
    
<div>
    
</body>
</html>