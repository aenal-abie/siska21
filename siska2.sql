/*
Navicat MySQL Data Transfer

Source Server         : Siska
Source Server Version : 50141
Source Host           : localhost:3306
Source Database       : siska

Target Server Type    : MYSQL
Target Server Version : 50141
File Encoding         : 65001

Date: 2013-02-07 13:45:07
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `activities`
-- ----------------------------
DROP TABLE IF EXISTS `activities`;
CREATE TABLE `activities` (
  `activity_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL DEFAULT '0',
  `activity` varchar(255) NOT NULL,
  `module` varchar(255) NOT NULL,
  `created_on` datetime NOT NULL,
  `deleted` tinyint(12) NOT NULL DEFAULT '0',
  PRIMARY KEY (`activity_id`)
) ENGINE=MyISAM AUTO_INCREMENT=491 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of activities
-- ----------------------------
INSERT INTO `activities` VALUES ('1', '1', 'logged in from: 127.0.0.1', 'users', '2012-11-21 02:38:42', '1');
INSERT INTO `activities` VALUES ('2', '1', 'Created Module: thnakademik : 127.0.0.1', 'modulebuilder', '2012-11-21 03:18:54', '1');
INSERT INTO `activities` VALUES ('3', '1', 'Created record with ID: 1 : 127.0.0.1', 'thnakademik', '2012-11-21 03:19:15', '1');
INSERT INTO `activities` VALUES ('4', '1', 'Updated record with ID: 1 : 127.0.0.1', 'thnakademik', '2012-11-21 03:19:50', '1');
INSERT INTO `activities` VALUES ('5', '1', 'Updated record with ID: 1 : 127.0.0.1', 'thnakademik', '2012-11-21 03:19:59', '1');
INSERT INTO `activities` VALUES ('6', '1', 'Updated record with ID: 1 : 127.0.0.1', 'thnakademik', '2012-11-21 05:02:05', '1');
INSERT INTO `activities` VALUES ('7', '1', 'Updated record with ID: 1 : 127.0.0.1', 'thnakademik', '2012-11-21 05:13:12', '1');
INSERT INTO `activities` VALUES ('8', '1', 'Migrate Type: thnakademik_ Uninstalled Version: 0 from: 127.0.0.1', 'migrations', '2012-11-21 05:19:07', '1');
INSERT INTO `activities` VALUES ('9', '1', 'Migrate Type: thnakademik_ to Version: 1 from: 127.0.0.1', 'migrations', '2012-11-21 05:20:17', '1');
INSERT INTO `activities` VALUES ('10', '1', 'Migrate Type: thnakademik_ to Version: 2 from: 127.0.0.1', 'migrations', '2012-11-21 05:20:28', '1');
INSERT INTO `activities` VALUES ('11', '1', 'Migrate Type: thnakademik_ to Version: 1 from: 127.0.0.1', 'migrations', '2012-11-21 05:24:21', '1');
INSERT INTO `activities` VALUES ('12', '1', 'Migrate Type: thnakademik_ to Version: 1 from: 127.0.0.1', 'migrations', '2012-11-21 05:25:25', '1');
INSERT INTO `activities` VALUES ('13', '1', 'Migrate Type: thnakademik_ Uninstalled Version: 0 from: 127.0.0.1', 'migrations', '2012-11-21 05:27:52', '1');
INSERT INTO `activities` VALUES ('14', '1', 'Migrate Type: thnakademik_ to Version: 2 from: 127.0.0.1', 'migrations', '2012-11-21 05:27:59', '1');
INSERT INTO `activities` VALUES ('15', '1', 'Migrate Type: thnakademik_ to Version: 1 from: 127.0.0.1', 'migrations', '2012-11-21 05:28:06', '1');
INSERT INTO `activities` VALUES ('16', '1', 'Migrate Type: thnakademik_ to Version: 2 from: 127.0.0.1', 'migrations', '2012-11-21 05:29:54', '1');
INSERT INTO `activities` VALUES ('17', '1', 'App settings saved from: 127.0.0.1', 'core', '2012-11-21 05:41:20', '1');
INSERT INTO `activities` VALUES ('18', '1', 'created a new User: Mahasiswa', 'users', '2012-11-21 05:46:36', '1');
INSERT INTO `activities` VALUES ('19', '1', 'logged out from: 127.0.0.1', 'users', '2012-11-21 05:47:06', '1');
INSERT INTO `activities` VALUES ('20', '2', 'logged in from: 127.0.0.1', 'users', '2012-11-21 05:47:18', '1');
INSERT INTO `activities` VALUES ('21', '2', 'logged out from: 127.0.0.1', 'users', '2012-11-21 05:47:53', '1');
INSERT INTO `activities` VALUES ('22', '1', 'logged in from: 127.0.0.1', 'users', '2012-11-21 05:48:01', '1');
INSERT INTO `activities` VALUES ('23', '1', 'logged out from: 127.0.0.1', 'users', '2012-11-21 05:48:25', '1');
INSERT INTO `activities` VALUES ('24', '2', 'logged in from: 127.0.0.1', 'users', '2012-11-21 05:48:45', '1');
INSERT INTO `activities` VALUES ('25', '2', 'logged out from: 127.0.0.1', 'users', '2012-11-21 05:48:58', '1');
INSERT INTO `activities` VALUES ('26', '1', 'logged in from: 127.0.0.1', 'users', '2012-11-21 05:49:06', '1');
INSERT INTO `activities` VALUES ('27', '1', 'modified user: Mahasiswa', 'users', '2012-11-21 05:49:30', '1');
INSERT INTO `activities` VALUES ('28', '2', 'logged in from: 127.0.0.1', 'users', '2012-11-21 05:50:01', '1');
INSERT INTO `activities` VALUES ('29', '1', 'Migrate Type: thnakademik_ Uninstalled Version: 0 from: 127.0.0.1', 'migrations', '2012-11-21 05:55:00', '1');
INSERT INTO `activities` VALUES ('30', '1', 'Migrate Type: thnakademik_ to Version: 2 from: 127.0.0.1', 'migrations', '2012-11-21 05:57:10', '1');
INSERT INTO `activities` VALUES ('31', '1', 'Migrate Type: thnakademik_ to Version: 2 from: 127.0.0.1', 'migrations', '2012-11-21 05:57:22', '1');
INSERT INTO `activities` VALUES ('32', '1', 'Migrate Type: thnakademik_ to Version: 2 from: 127.0.0.1', 'migrations', '2012-11-21 05:58:11', '1');
INSERT INTO `activities` VALUES ('33', '1', 'Migrate Type: thnakademik_ Uninstalled Version: 0 from: 127.0.0.1', 'migrations', '2012-11-21 05:58:27', '1');
INSERT INTO `activities` VALUES ('34', '1', 'Migrate Type: thnakademik_ to Version: 2 from: 127.0.0.1', 'migrations', '2012-11-21 05:58:34', '1');
INSERT INTO `activities` VALUES ('35', '1', 'Migrate Type: thnakademik_ to Version: 2 from: 127.0.0.1', 'migrations', '2012-11-21 05:58:47', '1');
INSERT INTO `activities` VALUES ('36', '1', 'Migrate Type: thnakademik_ Uninstalled Version: 0 from: 127.0.0.1', 'migrations', '2012-11-21 05:59:55', '1');
INSERT INTO `activities` VALUES ('37', '1', 'logged in from: 127.0.0.1', 'users', '2012-11-21 06:07:42', '1');
INSERT INTO `activities` VALUES ('38', '1', 'Migrate Type: thnakademik_ to Version: 2 from: 127.0.0.1', 'migrations', '2012-11-21 06:10:25', '1');
INSERT INTO `activities` VALUES ('39', '1', 'Migrate Type: thnakademik_ to Version: 2 from: 127.0.0.1', 'migrations', '2012-11-21 06:10:36', '1');
INSERT INTO `activities` VALUES ('40', '1', 'Created record with ID: 1 : 127.0.0.1', 'thnakademik', '2012-11-21 06:11:47', '1');
INSERT INTO `activities` VALUES ('41', '1', 'Created record with ID: 2 : 127.0.0.1', 'thnakademik', '2012-11-21 06:13:45', '1');
INSERT INTO `activities` VALUES ('42', '1', 'Updated record with ID: 2 : 127.0.0.1', 'thnakademik', '2012-11-21 07:02:18', '1');
INSERT INTO `activities` VALUES ('43', '1', 'logged in from: 127.0.0.1', 'users', '2012-11-22 03:48:48', '1');
INSERT INTO `activities` VALUES ('44', '1', 'Updated record with ID: 2 : 127.0.0.1', 'thnakademik', '2012-11-22 03:49:08', '1');
INSERT INTO `activities` VALUES ('45', '1', 'Updated record with ID: 2 : 127.0.0.1', 'thnakademik', '2012-11-22 03:50:48', '1');
INSERT INTO `activities` VALUES ('46', '1', 'Updated record with ID: 2 : 127.0.0.1', 'thnakademik', '2012-11-22 03:50:54', '1');
INSERT INTO `activities` VALUES ('47', '1', 'logged in from: 127.0.0.1', 'users', '2012-11-22 12:56:22', '1');
INSERT INTO `activities` VALUES ('48', '1', 'Created Module: Nama : 127.0.0.1', 'modulebuilder', '2012-11-22 13:15:07', '1');
INSERT INTO `activities` VALUES ('49', '1', 'Created record with ID: 1 : 127.0.0.1', 'nama', '2012-11-22 13:15:25', '1');
INSERT INTO `activities` VALUES ('50', '1', 'Migrate Type: buah_ to Version: 2 from: 127.0.0.1', 'migrations', '2012-11-22 13:26:25', '1');
INSERT INTO `activities` VALUES ('51', '1', 'Created record with ID: 1 : 127.0.0.1', 'buah', '2012-11-22 13:29:25', '1');
INSERT INTO `activities` VALUES ('52', '1', 'Updated record with ID: 1 : 127.0.0.1', 'buah', '2012-11-22 13:29:32', '1');
INSERT INTO `activities` VALUES ('53', '1', 'Created Module: tesku : 127.0.0.1', 'modulebuilder', '2012-11-22 13:36:37', '1');
INSERT INTO `activities` VALUES ('54', '1', 'Created record with ID: 1 : 127.0.0.1', 'tesku', '2012-11-22 13:38:43', '1');
INSERT INTO `activities` VALUES ('55', '1', 'Updated record with ID: 1 : 127.0.0.1', 'tesku', '2012-11-22 13:38:54', '1');
INSERT INTO `activities` VALUES ('56', '1', 'Updated record with ID: 1 : 127.0.0.1', 'tesku', '2012-11-22 13:43:16', '1');
INSERT INTO `activities` VALUES ('57', '1', 'Updated record with ID: 1 : 127.0.0.1', 'tesku', '2012-11-22 13:43:24', '1');
INSERT INTO `activities` VALUES ('58', '1', 'Updated record with ID: 1 : 127.0.0.1', 'tesku', '2012-11-22 13:43:38', '1');
INSERT INTO `activities` VALUES ('59', '1', 'Updated record with ID: 1 : 127.0.0.1', 'tesku', '2012-11-22 13:43:55', '1');
INSERT INTO `activities` VALUES ('60', '1', 'Updated record with ID: 1 : 127.0.0.1', 'tesku', '2012-11-22 13:44:09', '1');
INSERT INTO `activities` VALUES ('61', '1', 'Updated record with ID: 1 : 127.0.0.1', 'tesku', '2012-11-22 13:52:19', '1');
INSERT INTO `activities` VALUES ('62', '1', 'Created Module: apa : 127.0.0.1', 'modulebuilder', '2012-11-22 13:54:48', '1');
INSERT INTO `activities` VALUES ('63', '1', 'Created Module: tahunakademik : 127.0.0.1', 'modulebuilder', '2012-11-22 13:58:39', '1');
INSERT INTO `activities` VALUES ('64', '1', 'Created Module: thnaja : 127.0.0.1', 'modulebuilder', '2012-11-22 14:03:14', '1');
INSERT INTO `activities` VALUES ('65', '1', 'Deleted Module: apa : 127.0.0.1', 'builder', '2012-11-22 14:04:48', '1');
INSERT INTO `activities` VALUES ('66', '1', 'Deleted Module: Buah : 127.0.0.1', 'builder', '2012-11-22 14:04:52', '1');
INSERT INTO `activities` VALUES ('67', '1', 'Deleted Module: Nama : 127.0.0.1', 'builder', '2012-11-22 14:04:55', '1');
INSERT INTO `activities` VALUES ('68', '1', 'Deleted Module: tahunakademik : 127.0.0.1', 'builder', '2012-11-22 14:04:58', '1');
INSERT INTO `activities` VALUES ('69', '1', 'Deleted Module: tes : 127.0.0.1', 'builder', '2012-11-22 14:05:01', '1');
INSERT INTO `activities` VALUES ('70', '1', 'Deleted Module: tesku : 127.0.0.1', 'builder', '2012-11-22 14:05:03', '1');
INSERT INTO `activities` VALUES ('71', '1', 'Deleted Module: thnaja : 127.0.0.1', 'builder', '2012-11-22 14:05:06', '1');
INSERT INTO `activities` VALUES ('72', '1', 'Deleted Module: thnakademik : 127.0.0.1', 'builder', '2012-11-22 14:05:52', '1');
INSERT INTO `activities` VALUES ('73', '1', 'Deleted Module: thnakademik : 127.0.0.1', 'builder', '2012-11-22 14:13:34', '1');
INSERT INTO `activities` VALUES ('74', '1', 'Created Module: thnakademik : 127.0.0.1', 'modulebuilder', '2012-11-22 14:17:35', '1');
INSERT INTO `activities` VALUES ('75', '1', 'Created record with ID: 1 : 127.0.0.1', 'thnakademik', '2012-11-22 14:21:56', '1');
INSERT INTO `activities` VALUES ('76', '1', 'Updated record with ID: 1 : 127.0.0.1', 'thnakademik', '2012-11-22 14:23:10', '1');
INSERT INTO `activities` VALUES ('77', '1', 'logged in from: 127.0.0.1', 'users', '2012-11-22 21:38:55', '1');
INSERT INTO `activities` VALUES ('78', '1', 'Migrate Type: thnakademik_ Uninstalled Version: 0 from: 127.0.0.1', 'migrations', '2012-11-22 21:45:22', '1');
INSERT INTO `activities` VALUES ('79', '1', 'Migrate Type: thnakademik_ to Version: 0 from: 127.0.0.1', 'migrations', '2012-11-22 21:45:28', '1');
INSERT INTO `activities` VALUES ('80', '1', 'Created Module: tahunakademik : 127.0.0.1', 'modulebuilder', '2012-11-22 21:47:37', '1');
INSERT INTO `activities` VALUES ('81', '1', 'Created Module: tahunakademik : 127.0.0.1', 'modulebuilder', '2012-11-22 21:51:34', '1');
INSERT INTO `activities` VALUES ('82', '1', 'Created record with ID: 1 : 127.0.0.1', 'tahunakademik', '2012-11-22 21:55:35', '1');
INSERT INTO `activities` VALUES ('83', '1', 'Deleted record with ID: 1 : 127.0.0.1', 'tahunakademik', '2012-11-22 21:57:10', '1');
INSERT INTO `activities` VALUES ('84', '1', 'logged in from: 127.0.0.1', 'users', '2012-11-22 22:39:40', '1');
INSERT INTO `activities` VALUES ('85', '1', 'logged in from: 127.0.0.1', 'users', '2012-11-23 00:54:00', '1');
INSERT INTO `activities` VALUES ('86', '1', 'Created record with ID: 1 : 127.0.0.1', 'tahunakademik', '2012-11-23 00:54:21', '1');
INSERT INTO `activities` VALUES ('87', '1', 'Created record with ID: 2 : 127.0.0.1', 'tahunakademik', '2012-11-23 00:57:13', '1');
INSERT INTO `activities` VALUES ('88', '1', 'Deleted Module: tahunakademik : 127.0.0.1', 'builder', '2012-11-23 00:58:12', '1');
INSERT INTO `activities` VALUES ('89', '1', 'Deleted Module: thnakademik : 127.0.0.1', 'builder', '2012-11-23 00:58:15', '1');
INSERT INTO `activities` VALUES ('90', '1', 'Created Module: tahunAkademik : 127.0.0.1', 'modulebuilder', '2012-11-23 01:10:45', '1');
INSERT INTO `activities` VALUES ('91', '1', 'Created record with ID: 4 : 127.0.0.1', 'tahunakademik', '2012-11-23 01:22:10', '1');
INSERT INTO `activities` VALUES ('92', '1', 'Created Module: tes : 127.0.0.1', 'modulebuilder', '2012-11-23 01:31:27', '1');
INSERT INTO `activities` VALUES ('93', '1', 'Created record with ID: 1 : 127.0.0.1', 'tes', '2012-11-23 01:32:25', '1');
INSERT INTO `activities` VALUES ('94', '1', 'Updated record with ID: 1 : 127.0.0.1', 'tes', '2012-11-23 01:38:48', '1');
INSERT INTO `activities` VALUES ('95', '1', 'Updated record with ID: 4 : 127.0.0.1', 'tes', '2012-11-23 01:40:10', '1');
INSERT INTO `activities` VALUES ('96', '1', 'logged in from: 127.0.0.1', 'users', '2012-11-23 01:55:01', '1');
INSERT INTO `activities` VALUES ('97', '1', 'logged out from: 127.0.0.1', 'users', '2012-11-23 02:00:52', '1');
INSERT INTO `activities` VALUES ('98', '2', 'logged in from: 127.0.0.1', 'users', '2012-11-23 02:01:01', '1');
INSERT INTO `activities` VALUES ('99', '1', 'deleted 92 activities', 'activities', '2012-11-23 03:53:13', '1');
INSERT INTO `activities` VALUES ('100', '1', 'deleted 7 activities', 'activities', '2012-11-23 03:53:23', '1');
INSERT INTO `activities` VALUES ('101', '1', 'deleted 1 activities', 'activities', '2012-11-23 03:53:32', '1');
INSERT INTO `activities` VALUES ('102', '2', 'logged in from: 127.0.0.1', 'users', '2012-11-23 04:55:34', '1');
INSERT INTO `activities` VALUES ('103', '1', 'Deleted Module: tes : 127.0.0.1', 'builder', '2012-11-23 07:00:20', '1');
INSERT INTO `activities` VALUES ('104', '1', 'Deleted Module: tahunAkademik : 127.0.0.1', 'builder', '2012-11-23 07:00:25', '1');
INSERT INTO `activities` VALUES ('105', '1', 'Created Module: tahunakademik : 127.0.0.1', 'modulebuilder', '2012-11-23 07:22:18', '1');
INSERT INTO `activities` VALUES ('106', '1', 'Created record with ID: 1 : 127.0.0.1', 'tahunakademik', '2012-11-23 07:28:46', '1');
INSERT INTO `activities` VALUES ('107', '1', 'Updated record with ID: 1 : 127.0.0.1', 'tahunakademik', '2012-11-23 07:44:18', '1');
INSERT INTO `activities` VALUES ('108', '1', 'Updated record with ID: 1 : 127.0.0.1', 'tahunakademik', '2012-11-23 07:55:27', '1');
INSERT INTO `activities` VALUES ('109', '1', 'Updated record with ID: 1 : 127.0.0.1', 'tahunakademik', '2012-11-23 07:56:06', '1');
INSERT INTO `activities` VALUES ('110', '1', 'Updated record with ID: 1 : 127.0.0.1', 'tahunakademik', '2012-11-23 07:56:21', '1');
INSERT INTO `activities` VALUES ('111', '1', 'Updated record with ID: 1 : 127.0.0.1', 'tahunakademik', '2012-11-23 08:02:06', '1');
INSERT INTO `activities` VALUES ('112', '1', 'Updated record with ID: 1 : 127.0.0.1', 'tahunakademik', '2012-11-23 09:09:14', '1');
INSERT INTO `activities` VALUES ('113', '1', 'Created record with ID: 4 : 127.0.0.1', 'tahunakademik', '2012-11-23 09:21:04', '1');
INSERT INTO `activities` VALUES ('114', '1', 'Updated record with ID: 4 : 127.0.0.1', 'tahunakademik', '2012-11-23 09:27:19', '1');
INSERT INTO `activities` VALUES ('115', '1', 'Updated record with ID: 4 : 127.0.0.1', 'tahunakademik', '2012-11-23 09:28:44', '1');
INSERT INTO `activities` VALUES ('116', '1', 'Updated record with ID: 4 : 127.0.0.1', 'tahunakademik', '2012-11-23 09:57:37', '1');
INSERT INTO `activities` VALUES ('117', '2', 'logged in from: 127.0.0.1', 'users', '2012-11-23 10:05:33', '1');
INSERT INTO `activities` VALUES ('118', '2', 'logged out from: 127.0.0.1', 'users', '2012-11-23 10:06:30', '1');
INSERT INTO `activities` VALUES ('119', '2', 'logged in from: 127.0.0.1', 'users', '2012-11-23 10:07:24', '1');
INSERT INTO `activities` VALUES ('120', '1', 'logged in from: 127.0.0.1', 'users', '2012-11-23 13:24:25', '1');
INSERT INTO `activities` VALUES ('121', '1', 'Created Module: jenjang : 127.0.0.1', 'modulebuilder', '2012-11-23 13:27:09', '1');
INSERT INTO `activities` VALUES ('122', '1', 'Deleted Module: jenjang : 127.0.0.1', 'builder', '2012-11-23 13:31:34', '1');
INSERT INTO `activities` VALUES ('123', '1', 'Created Module: jenjang : 127.0.0.1', 'modulebuilder', '2012-11-23 13:38:19', '1');
INSERT INTO `activities` VALUES ('124', '1', 'Created record with ID: 1 : 127.0.0.1', 'jenjang', '2012-11-23 13:38:53', '1');
INSERT INTO `activities` VALUES ('125', '1', 'Created record with ID: 2 : 127.0.0.1', 'jenjang', '2012-11-23 13:39:08', '1');
INSERT INTO `activities` VALUES ('126', '1', 'Deleted Module: jenjang : 127.0.0.1', 'builder', '2012-11-23 14:02:15', '1');
INSERT INTO `activities` VALUES ('127', '1', 'Created Module: jenjang : 127.0.0.1', 'modulebuilder', '2012-11-23 14:18:18', '1');
INSERT INTO `activities` VALUES ('128', '1', 'Created record with ID: 1 : 127.0.0.1', 'jenjang', '2012-11-23 14:18:37', '1');
INSERT INTO `activities` VALUES ('129', '1', 'Updated record with ID: 1 : 127.0.0.1', 'jenjang', '2012-11-23 14:19:10', '1');
INSERT INTO `activities` VALUES ('130', '1', 'Created record with ID: 2 : 127.0.0.1', 'jenjang', '2012-11-23 14:19:32', '1');
INSERT INTO `activities` VALUES ('131', '1', 'logged in from: 127.0.0.1', 'users', '2012-11-23 22:45:00', '1');
INSERT INTO `activities` VALUES ('132', '1', 'Created record with ID: 3 : 127.0.0.1', 'jenjang', '2012-11-24 00:45:42', '1');
INSERT INTO `activities` VALUES ('133', '1', 'logged in from: 127.0.0.1', 'users', '2012-11-24 09:20:11', '1');
INSERT INTO `activities` VALUES ('134', '1', 'Created Module: matakuliah : 127.0.0.1', 'modulebuilder', '2012-11-24 12:50:49', '1');
INSERT INTO `activities` VALUES ('135', '1', 'Deleted Module: matakuliah : 127.0.0.1', 'builder', '2012-11-24 12:52:46', '1');
INSERT INTO `activities` VALUES ('136', '1', 'Created record with ID: 5 : 127.0.0.1', 'tahunakademik', '2012-11-24 13:24:16', '1');
INSERT INTO `activities` VALUES ('137', '1', 'Deleted Module: jenjang : 127.0.0.1', 'builder', '2012-11-24 13:26:14', '1');
INSERT INTO `activities` VALUES ('138', '1', 'Created Module: matakuliah : 127.0.0.1', 'modulebuilder', '2012-11-24 13:33:02', '1');
INSERT INTO `activities` VALUES ('139', '1', 'Created record with ID: 1 : 127.0.0.1', 'matakuliah', '2012-11-24 13:34:05', '1');
INSERT INTO `activities` VALUES ('140', '1', 'logged in from: 127.0.0.1', 'users', '2012-11-25 12:36:02', '1');
INSERT INTO `activities` VALUES ('141', '1', 'logged in from: 127.0.0.1', 'users', '2012-11-26 05:55:18', '1');
INSERT INTO `activities` VALUES ('142', '1', 'logged in from: 127.0.0.1', 'users', '2012-11-26 20:23:31', '1');
INSERT INTO `activities` VALUES ('143', '1', 'Created Module: Tes Lagi : 127.0.0.1', 'modulebuilder', '2012-11-26 21:53:46', '1');
INSERT INTO `activities` VALUES ('144', '1', 'Created record with ID: 1 : 127.0.0.1', 'tes_lagi', '2012-11-26 22:03:31', '1');
INSERT INTO `activities` VALUES ('145', '1', 'Created record with ID: 2 : 127.0.0.1', 'tes_lagi', '2012-11-26 22:03:41', '1');
INSERT INTO `activities` VALUES ('146', '1', 'Created record with ID: 2 : 127.0.0.1', 'matakuliah', '2012-11-26 22:53:13', '1');
INSERT INTO `activities` VALUES ('147', '1', 'Created record with ID: 3 : 127.0.0.1', 'matakuliah', '2012-11-27 00:16:23', '1');
INSERT INTO `activities` VALUES ('148', '1', 'Created record with ID: 4 : 127.0.0.1', 'matakuliah', '2012-11-27 00:19:34', '1');
INSERT INTO `activities` VALUES ('149', '1', 'Created record with ID: 5 : 127.0.0.1', 'matakuliah', '2012-11-27 00:21:25', '1');
INSERT INTO `activities` VALUES ('150', '1', 'Created record with ID: 6 : 127.0.0.1', 'matakuliah', '2012-11-27 00:22:53', '1');
INSERT INTO `activities` VALUES ('151', '1', 'Created record with ID: 7 : 127.0.0.1', 'matakuliah', '2012-11-27 00:24:12', '1');
INSERT INTO `activities` VALUES ('152', '1', 'Created record with ID: 8 : 127.0.0.1', 'matakuliah', '2012-11-27 00:25:38', '1');
INSERT INTO `activities` VALUES ('153', '1', 'Created record with ID: 9 : 127.0.0.1', 'matakuliah', '2012-11-27 00:28:18', '1');
INSERT INTO `activities` VALUES ('154', '1', 'Created record with ID: 10 : 127.0.0.1', 'matakuliah', '2012-11-27 00:30:24', '1');
INSERT INTO `activities` VALUES ('155', '1', 'Created record with ID: 11 : 127.0.0.1', 'matakuliah', '2012-11-27 00:31:10', '1');
INSERT INTO `activities` VALUES ('156', '1', 'Updated record with ID: 7 : 127.0.0.1', 'matakuliah', '2012-11-27 00:31:35', '1');
INSERT INTO `activities` VALUES ('157', '1', 'Created record with ID: 12 : 127.0.0.1', 'matakuliah', '2012-11-27 00:34:38', '1');
INSERT INTO `activities` VALUES ('158', '1', 'Created record with ID: 13 : 127.0.0.1', 'matakuliah', '2012-11-27 00:35:36', '1');
INSERT INTO `activities` VALUES ('159', '1', 'Created record with ID: 14 : 127.0.0.1', 'matakuliah', '2012-11-27 00:36:40', '1');
INSERT INTO `activities` VALUES ('160', '1', 'Created record with ID: 15 : 127.0.0.1', 'matakuliah', '2012-11-27 00:37:01', '1');
INSERT INTO `activities` VALUES ('161', '1', 'Created record with ID: 16 : 127.0.0.1', 'matakuliah', '2012-11-27 00:37:14', '1');
INSERT INTO `activities` VALUES ('162', '1', 'Created record with ID: 17 : 127.0.0.1', 'matakuliah', '2012-11-27 00:45:05', '1');
INSERT INTO `activities` VALUES ('163', '1', 'Created record with ID: 18 : 127.0.0.1', 'matakuliah', '2012-11-27 00:45:57', '1');
INSERT INTO `activities` VALUES ('164', '1', 'Created record with ID: 19 : 127.0.0.1', 'matakuliah', '2012-11-27 01:29:56', '1');
INSERT INTO `activities` VALUES ('165', '1', 'Created record with ID: 20 : 127.0.0.1', 'matakuliah', '2012-11-27 01:51:56', '1');
INSERT INTO `activities` VALUES ('166', '1', 'Created record with ID: 21 : 127.0.0.1', 'matakuliah', '2012-11-27 03:14:00', '1');
INSERT INTO `activities` VALUES ('167', '1', 'Created record with ID: 22 : 127.0.0.1', 'matakuliah', '2012-11-27 03:26:15', '1');
INSERT INTO `activities` VALUES ('168', '1', 'Created record with ID: 23 : 127.0.0.1', 'matakuliah', '2012-11-27 03:26:29', '1');
INSERT INTO `activities` VALUES ('169', '1', 'Created record with ID: 24 : 127.0.0.1', 'matakuliah', '2012-11-27 03:40:08', '1');
INSERT INTO `activities` VALUES ('170', '1', 'Created record with ID: 25 : 127.0.0.1', 'matakuliah', '2012-11-27 03:42:21', '1');
INSERT INTO `activities` VALUES ('171', '1', 'Created record with ID: 26 : 127.0.0.1', 'matakuliah', '2012-11-27 03:44:53', '1');
INSERT INTO `activities` VALUES ('172', '1', 'Created record with ID: 27 : 127.0.0.1', 'matakuliah', '2012-11-27 04:46:06', '1');
INSERT INTO `activities` VALUES ('173', '1', 'Created record with ID: 28 : 127.0.0.1', 'matakuliah', '2012-11-27 05:20:52', '1');
INSERT INTO `activities` VALUES ('174', '1', 'Created record with ID: 29 : 127.0.0.1', 'matakuliah', '2012-11-27 05:35:19', '1');
INSERT INTO `activities` VALUES ('175', '1', 'Created record with ID: 30 : 127.0.0.1', 'matakuliah', '2012-11-27 05:37:30', '1');
INSERT INTO `activities` VALUES ('176', '1', 'Created record with ID: 31 : 127.0.0.1', 'matakuliah', '2012-11-27 05:37:57', '1');
INSERT INTO `activities` VALUES ('177', '1', 'Created record with ID: 32 : 127.0.0.1', 'matakuliah', '2012-11-27 05:39:45', '1');
INSERT INTO `activities` VALUES ('178', '1', 'Created record with ID: 33 : 127.0.0.1', 'matakuliah', '2012-11-27 05:40:37', '1');
INSERT INTO `activities` VALUES ('179', '1', 'Created record with ID: 34 : 127.0.0.1', 'matakuliah', '2012-11-27 05:41:04', '1');
INSERT INTO `activities` VALUES ('180', '1', 'Created record with ID: 35 : 127.0.0.1', 'matakuliah', '2012-11-27 05:41:21', '1');
INSERT INTO `activities` VALUES ('181', '1', 'Created record with ID: 36 : 127.0.0.1', 'matakuliah', '2012-11-27 05:42:49', '1');
INSERT INTO `activities` VALUES ('182', '1', 'Created record with ID: 37 : 127.0.0.1', 'matakuliah', '2012-11-27 05:43:11', '1');
INSERT INTO `activities` VALUES ('183', '1', 'Created record with ID: 38 : 127.0.0.1', 'matakuliah', '2012-11-27 05:43:54', '1');
INSERT INTO `activities` VALUES ('184', '1', 'Created record with ID: 39 : 127.0.0.1', 'matakuliah', '2012-11-27 05:44:20', '1');
INSERT INTO `activities` VALUES ('185', '1', 'Created record with ID: 40 : 127.0.0.1', 'matakuliah', '2012-11-27 05:45:56', '1');
INSERT INTO `activities` VALUES ('186', '1', 'Created record with ID: 41 : 127.0.0.1', 'matakuliah', '2012-11-27 05:59:53', '1');
INSERT INTO `activities` VALUES ('187', '1', 'Created record with ID: 42 : 127.0.0.1', 'matakuliah', '2012-11-27 06:01:12', '1');
INSERT INTO `activities` VALUES ('188', '1', 'Created record with ID: 43 : 127.0.0.1', 'matakuliah', '2012-11-27 06:01:34', '1');
INSERT INTO `activities` VALUES ('189', '1', 'logged in from: 127.0.0.1', 'users', '2012-12-02 03:59:21', '1');
INSERT INTO `activities` VALUES ('190', '1', 'Created Module: Matakuliah Prasyarat : 127.0.0.1', 'modulebuilder', '2012-12-02 04:06:51', '1');
INSERT INTO `activities` VALUES ('191', '1', 'logged in from: 127.0.0.1', 'users', '2012-12-03 01:07:46', '1');
INSERT INTO `activities` VALUES ('192', '1', 'logged out from: 127.0.0.1', 'users', '2012-12-03 01:38:12', '1');
INSERT INTO `activities` VALUES ('193', '1', 'logged in from: 127.0.0.1', 'users', '2012-12-04 00:16:31', '1');
INSERT INTO `activities` VALUES ('194', '1', 'Migrate Type: tes_lagi_ Uninstalled Version: 0 from: 127.0.0.1', 'migrations', '2012-12-04 00:19:05', '1');
INSERT INTO `activities` VALUES ('195', '1', 'Migrate Type: tahunakademik_ Uninstalled Version: 0 from: 127.0.0.1', 'migrations', '2012-12-04 00:19:23', '1');
INSERT INTO `activities` VALUES ('196', '1', 'Migrate Type: beban_studi_ to Version: 1 from: 127.0.0.1', 'migrations', '2012-12-04 00:20:08', '1');
INSERT INTO `activities` VALUES ('197', '1', 'Migrate Type: data_jurusan_ to Version: 1 from: 127.0.0.1', 'migrations', '2012-12-04 00:20:15', '1');
INSERT INTO `activities` VALUES ('198', '1', 'Migrate Type: jenjang_ to Version: 1 from: 127.0.0.1', 'migrations', '2012-12-04 00:20:23', '1');
INSERT INTO `activities` VALUES ('199', '1', 'Migrate Type: kompetensi_ to Version: 1 from: 127.0.0.1', 'migrations', '2012-12-04 00:25:05', '1');
INSERT INTO `activities` VALUES ('200', '1', 'Migrate Type: kurikulum_ to Version: 1 from: 127.0.0.1', 'migrations', '2012-12-04 00:25:15', '1');
INSERT INTO `activities` VALUES ('201', '1', 'Migrate Type: nama_kurikulum_ to Version: 1 from: 127.0.0.1', 'migrations', '2012-12-04 00:30:26', '1');
INSERT INTO `activities` VALUES ('202', '1', 'Migrate Type: sistem_penilaian_ to Version: 1 from: 127.0.0.1', 'migrations', '2012-12-04 00:30:39', '1');
INSERT INTO `activities` VALUES ('203', '1', 'Migrate Type: nama_jurusan_ to Version: 1 from: 127.0.0.1', 'migrations', '2012-12-04 00:30:48', '1');
INSERT INTO `activities` VALUES ('204', '1', 'Migrate Type: kurikulum_ to Version: 1 from: 127.0.0.1', 'migrations', '2012-12-04 00:31:01', '1');
INSERT INTO `activities` VALUES ('205', '1', 'Migrate Type: matakuliah_ to Version: 1 from: 127.0.0.1', 'migrations', '2012-12-04 00:31:09', '1');
INSERT INTO `activities` VALUES ('206', '1', 'Migrate Type: nama_jurusan_ to Version: 1 from: 127.0.0.1', 'migrations', '2012-12-04 00:31:16', '1');
INSERT INTO `activities` VALUES ('207', '1', 'Migrate Type: predikatkelulusan_ to Version: 1 from: 127.0.0.1', 'migrations', '2012-12-04 00:32:40', '1');
INSERT INTO `activities` VALUES ('208', '1', 'Migrate Type: tahunakademik_ to Version: 1 from: 127.0.0.1', 'migrations', '2012-12-04 01:20:45', '1');
INSERT INTO `activities` VALUES ('209', '1', 'Created record with ID: 1 : 127.0.0.1', 'predikatkelulusan', '2012-12-04 01:37:27', '1');
INSERT INTO `activities` VALUES ('210', '1', 'Created record with ID: 2 : 127.0.0.1', 'predikatkelulusan', '2012-12-04 01:37:45', '1');
INSERT INTO `activities` VALUES ('211', '1', 'Created record with ID: 3 : 127.0.0.1', 'predikatkelulusan', '2012-12-04 01:37:59', '1');
INSERT INTO `activities` VALUES ('212', '1', 'logged in from: 127.0.0.1', 'users', '2012-12-04 05:24:35', '1');
INSERT INTO `activities` VALUES ('213', '1', 'Created Module: Matakuliah Prasyarat : 127.0.0.1', 'modulebuilder', '2012-12-04 06:13:10', '1');
INSERT INTO `activities` VALUES ('214', '1', 'Deleted Module: Matakuliah_Prasyarat : 127.0.0.1', 'builder', '2012-12-04 06:15:00', '1');
INSERT INTO `activities` VALUES ('215', '1', 'Created Module: Matakuliah Prasyarat : 127.0.0.1', 'modulebuilder', '2012-12-04 06:17:26', '1');
INSERT INTO `activities` VALUES ('216', '1', 'Created record with ID: 1 : 127.0.0.1', 'data_jurusan', '2012-12-04 06:27:02', '1');
INSERT INTO `activities` VALUES ('217', '1', 'Created record with ID: 1 : 127.0.0.1', 'jenjang', '2012-12-04 06:27:23', '1');
INSERT INTO `activities` VALUES ('218', '1', 'Created record with ID: 1 : 127.0.0.1', 'nama_jurusan', '2012-12-04 06:27:50', '1');
INSERT INTO `activities` VALUES ('219', '1', 'Created record with ID: 1 : 127.0.0.1', 'nama_kurikulum', '2012-12-04 06:28:15', '1');
INSERT INTO `activities` VALUES ('220', '1', 'Created record with ID: 1 : 127.0.0.1', 'matakuliah_prasyarat', '2012-12-04 06:42:20', '1');
INSERT INTO `activities` VALUES ('221', '1', 'logged in from: 127.0.0.1', 'users', '2012-12-05 00:38:58', '1');
INSERT INTO `activities` VALUES ('222', '1', 'logged out from: 127.0.0.1', 'users', '2012-12-05 02:43:33', '1');
INSERT INTO `activities` VALUES ('223', '1', 'logged in from: 127.0.0.1', 'users', '2012-12-11 23:29:16', '1');
INSERT INTO `activities` VALUES ('224', '1', 'Created record with ID: 1 : 127.0.0.1', 'kompetensi', '2012-12-11 23:32:59', '1');
INSERT INTO `activities` VALUES ('225', '1', 'modified user: Zaenal Abidin', 'users', '2012-12-11 23:41:35', '1');
INSERT INTO `activities` VALUES ('226', '1', 'Created record with ID: 1 : 127.0.0.1', 'beban_studi', '2012-12-11 23:41:53', '1');
INSERT INTO `activities` VALUES ('227', '1', 'Updated record with ID: 1 : 127.0.0.1', 'tahunakademik', '2012-12-12 01:22:47', '1');
INSERT INTO `activities` VALUES ('228', '1', 'Deleted Module: a : 127.0.0.1', 'builder', '2012-12-12 01:24:56', '1');
INSERT INTO `activities` VALUES ('229', '1', 'Created Module: Jenis Pembayaran : 127.0.0.1', 'modulebuilder', '2012-12-12 02:52:27', '1');
INSERT INTO `activities` VALUES ('230', '1', 'Created record with ID: 1 : 127.0.0.1', 'jenis_pembayaran', '2012-12-12 02:59:48', '1');
INSERT INTO `activities` VALUES ('231', '1', 'Created record with ID: 2 : 127.0.0.1', 'jenis_pembayaran', '2012-12-12 03:01:28', '1');
INSERT INTO `activities` VALUES ('232', '1', 'Updated record with ID: 2 : 127.0.0.1', 'jenis_pembayaran', '2012-12-12 03:04:50', '1');
INSERT INTO `activities` VALUES ('233', '1', 'Created record with ID: 3 : 127.0.0.1', 'jenis_pembayaran', '2012-12-12 03:09:00', '1');
INSERT INTO `activities` VALUES ('234', '1', 'Created record with ID: 4 : 127.0.0.1', 'jenis_pembayaran', '2012-12-12 03:13:04', '1');
INSERT INTO `activities` VALUES ('235', '1', 'Created record with ID: 5 : 127.0.0.1', 'jenis_pembayaran', '2012-12-12 03:14:25', '1');
INSERT INTO `activities` VALUES ('236', '1', 'Created Module: Pembayaran : 127.0.0.1', 'modulebuilder', '2012-12-12 03:43:14', '1');
INSERT INTO `activities` VALUES ('237', '1', 'logged in from: 127.0.0.1', 'users', '2012-12-12 11:10:35', '1');
INSERT INTO `activities` VALUES ('238', '1', 'logged in from: 127.0.0.1', 'users', '2012-12-13 06:19:25', '1');
INSERT INTO `activities` VALUES ('239', '1', 'Created record with ID: 2 : 127.0.0.1', 'matakuliah', '2012-12-13 06:43:16', '1');
INSERT INTO `activities` VALUES ('240', '1', 'Created record with ID: 3 : 127.0.0.1', 'matakuliah', '2012-12-13 06:43:36', '1');
INSERT INTO `activities` VALUES ('241', '1', 'Updated record with ID: 3 : 127.0.0.1', 'matakuliah', '2012-12-13 06:43:47', '1');
INSERT INTO `activities` VALUES ('242', '1', 'Created Module: Departemen : 127.0.0.1', 'modulebuilder', '2012-12-13 07:21:17', '1');
INSERT INTO `activities` VALUES ('243', '1', 'Created record with ID: 1 : 127.0.0.1', 'departemen', '2012-12-13 07:21:39', '1');
INSERT INTO `activities` VALUES ('244', '1', 'Created record with ID: 2 : 127.0.0.1', 'departemen', '2012-12-13 07:21:53', '1');
INSERT INTO `activities` VALUES ('245', '1', 'Created record with ID: 3 : 127.0.0.1', 'departemen', '2012-12-13 07:21:59', '1');
INSERT INTO `activities` VALUES ('246', '1', 'Updated record with ID: 1 : 127.0.0.1', 'departemen', '2012-12-13 07:24:31', '1');
INSERT INTO `activities` VALUES ('247', '1', 'Created record with ID: 1 : 127.0.0.1', 'departemen', '2012-12-13 07:25:42', '1');
INSERT INTO `activities` VALUES ('248', '1', 'Created record with ID: 2 : 127.0.0.1', 'departemen', '2012-12-13 07:26:06', '1');
INSERT INTO `activities` VALUES ('249', '1', 'logged out from: 127.0.0.1', 'users', '2012-12-13 07:42:43', '1');
INSERT INTO `activities` VALUES ('250', '1', 'logged in from: 127.0.0.1', 'users', '2012-12-13 08:12:03', '1');
INSERT INTO `activities` VALUES ('251', '1', 'logged in from: 127.0.0.1', 'users', '2012-12-14 03:40:39', '1');
INSERT INTO `activities` VALUES ('252', '1', 'Created record with ID: 2 : 127.0.0.1', 'nama_kurikulum', '2012-12-14 05:00:39', '1');
INSERT INTO `activities` VALUES ('253', '1', 'Created record with ID: 1 : 127.0.0.1', 'nama_kurikulum', '2012-12-14 06:12:33', '1');
INSERT INTO `activities` VALUES ('254', '1', 'Created record with ID: 4 : 127.0.0.1', 'matakuliah', '2012-12-14 06:25:03', '1');
INSERT INTO `activities` VALUES ('255', '1', 'Created record with ID: 5 : 127.0.0.1', 'matakuliah', '2012-12-14 06:25:25', '1');
INSERT INTO `activities` VALUES ('256', '1', 'Created record with ID: 6 : 127.0.0.1', 'matakuliah', '2012-12-14 06:25:41', '1');
INSERT INTO `activities` VALUES ('257', '1', 'Created record with ID: 1 : 127.0.0.1', 'pembayaran', '2012-12-14 13:04:06', '1');
INSERT INTO `activities` VALUES ('258', '1', 'Created record with ID: 7 : 127.0.0.1', 'jenis_pembayaran', '2012-12-14 15:10:22', '1');
INSERT INTO `activities` VALUES ('259', '1', 'Created record with ID: 8 : 127.0.0.1', 'jenis_pembayaran', '2012-12-14 15:19:23', '1');
INSERT INTO `activities` VALUES ('260', '1', 'logged in from: 127.0.0.1', 'users', '2012-12-14 22:19:43', '1');
INSERT INTO `activities` VALUES ('261', '1', 'logged in from: 127.0.0.1', 'users', '2012-12-14 22:57:55', '1');
INSERT INTO `activities` VALUES ('262', '1', 'logged in from: 127.0.0.1', 'users', '2012-12-14 23:03:32', '1');
INSERT INTO `activities` VALUES ('263', '1', 'logged in from: 127.0.0.1', 'users', '2012-12-14 23:04:40', '1');
INSERT INTO `activities` VALUES ('264', '1', 'logged in from: 127.0.0.1', 'users', '2012-12-14 23:04:59', '1');
INSERT INTO `activities` VALUES ('265', '1', 'logged in from: 127.0.0.1', 'users', '2012-12-14 23:22:46', '1');
INSERT INTO `activities` VALUES ('266', '1', 'Deleted Module: Tes_Lagi : 127.0.0.1', 'builder', '2012-12-14 23:33:09', '1');
INSERT INTO `activities` VALUES ('267', '1', 'logged in from: 127.0.0.1', 'users', '2012-12-15 01:29:47', '1');
INSERT INTO `activities` VALUES ('268', '1', 'logged in from: 127.0.0.1', 'users', '2012-12-15 03:37:15', '1');
INSERT INTO `activities` VALUES ('269', '1', 'Updated record with ID: 2 : 127.0.0.1', 'jenis_pembayaran', '2012-12-15 03:48:45', '1');
INSERT INTO `activities` VALUES ('270', '1', 'Updated record with ID: 8 : 127.0.0.1', 'jenis_pembayaran', '2012-12-15 04:05:17', '1');
INSERT INTO `activities` VALUES ('271', '1', 'Created record with ID: 9 : 127.0.0.1', 'jenis_pembayaran', '2012-12-15 04:11:34', '1');
INSERT INTO `activities` VALUES ('272', '1', 'Created record with ID: 10 : 127.0.0.1', 'jenis_pembayaran', '2012-12-15 04:25:14', '1');
INSERT INTO `activities` VALUES ('273', '1', 'Created record with ID: 11 : 127.0.0.1', 'jenis_pembayaran', '2012-12-15 04:25:32', '1');
INSERT INTO `activities` VALUES ('274', '1', 'logged in from: 127.0.0.1', 'users', '2012-12-15 06:06:32', '1');
INSERT INTO `activities` VALUES ('275', '1', 'logged in from: 127.0.0.1', 'users', '2012-12-15 12:38:19', '1');
INSERT INTO `activities` VALUES ('276', '1', 'logged in from: 127.0.0.1', 'users', '2012-12-15 13:42:29', '1');
INSERT INTO `activities` VALUES ('277', '1', 'logged in from: 127.0.0.1', 'users', '2012-12-15 14:30:50', '1');
INSERT INTO `activities` VALUES ('278', '1', 'logged in from: 127.0.0.1', 'users', '2012-12-15 22:11:47', '1');
INSERT INTO `activities` VALUES ('279', '1', 'logged in from: 127.0.0.1', 'users', '2012-12-16 00:42:48', '1');
INSERT INTO `activities` VALUES ('280', '1', 'Created record with ID: 2 : 127.0.0.1', 'beban_studi', '2012-12-16 00:45:24', '1');
INSERT INTO `activities` VALUES ('281', '1', 'Created record with ID: 1 : 127.0.0.1', 'beban_studi', '2012-12-16 00:46:46', '1');
INSERT INTO `activities` VALUES ('282', '1', 'Created record with ID: 2 : 127.0.0.1', 'beban_studi', '2012-12-16 00:49:13', '1');
INSERT INTO `activities` VALUES ('283', '1', 'logged in from: 127.0.0.1', 'users', '2012-12-16 04:35:31', '1');
INSERT INTO `activities` VALUES ('284', '1', 'Created record with ID: 2 : 127.0.0.1', 'jenjang', '2012-12-16 04:41:15', '1');
INSERT INTO `activities` VALUES ('285', '1', 'Updated record with ID: 1 : 127.0.0.1', 'jenjang', '2012-12-16 04:41:25', '1');
INSERT INTO `activities` VALUES ('286', '1', 'Updated record with ID: 1 : 127.0.0.1', 'nama_jurusan', '2012-12-16 04:41:57', '1');
INSERT INTO `activities` VALUES ('287', '1', 'Created record with ID: 2 : 127.0.0.1', 'nama_jurusan', '2012-12-16 04:42:29', '1');
INSERT INTO `activities` VALUES ('288', '1', 'Updated record with ID: 1 : 127.0.0.1', 'beban_studi', '2012-12-16 04:42:49', '1');
INSERT INTO `activities` VALUES ('289', '1', 'Updated record with ID: 1 : 127.0.0.1', 'beban_studi', '2012-12-16 04:43:34', '1');
INSERT INTO `activities` VALUES ('290', '1', 'Updated record with ID: 2 : 127.0.0.1', 'nama_jurusan', '2012-12-16 04:53:05', '1');
INSERT INTO `activities` VALUES ('291', '1', 'logged in from: 127.0.0.1', 'users', '2012-12-16 07:27:52', '1');
INSERT INTO `activities` VALUES ('292', '1', 'Created record with ID: 2 : 127.0.0.1', 'nama_kurikulum', '2012-12-16 07:28:20', '1');
INSERT INTO `activities` VALUES ('293', '1', 'logged in from: 127.0.0.1', 'users', '2012-12-16 08:45:57', '1');
INSERT INTO `activities` VALUES ('294', '1', 'logged in from: ::1', 'users', '2012-12-16 11:07:06', '1');
INSERT INTO `activities` VALUES ('295', '1', 'logged in from: ::1', 'users', '2012-12-16 11:09:08', '1');
INSERT INTO `activities` VALUES ('296', '1', 'logged in from: ::1', 'users', '2012-12-17 02:20:59', '1');
INSERT INTO `activities` VALUES ('297', '1', 'logged in from: ::1', 'users', '2012-12-17 06:03:03', '1');
INSERT INTO `activities` VALUES ('298', '1', 'Created record with ID: 2 : ::1', 'pembayaran', '2012-12-17 07:04:33', '1');
INSERT INTO `activities` VALUES ('299', '1', 'logged out from: ::1', 'users', '2012-12-17 07:32:06', '1');
INSERT INTO `activities` VALUES ('300', '1', 'logged in from: ::1', 'users', '2012-12-17 07:44:27', '1');
INSERT INTO `activities` VALUES ('301', '1', 'logged in from: ::1', 'users', '2012-12-17 23:29:12', '1');
INSERT INTO `activities` VALUES ('302', '1', 'logged in from: ::1', 'users', '2012-12-17 23:30:45', '1');
INSERT INTO `activities` VALUES ('303', '1', 'logged out from: ::1', 'users', '2012-12-17 23:32:51', '1');
INSERT INTO `activities` VALUES ('304', '1', 'logged in from: ::1', 'users', '2012-12-17 23:42:06', '1');
INSERT INTO `activities` VALUES ('305', '1', 'logged out from: ::1', 'users', '2012-12-17 23:48:02', '1');
INSERT INTO `activities` VALUES ('306', '1', 'logged in from: ::1', 'users', '2012-12-18 23:09:41', '1');
INSERT INTO `activities` VALUES ('307', '1', 'logged out from: ::1', 'users', '2012-12-18 23:42:20', '1');
INSERT INTO `activities` VALUES ('308', '1', 'logged in from: ::1', 'users', '2012-12-18 23:42:35', '1');
INSERT INTO `activities` VALUES ('309', '1', 'logged in from: ::1', 'users', '2012-12-19 02:13:49', '1');
INSERT INTO `activities` VALUES ('310', '1', 'logged out from: ::1', 'users', '2012-12-19 02:29:25', '1');
INSERT INTO `activities` VALUES ('311', '1', 'logged in from: ::1', 'users', '2012-12-19 06:09:06', '1');
INSERT INTO `activities` VALUES ('312', '1', 'logged out from: ::1', 'users', '2012-12-19 06:14:01', '1');
INSERT INTO `activities` VALUES ('313', '1', 'logged in from: ::1', 'users', '2012-12-19 12:43:48', '1');
INSERT INTO `activities` VALUES ('314', '1', 'logged out from: ::1', 'users', '2012-12-19 12:44:39', '1');
INSERT INTO `activities` VALUES ('315', '1', 'logged in from: ::1', 'users', '2012-12-19 13:34:05', '1');
INSERT INTO `activities` VALUES ('316', '1', 'logged out from: ::1', 'users', '2012-12-19 13:34:20', '1');
INSERT INTO `activities` VALUES ('317', '1', 'logged in from: ::1', 'users', '2012-12-19 22:46:49', '1');
INSERT INTO `activities` VALUES ('318', '1', 'logged out from: ::1', 'users', '2012-12-19 22:55:48', '1');
INSERT INTO `activities` VALUES ('319', '1', 'logged in from: ::1', 'users', '2012-12-19 22:58:26', '1');
INSERT INTO `activities` VALUES ('320', '1', 'logged in from: ::1', 'users', '2012-12-20 06:24:01', '1');
INSERT INTO `activities` VALUES ('321', '1', 'logged in from: ::1', 'users', '2012-12-20 07:07:13', '1');
INSERT INTO `activities` VALUES ('322', '1', 'logged in from: ::1', 'users', '2012-12-20 07:31:02', '1');
INSERT INTO `activities` VALUES ('323', '1', 'logged in from: ::1', 'users', '2012-12-20 07:33:08', '1');
INSERT INTO `activities` VALUES ('324', '1', 'logged in from: ::1', 'users', '2012-12-20 07:35:15', '1');
INSERT INTO `activities` VALUES ('325', '1', 'logged in from: ::1', 'users', '2012-12-20 07:36:18', '1');
INSERT INTO `activities` VALUES ('326', '1', 'logged in from: ::1', 'users', '2012-12-20 07:39:17', '1');
INSERT INTO `activities` VALUES ('327', '1', 'logged in from: ::1', 'users', '2012-12-20 07:54:24', '1');
INSERT INTO `activities` VALUES ('328', '1', 'logged in from: ::1', 'users', '2012-12-20 08:03:18', '1');
INSERT INTO `activities` VALUES ('329', '1', 'logged in from: ::1', 'users', '2012-12-20 08:43:20', '1');
INSERT INTO `activities` VALUES ('330', '1', 'logged in from: ::1', 'users', '2012-12-20 08:48:40', '1');
INSERT INTO `activities` VALUES ('331', '1', 'logged out from: ::1', 'users', '2012-12-20 09:20:03', '1');
INSERT INTO `activities` VALUES ('332', '1', 'logged in from: ::1', 'users', '2012-12-20 09:21:04', '1');
INSERT INTO `activities` VALUES ('333', '1', 'logged in from: ::1', 'users', '2012-12-20 22:42:57', '1');
INSERT INTO `activities` VALUES ('334', '1', 'logged in from: ::1', 'users', '2012-12-21 01:10:52', '1');
INSERT INTO `activities` VALUES ('335', '1', 'logged out from: ::1', 'users', '2012-12-21 01:11:15', '1');
INSERT INTO `activities` VALUES ('336', '1', 'logged in from: ::1', 'users', '2012-12-21 01:21:18', '1');
INSERT INTO `activities` VALUES ('337', '1', 'logged in from: ::1', 'users', '2012-12-21 02:26:16', '1');
INSERT INTO `activities` VALUES ('338', '1', 'logged in from: ::1', 'users', '2012-12-21 02:36:14', '1');
INSERT INTO `activities` VALUES ('339', '1', 'logged in from: ::1', 'users', '2012-12-21 07:15:57', '1');
INSERT INTO `activities` VALUES ('340', '1', 'logged in from: ::1', 'users', '2012-12-21 07:26:11', '1');
INSERT INTO `activities` VALUES ('341', '1', 'logged in from: ::1', 'users', '2012-12-21 07:28:33', '1');
INSERT INTO `activities` VALUES ('342', '1', 'logged in from: ::1', 'users', '2012-12-21 07:31:23', '1');
INSERT INTO `activities` VALUES ('343', '1', 'logged in from: ::1', 'users', '2012-12-21 07:33:20', '1');
INSERT INTO `activities` VALUES ('344', '1', 'logged in from: ::1', 'users', '2012-12-21 07:35:18', '1');
INSERT INTO `activities` VALUES ('345', '1', 'logged in from: ::1', 'users', '2012-12-21 07:38:47', '1');
INSERT INTO `activities` VALUES ('346', '1', 'Created record with ID: 3 : ::1', 'pembayaran', '2012-12-21 07:45:06', '1');
INSERT INTO `activities` VALUES ('347', '1', 'Created record with ID: 4 : ::1', 'pembayaran', '2012-12-21 08:12:37', '1');
INSERT INTO `activities` VALUES ('348', '1', 'Updated record with ID: 6 : ::1', 'matakuliah', '2012-12-21 09:16:30', '1');
INSERT INTO `activities` VALUES ('349', '1', 'logged in from: ::1', 'users', '2012-12-22 01:02:05', '1');
INSERT INTO `activities` VALUES ('350', '1', 'Updated record with ID: 1 : ::1', 'nama_kurikulum', '2012-12-22 02:18:39', '1');
INSERT INTO `activities` VALUES ('351', '1', 'Updated record with ID: 1 : ::1', 'nama_kurikulum', '2012-12-22 02:21:22', '1');
INSERT INTO `activities` VALUES ('352', '1', 'logged in from: ::1', 'users', '2012-12-23 04:44:29', '1');
INSERT INTO `activities` VALUES ('353', '1', 'logged in from: ::1', 'users', '2012-12-24 03:46:02', '1');
INSERT INTO `activities` VALUES ('354', '1', 'Created record with ID: 3 : ::1', 'nama_kurikulum', '2012-12-24 05:43:24', '1');
INSERT INTO `activities` VALUES ('355', '1', 'logged in from: ::1', 'users', '2012-12-25 01:38:48', '1');
INSERT INTO `activities` VALUES ('356', '1', 'logged in from: ::1', 'users', '2012-12-25 07:39:17', '1');
INSERT INTO `activities` VALUES ('357', '1', 'logged in from: ::1', 'users', '2012-12-26 12:03:15', '1');
INSERT INTO `activities` VALUES ('358', '1', 'Created record with ID: 1 : ::1', 'matakuliah', '2012-12-26 12:16:45', '1');
INSERT INTO `activities` VALUES ('359', '1', 'Created record with ID: 1 : ::1', 'matakuliah', '2012-12-26 12:19:59', '1');
INSERT INTO `activities` VALUES ('360', '1', 'Updated record with ID: TDPK210004 : ::1', 'matakuliah', '2012-12-26 13:55:49', '1');
INSERT INTO `activities` VALUES ('361', '1', 'Updated record with ID: TDPK210004 : ::1', 'matakuliah', '2012-12-26 13:55:57', '1');
INSERT INTO `activities` VALUES ('362', '1', 'Updated record with ID: TDPK210004 : ::1', 'matakuliah', '2012-12-26 13:56:09', '1');
INSERT INTO `activities` VALUES ('363', '1', 'App settings saved from: ::1', 'ui', '2012-12-26 13:57:16', '1');
INSERT INTO `activities` VALUES ('364', '1', 'Updated record with ID: MDPK210001 : ::1', 'matakuliah', '2012-12-26 13:57:47', '1');
INSERT INTO `activities` VALUES ('365', '1', 'Updated record with ID: TDPK210001 : ::1', 'matakuliah', '2012-12-26 13:58:03', '1');
INSERT INTO `activities` VALUES ('366', '1', 'Created record with ID: 1 : ::1', 'matakuliah', '2012-12-26 14:15:07', '1');
INSERT INTO `activities` VALUES ('367', '1', 'Created record with ID: 1 : ::1', 'matakuliah', '2012-12-26 14:15:25', '1');
INSERT INTO `activities` VALUES ('368', '1', 'Created record with ID: 1 : ::1', 'matakuliah', '2012-12-26 14:15:34', '1');
INSERT INTO `activities` VALUES ('369', '1', 'Updated record with ID: TDPK010001 : ::1', 'matakuliah', '2012-12-26 14:15:47', '1');
INSERT INTO `activities` VALUES ('370', '1', 'Created record with ID: 1 : ::1', 'data_jurusan', '2012-12-26 14:24:45', '1');
INSERT INTO `activities` VALUES ('371', '1', 'Updated record with ID: 00 : ::1', 'data_jurusan', '2012-12-26 14:27:52', '1');
INSERT INTO `activities` VALUES ('372', '1', 'Updated record with ID: 00 : ::1', 'data_jurusan', '2012-12-26 14:27:57', '1');
INSERT INTO `activities` VALUES ('373', '1', 'Updated record with ID: 00 : ::1', 'data_jurusan', '2012-12-26 14:28:04', '1');
INSERT INTO `activities` VALUES ('374', '1', 'Created record with ID: 1 : ::1', 'data_jurusan', '2012-12-26 14:29:14', '1');
INSERT INTO `activities` VALUES ('375', '1', 'Created record with ID: 1 : ::1', 'data_jurusan', '2012-12-26 14:29:34', '1');
INSERT INTO `activities` VALUES ('376', '1', 'Created record with ID: 1 : ::1', 'data_jurusan', '2012-12-26 14:38:20', '1');
INSERT INTO `activities` VALUES ('377', '1', 'logged in from: ::1', 'users', '2012-12-27 01:16:55', '1');
INSERT INTO `activities` VALUES ('378', '1', 'logged in from: ::1', 'users', '2012-12-27 04:24:57', '1');
INSERT INTO `activities` VALUES ('379', '1', 'logged in from: ::1', 'users', '2012-12-27 04:32:00', '1');
INSERT INTO `activities` VALUES ('380', '1', 'Updated record with ID: 0 : ::1', 'jenjang', '2012-12-27 06:49:50', '1');
INSERT INTO `activities` VALUES ('381', '1', 'Updated record with ID: 0 : ::1', 'jenjang', '2012-12-27 06:54:42', '1');
INSERT INTO `activities` VALUES ('382', '1', 'Updated record with ID: 0 : ::1', 'jenjang', '2012-12-27 06:54:47', '1');
INSERT INTO `activities` VALUES ('383', '1', 'Updated record with ID: 0 : ::1', 'jenjang', '2012-12-27 06:55:18', '1');
INSERT INTO `activities` VALUES ('384', '1', 'Updated record with ID: 0 : ::1', 'jenjang', '2012-12-27 07:01:10', '1');
INSERT INTO `activities` VALUES ('385', '1', 'Updated record with ID: 0 : ::1', 'jenjang', '2012-12-27 07:02:23', '1');
INSERT INTO `activities` VALUES ('386', '1', 'logged in from: ::1', 'users', '2012-12-27 13:39:14', '1');
INSERT INTO `activities` VALUES ('387', '1', 'Updated record with ID: 0 : ::1', 'jenjang', '2012-12-27 13:39:24', '1');
INSERT INTO `activities` VALUES ('388', '1', 'Updated record with ID: 0 : ::1', 'jenjang', '2012-12-27 13:40:36', '1');
INSERT INTO `activities` VALUES ('389', '1', 'Updated record with ID: 0 : ::1', 'jenjang', '2012-12-27 13:41:02', '1');
INSERT INTO `activities` VALUES ('390', '1', 'Updated record with ID: 0 : ::1', 'jenjang', '2012-12-27 13:41:28', '1');
INSERT INTO `activities` VALUES ('391', '1', 'Updated record with ID: 0 : ::1', 'jenjang', '2012-12-27 13:42:38', '1');
INSERT INTO `activities` VALUES ('392', '1', 'Updated record with ID: 0 : ::1', 'jenjang', '2012-12-27 13:42:42', '1');
INSERT INTO `activities` VALUES ('393', '1', 'Updated record with ID: 0 : ::1', 'jenjang', '2012-12-27 13:44:51', '1');
INSERT INTO `activities` VALUES ('394', '1', 'Updated record with ID: 0 : ::1', 'jenjang', '2012-12-27 13:44:55', '1');
INSERT INTO `activities` VALUES ('395', '1', 'Updated record with ID: 0 : ::1', 'jenjang', '2012-12-27 13:46:54', '1');
INSERT INTO `activities` VALUES ('396', '1', 'Updated record with ID: 0 : ::1', 'jenjang', '2012-12-27 13:53:29', '1');
INSERT INTO `activities` VALUES ('397', '1', 'Updated record with ID: 0 : ::1', 'jenjang', '2012-12-27 13:54:34', '1');
INSERT INTO `activities` VALUES ('398', '1', 'Updated record with ID: 0 : ::1', 'jenjang', '2012-12-27 13:54:41', '1');
INSERT INTO `activities` VALUES ('399', '1', 'Created record with ID: 1 : ::1', 'jenjang', '2012-12-27 14:01:40', '1');
INSERT INTO `activities` VALUES ('400', '1', 'Updated record with ID: 1 : ::1', 'jenjang', '2012-12-27 14:01:48', '1');
INSERT INTO `activities` VALUES ('401', '1', 'Updated record with ID: 0 : ::1', 'jenjang', '2012-12-27 14:02:44', '1');
INSERT INTO `activities` VALUES ('402', '1', 'Updated record with ID: 0 : ::1', 'jenjang', '2012-12-27 14:02:55', '1');
INSERT INTO `activities` VALUES ('403', '1', 'Updated record with ID: 0 : ::1', 'jenjang', '2012-12-27 14:03:09', '1');
INSERT INTO `activities` VALUES ('404', '1', 'Updated record with ID: 1 : ::1', 'jenjang', '2012-12-27 14:03:21', '1');
INSERT INTO `activities` VALUES ('405', '1', 'Updated record with ID: 1 : ::1', 'jenjang', '2012-12-27 14:03:42', '1');
INSERT INTO `activities` VALUES ('406', '1', 'Updated record with ID: 0 : ::1', 'jenjang', '2012-12-27 14:05:06', '1');
INSERT INTO `activities` VALUES ('407', '1', 'Updated record with ID: 0 : ::1', 'jenjang', '2012-12-27 14:05:45', '1');
INSERT INTO `activities` VALUES ('408', '1', 'Updated record with ID: 00 : ::1', 'data_jurusan', '2012-12-27 14:07:13', '1');
INSERT INTO `activities` VALUES ('409', '1', 'Updated record with ID: 00 : ::1', 'data_jurusan', '2012-12-27 14:07:21', '1');
INSERT INTO `activities` VALUES ('410', '1', 'Updated record with ID: 0 : ::1', 'jenjang', '2012-12-27 14:14:54', '1');
INSERT INTO `activities` VALUES ('411', '1', 'Updated record with ID: 0 : ::1', 'jenjang', '2012-12-27 14:15:21', '1');
INSERT INTO `activities` VALUES ('412', '1', 'Updated record with ID: 0 : ::1', 'jenjang', '2012-12-27 14:16:56', '1');
INSERT INTO `activities` VALUES ('413', '1', 'logged in from: ::1', 'users', '2012-12-28 01:45:46', '1');
INSERT INTO `activities` VALUES ('414', '1', 'Updated record with ID: 0 : ::1', 'jenjang', '2012-12-28 01:46:05', '1');
INSERT INTO `activities` VALUES ('415', '1', 'Updated record with ID: 0 : ::1', 'jenjang', '2012-12-28 01:47:15', '1');
INSERT INTO `activities` VALUES ('416', '1', 'Updated record with ID: 00 : ::1', 'data_jurusan', '2012-12-28 01:47:50', '1');
INSERT INTO `activities` VALUES ('417', '1', 'Created record with ID: 3 : ::1', 'nama_jurusan', '2012-12-28 01:51:50', '1');
INSERT INTO `activities` VALUES ('418', '1', 'Updated record with ID: 3 : ::1', 'nama_jurusan', '2012-12-28 01:59:41', '1');
INSERT INTO `activities` VALUES ('419', '1', 'Created record with ID: 4 : ::1', 'nama_kurikulum', '2012-12-28 02:00:23', '1');
INSERT INTO `activities` VALUES ('420', '1', 'Updated record with ID: 00 : ::1', 'data_jurusan', '2012-12-28 02:26:24', '1');
INSERT INTO `activities` VALUES ('421', '1', 'Created record with ID: 1 : ::1', 'data_jurusan', '2012-12-28 02:33:27', '1');
INSERT INTO `activities` VALUES ('422', '1', 'Created record with ID: 1 : ::1', 'data_jurusan', '2012-12-28 02:33:34', '1');
INSERT INTO `activities` VALUES ('423', '1', 'Updated record with ID: 00 : ::1', 'data_jurusan', '2012-12-28 02:34:00', '1');
INSERT INTO `activities` VALUES ('424', '1', 'Created record with ID: 4 : ::1', 'nama_jurusan', '2012-12-28 02:39:16', '1');
INSERT INTO `activities` VALUES ('425', '1', 'Created record with ID: 5 : ::1', 'nama_kurikulum', '2012-12-28 02:39:34', '1');
INSERT INTO `activities` VALUES ('426', '1', 'Created record with ID: 2 : ::1', 'kompetensi', '2012-12-28 02:41:10', '1');
INSERT INTO `activities` VALUES ('427', '1', 'Created record with ID: 3 : ::1', 'kompetensi', '2012-12-28 02:41:26', '1');
INSERT INTO `activities` VALUES ('428', '1', 'Created record with ID: 4 : ::1', 'kompetensi', '2012-12-28 02:42:01', '1');
INSERT INTO `activities` VALUES ('429', '1', 'logged in from: ::1', 'users', '2012-12-28 07:11:05', '1');
INSERT INTO `activities` VALUES ('430', '1', 'Updated record with ID: 2 : ::1', 'jenis_pembayaran', '2012-12-28 07:28:39', '1');
INSERT INTO `activities` VALUES ('431', '1', 'Updated record with ID: 2 : ::1', 'jenis_pembayaran', '2012-12-28 07:29:18', '1');
INSERT INTO `activities` VALUES ('432', '1', 'Updated record with ID: 2 : ::1', 'jenis_pembayaran', '2012-12-28 07:31:40', '1');
INSERT INTO `activities` VALUES ('433', '1', 'Updated record with ID: 2 : ::1', 'jenis_pembayaran', '2012-12-28 07:37:35', '1');
INSERT INTO `activities` VALUES ('434', '1', 'Updated record with ID: 2 : ::1', 'jenis_pembayaran', '2012-12-28 07:38:17', '1');
INSERT INTO `activities` VALUES ('435', '1', 'Updated record with ID: 3 : ::1', 'jenis_pembayaran', '2012-12-28 07:38:27', '1');
INSERT INTO `activities` VALUES ('436', '1', 'Updated record with ID: 8 : ::1', 'jenis_pembayaran', '2012-12-28 07:38:55', '1');
INSERT INTO `activities` VALUES ('437', '1', 'Updated record with ID: 10 : ::1', 'jenis_pembayaran', '2012-12-28 07:39:05', '1');
INSERT INTO `activities` VALUES ('438', '1', 'Updated record with ID: 9 : ::1', 'jenis_pembayaran', '2012-12-28 07:52:34', '1');
INSERT INTO `activities` VALUES ('439', '1', 'logged in from: ::1', 'users', '2012-12-29 01:13:23', '1');
INSERT INTO `activities` VALUES ('440', '1', 'Updated record with ID: 9 : ::1', 'jenis_pembayaran', '2012-12-29 01:14:23', '1');
INSERT INTO `activities` VALUES ('441', '1', 'Updated record with ID: 7 : ::1', 'jenis_pembayaran', '2012-12-29 01:14:35', '1');
INSERT INTO `activities` VALUES ('442', '1', 'Updated record with ID: 8 : ::1', 'jenis_pembayaran', '2012-12-29 01:15:52', '1');
INSERT INTO `activities` VALUES ('443', '1', 'Updated record with ID: 8 : ::1', 'jenis_pembayaran', '2012-12-29 01:16:04', '1');
INSERT INTO `activities` VALUES ('444', '1', 'Updated record with ID: 2 : ::1', 'jenis_pembayaran', '2012-12-29 01:27:37', '1');
INSERT INTO `activities` VALUES ('445', '1', 'Updated record with ID: 2 : ::1', 'jenis_pembayaran', '2012-12-29 01:27:44', '1');
INSERT INTO `activities` VALUES ('446', '1', 'Updated record with ID: 8 : ::1', 'jenis_pembayaran', '2012-12-29 01:27:56', '1');
INSERT INTO `activities` VALUES ('447', '1', 'Updated record with ID: 8 : ::1', 'jenis_pembayaran', '2012-12-29 01:28:27', '1');
INSERT INTO `activities` VALUES ('448', '1', 'Created record with ID: 5 : ::1', 'pembayaran', '2012-12-29 01:36:00', '1');
INSERT INTO `activities` VALUES ('449', '1', 'logged in from: ::1', 'users', '2012-12-29 04:27:35', '1');
INSERT INTO `activities` VALUES ('450', '1', 'logged in from: ::1', 'users', '2012-12-30 12:41:25', '1');
INSERT INTO `activities` VALUES ('451', '1', 'Created record with ID: 1 : ::1', 'pembayaran', '2012-12-30 12:41:55', '1');
INSERT INTO `activities` VALUES ('452', '1', 'Log file December 30, 2012 deleted from: ::1', 'logs', '2012-12-30 12:50:01', '1');
INSERT INTO `activities` VALUES ('453', '1', 'Log file December 29, 2012 deleted from: ::1', 'logs', '2012-12-30 12:50:01', '1');
INSERT INTO `activities` VALUES ('454', '1', 'Log file December 28, 2012 deleted from: ::1', 'logs', '2012-12-30 12:50:01', '1');
INSERT INTO `activities` VALUES ('455', '1', 'Log file December 27, 2012 deleted from: ::1', 'logs', '2012-12-30 12:50:01', '1');
INSERT INTO `activities` VALUES ('456', '1', 'Log file December 26, 2012 deleted from: ::1', 'logs', '2012-12-30 12:50:01', '1');
INSERT INTO `activities` VALUES ('457', '1', 'Log file December 25, 2012 deleted from: ::1', 'logs', '2012-12-30 12:50:01', '1');
INSERT INTO `activities` VALUES ('458', '1', 'Log file December 24, 2012 deleted from: ::1', 'logs', '2012-12-30 12:50:01', '1');
INSERT INTO `activities` VALUES ('459', '1', 'Log file December 23, 2012 deleted from: ::1', 'logs', '2012-12-30 12:50:01', '1');
INSERT INTO `activities` VALUES ('460', '1', 'Log file December 22, 2012 deleted from: ::1', 'logs', '2012-12-30 12:50:01', '1');
INSERT INTO `activities` VALUES ('461', '1', 'Log file December 21, 2012 deleted from: ::1', 'logs', '2012-12-30 12:50:01', '1');
INSERT INTO `activities` VALUES ('462', '1', 'All log files deleted from: ::1', 'logs', '2012-12-30 12:50:10', '1');
INSERT INTO `activities` VALUES ('463', '1', 'deleted 362 activities', 'activities', '2012-12-30 12:51:36', '0');
INSERT INTO `activities` VALUES ('464', '1', 'logged in from: ::1', 'users', '2013-01-01 04:19:17', '0');
INSERT INTO `activities` VALUES ('465', '1', 'logged in from: ::1', 'users', '2013-01-05 06:07:31', '0');
INSERT INTO `activities` VALUES ('466', '1', 'logged in from: ::1', 'users', '2013-01-10 06:47:13', '0');
INSERT INTO `activities` VALUES ('467', '1', 'logged in from: ::1', 'users', '2013-01-12 23:30:44', '0');
INSERT INTO `activities` VALUES ('468', '1', 'logged in from: ::1', 'users', '2013-01-15 12:51:40', '0');
INSERT INTO `activities` VALUES ('469', '1', 'Created record with ID: 2 : ::1', 'beban_studi', '2013-01-15 12:54:30', '0');
INSERT INTO `activities` VALUES ('470', '1', 'Created record with ID: 3 : ::1', 'beban_studi', '2013-01-15 12:54:39', '0');
INSERT INTO `activities` VALUES ('471', '1', 'logged in from: ::1', 'users', '2013-01-15 14:22:52', '0');
INSERT INTO `activities` VALUES ('472', '1', 'logged in from: ::1', 'users', '2013-01-16 03:01:50', '0');
INSERT INTO `activities` VALUES ('473', '1', 'Created Module: Tahun Akademik : ::1', 'modulebuilder', '2013-01-16 03:10:17', '0');
INSERT INTO `activities` VALUES ('474', '1', 'logged out from: ::1', 'users', '2013-01-16 03:44:52', '0');
INSERT INTO `activities` VALUES ('475', '1', 'logged in from: ::1', 'users', '2013-01-17 04:19:33', '0');
INSERT INTO `activities` VALUES ('476', '1', 'logged in from: ::1', 'users', '2013-01-18 02:06:31', '0');
INSERT INTO `activities` VALUES ('477', '1', 'logged in from: ::1', 'users', '2013-01-18 02:07:26', '0');
INSERT INTO `activities` VALUES ('478', '1', 'Updated record with ID: 4 : ::1', 'kompetensi', '2013-01-18 02:13:34', '0');
INSERT INTO `activities` VALUES ('479', '1', 'logged in from: ::1', 'users', '2013-01-21 01:32:46', '0');
INSERT INTO `activities` VALUES ('480', '1', 'logged in from: ::1', 'users', '2013-01-23 01:28:56', '0');
INSERT INTO `activities` VALUES ('481', '1', 'logged in from: ::1', 'users', '2013-01-28 07:53:29', '0');
INSERT INTO `activities` VALUES ('482', '1', 'logged in from: ::1', 'users', '2013-02-02 02:08:04', '0');
INSERT INTO `activities` VALUES ('483', '1', 'logged in from: ::1', 'users', '2013-02-04 01:19:03', '0');
INSERT INTO `activities` VALUES ('484', '1', 'Created record with ID: 2 : ::1', 'pembayaran', '2013-02-04 01:35:32', '0');
INSERT INTO `activities` VALUES ('485', '1', 'logged in from: ::1', 'users', '2013-02-05 01:39:44', '0');
INSERT INTO `activities` VALUES ('486', '1', 'logged in from: ::1', 'users', '2013-02-05 13:50:06', '0');
INSERT INTO `activities` VALUES ('487', '1', 'logged in from: ::1', 'users', '2013-02-05 14:06:59', '0');
INSERT INTO `activities` VALUES ('488', '1', 'logged in from: ::1', 'users', '2013-02-06 01:18:08', '0');
INSERT INTO `activities` VALUES ('489', '1', 'Created record with ID: 12 : ::1', 'jenis_pembayaran', '2013-02-06 02:52:57', '0');
INSERT INTO `activities` VALUES ('490', '1', 'Created record with ID: 13 : ::1', 'jenis_pembayaran', '2013-02-06 02:53:24', '0');

-- ----------------------------
-- Table structure for `beban_studi`
-- ----------------------------
DROP TABLE IF EXISTS `beban_studi`;
CREATE TABLE `beban_studi` (
  `kode_beban_studi` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `kode_nama_jurusan` smallint(6) unsigned NOT NULL,
  `jumlah_sks` decimal(10,0) NOT NULL,
  `kode_pengguna_add` smallint(5) unsigned NOT NULL,
  `tanggal_add` datetime NOT NULL,
  `kode_pengguna_edit` smallint(6) unsigned DEFAULT NULL,
  `tanggal_edit` datetime DEFAULT NULL,
  PRIMARY KEY (`kode_beban_studi`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of beban_studi
-- ----------------------------
INSERT INTO `beban_studi` VALUES ('1', '1', '120', '1', '2012-12-16 00:46:46', '1', '2012-12-16 04:43:34');
INSERT INTO `beban_studi` VALUES ('2', '3', '89', '1', '2013-01-15 12:54:30', null, null);
INSERT INTO `beban_studi` VALUES ('3', '4', '199', '1', '2013-01-15 12:54:39', null, null);

-- ----------------------------
-- Table structure for `departemen`
-- ----------------------------
DROP TABLE IF EXISTS `departemen`;
CREATE TABLE `departemen` (
  `kode_departemen` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `nama_departemen` varchar(50) NOT NULL,
  `kode_pengguna_add` smallint(5) unsigned NOT NULL,
  `tanggal_add` datetime NOT NULL,
  `kode_pengguna_edit` smallint(6) unsigned DEFAULT NULL,
  `tanggal_edit` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`kode_departemen`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of departemen
-- ----------------------------
INSERT INTO `departemen` VALUES ('1', 'Kemahasiswaan', '1', '2012-12-13 07:25:41', null, '2012-12-13 14:25:41');
INSERT INTO `departemen` VALUES ('2', 'Jurusan', '1', '2012-12-13 07:26:06', null, '2012-12-13 14:26:06');

-- ----------------------------
-- Table structure for `departemen2`
-- ----------------------------
DROP TABLE IF EXISTS `departemen2`;
CREATE TABLE `departemen2` (
  `kode_departemen` int(11) NOT NULL AUTO_INCREMENT,
  `nama_departemen` varchar(50) NOT NULL,
  `tanggal_add` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tanggal_edit` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`kode_departemen`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of departemen2
-- ----------------------------
INSERT INTO `departemen2` VALUES ('1', 'Kemahasiswaan', '2012-12-13 07:21:39', '2012-12-13 07:24:31');
INSERT INTO `departemen2` VALUES ('2', 'Jurusan', '2012-12-13 07:21:53', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for `email_queue`
-- ----------------------------
DROP TABLE IF EXISTS `email_queue`;
CREATE TABLE `email_queue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `to_email` varchar(128) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `alt_message` text,
  `max_attempts` int(11) NOT NULL DEFAULT '3',
  `attempts` int(11) NOT NULL DEFAULT '0',
  `success` tinyint(1) NOT NULL DEFAULT '0',
  `date_published` datetime DEFAULT NULL,
  `last_attempt` datetime DEFAULT NULL,
  `date_sent` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of email_queue
-- ----------------------------

-- ----------------------------
-- Table structure for `jenis_pembayaran`
-- ----------------------------
DROP TABLE IF EXISTS `jenis_pembayaran`;
CREATE TABLE `jenis_pembayaran` (
  `kode_jenis_pembayaran` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `alias_jenis_pembayaran` char(10) NOT NULL,
  `angkatan` char(4) NOT NULL,
  `jenis_pembayaran` varchar(50) NOT NULL,
  `kode_jenjang` char(99) DEFAULT NULL,
  `jumlah` decimal(10,0) NOT NULL,
  `prosentase_denda` decimal(10,0) DEFAULT NULL,
  `kode_pengguna_add` smallint(6) NOT NULL,
  `tanggal_add` datetime NOT NULL,
  `kode_pengguna_edit` smallint(6) DEFAULT NULL,
  `tanggal_edit` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`kode_jenis_pembayaran`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of jenis_pembayaran
-- ----------------------------
INSERT INTO `jenis_pembayaran` VALUES ('2', 'SPP', '2012', 'SPP', '0', '70000', '2', '1', '2012-12-12 03:01:28', '1', '2013-02-05 08:44:36');
INSERT INTO `jenis_pembayaran` VALUES ('3', 'SPP', '2011', 'SPP', '1', '900000', '10', '1', '2012-12-12 03:09:00', '1', '2013-02-05 08:44:38');
INSERT INTO `jenis_pembayaran` VALUES ('9', 'Wisuda', '2012', 'Pembayaran Wisuda', '1', '2000000', '0', '1', '2012-12-15 04:11:34', '1', '2013-02-05 08:44:47');
INSERT INTO `jenis_pembayaran` VALUES ('7', 'Modul', '0', 'Modul Kuliah', '0', '100000', '0', '1', '2012-12-14 15:10:22', '1', '2013-02-05 08:44:53');
INSERT INTO `jenis_pembayaran` VALUES ('8', 'SKS', '2012', 'SKS', '0', '89999', '10', '1', '2012-12-14 15:19:23', '1', '2013-02-05 08:44:56');
INSERT INTO `jenis_pembayaran` VALUES ('10', 'DPP1', '0', 'Pembangunan', '1', '6000000', '0', '1', '2012-12-15 04:25:14', '1', '2013-02-05 08:45:08');
INSERT INTO `jenis_pembayaran` VALUES ('12', 'DPP2', '2011', 'DPP Angsuran Ke 2', '0', '2000000', '10', '1', '2013-02-06 02:52:57', null, '2013-02-06 09:52:57');
INSERT INTO `jenis_pembayaran` VALUES ('13', 'DPP2', '2011', 'DPP Angsuran Ke 2', '1', '2000000', '10', '1', '2013-02-06 02:53:24', null, '2013-02-06 09:53:24');

-- ----------------------------
-- Table structure for `jenjang`
-- ----------------------------
DROP TABLE IF EXISTS `jenjang`;
CREATE TABLE `jenjang` (
  `kode_jenjang` char(1) NOT NULL,
  `nama_jenjang` varchar(20) NOT NULL,
  `kode_pengguna_add` smallint(5) unsigned NOT NULL,
  `tanggal_add` datetime NOT NULL,
  `kode_pengguna_edit` smallint(6) unsigned DEFAULT NULL,
  `tanggal_edit` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`kode_jenjang`),
  KEY `fk_jenjang_pengguna` (`kode_pengguna_add`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of jenjang
-- ----------------------------
INSERT INTO `jenjang` VALUES ('0', 'D3', '1', '2012-12-04 06:27:23', '1', '2012-12-28 01:47:14');
INSERT INTO `jenjang` VALUES ('1', 'S1', '1', '2012-12-27 14:01:40', '1', '2012-12-27 14:03:42');

-- ----------------------------
-- Table structure for `jenjang2`
-- ----------------------------
DROP TABLE IF EXISTS `jenjang2`;
CREATE TABLE `jenjang2` (
  `id_jenjang` int(11) NOT NULL,
  `kode_jenjang` char(1) NOT NULL,
  `nama_jenjang` varchar(20) NOT NULL,
  `kode_pengguna_add` smallint(5) unsigned NOT NULL,
  `tanggal_add` datetime NOT NULL,
  `kode_pengguna_edit` smallint(6) unsigned DEFAULT NULL,
  `tanggal_edit` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_jenjang`),
  KEY `fk_jenjang_pengguna` (`kode_pengguna_add`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of jenjang2
-- ----------------------------

-- ----------------------------
-- Table structure for `jurusan`
-- ----------------------------
DROP TABLE IF EXISTS `jurusan`;
CREATE TABLE `jurusan` (
  `kode_jurusan` char(2) NOT NULL,
  `nama_jurusan` varchar(20) NOT NULL,
  `kode_pengguna_add` smallint(5) unsigned NOT NULL,
  `tanggal_add` datetime NOT NULL,
  `kode_pengguna_edit` smallint(6) unsigned DEFAULT NULL,
  `tanggal_edit` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`kode_jurusan`),
  KEY `fk_jurusan_pengguna` (`kode_pengguna_add`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of jurusan
-- ----------------------------
INSERT INTO `jurusan` VALUES ('01', 'Teknik', '1', '2012-12-28 02:33:34', null, '2012-12-28 09:33:34');
INSERT INTO `jurusan` VALUES ('11', 'Manajemen', '1', '2012-12-28 02:33:27', '1', '2012-12-28 02:34:00');

-- ----------------------------
-- Table structure for `jurusan_copy`
-- ----------------------------
DROP TABLE IF EXISTS `jurusan_copy`;
CREATE TABLE `jurusan_copy` (
  `kode_jurusan` char(2) NOT NULL,
  `nama_jurusan` varchar(20) NOT NULL,
  `kode_pengguna_add` smallint(5) unsigned NOT NULL,
  `tanggal_add` datetime NOT NULL,
  `kode_pengguna_edit` smallint(6) unsigned DEFAULT NULL,
  `tanggal_edit` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`kode_jurusan`),
  KEY `fk_jurusan_pengguna` (`kode_pengguna_add`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of jurusan_copy
-- ----------------------------

-- ----------------------------
-- Table structure for `kompetensi`
-- ----------------------------
DROP TABLE IF EXISTS `kompetensi`;
CREATE TABLE `kompetensi` (
  `kode_kompetensi` char(2) NOT NULL,
  `kode_nama_jurusan` smallint(5) unsigned NOT NULL,
  `nama_kompetensi` varchar(30) NOT NULL,
  `kode_pengguna_add` smallint(5) unsigned NOT NULL,
  `tanggal_add` datetime NOT NULL,
  `kode_pengguna_edit` smallint(6) unsigned DEFAULT NULL,
  `tanggal_edit` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kompetensi
-- ----------------------------
INSERT INTO `kompetensi` VALUES ('00', '4', 'Rekayasa Perangkat Lunak', '1', '2012-12-28 02:41:10', null, '2012-12-28 09:41:10', '2');
INSERT INTO `kompetensi` VALUES ('01', '4', 'Jaringan', '1', '2012-12-28 02:41:26', null, '2012-12-28 09:41:26', '3');
INSERT INTO `kompetensi` VALUES ('02', '4', 'Multimedia', '1', '2012-12-28 02:42:01', '1', '2013-01-18 02:13:34', '4');

-- ----------------------------
-- Table structure for `kurikulum`
-- ----------------------------
DROP TABLE IF EXISTS `kurikulum`;
CREATE TABLE `kurikulum` (
  `kode_kurikulum` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `kode_nama_kurikulum` smallint(5) unsigned DEFAULT NULL,
  `kode_matakuliah` char(10) NOT NULL,
  `kode_pengguna_add` smallint(5) unsigned NOT NULL,
  `tanggal_add` datetime NOT NULL,
  `kode_pengguna_edit` smallint(6) unsigned DEFAULT NULL,
  `tanggal_edit` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`kode_kurikulum`),
  KEY `fk_kurikulum_matakuliah` (`kode_matakuliah`),
  KEY `fk_kurikulum_nama_kurikulum` (`kode_nama_kurikulum`),
  KEY `fk_kurikulum_pengguna` (`kode_pengguna_add`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1 COMMENT='Menampung data matakuliah yg digunakan per kurikulum.';

-- ----------------------------
-- Records of kurikulum
-- ----------------------------
INSERT INTO `kurikulum` VALUES ('7', '3', '1', '1', '2012-12-25 01:43:39', null, '2012-12-25 08:43:39');
INSERT INTO `kurikulum` VALUES ('8', '3', '2', '1', '2012-12-25 01:43:39', null, '2012-12-25 08:43:39');
INSERT INTO `kurikulum` VALUES ('9', '3', '3', '1', '2012-12-25 01:43:39', null, '2012-12-25 08:43:39');
INSERT INTO `kurikulum` VALUES ('10', '3', '4', '1', '2012-12-25 01:43:39', null, '2012-12-25 08:43:39');
INSERT INTO `kurikulum` VALUES ('11', '3', '5', '1', '2012-12-25 01:43:39', null, '2012-12-25 08:43:39');
INSERT INTO `kurikulum` VALUES ('12', '3', '6', '1', '2012-12-25 01:43:39', null, '2012-12-25 08:43:39');
INSERT INTO `kurikulum` VALUES ('13', '1', '2', '1', '2012-12-25 01:49:53', null, '2012-12-25 08:49:53');
INSERT INTO `kurikulum` VALUES ('14', '1', '3', '1', '2012-12-25 01:49:53', null, '2012-12-25 08:49:53');
INSERT INTO `kurikulum` VALUES ('15', '1', '4', '1', '2012-12-25 01:49:53', null, '2012-12-25 08:49:53');
INSERT INTO `kurikulum` VALUES ('16', '1', '5', '1', '2012-12-25 01:49:53', null, '2012-12-25 08:49:53');
INSERT INTO `kurikulum` VALUES ('17', '4', 'TDPK210001', '1', '2012-12-28 02:02:12', null, '2012-12-28 09:02:12');
INSERT INTO `kurikulum` VALUES ('18', '4', 'TDPK210002', '1', '2012-12-28 02:02:12', null, '2012-12-28 09:02:12');
INSERT INTO `kurikulum` VALUES ('19', '4', 'TDPK210003', '1', '2012-12-28 02:02:12', null, '2012-12-28 09:02:12');
INSERT INTO `kurikulum` VALUES ('20', '4', 'TSPK110001', '1', '2012-12-28 02:02:12', null, '2012-12-28 09:02:12');
INSERT INTO `kurikulum` VALUES ('21', '4', 'TSPK210001', '1', '2012-12-28 02:02:12', null, '2012-12-28 09:02:12');
INSERT INTO `kurikulum` VALUES ('22', '4', 'TSPK210002', '1', '2012-12-28 02:02:12', null, '2012-12-28 09:02:12');
INSERT INTO `kurikulum` VALUES ('23', '4', 'TSPK210003', '1', '2012-12-28 02:02:13', null, '2012-12-28 09:02:13');
INSERT INTO `kurikulum` VALUES ('24', '4', 'TSPK210004', '1', '2012-12-28 02:02:13', null, '2012-12-28 09:02:13');
INSERT INTO `kurikulum` VALUES ('25', '5', 'TDPK210001', '1', '2012-12-28 02:39:52', null, '2012-12-28 09:39:52');
INSERT INTO `kurikulum` VALUES ('26', '5', 'TDPK210002', '1', '2012-12-28 02:39:52', null, '2012-12-28 09:39:52');
INSERT INTO `kurikulum` VALUES ('27', '5', 'TDPK210003', '1', '2012-12-28 02:39:52', null, '2012-12-28 09:39:52');
INSERT INTO `kurikulum` VALUES ('28', '5', 'TSPK110001', '1', '2012-12-28 02:39:52', null, '2012-12-28 09:39:52');
INSERT INTO `kurikulum` VALUES ('29', '5', 'TSPK210001', '1', '2012-12-28 02:39:52', null, '2012-12-28 09:39:52');
INSERT INTO `kurikulum` VALUES ('30', '5', 'TSPK210002', '1', '2012-12-28 02:39:52', null, '2012-12-28 09:39:52');
INSERT INTO `kurikulum` VALUES ('31', '5', 'TSPK210003', '1', '2012-12-28 02:39:52', null, '2012-12-28 09:39:53');
INSERT INTO `kurikulum` VALUES ('32', '5', 'TSPK210004', '1', '2012-12-28 02:39:53', null, '2012-12-28 09:39:53');

-- ----------------------------
-- Table structure for `kurikulum_copy`
-- ----------------------------
DROP TABLE IF EXISTS `kurikulum_copy`;
CREATE TABLE `kurikulum_copy` (
  `kode_kurikulum` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `kode_nama_kurikulum` smallint(5) unsigned DEFAULT NULL,
  `kode_matakuliah` char(10) NOT NULL,
  `kode_pengguna_add` smallint(5) unsigned NOT NULL,
  `tanggal_add` datetime NOT NULL,
  `kode_pengguna_edit` smallint(6) unsigned DEFAULT NULL,
  `tanggal_edit` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`kode_kurikulum`),
  KEY `fk_kurikulum_matakuliah` (`kode_matakuliah`),
  KEY `fk_kurikulum_nama_kurikulum` (`kode_nama_kurikulum`),
  KEY `fk_kurikulum_pengguna` (`kode_pengguna_add`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Menampung data matakuliah yg digunakan per kurikulum.';

-- ----------------------------
-- Records of kurikulum_copy
-- ----------------------------

-- ----------------------------
-- Table structure for `login_attempts`
-- ----------------------------
DROP TABLE IF EXISTS `login_attempts`;
CREATE TABLE `login_attempts` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(40) NOT NULL,
  `login` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of login_attempts
-- ----------------------------

-- ----------------------------
-- Table structure for `mahasiswa`
-- ----------------------------
DROP TABLE IF EXISTS `mahasiswa`;
CREATE TABLE `mahasiswa` (
  `nim` char(10) NOT NULL,
  `npm` char(23) NOT NULL,
  `nomor_pendaftaran` char(12) NOT NULL,
  `nomor_pendaftaran_ulang` char(12) NOT NULL,
  `nama_mahasiswa` varchar(125) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(75) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `propinsi` enum('Aceh','Sumatera Utara','Sumatera Barat','Riau','Jambi','Sumatera Selatan','Bengkulu','Lampung','Kepulauan Bangka Belitung','Kepulauan Riau','Daerah Khusus Ibukota Jakarta','Jawa Barat','Jawa Tengah','Daerah Istimewa Yogyakarta','Jawa Timur','Banten','Bali','Nusa Tenggara Barat','Nusa Tenggara Timur','Kalimantan Barat','Kalimantan Tengah','Kalimantan Selatan','Kalimantan Timur','Sulawesi Utara','Sulawesi Tengah','Sulawesi Selatan','Sulawesi Tenggara','Gorontalo','Sulawesi Barat','Maluku','Maluku Utara','Papua Barat','Papua') NOT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `agama` enum('Islam','Hindu','Kristen','Katolik','Budha','Konghucu') NOT NULL,
  `golongan_darah` enum('O','A','AB','B','-') NOT NULL,
  `kewarganegaraan` enum('WNI','WNA') NOT NULL,
  `nama_instansi` varchar(75) DEFAULT NULL,
  `email` varchar(75) DEFAULT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `agama_ayah` enum('Islam','Hindu','Kristen','Katolik','Budha','Konghucu') NOT NULL,
  `pekerjaan_ayah` enum('Pegawai Negeri Sipil','Pegawai Swasta','Wiraswasta','TNI/Polri','Dosen','Guru','Petani','Rumah Tangga','Lainnya') NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `agama_ibu` enum('Islam','Hindu','Kristen','Katolik','Budha','Konghucu') NOT NULL,
  `pekerjaan_ibu` enum('Pegawai Negeri Sipil','Pegawai Swasta','Wiraswasta','TNI/Polri','Dosen','Guru','Petani','Rumah Tangga','Lainnya') NOT NULL,
  `alamat_orangtua` varchar(75) NOT NULL,
  `kota_orangtua` varchar(50) NOT NULL,
  `propinsi_orangtua` enum('Aceh','Sumatera Utara','Sumatera Barat','Riau','Jambi','Sumatera Selatan','Bengkulu','Lampung','Kepulauan Bangka Belitung','Kepulauan Riau','Daerah Khusus Ibukota Jakarta','Jawa Barat','Jawa Tengah','Daerah Istimewa Yogyakarta','Jawa Timur','Banten','Bali','Nusa Tenggara Barat','Nusa Tenggara Timur','Kalimantan Barat','Kalimantan Tengah','Kalimantan Selatan','Kalimantan Timur','Sulawesi Utara','Sulawesi Tengah','Sulawesi Selatan','Sulawesi Tenggara','Gorontalo','Sulawesi Barat','Maluku','Maluku Utara','Papua Barat','Papua') NOT NULL,
  `telepon_orangtua` varchar(20) DEFAULT NULL,
  `foto` char(16) DEFAULT NULL,
  `sandi` varchar(255) DEFAULT NULL,
  `status` enum('A','N') NOT NULL DEFAULT 'N',
  `kode_pengguna_add` smallint(5) unsigned NOT NULL,
  `tanggal_add` datetime NOT NULL,
  `kode_pengguna_edit` smallint(6) unsigned DEFAULT NULL,
  `tanggal_edit` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of mahasiswa
-- ----------------------------
INSERT INTO `mahasiswa` VALUES ('1200310001', '12.8.349.32.53.0.2.0001', 'DFO1211B1012', 'DUO1211B1012', 'MIA JAMILATUSSA\'DIAH', 'Purwakarta', '1991-05-25', 'Jl. Jatiluhur 4 blok J no 11 . BTN Kekalik baru', 'Mataram', 'Nusa Tenggara Barat', '089686662569', 'P', 'Islam', 'O', 'WNI', '', 'miamiamiw@hotmail.com', 'Isur Sunardi', 'Islam', 'Pegawai Swasta', 'Ihat Solihat', 'Islam', 'Rumah Tangga', 'Jl. jatiluhur 4 blok J NO 11 . BTN kekalik baru', 'Mataram', 'Nusa Tenggara Barat', null, null, '8074ba6ac97217b420dd3a2f68f9603a', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1200320002', '12.8.349.32.53.0.2.0002', 'DFL1221B1032', 'DUL1221B1032', 'HIDAYATUL ANNAM', 'BATU BELEK', '1993-12-05', 'BATU BELEK,KELURAHAN RAKAM', 'SELONG', 'Nusa Tenggara Barat', '087763119400', 'L', 'Islam', 'O', 'WNI', '', '', 'MUHAMAD SUJAI', 'Islam', 'Pegawai Negeri Sipil', 'ERNIWATI', 'Islam', 'Rumah Tangga', 'BATU BELEK,KELURAHAN RAKAM', 'SELONG', 'Nusa Tenggara Barat', null, null, '3e097ddb2f6ee453d5b9726007bbfd8f', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1200320003', '12.8.349.32.53.0.2.0003', 'DFO1221B1030', 'DUO1221B1030', 'KHUMAIRI ICHSAN', 'praya', '1990-05-05', 'Jalan Gajah Mada No 104 Lingkngan Handayani Leneng', 'Praya', 'Nusa Tenggara Barat', '+6283129500549', 'L', 'Islam', '-', 'WNI', 'CV TRIJAYA ELEKTRIK', 'inkum_liquid@yahoo.com', 'Haji Mahdan', 'Islam', 'Wiraswasta', 'Herni', 'Islam', 'Rumah Tangga', 'Jalan Gajah Mada No 104 Lingkungan Handayani', 'Praya', 'Nusa Tenggara Barat', null, null, 'a39a2f12c301b5551282f9400d53c41c', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1200320004', '12.8.349.32.53.0.2.0004', 'DFO1221B1056', 'DUO1221B1056', 'HARDIYANTI RATMININGSYA', 'RABANGODU', '1994-04-13', 'RABANGODU UTARA', 'BIMA', 'Nusa Tenggara Barat', '085253970092', 'P', 'Islam', 'A', 'WNI', '-', 'athyningsih@gmail.com', 'IDRIS', 'Islam', 'Pegawai Negeri Sipil', 'HAJNAH', 'Islam', 'Pegawai Negeri Sipil', 'RABANGODU', 'BIMA', 'Nusa Tenggara Barat', null, null, 'ef229158957ee45b00c74c45994093cd', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1200320005', '12.8.349.32.53.0.2.0005', 'DFL1221B1278', 'DUL1221B1278', 'EKA NURLAILA WARZUKI', 'PEMATUNG', '1993-07-28', 'KARANG TAPEN', 'MATARAM', 'Nusa Tenggara Barat', '082341344234', 'P', 'Islam', 'A', 'WNI', '', 'lha.saranghae@yahoo.co.id', 'MARZUKI KAMAL', 'Islam', 'Wiraswasta', 'NURMIN', 'Islam', 'Rumah Tangga', ' DESA PEMATUNG KEC.SAKBAR LOTIM', 'SELONG', 'Nusa Tenggara Barat', null, null, 'ce812da064d4ef8ece3d7696128d8aef', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1200320006', '12.8.349.32.53.0.2.0006', 'DFL1221B1237', 'DUL1221B1237', 'WY GANESHA VHITA LOKA', 'Rsu. Matram', '1994-08-08', 'JLN.bung -karno gang anggrek no. 4', 'Mataram', 'Nusa Tenggara Barat', '081917246633', 'L', 'Hindu', 'B', 'WNI', '', 'b_stalker@ymail.com', 'I wayan pasek', 'Hindu', 'Pegawai Negeri Sipil', 'NI wayan suartini', 'Hindu', 'Rumah Tangga', 'Jln. bung -karno gang anggrek no.4', 'mataram', 'Nusa Tenggara Barat', null, null, '520fc4f155df663183ce7c494a637a79', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1200320007', '12.8.349.32.53.0.2.0007', 'DFL1221B1236', 'DUL1221B1236', 'SANG PUTU BAYU DIANA ', 'Mataram', '1994-05-30', 'jl gora 30a selagalas', 'Mataram', 'Nusa Tenggara Barat', '083129614556', 'L', 'Hindu', 'O', 'WNI', '', 'sangbayu30@yhoo.co.id', 'Dewa Sang Putu Budhiana ', 'Hindu', 'Pegawai Swasta', 'Sang Ayu Wahyuni', 'Hindu', 'Pegawai Swasta', 'jalan gora 30a selgalas', 'Mataram', 'Nusa Tenggara Barat', null, null, '2c0c7044142303584b2b08d2b8421721', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1200320008', '12.8.349.32.53.0.2.0008', 'DFL1221B1233', 'DUL1221B1233', 'MUH IRWAN HAMIDI', 'Lombok Timur', '1993-05-05', 'Lombok Timur', 'Kabupaten Lombok Timur', 'Nusa Tenggara Barat', '087763265607', 'L', 'Islam', '-', 'WNI', '-', 'irwan_barbaz@ymail.com', 'Abdul Hamid', 'Islam', 'Wiraswasta', 'Hafsah', 'Islam', 'Rumah Tangga', 'SELONG LOMBOK TIMUR', 'SELONG LOMBOK TIMUR', 'Nusa Tenggara Barat', null, null, '132ce6ba96af69fe957244f330cc6b84', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1200320009', '12.8.349.32.53.0.2.0009', 'DFL1221B1198', 'DUL1221B1198', 'FATHUL AZIZ', 'gunung malang,taman ayu,gerung', '1994-04-30', 'gunung malang,taman ayu,gerung', 'Gerung-Lombok Barat', 'Nusa Tenggara Barat', '087865349330', 'L', 'Islam', '-', 'WNI', '', '', 'terang s.pdi', 'Islam', 'Pegawai Negeri Sipil', 'kasiah', 'Islam', 'Rumah Tangga', 'gunung malang,taman ayu,gerung', 'Gerung-Lombok Barat', 'Nusa Tenggara Barat', null, null, '67d44598e27c925c4004e5e4484d8c61', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1200320010', '12.8.349.32.53.0.2.0010', 'DFL1221B1110', 'DUL1221B1110', 'LALU ACHMAD ZAESA', 'Tuban, Kec.Pujut', '1992-03-17', 'Desa Segala Anyar,Kec. Pujut,Lombok Tengah', 'Praya', 'Nusa Tenggara Barat', '083129553835', 'L', 'Islam', '-', 'WNI', '', '', 'Lalu Zaenuddin', 'Islam', 'Pegawai Negeri Sipil', 'Baiq Saptiah', 'Islam', 'Rumah Tangga', 'Desa Segala Anyar, Kec.Pujut', 'Praya', 'Nusa Tenggara Barat', null, null, '6b84860b65ea33f0e83e8fbc73e859db', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1200320011', '12.8.349.32.53.0.2.0011', 'DFL1221B1101', 'DUL1221B1101', 'AGUES HARIYADI', 'JANAPRIA', '1993-08-17', 'KENYALU DESA JANGO KC. JANAPRIA', 'PRAYA', 'Nusa Tenggara Barat', '087765106371', 'L', 'Islam', 'A', 'WNI', '', '', 'SAYAPRI', 'Islam', 'Petani', 'MARILAM', 'Islam', 'Petani', 'KENYALU', 'PRAYA', 'Nusa Tenggara Barat', null, null, 'c2acd17170d105c3d96b6e98f2f2ac43', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1200320012', '12.8.349.32.53.0.2.0012', 'DFL1221B1046', 'DUL1221B1046', 'KRESMA PUTRANGGA HASTIN', 'MATARAM', '1994-09-23', 'jl.hos.cokroaminoto gg.macan 4 no.8c', 'MATARAM', 'Nusa Tenggara Barat', '081907558544', 'L', 'Hindu', 'B', 'WNI', '', '', 'ARIA SUGANGGA HASTI', 'Hindu', 'Wiraswasta', 'GUSTI AYU KETUT SUARDANI', 'Hindu', 'Rumah Tangga', 'Jln.hos.cokroaminoto gg.macan 4 no.8c', 'Mataram', 'Nusa Tenggara Barat', null, null, '8d889f456b44f9b5bffc10a0229cfdc7', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1200320013', '12.8.349.32.53.0.2.0013', 'DFL1221B1167', 'DUL1221B1167', 'RAHMATULLAH', 'RAJAK', '1991-06-30', 'DUSUN RAJAK DESA SUKARAJA KEC. PRATIM ', 'Praya', 'Nusa Tenggara Barat', '081907234532', 'L', 'Islam', '-', 'WNI', '', 'rahmatajja@yahoo.co.id', 'sadeli', 'Islam', 'Lainnya', 'naserah', 'Islam', 'Rumah Tangga', 'rajak', 'Praya', 'Nusa Tenggara Barat', null, null, '38134adb518974f44a17f383484474b3', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1200320014', '12.8.349.32.53.0.2.0014', 'DFL1221B1186', 'DUL1221B1186', 'LIA PARIANA', 'perina', '1990-03-07', 'perina', 'lombok tengah', 'Nusa Tenggara Barat', '087865867074', 'P', 'Islam', '-', 'WNI', '', '', 'M.MALI', 'Islam', 'Petani', 'H.NURMAYANTI', 'Islam', 'Petani', 'PERINA', 'LOMBOK TENGGAH', 'Nusa Tenggara Barat', null, null, '92388c917ef70107b09d76e718915757', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1200330015', '12.8.349.32.53.0.2.0015', 'DFL1231B1414', 'DUL1231B1414', 'ALAN CHRISTIAN', 'Sumbawa Besar', '1991-01-15', 'BTN GRIA PAGUTAN INDAH', 'MATARAM', 'Nusa Tenggara Barat', '081917607160', 'L', 'Kristen', '-', 'WNI', '', '', 'TRI JULIANTO', 'Kristen', 'Pegawai Negeri Sipil', 'OL HARETA', 'Kristen', 'Rumah Tangga', 'JL. TRIBRATA', 'Sumbawa Besar', 'Nusa Tenggara Barat', null, null, '5d3990ac908a99494afa571ff28f9898', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1200330016', '12.8.349.32.53.0.2.0016', 'DFL1231B1413', 'DUL1231B1413', 'LALU HOLFIAN WIJANA PUTRA', 'MATARAM', '1993-03-02', 'jln Ahmad Yani Muhajirin Kec Narmada LOBAR', 'lombok barat', 'Nusa Tenggara Barat', '081915947707', 'L', 'Islam', 'A', 'WNI', 'Indonesia Power/ Jakarta', '', 'LALU SUPARMO P', 'Islam', 'Pegawai Negeri Sipil', 'SUKAENAH.A,ma', 'Islam', 'Pegawai Negeri Sipil', 'POHGADING LOTIM', 'lotim', 'Nusa Tenggara Barat', null, null, '0a24f7876b20632228e5bd868c480ca8', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1200330017', '12.8.349.32.53.0.2.0017', 'DFL1231B1399', 'DUL1231B1399', 'KADEK GITA NOVITA', 'MATARAM', '1994-11-21', 'JL DEWI SINTA NO 17 CAKRANEGARA', 'MATARAM', 'Nusa Tenggara Barat', '081917111692', 'P', 'Hindu', 'O', 'WNI', '', '', 'NYOMAN KARTI', 'Hindu', 'Pegawai Negeri Sipil', 'NI NYOMAN SUKARTINI', 'Hindu', 'Rumah Tangga', 'JL DEWI SINTA NO 17', 'MATARAM', 'Nusa Tenggara Barat', null, null, '8ef1df1bf595dde27ffc6d030aed5388', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1200330018', '12.8.349.32.53.0.2.0018', 'DFL1231B1398', 'DUL1231B1398', 'DWI RAGITA MULYAWATI', 'NARMADA ', '1993-04-10', 'BTN BUMIGORA JL KANSASNO 3', 'MATARAM', 'Nusa Tenggara Barat', '087861398324', 'P', 'Islam', 'B', 'WNI', '', '', 'SUWANDI', 'Islam', 'Pegawai Swasta', 'SITI ISYAH', 'Islam', 'Pegawai Negeri Sipil', 'BTN BUMIGORA JL KANSAS NO 3', 'MATARAM', 'Nusa Tenggara Barat', null, null, 'ebdc8870b4a00488f1a5399c85e56bd7', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1200330019', '12.8.349.32.53.0.2.0019', 'DFL1231B1387', 'DUL1231B1387', 'GUSTI RANDA MARSAOLY', 'PUNE', '1993-09-08', 'PUNE,KEC.GALELA', 'TERNATE', 'Maluku Utara', '081340567627', 'L', 'Islam', 'O', 'WNI', '', 'Guestyuty@yahoo.com', 'salasa marsaoly', 'Islam', 'Wiraswasta', 'jamila abbas', 'Islam', 'Rumah Tangga', 'pune', 'galela', 'Maluku Utara', null, null, 'c3f3216022566edc694ae8c71d23e8b4', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1200330020', '12.8.349.32.53.0.2.0020', 'DFL1231B1378', 'DUL1231B1378', 'LINDA APRIANI', 'dasan toya.aikmel', '1994-12-28', 'dasan taya.aikmel', 'lombok timur', 'Nusa Tenggara Barat', '085339974352', 'P', 'Islam', 'B', 'WNI', '', 'leendamiorlensgb@ymail.com', 'muhammad', 'Islam', 'Petani', 'siti sarah', 'Islam', 'Petani', 'dasan toya.aikmel lombok timur', 'Lombok Timur', 'Nusa Tenggara Barat', null, null, '56e5bd96f2f682ed95bbc59c79312142', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1200330021', '12.8.349.32.53.0.2.0021', 'DFL1231B1373', 'DUL1231B1373', 'LALU MUHAMAD RIDWAN', 'Gerunung', '1988-01-01', 'Gerunung', 'PRAYA', 'Nusa Tenggara Barat', '087864579575', 'L', 'Islam', '-', 'WNI', '', '', 'Lalu Aknan', 'Islam', 'Pegawai Negeri Sipil', 'Bq. Marwati', 'Islam', 'Rumah Tangga', 'Gerunung', 'PRAYA', 'Nusa Tenggara Barat', null, null, '6c33f6e3da71d2317b203a87597c1436', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1200330022', '12.8.349.32.53.0.2.0022', 'DFL1231B1372', 'DUL1231B1372', 'WIRDA WIRDUNA FANE', 'GILI MANUK', '1994-01-30', 'JLN.GILI TRAWANGAN,01,TAMAN KARANG BARU', 'MATARAM', 'Nusa Tenggara Barat', '087864364023', 'P', 'Islam', '-', 'WNI', '', 'WIRDA.FANE@GMAIL.COM', 'AHMAD FADAIL', 'Islam', 'Pegawai Negeri Sipil', 'NUR RAHMAH', 'Islam', 'Guru', 'NEGARA BALI', 'NEGARA BALI', 'Bali', null, null, '7386e018fe7a6733659150ae8b005740', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1200330023', '12.8.349.32.53.0.2.0023', 'DFL1231B1366', 'DUL1231B1366', 'DADE ARDIANSYA', 'GOA', '1994-06-05', 'JLN.KESRA RAYA NO.1 PERUMNAS', 'MATARAM', 'Nusa Tenggara Barat', '081909211880', 'L', 'Islam', '-', 'WNI', '', '', 'RABUSI ANDANG', 'Islam', 'Wiraswasta', 'JAIYAN', 'Islam', 'Rumah Tangga', 'RT.06 RW.02 DESA GOA', 'TALIWANG', 'Nusa Tenggara Barat', null, null, '84e1bacf289805286cd1f655ac5a1097', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1200330024', '12.8.349.32.53.0.2.0024', 'DFL1231B1349', 'DUL1231B1349', 'M.MUZAYYIN ASYIKIN', 'Pancor Bermi', '1993-03-26', 'Pancor Bermi', 'SELONGN LOMBOK TIMUR', 'Nusa Tenggara Barat', '082341322315', 'L', 'Islam', 'O', 'WNI', '', '', 'MARHAM ,BA', 'Islam', 'Guru', 'TOHRIAH', 'Islam', 'Rumah Tangga', 'Pancor ', 'SELONG LOMBOK TIMUR', 'Nusa Tenggara Barat', null, null, '417afc4a2969a64d1bd5e57b7daba23f', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1200330025', '12.8.349.32.53.0.2.0025', 'DFL1231B1305', 'DUL1231B1305', 'MUH. KHOLIS KAWIRYA PUTRA', 'BANGLE', '1995-08-26', 'BANGLE DESA PESANGGRAHAN', 'SELONG', 'Nusa Tenggara Barat', '085333118470', 'L', 'Islam', 'B', 'WNI', '', '', 'HUMAIDI', 'Islam', 'Pegawai Negeri Sipil', 'SUMAKYAH', 'Islam', 'Rumah Tangga', 'BANGLE DESA PESANGGRAHAN KEC. MT GADING', 'SELONG LOMBOK TIMUR', 'Nusa Tenggara Barat', null, null, '7142647bd4ebc154d3c02ff53bc5bd91', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1200330026', '12.8.349.32.53.0.2.0026', 'DFL1231B1350', 'DUL1231B1350', 'JUSMAWATI', 'perung ', '1992-04-04', 'jln. merpati no 65 kr, jangkong', 'mataram', 'Nusa Tenggara Barat', '087864579537', 'P', 'Islam', '-', 'WNI', '', '', 'M.YUSUF', 'Islam', 'Petani', 'JEMATI', 'Islam', 'Rumah Tangga', 'Jln.Budi Sakti N01 Luyuk Sumbawa Besar', 'Sumbawa Besar', 'Nusa Tenggara Barat', null, null, '56e37b970a8bb51f6f9ae9afb13d6559', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1200330027', '12.8.349.32.53.0.2.0027', 'DFL1231B1421', 'DUL1231B1421', 'BAIQ HARWITI', 'MATARAM', '1987-04-22', 'MARONG KARANG BARU MATARAM', 'MATARAM', 'Nusa Tenggara Barat', '087864365002', 'P', 'Islam', 'O', 'WNI', '', '', 'L.ALWI', 'Islam', 'Pegawai Negeri Sipil', 'DAHRIAH', 'Islam', 'Rumah Tangga', 'MARONG KARANG BARU MATARAM', 'MATARAM', 'Nusa Tenggara Barat', null, null, 'a2446de47740a983852f6b90dd768fe6', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210310001', '12.8.349.72.74.0.3.0001', 'DFM1212B0008', 'DUM1212B0008', 'I MADE JULIARTA SUWASTA', 'Mataram', '1994-07-04', 'Jl. Pancaka 10x Gomong Baru', 'Mataram', 'Nusa Tenggara Barat', '087865588334', 'L', 'Hindu', 'O', 'WNI', '', '', 'I Made Suhartana', 'Hindu', 'Wiraswasta', 'Nyoman Alit Tri Utami Kasih', 'Hindu', 'Rumah Tangga', 'Jl. Pancaka 10x Mataram', 'Mataram', 'Nusa Tenggara Barat', null, null, 'fb3e7d56d8a9dc1a873dc44c5b8c6faf', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210320002', '12.8.349.72.74.0.3.0002', 'DFL1222B1062', 'DUL1222B1062', 'FITRAYADI', 'SUMBAWA BESAR', '1992-03-15', 'lintas sumbawa bima km 40 pemasar,kec maronge kab.sumbawa', 'SUMBAWA BESAR', 'Nusa Tenggara Barat', '087863994744', 'L', 'Islam', 'O', 'WNI', '', '', 'H.MALADI', 'Islam', 'Petani', 'HJ.SADIAH', 'Islam', 'Petani', 'DES.PEMASAR KEC MARONGE KAB.SUMBAWA', 'SUMBAWA BESAR', 'Nusa Tenggara Barat', null, null, 'baf121f8f22e1eaf2ce4b9eddd99ef19', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210320003', '12.8.349.72.74.0.3.0003', 'DFO1222B1020', 'DUO1222B1020', 'MINA SIFANA', 'mataram', '1994-03-29', 'jln pemuda no 3 gomong lama mataram', 'mataram', 'Nusa Tenggara Barat', '083129572413', 'P', 'Islam', 'B', 'WNI', '', 'minaelf.elf8@gmail.com', 'h.sahib S.E', 'Islam', 'Pegawai Negeri Sipil', 'hj mumtaz', 'Islam', 'Rumah Tangga', 'jln pemuda no 3 gomong lama mataram', 'mataram', 'Nusa Tenggara Barat', null, null, 'f87e3ac645f69739b3e46b929e9e8fa4', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210320004', '12.8.349.72.74.0.3.0004', 'DFL1222B1284', 'DUL1222B1284', 'RIANTO', 'tanak embet', '1989-12-31', 'Tanak embet ', 'Tanjung', 'Nusa Tenggara Barat', '', 'L', 'Budha', '-', 'WNI', '', '', 'warta', 'Budha', 'Petani', 'Sanep', 'Budha', 'Petani', 'Tanjung, kabupaten lombok utara', 'Tanjung, kabupaten lombok utara', 'Nusa Tenggara Barat', null, null, '85831523c54e120cec69c7440ce2214b', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210320005', '12.8.349.72.74.0.3.0005', 'DFL1222B1281', 'DUL1222B1281', 'SATRIA DIANSYAH', 'sigerongan', '1993-06-02', 'jln.kr bayan sigerongan,lingsar', 'MATARAM', 'Nusa Tenggara Barat', '08175793539', 'L', 'Islam', 'A', 'WNI', '', '', 'syahman', 'Islam', 'Pegawai Negeri Sipil', 'alm.azizah', 'Islam', 'Rumah Tangga', 'jln.kr bayan sigerongan,lingsar', 'mataram', 'Nusa Tenggara Barat', null, null, 'b6666b77a62e232f4b1b6e7f4cd94762', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210320006', '12.8.349.72.74.0.3.0006', 'DFL1222B1274', 'DUL1222B1274', 'AGUS FAJRIN', 'Sumbawa Besar', '1990-08-09', 'BTN bukit permai', 'SUMBAWA BESAR', 'Nusa Tenggara Barat', '087731392033', 'L', 'Islam', '-', 'WNI', '', '', 'Muslimin Yusuf', 'Islam', 'Lainnya', 'Siti mariam', 'Islam', 'Rumah Tangga', 'BTN bukit permai', 'Sumbawa Besar', 'Nusa Tenggara Barat', null, null, '3c8689a993d46f71d99db33c74bc52e2', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210320007', '12.8.349.72.74.0.3.0007', 'DFL1222B1249', 'DUL1222B1249', 'MUH.ZAENUL HARSANI', 'Dasan jati', '1993-05-13', 'DASAN JATI', 'Selong', 'Nusa Tenggara Barat', '081997804211', 'L', 'Islam', 'O', 'WNI', '', 'ZAENSNETRAL@YAHOO.COM', 'SAWAL', 'Islam', 'Petani', 'SAPIAH', 'Islam', 'Petani', 'DASAN JATI', 'Selong', 'Nusa Tenggara Barat', null, null, 'c8dc1ac8cf144c7a44177999fdb9f00d', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210320008', '12.8.349.72.74.0.3.0008', 'DFL1222B1232', 'DUL1222B1232', 'RIZKA RAMDANI', 'ubung', '1996-02-20', 'ubung kecamatan jonggat kabupaten Lombok Tengah', 'Praya', 'Nusa Tenggara Barat', '081803664834', 'L', 'Islam', '-', 'WNI', '', 'daniswac2002@yahoo.com', 'Lutfi', 'Islam', 'Pegawai Negeri Sipil', 'sumiati', 'Islam', 'Rumah Tangga', 'ubung', 'Praya', 'Nusa Tenggara Barat', null, null, '3695e846bc384f745d59b64f54428c39', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210320009', '12.8.349.72.74.0.3.0009', 'DFL1222B1221', 'DUL1222B1221', 'WIDI GALIHUTAMI', 'Jereweh', '1987-09-18', 'jl. pemuda 12 gomong ', 'MATARAM', 'Nusa Tenggara Barat', '081936711000', 'P', 'Islam', '-', 'WNI', '', '', 'SANAPIAH ', 'Islam', 'Pegawai Negeri Sipil', 'NURHAYATI', 'Islam', 'Wiraswasta', 'jl. pendidikan no.128 Alas-Sumbawa', 'Alas', 'Nusa Tenggara Barat', null, null, '5a1b1a95192a33308bce32cb4ae39a5f', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210320010', '12.8.349.72.74.0.3.0010', 'DFL1222B1207', 'DUL1222B1207', 'ZULKARENAEN', 'apitaik', '1992-02-09', 'kekalik', 'Mataram', 'Nusa Tenggara Barat', '', 'L', 'Islam', '-', 'WNI', '', '', 'pahrurrozi', 'Islam', 'Wiraswasta', 'hindiah', 'Islam', 'Wiraswasta', 'apitaik', 'lotim', 'Nusa Tenggara Barat', null, null, 'f7ca9e0225043f83d3cdab035a8ef37b', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210320011', '12.8.349.72.74.0.3.0011', 'DFL1222B1185', 'DUL1222B1185', 'RAIDI ', 'Belida Santong', '1993-12-31', 'SATONG TERARA', 'lombok timur', 'Nusa Tenggara Barat', '087862606852', 'L', 'Islam', '-', 'WNI', '', '', 'Amq. Nurhasanah', 'Islam', 'Petani', 'Inq. Johariatun', 'Islam', 'Petani', 'Santong', 'Terara', 'Nusa Tenggara Barat', null, null, '24ca0a4260ff4105a4f9cc254416ee74', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210320012', '12.8.349.72.74.0.3.0012', 'DFL1222B1094', 'DUL1222B1094', 'MOH.BUDI SETIAWAN', 'SUKARAJA', '1996-03-08', 'SUKRARAJA', 'PRAYA', 'Nusa Tenggara Barat', '081907906572', 'L', 'Islam', '-', 'WNI', '', 'budisetiawan9471@yahoo.co.id', 'repiin', 'Islam', 'Pegawai Negeri Sipil', 'zubaidah', 'Islam', 'Wiraswasta', 'sukaraja', 'praya timur', 'Nusa Tenggara Barat', null, null, 'd3a7086629e0c4fff00d12dce4439bec', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210320013', '12.8.349.72.74.0.3.0013', 'DFL1222B1065', 'DUL1222B1065', 'I MADE SUHARTANA HADISUKMA', 'Mataram', '1994-11-30', 'Jalan AR Hakim gang Rampai 2/18', 'Mataram', 'Nusa Tenggara Barat', '081907495970', 'L', 'Hindu', 'O', 'WNI', '', 'suhartana.hadi@yahoo.co.id', 'I Wayan Mara', 'Hindu', 'Lainnya', 'Ni Ketut Sukranasih', 'Hindu', 'Rumah Tangga', 'Jalan AR Hakim gang Rampai 2/18', 'Mataram', 'Nusa Tenggara Barat', null, null, 'b284e8e076a1500749d17bcdd61866f3', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210320014', '12.8.349.72.74.0.3.0014', 'DFL1222B1124', 'DUL1222B1124', 'DIKY CANDRA', 'Sumbawa ', '1995-10-12', 'Dasan sari', 'Mataram', 'Nusa Tenggara Barat', '081916812052', 'L', 'Islam', '-', 'WNI', '', 'dicky_chandra91@rocketmail.com', 'M. Hendry', 'Islam', 'Wiraswasta', 'Kurniawati', 'Islam', 'Wiraswasta', 'Dusun Pernang Labuan Burung', 'Sumbawa Besar', 'Nusa Tenggara Barat', null, null, 'e9fc70bc968a17d35dcf5b1d002ce582', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210320015', '12.8.349.72.74.0.3.0015', 'DFL1222B1138', 'DUL1222B1138', 'YUDA NARASIMARAU', 'ubung', '1994-03-27', 'bonjeruk', 'praya', 'Nusa Tenggara Barat', '085237377276', 'L', 'Islam', '-', 'WNI', '', '', 'aksir', 'Islam', 'Pegawai Negeri Sipil', 'saderah', 'Islam', 'Rumah Tangga', 'bonjeruk', 'praya', 'Nusa Tenggara Barat', null, null, '0cdf088b26ff78b48b37eb5362efe2df', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210320016', '12.8.349.72.74.0.3.0016', 'DFL1222B1142', 'DUL1222B1142', 'HASBULLAH', 'irng lauk', '1993-04-15', 'ireng lauk', 'MATARAM', 'Nusa Tenggara Barat', '087865159522', 'L', 'Islam', '-', 'WNI', '', '', 'abdul Wahab', 'Islam', 'Petani', 'Alizah', 'Islam', 'Rumah Tangga', 'Presak meninting', 'MATARAM', 'Nusa Tenggara Barat', null, null, 'ad571ea27c612e6e3398b9d8d4898159', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210320017', '12.8.349.72.74.0.3.0017', 'DFL1222B1149', 'DUL1222B1149', 'ABDUL AZIZ', 'Teros,', '1994-12-31', 'Serumbung', 'SELONGN LOMBOK TIMUR', 'Nusa Tenggara Barat', '081805780746', 'L', 'Islam', 'A', 'WNI', '', '', 'Sugiri', 'Islam', 'Wiraswasta', 'Sri Wulan', 'Islam', 'Rumah Tangga', 'Serumbung', 'LOMBOK TIMUR', 'Nusa Tenggara Barat', null, null, 'b9cf099f80d6e5e667b4bca14fb581c7', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210330018', '12.8.349.72.74.0.3.0018', 'DFL1232B1393', 'DUL1232B1393', 'I NENGAH HERYASA', 'batulayar', '1993-11-09', 'Desa batulayar,Kec. batulayar. jln senggigi', 'MATARAM', 'Nusa Tenggara Barat', '6281805284994', 'L', 'Hindu', 'B', 'WNI', '', '', 'i nengah nesa', 'Hindu', 'Pegawai Swasta', 'i wayan sutik', 'Hindu', 'Rumah Tangga', 'batulayar', 'MATARAM', 'Nusa Tenggara Barat', null, null, '54d1dd876889408acf433e7ab4101877', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210330019', '12.8.349.72.74.0.3.0019', 'DFL1232B1402', 'DUL1232B1402', 'PANJI PANGESTU DEWANTARA', 'MATARAM', '1994-05-01', 'JL.SERAYU RAYA BTN KEKALIK NO 3', 'Mataram', 'Nusa Tenggara Barat', '081907451396', 'L', 'Islam', 'O', 'WNI', '', '', 'HERDIANA AKBAR', 'Islam', 'Wiraswasta', 'NURSUCI KARTINI', 'Islam', 'Pegawai Swasta', 'JL. SERAYU RAYA BTN KEKALIK NO 3', 'MATARAM', 'Nusa Tenggara Barat', null, null, '05216bfb920629681c60bd680e426432', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210330020', '12.8.349.72.74.0.3.0020', 'DFL1232B1405', 'DUL1232B1405', 'BINTANG SIDAURUK', 'PematangSiantar', '1993-10-10', 'jln hiu. no 98,btn taman mutiara', 'MATARAM', 'Nusa Tenggara Barat', '081907941867', 'P', 'Kristen', 'O', 'WNI', '', 'bintangchidauruk@ymail.com', 'jasmen sidauruk', 'Kristen', 'Wiraswasta', 'n. limbong', 'Kristen', 'Wiraswasta', 'PematangSiantar', 'PematangSiantar', 'Sumatera Utara', null, null, '2862d8c9cd37c4f79f51534cd660eef6', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210330021', '12.8.349.72.74.0.3.0021', 'DFO1232B1078', 'DUO1232B1078', 'TOMI AZIS PRASETIYO', 'MATARAM', '1994-05-07', 'JALAN DANAU TAMBLINGAN NO.27 MATARAM', 'MATARAM', 'Nusa Tenggara Barat', '0370645518', 'L', 'Islam', '-', 'WNI', '-', 'tomitiyo@ymail.com', 'SEMI SUBAGYO', 'Islam', 'Pegawai Negeri Sipil', 'HINDUN PURWANTI', 'Islam', 'Rumah Tangga', 'JALAN DANAU TAMBLINGAN NO.27 MATARAM', 'MATARAM', 'Nusa Tenggara Barat', null, null, 'abcd882e18b511760e7e5828aa4b56f7', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210330022', '12.8.349.72.74.0.3.0022', 'DFL1232B1381', 'DUL1232B1381', 'YUDI TRISNADI', 'mantang', '1994-07-22', 'Desa Barabali, Kec. Batukliang LOTENG', 'PRAYA', 'Nusa Tenggara Barat', '081907926119', 'L', 'Islam', '-', 'WNI', '', '', 'RAHMATULLAH JAYENG', 'Islam', 'Pegawai Swasta', 'BQ. SARIANI', 'Islam', 'Rumah Tangga', 'Desa Barabali, Kec. Batukliang LOTENG', 'PRAYA', 'Nusa Tenggara Barat', null, null, 'c4e5f4b59ecc99ebd45f8b901dff233b', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210330023', '12.8.349.72.74.0.3.0023', 'DFL1232B1361', 'DUL1232B1361', 'MUHAMMAD DENI HIDAYATTULLOH', 'Mataram', '1994-02-05', 'jln.gotong royong no 95 pejeruk ampenan', 'Mataram', 'Nusa Tenggara Barat', '085792857930', 'L', 'Islam', 'B', 'WNI', '', '', 'moch warid', 'Islam', 'Petani', 'siti fatimah', 'Islam', 'Wiraswasta', 'jln.gotong royong no 95', 'Mataram', 'Nusa Tenggara Barat', null, null, '893404cff476d3294a91d03ad893b2ba', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210330024', '12.8.349.72.74.0.3.0024', 'DFL1232B1332', 'DUL1232B1332', 'INDRAYANTO', 'dewa sikin ,31 12 1994', '1994-12-31', 'Rw.Damai kec pringgasela lotim', 'selong', 'Nusa Tenggara Barat', '085337741637', 'L', 'Islam', 'O', 'WNI', '', '', 'Bukran', 'Islam', 'Wiraswasta', 'Masni', 'Islam', 'Petani', 'Pringgasela', 'selong', 'Nusa Tenggara Barat', null, null, '8ddd332f6124ccc2c8e7b4f148fea5ec', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210330025', '12.8.349.72.74.0.3.0025', 'DFL1232B1331', 'DUL1232B1331', 'IMRON FATONI', 'empang', '1994-07-12', 'jl bintang raya no.13 BTN BHP Labuapi', 'MATARAM', 'Nusa Tenggara Barat', '087863508100', 'L', 'Islam', '-', 'WNI', '', '', 'M. Nasir', 'Islam', 'Petani', 'Wahida', 'Islam', 'Petani', 'Empang Sumbawa', 'Sumbawa', 'Nusa Tenggara Barat', null, null, '92f5e1ff2350864285a42187d20aacf6', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210330026', '12.8.349.72.74.0.3.0026', 'DFL1232B1323', 'DUL1232B1323', 'MUHAMMAD SUANDI', 'LEPAK', '1991-12-31', 'lepak, sakra timur', 'SELONG', 'Nusa Tenggara Barat', '087763340765', 'L', 'Islam', '-', 'WNI', '-', 'andyrespeztor@yahoo.co.id', 'ISMAIL', 'Islam', 'Petani', 'NURINAH', 'Islam', 'Petani', 'Lepak Sakra Timur', 'SELONG LOMBOK TIMUR', 'Nusa Tenggara Barat', null, null, '90bcc1200535b1e8194a1dcc598ed45e', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210330027', '12.8.349.72.74.0.3.0027', 'DFL1232B1314', 'DUL1232B1314', 'RYAN HADI UTAMA', 'MASBAGIK', '1993-11-06', 'kp.karang siswa masbagik selatan', 'Masbagik', 'Nusa Tenggara Barat', '087763072739', 'L', 'Islam', 'AB', 'WNI', '', 'ryanocax@gmail.com', 'salahudin', 'Islam', 'Pegawai Swasta', 'hidayah', 'Islam', 'Pegawai Swasta', 'Kp.karang siswa masbagik selatan', 'masbagik', 'Nusa Tenggara Barat', null, null, '50ace77cfa2748374972a43c58deeaef', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210330028', '12.8.349.72.74.0.3.0028', 'DFL1232B1304', 'DUL1232B1304', 'ROBI SUDIARTI', 'kararang kates', '1993-03-24', 'dusun gubuk baru,santong', 'MATARAM', 'Nusa Tenggara Barat', '085337737682', 'L', 'Islam', '-', 'WNI', '', 'fa_izbio@yahoo.com', 'sudin', 'Islam', 'Petani', 'kadaryah', 'Islam', 'Rumah Tangga', 'dusun gubuk baru santong', 'Tanjung, kabupaten lombok utara', 'Nusa Tenggara Barat', null, null, '46ead6671634e063cf49a35fc4e7b809', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210330029', '12.8.349.72.74.0.3.0029', 'DFL1232B1295', 'DUL1232B1295', 'AKHMAD AFIULLAH', 'kekalek', '1993-11-29', 'jl.gotong royong no.157 pejeruk, ampenan', 'MATARAM', 'Nusa Tenggara Barat', '081805747371', 'L', 'Islam', 'O', 'WNI', '', 'afi_cyber_explorer@yahoo.com', 'indarus', 'Islam', 'Petani', 'saonah', 'Islam', 'Rumah Tangga', 'kekalek,murbaya,kec.pringgarata, loteng', 'PRAYA', 'Nusa Tenggara Barat', null, null, '51fc403b6aa0a7ce2c48b79bb8a5fe8e', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210330030', '12.8.349.72.74.0.3.0030', 'DFO1232B1079', 'DUO1232B1079', 'MUHAMMAD ZAINUL MUTTAQIN', 'Penaban', '1994-09-09', 'Kembang Kerang', 'Lombok Tengah', 'Nusa Tenggara Barat', '081805732322', 'L', 'Islam', '-', 'WNI', '', 'azammohammad194@yahoo.co.id', 'Abdul Jalil S.H', 'Islam', 'Wiraswasta', 'Sumarni A.Ma.Pd', 'Islam', 'Guru', 'Kembang Kerang', 'Lombok Tengah', 'Nusa Tenggara Barat', null, null, '7c39ac36f1fb87850c8e65177f4475d5', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210330032', '12.8.349.72.74.0.3.0032', 'DFO1232B1072', 'DUO1232B1072', 'AGITYA ARDIKASA', 'BOGOR', '1991-08-12', 'JLN. TAMAN SEJAHTERA VII NO. 1 PEJERUK - AMPENAN', 'MATARAM', 'Nusa Tenggara Barat', '081803709459', 'L', 'Islam', 'B', 'WNI', '', 'ardikaza.agietya12@gmail.com', 'MUHAMMAD EFFENDY', 'Islam', 'Pegawai Swasta', 'YULIANTI RAHAYU NINGSIH', 'Islam', 'Rumah Tangga', 'JLN. AKIK 316 TOWNSITE', 'SUMBAWA', 'Nusa Tenggara Barat', null, null, 'a2446de47740a983852f6b90dd768fe6', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210510001', '12.8.349.74.75.0.5.0001', 'DFL1213B0003', 'DUL1213B0003', 'ARI APRIADI ', 'MATARAM,', '1993-04-18', 'JLN.RAYA SENGGIGI ', 'MATARAM', 'Nusa Tenggara Barat', '087864678852', 'L', 'Islam', 'O', 'WNI', '', '', 'MOH.SUKRI', 'Islam', 'Pegawai Swasta', 'BAIQ MUHTAROH', 'Islam', 'Rumah Tangga', 'SENGGIGI ', 'SENGGIGI ', 'Nusa Tenggara Barat', null, null, 'ecd297efeccd3c74a1446353df15e37e', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210510002', '12.8.349.74.75.0.5.0002', 'DFT1213B0001', 'DUT1213B0001', 'ROHANI', 'TALIWANG', '1992-09-24', 'JL. SWAKARSA III  BTN PURI CITRA PANJITILAR B4', 'MATARAM', 'Nusa Tenggara Barat', '081909132964', 'P', 'Islam', 'O', 'WNI', '', 'HANIBUGIS@GMAIL.COM', 'SONGGO', 'Islam', 'Petani', 'SARAH', 'Islam', 'Rumah Tangga', 'LINGK.BUGIS RT 01/RW 03 KEC. TALIWANG, KSB', 'TALIWANG', 'Nusa Tenggara Barat', null, null, '77cb61d23d7639982944746ca00c700a', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210510003', '12.8.349.74.75.0.5.0003', 'DFM1213B0001', 'DUM1213B0001', 'SYAMSUL HAKIM', 'MAKAH', '1994-01-09', 'DUSUN GERSIK, DESA GELOGOR, KECAMATAN KEDIRI', 'LOMBOK BARAT', 'Nusa Tenggara Barat', '081915993697', 'L', 'Islam', '-', 'WNI', '', '', 'H. MOH. SYAFOAN', 'Islam', 'Wiraswasta', 'HJ. HAERIAH', 'Islam', 'Rumah Tangga', 'DESA GRESIK, KECAMATAN KEDIRI', 'LOMBOK BARAT', 'Nusa Tenggara Barat', null, null, '9a0058cb33204e1484486ade086e9ba1', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210510004', '12.8.349.74.75.0.5.0004', 'DFM1213B0002', 'DUM1213B0002', 'DODI AKHMAD PRATAMA', 'Bima', '1994-01-25', 'Jalan Rajawali VI No. 16 BTN Selagalas', 'Mataram', 'Nusa Tenggara Barat', '087881005521', 'L', 'Islam', 'O', 'WNI', '', '', 'Saiful Akhmad', 'Islam', 'Pegawai Negeri Sipil', 'Cut Purwati', 'Islam', 'Pegawai Negeri Sipil', 'Jalan Rajawali VI No. 16 BTN Selagalas', 'Mataram', 'Nusa Tenggara Barat', null, null, '24851134a425464642fd6774db158a3e', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210510005', '12.8.349.74.75.0.5.0005', 'DFM1213B0003', 'DUM1213B0003', 'DIMAS PRAYOGA SUMA EKA PUTRA', 'Mataram', '1994-02-24', 'Jalan Gora Gg. Kurma No. 16', 'Mataram', 'Nusa Tenggara Barat', '083129643904', 'L', 'Islam', 'A', 'WNI', '', '', 'Sunaryo', 'Islam', 'Wiraswasta', 'Rahma May Dianti', 'Islam', 'Rumah Tangga', 'Jalan Gora Gg. Kurma No. 16', 'Mataram', 'Nusa Tenggara Barat', null, null, '573ddd93367e8093fa7f083cc3c8166c', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210510006', '12.8.349.74.75.0.5.0006', 'DFM1213B0006', 'DUM1213B0006', 'BAHRUL HIDAYAT', 'Mataram', '1994-11-24', 'Jalan Ade Irma Suryani, Gg. Panda 3/10 Monjok', 'Mataram', 'Nusa Tenggara Barat', '087865298338', 'L', 'Islam', '-', 'WNI', '', '', 'Sahran', 'Islam', 'Pegawai Negeri Sipil', 'Sumiati', 'Islam', 'Lainnya', 'Jalan Ade Irma Suryani, Gg. Panda 3 No. 10 Monjok', 'Mataram', 'Nusa Tenggara Barat', null, null, 'ae49e9348e919f85840219f6dc086d21', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210510007', '12.8.349.74.75.0.5.0007', 'DFM1213B0007', 'DUM1213B0007', 'PANJI WAHYU RINALDI', 'Praya', '1994-03-01', 'Merpati 99 Cempaka No. 14 Kr. Jangkong', 'Mataram', 'Nusa Tenggara Barat', '085738641701', 'L', 'Islam', '-', 'WNI', '', '', 'Rachmat Rinaldi', 'Islam', 'Wiraswasta', 'Bq. Rusmini', 'Islam', 'Rumah Tangga', 'Jalan Merpati 99 Cempaka 14 Kr. Jangkong', 'Mataram', 'Nusa Tenggara Barat', null, null, '6264b32eba7b5765e3a146a807aba2c8', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210510008', '12.8.349.74.75.0.5.0008', 'DFS1213B0001', 'DUS1213B0001', 'DWI JULYANTO', 'Sumbawa', '1993-07-22', 'Jl. Osap Sio I No. 25', 'Sumbawa Besar', 'Nusa Tenggara Barat', '085339909053', 'L', 'Islam', 'A', 'WNI', '', '', 'Untung Triyono, S.T', 'Islam', 'Wiraswasta', 'Karsinemiati', 'Islam', 'Rumah Tangga', 'Jl. Osap Sio I No. 25', 'Sumbawa Besar', 'Nusa Tenggara Barat', null, null, '3721f9f935c18b90d33e1eeff359b400', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210510009', '12.8.349.74.75.0.5.0009', 'DFL1213B0015', 'DUL1213B0015', 'RUSMAN SATRIAWAN', 'bolor', '1993-11-27', 'jln, gilitrawangan, RT06. NO12 taman karang baru mataram', 'mataram', 'Nusa Tenggara Barat', '083129646921', 'L', 'Islam', '-', 'WNI', '', '', 'kadarusman', 'Islam', 'Pegawai Negeri Sipil', 'bq.tasmini', 'Islam', 'Rumah Tangga', 'bolor, apit aik, desa. bebuak, kec.kopang, lombok tengah', 'praya', 'Nusa Tenggara Barat', null, null, 'c753f09b6e1389697bad286ff6ed40d9', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210510010', '12.8.349.74.75.0.5.0010', 'DFL1213B0013', 'DUL1213B0013', 'KOMALASARI', 'NGERU ', '1992-09-03', 'JALAN BHINEK NO6 DUSUN KAPEK ATAS DESA GUNUNG SARI LOMBOK BARAT', 'GERUNG', 'Nusa Tenggara Barat', '087864259097', 'P', 'Islam', 'O', 'WNI', '', 'KOMALASARI36@YMAIL.COM', 'H.IBRAHIM', 'Islam', 'Petani', 'NURJANAH', 'Islam', 'Rumah Tangga', 'NGERU RT 03 RW 02', 'SUMBAWA BESAR', 'Nusa Tenggara Barat', null, null, '142c0e2a7728ec0f447aac8ca8778dcb', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210510011', '12.8.349.74.75.0.5.0011', 'DFL1213B0012', 'DUL1213B0012', 'TUNGGUL WICAKSONO', 'SUMBAWA BESAR', '1992-09-01', 'DUSUN KAYANGAN,RT01/RW01,KARANG DIMA ,LABUHAN BADAS', 'SUMBAWA BESAR', 'Nusa Tenggara Barat', '081240181830', 'L', 'Islam', '-', 'WNI', '', 'Sony_s22@yahoo.co.id', 'SUGIYO UTOMO', 'Islam', 'Pegawai Negeri Sipil', 'SUPARTI', 'Islam', 'Rumah Tangga', 'DUSUN KAYAGAN ,RT 01/RW01 KARANG DIMA LABUHAN BADAS', 'SUMBAWA BESAR', 'Nusa Tenggara Barat', null, null, '6e1881c39bdf48fcd6f7bcae7bff1bbb', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210510012', '12.8.349.74.75.0.5.0012', 'DFL1213B0004', 'DUL1213B0004', 'BQ. NURASMAH', 'LOMBOK TIMUR', '1992-04-04', 'KARANG TAPEN', 'MATARAM', 'Nusa Tenggara Barat', '087763171608', 'P', 'Islam', '-', 'WNI', '', '', 'L. RASTAM', 'Islam', 'Petani', 'BQ. MUR HASANAH', 'Islam', 'Wiraswasta', 'LOMBOK TIMUR', 'SELONG', 'Nusa Tenggara Barat', null, null, '22eba33268b1ae385c192d624267d216', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210510013', '12.8.349.74.75.0.5.0013', 'DFL1213B0005', 'DUL1213B0005', 'MUHAMMAD MUJIBURRAHMAN', 'lepak', '1992-02-09', 'lepak, sakra timur', 'Selong', 'Nusa Tenggara Barat', '087763199316', 'L', 'Islam', '-', 'WNI', '', '', 'Samak Hasim', 'Islam', 'Lainnya', 'Fatimah', 'Islam', 'Wiraswasta', 'Lepak Sakra Timur', 'SELONG LOMBOK TIMUR', 'Nusa Tenggara Barat', null, null, '57c6d74d9381029ba97bfb477c324cf4', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210510014', '12.8.349.74.75.0.5.0014', 'DFL1213B0006', 'DUL1213B0006', 'L.DODI HENDRAWAN', 'gelenter', '1992-12-01', 'lepak sakra timur', 'SELONG', 'Nusa Tenggara Barat', '087763341145', 'L', 'Islam', '-', 'WNI', '', '', 'l.zakaria', 'Islam', 'Petani', 'sulhiah', 'Islam', 'Petani', 'sakra', 'selong', 'Nusa Tenggara Barat', null, null, '6fb04b5454cebabb121668e7c17df9ca', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210510015', '12.8.349.74.75.0.5.0015', 'DFL1213B0008', 'DUL1213B0008', 'MI\'RAZUL', 'BARALAU', '1993-01-15', 'BARALAU', 'BIMA', 'Nusa Tenggara Barat', '081246202386', 'L', 'Islam', '-', 'WNI', '', '', 'A.RAHMAN', 'Islam', 'Pegawai Negeri Sipil', 'KALISOM', 'Islam', 'Pegawai Negeri Sipil', 'BARALAU', 'BIMA', 'Nusa Tenggara Barat', null, null, '377d4c1ad476487e1a81592e1e140a54', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210510016', '12.8.349.74.75.0.5.0016', 'DFL1213B0009', 'DUL1213B0009', 'AULINDRA ADI PUTRA', 'Masbagik', '1991-07-28', 'Kampung padang RT 1, Masbagik Selatan Kec. Masbagik', 'SELONG', 'Nusa Tenggara Barat', '081997853763', 'L', 'Islam', '-', 'WNI', '', '', 'hariyadi', 'Islam', 'Pegawai Negeri Sipil', 'hariatul Aini', 'Islam', 'Pegawai Negeri Sipil', 'Kampung padang RT 1, Masbagik Selatan Kec. masbagik', 'SELONG', 'Nusa Tenggara Barat', null, null, '678700de6c9259fc9aac3a9065376f00', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210510017', '12.8.349.74.75.0.5.0017', 'DFL1213B0010', 'DUL1213B0010', 'MUHAMMAD MAHRUS PUTRA', 'Lewoleba', '1993-04-20', 'Jalan Alas No.7 B Ampenan Selatan', 'mataram', 'Nusa Tenggara Barat', '085333226871', 'L', 'Islam', 'O', 'WNI', '', 'putramuhammadmahrus@gmail.com', 'Sulaiman Amir', 'Islam', 'Pegawai Negeri Sipil', 'Siti Khadijah', 'Islam', 'Rumah Tangga', 'Jalan Datuk Dibanta No. 25 Tolomundu', 'Bima', 'Nusa Tenggara Barat', null, null, '0e6f0200386c1dd3165ecd97b7e80909', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210510018', '12.8.349.74.75.0.5.0018', 'DFL1213B0011', 'DUL1213B0011', 'HABIB MURFADI', 'mataram', '1992-07-18', 'jln,guru roem, senggigi ,batu layar,lobar', 'mataram', 'Nusa Tenggara Barat', '081803613421', 'L', 'Islam', '-', 'WNI', '', '', 'madnin', 'Islam', 'Wiraswasta', 'hj.maryam', 'Islam', 'Rumah Tangga', 'jln,guru roem, senggigi, batu layar, lobar', 'mataram', 'Nusa Tenggara Barat', null, null, '8b5971c994568974c4022026fafc0afa', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520019', '12.8.349.74.75.0.5.0019', 'DFL1223B1199', 'DUL1223B1199', 'GUNDHITO GESBRYAN', 'MATARAM', '1993-05-06', 'sankukun desa genggelang kecamatan gangga', 'tanjung', 'Nusa Tenggara Barat', '081803799499', 'L', 'Islam', 'B', 'WNI', '', 'cezekage@YAHOO.CO.ID', 'HAMDI', 'Islam', 'Pegawai Negeri Sipil', 'JUNIATI', 'Islam', 'Rumah Tangga', 'jalan dahlia no13 kampung melayu ampenan tengah', 'MATARAM', 'Nusa Tenggara Barat', null, null, '3644558bf60b7f1a1c3c3226e64c6c46', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520020', '12.8.349.74.75.0.5.0020', 'DFL1223B1194', 'DUL1223B1194', 'HANDIKA YUDI PRADANA', 'KELANA', '1993-10-23', 'Kelana, Desa Sepakek Kec. Pringgrata', 'Praya', 'Nusa Tenggara Barat', '087864564153', 'L', 'Islam', '-', 'WNI', '', 'yhudyiee_kha@yahoo.com', 'Ahmad Yani', 'Islam', 'Wiraswasta', 'Solihin', 'Islam', 'Wiraswasta', 'Kelana, Desa Sepakek Kec. Pringgrata', 'Praya', 'Nusa Tenggara Barat', null, null, 'ebf849abc13544e252d7848375179419', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520021', '12.8.349.74.75.0.5.0021', 'DFL1223B1190', 'DUL1223B1190', 'M. NASRUL FUAD', 'BIMA', '1994-06-09', 'PENGADANG, DESA PENGADANG KEC. PRAYA TENGAH', 'PRAYA', 'Nusa Tenggara Barat', '087866772233', 'L', 'Islam', '-', 'WNI', '', '', 'SUDIRMAN, S Pd', 'Islam', 'Pegawai Negeri Sipil', 'SUCIYATI', 'Islam', 'Rumah Tangga', 'PENGADANG, KEC. PRAYA TENGAH', 'PRAYA', 'Nusa Tenggara Barat', null, null, 'e66de5fbd5f4c8e614406786f2e99e16', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520022', '12.8.349.74.75.0.5.0022', 'DFL1223B1187', 'DUL1223B1187', 'HANAFI M.S HAMKA', 'SOE', '1994-06-25', 'JLN,ALAS 1 NO 7B TAMAN SARI AMPENAN SELATAN', 'MATARAM', 'Nusa Tenggara Barat', '087864770213', 'L', 'Islam', 'O', 'WNI', '', 'hamkaebeh@yahoo.co.id', 'MUHAMMAD SALEH', 'Islam', 'Pegawai Negeri Sipil', 'SARIFAH YUSUF', 'Islam', 'Rumah Tangga', 'JLN.ALAS 1 NO 7B TAMAN SARI AMPENAN SELATAN', 'MATARAM', 'Nusa Tenggara Barat', null, null, 'f6f0bdf508d630773dc2883154e3c9be', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520023', '12.8.349.74.75.0.5.0023', 'DFL1223B1184', 'DUL1223B1184', 'AHMAD MURSIDIN', 'DASAN BARU', '1994-06-10', 'MENDANA-LOTIM-NTB', 'SELONG', 'Nusa Tenggara Barat', '081997711073', 'L', 'Islam', '-', 'WNI', '', '', 'AHMAD ZAUKI', 'Islam', 'Petani', 'SARINEP', 'Islam', 'Petani', 'MENDANA-LOTIM-NTB', 'SELONG', 'Nusa Tenggara Barat', null, null, '12897a7fe99560fcf346c878731552c2', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520024', '12.8.349.74.75.0.5.0024', 'DFL1223B1181', 'DUL1223B1181', 'M. SOFYAN HARITSA', 'PAOKMOTONG', '1994-03-06', 'Kp.Dasan,Desa Paok Motong,Kec.Masbagik LOTIM', 'SELONG', 'Nusa Tenggara Barat', '087863434340', 'L', 'Islam', 'AB', 'WNI', '', '', 'Usman alamudi', 'Islam', 'Wiraswasta', 'Murniati', 'Islam', 'Wiraswasta', 'Kp.Dasan,Desa Paok Motong,Kec.Masbagik LOTIM', 'SELONG', 'Nusa Tenggara Barat', null, null, 'c07b25ff67c37184f623fae7d2d2dd7d', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520025', '12.8.349.74.75.0.5.0025', 'DFL1223B1200', 'DUL1223B1200', 'LALU SUQRON PRAYADI', 'lombok ', '1993-07-13', 'desa berarek kec moyo hilir sumbawa besar', 'sumbawa', 'Nusa Tenggara Barat', '081907901400', 'L', 'Islam', '-', 'WNI', '', '', 'L.Sapran', 'Islam', 'Pegawai Swasta', 'Tini', 'Islam', 'Pegawai Swasta', 'Desa berarek Kec moyo hilir Sumbawa besar', 'Sumbawa besar', 'Nusa Tenggara Barat', null, null, '858c57a6f20fb890de772205116726bc', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520026', '12.8.349.74.75.0.5.0026', 'DFL1223B1201', 'DUL1223B1201', 'ZULFIKRI ALI ANSORI', 'paok pampang', '1993-04-04', 'paok pampang kec. sukamulia', 'Selong', 'Nusa Tenggara Barat', '087864900063', 'L', 'Islam', 'O', 'WNI', '', 'ansorifikri@gmail.com', 'H. kamal udin', 'Islam', 'Wiraswasta', 'hj. sa\'adah', 'Islam', 'Wiraswasta', 'paok pampang kec.sukamulia', 'Selong', 'Nusa Tenggara Barat', null, null, 'c97740d0b3b4f078d37d215918c3bf79', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520027', '12.8.349.74.75.0.5.0027', 'DFL1223B1202', 'DUL1223B1202', 'RYAN HEDYANTO PUTRA', 'Mataram', '1994-06-19', 'Jl. Pantai sire no 45 Grya pagutan indah', 'MATARAM', 'Nusa Tenggara Barat', '087864695677', 'L', 'Islam', 'B', 'WNI', '', 'ryanhedyantop@ymail.com', 'Ponidi harap', 'Islam', 'Pegawai Negeri Sipil', 'SAADIAH', 'Islam', 'Rumah Tangga', 'jl. pantai sire no 45', 'MATARAM', 'Nusa Tenggara Barat', null, null, '7103dbf2588b4d00628c3dba35b56ea4', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520028', '12.8.349.74.75.0.5.0028', 'DFL1223B1204', 'DUL1223B1204', 'MARTA DENI HIDAYATULLAH RAMDAN ', 'bengkel', '1993-03-03', 'bengkel utara ', 'MATARAM', 'Nusa Tenggara Barat', '087865806137', 'L', 'Islam', '-', 'WNI', '', '', 'abdul kadir jaelani', 'Islam', 'Lainnya', 'zaenab hidayah', 'Islam', 'Rumah Tangga', 'bengkel utara', 'MATARAM', 'Nusa Tenggara Barat', null, null, 'e77973df8846cfa68d3c18b4330cff95', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520029', '12.8.349.74.75.0.5.0029', 'DFL1223B1208', 'DUL1223B1208', 'AHMAD JUNAIDI', 'BUNSALAK - PRAYA - LOMBOK TENGAH', '1992-08-02', 'BUNSALAK ', 'PRAYA', 'Nusa Tenggara Barat', '082340509226', 'L', 'Islam', '-', 'WNI', '', '', 'H, AHMAD JUNAIDI', 'Islam', 'Petani', 'HJ. JUHAERIYAH', 'Islam', 'Petani', 'BUNSALAK - PRAYA - LOMBOK TENGAH', 'PRAYA', 'Nusa Tenggara Barat', null, null, '7957d87429f45bdc72acfe23a4b9a8ec', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520030', '12.8.349.74.75.0.5.0030', 'DFL1223B1210', 'DUL1223B1210', 'ARIP RAHMAN', 'kemulah jln. mareje', '1994-06-11', 'kemulah  jln. Mareje', 'praya', 'Nusa Tenggara Barat', '083129036302', 'L', 'Islam', 'O', 'WNI', '', 'ariep05@ymail.com', 'abdurrahman', 'Islam', 'Wiraswasta', 'sukuriah', 'Islam', 'Rumah Tangga', 'kemulah', 'praya', 'Nusa Tenggara Barat', null, null, 'a555e8ea6765b21dce1f6b3d259d59c2', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520031', '12.8.349.74.75.0.5.0031', 'DFL1223B1212', 'DUL1223B1212', 'DONI PUTRA PERTAMA', 'mantang', '1994-10-18', 'mantang', 'PRAYA', 'Nusa Tenggara Barat', '081907148160', 'L', 'Islam', '-', 'WNI', '', '', 'murahman', 'Islam', 'Petani', 'suhartini', 'Islam', 'Petani', 'mantang', 'PRAYA', 'Nusa Tenggara Barat', null, null, 'b021a4b39c2fa161c7e861e2d23b0365', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520032', '12.8.349.74.75.0.5.0032', 'DFL1223B1214', 'DUL1223B1214', 'SRI YUNITA ANGGRAENI', 'BUNSALAK - PRAYA - LOMBOK TENGAH', '1993-06-14', 'BUNSALAK', 'PRAYA', 'Nusa Tenggara Barat', '087864948765', 'P', 'Islam', '-', 'WNI', '', '', 'H. M. RAELAN SPD.SD', 'Islam', 'Pegawai Negeri Sipil', 'SUHAENI', 'Islam', 'Pegawai Negeri Sipil', 'BUNSALAK - PRAYA - LOMBOK TENGAH', 'PRAYA', 'Nusa Tenggara Barat', null, null, '3dddb47f0de605250ad65aff28bc6d01', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520033', '12.8.349.74.75.0.5.0033', 'DFL1223B1215', 'DUL1223B1215', 'TEDDY SETYA BUDI', 'Karya Pelita, Bengkulu', '1992-01-01', 'Jl. Pagesangan Indah XV No. 11 Pagesangan Indah Mataram', 'Mataram', 'Nusa Tenggara Barat', '087864522699', 'L', 'Islam', 'O', 'WNI', '', '', 'Tardi', 'Islam', 'Pegawai Swasta', 'Eros Rosita', 'Islam', 'Rumah Tangga', 'Jl. Pagesangan Indah XV No. 11 Pagesangan Indah Mataram', 'Mataram', 'Nusa Tenggara Barat', null, null, '8e3ba13ea95c54aae5c4944f0baa97ef', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520034', '12.8.349.74.75.0.5.0034', 'DFL1223B1180', 'DUL1223B1180', 'FERY ARIS APRIADI ', 'kuranji bangsal ', '1993-04-04', 'kuranji bangsal', 'Mataram', 'Nusa Tenggara Barat', '081907715854', 'L', 'Islam', 'O', 'WNI', '', '', 'h.abd.khalil haris', 'Islam', 'Wiraswasta', 'hj.fitriani', 'Islam', 'Rumah Tangga', 'kuranji bangsal', 'Mataram', 'Nusa Tenggara Barat', null, null, '28450515109e309a9fbe850306ca8af3', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520035', '12.8.349.74.75.0.5.0035', 'DFL1223B1179', 'DUL1223B1179', 'M. IFAN TAUFIK', 'GERENENG, 08 JUNI 1994', '1994-06-08', 'GERENENG', 'SAKRA TIMUR', 'Nusa Tenggara Barat', '', 'L', 'Islam', 'B', 'WNI', '', 'ofiec_jp@yahoo.com', 'aq. muliana wati', 'Islam', 'Petani', 'kasiah', 'Islam', 'Petani', 'gerintuk desa gereneng kec.sakra timur kab.lombok timur NTB', 'sakra timur', 'Kalimantan Barat', null, null, '7886341b1a9b18a213040f82453adb16', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520036', '12.8.349.74.75.0.5.0036', 'DFL1223B1178', 'DUL1223B1178', 'ANGGI KRESNA WIJAYA', ' dili tim-tim', '1994-08-04', 'ppn sumbawa besar', 'SUMBAWA BESAR', 'Nusa Tenggara Barat', '081909046834', 'L', 'Islam', '-', 'WNI', '', '', 'idrus', 'Islam', 'Wiraswasta', 'istiti', 'Islam', 'Wiraswasta', 'ppn sumbawa besar', 'Sumbawa Besar', 'Nusa Tenggara Barat', null, null, '31d721b705650b97cc5b21fdb71d1b82', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520037', '12.8.349.74.75.0.5.0037', 'DFL1223B1151', 'DUL1223B1151', 'ARDI RAHMAWAN', 'BIMA', '1993-06-15', 'SANTI', 'KOTA BIMA', 'Nusa Tenggara Barat', '087766962592', 'L', 'Islam', '-', 'WNI', '', '', 'H.ABDULLAH', 'Islam', 'Pegawai Negeri Sipil', 'HJ.ZUBAIDAH', 'Islam', 'Rumah Tangga', 'KOTA BIMA', 'KOTA BIMA', 'Nusa Tenggara Barat', null, null, 'e7cf10aba9175b907ee3086d93fdccb0', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520038', '12.8.349.74.75.0.5.0038', 'DFL1223B1153', 'DUL1223B1153', 'ALI IRWAN', 'Dasan Tapen', '1994-02-25', 'Dasan Tapen', 'Selong', 'Nusa Tenggara Barat', '081918287311', 'L', 'Islam', '-', 'WNI', '', 'aliirwan88@gmail.com', 'A. Mahnur', 'Islam', 'Petani', 'Mukarromah', 'Islam', 'Petani', 'Dasan Tapen', 'Selong', 'Nusa Tenggara Barat', null, null, 'ac147a3a026f3bca7d50bbe57093193f', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520039', '12.8.349.74.75.0.5.0039', 'DFL1223B1154', 'DUL1223B1154', 'HASBI HIJRAH', 'PUYAHAN', '1992-01-01', 'LEMBAR-PUYAHAN ', 'MATARAM', 'Nusa Tenggara Barat', '081805218544', 'L', 'Islam', '-', 'WNI', '', 'hasbyeking@yahoo.com', 'H.MUSTAKIM', 'Islam', 'Lainnya', 'MAHRAM', 'Islam', 'Lainnya', 'LEMBAR-PUAYAHAN', 'MATARAM', 'Nusa Tenggara Barat', null, null, 'bf78fef263d406e74b62e00fa9b98f6e', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520040', '12.8.349.74.75.0.5.0040', 'DFL1223B1156', 'DUL1223B1156', 'RIZQON LUTFI', 'Lepak', '1994-10-06', 'Lepak, Sakra Timur, Lombok Timur', 'Selong, Lombok timur', 'Nusa Tenggara Barat', '', 'L', 'Islam', '-', 'WNI', '', 'iconkimat@yahoo.com', 'M. Nurman', 'Islam', 'Petani', 'Hj. Siti Aisyah', 'Islam', 'Petani', 'Lepak, Sakra Timur, Lotim', 'Selong', 'Nusa Tenggara Barat', null, null, '776831280f6bbfdebdacf3432c69de87', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520041', '12.8.349.74.75.0.5.0041', 'DFL1223B1158', 'DUL1223B1158', 'MOH. SADAM HUSEN', 'desa beleka', '1995-01-08', 'desa beleka, kec. pratim', 'praya', 'Nusa Tenggara Barat', '087864570067', 'L', 'Islam', '-', 'WNI', '', '', 'saleh udin', 'Islam', 'Petani', 'ibu adam', 'Islam', 'Petani', 'desa beleka, dasan paoq', 'praya', 'Nusa Tenggara Barat', null, null, 'c2a166a2f9c49fd285e7ca40149d199f', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520042', '12.8.349.74.75.0.5.0042', 'DFL1223B1160', 'DUL1223B1160', 'FARLIN ANDRIAWAN', 'Kudung Paok', '1991-01-31', 'jln.raya mujur,praya timur', 'PRAYA', 'Nusa Tenggara Barat', '081907015090', 'L', 'Islam', 'AB', 'WNI', '', '', 'Ramli', 'Islam', 'Wiraswasta', 'Sulasmiati', 'Islam', 'Rumah Tangga', 'Jln. Raya mujur,prayatimur', 'praya itmur', 'Nusa Tenggara Barat', null, null, '3dfcca08d31da6b1da8de93ddd8aca99', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520043', '12.8.349.74.75.0.5.0043', 'DFL1223B1162', 'DUL1223B1162', 'I GEDE SUWANTARA', 'Sumbawa Besar', '1994-09-13', 'Brawijaya Regency No.34', 'Mataram', 'Nusa Tenggara Barat', '085253833351', 'L', 'Hindu', '-', 'WNI', '', '', 'I Putu Darba', 'Hindu', 'Wiraswasta', 'Ni Kadek Rosmawati', 'Hindu', 'Wiraswasta', 'Jln.Cendrawasih Gg.Merak Brang Biji', 'Sumbawa Besar', 'Nusa Tenggara Barat', null, null, '7b8a302e17fdb28e445206d7d4db3a33', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520044', '12.8.349.74.75.0.5.0044', 'DFL1223B1164', 'DUL1223B1164', 'SULAEMAN ALI RAHMAN', 'MATARAM ', '1994-04-30', 'JLN. KH. MANSYUR NO 1 RT 004 DASAN SARI', 'MATARAM', 'Nusa Tenggara Barat', '083129299594', 'L', 'Islam', '-', 'WNI', '', 'sulaeman.ali39@yahoo.com', 'NURAHMAN', 'Islam', 'Pegawai Negeri Sipil', 'ROKYAH', 'Islam', 'Rumah Tangga', 'JLN KH MANSYUR NO 1 RT 004 DASAN SARI', 'MATARAM', 'Nusa Tenggara Barat', null, null, 'feaa268309b3ab398ac62b8ce4153845', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520045', '12.8.349.74.75.0.5.0045', 'DFL1223B1170', 'DUL1223B1170', 'MUHAMAD FAISAL', 'nanga nae', '1993-07-29', 'labuan bajo', 'labuan bajo', 'Nusa Tenggara Timur', '085337753032', 'L', 'Islam', '-', 'WNI', '', '', 'MUHAMAD NATSIR', 'Islam', 'Wiraswasta', 'FATMA WATI', 'Islam', 'Wiraswasta', 'LABUAN BAJO', 'LABUAN BAJO', 'Nusa Tenggara Timur', null, null, '079a2d6181588d44fb723511a1aaa645', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520046', '12.8.349.74.75.0.5.0046', 'DFL1223B1172', 'DUL1223B1172', 'L.MUH.PAUZI', 'PELAMBIK', '1992-07-01', 'pelambik kec. jerowaru lotim', 'SELONGN LOMBOK TIMUR', 'Nusa Tenggara Barat', '081907846454', 'L', 'Islam', 'A', 'WNI', '', 'faozileleh@gmail.com', 'L.ISHAK', 'Islam', 'Petani', 'SAHLAM', 'Islam', 'Petani', 'pelambik kec. jerowaru lotim', 'SELONG LOMBOK TIMUR', 'Nusa Tenggara Barat', null, null, '4c1041d5e85b70593fa6ad57374033e0', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520047', '12.8.349.74.75.0.5.0047', 'DFL1223B1173', 'DUL1223B1173', 'MUHAMMAD WERANADE', 'malaysia', '1993-06-02', 'mt.beter desa.gunung rajak kec.sakra barat', 'Selong, Lombok timur', 'Nusa Tenggara Barat', '087863456553', 'L', 'Islam', '-', 'WNI', '', '', 'sahar', 'Islam', 'Wiraswasta', 'miriyati', 'Islam', 'Rumah Tangga', 'mt.beter desa,gunung rajak ', 'lombok timur', 'Nusa Tenggara Barat', null, null, '1751c5c20ad1cac8ec76fee3cddf1eaf', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520048', '12.8.349.74.75.0.5.0048', 'DFL1223B1174', 'DUL1223B1174', 'MUDAHAN', 'LINGKOK BUNUT,LEKOR ,JANAPRIA', '1993-10-05', 'LINGKOK BUNUT ,LEKOR ,JANAPRIA', 'PRAYA', 'Nusa Tenggara Barat', '081805471895', 'L', 'Islam', '-', 'WNI', '', '', 'H.MOH.SA\'ID', 'Islam', 'Petani', 'Nurhasanah', 'Islam', 'Petani', 'LINGKOK BUNUT ,LEKOR ,JANAPRIA', 'Praya', 'Nusa Tenggara Barat', null, null, 'bfa5a80e5b791008e39b3c9be7c4c845', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520049', '12.8.349.74.75.0.5.0049', 'DFL1223B1175', 'DUL1223B1175', 'I WAYAN DWI SUGITA ATMAJA', 'Mataram', '1993-12-19', 'jln. sultan kaharuddin Gg. Singaraja No. 20', 'MATARAM', 'Nusa Tenggara Barat', '083129512600', 'L', 'Hindu', 'O', 'WNI', '', 'atmapartydorks@rocketmail.com', 'I Wayan Suara', 'Hindu', 'Petani', 'Ni Nengah catri', 'Hindu', 'Rumah Tangga', 'jln. Sultan Kaharuddin Gg. Singaraja No.20', 'Mataram', 'Nusa Tenggara Barat', null, null, 'a660811d92dfc04a66f6e907a0fb0af7', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520050', '12.8.349.74.75.0.5.0050', 'DFL1223B1176', 'DUL1223B1176', 'DESI NURMARANI ASTI', 'masbagik', '1993-12-26', 'jurit', 'Masbagik', 'Nusa Tenggara Barat', '085337783330', 'P', 'Islam', 'B', 'WNI', '', 'bubutmbem766@gmail.com', 'H. Azhari', 'Islam', 'Wiraswasta', 'HJ. Hurniati', 'Islam', 'Wiraswasta', 'Jurit', 'Masbagik', 'Nusa Tenggara Barat', null, null, '7baa9c4e48e5f5ee9a8c200c8c6cfb2a', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520051', '12.8.349.74.75.0.5.0051', 'DFL1223B1150', 'DUL1223B1150', 'M. FUADDIN', 'BIMA', '1993-05-25', 'KOTA BIMA, SANTI JLN. IMAM BONJOL ', 'BIMA', 'Nusa Tenggara Barat', '087866755202', 'L', 'Islam', 'B', 'WNI', '', 'anarchy045@gmail.com', 'SYAFRUDDIN', 'Islam', 'Wiraswasta', 'HADIJAH', 'Islam', 'Rumah Tangga', 'KOTA BIMA', 'KOTA BIMA', 'Nusa Tenggara Barat', null, null, '2dd988e2851c6bbbba12942b33cbd7f2', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520052', '12.8.349.74.75.0.5.0052', 'DFL1223B1219', 'DUL1223B1219', 'SYAIFUL MUHLISIN AKBAR MZ', 'PANCOR LOTIM', '1994-05-10', 'PANCOR LOTIM', 'Selong, Lombok timur', 'Nusa Tenggara Barat', '081997985324', 'L', 'Islam', '-', 'WNI', '', '', 'Saifuddin Zuhri', 'Islam', 'Guru', 'Maryam', 'Islam', 'Lainnya', 'Pancor', 'Selong', 'Nusa Tenggara Barat', null, null, '26bb31e37baba2b9900a9a0e2d9a0312', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520053', '12.8.349.74.75.0.5.0053', 'DFL1223B1222', 'DUL1223B1222', 'ABDURRAHMAN', 'rempung ', '1993-09-14', 'rempung kec pringgasela lotim', 'masbagik', 'Nusa Tenggara Barat', '0878633333902', 'L', 'Islam', '-', 'WNI', '', '', 'zaid hasan bafadal', 'Islam', 'Wiraswasta', 'latifah', 'Islam', 'Wiraswasta', 'rempung kec masbagik lotim', 'masbagik', 'Nusa Tenggara Barat', null, null, 'ec8fe9af89030e9979b798cde9208063', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520054', '12.8.349.74.75.0.5.0054', 'DFL1223B1261', 'DUL1223B1261', 'LALU JAYENG RUSIANDI PUTRA', 'MATARAM', '1993-11-25', 'SETANGGOR, KECAMATAN. SUKAMULIA', 'SELONG', 'Nusa Tenggara Barat', '081997723166', 'L', 'Islam', 'B', 'WNI', '', 'champ_putra@yahoo.com', 'LALU AHLUSSUBANDI', 'Islam', 'Wiraswasta', 'BAIQ RUSTIHATI', 'Islam', 'Pegawai Negeri Sipil', 'SETANGGOR, KECAMATAN SUKAMULIA', 'SELONG', 'Nusa Tenggara Barat', null, null, '11a32bb5fa5b6a5cee1279ae5003b7f3', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520055', '12.8.349.74.75.0.5.0055', 'DFL1223B1262', 'DUL1223B1262', 'JUJUT KHAERIL ANAM', 'labuhan lombok, lombok timur', '1993-07-16', 'labuhan lombok, lombok timur', 'labuhan lombok, lombok timur', 'Nusa Tenggara Barat', '087864528052', 'L', 'Islam', 'AB', 'WNI', '', 'zjthunter@yahoo.com', 'hamrinudin', 'Islam', 'Pegawai Swasta', 'hilmiati', 'Islam', 'Rumah Tangga', 'labuhan lombok, lombok timur', 'labuhan lombok, lombok timur', 'Nusa Tenggara Barat', null, null, '41c124f260d4215f5f73fa06e2876b54', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520056', '12.8.349.74.75.0.5.0056', 'DFL1223B1263', 'DUL1223B1263', 'BAIQ NURWAISDDATI', 'praya', '1994-02-08', 'sampet desa ketare kec.pujut', 'praya', 'Nusa Tenggara Barat', '083129350246', 'P', 'Islam', 'B', 'WNI', '', 'datydathy@ymail.com', 'lalu nursaid', 'Islam', 'Wiraswasta', 'baiq laswandi', 'Islam', 'Guru', 'sampet desa ketare kec.pujut', 'praya', 'Nusa Tenggara Barat', null, null, '4ffd9f4d291c6201fdbde05a7e379a2a', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520057', '12.8.349.74.75.0.5.0057', 'DFL1223B1264', 'DUL1223B1264', 'SUGIAN', 'praya -lombok tengah', '1992-02-28', 'batunyala kecamatan praya tengah', 'PRAYA', 'Nusa Tenggara Barat', '087865805172', 'L', 'Islam', '-', 'WNI', '', '', 'M.RIDWAN', 'Islam', 'Pegawai Negeri Sipil', 'SAMIAH', 'Islam', 'Rumah Tangga', 'batunyala kecamatan praya tengah', 'PRAYA', 'Nusa Tenggara Barat', null, null, '55f23721f293a302def1320b6c8a6151', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520058', '12.8.349.74.75.0.5.0058', 'DFL1223B1266', 'DUL1223B1266', 'HULAIMI AZHAR KARIM', 'Lombok Barat', '1993-11-09', 'Jln. Raya Sekotong', 'LOMBOK BARAT', 'Nusa Tenggara Barat', '087864024320', 'L', 'Islam', '-', 'WNI', '', 'azharimie@ymail.com', 'M. Nasirun', 'Islam', 'Wiraswasta', 'Hadijah', 'Islam', 'Wiraswasta', 'Jln. Raya Sekotong', 'Lombok Barat', 'Nusa Tenggara Barat', null, null, 'c3521d8b4afd3d1a1430e855a27281ed', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520059', '12.8.349.74.75.0.5.0059', 'DFL1223B1267', 'DUL1223B1267', 'BAHA`UDIN', 'Kekait', '1994-11-20', 'Jln. Tanjung KM.8 Desa kekait', 'MATARAM', 'Nusa Tenggara Barat', '087765051491', 'L', 'Islam', '-', 'WNI', '', '', 'H. Akmaludin', 'Islam', 'Petani', 'Munawarah', 'Islam', 'Petani', 'Desa Kekait, Kec. Gunungsari', 'MATARAM', 'Nusa Tenggara Barat', null, null, 'a02cddce523b0397eb3aacc76a6a4b43', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520060', '12.8.349.74.75.0.5.0060', 'DFL1223B1272', 'DUL1223B1272', 'MUHAMMAD RABDIN', 'Tarlawi', '1993-12-29', 'Tarlawi, kec.wawo kab bima', 'BIMA', 'Nusa Tenggara Barat', '085339622756', 'L', 'Islam', '-', 'WNI', '', '', 'Muhamad Yusuf', 'Islam', 'Pegawai Negeri Sipil', 'St Zaenab', 'Islam', 'Rumah Tangga', 'Tarlawi kec.wawo kab .bima', 'Bima', 'Nusa Tenggara Barat', null, null, '3d47d007d1bd7523dcc95cb140175271', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520061', '12.8.349.74.75.0.5.0061', 'DFL1223B1273', 'DUL1223B1273', 'RUSDIANTO', 'Dompu', '1993-10-29', 'kelurahan bali 1', 'Dompu', 'Nusa Tenggara Barat', '087766515030', 'L', 'Islam', '-', 'WNI', '', '', 'M. sarailah', 'Islam', 'Petani', 'Timo', 'Islam', 'Rumah Tangga', 'Bali 1 Dompu', 'Dompu', 'Nusa Tenggara Barat', null, null, 'fdb91c02683d7e30bbad9fb117bff2d0', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520062', '12.8.349.74.75.0.5.0062', 'DFL1223B1275', 'DUL1223B1275', 'LALU AHMAD TABRANI SALIM', 'Mataram', '1994-02-14', 'jln Ahmad Yani Muhajirin Kec. Narmada LOBAR', 'Narmada', 'Nusa Tenggara Barat', '081805210090', 'L', 'Islam', 'B', 'WNI', '', '', 'H.Lalu Ruba\'i', 'Islam', 'Lainnya', 'Hj.Zaitun', 'Islam', 'Wiraswasta', 'Ahmad Yani Muhajirin Kec. Narmada LOBAR', 'Narmada', 'Nusa Tenggara Barat', null, null, '86425b160b446a40890a4883eee63717', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520063', '12.8.349.74.75.0.5.0063', 'DFL1223B1276', 'DUL1223B1276', 'LALU RAKHMAT RIVANDANI', 'Mataram', '1990-04-08', 'sukadana Kec.Terara LOTIM', 'Terara', 'Nusa Tenggara Barat', '081997766715', 'L', 'Islam', 'O', 'WNI', 'PT.JEMBATAN BARU GROUP', 'laluivankiedikiller@ymail.com', 'lalu yusi', 'Islam', 'Guru', 'baiq rohiyah', 'Islam', 'Rumah Tangga', 'sukadana', 'terara', 'Nusa Tenggara Barat', null, null, '2ac437bdd9d9b9c58892503436ffe743', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520064', '12.8.349.74.75.0.5.0064', 'DFL1223B1279', 'DUL1223B1279', 'IMAM AL ASSAOQI', 'MATARAM', '1992-12-13', 'Dasan Kolo Jempong Baru', 'Mataram', 'Nusa Tenggara Barat', '081907265166', 'L', 'Islam', 'O', 'WNI', '', 'imam_al_assaoqi@yahoo.com', 'MARZUKI', 'Islam', 'Wiraswasta', 'hudriyah', 'Islam', 'Wiraswasta', 'jln. gajah mada, mataram', 'Mataram', 'Nusa Tenggara Barat', null, null, '286e71f3b90c272c4ac404fb5f80fba1', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520065', '12.8.349.74.75.0.5.0065', 'DFL1223B1286', 'DUL1223B1286', 'I DEWA MADE JAYA SUARDITHA', 'Mataram', '1988-05-01', 'jln.nangka gang03 no.3', 'Mataram', 'Nusa Tenggara Barat', '081917444689', 'L', 'Hindu', 'O', 'WNI', '', 'gde_social@yahoo.com', 'I Dewa Nyoman Astaqwa', 'Hindu', 'Pegawai Negeri Sipil', 'Putu Sari Dewi', 'Hindu', 'Rumah Tangga', 'Jln.Pagesangan Indah 8 no.8', 'Mataram', 'Nusa Tenggara Barat', null, null, '6ca683e8fd7a5d57b65270658922b05c', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520066', '12.8.349.74.75.0.5.0066', 'DFL1223B1288', 'DUL1223B1288', 'I GEDE BAGUS LINGGA', 'Mataram', '1995-06-23', 'JL. Cendrawasih no. 8', 'Mataram', 'Nusa Tenggara Barat', '0818366505', 'L', 'Hindu', 'O', 'WNI', '', 'flewfaraway@yahoo.com', 'I Komang Sathya Budi', 'Hindu', 'Wiraswasta', 'G.A.A Ketut Tirtawati', 'Hindu', 'Wiraswasta', 'JL. Cendrawasih no. 8', 'Mataram', 'Nusa Tenggara Barat', null, null, '16ad46e20dc74469a00b6798d475ebeb', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520067', '12.8.349.74.75.0.5.0067', 'DFL1223B1289', 'DUL1223B1289', 'MIFTAHUL ARRIYAN', 'BEBIDAS PAGESANGAN ', '1994-09-07', 'BEBIDAS PAGESANGAN ', 'MATARAM', 'Nusa Tenggara Barat', '087864932117', 'L', 'Islam', '-', 'WNI', '', '', 'ABDURRAHMAN', 'Islam', 'Wiraswasta', 'MUNIRAH', 'Islam', 'Rumah Tangga', 'lingkunagan BEBIDAS PAGESANGAN jln. Guru bankol', 'MATARAM', 'Nusa Tenggara Barat', null, null, '39468032cd0fbd3be6681337d52f46b7', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520068', '12.8.349.74.75.0.5.0068', 'DFL1223B1260', 'DUL1223B1260', 'HERMAN EFENDI', 'dasan jati', '1993-12-12', 'dasan gawah desa darmasari', 'selong', 'Nusa Tenggara Barat', '087863452193', 'L', 'Islam', '-', 'WNI', '', 'hermanefendy90@ymail.com', 'mahrup', 'Islam', 'Petani', 'muliati', 'Islam', 'Petani', 'dasan gawah desa darmasari', 'selong', 'Nusa Tenggara Barat', null, null, 'e7822b9cab83bdc1ef6b4e3b29eda7a7', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520069', '12.8.349.74.75.0.5.0069', 'DFL1223B1257', 'DUL1223B1257', 'MUHAMMAD ZAINUL MUSLIH QUDSI', 'kabar', '1995-02-01', 'kabar ', 'Selong, Lombok timur', 'Nusa Tenggara Barat', '085337771377', 'L', 'Islam', '-', 'WNI', '', 'enonkslanker@yahoo.co.id', 'h. muslim maqbul', 'Islam', 'Wiraswasta', 'qudusiah', 'Islam', 'Rumah Tangga', 'desa kabar kecamatan sakra lombok timur', 'selong', 'Nusa Tenggara Barat', null, null, 'fc1fa9bc1c47485b9d149e95c4c5efd8', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520070', '12.8.349.74.75.0.5.0070', 'DFL1223B1253', 'DUL1223B1253', 'BAIQ ELA NOPITA LESTARI', 'WAJAGESENG ', '1993-09-21', 'dusun wajageseng desa wajageseng kecamatan kopang ', 'PRAYA', 'Nusa Tenggara Barat', '087864968067', 'P', 'Islam', '-', 'WNI', '', 'nami_ella@yahoo.co.id', 'lalu sri gede', 'Islam', 'Wiraswasta', 'hadijah', 'Islam', 'Rumah Tangga', 'dusun wajageseng desa wajageseng ', 'PRAYA', 'Nusa Tenggara Barat', null, null, '5ac257a9b310968d68795b9490af3e92', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520071', '12.8.349.74.75.0.5.0071', 'DFL1223B1224', 'DUL1223B1224', 'LILI SAPUTRI', 'tepas', '1994-03-07', 'dusun  genjar rt 02 rw 01 desa tepas kecamatam brang rea sumbawa barat', 'taliwang', 'Nusa Tenggara Barat', '081935924789', 'P', 'Islam', '-', 'WNI', '', 'lilyesaputri@yahoo.com', 'M.amin', 'Islam', 'Petani', 'RATNA', 'Islam', 'Petani', 'tepas kecamatam brang rea sumbawa bara', 'taliwang', 'Nusa Tenggara Barat', null, null, '039bbd6bf148d64ab865430b862aecf2', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520072', '12.8.349.74.75.0.5.0072', 'DFL1223B1227', 'DUL1223B1227', 'KHAIRIL AKBAR', 'EMPANG', '1995-05-01', 'RT 004/004 BUNGA EJA, EMPANG', 'Sumbawa Besar', 'Nusa Tenggara Barat', '081909062526', 'L', 'Islam', 'AB', 'WNI', '', '', 'Saharuddin', 'Islam', 'Pegawai Negeri Sipil', 'Mariam', 'Islam', 'Rumah Tangga', 'RT 004/004 BUNGA EJA, EMPANG', 'Sumbawa Besar', 'Nusa Tenggara Barat', null, null, 'b5313e4084eee4cc6a7dae694008f991', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520073', '12.8.349.74.75.0.5.0073', 'DFL1223B1228', 'DUL1223B1228', 'I NENGAH AGUS YOGIARDITHA', 'Mataram', '1994-05-01', 'Jln. hoscokroaminoto.gg.akasia no.9 Cemara', 'MATARAM', 'Nusa Tenggara Barat', '087864323335', 'L', 'Hindu', 'AB', 'WNI', '', 'Yogisvip@rocketmail.com', 'I Wayan sukartha', 'Hindu', 'Pegawai Negeri Sipil', 'I Wayan tusti', 'Hindu', 'Rumah Tangga', 'Cemara', 'Mataram', 'Nusa Tenggara Barat', null, null, '660ef5aa8dbc8a03b8a8ed12c345e84d', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520074', '12.8.349.74.75.0.5.0074', 'DFL1223B1229', 'DUL1223B1229', 'UMARUDDIN S', 'Larantuka', '1994-02-13', 'taman kapitan,gang alas no 7B Ampenan Selatan', 'Mataram', 'Nusa Tenggara Barat', '085239446924', 'L', 'Islam', 'AB', 'WNI', '', 'rockstar_rudy@yahoo.com', 'Abdurachman Saleh', 'Islam', 'Wiraswasta', 'Fatimah B. Lewar', 'Islam', 'Pegawai Negeri Sipil', 'Larantuka-Flores Timur', 'Larantuka', 'Nusa Tenggara Timur', null, null, 'ed25e88981d44220b22b3d4222401e7c', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520075', '12.8.349.74.75.0.5.0075', 'DFL1223B1231', 'DUL1223B1231', 'CITRA AULIA WULANDARI', 'BAJUR', '1994-09-16', 'BAJUR KALI JAGA DESA BAJUR  KEC. LABUAPI', 'MATARAM', 'Nusa Tenggara Barat', '087864918065', 'P', 'Islam', 'AB', 'WNI', '', '', 'MUSLIHUL AMYAD ', 'Islam', 'Pegawai Negeri Sipil', 'YULIATIN', 'Islam', 'Pegawai Swasta', 'BAJUR KEC. LABUAPI', 'LOBAR', 'Nusa Tenggara Barat', null, null, '751914b0f12a133d53e476e4d00c974e', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520076', '12.8.349.74.75.0.5.0076', 'DFL1223B1234', 'DUL1223B1234', 'WISNU MAULANA', 'MATARAM', '1994-07-15', 'Dasan cermen timur', 'MATARAM', 'Nusa Tenggara Barat', '087864075729', 'L', 'Islam', 'O', 'WNI', '', 'rikudo_wisnu@yahoo.com', 'Anang Santoso', 'Islam', 'Wiraswasta', 'Siti Hawa', 'Islam', 'Rumah Tangga', 'Dasan cermen timur', 'MATARAM', 'Nusa Tenggara Barat', null, null, '6797922b593e486e79f4b61182501d19', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520077', '12.8.349.74.75.0.5.0077', 'DFL1223B1235', 'DUL1223B1235', 'ERVAN ATRYANSYAH', 'Dompu', '1993-09-24', 'BTn Griya Seruni Permai Blok D no. 30', 'Maataram', 'Nusa Tenggara Barat', '087766555663', 'L', 'Islam', 'O', 'WNI', '', '', 'H.Imran', 'Islam', 'Pegawai Negeri Sipil', 'Hj.Ratna', 'Islam', 'Wiraswasta', 'Desa Maatua Kec.woja Kab. Dompu', 'Dompu', 'Nusa Tenggara Barat', null, null, '6e02b1bd50038185e5a52e1d7c0fa5af', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520078', '12.8.349.74.75.0.5.0078', 'DFL1223B1238', 'DUL1223B1238', 'ARIVALENTA CHRISNA PUTRA', 'MATARAM', '1993-11-15', 'jJL.seganteng indah V blok A/11', 'MATARAM', 'Nusa Tenggara Barat', '081907809908', 'L', 'Kristen', '-', 'WNI', '', '', 'Drs. HERRY ARINTO PUTRO', 'Kristen', 'Pegawai Negeri Sipil', 'MARIA SAPTATI', 'Kristen', 'Pegawai Negeri Sipil', 'JL. SEGANTENG INDAH V A/11', 'MATARAM', 'Nusa Tenggara Barat', null, null, '06c382794667cddc09d6eb3c373fc373', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520079', '12.8.349.74.75.0.5.0079', 'DFL1223B1240', 'DUL1223B1240', 'HULAIMI FADLAN', 'Gontoran', '1994-01-28', 'Jln. Gontoran Bertais, Gontoran Lingsar', 'Gerung', 'Nusa Tenggara Barat', '', 'L', 'Islam', '-', 'WNI', '', '', 'Mohaimi', 'Islam', 'Lainnya', 'Anim', 'Islam', 'Rumah Tangga', 'Jln. Gontoran Bertais, Gontoran Lingsar', 'Gerung', 'Nusa Tenggara Barat', null, null, '45aa89d521e2b5a54be28d2a61539117', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520080', '12.8.349.74.75.0.5.0080', 'DFL1223B1241', 'DUL1223B1241', 'LALU DWI ANDRIAWAN', 'darmaji', '1994-09-30', 'darmaji', 'PRAYA', 'Nusa Tenggara Barat', '', 'L', 'Islam', '-', 'WNI', '', '', 'lalu mungguh', 'Islam', 'Pegawai Negeri Sipil', 'baiq winarni', 'Islam', 'Guru', 'darmaji', 'PRAYA', 'Nusa Tenggara Barat', null, null, '8a58ce291905bc660328b2eff776adf9', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520081', '12.8.349.74.75.0.5.0081', 'DFL1223B1242', 'DUL1223B1242', 'ERIK APRIANTO', 'ampenan', '1993-04-04', 'jln. ragi genap gg..anggrek no.46 ampenan', 'MATARAM', 'Nusa Tenggara Barat', '087865078255', 'L', 'Islam', '-', 'WNI', '', '', 'siswanto', 'Islam', 'TNI/Polri', 'lilis suryani', 'Islam', 'Rumah Tangga', 'jln.ragi genap gg.anggrek no.46', 'MATARAM', 'Nusa Tenggara Barat', null, null, '2d1d21eaa791c2bdd88a59c1e14f0d9d', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520082', '12.8.349.74.75.0.5.0082', 'DFL1223B1243', 'DUL1223B1243', 'HARDIAN ALI SYAHBANA', 'Selong', '1994-02-02', 'rantok mas', 'Sakra', 'Nusa Tenggara Barat', '087854822334', 'L', 'Islam', '-', 'WNI', '', '', 'Burhanudin', 'Islam', 'Pegawai Swasta', 'Sri handriyati', 'Islam', 'Pegawai Negeri Sipil', 'rantok mas', 'Selong.Lombok Timur', 'Nusa Tenggara Barat', null, null, '364d7dcda9870c62df59c8e86624390a', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520083', '12.8.349.74.75.0.5.0083', 'DFL1223B1245', 'DUL1223B1245', 'SULMI FIRMANSYAH', 'LAPE', '1991-05-28', 'LAPE,BUKIT TINGGI,', 'SUMBAWA BESAR', 'Nusa Tenggara Barat', '', 'L', 'Islam', 'A', 'WNI', '', '', 'ALATIF ACO', 'Islam', 'Petani', 'HAFSA', 'Islam', 'Rumah Tangga', 'lape', 'sumbawa besar', 'Nusa Tenggara Barat', null, null, '810340e1ed6c3f951b24c3fca0147a8b', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520084', '12.8.349.74.75.0.5.0084', 'DFL1223B1250', 'DUL1223B1250', 'I NGH AGUS SUDIATMIKA', 'mataram', '1993-08-24', 'krg tangkeban', 'cakranegara', 'Nusa Tenggara Barat', '087765126007', 'L', 'Hindu', '-', 'WNI', '', '', 'i nyoman ardana', 'Hindu', 'Wiraswasta', 'ni wayan sri murti', 'Hindu', 'Guru', 'dusun menggala,desa pemenang, KLU', 'Tanjung, kabupaten lombok utara', 'Nusa Tenggara Barat', null, null, 'b1324844071a59400bbb77bf7a742302', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520085', '12.8.349.74.75.0.5.0085', 'DFO1223B1051', 'DUO1223B1051', 'THOMY ALGIFARI', 'MATARAM', '1993-12-28', 'JL. BAMBU RUNCING NO.3A AMPENAN', 'MATARAM', 'Nusa Tenggara Barat', '087765234309', 'L', 'Islam', '-', 'WNI', '', 'thomy_algi@yahoo.com', 'DRS.H.MOH.SALEH AREKA', 'Islam', 'Pegawai Negeri Sipil', 'H.BQ.HANNAH', 'Islam', 'Rumah Tangga', 'JL. BAMBU RUNCING NO.3A AMPENAN', 'MATARAM', 'Nusa Tenggara Barat', null, null, '48123cac39fc99e70872fdcea3d434ae', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520086', '12.8.349.74.75.0.5.0086', 'DFL1223B1148', 'DUL1223B1148', 'CANDRA ADE ASTRA', 'SELOTO, TALIWANG, SUMAWA BARAT', '1994-04-24', 'SELOTO, RT 01, RW 01, KECAMATAN TALIWANG, SUMBAWA BARAT', 'TALIWANG', 'Nusa Tenggara Barat', '087863571254', 'L', 'Islam', '-', 'WNI', '', '', 'ABDUL WAHAB', 'Islam', 'Pegawai Negeri Sipil', 'SITI HAWA', 'Islam', 'Rumah Tangga', 'SELOTO RT 01 RW 01 DESA SELOTO KECAMATAN TALIWANG SUMBAWA BARAT', 'TALIWANG', 'Nusa Tenggara Barat', null, null, 'e81d93907c3f242d0b90d27971456e1e', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520087', '12.8.349.74.75.0.5.0087', 'DFL1223B1020', 'DUL1223B1020', 'LL. ARIOKI SETIADI', 'MASBAGIK', '1993-10-23', 'KAMPUNG PEDALEMAN, DESA MASBAGIK UTARA, KECAMATAN MASBAGIK', 'SELONG', 'Nusa Tenggara Barat', '081997723873', 'L', 'Islam', 'O', 'WNI', '', '', 'lalun armidi', 'Islam', 'Wiraswasta', 'sri wahyuni ', 'Islam', 'Lainnya', 'kampung pedaleman, desa masbagik utara, kecamatan masbagik ', 'selong', 'Nusa Tenggara Barat', null, null, '90264b3d41d26affc85361aa4c843673', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520088', '12.8.349.74.75.0.5.0088', 'DFL1223B1045', 'DUL1223B1045', 'WIDYA MELLI ANGGRAINI', 'Sumbawa Besar', '1994-05-09', 'Desa Uma Beringin RT.001, RW.01 ', 'Sumbawa', 'Nusa Tenggara Barat', '087863952073', 'P', 'Islam', '-', 'WNI', '', '', 'M. Nawawi', 'Islam', 'Petani', 'Radiyatollah', 'Islam', 'Rumah Tangga', 'Desa Padesa RT.01 Rw.01  Kec. Lantung', 'Sumbawa Besar', 'Nusa Tenggara Barat', null, null, '753e269c9173d4f915c84736d8e00a9f', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520089', '12.8.349.74.75.0.5.0089', 'DFL1223B1049', 'DUL1223B1049', 'I KOMANG YOSI WARDIKA VALINTINUS', 'Karangasem', '1994-02-14', 'Jln pejanggik gang. XI A no. 67B', 'MATARAM', 'Nusa Tenggara Barat', '085738149887', 'L', 'Hindu', 'O', 'WNI', '', 'yosiwardika@gmail.com', 'I Komang Suardika', 'Hindu', 'Petani', 'Ni Ketut Dewi', 'Hindu', 'Pegawai Swasta', 'Ds. Bias Karangasem', 'AMLAPURA', 'Bali', null, null, 'ebfe1ec0de931b98b32a50738a4a1eae', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520090', '12.8.349.74.75.0.5.0090', 'DFL1223B1051', 'DUL1223B1051', 'AHMAD HARIRI', 'Setiling, 10 Oktober 1992', '1992-10-10', 'Setiling', 'Aik bukaq', 'Nusa Tenggara Barat', '08175780400', 'L', 'Islam', '-', 'WNI', 'MASTER Computer', '', 'AHMAD HUMAIDI', 'Islam', 'Pegawai Negeri Sipil', 'ROHANA', 'Islam', 'Lainnya', 'Setiling, kecamatan batukliang utara', 'Praya', 'Nusa Tenggara Barat', null, null, '51207a4468f32a82bfe6a5492543eb23', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520091', '12.8.349.74.75.0.5.0091', 'DFL1223B1052', 'DUL1223B1052', 'ROMY IDHAM PRATAMA', 'plampang', '1991-06-23', 'plampang', 'SUMBAWA BESAR', 'Nusa Tenggara Barat', '081999023220', 'L', 'Islam', '-', 'WNI', '', '', 'M.GUNTUR', 'Islam', 'Petani', 'DIDA', 'Islam', 'Rumah Tangga', 'PLAMPANG', 'SUMBAWA BESAR', 'Nusa Tenggara Barat', null, null, 'a03b019bdfdb5ed0ae0d1e02d66d713f', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520092', '12.8.349.74.75.0.5.0092', 'DFL1223B1053', 'DUL1223B1053', 'ZULKARNAIN', 'Mamben Lauk', '1994-04-02', 'Orong Rantek', 'SELONG', 'Nusa Tenggara Barat', '087864889081', 'L', 'Islam', '-', 'WNI', '', '', 'HARMAIN', 'Islam', 'Petani', 'FAOZIAH', 'Islam', 'Rumah Tangga', 'Orong Rantek', 'SELONG', 'Nusa Tenggara Barat', null, null, 'b760f56011b1937544b02e7953c1733a', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520093', '12.8.349.74.75.0.5.0093', 'DFL1223B1057', 'DUL1223B1057', 'RIZAL HAKIKY', 'sweta cakranegara', '1994-04-06', 'sweta', 'Mataram', 'Nusa Tenggara Barat', '083129605737', 'L', 'Islam', '-', 'WNI', '', '', 'satriawan', 'Islam', 'Pegawai Swasta', 'sri astuti', 'Islam', 'Rumah Tangga', 'sweta', 'Mataram', 'Nusa Tenggara Barat', null, null, 'ede6e58a418d740e87767ae9a83163de', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520094', '12.8.349.74.75.0.5.0094', 'DFL1223B1058', 'DUL1223B1058', 'ZAINUL ISLAM', 'PANCOR LOTIM', '1992-10-15', 'PANCOR LOTIM', 'PANCOR', 'Nusa Tenggara Barat', '085339977434', 'L', 'Islam', '-', 'WNI', '', '', 'Nasrun', 'Islam', 'Pegawai Negeri Sipil', 'siti kamariah', 'Islam', 'Rumah Tangga', 'pancor', 'pancor', 'Nusa Tenggara Barat', null, null, '1d475963a52a884d985c900bf1fbbb38', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520095', '12.8.349.74.75.0.5.0095', 'DFL1223B1061', 'DUL1223B1061', 'ARIF MULKIAN YUDIANTARA', 'mataram', '1994-07-27', 'jln.kembung lingkungan bugis ampenan', 'Mataram', 'Nusa Tenggara Barat', '081803704797', 'L', 'Islam', 'O', 'WNI', '', 'arifmulkianyudiantara@yahoo.com', 'mulyadi', 'Islam', 'Pegawai Swasta', 'sri yudiawati', 'Islam', 'Pegawai Swasta', 'jln kembung lingkungan bugis ampenan', 'Mataram', 'Nusa Tenggara Barat', null, null, 'f1a7a9abb4843416451a5a5a6ad777b0', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520096', '12.8.349.74.75.0.5.0096', 'DFL1223B1064', 'DUL1223B1064', 'AHZAN KHAHMIR', 'mataram', '1994-11-11', 'jln.Banda gg. mawar no.7 ampenan', 'Mataram', 'Nusa Tenggara Barat', '087864437124', 'L', 'Islam', 'O', 'WNI', '', 'tarayudian@yahoo.com', 'Maryono Atmojo', 'Islam', 'Pegawai Negeri Sipil', 'Alm. Surya Wati', 'Islam', 'Rumah Tangga', 'Jl.banda gg. mawar no.7 ampenan', 'Mataram', 'Nusa Tenggara Barat', null, null, 'f360ea27da29ddc1345d6039e45d0340', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520097', '12.8.349.74.75.0.5.0097', 'DFL1223B1066', 'DUL1223B1066', 'M.KHAIRIL ANAM', 'Paok Tawah', '1991-04-05', 'Paok Tawah Desa bunut baok kecamatan praya', 'Praya', 'Nusa Tenggara Barat', '085238456773', 'L', 'Islam', '-', 'WNI', '', '', 'H. Ahmad Mustafa B.A', 'Islam', 'Lainnya', 'Hj. Aisah', 'Islam', 'Rumah Tangga', 'Paok T awah Desa bunut baok kecamatan praya', 'praya', 'Nusa Tenggara Barat', null, null, 'a24863b73fc0e5a4a5b8e12ccd7ce5b6', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520098', '12.8.349.74.75.0.5.0098', 'DFL1223B1067', 'DUL1223B1067', 'AHMAD MUHAR DIAN LASMITA', 'SELAGALAS', '1994-06-06', 'SINTUNG, KEC. PRINGGARATA', 'MATARAM', 'Nusa Tenggara Barat', '+6287866866694', 'L', 'Islam', '-', 'WNI', '', 'ardiantasisgo@gmail.com', 'MURTAZAM, SP.D', 'Islam', 'Guru', 'HOLMINAH', 'Islam', 'Rumah Tangga', 'SINTUNG. KEC. PRINGGARATA', 'MATARAM', 'Nusa Tenggara Barat', null, null, '03a8bdf7ebe20ca3660dece3fc805584', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520099', '12.8.349.74.75.0.5.0099', 'DFL1223B1068', 'DUL1223B1068', 'LALU PURWANDA BAGUS WILMAN', 'gunung gundil', '1994-08-14', 'gununggundil, jembatan kembar kecamatan lembar', 'mataram', 'Nusa Tenggara Barat', '087864975452', 'L', 'Islam', 'B', 'WNI', '', 'wilmanbagus@gmail.com', 'Lalu mustiman yusuf', 'Islam', 'Pegawai Negeri Sipil', 'baiq darwili', 'Islam', 'Lainnya', 'gununggundil, jembatan kembar kecamatan lembar', 'lembar', 'Nusa Tenggara Barat', null, null, '3d95bddd79bc34ea1fd6f2604970bdcd', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520100', '12.8.349.74.75.0.5.0100', 'DFL1223B1070', 'DUL1223B1070', 'KIKI RIZKI', 'Sumbawa Besar', '1994-04-07', 'Dusun Buin Pandan', 'Sumbawa Besar', 'Nusa Tenggara Barat', '087863601118', 'L', 'Islam', 'O', 'WNI', '', 'allinski@yahoo.co.id', 'Ruslan Abdul Gani', 'Islam', 'Wiraswasta', 'Mandari Mustafa', 'Islam', 'Wiraswasta', 'Dusun Buin Pandan', 'Sumbawa Besar', 'Nusa Tenggara Barat', null, null, 'c122bec86215c24722307c29ea7d0b9f', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520101', '12.8.349.74.75.0.5.0101', 'DFL1223B1075', 'DUL1223B1075', 'SARNAWATI', 'emang', '1993-07-16', 'emang', 'Sumbawa Besar', 'Nusa Tenggara Barat', '081915912276', 'P', 'Islam', 'B', 'WNI', '', 'nanditaarna@yahoo.co.id', 'muhammad', 'Islam', 'Petani', 'siti hawa', 'Islam', 'Petani', 'emang,lunyuk', 'Sumbawa Besar', 'Nusa Tenggara Barat', null, null, 'b63b4cd5b1ce512e603f5721f607625e', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520102', '12.8.349.74.75.0.5.0102', 'DFL1223B1078', 'DUL1223B1078', 'L.NANDA CAHAYA ARDI', 'wanasaba/lotim,07-02-1992', '1992-02-07', 'wanasaba', 'lombok timur', 'Nusa Tenggara Barat', '083129611460', 'L', 'Islam', '-', 'WNI', '', '', 'L.suptandar', 'Islam', 'Petani', 'sumiati', 'Islam', 'Petani', 'lombok timur,wanasaba', 'NTB', 'Nusa Tenggara Barat', null, null, '0e4e0435064cd86bcfb8f76dfff2a445', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520103', '12.8.349.74.75.0.5.0103', 'DFL1223B1083', 'DUL1223B1083', 'RISA YULINDA', 'batu lumbung', '1994-07-25', 'wajageseng', 'mataram', 'Nusa Tenggara Barat', '087864095549', 'P', 'Islam', '-', 'WNI', '', 'llindooth@yahoo.com', 'H.Muhsan', 'Islam', 'Pegawai Negeri Sipil', 'Hj.Nuriunzilah', 'Islam', 'Rumah Tangga', 'wajageseng', 'Mataram', 'Nusa Tenggara Barat', null, null, '734499697b4f23aff318e8b21ab890ed', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520104', '12.8.349.74.75.0.5.0104', 'DFL1223B1043', 'DUL1223B1043', 'TARMIZI TAHIR', 'montongbangle, ', '1994-12-31', 'montongbangle', 'praya', 'Nusa Tenggara Barat', '087865534232', 'L', 'Islam', '-', 'WNI', '', '', 'payudin', 'Islam', 'Petani', 'rusmawati', 'Islam', 'Petani', 'montongbangle', 'praya', 'Nusa Tenggara Barat', null, null, '988f13cdb196a30baa1043cc21b8bdf5', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520105', '12.8.349.74.75.0.5.0105', 'DFL1223B1041', 'DUL1223B1041', 'MUHAMMAD MAHZAN', 'Desa Dasan Tapen Kec.Gerung Kab,Lobar', '1993-09-11', 'Desa Dasan Tapen Kec.Gerung', 'Gerung-Lombok Barat', 'Nusa Tenggara Barat', '081805224866', 'L', 'Islam', '-', 'WNI', '', '', 'Fauzan', 'Islam', 'Wiraswasta', 'Nikmah', 'Islam', 'Rumah Tangga', 'Desa Dasan Tapen Kec.Gerung Kab.Lobar ', 'Gerung-Lombok Barat', 'Nusa Tenggara Barat', null, null, '714068c81e69015ffb3b0ba890930a74', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520106', '12.8.349.74.75.0.5.0106', 'DFL1223B1039', 'DUL1223B1039', 'MUHAMAD AZWAR', 'BENGKEL', '1993-10-18', 'BENGKEL ', 'LOMBOK BARAT', 'Nusa Tenggara Barat', '081933149514', 'L', 'Islam', '-', 'WNI', ' ', 'azwar_facebook@yahoo.com', 'JAMHUR', 'Islam', 'Wiraswasta', 'SENI', 'Islam', 'Rumah Tangga', 'BENGKEL ', 'LOMBOK BARAT', 'Nusa Tenggara Barat', null, null, '84fdd575c8272207ec12e03436bac9ff', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520107', '12.8.349.74.75.0.5.0107', 'DFL1223B1019', 'DUL1223B1019', 'MUHAMAD IRWAN SURUZI', 'SELONG', '1994-01-18', 'SELONG LOMBOK TIMUR', 'SELONG', 'Nusa Tenggara Barat', '087763145118', 'L', 'Islam', 'B', 'WNI', '', 'irwansuruji@yahoo.co.id', 'BURHANUDIN', 'Islam', 'Wiraswasta', 'MAKNAH', 'Islam', 'Rumah Tangga', 'SELONG LOMBOK TIMUR', 'SELONG LOMBOK TIMUR', 'Nusa Tenggara Barat', null, null, '1ed8f4c8fc040e28eb19bcb538f24be4', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520108', '12.8.349.74.75.0.5.0108', 'DFL1223B1018', 'DUL1223B1018', 'JANNATIN AMALIA', 'mataram', '1995-01-05', 'sesela desa kec. gunung sari', 'lombok barat', 'Nusa Tenggara Barat', '087863666001', 'P', 'Islam', 'B', 'WNI', '', '', 'hasanuddin', 'Islam', 'Pegawai Negeri Sipil', 'mukarromah', 'Islam', 'Rumah Tangga', 'jl.pendidikan kec.maluk', 'taliwang', 'Nusa Tenggara Barat', null, null, 'dfb1fdc1f912572aa1c2ca112b1ad88b', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520109', '12.8.349.74.75.0.5.0109', 'DFL1223B1016', 'DUL1223B1016', 'YANUAR AL FAAT MURJAYA', 'selong', '1994-05-09', 'selong', 'Selong', 'Nusa Tenggara Barat', '081918104999', 'L', 'Islam', 'A', 'WNI', '', '', 'AHMAD YADI', 'Islam', 'Pegawai Negeri Sipil', 'HARMIN', 'Islam', 'Rumah Tangga', 'SELONG', 'SELONG LOMBOK TIMUR', 'Nusa Tenggara Barat', null, null, '435eca0753fceda4c5eb8df708b4f8e7', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520110', '12.8.349.74.75.0.5.0110', 'DFL1223B1015', 'DUL1223B1015', 'LALU SYAMSUL ARIFIN', 'selong', '1994-07-13', 'jl. gili lawang 1 no 5 btn griya pagutan indah', 'Mataram', 'Nusa Tenggara Barat', '083129006281', 'L', 'Islam', 'O', 'WNI', '', '', 'Lalu wirantanus', 'Islam', 'Pegawai Swasta', 'Rohana', 'Islam', 'Rumah Tangga', 'Jl. gili lawang 1 no 5 btn. griya pagutan indah', 'Mataram', 'Nusa Tenggara Barat', null, null, '79239489a6fdf0237518a0131a57a056', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520111', '12.8.349.74.75.0.5.0111', 'DFL1223B1014', 'DUL1223B1014', 'IRWAN ROZALI', 'MATARAM', '1988-04-19', 'JL. BUNGA MATAHARI NO. 20 RT. 002 GOMONG LAMA MATARAM', 'MATARAM', 'Nusa Tenggara Barat', '081907000597', 'L', 'Islam', 'O', 'WNI', 'UNIVERSITAS MATARAM, FAK. TEKNIK', 'irwanrozaly@ymail.com', 'MANSYUR', 'Islam', 'Wiraswasta', 'ASIAH', 'Islam', 'Wiraswasta', 'JL. BUNGA MATAHARI NO. 20 GOMONG LAMA MATARAM', 'MATARAM', 'Nusa Tenggara Barat', null, null, 'd4b75765f41d15eb030238f837c6c00d', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520112', '12.8.349.74.75.0.5.0112', 'DFL1223B1013', 'DUL1223B1013', 'SAMIRA', 'BIMA', '1994-08-08', 'BARA TIMUR KRL PARUGA , RT 13/ RW 04 ', 'KOTA BIMA', 'Nusa Tenggara Barat', '081917584000', 'P', 'Islam', 'O', 'WNI', '', 'Barbiekurus@ymail.com', 'MUHSEN H.A KADIR BSA', 'Islam', 'Wiraswasta', 'NASRIN YAMANI', 'Islam', 'Rumah Tangga', 'BARA TIMUR, KRL PARUGA RT 13 / RW 04', 'KOTA BIMA', 'Nusa Tenggara Barat', null, null, 'fa1890820a41ae7bda0159c3591d2512', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520113', '12.8.349.74.75.0.5.0113', 'DFL1223B0014', 'DUL1223B0014', 'RICKI ADI SABWAN', 'praya', '1992-12-19', 'ungga', 'praya', 'Nusa Tenggara Barat', '085739592855', 'L', 'Islam', '-', 'WNI', '', '', 'HERRY SABWAN', 'Islam', 'Wiraswasta', 'DARSINI', 'Islam', 'Guru', 'UNGGA', 'PRAYA', 'Nusa Tenggara Barat', null, null, 'e0b1002aba3303e80efebb5cbab248d6', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520114', '12.8.349.74.75.0.5.0114', 'DFL1223B1023', 'DUL1223B1023', 'MUHAMAD KARIADI', 'jembe timur', '1992-11-28', 'jembe, saba kec. janapria LOTENG', 'janapria', 'Nusa Tenggara Barat', '087865381171', 'L', 'Islam', '-', 'WNI', '', '', 'Hasbullah', 'Islam', 'Petani', 'Jahni', 'Islam', 'Rumah Tangga', 'Jembe, Saba Kec. janapria', 'Janapria', 'Nusa Tenggara Barat', null, null, 'e169b34c5137b8bc93515c9762a46227', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520115', '12.8.349.74.75.0.5.0115', 'DFL1223B1024', 'DUL1223B1024', 'AHMAD NAZIR', 'PRAYA', '1994-05-25', 'JL. DAMAR', 'MATARAM', 'Nusa Tenggara Barat', '081918202425', 'L', 'Islam', '-', 'WNI', '', '', 'AWALUDIN', 'Islam', 'Pegawai Swasta', 'SITI MARYAM', 'Islam', 'Rumah Tangga', 'DAREK', 'DAREK', 'Nusa Tenggara Barat', null, null, '95b8a77fb66ad49eaa3d2b7c4aa59b55', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520116', '12.8.349.74.75.0.5.0116', 'DFL1223B1025', 'DUL1223B1025', 'ISMAIL MARZUKI ', 'batujai ', '1993-11-06', 'sorak', 'praya', 'Nusa Tenggara Barat', '087765023531', 'L', 'Islam', '-', 'WNI', '', '', 'aq kalsum', 'Islam', 'Petani', 'i kalsum', 'Islam', 'Petani', 'batujai', 'praya', 'Sulawesi Tengah', null, null, '9fd1a847050856e6d1a38dbe31dc7867', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520117', '12.8.349.74.75.0.5.0117', 'DFL1223B1027', 'DUL1223B1027', 'KHAERUL SALEH', 'pengenjek', '1992-12-27', 'pengenjek', 'lombok tengah', 'Nusa Tenggara Barat', '081917283766', 'L', 'Islam', '-', 'WNI', '', 'khaerulsaleh17@yahoo.com', 'maesun', 'Islam', 'Pegawai Swasta', 'siti aisyah', 'Islam', 'Pegawai Swasta', 'pengenjek', 'lombok tengah', 'Nusa Tenggara Barat', null, null, '575820f4ce61dc197e236e04f6a0644e', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520118', '12.8.349.74.75.0.5.0118', 'DFL1223B1028', 'DUL1223B1028', 'AHMAD', 'pelepok', '1990-12-31', 'pelepok', 'mataram', 'Nusa Tenggara Barat', '0087864348228', 'L', 'Islam', '-', 'WNI', '', '', 'sahdi', 'Islam', 'Petani', 'mulisah', 'Islam', 'Petani', 'pelepok', 'mataram', 'Nusa Tenggara Barat', null, null, 'c2f957ac29ec4f64b6124c9a71223b35', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520119', '12.8.349.74.75.0.5.0119', 'DFL1223B1033', 'DUL1223B1033', 'AHMAD MUHIBBIN', 'DESA LEMBUAK KECAMATAN NARMADA', '1991-11-23', 'JALAN LEMBUSARI II LEMBUAK NARMADA', 'NARMADA', 'Nusa Tenggara Barat', '', 'L', 'Islam', 'B', 'WNI', '', '', 'H. MUHAMMAD ALIMUDDIN', 'Islam', 'Pegawai Negeri Sipil', 'JUMASIH', 'Islam', 'Wiraswasta', 'JALAN LEMBUSARI II LEMBUAK NARMADA', 'NARMADA', 'Nusa Tenggara Barat', null, null, '030063e495f00ad42ca94ad50c91a740', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520120', '12.8.349.74.75.0.5.0120', 'DFL1223B1035', 'DUL1223B1035', 'M PAESEL ISRO', 'PANCOR\\', '1994-01-10', 'RAKAM', 'SELONG', 'Nusa Tenggara Barat', '081997688618', 'L', 'Islam', 'O', 'WNI', '', 'isropaesel@gmail.com', 'HM NASIR B', 'Islam', 'Pegawai Negeri Sipil', 'H SITI KHADIJAH', 'Islam', 'Wiraswasta', 'RAKAM', 'SELONG', 'Nusa Tenggara Barat', null, null, '7dcda1410e3a8d0600679ba2ca6a7dfd', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520121', '12.8.349.74.75.0.5.0121', 'DFL1223B1036', 'DUL1223B1036', 'SAFERI BUDIMAN', 'Mamben', '1993-03-27', 'Maben Lauk', 'SELONG', 'Nusa Tenggara Timur', '', 'L', 'Islam', '-', 'WNI', '', 'Saperibudiman@yahho.co.id', 'Salahuddin', 'Islam', 'Wiraswasta', 'Raihun', 'Islam', 'Rumah Tangga', 'Mamben', 'selong', 'Nusa Tenggara Timur', null, null, '2df192281b419400ba01cd0fe0e65a2b', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520122', '12.8.349.74.75.0.5.0122', 'DFL1223B1037', 'DUL1223B1037', 'A.RASYID RIDHA SAPUTRA', 'KEDIRI', '1992-10-31', 'KEDIRI LOMBOK BARAT', 'MATARAM', 'Nusa Tenggara Barat', '083129630182', 'L', 'Islam', '-', 'WNI', '', '', 'M.RUPLAN', 'Islam', 'Guru', 'ZAKIAH', 'Islam', 'Rumah Tangga', 'KEDIRI', 'MATARAM', 'Nusa Tenggara Barat', null, null, 'f29915fbdc1a95c030d25d3927f0e7ea', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520123', '12.8.349.74.75.0.5.0123', 'DFL1223B1085', 'DUL1223B1085', 'MOH. HAMBALI', 'Dasan Kolo', '1993-04-14', 'Dasan Kolo Jempong Baru', 'Mataram', 'Nusa Tenggara Barat', '087865763182', 'L', 'Islam', '-', 'WNI', '', '', 'SALI', 'Islam', 'Petani', 'SANISAH', 'Islam', 'Rumah Tangga', 'Dasan Kolo Jempong Baru', 'Mataram', 'Nusa Tenggara Barat', null, null, 'a7021a28a4209cd85cef75b91fb10b37', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520124', '12.8.349.74.75.0.5.0124', 'DFL1223B1146', 'DUL1223B1146', 'ABDUL SUHAIMIN', 'PANCOR LOTIM', '1993-06-09', 'PANCOR LOTIM', 'SELONG', 'Nusa Tenggara Barat', '', 'L', 'Islam', '-', 'WNI', '', '', 'ridwan', 'Islam', 'Wiraswasta', 'suhaini', 'Islam', 'Lainnya', 'pancor', 'SELONG', 'Nusa Tenggara Barat', null, null, '18d6c974094bdb01897f3ac2f5128b13', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520125', '12.8.349.74.75.0.5.0125', 'DFL1223B1123', 'DUL1223B1123', 'JUNARDIANSYAH', 'Sumbawa Besar', '1994-03-21', 'Jln.Gelantik Gosa, GEBANG', 'MATARAM', 'Nusa Tenggara Barat', '087866993943', 'L', 'Islam', '-', 'WNI', '', '', 'Muslimin Junaidi', 'Islam', 'Pegawai Negeri Sipil', 'Masifah', 'Islam', 'Rumah Tangga', 'Dusun Nowa Kec.Woja Kab.Dompu', 'Dompu', 'Nusa Tenggara Barat', null, null, 'c85f6083b102330ef4cdce6f0cd14c7e', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520126', '12.8.349.74.75.0.5.0126', 'DFL1223B1125', 'DUL1223B1125', 'SHOFIAN ANSHORI', 'batu ngerenseng', '1994-10-15', 'aik bukak', 'lombok tengah', 'Nusa Tenggara Barat', '087763279002', 'L', 'Islam', '-', 'WNI', '', 'anshorishofian@yahoo.co.id', 'h. saeful misbah', 'Islam', 'Petani', 'hj. auliani', 'Islam', 'Rumah Tangga', 'aik bukak', 'lombok tengah', 'Nusa Tenggara Barat', null, null, '77bce9a6b15c8be8a0f101f09c311ecd', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520127', '12.8.349.74.75.0.5.0127', 'DFL1223B1126', 'DUL1223B1126', 'ALI AKBAR', 'SELONG', '1993-12-23', 'KUANG DEREK ', 'SELONGN LOMBOK TIMUR', 'Nusa Tenggara Barat', '087763003133', 'L', 'Islam', '-', 'WNI', '', '', 'H.ZAENAL ARIFIN', 'Islam', 'Petani', 'HJ.HAERIAH', 'Islam', 'Petani', 'KUANG DEREK', 'SELONG LOMBOK TIMUR', 'Nusa Tenggara Barat', null, null, '93ae307bc6cb394a3e40d4acf1aa54d1', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520128', '12.8.349.74.75.0.5.0128', 'DFL1223B1127', 'DUL1223B1127', 'MUHAMMAD SURUR', 'lendangbajur', '1994-10-10', 'balekuwu', 'MATARAM', 'Nusa Tenggara Barat', '083129154044', 'L', 'Islam', 'AB', 'WNI', '', '', 'h.arifin', 'Islam', 'Wiraswasta', 'hj.falahiah', 'Islam', 'Wiraswasta', 'lendangbajur', 'Mataram', 'Nusa Tenggara Barat', null, null, 'e1bfb5e26cd1e2e972f9c98f006967b4', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520129', '12.8.349.74.75.0.5.0129', 'DFL1223B1129', 'DUL1223B1129', 'ALUS AZIZI SAMIRUDDIN', 'SENGKOL', '1994-08-28', 'SENGKOL', 'PRAYA', 'Nusa Tenggara Barat', '087864013703', 'L', 'Islam', 'O', 'WNI', 'REGULER', 'alusazizi@gmail.com', 'SAMAN HUDY PW. SH', 'Islam', 'Pegawai Negeri Sipil', 'SENAH S.Pd', 'Islam', 'Pegawai Negeri Sipil', 'SENGKOL', 'PRAYA', 'Nusa Tenggara Barat', null, null, '790123c167c4a3c4e9dcbec9181ec96d', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520130', '12.8.349.74.75.0.5.0130', 'DFL1223B1130', 'DUL1223B1130', 'M.AGUSTAMI', 'wera bala ', '1995-08-03', 'pagutan indah', 'MATARAM', 'Nusa Tenggara Barat', '085338840912', 'L', 'Islam', 'A', 'WNI', '', '', 'Tasrif ', 'Islam', 'Petani', 'Misrah', 'Islam', 'Petani', 'wera bima', 'bima', 'Nusa Tenggara Barat', null, null, 'aea78bf3f26150a3043b74e4f1e1c675', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520131', '12.8.349.74.75.0.5.0131', 'DFL1223B1131', 'DUL1223B1131', 'DIKKI RIZKI PUTRA', 'tangerang', '1995-11-24', 'pagutan indah', 'MATARAM', 'Nusa Tenggara Barat', '085338840912', 'L', 'Islam', 'A', 'WNI', '', '', 'Abdul Rifaid', 'Islam', 'Petani', 'Hamidah', 'Islam', 'Petani', 'wera bima', 'Bima', 'Nusa Tenggara Barat', null, null, '1d6be279eab9f0f94fb2fa17fc375c52', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520132', '12.8.349.74.75.0.5.0132', 'DFL1223B1133', 'DUL1223B1133', 'ROSI WINARDI', 'lajut praya NTB, 05 november 1992 ', '1992-11-05', 'jln gotong royong gang mandiri 2 pejeruk ampenan', 'mataram', 'Nusa Tenggara Barat', '085391585183', 'L', 'Islam', '-', 'WNI', '', '', 'sumardi', 'Islam', 'Petani', 'Nur halimah', 'Islam', 'Rumah Tangga', 'Desa Teluk waru Rt. 005 Long ikis kab. paser', 'tanah grogot', 'Kalimantan Timur', null, null, '965389ab13796fec824913ebaa5d9695', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520133', '12.8.349.74.75.0.5.0133', 'DFL1223B1135', 'DUL1223B1135', 'LALU RINGGANI EDWIN FARADY', 'selong', '1994-04-26', 'SELONG LOMBOK TIMUR', 'SELONGN LOMBOK TIMUR', 'Nusa Tenggara Barat', '081936775199', 'L', 'Islam', 'A', 'WNI', '', '', 'Lalu muhammad satraji', 'Islam', 'Pegawai Swasta', 'Baiq Quratul aini', 'Islam', 'Pegawai Negeri Sipil', 'SELONG LOMBOK TIMUR', 'SELONG LOMBOK TIMUR', 'Nusa Tenggara Barat', null, null, 'c0426e1ccfdacf89afa49128c669c1ec', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520134', '12.8.349.74.75.0.5.0134', 'DFL1223B1136', 'DUL1223B1136', 'SUSANTI MUSLIMIN', 'ALAS ', '1993-07-18', 'KALIMAGO', 'SUMBAWA', 'Nusa Tenggara Barat', '087863545999', 'P', 'Islam', '-', 'WNI', '', '', 'MUSLIMIN', 'Islam', 'Petani', 'SAHENON', 'Islam', 'Rumah Tangga', 'KALIMAGO', 'SUMBAWA', 'Nusa Tenggara Barat', null, null, 'af9c383dd2b023d163c68615d82223bb', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520135', '12.8.349.74.75.0.5.0135', 'DFL1223B1145', 'DUL1223B1145', 'TRI DAHATMAN', 'daha dompu', '1994-10-03', 'desa daha, kec hu\'u, kab dompu', 'Dompu', 'Nusa Tenggara Barat', '085339954944', 'L', 'Islam', 'B', 'WNI', '', 'fampircuek@yahoo.com', 'Muhammad Amin', 'Islam', 'Pegawai Negeri Sipil', 'Siti Halimah', 'Islam', 'Rumah Tangga', 'desa daha, kec hu\'u, kab dompu', 'Dompu', 'Nusa Tenggara Barat', null, null, '516a68af379b86b4caa00e8a99da9b1a', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520136', '12.8.349.74.75.0.5.0136', 'DFL1223B1137', 'DUL1223B1137', 'MUH.SHAUQI', 'Labuhan jambu', '1994-06-04', 'Sumbawa kac.Tarano', 'sumbawa', 'Nusa Tenggara Barat', '081905165766', 'L', 'Islam', '-', 'WNI', '', 'muhammadshauqim@yahoo.com', 'A.WARIS', 'Islam', 'Wiraswasta', 'SOFIAH', 'Islam', 'Wiraswasta', 'SUMBAWA', 'SUMBAWA', 'Nusa Tenggara Barat', null, null, '7901453aeb2d7b80e66414ba180fb1f9', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520137', '12.8.349.74.75.0.5.0137', 'DFL1223B1139', 'DUL1223B1139', 'HAERUL FAJRI', 'TEMBOWONG SEKOTONG BARAT', '1994-12-31', 'TEMBOWONG SEKOTONG BARAT', 'MATARAM', 'Nusa Tenggara Barat', '081907981189', 'L', 'Islam', '-', 'WNI', '', '', 'ANWAR', 'Islam', 'Petani', 'MISIAH', 'Islam', 'Rumah Tangga', 'TEMBOWONG', 'MATARAM', 'Nusa Tenggara Barat', null, null, '58246504284ca162d027693e15541e0b', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520138', '12.8.349.74.75.0.5.0138', 'DFL1223B1140', 'DUL1223B1140', 'AZRAL SATRANI', 'Gegutu dayan aik', '1993-01-05', 'Jln. Cendrawasih', 'Mataram', 'Nusa Tenggara Barat', '087864387796', 'L', 'Islam', '-', 'WNI', '', 'sazralsatrani@yahoo.com', 'Haeron', 'Islam', 'Wiraswasta', 'hj. Jumrah', 'Islam', 'Rumah Tangga', 'Gegutu Dayan Aik', 'Mataram', 'Nusa Tenggara Barat', null, null, '3312c1f603b963c2db1e874803e5f68e', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520139', '12.8.349.74.75.0.5.0139', 'DFL1223B1141', 'DUL1223B1141', 'AGUSTIAWAN', 'pelempat ', '1995-08-31', 'pelempat meninting', 'Mataram', 'Nusa Tenggara Barat', '085337195377', 'L', 'Islam', 'AB', 'WNI', '', 'agussur@yahoo.co.id', 'Dahyar', 'Islam', 'Wiraswasta', 'hj. Jakrah', 'Islam', 'Pegawai Swasta', 'Pelempat ', 'Mataram', 'Nusa Tenggara Barat', null, null, 'fb8a3cb334e6928cd1f6f7260e14ea0e', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520140', '12.8.349.74.75.0.5.0140', 'DFL1223B1143', 'DUL1223B1143', 'AHMAD LUKMAN ', 'Barejulat, Jonggat', '1993-10-10', 'Barejulat, Jonggat', 'lombok tengah', 'Nusa Tenggara Barat', '', 'L', 'Islam', '-', 'WNI', '', '', 'Ariyah', 'Islam', 'Lainnya', 'Almah', 'Islam', 'Rumah Tangga', 'Barejulat, Jonggat', 'lombok tengah', 'Nusa Tenggara Barat', null, null, 'f995115d6834f6ba2e79bcd87ca6395b', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520141', '12.8.349.74.75.0.5.0141', 'DFL1223B1122', 'DUL1223B1122', 'RUHUL AHADIAH', 'BUBUR GADUNG', '1992-09-08', 'BUBUR GADUNG', 'SELONGN LOMBOK TIMUR', 'Nusa Tenggara Barat', '', 'P', 'Islam', '-', 'WNI', '', '', 'AMAQ AN', 'Islam', 'Petani', 'INAQ AN', 'Islam', 'Petani', 'BUBUR GADUNG-POHGADING', 'SELONG LOMBOK TIMUR', 'Nusa Tenggara Barat', null, null, '8fbb2592e41002cc19cbe39714713275', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520142', '12.8.349.74.75.0.5.0142', 'DFL1223B1121', 'DUL1223B1121', 'KURTUBIAH', 'BAGIK LAWANG', '1993-12-31', 'BAGIK LAWANG', 'SELONGN LOMBOK TIMUR', 'Nusa Tenggara Barat', '085337020211', 'P', 'Islam', '-', 'WNI', '', '', 'AMAQ MAHRUN', 'Islam', 'Petani', 'MAHNIM', 'Islam', 'Petani', 'BAGEK LAWANG-POHGADING TIMUR', 'SELONG LOMBOK TIMUR', 'Nusa Tenggara Barat', null, null, 'a0a89ad8ecf5519c61acccce0b068be5', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520143', '12.8.349.74.75.0.5.0143', 'DFL1223B1089', 'DUL1223B1089', 'DODI ARIP SETIAWAN', 'Narmada', '1994-03-03', 'lembuak ,narmada', 'Mataram', 'Nusa Tenggara Barat', '087865336783', 'L', 'Islam', '-', 'WNI', '', 'dodiarifssetiawan@yahoo.co.id', 'mahrif', 'Islam', 'Wiraswasta', 'musriah', 'Islam', 'Wiraswasta', 'lembuak narmada', 'Mataram', 'Nusa Tenggara Barat', null, null, '9e4fa717f28d5dd0e5eaeae6711e6f5a', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520144', '12.8.349.74.75.0.5.0144', 'DFL1223B1090', 'DUL1223B1090', 'ANDI HERMAWAN ', 'Dompu', '1995-02-21', 'kelurahan bali 1 ', 'Dompu', 'Nusa Tenggara Barat', '087866777499', 'L', 'Islam', 'A', 'WNI', '', 'Endholepas@ymail.com', 'Nurdin Ibrahim ', 'Islam', 'Wiraswasta', 'Ta\'asiah', 'Islam', 'Rumah Tangga', 'Bali 1 Dompu ', 'Dompu', 'Nusa Tenggara Barat', null, null, 'c89dc02f708be5f4a847e63d1e994d01', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520145', '12.8.349.74.75.0.5.0145', 'DFL1223B1091', 'DUL1223B1091', 'LIMARSI', 'LEGU', '1993-05-25', 'GANTI - KECAMATAN PRAYA TIMUR', 'PRAYA', 'Nusa Tenggara Barat', '085337756209', 'L', 'Islam', '-', 'WNI', '', '', 'SAPDE', 'Islam', 'Petani', 'LEMEN', 'Islam', 'Petani', 'LEGU - DESA GANTI - LOTENG', 'PRAYA', 'Nusa Tenggara Barat', null, null, 'f911ffe6264146bdd7f7d4923acbb69d', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520146', '12.8.349.74.75.0.5.0146', 'DFL1223B1095', 'DUL1223B1095', 'ABDUL RAZAK', 'ORONG RANTEK', '1990-12-31', 'ORONG RANTEK DESA MAMBEN BARU', 'SELONG', 'Nusa Tenggara Barat', '081907861017', 'L', 'Islam', '-', 'WNI', '', 'razak_mama@yahoo.com', 'MARZUKI', 'Islam', 'Petani', 'HASANAH', 'Islam', 'Petani', 'ORONG RANTEK', 'SELONG', 'Nusa Tenggara Barat', null, null, 'dbea7f711d8cf1f73b7fc67ac98902f0', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520147', '12.8.349.74.75.0.5.0147', 'DFL1223B1099', 'DUL1223B1099', 'NENING PRATIWI', 'Tanjung/Kandang kaoq', '1992-07-24', 'tanjung/ lombok utara', 'Tanjung', 'Nusa Tenggara Barat', '087864168334', 'P', 'Islam', 'O', 'WNI', '', '', 'MURJATI', 'Islam', 'Petani', 'ASMINTEN', 'Islam', 'Wiraswasta', 'Tanjung, kabupaten lombok utara', 'Tanjung, kabupaten lombok utara', 'Nusa Tenggara Barat', null, null, 'a6434b62b7aae7d72ad1cab7e4af33bc', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520148', '12.8.349.74.75.0.5.0148', 'DFL1223B1100', 'DUL1223B1100', 'MURAHMAN', 'Gili Meno', '1993-04-20', 'Gili Meno, Ds. Gili Ilndah Kec. Pemenang KLU', 'Mataram', 'Nusa Tenggara Barat', '081933169832', 'L', 'Islam', '-', 'WNI', '', '', 'Mas\'an', 'Islam', 'Wiraswasta', 'Jahariah', 'Islam', 'Rumah Tangga', 'Gili Meno, Ds. Gili Indah ', 'Mataram', 'Nusa Tenggara Barat', null, null, 'fafebd5cc12b8f2a8c7cd17776bb402c', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520149', '12.8.349.74.75.0.5.0149', 'DFL1223B1104', 'DUL1223B1104', 'ASRUL UMAMI', 'DASAN LEKONG', '1993-01-16', 'DASAN LEKONG', 'SELONG', 'Nusa Tenggara Barat', '081915790118', 'L', 'Islam', 'B', 'WNI', '', 'azrilumam@yahoo.co.id', 'THAMRIN', 'Islam', 'Wiraswasta', 'SITI AMINAH', 'Islam', 'Wiraswasta', 'DASAN LEKONG', 'SELONG', 'Nusa Tenggara Barat', null, null, 'a4d3942feb256a168649e6c51eca4599', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520150', '12.8.349.74.75.0.5.0150', 'DFL1223B1105', 'DUL1223B1105', 'FADLUN FADLILLAH', 'Dompu,NTB', '1994-05-20', 'gebang', 'Mataram', 'Nusa Tenggara Barat', '087866708500', 'L', 'Islam', '-', 'WNI', '', 'jaringan_aLqaedah@roCketMail.com', 'Bunyamin', 'Islam', 'Pegawai Negeri Sipil', 'Mardiah', 'Islam', 'Rumah Tangga', 'Mangge asi', 'Dompu', 'Nusa Tenggara Barat', null, null, 'ac3b3c66c65831c32224750630bd98aa', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520151', '12.8.349.74.75.0.5.0151', 'DFL1223B1106', 'DUL1223B1106', 'ULUL AZMI', 'gunungsari', '1993-01-15', 'gunungsari', 'gunungsari', 'Nusa Tenggara Barat', '081916038035', 'L', 'Islam', 'A', 'WNI', '', '', 'H.fauzan', 'Islam', 'Wiraswasta', 'hj. minhur', 'Islam', 'Wiraswasta', 'gunungsari', 'gunungsari', 'Nusa Tenggara Barat', null, null, 'dadd301c094a92b54c785247c7376a84', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520152', '12.8.349.74.75.0.5.0152', 'DFL1223B1107', 'DUL1223B1107', 'DENSI BUDIMAN', 'sumbawa', '1994-05-27', 'DUSUN BERANG LOKA RT 002/RW 002 DESA BUINB BARU KECAMATAN BUER', 'SUMBAWA BESAR', 'Nusa Tenggara Barat', '081916878588', 'L', 'Islam', 'A', 'WNI', '', '', 'ADAM ISMAIL', 'Islam', 'Petani', 'BALADAENG', 'Islam', 'Petani', 'BUENBARU', 'SUMBAWA BESAR', 'Nusa Tenggara Barat', null, null, 'c35ae38ea96b10488fb93268756146fb', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520153', '12.8.349.74.75.0.5.0153', 'DFL1223B1120', 'DUL1223B1120', 'ABDUL MUJIB NASIR', 'pantik', '1994-01-27', 'pantik des.embung raja kec.terara lotim', 'Selong', 'Nusa Tenggara Barat', '081917717795', 'L', 'Islam', 'O', 'WNI', '', '', 'muhammad nasir', 'Islam', 'Guru', 'nurhayati', 'Islam', 'Rumah Tangga', 'pantik.des.santong kec.terara lotim', 'Selong', 'Nusa Tenggara Barat', null, null, 'a36341f0df844c9322cba9206cbbbe0c', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520154', '12.8.349.74.75.0.5.0154', 'DFL1223B1119', 'DUL1223B1119', 'AGUS SETIAWAN', 'PAOKMOTONG', '1994-08-03', 'Dusun gb. daye, Desa Paokmotong Utara, Kec. Masbagik, LOTIM', 'SELONG', 'Nusa Tenggara Barat', '085339518542', 'L', 'Islam', 'O', 'WNI', '', '', 'Marsukin', 'Islam', 'Wiraswasta', 'Sahnun', 'Islam', 'Wiraswasta', 'Dusun gb. daye, Desa Paokmotong Utara, Kec. Masbagik,  LOTIM', 'Selong', 'Nusa Tenggara Barat', null, null, 'ce56bda02bcb2cbbde13443605a66442', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520155', '12.8.349.74.75.0.5.0155', 'DFL1223B1118', 'DUL1223B1118', 'ABD. QUDUS AL FAJARY', 'GERUMPUNG', '1993-11-13', 'GERUMPUNG, SEPIT KEC. KERUAK', 'SELONG', 'Nusa Tenggara Barat', '081917278228', 'L', 'Islam', 'A', 'WNI', '', 'qudouze@gmail.com', 'H. JUMA\'AH THAHIR, M. PD', 'Islam', 'Guru', 'MUSLIMAH', 'Islam', 'Rumah Tangga', 'GERUMPUNG SEPIT  KECAMATAN KERUAK', 'SELONG', 'Nusa Tenggara Barat', null, null, 'd6bf8337fd1f24709382e7234a87c422', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520156', '12.8.349.74.75.0.5.0156', 'DFL1223B1117', 'DUL1223B1117', 'ROY EKA SAPUTRA', 'LOMBAS', '1994-01-07', 'LOMBAS, DASN BARU, KOPANG, LOTENG.', 'KOPANG', 'Nusa Tenggara Barat', '087865295818', 'L', 'Islam', '-', 'WNI', '', 'eckasyaputra@gmail.com', 'H. JUMEDAN', 'Islam', 'Petani', 'MAHYAM', 'Islam', 'Rumah Tangga', 'LOMBAS, DASAN BARU, KOPANG, LOMBOK TENGAH.', 'KOPANG', 'Nusa Tenggara Barat', null, null, '63f9d91713e24798d79276b09dca0673', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520157', '12.8.349.74.75.0.5.0157', 'DFL1223B1114', 'DUL1223B1114', 'JANUAR', 'MATARAM', '1990-01-03', 'SAYANG-SAYANG', 'MATARAM', 'Nusa Tenggara Barat', '081933126564', 'L', 'Islam', '-', 'WNI', '', 'WANKAR33@YAHOO.COM', 'SAHDI', 'Islam', 'Wiraswasta', 'JOHARIAH', 'Islam', 'Rumah Tangga', 'SAYANG-SAYANG', 'MATARAM', 'Nusa Tenggara Barat', null, null, '856936faeb8997b00ab682509a7294cc', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520158', '12.8.349.74.75.0.5.0158', 'DFL1223B1112', 'DUL1223B1112', 'MITA ARDILA', 'BENETE', '1993-11-03', 'DSN NANGKA LANUNG, RT 007/RW 004 DESA BENETE  KECAMATAN MALUK.', 'TALIWANG', 'Nusa Tenggara Barat', '085339926750', 'P', 'Islam', 'A', 'WNI', '', '', 'DENI UDENG ', 'Islam', 'Pegawai Swasta', 'SRI BANUN RAHMAWATI SPDI', 'Islam', 'Guru', 'BENETE', 'TALIWANG', 'Nusa Tenggara Barat', null, null, '1182d08d6fc9674c4eb9093e62903e4d', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520159', '12.8.349.74.75.0.5.0159', 'DFL1223B1111', 'DUL1223B1111', 'LALU SONY PRADEBA', 'Bangkar buak', '1994-04-30', 'Tanak awu', 'Praya', 'Nusa Tenggara Barat', '081933166191', 'L', 'Islam', '-', 'WNI', '', 'con.s_shanks@yahoo.com', 'sunan', 'Islam', 'Wiraswasta', 'muniah', 'Islam', 'Wiraswasta', 'tanak awu', 'Praya', 'Nusa Tenggara Barat', null, null, 'ed901d87ce8a094b10d4314c67d99556', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210520160', '12.8.349.74.75.0.5.0160', 'DFL1223B1109', 'DUL1223B1109', 'RIYAN HIDAYAT', 'Sesela', '1993-01-01', 'Sesela ', 'Mataram', 'Nusa Tenggara Barat', '081803662919', 'L', 'Islam', '-', 'WNI', '', '', 'Amah  Zainuddin', 'Islam', 'Petani', 'Jama\'iyah', 'Islam', 'Lainnya', 'Sesela', 'Mataram', 'Nusa Tenggara Barat', null, null, '4560feb554e187ad9aa6e55e9230a089', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530161', '12.8.349.74.75.0.5.0161', 'DFL1233B1396', 'DUL1233B1396', 'FEBBY PUTRI LARASATI', 'Sumbawa Besar', '1993-02-12', 'jl.gora,gg.anggur.sindu cakrautara,kec.cakra negara', 'MATARAM', 'Nusa Tenggara Barat', '087863569356', 'P', 'Islam', '-', 'WNI', '', '', 'waijo', 'Islam', 'Wiraswasta', 'sunarti', 'Islam', 'Wiraswasta', 'jln.ahmad yani 5', 'Sumbawa Besar', 'Nusa Tenggara Barat', null, null, 'e7eeba6125eb09d00039033c25ee5716', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530162', '12.8.349.74.75.0.5.0162', 'DFL1233B1395', 'DUL1233B1395', 'BAGUS JAYADI', 'DASAN TAPEN DESA BAGEK PAPAN KEC.PRINGGA BAYA', '1990-03-03', 'DASAN TAPEN DESA BAGEK PAPAN KEC.PRINGGA BAYA', 'PRINGGABAYA', 'Nusa Tenggara Barat', '087763268500', 'L', 'Islam', '-', 'WNI', '', 'jayadibagus@yahoo.co.id', 'IG. NYOMAN M. ZAENAL', 'Islam', 'Wiraswasta', 'RAKMAH', 'Islam', 'Rumah Tangga', 'MATARAM', 'MATARAM', 'Nusa Tenggara Barat', null, null, 'b2587d8e1e3d05daae14055337acccc3', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530163', '12.8.349.74.75.0.5.0163', 'DFL1233B1394', 'DUL1233B1394', 'REZKY RAMDHANINGSIH', 'Mataram', '1994-02-27', 'btn pagesangan indah', 'MATARAM', 'Nusa Tenggara Barat', '081917456106', 'P', 'Islam', 'O', 'WNI', '', '', 'sulaiman murtadha', 'Islam', 'Pegawai Negeri Sipil', 'nurmala', 'Islam', 'Rumah Tangga', 'btn.pagesangan indah', 'MATARAM', 'Nusa Tenggara Barat', null, null, '1e11499d6b5313dbc48d454aad980eac', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530164', '12.8.349.74.75.0.5.0164', 'DFL1233B1400', 'DUL1233B1400', 'AGUSFIAN HADI SAPUTRA', 'SENYIUR', '1994-01-23', 'SENYIUR, KEC.KERUAK', 'SELONG', 'Nusa Tenggara Barat', '087763066023', 'L', 'Islam', 'A', 'WNI', '', '', 'H.MUHAMAD NUR, S.Pd', 'Islam', 'Pegawai Negeri Sipil', 'BQ. NURHAYATI', 'Islam', 'Rumah Tangga', 'SENYIUR', 'Selong, Lombok Timur', 'Nusa Tenggara Barat', null, null, '716170d9e4452ccecfc6472c58a9a3cd', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530165', '12.8.349.74.75.0.5.0165', 'DFL1233B1392', 'DUL1233B1392', 'IGA WULANDARI', 'MATARAM', '1993-10-05', ' jln.ester 2 blok E no:22 labuapi LA RESORT', 'MATARAM', 'Nusa Tenggara Barat', '081907588388', 'P', 'Islam', 'O', 'WNI', '', 'Wtari44@yahoo.com', 'BUNYAMIN', 'Islam', 'Wiraswasta', 'MARYAM', 'Islam', 'Pegawai Negeri Sipil', 'LABUAPI LA RESORT', 'Gerung-Lombok Barat', 'Nusa Tenggara Barat', null, null, '74ced8836890939872723040d1f5623d', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530166', '12.8.349.74.75.0.5.0166', 'DFL1233B1391', 'DUL1233B1391', 'RUDI HARTONO', 'tanak rarang', '1992-07-12', 'Desa tanak rarang, Kec. Peraya Barat LOTENG', 'peraya', 'Nusa Tenggara Barat', '081907256033', 'L', 'Islam', '-', 'WNI', '', '', 'SERI', 'Islam', 'Petani', 'SARI', 'Islam', 'Petani', 'TANAK RARANG ', 'PRAYA', 'Nusa Tenggara Barat', null, null, '15618e9882da72e49fca5871e89a01f5', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530167', '12.8.349.74.75.0.5.0167', 'DFL1233B1390', 'DUL1233B1390', 'I NYOMAN AGUS ERIANTARA', 'Mataram', '1993-12-02', 'Jln.Dr soetomo Gg Gilianyar 1A no 3', 'Mataram', 'Nusa Tenggara Barat', '087865321288', 'L', 'Hindu', 'AB', 'WNI', '', '', 'I Komang Sumardana', 'Hindu', 'Lainnya', 'Ni Wayan Rumiarti', 'Hindu', 'Wiraswasta', 'Jln.Dr soetomo Gg Gilianyar 1A no 3', 'MATARAM', 'Nusa Tenggara Barat', null, null, '3a120f8fcdc2dbeda1cf4768ba02cdc4', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530168', '12.8.349.74.75.0.5.0168', 'DFL1233B1389', 'DUL1233B1389', 'I NYOMAN AGUS ARISTADANA', 'MATARAM', '1993-12-02', 'JL.DR.SOETOMO GG. GILIANYAR 1A NO.3', 'MATARAM', 'Nusa Tenggara Barat', '085739811102', 'L', 'Hindu', 'AB', 'WNI', '', '', 'I KOMANG SUMARDANA', 'Hindu', 'Lainnya', 'NI WAYAN RUMIARTI', 'Hindu', 'Wiraswasta', 'JL. DR SOETOMO GG GILIANYAR 1A NO.3', 'MATAR', 'Nusa Tenggara Barat', null, null, '092e4062b140d0e0702504f0db29515f', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530169', '12.8.349.74.75.0.5.0169', 'DFL1233B1388', 'DUL1233B1388', 'B. DINDA USWATUN HASANAH', 'Mataram', '1994-07-17', 'Jl. Swasebada VII No.33 Kekalik', 'Mataram', 'Nusa Tenggara Barat', '081907905003', 'P', 'Islam', 'O', 'WNI', '', '', 'L. Saiful Bahri', 'Islam', 'Pegawai Negeri Sipil', 'Mudmah', 'Islam', 'Guru', 'Jl. Swasembada VII No. 33 Kekalik', 'Mataram', 'Nusa Tenggara Barat', null, null, '690c4927cd114f520b807dc180e1d849', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530170', '12.8.349.74.75.0.5.0170', 'DFL1233B1386', 'DUL1233B1386', 'SANDI ATMA YUGYA', 'RUMBUK, SAKRA', '1993-10-25', 'RUMBUK TNH,GADANG 1', 'SELONG', 'Nusa Tenggara Barat', '081918372012', 'L', 'Islam', '-', 'WNI', '', 'sandiatmayugya@rocketmail.com', 'SUNARDI', 'Islam', 'Pegawai Negeri Sipil', 'ZOHRAH', 'Islam', 'Wiraswasta', 'RUMBUK TNAH, GADANG 1', 'SELONG', 'Nusa Tenggara Barat', null, null, 'cfcdde5766f6572760bdab3ad14eccbb', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530171', '12.8.349.74.75.0.5.0171', 'DFL1233B1385', 'DUL1233B1385', 'LALU MALIK IBRAHIM', 'rembitan', '1994-08-25', 'rembitan', 'lombok tengah', 'Nusa Tenggara Barat', '081917439093', 'L', 'Islam', '-', 'WNI', '', '', 'lalu achyar', 'Islam', 'Wiraswasta', 'bq .eram', 'Islam', 'Rumah Tangga', 'rembitan', 'LOMBOK TENGGAH', 'Nusa Tenggara Barat', null, null, '02fdaa37bea018e63520aa55a603b9bf', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530172', '12.8.349.74.75.0.5.0172', 'DFL1233B1401', 'DUL1233B1401', 'DEDY RIDSON FARIYANTO TAMPUBOLON', 'jayapura', '1996-12-05', 'jl kesra 7 no 70 perumnas', 'MATARAM', 'Nusa Tenggara Barat', '085244658880', 'L', 'Islam', 'AB', 'WNI', '', '', 'Gibson tampubolon', 'Islam', 'Pegawai Negeri Sipil', 'Nurul farida', 'Islam', 'Pegawai Negeri Sipil', 'jayapura jl tanjungria ', 'jayapura', 'Papua', null, null, '24fca75b2536b1cdc604229055ff73de', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530173', '12.8.349.74.75.0.5.0173', 'DFL1233B1403', 'DUL1233B1403', 'SYARIF HIDAYATULLOH', 'SELONG', '1986-05-02', 'IRENG DAYE', 'MATARAM', 'Nusa Tenggara Barat', '081997601000', 'L', 'Islam', 'AB', 'WNI', '', 'hidayatulloh86@yahoo.com', 'ABDUL HAFIDZ', 'Islam', 'Pegawai Negeri Sipil', 'QURRATUL AIN', 'Islam', 'Pegawai Negeri Sipil', 'SELONG LOMBOK TIMUR', 'SELONG', 'Nusa Tenggara Barat', null, null, 'cc1aeea586b72d784011edf99d512904', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530174', '12.8.349.74.75.0.5.0174', 'DFL1233B1327', 'DUL1233B1327', 'ANDI ARISKA NOPIANTI', 'Tanjung Pandan', '1994-11-30', 'JL.Danau Sidendeng RT.06/RW.03 BTN Pagutan Permai', 'MATARAM', 'Nusa Tenggara Barat', '081917606603', 'P', 'Islam', 'B', 'WNI', '', 'Ariskanopianti@yahoo.co.id', 'H. Andi Muchtar', 'Islam', 'Wiraswasta', 'Hj.Andi Junaida', 'Islam', 'Rumah Tangga', 'Desa Lab. Jambu Kec. Tarano', 'sumbawa besar', 'Nusa Tenggara Barat', null, null, 'fa5865e26a838bd093aeeaa2700e17a6', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530175', '12.8.349.74.75.0.5.0175', 'DFO1233B1069', 'DUO1233B1069', 'FITRIADI PALATEHA', 'Terengan', '1994-03-15', 'medas baru, desa tamansari kecamatan gunungsari', 'Kabupaten Lombok Barat', 'Nusa Tenggara Barat', '082340339993', 'L', 'Islam', 'B', 'WNI', '', 'fitriadipalateha@yahoo.com', 'ASMAWATI, S.Pd.SD', 'Islam', 'Pegawai Negeri Sipil', 'ISTIHARAH', 'Islam', 'Rumah Tangga', 'medas medas baru desa tamansari kecamatan gunungsari', 'Kab. Lombok Barat', 'Nusa Tenggara Barat', null, null, '63a6d45e56de199bc1ecd1e5fd1f26b2', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530176', '12.8.349.74.75.0.5.0176', 'DFO1233B1077', 'DUO1233B1077', 'MUH MUNAWIR SAZALI', 'SUKARAJA', '1990-05-11', 'SUKARAJA DESA SUKARAJA KEC. JEROWARU', 'LOMBOK TIMUR', 'Nusa Tenggara Barat', '+6281917448665', 'L', 'Islam', 'AB', 'WNI', '', 'glory.lombok@gmail.com', 'AMAQ MUSTIANI', 'Islam', 'Petani', 'INAQ MUSTIANI', 'Islam', 'Rumah Tangga', 'SUKARAJA DESA SUKARAJA KEC. JEROWARU', 'LOMBOK TIMUR', 'Nusa Tenggara Barat', null, null, 'af5da5f60dd8c5ef16d233ec59722389', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530177', '12.8.349.74.75.0.5.0177', 'DFL1233B1420', 'DUL1233B1420', 'MUHAMMAD RANDA ADITYA WIBOWO', 'Ampenan', '1993-05-29', 'jl.prasarana terusan no.6', 'matram', 'Nusa Tenggara Barat', '082341060040', 'L', 'Islam', 'A', 'WNI', '', '', 'Safroni', 'Islam', 'Wiraswasta', 'Andadari lucki toningtyas', 'Islam', 'Pegawai Negeri Sipil', 'jl. prasarana terusan no.6', 'Mataram', 'Nusa Tenggara Barat', null, null, '35815fdf174e8ad50de7bb2fdf654a73', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530178', '12.8.349.74.75.0.5.0178', 'DFL1233B1418', 'DUL1233B1418', 'ARIS SETIAWAN', 'Bima', '1994-07-17', 'jln panj masyarakat kekalek', 'Mataram', 'Nusa Tenggara Barat', '087866990747', 'L', 'Islam', '-', 'WNI', 'SMPN 6 MATARAM', 'arizcemen@yahoo.co.id', 'AHMAD H.M TAHIR S.E', 'Islam', 'Pegawai Negeri Sipil', 'MARYATUN', 'Islam', 'Pegawai Negeri Sipil', 'Kota Bima,Karara', 'Bima', 'Nusa Tenggara Barat', null, null, '70b1ac9eaa72756426590986f0fd2346', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530179', '12.8.349.74.75.0.5.0179', 'DFL1233B1416', 'DUL1233B1416', 'HERLINAWATI', 'RENSING', '1992-03-23', 'KARANG TAPEN', 'MATARAM', 'Nusa Tenggara Barat', '081997946664', 'P', 'Islam', 'O', 'WNI', '', '', 'SYAFI\'I', 'Islam', 'Wiraswasta', 'RAKMAH', 'Islam', 'Rumah Tangga', 'DESA PEMATUNG KEC.SAKBAR LOTIM', 'SELONG', 'Nusa Tenggara Barat', null, null, '4f4a64d5d6620ed371a3abe4cc0af9b6', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530180', '12.8.349.74.75.0.5.0180', 'DFL1233B1411', 'DUL1233B1411', 'MUHAMMAD HILMAN', 'PAYUNG', '1993-08-13', 'MONJOK KEBON JAYA BARAT MATARAM', 'MATARAM', 'Nusa Tenggara Barat', '087865681955', 'L', 'Islam', 'O', 'WNI', '', '', 'MENGGEP', 'Islam', 'Petani', 'SUHARNI', 'Islam', 'Petani', 'PAYUNG LOTIM', 'LOTIM', 'Nusa Tenggara Barat', null, null, 'bbc90f2de8f29b18a09bfdf5c464ee25', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530181', '12.8.349.74.75.0.5.0181', 'DFL1233B1410', 'DUL1233B1410', 'SAEPIN WAHYU HIDAYAT', 'MATARAM', '1993-09-16', 'Kr. Mas-Mas Monjok Barat', 'MATARAM', 'Nusa Tenggara Barat', '081907178911', 'L', 'Islam', '-', 'WNI', '', 'evin_wahyoe@ymail.com', 'Ir. Saifuddin,.M.Si', 'Islam', 'Pegawai Swasta', 'Baiq Sinar Asryani Jaya', 'Islam', 'Guru', 'Kr. Mas-Mas Monjok Barat', 'MATARAM', 'Nusa Tenggara Barat', null, null, '8ac7f097b24e90bbd329642bfd67ebe5', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530182', '12.8.349.74.75.0.5.0182', 'DFL1233B1408', 'DUL1233B1408', 'CHUSNUL HUDA', 'praya', '1994-02-17', 'Jln.Untung Surapati No.37 Praya', 'praya', 'Nusa Tenggara Barat', '081917384340', 'L', 'Islam', 'O', 'WNI', '', 'chusnulhuda87@yahoo.co.id', 'IWAN SATRIADI', 'Islam', 'Pegawai Negeri Sipil', 'BAIQ MARIATUN', 'Islam', 'Pegawai Swasta', 'Jln.Untung surapati No.37 Praya', 'PRAYA', 'Nusa Tenggara Barat', null, null, 'b8e2b5bfd08a034fcc11d455c0d92b81', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530183', '12.8.349.74.75.0.5.0183', 'DFL1233B1407', 'DUL1233B1407', 'BAIQ DWI CAHYA SETIANA', 'praya -lombok tengah', '1994-09-29', 'DAREK KEC.PRAYA BARAT DAYA', 'PRAYA', 'Nusa Tenggara Barat', '085737837858', 'P', 'Islam', 'O', 'WNI', '', 'thiyadelways@yahoo.com', 'LALU SIRNE', 'Islam', 'Pegawai Negeri Sipil', 'DENDE SALMIATUN MARIATNI', 'Islam', 'Pegawai Swasta', 'DAREK, KEC.PRAYA BARAT DAYA', 'PRAYA', 'Nusa Tenggara Barat', null, null, '863eaf40ba3c3ac5e8b75946bf04b7a5', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530184', '12.8.349.74.75.0.5.0184', 'DFL1233B1404', 'DUL1233B1404', 'LALU SUKARNA', 'MARONG  PRAYA TIMUR', '1992-11-04', 'MARONG ', 'praya', 'Nusa Tenggara Barat', '081907861087', 'L', 'Islam', '-', 'WNI', '', '', 'LALU SUDIRMAN', 'Islam', 'Petani', 'BAIQ MURNIATI', 'Islam', 'Petani', 'MARONG', 'PRAYA', 'Nusa Tenggara Barat', null, null, '5970251bed51f348e24a8c3e19afb3e1', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530185', '12.8.349.74.75.0.5.0185', 'DFL1233B1383', 'DUL1233B1383', 'I PUTU ROMI ASMARA JAYA', 'jembrana', '1994-10-04', 'darmasaba kecamatan narmada lombok barat', 'mataram', 'Nusa Tenggara Barat', '081933041214', 'L', 'Hindu', 'O', 'WNI', '', '', 'ir. putu wardana', 'Hindu', 'Pegawai Swasta', 'ruhul ahadiah', 'Islam', 'Pegawai Swasta', 'darmasaba kecamatan narmada lombok bara', 'MATARAM', 'Nusa Tenggara Barat', null, null, '8975bafa8304db6061f579d59acc3676', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530186', '12.8.349.74.75.0.5.0186', 'DFL1233B1379', 'DUL1233B1379', 'BAMBANG HARDIANSYAH', 'cilacap ', '1993-10-15', 'Jl. P Senggigi no 18', 'MATARAM', 'Nusa Tenggara Barat', '081805754233', 'L', 'Islam', 'AB', 'WNI', '', '', 'Pardiman ', 'Islam', 'Wiraswasta', 'Tasniah Tulamri', 'Islam', 'Rumah Tangga', 'Jl.P senggigi no 18', 'MATARAM', 'Nusa Tenggara Barat', null, null, 'ffa7ebc4aaf7d2162cf291e489caa4c3', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530187', '12.8.349.74.75.0.5.0187', 'DFL1233B1377', 'DUL1233B1377', 'LIFIZO MUCHLIS MANTESA', 'MATARAM', '1994-07-01', 'JL.BONDOWOSO III NO4', 'MATARAM', 'Nusa Tenggara Barat', '6287864038880', 'L', 'Islam', 'A', 'WNI', '', 'mantesalifizo@rocketmail.com', 'M. IKBAL S.H', 'Islam', 'Wiraswasta', 'YAHLIANA  R', 'Islam', 'Wiraswasta', 'JL.BONDOWOSO III NO4', 'MATARAM', 'Nusa Tenggara Barat', null, null, '069d4393277c6e924ad94277c9f388b2', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530188', '12.8.349.74.75.0.5.0188', 'DFL1233B1339', 'DUL1233B1339', 'DEDE SETIAWAN', 'Selong', '1993-09-20', 'Jln.Dasan Geres', 'Selong', 'Nusa Tenggara Barat', '087774466693', 'L', 'Islam', 'B', 'WNI', '', 'dedegreenholic@yahoo.com', 'Edi Hartadinata', 'Islam', 'Wiraswasta', 'Markidah', 'Islam', 'Wiraswasta', 'Jln.Dasan Geres', 'Banyuwangi', 'Jawa Timur', null, null, 'd12357970e5de762df61f38f6ae2c5f5', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530189', '12.8.349.74.75.0.5.0189', 'DFL1233B1336', 'DUL1233B1336', 'I PUTU BAGUS DARMAWAN WICAKASANA', 'JAKARTA', '1994-08-31', 'jalan bangau no 16 cakranegara', 'Mataram', 'Nusa Tenggara Barat', '081237093322', 'L', 'Hindu', 'B', 'WNI', '', '', 'I Made Duana Adi Darmawan', 'Hindu', 'Wiraswasta', 'Ni Luh Ketut Kariati', 'Hindu', 'Rumah Tangga', 'Jl. Bangau no 16 Cakranegara', 'Mataram', 'Nusa Tenggara Barat', null, null, '8fb3d411035d99f68f476340421217f8', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530190', '12.8.349.74.75.0.5.0190', 'DFL1233B1334', 'DUL1233B1334', 'L.BENI HARIYANTO', 'MATARAM', '1993-11-01', ' jln.pereburangkasari lngkungan dasan cerman asri', 'Mataram', 'Nusa Tenggara Barat', '087864200399', 'L', 'Islam', '-', 'WNI', '', '', 'Lalu hairil anwar', 'Islam', 'Wiraswasta', 'Nur ja\'nah', 'Islam', 'Rumah Tangga', 'jln.perabu rangkasari dasan cermen asri', 'MATARAM', 'Nusa Tenggara Barat', null, null, '31f217082892e7694dff9a9676fa2a93', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530191', '12.8.349.74.75.0.5.0191', 'DFL1233B1329', 'DUL1233B1329', 'LATHIFUL HAZAMI', 'jorong', '1994-02-23', 'RT 08 Renco, Kelurahan Kelayu Jorong, Kecamatan Selong', 'Selong, Lombok timur', 'Nusa Tenggara Barat', '081997977194', 'L', 'Islam', '-', 'WNI', '', '', 'MAKRUP', 'Islam', 'Lainnya', 'SANIAH', 'Islam', 'Petani', 'RT 08 Renco, Kelurahan Kelayu Jorong, Kecamatan Selong', 'Selong', 'Nusa Tenggara Barat', null, null, '870001d0bfd9098af2c6f32ce772ff85', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530192', '12.8.349.74.75.0.5.0192', 'DFL1233B1326', 'DUL1233B1326', 'LALU GRENDY GIANTARA NURMAN', 'JAKARTA', '1994-04-26', 'MT.BUAK , DARMAJI KEC.KOPANG', 'Selong', 'Nusa Tenggara Barat', '087865052902', 'L', 'Islam', 'O', 'WNI', '', '', 'LALU SABAR', 'Islam', 'Pegawai Negeri Sipil', 'KARTINI', 'Islam', 'Rumah Tangga', 'MT.BUAK , DARMAJI KEC.KOPANG', 'Selong', 'Nusa Tenggara Barat', null, null, 'ca6c3bccaed1533c477ea66606c169bf', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530193', '12.8.349.74.75.0.5.0193', 'DFL1233B1322', 'DUL1233B1322', 'AHMAD MEIRADI ', 'Banyumulek timur, Kediri LOBAR', '1993-05-25', 'Banyumulek Timur, Kediri LOBAR', 'MATARAM', 'Nusa Tenggara Barat', '087865694432', 'L', 'Islam', '-', 'WNI', '', '', 'H. Saalsah', 'Islam', 'Lainnya', 'Siti Nahdah', 'Islam', 'Lainnya', 'Banyumulek', 'Mataram', 'Nusa Tenggara Barat', null, null, 'd4958c2d81de207de8918027303330c8', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530194', '12.8.349.74.75.0.5.0194', 'DFL1233B1318', 'DUL1233B1318', 'ANDI KARYAWAN', 'Leong barat', '1995-08-19', 'Leong barat', 'Tanjung', 'Nusa Tenggara Barat', '082341441336', 'L', 'Islam', '-', 'WNI', '', '', 'Sodok', 'Islam', 'Petani', 'Misni', 'Islam', 'Rumah Tangga', 'Leong barat', 'Tanjung', 'Nusa Tenggara Barat', null, null, '7ebb44d610e0d7a21e95564be02e8de8', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530195', '12.8.349.74.75.0.5.0195', 'DFL1233B1317', 'DUL1233B1317', 'UHEL ARIATMAN', 'labanan Jaya', '1995-05-01', 'tetebatu Selatan', 'Selong, Lombok timur', 'Nusa Tenggara Barat', '087864516275', 'L', 'Islam', 'O', 'WNI', '', 'uariataman@gmail.com', 'H.Muntoha', 'Islam', 'Wiraswasta', 'Hj.Murnaah', 'Islam', 'Rumah Tangga', 'tetebatu Selatan', 'SELONG', 'Nusa Tenggara Barat', null, null, 'f8c2da8effe5a7a0bfd344dbb2f5a16d', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530196', '12.8.349.74.75.0.5.0196', 'DFL1233B1313', 'DUL1233B1313', 'ZUHRI JULIARDI', 'Masbagik', '1993-07-31', 'dusun tunjang selatan,desa paokmotong,kecamatan masbagik,lombok timur', 'MASBAGIK', 'Nusa Tenggara Barat', '087763222334', 'L', 'Islam', 'AB', 'WNI', '', 'zerojuly@ymail.com', 'Mawardi', 'Islam', 'Guru', 'Hannah', 'Islam', 'Guru', 'dusun tunjang selatan,desa paokmotong,kec.masbagik,LOTIM', 'Masbagik', 'Nusa Tenggara Barat', null, null, '55bf5e360a149eb24a0528d99a96ca44', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530197', '12.8.349.74.75.0.5.0197', 'DFL1233B1312', 'DUL1233B1312', 'EDI KURNIAWAN', 'SUMBAWA', '1994-07-06', 'DUSUN KABUYIT DESA LANGAM KECAMATAN LOPOK', 'SUMBAWA BESAR', 'Nusa Tenggara Barat', '087763085940', 'L', 'Islam', '-', 'WNI', '', '', 'AZHAR', 'Islam', 'Wiraswasta', 'SUKMA', 'Islam', 'Wiraswasta', 'LANGAM,SUMBAWA', 'LANGAM,SUMBAWA', 'Nusa Tenggara Barat', null, null, '3289524f496fb32cb6494ed60de84821', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530198', '12.8.349.74.75.0.5.0198', 'DFL1233B1310', 'DUL1233B1310', 'WIDIA JARNINGSIH', 'karya', '1994-09-03', 'jln. gotong royong gg mandiri 1 no 16 pejeruk ampenan', 'Mataram', 'Nusa Tenggara Barat', '083129029097', 'P', 'Islam', 'O', 'WNI', '', '', 'taufik', 'Islam', 'Wiraswasta', 'ernawati', 'Islam', 'Wiraswasta', 'jln raya ubung desa ubung loteng', 'praya', 'Nusa Tenggara Barat', null, null, 'eb94313f9515b7bdd179ede37b353a46', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530199', '12.8.349.74.75.0.5.0199', 'DFL1233B1308', 'DUL1233B1308', 'NAJAMUDIN', 'Kalijaga Selatan', '1994-12-31', 'Lendang Bunga Utara', 'LOMBOK TIMUR', 'Nusa Tenggara Barat', '081918277031', 'L', 'Islam', 'O', 'WNI', '', '', 'Amak Hairussyahidin', 'Islam', 'Petani', 'Inak Hairussyahidin', 'Islam', 'Rumah Tangga', 'Lendang Bunga Utara', 'LOMBOK TIMUR', 'Nusa Tenggara Barat', null, null, 'e14bd56bae004b1ffb3b3fb772954f52', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530200', '12.8.349.74.75.0.5.0200', 'DFL1233B1302', 'DUL1233B1302', 'FAHRUL HIDAYAT', 'DESA PAKEL KEC.GUNUNGSARI LOBAR', '1993-05-08', 'DESA PAKEL KEC.GUNUNGSARI LOBAR', 'MATARAM', 'Nusa Tenggara Barat', '081917420760', 'L', 'Islam', '-', 'WNI', '', '', 'MAHSUN', 'Islam', 'Pegawai Negeri Sipil', 'ROHMI HIDAYATI', 'Islam', 'Rumah Tangga', 'DESA PAKEL KEC. GUNUNGSARI LOBAR', 'MATARAM', 'Nusa Tenggara Barat', null, null, 'b6b89343e9a86a29bc564961c2e6c8ea', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530201', '12.8.349.74.75.0.5.0201', 'DFL1233B1293', 'DUL1233B1293', 'LALU NANANG ANSHORY', 'darek', '1992-04-09', 'dusun baleluah, desa darek, kecamatan praya barat daya', 'PRAYA', 'Nusa Tenggara Barat', '087865610030', 'L', 'Islam', '-', 'WNI', '', '', 'h. lalu rachman anshory', 'Islam', 'Pegawai Negeri Sipil', 'h. siti aminah', 'Islam', 'Rumah Tangga', 'dusun baleluah, desa dsrek, kecamatan praya barat daya', 'PRAYA', 'Nusa Tenggara Barat', null, null, '39c1ba2c1af71e40f833f85db3a8cf1d', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530202', '12.8.349.74.75.0.5.0202', 'DFL1233B1341', 'DUL1233B1341', 'LALU ANDRIWADI', 'suradadi', '1993-03-04', 'kotaraja kecamatan sikur', 'Lombok Timur', 'Nusa Tenggara Barat', '087763405277', 'L', 'Islam', '-', 'WNI', '', 'andre.wadi@rocketmail.com', 'lalau adnan', 'Islam', 'Wiraswasta', 'aminah', 'Islam', 'Rumah Tangga', 'kotaraja', 'lombok timur', 'Nusa Tenggara Barat', null, null, '720f8e6956d172ceca503fee73f2e933', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530203', '12.8.349.74.75.0.5.0203', 'DFL1233B1342', 'DUL1233B1342', 'HADI GUNAWAN', 'BAGEK GAET', '1993-10-05', 'BAGEK GAET DESA POHGADING TIMUR KEC.PRINGGABAYA KAB.LOMBOK TIMUR', 'SELONG', 'Nusa Tenggara Barat', '081918434349', 'L', 'Islam', 'O', 'WNI', '', '', 'NURTAWANG', 'Islam', 'Wiraswasta', 'ALM.NURHASANAH', 'Islam', 'Lainnya', 'BAGEK GAET DESA POHGADING TIMUR KEC.PRINGGABAYA KAB.LOMBOK TIMUR', 'Selong.Lombok Timur', 'Nusa Tenggara Barat', null, null, '77d3c8cdf47afd7f895ade6f83ddbcb9', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530204', '12.8.349.74.75.0.5.0204', 'DFL1233B1369', 'DUL1233B1369', 'RISFA WULAN AYUWANJANI', 'AIKMEL', '1992-04-02', 'ANJANI', 'SELONG', 'Nusa Tenggara Barat', '087863395003', 'P', 'Islam', 'AB', 'WNI', '', '', 'FATHURRAHMAN', 'Islam', 'Pegawai Swasta', 'GELIS SUHARYATI', 'Islam', 'Rumah Tangga', 'ANJANI', 'SELONG', 'Nusa Tenggara Barat', null, null, '612455de96e10a25b16ed6695ed0419f', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530205', '12.8.349.74.75.0.5.0205', 'DFL1233B1368', 'DUL1233B1368', 'M. ZAENUL ARIF AMRILLAH', 'tabanan', '1993-05-25', 'KEDIRI LOMBOK BARAT', 'kediri', 'Nusa Tenggara Barat', '087865367666', 'L', 'Islam', 'A', 'WNI', '', '', 'H. HASAN BASRY', 'Islam', 'Lainnya', 'MARTININGSIH', 'Islam', 'Rumah Tangga', 'KEDIRI', 'KEDIRI', 'Nusa Tenggara Barat', null, null, '5a1b1346fba250af3ca7f0973c9d20cf', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530206', '12.8.349.74.75.0.5.0206', 'DFL1233B1367', 'DUL1233B1367', 'IKHWAN AFRIYANDI', 'selandung', '1994-02-16', 'mujur', 'praya timur', 'Nusa Tenggara Barat', '081907195643', 'L', 'Islam', 'B', 'WNI', '', 'ikhwanafriyandi@yahoo.co.id', 'M.MARZUKI', 'Islam', 'Pegawai Negeri Sipil', 'NURUL HAYATI', 'Islam', 'Rumah Tangga', 'MUJUR', 'PRAYA TIMUR', 'Nusa Tenggara Barat', null, null, '38c16843c834265b50575ef09e7a531c', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530207', '12.8.349.74.75.0.5.0207', 'DFL1233B1364', 'DUL1233B1364', 'ARMAN SATRIADI', 'Kelayu,Selong. Lombok Timur', '1993-09-18', 'JLN. TGH. UMAR NO 48', 'Selong, Lombok timur', 'Nusa Tenggara Barat', '085238999149', 'L', 'Islam', 'A', 'WNI', '', 'arman.diabloo@gmail.com', 'Drs. Abdul Kadir (alm)', 'Islam', 'Guru', 'Bq. Misatul Aini', 'Islam', 'Rumah Tangga', 'jln. tgh. umar no 48', 'Selong, Lombok Timur', 'Nusa Tenggara Barat', null, null, 'ae5537445e66f18edd43487bc128d5f8', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530208', '12.8.349.74.75.0.5.0208', 'DFL1233B1363', 'DUL1233B1363', 'HENDRO SUPRIANTO', 'Gunung sari', '1993-10-06', 'Midang Kecamatan Gunung Sari', 'Mataram', 'Nusa Tenggara Barat', '082340105456', 'L', 'Islam', '-', 'WNI', '', '', 'Ponirin', 'Islam', 'Pegawai Negeri Sipil', 'Yanti', 'Islam', 'Rumah Tangga', 'Midang Kecamatan Gunung Sari', 'Mataram', 'Nusa Tenggara Barat', null, null, 'b896352744f120f35b76efdcdc39db6c', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530209', '12.8.349.74.75.0.5.0209', 'DFL1233B1362', 'DUL1233B1362', 'MUNAWWARAH', 'Dompu', '1994-12-29', 'Jl. Serayu I/74 blok C BTN Kekalik Baru', 'Mataram', 'Nusa Tenggara Barat', '081999848933', 'P', 'Islam', '-', 'WNI', '', 'meryalmusally@yahoo.co.id', 'Fuad A.Rahman,S.Pd.I', 'Islam', 'Pegawai Negeri Sipil', 'Hanifah Nasar,S.Ag', 'Islam', 'Pegawai Negeri Sipil', 'Jl. Kartini No.23 lingk.Magenda Kel.Potu', 'dompu', 'Nusa Tenggara Barat', null, null, '67b9a62a31846f9208d1eac4161d836d', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530210', '12.8.349.74.75.0.5.0210', 'DFL1233B1359', 'DUL1233B1359', 'TRI BASYOFI SAHRURAMADHON', 'leneng', '1994-03-05', 'leneng', 'praya', 'Nusa Tenggara Barat', '081907236369', 'L', 'Islam', '-', 'WNI', '', '', 'Drs.zaenuddin', 'Islam', 'Pegawai Negeri Sipil', 'siti zaenab', 'Islam', 'Pegawai Negeri Sipil', 'leneng', 'praya', 'Nusa Tenggara Barat', null, null, 'c22d009947f4326b6dc2b64e792732b8', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530211', '12.8.349.74.75.0.5.0211', 'DFL1233B1358', 'DUL1233B1358', 'JAENAB', 'dompu ntb', '1994-01-03', 'jln.lintas sumbawa no.135', 'dompu', 'Nusa Tenggara Barat', '081918027582', 'P', 'Islam', '-', 'WNI', '', '', 'ramlin', 'Islam', 'Petani', 'amnah', 'Islam', 'Rumah Tangga', 'jln.lintas sumbawa no.135', 'Dompu', 'Nusa Tenggara Barat', null, null, '63b1ddca0a6e84b2ea788be42cbbd080', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530212', '12.8.349.74.75.0.5.0212', 'DFL1233B1356', 'DUL1233B1356', 'FAIZAL SUGIARTO', 'kupang', '1993-05-27', 'jl.wisma seruni 4 no .9 ', 'MATARAM', 'Nusa Tenggara Barat', '0370641825', 'L', 'Islam', 'O', 'WNI', '', 'fayzagatha@yahoo.co.id', 'Sugiarto', 'Islam', 'Pegawai Negeri Sipil', 'Supriatun', 'Islam', 'Rumah Tangga', 'Jl.wisma seruni 4 no .9', 'MATARAM', 'Nusa Tenggara Barat', null, null, '4402c88def9ae53cd299aab450b8ba04', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530213', '12.8.349.74.75.0.5.0213', 'DFL1233B1355', 'DUL1233B1355', 'DIDI PUTRA HARIYADI', 'raba bima', '1994-01-22', 'rabakodo', 'BIMA', 'Nusa Tenggara Barat', '082342001041', 'L', 'Islam', '-', 'WNI', '', '', 'khairuddin ', 'Islam', 'Pegawai Negeri Sipil', 'nurmin', 'Islam', 'Pegawai Negeri Sipil', 'kabupaten bima', 'BIMA', 'Nusa Tenggara Barat', null, null, 'edfbb022f2c77fe65e5808d7efa74e9a', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530214', '12.8.349.74.75.0.5.0214', 'DFL1233B1351', 'DUL1233B1351', 'LALU ELWAN WIBAWA', 'darmaji', '1994-02-22', 'darmaji ', 'PRAYA', 'Nusa Tenggara Barat', '082340460002', 'L', 'Islam', 'O', 'WNI', '', '', 'lalu suwarja', 'Islam', 'Pegawai Negeri Sipil', 'baiq januarti', 'Islam', 'Rumah Tangga', 'darmaji kecamatan kopang', 'PRAYA', 'Nusa Tenggara Barat', null, null, '917fe4142d1ed626ab69abbd1a7ac160', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530215', '12.8.349.74.75.0.5.0215', 'DFL1233B1347', 'DUL1233B1347', 'RINNEDY', 'mataram', '1988-01-18', 'jl. ahmad yani no9 ', 'sweta', 'Nusa Tenggara Barat', '087864038496', 'L', 'Budha', 'B', 'WNI', 'ud. setia kawan', 'musamushi_rinnedy@yahoo.com', 'gunawan taman', 'Budha', 'Wiraswasta', 'lilik suyenti', 'Budha', 'Wiraswasta', 'praya', 'praya', 'Nusa Tenggara Barat', null, null, '599e521dcfdaa6b294c5e163b31f9b85', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530216', '12.8.349.74.75.0.5.0216', 'DFL1233B1346', 'DUL1233B1346', 'EKO NOVIAN PRIHARTONO', 'MATARAM', '1984-11-16', 'JL. HASANUDDIN NO 88 CAKRANEGARA', 'MATARAM', 'Nusa Tenggara Barat', '083129325293', 'L', 'Islam', 'A', 'WNI', '', 'kribo_sembrono@yahoo.com', 'DIDIET SANTOSO', 'Islam', 'Pegawai Swasta', 'SITI DURIANI', 'Islam', 'Wiraswasta', 'JL HASANUDDIN NO 88', 'MATARAM', 'Nusa Tenggara Barat', null, null, '32b3a0a07607ca97ed1e6ce4d751540f', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530217', '12.8.349.74.75.0.5.0217', 'DFL1233B1344', 'DUL1233B1344', 'ZAINUR RAHMAN', 'Soloh', '1993-07-15', 'Soloh Desa Rempek Kec.Gangga', 'Lombok Utara', 'Nusa Tenggara Barat', '', 'L', 'Islam', '-', 'WNI', '', '', 'Mahti', 'Islam', 'Petani', 'Ramnip', 'Islam', 'Petani', 'Soloh Desa Rempek Kec. Gangga', 'Tanjung, kabupaten lombok utara', 'Nusa Tenggara Barat', null, null, '9bd9cec04ae32f30763c18486df60490', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530218', '12.8.349.74.75.0.5.0218', 'DFL1233B1291', 'DUL1233B1291', 'I WAYAN SURYADIANATA', 'MATARAM', '1994-02-27', 'jln. wr.supratman Gg.6 no.19 karang medain barat', 'MATARAM', 'Nusa Tenggara Barat', '083129487655', 'L', 'Hindu', '-', 'WNI', '', 'iwayansuryadianata@gmail.com', 'i nengah agus supryadi', 'Hindu', 'Lainnya', 'ni nyoman dwi', 'Hindu', 'Rumah Tangga', 'jln. wr.supratman Gg.6 no.19 karang medain barat', 'MATARAM', 'Nusa Tenggara Barat', null, null, 'c361e6bdb547bc7fa782606ae83e927b', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530219', '12.8.349.74.75.0.5.0219', 'DFL1233B1340', 'DUL1233B1340', 'AMIR', 'kekeri', '1992-08-06', 'kekeri', 'MATARAM', 'Nusa Tenggara Barat', '087765088914', 'L', 'Islam', '-', 'WNI', '', '', 'l. japri', 'Islam', 'Lainnya', 'hj. ripaah', 'Islam', 'Rumah Tangga', 'kekeri', 'MATARAM', 'Nusa Tenggara Barat', '', '', 'a2446de47740a983852f6b90dd768fe6', 'N', '0', '0000-00-00 00:00:00', null, null);
INSERT INTO `mahasiswa` VALUES ('1210530235', '12.8.349.74.75.0.5.0235', 'DFL1233B1406', 'DUL1233B1406', 'GELEN MARTA DINATA', 'lendang nangka', '1994-07-27', 'Lendang nangka masbagik', 'selong', 'Nusa Tenggara Barat', '087763086275', 'L', 'Islam', 'O', 'WNI', '', '', 'acep suherlan', 'Islam', 'Lainnya', 'gita purnawati hakim', 'Islam', 'Rumah Tangga', 'lendang nangka masbagik', 'selong', 'Nusa Tenggara Barat', '', '', 'a2446de47740a983852f6b90dd768fe6', 'N', '0', '0000-00-00 00:00:00', null, null);

-- ----------------------------
-- Table structure for `matakuliah`
-- ----------------------------
DROP TABLE IF EXISTS `matakuliah`;
CREATE TABLE `matakuliah` (
  `kode_matakuliah` char(10) NOT NULL,
  `nama_matakuliah` varchar(75) NOT NULL,
  `sks_teori` tinyint(1) unsigned DEFAULT NULL,
  `sks_praktek` tinyint(1) unsigned DEFAULT NULL,
  `sks_praktikum` tinyint(1) unsigned DEFAULT NULL,
  `kode_pengguna_add` smallint(5) unsigned NOT NULL,
  `tanggal_edit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `kode_pengguna_edit` smallint(6) unsigned DEFAULT NULL,
  `tanggal_add` datetime DEFAULT NULL,
  PRIMARY KEY (`kode_matakuliah`),
  KEY `fk_matakuliah_pengguna` (`kode_pengguna_add`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Menampung data matakuliah semua jurusan.';

-- ----------------------------
-- Records of matakuliah
-- ----------------------------
INSERT INTO `matakuliah` VALUES ('TDPK210001', 'Bahasa Inggris II', '2', '0', '0', '1', '2012-12-26 21:15:07', null, '2012-12-26 14:15:07');
INSERT INTO `matakuliah` VALUES ('TDPK210002', 'Prak. Pemrograman I', '0', '2', '0', '1', '2012-12-26 21:15:34', null, '2012-12-26 14:15:34');
INSERT INTO `matakuliah` VALUES ('TDPK210003', 'Pemrograman I', '2', '0', '0', '1', '2012-12-26 14:15:47', '1', '2012-12-26 14:15:25');
INSERT INTO `matakuliah` VALUES ('TSPK110001', 'Praktikum Algoritma dan Pemrograman', '0', '0', '1', '1', '2012-12-14 13:25:25', null, '2012-12-14 06:25:25');
INSERT INTO `matakuliah` VALUES ('TSPK210001', 'Kewarganegaraan', '2', '0', '0', '1', '2012-12-13 06:43:47', '1', '2012-12-13 06:43:36');
INSERT INTO `matakuliah` VALUES ('TSPK210002', 'Algoritma dan Pemrograman', '2', '0', '0', '1', '2012-12-14 13:25:03', null, '2012-12-14 06:25:03');
INSERT INTO `matakuliah` VALUES ('TSPK210003', 'Pendidikan Agama', '2', '0', '0', '1', '2012-12-21 09:16:29', '1', '2012-12-14 06:25:41');
INSERT INTO `matakuliah` VALUES ('TSPK210004', 'Matematika Diskrit', '2', '0', '0', '1', '2012-12-26 13:58:03', '1', '2012-12-13 06:41:42');

-- ----------------------------
-- Table structure for `matakuliah2`
-- ----------------------------
DROP TABLE IF EXISTS `matakuliah2`;
CREATE TABLE `matakuliah2` (
  `id` int(11) NOT NULL,
  `kode_matakuliah` char(10) NOT NULL,
  `nama_matakuliah` varchar(75) NOT NULL,
  `sks_teori` tinyint(1) unsigned DEFAULT NULL,
  `sks_praktek` tinyint(1) unsigned DEFAULT NULL,
  `sks_praktikum` tinyint(1) unsigned DEFAULT NULL,
  `kode_pengguna_add` smallint(5) unsigned NOT NULL,
  `tanggal_edit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `kode_pengguna_edit` smallint(6) unsigned DEFAULT NULL,
  `tanggal_add` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_matakuliah_pengguna` (`kode_pengguna_add`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Menampung data matakuliah semua jurusan.';

-- ----------------------------
-- Records of matakuliah2
-- ----------------------------

-- ----------------------------
-- Table structure for `matakuliah_prasyarat`
-- ----------------------------
DROP TABLE IF EXISTS `matakuliah_prasyarat`;
CREATE TABLE `matakuliah_prasyarat` (
  `kode_matakuliah_prasyarat` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `kode_nama_kurikulum` smallint(5) unsigned NOT NULL,
  `matakuliah_yg_diambil` char(10) DEFAULT NULL,
  `matakuliah_prasyarat` char(10) DEFAULT NULL,
  `kode_pengguna_add` smallint(5) unsigned DEFAULT NULL,
  `tanggal_add` datetime DEFAULT NULL,
  `kode_pengguna_edit` smallint(6) unsigned DEFAULT NULL,
  `tanggal_edit` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`kode_matakuliah_prasyarat`),
  KEY `FK_matakuliah_prasyarat_nama_kurikulum` (`kode_nama_kurikulum`),
  KEY `fk_matakuliah_prasyarat_matakuliah` (`matakuliah_yg_diambil`),
  KEY `fk_matakuliah_prasyarat_matakuliah2` (`matakuliah_prasyarat`),
  KEY `fk_matakuliah_prasyarat_pengguna` (`kode_pengguna_add`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1 COMMENT='Menampung data matakuliah prasyarat per kurikulum.';

-- ----------------------------
-- Records of matakuliah_prasyarat
-- ----------------------------
INSERT INTO `matakuliah_prasyarat` VALUES ('29', '4', '21', '23', null, '2012-12-28 02:24:34', null, '2012-12-28 09:24:34');
INSERT INTO `matakuliah_prasyarat` VALUES ('30', '5', '25', '26', null, '2012-12-28 02:40:15', null, '2012-12-28 09:40:15');
INSERT INTO `matakuliah_prasyarat` VALUES ('31', '5', '26', '25', null, '2013-01-15 12:53:19', null, '2013-01-15 19:53:19');
INSERT INTO `matakuliah_prasyarat` VALUES ('32', '5', '26', '28', null, '2013-01-15 12:53:19', null, '2013-01-15 19:53:19');
INSERT INTO `matakuliah_prasyarat` VALUES ('33', '5', '26', '31', null, '2013-01-15 12:53:19', null, '2013-01-15 19:53:19');
INSERT INTO `matakuliah_prasyarat` VALUES ('34', '5', '26', '26', null, '2013-01-16 03:25:04', null, '2013-01-16 10:25:04');
INSERT INTO `matakuliah_prasyarat` VALUES ('35', '5', '26', '28', null, '2013-01-16 03:25:04', null, '2013-01-16 10:25:04');
INSERT INTO `matakuliah_prasyarat` VALUES ('36', '5', '26', '29', null, '2013-01-16 03:25:04', null, '2013-01-16 10:25:04');

-- ----------------------------
-- Table structure for `nama_jurusan`
-- ----------------------------
DROP TABLE IF EXISTS `nama_jurusan`;
CREATE TABLE `nama_jurusan` (
  `kode_nama_jurusan` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `kode_jurusan` char(2) NOT NULL,
  `kode_jenjang` char(1) NOT NULL,
  `nama_jurusan` varchar(80) NOT NULL,
  `singkatan_jurusan` char(4) NOT NULL,
  `kode_pengguna_add` smallint(5) unsigned NOT NULL,
  `tanggal_add` datetime NOT NULL,
  `kode_pengguna_edit` smallint(6) unsigned DEFAULT NULL,
  `tanggal_edit` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`kode_nama_jurusan`),
  KEY `fk_nama_jurusan_jenjang` (`kode_jenjang`),
  KEY `fk_nama_jurusan_jurusan` (`kode_jurusan`),
  KEY `fk_nama_jurusan_pengguna` (`kode_pengguna_add`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nama_jurusan
-- ----------------------------
INSERT INTO `nama_jurusan` VALUES ('3', '01', '0', 'D3 Manajemen', 'D3M', '1', '2012-12-28 01:51:50', '1', '2012-12-28 01:59:41');
INSERT INTO `nama_jurusan` VALUES ('4', '01', '1', 'S1 Informatika', 'S1 I', '1', '2012-12-28 02:39:15', null, '2012-12-28 09:39:15');

-- ----------------------------
-- Table structure for `nama_kurikulum`
-- ----------------------------
DROP TABLE IF EXISTS `nama_kurikulum`;
CREATE TABLE `nama_kurikulum` (
  `kode_nama_kurikulum` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `nama_kurikulum` char(4) NOT NULL,
  `kode_nama_jurusan` smallint(5) unsigned NOT NULL,
  `status_kurikulum` enum('A','N') NOT NULL DEFAULT 'N',
  `kode_pengguna_add` smallint(5) unsigned NOT NULL,
  `tanggal_add` datetime NOT NULL,
  `kode_pengguna_edit` smallint(6) unsigned DEFAULT NULL,
  `tanggal_edit` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`kode_nama_kurikulum`),
  KEY `fk_nama_kurikulum_jurusan` (`kode_nama_jurusan`),
  KEY `fk_nama_kurikulum_pengguna` (`kode_pengguna_add`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='Menampung data nama pengenal kurikulum.';

-- ----------------------------
-- Records of nama_kurikulum
-- ----------------------------
INSERT INTO `nama_kurikulum` VALUES ('4', '2010', '3', 'A', '1', '2012-12-28 02:00:22', null, '2012-12-28 09:00:22');
INSERT INTO `nama_kurikulum` VALUES ('5', '2010', '4', 'A', '1', '2012-12-28 02:39:34', null, '2012-12-28 09:39:34');

-- ----------------------------
-- Table structure for `pembayaran`
-- ----------------------------
DROP TABLE IF EXISTS `pembayaran`;
CREATE TABLE `pembayaran` (
  `kode_pembayaran` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `kode_tahun_akademik` smallint(5) unsigned DEFAULT NULL,
  `nim` char(10) NOT NULL,
  `kode_jenis_pembayaran` smallint(5) unsigned DEFAULT NULL,
  `status_pembayaran` enum('L','D','LD') DEFAULT NULL,
  `tanggal_add` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tanggal_edit` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`kode_pembayaran`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pembayaran
-- ----------------------------
INSERT INTO `pembayaran` VALUES ('2', '0', '1210520098', null, null, '2013-02-04 01:35:32', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for `pembayaran1`
-- ----------------------------
DROP TABLE IF EXISTS `pembayaran1`;
CREATE TABLE `pembayaran1` (
  `kode_pembayaran` int(11) NOT NULL AUTO_INCREMENT,
  `kode_tahun_akademik` smallint(1) NOT NULL,
  `tanggal_add` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tanggal_edit` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`kode_pembayaran`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pembayaran1
-- ----------------------------
INSERT INTO `pembayaran1` VALUES ('4', '0', '2012-12-21 08:12:37', '0000-00-00 00:00:00');
INSERT INTO `pembayaran1` VALUES ('5', '0', '2012-12-29 01:36:00', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for `pembayaran22`
-- ----------------------------
DROP TABLE IF EXISTS `pembayaran22`;
CREATE TABLE `pembayaran22` (
  `kode_pembayaran` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `kode_tahun_akademik` smallint(5) unsigned NOT NULL,
  `nim` char(10) NOT NULL,
  `kode_jenis_pembayaran` smallint(5) unsigned NOT NULL,
  `status_pembayaran` enum('L','D','LD') NOT NULL,
  PRIMARY KEY (`kode_pembayaran`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pembayaran22
-- ----------------------------

-- ----------------------------
-- Table structure for `permissions`
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions` (
  `permission_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(100) NOT NULL,
  `status` enum('active','inactive','deleted') DEFAULT 'active',
  PRIMARY KEY (`permission_id`)
) ENGINE=MyISAM AUTO_INCREMENT=303 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of permissions
-- ----------------------------
INSERT INTO `permissions` VALUES ('1', 'Site.Signin.Allow', 'Allow users to login to the site', 'active');
INSERT INTO `permissions` VALUES ('2', 'Site.Content.View', 'Allow users to view the Content Context', 'active');
INSERT INTO `permissions` VALUES ('3', 'Site.Reports.View', 'Allow users to view the Reports Context', 'active');
INSERT INTO `permissions` VALUES ('4', 'Site.Settings.View', 'Allow users to view the Settings Context', 'active');
INSERT INTO `permissions` VALUES ('5', 'Site.Developer.View', 'Allow users to view the Developer Context', 'active');
INSERT INTO `permissions` VALUES ('6', 'Bonfire.Roles.Manage', 'Allow users to manage the user Roles', 'active');
INSERT INTO `permissions` VALUES ('7', 'Bonfire.Users.Manage', 'Allow users to manage the site Users', 'active');
INSERT INTO `permissions` VALUES ('8', 'Bonfire.Users.View', 'Allow users access to the User Settings', 'active');
INSERT INTO `permissions` VALUES ('9', 'Bonfire.Users.Add', 'Allow users to add new Users', 'active');
INSERT INTO `permissions` VALUES ('10', 'Bonfire.Database.Manage', 'Allow users to manage the Database settings', 'active');
INSERT INTO `permissions` VALUES ('11', 'Bonfire.Emailer.Manage', 'Allow users to manage the Emailer settings', 'active');
INSERT INTO `permissions` VALUES ('12', 'Bonfire.Logs.View', 'Allow users access to the Log details', 'active');
INSERT INTO `permissions` VALUES ('13', 'Bonfire.Logs.Manage', 'Allow users to manage the Log files', 'active');
INSERT INTO `permissions` VALUES ('14', 'Bonfire.Emailer.View', 'Allow users access to the Emailer settings', 'active');
INSERT INTO `permissions` VALUES ('15', 'Site.Signin.Offline', 'Allow users to login to the site when the site is offline', 'active');
INSERT INTO `permissions` VALUES ('16', 'Bonfire.Permissions.View', 'Allow access to view the Permissions menu unders Settings Context', 'active');
INSERT INTO `permissions` VALUES ('17', 'Bonfire.Permissions.Manage', 'Allow access to manage the Permissions in the system', 'active');
INSERT INTO `permissions` VALUES ('18', 'Bonfire.Roles.Delete', 'Allow users to delete user Roles', 'active');
INSERT INTO `permissions` VALUES ('19', 'Bonfire.Modules.Add', 'Allow creation of modules with the builder.', 'active');
INSERT INTO `permissions` VALUES ('20', 'Bonfire.Modules.Delete', 'Allow deletion of modules.', 'active');
INSERT INTO `permissions` VALUES ('21', 'Permissions.Administrator.Manage', 'To manage the access control permissions for the Administrator role.', 'active');
INSERT INTO `permissions` VALUES ('22', 'Permissions.Editor.Manage', 'To manage the access control permissions for the Editor role.', 'inactive');
INSERT INTO `permissions` VALUES ('50', 'Bonfire.Roles.Add', 'To add New Roles', 'active');
INSERT INTO `permissions` VALUES ('51', 'Site.Jurusan.View', 'Allow user to view the Jurusan Context.', 'active');
INSERT INTO `permissions` VALUES ('24', 'Permissions.User.Manage', 'To manage the access control permissions for the User role.', 'active');
INSERT INTO `permissions` VALUES ('25', 'Permissions.Developer.Manage', 'To manage the access control permissions for the Developer role.', 'inactive');
INSERT INTO `permissions` VALUES ('49', 'Bonfire.Profiler.View', 'To view the Console Profiler Bar.', 'active');
INSERT INTO `permissions` VALUES ('27', 'Activities.Own.View', 'To view the users own activity logs', 'active');
INSERT INTO `permissions` VALUES ('28', 'Activities.Own.Delete', 'To delete the users own activity logs', 'active');
INSERT INTO `permissions` VALUES ('29', 'Activities.User.View', 'To view the user activity logs', 'active');
INSERT INTO `permissions` VALUES ('30', 'Activities.User.Delete', 'To delete the user activity logs, except own', 'active');
INSERT INTO `permissions` VALUES ('31', 'Activities.Module.View', 'To view the module activity logs', 'active');
INSERT INTO `permissions` VALUES ('32', 'Activities.Module.Delete', 'To delete the module activity logs', 'active');
INSERT INTO `permissions` VALUES ('33', 'Activities.Date.View', 'To view the users own activity logs', 'active');
INSERT INTO `permissions` VALUES ('34', 'Activities.Date.Delete', 'To delete the dated activity logs', 'active');
INSERT INTO `permissions` VALUES ('35', 'Bonfire.UI.Manage', 'Manage the Bonfire UI settings', 'active');
INSERT INTO `permissions` VALUES ('36', 'Bonfire.Settings.View', 'To view the site settings page.', 'active');
INSERT INTO `permissions` VALUES ('37', 'Bonfire.Settings.Manage', 'To manage the site settings.', 'active');
INSERT INTO `permissions` VALUES ('38', 'Bonfire.Activities.View', 'To view the Activities menu.', 'active');
INSERT INTO `permissions` VALUES ('39', 'Bonfire.Database.View', 'To view the Database menu.', 'active');
INSERT INTO `permissions` VALUES ('40', 'Bonfire.Migrations.View', 'To view the Migrations menu.', 'active');
INSERT INTO `permissions` VALUES ('41', 'Bonfire.Builder.View', 'To view the Modulebuilder menu.', 'active');
INSERT INTO `permissions` VALUES ('42', 'Bonfire.Roles.View', 'To view the Roles menu.', 'active');
INSERT INTO `permissions` VALUES ('43', 'Bonfire.Sysinfo.View', 'To view the System Information page.', 'active');
INSERT INTO `permissions` VALUES ('44', 'Bonfire.Translate.Manage', 'To manage the Language Translation.', 'active');
INSERT INTO `permissions` VALUES ('45', 'Bonfire.Translate.View', 'To view the Language Translate menu.', 'active');
INSERT INTO `permissions` VALUES ('46', 'Bonfire.UI.View', 'To view the UI/Keyboard Shortcut menu.', 'active');
INSERT INTO `permissions` VALUES ('47', 'Bonfire.Update.Manage', 'To manage the Bonfire Update.', 'active');
INSERT INTO `permissions` VALUES ('48', 'Bonfire.Update.View', 'To view the Developer Update menu.', 'active');
INSERT INTO `permissions` VALUES ('262', 'Nama_Kurikulum.Jurusan.Create', '', 'active');
INSERT INTO `permissions` VALUES ('261', 'Nama_Kurikulum.Jurusan.View', '', 'active');
INSERT INTO `permissions` VALUES ('260', 'Kurikulum.Jurusan.Delete', '', 'active');
INSERT INTO `permissions` VALUES ('259', 'Kurikulum.Jurusan.Edit', '', 'active');
INSERT INTO `permissions` VALUES ('65', 'Permissions.Mahasiswa.Manage', 'To manage the access control permissions for the Mahasiswa role.', 'active');
INSERT INTO `permissions` VALUES ('258', 'Kurikulum.Jurusan.Create', '', 'active');
INSERT INTO `permissions` VALUES ('250', 'Jenjang.Jurusan.Create', '', 'active');
INSERT INTO `permissions` VALUES ('251', 'Jenjang.Jurusan.Edit', '', 'active');
INSERT INTO `permissions` VALUES ('252', 'Jenjang.Jurusan.Delete', '', 'active');
INSERT INTO `permissions` VALUES ('253', 'Kompetensi.Jurusan.View', '', 'active');
INSERT INTO `permissions` VALUES ('254', 'Kompetensi.Jurusan.Create', '', 'active');
INSERT INTO `permissions` VALUES ('255', 'Kompetensi.Jurusan.Edit', '', 'active');
INSERT INTO `permissions` VALUES ('257', 'Kurikulum.Jurusan.ViewDetail', '', 'active');
INSERT INTO `permissions` VALUES ('256', 'Kompetensi.Jurusan.Delete', '', 'active');
INSERT INTO `permissions` VALUES ('249', 'Jenjang.Jurusan.View', '', 'active');
INSERT INTO `permissions` VALUES ('248', 'Data_Jurusan.Jurusan.Delete', '', 'active');
INSERT INTO `permissions` VALUES ('284', 'Matakuliah_Prasyarat.Jurusan.Delete', '', 'active');
INSERT INTO `permissions` VALUES ('283', 'Matakuliah_Prasyarat.Jurusan.Edit', '', 'active');
INSERT INTO `permissions` VALUES ('245', 'Data_Jurusan.Jurusan.View', '', 'active');
INSERT INTO `permissions` VALUES ('282', 'Matakuliah_Prasyarat.Jurusan.Create', '', 'active');
INSERT INTO `permissions` VALUES ('281', 'Matakuliah_Prasyarat.Jurusan.View', '', 'active');
INSERT INTO `permissions` VALUES ('272', 'Nama_Jurusan.Jurusan.Delete', '', 'active');
INSERT INTO `permissions` VALUES ('271', 'Nama_Jurusan.Jurusan.Edit', '', 'active');
INSERT INTO `permissions` VALUES ('270', 'Nama_Jurusan.Jurusan.Create', '', 'active');
INSERT INTO `permissions` VALUES ('269', 'Nama_Jurusan.Jurusan.View', '', 'active');
INSERT INTO `permissions` VALUES ('268', 'Sistem_Penilaian.Jurusan.Delete', '', 'active');
INSERT INTO `permissions` VALUES ('267', 'Sistem_Penilaian.Jurusan.Edit', '', 'active');
INSERT INTO `permissions` VALUES ('266', 'Sistem_Penilaian.Jurusan.Create', '', 'active');
INSERT INTO `permissions` VALUES ('265', 'Sistem_Penilaian.Jurusan.View', '', 'active');
INSERT INTO `permissions` VALUES ('264', 'Nama_Kurikulum.Jurusan.Delete', '', 'active');
INSERT INTO `permissions` VALUES ('263', 'Nama_Kurikulum.Jurusan.Edit', '', 'active');
INSERT INTO `permissions` VALUES ('246', 'Data_Jurusan.Jurusan.Create', '', 'active');
INSERT INTO `permissions` VALUES ('247', 'Data_Jurusan.Jurusan.Edit', '', 'active');
INSERT INTO `permissions` VALUES ('232', 'Matakuliah.Jurusan.Delete', '', 'active');
INSERT INTO `permissions` VALUES ('231', 'Matakuliah.Jurusan.Edit', '', 'active');
INSERT INTO `permissions` VALUES ('230', 'Matakuliah.Jurusan.Create', '', 'active');
INSERT INTO `permissions` VALUES ('229', 'Matakuliah.Jurusan.View', '', 'active');
INSERT INTO `permissions` VALUES ('241', 'Beban_Studi.Jurusan.View', '', 'active');
INSERT INTO `permissions` VALUES ('242', 'Beban_Studi.Jurusan.Create', '', 'active');
INSERT INTO `permissions` VALUES ('243', 'Beban_Studi.Jurusan.Edit', '', 'active');
INSERT INTO `permissions` VALUES ('244', 'Beban_Studi.Jurusan.Delete', '', 'active');
INSERT INTO `permissions` VALUES ('273', 'PredikatKelulusan.Jurusan.View', '', 'active');
INSERT INTO `permissions` VALUES ('274', 'PredikatKelulusan.Jurusan.Create', '', 'active');
INSERT INTO `permissions` VALUES ('275', 'PredikatKelulusan.Jurusan.Edit', '', 'active');
INSERT INTO `permissions` VALUES ('276', 'PredikatKelulusan.Jurusan.Delete', '', 'active');
INSERT INTO `permissions` VALUES ('277', 'Tahunakademik.Jurusan.View', '', 'active');
INSERT INTO `permissions` VALUES ('278', 'Tahunakademik.Jurusan.Create', '', 'active');
INSERT INTO `permissions` VALUES ('279', 'Tahunakademik.Jurusan.Edit', '', 'active');
INSERT INTO `permissions` VALUES ('280', 'Tahunakademik.Jurusan.Delete', '', 'active');
INSERT INTO `permissions` VALUES ('285', 'Site.Keuangan.View', 'Allow user to view the Keuangan Context.', 'active');
INSERT INTO `permissions` VALUES ('286', 'Jenis_Pembayaran.Keuangan.View', '', 'active');
INSERT INTO `permissions` VALUES ('287', 'Jenis_Pembayaran.Keuangan.Create', '', 'active');
INSERT INTO `permissions` VALUES ('288', 'Jenis_Pembayaran.Keuangan.Edit', '', 'active');
INSERT INTO `permissions` VALUES ('289', 'Jenis_Pembayaran.Keuangan.Delete', '', 'active');
INSERT INTO `permissions` VALUES ('290', 'Pembayaran.Keuangan.View', '', 'active');
INSERT INTO `permissions` VALUES ('291', 'Pembayaran.Keuangan.Create', '', 'active');
INSERT INTO `permissions` VALUES ('292', 'Pembayaran.Keuangan.Edit', '', 'active');
INSERT INTO `permissions` VALUES ('293', 'Pembayaran.Keuangan.Delete', '', 'active');
INSERT INTO `permissions` VALUES ('294', 'Site.Manajemen.View', 'Allow user to view the Manajemen Context.', 'active');
INSERT INTO `permissions` VALUES ('295', 'Departemen.Manajemen.View', '', 'active');
INSERT INTO `permissions` VALUES ('296', 'Departemen.Manajemen.Create', '', 'active');
INSERT INTO `permissions` VALUES ('297', 'Departemen.Manajemen.Edit', '', 'active');
INSERT INTO `permissions` VALUES ('298', 'Departemen.Manajemen.Delete', '', 'active');
INSERT INTO `permissions` VALUES ('299', 'Tahun_Akademik.Jurusan.View', '', 'active');
INSERT INTO `permissions` VALUES ('300', 'Tahun_Akademik.Jurusan.Create', '', 'active');
INSERT INTO `permissions` VALUES ('301', 'Tahun_Akademik.Jurusan.Edit', '', 'active');
INSERT INTO `permissions` VALUES ('302', 'Tahun_Akademik.Jurusan.Delete', '', 'active');

-- ----------------------------
-- Table structure for `predikat_kelulusan`
-- ----------------------------
DROP TABLE IF EXISTS `predikat_kelulusan`;
CREATE TABLE `predikat_kelulusan` (
  `kode_predikat_kelulusan` tinyint(4) unsigned NOT NULL AUTO_INCREMENT,
  `nilai_minimum` decimal(5,2) unsigned NOT NULL,
  `nilai_maksimum` decimal(5,2) unsigned NOT NULL,
  `keterangan` enum('Memuaskan','Sangat Memuaskan','Dengan Pujian') NOT NULL,
  `kode_pengguna_add` smallint(5) unsigned NOT NULL,
  `tanggal_add` datetime NOT NULL,
  `kode_pengguna_edit` smallint(6) unsigned DEFAULT NULL,
  `tanggal_edit` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`kode_predikat_kelulusan`),
  KEY `fk_sistem_penilaian_pengguna` (`kode_pengguna_add`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of predikat_kelulusan
-- ----------------------------
INSERT INTO `predikat_kelulusan` VALUES ('1', '2.00', '2.75', 'Memuaskan', '1', '2012-12-04 01:37:27', null, '2012-12-04 09:37:27');
INSERT INTO `predikat_kelulusan` VALUES ('2', '2.76', '3.50', 'Sangat Memuaskan', '1', '2012-12-04 01:37:45', null, '2012-12-04 09:37:45');
INSERT INTO `predikat_kelulusan` VALUES ('3', '3.51', '4.00', 'Dengan Pujian', '1', '2012-12-04 01:37:59', null, '2012-12-04 09:37:59');

-- ----------------------------
-- Table structure for `propinsi`
-- ----------------------------
DROP TABLE IF EXISTS `propinsi`;
CREATE TABLE `propinsi` (
  `propinsi_id` tinyint(4) NOT NULL,
  `propinsi` varchar(100) NOT NULL,
  `gubernur` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`propinsi_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of propinsi
-- ----------------------------
INSERT INTO `propinsi` VALUES ('1', 'Aceh', 'TGH');
INSERT INTO `propinsi` VALUES ('2', 'Sumatera Utara', 'NAMa');
INSERT INTO `propinsi` VALUES ('3', 'Bengkulu', null);
INSERT INTO `propinsi` VALUES ('4', 'Jambi', null);
INSERT INTO `propinsi` VALUES ('5', 'Riau', null);
INSERT INTO `propinsi` VALUES ('6', 'Sumatera Barat', null);
INSERT INTO `propinsi` VALUES ('7', 'Sumatera Selatan', null);
INSERT INTO `propinsi` VALUES ('8', 'Lampung', null);
INSERT INTO `propinsi` VALUES ('9', 'Kepulauan Bangka Belitung', null);
INSERT INTO `propinsi` VALUES ('10', 'Kepulauan Riau', null);
INSERT INTO `propinsi` VALUES ('11', 'Banten', null);
INSERT INTO `propinsi` VALUES ('12', 'Jawa Barat', null);
INSERT INTO `propinsi` VALUES ('13', 'DKI Jakarta', null);
INSERT INTO `propinsi` VALUES ('14', 'Jawa Tengah', null);
INSERT INTO `propinsi` VALUES ('15', 'Jawa Timur', null);
INSERT INTO `propinsi` VALUES ('16', 'Daerah Istimewa Yogyakarta', null);
INSERT INTO `propinsi` VALUES ('17', 'Bali', null);
INSERT INTO `propinsi` VALUES ('18', 'Nusa Tenggara Barat', null);
INSERT INTO `propinsi` VALUES ('19', 'Nusa Tenggara Timur', null);
INSERT INTO `propinsi` VALUES ('20', 'Kalimantan Barat', null);
INSERT INTO `propinsi` VALUES ('21', 'Kalimantan Selatan', null);
INSERT INTO `propinsi` VALUES ('22', 'Kalimantan Tengah', null);
INSERT INTO `propinsi` VALUES ('23', 'Kalimantan Timur', null);
INSERT INTO `propinsi` VALUES ('24', 'Gorontalo', null);
INSERT INTO `propinsi` VALUES ('25', 'Sulawesi Selatan', null);
INSERT INTO `propinsi` VALUES ('26', 'Sulawesi Tenggara', null);
INSERT INTO `propinsi` VALUES ('27', 'Sulawesi Tengah', null);
INSERT INTO `propinsi` VALUES ('28', 'Sulawesi Utara', null);
INSERT INTO `propinsi` VALUES ('29', 'Sulawesi Barat', null);
INSERT INTO `propinsi` VALUES ('30', 'Maluku', null);
INSERT INTO `propinsi` VALUES ('31', 'Maluku Utara', null);
INSERT INTO `propinsi` VALUES ('32', 'Papua', null);
INSERT INTO `propinsi` VALUES ('33', 'Papua Barat', null);

-- ----------------------------
-- Table structure for `roles`
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(60) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `default` tinyint(1) NOT NULL DEFAULT '0',
  `can_delete` tinyint(1) NOT NULL DEFAULT '1',
  `login_destination` varchar(255) NOT NULL DEFAULT '/',
  `deleted` int(1) NOT NULL DEFAULT '0',
  `default_context` varchar(255) NOT NULL DEFAULT 'content',
  PRIMARY KEY (`role_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES ('1', 'Administrator', 'Has full control over every aspect of the site.', '0', '0', '', '0', 'content');
INSERT INTO `roles` VALUES ('2', 'Editor', 'Can handle day-to-day management, but does not have full power.', '0', '1', '', '1', 'content');
INSERT INTO `roles` VALUES ('4', 'User', 'This is the default user with access to login.', '1', '0', '', '0', 'content');
INSERT INTO `roles` VALUES ('6', 'Developer', 'Developers typically are the only ones that can access the developer tools. Otherwise identical to Administrators, at least until the site is handed off.', '0', '1', '', '1', 'content');
INSERT INTO `roles` VALUES ('7', 'mahasiswa', '', '0', '1', 'admin', '0', 'content');

-- ----------------------------
-- Table structure for `role_permissions`
-- ----------------------------
DROP TABLE IF EXISTS `role_permissions`;
CREATE TABLE `role_permissions` (
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  PRIMARY KEY (`role_id`,`permission_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of role_permissions
-- ----------------------------
INSERT INTO `role_permissions` VALUES ('1', '1');
INSERT INTO `role_permissions` VALUES ('1', '2');
INSERT INTO `role_permissions` VALUES ('1', '3');
INSERT INTO `role_permissions` VALUES ('1', '4');
INSERT INTO `role_permissions` VALUES ('1', '5');
INSERT INTO `role_permissions` VALUES ('1', '6');
INSERT INTO `role_permissions` VALUES ('1', '7');
INSERT INTO `role_permissions` VALUES ('1', '8');
INSERT INTO `role_permissions` VALUES ('1', '9');
INSERT INTO `role_permissions` VALUES ('1', '10');
INSERT INTO `role_permissions` VALUES ('1', '11');
INSERT INTO `role_permissions` VALUES ('1', '12');
INSERT INTO `role_permissions` VALUES ('1', '13');
INSERT INTO `role_permissions` VALUES ('1', '14');
INSERT INTO `role_permissions` VALUES ('1', '15');
INSERT INTO `role_permissions` VALUES ('1', '16');
INSERT INTO `role_permissions` VALUES ('1', '17');
INSERT INTO `role_permissions` VALUES ('1', '18');
INSERT INTO `role_permissions` VALUES ('1', '19');
INSERT INTO `role_permissions` VALUES ('1', '20');
INSERT INTO `role_permissions` VALUES ('1', '21');
INSERT INTO `role_permissions` VALUES ('1', '24');
INSERT INTO `role_permissions` VALUES ('1', '27');
INSERT INTO `role_permissions` VALUES ('1', '28');
INSERT INTO `role_permissions` VALUES ('1', '29');
INSERT INTO `role_permissions` VALUES ('1', '30');
INSERT INTO `role_permissions` VALUES ('1', '31');
INSERT INTO `role_permissions` VALUES ('1', '32');
INSERT INTO `role_permissions` VALUES ('1', '33');
INSERT INTO `role_permissions` VALUES ('1', '34');
INSERT INTO `role_permissions` VALUES ('1', '35');
INSERT INTO `role_permissions` VALUES ('1', '36');
INSERT INTO `role_permissions` VALUES ('1', '37');
INSERT INTO `role_permissions` VALUES ('1', '38');
INSERT INTO `role_permissions` VALUES ('1', '39');
INSERT INTO `role_permissions` VALUES ('1', '40');
INSERT INTO `role_permissions` VALUES ('1', '41');
INSERT INTO `role_permissions` VALUES ('1', '42');
INSERT INTO `role_permissions` VALUES ('1', '43');
INSERT INTO `role_permissions` VALUES ('1', '44');
INSERT INTO `role_permissions` VALUES ('1', '45');
INSERT INTO `role_permissions` VALUES ('1', '46');
INSERT INTO `role_permissions` VALUES ('1', '47');
INSERT INTO `role_permissions` VALUES ('1', '48');
INSERT INTO `role_permissions` VALUES ('1', '49');
INSERT INTO `role_permissions` VALUES ('1', '50');
INSERT INTO `role_permissions` VALUES ('1', '51');
INSERT INTO `role_permissions` VALUES ('1', '65');
INSERT INTO `role_permissions` VALUES ('1', '229');
INSERT INTO `role_permissions` VALUES ('1', '230');
INSERT INTO `role_permissions` VALUES ('1', '231');
INSERT INTO `role_permissions` VALUES ('1', '232');
INSERT INTO `role_permissions` VALUES ('1', '241');
INSERT INTO `role_permissions` VALUES ('1', '242');
INSERT INTO `role_permissions` VALUES ('1', '243');
INSERT INTO `role_permissions` VALUES ('1', '244');
INSERT INTO `role_permissions` VALUES ('1', '245');
INSERT INTO `role_permissions` VALUES ('1', '246');
INSERT INTO `role_permissions` VALUES ('1', '247');
INSERT INTO `role_permissions` VALUES ('1', '248');
INSERT INTO `role_permissions` VALUES ('1', '249');
INSERT INTO `role_permissions` VALUES ('1', '250');
INSERT INTO `role_permissions` VALUES ('1', '251');
INSERT INTO `role_permissions` VALUES ('1', '252');
INSERT INTO `role_permissions` VALUES ('1', '253');
INSERT INTO `role_permissions` VALUES ('1', '254');
INSERT INTO `role_permissions` VALUES ('1', '255');
INSERT INTO `role_permissions` VALUES ('1', '256');
INSERT INTO `role_permissions` VALUES ('1', '257');
INSERT INTO `role_permissions` VALUES ('1', '258');
INSERT INTO `role_permissions` VALUES ('1', '259');
INSERT INTO `role_permissions` VALUES ('1', '260');
INSERT INTO `role_permissions` VALUES ('1', '261');
INSERT INTO `role_permissions` VALUES ('1', '262');
INSERT INTO `role_permissions` VALUES ('1', '263');
INSERT INTO `role_permissions` VALUES ('1', '264');
INSERT INTO `role_permissions` VALUES ('1', '265');
INSERT INTO `role_permissions` VALUES ('1', '266');
INSERT INTO `role_permissions` VALUES ('1', '267');
INSERT INTO `role_permissions` VALUES ('1', '268');
INSERT INTO `role_permissions` VALUES ('1', '269');
INSERT INTO `role_permissions` VALUES ('1', '270');
INSERT INTO `role_permissions` VALUES ('1', '271');
INSERT INTO `role_permissions` VALUES ('1', '272');
INSERT INTO `role_permissions` VALUES ('1', '273');
INSERT INTO `role_permissions` VALUES ('1', '274');
INSERT INTO `role_permissions` VALUES ('1', '275');
INSERT INTO `role_permissions` VALUES ('1', '276');
INSERT INTO `role_permissions` VALUES ('1', '277');
INSERT INTO `role_permissions` VALUES ('1', '278');
INSERT INTO `role_permissions` VALUES ('1', '279');
INSERT INTO `role_permissions` VALUES ('1', '280');
INSERT INTO `role_permissions` VALUES ('1', '281');
INSERT INTO `role_permissions` VALUES ('1', '282');
INSERT INTO `role_permissions` VALUES ('1', '283');
INSERT INTO `role_permissions` VALUES ('1', '284');
INSERT INTO `role_permissions` VALUES ('1', '285');
INSERT INTO `role_permissions` VALUES ('1', '286');
INSERT INTO `role_permissions` VALUES ('1', '287');
INSERT INTO `role_permissions` VALUES ('1', '288');
INSERT INTO `role_permissions` VALUES ('1', '289');
INSERT INTO `role_permissions` VALUES ('1', '290');
INSERT INTO `role_permissions` VALUES ('1', '291');
INSERT INTO `role_permissions` VALUES ('1', '292');
INSERT INTO `role_permissions` VALUES ('1', '293');
INSERT INTO `role_permissions` VALUES ('1', '294');
INSERT INTO `role_permissions` VALUES ('1', '295');
INSERT INTO `role_permissions` VALUES ('1', '296');
INSERT INTO `role_permissions` VALUES ('1', '297');
INSERT INTO `role_permissions` VALUES ('1', '298');
INSERT INTO `role_permissions` VALUES ('1', '299');
INSERT INTO `role_permissions` VALUES ('1', '300');
INSERT INTO `role_permissions` VALUES ('1', '301');
INSERT INTO `role_permissions` VALUES ('1', '302');
INSERT INTO `role_permissions` VALUES ('4', '1');
INSERT INTO `role_permissions` VALUES ('7', '1');
INSERT INTO `role_permissions` VALUES ('7', '7');
INSERT INTO `role_permissions` VALUES ('7', '51');
INSERT INTO `role_permissions` VALUES ('7', '65');

-- ----------------------------
-- Table structure for `schema_version`
-- ----------------------------
DROP TABLE IF EXISTS `schema_version`;
CREATE TABLE `schema_version` (
  `type` varchar(40) NOT NULL,
  `version` int(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of schema_version
-- ----------------------------
INSERT INTO `schema_version` VALUES ('core', '34');
INSERT INTO `schema_version` VALUES ('app_', '0');
INSERT INTO `schema_version` VALUES ('beban_studi_', '1');
INSERT INTO `schema_version` VALUES ('matakuliah_', '1');
INSERT INTO `schema_version` VALUES ('data_jurusan_', '1');
INSERT INTO `schema_version` VALUES ('matakuliah_prasyarat_', '1');
INSERT INTO `schema_version` VALUES ('jenjang_', '1');
INSERT INTO `schema_version` VALUES ('kompetensi_', '1');
INSERT INTO `schema_version` VALUES ('kurikulum_', '1');
INSERT INTO `schema_version` VALUES ('nama_kurikulum_', '1');
INSERT INTO `schema_version` VALUES ('sistem_penilaian_', '1');
INSERT INTO `schema_version` VALUES ('nama_jurusan_', '1');
INSERT INTO `schema_version` VALUES ('predikatkelulusan_', '1');
INSERT INTO `schema_version` VALUES ('tahunakademik_', '1');
INSERT INTO `schema_version` VALUES ('jenis_pembayaran_', '1');
INSERT INTO `schema_version` VALUES ('pembayaran_', '2');
INSERT INTO `schema_version` VALUES ('departemen_', '2');
INSERT INTO `schema_version` VALUES ('tahun_akademik_', '2');

-- ----------------------------
-- Table structure for `sessions`
-- ----------------------------
DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text,
  PRIMARY KEY (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sessions
-- ----------------------------

-- ----------------------------
-- Table structure for `settings`
-- ----------------------------
DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings` (
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `module` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`name`),
  UNIQUE KEY `unique - name` (`name`),
  KEY `index - name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of settings
-- ----------------------------
INSERT INTO `settings` VALUES ('site.title', 'core', 'STMIK Bumigora Mataram');
INSERT INTO `settings` VALUES ('site.system_email', 'core', 'root@root.com');
INSERT INTO `settings` VALUES ('site.status', 'core', '1');
INSERT INTO `settings` VALUES ('site.list_limit', 'core', '25');
INSERT INTO `settings` VALUES ('site.show_profiler', 'core', '1');
INSERT INTO `settings` VALUES ('site.show_front_profiler', 'core', '1');
INSERT INTO `settings` VALUES ('updates.do_check', 'core', '1');
INSERT INTO `settings` VALUES ('updates.bleeding_edge', 'core', '1');
INSERT INTO `settings` VALUES ('auth.allow_register', 'core', '0');
INSERT INTO `settings` VALUES ('auth.login_type', 'core', 'both');
INSERT INTO `settings` VALUES ('auth.use_usernames', 'core', '1');
INSERT INTO `settings` VALUES ('auth.allow_remember', 'core', '1');
INSERT INTO `settings` VALUES ('auth.remember_length', 'core', '1209600');
INSERT INTO `settings` VALUES ('auth.do_login_redirect', 'core', '1');
INSERT INTO `settings` VALUES ('auth.use_extended_profile', 'core', '0');
INSERT INTO `settings` VALUES ('sender_email', 'email', 'root@root.com');
INSERT INTO `settings` VALUES ('protocol', 'email', 'mail');
INSERT INTO `settings` VALUES ('mailpath', 'email', '/usr/sbin/sendmail');
INSERT INTO `settings` VALUES ('smtp_host', 'email', '');
INSERT INTO `settings` VALUES ('smtp_user', 'email', '');
INSERT INTO `settings` VALUES ('smtp_pass', 'email', '');
INSERT INTO `settings` VALUES ('smtp_port', 'email', '');
INSERT INTO `settings` VALUES ('smtp_timeout', 'email', '');
INSERT INTO `settings` VALUES ('mailtype', 'email', 'text');
INSERT INTO `settings` VALUES ('site.languages', 'core', 'a:3:{i:0;s:7:\"english\";i:1;s:7:\"persian\";i:2;s:10:\"portuguese\";}');
INSERT INTO `settings` VALUES ('auth.allow_name_change', 'core', '1');
INSERT INTO `settings` VALUES ('auth.name_change_frequency', 'core', '1');
INSERT INTO `settings` VALUES ('auth.name_change_limit', 'core', '1');
INSERT INTO `settings` VALUES ('auth.password_min_length', 'core', '8');
INSERT INTO `settings` VALUES ('auth.password_force_numbers', 'core', '0');
INSERT INTO `settings` VALUES ('auth.password_force_symbols', 'core', '0');
INSERT INTO `settings` VALUES ('auth.password_force_mixed_case', 'core', '0');
INSERT INTO `settings` VALUES ('auth.user_activation_method', 'core', '0');
INSERT INTO `settings` VALUES ('auth.password_show_labels', 'core', '1');

-- ----------------------------
-- Table structure for `sistem_penilaian`
-- ----------------------------
DROP TABLE IF EXISTS `sistem_penilaian`;
CREATE TABLE `sistem_penilaian` (
  `kode_sistem_penilaian` tinyint(4) unsigned NOT NULL AUTO_INCREMENT,
  `nilai_minimum` decimal(5,2) unsigned NOT NULL,
  `nilai_maksimum` decimal(5,2) unsigned NOT NULL,
  `grade` varchar(2) NOT NULL,
  `bobot_nilai` decimal(3,1) NOT NULL,
  `kategori` enum('Sempurna','Baik','Cukup','Kurang') NOT NULL,
  `keterangan` enum('Lulus','Tidak Lulus','Gagal') NOT NULL,
  `kode_pengguna_add` smallint(5) unsigned NOT NULL,
  `tanggal_add` datetime NOT NULL,
  `kode_pengguna_edit` smallint(6) unsigned DEFAULT NULL,
  `tanggal_edit` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`kode_sistem_penilaian`),
  KEY `fk_sistem_penilaian_pengguna` (`kode_pengguna_add`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sistem_penilaian
-- ----------------------------
INSERT INTO `sistem_penilaian` VALUES ('1', '90.00', '100.00', 'A', '4.0', 'Sempurna', 'Lulus', '1', '0000-00-00 00:00:00', null, '2012-02-19 22:02:30');
INSERT INTO `sistem_penilaian` VALUES ('2', '80.00', '89.00', 'B+', '3.5', 'Baik', 'Lulus', '1', '0000-00-00 00:00:00', null, '2012-02-19 22:07:05');
INSERT INTO `sistem_penilaian` VALUES ('3', '70.00', '79.00', 'B', '3.0', 'Baik', 'Lulus', '1', '0000-00-00 00:00:00', null, '2012-02-19 22:03:56');
INSERT INTO `sistem_penilaian` VALUES ('4', '61.00', '69.00', 'C+', '2.5', 'Baik', 'Lulus', '1', '0000-00-00 00:00:00', null, '2012-02-19 22:07:18');
INSERT INTO `sistem_penilaian` VALUES ('5', '50.00', '60.00', 'C', '2.0', 'Cukup', 'Lulus', '1', '0000-00-00 00:00:00', null, '2012-02-19 22:08:29');
INSERT INTO `sistem_penilaian` VALUES ('6', '30.00', '49.00', 'D', '1.0', 'Kurang', 'Tidak Lulus', '1', '0000-00-00 00:00:00', null, '2012-02-19 22:08:47');
INSERT INTO `sistem_penilaian` VALUES ('7', '0.00', '29.00', 'E', '0.0', 'Kurang', 'Gagal', '1', '0000-00-00 00:00:00', null, '2012-02-19 22:09:09');

-- ----------------------------
-- Table structure for `tahun_akademik`
-- ----------------------------
DROP TABLE IF EXISTS `tahun_akademik`;
CREATE TABLE `tahun_akademik` (
  `kode_tahun_akademik` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `tahun_akademik` char(9) NOT NULL,
  `semester` enum('1','0') NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_berakhir` date NOT NULL,
  `status` enum('A','N') NOT NULL,
  `kode_pengguna_add` smallint(5) unsigned NOT NULL,
  `tanggal_add` datetime NOT NULL,
  `kode_pengguna_edit` smallint(5) unsigned DEFAULT NULL,
  `tanggal_edit` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`kode_tahun_akademik`),
  KEY `fk_tahun_akademik_pengguna` (`kode_pengguna_add`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tahun_akademik
-- ----------------------------
INSERT INTO `tahun_akademik` VALUES ('1', '2011/2012', '1', '2011-09-21', '2012-01-14', 'N', '1', '2012-02-23 14:27:22', '1', '2012-12-12 01:22:47');
INSERT INTO `tahun_akademik` VALUES ('2', '2011/2012', '0', '2012-03-12', '2012-07-28', 'N', '1', '2012-09-03 15:03:54', null, '2012-12-04 13:40:52');
INSERT INTO `tahun_akademik` VALUES ('3', '2012/2013', '1', '2012-09-03', '2013-01-19', 'A', '1', '2012-09-03 15:03:50', null, '2012-12-04 13:40:56');

-- ----------------------------
-- Table structure for `tahun_akademik22`
-- ----------------------------
DROP TABLE IF EXISTS `tahun_akademik22`;
CREATE TABLE `tahun_akademik22` (
  `kode_tahun_akademik` int(11) NOT NULL AUTO_INCREMENT,
  `tahun_akademik` char(9) NOT NULL,
  `semester` enum('1','0') NOT NULL,
  `tanggal_mulai` date NOT NULL DEFAULT '0000-00-00',
  `tanggal_berakhir` date NOT NULL DEFAULT '0000-00-00',
  `status` enum('A','N') NOT NULL,
  `tanggal_add` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tanggal_edit` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`kode_tahun_akademik`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tahun_akademik22
-- ----------------------------

-- ----------------------------
-- Table structure for `tahun_akademik3`
-- ----------------------------
DROP TABLE IF EXISTS `tahun_akademik3`;
CREATE TABLE `tahun_akademik3` (
  `kode_tahun_akademik` int(11) NOT NULL AUTO_INCREMENT,
  `tahun_akademik` char(9) NOT NULL,
  `semester` enum('1','0') NOT NULL,
  `tanggal_mulai` date NOT NULL DEFAULT '0000-00-00',
  `tanggal_berakhir` date NOT NULL DEFAULT '0000-00-00',
  `status` enum('A','N') NOT NULL,
  `tanggal_add` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tanggal_edit` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`kode_tahun_akademik`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tahun_akademik3
-- ----------------------------
INSERT INTO `tahun_akademik3` VALUES ('1', '2010-2011', '0', '2012-11-07', '2012-11-05', 'N', '2012-11-23 07:28:46', '2012-11-23 09:09:14');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL DEFAULT '4',
  `email` varchar(120) NOT NULL,
  `username` varchar(30) NOT NULL DEFAULT '',
  `password_hash` varchar(40) NOT NULL,
  `reset_hash` varchar(40) DEFAULT NULL,
  `salt` varchar(7) NOT NULL,
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_ip` varchar(40) NOT NULL DEFAULT '',
  `created_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `ban_message` varchar(255) DEFAULT NULL,
  `reset_by` int(10) DEFAULT NULL,
  `display_name` varchar(255) DEFAULT '',
  `display_name_changed` date DEFAULT NULL,
  `timezone` char(4) NOT NULL DEFAULT 'UM6',
  `language` varchar(20) NOT NULL DEFAULT 'english',
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `activate_hash` varchar(40) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '1', 'root@root.com', 'root', '9e3a71285ad6510f610b308f0e9a0b5f1f8b2d2e', 'b35cc6873acac91ab729dbfe412eff501168b604', 'eJu6Cwp', '2013-02-06 01:18:08', '::1', '0000-00-00 00:00:00', '0', '0', null, '1357513837', 'Zaenal Abidin', null, 'UM6', 'english', '1', '');
INSERT INTO `users` VALUES ('2', '7', 'mahasiswa@root.com', 'mahasiswa', 'a46431dcee8cd5caae6b5d56e07b3cacd393efc1', null, 'wNzZ8Zj', '2012-11-23 10:07:24', '127.0.0.1', '2012-11-21 05:46:36', '0', '0', null, null, 'Mahasiswa', null, 'UM6', 'english', '1', '');

-- ----------------------------
-- Table structure for `user_cookies`
-- ----------------------------
DROP TABLE IF EXISTS `user_cookies`;
CREATE TABLE `user_cookies` (
  `user_id` bigint(20) NOT NULL,
  `token` varchar(128) NOT NULL,
  `created_on` datetime NOT NULL,
  KEY `token` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_cookies
-- ----------------------------

-- ----------------------------
-- Table structure for `user_meta`
-- ----------------------------
DROP TABLE IF EXISTS `user_meta`;
CREATE TABLE `user_meta` (
  `meta_id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) NOT NULL DEFAULT '',
  `meta_value` text,
  PRIMARY KEY (`meta_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_meta
-- ----------------------------
INSERT INTO `user_meta` VALUES ('1', '2', 'state', 'SC');
INSERT INTO `user_meta` VALUES ('2', '2', 'country', 'US');
INSERT INTO `user_meta` VALUES ('3', '2', 'type', 'small');
INSERT INTO `user_meta` VALUES ('4', '1', 'state', 'SC');
INSERT INTO `user_meta` VALUES ('5', '1', 'country', 'US');
INSERT INTO `user_meta` VALUES ('6', '1', 'type', 'small');
