-- NIJE ZAVRSENO DO KRAJA I URADJENO DOBRO!!!


-- baza
CREATE DATABASE biblioteka CHARACTER SET utf16 COLLATE utf16_slovenian_ci;

-- kreiramo tabelu clanovi
CREATE TABLE `clanovi` (
    `id` INT PRIMARY KEY,
    `ime` VARCHAR(45) NOT NULL,
    `prezime` VARCHAR(45) NOT NULL,
    `adresa` VARCHAR(255),
    `telefon` VARCHAR(25) NOT NULL -- bolje telefon da bude varchar nego int
) ENGINE=INNODB;

-- dodavanje
INSERT INTO `clanovi` (`id`, `ime`, `prezime`, `adresa`, `telefon`)
VALUES
(1, 'Andjela', 'Nikolic', 'Narodnih heroja 39', '0692334575'),
(2, 'Pera', 'Peric', 'Neka adresa 5', '06333333'),
(3, 'Ivan', 'Spasic','Nepoznata adresa', '064444444');

-- kreiramo tabelu knjige
CREATE TABLE `knjige`  (
    `id` INT PRIMARY KEY,
    `naziv` VARCHAR(255) NOT NULL,
    `pisac` INT
) ENGINE=INNODB;

-- dodavanje
INSERT INTO `knjige` (`id`, `naziv`, `pisac_id`)
VALUES
(1, 'Naslov 1', 'Pisac 1'),
(2, 'Naslov 2', 'Pisac 2'),
(3, 'Naslov 3', 'Pisac 3');

-- kreiramo tabelu zanr
CREATE TABLE `zanr` (
    `id` INT PRIMARY KEY,
    `naziv` VARCHAR(255) NOT NULL
) ENGINE=INNODB;

-- dodavanje
INSERT INTO `zanr` (`id`, `naziv`)
VALUES
(1, 'Drama'),
(2, 'Tragedija'),
(3, 'Ljubavni');

-- kreiramo tabelu zaduzenja
CREATE TABLE `zaduzenje` (
    `id` INT PRIMARY KEY,
    `datum` DATE,
    `vratio` BOOLEAN
);

-- dodavanje
INSERT INTO `zaduzenje` (`id`, `datum`, `vratio`)
VALUES
(1, '2023-05-05', 1),
(2, '2022-01-06', 0),
(3, '2020-12-12', 1);

-- kreiramo tabelu pisac
CREATE TABLE `pisac` (
    `id` INT PRIMARY KEY,
    `ime` VARCHAR(45) NOT NULL,
    `prezime` VARCHAR(45) NOT NULL,
    `bio` TEXT,
    `god_rodj` INT(4) UNSIGNED -- bolje ovako nego YEAR, jer YEAR ne podrzava godine ispod 1901.
);

-- dodavanje
INSERT INTO `pisac` (`id`, `ime`, `prezime`, `bio`, `god_rodj`)
VALUES
(1, 'Pisac 1', 'Prezime pisca', 'Bio1', 1980),
(2, 'Pisac 2', 'Prezime pisca2', 'Bio2', 1968),
(3, 'Pisac 3', 'Prezime pisca3', 'Bio3', 1971);

-- povezivanje tabela
CREATE TABLE `knjiga_i_zanr` (
    `knjiga_id` INT NOT NULL,
    `zanr_id` INT NOT NULL,
    FOREIGN KEY (`knjiga_id`)
    REFERENCES `knjige`(`id`)
    ON DELETE CASCADE ON UPDATE CASCADE, -- kada brisem knjigu, dozvoli mi da obrisem info o zanru.
    FOREIGN KEY (`zanr_id`)
    REFERENCES `zanr`(`id`)
    ON DELETE NO ACTION ON UPDATE CASCADE -- ako se npr obrise zanr "akcija", ne zelim da izgubim infomaciju o knjigama! 
) ENGINE=InnoDB;                          -- no action brani brisanje sve dok postoji strani kljuc na taj podatak upisan u bazi


CREATE TABLE `clanovi_i_zaduzenje` (
    `clan_id` INT NOT NULL,
    `zaduzenje_id` INT NOT NULL,
    FOREIGN KEY (`clan_id`)
    REFERENCES `clanovi`(`id`)
    ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (`zaduzenje_id`)
    REFERENCES `zaduzenje`(`id`)
    ON DELETE CASCADE ON UPDATE CASCADE -- moze i: ON DELETE NO ACTION ON UPDATE CASCADE;
) ENGINE=InnoDB;

CREATE TABLE `knjige_i_pisac` (
    `knjiga_id` INT,
    `pisac_id` INT,
    FOREIGN KEY (`knjiga_id`) 
    REFERENCES`knjige`(`id`) 
    ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (`pisac_id`) 
    REFERENCES `pisac`(`id`)
     ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB;