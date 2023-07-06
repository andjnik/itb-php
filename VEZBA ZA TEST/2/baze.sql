CREATE DATABASE `skola` CHARACTER SET utf16 COLLATE utf16_slovenian_ci;

CREATE TABLE `studenti` (
    `ime` VARCHAR(50) NOT NULL,
    `prezime` VARCHAR(50) NOT NULL,
    `godine` INT NOT NULL,
    `ocene` DECIMAL (3, 2)
);

CREATE TABLE `customers` (
    `id` INT PRIMARY KEY,
    `name` VARCHAR(20) NOT NULL,
    `age` TINYINT NOT NULL,
    `address` CHAR(25),
    `salary` DECIMAL(18, 2) DEFAULT 500
) ENGINE=INNODB;

ALTER TABLE `customers`
ADD `active` BOOLEAN;

ALTER TABLE `customers`
ADD `state` VARCHAR(90);

ALTER TABLE `customers`
ADD `number_of_visitis` TINYINT;

INSERT INTO `customers` (`id`, `name`, `age`, `address`, `salary`)
VALUES
(1, 'Andjela', 27, 'blabla', 1000),
(1, 'Andjela', 27, 'blabla', 1000),
(1, 'Andjela', 27, 'blabla', 1000);

SELECT *
FROM `customers`;

SELECT `name`, `age`, `address`
FROM `customers`;

SELECT DISTINCT `state`, `salary`
FROM `customers`;

SELECT DISTINCT `status`, `priority`
FROM `tasks`;

SELECT *
FROM `customers`
WHERE `state` = 'Srbija';

SELECT *
FROM `customers`
WHERE `salary` <= 500;

SELECT *
FROM `customers`
WHERE `salary` BETWEEN 300 AND 800;

SELECT *
FROM `customers`
WHERE `state`IN ('Srbija', 'Rumunija', 'Bugarska');

SELECT *
FROM `customers`
WHERE `state` LIKE 'S%';

SELECT *
FROM `customers`
WHERE `state` = 'Srbija'
AND `salary` = 600;

SELECT COUNT(*) AS 'BrojRadnika'
FROM `customers`;

SELECT MIN(`salary`) AS 'MinimalnaPlata'
FROM `customers`;

SELECT MAX(`salary`) AS 'MaksimalnaPlata'
FROM `customers`;

SELECT SUM(`salary`) AS 'UkupnaPlata',
FROM `customers`;

SELECT AVG(`salary`) AS 'ProsecnaPlata',
FROM `customers`;

