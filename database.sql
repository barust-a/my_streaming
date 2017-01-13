Drop database IF EXISTS my_streaming;
CREATE DATABASE IF NOT EXISTS my_streaming CHARACTER SET utf8 COLLATE utf8_general_ci;
use my_streaming;

CREATE TABLE IF NOT EXISTS types (
   id_type int,
   type varchar(50) NOT NULL,
   PRIMARY KEY (id_type)
 )ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS categories(
  id_cat int,
  categorie varchar(100),
  PRIMARY KEY(id_cat)
)ENGINE=InnoDB;


CREATE TABLE IF NOT EXISTS utilisateurs (
  id_utilisateur int AUTO_INCREMENT,
  login varchar(100),
  password varchar(500),
  mail varchar(200),
  admin int,
  PRIMARY KEY (id_utilisateur)
)ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS films (
  id_film int AUTO_INCREMENT,
  type int,
  titre varchar(100),
  realisateur varchar(50),
  genre varchar(50),
  nationalite varchar(50),
  affiche varchar(700),
  description MEDIUMTEXT,
  annee_sortie int,
  date_ajout date,
  PRIMARY KEY (id_film)
)ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS commentaires (
  id_film int,
  commentaire varchar(150),
  note varchar(5),
  date_comment date,
  PRIMARY KEY (id_film)
)ENGINE=InnoDB;



INSERT INTO types (id_type, type)
VALUES
('1', 'film'),
('2', 'serie');


INSERT INTO categories(id_cat, categorie)
VALUES
('1', 'action'),
('2', 'horreur'),
('3', 'comedie'),
('4', 'drame'),
('5', 'SF');


INSERT INTO utilisateurs (login, password, mail, admin)
VALUES
('admin', '5898fc860300e228dcd54c0b1045b5fa0dcda502', 'rien@rien.com', '1');


INSERT INTO films (type, titre, realisateur, genre, nationalite, affiche, description, annee_sortie, date_ajout)
VALUES
('1', 'Old boy', 'Park Chan-Wook', 'drame', 'Sud-coreen', 'http://urlz.fr/4Ce1', 'A la fin des années 80, Oh Dae-Soo, père de famille sans histoire, est enlevé un jour devant chez lui. Séquestré pendant plusieurs années dans une cellule privée, son seul lien avec l\'extérieur est une télévision. Par le biais de cette télévision, il apprend le meurtre de sa femme, meurtre dont il est le principal suspect. Au désespoir d\'être séquestré sans raison apparente succède alors chez le héros une rage intérieure vengeresse qui lui permet de survivre. Il est relâché 15 ans plus tard, toujours sans explication. Oh Dae-Soo est alors contacté par celui qui semble être le responsable de ses malheurs, qui lui propose de découvrir qui l\'a enlevé et pourquoi. Le cauchemar continue pour le héros.', '2004', CURDATE()),
('1', 'Dead snow', 'Tommy Wirkola', 'horreur', 'Norvegien', 'https://lc.cx/Jix9', 'Des vacances au ski tournent au cauchemar pour un groupe d\'adolescents lorsqu\'ils se retrouvent confrontés à une menace inimaginable : des nazis zombies sortis de la glace...', '2016', CURDATE()),
('1', 'Rogue one', 'Gareth Edwards', 'SF', 'Americain', 'http://fr.web.img6.acsta.net/newsv7/16/10/12/23/34/474271.jpg', 'Situé entre les épisodes III et IV de la saga Star Wars, le film nous entraîne aux côtés d’individus ordinaires qui, pour rester fidèles à leurs valeurs, vont tenter l’impossible au péril de leur vie. Ils n’avaient pas prévu de devenir des héros, mais dans une époque de plus en plus sombre, ils vont devoir dérober les plans de l’Étoile de la Mort, l’arme de destruction ultime de l’Empire.', '2016', CURDATE()),
('2', '24H chrono', 'joel surnow', 'action', 'americain', 'http://t3.gstatic.com/images?q=tbn:ANd9GcT0O_xNk6u3CrfvhQfpxzlb3j72ZfGgtYl0w_P9e9p24pmUWTldS-HVPDY', 'Responsable de la Cellule Anti-Terroriste de Los Angeles, Jack Bauer a 24 heures pour mener sa mission à bien et protéger les siens du danger qui les menacent...', '2001', CURDATE()),
('1', 'The raid', 'Gareth Evans', 'action', 'indonesien', 'http://fr.web.img5.acsta.net/medias/nmedia/18/85/95/62/20057104.jpg', 'Après un combat sans merci pour s’extirper d’un immeuble rempli de criminels et de fous furieux, laissant derrière lui des monceaux de cadavres de policiers et de dangereux truands, Rama, jeune flic de Jakarta, pensait retrouver une vie normale, avec sa femme et son tout jeune fils…. Mais il se trompait. On lui impose en effet une nouvelle mission : Rama devra infiltrer le syndicat du crime, où coexistent dans une sorte de statu quo mafia indonésienne et yakusas. Sous l’identité de « Yuda », un tueur sans pitié, il se laisse jeter en prison afin d’y gagner la confiance d\'Uco, le fils d\'un magnat du crime indonésien - son ticket d’entrée pour intégrer l’organisation. Sur fond de guerre des gangs, il risquera sa vie dans un dangereux jeu de rôle destiné à porter un coup fatal à l\'empire du crime.', '2014', CURDATE()),
('1', 'Tenacious D', 'Liam Lynch', 'comedie', 'americain', 'http://fr.web.img4.acsta.net/medias/nmedia/18/36/04/56/18777953.jpg', 'Pas de chance pour le jeune JB. Il est passionné de rock\'n\'roll dans une famille ultra religieuse qui considère cette musique comme l\'oeuvre du diable. Lorsque son père lui colle une raclée en arrachant tous les posters de ses idoles, JB s\'enfuit et part pour Hollywood y chercher le secret du rock\'n\'roll...', '2007', CURDATE()),
('2', 'Breaking Bad', 'Vince gilligan', 'drame', 'americain', 'http://ekladata.com/H75848k_GLMflLNbDM5KlP9b-k4.jpg', 'Walter White, 50 ans, est professeur de chimie dans un lycée du Nouveau-Mexique. Pour subvenir aux besoins de Skyler, sa femme enceinte, et de Walt Junior, son fils handicapé, il est obligé de travailler doublement. Son quotidien déjà morose devient carrément noir lorsqu\'il apprend qu\'il est atteint d\'un incurable cancer des poumons. Les médecins ne lui donnent pas plus de deux ans à vivre. Pour réunir rapidement beaucoup d\'argent afin de mettre sa famille à l\'abri, Walter ne voit plus qu\'une solution : mettre ses connaissances en chimie à profit pour fabriquer et vendre du crystal meth, une drogue de synthèse qui rapporte beaucoup. Il propose à Jesse, un de ses anciens élèves devenu un petit dealer de seconde zone, de faire équipe avec lui. Le duo improvisé met en place un labo itinérant dans un vieux camping-car. Cette association inattendue va les entraîner dans une série de péripéties tant comiques que pathétiques.', '2008', CURDATE()),
('1', 'Le seigneur des anneaux', 'Peter jackson', 'action', 'americain', 'http://fr.web.img3.acsta.net/medias/nmedia/18/35/14/33/18366630.jpg', 'Dans ce chapitre de la trilogie, le jeune et timide Hobbit, Frodon Sacquet, hérite d\'un anneau. Bien loin d\'être une simple babiole, il s\'agit de l\'Anneau Unique, un instrument de pouvoir absolu qui permettrait à Sauron, le Seigneur des ténèbres, de régner sur la Terre du Milieu et de réduire en esclavage ses peuples. À moins que Frodon, aidé d\'une Compagnie constituée de Hobbits, d\'Hommes, d\'un Magicien, d\'un Nain, et d\'un Elfe, ne parvienne à emporter l\'Anneau à travers la Terre du Milieu jusqu\'à la Crevasse du Destin, lieu où il a été forgé, et à le détruire pour toujours. Un tel périple signifie s\'aventurer très loin en Mordor, les terres du Seigneur des ténèbres, où est rassemblée son armée d\'Orques maléfiques... La Compagnie doit non seulement combattre les forces extérieures du mal mais aussi les dissensions internes et l\'influence corruptrice qu\'exerce l\'Anneau lui-même.L\'issue de l\'histoire à venir est intimement liée au sort de la Compagnie.', '2001', CURDATE());


INSERT INTO commentaires (id_film, commentaire, note, date_comment)
VALUES
('2', 'un documentaire incroyable !', '9', CURDATE());
