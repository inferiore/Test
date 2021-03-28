CREATE DATABASE directorio CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;

use directorio;

CREATE TABLE usuarios (
  id int(11)  UNSIGNED NOT NULL AUTO_INCREMENT,
  nombre_completo VARCHAR( 50 ) NOT NULL ,
  email VARCHAR( 50 ) NOT NULL ,
  identificacion VARCHAR( 50 ) NOT  NULL ,
  contrasena VARCHAR( 50 ) NOT NULL ,
  pais VARCHAR( 50 ) NOT NULL ,

  PRIMARY KEY (id) ,
  KEY (id)                          -- or:    UNIQUE KEY (id)
);
create unique index usuarios_email_uindex
	on usuarios (email);

create unique index usuarios_identificacion_uindex
	on usuarios (identificacion);


insert into usuarios (nombre_completo,identificacion, email, contrasena) values ("Eder Barrios Camargo","1047470523","email@eder.com","password");









