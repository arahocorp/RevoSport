<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sistema de gimnasio Admin</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="../css/fullcalendar.css" />
    <link rel="stylesheet" href="../css/matrix-style.css" />
    <link rel="stylesheet" href="../css/matrix-media.css" />
    <link href="../font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/jquery.gritter.css" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>

<body>


    <form role="form" action="index.php" method="POST">
        <?php

        if (isset($_POST['nombrecompleto'])) {
            $nombrecompleto = $_POST["nombrecompleto"];
            $nombreusuario = $_POST["nombreusuario"];
            $contracena = $_POST["contracena"];
            $genero = $_POST["genero"];
            $servicios = $_POST["servicios"];
            $plan = $_POST["plan"];
            $direccion = $_POST["direccion"];
            $contacto = $_POST["contacto"];

            $contracena = md5($contracena);

            include 'dbconexion.php';
            //insertar todos los datos del usuario registrado en la base de datos
            $qry = "insert into miembros(nombrecompleto,nombreusuario,contracena,ingreso,genero,servicios,cantidad,plan,direccion,contacto,estado) values ('$nombrecompleto','$nombreusuario','$contracena', CURRENT_TIMESTAMP,'$genero','$servicios','0','$plan','$direccion','$contacto','Pending')";
            $result = mysqli_query($con, $qry); //query executes

            if (!$result) {
                echo "<div class='container-fluid'>";
                echo "<div class='row-fluid'>";
                echo "<div class='span12'>";
                echo "<div class='widget-box'>";
                echo "<div class='widget-title'> <span class='icon'> <i class='icon-info-sign'></i> </span>";
                echo "<h5>Error Message</h5>";
                echo "</div>";
                echo "<div class='widget-content'>";
                echo "<div class='error_ex'>";
                echo "<h1 style='color:maroon;'>Error 404</h1>";
                echo "<h3>Error occured while entering your details</h3>";
                echo "<p>Please Try Again</p>";
                echo "<a class='btn btn-warning btn-big'  href='../pages/index.php'>Go Back</a> </div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            } else {

                echo "<div class='container-fluid'>";
                echo "<div class='row-fluid'>";
                echo "<div class='span12'>";
                echo "<div class='widget-box'>";
                echo "<div class='widget-title'> <span class='icon'> <i class='icon-info-sign'></i> </span>";
                echo "<h5>Mensage</h5>";
                echo "</div>";
                echo "<div class='widget-content'>";
                echo "<div class='error_ex'>";
                echo "<h1>Registro exitoso</h1>";
                echo "<h3>¡Se han agregado los detalles del miembro!</h3>";
                echo "<p>Se agregan los datos solicitados. Por favor, espere la verificación.</p>";
                echo "<a class='btn btn-inverse btn-big'  href='../index.php'>Regresar</a> </div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "<h3>YOU ARE NOT AUTHORIZED TO REDIRECT THIS PAGE. GO BACK to <a href='index.php'> DASHBOARD </a></h3>";
        }


        ?>




    </form>
</body>

<!--end-Footer-part-->

<script src="../js/excanvas.min.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/jquery.ui.custom.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.flot.min.js"></script>
<script src="../js/jquery.flot.resize.min.js"></script>
<script src="../js/jquery.peity.min.js"></script>
<script src="../js/fullcalendar.min.js"></script>
<script src="../js/matrix.js"></script>
<script src="../js/matrix.dashboard.js"></script>
<script src="../js/jquery.gritter.min.js"></script>
<script src="../js/matrix.interface.js"></script>
<script src="../js/matrix.chat.js"></script>
<script src="../js/jquery.validate.js"></script>
<script src="../js/matrix.form_validation.js"></script>
<script src="../js/jquery.wizard.js"></script>
<script src="../js/jquery.uniform.js"></script>
<script src="../js/select2.min.js"></script>
<script src="../js/matrix.popover.js"></script>
<script src="../js/jquery.dataTables.min.js"></script>
<script src="../js/matrix.tables.js"></script>