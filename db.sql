-- MySQL Script generated by MySQL Workbench
-- Wed May 11 18:43:44 2022
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema druk
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema druk
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `druk` DEFAULT CHARACTER SET utf8 ;
USE `druk` ;

-- -----------------------------------------------------
-- Table `druk`.`funkcje`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `druk`.`funkcje` ;

CREATE TABLE IF NOT EXISTS `druk`.`funkcje` (
  `id_funkcje` INT NOT NULL AUTO_INCREMENT,
  `wifi` VARCHAR(5) NULL,
  `lan` VARCHAR(5) NULL,
  `fax` VARCHAR(5) NULL,
  `nfc` VARCHAR(5) NULL,
  `adf` VARCHAR(5) NULL,
  `duplex` VARCHAR(5) NULL,
  `skan_dwustr` VARCHAR(5) NULL,
  `a3` VARCHAR(5) NULL,
  PRIMARY KEY (`id_funkcje`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `druk`.`uwagi`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `druk`.`uwagi` ;

CREATE TABLE IF NOT EXISTS `druk`.`uwagi` (
  `id_uwagi` INT NOT NULL AUTO_INCREMENT,
  `uwagi` VARCHAR(100) NULL,
  PRIMARY KEY (`id_uwagi`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `druk`.`rodzaj`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `druk`.`rodzaj` ;

CREATE TABLE IF NOT EXISTS `druk`.`rodzaj` (
  `id_rodzaj` INT NOT NULL AUTO_INCREMENT,
  `rodzaj` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id_rodzaj`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `druk`.`cena`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `druk`.`cena` ;

CREATE TABLE IF NOT EXISTS `druk`.`cena` (
  `id_cena` INT NOT NULL AUTO_INCREMENT,
  `cena_drukarki` VARCHAR(10) NULL,
  `cenacol` VARCHAR(45) NULL,
  PRIMARY KEY (`id_cena`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `druk`.`drukarki`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `druk`.`drukarki` ;

CREATE TABLE IF NOT EXISTS `druk`.`drukarki` (
  `id_drukarki` INT NOT NULL AUTO_INCREMENT,
  `model` VARCHAR(80) NOT NULL,
  `funkcje_id_funkcje` INT NOT NULL,
  `uwagi_id_uwagi` INT NOT NULL,
  `rodzaj_id_rodzaj` INT NOT NULL,
  `cena_id_cena` INT NOT NULL,
  PRIMARY KEY (`id_drukarki`),
  INDEX `fk_drukarki_funkcje1_idx` (`funkcje_id_funkcje` ASC),
  UNIQUE INDEX `model_UNIQUE` (`model` ASC),
  INDEX `fk_drukarki_uwagi1_idx` (`uwagi_id_uwagi` ASC),
  INDEX `fk_drukarki_rodzaj1_idx` (`rodzaj_id_rodzaj` ASC),
  INDEX `fk_drukarki_cena1_idx` (`cena_id_cena` ASC),
  CONSTRAINT `fk_drukarki_funkcje1`
    FOREIGN KEY (`funkcje_id_funkcje`)
    REFERENCES `druk`.`funkcje` (`id_funkcje`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_drukarki_uwagi1`
    FOREIGN KEY (`uwagi_id_uwagi`)
    REFERENCES `druk`.`uwagi` (`id_uwagi`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_drukarki_rodzaj1`
    FOREIGN KEY (`rodzaj_id_rodzaj`)
    REFERENCES `druk`.`rodzaj` (`id_rodzaj`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_drukarki_cena1`
    FOREIGN KEY (`cena_id_cena`)
    REFERENCES `druk`.`cena` (`id_cena`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;