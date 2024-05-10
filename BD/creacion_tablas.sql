CREATE DATABASE bd_escola;

USE bd_escola;

CREATE TABLE tbl_alumnes(
  Matricula_alumne CHAR(9) NOT NULL PRIMARY KEY,
  DNI_alumne CHAR(9) NOT NULL,
  Nom_alumne VARCHAR(30) NULL,
  Primer_Cognom_alumne VARCHAR(60) NOT NULL,
  Segon_Cognom_alumne VARCHAR(60) NOT NULL,
  Telefon_alumne CHAR(9) NOT NULL,
  Correu_alumne varchar(50) NOT NULL,
  Sexe_alumne ENUM('Home','Dona','No binari') NOT NULL
);

CREATE TABLE tbl_professors(
  DNI_professor char(9) NOT NULL PRIMARY KEY,
  Nom_professor varchar(30) NOT NULL,
  Cognoms_professor varchar(60) NOT NULL,
  Telefon_professor char(9) NOT NULL,
  Correu_professor varchar(50) NOT NULL,
  Sexe_professor ENUM('Home', 'Dona', 'No binari') NOT NULL,
  Tutor_assignat ENUM('ASIX/DAW1', 'ASIX2', 'DAW2', 'SMX1', 'SMX2', 'No es tutor') NOT NULL,
  Curs_assignat ENUM('ASIX/DAW1', 'ASIX2', 'DAW2', 'SMX1', 'SMX2') NOT NULL,
  Carrec_professor ENUM('Profe', 'Cap Departament') NOT NULL
);

CREATE TABLE tbl_curs(
  Nom_curs varchar(30) NOT NULL PRIMARY KEY,
  Desc_curs varchar(100) NOT NULL,
  Horari_curs ENUM('Mati', 'Tarda') NOT NULL,
  Num_alumnes smallint NOT NULL,
  Data_inici date NOT NULL,
  Data_final date NOT NULL,
  -- FK DNI_Tutor_curs
  FK_DNI_Tutor_curs char(9) NOT NULL
);

CREATE TABLE tbl_moduls(
  Nom_modul varchar (6) NOT NULL PRIMARY KEY,
  Desc_modul varchar(100) NOT NULL,
  Hores_modul smallint NOT NULL,
  -- FK DNI_professor
  FK_DNI_professor char(9) NOT NULL,
  -- FK Curs
  FK_Curs Varchar (30) NOT NULL
);

--Alter tables
ALTER TABLE tbl_curs
ADD CONSTRAINT fk_tbl_Curs_Alumnes
FOREIGN KEY (FK_DNI_Tutor_curs) REFERENCES tbl_alumnes(Matricula_alumne);


ALTER TABLE tbl_moduls
ADD CONSTRAINT fk_tbl_Moduls_Professors
FOREIGN KEY (FK_DNI_professor) REFERENCES tbl_professors(DNI_professor);


ALTER TABLE tbl_moduls
ADD CONSTRAINT fk_tbl_Moduls_Curs
FOREIGN KEY (FK_Curs) REFERENCES tbl_curs(Nom_curs);
