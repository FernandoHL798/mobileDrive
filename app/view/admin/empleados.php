<!DOCTYPE html>
<?php $title="Empleados | Mobile Drive"; ?>
<html lang="en">
    <head>
        <?php include_once "./includes/header.php"; ?>
    </head>
    <body class="sb-nav-fixed">
        <?php include_once "./includes/navbar.php"; ?>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <?php include_once "./includes/sidenav.php"; ?>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Empleados</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Se mostrarán todos los empleados que estan registrados en el sistema</li>
                        </ol>
                    </div>
                    <div class="container">
                        <div class="row">
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col">Telefono</th>
                                    <th scope="col">Fecha Registro</th>
                                    <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <th scope="row">1</th>
                                    <td>Luis Fernando Hernandez Ledezma</td>
                                    <td>fernando@gmaail.com</td>
                                    <td>5537091960</td>
                                    <td>15 de Octubre 2021</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                            <button type="button" class="btn btn-warning"><i class="fa-solid fa-eye"></i></button>    
                                            <button type="button" class="btn btn-danger"> Borrar</button>
                                        </div>
                                    </td>
                                    </tr>
                                    <tr>
                                    <th scope="row">2</th>
                                    <td>Luis Fernando Hernandez Ledezma</td>
                                    <td>fernando@gmaail.com</td>
                                    <td>5537091960</td>
                                    <td>15 de Octubre 2021</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                            <button type="button" class="btn btn-warning"><i class="fa-solid fa-eye"></i></button>    
                                            <button type="button" class="btn btn-danger"> Borrar</button>
                                        </div>
                                    </td>
                                    </tr>
                                    <tr>
                                    <th scope="row">3</th>
                                    <td>Luis Fernando Hernandez Ledezma</td>
                                    <td>fernando@gmaail.com</td>
                                    <td>5537091960</td>
                                    <td>15 de Octubre 2021</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                            <button type="button" class="btn btn-warning"><i class="fa-solid fa-eye"></i></button>    
                                            <button type="button" class="btn btn-danger"> Borrar</button>
                                        </div>
                                    </td>
                                    </tr>
                                    <tr>
                                    <th scope="row">4</th>
                                    <td>Luis Fernando Hernandez Ledezma</td>
                                    <td>fernando@gmaail.com</td>
                                    <td>5537091960</td>
                                    <td>15 de Octubre 2021</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                            <button type="button" class="btn btn-warning"><i class="fa-solid fa-eye"></i></button>    
                                            <button type="button" class="btn btn-danger"> Borrar</button>
                                        </div>
                                    </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-primary">Agregar nuevo empleado</button>    
                            </div>
                        </div>
                    </div>
                </main>
                <?php include_once "./includes/footer.php"; ?>
            </div>
        </div>
        <!-------------------- SCRIPTS ----------------->
        <?php include_once "./includes/js.php"; ?>
    </body>
</html>
