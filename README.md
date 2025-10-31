🏆 CRUD de Equipos y Resultados - Proyecto Laravel

📋 Descripción del Proyecto
Este proyecto es una aplicación web desarrollada con Laravel que implementa las operaciones CRUD (Crear, Leer, Actualizar, Eliminar) para la gestión de equipos deportivos. Adicionalmente, permite listar los resultados de los partidos de cada equipo.

⚙️ Funcionalidades Principales

•	Gestión de Equipos (CRUD):
o	Crear nuevos equipos con su nombre y detalles.
o	Visualizar un listado completo de los equipos.
o	Editar la información de un equipo existente.
o	Eliminar un equipo.
•	Listado de Resultados:
o	Mostrar los resultados de los partidos asociados a cada equipo.
________________________________________
🚀 Tecnologías Utilizadas

•	Framework: Laravel 12
•	Base de Datos: MySQL 
•	Frontend: Bootstrap 
•	Lenguaje: PHP 8.2

________________________________________
📦 Instalación y Configuración
Sigue estos pasos para configurar y ejecutar el proyecto en tu entorno local:
1. Clonar el Repositorio
Bash
git clone https://github.com/villegas13/repoweb.git
cd nombre-del-proyecto
2. Instalar Dependencias
Bash
composer install
3. Configuración del Entorno (.env)
Copia el archivo de ejemplo y crea tu archivo de entorno:
Bash
cp .env.example .env
Edita el archivo .env y configura las credenciales de tu base de datos:
Fragmento de código
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=mi_bd_equipos_crud
DB_USERNAME=root
DB_PASSWORD=
4. Generar la Clave de Aplicación
Bash
php artisan key:generate
5. Ejecutar Migraciones y Seeds (Opcional)
Ejecuta las migraciones para crear las tablas de la base de datos (equipos y resultados):
Bash
php artisan migrate
6. Iniciar el Servidor de Desarrollo
Bash
php artisan serve
La aplicación estará disponible en http://127.0.0.1:8000 (o el puerto que muestre la consola).
________________________________________
🗺️ Rutas Principales (Ejemplo)
URL	Método	Descripción

/equipos	GET	Muestra el listado de todos los equipos.
/equipos/create	GET	Muestra el formulario para crear un nuevo equipo.
/equipos	POST	Almacena un nuevo equipo.
/equipos/{equipo}	GET	Muestra los detalles de un equipo (incluyendo sus resultados).
/equipos/{equipo}/edit	GET	Muestra el formulario para editar un equipo.
/equipos/{equipo}	PUT/PATCH	Actualiza un equipo.
/equipos/{equipo}	DELETE	Elimina un equipo.
