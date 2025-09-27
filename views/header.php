<?php
$currentPage = basename($_SERVER['PHP_SELF'] ?? '');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Proveedores</title>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/sweetalert2/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
</head>
<style>
    html {
        background-color: #fff;
        overflow-x: hidden;
    }

    body {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }

    footer {
        margin-top: auto;
        width: 100%;
    }

    .navbar {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%) !important;
        border-bottom: 3px solid rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
    }

    .navbar-brand {
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        transition: all 0.3s ease;
    }

    .navbar-brand:hover {
        transform: scale(1.05);
        color: #fff !important;
    }

    .navbar-brand i {
        color: #ffd700;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
    }

    .nav-link {
        transition: all 0.3s ease;
        border-radius: 8px;
        margin: 0 5px;
        font-weight: 500;
    }

    .nav-link:hover {
        background-color: rgba(255, 255, 255, 0.2);
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .nav-link.active {
        background-color: rgba(255, 255, 255, 0.3);
        border-radius: 8px;
    }

    .nav-link i {
        transition: all 0.3s ease;
    }

    .nav-link:hover i {
        transform: scale(1.2);
    }

    body {
        padding-top: 0;
    }

    .navbar+* {
        margin-top: 2rem;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-lg">
        <div class="container-fluid">

            <a class="navbar-brand fw-bold fs-3" href="../views/index.php">
                <i class="fas fa-users-cog me-2"></i>
                Crud Proveedores
            </a>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($currentPage === 'index.php') ? 'active' : ''; ?>" href="../views/index.php">
                            <i class="fas fa-list me-1"></i>
                            Listado
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($currentPage === 'create.php') ? 'active' : ''; ?>" href="../views/create.php">
                            <i class="fas fa-plus-circle me-1"></i>
                            Agregar
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>