# SOFTLINK_SOLUTIONS
# Proyecto: SOFTLINK SOLUTIONS - Sitio Web Corporativo con Autenticación

Este repositorio contiene el código fuente de un sitio web corporativo dinámico para una empresa de soluciones tecnológicas. La característica principal del proyecto es un sistema completo de autenticación de usuarios (registro y login) construido íntegramente con PHP, utilizando un archivo JSON como base de datos de archivos planos.

## Características Principales

- **Interfaz Limpia y Moderna:** Diseño web responsivo creado con HTML5 y CSS3.
- **Registro de Usuarios:** Los nuevos visitantes pueden crear una cuenta. El sistema valida que el email y el nombre de usuario no estén ya en uso.
- **Inicio de Sesión Seguro:** Autenticación de usuarios registrados. Las contraseñas se almacenan de forma segura utilizando `password_hash()` y se verifican con `password_verify()`.
- **Gestión de Sesiones:** El sitio utiliza sesiones de PHP (`$_SESSION`) para mantener a los usuarios conectados mientras navegan.
- **Rutas Protegidas:** La página de "Servicios" es privada y solo accesible para usuarios autenticados. Los visitantes no autorizados son redirigidos al formulario de login.
- **Menú de Navegación Dinámico:** La barra de navegación cambia su contenido para mostrar un saludo de bienvenida y un botón de "Cerrar Sesión" si el usuario está logueado.
- **Base de Datos Ligera:** Utiliza un archivo `usuarios.json` como sistema de almacenamiento, lo que hace que el proyecto sea fácil de desplegar sin necesidad de configurar una base de datos MySQL.

## Tecnologías Utilizadas

- **Frontend:** HTML5, CSS3, JavaScript
- **Backend:** PHP
- **Base de Datos:** Archivo plano (JSON)

## Cómo Poner en Marcha el Proyecto

### Requisitos Previos

Necesitas un entorno de servidor web local que soporte PHP. La forma más sencilla es instalar **XAMPP**:
1.  Descarga e instala [XAMPP](https://www.apachefriends.org/es/index.html).
2.  Inicia el panel de control de XAMPP y activa el módulo **Apache**.

### Instalación Local

1.  **Clona el repositorio:**
    ```bash
    git clone [https://github.com/tu-usuario/tu-repositorio.git](https://github.com/tu-usuario/tu-repositorio.git)
    ```

2.  **Mueve los archivos:**
    - Copia la carpeta completa del proyecto dentro del directorio `htdocs` de tu instalación de XAMPP (ej. `C:/xampp/htdocs/`).

3.  **Permisos (Importante):**
    - Asegúrate de que el servidor tenga permisos para escribir en el archivo `php/usuarios.json`. En la mayoría de los sistemas, esto ya funciona por defecto. Si tienes problemas al registrar usuarios, dale permisos de escritura a este archivo.

4.  **Accede al sitio:**
    - Abre tu navegador y ve a `http://localhost/nombre-de-la-carpeta-del-proyecto/`.

¡Y listo! El sitio web debería estar funcionando en tu máquina local.

