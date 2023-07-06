-- Kreirati bazu store.
CREATE DATABASE `store` CHARACTER SET utf16 COLLATE utf16_slovenian_ci;

-- Kreirati sledeće tabele u bazi (skraćenica PK znači Primary Key, dok skraćenica FK znači Foreign Key):
-- Tabela categories (id int PK, category_name varchar(170) not null, description CHAR(200))
CREATE TABLE `categories`(
    `id` INT PRIMARY KEY,
    `category_name` VARCHAR(170) NOT NULL,
    `description` CHAR(200)
) ENGINE=INNODB;

-- Tabela products (id int PK, product_name, varchar(200) not null, price decimal(10,2), default 0)
CREATE TABLE `products` (
    `id` INT PRIMARY KEY,
    `product_name` VARCHAR(200) NOT NULL,
    `price` DECIMAL(10,2) DEFAULT 0    
) ENGINE=INNODB;

-- Tabela product_categories (id int PK, id_product int FK, id_category int FK)
CREATE TABLE `product_categories` (
    `id` INT PRIMARY KEY,
    `id_product` INT,
    `id_category` INT,
    FOREIGN KEY (`id_product`)
    REFERENCES `products`(`id`),
    FOREIGN KEY (`id_category`)
    REFERENCES `categories`(`id`)
);

-- Uneti po nekoliko redova u svaku tabelu.
INSERT INTO `categories` (`id`, `category_name`, `description`)
VALUES
(1, 'Fruit', 'Description1'),
(2, 'Vegetables', 'Description2'),
(3, 'Dairy products', 'Description3');

INSERT INTO `products` (`id`, `product_name`, `price`)
VALUES
(1, 'Strawberries', 190.90),
(2, 'Tomatoes', 80.50),
(3, 'Milk', 160.99);

INSERT INTO `product_categories` (`id`, `id_product`, `id_category`)
VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 2);

-- Odrediti sve različite kategorije proizvoda sortirane po nazivu kategorije.
SELECT DISTINCT `category_name`
FROM `categories`
ORDER BY `category_name`;

-- Odrediti sve proizvode čija je cena veća od prosečne cene svih proizvoda.
SELECT *
FROM `products`
WHERE `price` > (SELECT AVG(`price`) FROM `products`);

-- Odrediti najskuplji proizvod iz kategorije 'Garden';
SELECT *
FROM `products`
WHERE `category_name` = 'Garden'
ORDER BY `price` DESC
LIMIT 1;