-- Desactivar temporalmente la verificación de claves foráneas
SET FOREIGN_KEY_CHECKS = 0;

-- Eliminar datos de las tablas en orden inverso a las dependencias
DELETE FROM `asistencia`;
DELETE FROM `horario`;
DELETE FROM `competencia`;
DELETE FROM `aprendiz`;
DELETE FROM `instructor`;
DELETE FROM `coordinador`;
DELETE FROM `administrador`;
DELETE FROM `ambiente`;
DELETE FROM `ficha`;
DELETE FROM `programa`;
DELETE FROM `centro`;
DELETE FROM `usuario`;
DELETE FROM `regional`;
DELETE FROM `rol`;

-- Reiniciar los contadores AUTO_INCREMENT
ALTER TABLE `asistencia` AUTO_INCREMENT = 1;
ALTER TABLE `horario` AUTO_INCREMENT = 1;
ALTER TABLE `competencia` AUTO_INCREMENT = 1;
ALTER TABLE `aprendiz` AUTO_INCREMENT = 1;
ALTER TABLE `instructor` AUTO_INCREMENT = 1;
ALTER TABLE `coordinador` AUTO_INCREMENT = 1;
ALTER TABLE `administrador` AUTO_INCREMENT = 1;
ALTER TABLE `ambiente` AUTO_INCREMENT = 1;
ALTER TABLE `ficha` AUTO_INCREMENT = 1;
ALTER TABLE `programa` AUTO_INCREMENT = 1;
ALTER TABLE `centro` AUTO_INCREMENT = 1;
ALTER TABLE `usuario` AUTO_INCREMENT = 1;
ALTER TABLE `regional` AUTO_INCREMENT = 1;
ALTER TABLE `rol` AUTO_INCREMENT = 1;

-- Reactivar la verificación de claves foráneas
SET FOREIGN_KEY_CHECKS = 1;

-- Insertar datos en tabla regional
INSERT INTO `regional` (`id`, `nombre`) VALUES
(1, 'Caldas'),
(2, 'Antioquia'),
(3, 'Bogotá'),
(4, 'Valle'),
(5, 'Atlántico');

-- Insertar datos en tabla rol
INSERT INTO `rol` (`id`, `nombre`) VALUES
(1, 'Administrador'),
(2, 'Coordinador'),
(3, 'Instructor'),
(4, 'Aprendiz');

-- Insertar datos en tabla usuario
INSERT INTO `usuario` (`id`, `nombre`, `email`, `contrasena`, `idRol`) VALUES
(1, 'Admin1', 'admin1@example.com', '123', 1),
(2, 'Admin2', 'admin2@example.com', '123', 1),
(3, 'Admin3', 'admin3@example.com', '123', 1),
(4, 'Admin4', 'admin4@example.com', '123', 1),
(5, 'Admin5', 'admin5@example.com', '123', 1),
(6, 'Coord1', 'coord1@example.com', '123', 2),
(7, 'Coord2', 'coord2@example.com', '123', 2),
(8, 'Coord3', 'coord3@example.com', '123', 2),
(9, 'Coord4', 'coord4@example.com', '123', 2),
(10, 'Coord5', 'coord5@example.com', '123', 2),
(11, 'Inst1', 'inst1@example.com', '123', 3),
(12, 'Inst2', 'inst2@example.com', '123', 3),
(13, 'Inst3', 'inst3@example.com', '123', 3),
(14, 'Inst4', 'inst4@example.com', '123', 3),
(15, 'Inst5', 'inst5@example.com', '123', 3),
(16, 'Aprend1', 'aprend1@example.com', '123', 4),
(17, 'Aprend2', 'aprend2@example.com', '123', 4),
(18, 'Aprend3', 'aprend3@example.com', '123', 4),
(19, 'Aprend4', 'aprend4@example.com', '123', 4),
(20, 'Aprend5', 'aprend5@example.com', '123', 4);

-- Insertar datos en tabla centro
INSERT INTO `centro` (`id`, `nombre`, `idRegional`) VALUES
(1, 'CPIC', 1),
(2, 'Centro de Automatización Industrial', 1),
(3, 'Centro de Servicios y Gestión Empresarial', 2),
(4, 'Centro de Comercio', 2),
(5, 'Centro de Biotecnología Agropecuaria', 3);

-- Insertar datos en tabla administrador
INSERT INTO `administrador` (`id`, `idRegional`, `idUsuario`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5);

-- Insertar datos en tabla coordinador
INSERT INTO `coordinador` (`id`, `idCentro`, `idUsuario`) VALUES
(1, 1, 6),
(2, 2, 7),
(3, 3, 8),
(4, 4, 9),
(5, 5, 10);

-- Insertar datos en tabla instructor
INSERT INTO `instructor` (`id`, `idCentro`, `idUsuario`) VALUES
(1, 1, 11),
(2, 2, 12),
(3, 3, 13),
(4, 4, 14),
(5, 5, 15);

-- Insertar datos en tabla programa
INSERT INTO `programa` (`id`, `nombre`, `idCentro`) VALUES
(1, 'ADSO', 1),
(2, 'Redes de Datos', 1),
(3, 'Desarrollo de Videojuegos', 2),
(4, 'Contabilidad y Finanzas', 3),
(5, 'Gestión Agrícola', 5);

-- Insertar datos en tabla ficha
INSERT INTO `ficha` (`id`, `ficha`, `idPrograma`) VALUES
(1, '2873711', 1),
(2, '2785632', 1),
(3, '2891245', 2),
(4, '2903761', 3),
(5, '2945671', 4);

-- Insertar datos en tabla aprendiz
INSERT INTO `aprendiz` (`id`, `idFicha`, `idUsuario`) VALUES
(1, 1, 16),
(2, 2, 17),
(3, 3, 18),
(4, 4, 19),
(5, 5, 20);

-- Insertar datos en tabla ambiente
INSERT INTO `ambiente` (`id`, `nombre`, `idCentro`) VALUES
(1, 'Sistemas 1', 1),
(2, 'Redes 1', 1),
(3, 'Laboratorio Digital', 2),
(4, 'Aula 101', 3),
(5, 'Invernadero', 5);

-- Insertar datos en tabla competencia
INSERT INTO `competencia` (`id`, `nombre`, `idFicha`, `idInstructor`) VALUES
(1, 'Desarrollo de software', 1, 1),
(2, 'Base de datos', 1, 1),
(3, 'Redes de comunicación', 3, 2),
(4, 'Diseño de videojuegos', 4, 3),
(5, 'Contabilidad básica', 5, 5);

-- Insertar datos en tabla horario
INSERT INTO `horario` (`id`, `idCompetencia`, `horaInicio`, `horaFin`, `dia`) VALUES
(1, 1, '2025-04-07 07:00:00', '2025-04-07 09:00:00', 'Lunes'),
(2, 1, '2025-04-07 07:00:00', '2025-04-07 09:00:00', 'Miércoles'),
(3, 2, '2025-04-07 09:30:00', '2025-04-07 11:30:00', 'Martes'),
(4, 3, '2025-04-07 13:00:00', '2025-04-07 15:00:00', 'Jueves'),
(5, 4, '2025-04-07 15:30:00', '2025-04-07 17:30:00', 'Viernes');

-- Insertar datos en tabla asistencia
INSERT INTO `asistencia` (`id`, `idHorario`, `fecha`, `cantHoras`, `idAprendiz`) VALUES
(1, 1, '2025-04-07', 2, 1),
(2, 2, '2025-04-09', 2, 1),
(3, 3, '2025-04-08', 2, 2),
(4, 4, '2025-04-10', 2, 3),
(5, 5, '2025-04-11', 2, 4);