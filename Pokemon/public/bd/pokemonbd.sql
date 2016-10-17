-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2016 a las 08:28:45
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pokemonbd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evoluciones`
--

CREATE TABLE `evoluciones` (
  `id` int(11) NOT NULL,
  `evolucion1` varchar(50) DEFAULT NULL,
  `evolucion2` varchar(50) DEFAULT NULL,
  `evolucion3` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `evoluciones`
--

INSERT INTO `evoluciones` (`id`, `evolucion1`, `evolucion2`, `evolucion3`, `created_at`, `updated_at`) VALUES
(7, '007.png', '008.png', '009.png', '2016-10-17 04:59:35', '0000-00-00 00:00:00'),
(54, '054.png', '055.png', NULL, '2016-10-17 04:59:55', '0000-00-00 00:00:00'),
(60, '060.png', '061.png', '062.png', '2016-10-17 05:00:11', '0000-00-00 00:00:00'),
(72, '072.png', '073.png', NULL, '2016-10-17 05:00:26', '0000-00-00 00:00:00'),
(79, '079.png', '080.png', NULL, '2016-10-17 05:00:36', '0000-00-00 00:00:00'),
(25, '025.png', '026.png', NULL, '2016-10-17 05:00:49', '0000-00-00 00:00:00'),
(81, '081.png', '082.png', NULL, '2016-10-17 05:01:00', '0000-00-00 00:00:00'),
(100, '100.png', '101.png', NULL, '2016-10-17 05:01:11', '0000-00-00 00:00:00'),
(239, '239.png', '125.png', '446.png', '2016-10-17 05:01:39', '0000-00-00 00:00:00'),
(179, '179.png', '180.png', '181.png', '2016-10-17 05:02:02', '0000-00-00 00:00:00'),
(4, '004.png', '005.png', '006.png', '2016-10-17 05:02:25', '0000-00-00 00:00:00'),
(58, '058.png', '059.png', NULL, '2016-10-17 05:02:41', '0000-00-00 00:00:00'),
(77, '077.png', '078.png', NULL, '2016-10-17 05:02:58', '0000-00-00 00:00:00'),
(240, '240.png', '126.png', '467.png', '2016-10-17 05:03:24', '0000-00-00 00:00:00'),
(155, '155.png', '156.png', '157.png', '2016-10-17 05:03:43', '0000-00-00 00:00:00'),
(1, '001.png', '002.png', '003.png', '2016-10-17 05:04:01', '0000-00-00 00:00:00'),
(114, '114.png', NULL, NULL, '2016-10-17 05:04:20', '0000-00-00 00:00:00'),
(152, '152.png', '153.png', '154.png', '2016-10-17 05:04:41', '0000-00-00 00:00:00'),
(182, '182.png', NULL, NULL, '2016-10-17 05:04:55', '0000-00-00 00:00:00'),
(191, '191.png', '192.png', NULL, '2016-10-17 05:05:09', '0000-00-00 00:00:00'),
(63, '063.png', '064.png', '065.png', '2016-10-17 05:05:31', '0000-00-00 00:00:00'),
(96, '096.png', '097.png', NULL, '2016-10-17 05:05:49', '0000-00-00 00:00:00'),
(150, '150.png', NULL, NULL, '2016-10-17 05:05:57', '0000-00-00 00:00:00'),
(151, '151.png', NULL, NULL, '2016-10-17 05:06:09', '0000-00-00 00:00:00'),
(196, '196.png', NULL, NULL, '2016-10-17 05:06:26', '0000-00-00 00:00:00'),
(360, '360.png', '202.png', NULL, '2016-10-17 05:06:42', '0000-00-00 00:00:00'),
(23, '023.png', '024.png', NULL, '2016-10-17 05:06:56', '0000-00-00 00:00:00'),
(29, '029.png', '030.png', '031.png', '2016-10-17 05:07:12', '0000-00-00 00:00:00'),
(32, '032.png', '033.png', '034.png', '2016-10-17 05:07:38', '0000-00-00 00:00:00'),
(316, '316.png', '317.png', NULL, '2016-10-17 05:07:54', '0000-00-00 00:00:00'),
(336, '336.png', NULL, NULL, '2016-10-17 05:08:03', '0000-00-00 00:00:00'),
(2, '001.png', '002.png', '003.png', '2016-10-17 12:23:09', '2016-10-17 12:23:09'),
(3, '001.png', '002.png', '003.png', '2016-10-17 12:23:32', '2016-10-17 12:23:32'),
(5, '004.png', '005.png', '006.png', '2016-10-17 12:23:57', '2016-10-17 12:23:57'),
(6, '004.png', '005.png', '006.png', '2016-10-17 12:24:08', '2016-10-17 12:24:08'),
(8, '007.png', '008.png', '009.png', '2016-10-17 12:24:24', '2016-10-17 12:24:24'),
(9, '007.png', '008.png', '009.png', '2016-10-17 12:24:41', '2016-10-17 12:24:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `caramelos` int(11) NOT NULL,
  `polvos` int(11) NOT NULL,
  `current_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `items`
--

INSERT INTO `items` (`id`, `caramelos`, `polvos`, `current_at`, `updated_at`) VALUES
(1, 994, 9700, '2016-10-17 05:46:35', '2016-10-17 11:46:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pokemon`
--

CREATE TABLE `pokemon` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `altura` double NOT NULL,
  `peso` double NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `habilidad` varchar(50) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `ps` int(11) NOT NULL,
  `pc` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pokemon`
--

INSERT INTO `pokemon` (`id`, `nombre`, `altura`, `peso`, `categoria`, `habilidad`, `descripcion`, `imagen`, `ps`, `pc`, `created_at`, `updated_at`) VALUES
(1, 'Bulbasaur', 0.7, 6.9, 'Semilla', 'Espesura', 'A Bulbasaur es fácil verle echándose una siesta al sol. La semilla que tiene en el lomo va creciendo cada vez más a medida que absorbe los rayos del sol.', '001.png', 0, 0, '2016-10-17 09:18:13', '2016-10-17 09:18:13'),
(2, 'Ivysaur', 1, 13, 'Semilla', 'Espesura', 'Este Pokémon lleva un bulbo en el lomo y, para poder con su peso, tiene unas patas y un tronco gruesos y fuertes. Si empieza a pasar más tiempo al sol, será porque el bulbo está a punto de hacerse una flor grande.', '002.png', 0, 0, '2016-10-17 09:18:51', '2016-10-17 09:18:51'),
(3, 'Venasaur', 2, 100, 'Semilla', 'Espesura', 'Venusaur tiene una flor enorme en el lomo que, según parece, adquiere unos colores muy vivos si está bien nutrido y le da mucho el sol. El aroma delicado de la flor tiene un efecto relajante en el ánimo de las personas.', '003.png', 0, 0, '2016-10-17 09:19:40', '2016-10-17 09:19:40'),
(4, 'Charmander', 0.6, 8.5, 'Lagartija', 'Llamas', 'La llama que tiene en la punta de la cola arde según sus sentimientos. Llamea levemente cuando está alegre y arde vigorosamente cuando está enfadado.', '004.png', 0, 0, '2016-10-17 08:21:50', '2016-10-17 08:21:50'),
(5, 'Charmeleon', 1.1, 19, 'Llama', 'Llamas', 'Charmeleon no tiene reparo en acabar con su rival usando las afiladas garras que tiene. Si su enemigo es fuerte, se vuelve agresivo, y la llama que tiene en el extremo de la cola empieza a arder con mayor intensidad tornándose azulada.', '005.png', 0, 0, '2016-10-17 08:23:37', '2016-10-17 08:23:37'),
(6, 'Charizard', 1.7, 90.5, 'Llama', 'Llamas', 'Charizard se dedica a volar por los cielos en busca de oponentes fuertes. Echa fuego por la boca y es capaz de derretir cualquier cosa. No obstante, si su rival es más débil que él, no usará este ataque.', '006.png', 0, 0, '2016-10-17 08:25:43', '2016-10-17 08:25:43'),
(7, 'Squirtle', 0.5, 9, 'Pequeña Tortuga', 'Torrente', 'El caparazón de Squirtle no se utiliza simplemente para la protección. forma redondeada de la cáscara y las ranuras en su superficie ayudan a minimizar la resistencia en el agua, lo que permite este Pokémon a nadar a altas velocidades.', '007.png', 0, 0, '2016-10-17 07:28:00', '2016-10-17 07:28:00'),
(8, 'Wartortle', 1, 22.5, 'Tortuga', 'Torrente', 'Su cola es grande y cubierta con un pelo abundante y grueso. La cola se vuelve cada vez más profundo en color que las edades Wartortle. Los arañazos en su cáscara son una prueba de la resistencia de este Pokémon como un luchador.', '008.png', 0, 0, '2016-10-17 07:28:58', '2016-10-17 07:28:58'),
(9, 'blastoise', 1.6, 85.5, 'Marisco', 'Torrente', 'Blastoise lanza chorros de agua con gran precisión por los tubos que le salen del caparazón que tiene en la espalda. Puede disparar chorros de agua con tanta puntería que no fallaría al tirar contra una lata pequeña a 50 m.', '009.png', 0, 0, '2016-10-17 07:31:02', '2016-10-17 07:31:02'),
(23, 'Ekans', 2, 6.9, 'Serpiente', 'Mudar, Intimidacion', 'Ekans se enrosca para descansar. Adoptando esta posición puede responder rápidamente a cualquier amenaza que le aceche desde cualquier lugar, levantando la cabeza con una feroz mirada.', '023.png', 0, 0, '2016-10-17 09:31:16', '2016-10-17 09:31:16'),
(24, 'Arbok', 3.5, 65, 'Cobra', 'Mudar, Intimidacion', 'Este Pokémon es tremendamente fuerte, puede oprimir cualquier cosa con su cuerpo y hasta es capaz de estrujar un barril de acero. Una vez que Arbok se enrosca a su víctima, no hay forma de escapar de su asfixiante abrazo.', '024.png', 0, 0, '2016-10-17 09:32:00', '2016-10-17 09:32:00'),
(25, 'Pikachu', 0.4, 6, 'Raton', 'Estatica', 'Cada vez que un Pikachu se encuentra con algo nuevo, le lanza una descarga eléctrica. Cuando se ve alguna baya chamuscada, es muy probable que sea obra de un Pikachu, ya que a veces no controlan la intensidad de la descarga.', '025.png', 30, 120, '2016-10-17 05:46:36', '2016-10-17 11:46:36'),
(26, 'Raichu', 0.8, 30, 'Raton', 'Estatica', 'Si las bolsas de los mofletes se le cargan demasiado, Raichu planta la cola en el suelo para liberar electricidad. Es común encontrar zonas chamuscadas cerca de la madriguera de este Pokémon.', '026.png', 0, 0, '2016-10-17 07:46:29', '2016-10-17 07:46:29'),
(29, 'Nidoran ', 0.4, 7, 'Pin Veneno', 'Punto toxico, Rivalidad', 'Nidoran tiene púas que segregan un veneno muy potente. Se piensa que las desarrolló como protección del cuerpo tan pequeño que tiene. Cuando se enfada, libera una horrible sustancia tóxica por el cuerno.', '029.png', 0, 0, '2016-10-17 09:32:53', '2016-10-17 09:32:53'),
(30, 'Nidorina', 0.8, 20, 'Pin Veneno', 'Punto toxico, Rivalidad', 'Cuando están en familia o con sus amigos, esconden las púas para evitar accidentes. Según parece, se alteran bastante si se separan del grupo.', '030.png', 0, 0, '2016-10-17 09:33:24', '2016-10-17 09:33:24'),
(31, 'Nidoqueen', 1.3, 60, 'Taladro', 'Punto toxico, Rivalidad', 'Nidoqueen tiene el cuerpo totalmente recubierto de escamas durísimas. Suele lanzar por los aires a sus rivales de los violentos golpes que les propina. Cuando se trata de defender a sus crías, alcanza su nivel máximo de fuerza.', '031.png', 0, 0, '2016-10-17 09:33:51', '2016-10-17 09:33:51'),
(32, 'Nidoran', 0.5, 9, 'Pin Veneno', 'Punto toxico, Rivalidad', 'Nidoran ha desarrollado músculos para mover las orejas y orientarlas en cualquier dirección. De este modo, es capaz de captar hasta el sonido más leve.', '032.png', 0, 0, '2016-10-17 09:34:30', '2016-10-17 09:34:30'),
(33, 'Nidorino', 0.9, 19.5, 'Pin Veneno', 'Punto toxico, Rivalidad', 'Nidorino tiene un cuerno de dureza superior a la del diamante. Si siente una presencia hostil, se le erizan las púas del lomo enseguida y carga contra el enemigo con todas sus fuerzas.', '033.png', 0, 0, '2016-10-17 09:35:01', '2016-10-17 09:35:01'),
(34, 'Nidoking', 1.4, 62, 'Taladro', 'Punto toxico, Rivalidad', 'La gruesa cola de Nidoking encierra una fuerza realmente destructora. Con una vez que la agite, es capaz de tumbar una torre metálica de transmisión. Una vez que este Pokémon se desboca, no hay quien lo pare.', '034.png', 0, 0, '2016-10-17 09:35:35', '2016-10-17 09:35:35'),
(54, 'Psyduck', 0.8, 19.6, 'Pato', 'Humedad, Aclimatacion', 'Psyduck tiene un extraño poder, que consiste en generar ondas cerebrales iguales a las que se generan cuando se está dormido. Este descubrimiento levantó una gran polémica entre eruditos.', '054.png', 0, 0, '2016-10-17 07:32:38', '2016-10-17 07:32:38'),
(55, 'Golduck', 1.7, 76.6, 'Pato', 'Humedad, Aclimatacion', 'Golduck alcanza una velocidad de vértigo gracias a las aletas palmípedas de las extremidades y a la forma aerodinámica de su cuerpo. Realmente, la velocidad de este Pokémon supera la de cualquier nadador.', '055.png', 0, 0, '2016-10-17 07:34:30', '2016-10-17 07:34:30'),
(58, 'Growlithe', 0.7, 19, 'Perrito', 'Intimidacion, Absorve Fuego', 'Growlithe tiene un sentido del olfato excepcional y una memoria sensitiva tremenda, nunca olvida una esencia. Este Pokémon saca provecho de este don para identificar las sensaciones que tienen otros seres vivos.', '058.png', 0, 0, '2016-10-17 08:26:30', '2016-10-17 08:26:30'),
(59, 'Arcanine', 1.9, 155, 'Legendario', 'Intimidacion, Absorve Fuego', 'Arcanine es conocido por lo veloz que es. Dicen que es capaz de correr 10 000 km en 24 horas. El fuego que arde con vigor en el interior de este Pokémon constituye su fuente de energía.', '059.png', 0, 0, '2016-10-17 08:27:43', '2016-10-17 08:27:43'),
(60, 'Poliwag', 0.6, 12.4, 'Renacuajo', 'Humedad, Absorbe agua', 'Poliwag tiene una piel muy fina. Tanto que es posible entrever a través de la misma las vísceras en espiral que tiene. La piel, aunque fina, tiene la ventaja de ser flexible y hacer rebotar hasta los colmillos más afilados.', '060.png', 0, 0, '2016-10-17 07:35:56', '2016-10-17 07:35:56'),
(61, 'Poliwhirl', 1, 20, 'Renacuajo', 'Humedad, Absorbe agua', 'La piel de Poliwhirl está siempre húmeda y lubricada con un fluido viscoso. Gracias a esta película resbaladiza, puede escapar de las garras del enemigo, resbalándosele de las zarpas en pleno combate.', '061.png', 0, 0, '2016-10-17 07:36:29', '2016-10-17 07:36:29'),
(62, 'Poliwrath', 1.3, 54, 'Renacuajo', 'Humedad, Absorbe agua', 'Poliwrath tiene unos músculos fornidos y muy desarrollados, por lo que nunca se agota. Es tan fuerte e incansable que cruzar el océano a nado no le supone ningún esfuerzo.', '062.png', 0, 0, '2016-10-17 07:37:13', '2016-10-17 07:37:13'),
(63, 'Abra', 0.9, 19.5, 'Psiquico', 'Foco Interno, Sincronia', 'Abra duerme 18 horas al día, pero puede detectar a cualquier enemigo que se le acerque mientras duerme. En una situación así, usa Teletransporte para protegerse.', '063.png', 0, 0, '2016-10-17 09:24:27', '2016-10-17 09:24:27'),
(64, 'Kadabra', 1.3, 56.5, 'Psiquico', 'Foco Interno, Sincronia', 'Kadabra emite unas ondas alfa muy particulares que provocan dolores de cabeza a los demás. Solo aquellos que tengan gran poder mental podrán optar a ser Entrenador de este Pokémon.', '064.png', 0, 0, '2016-10-17 09:24:59', '2016-10-17 09:24:59'),
(65, 'Alakazam', 1.5, 48, 'Psiquico', 'Foco Interno, Sincronia', 'El cerebro de Alakazam nunca deja de crecer y por eso al cuello le cuesta sostener el peso de la cabeza. Este Pokémon usa sus poderes psicoquinéticos para mantener en alto la cabeza.', '065.png', 0, 0, '2016-10-17 09:26:39', '2016-10-17 09:26:39'),
(72, 'Tentacool', 0.9, 45.5, 'Medusa', 'Cuerpo puro, Lodo liquido', 'Tentacool está compuesto en su mayor parte por agua. Si se le saca del mar, se secará y se quedará acartonado. Si este Pokémon se deshidrata, hay que echarlo inmediatamente de vuelta al mar.', '072.png', 0, 0, '2016-10-17 07:38:15', '2016-10-17 07:38:15'),
(73, 'Tentacruel', 1.6, 55, 'Medusa', 'Cuerpo puro, Lodo liquido', 'Tentacruel tiene unas enormes esferas rojas en la cabeza, que brillan antes de lanzar una descarga ultrasónica a lo que le rodea. Este estallido crea unas olas tremendas a su alrededor.', '073.png', 0, 0, '2016-10-17 07:39:12', '2016-10-17 07:39:12'),
(77, 'Ponyta', 1, 30, 'Caballo', 'Fuga, Absorbe fuego', 'Al nacer, Ponyta es muy débil y apenas puede ponerse en pie. Con todo, se va haciendo más fuerte al tropezarse y caerse en su intento por seguir a sus progenitores.', '077.png', 0, 0, '2016-10-17 08:28:22', '2016-10-17 08:28:22'),
(78, 'Rapidash', 1.7, 95, 'Caballo', 'Fuga, Absorbe fuego', 'A Rapidash se le suele ver trotando sin rumbo fijo por los campos y llanos. Cuando tiene que ir a algún sitio en concreto, se le aviva el fuego de las melenas y emprende el galope llameante llegando a los 240 km/h.', '078.png', 0, 0, '2016-10-17 08:28:53', '2016-10-17 08:28:53'),
(79, 'Slowpoke', 1.2, 36, 'Atontado', 'Despiste, Ritmo propio', 'Slowpoke usa la cola para atrapar a sus presas metiéndola bajo el agua en las riberas de los ríos. Con todo, es olvidadizo, se le puede pasar lo que estaba haciendo y quedarse días enteros holgazaneando en la orilla.', '079.png', 0, 0, '2016-10-17 07:41:12', '2016-10-17 07:41:12'),
(80, 'Slowbro', 1.6, 78.5, 'Ermitaño', 'Despiste, Ritmo propio', 'Slowbro lleva en la cola un Shellder enganchado, sujeto por los dientes. Como Slowbro no puede usar la cola para pescar, se mete en el agua de mala gana en busca de sus presas.', '080.png', 0, 0, '2016-10-17 07:43:09', '2016-10-17 07:43:09'),
(81, 'Magnemite', 0.3, 6, 'Iman', 'Robustez, Iman', 'Magnemite se engancha a las líneas de tensión para nutrirse de electricidad. Cuando se producen apagones en las casas, es aconsejable revisar el automático y comprobar que no hay Pokémon de este tipo colgados de la caja de fusibles.', '081.png', 0, 0, '2016-10-17 07:47:14', '2016-10-17 07:47:14'),
(82, 'Magneton', 1, 60, 'Iman', 'Robustez, Iman', 'Magneton emite una fuerte energía magnética que causa estragos en los instrumentos mecánicos. Por ello, en las ciudades se avisa con sirenas cuando hay concentraciones de estos Pokémon.', '082.png', 0, 0, '2016-10-17 07:48:15', '2016-10-17 07:48:15'),
(96, 'Drowzee', 1, 32.4, 'Hipnosis', 'Insomnio, Alerta', 'Si a alguien le pica la nariz mientras duerme, seguro que es porque tiene a uno de estos Pokémon cerca de la almohada intentando sacarle los sueños por la nariz para comérselos.', '096.png', 0, 0, '2016-10-17 09:27:16', '2016-10-17 09:27:16'),
(97, 'Hypno', 1.6, 75.6, 'Hipnosis', 'Insomnio, Alerta', 'Hypno lleva un péndulo en la mano. El balanceo y el brillo que tiene sumen al rival en un estado de hipnosis profundo. Mientras busca a su presa, saca brillo al péndulo.', '097.png', 0, 0, '2016-10-17 09:27:43', '2016-10-17 09:27:43'),
(100, 'Voltorb', 0.5, 10.4, 'Bola', 'Estatica, Insonorizar', 'Voltorb fue visto por primera vez en una empresa encargada de comercializar Poké Balls. La conexión que existe entre aquella primera vez que se le vio y el hecho de que se parece mucho a una Poké Ball sigue siendo un misterio.', '100.png', 0, 0, '2016-10-17 07:48:58', '2016-10-17 07:48:58'),
(101, 'Electrode', 1.2, 66.6, 'Bola', 'Estatica, Insonorizar', 'Los Electrode se alimentan de la electricidad de la atmósfera. En días de tormenta con rayos, es fácil verlos explotando por todos lados tras haber consumido demasiada electricidad.', '101.png', 0, 0, '2016-10-17 07:49:30', '2016-10-17 07:49:30'),
(114, 'Tangela', 1, 35, 'Enredadera', 'Clorofila, Defensa hoja', 'A Tangela se le desprenden los tentáculos con facilidad en cuanto se los agarras. Y no solo no le duele, sino que le resulta muy útil para escapar rápido. Además, al día siguiente le crecen otros.', '114.png', 0, 0, '2016-10-17 09:20:19', '2016-10-17 09:20:19'),
(125, 'Electabuzz', 1.1, 30, 'Electrico', 'Estatica', 'Al desatarse una tormenta, bandadas de estos Pokémon se enfrentan entre sí para ver quién alcanza antes sitios altos en los que suelan caer rayos. Hay ciudades que usan Electabuzz en lugar de pararrayos.', '125.png', 0, 0, '2016-10-17 07:50:14', '2016-10-17 07:50:14'),
(126, 'Magmar', 1.3, 44.5, 'Escupefuego', 'Cuerpo llama', 'Al luchar, Magmar expulsa violentas llamas por todo el cuerpo para intimidar a su rival. Estos estallidos de fuego crean ondas de calor que abrasan la hierba y los árboles que haya en las proximidades.', '126.png', 0, 0, '2016-10-17 08:30:26', '2016-10-17 08:30:26'),
(150, 'Mewtwo', 2, 122, 'Genetico', 'Presion', 'Mewtwo fue creado por manipulación genética. Pero, a pesar de que el hombre creó su cuerpo, dotar a Mewtwo de un corazón compasivo quedó en el olvido.', '150.png', 0, 0, '2016-10-17 09:28:21', '2016-10-17 09:28:21'),
(151, 'Mew', 0.4, 4, 'Nueva Especie', 'Sincronia', 'Dicen que Mew posee el mapa genético de todos los Pokémon. Puede hacerse invisible cuando quiere, así que pasa desapercibido cada vez que se le acerca alguien', '151.png', 0, 0, '2016-10-17 09:28:50', '2016-10-17 09:28:50'),
(152, 'Chikorita', 0.9, 6.4, 'Hoja', 'Espesura', 'Al luchar, Chikorita agita la hoja que tiene para mantener a raya al rival. Pero, al mismo tiempo, libera una suave fragancia que apacigua el encuentro y crea un ambiente agradable y de amistad.', '152.png', 0, 0, '2016-10-17 09:20:49', '2016-10-17 09:20:49'),
(153, 'Bayleef', 1.2, 15.8, 'Hoja', 'Espesura', 'Bayleef tiene un collar de hojas alrededor del cuello y un brote de un árbol en cada una de ellas. La fragancia que desprenden estos brotes anima a la gente.', '153.png', 0, 0, '2016-10-17 09:21:17', '2016-10-17 09:21:17'),
(154, 'Meganium', 1.8, 100.5, 'Hierba', 'Espesura', 'La fragancia de la flor de Meganium aplaca y suaviza los ánimos. Al luchar, este Pokémon libera mayor cantidad de esencia para disminuir el ánimo de combate de su oponente.', '154.png', 0, 0, '2016-10-17 09:21:55', '2016-10-17 09:21:55'),
(155, 'Cyndaquil', 0.5, 7.9, 'Raton de fuego', 'Mar en llamas', 'Cyndaquil se protege soltando llamas por el lomo. Cuando está enfadado, las llamas son fieras, pero, si está cansado, solo consigue echar algunas chispas que no llegan a cuajar en una completa combustión.', '155.png', 0, 0, '2016-10-17 08:36:28', '2016-10-17 08:36:28'),
(156, 'Quilava', 0.9, 19, 'Volcan', 'Mar en llamas', 'Quilava mantiene a sus rivales a raya con la intensidad de sus llamas y las ráfagas de aire ígneo que producen. También aprovecha su espectacular agilidad para esquivar ataques a la vez que abrasa al rival con sus llamas.', '156.png', 0, 0, '2016-10-17 08:37:13', '2016-10-17 08:37:13'),
(157, 'Typhlosion', 1.7, 79.5, 'Volcan', 'Mar en llamas', 'Typhlosion se oculta tras un trémulo haz de calor que crea mediante sus intensas y sofocantes llamaradas. Este Pokémon causa explosiones de fuego que reducen todo a cenizas.', '157.png', 0, 0, '2016-10-17 08:37:56', '2016-10-17 08:37:56'),
(179, 'Mareep', 0.6, 7.8, 'Lana', 'Estatica', 'Mareep tiene un pelaje lanudo suave que produce carga estática por el roce. Cuanto más se carga de electricidad estática, más brilla la bombilla que tiene en el extremo de la cola.', '179.png', 0, 0, '2016-10-17 08:03:55', '2016-10-17 08:03:55'),
(180, 'Flaaffy', 0.8, 13.3, 'Lana', 'Estatica', 'La calidad de la lana de Flaaffy varía para poder generar mucha electricidad estática con muy poca cantidad de lana. Las zonas suaves de la piel en las que no tiene pelaje están protegidas contra la electricidad.', '180.png', 0, 0, '2016-10-17 08:04:25', '2016-10-17 08:04:25'),
(181, 'Ampharos', 1.4, 61.5, 'Luz', 'Estatica', 'Ampharos desprende tanta luz que es posible verle hasta desde el espacio. Antes, la gente usaba su luz como sistema de comunicación para enviarse señales.', '181.png', 0, 0, '2016-10-17 08:05:01', '2016-10-17 08:05:01'),
(182, 'Bellossom', 0.4, 5.8, 'Flor', 'Clorofila', 'Cuando Bellossom se expone a gran cantidad de luz solar, le empiezan a girar las hojas que le rodean. La danza de este Pokémon es famosa en las zonas del sur.', '182.png', 0, 0, '2016-10-17 09:22:33', '2016-10-17 09:22:33'),
(191, 'Sunkern', 0.3, 1.8, 'Semilla', 'Clorofila, Poder solar', 'Sunkern intenta moverse lo menos posible para conservar todos los nutrientes que ha guardado en su interior y poder evolucionar. Ni come siquiera; se alimenta solo del rocío de la mañana.', '191.png', 0, 0, '2016-10-17 09:23:17', '2016-10-17 09:23:17'),
(192, 'Sunflora', 0.8, 8.5, 'Sol', 'Clorofila, Poder solar', 'Sunflora transforma la energía solar en nutrientes. De día, cuando hace calor, está en continuo movimiento. Solo para cuando comienza a anochecer.', '192.png', 0, 0, '2016-10-17 09:23:45', '2016-10-17 09:23:45'),
(196, 'Espeon', 0.9, 26.5, 'Sol', 'Sincronia', 'Espeon es tremendamente leal al Entrenador al que considera digno de ello. Dicen que este Pokémon desarrolló sus poderes adivinatorios para evitar que su Entrenador sufra daño alguno.', '196.png', 0, 0, '2016-10-17 09:29:21', '2016-10-17 09:29:21'),
(202, 'Wobbuffet', 1.3, 28.5, 'Paciente', 'Sombra trampa', 'Si dos o más Wobbuffet se encuentran, se volverán competitivos e intentarán superarse en resistencia. Pero también puede que intenten aguantar sin comer; algo que los Entrenadores deben tener muy en cuenta.', '202.png', 0, 0, '2016-10-17 09:29:55', '2016-10-17 09:29:55'),
(239, 'Elekid', 0.6, 23.5, 'Electrico', 'Estatica', 'Elekid acumula electricidad. Si entra en contacto con algo de metal y descarga accidentalmente toda la electricidad almacenada, empieza a agitar los brazos en círculo para volver a cargarse.', '239.png', 0, 0, '2016-10-17 07:55:37', '2016-10-17 07:55:37'),
(240, 'Magby', 0.7, 21.4, 'Ascuas', 'Cuerpo en llama', 'El estado de salud de Magby se puede determinar observando el fuego que emana al respirar. Si las llamas que echa por la boca son amarillas, está bien. Pero, si además de las llamas sale humo negro, está cansado.', '240.png', 0, 0, '2016-10-17 08:33:19', '2016-10-17 08:33:19'),
(316, 'Gulpin', 0.4, 10.3, 'Estomago', 'Lodo liquido, Viscosidad', 'Casi la totalidad del cuerpo de Gulpin está compuesto por el estómago. Por eso, puede tragarse todo lo que tenga su tamaño. En el interior del estómago tiene un fluido capaz de corroerlo todo.', '316.png', 0, 0, '2016-10-17 09:36:29', '2016-10-17 09:36:29'),
(317, 'Swalot', 1.7, 80, 'Bolsa Veneno', 'Lodo liquido, Viscosidad', 'Cuando Swalot detecta una presa, echa por los poros, y a borbotones, un fluido tóxico espantoso con el que rocía a su víctima. Una vez que la debilita, se la traga entera gracias a la gigantesca boca que tiene.', '317.png', 0, 0, '2016-10-17 09:37:18', '2016-10-17 09:37:18'),
(336, 'Seviper', 2.7, 52.5, 'Colmillos', 'Mudar', 'Seviper lleva años de gran enemistad con Zangoose. Las cicatrices que tiene por todo el cuerpo dan buena muestra de los encarnizados combates en los que se han enfrentado. Seviper ataca usando su cola con forma de espada.', '336.png', 0, 0, '2016-10-17 09:37:43', '2016-10-17 09:37:43'),
(360, 'Wynaut', 0.6, 14, 'Radiante', 'Sombra trampa', 'Wynaut está siempre con una gran sonrisa puesta. Para ver si está enfadado, basta con mirarle la cola. Cuando se le molesta, se pone a dar golpetazos en el suelo.', '360.png', 0, 0, '2016-10-17 09:30:24', '2016-10-17 09:30:24'),
(466, 'Electivire', 1.8, 138.6, 'Rayo', 'Electromotor', 'Al almacenar mucha electricidad, desprende chispas de una claridad increíble entre sus dos cuernos.', '446.png', 0, 0, '2016-10-17 07:56:44', '2016-10-17 07:56:44'),
(467, 'Magmortar', 1.6, 68, 'Explosion', 'Cuerpo en llama', 'Sus brazos disparan bolas de fuego de más de 2000 °C. Vive en cráteres volcánicos.', '467.png', 0, 0, '2016-10-17 08:35:42', '2016-10-17 08:35:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `poke_tipo`
--

CREATE TABLE `poke_tipo` (
  `id` int(11) NOT NULL,
  `id_tipo` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `poke_tipo`
--

INSERT INTO `poke_tipo` (`id`, `id_tipo`, `created_at`, `updated_at`) VALUES
(7, 1, '2016-10-17 07:28:00', '2016-10-17 07:28:00'),
(8, 1, '2016-10-17 07:28:58', '2016-10-17 07:28:58'),
(9, 1, '2016-10-17 07:31:03', '2016-10-17 07:31:03'),
(54, 1, '2016-10-17 07:32:38', '2016-10-17 07:32:38'),
(55, 1, '2016-10-17 07:34:30', '2016-10-17 07:34:30'),
(60, 1, '2016-10-17 07:35:56', '2016-10-17 07:35:56'),
(61, 1, '2016-10-17 07:36:29', '2016-10-17 07:36:29'),
(62, 1, '2016-10-17 07:37:13', '2016-10-17 07:37:13'),
(72, 1, '2016-10-17 07:38:15', '2016-10-17 07:38:15'),
(73, 1, '2016-10-17 07:39:12', '2016-10-17 07:39:12'),
(79, 1, '2016-10-17 07:41:12', '2016-10-17 07:41:12'),
(80, 1, '2016-10-17 07:43:09', '2016-10-17 07:43:09'),
(25, 2, '2016-10-17 07:45:37', '2016-10-17 07:45:37'),
(26, 2, '2016-10-17 07:46:29', '2016-10-17 07:46:29'),
(81, 2, '2016-10-17 07:47:14', '2016-10-17 07:47:14'),
(82, 2, '2016-10-17 07:48:16', '2016-10-17 07:48:16'),
(100, 2, '2016-10-17 07:48:58', '2016-10-17 07:48:58'),
(101, 2, '2016-10-17 07:49:30', '2016-10-17 07:49:30'),
(125, 2, '2016-10-17 07:50:14', '2016-10-17 07:50:14'),
(239, 2, '2016-10-17 07:55:38', '2016-10-17 07:55:38'),
(466, 2, '2016-10-17 07:56:44', '2016-10-17 07:56:44'),
(179, 2, '2016-10-17 08:03:56', '2016-10-17 08:03:56'),
(180, 2, '2016-10-17 08:04:26', '2016-10-17 08:04:26'),
(181, 2, '2016-10-17 08:05:01', '2016-10-17 08:05:01'),
(4, 3, '2016-10-17 08:21:50', '2016-10-17 08:21:50'),
(5, 3, '2016-10-17 08:23:37', '2016-10-17 08:23:37'),
(6, 3, '2016-10-17 08:25:43', '2016-10-17 08:25:43'),
(58, 3, '2016-10-17 08:26:30', '2016-10-17 08:26:30'),
(59, 3, '2016-10-17 08:27:43', '2016-10-17 08:27:43'),
(77, 3, '2016-10-17 08:28:22', '2016-10-17 08:28:22'),
(78, 3, '2016-10-17 08:28:53', '2016-10-17 08:28:53'),
(126, 3, '2016-10-17 08:30:26', '2016-10-17 08:30:26'),
(240, 3, '2016-10-17 08:33:19', '2016-10-17 08:33:19'),
(467, 3, '2016-10-17 08:35:42', '2016-10-17 08:35:42'),
(155, 3, '2016-10-17 08:36:28', '2016-10-17 08:36:28'),
(156, 3, '2016-10-17 08:37:13', '2016-10-17 08:37:13'),
(157, 3, '2016-10-17 08:37:56', '2016-10-17 08:37:56'),
(1, 4, '2016-10-17 09:18:13', '2016-10-17 09:18:13'),
(2, 4, '2016-10-17 09:18:51', '2016-10-17 09:18:51'),
(3, 4, '2016-10-17 09:19:40', '2016-10-17 09:19:40'),
(114, 4, '2016-10-17 09:20:19', '2016-10-17 09:20:19'),
(152, 4, '2016-10-17 09:20:49', '2016-10-17 09:20:49'),
(153, 4, '2016-10-17 09:21:17', '2016-10-17 09:21:17'),
(154, 4, '2016-10-17 09:21:55', '2016-10-17 09:21:55'),
(182, 4, '2016-10-17 09:22:33', '2016-10-17 09:22:33'),
(191, 4, '2016-10-17 09:23:17', '2016-10-17 09:23:17'),
(192, 4, '2016-10-17 09:23:45', '2016-10-17 09:23:45'),
(63, 5, '2016-10-17 09:24:27', '2016-10-17 09:24:27'),
(64, 5, '2016-10-17 09:24:59', '2016-10-17 09:24:59'),
(65, 5, '2016-10-17 09:26:39', '2016-10-17 09:26:39'),
(96, 5, '2016-10-17 09:27:16', '2016-10-17 09:27:16'),
(97, 5, '2016-10-17 09:27:44', '2016-10-17 09:27:44'),
(150, 5, '2016-10-17 09:28:21', '2016-10-17 09:28:21'),
(151, 5, '2016-10-17 09:28:50', '2016-10-17 09:28:50'),
(196, 5, '2016-10-17 09:29:21', '2016-10-17 09:29:21'),
(202, 5, '2016-10-17 09:29:55', '2016-10-17 09:29:55'),
(360, 5, '2016-10-17 09:30:24', '2016-10-17 09:30:24'),
(23, 6, '2016-10-17 09:31:16', '2016-10-17 09:31:16'),
(24, 6, '2016-10-17 09:32:00', '2016-10-17 09:32:00'),
(29, 6, '2016-10-17 09:32:53', '2016-10-17 09:32:53'),
(30, 6, '2016-10-17 09:33:24', '2016-10-17 09:33:24'),
(31, 6, '2016-10-17 09:33:51', '2016-10-17 09:33:51'),
(32, 6, '2016-10-17 09:34:30', '2016-10-17 09:34:30'),
(33, 6, '2016-10-17 09:35:01', '2016-10-17 09:35:01'),
(34, 6, '2016-10-17 09:35:36', '2016-10-17 09:35:36'),
(316, 6, '2016-10-17 09:36:29', '2016-10-17 09:36:29'),
(317, 6, '2016-10-17 09:37:18', '2016-10-17 09:37:18'),
(336, 6, '2016-10-17 09:37:43', '2016-10-17 09:37:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `current_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`id`, `nombre`, `current_at`, `updated_at`) VALUES
(1, 'Agua', '2016-10-12 00:58:05', '0000-00-00 00:00:00'),
(2, 'Electrico', '2016-10-12 00:58:05', '0000-00-00 00:00:00'),
(3, 'Fuego', '2016-10-12 00:58:46', '0000-00-00 00:00:00'),
(4, 'Hierba', '2016-10-12 00:58:46', '0000-00-00 00:00:00'),
(5, 'Psiquico', '2016-10-12 01:00:24', '0000-00-00 00:00:00'),
(6, 'Veneno', '2016-10-12 00:59:13', '0000-00-00 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pokemon`
--
ALTER TABLE `pokemon`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
