/*
Navicat MySQL Data Transfer

Source Server         : Localhost-Xampp
Source Server Version : 50505
Source Host           : 127.0.0.1:3307
Source Database       : crop

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-05-17 20:41:28
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for anu
-- ----------------------------
DROP TABLE IF EXISTS `anu`;
CREATE TABLE `anu` (
  `anu_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสชนิดพืช',
  `anu_name` varchar(100) NOT NULL COMMENT 'ชื่อชนิด',
  `anu_note` varchar(200) NOT NULL COMMENT 'หมายเหตุ',
  PRIMARY KEY (`anu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of anu
-- ----------------------------
INSERT INTO `anu` VALUES ('1', 'anusit 001', 'anusit 001');
