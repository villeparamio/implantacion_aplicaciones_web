CREATE TABLE usuarios(
  id_usu INT(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nombre varchar(20),
  apellido1 VARCHAR(20),
  apellido2 VARCHAR(20),
  login VARCHAR(20) NOT NULL UNIQUE,
  password CHAR(40) NOT NULL,
  intentos_fallidos INT(8),
  intentos_totales INT(8)
);
INSERT INTO usuarios(id_usu, nombre, apellido1, apellido2, login, password, intentos_fallidos, intentos_totales) VALUES
  (NULL, 'David', 'Paramio', 'Calvo', 'villeparamio', 'd033e22ae348aeb5660fc2140aec35850c4da997', NULL, NULL);
DESCRIBE usuarios;
show tables;
SELECT * from usuarios;

select intentos_totales from usuarios where login='villeparamio';