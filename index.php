<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sergio Ricart Alabau - Portafolio</title>
<link rel="shortcut icon" href="hacking_11189888.png" type="image/x-icon">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="styles.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
</head>
<body>
<div class="loader-wrapper">
    <div class="loader"></div>
</div>

<div class="matrix-rain" id="matrixRain"></div>

<nav class="nav-menu">
    <a href="#home" data-section="home">inicio</a>
    <a href="#about" data-section="about">sobre_mí</a>
    <a href="#projects" data-section="projects">proyectos</a>
    <a href="#experience" data-section="experience">experiencia</a>
    <a href="#contact" data-section="contact">contacto</a>
    <a href="#skills" data-section="skills">skills</a>
</nav>

<header id="home">
    <div class="header-bg"></div>
    <div class="header-particles" id="particles-js"></div>
    <div class="header-content">
        <span class="terminal-prompt">$ whoami</span>
        <h1 class="typing-effect">Sergio Ricart Alabau</h1>
        <div class="job-title">Full Stack Developer <span class="terminal-cursor"></span></div>
        <p>Desarrollador Full Stack con experiencia en PHP, JavaScript, CSS y frameworks como JPA y OpenXava.</p>
        <div class="cta-buttons">
            <a href="#contact" class="btn btn-primary"><i class="fas fa-envelope"></i> Contáctame</a>
            <!-- <a href="#" class="btn btn-secondary"><i class="fas fa-download"></i> Descargar CV</a> -->
        </div>
    </div>
</header>

<section id="about">
    <div class="section-title-container">
        <h2 class="section-title">Sobre Mí</h2>
        <span class="section-underline"></span>
    </div>
    <div class="about-container">
        <div class="about-content">
            <h3>Desarrollador Full Stack</h3>
            <p>Soy un desarrollador Full Stack con experiencia en JavaScript y PHP, con experiencia en el sector de e-commerce. Mi objetivo es construir aplicaciones web eficientes y escalables que ofrezcan la mejor experiencia al usuario final.</p>
            <p>Tengo formación en desarrollo backend y frontend, lo que me permite abordar proyectos completos desde su concepción hasta la implementación. Mi experiencia en comercio electrónico me ha dado un solido conocimiento sobre la optimización de plataformas de venta online.</p>
            <p>Actualmente estoy realizando mis prácticas en Gestion400 como Desarrollador Full Stack, donde estoy aplicando mis conocimientos en un entorno real y siguiendo mi formación como desarrollador. Me apasiona aprender nuevas tecnologías y metodologías que me permitan mejorar mis habilidades como desarrollador.</p>
        </div>
        <div class="about-image">
            <img src="SergioRicart_Foto.png" alt="Sergio Ricart - Desarrollador Full Stack">
        </div>
    </div>
</section>

<div class="hamburger-menu" id="hamburgerMenu">
    <div class="hamburger-icon">
        <i class="fas fa-bars"></i> <!-- Icono cuando está cerrado -->
        <i class="fas fa-times hidden"></i> <!-- Icono cuando está abierto -->
    </div>
</div>


<section id="projects">
    <div class="section-title-container">
        <h2 class="section-title">Proyectos</h2>
        <span class="section-underline"></span>
    </div>
    <div class="projects-container">

        <div class="project-card">
            <div class="project-image">
                <img src="rial.png" alt="Proyecto E-commerce">
                <div class="project-overlay">
                    <div class="project-links">
                        <a href="https://fornrial.com/index.php" target="_blank" class="project-link"><i class="fas fa-link"></i></a>
                        <!-- <a href="https://github.com/username/project-repo" target="_blank" class="project-link"><i class="fab fa-github"></i></a> -->
                    </div>
                </div>
            </div>
            <div class="project-content">
                <span class="project-category">PHP</span>
                <span class="project-category">JavaScript</span>
                <span class="project-category">MySQL</span>               
                <h3 class="project-title">Rial E-commerce</h3>
                <p class="project-description">Este es un proyecto de comercio electrónico, desarrollado con PHP, CSS3, JavaScript, y MySQL, integrando pasarelas de pago, bots de Telegram, y más.</p>
                <p>Under Construction</p>
            </div>
        </div>
    
        <div class="project-card">
            <div class="project-image">
                <img src="gestorPedidos.png" alt="Gestor de Pedidos">
                <div class="project-overlay">
                    <div class="project-links">
                        <!-- <a href="https://example.com/api-project" target="_blank"><i class="fas fa-link"></i></a> -->
                        <a href="https://github.com/YerlliR/GestionPedidosRial" target="_blank"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </div>
            <div class="project-content">
                <span class="project-category">PHP</span>
                <span class="project-category">JavaScript</span>
                <span class="project-category">MySQL</span>

                <h3 class="project-title">Aplicación de gestión de pedidos</h3>
                <p class="project-description">En este proyecto he querido involucrar la IA para experimentar lo que ofrece en cuanto a velocidad de desarrollo y he sido gratamente sorprendido. Actualmente estoy realizando los ultimos cambios.</p>
            </div>
        </div>
    
        <div class="project-card">
            <div class="project-image">
                <img src="SAUCER.png" alt="Aplicaciones Frontend">
                <div class="project-overlay">
                    <div class="project-links">
                        <!-- <a href="https://example.com/frontend-project" target="_blank"><i class="fas fa-link"></i></a> -->
                        <a href="https://github.com/YerlliR/SauceProject" target="_blank"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </div>
            <div class="project-content">
                <span class="project-category">Java</span>
                <span class="project-category">JavaFX</span>
                <h3 class="project-title">Cartera de Criptomonedas</h3>
                <p class="project-description">Desarrollo de una cartera virtual de criptomonedas en Java y JavaFX, que ofrece la posibilidad de ver precios en directo y realizar operaciones de compra y venta.</p>
            </div>
        </div>
    </div>
</section>

<section id="experience">
    <div class="section-title-container">
        <h2 class="section-title">Experiencia</h2>
        <span class="section-underline"></span>
    </div>
    <div class="timeline">
        <div class="timeline-item">
            <div class="timeline-content" data-date="2025-present">
                <span class="timeline-date">2025 - Presente</span>
                <h3 class="timeline-title">Estudiante en prácticas</h3>
                <p class="timeline-company">Gestión 400</p>
                <p class="timeline-description">Desarrollo de aplicaciones web utilizando Java, JPA y Hibernate. Implementación de integraciones con APIs de terceros y optimización de rendimiento. Uso de OpenXava para la creación de interfaces de usuario.</p>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-content" data-date="2023-2025">
                <span class="timeline-date">2023 - 2025</span>
                <h3 class="timeline-title">Grado Superior de DAW</h3>
                <p class="timeline-company">La Senia</p>
                <p class="timeline-description">Estudios de Grado Superior en Desarrollo de Aplicaciones Web, con un enfoque en tecnologías modernas y prácticas de desarrollo ágil. Desarrollo de proyectos que integran conocimientos de frontend y backend.</p>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-content" data-date="2021-2023">
                <span class="timeline-date">2021 - 2023</span>
                <h3 class="timeline-title">Grado Medio en Sistemas Microinformáticos y Redes</h3>
                <p class="timeline-company">La Florida</p>
                <p class="timeline-description">Estudios de Grado Medio en Sistemas Microinformáticos y Redes. Aprendizaje de los fundamentos de hardware, software y redes.</p>
            </div>
        </div>
    </div>
</section>

<section id="contact">
    <div class="section-title-container">
        <h2 class="section-title">Contacto</h2>
        <span class="section-underline"></span>
    </div>
    <div class="contact-container">
        <div class="contact-info">
            <div class="contact-item">
                <div class="contact-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="contact-details">
                    <h4>Email</h4>
                    <a href="mailto:sergioricart@gmail.com">sergiricartt@gmail.com</a>
                </div>
            </div>

            <div class="contact-item">
                <div class="contact-icon">
                    <i class="fas fa-phone"></i>
                </div>
                <div class="contact-details">
                    <h4>Teléfono</h4>
                    <p>+34 633 01 80 32</p>
                </div>
            </div>

            <div class="contact-item">
                <div class="contact-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="contact-details">
                    <h4>Ubicación</h4>
                    <p>Valencia, España</p>
                </div>
            </div>

            <div class="contact-item">
                <div class="contact-icon">
                    <i class="fab fa-linkedin"></i>
                </div>
                <div class="contact-details">
                    <h4>LinkedIn</h4>
                    <a href="https://www.linkedin.com/in/sergio-ricart-alabau-939441292" target="_blank">linkedin.com/in/sergio-ricart-alabau-939441292</a>
                </div>
            </div>
        </div>

        <div class="contact-form">
            <form id="contactForm" action="" method="POST">
                <div class="form-group">
                    <label class="form-label" for="name">Nombre</label>
                    <input type="text" class="form-control" id="name" placeholder="Tu nombre" name="nombre">
                </div>
                <div class="form-group">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Tu email" name="email">
                </div>
                <div class="form-group">
                    <label class="form-label" for="subject">Asunto</label>
                    <input type="text" class="form-control" id="subject" placeholder="Asunto del mensaje" name="asunto">
                </div>
                <div class="form-group">
                    <label class="form-label" for="message">Mensaje</label>
                    <textarea class="form-control" id="message" placeholder="Tu mensaje" name="mensaje"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
            </form>
        </div>
    </div>
</section>
<section id="skills">
    <div class="section-title-container">
        <h2 class="section-title">Skills</h2>
        <span class="section-underline"></span>
    </div>
    <div class="skills-container">
        <div class="skill-card" data-skill="PHP">
            <div class="skill-icon">
                <i class="fab fa-php"></i>
            </div>
            <h3 class="skill-title">PHP</h3>
            <p>Lenguaje de programación interpretado, conocido por su versatilidad y potencia, usado para desarrollo web y backend.</p>
            <div class="skill-level">
                <div class="skill-progress" style="width: 95%"></div>
                <span class="skill-percentage">95</span>
            </div>
        </div>

        <div class="skill-card" data-skill="Java">
            <div class="skill-icon">
                <i class="fab fa-java"></i>
            </div>
            <h3 class="skill-title">Java</h3>
            <p>Lenguaje de programación orientado a objetos, seguro y versátil, usado para desarrollo de aplicaciones y Android.</p>
            <div class="skill-level">
                <div class="skill-progress" style="width: 97%"></div>
                <span class="skill-percentage">97</span>
            </div>
        </div>

        <div class="skill-card" data-skill="js">
            <div class="skill-icon">
                <i class="fab fa-js"></i>
            </div>
            <h3 class="skill-title">JavaScript</h3>
            <p>Lenguaje de programación interpretado, conocido por su versatilidad y flexibilidad, usado para desarrollo web y frontend.</p>
            <div class="skill-level">
                <div class="skill-progress" style="width: 88%"></div>
                <span class="skill-percentage">88</span>
            </div>
        </div>

        <div class="skill-card" data-skill="css">
            <div class="skill-icon">
                <i class="fab fa-css3-alt"></i>
            </div>
            <h3 class="skill-title">TailwindCSS</h3>
            <p>Framework CSS utility-first para diseños rápidos, responsive y personalizables.</p>
            <div class="skill-level">
                <div class="skill-progress" style="width: 85%"></div>
                <span class="skill-percentage">85</span>
            </div>
        </div>

        <div class="skill-card" data-skill="sql">
            <div class="skill-icon">
                <i class="fas fa-database"></i>
            </div>
            <h3 class="skill-title">MySQL</h3>
            <p>Gestión de bases de datos relacionales, optimización de consultas y diseño de esquemas.</p>
            <div class="skill-level">
                <div class="skill-progress" style="width: 99%"></div>
                <span class="skill-percentage">99</span>
            </div>
        </div>

        <div class="skill-card" data-skill="ecommerce">
            <div class="skill-icon">
                <i class="fas fa-cart-shopping"></i>
            </div>
            <h3 class="skill-title">E-commerce</h3>
            <p>Desarrollo de plataformas de comercio electrónico, integraciones de pagos y gestión de pedidos.</p>
            <div class="skill-level">
                <div class="skill-progress" style="width: 85%"></div>
                <span class="skill-percentage">85</span>
            </div>
        </div>
    </div>

<footer>
    <div class="footer-content">
        <div class="footer-logo">Sergio Ricart Alabau</div>
        <p>Full Stack Developer en constante aprendizaje. Me apasiona aprender nuevas tecnologías y mejorar mis habilidades como desarrollador.</p>
        <div class="footer-social">
            <a href="https://github.com/YerlliR" class="social-link"><i class="fab fa-github"></i></a>
            <a href="https://www.linkedin.com/in/sergio-ricart-alabau-939441292" class="social-link"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://www.instagram.com/sergiricartt/" class="social-link"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="footer-nav">
            <a href="#home">inicio</a>
            <a href="#about">sobre_mí</a>
            <a href="#skills">skills</a>
            <a href="#projects">proyectos</a>
            <a href="#contact">contacto</a>
        </div>
        <p class="copyright">&copy; 2025 Sergio Ricart Alabau. Todos los derechos reservados.</p>
    </div>
</footer>

<div class="theme-toggle" id="themeToggle">
    <span class="toggle-icon"><i class="fas fa-sun"></i></span>
</div>

<script src="./script.js"></script>
</body>
</html>
<script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const formData = new FormData(this);

            fetch('index.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                alert(data.message);
                if (data.success) {
                    document.getElementById('contactForm').reset();
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Hubo un error al enviar el formulario. Inténtalo de nuevo.');
            });
        });
    </script>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Datos del formulario
    $name = htmlspecialchars($_POST["nombre"] ?? '');
    $email = htmlspecialchars($_POST["email"] ?? '');
    $asunto = htmlspecialchars($_POST["asunto"] ?? '');
    $message = htmlspecialchars($_POST["mensaje"] ?? '');

    // Construcción del mensaje
    $text = "CV CURRICULUM:\n";
    $text .= "📩 Nuevo formulario:\n";
    $text .= "👤 Nombre: $name\n";
    $text .= "📧 Email: $email\n";
    $text .= "📧 Asunto: $asunto\n";
    $text .= "📝 Mensaje: $message";

    // Configuración de Telegram
    $token = "";
    $chatId = "";
    $url = "";

    // Enviar mensaje a Telegram con cURL
    $data = [
        "chat_id" => $chatId,
        "text" => $text,
        "parse_mode" => "Markdown"
    ];

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $response = curl_exec($ch);
    curl_close($ch);

    // Confirmar el envío
    if ($response) {
        echo json_encode(["success" => true, "message" => "Formulario enviado correctamente"]);
    } else {
        echo json_encode(["success" => false, "message" => "Error al enviar el formulario"]);
    }
}

?>