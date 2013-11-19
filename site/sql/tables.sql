CREATE TABLE `user` (
    `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    `username` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `joindate` DATETIME NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE INDEX `id` (`id`),
    UNIQUE INDEX `username` (`username`),
    INDEX `email` (`email`)
)
ENGINE=InnoDB;

CREATE TABLE `collection` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` BIGINT(20) UNSIGNED NOT NULL,
  `name` VARCHAR(255) NOT NULL,
  `createdOn` DATETIME NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `name` (`name` ASC),
  INDEX `user_id` (`user_id` ASC),
  CONSTRAINT `fk_collection_user_id`
    FOREIGN KEY (`user_id`)
    REFERENCES `user` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
)
ENGINE = InnoDB;

CREATE TABLE `itemType` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `typeName` VARCHAR(255) NOT NULL,
  `description` TEXT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `typeName` (`typeName` ASC)
)
ENGINE = InnoDB;

CREATE TABLE `item` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `itemType_id` BIGINT(20) UNSIGNED NOT NULL,
  `imagePath` VARCHAR(255) NOT NULL,
  `imageName` VARCHAR(255) NOT NULL,
  `imageType` VARCHAR(255) NOT NULL,
  `imageSize` BIGINT(20) NOT NULL,
  `addedOn` DATETIME NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `imageLocation` (`imagePath` ASC, `imageName` ASC),
  INDEX `imagePath` (`imagePath` ASC),
  INDEX `imageName` (`imageName` ASC),
  INDEX `fk_item_itemType_id_idx` (`itemType_id` ASC),
  CONSTRAINT `fk_item_itemType_id`
    FOREIGN KEY (`itemType_id`)
    REFERENCES `itemType` (`id`)
    ON UPDATE CASCADE
)
ENGINE = InnoDB;

CREATE TABLE `collection_item` (
  `collection_id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `item_id` BIGINT(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`collection_id`, `item_id`),
  INDEX `fk_collection_item_Item_id_idx` (`item_id` ASC),
  CONSTRAINT `fk_collection_item_Item_id`
    FOREIGN KEY (`item_id`)
    REFERENCES `item` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_collection_item_collection_id`
    FOREIGN KEY (`collection_id`)
    REFERENCES `collection` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
)
ENGINE = InnoDB;

CREATE TABLE `movie` (
  `item_id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(255) NULL,
  `year` CHAR(4) NULL,
  `genre` VARCHAR(255) NULL,
  `description` TEXT NULL,
  `filePath` VARCHAR(255) NULL,
  `filename` VARCHAR(255) NULL,
  `fileType` VARCHAR(255) NULL,
  `fileSize` BIGINT(20) NULL,
  PRIMARY KEY (`item_id`),
  CONSTRAINT `fk_movie_item_id`
    FOREIGN KEY (`item_id`)
    REFERENCES `item` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
)
ENGINE = InnoDB;
