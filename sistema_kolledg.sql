-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 03, 2019 at 02:25 PM
-- Server version: 8.0.15
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistema_kolledg`
--

-- --------------------------------------------------------

--
-- Table structure for table `administration_info`
--

CREATE TABLE `administration_info` (
  `id_administration` int(11) NOT NULL,
  `fio` varchar(60) NOT NULL,
  `position` varchar(20) NOT NULL,
  `number_SP` varchar(3) NOT NULL,
  `addres` varchar(60) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `date_of_birth` date NOT NULL,
  `id_role` int(11) NOT NULL,
  `id_classroom` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `administration_info`
--

INSERT INTO `administration_info` (`id_administration`, `fio`, `position`, `number_SP`, `addres`, `phone_number`, `email`, `date_of_birth`, `id_role`, `id_classroom`) VALUES
(1, 'Зудилина Елена Александровна', 'Зам. директора', '3', 'г. Москва, и так далее', 712345678, 'example@mail.ru', '2000-05-15', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id_subject` int(11) NOT NULL,
  `name_article` varchar(70) NOT NULL,
  `author_article` varchar(70) NOT NULL,
  `year` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `classrooms`
--

CREATE TABLE `classrooms` (
  `id_classrooms` int(11) NOT NULL,
  `number` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `classrooms`
--

INSERT INTO `classrooms` (`id_classrooms`, `number`) VALUES
(1, 401),
(2, 406),
(3, 302),
(4, 403);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id_course` int(11) NOT NULL,
  `name_course` varchar(50) NOT NULL,
  `time_of_hours` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id_course`, `name_course`, `time_of_hours`, `price`) VALUES
(1, 'Гирокоптеры', 64, 96000),
(2, 'Сетевое и системное администрирование', 72, 9600);

-- --------------------------------------------------------

--
-- Table structure for table `courses_and_students`
--

CREATE TABLE `courses_and_students` (
  `id_course` int(11) NOT NULL,
  `id_student` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses_and_students`
--

INSERT INTO `courses_and_students` (`id_course`, `id_student`) VALUES
(2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `courses_and_teachers`
--

CREATE TABLE `courses_and_teachers` (
  `id_course` int(11) NOT NULL,
  `id_teacher` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses_and_teachers`
--

INSERT INTO `courses_and_teachers` (`id_course`, `id_teacher`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id_event` int(11) NOT NULL,
  `name_of_event` varchar(50) NOT NULL,
  `place` varchar(55) NOT NULL,
  `date` date NOT NULL,
  `duration` int(11) NOT NULL,
  `id_teacher` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id_event`, `name_of_event`, `place`, `date`, `duration`, `id_teacher`) VALUES
(1, 'Субботник', 'Улица', '2019-05-17', 1, 2),
(2, 'Полёты на квадртокоптере', 'Воздух', '2029-10-10', 999, 1);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id_group` int(11) NOT NULL,
  `number_group` varchar(13) NOT NULL,
  `id_specialization` int(11) NOT NULL,
  `date_zachislenia` date NOT NULL,
  `classroom_teacher` int(11) NOT NULL,
  `form_of_study` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id_group`, `number_group`, `id_specialization`, `date_zachislenia`, `classroom_teacher`, `form_of_study`) VALUES
(1, '3719', 1, '2017-09-01', 1, 'Очная'),
(2, '3619', 1, '2016-09-01', 2, 'Очная');

-- --------------------------------------------------------

--
-- Table structure for table `monographs`
--

CREATE TABLE `monographs` (
  `id_subject` int(11) NOT NULL,
  `name_monograph` varchar(70) NOT NULL,
  `author_monograph` varchar(70) NOT NULL,
  `year` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `title` varchar(55) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `min_text` text NOT NULL,
  `full_text` text NOT NULL,
  `date` date NOT NULL,
  `image_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_news`, `title`, `min_text`, `full_text`, `date`, `image_url`) VALUES
(1, 'Конкурсы поделок', '22 апреля СП № 3 предметно-цикловой комиссией экономических дисциплин были проведены два конкурса «Моя копилка» и «Мой рубль». ', '\r\n\r\nВ конкурсах поделок активно участвовали студенты 1 и 2 курса, а также школьники, обучающиеся банковскому делу.\r\n\r\nОбучающиеся удивили своими необычными идеями и умением их осуществить. Поделки получились очень креативные и красивые.\r\n\r\nИтоги конкурса «Моя копилка»:\r\n\r\n    1 место. Лемешев Данил, группа «Агент банка» (школьники);\r\n    2 место. Гулагина Екатерина, группа 3721в (Банковское дело);\r\n    3 место. Мардавина Гюльдете и Гертье Екатерина, группа «Агент банка» (школьники).\r\n\r\nИтоги конкурса «Мой рубль»:\r\n\r\n    1 место. Обухова Виктория, группа «Агент банка» (школьники);\r\n    2 место. Никанорова Екатерина и Исаева Ирина, группа 3718 (Земельно-имущественные отношения);\r\n    3 место. Алмаева Анастасия , группа 3821в (Банковское дело).\r\n\r\nСпасибо всем студентам и школьникам, которые участвовали конкурсах поделок в рамках недели финансовой грамотности и порадовали своими творческими способностями!\r\n', '2019-04-23', 'https://schelcol.ru/media/k2/items/cache/09b87d8495c8cf32b64735c816312dfe_L.jpg'),
(2, 'Выставка «Мир стекла» ', '2 апреля 2019 года преподаватель Юдина Т.А. и студенты группы № 6708 посетили 21-ю Международную выставку «Мир стекла».', '\r\n\r\nНа выставке были представлены стенды из 20-ти стран, рассказывающие о химическом производстве стекла, сырье, о технологиях варки стекла.\r\n\r\nСтуденты познакомились с системами загрузки и удаления шихты, увидели печи отжига, формование листового стекла, ламп накаливания и зеркал, производство художественного, декоративного стекла и витражи.\r\n', '2019-04-04', 'https://schelcol.ru/media/k2/items/cache/e1479c60fc7d7f4f708d42f869f837c8_L.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `notes_of_lectures`
--

CREATE TABLE `notes_of_lectures` (
  `id_subject` int(11) NOT NULL,
  `theme_of_lecture` varchar(70) NOT NULL,
  `content` char(250) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `presentations`
--

CREATE TABLE `presentations` (
  `id_subject` int(11) NOT NULL,
  `name_presentation` varchar(70) NOT NULL,
  `theme_presentation` varchar(70) NOT NULL,
  `author_presentation` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id_role` int(11) NOT NULL,
  `name_role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id_role`, `name_role`) VALUES
(2, 'Студент'),
(3, 'Учитель'),
(4, 'Администрация');

-- --------------------------------------------------------

--
-- Table structure for table `specializatoin_lesson`
--

CREATE TABLE `specializatoin_lesson` (
  `id_subject` int(11) NOT NULL,
  `id_specializatoin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `specializatoin_lesson`
--

INSERT INTO `specializatoin_lesson` (`id_subject`, `id_specializatoin`) VALUES
(1, 1),
(2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `specialnost`
--

CREATE TABLE `specialnost` (
  `id_specialization` int(11) NOT NULL,
  `name_specialization` varchar(50) NOT NULL,
  `srok_obycheniya` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `specialnost`
--

INSERT INTO `specialnost` (`id_specialization`, `name_specialization`, `srok_obycheniya`) VALUES
(1, 'Информационные системы', '3 года и 9 месяцев'),
(2, 'Банковское дело', '20 лет');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id_student` int(11) NOT NULL,
  `fio` varchar(50) NOT NULL,
  `id_group` int(11) NOT NULL,
  `date_of_birth` date NOT NULL,
  `phone_number` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `form_study` varchar(10) NOT NULL,
  `number_of_studencheskly` int(11) NOT NULL,
  `phone_numder_parents` varchar(15) NOT NULL,
  `f.i.o_parents` varchar(50) NOT NULL,
  `id_role` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id_student`, `fio`, `id_group`, `date_of_birth`, `phone_number`, `address`, `email`, `password`, `form_study`, `number_of_studencheskly`, `phone_numder_parents`, `f.i.o_parents`, `id_role`, `id_user`) VALUES
(1, 'Попов Александр Дмитриевич', 1, '2001-04-13', 712345678, 'г. Россия, и т.д.', 'mrreads@yandex.com', '123', 'Очная', 923718, '+712345678', 'Попова Попова Попова', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_books`
--

CREATE TABLE `student_books` (
  `id_subject` int(11) NOT NULL,
  `name_student_book` varchar(70) NOT NULL,
  `author_student_book` varchar(70) NOT NULL,
  `year` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id_subject` int(11) NOT NULL,
  `quantity_hour` int(11) NOT NULL,
  `subject_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id_subject`, `quantity_hour`, `subject_name`) VALUES
(1, 256, 'Архитектура компьютера'),
(2, 128, 'Разработка баз-данных');

-- --------------------------------------------------------

--
-- Table structure for table `subject_teacher`
--

CREATE TABLE `subject_teacher` (
  `id_teacher` int(11) NOT NULL,
  `id_subject` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subject_teacher`
--

INSERT INTO `subject_teacher` (`id_teacher`, `id_subject`) VALUES
(2, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_info`
--

CREATE TABLE `teacher_info` (
  `id_teacher` int(11) NOT NULL,
  `fio` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `category` varchar(15) NOT NULL,
  `date_birth` date NOT NULL,
  `id_role` int(11) NOT NULL,
  `id_classroom` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacher_info`
--

INSERT INTO `teacher_info` (`id_teacher`, `fio`, `email`, `phone_number`, `category`, `date_birth`, `id_role`, `id_classroom`) VALUES
(1, 'Овчинников Антон Викторович', 'example@mail.ru', 712345678, 'МАКСМАЛОЧКА', '2005-05-09', 3, 2),
(2, 'Гайдуков Игорь Михайлович', 'example@mail.ru', 712345678, 'Высная', '2019-05-13', 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tutorial`
--

CREATE TABLE `tutorial` (
  `id_subject` int(11) NOT NULL,
  `name_tutorial` varchar(70) NOT NULL,
  `theme_tutorial` varchar(70) NOT NULL,
  `author_tutorial` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `login` varchar(15) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(20) NOT NULL,
  `id_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `login`, `email`, `password`, `id_role`) VALUES
(1, 'mrreads', 'mrreads@yandex.com', '123', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administration_info`
--
ALTER TABLE `administration_info`
  ADD PRIMARY KEY (`id_administration`),
  ADD UNIQUE KEY `unq_administration_info_id_classroom` (`id_classroom`),
  ADD KEY `id_role` (`id_role`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id_subject`),
  ADD KEY `id_subject` (`id_subject`);

--
-- Indexes for table `classrooms`
--
ALTER TABLE `classrooms`
  ADD PRIMARY KEY (`id_classrooms`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id_course`);

--
-- Indexes for table `courses_and_students`
--
ALTER TABLE `courses_and_students`
  ADD PRIMARY KEY (`id_course`),
  ADD KEY `courses_and_students_ibfk_2` (`id_student`);

--
-- Indexes for table `courses_and_teachers`
--
ALTER TABLE `courses_and_teachers`
  ADD PRIMARY KEY (`id_course`),
  ADD KEY `courses_and_teachers_ibfk_2` (`id_teacher`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id_event`),
  ADD KEY `id_teacher` (`id_teacher`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id_group`),
  ADD UNIQUE KEY `unq_groups_classroom_teacher` (`classroom_teacher`),
  ADD KEY `FOREIGN` (`id_specialization`),
  ADD KEY `id_group` (`id_group`);

--
-- Indexes for table `monographs`
--
ALTER TABLE `monographs`
  ADD PRIMARY KEY (`id_subject`),
  ADD KEY `id_subject` (`id_subject`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Indexes for table `notes_of_lectures`
--
ALTER TABLE `notes_of_lectures`
  ADD PRIMARY KEY (`id_subject`),
  ADD KEY `id_subject` (`id_subject`);

--
-- Indexes for table `presentations`
--
ALTER TABLE `presentations`
  ADD PRIMARY KEY (`id_subject`),
  ADD KEY `id_subject` (`id_subject`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_role`),
  ADD KEY `id_role` (`id_role`);

--
-- Indexes for table `specializatoin_lesson`
--
ALTER TABLE `specializatoin_lesson`
  ADD PRIMARY KEY (`id_subject`),
  ADD KEY `FOREIGN` (`id_specializatoin`);

--
-- Indexes for table `specialnost`
--
ALTER TABLE `specialnost`
  ADD PRIMARY KEY (`id_specialization`),
  ADD KEY `id_specialization` (`id_specialization`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id_student`),
  ADD UNIQUE KEY `unq_students_id_user` (`id_user`),
  ADD KEY `FOREIGN` (`id_group`),
  ADD KEY `id_role` (`id_role`),
  ADD KEY `id_student` (`id_student`);

--
-- Indexes for table `student_books`
--
ALTER TABLE `student_books`
  ADD PRIMARY KEY (`id_subject`),
  ADD KEY `id_subject` (`id_subject`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id_subject`),
  ADD KEY `id_subject` (`id_subject`);

--
-- Indexes for table `subject_teacher`
--
ALTER TABLE `subject_teacher`
  ADD PRIMARY KEY (`id_teacher`,`id_subject`),
  ADD KEY `id_subject` (`id_subject`),
  ADD KEY `id_teacher` (`id_teacher`);

--
-- Indexes for table `teacher_info`
--
ALTER TABLE `teacher_info`
  ADD PRIMARY KEY (`id_teacher`),
  ADD UNIQUE KEY `unq_teacher_info_id_classroom` (`id_classroom`),
  ADD KEY `id_role` (`id_role`),
  ADD KEY `id_teacher` (`id_teacher`);

--
-- Indexes for table `tutorial`
--
ALTER TABLE `tutorial`
  ADD PRIMARY KEY (`id_subject`),
  ADD KEY `id_subject` (`id_subject`),
  ADD KEY `id_subject_2` (`id_subject`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`),
  ADD UNIQUE KEY `unq_users_id_role` (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administration_info`
--
ALTER TABLE `administration_info`
  MODIFY `id_administration` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `classrooms`
--
ALTER TABLE `classrooms`
  MODIFY `id_classrooms` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id_group` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `specializatoin_lesson`
--
ALTER TABLE `specializatoin_lesson`
  MODIFY `id_subject` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `specialnost`
--
ALTER TABLE `specialnost`
  MODIFY `id_specialization` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id_student` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `administration_info`
--
ALTER TABLE `administration_info`
  ADD CONSTRAINT `administration_info_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `roles` (`id_role`),
  ADD CONSTRAINT `fk_administration_info` FOREIGN KEY (`id_classroom`) REFERENCES `classrooms` (`id_classrooms`);

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`id_subject`) REFERENCES `subjects` (`id_subject`);

--
-- Constraints for table `courses_and_students`
--
ALTER TABLE `courses_and_students`
  ADD CONSTRAINT `courses_and_students_ibfk_1` FOREIGN KEY (`id_student`) REFERENCES `students` (`id_student`),
  ADD CONSTRAINT `courses_and_students_ibfk_2` FOREIGN KEY (`id_course`) REFERENCES `courses` (`id_course`);

--
-- Constraints for table `courses_and_teachers`
--
ALTER TABLE `courses_and_teachers`
  ADD CONSTRAINT `courses_and_teachers_ibfk_1` FOREIGN KEY (`id_teacher`) REFERENCES `teacher_info` (`id_teacher`),
  ADD CONSTRAINT `courses_and_teachers_ibfk_2` FOREIGN KEY (`id_course`) REFERENCES `courses` (`id_course`);

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`id_teacher`) REFERENCES `teacher_info` (`id_teacher`);

--
-- Constraints for table `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `fk_groups_classrooms` FOREIGN KEY (`classroom_teacher`) REFERENCES `classrooms` (`id_classrooms`),
  ADD CONSTRAINT `groups_ibfk_1` FOREIGN KEY (`id_specialization`) REFERENCES `specialnost` (`id_specialization`);

--
-- Constraints for table `monographs`
--
ALTER TABLE `monographs`
  ADD CONSTRAINT `monographs_ibfk_1` FOREIGN KEY (`id_subject`) REFERENCES `subjects` (`id_subject`);

--
-- Constraints for table `notes_of_lectures`
--
ALTER TABLE `notes_of_lectures`
  ADD CONSTRAINT `notes_of_lectures_ibfk_1` FOREIGN KEY (`id_subject`) REFERENCES `subjects` (`id_subject`);

--
-- Constraints for table `presentations`
--
ALTER TABLE `presentations`
  ADD CONSTRAINT `presentations_ibfk_1` FOREIGN KEY (`id_subject`) REFERENCES `subjects` (`id_subject`);

--
-- Constraints for table `specializatoin_lesson`
--
ALTER TABLE `specializatoin_lesson`
  ADD CONSTRAINT `specializatoin_lesson_ibfk_1` FOREIGN KEY (`id_specializatoin`) REFERENCES `specialnost` (`id_specialization`),
  ADD CONSTRAINT `specializatoin_lesson_ibfk_2` FOREIGN KEY (`id_subject`) REFERENCES `subjects` (`id_subject`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `fk_students_users` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_users`),
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `roles` (`id_role`),
  ADD CONSTRAINT `students_ibfk_2` FOREIGN KEY (`id_group`) REFERENCES `groups` (`id_group`);

--
-- Constraints for table `student_books`
--
ALTER TABLE `student_books`
  ADD CONSTRAINT `student_books_ibfk_1` FOREIGN KEY (`id_subject`) REFERENCES `subjects` (`id_subject`);

--
-- Constraints for table `subject_teacher`
--
ALTER TABLE `subject_teacher`
  ADD CONSTRAINT `subject_teacher_ibfk_1` FOREIGN KEY (`id_teacher`) REFERENCES `teacher_info` (`id_teacher`),
  ADD CONSTRAINT `subject_teacher_ibfk_2` FOREIGN KEY (`id_subject`) REFERENCES `subjects` (`id_subject`);

--
-- Constraints for table `teacher_info`
--
ALTER TABLE `teacher_info`
  ADD CONSTRAINT `fk_teacher_info_classrooms` FOREIGN KEY (`id_classroom`) REFERENCES `classrooms` (`id_classrooms`),
  ADD CONSTRAINT `teacher_info_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `roles` (`id_role`);

--
-- Constraints for table `tutorial`
--
ALTER TABLE `tutorial`
  ADD CONSTRAINT `tutorial_ibfk_1` FOREIGN KEY (`id_subject`) REFERENCES `subjects` (`id_subject`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_roles` FOREIGN KEY (`id_role`) REFERENCES `roles` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
