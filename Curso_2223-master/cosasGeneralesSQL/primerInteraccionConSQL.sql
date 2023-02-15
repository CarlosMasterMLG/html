-- CTROL + B PARA 'FORMATEAR'

-- drop table peliculas;
-- alter table peliculas rename column duracion to duracionMin;

-- insert into peliculas(id, titulo, duracionMin) values (1, 'El Resplandor', 120);

-- alter table peliculas add column votos int default 0;

-- insert into peliculas(id, titulo, duracionMin) values (2, 'Alien', 110);

-- update peliculas set votos = votos + 1 where peliculas.id = 2;	




CREATE TABLE categorias (
    id_categoria INTEGER NOT NULL PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL
);

-- Error Code: 1052. Column 'id_categoria' in field list is ambiguous	0,00072 sec


CREATE TABLE peliculas (
    id INTEGER NOT NULL PRIMARY KEY,
    titulo VARCHAR(50) NOT NULL,
    duracion INTEGER NOT NULL,
    categoria INTEGER NOT NULL,
    votos INTEGER DEFAULT 0,
    FOREIGN KEY (categoria)
        REFERENCES categorias (id_categoria)
);

insert into categorias(id_categoria, nombre) values (1, 'Terror');
insert into categorias(id_categoria, nombre) values (2, 'Ciencia Ficción');

insert into peliculas(id, titulo, duracion, categoria) values (1, 'El Resplandor', 120, 1);
insert into peliculas(id, titulo, duracion, categoria) values (2, 'Alien', 110, 1);

insert into peliculas(id, titulo, duracion, categoria) values (3, 'Akira', 130, 2);
insert into peliculas(id, titulo, duracion, categoria) values (4, 'Regreso al futuro', 140, 2);


select * from peliculas where id_categoria = 1;


SELECT 
    *
FROM
    peliculas
        INNER JOIN
    categorias ON peliculas.categoria = categorias.id_categoria;


select * from peliculas;
select * from categorias;
