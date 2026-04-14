-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema ProjetoPHP
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema ProjetoPHP
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `ProjetoPHP` DEFAULT CHARACTER SET utf8 ;
USE `ProjetoPHP` ;

-- -----------------------------------------------------
-- Table `ProjetoPHP`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ProjetoPHP`.`usuarios` (
  `iduser` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `senha` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`iduser`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ProjetoPHP`.`categorias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ProjetoPHP`.`categorias` (
  `idcate` INT NOT NULL AUTO_INCREMENT,
  `nome_cat` VARCHAR(255) NOT NULL,
  `categoriascol` VARCHAR(45) NULL,
  PRIMARY KEY (`idcate`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ProjetoPHP`.`Produtos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ProjetoPHP`.`Produtos` (
  `idProdutos` INT NOT NULL AUTO_INCREMENT,
  `nome_prod` VARCHAR(255) NOT NULL,
  `valor` DECIMAL(8,2) NOT NULL,
  `estoque` INT NOT NULL,
  `categorias_idcate` INT NOT NULL,
  PRIMARY KEY (`idProdutos`),
  INDEX `fk_Produtos_categorias_idx` (`categorias_idcate` ASC),
  CONSTRAINT `fk_Produtos_categorias`
    FOREIGN KEY (`categorias_idcate`)
    REFERENCES `ProjetoPHP`.`categorias` (`idcate`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
