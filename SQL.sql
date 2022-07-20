
CREATE SCHEMA IF NOT EXISTS `db_pro`;

CREATE TABLE IF NOT EXISTS `db_pro`.`user` 
( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `name` VARCHAR(100) NOT NULL , 
    `email` VARCHAR(255) NOT NULL ,
    `is_admin` INT NOT NULL DEFAULT '0', 
    `password` VARCHAR(255) NOT NULL , 
    PRIMARY KEY (`id`)
) ENGINE = InnoDB; 

CREATE TABLE `db_pro`.`about_us` 
( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `description` TEXT NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB; 

CREATE TABLE `db_pro`.`our_services` 
( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `icon` VARCHAR(40) NOT NULL ,
    `color` ENUM("danger","secundary","green") NOT NULL,
    `service` VARCHAR(100) NOT NULL , 
    `description` TEXT NOT NULL,
    PRIMARY KEY (`id`) 
) ENGINE = InnoDB; 

CREATE TABLE `db_pro`.`contact` 
( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `name` VARCHAR(100) NOT NULL , 
    `email` VARCHAR(255) NOT NULL , 
    `phone` VARCHAR(20) NOT NULL , 
    `subject` VARCHAR(100) NOT NULL , 
    `message` TEXT NOT NULL , PRIMARY KEY (`id`)
) ENGINE = InnoDB; 


-- INSERT DATA IN TABLE ABOUT_US
INSERT INTO `about_us` 
(`id`, `description`) VALUES 
(NULL, 'Step For PRO é uma empresa dolor sit amet consectetur adipisicing elit. 
Fugiat minus ex est dignissimos corporis quaerat atque ipsum dolor 
qui magnam voluptate aliquid facilis veniam debitis nam dicta aut excepturi 
quisquam reiciendis, vitae dolore. Labore sed repudiandae nemo mollitia corporis 
laudantium ipsa laboriosam eum commodi asperiores.<br /><br /> Lorem ipsum 
dolor sit amet consectetur adipisicing elit. Fugiat minus ex est dignissimos 
corporis quaerat atque ipsum dolor qui magnam voluptate aliquid facilis veniam debitis 
nam dicta aut excepturi quisquam reiciendis, vitae dolore. Labore sed repudiandae nemo
mollitia corporis laudantium ipsa laboriosam eum commodi asperior.');

-- INSERT SERVICES IN TABLE OUR_SERVICES
INSERT INTO `our_services` 
(`id`, `icon`, `color`, `service`, `description`) 
VALUES 
(NULL, 'fa fa-globe', 'danger', 'Web app', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.'), 
(NULL, 'fa fa-mobile', 'secundary', 'Mobile app', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.'),
(NULL, 'fa-desktop', 'green', 'Desktop app', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.') 


-- Este script registra 2 usuarios no sistema 1 administrador e 1 usuario normal.
-- credencial do administrador: email: admin@gmail.com, senha: 1234
-- credencial do usuario normal: email: miguelleite200leite@gmail.com, senha: 1234

INSERT INTO `user` (`id`, `name`, `email`, `is_admin`, `password`) 
VALUES 
(NULL, 'Admin', 'admin@gmail.com', '1', '$2y$10$XTRphKWTDDvs.UEBdHV3yuuaq5by5JjLJZrwOFdHdDrFTT.y0Ti9e'), 
(NULL, 'Miguel Leite', 'miguelleite200leite@gmail.com', '0', '$2y$10$XTRphKWTDDvs.UEBdHV3yuuaq5by5JjLJZrwOFdHdDrFTT.y0Ti9e') 