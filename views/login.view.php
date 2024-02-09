<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Iniciar sesion</title>

</head>
<body>
    <div class="container">
        <h1 class="title">Iniciar sesion</h1>
       
        <hr class="border">



        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" class="formulario" name="login">
    <div class="form-group">
    <input type="text" name="usuario" class="usuario" placeholder="Usuario">
   
    </div>

    
    <div class="form-group">
    <input type="password" name="password" class="password_btn" placeholder=" contraseña">
    <i class="submit-btn fa fa-arrow-right" onclick="login.submit()">Enviar</i>
    </div>
    



<?php if(!empty($errores)) ?>

<div class="error">
    <ul>
    <?php echo $errores; ?>
    </ul>
</div>
<?php  ?>
    
    
    </form>
        

<p class="texto-registrate">
    ¿Aun no tienes cuenta?
    <a href="registrate.php">Registrate</a>
</p>

    </div>
</body>
</html>