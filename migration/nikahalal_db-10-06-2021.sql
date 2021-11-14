/*
 Navicat Premium Data Transfer

 Source Server         : local_laragon
 Source Server Type    : MySQL
 Source Server Version : 50724
 Source Host           : localhost:3306
 Source Schema         : nikahalal_db

 Target Server Type    : MySQL
 Target Server Version : 50724
 File Encoding         : 65001

 Date: 11/06/2021 02:07:25
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for greeting
-- ----------------------------
DROP TABLE IF EXISTS `greeting`;
CREATE TABLE `greeting`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `greeting` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `status` enum('0','1') CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '1',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of greeting
-- ----------------------------
INSERT INTO `greeting` VALUES (1, 'C0621001', 'Hikmat', 'asdasd', '2021-06-11 01:32:19', '1');
INSERT INTO `greeting` VALUES (2, 'C0621001', 'asd', 'asd', '2021-06-11 01:36:43', '1');
INSERT INTO `greeting` VALUES (3, 'C0621001', 'sd', 'erwe', '2021-06-10 01:38:59', '1');

SET FOREIGN_KEY_CHECKS = 1;
