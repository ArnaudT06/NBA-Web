-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 14 fév. 2019 à 23:16
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `nbaweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `idarticle` int(11) NOT NULL AUTO_INCREMENT,
  `createur` varchar(255) NOT NULL,
  `titre` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `intro` text NOT NULL,
  `contenu` text NOT NULL,
  `image` text NOT NULL,
  `video` text NOT NULL,
  PRIMARY KEY (`idarticle`)
) ENGINE=MyISAM AUTO_INCREMENT=215 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `blog`
--

INSERT INTO `blog` (`idarticle`, `createur`, `titre`, `type`, `intro`, `contenu`, `image`, `video`) VALUES
(203, 'admin', 'Gilbert Arenas sort de sa retraite… pour jouer en BIG3 League', 'NEWS', 'L\'Agent Zero est de retour. Pas en NBA, où il n\'a plus officié depuis 7 ans. Gilbert Arenas a annoncé son arrivée dans la BIG3 League de 3x3 pour la troisième saison du championnat créé par Ice Cube. L\'ancien joueur des Washington Wizards a fait savoir dans le No Chill Podcast qu\'il aimerait bien évoluer ', '  L\'Agent Zero est de retour. Pas en NBA, où il n\'a plus officié depuis 7 ans. Gilbert Arenas a annoncé son arrivée dans la BIG3 League de 3x3 pour la troisième saison du championnat créé par Ice Cube. L\'ancien joueur des Washington Wizards a fait savoir dans le No Chill Podcast qu\'il aimerait bien évoluer à nouveau avec quelques uns de ses anciens camarades de D.C. \"Ecoutez, je veux les Wizards, OKC ? Je veux tous mes anciens coéquipiers qui ne shootaient pas. Etan Thomas, Brendan Haywood, DeShawn Stevenson (a-t-il regardé les Finales 2011 ?, NDLR), Kwame Brown... Ils connaissent mon style. Et Eddie Jordan, où es-tu ? On connaît les systèmes de jeu\".  Quelques jours plus tôt, c\'est Lamar Odom qui avait fait connaître son intention de se faire drafter par l\'une des 8 équipes de la ligue.', 'https://www.basketsession.com/statics/uploads/2015/10/gilbert-arenas-646x380.jpg', ''),
(204, 'admin', 'Russell Westbrook : « Je n’en ai rien à carrer des critiques »', 'PUNCHLINE', ' Russell Westbrook : « Je n’en ai rien à carrer des critiques »\r\n\r\nRussell Westbrook estime être béni d\'un talent un peu particulier : celui de ne pas prêter attention à ce que disent les gens.', 'Pour réussir dans ce milieu qu\'est le sport professionnel, il faut être solide mentalement. Il faut savoir encaisser les critiques, souvent injustes. Une grande force de Russell Westbrook.\r\n\"J\'ai la chance d\'avoir capacité à en avoir rien à foutre [des critiques]. Ça ne change rien à ma façon de penser ou à ma façon de vivre. J\'ai une famille incroyable, de supers amis, une vie incroyable, un boulot incroyable, un job qui me rapporte plein d\'argent, je suis incroyablement béni et j\'en suis reconnaissant, je suis humble, je ne suis pas en difficulté et je ne pose pas de problèmes. Je vis la meilleure vie possible et je ne me plains absolument pas.\"\r\n\r\nDit comme ça... on se dit qu\'il a en fait complètement raison. Il y aura toujours des détracteurs en raison de son style de jeu - frénétique, chaotique - ou de son adresse. Mais Russell Westbrook s\'est tout de même comporté en patron en laissant bien plus de place à Paul George, excellent cette saison. Ses coéquipiers l\'adorent. En fait, il a beau avoir l\'air toujours énervé sur le terrain, le MVP 2017 est sans doute très heureux dans sa vie et bien dans sa peau.', 'https://www.basketsession.com/statics/uploads/2017/11/171109_nuggets_v_thunder_022-646x380.jpg', ''),
(205, 'admin', 'Quand Larry Bird claquait 47 points avec sa mauvaise main', 'PORTRAIT', 'Il y a 33 ans, Larry Bird détruisait les Portland Trail Blazers alors que sa main droit était inutilisable. Une performance inoubliable.', 'Si Larry Bird est surnommé \"Larry Legend\", ce n\'est pas pour rien. Il y a 33 ans pile poil, l\'ailier des Boston Celtics réussissait une performance inouïe, en inscrivant 47 points de sa main gauche parce que sa droite était touchée. Avec 14 rebonds et 11 passes au compteur à 68%, Bird s\'offrait ce soir là face aux Blazers l\'un des matches les plus marquants des années 80 et de sa carrière.', 'https://www.basketsession.com/statics/uploads/2016/02/larry-bird-nba-all-star-game-1988-646x380.jpg', 'https://youtu.be/3lt1x-k3QGU'),
(210, '', '', '', '', '', '', ''),
(211, '', '', '', '', '', '', ''),
(212, '', '', '', '', '', '', ''),
(213, '', '', '', '', '', '', ''),
(214, '', '', '', '', '', '', ''),
(208, 'admin', 'Vince Carter pense savoir pourquoi le stars ne font plus le Dunk Contest', 'DISCUSSION', 'Vince Carter pense que l\'émergence des réseaux sociaux a petit à petit poussé les stars à éviter de faire le concours de dunks.', 'Il fut un temps où les stars NBA participaient au concours de dunks du samedi avant de jouer le match du dimanche. Exemple en 1985 quand Michael Jordan, Clyde Drexler, Julius Erving, Dominique Wilkins et Larry Nance se défiaient. Une époque qui paraît bien lointaine désormais. En 2000, Tracy McGrady (pas encore superstar), Vince Carter, Jerry Stackhouse et Steve Francis (rookie) s\'affrontaient eux aussi lors du Slam Dunk Contest. Mais depuis, les stars ont déserté l\'événement. Elles restent au premier rang pour admirer les tomars des jeunes. Mais elles ne participent plus.\"Je ne pense pas qu\'il y ait un remède. Je ne sais pas trop [pourquoi les stars n\'y vont plus]. Moi c\'est quelque chose qui m\'intéressait\", explique Vince Carter avant d\'ajouter que les réseaux sociaux mettent trop de pression sur les joueurs. \"Ce n\'était pas difficile à mon époque. On ne se préoccupait pas de ce qui se disait. Maintenant, c\'est instantané. La pression finit par nous atteindre.\"Les stars ont peut-être peur de se ridiculiser. Dennis Smith Jr (New York Knicks), John Collins (Atlanta Hawks), Miles Bridges (Charlotte Hornets) et Hamidou Diallo (Oklahoma City Thunder) participeront au Slam Dunk Contest cette année. Deux sophomores et deux rookies...', 'https://www.basketsession.com/statics/uploads/2017/12/vince-carter-photo-5-1-646x380.jpg', '');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `idcom` int(11) NOT NULL AUTO_INCREMENT,
  `idarticle` int(11) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `commentaire` text NOT NULL,
  `imagecom` varchar(255) NOT NULL,
  `videocom` varchar(255) NOT NULL,
  PRIMARY KEY (`idcom`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`idcom`, `idarticle`, `auteur`, `commentaire`, `imagecom`, `videocom`) VALUES
(13, 203, 'admin', 'j adore!!!', '', ''),
(12, 203, 'admin', 'Super article', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `score`
--

DROP TABLE IF EXISTS `score`;
CREATE TABLE IF NOT EXISTS `score` (
  `id_score` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `nom_gagnant` varchar(255) NOT NULL,
  `nom_perdant` varchar(255) NOT NULL,
  `score_gagnant` int(11) NOT NULL,
  `score_perdant` int(11) NOT NULL,
  PRIMARY KEY (`id_score`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `score`
--

INSERT INTO `score` (`id_score`, `date`, `nom_gagnant`, `nom_perdant`, `score_gagnant`, `score_perdant`) VALUES
(5, '2019-02-15', 'BKL', 'NEW', 98, 89),
(4, '2019-02-15', 'GSW', 'ATL', 115, 90),
(6, '2019-02-15', 'BOS', 'DET', 111, 108),
(7, '2019-02-15', 'MLW', 'TOR', 124, 118);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `birth` date NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` int(255) NOT NULL,
  `joueur` varchar(255) NOT NULL,
  `equipe` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `birth`, `sexe`, `email`, `tel`, `joueur`, `equipe`) VALUES
(6, 'admin', 'admin', '0001-01-01', 'Homme', 'admin@gmail.com', 618156555, 'admin', 'HAWKS'),
(13, 'user1', 'user1', '2008-01-09', 'Homme', 'user1@gmail.com', 601848596, 'Durant', 'KNIKS'),
(14, 'user2', 'user2', '2019-02-12', 'Femme', 'user2@gmail.com', 605521615, 'curry', 'WARRIORS');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
