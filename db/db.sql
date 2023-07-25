create database if not exists `commingsoon`;

drop table if exists subcribers;
CREATE TABLE `subcribers` (
  `id` int(10) primary key AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

drop table if exists visitors;
CREATE TABLE `visitors` (
  `id` int(10) primary key AUTO_INCREMENT,
  `ip_adresse` varchar(255) NOT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--Run this command to know the numbers of visitors;
SELECT DISTINCT ip_adresse FROM visitors;