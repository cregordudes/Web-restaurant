-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 19 2022 г., 22:43
-- Версия сервера: 8.0.19
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `restaurant`
--

-- --------------------------------------------------------

--
-- Структура таблицы `catalog`
--

CREATE TABLE `catalog` (
  `id` int NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `image` text NOT NULL,
  `price` int NOT NULL,
  `category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `catalog`
--

INSERT INTO `catalog` (`id`, `product_name`, `image`, `price`, `category`) VALUES
(1, 'Pepperoni', 'pepperoni.jpg', 95, '1'),
(2, '5 Cheese', '5_cheese.jpg', 95, '1'),
(3, 'Classic', 'classic.jpg', 95, '1'),
(4, 'Vegan', 'vegan.jpg', 85, '1'),
(5, 'Affumicata', 'affumicata.jpg', 95, '1'),
(6, 'Barbeque', 'barbeque.jpg', 85, '1'),
(7, 'Prosciutto', 'prosciutto.jpg', 105, '1'),
(8, 'Mario', 'mario.jpg', 90, '1'),
(9, 'Tonno', 'tonno.jpg', 95, '1'),
(10, 'Diablo', 'diablo.jpg', 90, '1'),
(11, 'Американский бургер', 'american.jpg', 55, '2'),
(12, 'Блю чизбургер', 'blueburger.jpg', 75, '2'),
(13, 'Куриный бургер', 'chicken.jpg', 70, '2'),
(14, 'Классический чизбургер', 'classicburger.jpg', 65, '2'),
(15, 'Фалафель бургер', 'veganburger.jpg', 65, '2'),
(16, 'Бургер из ягненка', 'lamb.jpg', 75, '2'),
(17, 'Грибной бургер', 'mushroom.jpg', 65, '2'),
(18, 'Red hot chilli Бургер', 'redhot.jpg', 85, '2'),
(19, 'Говяжий бургер', 'beefburger.jpg', 95, '2'),
(20, 'Морской бургер', 'marine.jpg', 85, '2'),
(21, 'Fingers', 'fingers.jpg', 80, '3'),
(22, 'Nuggets', 'nuggets.jpg', 80, '3'),
(23, 'Chicken wings', 'wings.jpg', 80, '3'),
(24, 'Potato fest', 'potato_fest.jpg', 45, '3'),
(25, 'Potato balls', 'potato_balls.jpg', 35, '3'),
(26, 'French fries', 'fries.jpg', 35, '3'),
(27, 'Spring rolls', 'spring_rolls.jpg', 75, '3'),
(28, 'Chiken Rolls', 'chiken_rolls.jpg', 75, '3'),
(29, 'Nachos', 'nachos.jpg', 50, '3'),
(30, 'Сrispy Fish', 'fish.jpg', 50, '3'),
(31, 'Creme Brulee Cheescake', 'cremebrulee.jpg', 50, '4'),
(32, 'Cheesecake salty caramel', 'salty.jpg', 50, '4'),
(33, 'Торт \"Захер\"', 'zaher.jpg', 50, '4'),
(34, 'Чизкейк', 'cheescake.jpg', 50, '4'),
(35, 'Fondant', 'fondant.jpg', 50, '4'),
(36, 'Тирамису', 'tiramisu.jpg', 50, '4'),
(37, 'Profiterolies', 'profiterolies.jpg', 45, '4'),
(38, 'Черри мания', 'cherry.jpg', 50, '4'),
(39, 'Мистер Нико', 'niko.jpg', 50, '4'),
(40, 'Фруктовый салат', 'salad.jpg', 50, '4'),
(41, 'Vitamin Drink', 'vitamin.jpg', 40, '5'),
(42, 'Lemonade', 'lemonade.jpg', 40, '5'),
(43, 'Orangade', 'orangade.jpg', 40, '5'),
(44, 'Фреш \"Апельсин\"', 'fresh.jpg', 40, '5'),
(45, 'Pepsi Cherry', 'pepsi.jpg', 40, '5'),
(46, 'Mojito alc', 'mohito.jpg', 40, '5'),
(47, 'Mojito zero', 'mohito.jpg', 40, '5'),
(48, 'Латте классик', 'latte.jpg', 40, '5'),
(49, 'Coffee Frappe', 'frappe.jpg', 40, '5'),
(50, 'Ванильный Милкшейк', 'shake.jpg', 40, '5'),
(54, 'Отсутствует', 'Отсутствует', 0, '6');

-- --------------------------------------------------------

--
-- Структура таблицы `detail`
--

CREATE TABLE `detail` (
  `id_product` int NOT NULL,
  `info` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `weight` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `detail`
--

INSERT INTO `detail` (`id_product`, `info`, `weight`) VALUES
(1, 'Пицца острая с пеперони.', 475),
(2, 'Тесто, мусс с крем - сыром и сливками, сыр пармезан, специи, сыр Моцарелла, сыр Бри, сыр Дор Блю.', 520),
(3, 'Пицца с ветчиной, грибами и маслинами.', 510),
(4, 'Фокачча с помидорами, рукколой и оливками Kalamata.', 480),
(5, 'Тесто, соус томатный, соус BBQ, соус Табаско, базилик, сыр Моцарелла, мясо куриное копченное, бекон, говяжьи тефтельки, колбаски Кабанос, паприка копченная.', 570),
(6, 'Пицца с соусом барбекю, курицей и пеперони.', 460),
(7, 'Пицца с прошутто, Пармезаном, рукколой и Моцареллой.', 520),
(8, 'Пицца с курицей, колбасками Кабанос, гогошарами и Дор Блю.', 520),
(9, 'Моцарелла, тунец, маринованный лук.', 480),
(10, 'Кабанос , острова, салями, маринованные гогошары, свежии грибы, оливки, острый перец , сыр', 520),
(11, 'Булочка Бриошь, котлета из выдержанной говядины, помидоры, корнишоны, красный лук, айсберг, фирменный соус', 300),
(12, 'Булочка Бриошь, котлета из выдержанной говядины, бекон, сыр Дорблю, помидоры, корнишоны, айсберг, луковый мармелад, фирменный соус, руккола.', 300),
(13, 'Булочка Бриошь, куриное филе, Американский Чеддер, помидоры, огурец, красный лук, руккола, соус Винегар', 350),
(14, 'Булочка Бриошь, Котлета из выдержанной говядины, Американский Чеддер, Помидоры, Корнишоны, Красный лук, Айсберг', 330),
(15, 'Булочка Бриошь, Фалафель, Помидоры, Красный лук, Корнишоны, Соус Шрирача Майо, Фирменный соус', 330),
(16, 'Булочка бриошь, котлета из баранины, сливочный соус, салат айсберг, помидор, маринованый огурец, красный лук, кинза, мята', 300),
(17, 'Булочка Бриошь, Котлета из выдержанной говядины, Американский Чеддер, Помидоры, Корнишоны, Грибы демиглас, Айсберг, Луковый мармелад, Фирменный соус', 300),
(18, 'Булочка Бриошь, Котлета из выдержанной говядины, Вяленые помидоры, Помидоры, Перец чили, Красный лук, Айсберг, Кетчуп, Соус Шрирача Майо', 330),
(19, 'Булочка Бриошь, Стейк Нью Йорк, Американский Чеддер, Вяленые помидоры, Красный лук, Луковый мармелад, Айсберг, Фирменный соус', 310),
(20, 'Булочка, Стейк из сёмги, Медово-горчичный соус, Огурец, Помидоры, Салат Айсберг,красный лук', 350),
(21, 'Куриное филе в хрустящей панировке с картофелем фри.', 230),
(22, 'Куриные наггетсы с картофелем фри.', 260),
(23, 'Куриные крылышки с картофелем фри.', 280),
(24, 'Картофельное ассорти, кетчуп.', 250),
(25, 'Potato balls', 250),
(26, 'Картофель фри, кетчуп.', 270),
(27, 'Нежное тесто обжаренное с начинкой с сыром Фета и шпинатом,соус дзадзики.', 220),
(28, 'Нежное тесто обжаренное с мясной начинкой,соус дзадзики, картошка фри.', 220),
(29, 'Кукурузные треугольники, закуска сырно- шпинатная со сметаной и сливками,соус Чили', 270),
(30, 'Корюшка в панировке с картофелем фри, кетчуп.', 250),
(31, 'Чизкейк, смородиновый сорбет, ягоды смородины, соус смородиновый, крамбл, мята.', 150),
(32, 'Восхитительный десерт с нежным и легким вкусом на основе мягких сливочных сыров с маком.', 150),
(33, 'Шоколадный бисквит, миндальная паста, бельгийский шоколад Ganas,  вишневый мармелад.', 150),
(34, 'Изумительный легкий десерт с нежным вкусом. Приготовлен на основе мягких сливочных сыров, подается с вишней.', 150),
(35, 'Тёплый шоколадный бисквит . Подается  с соусом и ванильным мороженым.', 100),
(36, 'Классический итальянский десерт на основе сливок, сыра и ликера Amaretto. С воздушным печеньем савоярди, пропитанным кофе. ', 120),
(37, 'Профитроли с заварным кремом и сезонными ягодами.', 120),
(38, 'Вишневое мороженое с легкой кислинкой, с хрустящим печеньем, вишней Амаретто, шоколадной стружкой и вишневым соусом.', 180),
(39, 'Мороженое Mister Нико, шоколадный соус, арахис, шоколадный Macaron, Snickers.', 180),
(40, 'Киви, бананы, апельсины, персики, ананас. Подается со взбитыми сливками и сиропом \"Гренадин\".', 180),
(41, 'Пюре облепихи, травяной чай, мёд, сахарный сироп, палочка корицы.', 220),
(42, 'Свежий Лимонад', 420),
(43, 'Свежий Оранжад', 420),
(44, 'Свежий апельсиновый сок', 220),
(45, 'Пепси-Колла с вишневой добавкой', 220),
(46, 'Мохито', 220),
(47, 'Мохито без алкоголя', 220),
(48, 'Классическое латте', 220),
(49, 'Двойной эспрессо, молоко, ванильное мороженое, соус шоколадный, сливки спрей, шоколадная стружка, лёд', 220),
(50, 'Сливочное мороженое и молоко', 220);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id_order` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `date` datetime NOT NULL,
  `status` int DEFAULT NULL,
  `order_info` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id_order`, `user_id`, `date`, `status`, `order_info`, `price`) VALUES
(1, 1, '2021-11-19 22:01:26', 1, 'Pepperoni, Potato fest, Pepsi Cherry', 180),
(2, 1, '2021-11-20 08:06:54', 1, 'Barbeque, Классический чизбургер, Nachos, Тирамису', 250),
(4, 3, '2021-11-21 12:08:41', 1, 'Diablo, Red hot chilli Бургер, Potato balls, Черри мания', 260),
(11, 1, '2015-12-21 09:21:49', 1, '5 Cheese, Classic', 190),
(12, 1, '2015-12-21 09:28:32', 1, 'Pepperoni, 5 Cheese, Classic', 285),
(16, 1, '2015-12-21 10:07:22', 1, ' Pepperoni', 95),
(17, 3, '2015-12-21 10:08:32', 1, ' Vegan, Блю чизбургер, Lemonade', 200),
(19, 1, '2018-12-21 07:52:21', 0, ' Classic, Куриный бургер, French fries, Тирамису, Pepsi Cherry', 290),
(20, 1, '2021-12-18 19:55:29', 0, ' Barbeque, Фреш ', 125),
(21, 3, '2021-12-18 23:32:24', 0, ' Бургер из ягненка, Coffee Frappe', 115),
(22, 3, '2021-12-20 15:05:57', 0, ' Pepperoni, Nuggets, Cheesecake salty caramel, Латте классик', 265);

-- --------------------------------------------------------

--
-- Структура таблицы `requests`
--

CREATE TABLE `requests` (
  `id` int NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `phone` varchar(30) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `requests`
--

INSERT INTO `requests` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'Егор', 'test@mail.ru', '+37322869420', 'Хочу пиццу'),
(2, 'Сергей', 'sladk@mail.com', '+7902312903', 'Здравствуйте, приехал по адресу - а ресторана то вашего нет!'),
(3, 'Adsad', 'dasd@mail.ru', '+332838232', 'Тест'),
(4, 'Запрос', 'email@mail.ru', '23123123123', 'Test ex'),
(5, 'Егор', 'cregordudes@gmail.com', '060328922', 'Здравствуйте, как до Вас добраться? ');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(30) NOT NULL,
  `password` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `phone` varchar(30) NOT NULL,
  `adress` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `name`, `email`, `phone`, `adress`) VALUES
(1, 'admin', '1234', 'Егор', 'admin@mail.ru', '1231241', 'admin'),
(3, 'vadim4ik', 'b59c67bf196a4758191e42f76670ceba', 'Vadim', 'vladilen@mail.ru', '+37369425930', 'Butucului 3'),
(4, 'lena420', 'b59c67bf196a4758191e42f76670ceba', 'Elena', 'elena@mail.ru', '+37369425930', 'Stefan Cel Mare 129/1'),
(7, 'user', 'b59c67bf196a4758191e42f76670ceba', 'Егор', 'egor@mail.ru', '+3736042069', 'Studentilor 16'),
(9, 'anatol', '81dc9bdb52d04dc20036dbd8313ed055', 'Anatolii', 'anatol@email.com', '+37360366124', 'Butucului 155');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id_product`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `Orders_fk0` (`user_id`);

--
-- Индексы таблицы `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `detail`
--
ALTER TABLE `detail`
  ADD CONSTRAINT `Detail_fk0` FOREIGN KEY (`id_product`) REFERENCES `catalog` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `Orders_fk0` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
