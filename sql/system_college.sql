-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 20 2020 г., 19:46
-- Версия сервера: 10.4.12-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `system_college`
--

-- --------------------------------------------------------

--
-- Структура таблицы `administrations`
--

CREATE TABLE `administrations` (
  `id_administration` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `birth` date NOT NULL,
  `number` varchar(12) NOT NULL,
  `id_role` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_classroom` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `administrations`
--

INSERT INTO `administrations` (`id_administration`, `name`, `birth`, `number`, `id_role`, `id_user`, `id_classroom`, `email`, `image`) VALUES
(1, 'Куликова Радмила Евсеевна', '2019-05-14', '+70000000000', 1, 5, 1, 'example@mail.ru', 'https://img5.goodfon.ru/wallpaper/nbig/b/11/abstraktsiia-goluboi-linii-geometriia-abstract-design.jpg'),
(2, 'Дорофеева Юзефа Михайловна', '2019-05-15', '+70000000000', 1, 6, 5, 'example@mail.ru', 'data:image/jpeg;base64,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');

-- --------------------------------------------------------

--
-- Структура таблицы `classrooms`
--

CREATE TABLE `classrooms` (
  `id_classroom` int(11) NOT NULL,
  `name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `classrooms`
--

INSERT INTO `classrooms` (`id_classroom`, `name`) VALUES
(1, '401'),
(2, '204'),
(3, '406'),
(4, '12'),
(5, '340');

-- --------------------------------------------------------

--
-- Структура таблицы `courses`
--

CREATE TABLE `courses` (
  `id_course` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `duration` varchar(10) NOT NULL,
  `price` varchar(10) NOT NULL,
  `id_teacher` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `courses`
--

INSERT INTO `courses` (`id_course`, `name`, `duration`, `price`, `id_teacher`) VALUES
(1, 'Сетевое администрирование', '72 часа', '9600 руб', 1),
(2, 'Электротехника', '1024 часов', '8400 руб', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `events`
--

CREATE TABLE `events` (
  `id_event` int(11) NOT NULL,
  `name` varchar(35) NOT NULL,
  `place` varchar(35) NOT NULL,
  `date` date NOT NULL,
  `duration` varchar(10) NOT NULL,
  `id_teacher` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `events`
--

INSERT INTO `events` (`id_event`, `name`, `place`, `date`, `duration`, `id_teacher`) VALUES
(1, 'Субботник', 'Улица', '2019-05-15', '1 час', 2),
(2, 'Поход на выставку', 'Музей', '2029-05-16', '2 часа', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `groups`
--

CREATE TABLE `groups` (
  `id_group` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `id_speciality` int(11) NOT NULL,
  `enrollment` date NOT NULL,
  `formstudy` varchar(10) NOT NULL,
  `id_classroom` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `groups`
--

INSERT INTO `groups` (`id_group`, `name`, `id_speciality`, `enrollment`, `formstudy`, `id_classroom`) VALUES
(1, '1', 1, '2019-05-14', 'Очная', 1),
(2, '2', 2, '2019-12-27', 'Очная', 2),
(3, '3', 1, '2016-09-01', 'Очная', 3),
(4, '4', 1, '2015-09-01', 'Заочная', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `id_message` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL,
  `id_group` int(11) DEFAULT NULL,
  `id_role` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id_message`, `name`, `message`, `date`, `id_group`, `id_role`, `id_user`) VALUES
(1, 'Саша', 'Я пишу', '2019-06-05', 1, 3, 1),
(2, 'Не саша', 'Я реально пишу', '2019-06-01', 2, 3, 2),
(3, 'Саша', 'Угу', '2019-06-06', 1, 3, 1),
(4, 'Саша', 'Я пишу', '2019-06-05', 1, 3, 1),
(5, 'Не саша', 'Я реально пишу', '2019-06-01', 2, 3, 2),
(6, 'Саша', 'Я пишу', '2019-06-05', 1, 3, 1),
(7, 'Не саша', 'Я реально пишу', '2019-06-01', 2, 3, 2),
(8, 'Саша', 'Угу', '2019-06-06', 1, 3, 1),
(9, 'Саша', 'Я пишу', '2019-06-05', 1, 3, 1),
(10, 'Не саша', 'Я реально пишу', '2019-06-01', 2, 3, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `title` varchar(55) NOT NULL,
  `textmin` text NOT NULL,
  `textfull` text NOT NULL,
  `date` date NOT NULL,
  `imageurl` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id_news`, `title`, `textmin`, `textfull`, `date`, `imageurl`) VALUES
(1, 'Конкурсы поделок', '22 апреля, предметно-цикловой комиссией экономических дисциплин были проведены два конкурса.', 'В конкурсах поделок активно участвовали студенты 1 и 2 курса, а также школьники.\r\n\r\nОбучающиеся удивили своими необычными идеями и умением их осуществить. Поделки получились очень креативные и красивые.\r\n\r\n\r\nСпасибо всем студентам и школьникам, которые участвовали конкурсах поделок в рамках недели финансовой грамотности и порадовали своими творческими способностями!\r\n', '2019-05-06', 'https://lh3.googleusercontent.com/proxy/5du8LJt6IROCvXheIbcDCC73sdYQQ3HbZtIbw9h7RwCVC4NyiEd2Ef9zq3HSWzNqsCmRCnVdDtUmu2yMR0tFA8olqAbxwBq20NiEKHRVmh9qJxNs84a7gpfO3A'),
(2, 'Мероприятие ', 'В колледже прошел первый в этом году субботник. Подробности внутри!', 'Студенты колледжа участвовали почти в полном составе. Они собирали сухие ветки и листья, мыли окна. Субботник прошел весело, все время играла музыка и был слышен смех. Несмотря на то что это в первую очередь была работа, студенты получили удовольствие от совместного времяпровождения. И спустя всего лишь час территория вокруг нашего здания преобразилась. Ребята не пожалели о своем участии и с улыбкой вспоминают о субботнике.\r\n\r\n', '2019-05-06', 'https://vecherniy.kharkov.ua/i/2019/166900.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id_role` int(11) NOT NULL,
  `name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id_role`, `name`) VALUES
(1, 'Администрация'),
(2, 'Преподаватель'),
(3, 'Студент');

-- --------------------------------------------------------

--
-- Структура таблицы `specialities`
--

CREATE TABLE `specialities` (
  `id_speciality` int(11) NOT NULL,
  `name` varchar(35) NOT NULL,
  `learnperiod` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `specialities`
--

INSERT INTO `specialities` (`id_speciality`, `name`, `learnperiod`) VALUES
(1, 'Информационные системы', '4 года'),
(2, 'Земельные отношения', '4 года');

-- --------------------------------------------------------

--
-- Структура таблицы `students`
--

CREATE TABLE `students` (
  `id_student` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `id_group` int(11) NOT NULL,
  `birth` date NOT NULL,
  `number` varchar(12) NOT NULL,
  `id_role` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `students`
--

INSERT INTO `students` (`id_student`, `name`, `id_group`, `birth`, `number`, `id_role`, `id_user`, `email`, `image`) VALUES
(1, 'Попов Александр Дмитриевич', 1, '2019-05-07', '+70000000000', 3, 1, 'mrreads@yandex.com', 'https://cache.desktopnexus.com/thumbseg/983/983206-bigthumbnail.jpg'),
(2, 'Иван Иванов Иванович', 2, '2019-05-07', '+70000000000', 3, 2, 'petrov2001@mail.ru', 'https://static9.depositphotos.com/1634884/1207/v/450/depositphotos_12073170-stock-illustration-abstract-colorful-triangles-vector-background.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `subjects`
--

CREATE TABLE `subjects` (
  `id_subject` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `id_speciality` int(11) NOT NULL,
  `id_teacher` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `subjects`
--

INSERT INTO `subjects` (`id_subject`, `name`, `id_speciality`, `id_teacher`) VALUES
(1, 'Программирование', 1, 1),
(2, 'Экономика', 2, 2),
(3, 'Архитектура компьютера', 1, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `teachers`
--

CREATE TABLE `teachers` (
  `id_teacher` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `birth` date NOT NULL,
  `number` varchar(12) NOT NULL,
  `id_role` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_classroom` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `teachers`
--

INSERT INTO `teachers` (`id_teacher`, `name`, `birth`, `number`, `id_role`, `id_user`, `id_classroom`, `email`, `image`) VALUES
(1, 'Иван Иванов Иванович', '2019-05-16', '+70000000000', 2, 3, 1, 'example@mail.ru', 'https://pw.artfile.me/wallpaper/14-06-2018/650x407/3d-grafika-abstrakciya--abstract-backgro-1351337.jpg'),
(2, 'Петр Петров Петрович', '2019-05-20', '+70000000000', 2, 4, 3, 'example@mail.ru', 'https://img4.goodfon.ru/wallpaper/nbig/9/7c/uzory-tsveta-oboi.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `tutorials`
--

CREATE TABLE `tutorials` (
  `id_tutorial` int(11) NOT NULL,
  `name` varchar(35) NOT NULL,
  `author` varchar(30) NOT NULL,
  `type` varchar(15) NOT NULL,
  `id_subject` int(11) NOT NULL,
  `fileurl` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tutorials`
--

INSERT INTO `tutorials` (`id_tutorial`, `name`, `author`, `type`, `id_subject`, `fileurl`) VALUES
(1, 'Современные операционные системы', 'Эндрю Таненбаум', 'Книга', 3, ''),
(2, 'Архитектура компьютера', 'Эндрю Таненбаум', 'Книга', 3, '');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `login` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `id_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `login`, `email`, `password`, `id_role`) VALUES
(1, 'student1', 'student1@mail.ru', '123', 3),
(2, 'student2', 'student2@mail.ru', '123', 3),
(3, 'teacher1', 'teacher1@mail.ru', '123', 2),
(4, 'teacher2', 'teacher2@mail.ru', '123', 2),
(5, 'admin1', 'admin1@mail.ru', '123', 1),
(6, 'admin2', 'admin2@mail.ru', '123', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `administrations`
--
ALTER TABLE `administrations`
  ADD PRIMARY KEY (`id_administration`),
  ADD KEY `id_classroom` (`id_classroom`),
  ADD KEY `id_role` (`id_role`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `classrooms`
--
ALTER TABLE `classrooms`
  ADD PRIMARY KEY (`id_classroom`);

--
-- Индексы таблицы `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id_course`),
  ADD KEY `id_teacher` (`id_teacher`);

--
-- Индексы таблицы `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id_event`),
  ADD KEY `id_teacher` (`id_teacher`);

--
-- Индексы таблицы `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id_group`),
  ADD KEY `id_speciality` (`id_speciality`),
  ADD KEY `id_classroom` (`id_classroom`);

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id_message`),
  ADD KEY `id_group` (`id_group`,`id_role`),
  ADD KEY `id_role` (`id_role`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_role`);

--
-- Индексы таблицы `specialities`
--
ALTER TABLE `specialities`
  ADD PRIMARY KEY (`id_speciality`);

--
-- Индексы таблицы `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id_student`),
  ADD KEY `id_role` (`id_role`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_group` (`id_group`);

--
-- Индексы таблицы `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id_subject`),
  ADD KEY `id_speciality` (`id_speciality`),
  ADD KEY `id_teacher` (`id_teacher`);

--
-- Индексы таблицы `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id_teacher`),
  ADD UNIQUE KEY `id_classroom_2` (`id_classroom`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_role` (`id_role`),
  ADD KEY `id_classroom` (`id_classroom`);

--
-- Индексы таблицы `tutorials`
--
ALTER TABLE `tutorials`
  ADD PRIMARY KEY (`id_tutorial`),
  ADD KEY `id_subject` (`id_subject`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_role` (`id_role`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `administrations`
--
ALTER TABLE `administrations`
  MODIFY `id_administration` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `classrooms`
--
ALTER TABLE `classrooms`
  MODIFY `id_classroom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `courses`
--
ALTER TABLE `courses`
  MODIFY `id_course` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `events`
--
ALTER TABLE `events`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `groups`
--
ALTER TABLE `groups`
  MODIFY `id_group` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=239;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `specialities`
--
ALTER TABLE `specialities`
  MODIFY `id_speciality` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `students`
--
ALTER TABLE `students`
  MODIFY `id_student` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id_subject` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id_teacher` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `tutorials`
--
ALTER TABLE `tutorials`
  MODIFY `id_tutorial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `administrations`
--
ALTER TABLE `administrations`
  ADD CONSTRAINT `administrations_ibfk_1` FOREIGN KEY (`id_classroom`) REFERENCES `classrooms` (`id_classroom`),
  ADD CONSTRAINT `administrations_ibfk_2` FOREIGN KEY (`id_role`) REFERENCES `roles` (`id_role`),
  ADD CONSTRAINT `administrations_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Ограничения внешнего ключа таблицы `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`id_teacher`) REFERENCES `teachers` (`id_teacher`);

--
-- Ограничения внешнего ключа таблицы `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`id_teacher`) REFERENCES `teachers` (`id_teacher`);

--
-- Ограничения внешнего ключа таблицы `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `groups_ibfk_1` FOREIGN KEY (`id_speciality`) REFERENCES `specialities` (`id_speciality`),
  ADD CONSTRAINT `groups_ibfk_2` FOREIGN KEY (`id_classroom`) REFERENCES `classrooms` (`id_classroom`);

--
-- Ограничения внешнего ключа таблицы `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `roles` (`id_role`),
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`id_group`) REFERENCES `groups` (`id_group`),
  ADD CONSTRAINT `messages_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Ограничения внешнего ключа таблицы `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `roles` (`id_role`),
  ADD CONSTRAINT `students_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `students_ibfk_3` FOREIGN KEY (`id_group`) REFERENCES `groups` (`id_group`);

--
-- Ограничения внешнего ключа таблицы `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_ibfk_1` FOREIGN KEY (`id_speciality`) REFERENCES `specialities` (`id_speciality`),
  ADD CONSTRAINT `subjects_ibfk_2` FOREIGN KEY (`id_teacher`) REFERENCES `teachers` (`id_teacher`);

--
-- Ограничения внешнего ключа таблицы `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `teachers_ibfk_3` FOREIGN KEY (`id_role`) REFERENCES `roles` (`id_role`),
  ADD CONSTRAINT `teachers_ibfk_4` FOREIGN KEY (`id_classroom`) REFERENCES `classrooms` (`id_classroom`);

--
-- Ограничения внешнего ключа таблицы `tutorials`
--
ALTER TABLE `tutorials`
  ADD CONSTRAINT `tutorials_ibfk_1` FOREIGN KEY (`id_subject`) REFERENCES `subjects` (`id_subject`);

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `roles` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
