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

 Date: 18/05/2024 16:53:25
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for organizations
-- ----------------------------
DROP TABLE IF EXISTS `organizations`;
CREATE TABLE `organizations`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `organization_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `department` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `advisor_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `contact_email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of organizations
-- ----------------------------
INSERT INTO `organizations` VALUES (1, 'asd', 'Engineering', 'asd', 'asd@gmail.com', '2024-05-18 16:38:12');
INSERT INTO `organizations` VALUES (2, 'asd', 'Engineering', 'asd', 'asd@gmail.com', '2024-05-18 16:42:35');
INSERT INTO `organizations` VALUES (3, 'asd', 'Computer Science', 'asd', 'asd@gmail.com', '2024-05-18 16:43:30');
INSERT INTO `organizations` VALUES (4, 'asd', 'Engineering', 'asd', 'asd@gmail.com', '2024-05-18 16:43:50');
INSERT INTO `organizations` VALUES (5, 'asd', 'Engineering', 'asd', 'asd@gmail.com', '2024-05-18 16:44:05');
INSERT INTO `organizations` VALUES (6, 'asd', 'Engineering', 'asd', 'asd@gmail.com', '2024-05-18 16:44:11');
INSERT INTO `organizations` VALUES (7, 'asd', 'Engineering', 'asd', 'asd@gmail.com', '2024-05-18 16:44:26');
INSERT INTO `organizations` VALUES (8, 'asd', 'Computer Science', 'asd', 'asd@gmail.com', '2024-05-18 16:44:56');
INSERT INTO `organizations` VALUES (9, 'Dota', 'Computer Science', 'MisteryTechg', 'mis@gmail.com', '2024-05-18 16:46:36');

SET FOREIGN_KEY_CHECKS = 1;
