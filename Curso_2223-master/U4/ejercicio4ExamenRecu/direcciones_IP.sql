drop database if exists direcciones_IP;
create database direcciones_IP;

use direcciones_IP;

CREATE TABLE direcciones_ip_bloqueadas (
    id INT(3) AUTO_INCREMENT PRIMARY KEY,
    direccion VARCHAR(100)
);

insert into direcciones_ip_bloqueadas(direccion) value ('12345678.11111111.00000001.10011111111111111010101');



