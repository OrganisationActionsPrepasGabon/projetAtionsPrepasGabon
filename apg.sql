
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `apg`
--

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE IF NOT EXISTS `membres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) NOT NULL,
  `prenom` varchar(45) NOT NULL,
  `ecole` varchar(40) NOT NULL,
  `promotion` varchar(45) NOT NULL,
  `profession` varchar(45) NOT NULL,
  PRIMARY KEY (`id`,`membre_pseudo`),
  KEY `fk_commentaires_membre1_idx` (`membre_pseudo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `membres`
--

INSERT INTO `membres` (`id`, `nom`, `prenom`, `ecole`, `promotion`,'profession') VALUES (1, 'SOUMBOU LEPINDA', 'Terrence', 'ISEP', '2013', 'Ingenieur Logiciel'),
INSERT INTO `membres` (`id`, `nom`, `prenom`, `ecole`, `promotion`,'profession') VALUES (2, 'BESSENGA', 'Terrence', 'ISEP', '2013', 'Ingenieur Logiciel'),
INSERT INTO `membres` (`id`, `nom`, `prenom`, `ecole`, `promotion`,'profession') VALUES (3, 'WANDRILLE', 'Terrence', 'ISEP', '2013', 'Ingenieur Logiciel');



--
-- Structure de la table `commentaires`
--

CREATE TABLE IF NOT EXISTS `commentaires` (
  `membre_id` int(10) NOT NUL,
  `contenu` text NOT NULL,
  `id_projet` varchar(255) NOT NULL,
  PRIMARY KEY (`membre_id`,'contenu','id_projet'),
  FOREIGN KEY ('membre_id')
        REFERENCES membres(id)
        ON DELETE CASCADE,
		
  FOREIGN KEY ('id_projet')
        REFERENCES projets(id)
        ON DELETE CASCADE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

--
-- Contenu de la table `commentaires`
--

INSERT INTO `membres` (`membre_id`, `contenu`, `id_projet`) VALUES (1, 'Ce projet necessite une veritable mobilisation des taupins', 1);
INSERT INTO `membres` (`membre_id`, `contenu`, `id_projet`) VALUES (2, 'Ce projet necessite une veritable mobilisation des taupins', 1);
INSERT INTO `membres` (`membre_id`, `contenu`, `id_projet`) VALUES (3, 'Ce projet necessite une veritable mobilisation des taupins', 1);




-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

CREATE TABLE IF NOT EXISTS `projets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) NOT NULL,
  `description` text NOT NULL,
  `chef_de_projet` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `deadline` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ref`,`membre_pseudo`,`categorie_type`),
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=48 ;

--
-- Contenu de la table `projets`
--

INSERT INTO `projets` (`id`, `nom`, `description`, `chef_de_projet`, `status`, `deadline`) VALUES
(1, 'AnnaBAC', 'Lidée maîtresse de ce projet est de recueillir TOUS les sujets de Mathématiques depuis une année de référence et produire sur des supports papiers et électroniques les corrections équivalentes.', 1, 1,'2014-01-20'),
(2, 'Projet partenarial', 'Pour remplir sa part de contrat avec la ville d'Asniere, ACTIONS PREPAS GABON a lancé trois projets essentiellement éducatif, ludique et social pour participer à la vie associative de la ville', 1, 1,'2014-01-20'),
(3, 'Le Centre des Compétences', 'Créer une cellule d’experts qui travaillera avec nos pôles afin de répondre aux appels d’offre des entreprises, sur des projets pouvant intéresser la structure', 1, 1,'2014-01-20'),
(4, 'La CV-Thèque', 'Base de données qui contiendra les Curriculum Vitae des membres de l’association et donc ceux des élèves et anciens élèves des Classes Préparatoires Scientifiques du Lycée National Léon M'BA', 1, 1,'2014-01-20'),
(5, 'Projet Formation', 'Ce projet Consiste à former nos adhérants sur des thèmes précis par l'intervention d'un expert', 1, 1,'2014-01-20'),
(6, 'A la rencontre des taupins', 'C'est une initiative qui permetra de decouvrir nos membres dans leur quotidient et activités professionnelles via notre snapchat', 1, 1,'2014-01-20'),
(7, 'Projet Livre', 'Ce projet est "un projet taupin", déjà aboutit, consistant à doter maths-sup des manuels et annals de qualité pour être plus compétitif aux concours. Reste plus qu'à determiner sa périodicité', 1, 1,'2014-01-20'),
(8, 'Le projet Taupe', 'Ce projet est au coeur de nos priorités car cela fait déjà un an que les étudiant de maths-sup n'ont plus d'internat. Ce projet est donc une reflxion de l'ensemble des taupins et principalement du bureau actuel', 1, 1,'2014-01-20');

-- --------------------------------------------------------

--
-- Structure de la table `cotisations`
--

CREATE TABLE IF NOT EXISTS `cotisations` (
  `membre_id` int(10) NOT NULL,
  `periode` varchar(45) NOT NULL,
  `montant` int(11) NOT NULL,
  PRIMARY KEY (`membre_id`,'periode','montant')
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

--
-- Contenu de la table `cotisations`
--

INSERT INTO `cotisations` (`membre_id`, `periode`, `montant`) VALUES (1, '2017', 30);


-- --------------------------------------------------------




