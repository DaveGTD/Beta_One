-- create everthing under "beta" database" -- 

CREATE DATABASE beta;
USE beta;

CREATE TABLE employees(
	row_num INT NOT NULL AUTO_INCREMENT,
	id INT NOT NULL, 
	name TEXT NOT NULL, 
	title TEXT NOT NULL, 
	salary INT NOT NULL, 
	start_date DATE NOT NULL,
	x TEXT NOT NULL, 
	y TEXT NOT NULL,
	PRIMARY KEY(row_num)	
);

INSERT INTO employees (id, name, title, salary, start_date, x, y) VALUES 
(
	123,
	'Aditya Dave',
	'CEO',
	100,
	NOW(),
	500,
	1000	
);

INSERT INTO employees (id, name, title, salary, start_date, x, y) VALUES 
(
	234,
	'Anna Wernli',
	'CMO',
	10,
	'2015-11-01',
	480,
	5000
);

INSERT INTO employees (id, name, title, salary, start_date, x, y) VALUES 
(
	345,
	'Rachel Wernli Anson',
	'CFO',
	10000,
	'2015-11-02',
	9999,
	5000
);

INSERT INTO employees (id, name, title, salary, start_date, x, y) VALUES 
(
	456,
	'Sam Wilson',
	'COO',
	0,
	'2015-11-08',
	500,
	0
);