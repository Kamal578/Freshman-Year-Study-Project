-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 12 2021 г., 10:20
-- Версия сервера: 10.4.19-MariaDB
-- Версия PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gpa_database`
--

-- --------------------------------------------------------

--
-- Структура таблицы `groups`
--

CREATE TABLE `groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `groups`
--

INSERT INTO `groups` (`id`, `group_name`) VALUES
(1, 'L0'),
(2, 'CS-19'),
(3, 'CE-19'),
(4, 'PE-19'),
(5, 'GE-19'),
(6, 'CS-18'),
(7, 'CE-18'),
(8, 'PE-18'),
(9, 'GE-18'),
(10, 'CS-17'),
(11, 'CE-17'),
(12, 'PE-17'),
(13, 'GE-17');

-- --------------------------------------------------------

--
-- Структура таблицы `main`
--

CREATE TABLE `main` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `main`
--

INSERT INTO `main` (`id`, `group_id`, `subject_id`) VALUES
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 2, 8),
(9, 2, 9),
(10, 2, 10),
(11, 2, 11),
(12, 2, 12),
(13, 2, 13),
(14, 2, 14),
(15, 2, 15),
(16, 3, 8),
(17, 3, 9),
(18, 3, 10),
(19, 3, 11),
(20, 3, 12),
(21, 3, 15),
(22, 3, 16),
(23, 3, 17),
(24, 3, 18),
(25, 3, 19),
(26, 4, 8),
(27, 4, 9),
(28, 4, 10),
(29, 4, 11),
(30, 4, 12),
(31, 4, 16),
(32, 4, 17),
(33, 4, 18),
(34, 4, 19),
(35, 4, 20),
(36, 4, 21),
(37, 5, 8),
(38, 5, 9),
(39, 5, 10),
(40, 5, 11),
(41, 5, 12),
(42, 5, 16),
(43, 5, 17),
(44, 5, 18),
(45, 5, 19),
(46, 5, 20),
(47, 5, 21),
(48, 6, 22),
(49, 6, 23),
(50, 6, 24),
(51, 6, 25),
(52, 6, 26),
(53, 6, 27),
(54, 6, 28),
(55, 6, 29),
(56, 6, 30),
(57, 6, 31),
(58, 7, 22),
(59, 7, 23),
(60, 7, 24),
(61, 7, 25),
(62, 7, 26),
(63, 7, 32),
(64, 7, 33),
(65, 7, 34),
(66, 7, 35),
(67, 8, 22),
(68, 8, 23),
(69, 8, 24),
(70, 8, 25),
(71, 8, 26),
(72, 8, 32),
(73, 8, 33),
(74, 8, 34),
(75, 8, 39),
(76, 8, 41),
(77, 8, 42),
(78, 9, 22),
(79, 9, 23),
(80, 9, 24),
(81, 9, 25),
(82, 9, 26),
(83, 9, 36),
(84, 9, 37),
(85, 9, 38),
(86, 9, 39),
(87, 9, 40),
(88, 10, 43),
(89, 10, 44),
(90, 10, 45),
(91, 10, 46),
(92, 10, 47),
(93, 11, 43),
(94, 11, 44),
(95, 11, 48),
(96, 11, 49),
(97, 12, 43),
(98, 12, 44),
(99, 12, 50),
(100, 12, 51),
(101, 12, 53),
(102, 13, 43),
(103, 13, 44),
(104, 13, 51),
(105, 13, 52),
(106, 1, 54),
(107, 1, 55);

-- --------------------------------------------------------

--
-- Структура таблицы `sheet1`
--

CREATE TABLE `sheet1` (
  `A` varchar(10) DEFAULT NULL,
  `B` varchar(48) DEFAULT NULL,
  `C` varchar(15) DEFAULT NULL,
  `D` varchar(16) DEFAULT NULL,
  `E` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sheet1`
--

INSERT INTO `sheet1` (`A`, `B`, `C`, `D`, `E`) VALUES
('Subject_ID', 'Subject_Name', 'First_Exam_Coef', 'Second_Exam_Coef', 'Third_Exam_Coef'),
('1', 'Basic Mathematics 2', '1', '1.25', '1.75'),
('2', 'Basic Physics 2', '0.75', '0.75', '1.5'),
('3', 'Basic Chemistry 2', '0.75', '0.75', '1.5'),
('4', 'Introduction to Computer Science 2', '0.5', '1', '1.5'),
('5', 'French Language', '0.5', '0.75', '0.75'),
('6', 'English Language', '0.66', '0.67', '0.67'),
('7', 'Study Project', '1.5', '1.5', NULL),
('8', 'Mathematics for Sciences 2, Linear Algebra 1', '1', '2', '3'),
('9', 'Physics 2', '1', '2', '3'),
('10', 'French Language 2', '0.5', '0.75', '0.75'),
('11', 'English Language 2', '0.5', '0.75', '0.75'),
('12', 'Introduction to the Business World', '1', '1', NULL),
('13', 'Data Structures and Algorithms', '1.8', '1.8', '2.4'),
('14', 'Computer Architecture ', '0.5', '1', '1.5'),
('15', 'Databases', '0.3', '1.2', '1.5'),
('16', 'Architecture of Matter 2', '0.75', '1.25', NULL),
('17', 'Transformation of Matter 2', '0.75', '1.25', NULL),
('18', 'Experimental Chemistry 2', '1', '1', NULL),
('19', 'Heat Transfer', '2', '1', NULL),
('20', 'Geosciences 2', '2', '2', NULL),
('21', 'Petroleum Engineering 2', '1', '1', NULL),
('22', 'Mathematics 4', '0.67', '1.33', '2'),
('23', 'Electronics', '0.75', '1.25', NULL),
('24', 'Thermodynamics 2', '0.75', '1.25', NULL),
('25', 'Physics Lab Training/ Physics 3&4', '2', NULL, NULL),
('26', 'French Language 4', '0.5', '0.5', '1'),
('27', 'Software Engineering', '0.6', '1.2', '1.2'),
('28', 'Object Oriented Programming 2', '1', '1', '1'),
('29', 'Signal Processing', '0.3', '1.2', '1.5'),
('30', 'Development Techniques', '1', '1', '1'),
('31', 'Operating Systems Architectures', '2', '2', '2'),
('32', 'Chemical reactivity 2: Inorganic Chemistry', '0.75', '1.25', NULL),
('33', 'Stereoscopies and electrochemistry', '0.75', '1.25', NULL),
('34', 'Experimental Chemistry 4', '2', NULL, NULL),
('35', 'Chemical Engineering 4', '4', '4', '4'),
('36', 'Signal processing for geosciences', '1', '2', NULL),
('37', 'Inverse methods for geosciences', '1', '2', NULL),
('38', 'Seismology and seismics', '1', '1', '2'),
('39', 'Geology of the sedementary basins and reservoirs', '2', '2', NULL),
('40', 'Principles of Geochemistry', '2', '2', NULL),
('41', 'Stereoscopic Analysis', '4', NULL, NULL),
('42', 'Sensors and signal conditionning', '4', NULL, NULL),
('43', 'Analysis of the job market', '1.5', '1.5', NULL),
('44', 'BSc Internship', '5', '5', '5'),
('45', 'Interdisciplinary Project CS', '3', '3', NULL),
('46', 'Software Certification', '0.6', '1.2', '1.2'),
('47', 'Security', '0.6', '1.2', '1.2'),
('48', 'Interdisciplinary Project CE', '4.5', '4.5', NULL),
('49', 'Process Simulation', '3', NULL, NULL),
('50', 'Interdisciplinary Project PE', '3', '2', NULL),
('51', 'Exploration Production 2', '2', '3', '2'),
('52', 'Interdisciplinary Project GE', '1', '1', NULL),
('53', 'Acoustic and Data Acquisition 2', '1.5', '1.5', NULL),
('L0', NULL, NULL, NULL, NULL),
('CS-19', NULL, NULL, NULL, NULL),
('CE-19', NULL, NULL, NULL, NULL),
('PE-19', NULL, NULL, NULL, NULL),
('GE-19', NULL, NULL, NULL, NULL),
('CS-18', NULL, NULL, NULL, NULL),
('CE-18', NULL, NULL, NULL, NULL),
('PE-18', NULL, NULL, NULL, NULL),
('GE-18', NULL, NULL, NULL, NULL),
('CS-17', NULL, NULL, NULL, NULL),
('CE-17', NULL, NULL, NULL, NULL),
('PE-17', NULL, NULL, NULL, NULL),
('GE-17', NULL, NULL, NULL, NULL),
('L0', NULL, NULL, NULL, NULL),
('CS-19', NULL, NULL, NULL, NULL),
('CE-19', NULL, NULL, NULL, NULL),
('PE-19', NULL, NULL, NULL, NULL),
('GE-19', NULL, NULL, NULL, NULL),
('CS-18', NULL, NULL, NULL, NULL),
('CE-18', NULL, NULL, NULL, NULL),
('PE-18', NULL, NULL, NULL, NULL),
('GE-18', NULL, NULL, NULL, NULL),
('CS-17', NULL, NULL, NULL, NULL),
('CE-17', NULL, NULL, NULL, NULL),
('PE-17', NULL, NULL, NULL, NULL),
('GE-17', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_exam_coef` double(8,3) NOT NULL,
  `second_exam_coef` double(8,3) NOT NULL,
  `third_exam_coef` double(8,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `subjects`
--

INSERT INTO `subjects` (`id`, `subject_name`, `first_exam_coef`, `second_exam_coef`, `third_exam_coef`) VALUES
(2, 'Basic Physics 2', 0.750, 0.750, 1.500),
(3, 'Basic Chemistry 2', 0.750, 0.750, 1.500),
(4, 'Introduction to Computer Science 2', 0.500, 1.000, 1.500),
(5, 'French Language', 0.500, 0.750, 0.750),
(6, 'English Language', 0.500, 0.750, 0.750),
(7, 'Study Project', 1.500, 1.500, 0.000),
(8, 'Mathematics for Sciences 2, Linear Algebra 1', 1.000, 2.000, 3.000),
(9, 'Physics 2', 1.000, 2.000, 3.000),
(10, 'French Language 2', 0.500, 0.750, 0.750),
(11, 'English Language 2', 0.500, 0.750, 0.750),
(12, 'Introduction to the Business World', 1.000, 1.000, 0.000),
(13, 'Data Structures and Algorithms', 1.800, 1.800, 2.400),
(14, 'Computer Architecture', 0.500, 1.000, 1.500),
(15, 'Databases', 0.300, 1.200, 1.500),
(16, 'Architecture of Matter 2', 0.750, 1.250, 0.000),
(17, 'Transformation of Matter 2', 0.750, 1.250, 0.000),
(18, 'Experimental Chemistry 2', 1.000, 1.000, 0.000),
(19, 'Heat Transfer', 2.000, 1.000, 0.000),
(20, 'Geosciences 2', 2.000, 2.000, 0.000),
(21, 'Petroleum Engineering 2', 1.000, 1.000, 0.000),
(22, 'Mathematics 4', 0.670, 1.330, 2.000),
(23, 'Electronics', 0.750, 1.250, 0.000),
(24, 'Thermodynamics 2', 0.750, 1.250, 0.000),
(25, 'Physics Lab Training/ Physics 3&4', 2.000, 0.000, 0.000),
(26, 'French Language 4', 0.500, 0.500, 1.000),
(27, 'Software Engineering', 0.600, 1.200, 1.200),
(28, 'Object Oriented Programming 2', 1.000, 1.000, 1.000),
(29, 'Signal Processing', 0.300, 1.200, 1.500),
(30, 'Development Techniques', 1.000, 1.000, 1.000),
(31, 'Operating Systems Architectures', 2.000, 2.000, 2.000),
(32, 'Chemical reactivity 2: Inorganic Chemistry', 0.750, 1.250, 0.000),
(33, 'Stereoscopies and electrochemistry', 0.750, 1.250, 0.000),
(34, 'Experimental Chemistry 4', 2.000, 0.000, 0.000),
(35, 'Chemical Engineering 4', 4.000, 4.000, 4.000),
(36, 'Signal processing for geosciences', 1.000, 2.000, 0.000),
(37, 'Inverse methods for geosciences', 1.000, 2.000, 0.000),
(38, 'Seismology and seismics', 1.000, 1.000, 2.000),
(39, 'Geology of the sedimentary basins and reservoirs', 2.000, 2.000, 0.000),
(40, 'Principles of Geochemistry', 2.000, 2.000, 0.000),
(41, 'Stereoscopic Analysis', 4.000, 0.000, 0.000),
(42, 'Sensors and signal conditioning', 4.000, 0.000, 0.000),
(43, 'Analysis of the job market', 1.500, 1.500, 0.000),
(44, 'BSc Internship', 5.000, 5.000, 5.000),
(45, 'Interdisciplinary Project CS', 3.000, 3.000, 0.000),
(46, 'Software Certification', 0.600, 1.200, 1.200),
(47, 'Security', 0.600, 1.200, 1.200),
(48, 'Interdisciplinary Project CE', 4.500, 4.500, 0.000),
(49, 'Process Simulation', 3.000, 0.000, 0.000),
(50, 'Interdisciplinary Project PE', 3.000, 2.000, 0.000),
(51, 'Exploration Production 2', 2.000, 3.000, 2.000),
(52, 'Interdisciplinary Project GE', 1.000, 1.000, 0.000),
(53, 'Acoustic and Data Acquisition 2', 1.500, 1.500, 0.000),
(54, 'Algebra', 0.500, 0.625, 0.875),
(55, 'Mathematical Analysis', 0.500, 0.625, 0.875);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `main`
--
ALTER TABLE `main`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `main`
--
ALTER TABLE `main`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT для таблицы `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
