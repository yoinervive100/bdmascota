SELECT r.id, r.nombre_raza,count(m.Raza_id) raza FROM mascota m
RIGHT JOIN raza r
ON m.Raza_id = r.id 
GROUP BY r.id, r.nombre_raza;
select *from vacuna;

/*ejecuute el codigo em msyql para que funcione*/ 

/*
UPDATE mascota m
INNER JOIN raza r
on m.Raza_id = r.id
INNER JOIN tipomascota t
ON m.TipoMascota_id = t.id
SET  m.nombre = 'yoiner', m.FechaNacimiento = '2023-11-02', r.nombre_raza = 'lobo', t.nombre_mascota = 'pastor'
WHERE m.id = '1';
*/
select m.id, m.nombre, m.FechaNacimiento,r.nombre_raza, t.nombre_mascota from mascota m
INNER JOIN raza r
on m.Raza_id = r.id
INNER JOIN tipomascota t
ON m.TipoMascota_id = t.id
ORDER BY m.id ASC;
select * from mascota;
select *from rol;
insert into rol values(1,"jefe");
alter table raza rename column nombre to nombre_raza;
alter table tipomascota rename column nombre to nombre_mascota;
select * from user;