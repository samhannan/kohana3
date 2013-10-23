/*
Navicat MySQL Data Transfer

Source Server         : MySQL Dev
Source Server Version : 50051
Source Host           : 192.168.1.100:3306
Source Database       : kohana_test

Target Server Type    : MYSQL
Target Server Version : 50051
File Encoding         : 65001

Date: 2013-10-23 11:15:17
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `tbladmin_pages`
-- ----------------------------
DROP TABLE IF EXISTS `tbladmin_pages`;
CREATE TABLE `tbladmin_pages` (
  `id` mediumint(5) NOT NULL,
  `role_id` mediumint(5) NOT NULL,
  `page` varchar(100) NOT NULL,
  `section_id` mediumint(5) NOT NULL,
  `date_add` datetime NOT NULL,
  `date_upd` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbladmin_pages
-- ----------------------------
INSERT INTO `tbladmin_pages` VALUES ('0', '2', 'Users', '1', '2013-10-22 16:46:26', null);

-- ----------------------------
-- Table structure for `tbladmin_sections`
-- ----------------------------
DROP TABLE IF EXISTS `tbladmin_sections`;
CREATE TABLE `tbladmin_sections` (
  `id` mediumint(5) unsigned NOT NULL auto_increment,
  `section` varchar(100) NOT NULL,
  `date_add` datetime NOT NULL,
  `date_upd` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbladmin_sections
-- ----------------------------
INSERT INTO `tbladmin_sections` VALUES ('1', 'Admin', '2013-10-22 16:46:01', null);

-- ----------------------------
-- Table structure for `tblroles`
-- ----------------------------
DROP TABLE IF EXISTS `tblroles`;
CREATE TABLE `tblroles` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `name` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `uniq_name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tblroles
-- ----------------------------
INSERT INTO `tblroles` VALUES ('1', 'login', 'Login privileges, granted after account confirmation');
INSERT INTO `tblroles` VALUES ('2', 'admin', 'Administrative user, has access to everything.');

-- ----------------------------
-- Table structure for `tblroles_users`
-- ----------------------------
DROP TABLE IF EXISTS `tblroles_users`;
CREATE TABLE `tblroles_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`user_id`,`role_id`),
  KEY `fk_role_id` (`role_id`),
  CONSTRAINT `tblroles_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tblusers` (`id`) ON DELETE CASCADE,
  CONSTRAINT `tblroles_users_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `tblroles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tblroles_users
-- ----------------------------
INSERT INTO `tblroles_users` VALUES ('9', '1');
INSERT INTO `tblroles_users` VALUES ('10', '1');
INSERT INTO `tblroles_users` VALUES ('9', '2');
INSERT INTO `tblroles_users` VALUES ('10', '2');

-- ----------------------------
-- Table structure for `tbluser_detail`
-- ----------------------------
DROP TABLE IF EXISTS `tbluser_detail`;
CREATE TABLE `tbluser_detail` (
  `id` mediumint(5) unsigned NOT NULL auto_increment,
  `user_id` mediumint(5) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `date_upd` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbluser_detail
-- ----------------------------
INSERT INTO `tbluser_detail` VALUES ('3', '9', 'Sam', 'Hannan', '0000-00-00 00:00:00');
INSERT INTO `tbluser_detail` VALUES ('4', '10', 'Sam', 'Test', null);

-- ----------------------------
-- Table structure for `tbluser_tokens`
-- ----------------------------
DROP TABLE IF EXISTS `tbluser_tokens`;
CREATE TABLE `tbluser_tokens` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `user_id` int(11) unsigned NOT NULL,
  `user_agent` varchar(40) NOT NULL,
  `token` varchar(40) NOT NULL,
  `created` int(10) unsigned NOT NULL,
  `expires` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `uniq_token` (`token`),
  KEY `fk_user_id` (`user_id`),
  KEY `expires` (`expires`),
  CONSTRAINT `tbluser_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tblusers` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbluser_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for `tblusers`
-- ----------------------------
DROP TABLE IF EXISTS `tblusers`;
CREATE TABLE `tblusers` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `email` varchar(254) NOT NULL,
  `username` varchar(32) NOT NULL default '',
  `password` varchar(64) NOT NULL,
  `logins` int(10) unsigned NOT NULL default '0',
  `last_login` int(10) unsigned default NULL,
  `date_add` datetime NOT NULL,
  `date_upd` datetime default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `uniq_username` (`username`),
  UNIQUE KEY `uniq_email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tblusers
-- ----------------------------
INSERT INTO `tblusers` VALUES ('9', 'sam1.hannan@cloudspotting.co.uk', 'sam1.hannan@cloudspotting.co.uk', 'ce7eea38e88cb58c369e224551fee0cb1776163f4f0e330cc9b2922f8afac727', '8', '1382114186', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `tblusers` VALUES ('10', 'sam@cloudspotting.co.uk', 'sam@cloudspotting.co.uk', 'ce7eea38e88cb58c369e224551fee0cb1776163f4f0e330cc9b2922f8afac727', '0', null, '0000-00-00 00:00:00', null);
