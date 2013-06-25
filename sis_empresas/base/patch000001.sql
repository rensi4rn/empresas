/***********************************I-SCP-GSS-DIR-0-19/06/2013****************************************/
/*
*	Author: GSS
*	Date: 06/2013
*	Description: Build the menu definition and composition
*/

CREATE TABLE dir.tempresa (
  id_empresa SERIAL NOT NULL, 
  matricula BIGINT, 
  nombre VARCHAR(500), 
  email VARCHAR(500), 
  domicilio TEXT, 
  actividad TEXT, 
  id_lugar INTEGER, 
  id_actividad INTEGER, 
  telefono VARCHAR(500), 
  nit VARCHAR(200), 
  CONSTRAINT pk_tempresa__id_empresa PRIMARY KEY(id_empresa)
) INHERITS (pxp.tbase)
WITHOUT OIDS;

CREATE TABLE dir.tpublicidad (
  id_publicidad SERIAL NOT NULL, 
  cantidad INTEGER, 
  tiempo VARCHAR, 
  puntero INTEGER, 
  hora_envio TIME WITHOUT TIME ZONE, 
  estado VARCHAR, 
  id_lugar INTEGER, 
  CONSTRAINT pk_tpublicidad__id_publicidad PRIMARY KEY(id_publicidad)
) INHERITS (pxp.tbase)
WITHOUT OIDS;

CREATE TABLE dir.tactividad (
  id_actividad SERIAL, 
  id_actividad_fk INTEGER, 
  codigo VARCHAR(25), 
  nombre VARCHAR(500),  
  codigo_largo VARCHAR(255), 
  CONSTRAINT pk_tactividad__id_actividad PRIMARY KEY(id_actividad)
) INHERITS (pxp.tbase)
WITHOUT OIDS;
/*
CREATE TABLE dir.tactividad_gral (
  id_actividad_gral SERIAL, 
  nombre VARCHAR, 
  CONSTRAINT pk_tactividad_gral__id_actividad_gral PRIMARY KEY(id_actividad_gral)
) INHERITS (pxp.tbase)
WITHOUT OIDS;

CREATE TABLE dir.tactividad_prim (
  id_actividad_prim SERIAL, 
  id_actividad_gral INTEGER, 
  nombre VARCHAR, 
  CONSTRAINT pk_tactividad_prim__id_actividad_prim PRIMARY KEY(id_actividad_prim)
) INHERITS (pxp.tbase)
WITHOUT OIDS;

CREATE TABLE dir.tactividad_esp (
  id_actividad_esp SERIAL NOT NULL, 
  id_actividad_prim INTEGER, 
  nombre VARCHAR, 
  CONSTRAINT pk_tactividad_esp__id_actividad_esp PRIMARY KEY(id_actividad_esp)
) INHERITS (pxp.tbase)
WITHOUT OIDS;
*/
/***********************************F-SCP-GSS-DIR-0-19/06/2013****************************************/

/***********************************I-SCP-GSS-DIR-5-25/06/2013****************************************/

CREATE TABLE dir.tplantilla_correo (
  id_plantilla_correo SERIAL, 
  codigo VARCHAR(20) NOT NULL, 
  body TEXT, 
  CONSTRAINT pk_tplantilla_correo__id_plantilla_correo PRIMARY KEY(id_plantilla_correo)
) INHERITS (pxp.tbase)
WITHOUT OIDS;

CREATE TABLE dir.tarchivo_adjunto (
  id_archivo_adjunto SERIAL, 
  id_plantilla_correo INTEGER,
  archivo BYTEA, 
  nombre_archivo VARCHAR(50), 
  extension_archivo VARCHAR(10), 
  CONSTRAINT pk_tarchivo_adjunto__id_archivo_adjunto PRIMARY KEY(id_archivo_adjunto)
) INHERITS (pxp.tbase)
WITHOUT OIDS;

/***********************************F-SCP-GSS-DIR-5-25/06/2013****************************************/