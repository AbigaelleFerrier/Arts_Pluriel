-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 19 Octobre 2018 à 12:04
-- Version du serveur: 5.5.31
-- Version de PHP: 5.4.4-14+deb7u5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `ArtsPluriel`
--

-- --------------------------------------------------------

--
-- Structure de la table `ACTIVITE`
--

CREATE TABLE IF NOT EXISTS `ACTIVITE` (
  `idA` int(10) NOT NULL,
  `nomA` char(50) DEFAULT NULL,
  PRIMARY KEY (`idA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `ACTIVITE`
--

INSERT INTO `ACTIVITE` (`idA`, `nomA`) VALUES
(1, 'Dessin'),
(2, 'Poterie'),
(3, 'Musique'),
(4, 'Sculpture'),
(5, 'Peinture'),
(6, 'Danse'),
(7, 'Photographie'),
(8, 'Déguisement'),
(9, 'Couture'),
(10, 'Couture'),
(11, 'Couture'),
(12, 'Couture');

-- --------------------------------------------------------

--
-- Structure de la table `ADMIN`
--

CREATE TABLE IF NOT EXISTS `ADMIN` (
  `idAdm` int(10) NOT NULL AUTO_INCREMENT,
  `pseudo` char(50) DEFAULT NULL,
  `mdpAdm` char(50) DEFAULT NULL,
  `mailAdm` char(100) DEFAULT NULL,
  PRIMARY KEY (`idAdm`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `ADMIN`
--

INSERT INTO `ADMIN` (`idAdm`, `pseudo`, `mdpAdm`, `mailAdm`) VALUES
(1, 'root', 'root', 'root'),
(2, 'JudgeDead', '2c7ec046826e50da355b1a9a60922cd2', 'supermail@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `FORUM`
--

CREATE TABLE IF NOT EXISTS `FORUM` (
  `idF` int(10) NOT NULL AUTO_INCREMENT,
  `titreF` char(50) NOT NULL,
  `idA` int(11) NOT NULL,
  PRIMARY KEY (`idF`),
  KEY `FORUM_ACTIVITE_FK` (`idA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `LIEUX`
--

CREATE TABLE IF NOT EXISTS `LIEUX` (
  `idL` int(9) NOT NULL AUTO_INCREMENT,
  `labelL` char(50) DEFAULT NULL,
  `telL` char(10) DEFAULT NULL,
  `villeL` char(50) DEFAULT NULL,
  `adresseL` char(100) DEFAULT NULL,
  PRIMARY KEY (`idL`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Contenu de la table `LIEUX`
--

INSERT INTO `LIEUX` (`idL`, `labelL`, `telL`, `villeL`, `adresseL`) VALUES
(1, 'Yhmlnsqzjzrs', '0691245425', 'Mende', '322-9539 Et Av.'),
(2, 'Uizehyfwglsx', '0625527607', 'Mende', 'CP 164, 8858 Diam. Rd.'),
(3, 'Lsmcqittyqsg', '0693904240', 'Mende', '1011 Sodales. Avenue'),
(4, 'Hmujbznfxxtq', '0688583250', 'Mende', '9603 Nisi. Impasse'),
(5, 'Xxrzdvvbjkso', '0688627658', 'Mende', '5335 Auctor Avenue'),
(6, 'Vpqnzrochcrw', '0655722667', 'Mende', 'CP 293, 989 Eleifend Av.'),
(7, 'Cozxnxvmoahm', '0613059168', 'Mende', '330-4435 Neque. Ave'),
(8, 'Déguisement', 'tel', 'ville', 'addresse'),
(9, 'Yonpovzcxdep', '0667874756', 'Mende', 'CP 626, 7871 Arcu Av.'),
(10, 'Afmhctemxzms', '0626957845', 'Mende', 'CP 748, 3970 Molestie Ave'),
(11, 'Cmwyaqdgdyjn', '0637551507', 'Mende', '246-669 Vestibulum, Av.'),
(12, 'Ysmcivrgkpsp', '0621818989', 'Mende', 'Appartement 526-2880 Lobortis. Impasse'),
(13, 'Rmeoainegjza', '0625865815', 'Mende', 'CP 836, 3012 Fermentum Route'),
(14, 'Hmjedpnetdck', '0649276406', 'Mende', 'Appartement 966-1949 Magna. Avenue'),
(15, 'Xwksghnizecj', '0638897755', 'Mende', 'Appartement 604-6810 Dignissim. Ave'),
(16, 'Mcgwpvcrreqf', '0674741156', 'Badaroux', 'CP 787, 5052 Sed Rd.'),
(17, 'Wipceliuaavv', '0682734142', 'Badaroux', '141 Id Rd.'),
(18, 'Icedxastrdwy', '0629214546', 'Badaroux', '526-2010 Libero Impasse'),
(19, 'Zovyeyqvqbnh', '0623378690', 'Langogne', '386-3960 Ridiculus Rd.'),
(20, 'Wtnsuyhzweio', '0684052481', 'Langogne', '7959 Luctus, Chemin'),
(21, 'Peinusduuhle', '0657861073', 'Noorderwijk', 'Appartement 397-5639 Nullam Impasse'),
(22, 'Cvuqdjsewowt', '0664053577', 'Westerlo', '3981 Risus Route'),
(23, 'Wuksqtvwawcv', '0617156049', 'Norman', 'CP 889, 7339 Aliquet Rue'),
(24, 'Oqqwdzncudsy', '0656531073', 'Kruibeke', 'Appartement 708-7594 Orci Av.'),
(25, 'Qmvsugsvojky', '0645128683', 'Comeglians', 'CP 349, 8105 Tristique Ave'),
(26, 'auberge rose', 'tel', 'ville', 'addresse');

-- --------------------------------------------------------

--
-- Structure de la table `MESSAGE`
--

CREATE TABLE IF NOT EXISTS `MESSAGE` (
  `idM` int(11) NOT NULL AUTO_INCREMENT,
  `textM` varchar(500) NOT NULL,
  `idURecois` int(11) NOT NULL,
  `idUEnvoie` int(11) DEFAULT NULL,
  `idF` int(11) DEFAULT NULL,
  PRIMARY KEY (`idM`),
  KEY `MESSAGE_UTILISATEUR_FK` (`idURecois`),
  KEY `MESSAGE_UTILISATEUR0_FK` (`idUEnvoie`),
  KEY `MESSAGE_FORUM1_FK` (`idF`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `pratique`
--

CREATE TABLE IF NOT EXISTS `pratique` (
  `idA` int(10) NOT NULL,
  `idU` int(10) NOT NULL,
  PRIMARY KEY (`idA`,`idU`),
  KEY `pratique_UTILISATEUR0_FK` (`idU`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `pratique`
--

INSERT INTO `pratique` (`idA`, `idU`) VALUES
(8, 1),
(1, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(1, 8),
(2, 9),
(3, 10),
(4, 11),
(5, 12),
(6, 13),
(7, 14),
(1, 15),
(2, 16),
(3, 17),
(4, 18),
(5, 19),
(6, 20),
(7, 21),
(7, 22),
(6, 23),
(1, 24),
(2, 25);

-- --------------------------------------------------------

--
-- Structure de la table `se_trouver`
--

CREATE TABLE IF NOT EXISTS `se_trouver` (
  `idL` int(11) NOT NULL,
  `idA` int(11) NOT NULL,
  PRIMARY KEY (`idL`,`idA`),
  KEY `se_trouver_ACTIVITE0_FK` (`idA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `UTILISATEUR`
--

CREATE TABLE IF NOT EXISTS `UTILISATEUR` (
  `idU` int(10) NOT NULL AUTO_INCREMENT,
  `pseudoU` char(50) DEFAULT NULL,
  `nomU` char(50) DEFAULT NULL,
  `prenomU` char(50) DEFAULT NULL,
  `mailU` char(250) DEFAULT NULL,
  `telU` char(10) DEFAULT NULL,
  `villeU` char(50) DEFAULT NULL,
  `distanceU` int(11) DEFAULT NULL,
  `mdpU` char(50) DEFAULT NULL,
  `ddnU` date NOT NULL,
  `bioU` varchar(500) NOT NULL,
  `LAT` float NOT NULL,
  `LONG` float NOT NULL,
  PRIMARY KEY (`idU`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Contenu de la table `UTILISATEUR`
--

INSERT INTO `UTILISATEUR` (`idU`, `pseudoU`, `nomU`, `prenomU`, `mailU`, `telU`, `villeU`, `distanceU`, `mdpU`, `ddnU`, `bioU`, `LAT`, `LONG`) VALUES
(1, 'Amaril', 'Swart', 'Wendeline', 'wendeline.swart.lnd@gmail.com', '0608771197', 'Mende', 58, 'b6edd10559b20cb0a3ddaeb15e5267cc', '1999-09-14', '', 2.3488, 48.8534),
(2, 'TairaK', 'Ferrier', 'Cirill', 'cirill@asheart.fr', '0610959507', 'Mende', 86, 'fc4dd07a6c9bf6dc5aa9fe6f86f7c6b2', '1998-06-27', '', 3.55, 44.5333),
(3, 'Zork', 'Maryam', 'Hadassah', 'amet.massa@lobortis.org', '0950422455', 'Mende', 40, 'OLA87HCT2IE', '1960-04-23', '', 3.5, 44.5167),
(4, 'Waly', 'Kyle', 'Buffy', 'in.hendrerit@apurusDuis.edu', '0273134846', 'Mende', 20, 'DGX29RRO1WF', '2005-06-08', '', 3.5, 44.5167),
(5, 'oaudue', 'Lawrence', 'Xander', 'In.tincidunt@maurisIntegersem.ca', '0843058167', 'Mende', 78, 'HVU62UPK1IT', '2003-12-30', '', 3.5, 44.5167),
(6, 'pksaum', 'Nissim', 'Dylan', 'faucibus.Morbi.vehicula@utnulla.net', '0787136832', 'Mende', 61, 'PJI36AHJ5CC', '1989-10-10', '', 3.5, 44.5167),
(7, 'jrjfpq', 'Preston', 'Clio', 'mollis.dui@vulputaterisusa.ca', '0105471355', 'Mende', 51, 'RVV70GKP7DE', '1978-03-05', '', 3.5, 44.5167),
(8, 'wjpfgu', 'Zena', 'Vance', 'Nullam.enim@non.net', '0761897655', 'Mende', 5, 'UXL52EDM2FK', '1999-02-13', '', 3.5, 44.5167),
(9, 'taexyh', 'Libby', 'Whitney', 'velit.eu@leo.ca', '0727860428', 'Mende', 34, 'AAK05MII8KI', '2000-11-09', '', 3.5, 44.5167),
(10, 'ewwedg', 'Dorian', 'Jennifer', 'pellentesque.a@scelerisque.edu', '0330100516', 'Mende', 70, 'XZC41FFG1RS', '1993-08-15', '', 3.5, 44.5167),
(11, 'awafsr', 'Jennifer', 'Abra', 'luctus.lobortis.Class@velconvallisin.net', '0135013704', 'Mende', 13, 'XYN50KWJ4EU', '1980-07-26', '', 3.5, 44.5167),
(12, 'truc', 'bidule', 'Nelle', 'malesuada@nec.net', '0300426003', 'Mende', 82, 'TJV08OSQ5KH', '2003-11-05', '', 3.5, 44.5167),
(13, 'yvmeow', 'Marshall', 'Erich', 'metus.Vivamus@pretiumneque.ca', '0656587022', 'Mende', 19, 'TPS50HML7BU', '1959-12-12', '', 3.5, 44.5167),
(14, 'gybpxx', 'Rahim', 'Cameran', 'tristique.ac.eleifend@interdumNunc.edu', '0393645245', 'Mende', 54, 'PBT79EMH4KN', '1990-01-01', '', 3.5, 44.5167),
(15, 'qptuhs', 'Linda', 'Hedda', 'odio.semper.cursus@rutrumurna.ca', '0880865935', 'Mende', 84, 'OBM45ESL5EA', '1989-02-27', '', 3.5, 44.5167),
(16, 'gwrrla', 'Carol', 'Amos', 'a.facilisis@duiCum.com', '0738843868', 'Badaroux', 65, 'TST03KHM6MT', '2010-06-08', '', 3.5, 44.5167),
(17, 'xzxhjl', 'Colorado', 'Rachel', 'Phasellus.nulla@commodo.ca', '0622440765', 'Badaroux', 65, 'QMV14GZU2CK', '2000-11-05', '', 3.5, 44.5167),
(18, 'lqrkej', 'Illana', 'Jamalia', 'Duis.elementum.dui@eleifendnunc.com', '0125914655', 'Badaroux', 93, 'ELA14AGS0JD', '1985-01-21', '', 3.5, 44.5167),
(19, 'bshchr', 'Quintessa', 'Zia', 'euismod.in@ametconsectetuer.co.uk', '0527133027', 'Langogne', 72, 'ARJ32ZIS8BC', '1992-03-30', '', 3.5, 44.5167),
(20, 'pjcsio', 'Josephine', 'Olivia', 'velit@Nullaeget.com', '0413587831', 'Langogne', 77, 'URK10XES1DG', '1978-12-01', '', 3.5, 44.5167),
(21, 'sbbwea', 'Odessa', 'Arsenio', 'lacinia.Sed.congue@Duissitamet.ca', '0793655893', 'Bilaspur', 80, 'QDX88EIB5BJ', '1977-09-12', '', 3.5, 44.5167),
(22, 'fqlpak', 'Valentine', 'Wesley', 'erat.in@magnatellus.com', '0854706544', 'Torino', 27, 'CKR15YXJ6MZ', '1960-05-13', '', 3.5, 44.5167),
(23, 'irabnu', 'Kim', 'Amaya', 'nonummy@egestasblanditNam.net', '0455299762', 'Buzet', 33, 'FJY73WLV6HN', '2008-07-18', '', 3.5, 44.5167),
(24, 'clgvus', 'Hayden', 'Rhiannon', 'ultrices.posuere.cubilia@orciluctus.edu', '0308621968', 'Ch‰tillon', 31, 'GQA86UOO2MR', '1945-04-26', '', 3.5, 44.5167),
(25, 'cxyndh', 'Grace', 'Brianna', 'mauris@facilisisnon.co.uk', '0605001231', 'Kelowna', 37, 'HZQ51HLW7EA', '1945-04-30', '', 3.5, 44.5167);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `FORUM`
--
ALTER TABLE `FORUM`
  ADD CONSTRAINT `FORUM_ACTIVITE_FK` FOREIGN KEY (`idA`) REFERENCES `ACTIVITE` (`idA`);

--
-- Contraintes pour la table `MESSAGE`
--
ALTER TABLE `MESSAGE`
  ADD CONSTRAINT `MESSAGE_FORUM1_FK` FOREIGN KEY (`idF`) REFERENCES `FORUM` (`idF`),
  ADD CONSTRAINT `MESSAGE_UTILISATEUR0_FK` FOREIGN KEY (`idUEnvoie`) REFERENCES `UTILISATEUR` (`idU`),
  ADD CONSTRAINT `MESSAGE_UTILISATEUR_FK` FOREIGN KEY (`idURecois`) REFERENCES `UTILISATEUR` (`idU`);

--
-- Contraintes pour la table `pratique`
--
ALTER TABLE `pratique`
  ADD CONSTRAINT `pratique_ACTIVITE_FK` FOREIGN KEY (`idA`) REFERENCES `ACTIVITE` (`idA`),
  ADD CONSTRAINT `pratique_UTILISATEUR0_FK` FOREIGN KEY (`idU`) REFERENCES `UTILISATEUR` (`idU`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
