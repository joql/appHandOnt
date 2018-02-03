/*
Navicat MySQL Data Transfer

Source Server         : 本机
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : fenfa

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-02-03 21:03:13
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for sd_file
-- ----------------------------
DROP TABLE IF EXISTS `sd_file`;
CREATE TABLE `sd_file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ming` text CHARACTER SET utf8 NOT NULL,
  `key1` text CHARACTER SET utf8 NOT NULL,
  `uploadip` text CHARACTER SET utf8,
  `uploadtime` text CHARACTER SET utf8,
  `cishuo` text CHARACTER SET utf8 NOT NULL,
  `upuser` text CHARACTER SET utf8 NOT NULL,
  `policyid` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `id_2` (`id`),
  KEY `id_3` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of sd_file
-- ----------------------------
INSERT INTO `sd_file` VALUES ('1', '201802312120654373779.apk', '7850e7cec355e64936026b42cf29d94a', '127.0.0.1', '2018-02-03 20:12:07', '0', '', '2');
INSERT INTO `sd_file` VALUES ('2', '201802312334345991210.apk', '57b9075e4ddea82740de1cb0a1c48f06', '127.0.0.1', '2018-02-03 20:33:44', '0', '', '3');
INSERT INTO `sd_file` VALUES ('3', '201802312595339523010.ipa', 'f36703a5eff3902b3bca0d607b41b82f', '127.0.0.1', '2018-02-03 20:59:54', '0', '', '3');

-- ----------------------------
-- Table structure for sd_policy
-- ----------------------------
DROP TABLE IF EXISTS `sd_policy`;
CREATE TABLE `sd_policy` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `p_name` text COLLATE utf8_bin NOT NULL,
  `p_type` text COLLATE utf8_bin NOT NULL,
  `p_server` text COLLATE utf8_bin NOT NULL,
  `p_bucketname` text COLLATE utf8_bin NOT NULL,
  `p_url` text COLLATE utf8_bin NOT NULL,
  `p_ak` text COLLATE utf8_bin NOT NULL,
  `p_sk` text COLLATE utf8_bin NOT NULL,
  `p_filetype` text COLLATE utf8_bin NOT NULL,
  `p_mimetype` text COLLATE utf8_bin NOT NULL,
  `p_size` text COLLATE utf8_bin NOT NULL,
  `p_autoname` text COLLATE utf8_bin NOT NULL,
  `p_dir` text COLLATE utf8_bin NOT NULL,
  `p_namerule` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_4` (`id`),
  KEY `id` (`id`),
  KEY `id_2` (`id`),
  KEY `id_3` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of sd_policy
-- ----------------------------
INSERT INTO `sd_policy` VALUES ('1', 0xE6B8B8E5AEA2E696B9E6A1882DE7A681E6ADA2, 0x6C6F63616C, 0x2D, 0x2D, 0x68747470733A2F2F66662E636E2F646174612F, 0x2D, 0x2D, 0x333031, 0x6170706C69636174696F6E2F782D333031, 0x3130, 0x74727565, 0x64617461, 0x665F7B72616E64387D);
INSERT INTO `sd_policy` VALUES ('2', 0xE69CACE59CB0, 0x6C6F63616C, '', '', 0x687474703A2F2F66662E636E2F646174612F, '', '', 0x6A70672C706E672C6769662C6D70332C666C762C7261722C7A69702C666C762C61706B2C697061, 0x2A, 0x313034383537363030, 0x74727565, 0x75706C6F616473, 0x7B646174657D7B72616E64387D);
INSERT INTO `sd_policy` VALUES ('3', 0x74657374, 0x6C6F63616C, '', '', 0x687474703A2F2F66662E636E2F646174612F, '', '', 0x6A70672C706E672C6769662C6D70332C666C762C7261722C7A69702C666C762C61706B2C697061, 0x2A, 0x313034383537363030, 0x74727565, 0x64617461, 0x7B646174657D7B72616E64387D);

-- ----------------------------
-- Table structure for sd_setting
-- ----------------------------
DROP TABLE IF EXISTS `sd_setting`;
CREATE TABLE `sd_setting` (
  `id` int(1) NOT NULL,
  `main_tit` text COLLATE utf8_bin NOT NULL,
  `tit_2` text COLLATE utf8_bin NOT NULL,
  `keyword` text COLLATE utf8_bin NOT NULL,
  `desword` text COLLATE utf8_bin NOT NULL,
  `kjming` text COLLATE utf8_bin NOT NULL,
  `ak` text COLLATE utf8_bin NOT NULL,
  `sk` text COLLATE utf8_bin NOT NULL,
  `kjurl` text COLLATE utf8_bin NOT NULL,
  `zzurl` text COLLATE utf8_bin NOT NULL,
  `admin_name` text COLLATE utf8_bin NOT NULL,
  `admin_password` text COLLATE utf8_bin NOT NULL,
  `theme` text COLLATE utf8_bin NOT NULL,
  `upload_minetype` text COLLATE utf8_bin NOT NULL,
  `upload_size` text COLLATE utf8_bin NOT NULL,
  `upload_fpsize` text COLLATE utf8_bin NOT NULL,
  `autoname` text COLLATE utf8_bin NOT NULL,
  `tjcode` text COLLATE utf8_bin NOT NULL,
  `morelimt` text COLLATE utf8_bin NOT NULL,
  `leixing` text COLLATE utf8_bin NOT NULL,
  `daxiao` text COLLATE utf8_bin NOT NULL,
  `share` text COLLATE utf8_bin NOT NULL,
  `version` text COLLATE utf8_bin NOT NULL,
  `notice` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of sd_setting
-- ----------------------------
INSERT INTO `sd_setting` VALUES ('0', 0x415050E58886E58F91, 0x415050E5A496E993BEE5B9B3E58FB0, 0x415050E58886E58F9120, 0x415050E58886E58F9120, 0x2D, 0x2D, 0x2D, 0x2D, 0x687474703A2F2F66662E636E2F, 0x61646D696E, 0x2D, 0x64656661756C74, 0x2D, 0x2D, 0x2D, 0x2D, '', 0x2D, 0x2D, 0x2D, 0x74727565, 0x322E322E317C377C37, '');

-- ----------------------------
-- Table structure for sd_ss
-- ----------------------------
DROP TABLE IF EXISTS `sd_ss`;
CREATE TABLE `sd_ss` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sskey` text CHARACTER SET utf8 NOT NULL,
  `fname` text CHARACTER SET utf8 NOT NULL,
  `filekey` text CHARACTER SET utf8 NOT NULL,
  `sstime` text CHARACTER SET utf8 NOT NULL,
  `downloadnum` text CHARACTER SET utf8 NOT NULL,
  `cuser` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of sd_ss
-- ----------------------------
INSERT INTO `sd_ss` VALUES ('1', '6f088', '111', '57b9075e4ddea82740de1cb0a1c48f06', '2018-02-03 20:35:00', '1', '');
INSERT INTO `sd_ss` VALUES ('2', '16ae9', '123', 'f36703a5eff3902b3bca0d607b41b82f', '2018-02-03 21:00:18', '1', '');

-- ----------------------------
-- Table structure for sd_sskey
-- ----------------------------
DROP TABLE IF EXISTS `sd_sskey`;
CREATE TABLE `sd_sskey` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sskey` text CHARACTER SET utf8 NOT NULL,
  `filekey` text CHARACTER SET utf8 NOT NULL,
  `passwd` text CHARACTER SET utf8 NOT NULL,
  `sstime` text CHARACTER SET utf8 NOT NULL,
  `downloadnum` text CHARACTER SET utf8 NOT NULL,
  `fname` text CHARACTER SET utf8 NOT NULL,
  `cuser` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of sd_sskey
-- ----------------------------

-- ----------------------------
-- Table structure for sd_user
-- ----------------------------
DROP TABLE IF EXISTS `sd_user`;
CREATE TABLE `sd_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text CHARACTER SET utf8 NOT NULL,
  `pwd` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of sd_user
-- ----------------------------
INSERT INTO `sd_user` VALUES ('1', 'admin', 'fb688796edfb7b4a6918c58982432e9f');

-- ----------------------------
-- Table structure for sd_usergroup
-- ----------------------------
DROP TABLE IF EXISTS `sd_usergroup`;
CREATE TABLE `sd_usergroup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gname` text COLLATE utf8_bin NOT NULL,
  `addtime` text COLLATE utf8_bin NOT NULL,
  `policyid` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of sd_usergroup
-- ----------------------------
INSERT INTO `sd_usergroup` VALUES ('1', 0xE6B8B8E5AEA2, 0x2D, 0x33);
INSERT INTO `sd_usergroup` VALUES ('2', 0xE6938DE4BD9CE59198, 0x2D, 0x31);

-- ----------------------------
-- Table structure for sd_users
-- ----------------------------
DROP TABLE IF EXISTS `sd_users`;
CREATE TABLE `sd_users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `username` text COLLATE utf8_bin NOT NULL,
  `pwd` text COLLATE utf8_bin NOT NULL,
  `group` text COLLATE utf8_bin NOT NULL,
  `regtime` text COLLATE utf8_bin NOT NULL,
  `policy` text COLLATE utf8_bin NOT NULL,
  `grade` int(11) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of sd_users
-- ----------------------------
