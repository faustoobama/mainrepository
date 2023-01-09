
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `postid` int(11) NOT NULL,
  `content` mediumtext NOT NULL,
  `creationdate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `comments` (`id`, `userid`, `postid`, `content`, `creationdate`) VALUES
(40, 2, 1, 'Las memorias DDR5 al ser nuevas y estar aun en de desarrollo, poseen latencias muy elevadas, lo cual contrarresta la velocidad que ofrecen sus altas frecuencias.\r\nResulta mas rentable unos buenos modulos DDR4, ya que son mas baratos y, debido a su baja latencia, rinden igual o incluso mejor que los modulos actuales de DDR5.', '2023-01-02 00:35:52'),
(41, 2, 3, 'Las GPUs de AMD son mucho mas potentes que las de Nvidia. Resulta que Las de Nvidia poseen nucleos dedicados al raytracing. Una tecnologia que ofrece cierto nivel de realismo a los juegos, por lo que si te te interesa esta tecnologia, Nvidia seria tu marca, en caso contrario, AMD es la tuya.\r\nNvidia solo supera en rendimiento jugando a videojuegos a AMD cuando el raytracing se encuentra activo en el juego; sin embargo, no es un factor que se deba considerar determinante al elegir grafica, ya que aun se encuentra en desarrollo y pocos juegos la tienen implementada.', '2023-01-02 00:41:02'),
(42, 1, 2, 'Otra cosa, cuanto de RAM deberia tener mi equipo? y de VRAM la grafica?', '2023-01-02 00:43:38'),
(43, 1, 1, 'Entonces vaya pifia de upgrade no? si los modulos anteriores van a ser mejores que los actuales, de que les sirvio invertir tanto tiempo en desarrollarlas?', '2023-01-02 00:47:35'),
(44, 2, 1, 'En verdad los modulos son mejores. De aqui a unos años se conseguira reducir las latencias y aumentar su rentabilidad', '2023-01-02 00:50:21');

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `creationdate` datetime NOT NULL DEFAULT current_timestamp(),
  `image` varchar(50) NOT NULL,
  `resume` text NOT NULL,
  `content` longtext NOT NULL,
  `category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `news` (`id`, `title`, `creationdate`, `image`, `resume`, `content`, `category`) VALUES
(1, 'ANT-MAN 3: LLEGA UN NUEVO TRÁILER DE QUANTUMANIA', '2022-12-31 21:46:27', 'antman3', 'La pareja de superhéroes cuánticos inaugurarán la Fase 5 de Marvel en 2023, y tal vez incluya a los Jóvenes Vengadores de Cassie Lang.', 'Ant-Man y la Avispa están de vuelta del Reino Cuántico. Después de dos películas y varias apariciones en otros títulos de la franquicia, Scott Lang se ha convertido en uno de los superhéroes más carismáticos del Universo Cinematográfico Marvel (UCM). Un superhéroe con un mundo propio y autónomo respecto del resto de películas de Marvel, al mismo tiempo que muy cercano a la columna vertebral del UCM. Además, su conexión con el Reino Cuántico ahora que la Fase 4 de Marvel se ha abierto a otros universos paralelos puede hacer de Ant-Man una figura clave en las películas que están por venir.\r\n\r\nEsto es todo lo que sabemos de ‘Ant-Man y la Avispa: Quantumania\'.\r\n\r\nFecha de estreno de ‘Ant-Man 3’: ¿Cuándo llega Quantumania a los cines?\r\nEn un primer momento, esta secuela iba a formar parte de la Fase 4 de Marvel, y así figura en el calendario de la Fase 4 de Marvel. Ahora se sabe que inaugurará la Fase 5 de Marvel y que llegará a los cines el 17 de febrero de 2023, después de \'Black Panther 2\'. Hace ya varios meses que \'Ant Man 3\' finalizó su rodaje en Pinewood Studios en Buckinghamshire y lleva desde entonces inmersa en el proceso de posproducción.', 'films'),
(2, 'Marvel\'s Spider-Man: Miles Morales mejora su ray tracing en el parche 1.10', '2022-12-31 21:46:27', 'milesmorales', 'El título de Insomniac Games también pule su rendimiento y corrige algunos problemas que todavía se mantenían en la versión final.', 'El título de Insomniac Games también pule su rendimiento y corrige algunos problemas que todavía se mantenían en la versión final.\r\nTu amigo y vecino Spider-Man no se queda desfasado. El trepamuros, uno de los superhéroes que ha regresado recientemente a los videojuegos, continúa recibiendo la atención de Insomniac Games. Marvel\'s Spider-Man: Miles Morales acaba de estrenar la actualización 1.10, que introduce algunas mejoras en el videojuego. Quizá lo que más destaca es que el ray tracing (tecnología de trazado de rayos) ha mejorado en el modo Rendimiento RT.\r\n\r\n\r\nAdemás del ray tracing, las breves notas del parche informan de que se han implementado “arreglos generales” para mejorar el rendimiento del videojuego. Por otra parte, también se ha solucionado un problema relacionado con el efecto motion blur que aparecía en ciertos peatones.\r\n\r\nAl igual que el reciente Ratchet & Clank: Una Dimensión Aparte, este título permite configurar la partida a 60 fps con el trazado de rayos activado. Los que prefieran dar rienda suelta a la potencia bruta siempre pueden seleccionar el modo Gráficos, que amplía la resolución hasta los 4k, aunque el título funciona entonces a la mitad de framerate.\r\n\r\nLa actualización 1.10 ha llegado por sorpresa, ya que el videojuego llevaba tres meses sin recibir ninguna clase de parche.', 'games'),
(3, 'Avatar 2 supera los 1.000 millones de dólares de recaudación, pero ni siquiera es todavía rentable para James Cameron', '2022-12-31 22:00:32', 'avatarrecauda', 'Era más que evidente que Avatar: El Sentido del Agua iba a ser un auténtico pelotazo en las taquillas de todo el mundo, pero lo que está logrando la película de James Cameron es apabullante. A nivel económico la recaudación está siendo una locura.', 'Era más que evidente que Avatar: El Sentido del Agua iba a ser un auténtico pelotazo en las taquillas de todo el mundo, pero lo que está logrando la película de James Cameron es apabullante. A nivel económico la recaudación está siendo una locura.\r\n\r\nY es que tal y como señalan desde Variety, el film ha superado los 1.000 millones de dólares de recaudación y lo ha conseguido en apenas 14 días. Estos datos nos permiten tener claras varias marcas. La primera es que es la película que más rápido lo consigue este año, superando a Top Gun: Maverick y Jurassic World Dominion.\r\n\r\nPor otro lado, es la película más rápida en lograrlo tras Spider-Man: No Way Home en 2019, la cual tardó 12 días en conseguirlo y de esta forma se une al selecto grupo de seis películas que alcanzaron los 1.000 millones de dólares en sus primeras dos semanas. Para poner la guinda en el pastel, Avatar: El Sentido del Agua ha superado esta cifra simbólica más rápido que Avatar de 2009, la cual tardó 19 días en acumular el dinero en taquilla.\r\n\r\nSi vamos a datos concretos, la producción suma globalmente 1.025 millones de dólares recaudados. Éstos se dividen 317.1 millones en América del Norte y 712.7 millones en el resto del mundo. Sin embargo, hay que recaudar todavía más dólares si el proyecto quiere ser rentable para sus creadores.', 'films'),
(4, 'Estrenos de cine para 2023: fechas y películas que no te puedes perder', '2022-12-31 22:06:34', 'newfilms2023', 'Estamos por comenzar un nuevo año, así que te compartimos cuáles serán las películas que llegarán a los cines en 2023, pues algunas son producciones muy esperadas por el público. Así que alístate para lo que se podrá ver pronto en la pantalla grande.', 'Spider-Man: Cruzando el multiverso (Spider-Man: Un nuevo universo 2) - 16 de junio de 2023\r\nThe Flash - 16 de junio de 2023\r\nIndiana Jones 5 - 30 de junio de 2023\r\nElemental - 14 de julio de 2023\r\nBarbie - 21 de julio de 2023\r\nThe Marvels - 28 de julio de 2023\r\nHaunted Mansion - 11 de agosto de 2023\r\nBlue Beetle - 18 de agosto de 2023\r\nKraven the Hunter - 6 de octubre de 2023\r\nDune: Parte 2 - 3 de noviembre\r\nWish - 24 de noviembre de 2023\r\nWonka - 15 de diciembre de 2023\r\nAquaman y el Reino perdido - Sin fecha confirmada', 'films'),
(5, 'Fechas de lanzamientos de los videojuegos mas esperados del 2023', '2022-12-31 22:09:23', 'prm2023', '2023 ya casi está aquí, así que vamos a repasar los juegos que se vienen durante el año.\r\n\r\nEn este artículo hemos recopilado todas las fechas de lanzamiento de los videojuegos que llegarán a lo largo de 2023, y los que lo harán aún más allá. Quizá te interese entrar en nuestra guía de todos los lanzamientos de 2022 también.\r\n\r\nSon fechas de lanzamiento confirmadas para juegos de PC, PlayStation 4, PlayStation 5, Nintendo Switch, Xbox One, Xbox Series X y Xbox Series S. Los días indicados corresponden a fechas occidentales, ya sean americanas, europeas o mundiales.', 'Dragon Ball Z: Kakarot (PS5, Xbox Series X/S) - 13 de enero de 2023\r\nOne Piece Odyssey (PC, PS4, PS5, Xbox Series X/S) - 13 de enero de 2023\r\nA Space for the Unbound (PC, PS4, PS5, Switch, Xbox One, Xbox Series X/S) - 19 de enero de 2023\r\nColossal Cave Adventure (PC, PS5, Switch, VR) - 19 de enero de 2023\r\nPersona 3 Portable (PC, PS5, Switch, Xbox One, Xbox Series X/S) - 19 de enero de 2023\r\nPersona 4 Golden (PS5, Switch, Xbox One, Xbox Series X/S) - 19 de enero de 2023\r\nFire Emblem Engage (Switch) - 20 de enero de 2023\r\nMonster Hunter Rise (PS4, PS5, Xbox One, Xbox Series X/S) - 20 de enero de 2023\r\nForspoken (PC, PS5) - 24 de enero de 2023\r\nRisen (PS4, Switch, Xbox One) - 24 de enero de 2023\r\nWonder Boy Anniversary Collection (PS4, PS5, Switch) - 25 de enero de 2023\r\nDead Space (PC, PS5, Xbox Series X/S) - 27 de enero de 2023\r\nAge of Empires 2: Definitive Edition (Xbox) - 31 de enero de 2023\r\nSeason: A Letter to the Future (PC, PS4, PS5) - 31 de enero de 2023\r\nSpongeBob SquarePants: The Cosmic Shake (PC, PS4, Switch, Xbox One) - 31 de enero de 2023\r\nDevolver Tumble Time (smartphone) - Enero de 2023', 'games'),
(6, 'Las 25 contraseñas más usadas de 2022 destacan por bajo nivel de seguridad', '2022-12-31 22:14:32', 'samsungpass', 'Durante los últimos años SplashData y NordPass publican su lista anual de las 200 contraseñas más utilizadas basándose en un análisis de 275 millones de contraseñas que se han obtenido a partir de filtraciones de datos, con la intención de concienciar a las personas para que adopten mejores medidas de seguridad.\r\n\r\nSi tus contraseñas aparecen en este listado o no cumplen los consejos para crear contraseñas seguras, debes actualizarla de inmediato, pero además debes tener en cuenta que puedes tener algunas contraseñas expuestas públicamente en internet, para protegerte frente a esta amenaza recomendamos que utilices una herramienta que analice continuamente los usuarios que tienen contraseñas expuestas, como UareSAFE.', 'guest\r\n123456\r\npassword\r\n12345\r\na1b2c3\r\n123456789\r\nPassword1\r\n1234\r\nabc123\r\n12345678\r\nliverpool\r\n197\r\nqwerty\r\narsenal\r\n123456789\r\npassword1\r\n12345\r\n12345678', 'hardware');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `creationdate` datetime NOT NULL DEFAULT current_timestamp(),
  `title` text NOT NULL,
  `content` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id`, `userid`, `creationdate`, `title`, `content`) VALUES
(1, 1, '2022-12-31 21:14:20', '¿Me monto un PC con memorias DDR4 mas economicas, o mejor pagar mas por las DDR5?', 'Buenas, me estoy montando un PC para diversas funciones pesadas y tengo que elegir una placa base. Me preguntaba si valia la pena dejarse mas dineror en una placa madre que soportase DDR5 o mejor ir a lo seguro y mas barato DDR4. ¿Cual es mas rentable calidad precio?'),
(2, 1, '2022-12-31 21:16:44', 'PC Master Race - presupuesto de 2700€', 'Llevo varios meses ahorrando dinero para montarme mi propia PC Master Race potente. Necesito indicaciones o alguna recomendacion para montar el PC mas potente posible con 1500€. Muchas gracias de antemano.'),
(3, 1, '2022-12-31 21:19:26', 'Me compro una tarjeta grafica de AMD o mejor una Nvidia Geforce', 'Despues de mucho tiempo, he dicido actualizar mi tarjeta grafica. Observe que existen varias alternativas actualmente. Mi duda esta en si hacerme con una de Nvidia o AMD. ¿Que me recomiendan?');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'new',
  `enabled` tinyint(4) NOT NULL DEFAULT 1,
  `creationdate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `status`, `enabled`, `creationdate`) VALUES
(1, 'Mar Riana', 'mar@riano.mr', 'fausto', 'active', 1, '2022-12-31 20:51:13'),
(2, 'lucer cito wenright', 'lucer@cito.wen', 'lucer', 'active', 1, '2022-12-31 22:55:05');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de la tabla `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
