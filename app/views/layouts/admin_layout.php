<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/style_admin_layout.css">
    <link rel="shortcut icon" href="/img/logo-sena.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="sidebar-content">
                <div class="logo">
                    <img src="/img/logo-sena.png" alt="logoImg">
                    <span class="logo-text">ASISTENCIAS</span>
                </div>
                <nav class="menu">
                    <ul>
                        <li><a href="/main"><i class="fas fa-home"></i><span class="span">INICIO</span></a></li>
                        <li><a href="/regional/view"><i class="fas fa-map-marker-alt"></i><span class="span">REGIONAL</span></a></li>
                        <li><a href="/rol/view"><i class="fas fa-user-tag"></i><span class="span">ROL</span></a></li>
                        <li><a href="/usuario/view"><i class="fas fa-users"></i><span class="span">USUARIO</span></a></li>
                        <li><a href="/centro/view"><i class="fas fa-building"></i><span class="span">CENTRO</span></a></li>
                        <li><a href="/asistencia/view"><i class="fas fa-clipboard-check"></i><span class="span">ASISTENCIA</span></a></li>
                        <li><a href="/horario/view"><i class="fas fa-clock"></i><span class="span">HORARIO</span></a></li>
                        <li><a href="/programa/view"><i class="fas fa-graduation-cap"></i><span class="span">PROGRAMA</span></a></li>
                        <li><a href="/ficha/view"><i class="fas fa-id-card"></i><span class="span">FICHA</span></a></li>
                        <li><a href="/coordinador/view"><i class="fas fa-user-tie"></i><span class="span">COORDINADOR</span></a></li>
                        <li><a href="/competencia/view"><i class="fas fa-award"></i><span class="span">COMPETENCIA</span></a></li>
                        <li><a href="/administrador/view"><i class="fas fa-user-shield"></i><span class="span">ADMINISTRADOR</span></a></li>
                        <li><a href="/aprendiz/view"><i class="fas fa-user-graduate"></i><span class="span">APRENDIZ</span></a></li>
                        <li><a href="/instructor/view"><i class="fas fa-chalkboard-teacher"></i><span class="span">INSTRUCTOR</span></a></li>
                        <li><a href="/ambiente/view"><i class="fas fa-door-open"></i><span class="span">AMBIENTE</span></a></li>
                        <li><a href="/login/logout"><i class="fas fa-right-from-bracket"></i><span class="span">CERRAR SESION</span></a></li>
                    </ul>
                </nav>
            </div>
        </aside>
        <main class="main-content">
            <header class="header">
                <div class="header-container">
                    <button class="menu-toggle"><i class="fas fa-bars"></i></button>
                    <div class="search-container">
                        <i class="fas fa-search"></i>
                        <input type="text" placeholder="Buscar..." id="search-input">
                    </div>
                    <h1><?php echo $title ?></h1>
                    <div class="header-icons">
                        <a href="#" class="icon-link"><i class="fas fa-user-circle"></i></a>
                        <a href="#" class="icon-link"><i class="fas fa-bell"></i></a>
                        <a href="#" class="icon-link" id="theme-toggle"><i class="fas fa-moon"></i></a>
                    </div>
                </div>
            </header>
            <div class="content">
                <?php include_once $content; ?>
            </div>
        </main>
    </div>

    <footer class="footer-large">
        <div class="footer-container">
            <span>ADSO 2873711 © Todos los derechos reservados</span>
            <span class="footer-logo">
                <i class="fas fa-user-graduate"></i> Sofia Plus
            </span>
        </div>
    </footer>
    <!-- Script para cambiar entre tema oscuro y claro -->
    <script>
        document.getElementById('theme-toggle').addEventListener('click', function() {
            document.body.classList.toggle('dark-mode');
            const icon = this.querySelector('i');
            if (icon.classList.contains('fa-moon')) {
                icon.classList.remove('fa-moon');
                icon.classList.add('fa-sun');
            } else {
                icon.classList.remove('fa-sun');
                icon.classList.add('fa-moon');
            }

            
        });
        const menuToggle = document.querySelector('.menu-toggle');
        const sidebar = document.querySelector('.sidebar');
        
        menuToggle.addEventListener('click', function() {
            sidebar.classList.toggle('sidebar-hidden');
        });
    </script>
</body>
</html>