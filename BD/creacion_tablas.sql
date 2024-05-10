-- CREACIÓ I UTILITZACIÓ DE LA BASE DE DADES

CREATE DATABASE bd_escola;

USE bd_escola;

-- CREACIÓ TAULES

CREATE TABLE tbl_alumnes(
  Matricula_alumne CHAR(9) NOT NULL PRIMARY KEY,
  DNI_alumne CHAR(9) NOT NULL,
  Nom_alumne VARCHAR(30) NULL,
  Primer_Cognom_alumne VARCHAR(60) NOT NULL,
  Segon_Cognom_alumne VARCHAR(60) NOT NULL,
  Telefon_alumne CHAR(9) NOT NULL,
  Correu_alumne VARCHAR(50) NOT NULL,
  Sexe_alumne ENUM('Home','Dona','No binari') NOT NULL
);

CREATE TABLE tbl_professors(
  DNI_professor CHAR(9) NOT NULL PRIMARY KEY,
  Nom_professor VARCHAR(30) NOT NULL,
  Primer_Cognom_professor VARCHAR(60) NOT NULL,
  Segon_Cognom_professor VARCHAR(60) NOT NULL,
  Telefon_professor CHAR(9) NOT NULL,
  Correu_professor VARCHAR(50) NOT NULL,
  Sexe_professor ENUM('Home', 'Dona', 'No binari') NOT NULL,
  Tutor_assignat ENUM('ASIX/DAW1', 'ASIX2', 'DAW2', 'SMX1', 'SMX2', 'No es tutor') NOT NULL,
  Curs_assignat VARCHAR(50) NOT NULL,
  Carrec_professor ENUM('Profe', 'Cap Departament', 'Profe/Cap Dept') NOT NULL
);

CREATE TABLE tbl_curs(
  Nom_curs varchar(50) NOT NULL PRIMARY KEY,
  Desc_curs varchar(200) NOT NULL,
  Horari_curs ENUM('Matí', 'Tarda') NOT NULL,
  Num_alumnes smallint NOT NULL,
  Data_inici DATE NULL,
  Data_final DATE NULL,
  -- FK DNI_Tutor_curs
  FK_DNI_Tutor_curs char(9) NOT NULL
);

CREATE TABLE tbl_moduls(
  Nom_modul VARCHAR(100) NOT NULL PRIMARY KEY,
  Desc_modul VARCHAR(200) NOT NULL,
  Hores_modul SMALLINT NULL,
  -- FK DNI_professor
  FK_DNI_professor CHAR(9) NOT NULL,
  -- FK Curs
  FK_Nom_Curs VARCHAR(30) NOT NULL
);

-- ALTER TABLES

ALTER TABLE tbl_curs ADD CONSTRAINT fk_tbl_Curs_Professors FOREIGN KEY (FK_DNI_Tutor_curs) REFERENCES tbl_professors(DNI_professor);

ALTER TABLE tbl_moduls ADD CONSTRAINT fk_tbl_Moduls_Professors FOREIGN KEY (FK_DNI_professor) REFERENCES tbl_professors(DNI_professor);

ALTER TABLE tbl_moduls ADD CONSTRAINT fk_tbl_Moduls_Curs FOREIGN KEY (FK_Nom_Curs) REFERENCES tbl_curs(Nom_curs);