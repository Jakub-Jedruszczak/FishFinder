CREATE DATABASE fish;
USE fish;

CREATE TABLE fish 
(
id int NOT NULL AUTO_INCREMENT,
name varchar(30) NOT NULL,
weight float,
colour varchar(30),
PRIMARY KEY (id)
);

INSERT INTO fish (name, weight, colour) VALUES ('Goldfish', 0.1, 'Yellow');
INSERT INTO fish (name, weight, colour) VALUES ('Salmon', 3.5, 'Red');
INSERT INTO fish (name, weight, colour) VALUES ('Bass', 2.1, 'Black');
INSERT INTO fish (name, weight, colour) VALUES ('Swordfish', 5, 'Silver');
INSERT INTO fish (name, weight, colour) VALUES ('Anglerfish', 3, 'White');
