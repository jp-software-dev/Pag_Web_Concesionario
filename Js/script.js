const carsData = [
    {
        id: 1,
        brand: "Porsche",
        model: "911 Carrera 2S Coupe",
        year: 2012,
        price: "1.65",
        priceUnit: "MDP",
        kilometers: "20,570",
        exteriorColor: "Negro",
        interiorColor: "Beige claro",
        imageBase: "Porsche911CarreraCoupeAt",
        imageExtension: ".webp",
        totalImages: 12,
        specs: {
            motor: "3.8L Carrera S",
            potencia: "400 HP",
            aceleracion: "4.3s (0-100 km/h)",
            velocidadMax: "302 km/h",
            transmision: "Automática",
            traccion: "Trasera",
            consumo: "N/A"
        },
        features: [
            "Sistema de escape deportivo",
            "Color exterior Negro",
            "Interior beige claro",
            "Transmisión Automática",
            "Rines de aleación"
        ]
    },
    {
        id: 2,
        brand: "Aston Martin",
        model: "Vantage",
        year: 2025,
        price: "6.4",
        priceUnit: "MDP",
        kilometers: "5,124",
        exteriorColor: "Negro",
        interiorColor: "Gris",
        imageBase: "AstonMartinVantage",
        imageExtension: ".webp",
        totalImages: 12,
        specs: {
            motor: "4.0L V8 Biturbo",
            potencia: "665 HP",
            aceleracion: "3.4s (0-100 km/h)",
            velocidadMax: "325 km/h",
            transmision: "Automática",
            traccion: "Trasera",
            consumo: "N/A"
        },
        features: [
            "Sensor de estacionamiento",
            "Puertas: 3",
            "Transmisión Automática",
            "Interior Gris",
            "Modelo 2025 Reciente"
        ]
    },
    {
        id: 3,
        brand: "Lamborghini",
        model: "Huracán Tecnica",
        year: 2023,
        price: "9.2",
        priceUnit: "MDP",
        kilometers: "N/A",
        exteriorColor: "Amarillo (Giallo Inti)",
        interiorColor: "Nero Ade/Giallo Belenus",
        imageBase: "LamborghiniHuracánTecnica",
        imageExtension: ".webp",
        totalImages: 12,
        specs: {
            motor: "5.2L V10",
            potencia: "640 HP",
            aceleracion: "3.2s (0-100 km/h)",
            velocidadMax: "325 km/h",
            transmision: "Automática",
            traccion: "Trasera",
            consumo: "N/A"
        },
        features: [
            "Rines de 20\" en negro brillante",
            "Pinzas de freno en color amarillo",
            "Style package negro brillante",
            "Cinturones en Giallo Taurus",
            "Sistema de audio Lamborghini Sensonum",
            "Lifting system",
            "Escudo bordado en reposacabezas"
        ]
    },
    {
        id: 4,
        brand: "Porsche",
        model: "Taycan Turbo S",
        year: 2021,
        price: "2.2",
        priceUnit: "MDP",
        kilometers: "16,730",
        exteriorColor: "Blanco",
        interiorColor: "Blanco y Azul",
        imageBase: "PorscheTaycanTurboS",
        imageExtension: ".webp",
        totalImages: 12,
        specs: {
            motor: "Eléctrico",
            potencia: "761 HP",
            aceleracion: "2.8s (0-100 km/h)",
            velocidadMax: "260 km/h",
            transmision: "Automática",
            traccion: "Integral",
            consumo: "Eléctrico"
        },
        features: [
            "Frenos ABS y Control de estabilidad",
            "Faros con regulación automática",
            "Sensor de estacionamiento",
            "Airbag conductor y pasajero",
            "Desempañador trasero",
            "Seguros eléctricos",
            "Interior bitono blanco y azul"
        ]
    },
    {
        id: 5,
        brand: "Porsche",
        model: "Carrera T",
        year: 2024,
        price: "2.95",
        priceUnit: "MDP",
        kilometers: "3,215",
        exteriorColor: "Rojo",
        interiorColor: "Negro y Rojo",
        imageBase: "PorscheCarreraT",
        imageExtension: ".webp",
        totalImages: 12,
        specs: {
            motor: "3.0L Twin-Turbo",
            potencia: "385 HP",
            aceleracion: "4.5s (0-100 km/h)",
            velocidadMax: "291 km/h",
            transmision: "Manual",
            traccion: "Trasera",
            consumo: "N/A"
        },
        features: [
            "Transmisión Manual",
            "Precio negociable",
            "Sensor de estacionamiento",
            "Interior negro y rojo",
            "Puertas: 3"
        ]
    },
    {
        id: 6,
        brand: "Mercedes-Benz",
        model: "AMG GT Black Series",
        year: 2021,
        price: "10.5",
        priceUnit: "MDP",
        kilometers: "4,110",
        exteriorColor: "Negro Obsidiana",
        interiorColor: "Simil cuero artico",
        imageBase: "MercedesBenzGTAt",
        imageExtension: ".webp",
        totalImages: 12,
        specs: {
            motor: "4.0L V8 Biturbo",
            potencia: "730 HP",
            aceleracion: "3.2s (0-100 km/h)",
            velocidadMax: "325 km/h",
            transmision: "Automática",
            traccion: "Trasera",
            consumo: "N/A"
        },
        features: [
            "Costuras y logos AMG naranja",
            "Faros led high performance",
            "Rines AMG aleación",
            "Molduras fibra de carbono",
            "Jaula antivuelco",
            "Consola central con AMG drive",
            "Diseño inspirado en GT3"
        ]
    },
    {
        id: 7,
        brand: "Lamborghini",
        model: "Urus S",
        year: 2023,
        price: "6.35",
        priceUnit: "MDP",
        kilometers: "6,121",
        exteriorColor: "Verde Turbine",
        interiorColor: "Nero ade costuras bianco",
        imageBase: "LamborghiniUrusV8SAt",
        imageExtension: ".webp",
        totalImages: 12,
        specs: {
            motor: "4.0L V8 Biturbo",
            potencia: "666 HP",
            aceleracion: "3.5s (0-100 km/h)",
            velocidadMax: "305 km/h",
            transmision: "Automática",
            traccion: "Integral",
            consumo: "N/A"
        },
        features: [
            "Rines de 23\" bronce diamante",
            "Techo panorámico",
            "Style package color carrocería",
            "Salidas de escape negro mate",
            "Sistema audio 3D Bang&Olufsen",
            "Puertas cierre soft close",
            "Escudo bordado en cabeceras"
        ]
    },
    {
        id: 8,
        brand: "Ferrari",
        model: "296 GTB",
        year: 2024,
        price: "10.7",
        priceUnit: "MDP",
        kilometers: "1,571",
        exteriorColor: "Azul (Blue Corsa)",
        interiorColor: "Negro y Amarillo",
        imageBase: "Ferrari296Gtb",
        imageExtension: ".webp",
        totalImages: 12,
        specs: {
            motor: "V6 Híbrido 3.0L",
            potencia: "830 HP",
            aceleracion: "2.9s (0-100 km/h)",
            velocidadMax: "330 km/h",
            transmision: "Automática",
            traccion: "Trasera",
            consumo: "N/A"
        },
        features: [
            "Apple Carplay",
            "Lifting system",
            "Calipers amarillo",
            "Cinturones amarillo",
            "Asientos cuero detalles amarillo",
            "Asientos totalmente eléctricos",
            "Escudo bordado en cabeceras"
        ]
    },
    {
        id: 9,
        brand: "Lamborghini",
        model: "Urus Performante",
        year: 2023,
        price: "6.8",
        priceUnit: "MDP",
        kilometers: "5,175",
        exteriorColor: "Azul",
        interiorColor: "Negro y Azul",
        imageBase: "LamborghiniUrusV8PerformanteAt",
        imageExtension: ".webp",
        totalImages: 12,
        specs: {
            motor: "4.0L V8 Biturbo",
            potencia: "666 HP",
            aceleracion: "3.3s (0-100 km/h)",
            velocidadMax: "306 km/h",
            transmision: "Automática",
            traccion: "Integral",
            consumo: "N/A"
        },
        features: [
            "Versión Performante",
            "Transmisión Automática",
            "Interior Negro y Azul",
            "Suspensión deportiva",
            "Aerodinámica activa",
            "Uso ligero de fibra de carbono"
        ]
    },
    {
        id: 10,
        brand: "Aston Martin",
        model: "DBX",
        year: 2022,
        price: "4.9",
        priceUnit: "MDP",
        kilometers: "4,501",
        exteriorColor: "Gris (Solid China Grey)",
        interiorColor: "Negro Onyx con Oxford Tan",
        imageBase: "AstonMartinDbx",
        imageExtension: ".webp",
        totalImages: 12,
        specs: {
            motor: "4.0L V8 Biturbo",
            potencia: "550 HP",
            aceleracion: "4.5s (0-100 km/h)",
            velocidadMax: "291 km/h",
            transmision: "Automática",
            traccion: "Integral",
            consumo: "N/A"
        },
        features: [
            "Rines 23\" Forged Negro Satin",
            "Calipers Vivid Orange",
            "Paquete exterior negro brillante",
            "Parrilla negra y calaveras ahumadas",
            "Incrustaciones Negro Piano",
            "Vidrio trasero privacidad",
            "SUV de ultra lujo"
        ]
    },
    {
        id: 11,
        brand: "Ferrari",
        model: "296 GTB",
        year: 2023,
        price: "10.9",
        priceUnit: "MDP",
        kilometers: "2,997",
        exteriorColor: "Rojo",
        interiorColor: "Cuero",
        imageBase: "Ferrari296GtbRojo",
        imageExtension: ".webp",
        totalImages: 12,
        specs: {
            motor: "V6 Híbrido 3.0L",
            potencia: "830 HP",
            aceleracion: "2.9s (0-100 km/h)",
            velocidadMax: "330 km/h",
            transmision: "Automática",
            traccion: "Trasera",
            consumo: "N/A"
        },
        features: [
            "Apple Carplay",
            "Lifting System",
            "Calipers Rojos",
            "Cavallino bordado en asientos",
            "Cámara 360",
            "Cargador inalámbrico",
            "Full Xpel (Protección)",
            "Sensores delanteros y traseros"
        ]
    },
    {
        id: 12,
        brand: "Aston Martin",
        model: "Vantage V8",
        year: 2019,
        price: "3.45",
        priceUnit: "MDP",
        kilometers: "9,523",
        exteriorColor: "Negro",
        interiorColor: "Negro",
        imageBase: "AstonMartinVantageV8At",
        imageExtension: ".webp",
        totalImages: 12,
        specs: {
            motor: "4.0L V8 Biturbo",
            potencia: "503 HP",
            aceleracion: "3.6s (0-100 km/h)",
            velocidadMax: "314 km/h",
            transmision: "Automática",
            traccion: "Trasera",
            consumo: "N/A"
        },
        features: [
            "Vehículo verificado CARFAX",
            "Llantas de aleación",
            "Sistema de sonido Premium",
            "Aire acondicionado y climatizador",
            "Computadora de abordo",
            "Diseño Coupé deportivo"
        ]
    }
];

const NUMERO_DIRECTO = "+52 5660797723";
const EMAIL_CONTACTO = "Concecionarios@gmail.com";
const carsGrid = document.getElementById('cars-grid');
const brandFilter = document.getElementById('brand-filter');
const priceFilter = document.getElementById('price-filter');
const sortFilter = document.getElementById('sort-filter');
const modal = document.getElementById('car-modal');
const closeModalBtns = document.querySelectorAll('.close-modal');
const lightbox = document.getElementById('fullscreen-lightbox');
const lightboxImg = document.getElementById('lightbox-img');
const btnZoomToggle = document.getElementById('btn-zoom-toggle');
const closeLightbox = document.querySelector('.close-lightbox');

let currentModalImages = [];
let currentImageIndex = 0;
let currentCarData = null;
let touchStartX = 0;
let touchEndX = 0;

document.addEventListener('DOMContentLoaded', () => {
    if (carsGrid) {
        renderCars(carsData);
        brandFilter.addEventListener('change', filterCars);
        priceFilter.addEventListener('change', filterCars);
        sortFilter.addEventListener('change', filterCars);
    }
    setupSmoothScroll();
    setupContactForm();
    setupNewsletter();
    setupLightboxEvents();
    setupMobileMenu();
    setupSwipe();
});

function setupLightboxEvents() {
    const mainImg = document.getElementById('modal-main-img');

    if (mainImg) {
        mainImg.addEventListener('click', () => {
            openLightbox(mainImg.src);
        });
    }
    if (closeLightbox) {
        closeLightbox.addEventListener('click', closeLightboxFunc);
    }
    if (btnZoomToggle) {
        btnZoomToggle.addEventListener('click', toggleLightboxZoom);
    }
    if (lightboxImg) {
        lightboxImg.addEventListener('click', (e) => {
            e.stopPropagation();
            toggleLightboxZoom(e);
        });
        lightboxImg.addEventListener('mousemove', (e) => {
            requestAnimationFrame(() => handleZoomMove(e));
        });
        lightboxImg.addEventListener('touchmove', (e) => {
            if (lightboxImg.classList.contains('zoomed')) {
                e.preventDefault();
                requestAnimationFrame(() => handleZoomMove(e));
            }
        }, { passive: false });
        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox) {
                closeLightboxFunc();
            }
        });
    }

    const lightboxPrev = document.getElementById('lightbox-prev-btn');
    const lightboxNext = document.getElementById('lightbox-next-btn');

    if (lightboxPrev) {
        lightboxPrev.addEventListener('click', (e) => {
            e.stopPropagation();
            currentImageIndex--;
            if (currentImageIndex < 0) {
                currentImageIndex = currentModalImages.length - 1;
            }
            lightboxImg.src = currentModalImages[currentImageIndex];
            updateModalMainImage();
        });

    }
    if (lightboxNext) {
        lightboxNext.addEventListener('click', (e) => {
            e.stopPropagation();
            currentImageIndex++;
            if (currentImageIndex >= currentModalImages.length) {
                currentImageIndex = 0;
            }
            lightboxImg.src = currentModalImages[currentImageIndex];
            updateModalMainImage();
        });
    }
}

function openLightbox(src) {

    if (!lightbox) return;
    lightboxImg.src = src;
    lightbox.style.display = 'flex';
    requestAnimationFrame(() => {
        lightbox.classList.add('active');
    });
    document.body.style.overflow = 'hidden';
}

function closeLightboxFunc() {
    lightbox.classList.remove('active');
    setTimeout(() => {
        lightbox.style.display = 'none';
        lightboxImg.classList.remove('zoomed');
        lightboxImg.style.transformOrigin = 'center center';
        if (btnZoomToggle) {
            btnZoomToggle.classList.remove('active');
        }
    }, 300);
}

function toggleLightboxZoom(e) {
    e.stopPropagation();
    lightboxImg.classList.toggle('zoomed');
    btnZoomToggle.classList.toggle('active');
    
    if (!lightboxImg.classList.contains('zoomed')) {
        lightboxImg.style.transformOrigin = 'center center';
    }
}

function handleZoomMove(e) {
    if (!lightboxImg.classList.contains('zoomed')) return;
    let clientX, clientY;
    if (e.type === 'touchmove' || e.type === 'touchstart') {
        clientX = e.touches[0].clientX;
        clientY = e.touches[0].clientY;
    } else {
        clientX = e.clientX;
        clientY = e.clientY;
    }

    const rect = lightboxImg.getBoundingClientRect();
    const x = clientX - rect.left;
    const y = clientY - rect.top;
    const xPercent = (x / rect.width) * 100;
    const yPercent = (y / rect.height) * 100;
    
    lightboxImg.style.transformOrigin = `${xPercent}% ${yPercent}%`;
}

function renderCars(cars) {
    if (!carsGrid) return;
    carsGrid.innerHTML = '';
    if (cars.length === 0) {
        carsGrid.innerHTML = `
            <div style="text-align:center; color:white; grid-column:1/-1; padding: 60px;">
                <i class="fas fa-search" style="font-size: 3rem; margin-bottom: 20px; color: var(--gold);"></i>
                <h3 style="margin-bottom: 10px;">No se encontraron vehículos</h3>
                <p style="color: var(--gray-light);">Intenta con otros filtros.</p>
            </div>
        `;
        return;
    }
    const fragment = document.createDocumentFragment();
    cars.forEach((car, index) => {
        const card = createCarCard(car);
        card.style.animationDelay = `${index * 0.05}s`;
        fragment.appendChild(card);
    });
    carsGrid.appendChild(fragment);
}

function createCarCard(car) {
    const card = document.createElement('div');
    card.className = 'car-card';
    const isNew = car.year >= 2024;
    const imagePath = `../images/${car.imageBase}1${car.imageExtension}`;
    card.innerHTML = `
        ${isNew ? '<div class="car-badge">NUEVO</div>' : ''}
        <div class="car-image-container">
            <img src="${imagePath}" alt="${car.brand} ${car.model}" loading="lazy" decoding="async">
        </div>
        <div class="car-details">
            <span class="car-brand">${car.brand}</span>
            <h3>${car.model}</h3>
            <div class="car-price">$${car.price} ${car.priceUnit}</div>
            <div class="car-specs-preview">
                <span><i class="fas fa-calendar-alt"></i> ${car.year}</span>
                <span><i class="fas fa-tachometer-alt"></i> ${car.kilometers} km</span>
                <span><i class="fas fa-palette"></i> ${car.exteriorColor}</span>
            </div>
            <button class="view-details-btn" onclick="openModal(${car.id})">
                <i class="fas fa-eye"></i> Ver Detalles
            </button>
        </div>
    `;
    return card;
}

function filterCars() {
    if (!carsGrid) return;
    const brandValue = brandFilter.value;
    const priceValue = priceFilter.value;
    const sortValue = sortFilter.value;
    let filtered = carsData.filter(car => {
        const matchBrand = brandValue === 'all' || car.brand === brandValue;
        let matchPrice = true;
        const price = parseFloat(car.price);
        if (priceValue === 'low') {
            matchPrice = price < 5;
        } else if (priceValue === 'mid') {
            matchPrice = price >= 5 && price <= 10;
        } else if (priceValue === 'high') {
            matchPrice = price > 10;
        }
        return matchBrand && matchPrice;
    });
    if (sortValue !== 'default') {
        filtered.sort((a, b) => {
            const priceA = parseFloat(a.price);
            const priceB = parseFloat(b.price);
            switch(sortValue) {
                case 'price-asc':
                    return priceA - priceB;
                case 'price-desc':
                    return priceB - priceA;
                case 'year-desc':
                    return b.year - a.year;
                default:
                    return 0;
            }
        });
    }
    renderCars(filtered);
}

window.openModal = function(id) {
    if (!modal) return;
    const car = carsData.find(c => c.id === id);
    if (!car) return;
    currentCarData = car;
    currentModalImages = [];
    for (let i = 1; i <= car.totalImages; i++) {
        currentModalImages.push(`../images/${car.imageBase}${i}${car.imageExtension}`);
    }
    currentImageIndex = 0;
    updateModalMainImage();
    document.getElementById('modal-title').innerText = `${car.brand} ${car.model}`;
    document.getElementById('modal-price').innerText = `$${car.price} ${car.priceUnit}`;
    renderThumbnails();
    const specsHTML = `
        <div class="spec-item"><span>Año</span><strong>${car.year}</strong></div>
        <div class="spec-item"><span>Kilómetros</span><strong>${car.kilometers} km</strong></div>
        <div class="spec-item"><span>Exterior</span><strong>${car.exteriorColor}</strong></div>
        <div class="spec-item"><span>Interior</span><strong>${car.interiorColor}</strong></div>
        <div class="spec-item"><span>Motor</span><strong>${car.specs.motor}</strong></div>
        <div class="spec-item"><span>Potencia</span><strong>${car.specs.potencia}</strong></div>
        <div class="spec-item"><span>Aceleración</span><strong>${car.specs.aceleracion}</strong></div>
        <div class="spec-item"><span>Velocidad Máx</span><strong>${car.specs.velocidadMax}</strong></div>
    `;
    document.getElementById('modal-specs').innerHTML = specsHTML;
    document.getElementById('modal-features').innerHTML = car.features.map(f => `<li>${f}</li>`).join('');
    const whatsappBtn = document.getElementById('modal-whatsapp');
    const message = `Hola, me interesa el ${car.brand} ${car.model} (${car.year}) que vi en su inventario de The Collection.`;
    if(whatsappBtn) {
        whatsappBtn.href = `https://wa.me/${NUMERO_DIRECTO}?text=${encodeURIComponent(message)}`;
    }
    modal.style.display = 'block';
    if (!lightbox || lightbox.style.display === 'none') {
        document.body.style.overflow = 'hidden';
    }
}

function updateModalMainImage() {
    const mainImg = document.getElementById('modal-main-img');
    mainImg.style.opacity = '0.8';
    mainImg.src = currentModalImages[currentImageIndex];
    setTimeout(() => {
        mainImg.style.opacity = '1';
    }, 150);
    const thumbs = document.querySelectorAll('.gallery-thumbnails img');
    thumbs.forEach((img, idx) => {
        if(idx === currentImageIndex) img.classList.add('active');
        else img.classList.remove('active');
    });
}

function renderThumbnails() {
    const container = document.getElementById('modal-thumbnails');
    container.innerHTML = currentModalImages.map((img, index) => `
        <img src="${img}" 
             onclick="setModalImage(${index})" 
             class="${index === 0 ? 'active' : ''}" 
             alt="Miniatura" loading="lazy">
    `).join('');
}

window.nextImage = function(e) {
    if(e) e.stopPropagation();
    currentImageIndex++;
    if (currentImageIndex >= currentModalImages.length) {
        currentImageIndex = 0;
    }
    updateModalMainImage();
}

window.prevImage = function(e) {
    if(e) e.stopPropagation();
    currentImageIndex--;
    if (currentImageIndex < 0) {
        currentImageIndex = currentModalImages.length - 1;
    }
    updateModalMainImage();
}

window.setModalImage = function(index) {
    currentImageIndex = index;
    updateModalMainImage();
}

function setupSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href.startsWith('#')) {
                e.preventDefault();
                const targetElement = document.querySelector(href);
                if (targetElement) {
                    targetElement.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            }
        });
    });
}

function setupContactForm() {
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', handleContactSubmit);
    }
    if (closeModalBtns) {
        closeModalBtns.forEach(btn => {
            btn.onclick = function() {
                this.closest('.modal').style.display = 'none';
                document.body.style.overflow = 'auto';
            };
        });
    }
    window.onclick = function(event) {
        if (event.target.classList.contains('modal')) {
            event.target.style.display = 'none';
            document.body.style.overflow = 'auto';
        }
    }
}

function handleContactSubmit(e) {
    e.preventDefault();
    const form = e.target;
    if (!form.checkValidity()) {
        showNotification("Por favor completa los campos requeridos.", "error");
        return;
    }
    const submitBtn = form.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Procesando...';
    submitBtn.disabled = true;
    const nombre = form.querySelector('input[placeholder="Nombre Completo"]').value;
    const telefono = form.querySelector('input[placeholder="Teléfono (10 dígitos)"]').value;
    const selectInteres = document.getElementById('car-interest');
    const autoInteres = selectInteres.options[selectInteres.selectedIndex].text;
    const mensajeUsuario = form.querySelector('textarea').value;
    const textoWhatsapp = `*Hola The Collection* 🚘%0A%0A👤 *Nombre:* ${nombre}%0A📧 *Correo:* ${EMAIL_CONTACTO}%0A📱 *Tel:* ${telefono}%0A🚗 *Interés:* ${autoInteres}%0A💬 *Mensaje:* ${mensajeUsuario}`;
    setTimeout(() => {
        const isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
        const baseUrl = isMobile ? "https://api.whatsapp.com/send" : "https://web.whatsapp.com/send";
        window.open(`${baseUrl}?phone=${NUMERO_DIRECTO}&text=${textoWhatsapp}`, '_blank');
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
        form.reset();
        showNotification("¡Abriendo WhatsApp!", "success");
    }, 800);
}

function setupNewsletter() {
    const newsletterBtn = document.querySelector('.newsletter-input button');
    if (newsletterBtn) {
        newsletterBtn.addEventListener('click', function(e) {
            e.preventDefault();
            const input = this.parentElement.querySelector('input');
            if (input.value.includes('@')) {
                showNotification("¡Gracias por suscribirte!", "success");
                input.value = '';
            } else {
                showNotification("Ingresa un correo válido", "error");
            }
        });
    }
}

function setupMobileMenu() {
    const hamburger = document.querySelector('.hamburger');
    const navLinks = document.querySelector('.nav-links');
    if (hamburger && navLinks) {
        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            const icon = hamburger.querySelector('i');
            if (navLinks.classList.contains('active')) {
                icon.classList.replace('fa-bars', 'fa-times');
                document.body.style.overflow = 'hidden';
            } else {
                icon.classList.replace('fa-times', 'fa-bars');
                document.body.style.overflow = 'auto';
            }
        });
    }
}

function updateNavbar() {
    const header = document.getElementById('navbar');
    if (window.pageYOffset > 100) {
        header.style.backgroundColor = 'rgba(10, 10, 10, 0.98)';
    } else {
        header.style.backgroundColor = 'transparent';
    }
}

function showNotification(message, type = "success") {
    const notification = document.createElement('div');
    notification.style.cssText = `position: fixed; top: 90px; right: 20px; background: ${type === 'success' ? '#4CAF50' : '#f44336'}; color: white; padding: 15px 25px; border-radius: 8px; z-index: 9999; box-shadow: 0 4px 12px rgba(0,0,0,0.3); font-family: sans-serif;`;
    notification.innerHTML = `<i class="fas ${type === 'success' ? 'fa-check' : 'fa-exclamation'}"></i> ${message}`;
    document.body.appendChild(notification);
    setTimeout(() => {
        notification.style.opacity = '0';
        setTimeout(() => { notification.remove(); }, 300);
    }, 3000);
}

function setupSwipe() {
    const gallery = document.querySelector('.main-image-wrapper');
    if (!gallery) return;
    gallery.addEventListener('touchstart', e => { touchStartX = e.changedTouches[0].screenX; }, {passive: true});
    gallery.addEventListener('touchend', e => { 
        touchEndX = e.changedTouches[0].screenX;
        if (touchEndX < touchStartX - 50) nextImage();
        if (touchEndX > touchStartX + 50) prevImage();
    }, {passive: true});
}

document.addEventListener('contextmenu', e => {
    if (e.target.tagName === 'IMG') { e.preventDefault(); }
});