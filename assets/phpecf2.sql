
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `idU` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  `adress1` text NOT NULL,
  `adress2` text NOT NULL,
  `postal` char(5) NOT NULL,
  `phone` varchar(20) NOT NULL,
  PRIMARY KEY (`idU`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;


DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `idS` int(11) NOT NULL AUTO_INCREMENT,
  `nameService` varchar(50) NOT NULL,
  `descriptionService` varchar(100) NOT NULL,
  PRIMARY KEY (`idS`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;



INSERT INTO services (name, description)
VALUES ('Maintenance','Les spécialistes du Hardware');
VALUES ('Web Developer','Pour eux tout est code');
VALUES ('Web Designer','Y a que le CSS dans la vie');
VALUES ('Reférenceur','Les spécialistes du Hardware');
VALUES ('Maintenance','Regarde les Serps Google du matin au soir et du soir au matin');




ALTER TABLE users
ADD CONSTRAINT FK_Users_Service
FOREIGN KEY (idU) REFERENCES services(idS);
