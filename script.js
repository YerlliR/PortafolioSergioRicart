    window.addEventListener('load', updateHamburgerVisibility);
    window.addEventListener('resize', updateHamburgerVisibility);    
    
    // Loader
    window.addEventListener("load", function() {
        const loader = document.querySelector(".loader-wrapper");
        setTimeout(() => {
            loader.style.opacity = "0";
            setTimeout(() => {
                loader.style.display = "none";
            }, 500);
        }, 1500);
        
        // Iniciar efecto de matriz después de cargar la página
        initMatrixEffect();
    });
    
    // Scroll animation
    document.addEventListener("DOMContentLoaded", function() {
        // Mobile menu toggle
        const hamburgerMenu = document.getElementById('hamburgerMenu');
        const navMenu = document.querySelector('.nav-menu');
        
        // Función para cerrar el menú
        function closeMenu() {
            hamburgerMenu.classList.remove('active');
            navMenu.classList.remove('active');
            navMenu.style.maxHeight = '0';
            navMenu.style.opacity = '0';
            navMenu.style.pointerEvents = 'none';
        }
        
        // Función para abrir el menú
        function openMenu() {
            hamburgerMenu.classList.add('active');
            navMenu.classList.add('active');
            navMenu.style.maxHeight = '100vh'; // Usar 100vh en lugar de valor fijo
            navMenu.style.opacity = '1';
            navMenu.style.pointerEvents = 'all';
        }
        
        // Inicializar correctamente el estado del menú
        function initMenu() {
            if (window.innerWidth <= 768) {
                closeMenu();
            } else {
                navMenu.style.maxHeight = 'none';
                navMenu.style.opacity = '1';
                navMenu.style.pointerEvents = 'all';
            }
        }
        
        // Inicializar al cargar
        initMenu();
        
        if (hamburgerMenu && navMenu) {
            // Toggle del menú hamburguesa
            hamburgerMenu.addEventListener('click', function(e) {
                e.stopPropagation();
                if (navMenu.classList.contains('active')) {
                    closeMenu();
                } else {
                    openMenu();
                }
            });
            
            // Cerrar el menú al hacer clic en un enlace
            const navLinks = document.querySelectorAll('.nav-menu a');
            navLinks.forEach(link => {
                link.addEventListener('click', function() {
                    if (window.innerWidth <= 768) {
                        closeMenu();
                    }
                });
            });
            
            // Cerrar el menú al hacer clic fuera
            document.addEventListener('click', function(event) {
                if (window.innerWidth <= 768 && 
                    !navMenu.contains(event.target) && 
                    !hamburgerMenu.contains(event.target) &&
                    navMenu.classList.contains('active')) {
                    closeMenu();
                }
            });
        }
        
        // Smooth scrolling for navigation links with offset
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Calcular offset para el menú fijo
                const targetElement = document.querySelector(this.getAttribute('href'));
                if (targetElement) {
                    const yOffset = -70; // Ajustar según la altura del menú
                    const y = targetElement.getBoundingClientRect().top + window.pageYOffset + yOffset;
                    
                    window.scrollTo({
                        top: y,
                        behavior: 'smooth'
                    });
                }
            });
        });
    
        // Skill progress animation on scroll
        const skillBars = document.querySelectorAll('.skill-progress');
        const animateSkills = () => {
            skillBars.forEach(bar => {
                const rect = bar.getBoundingClientRect();
                const isInViewport = (
                    rect.top >= 0 &&
                    rect.left >= 0 &&
                    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                );
    
                if (isInViewport && !bar.classList.contains('animated')) {
                    bar.classList.add('animated');
                    bar.style.width = bar.style.width;
                }
            });
        };
    
        // Create particles in header - Optimizado para móvil
        const particlesContainer = document.querySelector('.header-particles');
        
        // Determinar cuántas partículas mostrar basado en el tamaño de pantalla
        const particleCount = window.innerWidth <= 768 ? 5 : 15;
        
        if (particlesContainer) {
            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.classList.add('particle');
                particle.style.width = Math.random() * 15 + 5 + 'px';
                particle.style.height = particle.style.width;
                particle.style.left = Math.random() * 100 + 'vw';
                particle.style.top = Math.random() * 100 + 'vh';
                particle.style.animationDelay = Math.random() * 5 + 's';
                particle.style.animationDuration = Math.random() * 15 + 10 + 's';
                particlesContainer.appendChild(particle);
            }
            
            // Create code particles - símbolos de código - Optimizado para móvil
            const codeParticleCount = window.innerWidth <= 768 ? 3 : 10;
            
            for (let i = 0; i < codeParticleCount; i++) {
                const codeParticle = document.createElement('div');
                codeParticle.classList.add('code-particle');
                
                // Símbolos de código aleatorios
                const codeSymbols = ['{', '}', '()', '=>', '[]', '</>', 'if', 'for', '&&', '||', '++', '===', '!=='];
                codeParticle.textContent = codeSymbols[Math.floor(Math.random() * codeSymbols.length)];
                
                codeParticle.style.left = Math.random() * 100 + 'vw';
                codeParticle.style.top = Math.random() * 100 + 'vh';
                codeParticle.style.fontSize = Math.random() * 1 + 0.8 + 'rem';
                codeParticle.style.animationDelay = Math.random() * 5 + 's';
                codeParticle.style.animationDuration = Math.random() * 20 + 15 + 's';
                particlesContainer.appendChild(codeParticle);
            }
        }
    
        window.addEventListener('scroll', animateSkills);
        animateSkills(); // Run on initial load
    
        // Theme toggle with localStorage
        const themeToggle = document.getElementById('themeToggle');
        const body = document.body;
        const toggleIcon = themeToggle ? themeToggle.querySelector('.toggle-icon') : null;
        
        if (themeToggle && toggleIcon) {
            // Comprobar si existe preferencia guardada
            const savedTheme = localStorage.getItem('theme');
            if (savedTheme === 'light') {
                body.classList.add('light-theme');
                toggleIcon.innerHTML = '<i class="fas fa-moon"></i>';
            }
            
            themeToggle.addEventListener('click', () => {
                body.classList.toggle('light-theme');
                
                if (body.classList.contains('light-theme')) {
                    toggleIcon.innerHTML = '<i class="fas fa-moon"></i>';
                    localStorage.setItem('theme', 'light');
                } else {
                    toggleIcon.innerHTML = '<i class="fas fa-sun"></i>';
                    localStorage.setItem('theme', 'dark');
                }
                
                // Actualizar visibilidad de matriz al cambiar tema
                updateMatrixVisibility();
            });
        }
    
        // Form validation with better mobile experience
        const contactForm = document.getElementById('contactForm');
        
        if (contactForm) {
            // Fijar el tamaño de fuente para evitar zoom en iOS
            const inputs = contactForm.querySelectorAll('input, textarea');
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    if (window.innerWidth <= 768) {
                        document.body.style.fontSize = '16px';
                    }
                });
                
                input.addEventListener('blur', function() {
                    document.body.style.fontSize = '';
                });
            });
            
            contactForm.addEventListener('submit', (e) => {
                e.preventDefault();
                
                // Basic validation
                const name = document.getElementById('name').value;
                const email = document.getElementById('email').value;
                const message = document.getElementById('message').value;
                
                if (!name || !email || !message) {
                    alert('Por favor, completa todos los campos requeridos.');
                    return;
                }
                
                // Email validation
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(email)) {
                    alert('Por favor, introduce un email válido.');
                    return;
                }
                
                // If validation passes
                alert('¡Mensaje enviado con éxito! Te contactaremos pronto.');
                contactForm.reset();
            });
        }
        
        // Typing animation effect for header
        setTimeout(() => {
            const typingElement = document.querySelector('.typing-effect');
            if (typingElement) {
                typingElement.style.width = '100%';
            }
        }, 500);
        
        const projectLinks = document.querySelectorAll('.project-link');
        
        projectLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                // Detener la propagación para que el evento no llegue a elementos padres
                e.stopPropagation();
                
                const href = this.getAttribute('href');
                if (href && href !== '#') {
                    // Abre el enlace en una nueva pestaña
                    window.open(href, '_blank');
                }
            });
        });
        
        // Hacer que toda la tarjeta sea clickeable (opcional)
        const projectCards = document.querySelectorAll('.project-card');
        projectCards.forEach(card => {
            card.addEventListener('click', function() {
                // Encuentra el primer enlace dentro de esta tarjeta
                const primaryLink = this.querySelector('.project-link');
                if (primaryLink) {
                    const href = primaryLink.getAttribute('href');
                    if (href && href !== '#') {
                        window.open(href, '_blank');
                    }
                }
            });
        });
    
    
        // Agregar data-skill atributos a las tarjetas de habilidades
        const skillCards = document.querySelectorAll('.skill-card');
        skillCards.forEach(card => {
            const title = card.querySelector('.skill-title').textContent.toLowerCase();
            card.setAttribute('data-skill', title);
        });
        
        // Improved scroll spy for navigation highlighting
        const sections = document.querySelectorAll('section');
        const navItems = document.querySelectorAll('.nav-menu a');
        
        const highlightNavigation = () => {
            let current = '';
            const scrollPosition = window.scrollY + 100; // Offset for better accuracy
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.offsetHeight;
                
                if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                    current = section.getAttribute('id');
                }
            });
            
            navItems.forEach(item => {
                item.classList.remove('active');
                if (item.getAttribute('href') === `#${current}`) {
                    item.classList.add('active');
                }
            });
        };
        
        // Optimización de rendimiento: throttle para scroll events
        let scrollTimeout;
        window.addEventListener('scroll', function() {
            if (!scrollTimeout) {
                scrollTimeout = setTimeout(function() {
                    highlightNavigation();
                    scrollTimeout = null;
                }, 100);
            }
        });
        
        window.addEventListener('resize', function() {
            initMenu();
            optimizeMobileEffects();
        });
        
        highlightNavigation(); // Run on initial load
        
        // Detección y manejo de gestos táctiles
        let touchStartY = 0;
        let touchEndY = 0;
        
        document.addEventListener('touchstart', function(e) {
            touchStartY = e.changedTouches[0].screenY;
        }, false);
        
        document.addEventListener('touchend', function(e) {
            touchEndY = e.changedTouches[0].screenY;
            handleSwipe();
        }, false);
        
        function handleSwipe() {
            const swipeDistance = touchEndY - touchStartY;
            
            // Detectar swipe hacia abajo cuando se está en la parte superior para cerrar el menú
            if (swipeDistance > 100 && window.scrollY < 50 && navMenu && navMenu.classList.contains('active')) {
                closeMenu();
            }
        }
        
        // Optimizar efectos visuales en móvil
        function optimizeMobileEffects() {
            if (window.innerWidth <= 768) {
                // Reducir el número de partículas en móvil
                const particles = document.querySelectorAll('.particle, .code-particle');
                particles.forEach((particle, index) => {
                    if (index > 5) { // Mantener solo algunas partículas
                        particle.style.display = 'none';
                    }
                });
                
                // Desactivar efectos de matrix en móvil para mejorar rendimiento
                const matrixContainer = document.getElementById('matrixRain');
                if (matrixContainer) {
                    matrixContainer.style.display = 'none';
                }
            } else {
                // Restaurar en desktop
                const particles = document.querySelectorAll('.particle, .code-particle');
                particles.forEach(particle => {
                    particle.style.display = 'block';
                });
                
                // Actualizar visibilidad de matriz según el tema
                updateMatrixVisibility();
            }
        }
        
        optimizeMobileEffects();
    });
    
    // Matrix code rain effect - con optimización para móvil
    function initMatrixEffect() {
        const matrixContainer = document.getElementById('matrixRain');
        if (!matrixContainer) return;
        
        // Actualizar visibilidad según el tema
        updateMatrixVisibility();
        
        // Si es móvil, reducir sustancialmente la cantidad de elementos
        const charCount = window.innerWidth <= 768 ? 10 : 30;
        
        // Caracteres para la lluvia de código
        const chars = '01アイウエオカキクケコサシスセソタチツテトナニヌネノハヒフヘホマミムメモヤユヨラリルレロワヲン{}[]()<>=&|!';
        
        // Crear columnas de caracteres sólo si no están ya creadas
        if (matrixContainer.children.length === 0) {
            for (let i = 0; i < charCount; i++) {
                const column = document.createElement('div');
                column.style.position = 'absolute';
                column.style.top = '-100px';
                column.style.color = 'rgba(0, 255, 140, 0.07)';
                column.style.fontSize = '1.2rem';
                column.style.fontFamily = 'monospace';
                column.style.textAlign = 'center';
                column.style.userSelect = 'none';
                column.style.pointerEvents = 'none';
                column.style.left = Math.random() * 100 + 'vw';
                column.style.animationDuration = Math.random() * 30 + 10 + 's';
                column.style.animationDelay = Math.random() * 2 + 's';
                column.style.opacity = Math.random() * 0.5 + 0.1;
                
                // Crear cadena de caracteres aleatorios (más corta en móvil)
                let columnChars = '';
                for (let j = 0; j < (window.innerWidth <= 768 ? 5 : Math.random() * 20 + 10); j++) {
                    columnChars += chars.charAt(Math.floor(Math.random() * chars.length)) + '<br>';
                }
                
                column.innerHTML = columnChars;
                column.style.animation = `matrix-rain ${Math.random() * 20 + 10}s linear infinite`;
                matrixContainer.appendChild(column);
            }
        }
    }
    
    // Función para actualizar visibilidad del efecto matrix según tema
    function updateMatrixVisibility() {
        const matrixContainer = document.getElementById('matrixRain');
        if (!matrixContainer) return;
        
        if (document.body.classList.contains('light-theme') || window.innerWidth <= 768) {
            matrixContainer.style.opacity = '0';
            // Pausa las animaciones para ahorrar recursos
            setTimeout(() => {
                matrixContainer.style.display = 'none';
            }, 300);
        } else {
            matrixContainer.style.display = 'block';
            // Pequeño retraso para permitir que el display:block surta efecto
            setTimeout(() => {
                matrixContainer.style.opacity = '1';
            }, 50);
        }
    }

    function updateHamburgerVisibility() {
        const hamburgerMenu = document.getElementById('hamburgerMenu');
        if (hamburgerMenu) {
            if (window.innerWidth <= 768) {
                hamburgerMenu.style.display = 'flex';
            } else {
                hamburgerMenu.style.display = 'none';
            }
        }
    }
    
