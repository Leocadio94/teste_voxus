CREATE DATABASE noticias;
USE noticias;
CREATE TABLE noticia (
id_noticia INT NOT NULL AUTO_INCREMENT,
titulo VARCHAR(100) NOT NULL,
texto VARCHAR(600) NOT NULL,
PRIMARY KEY (id_noticia)
);