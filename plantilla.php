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
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </main>
                <?php include_once "./includes/footer.php"; ?>
            </div>
        </div>
        <!-------------------- SCRIPTS ----------------->
        <?php include_once "./includes/js.php"; ?>
    </body>
</html>
