<?php 
include_once("../../controller/");
?>

<link rel="stylesheet" href="assets/css/home.css">
<header class="p-3 mb-3 border-bottom fondoHeader">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="#" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
            <img src="assets/img/logos/logouvg.jpg" alt="mdo" width="100" height="90" class="rounded-circle">
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <p class="username"> <?php echo $_SESSION['user_nombre'] ?> </p>
        </ul>

        <form class="buscar">
            <input type="search" class="buscar2" placeholder="Buscar..." aria-label="Search">
        </form>

        <div class="dropdown text-end">
            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1"
                data-bs-toggle="dropdown" aria-expanded="false">
                <img src="assets/img/fotos/user.png <?php echo$_SESSION['user_imagen'] ?>" width="50" height="50" class="rounded-circle">
            </a>
            <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">

                <li><a class="dropdown-item"  onclick="cargarContenido('editar_perfil.php')">Mi Perfil</a></li>
                <li><a class="dropdown-item"  onclick="cargarContenido('editar_perfil.php')">Configuración</a></li>    
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li ><a class="dropdown-item" href="cerrarsesion.php"><i class="bi bi-box-arrow-left"></i>Cerrar Sesión</a></li>
            </ul>
        </div>
    </div>
</header>
<aside>
