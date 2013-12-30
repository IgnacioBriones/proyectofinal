
/* Drop Tables */

DROP TABLE IF EXISTS cee;
DROP TABLE IF EXISTS noticia;
DROP TABLE IF EXISTS cargoadministrativo;
DROP TABLE IF EXISTS laboral;
DROP TABLE IF EXISTS persona;
DROP TABLE IF EXISTS usuario;
DROP TABLE IF EXISTS rol;
DROP TABLE IF EXISTS carrera;




/* Create Tables */

CREATE TABLE usuario
(
	rut int NOT NULL UNIQUE,
	passwd char(255),
	PRIMARY KEY (rut)
) WITHOUT OIDS;


CREATE TABLE rol
(
	idrol serial NOT NULL,
	nombre_rol char(255),
	PRIMARY KEY (idrol)
) WITHOUT OIDS;


CREATE TABLE noticia
(
	idnoticia serial NOT NULL,
	titulo char(255),
	fechapublicacion date,
	cuerponoticia char(255),
	idpersona int NOT NULL UNIQUE,
	PRIMARY KEY (idnoticia)
) WITHOUT OIDS;


CREATE TABLE cargoadministrativo
(
	idcargo serial NOT NULL,
	cargo_administrativo char(255),
	idpersona int NOT NULL UNIQUE,
	idcarrera int NOT NULL,
	PRIMARY KEY (idcargo)
) WITHOUT OIDS;


CREATE TABLE cee
(
	idcee serial NOT NULL,
	periodo date,
	cargo char(255),
	idpersona int NOT NULL UNIQUE,
	idcarrera int NOT NULL,
	PRIMARY KEY (idcee)
) WITHOUT OIDS;


CREATE TABLE carrera
(
	idcarrera serial NOT NULL,
	codigo int,
	nombre_carrera char(255),
	PRIMARY KEY (idcarrera)
) WITHOUT OIDS;


CREATE TABLE persona
(
	idpersona int NOT NULL UNIQUE,
	nombre char(255),
	paterno char(255) NOT NULL,
	telefono int,
	materno char(255),
	mail char(255),
	rut int NOT NULL UNIQUE,
	idrol int NOT NULL,
	PRIMARY KEY (idpersona)
) WITHOUT OIDS;


CREATE TABLE laboral
(
	idlaboral serial NOT NULL UNIQUE,
	fecha_publicacion_ofert date,
	titulo_oferta char(255),
	cuerpo_oferta char(255),
	contacto_oferta char(255),
	idpersona int NOT NULL UNIQUE,
	PRIMARY KEY (idlaboral)
) WITHOUT OIDS;



/* Create Foreign Keys */

ALTER TABLE persona
	ADD FOREIGN KEY (rut)
	REFERENCES usuario (rut)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE persona
	ADD FOREIGN KEY (idrol)
	REFERENCES rol (idrol)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE cee
	ADD FOREIGN KEY (idcarrera)
	REFERENCES carrera (idcarrera)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE cargoadministrativo
	ADD FOREIGN KEY (idcarrera)
	REFERENCES carrera (idcarrera)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE cee
	ADD FOREIGN KEY (idpersona)
	REFERENCES persona (idpersona)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE noticia
	ADD FOREIGN KEY (idpersona)
	REFERENCES persona (idpersona)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE cargoadministrativo
	ADD FOREIGN KEY (idpersona)
	REFERENCES persona (idpersona)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE laboral
	ADD FOREIGN KEY (idpersona)
	REFERENCES persona (idpersona)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


