-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server versie:                10.1.21-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Versie:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Databasestructuur van worktoolsdb wordt geschreven
CREATE DATABASE IF NOT EXISTS `worktoolsdb` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `worktoolsdb`;

-- Structuur van  tabel worktoolsdb.bookmark wordt geschreven
CREATE TABLE IF NOT EXISTS `bookmark` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumpen data van tabel worktoolsdb.bookmark: ~8 rows (ongeveer)
/*!40000 ALTER TABLE `bookmark` DISABLE KEYS */;
REPLACE INTO `bookmark` (`id`, `title`, `path`) VALUES
	(1, 'web projecten', 'C:\\xampp\\htdocs\\projects\r\n'),
	(2, 'GDPR', 'C:\\Users\\jvanbiervliet\\OneDrive - Etion\\Docs\\security'),
	(3, 'Overzicht', 'w:/03_Ondersteuning/03_03_ICT/Prive/Gebouwenbeheer/Camera\'s/ETION-cameras.html'),
	(4, 'Mijn folder', 'W:\\tmp\\Jan'),
	(5, 'Cams', 'w:/03_Ondersteuning/03_03_ICT/Prive/Gebouwenbeheer/Camera\'s/ETION-cameras.html'),
	(6, 'Herstelsleutels', 'W:\\03_Ondersteuning\\03_03_ICT\\Prive\\Knowledgebase\\Security\\DECRYPTIESLEUTELS'),
	(7, 'Infra', 'W:\\03_Ondersteuning\\03_03_ICT\\Prive\\Knowledgebase\\Infrastructure'),
	(8, 'Aurelium', 'https://aurelium.sharepoint.com/sites/piazzaportal/4035810/Pages/Home.aspx'),
	(9, 'Trac-helpdesk', 'https://vkw.projecthut.com/trac/helpdesk'),
	(10, 'Trac-netwerk', 'https://vkw.projecthut.com/trac/helpdesk/wiki/NetwerkDiagram');
/*!40000 ALTER TABLE `bookmark` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
