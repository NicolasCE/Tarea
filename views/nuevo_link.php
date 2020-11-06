<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class= "#e0e0e0 grey lighten-2">
    
    <?php 
    session_start();
    if(isset($_SESSION['usuario'])){?>

    <?php 
        $user = $_SESSION['usuario'];
        //echo $user['nombre'];
        //echo $_SESSION['usuario'] ['nombre'];
    ?>
        <nav class="#d84315 deep-orange darken-3">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">Bienvenido <?=$_SESSION['usuario']['nombre'] ?> </a>
                 <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="nuevo_link.php">Nuevo Link</a></li>
                    <li><a href="mislinks.php">Mis links</a></li>
                    <li><a href="salir.php">Salir</a></li>
                </ul>
            </div>
        </nav>
        


        <div class="container">
            <div class="row">
                <div class="col l4 m4 s12">

                </div>
                <div class="col l4 m4 s12">
                    <h3 class="center">Nuevo Link</h3>
                    <p class="red-text">
                        <?php 
                            if(isset($_SESSION['error'])){
                                echo $_SESSION['error'];
                                unset($_SESSION['error']);
                            }
                        ?>
                        <p class="green-txt">
                            <?php 
                            if(isset($_SESSION['respuesta'])){
                                echo $_SESSION['respuesta'];
                                unset($_SESSION['respuesta']);
                            }
                        ?>
                        </p>


                    <form action="../controllers/NuevoLinkController.php" method="post">
                        <div class="input-field">
                            <input id="nombre" type="text" name="nombre">
                            <label for="nombre">Nombre de la pagina</label>
                        </div>
                        <div class="input-field">
                            <input id="url" type="url" name="url">
                            <label for="url">URL de la pagina</label>
                        </div>
                        <button class="btn black">Crear Link</button>

                    </form>

                </div>
            </div>

        </div>

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