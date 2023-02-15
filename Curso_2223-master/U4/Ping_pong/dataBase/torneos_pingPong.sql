drop database if exists torneos_pingPong;
create database torneos_pingPong;

use torneos_pingPong;

CREATE TABLE T_Usuario (
    nombre VARCHAR(50) PRIMARY KEY,
    contrasenya VARCHAR(20) NOT NULL
);

insert into T_Usuario (nombre, contrasenya) values ('Usuario', '1234');
insert into T_Usuario (nombre, contrasenya) values ('Admin', '1234');

select * from T_Usuario;

CREATE TABLE T_Jugador (
    id_jugador INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    total_partidos INT NOT NULL,
    partidos_ganados INT NOT NULL,
    total_torneos INT NOT NULL,
    torneos_ganados INT NOT NULL
);

insert into T_Jugador (nombre, total_partidos, partidos_ganados, total_torneos, torneos_ganados) values ('Gandalf', 6, 4, 3, 0);
insert into T_Jugador (nombre, total_partidos, partidos_ganados, total_torneos, torneos_ganados) values ('Bilbo Bolsón', 4, 1, 3, 0);
insert into T_Jugador (nombre, total_partidos, partidos_ganados, total_torneos, torneos_ganados) values ('Aragorn', 3, 0, 3, 0);
insert into T_Jugador (nombre, total_partidos, partidos_ganados, total_torneos, torneos_ganados) values ('Tom Bombadil', 5, 3, 3, 0);
insert into T_Jugador (nombre, total_partidos, partidos_ganados, total_torneos, torneos_ganados) values ('Cebadilla', 5, 4, 3, 1);
insert into T_Jugador (nombre, total_partidos, partidos_ganados, total_torneos, torneos_ganados) values ('Túrin', 3, 0, 3, 0);
insert into T_Jugador (nombre, total_partidos, partidos_ganados, total_torneos, torneos_ganados) values ('Melkor', 4, 1, 3, 0);
insert into T_Jugador (nombre, total_partidos, partidos_ganados, total_torneos, torneos_ganados) values ('Ilúvatar', 6, 5, 3, 1);

select * from T_Jugador;

CREATE TABLE T_Torneo (
    id_torneo INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    fecha date,
    estado ENUM('Finalizado','En proceso'),
    num_jugadores INT DEFAULT 8,
    campeon varchar(50)
);

insert T_Torneo (nombre, fecha, estado, campeon) values ('Torneo navidad', '2023-01-09', 'Finalizado', 'Ilúvatar');
insert T_Torneo (nombre, fecha, estado, campeon) values ('Torneo fin de curso', '2023-06-15', 'Finalizado', 'Cebadilla');
insert T_Torneo (nombre, fecha, estado) values ('Torneo prueba', '2023-01-25', 'En proceso');

select * from T_Torneo;

CREATE TABLE T_Partido (
    id_partido INT PRIMARY KEY AUTO_INCREMENT,
    id_torneo INT,
    tipo_partido ENUM('cuartos', 'semifinal', 'final'),
    jugador_a varchar(50),
    jugador_b varchar(50),
    ganador varchar(50),
    FOREIGN KEY (id_torneo) REFERENCES T_Torneo (id_torneo)
);

insert into T_Partido (id_torneo, tipo_partido, jugador_a, jugador_b, ganador) values ('1', 'cuartos', 'Melkor', 'Aragorn', 'Melkor');
insert into T_Partido (id_torneo, tipo_partido, jugador_a, jugador_b, ganador) values ('1', 'cuartos', 'Gandalf', 'Tom Bombadil', 'Gandalf');
insert into T_Partido (id_torneo, tipo_partido, jugador_a, jugador_b, ganador) values ('1', 'cuartos', 'Túrin', 'Ilúvatar', 'Ilúvatar');
insert into T_Partido (id_torneo, tipo_partido, jugador_a, jugador_b, ganador) values ('1', 'cuartos', 'Cebadilla', 'Bilbo Bolsón', 'Bilbo Bolsón');
insert into T_Partido (id_torneo, tipo_partido, jugador_a, jugador_b, ganador) values ('1', 'semifinal', 'Melkor', 'Gandalf', 'Gandalf');
insert into T_Partido (id_torneo, tipo_partido, jugador_a, jugador_b, ganador) values ('1', 'semifinal', 'Ilúvatar', 'Bilbo Bolsón', 'Ilúvatar');
insert into T_Partido (id_torneo, tipo_partido, jugador_a, jugador_b, ganador) values ('1', 'final', 'Gandalf', 'Ilúvatar', 'Ilúvatar');

insert into T_Partido (id_torneo, tipo_partido, jugador_a, jugador_b, ganador) values ('2', 'cuartos', 'Gandalf', 'Bilbo Bolsón', 'Gandalf');
insert into T_Partido (id_torneo, tipo_partido, jugador_a, jugador_b, ganador) values ('2', 'cuartos', 'Aragorn', 'Tom Bombadil', 'Tom Bombadil');
insert into T_Partido (id_torneo, tipo_partido, jugador_a, jugador_b, ganador) values ('2', 'cuartos', 'Cebadilla', 'Túrin', 'Cebadilla');
insert into T_Partido (id_torneo, tipo_partido, jugador_a, jugador_b, ganador) values ('2', 'cuartos', 'Melkor', 'Ilúvatar', 'Ilúvatar');
insert into T_Partido (id_torneo, tipo_partido, jugador_a, jugador_b, ganador) values ('2', 'semifinal', 'Gandalf', 'Tom Bombadil', 'Tom Bombadil');
insert into T_Partido (id_torneo, tipo_partido, jugador_a, jugador_b, ganador) values ('2', 'semifinal', 'Cebadilla', 'Ilúvatar', 'Cebadilla');
insert into T_Partido (id_torneo, tipo_partido, jugador_a, jugador_b, ganador) values ('2', 'final', 'Cebadilla', 'Tom Bombadil', 'Cebadilla');

insert into T_Partido (id_torneo, tipo_partido, jugador_a, jugador_b, ganador) values ('3', 'cuartos', 'Gandalf', 'Bilbo Bolsón', 'Gandalf');
insert into T_Partido (id_torneo, tipo_partido, jugador_a, jugador_b, ganador) values ('3', 'cuartos', 'Aragorn', 'Tom Bombadil', 'Aragorn');
insert into T_Partido (id_torneo, tipo_partido, jugador_a, jugador_b, ganador) values ('3', 'cuartos', 'Cebadilla', 'Túrin', 'Túrin');
insert into T_Partido (id_torneo, tipo_partido, jugador_a, jugador_b, ganador) values ('3', 'cuartos', 'Melkor', 'Ilúvatar', 'Ilúvatar');

select * from T_Partido;




-- SELECT 
--     tt.id_torneo, tt.nombre as'nombreTorneo', tt.fecha, tt.estado, tj.nombre
-- FROM
--     T_Torneo tt
--         INNER JOIN
--     T_Jugador tj
--     where tt.campeon = tj.id_jugador;

SELECT 
    id_torneo, nombre, fecha, estado, campeon
FROM
    T_Torneo;
    
















    
