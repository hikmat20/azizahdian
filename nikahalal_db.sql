/*
 Navicat Premium Data Transfer

 Source Server         : local2
 Source Server Type    : MySQL
 Source Server Version : 80025
 Source Host           : localhost:3307
 Source Schema         : nikahalal_db

 Target Server Type    : MySQL
 Target Server Version : 80025
 File Encoding         : 65001

 Date: 20/11/2021 09:44:45
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for customer
-- ----------------------------
DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `customer_code` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of customer
-- ----------------------------

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for greeting
-- ----------------------------
DROP TABLE IF EXISTS `greeting`;
CREATE TABLE `greeting`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `greeting` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of greeting
-- ----------------------------
INSERT INTO `greeting` VALUES (1, 'Nikahalal.com', 'NH0921001', 'CL21003', NULL, 'Selamat Berbahagia untuk Samuel & Sherli. Selamat menempuh hidur baru. Dan terima kasih sudah mempercayakan kepada nikahalal.com sebagai vendor undangan digital 💙💙🤗🤗.', '1', '2021-09-20 00:27:45', NULL);
INSERT INTO `greeting` VALUES (2, 'aa', 'NH0921002', 'CL21004', NULL, 'sd', '1', '2021-10-02 12:57:49', NULL);
INSERT INTO `greeting` VALUES (3, 'as', 'NH0921002', 'CL21004', NULL, 'as', '1', '2021-10-02 12:59:42', NULL);
INSERT INTO `greeting` VALUES (4, 'fg', 'NH0921002', 'CL21004', NULL, 'sdf', '1', '2021-10-02 13:02:09', NULL);
INSERT INTO `greeting` VALUES (5, 'asd', 'NH1121002', 'CL21005', NULL, 'asd', '1', '2021-11-10 11:54:58', NULL);
INSERT INTO `greeting` VALUES (6, 'asda', 'NH1121002', 'CL21005', NULL, 'sdasd', '1', '2021-11-10 11:58:02', NULL);
INSERT INTO `greeting` VALUES (7, 'asadwqe', 'NH1121002', 'CL21005', NULL, 'weqwe', '1', '2021-11-16 23:12:29', NULL);
INSERT INTO `greeting` VALUES (8, 'as', 'NH1121002', 'CL21005', NULL, 'AS', '1', '2021-11-16 23:14:41', NULL);

-- ----------------------------
-- Table structure for guests
-- ----------------------------
DROP TABLE IF EXISTS `guests`;
CREATE TABLE `guests`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `whatsapp` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `city` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `qr_code` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `pax` int NULL DEFAULT NULL,
  `guest_for` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `present` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `status` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of guests
-- ----------------------------
INSERT INTO `guests` VALUES (1, 'Nina', 'email@mail.com', '12264800', '0215889', 'Jakarta Selatan', NULL, NULL, 2, '1', NULL, '0', '0', '2021-07-21 15:18:47', '2021-07-21 15:18:47');
INSERT INTO `guests` VALUES (2, 'Nina', 'email@mail.com', '12264800', '0215889', 'Jakarta Selatan', NULL, NULL, 2, '1', NULL, '0', '0', '2021-07-21 15:22:51', '2021-07-21 15:22:51');
INSERT INTO `guests` VALUES (3, 'Kartu Nama', 'abdul20@gmail.com', '12264800', '0215889', 'Bekasi', NULL, NULL, 2, '2', NULL, '0', '0', '2021-07-21 15:26:41', '2021-07-21 15:26:41');
INSERT INTO `guests` VALUES (4, 'hikmat', 'hikmataulia20@gmail.com', '081317494385', '0215889', 'Jakarta Selatan', NULL, NULL, 2, '1', NULL, '0', '0', '2021-07-22 20:08:40', '2021-07-22 20:08:40');
INSERT INTO `guests` VALUES (5, 'hikmat', 'hikmat.aoliar@gmail.com', '081317494385', '0215889', 'Jakarta Selatan', NULL, NULL, 2, '2', NULL, '0', '0', '2021-07-22 20:10:08', '2021-07-22 20:10:08');
INSERT INTO `guests` VALUES (6, 'hikmat', 'hikmataulia20@gmail.com', '081317494385', '0215889', 'Jakarta Selatan', 'asdasd', NULL, 2, '1', 'asasdasd', '0', '0', '2021-07-22 20:15:24', '2021-07-22 20:15:24');
INSERT INTO `guests` VALUES (7, 'hikmat', 'hikmataulia20@gmail.com', '081317494385', '0215889', 'Jakarta Selatan', NULL, NULL, 2, '1', NULL, '0', '0', '2021-07-23 00:08:56', '2021-07-23 00:08:56');
INSERT INTO `guests` VALUES (8, 'hikmat', 'hikmataulia20@gmail.com', '081317494385', '0215889', 'Jakarta Selatan', NULL, NULL, 2, '3', NULL, '0', '0', '2021-07-23 00:17:13', '2021-07-23 00:17:13');
INSERT INTO `guests` VALUES (9, 'hikmat', 'hikmataulia20@gmail.com', 'asd', '0215889', 'Jakarta Selatan', NULL, NULL, 2, '2', NULL, '0', '0', '2021-07-23 00:20:52', '2021-07-23 00:20:52');
INSERT INTO `guests` VALUES (10, 'hikmat', 'hikmataulia20@gmail.com', '081317494385', '0215889', 'Jakarta Selatan', NULL, NULL, 2, '1', NULL, '0', '0', '2021-07-23 00:21:43', '2021-07-23 00:21:43');
INSERT INTO `guests` VALUES (11, 'hikmat', 'hikmataulia20@gmail.com', '081317494385', '0215889', 'Bekasi', NULL, NULL, 2, '2', NULL, '0', '0', '2021-07-23 00:23:13', '2021-07-23 00:23:13');
INSERT INTO `guests` VALUES (12, 'Kartu Nama', 'abdul20@gmail.com', 'fg', 'dfg', 'dfg', NULL, NULL, 2, '2', NULL, '0', '0', '2021-07-23 00:23:50', '2021-07-23 00:23:50');
INSERT INTO `guests` VALUES (13, 'Nina', 'email@mail.com', '12264800', '0215889', 'Jakarta Selatan', NULL, NULL, 2, '1', NULL, '0', '0', '2021-07-23 00:32:16', '2021-07-23 00:32:16');
INSERT INTO `guests` VALUES (14, 'Nina', 'email@mail.com', '12264800', '0215889', 'Jakarta Selatan', NULL, NULL, 2, '1', NULL, '0', '0', '2021-07-23 00:45:25', '2021-07-23 00:45:25');

-- ----------------------------
-- Table structure for guests_book
-- ----------------------------
DROP TABLE IF EXISTS `guests_book`;
CREATE TABLE `guests_book`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `customer_id` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `handphone` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `guest_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `instansi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `datetime` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of guests_book
-- ----------------------------
INSERT INTO `guests_book` VALUES (1, 'CL21003', '123456765432', 'jshdkshd', 'jshdj', 'sdfsd', '2021-09-20 10:22:25');
INSERT INTO `guests_book` VALUES (2, 'CL21003', '09299393090', 'nama tamu', 'PT. Maju Haya', 'Jakarta', '2021-09-20 11:39:55');
INSERT INTO `guests_book` VALUES (3, 'CL21003', '23456654123', 'werfgh', 'werty', 'werty', '2021-09-20 11:40:32');
INSERT INTO `guests_book` VALUES (4, 'CL21003', '234567765', 'dfgh', 'ertysdfgh', 'sdfgh', '2021-09-20 11:41:19');
INSERT INTO `guests_book` VALUES (5, 'CL21003', '23456765432', 'sdfg', 'sdfg', 'asdfg', '2021-09-20 11:45:10');
INSERT INTO `guests_book` VALUES (6, 'CL21003', '7654321234567654', 'sdfg', 'sdfg', 'sdfghj', '2021-09-20 11:50:49');
INSERT INTO `guests_book` VALUES (7, 'CL21003', '0000000000', 'skjdj', 'jsjd', 'jsd', '2021-09-22 10:10:53');
INSERT INTO `guests_book` VALUES (8, '', '', 'nama tamu', 'perusahaan', 'jakarta', '2021-11-03 22:16:26');
INSERT INTO `guests_book` VALUES (9, 'CL10001', '456456456411', 'nama tamu', 'perusahaan', 'jakarta', '2021-11-03 22:17:38');
INSERT INTO `guests_book` VALUES (10, 'CL10001', '616256845454', 'hikmat', 'hikmat', 'jakarta', '2021-11-03 22:22:35');
INSERT INTO `guests_book` VALUES (11, 'CL10001', '0288798522154', 'Hikmat', 'Hikmat', 'Jakarta', '2021-11-03 22:27:31');
INSERT INTO `guests_book` VALUES (12, 'CL10001', '432432432423', 'fsdfsd', 'sdfg', 'sdfsd', '2021-11-03 22:33:44');
INSERT INTO `guests_book` VALUES (13, 'CL10001', '00121312145', 'hikmat', 'hikmat', 'jakarata\r\n', '2021-11-03 22:34:23');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 19 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (13, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (14, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (15, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (16, '2021_07_02_034302_create_greeting_table', 1);
INSERT INTO `migrations` VALUES (17, '2021_07_02_040402_customer_table', 1);
INSERT INTO `migrations` VALUES (18, '2021_07_20_131554_create_guests_table', 1);
INSERT INTO `migrations` VALUES (19, '2021_07_23_153638_create_visits_table', 2);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'hikmat', 'hikmataulia20@gmail.com', NULL, '$2y$10$bQbgURkkuZxjsPUXbeKljumYe49x6pynwlW5h8pjJZW9t08DmR2MW', NULL, '2021-07-20 18:07:07', '2021-07-20 18:07:07');

-- ----------------------------
-- Table structure for visits
-- ----------------------------
DROP TABLE IF EXISTS `visits`;
CREATE TABLE `visits`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `primary_key` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `secondary_key` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `score` bigint UNSIGNED NOT NULL,
  `list` json NULL,
  `expired_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `visits_primary_key_secondary_key_unique`(`primary_key`, `secondary_key`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of visits
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
