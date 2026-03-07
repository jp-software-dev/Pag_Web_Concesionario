<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario - Global Car Metepec</title>
    <meta name="description" content="Inventario exclusivo Global Car Metepec. Autos premium disponibles para entrega inmediata.">
    <meta name="theme-color" content="#c9a74d">
    
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://globalcarmetepec.mx/catalogo.php">
    <meta property="og:title" content="Inventario | Global Car Metepec">
    <meta property="og:description" content="Vehículos premium seleccionados para entusiastas y coleccionistas.">
    <meta property="og:image" content="public/assets/images/logo.png">
    
    <link rel="icon" type="image/png" href="public/assets/images/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="public/assets/css/styles.css">

    <style>
        .footer-links {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        .footer-links .admin-icon {
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="background-decorations" aria-hidden="true">
        <div class="bg-circle bg-circle-1"></div>
        <div class="bg-circle bg-circle-2"></div>
        <div class="bg-circle bg-circle-3"></div>
        <div class="bg-line bg-line-1"></div>
        <div class="bg-line bg-line-2"></div>
    </div>

    <header id="navbar">
        <div class="container header-content">
            <a href="index.php" class="logo">Global Car <span>Metepec</span></a>
            <nav>
                <ul class="nav-links">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="catalogo.php" class="text-gold active" aria-current="page">Inventario</a></li>
                    <li><a href="index.php#ubicacion">Ubicación</a></li>
                    <li><a href="index.php#contacto">Contacto</a></li>
                </ul>
            </nav>
            <button class="hamburger" aria-label="Abrir menú de navegación" aria-expanded="false">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </header>

    <div class="spacer-nav"></div>

    <main>
        <section id="catalogo" class="catalog-section container">
            <div class="section-header text-center">
                <h2><span class="text-gold">Inventario</span> Disponible</h2>
                <div class="divider"></div>
                <p class="section-subtitle">Vehículos de alta gama seleccionados para entrega inmediata</p>
            </div>

            <div class="filters" role="search">
                <div class="filter-group">
                    <i class="fas fa-filter" aria-hidden="true"></i>
                    <select id="brand-filter" aria-label="Filtrar por marca de vehículo">
                        <option value="all">Todas las Marcas</option>
                        <option value="Lamborghini">Lamborghini</option>
                        <option value="Ferrari">Ferrari</option>
                        <option value="Porsche">Porsche</option>
                        <option value="Mercedes-Benz">Mercedes-Benz</option>
                        <option value="Aston Martin">Aston Martin</option>
                    </select>
                </div>
                <div class="filter-group">
                    <i class="fas fa-dollar-sign" aria-hidden="true"></i>
                    <select id="price-filter" aria-label="Filtrar por rango de presupuesto">
                        <option value="all">Filtrar por Presupuesto</option>
                        <option value="low">Menos de 2 MDP</option>
                        <option value="mid">2 MDP - 5 MDP</option>
                        <option value="high">Más de 5 MDP</option>
                    </select>
                </div>
                <div class="filter-group">
                    <i class="fas fa-sort-amount-down" aria-hidden="true"></i>
                    <select id="sort-filter" aria-label="Ordenar listado de vehículos">
                        <option value="default">Orden: Relevancia</option>
                        <option value="price-asc">Precio: Menor a Mayor</option>
                        <option value="price-desc">Precio: Mayor a Menor</option>
                        <option value="year-desc">Año: Más Nuevos</option>
                    </select>
                </div>
            </div>

            <div id="cars-grid" class="cars-grid" aria-live="polite">
                </div>
        </section>
    </main>

    <footer>
        <div class="container footer-content">
            <div class="footer-col">
                <h3>Global Car Metepec</h3>
                <p>Líderes en vehículos premium y de colección en el Estado de México.</p>
            </div>
            <div class="footer-col">
                <h3>Ubicación</h3>
                <p><i class="fas fa-map-marker-alt" aria-hidden="true"></i> Blvd. Toluca-Metepec 234 Nte, Santa Cruz, Metepec.</p>
            </div>
            <div class="footer-col">
                <h3>Redes Sociales</h3>
                <div class="social-links">
                    <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="social-link" aria-label="Síguenos en Facebook"><i class="fab fa-facebook"></i></a>
                    <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="social-link" aria-label="Síguenos en Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="https://tiktok.com" target="_blank" rel="noopener noreferrer" class="social-link" aria-label="Síguenos en TikTok"><i class="fab fa-tiktok"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-copyright">&copy; 2026 Global Car Metepec. Todos los derechos reservados.</div>
            <div class="footer-links">
                <a href="public/assets/docs/aviso-privacidad.pdf" target="_blank" rel="noopener noreferrer">
                    <i class="fas fa-file-pdf" aria-hidden="true"></i> Aviso de Privacidad
                </a>
                <div class="admin-icon" style="margin: 0;">
                    <a href="public/admin.php" target="_blank" rel="noopener noreferrer" title="Panel de Administración" aria-label="Acceso a panel de control">
                        <i class="fas fa-lock"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <div id="car-modal" class="modal" aria-hidden="true" role="dialog" aria-labelledby="modal-title">
        <div class="modal-content">
            <button class="close-modal" aria-label="Cerrar detalles del vehículo">&times;</button>
            <div class="modal-body">
                <div class="modal-gallery">
                    <div class="main-image-wrapper">
                        <button class="nav-arrow prev" onclick="prevImage()" aria-label="Ver imagen anterior"><i class="fas fa-chevron-left"></i></button>
                        <img src="" alt="Fotografía principal del vehículo" id="modal-main-img" loading="lazy">
                        <button class="nav-arrow next" onclick="nextImage()" aria-label="Ver siguiente imagen"><i class="fas fa-chevron-right"></i></button>
                    </div>
                    <div class="thumbnails-container">
                        <div class="gallery-thumbnails" id="modal-thumbnails"></div>
                    </div>
                </div>
                <div class="modal-info">
                    <h2 id="modal-title">Nombre del Auto</h2>
                    <p class="modal-price" id="modal-price">$0</p>
                    <div class="specs-grid" id="modal-specs"></div>
                    <div class="luxury-features">
                        <h3>Detalles Adicionales</h3>
                        <ul id="modal-features"></ul>
                    </div>
                    <div class="modal-actions">
                        <a href="#" class="btn btn-outline" id="modal-whatsapp" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-whatsapp" aria-hidden="true"></i> Cotizar por WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="fullscreen-lightbox" class="lightbox" aria-hidden="true" role="dialog">
        <button class="close-lightbox" aria-label="Cerrar vista completa">&times;</button>
        <button class="nav-arrow lightbox-prev" id="lightbox-prev-btn" aria-label="Imagen anterior"><i class="fas fa-chevron-left"></i></button>
        <div class="lightbox-content">
            <img src="" id="lightbox-img" alt="Vista ampliada del vehículo" loading="lazy">
            <div class="lightbox-controls">
                <button id="btn-zoom-toggle" class="btn-icon" aria-label="Alternar Zoom"><i class="fas fa-search-plus"></i></button>
            </div>
        </div>
        <button class="nav-arrow lightbox-next" id="lightbox-next-btn" aria-label="Siguiente imagen"><i class="fas fa-chevron-right"></i></button>
    </div>

    <script src="public/assets/js/script.js"></script>
</body>
</html>