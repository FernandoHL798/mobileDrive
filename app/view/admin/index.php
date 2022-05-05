<!DOCTYPE html>
<?php $title="Inicio | Mobile Drive"; ?>
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
                        <h1 class="mt-4">Inicio</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Catalogo</li>
                        </ol>
                        <div class="container-fluid px-5">
                            <div class="row">
                                <div class="col-md-4 w-30">
                                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        </div>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                            <img src="../../../assets/img/car1.jfif" class="d-block w-100" alt="...">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>[ CAR NAME]</h5>
                                                <p>Descripcion</p>
                                            </div>
                                            </div>
                                            <div class="carousel-item">
                                            <img src="../../../assets/img/car2.png" class="d-block w-100" alt="...">
                                            <div class="carousel-caption d-none d-md-block">
                                            <h5>[ CAR NAME]</h5>
                                                <p>Descripcion</p>
                                            </div>
                                            </div>
                                            <div class="carousel-item">
                                            <img src="../../../assets/img/car3.png" class="d-block w-100" alt="...">
                                            <div class="carousel-caption d-none d-md-block">
                                            <h5>[ CAR NAME]</h5>
                                                <p>Descripcion</p>
                                            </div>
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Vehiculos disponibles</h5>
                                                <p class="card-text">Aqui aparecera la cantidad Vehiculos disponibles para venta</p>
                                                <a href="./catalogo.php" class="btn btn-primary">Ver catalogo</a>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Agregar nuevo automovil</h5>
                                                <p class="card-text">Ingrese el vehiculo que haya adquirido para ponerlo en venta</p>
                                                <a href="#" class="btn btn-primary">Ingresar</a>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <table class="table">
                                    <thead>
                                        <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Placa</th>
                                        <th scope="col">Datos</th>
                                        <th scope="col">Precio</th>
                                        <th scope="col">Descripcion</th>
                                        <th scope="col">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <th scope="row">1</th>
                                        <td>MHYDG23</td>
                                        <td>MAZDA MAZDA 3 2015</td>
                                        <td><i class="fa-solid fa-dollar-sign"></i> 100,000</td>
                                        <td>Color ROJO, 5 puertas, 81000 Km.</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                            <button type="button" class="btn btn-warning"><i class="fa-solid fa-eye"></i></button>    
                                            <button type="button" class="btn btn-success"><i class="fa-solid fa-dollar-sign"></i> <span class="fw-bold">VENDER</span></button>
                                            </div>
                                        </td>
                                        </tr>
                                        <tr>
                                        <th scope="row">2</th>
                                        <td>MHYDG23</td>
                                        <td>CHEVY CHEVROLETT 3 2015</td>
                                        <td><i class="fa-solid fa-dollar-sign"></i> 100,000</td>
                                        <td>Color ROJO, 5 puertas, 81000 Km.</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                            <button type="button" class="btn btn-warning"><i class="fa-solid fa-eye"></i></button>    
                                            <button type="button" class="btn btn-success"><i class="fa-solid fa-dollar-sign"></i> <span class="fw-bold">VENDER</span></button>
                                            </div>
                                        </td>
                                        </tr>
                                        <tr>
                                        <th scope="row">3</th>
                                        <td>MHYDG23</td>
                                        <td>TIDA NISSAN 2015</td>
                                        <td><i class="fa-solid fa-dollar-sign"></i> 100,000</td>
                                        <td>Color ROJO, 5 puertas, 81000 Km.</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                            <button type="button" class="btn btn-warning"><i class="fa-solid fa-eye"></i></button>    
                                            <button type="button" class="btn btn-success"><i class="fa-solid fa-dollar-sign"></i> <span class="fw-bold">VENDER</span> </button>
                                            </div>
                                        </td>
                                        </tr>
                                    </tbody>
                                </table>
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
