<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="d-lg-block col-12 col-lg-3">
                <div class="col-12 d-flex top-0 start-0 div-logo">
                    <img src="img/4x/logo.png" alt="">
                </div>
            </div>
            <div class="d-none d-lg-block col-lg-3">
                <div class="col-12 d-flex justify-content-center align-items-center div-person">
                    <img src="img/4x/bgperson.png" alt="">
                </div>
            </div>
            <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center login-container">
                <div class="div-message">
                    <div class="col-12 p-4 accordion-body div-login">
                        <div class="col-11 p-4 container-login">
                            <div class="text-center">
                                <h3 class="title_login">Accede a la plataforma</h3>
                            </div>
                            <form name="login" method="POST" action="http://82.180.163.123/campus/login/index.php">
                                <div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text icon-login">
                                            <i class="fa-solid fa-user icon-style"></i>
                                        </span>
                                        <input type="text" class="form-control input_login"
                                            placeholder="Nombre de usuario" name="user">
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text icon-login">
                                            <i class="fa-solid fa-lock icon-style"></i>
                                        </span>
                                        <input type="password" class="form-control input_login"
                                            placeholder="Contrase??a" name="password">
                                    </div>
                                    <div class="d-grid gap-2">
                                        <button class="btn btn_login" type="button">Acceder</button>
                                    </div>
                                    <?php
                                    if (isset($_GET["errorcode"]) && $_GET["errorcode"] == 3) {
                                        echo "El usuario/contrase??a son inconrrectos, por favor intentelo de nuevo";
                                    }
                                    ?>
                                    <p class="text-center fw-bold m-2">Olvide mi usuario y contrase??a</p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>