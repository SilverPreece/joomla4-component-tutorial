DROP TABLE IF EXISTS `#__helloworld_greetings`;

CREATE TABLE `#__helloworld_greetings` ( 
    `id` SERIAL NOT NULL, 
    `greeting` VARCHAR(200) NOT NULL, 
    `published` BOOLEAN NOT NULL DEFAULT FALSE, 
    PRIMARY KEY (`id`)
) ENGINE = InnoDB; 

INSERT INTO `#__helloworld_greetings` (`greeting`) VALUES
    ('Hello World!'),
    ('Good bye World!');