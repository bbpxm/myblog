/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50717
Source Host           : localhost:3306
Source Database       : psd1803

Target Server Type    : MYSQL
Target Server Version : 50717
File Encoding         : 65001

Date: 2018-05-25 17:50:59
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for comments
-- ----------------------------
DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `aid` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `comment_content` varchar(255) DEFAULT NULL,
  `comm_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `comm_ip` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comments
-- ----------------------------
INSERT INTO `comments` VALUES ('2', '8', '10', '核心装备支撑，使我国成为了世界极少数拥有', '2018-05-23 17:32:18', null);
INSERT INTO `comments` VALUES ('3', '8', '10', '科研院所密切合作，积极推进国产磁浮交通工程化研发和产业化应用，为长沙磁浮快线和北京S1线建设提供了强有力', '2018-05-23 17:33:59', null);
INSERT INTO `comments` VALUES ('4', '8', '4', '转向架、车轨耦合共振以及系统总体设计与集成等一系列核心关键技术。2000年后，他们国内17家企业和科研院所密切', '2018-05-23 18:36:58', null);
INSERT INTO `comments` VALUES ('5', '8', '4', '浮交通技术研究的单位之一，经过40年的拼搏创新，突破掌握了悬浮导向控制、悬浮传感器、定位测速、转向架、车', '2018-05-23 18:38:12', null);
INSERT INTO `comments` VALUES ('6', '9', '4', '厂名、厂址商品，已要求相关省(市)工商和市场监管部门依据《产品质量法》《流通领域商品质量抽查检验办法》等法律法规予以立', '2018-05-23 18:43:32', null);
INSERT INTO `comments` VALUES ('7', '12', '4', 'fdsafdsafddf', '2018-05-24 20:31:27', null);
INSERT INTO `comments` VALUES ('8', '9', '20', '请问是哪位仁兄啊????', '2018-05-25 12:17:46', null);
INSERT INTO `comments` VALUES ('9', '13', '21', '为什么我不能发微博?', '2018-05-25 16:46:30', null);
INSERT INTO `comments` VALUES ('10', '9', '22', '我去厉害', '2018-05-25 16:48:38', null);
