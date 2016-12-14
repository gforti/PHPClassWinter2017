
USE PHPClassWinter2017;

CREATE TABLE IF NOT EXISTS states (
	state_id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
        state_name VARCHAR(50) NOT NULL,
	state_abbr VARCHAR(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;

insert into states
values
(NULL, 'Massachusetts', 'MA'),
(NULL, 'New York', 'NY'),
(NULL, 'Rhode Island', 'RI')
;

CREATE TABLE IF NOT EXISTS cities (
	city_id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,	
	city VARCHAR(100) NOT NULL,
	state_id INT UNSIGNED DEFAULT NULL,
	FOREIGN KEY (state_id) REFERENCES states(state_id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;

insert into cities
values
(NULL, 'Allston', '1'),
(NULL, 'Hyannis', '1'),
(NULL, 'Boston', '1'),
(NULL, 'Mansfield', '1'),
(NULL, 'Ipswich', '1'),
(NULL, 'Albany', '2'),
(NULL, 'Bronx', '2'),
(NULL, 'Queens', '2'),
(NULL, 'Florida', '2'),
(NULL, 'Marcellus', '2'),
(NULL, 'Providence', '3'),
(NULL, 'Warwick', '3'),
(NULL, 'Greenwhich', '3'),
(NULL, 'East Providence', '3'),
(NULL, 'Pawtucket', '3')
;