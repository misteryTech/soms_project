/*
 Navicat Premium Data Transfer

 Source Server         : starbright
 Source Server Type    : MySQL
 Source Server Version : 100428 (10.4.28-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : soms_db

 Target Server Type    : MySQL
 Target Server Version : 100428 (10.4.28-MariaDB)
 File Encoding         : 65001

 Date: 16/05/2024 16:26:57
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for management_events
-- ----------------------------
DROP TABLE IF EXISTS `management_events`;
CREATE TABLE `management_events`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `date` date NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of management_events
-- ----------------------------
INSERT INTO `management_events` VALUES (1, 'asd', 'asd', '2024-05-16');
INSERT INTO `management_events` VALUES (2, 'asd', 'asd', '2024-05-16');
INSERT INTO `management_events` VALUES (3, 'asd', 'asd', '2024-05-18');
INSERT INTO `management_events` VALUES (4, 'asd', 'asd', '2024-05-17');
INSERT INTO `management_events` VALUES (5, 'asd', 'asd', '2024-05-18');

SET FOREIGN_KEY_CHECKS = 1;
