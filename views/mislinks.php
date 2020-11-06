<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <?php 
    session_start();
    if(isset($_SESSION['usuario'])){?>
        <nav class="black">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">Logo</a>
                 <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="nuevo_link.php">Nuevo Link</a></li>
                    <li><a href="mislinks.php">Mis links</a></li>
                    <li><a href="salir.php">Salir</a></li>
                </ul>
            </div>
        </nav>
        





    <?php } else { ?>
        <h3 class="red-text">Error de Acceso</h3>
        <p>
            Usted no tiene permisos para estar aqui
            <a href="../index.php">Home</a>
        </p>

        
    <?php } ?>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>