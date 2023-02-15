
CREATE TABLE `T_Categorias` (
    `ID` INTEGER NOT NULL PRIMARY KEY,
    `nombre` VARCHAR(50) DEFAULT NULL
);

insert into T_Categorias(`ID`, `nombre`) values (1, "Terror");
insert into T_Categorias(`ID`, `nombre`) values (2, "Ciencia Ficción");

CREATE TABLE `T_Directores` (
    `ID` INT NOT NULL PRIMARY KEY,
    `nombre` VARCHAR(50) DEFAULT NULL
);

insert into T_Directores(`ID`, `nombre`) values (1, "Ridley Scott");
insert into T_Directores(`ID`, `nombre`) values (2, "Zack Snyder");
insert into T_Directores(`ID`, `nombre`) values (3, "Jordan Peele");
insert into T_Directores(`ID`, `nombre`) values (4, "Steven Spielberg");
insert into T_Directores(`ID`, `nombre`) values (5, "Ari Aster");
insert into T_Directores(`ID`, `nombre`) values (6, "William Friedkin");
insert into T_Directores(`ID`, `nombre`) values (7, "Stanley Kubrick");
insert into T_Directores(`ID`, `nombre`) values (8, "John Carpenter");
insert into T_Directores(`ID`, `nombre`) values (9, "Yeon Sang-ho");
insert into T_Directores(`ID`, `nombre`) values (10, "Kevin Lewis");
insert into T_Directores(`ID`, `nombre`) values (11, "Katsuhiro Ōtomo");
insert into T_Directores(`ID`, `nombre`) values (12, "Robert Zemeckis");
insert into T_Directores(`ID`, `nombre`) values (13, "Paul Verhoeven");
insert into T_Directores(`ID`, `nombre`) values (14, "David Sandberg");
insert into T_Directores(`ID`, `nombre`) values (15, "James Cameron");
insert into T_Directores(`ID`, `nombre`) values (16, "Lilly Wachowski");
insert into T_Directores(`ID`, `nombre`) values (17, "Steven Lisberger");

CREATE TABLE `T_Actores` (
    `ID` INT NOT NULL PRIMARY KEY,
    `nombres` VARCHAR(1000) DEFAULT NULL
);

insert into T_Actores(`ID`, `nombres`) values (1, "Sigourney Weaver, John Hurt, Yaphet Kotto, Tom Skerritt, Veronica Cartwright, Harry Dean Stanton, Ian Holm");
insert into T_Actores(`ID`, `nombres`) values (2, "Sarah Polley, Ving Rhames, Jake Weber, Mekhi Phifer, Ty Burrell, Michael Kelly, Kevin Zegers, Michael Barry, Lindy Booth, Tom Savini, Bruce Bohne, Jayne Eastwood, Boyd Banks, Inna Korobkina, R.D. Reid, Kim Poirier, Matt Frewer, Justin Louis, Hannah Lochner, Ermes Blarasin, Sanjay Talwar, Kim Roberts, Tim Post, Matt Sadowski, Philip DeWilde, Colm Magner, Luigia Zucaro, Geoff Williams, Mike Realba, Phillip MacKenzie, Laura DeCarteret, Georgia Craig, Tino Monte, Chris Gillett, Derek Keurvorst, Dan Duran, Neville Edwards, Sandy Jobin-Bevans, Natalie Brown, Liz West, Scott H. Reiniger, Ken Foree");
insert into T_Actores(`ID`, `nombres`) values (3, "Daniel Kaluuya, Allison Williams, Catherine Keener, Bradley Whitford, Betty Gabriel, Caleb Landry Jones, Lyle Brocato, Ashley LeConte Campbell, Marcus Henderson, Lil Rel Howery, Jeronimo Spinx, Rutherford Cravens, Lakeith Stanfield");
insert into T_Actores(`ID`, `nombres`) values (4, "Roy Scheider, Robert Shaw, Richard Dreyfuss, Lorraine Gary, Murray Hamilton, Carl Gottlieb, Jeffrey C. Kramer, Susan Backlinie, Jonathan Filley, Chris Rebello, Jay Mello, Craig Kingsbury, Jeffrey Voorhees, Lee Fierro, Ted Grossman, Robert Chambers, Peter Benchley");
insert into T_Actores(`ID`, `nombres`) values (5, "Florence Pugh, Jack Reynor, Will Poulter, William Jackson Harper, Ellora Torchia, Archie Madekwe, Vilhelm Blomgren, Julia Ragnarsson, Anna Åström, Anki Larsson, Lars Väringer, Katarina Weidhagen van Hal, Isabelle Grill, Björn Andrésen");
insert into T_Actores(`ID`, `nombres`) values (6, "Linda Blair, Max von Sydow, Ellen Burstyn, Jason Miller, Lee J. Cobb, Kitty Winn, Jack MacGowran, Arthur Storch, Barton Heyman, Gina Petrushka, John Mahon, William O'Malley, Peter Masterson, Rudolf Schündler, Robert Symonds, Thomas Bermingham, Vasiliki Maliaros, Titos Vandis, Wallace Rooney, Ron Faber, Donna Mitchell, Roy Cooper, Robert Gerringer, Mercedes McCambridge");
insert into T_Actores(`ID`, `nombres`) values (7, "Jack Nicholson, Shelley Duvall, Danny Lloyd, Scatman Crothers, Barry Nelson, Philip Stone, Joe Turkel, Lia Beldam, Billie Gibson, Barry Dennen, David Baxt, Manning Redwood, Lisa Burns, Alison Coleridge, Norman Gay, Tony Burton, Anne Jackson, Jana Shelden, Burnell Tucker");
insert into T_Actores(`ID`, `nombres`) values (8, "Kurt Russell, Wilford Brimley, Keith David, David Clennon, Richard Dysart, Donald Moffat, Richard Masur, T.K. Carter, Charles Hallahan, Peter Maloney, Joel Polis, Thomas G. Waites");
insert into T_Actores(`ID`, `nombres`) values (9, "Gong Yoo, Ma Dong-seok, Ahn So-hee, Kim Soo-an, Jeong Yu-mi, Kim Eui-sung, Choi Woo-sik, Shim Eun-kyung, Choi Gwi-hwa, Jang Hyuk-jin, Ye Soo-jung, Park Myeong-Shin, Jeong Seok-yong, Chang-hwan Kim, Kim Jae-rok, Seong-soo Han, Hye-Yeong Moon, Do-im Woo");
insert into T_Actores(`ID`, `nombres`) values (10, "Nicolas Cage, Emily Tosta, Caylee Cowan, Beth Grant, Terayle Hill, Grant Cramer, Ric Reitz, Chris Schmidt Jr., Duke Jackson, David Sheftell, Christian Delgrosso, Taylor Towery, Jiri Stanek, Jonathan Mercedes, Jessica Graves, Chris Warner, BJ Guyer, Olga Cramer, Chris Padilla, D.J. Stavropoulos");
insert into T_Actores(`ID`, `nombres`) values (11, "Animación");
insert into T_Actores(`ID`, `nombres`) values (12, "Michael J. Fox, Christopher Lloyd, Lea Thompson, Crispin Glover, Claudia Wells, Thomas F. Wilson, James Tolkan, Billy Zane, Sachi Parker, Marc McClure, George DiCenzo, Frances Lee McCain, Wendie Jo Sperber, Casey Siemaszko, J.J. Cohen, Donald Fullilove, Harry Waters Jr., Elsa Raven, Lisa Freeman, Will Hare, Ivy Bethune");
insert into T_Actores(`ID`, `nombres`) values (13, "Michael J. Fox, Christopher Lloyd, Lea Thompson, Thomas F. Wilson, Elisabeth Shue, Charles Fleischer, Joe Flaherty, Harry Waters Jr., Billy Zane, Elijah Wood, Jeffrey Weissman, James Tolkan, Casey Siemaszko, Ricky Dean Logan, J.J. Cohen, Darlene Vogel, Jason Scott Lee, Marty Levy, Al White, Jim Ishida");
insert into T_Actores(`ID`, `nombres`) values (14, "Michael J. Fox, Christopher Lloyd, Mary Steenburgen, Thomas F. Wilson, Lea Thompson, Elisabeth Shue, Matt Clark, Richard Dysart, Jeffrey Weissman, James Tolkan");
insert into T_Actores(`ID`, `nombres`) values (15, "Arnold Schwarzenegger, Sharon Stone, Michael Ironside, Rachel Ticotin, Ronny Cox, Marshall Bell, Mel Johnson Jr., Ray Baker, Michael Champion, Roy Brocksmith, Lycia Naff, Debbie Lee Carrington, Dean Norris, Alexia Robinson, Erika Carlsson");
insert into T_Actores(`ID`, `nombres`) values (16, "David Sandberg, Jorma Taccone, Steven Chew, Leopold Nilsson, Andreas Cahling, Erik Hornqvist, Eleni Young, Helene Ahlson, Per-Henrik Arvidius, Magnus Betnér, Björn Gustafsson, Eos Karlsson, David Hasselhoff, Frank Sanderson");
insert into T_Actores(`ID`, `nombres`) values (17, "Arnold Schwarzenegger, Linda Hamilton, Michael Biehn, Paul Winfield, Lance Henriksen, Rick Rossovich, Bess Motta, Earl Boen, Dick Miller, Bill Paxton, Franco Columbu, Brian Thompson, Brad Rearden");
insert into T_Actores(`ID`, `nombres`) values (18, "Arnold Schwarzenegger, Linda Hamilton, Edward Furlong, Robert Patrick, Earl Boen, Joe Morton, S. Epatha Merkerson, Danny Cooksey, Cástulo Guerra, Jenette Goldstein, Xander Berkeley, Michael Edwards, Dean Norris");
insert into T_Actores(`ID`, `nombres`) values (19, "Keanu Reeves, Laurence Fishburne, Carrie-Anne Moss, Joe Pantoliano, Hugo Weaving, Marcus Chong, Gloria Foster, Matt Doran, Belinda McClory, Julian Arahanga, Anthony Ray Parker, Paul Goddard, Robert Taylor, Marc Aden Gray");
insert into T_Actores(`ID`, `nombres`) values (20, "Jeff Bridges, Bruce Boxleitner, David Warner, Cindy Morgan, Barnard Hughes, Dan Shor, Peter Jurasik, Tony Stephano, Craig Chudy, Michael Dudikoff");

CREATE TABLE `T_Peliculas` (
    `ID` INT NOT NULL,
    `titulo` VARCHAR(200) DEFAULT NULL,
    año INT DEFAULT NULL,
    duracion INT DEFAULT NULL,
    sinopsis VARCHAR(1500) DEFAULT NULL,
    imagen VARCHAR(100) DEFAULT NULL,
    votos INT DEFAULT NULL,
    id_categoria INT DEFAULT NULL,
    id_directores INT DEFAULT NULL,
    id_actores int default null,
    PRIMARY KEY (ID),
    FOREIGN KEY (id_categoria) REFERENCES T_Categorias (ID),
    foreign key (id_directores) references T_Directores (ID),
    foreign key (id_actores) references T_Actores (ID)
);

insert into T_Peliculas(`ID`, `titulo`, `año`, `duracion`, `sinopsis`, `imagen`, `votos`, `id_categoria`, `id_directores`,`id_actores`) values (1, "Alien, el octavo pasajero", 1979, 116, "De regreso a la Tierra, la nave de carga Nostromo interrumpe su viaje y despierta a sus siete tripulantes. El ordenador central, MADRE, ha 
    detectado la misteriosa transmisión de una forma de vida desconocida, procedente de un planeta cercano aparentemente deshabitado. La nave se dirige entonces al extraño planeta para investigar el 
    origen de la comunicación.", "imgs/terror/alien_el_octavo_pasajero.jpg", 0, 1, 1,1);
insert into T_Peliculas(`ID`, `titulo`, `año`, `duracion`, `sinopsis`, `imagen`, `votos`, `id_categoria`, `id_directores`,`id_actores`) values (2, "El amanecer de los muertos", 2004, 100, "Remake del filme de terror de George A. Romero. Una inexplicable plaga ha diezmado la población del planeta, convirtiendo a los muertos en horribles zombies que continuamente buscan carne y sangre 
    humana para sobrevivir. En Wisconsin, un variopinto grupo de personas que han escapado a la plaga, tratan de salvar la vida refugiándose en un centro comercial, donde deben aprender no sólo a protegerse 
    de las hordas de zombies, sino también a convivir.", "imgs/terror/el_amanecer_de_los_muertos.jpg", 0, 1, 2,2);
insert into T_Peliculas(`ID`, `titulo`, `año`, `duracion`, `sinopsis`, `imagen`, `votos`, `id_categoria`, `id_directores`,`id_actores`) values (3, "Dejame salir", 2017, 103, "Un joven afroamericano visita a la familia de su novia blanca, un matrimonio adinerado. Para Chris 
    (Daniel Kaluuya) y su novia Rose (Allison Williams) ha llegado el momento de conocer a los futuros suegros, por lo que ella le invita a pasar un fin de semana en el campo con sus padres, Missy 
    (Catherine Keener) y Dean (Bradley Whitford). Al principio, Chris piensa que el comportamiento 'demasiado' complaciente de los padres se debe a su nerviosismo por la relación interracial de su hija, 
    pero a medida que pasan las horas, una serie de descubrimientos cada vez más inquietantes le llevan a descubrir una verdad inimaginable.", "imgs/terror/get_out.jpg", 0,1, 3,3);
insert into T_Peliculas(`ID`, `titulo`, `año`, `duracion`, `sinopsis`, `imagen`, `votos`, `id_categoria`, `id_directores`,`id_actores`) values (4, "Tiburón", 1975, 124, "En la costa de un pequeño pueblo del Este de los 
    Estados Unidos, un enorme tiburón ataca a varias personas. Por temor a los nefastos efectos que este hecho podría tener sobre el negocio turístico, el alcalde se niega a cerrar las playas y a difundir la 
    noticia. Pero un nuevo ataque del tiburón termina con la vida de un bañista. Cuando el terror se apodera de todos, un veterano cazador de tiburones, un oceanógrafo y el jefe de la policía local se unen para 
    intentar capturar al escualo.", "imgs/terror/jaws.jpg", 0, 1, 4,4);
insert into T_Peliculas(`ID`, `titulo`, `año`, `duracion`, `sinopsis`, `imagen`, `votos`, `id_categoria`, `id_directores`,`id_actores`) values (5, "Midsommar", 2019, 145, "Una pareja estadounidense que no está pasando por su mejor momento acude con unos 
    amigos al Midsommar, un festival de verano que se celebra cada 90 años en una aldea remota de Suecia. Lo que comienza como unas vacaciones de ensueño en un lugar en el que el sol no se pone nunca, poco a 
    poco se convierte en una oscura pesadilla cuando los misteriosos aldeanos les invitan a participar en sus perturbadoras actividades festivas.", "imgs/terror/midsommar.jpg", 0, 1, 5,5);
insert into T_Peliculas(`ID`, `titulo`, `año`, `duracion`, `sinopsis`, `imagen`, `votos`, `id_categoria`, `id_directores`,`id_actores`) values (6, "El exorcista", 1973, 121, "Regan, una niña de doce años, sufre fenómenos paranormales como la levitación o la manifestación de una fuerza sobrehumana. Su madre, aterrorizada, tras 
    someter a su hija a múltiples análisis médicos que no ofrecen ningún resultado, acude a un sacerdote con estudios de psiquiatría. Éste, convencido de que el mal no es físico sino espiritual, cree que se trata 
    de una posesión diabólica, y decide practicar un exorcismo... Adaptación de la novela de William Peter Blatty que se inspiró en un exorcismo real ocurrido en Washington en 1949.", "imgs/terror/the_exorcist.jpg", 0, 1, 6,6);
insert into T_Peliculas(`ID`, `titulo`, `año`, `duracion`, `sinopsis`, `imagen`, `votos`, `id_categoria`, `id_directores`,`id_actores`) values (7, "El resplandor", 1980, 146, "Jack Torrance se traslada con su mujer y su hijo de siete años al impresionante hotel Overlook, en Colorado, para encargarse del mantenimiento de 
    las instalaciones durante la temporada invernal, época en la que permanece cerrado y aislado por la nieve. Su objetivo es encontrar paz y sosiego para escribir una novela. Sin embargo, poco después de su 
    llegada al hotel, al mismo tiempo que Jack empieza a padecer inquietantes trastornos de personalidad, se suceden extraños y espeluznantes fenómenos paranormales.", "imgs/terror/the_shining.jpg", 0, 1, 7,7);
insert into T_Peliculas(`ID`, `titulo`, `año`, `duracion`, `sinopsis`, `imagen`, `votos`, `id_categoria`, `id_directores`,`id_actores`) values (8, "La cosa", 1982, 105, "En una estación experimental remota de la Antártida, un equipo de científicos de investigación estadounidenses ven cómo 
    en su campamento base un helicóptero noruego dispara contra un perro de trineo. Cuando acogen al perro, éste ataca brutalmente tanto a los seres humanos como a los caninos del campamento, y descubren que la 
    bestia, de origen desconocido, puede asumir la forma de sus víctimas...", "imgs/terror/the_thing.jpg", 0, 1, 8,8);
insert into T_Peliculas(`ID`, `titulo`, `año`, `duracion`, `sinopsis`, `imagen`, `votos`, `id_categoria`, `id_directores`,`id_actores`) values (9, "Tren a Busan", 2016, 118, "Un virus letal se expande por Corea del Sur, provocando 
    violentos altercados. Los pasajeros de un tren KTX que viaja de Seúl a Busan tendrán que luchar por su supervivencia.", "imgs/terror/train_to_busan.jpg", 0, 1, 9,9);
insert into T_Peliculas(`ID`, `titulo`, `año`, `duracion`, `sinopsis`, `imagen`, `votos`, `id_categoria`, `id_directores`,`id_actores`) values (10, "Willy's Wonderland", 2021, 88, "Un hombre solitario (Cage) se ve obligado a quedarse en un remoto pueblo de Nevada cuando su coche se avería. Allí, un mecánico se ofrece a repararle el vehículo a cambio de que él trabaje de conserje 
    nocturno en Willy's Wonderland, un local de entretenimiento familiar abandonado hace ya tiempo, que se acaba convirtiendo en una auténtica pesadilla. Allí tendrá que luchar contra un monstruo tras otro para 
    sobrevivir hasta el día siguiente.", "imgs/terror/willys_wonderland.jpg", 0, 1, 10,10);
insert into T_Peliculas(`ID`, `titulo`, `año`, `duracion`, `sinopsis`, `imagen`, `votos`, `id_categoria`, `id_directores`,`id_actores`) values (11, "Akira", 1988, 124, "Año 2019. Neo-Tokyo es una ciudad construida sobre las ruinas de la antigua capital japonesa destruida tras la Tercera Guerra Mundial. Japón es un país al borde del colapso que sufre continuas crisis políticas. 
    En secreto, un equipo de científicos ha reanudado por orden del ejército un experimento para encontrar a individuos que puedan controlar el arma definitiva: una fuerza denominada 'la energía absoluta'. Pero 
    los habitantes de Neo-Tokyo tienen otras cosas de las que preocuparse. Uno de ellos es Kaneda, un joven pandillero líder de una banda de motoristas. Durante una pelea, su mejor amigo, Tetsuo, sufre un extraño 
    accidente y termina ingresado en unas instalaciones militares. Allí los científicos descubrirán que es el poseedor de la energía absoluta. Pero Tetsuo, que no se resigna a convertirse en un conejillo de indias, 
    muy pronto se convertirá en la amenaza más grande que el mundo ha conocido.", "imgs/ciencia_ficción/akira.jpg", 0, 2, 11,11);
insert into T_Peliculas(`ID`, `titulo`, `año`, `duracion`, `sinopsis`, `imagen`, `votos`, `id_categoria`, `id_directores`,`id_actores`) values (12, "Regreso al futuro", 1985, 116, "El adolescente Marty McFly es amigo de Doc, un científico al que todos toman por loco. Cuando Doc crea una máquina para 
    viajar en el tiempo, un error fortuito hace que Marty llegue a 1955, año en el que sus futuros padres aún no se habían conocido. Después de impedir su primer encuentro, deberá conseguir que se conozcan y se 
    casen; de lo contrario, su existencia no sería posible.", "imgs/ciencia_ficción/back_to_the_future.jpg", 0, 2, 12,12);
insert into T_Peliculas(`ID`, `titulo`, `año`, `duracion`, `sinopsis`, `imagen`, `votos`, `id_categoria`, `id_directores`,`id_actores`) values (13, "Regreso al futuro 2", 1989, 105, "Aunque a Marty McFly todavía le falta tiempo para asimilar el hecho de estar viviendo dentro de 
    la familia perfecta gracias a su anterior viaje en el tiempo, no le queda ni espacio para respirar cuando su amigo Doc aparece de improviso con la máquina del tiempo (mucho más modernizada), e insta a que le 
    acompañen él y su novia a viajar al futuro para solucionar un problema con la ley que tendrá uno de sus futuros hijos. En la tremenda vorágine futurista, con todo lo que ello conlleva, del Hill Valley de 2015, 
    la presencia de tales viajeros temporales causará un efecto mayor que el que iban a arreglar. Un almanaque deportivo y la posesión del secreto de la existencia de la máquina del tiempo por parte del siempre 
    villano Biff Tannen, serán los ingredientes que conjugarán una causa-efecto en el pasado, en el presente y en el propio futuro, que hará que Marty y Doc se tengan que emplear a fondo para poner fin a la 
    catástrofe a la que les lleva el destino.", "imgs/ciencia_ficción/back_to_the_future_2.jpg", 0, 2, 12,13);
insert into T_Peliculas(`ID`, `titulo`, `año`, `duracion`, `sinopsis`, `imagen`, `votos`, `id_categoria`, `id_directores`,`id_actores`) values (14, "Regreso al futuro 3", 1990, 118,"Marty McFly sigue en 1955 y su amigo Doc ha retrocedido al año 1885, la época del salvaje oeste. 
    Éste le envía una carta donde comenta que la máquina del tiempo está averiada, y que es imposible repararla. Sin embargo no le preocupa estar atrapado en el pasado, pues allí es muy feliz trabajando de herrero 
    aunque convive con malhechores. Pero Marty descubre una vieja tumba en la que lee que Doc murió en 1885 y, sin pensárselo dos veces, irá a rescatar a su amigo.", "imgs/ciencia_ficción/back_to_the_future_3.jpg", 0, 2, 12,14);
insert into T_Peliculas(`ID`, `titulo`, `año`, `duracion`, `sinopsis`, `imagen`, `votos`, `id_categoria`, `id_directores`,`id_actores`) values (15, "Desafio total", 1990, 109, "La Tierra, año 2084. Doug Quaid, un hombre que lleva 
    una vida aparentemente tranquila, vive atormentado por una pesadilla que todas las noches lo transporta a Marte. Decide entonces recurrir al laboratorio de Recall, una empresa de vacaciones virtuales que le 
    ofrece la oportunidad de materializar su sueño gracias a un fuerte alucinógeno, pero la droga hace aflorar a su memoria una estancia verdadera en Marte cuando era el más temido agente del cruel Coohagen.", "imgs/ciencia_ficción/desafio_total.jpg", 0, 2, 13,15);
insert into T_Peliculas(`ID`, `titulo`, `año`, `duracion`, `sinopsis`, `imagen`, `votos`, `id_categoria`, `id_directores`,`id_actores`) values (16, "Kung Fury", 2015, 31, "Cuenta la historia de un 
    policía renegado (llamado Kung Fury) que persigue a su archienemigo (Hitler) a través del tiempo. Comedia de acción que rinde homenaje al cine ochentero. Incluye dinosaurios, nazis, vikingos y robots.", "imgs/ciencia_ficción/kung_fury.jpg", 0, 2, 14, 16);
insert into T_Peliculas(`ID`, `titulo`, `año`, `duracion`, `sinopsis`, `imagen`, `votos`, `id_categoria`, `id_directores`,`id_actores`) values (17, "Terminator", 1984, 108, "Los Ángeles, año 2029. Las máquinas dominan el mundo. Los rebeldes que luchan contra ellas tienen 
    como líder a John Connor, un hombre que nació en los años ochenta. Para acabar con la rebelión, las máquinas deciden enviar al pasado a un robot -Terminator- cuya misión será eliminar a Sarah Connor, la madre 
    de John, e impedir así su nacimiento.", "imgs/ciencia_ficción/terminator.jpg", 0, 2, 15,17);
insert into T_Peliculas(`ID`, `titulo`, `año`, `duracion`, `sinopsis`, `imagen`, `votos`, `id_categoria`, `id_directores`,`id_actores`) values (18, "Terminator 2", 1991, 135, "Sarah Connor, la madre soltera del rebelde John Connor, está ingresada en un psiquiátrico. Algunos años antes, un viajero del tiempo le había revelado que su hijo sería el salvador de la humanidad en un 
    futuro dominado por las máquinas. Se convirtió entonces en una especie de guerrera y educó a su hijo John en tácticas de supervivencia. Esta es la razón por la que está recluida en un manicomio. Cuando un 
    nuevo androide mejorado, un T-1000, llega del futuro para asesinar a John, un viejo modelo T-800 será enviado para protegerle.", "imgs/ciencia_ficción/terminator_2.jpg", 0, 2, 15,18);
insert into T_Peliculas(`ID`, `titulo`, `año`, `duracion`, `sinopsis`, `imagen`, `votos`, `id_categoria`, `id_directores`,`id_actores`) values (19, "Matrix", 1999, 131, "Thomas Anderson es un brillante programador de una respetable compañía de software. Pero fuera del trabajo es Neo, un hacker que un día recibe una 
    misteriosa visita...", "imgs/ciencia_ficción/the_matrix.jpg", 0, 2, 16,19);
insert into T_Peliculas(`ID`, `titulo`, `año`, `duracion`, `sinopsis`, `imagen`, `votos`, `id_categoria`, `id_directores`,`id_actores`) values (20, "Tron", 1982, 82, "Un hacker es dividido en moléculas y transportado a las entrañas de un ordenador en el que un malvado programa controla 
    los comportamientos a su antojo.", "imgs/ciencia_ficción/tron.jpg", 0, 2, 17,20);

-- update T_Peliculas set `votos` = 0 where T_Peliculas.ID = 20;
-- update T_Peliculas set `votos` = 0 where T_Peliculas.ID = 1;

-- select * from T_Peliculas order by `votos` DESC;


-- SELECT 
    -- ta.ID,
    -- ta.nombres,
    -- tp.ID,
    -- tp.titulo,
    -- tp.año,
    -- tp.duracion,
    -- tp.sinopsis,
    -- tp.imagen,
    -- tp.votos,
    -- tp.id_categoria,
    -- tp.id_directores,
    -- tp.id_actores
-- FROM
    -- T_Actores ta
        -- INNER JOIN
    -- T_Peliculas tp
-- WHERE
    -- ta.ID = tp.id_actores;