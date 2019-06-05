-- admin table to login

CREATE TABLE `admin` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `name` varchar(100) COLLATE utf8_bin NOT NULL,
 `last_name` varchar(100) COLLATE utf8_bin NOT NULL,
 `password` varchar(100) COLLATE utf8_bin NOT NULL,
 `email` varchar(100) COLLATE utf8_bin NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin


-- users table

CREATE TABLE `user` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `name` varchar(100) COLLATE utf8_bin NOT NULL,
 `password` varchar(100) COLLATE utf8_bin NOT NULL,
 `status` int(11) NOT NULL DEFAULT '0',
 `number` varchar(100) COLLATE utf8_bin NOT NULL,
 `lesson` int(11) NOT NULL DEFAULT '0',
 `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
 `verified` tinyint(1) NOT NULL DEFAULT '0',
 `notification` int(11) NOT NULL DEFAULT '1',
 PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin


-- lesson table

CREATE TABLE `lesson` (
 `id` int(11) NOT NULL DEFAULT '0',
 `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
 `number` int(11) NOT NULL,
 `level` int(11) NOT NULL,
 `free` int(11) NOT NULL DEFAULT '0',
 PRIMARY KEY (`number`),
 UNIQUE KEY `number` (`number`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci

-- recording table

CREATE TABLE `recording` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `type` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT 'recording',
 `say` tinyint(1) NOT NULL,
 `name` varchar(100) COLLATE utf8_bin NOT NULL,
 `lesson` int(11) NOT NULL,
 `place` int(11) NOT NULL,
 `link` varchar(200) COLLATE utf8_bin NOT NULL,
 `text` text COLLATE utf8_bin NOT NULL,
 PRIMARY KEY (`id`),
 KEY `recording_ibfk_1` (`lesson`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin

-- image table

CREATE TABLE `image` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `type` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT 'image',
 `say` tinyint(1) NOT NULL,
 `name` varchar(100) COLLATE utf8_bin NOT NULL,
 `lesson` int(11) NOT NULL,
 `place` int(11) NOT NULL,
 `link` varchar(200) COLLATE utf8_bin NOT NULL,
 `text` text COLLATE utf8_bin NOT NULL,
 PRIMARY KEY (`id`),
 KEY `image_ibfk_1` (`lesson`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin

-- text table

CREATE TABLE `text` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `name` varchar(200) COLLATE utf8_bin NOT NULL,
 `type` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT 'text',
 `say` tinyint(1) NOT NULL,
 `text` varchar(2000) COLLATE utf8_bin NOT NULL,
 `lesson` int(11) NOT NULL,
 `place` int(11) NOT NULL,
 PRIMARY KEY (`id`),
 KEY `lesson` (`lesson`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_bin

-- Button table

CREATE TABLE `button` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
 `type` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT 'button',
 `text` varchar(2000) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
 `lesson` int(11) NOT NULL,
 `place` int(11) NOT NULL,
 PRIMARY KEY (`id`),
 KEY `lesson` (`lesson`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8

-- Notification

CREATE TABLE `notification` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `name` varchar(100) COLLATE utf8_bin NOT NULL,
 `text` varchar(10000) COLLATE utf8_bin NOT NULL,
 `number` int(11) NOT NULL,
 `lesson` int(11) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin
