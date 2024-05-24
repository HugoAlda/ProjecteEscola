-- INSERTS CURSOS
INSERT INTO tbl_curs
    (ID_curs, Nom_curs, Desc_curs, Horari_curs, Num_alumnes, Data_inici, Data_final)
VALUES
    (1, 'SMX1', 'Sistemes Microinformátics i Xarxes (1er any)', 'Matí', 30, NULL, NULL),
    (2, 'SMX2', 'Sistemes Microinformátics i Xarxes (2gn any)', 'Tarda', 30, NULL, NULL),
    (3, 'ASIX1/DAW1', 'Administració de Sistemes Informàtics en Xarxa', 'Matí', 30, NULL, NULL),
    (4, 'ASIX2', 'Administració de Sistemes Informàtics en Xarxa', 'Matí', 30, NULL, NULL),
    (5, 'DAW2', "Desenvolupament d'Aplicacions Web", 'Tarda', 30, NULL, NULL);

-- INSERTS PROFESSORS
INSERT INTO tbl_professors 
    (DNI_professor, Nom_professor, Primer_Cognom_professor, Segon_Cognom_professor, Telefon_professor, Correu_professor, Sexe_professor, Cursos_assignats, Carrec_professor, Tutor_assignat)
VALUES
    ('49490191X', 'Gerard', 'Orobitg', 'Boyer', '654829112', 'gerard.orobitg@oxon.com', 'Home', 'SMX1/SMX2/ASIX1-DAW1/ASIX2', 'Profe/Cap Dept', 'ASIX1/DAW1'),
    ('54878965D', 'Nuria', 'Garres', 'Gonzalez', '653587876', 'nuria.garres@oxon.com', 'Dona', 'SMX1/SMX2/ASIX1-DAW1/ASIX2', 'Profe', 'ASIX2'),
    ('12578445F', 'Sergio', 'Velasco', 'Rodríguez', '665600608', 'sergio.velasco@oxon.com', 'Home', 'SMX1/SMX2/ASIX1-DAW1/ASIX2', 'Profe','No es tutor'),
    ('66978452R', 'Pedro', 'Blanco', 'Andrés', '656536159', 'pedro.blanco@oxon.com', 'Home', 'SMX1/SMX2/ASIX2', 'Profe','SMX1'),
    ('41203698U', 'Alberto', 'De Santos', 'Ontoria', '661593612', 'alberto.desantos@oxon.com', 'Home', 'SMX1/SMX2/ASIX1-DAW1/ASIX2/DAW2', 'Profe','No es tutor'),
    ('66676854Z', 'Fatima', 'Martínez', 'Macías', '666667771', 'fatima.macias@oxon.com', 'Dona', 'SMX1/SMX2/ASIX1-DAW1/ASIX2/DAW2', 'Profe','No es tutor'),
    ('36552114O', 'Alejandro', 'Rueda', 'Santos', '693673624', 'alejandro.rueda@oxon.com', 'Home', 'SMX1/SMX2/ASIX1-DAW1/ASIX2/DAW2', 'Profe','No es tutor'),
    ('74589665L', 'Ágnes', 'Plans', 'Berenguer', '654499212', 'agnes.plans@oxon.com', 'Dona', 'SMX1/ASIX1-DAW1/ASIX2', 'Profe','No es tutor'),
    ('18745998J', 'Alex', 'Perez', 'Mielgo', '612615613', 'alex.perez@oxon.com', 'Home', 'SMX1/SMX2', 'Profe','SMX2'),
    ('46481413T', 'Hugo', 'Alda', 'Cárdenas', '615449359', 'hugo.alda@oxon.com', 'Home', 'ASIX1/DAW1/DAW2', 'Profe/Cap Dept','DAW2');

-- INSERTS MODULS (ASIX1/DAW1)
INSERT INTO tbl_moduls
    (ID_modul, Nom_modul, Desc_modul, Hores_modul, FK_ID_Curs, FK_DNI_professor)
VALUES
    (1, 'M1 - Sistemes operatius (ASIX1/DAW1)', 'Introducció als sistemes operatius', 100, 3, '12578445F'),
    (2, 'M2 - Bases de dades (ASIX1/DAW1)', 'Fonaments de bases de dades relacionals', 120, 3, '49490191X'),
    (3, 'M3 - Programació bàsica (ASIX1/DAW1)', 'Principis bàsics de programació', 80, 3, '66676854Z'),
    (4, 'M4 - Disseny XML (ASIX1/DAW1)', 'Disseny de documents XML', 60, 3, '41203698U'),
    (5, 'M5 - Entorn (ASIX1/DAW1)', "Configuració d'entorns de desenvolupament", 90, 3, '36552114O'),
    (6, 'M7 - Xarxes (ASIX1/DAW1)', "Conceptes bàsics de xarxes d'ordinadors", 110, 3, '54878965D');

-- INSERTS MODULS (DAW2)
INSERT INTO tbl_moduls
    (ID_modul, Nom_modul, Desc_modul, Hores_modul, FK_ID_Curs, FK_DNI_professor)
VALUES
    (7, 'M1 - Sistemes Informàtics (DAW2)', 'Sistemes informàtics avançats', 120, 5, '74589665L'),
    (8, 'M2 - Bases de dades (DAW2)', 'Disseny avançat de bases de dades', 130, 5, '74589665L'),
    (9, 'M3 - Programació bàsica (DAW2)', 'Programació avançada en diversos llenguatges', 90, 5, '66676854Z'),
    (10, "M4 - Llenguatge de marques i sistemes de gestió d'informació (DAW2)", "Gestió avançada de sistemes d'informació", 110, 5, '41203698U'),
    (11, 'M5 - Entorns de desenvolupament (DAW2)', "Desenvolupament avançat d'entorns de programari", 120, 5, '66676854Z'),
    (12, 'M6 - Desenvolupament web en entorn client (DAW2)', 'Desenvolupament avançat de JavaScript', 120, 5, '66676854Z'),
    (13, 'M7 - Desenvolupament web en entorn servidor (DAW2)', "Desenvolupament d'aplicacions web en entorns de servidor", 150, 5, '41203698U'),
    (14, "M8 - Desplegament d'aplicacions web (DAW2)", "Desplegament avançat d'aplicacions web", 130, 5, '74589665L'),
    (15, "M9 - Disseny d'interfícies web (DAW2)", "Disseny avançat d'interfícies d'usuari", 100, 5, '36552114O');

-- INSERTS MODULS (ASIX2)
INSERT INTO tbl_moduls
    (ID_modul, Nom_modul, Desc_modul, Hores_modul, FK_ID_Curs, FK_DNI_professor)
VALUES
    (16, 'M1 - Implantació de sistemes operatius (ASIX2)', 'Implantació avançada de sistemes operatius', 110, 4, '12578445F'),
    (17, 'M2 - Gestió de bases de dades (ASIX2)', 'Gestió avançada de bases de dades', 130, 4, '49490191X'),
    (18, 'M3 - Programació bàsica (ASIX2)', 'Programació avançada en diferents àmbits', 100, 4, '41203698U'),
    (19, "M4 - Llenguatges de marques i sistemes de gestió d'informació (ASIX2)", "Gestió avançada de sistemes d'informació", 120, 4, '49490191X'),
    (20, 'M5 - Fonaments de maquinari (ASIX2)', 'Conceptes avançats de maquinari', 90, 4, '49490191X'),
    (21, 'M6 - Administració de sistemes operatius (ASIX2)', 'Administració avançada de sistemes operatius', 130, 4, '12578445F'),
    (22, 'M7 - Planificació i administració de xarxes (ASIX2)', 'Planificació i administració avançada de xarxes', 140, 4, '54878965D'),
    (23, 'M8 - Serveis de xarxa i internet (ASIX2)', 'Serveis avançats de xarxa i internet', 120, 4, '66978452R'),
    (24, "M9 - Implantació d'aplicacions web (ASIX2)", "Implantació avançada d'aplicacions web", 150, 4, '41203698U'),
    (25, 'M10 - Administració de sistemes gestors de bases de dades (ASIX2)', 'Administració avançada de sistemes gestors de bases de dades', 140, 4, '49490191X');

-- INSERTS MODULS (SMX1)
INSERT INTO tbl_moduls
    (ID_modul, Nom_modul, Desc_modul, Hores_modul, FK_ID_Curs, FK_DNI_professor)
VALUES
    (26, 'M1 - Muntatge (SMX1)', "Muntatge avançat d'equips informàtics", 100, 1, '66978452R'),
    (27, 'M2 - Sistemes operatius (SMX1)', 'Administració avançada de sistemes operatius', 120, 1, '12578445F'),
    (28, 'M3 - Ofimàtica (SMX1)', "Aplicació avançada d'eines d'oficina", 90, 1, '18745998J'),
    (29, 'M5 - Xarxes (SMX1)', "Configuració avançada de xarxes d'ordinadors", 110, 1, '54878965D'),
    (30, 'M6 - Seguretat (SMX1)', 'Principis avançats de seguretat informàtica', 130, 1, '49490191X');

-- INSERTS MODULS (SMX2)
INSERT INTO tbl_moduls
    (ID_modul, Nom_modul, Desc_modul, Hores_modul, FK_ID_Curs, FK_DNI_professor)
VALUES
    (32, 'M4 - Sistemes operatius en xarxa (SMX2)', 'Administració avançada de sistemes operatius en xarxa', 120, 2, '54878965D'),
    (33, 'M6 - Seguretat informàtica (SMX2)', 'Seguretat informàtica avançada', 140, 2, '12578445F'),
    (34, 'M7 - Serveis en xarxa (SMX2)', 'Serveis avançats en xarxa', 130, 2, '66978452R'),
    (35, 'M8 - Aplicacions web (SMX2)', "Desenvolupament avançat d'aplicacions web", 150, 2, '41203698U'),
    (36, 'M11 - Anglès (SMX2)', 'Anglès avançat per a informàtica', 90, 2, '18745998J');

-- INSERTS 120 ALUMNES

INSERT INTO tbl_alumnes 
    (Matricula_alumne, DNI_alumne, Nom_alumne, Primer_Cognom_alumne, Segon_Cognom_alumne, Telefon_alumne, Correu_alumne, Sexe_alumne, FK_ID_curs) 
VALUES
    ('000000001', '12345678A', 'Carlos', 'Rodríguez', 'García', '600123456', 'carlos.rodriguez@oxon.com', 'Home', '1'),
    ('000000002', '23456789B', 'Laura', 'Díaz', 'Fernández', '600234567', 'laura.diaz@oxon.com', 'Dona', '2'),
    ('000000003', '34567890C', 'Javier', 'Pérez', 'Gómez', '600345678', 'javier.perez@oxon.com', 'Home', '3'),
    ('000000004', '45678901D', 'Carmen', 'González', 'Martínez', '600456789', 'carmen.gonzalez@oxon.com', 'Dona', '4'),
    ('000000005', '56789012E', 'Alejandro', 'Sánchez', 'López', '600567890', 'alejandro.sanchez@oxon.com', 'Home', '5'),
    ('000000006', '67890123F', 'Marina', 'Martínez', 'Rodríguez', '600678901', 'marina.martinez@oxon.com', 'Dona', '1'),
    ('000000007', '78901234G', 'David', 'Fernández', 'Pérez', '600789012', 'david.fernandez@oxon.com', 'Home', '2'),
    ('000000008', '89012345H', 'Sofía', 'López', 'González', '600890123', 'sofia.lopez@oxon.com', 'Dona', '3'),
    ('000000009', '90123456I', 'Miguel', 'García', 'Sánchez', '600901234', 'miguel.garcia@oxon.com', 'Home', '4'),
    ('000000010', '01020304J', 'Lucía', 'Martínez', 'Fernández', '600111111', 'lucia.martinez@oxon.com', 'Dona', '5'),
    ('000000011', '02030405K', 'Daniel', 'Rodríguez', 'Gómez', '600222222', 'daniel.rodriguez@oxon.com', 'Home', '1'),
    ('000000012', '03040506L', 'Paula', 'González', 'Martínez', '600333333', 'paula.gonzalez@oxon.com', 'Dona', '2'),
    ('000000013', '04050607M', 'Diego', 'López', 'Sánchez', '600444444', 'diego.lopez@oxon.com', 'Home', '3'),
    ('000000014', '05060708N', 'Elena', 'Martínez', 'Rodríguez', '600555555', 'elena.martinez@oxon.com', 'Dona', '4'),
    ('000000015', '06070809O', 'Adrián', 'Fernández', 'Pérez', '600666666', 'adrian.fernandez@oxon.com', 'Home', '5'),
    ('000000016', '07080910P', 'Alba', 'López', 'González', '600777777', 'alba.lopez@oxon.com', 'Dona', '1'),
    ('000000017', '08091011Q', 'Pablo', 'García', 'Sánchez', '600888888', 'pablo.garcia@oxon.com', 'Home', '2'),
    ('000000018', '09101112R', 'María', 'González', 'Martínez', '600999999', 'maria.gonzalez@oxon.com', 'Dona', '3'),
    ('000000019', '10111213S', 'Hugo', 'Sánchez', 'López', '600000000', 'hugo.sanchez@oxon.com', 'Home', '4'),
    ('000000020', '11121314T', 'Sara', 'Martínez', 'Rodríguez', '601122334', 'sara.martinez@oxon.com', 'Dona', '5'),
    ('000000021', '12131415U', 'Irene', 'Fernández', 'Pérez', '602233445', 'irene.fernandez@oxon.com', 'Home', '1'),
    ('000000022', '13141516V', 'Álvaro', 'López', 'González', '603344556', 'alvaro.lopez@oxon.com', 'Home', '2'),
    ('000000023', '14151617W', 'Celia', 'García', 'Sánchez', '604455667', 'celia.garcia@oxon.com', 'Dona', '3'),
    ('000000024', '15161718X', 'Juan', 'González', 'Martínez', '605566778', 'juan.gonzalez@oxon.com', 'Home', '4'),
    ('000000025', '16171819Y', 'Lara', 'Sánchez', 'López', '606677889', 'lara.sanchez@oxon.com', 'Dona', '5'),
    ('000000026', '17181920Z', 'Marcos', 'Martínez', 'Rodríguez', '607788900', 'marcos.martinez@oxon.com', 'Home', '1'),
    ('000000027', '18192021A', 'Eva', 'Fernández', 'Pérez', '608899001', 'eva.fernandez@oxon.com', 'Dona', '2'),
    ('000000028', '19202122B', 'Javier', 'Pérez', 'Gómez', '609900112', 'javier.perez@oxon.com', 'Home', '3'),
    ('000000029', '20212223C', 'Ana', 'López', 'Martínez', '610011223', 'ana.lopez@oxon.com', 'Dona', '4'),
    ('000000030', '21222324D', 'Marcos', 'Sánchez', 'López', '611122334', 'marcos.sanchez@oxon.com', 'Home', '5'),
    ('000000031', '22232425E', 'Lucía', 'Martínez', 'Gómez', '612233445', 'lucia.martinez@oxon.com', 'Dona', '1'),
    ('000000032', '23242526F', 'Alejandro', 'González', 'Pérez', '613344556', 'alejandro.gonzalez@oxon.com', 'Home', '2'),
    ('000000033', '24252627G', 'Laura', 'Fernández', 'Martínez', '614455667', 'laura.fernandez@oxon.com', 'Dona', '3'),
    ('000000034', '25262728H', 'Pablo', 'Rodríguez', 'López', '615566778', 'pablo.rodriguez@oxon.com', 'Home', '4'),
    ('000000035', '26272829I', 'Sofía', 'García', 'Sánchez', '616677889', 'sofia.garcia@oxon.com', 'Dona', '5'),
    ('000000036', '27282930J', 'David', 'Sánchez', 'González', '617788900', 'david.sanchez@oxon.com', 'Home', '1'),
    ('000000037', '28293031K', 'Carmen', 'Martínez', 'Rodríguez', '618899001', 'carmen.martinez@oxon.com', 'Dona', '2'),
    ('000000038', '29303132L', 'Jorge', 'Pérez', 'López', '619900112', 'jorge.perez@oxon.com', 'Home', '3'),
    ('000000039', '30313233M', 'Natalia', 'Gómez', 'Martínez', '620011223', 'natalia.gomez@oxon.com', 'Dona', '4'),
    ('000000040', '31323334N', 'Manuel', 'Fernández', 'Sánchez', '621122334', 'manuel.fernandez@oxon.com', 'Home', '5'),
    ('000000041', '32333435O', 'Marina', 'Rodríguez', 'García', '622233445', 'marina.rodriguez@oxon.com', 'Dona', '1'),
    ('000000042', '33343536P', 'Isabel', 'López', 'Pérez', '623344556', 'isabel.lopez@oxon.com', 'Home', '2'),
    ('000000043', '34353637Q', 'Laura', 'González', 'Martínez', '624455667', 'laura.gonzalez@oxon.com', 'Dona', '3'),
    ('000000044', '35363738R', 'Elena', 'Martínez', 'Fernández', '625566778', 'elena.martinez@oxon.com', 'Dona', '4'),
    ('000000045', '36373839S', 'Alejandro', 'González', 'López', '626677889', 'alejandro.gonzalez@oxon.com', 'Home', '5'),
    ('000000046', '37383940T', 'Laura', 'Sánchez', 'Pérez', '627788900', 'laura.sanchez@oxon.com', 'Dona', '1'),
    ('000000047', '38394041U', 'Juan', 'García', 'Martínez', '628899001', 'juan.garcia@oxon.com', 'Home', '2'),
    ('000000048', '39404142V', 'María', 'Fernández', 'Gómez', '629900112', 'maria.fernandez@oxon.com', 'Dona', '3'),
    ('000000049', '40414243W', 'Daniel', 'López', 'Rodríguez', '630011223', 'daniel.lopez@oxon.com', 'Home', '4'),
    ('000000050', '41424344X', 'Sara', 'Martínez', 'Sánchez', '631122334', 'sara.martinez@oxon.com', 'Dona', '5'),
    ('000000051', '42434445Y', 'Pablo', 'Gómez', 'Fernández', '632233445', 'pablo.gomez@oxon.com', 'Home', '1'),
    ('000000052', '43444546Z', 'Carmen', 'Rodríguez', 'López', '633344556', 'carmen.rodriguez@oxon.com', 'Dona', '2'),
    ('000000053', '44454647A', 'Marcos', 'Sánchez', 'González', '634455667', 'marcos.sanchez@oxon.com', 'Home', '3'),
    ('000000054', '45464748B', 'Eva', 'Martínez', 'Pérez', '635566778', 'eva.martinez@oxon.com', 'Dona', '4'),
    ('000000055', '46474849C', 'Adrián', 'Fernández', 'García', '636677889', 'adrian.fernandez@oxon.com', 'Home', '5'),
    ('000000056', '47484950D', 'Sofía', 'González', 'López', '637788900', 'sofia.gonzalez@oxon.com', 'Dona', '1'),
    ('000000057', '48495051E', 'David', 'Sánchez', 'Fernández', '638899001', 'david.sanchez@oxon.com', 'Home', '2'),
    ('000000058', '49505152F', 'Laura', 'Martínez', 'Rodríguez', '639900112', 'laura.martinez@oxon.com', 'Dona', '3'),
    ('000000059', '50515253G', 'Carlos', 'López', 'Gómez', '640011223', 'carlos.lopez@oxon.com', 'Home', '4'),
    ('000000060', '51525354H', 'Lucía', 'Pérez', 'Sánchez', '641122334', 'lucia.perez@oxon.com', 'Dona', '5'),
    ('000000061', '52535455I', 'Jorge', 'García', 'Martínez', '642233445', 'jorge.garcia@oxon.com', 'Home', '1'),
    ('000000062', '53545556J', 'María', 'Fernández', 'López', '643344556', 'maria.fernandez@oxon.com', 'Dona', '2'),
    ('000000063', '54555657K', 'Alejandro', 'Martínez', 'Pérez', '644455667', 'alejandro.martinez@oxon.com', 'Home', '3'),
    ('000000064', '55565758L', 'Sara', 'Gómez', 'García', '645566778', 'sara.gomez@oxon.com', 'Dona', '4'),
    ('000000065', '56575859M', 'Pablo', 'López', 'Fernández', '646677889', 'pablo.lopez@oxon.com', 'Home', '5'),
    ('000000066', '57585960N', 'Marina', 'García', 'Sánchez', '647788900', 'marina.garcia@oxon.com', 'Dona', '1'),
    ('000000067', '58596061O', 'David', 'Martínez', 'Martínez', '648899001', 'david.martinez@oxon.com', 'Home', '2'),
    ('000000068', '59606162P', 'Carmen', 'Fernández', 'López', '649900112', 'carmen.fernandez@oxon.com', 'Dona', '3'),
    ('000000069', '60616263Q', 'Javier', 'Pérez', 'Gómez', '650011223', 'javier.perez@oxon.com', 'Home', '4'),
    ('000000070', '61626364R', 'Sofía', 'González', 'Pérez', '651122334', 'sofia.gonzalez@oxon.com', 'Dona', '5'),
    ('000000071', '62636465S', 'Daniel', 'Rodríguez', 'Martínez', '652233445', 'daniel.rodriguez@oxon.com', 'Home', '1'),
    ('000000072', '63646566T', 'Lucía', 'García', 'López', '653344556', 'lucia.garcia@oxon.com', 'Dona', '2'),
    ('000000073', '64656667U', 'Marcos', 'Martínez', 'Fernández', '654455667', 'marcos.martinez@oxon.com', 'Home', '3'),
    ('000000074', '65666768V', 'Elena', 'Pérez', 'Gómez', '655566778', 'elena.perez@oxon.com', 'Dona', '4'),
    ('000000075', '66676869W', 'Carlos', 'González', 'Rodríguez', '656677889', 'carlos.gonzalez@oxon.com', 'Home', '5'),
    ('000000076', '67686970X', 'Laura', 'Fernández', 'López', '657788900', 'laura.fernandez@oxon.com', 'Dona', '1'),
    ('000000077', '68697071Y', 'Pablo', 'Rodríguez', 'Martínez', '658899001', 'pablo.rodriguez@oxon.com', 'Home', '2'),
    ('000000078', '69707172Z', 'Sara', 'García', 'Pérez', '659900112', 'sara.garcia@oxon.com', 'Dona', '3'),
    ('000000079', '70717273A', 'Jorge', 'Martínez', 'Gómez', '660011223', 'jorge.martinez@oxon.com', 'Home', '4'),
    ('000000080', '71727374B', 'María', 'López', 'Rodríguez', '661122334', 'maria.lopez@oxon.com', 'Dona', '5'),
    ('000000081', '72737475C', 'Alejandro', 'Pérez', 'Fernández', '662233445', 'alejandro.perez@oxon.com', 'Home', '1'),
    ('000000082', '73747576D', 'Lucía', 'Gómez', 'García', '663344556', 'lucia.gomez@oxon.com', 'Dona', '2'),
    ('000000083', '74757677E', 'David', 'González', 'López', '664455667', 'david.gonzalez@oxon.com', 'Home', '3'),
    ('000000084', '75767778F', 'Sofía', 'Rodríguez', 'Pérez', '665566778', 'sofia.rodriguez@oxon.com', 'Dona', '4'),
    ('000000085', '76777879G', 'Daniel', 'Martínez', 'Martínez', '666677889', 'daniel.martinez@oxon.com', 'Home', '5'),
    ('000000086', '77787980H', 'Elena', 'Fernández', 'López', '667788900', 'elena.fernandez@oxon.com', 'Dona', '1'),
    ('000000087', '78798081I', 'Javier', 'García', 'Gómez', '668899001', 'javier.garcia@oxon.com', 'Home', '2'),
    ('000000088', '79808182J', 'Laura', 'Pérez', 'Rodríguez', '669900112', 'laura.perez@oxon.com', 'Dona', '3'),
    ('000000089', '80818283K', 'Marcos', 'López', 'Fernández', '670011223', 'marcos.lopez@oxon.com', 'Home', '4'),
    ('000000090', '81828384L', 'Sara', 'González', 'García', '671122334', 'sara.gonzalez@oxon.com', 'Dona', '5'),
    ('000000091', '82838485M', 'Pablo', 'Martínez', 'Pérez', '672233445', 'pablo.martinez@oxon.com', 'Home', '1'),
    ('000000092', '83848586N', 'Carmen', 'López', 'Rodríguez', '673344556', 'carmen.lopez@oxon.com', 'Dona', '2'),
    ('000000093', '84858687O', 'Jorge', 'Gómez', 'Fernández', '674455667', 'jorge.gomez@oxon.com', 'Home', '3'),
    ('000000094', '85868788P', 'María', 'García', 'López', '675566778', 'maria.garcia@oxon.com', 'Dona', '4'),
    ('000000095', '86878889Q', 'Alejandro', 'Martínez', 'Gómez', '676677889', 'alejandro.martinez@oxon.com', 'Home', '5'),
    ('000000096', '87888990R', 'Lucía', 'Pérez', 'Fernández', '677788900', 'lucia.perez@oxon.com', 'Dona', '1'),
    ('000000097', '88899091S', 'David', 'González', 'López', '678899001', 'david.gonzalez@oxon.com', 'Home', '2'),
    ('000000098', '88909192T', 'Sofía', 'Rodríguez', 'Pérez', '679900112', 'sofia.rodriguez@oxon.com', 'Dona', '3'),
    ('000000099', '89919293U', 'Daniel', 'Martínez', 'Martínez', '680011223', 'daniel.martinez@oxon.com', 'Home', '4'),
    ('000000100', '99192939V', 'Elena', 'Fernández', 'López', '681122334', 'elena.fernandez@oxon.com', 'Dona', '5'),
    ('000000101', '99192939W', 'Javier', 'García', 'Gómez', '682233445', 'javier.garcia@oxon.com', 'Home', '1'),
    ('000000102', '99192939X', 'Laura', 'Pérez', 'Rodríguez', '683344556', 'laura.perez@oxon.com', 'Dona', '2'),
    ('000000103', '99192939Y', 'Marcos', 'López', 'Fernández', '684455667', 'marcos.lopez@oxon.com', 'Home', '3'),
    ('000000104', '99192939Z', 'Sara', 'González', 'García', '685566778', 'sara.gonzalez@oxon.com', 'Dona', '4'),
    ('000000105', '99192939A', 'Pablo', 'Martínez', 'Pérez', '686677889', 'pablo.martinez@oxon.com', 'Home', '5'),
    ('000000106', '99192940B', 'Carmen', 'López', 'Rodríguez', '687788900', 'carmen.lopez@oxon.com', 'Dona', '1'),
    ('000000107', '99192940C', 'Jorge', 'Gómez', 'Fernández', '688899001', 'jorge.gomez@oxon.com', 'Home', '2'),
    ('000000108', '99192940D', 'María', 'García', 'López', '689900112', 'maria.garcia@oxon.com', 'Dona', '3'),
    ('000000109', '99192940E', 'Alejandro', 'Martínez', 'Gómez', '690011223', 'alejandro.martinez@oxon.com', 'Home', '4'),
    ('000000110', '99192940F', 'Lucía', 'Pérez', 'Fernández', '691122334', 'lucia.perez@oxon.com', 'Dona', '5'),
    ('000000111', '99192940G', 'David', 'González', 'López', '692233445', 'david.gonzalez@oxon.com', 'Home', '1'),
    ('000000112', '99192940H', 'Sofía', 'Rodríguez', 'Pérez', '693344556', 'sofia.rodriguez@oxon.com', 'Dona', '2'),
    ('000000113', '99192940I', 'Daniel', 'Martínez', 'Martínez', '694455667', 'daniel.martinez@oxon.com', 'Home', '3'),
    ('000000114', '99192940J', 'Elena', 'Fernández', 'López', '695566778', 'elena.fernandez@oxon.com', 'Dona', '4'),
    ('000000115', '99192940K', 'Javier', 'García', 'Gómez', '696677889', 'javier.garcia@oxon.com', 'Home', '5'),
    ('000000116', '99192941L', 'Laura', 'Pérez', 'Rodríguez', '697788900', 'laura.perez@oxon.com', 'Dona', '1'),
    ('000000117', '99192941M', 'Marcos', 'López', 'Fernández', '698899001', 'marcos.lopez@oxon.com', 'Home', '2'),
    ('000000118', '99192941N', 'Sara', 'González', 'García', '699900112', 'sara.gonzalez@oxon.com', 'Dona', '3'),
    ('000000119', '99192941O', 'Pablo', 'Martínez', 'Pérez', '700011223', 'pablo.martinez@oxon.com', 'Home', '4'),
    ('000000120', '99192941P', 'Carmen', 'López', 'Rodríguez', '701122334', 'carmen.lopez@oxon.com', 'Dona', '5');