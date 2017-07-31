-- phpMyAdmin SQL Dump
-- version 4.6.6deb3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 31, 2017 at 11:00 PM
-- Server version: 5.7.17-1
-- PHP Version: 7.0.16-3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cibermania`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(103, 'Windows'),
(104, 'Linux'),
(105, 'Android'),
(106, 'IOS'),
(107, 'Internet'),
(108, 'Tecnología');

-- --------------------------------------------------------

--
-- Table structure for table `category_post`
--

CREATE TABLE `category_post` (
  `category_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `activated_date` datetime NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ip_client` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_validate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `desccription` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `name`, `last_name`, `token`, `created_date`, `activated_date`, `picture`, `ip_client`, `url_validate`, `desccription`) VALUES
(172, 'Padro ', 'Gonzales chacon', '59765f9082c53', '2017-07-24 22:58:56', '2017-07-24 22:58:56', '3.jpg', '0.0.0.0', 'localhost', NULL),
(173, 'Manuel', 'Gonzales chacon', '59765f9082d63', '2017-07-24 22:58:56', '2017-07-24 22:58:56', '3.jpg', '0.0.0.0', 'localhost', NULL),
(174, 'Maria', 'Vazquez Benitez', '59765f9082e21', '2017-07-24 22:58:56', '2017-07-24 22:58:56', '3.jpg', '0.0.0.0', 'localhost', NULL),
(175, 'Maria', 'Blanco perez', '59765f9082eef', '2017-07-24 22:58:56', '2017-07-24 22:58:56', '3.jpg', '0.0.0.0', 'localhost', NULL),
(176, 'Yusmel', 'Gonzales chacon', '59765f9082feb', '2017-07-24 22:58:56', '2017-07-24 22:58:56', '3.jpg', '0.0.0.0', 'localhost', NULL),
(177, 'Maria', 'Gamboa benitez', '59765f90830d1', '2017-07-24 22:58:56', '2017-07-24 22:58:56', '3.jpg', '0.0.0.0', 'localhost', NULL),
(178, 'Yusmel', 'Gamboa benitez', '59765f90831c7', '2017-07-24 22:58:56', '2017-07-24 22:58:56', '3.jpg', '0.0.0.0', 'localhost', NULL),
(179, 'Yusmel', 'Olivar Arias', '59765f90832a7', '2017-07-24 22:58:56', '2017-07-24 22:58:56', '3.jpg', '0.0.0.0', 'localhost', NULL),
(180, 'Yusmel', 'Olivar Arias', '59765f9083362', '2017-07-24 22:58:56', '2017-07-24 22:58:56', '3.jpg', '0.0.0.0', 'localhost', NULL),
(181, 'Manuel', 'Gomez Perez', '59765f9083430', '2017-07-24 22:58:56', '2017-07-24 22:58:56', '3.jpg', '0.0.0.0', 'localhost', NULL),
(182, 'Yusmel', 'Gamboaa', '5976623ca4061', '2017-07-24 23:10:20', '2017-07-24 23:10:20', 'usr-597e55049cc82Yusmel-03-06-10_0046.jpg', '127.0.0.1', 'localhost/token/5976623ca4061', '<p>hola mundo cruel</p>');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `person_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `short_content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  `img_post` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `views` int(11) NOT NULL,
  `checked` tinyint(1) NOT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `person_id`, `title`, `content`, `short_content`, `created_date`, `update_date`, `img_post`, `slug`, `views`, `checked`, `category_id`) VALUES
(102, 178, 'Whatapps caduca este mes0', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. \n        Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque \n        penatibus et magnis dis parturient montes, nascetur ridiculus mus. \n        Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. \n        Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, \n        vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,\n         justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.\n          Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula,\n           porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, \n           viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.\n            Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper\n             ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget \n             condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem \n             neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit \n             id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien \n             ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget \n             eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. \n             Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, \n             augue velit cursus nunc,', 'Lorem ipsum dolor sit amet, \n        consectetuer adipiscing elit. \n        Aenean commodo ligula eget dolor.\n         Aenean massa. Cum sociis natoque \n        penatibus et magnis dis parturient ', '2017-07-24 22:58:56', '2017-07-24 22:58:56', '3.jpg', 'whatapps-caduca-este-mes0', 84, 0, 107),
(103, 173, 'Real madrid ficha1', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. \n        Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque \n        penatibus et magnis dis parturient montes, nascetur ridiculus mus. \n        Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. \n        Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, \n        vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,\n         justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.\n          Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula,\n           porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, \n           viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.\n            Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper\n             ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget \n             condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem \n             neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit \n             id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien \n             ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget \n             eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. \n             Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, \n             augue velit cursus nunc,', 'Lorem ipsum dolor sit amet, \n        consectetuer adipiscing elit. \n        Aenean commodo ligula eget dolor.\n         Aenean massa. Cum sociis natoque \n        penatibus et magnis dis parturient ', '2017-07-24 22:58:56', '2017-07-24 22:58:56', '3.jpg', 'real-madrid-ficha1', 22, 0, 107),
(104, 176, 'Facebook fake2', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. \n        Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque \n        penatibus et magnis dis parturient montes, nascetur ridiculus mus. \n        Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. \n        Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, \n        vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,\n         justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.\n          Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula,\n           porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, \n           viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.\n            Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper\n             ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget \n             condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem \n             neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit \n             id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien \n             ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget \n             eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. \n             Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, \n             augue velit cursus nunc,', 'Lorem ipsum dolor sit amet, \n        consectetuer adipiscing elit. \n        Aenean commodo ligula eget dolor.\n         Aenean massa. Cum sociis natoque \n        penatibus et magnis dis parturient ', '2017-07-24 22:58:56', '2017-07-24 22:58:56', '3.jpg', 'facebook-fake2', 2, 0, 105),
(105, 179, 'Titulos de noticia3', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. \n        Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque \n        penatibus et magnis dis parturient montes, nascetur ridiculus mus. \n        Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. \n        Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, \n        vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,\n         justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.\n          Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula,\n           porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, \n           viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.\n            Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper\n             ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget \n             condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem \n             neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit \n             id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien \n             ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget \n             eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. \n             Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, \n             augue velit cursus nunc,', 'Lorem ipsum dolor sit amet, \n        consectetuer adipiscing elit. \n        Aenean commodo ligula eget dolor.\n         Aenean massa. Cum sociis natoque \n        penatibus et magnis dis parturient ', '2017-07-24 22:58:56', '2017-07-24 22:58:56', '3.jpg', 'titulos-de-noticia3', 1, 0, 105),
(106, 174, 'Amazon lo peta4', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. \n        Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque \n        penatibus et magnis dis parturient montes, nascetur ridiculus mus. \n        Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. \n        Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, \n        vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,\n         justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.\n          Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula,\n           porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, \n           viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.\n            Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper\n             ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget \n             condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem \n             neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit \n             id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien \n             ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget \n             eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. \n             Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, \n             augue velit cursus nunc,', 'Lorem ipsum dolor sit amet, \n        consectetuer adipiscing elit. \n        Aenean commodo ligula eget dolor.\n         Aenean massa. Cum sociis natoque \n        penatibus et magnis dis parturient ', '2017-07-24 22:58:56', '2017-07-24 22:58:56', '3.jpg', 'amazon-lo-peta4', 6, 0, 105),
(107, 181, 'Google lanza nueva apps5', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. \n        Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque \n        penatibus et magnis dis parturient montes, nascetur ridiculus mus. \n        Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. \n        Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, \n        vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,\n         justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.\n          Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula,\n           porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, \n           viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.\n            Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper\n             ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget \n             condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem \n             neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit \n             id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien \n             ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget \n             eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. \n             Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, \n             augue velit cursus nunc,', 'Lorem ipsum dolor sit amet, \n        consectetuer adipiscing elit. \n        Aenean commodo ligula eget dolor.\n         Aenean massa. Cum sociis natoque \n        penatibus et magnis dis parturient ', '2017-07-24 22:58:56', '2017-07-24 22:58:56', '3.jpg', 'google-lanza-nueva-apps5', 3, 0, 104),
(108, 176, 'Whatapps caduca este mes6', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. \n        Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque \n        penatibus et magnis dis parturient montes, nascetur ridiculus mus. \n        Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. \n        Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, \n        vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,\n         justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.\n          Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula,\n           porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, \n           viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.\n            Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper\n             ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget \n             condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem \n             neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit \n             id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien \n             ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget \n             eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. \n             Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, \n             augue velit cursus nunc,', 'Lorem ipsum dolor sit amet, \n        consectetuer adipiscing elit. \n        Aenean commodo ligula eget dolor.\n         Aenean massa. Cum sociis natoque \n        penatibus et magnis dis parturient ', '2017-07-24 22:58:56', '2017-07-24 22:58:56', '3.jpg', 'whatapps-caduca-este-mes6', 0, 0, 108),
(109, 178, 'Titulos de noticia7', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. \n        Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque \n        penatibus et magnis dis parturient montes, nascetur ridiculus mus. \n        Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. \n        Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, \n        vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,\n         justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.\n          Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula,\n           porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, \n           viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.\n            Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper\n             ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget \n             condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem \n             neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit \n             id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien \n             ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget \n             eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. \n             Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, \n             augue velit cursus nunc,', 'Lorem ipsum dolor sit amet, \n        consectetuer adipiscing elit. \n        Aenean commodo ligula eget dolor.\n         Aenean massa. Cum sociis natoque \n        penatibus et magnis dis parturient ', '2017-07-24 22:58:56', '2017-07-24 22:58:56', '3.jpg', 'titulos-de-noticia7', 2, 0, 104),
(110, 173, 'Google lanza nueva apps8', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. \n        Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque \n        penatibus et magnis dis parturient montes, nascetur ridiculus mus. \n        Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. \n        Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, \n        vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,\n         justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.\n          Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula,\n           porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, \n           viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.\n            Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper\n             ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget \n             condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem \n             neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit \n             id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien \n             ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget \n             eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. \n             Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, \n             augue velit cursus nunc,', 'Lorem ipsum dolor sit amet, \n        consectetuer adipiscing elit. \n        Aenean commodo ligula eget dolor.\n         Aenean massa. Cum sociis natoque \n        penatibus et magnis dis parturient ', '2017-07-24 22:58:56', '2017-07-24 22:58:56', '3.jpg', 'google-lanza-nueva-apps8', 0, 0, 105),
(111, 174, 'Google lanza nueva apps9', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. \n        Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque \n        penatibus et magnis dis parturient montes, nascetur ridiculus mus. \n        Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. \n        Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, \n        vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,\n         justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.\n          Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula,\n           porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, \n           viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.\n            Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper\n             ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget \n             condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem \n             neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit \n             id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien \n             ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget \n             eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. \n             Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, \n             augue velit cursus nunc,', 'Lorem ipsum dolor sit amet, \n        consectetuer adipiscing elit. \n        Aenean commodo ligula eget dolor.\n         Aenean massa. Cum sociis natoque \n        penatibus et magnis dis parturient ', '2017-07-24 22:58:56', '2017-07-24 22:58:56', '3.jpg', 'google-lanza-nueva-apps9', 1, 0, 105),
(112, 182, 'asdasd', 'sasdasd', 'sasdasd', '2017-07-28 23:57:16', '2017-07-28 23:57:16', 'post-597bb33c748e7-516442739_1329182581_big.jpg', 'asdasd', 3, 0, 103),
(113, 182, 'Twitter prueba un modo de suscripción: 99 dólares al mes por amplificar todos tus mensajes', 'Twitter está a punto de permitirte mejorar el alcance tus publicaciones a cambio de una cuota mensual. La red social ha empezado a enviarle notas informativas a algunos usuarios que hayan contratado publicidad antes para informarles sobre este programa, el cual tendrá un coste de 99 dólares al mes.\r\n\r\nEn esencia, lo que proponen es una especie de tarifa plana como alternativa a la contratación puntual de anuncios. En vez de tener que configurar campañas publicitarias indendientes, tu pagas lo que te corresponde y a cambio todo lo que escribas se amplificará para llegarle a más personas.\r\n\r\n\"Este programa amplifica automáticamente tus tweets y perfil por 99 dólares al mes. Pero tus primeros 30 días de promoción serán gratuitos\", podemos leer en la nota publicada por uno de los usuarios que la ha recibido. \"Esto te permite hacer crecer el tu audiencia y tu influencia sin iniciar una campaña o ni siquiera crear un anuncio. Podrás cancelarlo en cualquier momento\".\r\n\r\nLas notas que Twitter le ha empezado a enviar a algunos usuarios también especifican que una vez suscritos, en cinco días hábiles empezarán a promocionar tus tuits automáticamente. También te ofrecerán información periódica sobre a cuánta gente le has llegado, las impresiones o el número de nuevos usuarios.\r\n\r\nUna medida destinada al mundo empresarial\r\n\r\nEvidentemente, los usuarios de a pie no vamos a estar dispuestos a pagar esta gran cantidad de dinero a cambio de ganar influencia. Esta medida no está hecha para nosotros, sino que está dirigido a las empresas que suelan utilizar de manera recurrente el sistema de anuncios de Twitter. En ese aspecto parece una oferta bastante interesante.\r\n\r\nRespecto a este tema del público objetivo, portavoces de Twitter le han contado a medios como Mashable que el programa aún está en fase de pruebas, y que su idea es ofrecérselo a pequeños y medianos negocios para que puedan tratar de mejorar su visibilidad.\r\n\r\nLo que queda por ver, y quizá es la mayor preocupación que puede surgir al leer sobre este proyecto, es en qué medida nos va a afectar este programa al resto de usuarios. Las redes sociales se están llenando cada vez de más publicidad, y no sería plato de buen gusto para nadie que el número de mensajes promocionados creciese sin control.\r\n\r\nEn Xataka | \"Burlarse\" por Twitter y acabar en prisión: un año de cárcel para la usuaria que emitió los tweets sobre Carrero Blanco', 'Twitter está a punto de permitirte mejorar el alcance tus publicaciones a cambio de una cuota...', '2017-07-29 22:23:10', '2017-07-29 22:23:10', 'post-597ceeae2851d-1366_2000.png', 'twitter-prueba-un-modo-de-suscripcin-99-dlares-al-mes-por-amplificar-todos-tus-mensajes', 2, 0, 108),
(114, 182, 'Todo lo que está mal en el \"hackeo\" de la \'Independence Day\' original', 'Veinte años después de convertirse en todo un fenómeno, de arrebatar a \'Parque Jurásico\' el récord de recaudación (aunque le duró poco, apenas un año) y de elevar a status de estrella a Will Smith, \'Independence Day\' volvió a las carteleras el año pasado. La cinta de Roland Emmerich nos deparó momentos muy recordados (la destrucción de la Casa Blanca, el discurso del presidente...) pero ninguno como la \"curiosa\" manera en la que los humanos conseguíamos vencer a los aliens (Alerta Spoiler): un virus informático.\r\n\r\nPor lo tanto y aunque tengamos aún en la retina el desastre que supuso la reciente \'Independence Day: Contraataque\', esta película no consiguió igualar la heroicidad \"hacker\" de David Levinson, el personaje interpretado por Jeff Goldblum. Por eso vamos a volver a 1996 para analizar esa mítica escena con (poco) esmero y (mucha) sorna.\r\n<iframe width=\"650\" height=\"366\" src=\"https://www.youtube.com/embed/kA2WzBi2grE?enablejsapi=1&amp;origin=https://www.xataka.com\" frameborder=\"0\" allowfullscreen=\"\" id=\"widget2\">   </iframe>\r\n\r\nVamos a hackear una nave extraterrestre\r\n\r\nLos aliens llegan a la Tierra el 2 de Julio de 1995 con unas naves de combate gigantescas e impenetrables y las aviesas intenciones de cargarse la Tierra y o que es más grave: la fiesta del 4 de Julio. En minutos reducen a cenizas Los Ángeles, Nueva York y Washington (y unas cuantas ciudades del resto del mundo pero eso ya tal) y avanzan.\r\n\r\nEn dos días se prevé que la humanidad sea exterminada. Nuestra última esperanza es Obi-Wan son una nave alien estropeada (y escondida en el Área 51) desde Roswell y una idea: meter un virus en el sistema informático de los aliens para apagar los escudos impenetrables de las naves de combate y darles fuerte y duro con nuestros cazas y nuestra artillería.\r\n\r\nSin embargo en 1996 todavía no había wifi gratuito y de calidad en las grandes ciudades (bueno, ni en 2016, para que nos vamos a engañar) por lo que las naves aliens tienen que montar su propio wifi para conectarse y usar el whatsapp marciano para coordinar sus ataques. Obviamente, de esta súper wifi alienígena, no nos quieren dar la clave (tienes que ser cliente, como la del Starbucks).', 'Veinte años después de convertirse en todo un fenómeno, de arrebatar a \'Parque Jurásico\' el...', '2017-07-29 22:28:25', '2017-07-29 22:28:25', 'post-597cefe9aab8b-1366_2000.jpg', 'todo-lo-que-est-mal-en-el-hackeo-de-la-independence-day-original', 1, 0, 107),
(115, 182, 'Cómo hacerse millonario plantando cara a la vieja banca', 'Los nuevos emprendedores ven la banca como ese diplodocus lento, arrugado, que no se extingue por pura necesidad biológica. Si aquél cumplía una función en la cadena trófica, el sistema de bancos franquiciados, cajas de ahorros y tarjetas de crédito de plástico responde a unas necesidades antiguas y algo inmovilistas.\r\n\r\nY sólo hay que fijarse en otras batalla del siglo XXI: la que libró Napster contra la industria musical, Uber contra las compañías de taxis, Netflix contra los cines. Son batallas accidentales, de hecho: si existe un mercado es porque hay nicho de explotación. ¿Cómo reaccionan los bancos? Estudiando subidas en las comisiones.\r\n\r\nComo decía Brett King, CEO de Moven «el 80% de los millenials no pisará jamás una entidad bancaria». Y, si el 31% de los españoles no quiere tener cuenta bancaria y un 40% contrata sus cuentas a través de internet, la gran realidad es que poseer una cuenta bancaria hoy día, con las facilidades digitales, no tiene mucho sentido. Acusados de falta de transparencia —que muchos bancos dirimen a errores fácticos—, parece que ha llegado el momento de las fintech.', 'Los nuevos emprendedores ven la banca como ese diplodocus lento, arrugado, que no se extingue...', '2017-07-29 22:30:40', '2017-07-29 22:30:40', 'post-597cf070e033e-1366_2000 (1).jpg', 'cmo-hacerse-millonario-plantando-cara-a-la-vieja-banca', 0, 0, 108),
(116, 182, 'Samba como servidor de archivos como miembro de un dominio', 'Samba como servidor de archivos en Ubuntu 14.04\r\n\r\nLos pasos a realizar son los siguientes\r\n\r\nInstalar y configurar ntp\r\nsudo apt install ntp\r\n\r\nEditar ntp.conf con los datos a continuación:\r\nsudo nano /etc/ntp.conf\r\n\r\n#####################################\r\ndriftfile /var/lib/ntp/ntp.drift\r\nstatistics loopstats peerstats clockstats\r\nfilegen loopstats file loopstats type day enable\r\nfilegen peerstats file peerstats type day enable\r\nfilegen clockstats file clockstats type day enable\r\nserver miserverntp.midominio.cu\r\nrestrict -4 default kod notrap nomodify nopeer\r\nrestrict -6 default kod notrap nomodify nopeer\r\nrestrict 127.0.0.1\r\nrestrict ::1\r\nrestrict 192.168.1.0 mask 255.255.255.0 nomodify notrap\r\nbroadcast 172.16.1.224\r\nbroadcast 192.168.1.255\r\ntos orphan\r\nserver 127.127.1.0\r\nfudge 127.127.1.0 stratum 8\r\n############################################\r\nCrear script para sincronizar con ntp público\r\nsudo nano ntp.sh', 'Samba como servidor de archivos en Ubuntu 14.04\r\n\r\nLos pasos a realizar son los...', '2017-07-29 22:32:16', '2017-07-29 22:32:16', 'post-597cf0d081749-1366_2000 (2).jpg', 'samba-como-servidor-de-archivos-como-miembro-de-un-dominio', 21, 0, 104),
(117, 182, 'lenguajes de programación más relevantes en 2017', '<p>Ser programador se ha convertido en una de las profesiones en mayor demanda en la actualidad. En un mundo donde pr&aacute;cticamente todo est&aacute; controlado por la tecnolog&iacute;a, tener este tipo de habilidades es muy valioso.</p>\r\n\r\n<p>Ahora, la cantidad de&nbsp;<a href=\"https://www.genbeta.com/tag/lenguajes-de-programacion\">lenguajes de programaci&oacute;n</a>&nbsp;y los diferentes usos que se les dan, es otra historia. Si eres principiante y no sabes&nbsp;<a href=\"https://www.genbeta.com/web/que-lenguaje-de-programacion-deberias-aprender-este-test-te-lo-dice\">qu&eacute; lenguaje de programaci&oacute;n aprender</a>&nbsp;o ya eres programador y te interesa saber cu&aacute;les son&nbsp;<strong>los m&aacute;s relevantes</strong>, en&nbsp;<a href=\"http://spectrum.ieee.org/static/interactive-the-top-programming-languages-2017\">IEEE Spectrum han creado una app que hace justo esto</a>.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>La webapp se encarga de calificar&nbsp;<strong>la popularidad de docenas de lenguajes de programaci&oacute;n</strong>. Adem&aacute;s lo hace filtrando la lista seg&uacute;n los diferentes sectores donde un lenguaje es m&aacute;s usado. Por ejemplo, en la web el m&aacute;s popular es Python, pero en plataformas m&oacute;viles es C.</p>\r\n\r\n<p>Para armar el&nbsp;<em>ranking</em>&nbsp;en&nbsp;<a href=\"http://spectrum.ieee.org/ns/IEEE_TPL_2017/methods.html\">IEEE Spectrum</a>&nbsp;utilizan&nbsp;<strong>una docena de metricas de 10 fuentes diferentes</strong>. Esto incluye m&aacute;s de 300 lenguajes de programaci&oacute;n recogidos de GitHub, el volumen de informaci&oacute;n disponible sobre un lenguaje en Google, las tendendias en Google para x lenguaje de programaci&oacute;n durante 2017, adem&aacute;s de la popularidad y tendencias en sitios como Stack Overflow, Reddit, Hacker News, Twitter, CareerBuilder, Dice y m&aacute;s.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Python, C, Java, C++, C#, R, JavaScript, PHP, Go, y Swift</strong>&nbsp;encabezan la lista combinada en todos los sectores. El sitio te deja filtrar el ranking de resultados seg&uacute;n web, m&oacute;vil, empresarial y sistemas integrados. Tambi&eacute;n puedes comparar los datos con los rankings de 2014, 2015, y 2016.</p>', '<p>Ser programador se ha convertido en una de las profesiones en mayor demanda en la actualidad....', '2017-07-29 23:31:55', '2017-07-29 23:31:55', 'post-597cfecab437a-1366_2000.jpg', 'lenguajes-de-programacin-ms-relevantes-en-2017', 1, 0, 107),
(118, 182, '¿Quién será el nuevo CEO de Uber?', '<p>Marissa Mayer, Sheryl Sandberg&hellip; desde que Travis Kalanick dej&oacute; su puesto hace m&aacute;s de un mes, la quiniela de nombres de posibles sustitutos no hace m&aacute;s que aumentar.</p>\r\n\r\n<p>El pasado 20 de junio Travis Kalanick dimiti&oacute; (una de esas&nbsp;<a href=\"http://www.itespresso.es/el-desastre-de-uber-fracaso-y-exito-simultaneos-168361.html\">dimisiones algo forzadas</a>) como CEO de Uber, tras meses de esc&aacute;ndalos y gracias sobre todo a la presi&oacute;n de inversores importantes que no quer&iacute;an que el nombre de la compa&ntilde;&iacute;a estuviese tan unido a cosas como el acoso sexual o la quebrantaci&oacute;n de las leyes. Como en toda salida algo precipitada de un alto cargo, Kalanick no ten&iacute;a un sustituto preparado y listo para tomar el relevo.&nbsp;<strong>Uber lleva m&aacute;s de un mes en plena b&uacute;squeda de CEO.</strong></p>\r\n\r\n<p>Las especulaciones, como siempre en estos casos, no tardaron en llegar. Es f&aacute;cil: solo hay que echar un vistazo a altos cargos del sector, a gente con experiencia al frente de una firma tecnol&oacute;gica que pueda estar dispuesta a tomar las riendas de Uber porque, o bien est&aacute; en plena b&uacute;squeda de nueva compa&ntilde;&iacute;a o porque quiere crecer y en el lugar en el que est&aacute; sabe que llegar a CEO es casi imposible.</p>\r\n\r\n<p>Estos dos casos los cumplen a la perfecci&oacute;n dos de las personas cuyos nombres sonaron m&aacute;s durante este mes para sustituir a Kalanick:&nbsp;<strong>Marissa Mayer, reci&eacute;n relevada de su cargo como CEO de Yahoo, y Sheryl Sandberg</strong>, COO de Facebook y compa&ntilde;&iacute;a en la que mientras Mark Zuckerberg siga vivo es dif&iacute;cil imaginarse a otra persona como CEO, especialmente ahora que ya ha superado los problemas y cr&iacute;ticas con los que siempre se le atacaba en los primeros a&ntilde;os.</p>\r\n\r\n<p>Pero &iquest;ser&aacute; alguna de ellas la nueva CEO de Uber? Todo parece indicar que no. Sheryl Sandberg ser&iacute;a perfecta para cambiar uno de los problemas principales de la firma, su cultura t&oacute;xica, pero, como recogen en Recode, fuentes cercanas a la COO han dicho que est&aacute; contenta en su puesto actual en Facebook. Adem&aacute;s, en caso de querer abandonar la compa&ntilde;&iacute;a, tendr&iacute;a a su alcance puestos mucho mejores que el de arreglar el caos de Uber. En cuanto a Mayer, su paso por Yahoo muestra que es lo contrario a Sandberg y que el tema de la cultura de la empresa no arreglar&iacute;a. El nombre se rumorea, s&iacute;, pero<strong>&nbsp;no parece que sea algo que en Uber se est&eacute;n planteando.</strong></p>\r\n\r\n<h3>M&aacute;s candidatas que no lo ser&aacute;n: Meg Whitman, Arianna Huffington y Susan Wojcicki</h3>\r\n\r\n<p>En estas &uacute;ltimas semanas han ido apareciendo m&aacute;s nombres, con una<strong>&nbsp;mayor&iacute;a clara de candidatas frente a candidatos</strong>&nbsp;(quiz&aacute; porque muchos piensan que si uno de los problemas de Uber era una cultura de acoso sexual que no se penalizaba, una CEO mujer es lo m&aacute;s adecuado para corregirla). Pero todas, una a una, han ido saliendo a la esfera p&uacute;blica para desmentir que est&eacute;n considerando ponerse al mando de Uber.</p>\r\n\r\n<p><strong>Susan Wojcicki, al mando de YouTube</strong>&nbsp;en Google desde hace bastante tiempo, ser&iacute;a una buena elecci&oacute;n: una alta ejecutiva con un mont&oacute;n de experiencia y unos pies llamativamente en la tierra en una industria llena de egos sobredimensionados. No obstante, su caso es como el de Sandberg: est&aacute; contenta con su trabajo y no est&aacute; pensando en cambiar. Y, especialmente, no le apetece meterse a arreglar el desastre de Uber, seg&uacute;n fuenes cercanas.</p>\r\n\r\n<p>Se ha hablado tambi&eacute;n de Arianna Huffington y su inter&eacute;s ha sido tambi&eacute;n descartado. &laquo;Arianna no tiene ning&uacute;n inter&eacute;s en el puesto de CEO y de hecho como presidenta del comit&eacute; de b&uacute;squeda est&aacute; totalmente dedicada a encontrar el mejor CEO para Uber&raquo;, asegur&oacute; Monica Lee, del departamento de comunicaci&oacute;n de Thrive Global, la compa&ntilde;&iacute;a de Huffington.</p>\r\n\r\n<p>La &uacute;ltima candidata en retirarse del juego de rumores ha sido&nbsp;<strong>Meg Whitman, actual CEO de HP</strong>. Su nombre hab&iacute;a sonado tanto que tuvo que decir que no p&uacute;blicamente v&iacute;a Twitter. &laquo;Normalmente no comento rumores, pero la especulaci&oacute;n sobre mi futuro y Uber se ha convertido en una distracci&oacute;n&raquo;, tuite&oacute; esta misma semana. &laquo;Dejadme que lo m&aacute;s clara posible. Estoy comprometida por completo con HPE y planeo quedarme como CEO de la Compa&ntilde;&iacute;a. Tenemos todav&iacute;a mucho trabajo en HPE y no me voy a ninguna parte&raquo;.</p>\r\n\r\n<p>&iquest;Se ha quedado Uber sin candidatos? No: el que m&aacute;s suena ahora es el de Jeffrey Immelt, que dejar&aacute; de ser CEO de General Electric el 1 de agosto. No obstante, todav&iacute;a no est&aacute; confirmado y, de hecho, no se espera que Uber haga p&uacute;blica su decisi&oacute;n&nbsp;<a href=\"http://www.itespresso.es/uber-ceo-septiembre-kalanick-169699.html\">hasta septiembre</a>.</p>', '<p>Marissa Mayer, Sheryl Sandberg&hellip; desde que Travis Kalanick dej&oacute; su puesto hace...', '2017-07-29 23:44:14', '2017-07-29 23:44:14', 'post-597d01ae0362d-Uber2-684x467.jpg', 'quin-ser-el-nuevo-ceo-de-uber', 1, 0, 108),
(119, 182, 'Si todo va cifrado, Alphabet ya no necesita tanto a Google Fiber', '<p>La &uacute;ltima beta de Chrome&nbsp;<a href=\"https://blog.chromium.org/2016/12/chrome-56-beta-not-secure-warning-web.html\">comenzar&aacute;</a>&nbsp;a marcar las p&aacute;ginas HTTP como no seguras si recopilan contrase&ntilde;as o informaci&oacute;n de tarjeta de cr&eacute;dito. No es el primer paso, yo empezaron a empujar a los creadores de p&aacute;ginas&nbsp;<a href=\"https://webmasters.googleblog.com/2014/08/https-as-ranking-signal.html\">utilizando</a>&nbsp;el cifrado como una ventaja a la hora de posicionar (con efectos&nbsp;<a href=\"https://moz.com/blog/https-tops-30-how-google-is-winning-the-long-war\">medidos</a>, por cierto)</p>\r\n\r\n<p>Este movimiento no es s&oacute;lo una mejora de seguridad para el usuario (ah&iacute; est&aacute; tambi&eacute;n Firefox) con una ventaja indirecta para Google: a m&aacute;s confianza en online, m&aacute;s uso de internet, m&aacute;s compras, m&aacute;s inversi&oacute;n en publicidad; esta apuesta por cifrar las comunicaciones supone que lo ah&iacute; sucede permanezca ofuscado a las operadoras.</p>\r\n\r\n<p>De esta manera las pretensiones de Telefonica y c&iacute;a por cobrar por la existencia de servicios &ldquo;over the top&rdquo; sobre sus redes en funci&oacute;n del uso o del negocio de estos resulta impracticable: la teleco no puede saber si hemos alquilado una pel&iacute;cula en Youtube o estamos viendo v&iacute;deos en Marca. A partir de esto, proyectos como Google Fiber pierden importancia (ahora&nbsp;<a href=\"http://arstechnica.com/information-technology/2016/10/google-fiber-laying-off-9-of-staff-will-pause-plans-for-10-cities/\">congelado</a>), a&ntilde;aden menos valor para Alphabet como grupo y resulta m&aacute;s f&aacute;cil evitar las enormes inversiones que supondr&iacute;a ser un operador que pueda liberarles de la intermediaci&oacute;n de las actuales telecos.</p>', '<p>La &uacute;ltima beta de Chrome&nbsp;<a...', '2017-07-29 23:45:43', '2017-07-29 23:45:43', 'post-597d02075d94d-chrome.jpg', 'si-todo-va-cifrado-alphabet-ya-no-necesita-tanto-a-google-fiber', 1, 0, 107),
(120, 182, 'A Simple Component', '<h3>What We&#39;re Building</h3>\r\n\r\n<p>Today, we&#39;re going to build an interactive tic-tac-toe game.</p>\r\n\r\n<p>If you like, you can check out the final result here: <a href=\"https://codepen.io/gaearon/pen/gWWZgR?editors=0010\">Final Result</a>. Don&#39;t worry if the code doesn&#39;t make sense to you yet, or if it uses an unfamiliar syntax. We will be learning how to build this game step by step throughout this tutorial.</p>\r\n\r\n<p>Try playing the game. You can also click on a link in the move list to go &quot;back in time&quot; and see what the board looked like just after that move was made.</p>\r\n\r\n<p>Once you get a little familiar with the game, feel free to close that tab, as we&#39;ll start from a simpler template in the next sections.</p>\r\n\r\n<h3><a name=\"prerequisites\"></a>Prerequisites</h3>\r\n\r\n<p>We&#39;ll assume some familiarity with HTML and JavaScript but you should be able to follow along even if you haven&#39;t used them before.</p>\r\n\r\n<p>If you need a refresher on JavaScript, we recommend reading <a href=\"https://developer.mozilla.org/en-US/docs/Web/JavaScript/A_re-introduction_to_JavaScript\">this guide</a>. Note that we&#39;re also using some features from ES6, a recent version of JavaScript. In this tutorial, we&#39;re using <a href=\"https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Functions/Arrow_functions\">arrow functions</a>, <a href=\"https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Classes\">classes</a>, <a href=\"https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/let\"><code>let</code></a>, and <a href=\"https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/const\"><code>const</code></a> statements. You can use <a href=\"http://babeljs.io/repl/#?babili=false&amp;evaluate=true&amp;lineWrap=false&amp;presets=es2015%2Creact&amp;experimental=false&amp;loose=false&amp;spec=false&amp;code=const%20element%20%3D%20%3Ch1%3EHello%2C%20world%21%3C%2Fh1%3E%3B%0Aconst%20container%20%3D%20document.getElementById%28%27root%27%29%3B%0AReactDOM.render%28element%2C%20container%29%3B%0A\">Babel REPL</a> to check what ES6 code compiles to.</p>\r\n\r\n<h3><a name=\"how-to-follow-along\"></a>How to Follow Along</h3>\r\n\r\n<p>There are two ways to complete this tutorial: you could either write the code right in the browser, or you could set up a local development environment on your machine. You can choose either option depending on what you feel comfortable with.</p>\r\n\r\n<p><a name=\"if-you-prefer-to-write-code-in-the-browser\"></a>If You Prefer to Write Code in the Browser</p>\r\n\r\n<p>This is the quickest way to get started!</p>\r\n\r\n<p>First, open this <a href=\"https://codepen.io/gaearon/pen/oWWQNa?editors=0010\">starter code</a> in a new tab. It should display an empty tic-tac-toe field. We will be editing that code during this tutorial.</p>\r\n\r\n<p>You can now skip the next section about setting up a local development environment and head straight to the <a href=\"https://facebook.github.io/react/tutorial/tutorial.html#overview\">overview</a>.</p>\r\n\r\n<p><a name=\"if-you-prefer-to-write-code-in-your-editor\"></a>If You Prefer to Write Code in Your Editor</p>\r\n\r\n<p>Alternatively, you can set up a project on your computer.</p>\r\n\r\n<p>Note: <strong>this is completely optional and not required for this tutorial!</strong></p>\r\n\r\n<p>This is more work, but lets you work from the comfort of your editor.</p>\r\n\r\n<p>If you want to do it, here are the steps to follow:</p>\r\n\r\n<ol>\r\n	<li>Make sure you have a recent version of <a href=\"https://nodejs.org/en/\">Node.js</a> installed.</li>\r\n	<li>Follow the <a href=\"https://facebook.github.io/react/docs/installation.html#creating-a-new-application\">installation instructions</a> to create a new project.</li>\r\n	<li>Delete all files in the <code>src/</code> folder of the new project.</li>\r\n	<li>Add a file named <code>index.css</code> in the <code>src/</code> folder with <a href=\"https://codepen.io/gaearon/pen/oWWQNa?editors=0100\">this CSS code</a>.</li>\r\n	<li>\r\n	<p>Add a file named <code>index.js</code> in the <code>src/</code> folder with <a href=\"https://codepen.io/gaearon/pen/oWWQNa?editors=0010\">this JS code</a>, and then add three lines to the top of it:</p>\r\n\r\n	<pre>\r\n<code>import React from &#39;react&#39;;\r\nimport ReactDOM from &#39;react-dom&#39;;\r\nimport &#39;./index.css&#39;;\r\n</code></pre>\r\n	</li>\r\n</ol>\r\n\r\n<p>Now if you run <code>npm start</code> in the project folder and open <code>http://localhost:3000</code> in the browser, you should see an empty tic-tac-toe field.</p>\r\n\r\n<p>We recommend following <a href=\"http://babeljs.io/docs/editors\">these instructions</a> to configure syntax highlighting for your editor.</p>\r\n\r\n<h3><a name=\"help-im-stuck\"></a>Help, I&#39;m Stuck!</h3>\r\n\r\n<p>If you get stuck, check out the <a href=\"https://facebook.github.io/react/community/support.html\">community support resources</a>. In particular, <a href=\"https://facebook.github.io/react/community/support.html#reactiflux-chat\">Reactiflux chat</a> is a great way to get quick help. If you don&#39;t get a good answer anywhere, please file an issue, and we&#39;ll help you out.</p>\r\n\r\n<p>With this out of the way, let&#39;s get started!</p>', 'What We&#39;re Building\r\n\r\nToday, we&#39;re going to build an interactive...', '2017-07-31 22:22:50', '2017-07-31 22:22:50', 'post-597f919a2dbd8-php-100x100.png', 'a-simple-component', 2, 0, 107),
(121, 182, 'qwqweqwe', '<blockquote>\r\n<p><strong>asdasdasd </strong>sasdasdas <em>asdasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa asdddddd asdasda asdasdas asada <strong>asdasdasdasd asdasdas asasxx asas asdasda</strong></em><strong>sdasd</strong> asdasdasdasdad <s>asasdasdasdasdasdasdasdas </s>asdasdasdasdasd</p>\r\n</blockquote>\r\n\r\n<p>ewerwerw<strong> wewrwer</strong></p>', '\r\nasdasdasd sasdasdas...', '2017-07-31 22:27:31', '2017-07-31 22:27:31', 'post-597f92b3d95d6-html-300x300.png', 'qwqweqwe', 1, 0, 104);

-- --------------------------------------------------------

--
-- Table structure for table `post_category`
--

CREATE TABLE `post_category` (
  `post_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_comment`
--

CREATE TABLE `post_comment` (
  `id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `person_id` int(11) DEFAULT NULL,
  `comment` longtext COLLATE utf8_unicode_ci NOT NULL,
  `comment_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  `comment_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post_comment`
--

INSERT INTO `post_comment` (`id`, `post_id`, `person_id`, `comment`, `comment_date`, `update_date`, `comment_title`) VALUES
(101, 102, 173, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. \n        Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque \n        penatibus et magnis dis parturient montes, nascetur ridiculus mus. \n        Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. \n        Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, \n        vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,\n         justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.', '2017-07-24 22:58:56', '2017-07-24 22:58:56', 'Facebook fake'),
(102, 103, 174, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. \n        Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque \n        penatibus et magnis dis parturient montes, nascetur ridiculus mus. \n        Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. \n        Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, \n        vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,\n         justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.', '2017-07-24 22:58:56', '2017-07-24 22:58:56', 'Whatapps caduca este mes'),
(103, 104, 177, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. \n        Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque \n        penatibus et magnis dis parturient montes, nascetur ridiculus mus. \n        Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. \n        Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, \n        vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,\n         justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.', '2017-07-24 22:58:56', '2017-07-24 22:58:56', 'Google lanza nueva apps'),
(104, 105, 177, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. \n        Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque \n        penatibus et magnis dis parturient montes, nascetur ridiculus mus. \n        Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. \n        Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, \n        vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,\n         justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.', '2017-07-24 22:58:56', '2017-07-24 22:58:56', 'Whatapps caduca este mes'),
(105, 106, 173, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. \n        Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque \n        penatibus et magnis dis parturient montes, nascetur ridiculus mus. \n        Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. \n        Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, \n        vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,\n         justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.', '2017-07-24 22:58:56', '2017-07-24 22:58:56', 'Real madrid ficha'),
(106, 107, 177, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. \n        Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque \n        penatibus et magnis dis parturient montes, nascetur ridiculus mus. \n        Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. \n        Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, \n        vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,\n         justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.', '2017-07-24 22:58:56', '2017-07-24 22:58:56', 'Google lanza nueva apps'),
(107, 108, 172, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. \n        Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque \n        penatibus et magnis dis parturient montes, nascetur ridiculus mus. \n        Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. \n        Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, \n        vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,\n         justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.', '2017-07-24 22:58:56', '2017-07-24 22:58:56', 'Facebook fake'),
(108, 109, 179, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. \n        Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque \n        penatibus et magnis dis parturient montes, nascetur ridiculus mus. \n        Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. \n        Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, \n        vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,\n         justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.', '2017-07-24 22:58:56', '2017-07-24 22:58:56', 'Real madrid ficha'),
(109, 110, 177, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. \n        Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque \n        penatibus et magnis dis parturient montes, nascetur ridiculus mus. \n        Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. \n        Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, \n        vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,\n         justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.', '2017-07-24 22:58:56', '2017-07-24 22:58:56', 'Titulos de noticia'),
(110, 111, 173, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. \n        Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque \n        penatibus et magnis dis parturient montes, nascetur ridiculus mus. \n        Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. \n        Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, \n        vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,\n         justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.', '2017-07-24 22:58:56', '2017-07-24 22:58:56', 'Facebook fake'),
(111, 102, 182, '<p>Probando <strong>que funciona <a href=\"http://asdasdasd\">Click aqui</a></strong></p>', '2017-07-25 02:53:11', '2017-07-25 02:53:11', 'Hola mundo'),
(112, 112, 182, 'y tu que comentas', '2017-07-29 01:31:38', '2017-07-29 01:31:38', 'yo comento');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `person_id` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:json_array)',
  `expired` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `person_id`, `email`, `password`, `active`, `roles`, `expired`) VALUES
(172, 172, '0@localhost.com', '0', 0, '\"ROLE_USER\"', 0),
(173, 173, '1@localhost.com', '1', 0, '\"ROLE_ADMIN\"', 0),
(174, 174, '2@localhost.com', '2', 0, '\"ROLE_USER\"', 0),
(175, 175, '3@localhost.com', '3', 0, '\"ROLE_USER\"', 0),
(176, 176, '4@localhost.com', '4', 0, '\"ROLE_USER\"', 0),
(177, 177, '5@localhost.com', '5', 0, '\"ROLE_USER\"', 0),
(178, 178, '6@localhost.com', '6', 0, '\"ROLE_USER\"', 0),
(179, 179, '7@localhost.com', '7', 0, '\"ROLE_USER\"', 0),
(180, 180, '8@localhost.com', '8', 0, '\"ROLE_USER\"', 0),
(181, 181, '9@localhost.com', '9', 0, '\"ROLE_USER\"', 0),
(182, 182, 'yus@yus.com', '$2y$13$KNwn6vheMyvd3oA.FNgJaubqkZcY4SnQQTkU3h52T15.OezsqbAGm', 1, '\"ROLE_ADMIN\"', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_post`
--
ALTER TABLE `category_post`
  ADD PRIMARY KEY (`category_id`,`post_id`),
  ADD KEY `IDX_D11116CA12469DE2` (`category_id`),
  ADD KEY `IDX_D11116CA4B89032C` (`post_id`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_5A8A6C8D2B36786B` (`title`),
  ADD KEY `IDX_5A8A6C8D217BBB47` (`person_id`),
  ADD KEY `IDX_5A8A6C8D12469DE2` (`category_id`);

--
-- Indexes for table `post_category`
--
ALTER TABLE `post_category`
  ADD PRIMARY KEY (`post_id`,`category_id`),
  ADD KEY `IDX_B9A190604B89032C` (`post_id`),
  ADD KEY `IDX_B9A1906012469DE2` (`category_id`);

--
-- Indexes for table `post_comment`
--
ALTER TABLE `post_comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_A99CE55F4B89032C` (`post_id`),
  ADD KEY `IDX_A99CE55F217BBB47` (`person_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`),
  ADD UNIQUE KEY `UNIQ_8D93D649217BBB47` (`person_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;
--
-- AUTO_INCREMENT for table `post_comment`
--
ALTER TABLE `post_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_post`
--
ALTER TABLE `category_post`
  ADD CONSTRAINT `FK_D11116CA12469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_D11116CA4B89032C` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `FK_5A8A6C8D12469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `FK_5A8A6C8D217BBB47` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`);

--
-- Constraints for table `post_category`
--
ALTER TABLE `post_category`
  ADD CONSTRAINT `FK_B9A1906012469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_B9A190604B89032C` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_comment`
--
ALTER TABLE `post_comment`
  ADD CONSTRAINT `FK_A99CE55F217BBB47` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`),
  ADD CONSTRAINT `FK_A99CE55F4B89032C` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_8D93D649217BBB47` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
