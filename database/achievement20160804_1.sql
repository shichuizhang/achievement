/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : achievement

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-08-04 16:03:10
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('14', 'juncao', '78d79feb71f5e4dcfd54bd24e98a907b', '1', null, null);
