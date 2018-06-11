/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50717
Source Host           : localhost:3306
Source Database       : psd1803

Target Server Type    : MYSQL
Target Server Version : 50717
File Encoding         : 65001

Date: 2018-05-25 17:50:52
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `reg_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `email` varchar(255) DEFAULT NULL,
  `status` int(10) unsigned NOT NULL DEFAULT '1',
  `sex` int(1) unsigned zerofill DEFAULT '0',
  `face` varchar(255) DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('4', 'abc', '202cb962ac59075b964b07152d234b70', '2018-05-25 16:48:44', '123', '1', '0', 'Uploads/userface/2018-05-25/7ebbc97ae55045053be7733790a8a676.png');
INSERT INTO `user` VALUES ('5', 'test', '202cb962ac59075b964b07152d234b70', '2018-05-25 16:48:49', '12313@qq.com', '1', '1', '');
INSERT INTO `user` VALUES ('8', 'aaa', '202cb962ac59075b964b07152d234b70', '2018-05-25 16:48:49', '123', '1', '1', '');
INSERT INTO `user` VALUES ('9', 'ccc', '202cb962ac59075b964b07152d234b70', '2018-05-25 16:48:50', '123', '1', '1', '');
INSERT INTO `user` VALUES ('10', 'ddd', '202cb962ac59075b964b07152d234b70', '2018-05-23 16:13:09', '123', '1', '0', '');
INSERT INTO `user` VALUES ('11', 'danei', 'f2f55628b13c1ffae2aa07056806b074', '2018-05-25 16:48:50', '13131', '1', '1', '');
INSERT INTO `user` VALUES ('12', 'aaaaaa', '5d793fc5b00a2348c3fb9ab59e5ca98a', '2018-05-24 11:23:11', '1938266730@qq.com', '1', '0', '');
INSERT INTO `user` VALUES ('17', 'abcd', 'dc483e80a7a0bd9ef71d8cf973673924', '2018-05-25 16:48:51', '123@123.com', '1', '1', '');
INSERT INTO `user` VALUES ('18', 'abcdef', 'dc483e80a7a0bd9ef71d8cf973673924', '2018-05-25 16:48:51', '123@123.com', '1', '1', '');
INSERT INTO `user` VALUES ('19', 'qqq', 'dc483e80a7a0bd9ef71d8cf973673924', '2018-05-25 16:48:51', '123@123.com', '1', '1', '');
INSERT INTO `user` VALUES ('20', 'wang', '0e167509d1be26a3e5b9785558b224cc', '2018-05-25 16:48:51', 'xxzz@qq.com', '1', '1', '');
INSERT INTO `user` VALUES ('21', '888888', '56d098c7865846a6324033e11cb37763', '2018-05-25 17:05:11', '1938266730@qq.com', '1', '1', 'Uploads/userface/2018-05-25/6c765ea3bb500228e855a26f3c46f3f8.jpg');
INSERT INTO `user` VALUES ('22', '122555', 'dc483e80a7a0bd9ef71d8cf973673924', '2018-05-25 17:04:34', '1431970879@qq.com', '1', '1', 'Uploads/userface/2018-05-25/2dacbbb10720c8ff3af87e01b9a612ab.jpg');
INSERT INTO `user` VALUES ('23', '88888888', '56d098c7865846a6324033e11cb37763', '2018-05-25 17:06:46', '1938266730@qq.com', '1', '0', '');
INSERT INTO `user` VALUES ('24', '5201314', '56d098c7865846a6324033e11cb37763', '2018-05-25 17:07:09', '1938266730@qq.com', '1', '0', '');
INSERT INTO `user` VALUES ('25', '01', '56d098c7865846a6324033e11cb37763', '2018-05-25 17:08:19', '1938266730@qq.com', '1', '0', '');
INSERT INTO `user` VALUES ('26', '02', '56d098c7865846a6324033e11cb37763', '2018-05-25 17:08:51', '1938266730@qq.com', '1', '0', '');
INSERT INTO `user` VALUES ('27', '666666', '56d098c7865846a6324033e11cb37763', '2018-05-25 17:09:28', '1938266730@qq.com', '1', '0', '');
