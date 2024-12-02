-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 02-12-2024 a las 21:30:13
-- Versión del servidor: 11.6.2-MariaDB
-- Versión de PHP: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `masp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(80) DEFAULT NULL,
  `descripcion` longtext DEFAULT NULL,
  `enlace1` varchar(100) DEFAULT NULL,
  `enlace2` varchar(100) DEFAULT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  `importancia` int(3) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `enlace3` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id`, `titulo`, `descripcion`, `enlace1`, `enlace2`, `imagen`, `importancia`, `fecha`, `usuario_id`, `enlace3`) VALUES
(8, ' Portal de proveedores Grupo Alze', 'Aplicación web para administrar todos los proveedores y prospectos del grupo industrial Alze (Veladoras Aramo pertenece al grupo), soporta carga de archivos, envío de emails automáticos desde el portal, diferentes roles de usuario entre ellos: prospectos, proveedores oficiales, administradores (personal del departamento de compras) y gerente de compras con todos los privilegios (super administrador), recordatorios automáticos para los proveedores de actualizaciòn de documentos, historial de documentación, protección capcha en le formulario, validación, sanitización de datos en el servidor y creación de documentación en pdf, creado con php, css3, composer, phpmailer y javascript usando código espagueti.\r\n\r\n', 'https://github.com/Luismy-182/gpoalze.com/tree/main/compras', 'https://gpoalze.com/compras/index.php', 'cbe05c8634bc4b5f56320abea8737a15', 2, '2024-12-02', 13, ''),
(9, ' DevJobs plataforma de empleo para desarrolladores web', 'DevJobs es una plataforma de empleo enfocada a reclutar desarrolladores, similar a computrabajo, como usuario te permite buscar empleos, postularte, conocer los requerimientos, además de poder filtrar por salario, enfoque de desarrollo, y poder cargar tu CV, como administrador te permite crear ofertas de empleo, recibir notificaciones en tiempo real, ver los postulantes a tus ofertas, editar y eliminar las ofertas, administrar la documentación del usuario y cada administrador solo puede ver sus propias ofertas que el mismo ha creado, desarrollado con Laravel 9 MVC, Breeze, Livewire 3, PHPmailer y Tailwindcss.\r\nCredenciales de acceso: admin@admin.com user@user.com user@user1.com user2@user.com user3@user.com y password para todas las cuentas: tacosalto ', 'https://github.com/Luismy-182/DevJobs', 'https://debjobs-182.osk.dom.my.id/', '6c5d5c0b5eb78f5f062889cb266e269e', 1, '2024-12-02', 13, ''),
(10, ' Fresh Coffe API REST de repostería', 'Fresh coffe es una API-Rest de una reposteria, permite al usuario seleccionar su postre favorito por medio de un amplio catálogo de postres y bebidas, también le permite conocer el detalle de sus productos agregados, como el precio unitario, cantidad y total. Al administrador le permite conocer las órdenes de cada cliente, saber el precio y cantidades de los productos a preparar, en dado caso que no se tenga los ingredientes necesarios puede administrar todos los productos y agotar un producto del menú que visualiza el usuario, y todos estos comportamientos en tiempo real sin recargar la página. El backend y el frontend se encuentran separados, en el backend tenemos a Laravel 9 como API con el ORM Eloquent sirviendo y validando las peticiones, el frontend está creado con ReactJs usando Hooks, Context-API, Router-dom, Axios y components ', 'https://github.com/Luismy-182/Laravel-FreshCoffe', '', 'ddb61bbae6062cd56f3999ebb08ca30e', 1, '2024-12-02', 13, 'https://github.com/Luismy-182/React-FreshCoffe'),
(11, ' Devstagram - un clon de instagram enfocado a desarrolladores', 'Una red social, clon de instagram, permite publicar, comentar, administrar y seguir a otros desarrolladores así como enterarte de su vida diaria, creado en Laravel 9 con Tailwindcss, Livewire, blade y vite usando el patron MVC, POO y el ORM Eloquent para establecer relaciones, sin duda el proyecto que más me gustó.\r\nCredenciales de acceso: user@user.com user1@user.com user2@user.com, password para todas las cuentas: tacosalto-182', 'https://github.com/Luismy-182/Devstagram', 'https://wabreca.sao.dom.my.id/login', '836b80693c2048db3062c8fa2f979241', 1, '2024-12-02', 13, ''),
(12, ' UpTask - aplicación para gestión de proyectos ', 'Aplicación web para gestionar proyectos y las tareas necesarias a realizar para completarlos, soporta registros de usuarios (CRUD), autentificación de cuentas mediante tokens y envío de emails, creado usando FetchAPI, Tailwindcss, Nodejs, dotenv, composer, php, MariaDB, phpmailer y MVC con POO. Credenciales de acceso: correo@gmail.com y contraseña: tacosalto-182 ', 'https://github.com/Luismy-182/UpTask_mvc', '', '27da4cdce6f9e5b95d385a9318a3c601', 1, '2024-12-02', 13, ''),
(13, ' Appsalon barbería', 'Aplicación web con patrón MVC y P.O.O. Administra servicios y citas de clientes de una barbería, soporta envío de tokens para completar registros de usuarios mediante email, y permite agendar tanto el servicio, tipo de corte y la fecha para reservar tu cita. En el lado del administrador le permite saber cuántas citas tiene agendadas y el precio a cobrar, creado con javascript y consumiendo con fetchAPI (antes AJAX), php, mysql, Tailwindcss. Credenciales de acceso: correo@gmail.com y admin: correo@hotmail.com. Contraseña para ambos: tacosalto-182 ', 'https://github.com/Luismy-182/Appsalon_mvc', 'https://giywaya.nue.dom.my.id/', '4e8da636561ecaae11b2e503e1617bed', 1, '2024-12-02', 13, ''),
(14, ' Buscador de recetas', 'Aplicación web para buscar más de 100 recetas de cocina, separado por diferentes categorías, con la posibilidad de agregar yalmacenar en favoritos las de tu interés, creado con javascript, consumiendo una API externa con fetchApi (antes AJAX) con async await, Bootstrap 5 y Localstorage de js.', 'https://github.com/Luismy-182/Recetario-fetchApi', 'https://recetario-fetchapi.netlify.app/', 'cdca31629fb81457b9c7e02c610c5602', 1, '2024-12-02', 13, ''),
(15, ' Cotizador de criptomonedas', 'Aplicación web para cotizar el precio de las 10 criptomonedas mas importantes, permite usar la divisa de diferentes países. Creado con javascript, consumiendo una API externa con fetchApi (antes AJAX), skeletons y async await', 'https://github.com/Luismy-182/CotizadorCriptomonedas', 'https://criptomonedas-fetchapi.netlify.app/', 'a48703cfd797dd13de8bc3e67338c38d', 1, '2024-12-02', 13, ''),
(16, ' Seguimiento de pacientes de una veterinaria', 'Página web para darle seguimiento a pacientes, que fueron dados de alta en la veterinaria, permite editar y borrar las bitácoras, realizado con Javascript y TailwindCSS', 'https://github.com/Luismy-182/seguimiento-pacientes-veterinaria', 'https://veterinaria-seguimientos.netlify.app/', '588cdcff65f70fc8729202ec5816ef89', 1, '2024-12-02', 13, ''),
(21, ' Universidad - página web que vende cursos', 'Una página web que vende cursos con un carrito de compras y localstorage creado usando Skeleton, css y Javascript con Localstorage para no perder los productos después de recargar, tal como lo hace Amazon o Mercado Libre ', 'https://github.com/Luismy-182/universidad_carrito', 'https://universidad-cursos.netlify.app/', '0d5bab7eda97da7f4124112f7aed56dd', 1, '2024-12-02', 13, ''),
(22, ' TechNoir And EDM festival', 'Página web de un festival de música Tecno, incluye animaciones con css, desarrollado con SASS, Gulp, y Javascript', 'https://github.com/Luismy-182/TechNoir-and-EDM-festival', 'https://technoir-and-edm-festival.netlify.app/', '76e5fb942bdcb96090bc635bebdbb2a0', 0, '2024-12-02', 13, ''),
(23, ' PodcastFM - página web de pódcast', 'Página web de PodcastFM donde se anuncia sus planes y precios, creado con HTML5, Bootstrap 5, SASS, Gulp', 'https://github.com/Luismy-182/podcastfm', 'https://podcastfm-mike.netlify.app/', '88af4bc1dabf3fe6ccfa640ec4d20f51', 0, '2024-12-02', 13, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `apellidos` varchar(30) DEFAULT NULL,
  `usuario` varchar(30) NOT NULL,
  `password` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `usuario`, `password`) VALUES
(13, ' Miguel', 'Suarez Pluma', 'luismy-182', '$2y$10$SUooc/PpsVFm3VYM1E.7jO5ntBtSnat1IGoffjkaG8f7e10aEgzUO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `FK_usuario_id` (`usuario_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD CONSTRAINT `FK_usuario_id` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
