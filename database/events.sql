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

 Date: 18/05/2024 16:53:09
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for events
-- ----------------------------
DROP TABLE IF EXISTS `events`;
CREATE TABLE `events`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date` date NOT NULL,
  `image_path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of events
-- ----------------------------
INSERT INTO `events` VALUES (1, 'asd', 'asd', '2024-05-16', 'uploads/photo_2024-05-15_09-51-35.jpg', '2024-05-16 15:48:10');
INSERT INTO `events` VALUES (2, 'asd', 'asd', '2024-05-17', 'uploads/office.PNG', '2024-05-16 15:48:56');
INSERT INTO `events` VALUES (3, 'asd', 'asd', '2024-05-16', 'uploads/photo_2024-02-28_12-44-52.jpg', '2024-05-16 15:49:49');
INSERT INTO `events` VALUES (4, 'asd', 'asd', '2024-05-17', '', '2024-05-16 16:11:37');
INSERT INTO `events` VALUES (5, 'asd', 'asd', '2024-05-17', '', '2024-05-16 16:12:15');
INSERT INTO `events` VALUES (6, 'asd', 'asd', '2024-05-16', '', '2024-05-16 16:12:54');
INSERT INTO `events` VALUES (7, 'asd', 'asd', '2024-05-16', 'uploads/Asset 1.png', '2024-05-16 16:21:51');
INSERT INTO `events` VALUES (8, 'Mistery Tech', 'Meeting with the boss', '2024-05-18', 'uploads/1705311630014.jpg', '2024-05-17 13:34:12');

SET FOREIGN_KEY_CHECKS = 1;
