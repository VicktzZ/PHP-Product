CREATE DATABASE produto;

USE produto;

CREATE TABLE IF NOT EXISTS produtos(
  id INT NOT NULL AUTO_INCREMENT,
  descr VARCHAR(200) NULL,
  price INT NULL,
  PRIMARY KEY (id)
);
