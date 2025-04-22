<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $title ?> </title>
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/style_admin_layout.css">
    <link rel="shortcut icon" href="/img/logo-sena.png" type="image/x-icon">
    <!-- Añadiendo Font Awesome para los iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
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
                    <li><a href="/usuario/home"><i class="fas fa-home"></i><span class="span">INICIO</span></a></li>
                    <li><a href="/regional/view"><i class="fas fa-globe"></i><span class="span">REGIONAL</span></a></li>
                    <li><a href="/rol/view"><i class="fas fa-user-secret"></i><span class="span">ROL</span></a></li>
                    <li><a href="/usuario/view"><i class="fas fa-user"></i><span class="span">USUARIO</span></a></li>
                    <li><a href="/centro/view"><i class="fas fa-home"></i><span class="span">CENTRO</span></a></li>
                    <li><a href="/asistencia/view"><i class="fas fa-user"></i><span class="span">ASISTENCIA</span></a></li>
                    <li><a href="/horario/view"><i class="fas fa-user"></i><span class="span">HORARIO</span></a></li>
                    <li><a href="/programa/view"><i class="fas fa-book-open"></i><span class="span">PROGRAMA</span></a></li>
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
                    <h1> <?php echo $title ?> </h1>
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