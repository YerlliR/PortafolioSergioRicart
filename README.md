# Sergio Ricart - Portfolio Personal

## 📋 Descripción

Este repositorio contiene el código fuente de mi portafolio personal como desarrollador Full Stack. El sitio web está desarrollado con HTML, CSS y JavaScript puro, con un diseño cyberpunk minimalista que refleja mi estilo e identidad como desarrollador.

## 🌟 Características

- **Diseño Responsive**: Adaptado para dispositivos móviles, tablets y ordenadores de escritorio
- **Tema Oscuro/Claro**: Selector de tema con persistencia mediante localStorage
- **Efectos Visuales**: Animaciones sutiles, efecto de lluvia de matrix y partículas de código
- **Formulario de Contacto**: Integración con Telegram para recibir mensajes directamente
- **Optimización de Rendimiento**: Carga diferida de efectos y optimizaciones para móviles

## 🛠️ Tecnologías Utilizadas

- HTML5
- CSS3 (Propiedades avanzadas, variables CSS, animaciones)
- JavaScript Vanilla (ES6+)
- Font Awesome (iconos)
- Google Fonts (Fira Code)
- API de Telegram (para notificaciones de formulario)

## 🚀 Estructura del Proyecto

```
/
├── index.php           # Archivo principal y formulario PHP
├── styles.css          # Estilos globales y responsivos
├── script.js           # Funcionalidades JavaScript
├── hacking_11189888.png # Favicon
├── SergioRicart_Foto.png # Foto de perfil
├── rial.png            # Imagen de proyecto
├── gestorPedidos.png   # Imagen de proyecto
├── SAUCER.png          # Imagen de proyecto
└── README.md           # Este archivo
```

## 🔧 Instalación y Despliegue

1. Clona este repositorio:
   ```bash
   git clone https://github.com/YerlliR/portfolio-personal.git
   ```

2. Para desarrollo local con funcionalidad PHP, necesitarás un servidor como XAMPP, WAMP o similar.

3. Alternativamente, puedes usar un servidor HTTP simple para la parte front-end:
   ```bash
   # Si tienes Python instalado
   python -m http.server 8000
   
   # O con Node.js
   npx serve
   ```

4. Para producción, sube los archivos a tu hosting compatible con PHP.

## 🔄 Funcionalidades Principales

### Sistema de Temas
El sitio incluye un sistema de cambio entre tema oscuro y claro que recuerda la preferencia del usuario:

```javascript
const themeToggle = document.getElementById('themeToggle');
if (themeToggle) {
    // Comprobar si existe preferencia guardada
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme === 'light') {
        body.classList.add('light-theme');
    }
    
    themeToggle.addEventListener('click', () => {
        body.classList.toggle('light-theme');
        localStorage.setItem('theme', body.classList.contains('light-theme') ? 'light' : 'dark');
    });
}
```

### Formulario de Contacto
El formulario envía los mensajes directamente a Telegram a través de su API:

```php
// Configuración de Telegram
$token = "TU_TOKEN";
$chatId = "TU_CHAT_ID";
$url = "https://api.telegram.org/bot$token/sendMessage";

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
```

### Navegación Responsiva
La navegación se adapta a dispositivos móviles con un menú hamburguesa:

```javascript
function initMenu() {
    if (window.innerWidth <= 768) {
        closeMenu();
    } else {
        navMenu.style.maxHeight = 'none';
        navMenu.style.opacity = '1';
    }
}
```

## 📱 Responsive Design

El sitio está completamente adaptado para diferentes dispositivos:

- **Mobile First**: Diseño optimizado para móviles como base
- **Media Queries**: Puntos de quiebre en 480px, 768px y 992px
- **Optimización de Rendimiento**: Reducción de efectos en dispositivos móviles para mejorar rendimiento
- **Touch-Friendly**: Elementos interactivos optimizados para entrada táctil

## 🔒 Seguridad

- Las entradas de usuario se filtran con `htmlspecialchars()` para prevenir XSS
- Token de Telegram oculto en servidor para evitar uso no autorizado

## 👨‍💻 Sobre el Autor

Sergio Ricart Alabau - Desarrollador Full Stack con experiencia en PHP, JavaScript, CSS y frameworks como JPA y OpenXava.

## 📝 Licencia

Este proyecto está bajo licencia MIT. Ver archivo `LICENSE` para más detalles.

## 📞 Contacto

- Email: sergiricartt@gmail.com
- LinkedIn: [linkedin.com/in/sergio-ricart-alabau-939441292](https://www.linkedin.com/in/sergio-ricart-alabau-939441292)
- GitHub: [github.com/YerlliR](https://github.com/YerlliR)
- Instagram: [instagram.com/sergiricartt](https://www.instagram.com/sergiricartt/)
