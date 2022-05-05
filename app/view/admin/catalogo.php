<!DOCTYPE html>
<?php $title="Catalogo | Mobile Drive"; ?>
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
                        <h1 class="mt-4">Catalogo</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Muestra todos los vehiculos disponibles, en venta y vendidos dentro del sistema</li>
                        </ol>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                <img src="../../../assets/img/car1.jfif" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Nombre Vehiculo</h5>
                                    <p class="card-text">Descripcion del vehiculo</p>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-primary">Ver carro</button>
                                        <button type="button" class="btn btn-success">Vender</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                <img src="../../../assets/img/car1.jfif" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Nombre Vehiculo</h5>
                                    <p class="card-text">Descripcion del vehiculo</p>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-primary">Ver carro</button>
                                        <button type="button" class="btn btn-danger">Quitar</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                <img src="../../../assets/img/car1.jfif" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Nombre Vehiculo</h5>
                                    <p class="card-text">Descripcion del vehiculo</p>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-primary">Ver carro</button>
                                        <button type="button" class="btn btn-warning">Ocultar</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                <img src="../../../assets/img/car1.jfif" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Nombre Vehiculo</h5>
                                    <p class="card-text">Descripcion del vehiculo</p>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-primary">Ver carro</button>
                                        <button type="button" class="btn btn-success">Vender</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="container-fluid px-4">
                                <h1 class="mt-4">Vehiculos vendidos</h1>
                                <ol class="breadcrumb mb-4">
                                    <li class="breadcrumb-item active">Muestra todos los vehiculos ya vendidos dentro del sistema</li>
                                </ol>
                            </div>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Vehiculo</th>
                                    <th scope="col">Color</th>
                                    <th scope="col">Transmision</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <th scope="row">1</th>
                                    <td>Mazda, Mazda</td>
                                    <td>Rojo</td>
                                    <td>AU</td>
                                    <td>$100,000</td>
                                    <td><button type="button" class="btn btn-info"><i class="fa-solid fa-eye"></i></button></td>
                                    </tr>
                                    <tr>
                                    <th scope="row">2</th>
                                    <td>Mazda, Mazda</td>
                                    <td>Rojo</td>
                                    <td>AU</td>
                                    <td>$100,000</td>
                                    <td><button type="button" class="btn btn-info"><i class="fa-solid fa-eye"></i></button></td>
                                    </tr>
                                    <tr>
                                    <th scope="row">3</th>
                                    <td>Mazda, Mazda</td>
                                    <td>Rojo</td>
                                    <td>AU</td>
                                    <td>$100,000</td>
                                    <td><button type="button" class="btn btn-info"><i class="fa-solid fa-eye"></i></button></td>
                                </tr>
                                </tbody>
                            </table>
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
