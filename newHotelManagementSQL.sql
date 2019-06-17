-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`halls`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`halls` (
  `hallID` INT(11) NOT NULL AUTO_INCREMENT,
  `hallName` VARCHAR(45) NULL DEFAULT NULL,
  `hallAvailibility` VARCHAR(45) NULL DEFAULT NULL,
  `hallPrice` INT(11) NULL DEFAULT NULL,
  `time` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`hallID`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`user` (
  `CNIC` INT(11) NOT NULL,
  `user_name` VARCHAR(45) NULL DEFAULT NULL,
  `phone_no` VARCHAR(45) NULL DEFAULT NULL,
  `email` VARCHAR(45) NULL DEFAULT NULL,
  `address` VARCHAR(45) NULL DEFAULT NULL,
  `country` VARCHAR(45) NULL DEFAULT NULL,
  `DOB` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`CNIC`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`receptionist`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`receptionist` (
  `receptionistID` INT(11) NOT NULL AUTO_INCREMENT,
  `receptionistSalary` VARCHAR(45) NULL DEFAULT NULL,
  `receptionistPassword` VARCHAR(45) NULL DEFAULT NULL,
  `user_CNIC` INT(11) NOT NULL,
  PRIMARY KEY (`receptionistID`),
  INDEX `fk_receptionist_user1_idx` (`user_CNIC` ASC) ,
  CONSTRAINT `fk_receptionist_user1`
    FOREIGN KEY (`user_CNIC`)
    REFERENCES `mydb`.`user` (`CNIC`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`roomtype`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`roomtype` (
  `roomTypeID` INT(11) NOT NULL AUTO_INCREMENT,
  `room_price` INT(11) NULL DEFAULT NULL,
  `roomDetails` VARCHAR(45) NULL DEFAULT NULL,
  `rommTypeName` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`roomTypeID`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`room`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`room` (
  `roomID` INT(11) NOT NULL AUTO_INCREMENT,
  `roomAvailibility` VARCHAR(45) NULL DEFAULT NULL,
  `roomType_roomTypeID` INT(11) NOT NULL,
  PRIMARY KEY (`roomID`),
  INDEX `fk_room_roomType1_idx` (`roomType_roomTypeID` ASC) ,
  CONSTRAINT `fk_room_roomType1`
    FOREIGN KEY (`roomType_roomTypeID`)
    REFERENCES `mydb`.`roomtype` (`roomTypeID`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`guest`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`guest` (
  `guestID` INT(11) NOT NULL AUTO_INCREMENT,
  `room_roomID` INT(11) NULL DEFAULT NULL,
  `halls_hallID` INT(11) NULL DEFAULT NULL,
  `receptionist_receptionistID` INT(11) NOT NULL,
  `guest_status` VARCHAR(45) NULL DEFAULT NULL,
  `user_CNIC` INT(11) NOT NULL,
  PRIMARY KEY (`guestID`),
  INDEX `fk_guest_room1_idx` (`room_roomID` ASC) ,
  INDEX `fk_guest_halls1_idx` (`halls_hallID` ASC) ,
  INDEX `fk_guest_receptionist1_idx` (`receptionist_receptionistID` ASC) ,
  INDEX `fk_guest_user1_idx` (`user_CNIC` ASC) ,
  CONSTRAINT `fk_guest_halls1`
    FOREIGN KEY (`halls_hallID`)
    REFERENCES `mydb`.`halls` (`hallID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_guest_receptionist1`
    FOREIGN KEY (`receptionist_receptionistID`)
    REFERENCES `mydb`.`receptionist` (`receptionistID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_guest_room1`
    FOREIGN KEY (`room_roomID`)
    REFERENCES `mydb`.`room` (`roomID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_guest_user1`
    FOREIGN KEY (`user_CNIC`)
    REFERENCES `mydb`.`user` (`CNIC`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`manager`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`manager` (
  `managerID` INT(11) NOT NULL AUTO_INCREMENT,
  `ManagerPassword` VARCHAR(45) NULL DEFAULT NULL,
  `managerSalary` VARCHAR(45) NULL DEFAULT NULL,
  `user_CNIC` INT(11) NOT NULL,
  PRIMARY KEY (`managerID`),
  INDEX `fk_manager_user1_idx` (`user_CNIC` ASC) ,
  CONSTRAINT `fk_manager_user1`
    FOREIGN KEY (`user_CNIC`)
    REFERENCES `mydb`.`user` (`CNIC`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`restaurant`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`restaurant` (
  `food_id` INT(11) NOT NULL AUTO_INCREMENT,
  `foodName` VARCHAR(45) NULL DEFAULT NULL,
  `foodPrice` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`food_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`order`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`order` (
  `guest_guestID` INT(11) NOT NULL,
  `restaurant_food_id` INT(11) NOT NULL,
  PRIMARY KEY (`guest_guestID`, `restaurant_food_id`),
  INDEX `fk_guest_has_restaurant_restaurant1_idx` (`restaurant_food_id` ASC) ,
  INDEX `fk_guest_has_restaurant_guest1_idx` (`guest_guestID` ASC) ,
  CONSTRAINT `fk_guest_has_restaurant_guest1`
    FOREIGN KEY (`guest_guestID`)
    REFERENCES `mydb`.`guest` (`guestID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_guest_has_restaurant_restaurant1`
    FOREIGN KEY (`restaurant_food_id`)
    REFERENCES `mydb`.`restaurant` (`food_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`parking`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`parking` (
  `parkingID` INT(11) NOT NULL AUTO_INCREMENT,
  `VehicleNmae` VARCHAR(45) NULL DEFAULT NULL,
  `VehicleNumber` VARCHAR(45) NULL DEFAULT NULL,
  `guest_guestID` INT(11) NOT NULL,
  PRIMARY KEY (`parkingID`),
  INDEX `fk_parking_guest1_idx` (`guest_guestID` ASC) ,
  CONSTRAINT `fk_parking_guest1`
    FOREIGN KEY (`guest_guestID`)
    REFERENCES `mydb`.`guest` (`guestID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`payment`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`payment` (
  `paymentID` INT(11) NOT NULL AUTO_INCREMENT,
  `totalPrice` INT(11) NULL DEFAULT NULL,
  `guest_guestID` INT(11) NOT NULL,
  PRIMARY KEY (`paymentID`),
  INDEX `fk_payment_guest1_idx` (`guest_guestID` ASC) ,
  CONSTRAINT `fk_payment_guest1`
    FOREIGN KEY (`guest_guestID`)
    REFERENCES `mydb`.`guest` (`guestID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
