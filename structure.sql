--
-- structure.sql - Create Webflix Database Structure
-- Manualy created
--


-- CREATE Schema
CREATE SCHEMA IF NOT EXISTS `webflix` DEFAULT CHARACTER SET utf8 ;
USE `webflix` ;


-- CREATE the 'category(ies)' table
CREATE TABLE IF NOT EXISTS `webflix`.`category` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255),
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;


-- CREATE the 'movie(s)' table
CREATE TABLE IF NOT EXISTS `webflix`.`movie` (
    `id` INT NOT NULL AUTO_INCREMENT,
    CONSTRAINT `fk_category`
         FOREIGN KEY (`category`)
         REFERENCES `webflix`.`category`(`id`)
         ON DELETE NO ACTION
         ON UPDATE NO ACTION,
    `title` VARCHAR(255),
    `description` VARCHAR(255),
    `video_link` VARCHAR(255),
    `cover` VARCHAR(255),
    `release_at` DATE,
    `category` INT,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;


-- CREATE the 'user(s)' table
CREATE TABLE IF NOT EXISTS `webflix`.`user` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `username` VARCHAR(255),
    `email` VARCHAR(255),
    `password` VARCHAR(255),
    `token` VARCHAR(255),
    `token_expiration` TIMESTAMP,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;