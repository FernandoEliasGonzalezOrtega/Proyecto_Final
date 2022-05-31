<!--Sitio para editar los datos de trabajadores-->

<!DOCTYPE html>
<html>
    <head>
        <title>Trabajadores</title>
        <link rel='stylesheet' href='./assets/css/bootstrap.min.css'>
        <link rel='stylesheet' href='./assets/css/styles.css'>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css'>
        <script src='./assets/js/script.js'></script>
    </head>
    <body class='bg-C' onload={actualizarTablaTrabajadores()}>
        <!--Header-->
        <?php require 'partials/headerIn.php'; ?>
        <div class='container bg-C'>
            <!--Barra de busqueda-->
            <form class='row py-3'>
                <div class='col-md-10'>
                    <input type='text' class='form-control' id='worksearch' placeholder='Ingresa el nombre del trabajador'>
                </div>
                <div class='col-md-2'>
                    <button type='button' class='btn btn-primary mb-3 btn-guardar' onclick={actualizarTablaTrabajadores()}><i class='bi bi-search'></i>  Buscar</button>
                </div>
            </form>
            <!--Switch de vistas-->
            <div class='row'>
                <div class='col-md-3'></div>
                <form class='col-md-6'>
                    <div class='row'>
                        <div class='col'>
                            <span>Trabajadores</span>
                        </div>
                        <div class='col'>
                            <div class='form-check form-switch'>
                                <a href='./empresasEdit.php' target="_self"><input class='form-check-input' type='button' role='switch' id='flexSwitchCheckDefault'></a>
                            </div>
                        </div>
                        <div class='col'>
                            <span>Empresas</span>
                        </div>
                    </div>
                </form>
                <div class='col-md-3'>
                    <a class='btn btn-primary mb-3 btn-guardar' href='./formularioTrabajadores.php'><i class='bi bi-plus-square'></i>     Nuevo Trabajador</a>
                </div>
            </div>
            <form>
                <div class='row'>
                    <div class='col-md-12'>
                        <!--Tabla de datos-->
                        <div class='container table-scroll my-3 bg-D' tabindex='0' id='tablaTrabajadores'>
                            Realiza tu búsqueda
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!--Footer-->
        <?php require 'partials/footerIn.php'; ?>
    </body>
</html>