-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema travelLocal
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema travelLocal
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `travelLocal` DEFAULT CHARACTER SET utf8 ;
USE `travelLocal` ;

-- -----------------------------------------------------
-- Table `travelLocal`.`destinations`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `travelLocal`.`destinations` (
  `ID` INT(11) NOT NULL AUTO_INCREMENT,
  `destinationName` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE INDEX `destinationName_UNIQUE` (`destinationName` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 47
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `travelLocal`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `travelLocal`.`users` (
  `ID` INT(11) NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE INDEX `username_UNIQUE` (`username` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 31
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `travelLocal`.`friendships`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `travelLocal`.`friendships` (
  `userID` INT(11) NOT NULL,
  `friendID` INT(11) NOT NULL,
  PRIMARY KEY (`userID`, `friendID`),
  INDEX `fk_friendships_users1_idx` (`userID` ASC),
  INDEX `fk_friendships_users2_idx` (`friendID` ASC),
  CONSTRAINT `fk_friendships_users1`
    FOREIGN KEY (`userID`)
    REFERENCES `travelLocal`.`users` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_friendships_users2`
    FOREIGN KEY (`friendID`)
    REFERENCES `travelLocal`.`users` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `travelLocal`.`suggestions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `travelLocal`.`suggestions` (
  `ID` INT(11) NOT NULL AUTO_INCREMENT,
  `userID` INT(11) NOT NULL,
  `destinationID` INT(11) NOT NULL,
  `suggestionName` VARCHAR(100) NOT NULL,
  `suggestionDescription` LONGTEXT NULL DEFAULT NULL,
  `photoLink` VARCHAR(2083) NULL DEFAULT NULL,
  PRIMARY KEY (`ID`),
  INDEX `fk_suggestions_users_idx` (`userID` ASC),
  INDEX `fk_suggestions_destinations1_idx` (`destinationID` ASC),
  CONSTRAINT `fk_suggestions_destinations1`
    FOREIGN KEY (`destinationID`)
    REFERENCES `travelLocal`.`destinations` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_suggestions_users`
    FOREIGN KEY (`userID`)
    REFERENCES `travelLocal`.`users` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 44
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `travelLocal`.`user_plan`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `travelLocal`.`user_plan` (
  `ID` INT(11) NOT NULL,
  `planName` VARCHAR(100) NOT NULL,
  `userID` INT(11) NOT NULL,
  PRIMARY KEY (`ID`),
  INDEX `fk_user_plan_users1_idx` (`userID` ASC),
  CONSTRAINT `fk_user_plan_users1`
    FOREIGN KEY (`userID`)
    REFERENCES `travelLocal`.`users` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `travelLocal`.`plans_suggestions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `travelLocal`.`plans_suggestions` (
  `planID` INT(11) NOT NULL,
  `suggestionID` INT(11) NOT NULL,
  PRIMARY KEY (`planID`, `suggestionID`),
  INDEX `fk_plans_suggestions_user_plan1_idx` (`planID` ASC),
  INDEX `fk_plans_suggestions_suggestions1_idx` (`suggestionID` ASC),
  CONSTRAINT `fk_plans_suggestions_suggestions1`
    FOREIGN KEY (`suggestionID`)
    REFERENCES `travelLocal`.`suggestions` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_plans_suggestions_user_plan1`
    FOREIGN KEY (`planID`)
    REFERENCES `travelLocal`.`user_plan` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;