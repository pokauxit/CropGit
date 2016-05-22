/*
Navicat MySQL Data Transfer

Source Server         : Localhost-Xampp
Source Server Version : 50505
Source Host           : 127.0.0.1:3307
Source Database       : auxit_crop

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-05-23 02:19:50
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for sys_counter
-- ----------------------------
DROP TABLE IF EXISTS `sys_counter`;
CREATE TABLE `sys_counter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_c` date NOT NULL,
  `ip_c` varchar(15) NOT NULL,
  `time_c` time NOT NULL,
  `os_c` varchar(100) NOT NULL,
  `b_c` varchar(100) NOT NULL,
  `bv_c` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `date` (`date_c`,`ip_c`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=122 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sys_counter
-- ----------------------------
INSERT INTO `sys_counter` VALUES ('1', '2016-05-22', '192.158.199.255', '00:00:00', '', '', '');
INSERT INTO `sys_counter` VALUES ('2', '2016-05-22', '192.158.199.254', '00:00:00', '', '', '');
INSERT INTO `sys_counter` VALUES ('3', '2016-04-23', '192.158.199.254', '00:00:00', '', '', '');
INSERT INTO `sys_counter` VALUES ('4', '2015-07-15', '192.158.199.254', '00:00:00', '', '', '');
INSERT INTO `sys_counter` VALUES ('7', '2015-06-25', '192.158.199.254', '00:00:00', '', '', '');
INSERT INTO `sys_counter` VALUES ('8', '2016-05-15', '192.158.199.254', '00:00:00', '', '', '');
INSERT INTO `sys_counter` VALUES ('93', '2016-05-21', '127.0.0.1', '00:00:00', '', '', '');
INSERT INTO `sys_counter` VALUES ('94', '2016-05-22', '127.0.0.1', '22:12:36', 'WINNT', 'Google Chrome', '50.0.2661.102');
INSERT INTO `sys_counter` VALUES ('121', '2016-05-23', '127.0.0.1', '01:55:13', 'WINNT', 'Google Chrome', '50.0.2661.102');

-- ----------------------------
-- Table structure for sys_welcome_page
-- ----------------------------
DROP TABLE IF EXISTS `sys_welcome_page`;
CREATE TABLE `sys_welcome_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `pic` varchar(150) NOT NULL,
  `active` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sys_welcome_page
-- ----------------------------
INSERT INTO `sys_welcome_page` VALUES ('4', 'TEST 001', '3ijyg3sh5eg.PNG', '0');
INSERT INTO `sys_welcome_page` VALUES ('5', 'TEST PIC', '4abbvstf37k.png', '0');
INSERT INTO `sys_welcome_page` VALUES ('6', 'test', '3otkdtiti4u.PNG', '0');
