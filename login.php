<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="css/login.css" rel="stylesheet" media="all">

</head>

<body class="animsition">


<div class="onload" id="onload">
    <div class="lds-ripple"><div></div><div></div></div>
</div>


    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="images/icon/logoupc.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="" id="formLogin" method="post">

                                <div class="form-group text-center">
                                    <b><label>Bienestar Institucional</label></b> 
                                    <p class="text-justify">Es el conjunto de Programas, proyectos, políticas y actividades que se orientan al desarrollo físico, psicoactivo, espiritual, cultural y estético de los estudiantes, docentes y personal administrativo”. Bienestar Institucional, es también esencia en la formación de personas integrales.</p>
                                </div>

                                <hr>

                                <div class="form-group">
                                    <label>Correo Institucional</label>
                                    <input class="au-input au-input--full" id="email_form" type="email" name="email" >
                                    <small class="text-danger d-none" id="email_alert"><i class="fa fa-warning"></i> El campo Correo está vacio.</small>
                                </div>
                                <div class="form-group">
                                    <label>Contraseña</label>
                                    <input class="au-input au-input--full" id="password_form" type="password" name="password" >
                                    <small class="text-danger d-none" id="password_alert"><i class="fa fa-warning"></i> El campo Contraseña está vacio.</small>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20 redondeado" type="submit">Iniciar Sesión</button>

                                <div class="alert alert-danger d-none" id="responseServe">
                                     <small><i class="fa fa-warning"></i> El usuario no se encuentra registrado en la base de datos.</small>           
                                </div>    

                                <div class="text-right text-blue">
                                    <a href="register.php"><small><i class="fa fa-share"></i>¿No te has registrado?</small></a>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/constante.js"></script>
    <script src="js/main.js"></script>
    <script src="js/login.js"></script>

</body>

</html>
<!-- end document-->