<?php
$estado_session = session_status();
if ($estado_session == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['loggedUserName'])) {
?>
    <!-- Inicia los Encabezados de la Página -->
    <nav class="navbar is-black " aria-label="breadcrumbs">
        <div class="navbar-start">
            <a class="navbar-item" href="?menu=inicio">
                Inicio
            </a>
            <a class="navbar-item" href="?menu=noticias">
                Noticias
            </a>
            <a class="navbar-item" href="?menu=calendario">
                Calendario
            </a>
            <a class="navbar-item" href="?menu=grupos">
                Grupos
            </a>
            <a class="navbar-item" href="?menu=acercade">
                Acerca de
            </a>
            <a class="navbar-item" href="?menu=logout">
                Cerrar Sesión
            </a>
        </div>
    </nav>
    <section class="hero is-danger">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Fórmula 1
                </h1>
                <h2 class="subtitle">
                    Temporada 2021
                </h2>
            </div>
        </div>
    </section>
    <br>

<?php
} else {
?>
    <nav class="navbar is-black" aria-label="breadcrumbs">
        <div class="navbar-start">
            <a class="navbar-item" href="?menu=inicio">
                Inicio
            </a>
            <a class="navbar-item" href="?menu=noticias">
                Noticias
            </a>
            <a class="navbar-item" href="?menu=calendario">
                Calendario
            </a>
            <a class="navbar-item" href="?menu=acercade">
                Acerca de
            </a>
            <a class="navbar-item" href="?menu=login">
                Login
            </a>
        </div>
    </nav>
    <section class="hero is-danger">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Fórmula 1
                </h1>
                <h2 class="subtitle">
                    Temporada 2021
                </h2>
            </div>
        </div>
    </section>
    <br>


<?php } ?>