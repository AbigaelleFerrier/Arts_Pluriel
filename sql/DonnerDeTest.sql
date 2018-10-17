
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


INSERT INTO `ADMIN` (`idAdm`, `pseudo`, `mdpAdm`, `mailAdm`) VALUES
(1, 'root', 'root', 'root'),
(2, 'JudgeDead', '2c7ec046826e50da355b1a9a60922cd2', 'supermail@gmail.com');



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

INSERT INTO `MESSAGE` (`idM`, `textM`, `idUEnvoie`, `idURecois`) VALUES
(1, 'Pika PikaPi Pika Pikaaaa', 1, 2),
(2, 'Harley Quinn est la meilleure', 3, 2),
(4, 'Harley Quinn est la meilleure', 3, 2),
(5, 'Je te hais parce que je t''aime', 3, 2);


INSERT INTO `se_trouver` (`idL`, `idA`) VALUES
(4, 1),
(21, 1),
(25, 1),
(6, 2),
(12, 2),
(14, 2),
(19, 2),
(22, 2),
(5, 3),
(7, 3),
(18, 3),
(23, 3),
(8, 4),
(17, 4),
(20, 4),
(3, 5),
(9, 5),
(16, 5),
(2, 6),
(10, 6),
(15, 6),
(1, 7),
(11, 7),
(13, 7),
(24, 7);


INSERT INTO `UTILISATEUR` (`idU`, `pseudoU`, `nomU`, `prenomU`, `mailU`, `telU`, `villeU`, `distanceU`, `mdpU`, `ddnU`, `bioU`, `LONG`, `LAT`) VALUES
(1, 'Amaril', 'Swart', 'Wendeline', 'wendeline.swart.lnd@gmail.com', '0608771197', 'Mende', 58, 'b6edd10559b20cb0a3ddaeb15e5267cc', '1999-09-14', NULL, 48.8534, 2.3488),
(2, 'TairaK', 'Ferrier', 'Cirill', 'cirill@asheart.fr', '0610959507', 'Mende', 86, 'fc4dd07a6c9bf6dc5aa9fe6f86f7c6b2', '1998-06-27', NULL, 44.5333, 3.55),
(3, 'Zork', 'Maryam', 'Hadassah', 'amet.massa@lobortis.org', '0950422455', 'Mende', 40, 'OLA87HCT2IE', '1960-04-23', NULL, 44.5167, 3.5),
(4, 'Waly', 'Kyle', 'Buffy', 'in.hendrerit@apurusDuis.edu', '0273134846', 'Mende', 20, 'DGX29RRO1WF', '2005-06-08', NULL, 44.5167, 3.5),
(5, 'oaudue', 'Lawrence', 'Xander', 'In.tincidunt@maurisIntegersem.ca', '0843058167', 'Mende', 78, 'HVU62UPK1IT', '2003-12-30', NULL, 44.5167, 3.5),
(6, 'pksaum', 'Nissim', 'Dylan', 'faucibus.Morbi.vehicula@utnulla.net', '0787136832', 'Mende', 61, 'PJI36AHJ5CC', '1989-10-10', NULL, 44.5167, 3.5),
(7, 'jrjfpq', 'Preston', 'Clio', 'mollis.dui@vulputaterisusa.ca', '0105471355', 'Mende', 51, 'RVV70GKP7DE', '1978-03-05', NULL, 44.5167, 3.5),
(8, 'wjpfgu', 'Zena', 'Vance', 'Nullam.enim@non.net', '0761897655', 'Mende', 5, 'UXL52EDM2FK', '1999-02-13', NULL, 44.5167, 3.5),
(9, 'taexyh', 'Libby', 'Whitney', 'velit.eu@leo.ca', '0727860428', 'Mende', 34, 'AAK05MII8KI', '2000-11-09', NULL, 44.5167, 3.5),
(10, 'ewwedg', 'Dorian', 'Jennifer', 'pellentesque.a@scelerisque.edu', '0330100516', 'Mende', 70, 'XZC41FFG1RS', '1993-08-15', NULL, 44.5167, 3.5),
(11, 'awafsr', 'Jennifer', 'Abra', 'luctus.lobortis.Class@velconvallisin.net', '0135013704', 'Mende', 13, 'XYN50KWJ4EU', '1980-07-26', NULL, 44.5167, 3.5),
(12, 'truc', 'bidule', 'Nelle', 'malesuada@nec.net', '0300426003', 'Mende', 82, 'TJV08OSQ5KH', '2003-11-05', NULL, 44.5167, 3.5),
(13, 'yvmeow', 'Marshall', 'Erich', 'metus.Vivamus@pretiumneque.ca', '0656587022', 'Mende', 19, 'TPS50HML7BU', '1959-12-12', NULL, 44.5167, 3.5),
(14, 'gybpxx', 'Rahim', 'Cameran', 'tristique.ac.eleifend@interdumNunc.edu', '0393645245', 'Mende', 54, 'PBT79EMH4KN', '1990-01-01', NULL, 44.5167, 3.5),
(15, 'qptuhs', 'Linda', 'Hedda', 'odio.semper.cursus@rutrumurna.ca', '0880865935', 'Mende', 84, 'OBM45ESL5EA', '1989-02-27', NULL, 44.5167, 3.5),
(16, 'gwrrla', 'Carol', 'Amos', 'a.facilisis@duiCum.com', '0738843868', 'Badaroux', 65, 'TST03KHM6MT', '2010-06-08', NULL, 44.5167, 3.5),
(17, 'xzxhjl', 'Colorado', 'Rachel', 'Phasellus.nulla@commodo.ca', '0622440765', 'Badaroux', 65, 'QMV14GZU2CK', '2000-11-05', NULL, 44.5167, 3.5),
(18, 'lqrkej', 'Illana', 'Jamalia', 'Duis.elementum.dui@eleifendnunc.com', '0125914655', 'Badaroux', 93, 'ELA14AGS0JD', '1985-01-21', NULL, 44.5167, 3.5),
(19, 'bshchr', 'Quintessa', 'Zia', 'euismod.in@ametconsectetuer.co.uk', '0527133027', 'Langogne', 72, 'ARJ32ZIS8BC', '1992-03-30', NULL, 44.5167, 3.5),
(20, 'pjcsio', 'Josephine', 'Olivia', 'velit@Nullaeget.com', '0413587831', 'Langogne', 77, 'URK10XES1DG', '1978-12-01', NULL, 44.5167, 3.5),
(21, 'sbbwea', 'Odessa', 'Arsenio', 'lacinia.Sed.congue@Duissitamet.ca', '0793655893', 'Bilaspur', 80, 'QDX88EIB5BJ', '1977-09-12', NULL, 44.5167, 3.5),
(22, 'fqlpak', 'Valentine', 'Wesley', 'erat.in@magnatellus.com', '0854706544', 'Torino', 27, 'CKR15YXJ6MZ', '1960-05-13', NULL, 44.5167, 3.5),
(23, 'irabnu', 'Kim', 'Amaya', 'nonummy@egestasblanditNam.net', '0455299762', 'Buzet', 33, 'FJY73WLV6HN', '2008-07-18', NULL, 44.5167, 3.5),
(24, 'clgvus', 'Hayden', 'Rhiannon', 'ultrices.posuere.cubilia@orciluctus.edu', '0308621968', 'Ch‰tillon', 31, 'GQA86UOO2MR', '1945-04-26', NULL, 44.5167, 3.5),
(25, 'cxyndh', 'Grace', 'Brianna', 'mauris@facilisisnon.co.uk', '0605001231', 'Kelowna', 37, 'HZQ51HLW7EA', '1945-04-30', NULL, 44.5167, 3.5);
