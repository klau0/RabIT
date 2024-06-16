CREATE DATABASE IF NOT EXISTS ads;

CREATE TABLE `advertisements` (
  `id` int NOT NULL,
  `userid` int DEFAULT NULL,
  `title` text
);

INSERT INTO `advertisements` (`id`, `userid`, `title`) VALUES
(1, 1, 'I\'m looking for someone who will look after my corgi dogs after I leave the palace for a week in July. If you have experience with corgis, contact me and we can talk about the details.'),
(2, 2, 'I broke my wand again so I\'m in dire need of a new one. If someone could lend me theirs for a few classes I would buy them chocolate frogs.'),
(3, 3, 'My precious is GONE. If you find it I can offer some slimy fish in exchange.'),
(4, 6, 'I\'m looking for skilled dancers for my next tour. Email my manager if you\'re interested.'),
(5, 7, 'Professional monster hunter needs some coin. Find me at the local pub to talk business.');

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` text
);

INSERT INTO `users` (`id`, `name`) VALUES
(1, 'Queen Elizabeth II'),
(2, 'Ron Weasley'),
(3, 'Gollum'),
(4, 'Din Djarin'),
(5, 'Luke Skywalker'),
(6, 'Rihanna'),
(7, 'Geralt of Rivia'),
(8, 'Doctor House');

ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `advertisements_id_fk` (`userid`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `advertisements`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

ALTER TABLE `advertisements`
  ADD CONSTRAINT `advertisements_id_fk` FOREIGN KEY (`userid`) REFERENCES `users` (`id`) ON DELETE SET NULL;
