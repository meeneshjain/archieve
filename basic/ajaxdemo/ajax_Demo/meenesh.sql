-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 11, 2013 at 03:27 PM
-- Server version: 5.5.32
-- PHP Version: 5.3.10-1ubuntu3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `meenesh`
--

-- --------------------------------------------------------

--
-- Table structure for table `myTable`
--

CREATE TABLE IF NOT EXISTS `myTable` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `login_id` varchar(255) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=101 ;

--
-- Dumping data for table `myTable`
--

INSERT INTO `myTable` (`id`, `login_id`, `Name`, `phone`) VALUES
(1, 'eget@nonloremvitae.edu', 'Bert Little', '1-654-546-4638'),
(2, 'elit.Curabitur@sem.org', 'Scott Charles', '1-752-868-3138'),
(3, 'Aliquam.nec.enim@gravidasitamet.co.uk', 'Zane Barker', '1-808-380-0438'),
(4, 'facilisi.Sed@erategettincidunt.com', 'Blaze Fox', '1-498-398-1074'),
(5, 'non.lacinia.at@augueeutempor.ca', 'Derek Fields', '1-709-112-4107'),
(6, 'eu.turpis.Nulla@eratvolutpat.net', 'Wayne Black', '1-489-901-6017'),
(7, 'arcu.Vestibulum.ut@tristiqueaceleifend.ca', 'Denton Garner', '1-187-887-2662'),
(8, 'Aliquam.erat.volutpat@metusAliquam.net', 'Stuart Schroeder', '700-3621'),
(9, 'gravida@fringillapurus.edu', 'Theodore Norman', '1-455-243-5155'),
(10, 'ut.cursus@ultricies.com', 'Kieran Wolfe', '1-317-304-6608'),
(11, 'Nulla.dignissim@Nullamut.edu', 'Lyle Mcdowell', '1-363-623-8410'),
(12, 'urna@dictumProineget.net', 'Aladdin Ray', '1-138-304-5680'),
(13, 'et.libero.Proin@acliberonec.edu', 'Nissim Henson', '250-7307'),
(14, 'quam.quis.diam@odioauctorvitae.co.uk', 'Valentine Pace', '829-8340'),
(15, 'nonummy.ultricies@placerat.ca', 'Phillip Leonard', '668-6653'),
(16, 'pharetra.nibh@nunc.com', 'Bruce Griffin', '1-138-614-2896'),
(17, 'mauris@eumetusIn.com', 'Laith Gallegos', '1-582-896-9355'),
(18, 'aliquet.libero@vulputatelacus.ca', 'Hall Dawson', '629-9744'),
(19, 'convallis@massalobortis.ca', 'Kaseem Cotton', '289-7493'),
(20, 'semper.et.lacinia@acrisus.net', 'Bevis Mcgee', '1-662-124-0166'),
(21, 'dolor@pellentesqueegetdictum.org', 'Fulton Burris', '1-774-590-1531'),
(22, 'augue.porttitor@risusaultricies.ca', 'Castor Conrad', '1-684-125-7003'),
(23, 'ornare.In.faucibus@montesnasceturridiculus.net', 'Drew Clayton', '1-220-842-5275'),
(24, 'ac@sociisnatoquepenatibus.org', 'Conan Lang', '969-2348'),
(25, 'aliquet.libero.Integer@elementumduiquis.co.uk', 'Hamilton Lawson', '1-132-457-0694'),
(26, 'lorem.ut@Quisqueornaretortor.ca', 'Jackson Pierce', '865-4503'),
(27, 'non@augueeu.org', 'Ahmed Bell', '1-389-937-0881'),
(28, 'Curae@arcuiaculisenim.ca', 'Kamal Hess', '1-610-110-3003'),
(29, 'consequat.lectus.sit@vestibulumnequesed.net', 'Upton Noel', '1-969-613-1341'),
(30, 'at.lacus@velit.co.uk', 'Donovan Randall', '1-801-508-4680'),
(31, 'ullamcorper.magna.Sed@accumsannequeet.co.uk', 'Branden Gay', '1-913-940-7522'),
(32, 'Sed.eu.eros@auctorullamcorpernisl.net', 'Travis Dillard', '1-861-874-7986'),
(33, 'at.pretium@vulputate.ca', 'Dominic Bright', '429-3067'),
(34, 'neque@vel.edu', 'Felix Byers', '1-753-384-0874'),
(35, 'ligula.Aenean.euismod@hendreritneque.co.uk', 'Kane Langley', '1-662-703-4567'),
(36, 'lorem@egestasa.org', 'Aidan Valentine', '1-664-519-1818'),
(37, 'velit.justo.nec@neque.co.uk', 'Graiden Chase', '1-592-891-4559'),
(38, 'nunc@enim.org', 'Josiah Whitaker', '951-4002'),
(39, 'velit@Pellentesque.edu', 'Cooper Daugherty', '859-7067'),
(40, 'Nulla.tempor.augue@Quisquelibero.org', 'Brady Bauer', '1-221-343-1074'),
(41, 'nulla@vitae.edu', 'Knox Roberts', '112-0861'),
(42, 'interdum.Nunc.sollicitudin@Duissit.ca', 'Ivan Livingston', '767-2572'),
(43, 'iaculis@atortor.org', 'Julian Mcdaniel', '210-5191'),
(44, 'Suspendisse.eleifend.Cras@Cum.net', 'Acton Lane', '1-952-417-7166'),
(45, 'ornare.libero@ligula.org', 'Xenos Bennett', '106-1737'),
(46, 'a.felis.ullamcorper@ascelerisque.edu', 'Kibo Harmon', '448-2773'),
(47, 'est.vitae@posuerecubilia.com', 'Dante Kidd', '1-685-749-1160'),
(48, 'id@mauris.co.uk', 'Thomas Dunn', '1-349-574-1508'),
(49, 'ac.fermentum.vel@lacusUtnec.com', 'Caldwell Bell', '366-8647'),
(50, 'et.nunc@elementum.co.uk', 'Dexter Fitzgerald', '1-913-233-9526'),
(51, 'tristique.pharetra.Quisque@quamafelis.edu', 'Giacomo Santiago', '429-9465'),
(52, 'a@odiovel.com', 'Jeremy Francis', '1-636-774-8377'),
(53, 'parturient.montes@fermentumarcuVestibulum.com', 'Omar Jacobson', '1-119-462-0987'),
(54, 'Sed.nulla.ante@nequevenenatis.com', 'Allistair Farley', '1-995-369-2786'),
(55, 'risus.odio.auctor@duisemper.com', 'Theodore Gilliam', '274-9613'),
(56, 'quam.Curabitur.vel@egetlacusMauris.net', 'Alvin Crane', '515-9971'),
(57, 'erat@sociis.org', 'Ali Burnett', '1-173-775-3211'),
(58, 'pulvinar.arcu.et@rutrumnonhendrerit.edu', 'Marsden Riggs', '1-290-602-6753'),
(59, 'orci.Donec@Cras.com', 'Brett Rush', '1-213-471-5721'),
(60, 'mi.tempor.lorem@Duis.org', 'Jin Christian', '1-561-679-8822'),
(61, 'Ut.semper.pretium@In.net', 'Dylan Hudson', '520-3520'),
(62, 'est@consectetueradipiscing.ca', 'Robert Ortiz', '203-9344'),
(63, 'mattis.Integer@In.net', 'Axel Roberson', '870-8679'),
(64, 'magna@blandit.com', 'Rahim Ayers', '1-197-995-1730'),
(65, 'eget.nisi@Sed.ca', 'Vincent Frazier', '1-418-698-7866'),
(66, 'lacus.vestibulum.lorem@vehiculaaliquetlibero.org', 'Griffin Shields', '512-3791'),
(67, 'orci.luctus.et@Sedeu.ca', 'Marsden Larson', '228-7433'),
(68, 'sem.magna@etrutrum.co.uk', 'David Dale', '1-667-232-3929'),
(69, 'vel.est@necmetus.net', 'Anthony Guerra', '1-438-360-8380'),
(70, 'eu.odio.Phasellus@tempor.co.uk', 'Chaim Small', '795-1767'),
(71, 'vitae.semper.egestas@gravida.edu', 'Julian Crawford', '318-4951'),
(72, 'mauris@pellentesquetellussem.edu', 'Logan Rhodes', '940-5548'),
(73, 'mollis@lectuspedeet.org', 'Lamar Blankenship', '1-738-796-2876'),
(74, 'ipsum@seddolorFusce.net', 'Moses Rose', '320-1973'),
(75, 'vel@duiCraspellentesque.edu', 'Fritz Clay', '491-6509'),
(76, 'Integer@lacuspedesagittis.org', 'Quinn Vazquez', '1-270-312-2480'),
(77, 'egestas@anequeNullam.edu', 'Rashad Chang', '1-150-539-7190'),
(78, 'felis@enimCurabiturmassa.ca', 'Gannon Weaver', '1-630-611-6712'),
(79, 'mi@augue.org', 'Oren Mendoza', '1-665-204-7453'),
(80, 'consectetuer@vitae.com', 'Ezekiel Hammond', '254-5081'),
(81, 'libero.Proin.sed@aliquamarcu.edu', 'Luke Emerson', '221-2383'),
(82, 'Aliquam.gravida@nonenimMauris.edu', 'Oleg York', '853-5297'),
(83, 'nec@consectetueripsumnunc.org', 'Raymond Dillon', '1-373-553-1849'),
(84, 'Nunc.ut.erat@duiCum.co.uk', 'Thaddeus Padilla', '961-7117'),
(85, 'ligula.Aliquam.erat@dolorquam.co.uk', 'Kibo Ramirez', '1-993-880-6668'),
(86, 'lobortis.Class@natoquepenatibus.co.uk', 'Hilel Harrell', '367-9351'),
(87, 'Donec.tincidunt.Donec@perinceptoshymenaeos.com', 'Bernard Rutledge', '642-0033'),
(88, 'nascetur@consectetuer.org', 'Victor King', '590-4210'),
(89, 'Donec.fringilla@laciniaatiaculis.ca', 'Hiram Newman', '1-852-347-5059'),
(90, 'arcu@varius.edu', 'Adrian Petty', '204-2540'),
(91, 'molestie@disparturientmontes.net', 'Sawyer Rutledge', '237-9571'),
(92, 'molestie@lobortis.org', 'Philip Ballard', '1-655-533-3554'),
(93, 'velit.egestas.lacinia@esttempor.co.uk', 'Colby Norman', '1-333-614-3697'),
(94, 'vulputate@dictum.net', 'Brent Whitaker', '1-574-490-5342'),
(95, 'tortor.dictum@a.edu', 'Fritz Finch', '1-145-755-2396'),
(96, 'molestie@dapibus.org', 'Denton Roy', '703-0993'),
(97, 'non@nequepellentesque.edu', 'Neville Ray', '1-481-819-0463'),
(98, 'sit@dolorFusce.org', 'Giacomo Clemons', '1-488-556-9377'),
(99, 'ad.litora.torquent@Fuscemi.com', 'Thaddeus Leach', '114-4919'),
(100, 'feugiat.tellus.lorem@gravida.co.uk', 'Brody Whitney', '511-0760');

-- --------------------------------------------------------

--
-- Table structure for table `test_sql_1`
--

CREATE TABLE IF NOT EXISTS `test_sql_1` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(35) NOT NULL,
  `lname` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=85 ;

--
-- Dumping data for table `test_sql_1`
--

INSERT INTO `test_sql_1` (`id`, `name`, `lname`, `email`) VALUES
(1, 'meenesh', 'jain', 'meenesh@gmail.com'),
(2, 'meenesh', 'jain', 'email2'),
(3, 'ro', 'ja', 'asdasd'),
(4, 'ro', 'ja', 'asdasd'),
(5, 'ro', 'ja', 'asdasd'),
(6, 'ro', 'ja', 'asdasd'),
(7, 'meenesh', 'jain', 'email2'),
(8, 'ro', 'ja', 'asdasd'),
(9, 'ro', 'ja', 'asdasd'),
(10, 'ro', 'ja', 'asdasd'),
(11, 'ro', 'ja', 'asdasd'),
(12, 'meenesh', 'jain', 'email2'),
(13, 'ro', 'ja', 'asdasd'),
(14, 'ro', 'ja', 'asdasd'),
(15, 'ro', 'ja', 'asdasd'),
(16, 'ro', 'ja', 'asdasd'),
(17, 'meenesh', 'jain', 'email2'),
(18, 'ro', 'ja', 'asdasd'),
(19, 'ro', 'ja', 'asdasd'),
(20, 'ro', 'ja', 'asdasd'),
(21, 'ro', 'ja', 'asdasd'),
(22, 'meenesh', 'jain', 'email2'),
(23, 'ro', 'ja', 'asdasd'),
(24, 'ro', 'ja', 'asdasd'),
(25, 'ro', 'ja', 'asdasd'),
(26, 'ro', 'ja', 'asdasd'),
(27, 'meenesh', 'jain', 'email2'),
(28, 'ro', 'ja', 'asdasd'),
(29, 'ro', 'ja', 'asdasd'),
(30, 'ro', 'ja', 'asdasd'),
(31, 'ro', 'ja', 'asdasd'),
(32, 'meenesh', 'jain', 'email2'),
(33, 'ro', 'ja', 'asdasd'),
(34, 'ro', 'ja', 'asdasd'),
(35, 'ro', 'ja', 'asdasd'),
(36, 'ro', 'ja', 'asdasd'),
(37, 'meenesh', 'jain', 'email2'),
(38, 'ro', 'ja', 'asdasd'),
(39, 'ro', 'ja', 'asdasd'),
(40, 'ro', 'ja', 'asdasd'),
(41, 'ro', 'ja', 'asdasd'),
(42, 'meenesh', 'jain', 'email2'),
(43, 'ro', 'ja', 'asdasd'),
(44, 'ro', 'ja', 'asdasd'),
(45, 'ro', 'ja', 'asdasd'),
(46, 'ro', 'ja', 'asdasd'),
(47, 'meenesh', 'jain', 'email2'),
(48, 'ro', 'ja', 'asdasd'),
(49, 'ro', 'ja', 'asdasd'),
(50, 'ro', 'ja', 'asdasd'),
(51, 'ro', 'ja', 'asdasd'),
(52, 'meenesh', 'jain', 'email2'),
(53, 'ro', 'ja', 'asdasd'),
(54, 'ro', 'ja', 'asdasd'),
(55, 'ro', 'ja', 'asdasd'),
(56, 'ro', 'ja', 'asdasd'),
(57, 'meenesh', 'jain', 'email2'),
(58, 'ro', 'ja', 'asdasd'),
(59, 'ro', 'ja', 'asdasd'),
(60, 'ro', 'ja', 'asdasd'),
(61, 'ro', 'ja', 'asdasd'),
(62, 'meenesh', 'jain', 'email2'),
(63, 'ro', 'ja', 'asdasd'),
(64, 'ro', 'ja', 'asdasd'),
(65, 'ro', 'ja', 'asdasd'),
(66, 'ro', 'ja', 'asdasd'),
(67, 'meenesh', 'jain', 'email2'),
(68, 'ro', 'ja', 'asdasd'),
(69, 'ro', 'ja', 'asdasd'),
(70, 'ro', 'ja', 'asdasd'),
(71, 'ro', 'ja', 'asdasd'),
(72, 'meenesh', 'jain', 'email2'),
(73, 'ro', 'ja', 'asdasd'),
(74, 'ro', 'ja', 'asdasd'),
(75, 'ro', 'ja', 'asdasd'),
(76, 'ro', 'ja', 'asdasd'),
(77, 'meenesh', 'jain', 'email2'),
(78, 'ro', 'ja', 'asdasd'),
(79, 'ro', 'ja', 'asdasd'),
(80, 'ro', 'ja', 'asdasd'),
(81, 'ro', 'ja', 'asdasd'),
(82, 'rasdsa', 'asdasd', 'sadasdasd'),
(83, 'meenesh', 'ja', ''),
(84, 'meenesh', 'jas', '');

-- --------------------------------------------------------

--
-- Table structure for table `test_sql_2`
--

CREATE TABLE IF NOT EXISTS `test_sql_2` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Fname` varchar(50) DEFAULT NULL,
  `Lname` varchar(54) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `test_sql_2`
--

INSERT INTO `test_sql_2` (`ID`, `Fname`, `Lname`, `email`) VALUES
(1, 'rockstar', 'rock', 'meens@gmail.com'),
(2, 'rockss', 'rockrers', 'meens@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `test_sql_3`
--

CREATE TABLE IF NOT EXISTS `test_sql_3` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Fname` varchar(50) DEFAULT NULL,
  `Lname` varchar(54) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
