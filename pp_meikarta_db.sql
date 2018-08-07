/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100132
 Source Host           : localhost:3306
 Source Schema         : pp_meikarta_db

 Target Server Type    : MySQL
 Target Server Version : 100132
 File Encoding         : 65001

 Date: 06/08/2018 10:09:31
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for m_admin_pppu
-- ----------------------------
DROP TABLE IF EXISTS `m_admin_pppu`;
CREATE TABLE `m_admin_pppu`  (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `nik` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_telp` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `user_insert` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_insert` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `user_update` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_update` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of m_admin_pppu
-- ----------------------------
INSERT INTO `m_admin_pppu` VALUES (6, '46545', 'Mahmud', '0882848234', 'mah@mail.com', 'admin', '2018-08-04 07:14:25', NULL, NULL);
INSERT INTO `m_admin_pppu` VALUES (8, '823742', 'Joni Iskandar', '02147844876', 'jon@mail.com', 'admin', '2018-08-04 21:18:24', NULL, NULL);

-- ----------------------------
-- Table structure for m_akun_admin_pppu
-- ----------------------------
DROP TABLE IF EXISTS `m_akun_admin_pppu`;
CREATE TABLE `m_akun_admin_pppu`  (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_admin_pppu` int(20) NULL DEFAULT NULL,
  `user_insert` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_insert` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `user_update` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_update` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of m_akun_admin_pppu
-- ----------------------------
INSERT INTO `m_akun_admin_pppu` VALUES (1, 'mahmud', 'YQ==', 4, NULL, NULL, NULL, NULL);
INSERT INTO `m_akun_admin_pppu` VALUES (2, 'mahmud', 'YQ==', 6, 'admin', '2018-08-04 21:37:54', NULL, NULL);

-- ----------------------------
-- Table structure for m_akun_sales
-- ----------------------------
DROP TABLE IF EXISTS `m_akun_sales`;
CREATE TABLE `m_akun_sales`  (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_sales` int(20) NULL DEFAULT NULL,
  `user_insert` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_insert` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `user_update` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_update` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of m_akun_sales
-- ----------------------------
INSERT INTO `m_akun_sales` VALUES (10, 'okki', 'YQ==', 2, 'admin', '2018-08-04 21:07:27', NULL, NULL);

-- ----------------------------
-- Table structure for m_akun_superadmin
-- ----------------------------
DROP TABLE IF EXISTS `m_akun_superadmin`;
CREATE TABLE `m_akun_superadmin`  (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `user_insert` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_insert` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `user_update` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_update` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of m_akun_superadmin
-- ----------------------------
INSERT INTO `m_akun_superadmin` VALUES (1, 'admin', 'YQ==', NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for m_bank
-- ----------------------------
DROP TABLE IF EXISTS `m_bank`;
CREATE TABLE `m_bank`  (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `kode_bank` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_bank` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_rekening` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jumlah_kpa` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `user_insert` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_insert` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `user_update` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_update` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of m_bank
-- ----------------------------
INSERT INTO `m_bank` VALUES (2, '0086', 'Mandiri Syariah', '9876578923427345', '2', NULL, NULL, 'admin', '2018-08-03 11:58:31');
INSERT INTO `m_bank` VALUES (3, '012', 'BCA', '989378432', '3', 'admin', '2018-08-05 06:47:24', NULL, NULL);
INSERT INTO `m_bank` VALUES (4, '087', 'CIMB', '9742343243734', '2.5', 'admin', '2018-08-05 06:48:45', NULL, NULL);

-- ----------------------------
-- Table structure for m_customer
-- ----------------------------
DROP TABLE IF EXISTS `m_customer`;
CREATE TABLE `m_customer`  (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `kode_pelanggan` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tempat_lahir` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tanggal_lahir` date NULL DEFAULT NULL,
  `no_hp` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `no_kantor` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `no_rumah` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `upload_ktp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `upload_npwp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `upload_slip_gaji` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `upload_dok_pendukung` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `user_insert` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_insert` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `user_update` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_update` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of m_customer
-- ----------------------------
INSERT INTO `m_customer` VALUES (8, 'KP84455', 'Karlina', 'Tegal', '1993-10-01', '087889677228', '0218978675', '0218786778', 'karlinamaksum19@gmail.com', 'Jl.Notog Pintu', 'da.txt', 'db.txt', 'dc.txt', 'dd.txt', 'admin', '2018-08-03 16:09:06', NULL, NULL);
INSERT INTO `m_customer` VALUES (9, 'KP62033', 'Okki S', 'Jakarta', '1993-10-01', '0831631131', '021882647', '0217843635', 'okkisetyawan@gmail.com', 'Jl.Nangka', 'dataa.pdf', 'datab.pdf', 'datac.pdf', 'datad.pdf', 'admin', '2018-08-05 06:27:11', NULL, NULL);

-- ----------------------------
-- Table structure for m_sales
-- ----------------------------
DROP TABLE IF EXISTS `m_sales`;
CREATE TABLE `m_sales`  (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `nik` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_telp` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `user_insert` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_insert` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `user_update` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_update` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of m_sales
-- ----------------------------
INSERT INTO `m_sales` VALUES (2, '101001911', 'Okki Setyawan S.Kom', '087874823423422', 'okkisetyawans@gmail.com', NULL, NULL, 'admin', '2018-08-04 06:53:06');
INSERT INTO `m_sales` VALUES (4, '87832432', 'Yahya', '9089345', 'yahya@mail.com', 'admin', '2018-08-04 20:24:40', NULL, NULL);

-- ----------------------------
-- Table structure for m_unit
-- ----------------------------
DROP TABLE IF EXISTS `m_unit`;
CREATE TABLE `m_unit`  (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `blok_tower` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `lantai` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_unit` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `luas` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tipe` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `harga` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `user_insert` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_insert` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `user_update` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_update` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of m_unit
-- ----------------------------
INSERT INTO `m_unit` VALUES (14, 'BB201', '2', '8979B', '20M', 'Coco', '6bf1b3816fb22c494382a2c060db1900.jpg', '400000000', 'admin', '2018-08-03 11:37:04', NULL, NULL);

-- ----------------------------
-- Table structure for t_booking_fee
-- ----------------------------
DROP TABLE IF EXISTS `t_booking_fee`;
CREATE TABLE `t_booking_fee`  (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `kode_ttbf` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_customer` int(20) NULL DEFAULT NULL,
  `id_sales` int(20) NULL DEFAULT NULL,
  `upload_bukti_transfer` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `priority_code` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_assign` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for t_closing
-- ----------------------------
DROP TABLE IF EXISTS `t_closing`;
CREATE TABLE `t_closing`  (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `id_pu` int(20) NULL DEFAULT NULL,
  `date_assign` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for t_pppu
-- ----------------------------
DROP TABLE IF EXISTS `t_pppu`;
CREATE TABLE `t_pppu`  (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `id_pu` int(20) NULL DEFAULT NULL,
  `status` varchar(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_assign` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `user_assign` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for t_pu
-- ----------------------------
DROP TABLE IF EXISTS `t_pu`;
CREATE TABLE `t_pu`  (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `id_customer` int(20) NULL DEFAULT NULL,
  `id_sales` int(20) NULL DEFAULT NULL,
  `id_bank` int(20) NULL DEFAULT NULL,
  `id_bf` int(20) NULL DEFAULT NULL,
  `id_unit` int(20) NULL DEFAULT NULL,
  `cicilan` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_assign` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `user_assign` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for t_refund
-- ----------------------------
DROP TABLE IF EXISTS `t_refund`;
CREATE TABLE `t_refund`  (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `id_pu` int(20) NULL DEFAULT NULL,
  `date_assign` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

SET FOREIGN_KEY_CHECKS = 1;
