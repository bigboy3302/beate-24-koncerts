
CREATE TABLE kolektivi(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
name CHAR(80) NOT NULL,
description VARCHAR(500) NOT NULL
);

CREATE TABLE pasakumi(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
Datums_laiks DATETIME NOT NULL,
Nosaukums VARCHAR(255) NOT NULL,
Norises_vieta CHAR(40) NOT NULL 
);


INSERT INTO pasakumi(Datums_laiks, Nosaukums, Norises_vieta)
VALUES 
("2024-03-31 13:00" , 'Lieldienas Cēsīs' , 'Rožu laukums'),
("2024-04-04 18:00" , 'Leļļu teātra izrāde "Gangsteromīte" ' , 'Koncertzāle "Cēsis" '),
("2024-07-19 08:00" , '	Cēsu pilsētas svētki 818 ' , 'Cēsis');

INSERT INTO kolektivi(NAME, DESCRIPTION)
VALUES 
("Cesis","	Pūtēju orķestris"),
("Raitais solis","Tautu deju ansamblis"),
("Vidzeme","Jauktais koris"),
("Dzieti","Tautas vērtes kopa");
