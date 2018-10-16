-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2018 at 02:46 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ranty_pesta_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `m_about`
--

CREATE TABLE `m_about` (
  `id` int(20) NOT NULL,
  `deskripsi` text,
  `user_insert` varchar(50) DEFAULT NULL,
  `date_insert` varchar(50) DEFAULT NULL,
  `user_update` varchar(50) DEFAULT NULL,
  `date_update` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `m_about`
--

INSERT INTO `m_about` (`id`, `deskripsi`, `user_insert`, `date_insert`, `user_update`, `date_update`) VALUES
(14, '<!DOCTYPE html>\n<html>\n<head>\n</head>\n<body>\n<p><strong>dgfxgfhfhb</strong></p>\n<p>chghfj</p>\n</body>\n</html>', 'admin', '2018-08-03 11:37:04', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_admin_pppu`
--

CREATE TABLE `m_admin_pppu` (
  `id` int(20) NOT NULL,
  `nik` varchar(25) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `no_telp` text,
  `email` varchar(100) DEFAULT NULL,
  `user_insert` varchar(50) DEFAULT NULL,
  `date_insert` varchar(50) DEFAULT NULL,
  `user_update` varchar(50) DEFAULT NULL,
  `date_update` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `m_admin_pppu`
--

INSERT INTO `m_admin_pppu` (`id`, `nik`, `nama`, `no_telp`, `email`, `user_insert`, `date_insert`, `user_update`, `date_update`) VALUES
(6, '46545', 'Mahmud', '0882848234', 'mah@mail.com', 'admin', '2018-08-04 07:14:25', NULL, NULL),
(8, '823742', 'Joni Iskandar', '02147844876', 'jon@mail.com', 'admin', '2018-08-04 21:18:24', NULL, NULL),
(9, '876513', 'Kasino Hadiwibowo', '021874845', 'kasino@mail.com', NULL, NULL, 'admin', '2018-08-09 06:57:09');

-- --------------------------------------------------------

--
-- Table structure for table `m_akun_admin_pppu`
--

CREATE TABLE `m_akun_admin_pppu` (
  `id` int(20) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `id_admin_pppu` int(20) DEFAULT NULL,
  `user_insert` varchar(50) DEFAULT NULL,
  `date_insert` varchar(50) DEFAULT NULL,
  `user_update` varchar(50) DEFAULT NULL,
  `date_update` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `m_akun_admin_pppu`
--

INSERT INTO `m_akun_admin_pppu` (`id`, `username`, `password`, `id_admin_pppu`, `user_insert`, `date_insert`, `user_update`, `date_update`) VALUES
(1, 'mahmud', 'YQ==', 4, NULL, NULL, NULL, NULL),
(2, 'mahmud', 'YQ==', 6, 'admin', '2018-08-04 21:37:54', NULL, NULL),
(3, 'kasino', 'YQ==', 9, 'admin', '2018-08-09 06:58:35', NULL, NULL),
(4, 'rr', 'YQ==', 0, 'admin', '2018-09-07 18:07:05', NULL, NULL),
(5, 'rr', 'YQ==', 0, 'admin', '2018-09-07 18:10:17', NULL, NULL),
(6, 'rr', 'YQ==', 0, 'admin', '2018-09-07 18:12:14', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_akun_sales`
--

CREATE TABLE `m_akun_sales` (
  `id` int(20) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `id_sales` int(20) DEFAULT NULL,
  `user_insert` varchar(50) DEFAULT NULL,
  `date_insert` varchar(50) DEFAULT NULL,
  `user_update` varchar(50) DEFAULT NULL,
  `date_update` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `m_akun_sales`
--

INSERT INTO `m_akun_sales` (`id`, `username`, `password`, `id_sales`, `user_insert`, `date_insert`, `user_update`, `date_update`) VALUES
(10, 'okki', 'YQ==', 2, 'admin', '2018-08-04 21:07:27', NULL, NULL),
(11, 'sadono', 'YQ==', 5, 'admin', '2018-08-09 06:58:10', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_akun_superadmin`
--

CREATE TABLE `m_akun_superadmin` (
  `id` int(20) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `user_insert` varchar(50) DEFAULT NULL,
  `date_insert` varchar(50) DEFAULT NULL,
  `user_update` varchar(50) DEFAULT NULL,
  `date_update` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `m_akun_superadmin`
--

INSERT INTO `m_akun_superadmin` (`id`, `username`, `password`, `user_insert`, `date_insert`, `user_update`, `date_update`) VALUES
(1, 'admin', 'YQ==', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_bank`
--

CREATE TABLE `m_bank` (
  `id` int(20) NOT NULL,
  `kode_bank` varchar(25) DEFAULT NULL,
  `nama_bank` varchar(100) DEFAULT NULL,
  `no_rekening` varchar(20) DEFAULT NULL,
  `jumlah_kpa` varchar(5) DEFAULT NULL,
  `user_insert` varchar(50) DEFAULT NULL,
  `date_insert` varchar(50) DEFAULT NULL,
  `user_update` varchar(50) DEFAULT NULL,
  `date_update` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `m_bank`
--

INSERT INTO `m_bank` (`id`, `kode_bank`, `nama_bank`, `no_rekening`, `jumlah_kpa`, `user_insert`, `date_insert`, `user_update`, `date_update`) VALUES
(2, '0086', 'Mandiri Syariah', '9876578923427345', '2', NULL, NULL, 'admin', '2018-08-03 11:58:31'),
(3, '012', 'BCA', '989378432', '3', 'admin', '2018-08-05 06:47:24', NULL, NULL),
(4, '087', 'CIMB', '9742343243734', '2.5', 'admin', '2018-08-05 06:48:45', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_cat_foto`
--

CREATE TABLE `m_cat_foto` (
  `id` int(20) NOT NULL,
  `deskripsi` text,
  `user_insert` varchar(50) DEFAULT NULL,
  `date_insert` varchar(50) DEFAULT NULL,
  `user_update` varchar(50) DEFAULT NULL,
  `date_update` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `m_cat_foto`
--

INSERT INTO `m_cat_foto` (`id`, `deskripsi`, `user_insert`, `date_insert`, `user_update`, `date_update`) VALUES
(22, 'sdsdssd', NULL, NULL, 'admin', '2018-09-09 11:30:05');

-- --------------------------------------------------------

--
-- Table structure for table `m_client`
--

CREATE TABLE `m_client` (
  `id` int(20) NOT NULL,
  `deskripsi` text,
  `user_insert` varchar(50) DEFAULT NULL,
  `date_insert` varchar(50) DEFAULT NULL,
  `user_update` varchar(50) DEFAULT NULL,
  `date_update` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `m_client`
--

INSERT INTO `m_client` (`id`, `deskripsi`, `user_insert`, `date_insert`, `user_update`, `date_update`) VALUES
(14, '<!DOCTYPE html>\n<html>\n<head>\n</head>\n<body>\n<p>&nbsp;</p>\n<p>Perusahaan dan intansi yang pernah memakai jasa kami baik di event organizer maupun equipment antara lain :</p>\n<ol>\n<li>Sekretariat Negara (Hari Kemerdekaan di Istana Negara) 2011.</li>\n<li>Management Kota Wisata Cibubur (Kerjasama sampai saat ini).</li>\n<li>Management raflesh hills cibubur.</li>\n<li>PT Garuda Indonesia cargo event ghatring 2011.</li>\n<li>Kota wisata cibubur Event perayaan imlek 2011-2017.</li>\n<li>PT GT Radial Event (bursa otomotiv ramadhan) 2011.</li>\n<li>Pt djarum fondation Event pemberantas sarang nyamuk 2012 &amp; 2013.</li>\n<li>USA food fair Event kota wisata 2012.</li>\n<li>Family wealth fiesta Event tabloit kontan (kompas group) 2012.</li>\n<li>Giant harapan indah bekasi Event nonton bersama final euro 2012.</li>\n<li>PT Kimia farma Event halal bihalal 2012.</li>\n<li>PT polygon event bazar fun bike 2013.</li>\n<li>Pemda tanggerang selatan pamulang Event (gelar pesta rakyat) 2013.</li>\n<li>Pemda bogor event pesta rakyat 2013</li>\n<li>Kementrian kesehatan Event (HCTPS) di senayan 2015.</li>\n<li>Wijaya Karya Event natal 2017.</li>\n<li>PT bank BCA event BCA motoshow 2017 &amp; 2018.</li>\n<li>Artha Graha.</li>\n<li>PT Tubagus Event family ghatring at go wet 2017</li>\n<li>Taman Mini Indonesia Indah.</li>\n<li>Yayasan Prestice Cibubur.</li>\n<li>Bumi Perkemahan dan Graha Wisata Pramuka Cibubur</li>\n<li>Rumah Sakit Sari Asih Tangerang.</li>\n<li>Weding rumahan s/d gedung.</li>\n<li>Dll</li>\n</ol>\n</body>\n</html>', 'admin', '2018-08-03 11:37:04', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_customer`
--

CREATE TABLE `m_customer` (
  `id` int(20) NOT NULL,
  `kode_pelanggan` varchar(25) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `no_hp` text,
  `no_kantor` text,
  `no_rumah` text,
  `email` varchar(100) DEFAULT NULL,
  `alamat` text,
  `upload_ktp` varchar(255) DEFAULT NULL,
  `upload_npwp` varchar(255) DEFAULT NULL,
  `upload_slip_gaji` varchar(255) DEFAULT NULL,
  `upload_dok_pendukung` varchar(255) DEFAULT NULL,
  `user_insert` varchar(50) DEFAULT NULL,
  `date_insert` varchar(50) DEFAULT NULL,
  `user_update` varchar(50) DEFAULT NULL,
  `date_update` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `m_customer`
--

INSERT INTO `m_customer` (`id`, `kode_pelanggan`, `nama`, `tempat_lahir`, `tanggal_lahir`, `no_hp`, `no_kantor`, `no_rumah`, `email`, `alamat`, `upload_ktp`, `upload_npwp`, `upload_slip_gaji`, `upload_dok_pendukung`, `user_insert`, `date_insert`, `user_update`, `date_update`) VALUES
(8, 'KP84455', 'Karlina', 'Tegal', '1993-10-01', '087889677228', '0218978675', '0218786778', 'karlinamaksum19@gmail.com', 'Jl.Notog Pintu', 'da.txt', 'db.txt', 'dc.txt', 'dd.txt', 'admin', '2018-08-03 16:09:06', NULL, NULL),
(9, 'KP62033', 'Okki S', 'Jakarta', '1993-10-01', '0831631131', '021882647', '0217843635', 'okkisetyawan@gmail.com', 'Jl.Nangka', 'dataa.pdf', 'datab.pdf', 'datac.pdf', 'datad.pdf', 'admin', '2018-08-05 06:27:11', NULL, NULL),
(11, 'KP66240', 'Tuti', 'Jakarta', '2018-08-09', '08787534', '021767524', '021767445', 'karlinamaksum19@gmail.com', 'Jl.AAA', 'data1.pdf', 'data2.pdf', 'data3.pdf', 'data4.pdf', 'admin', '2018-08-09 06:52:18', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_googlemaps`
--

CREATE TABLE `m_googlemaps` (
  `id` int(11) NOT NULL,
  `url_map` text,
  `user_insert` varchar(50) DEFAULT NULL,
  `date_insert` varchar(50) DEFAULT NULL,
  `user_update` varchar(50) DEFAULT NULL,
  `date_update` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_googlemaps`
--

INSERT INTO `m_googlemaps` (`id`, `url_map`, `user_insert`, `date_insert`, `user_update`, `date_update`) VALUES
(1, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3600192474782!2d106.9261130142726!3d-6.216162595500138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698c9ec1d14243%3A0xb5c4c7aa5e835b72!2sBuaran!5e0!3m2!1sid!2sid!4v1536497137863\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', NULL, NULL, 'admin', '2018-09-09 14:45:44');

-- --------------------------------------------------------

--
-- Table structure for table `m_pricelist_item`
--

CREATE TABLE `m_pricelist_item` (
  `id` int(10) NOT NULL,
  `id_kategori` int(255) DEFAULT NULL,
  `item` text,
  `satuan` varchar(100) DEFAULT NULL,
  `harga_satuan` int(10) DEFAULT NULL,
  `foto` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `m_sales`
--

CREATE TABLE `m_sales` (
  `id` int(20) NOT NULL,
  `nik` varchar(25) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `no_telp` text,
  `email` varchar(100) DEFAULT NULL,
  `user_insert` varchar(50) DEFAULT NULL,
  `date_insert` varchar(50) DEFAULT NULL,
  `user_update` varchar(50) DEFAULT NULL,
  `date_update` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `m_sales`
--

INSERT INTO `m_sales` (`id`, `nik`, `nama`, `no_telp`, `email`, `user_insert`, `date_insert`, `user_update`, `date_update`) VALUES
(2, '101001911', 'Okki Setyawan S.Kom', '087874823423422', 'okkisetyawans@gmail.com', NULL, NULL, 'admin', '2018-08-04 06:53:06'),
(4, '87832432', 'Yahya', '9089345', 'yahya@mail.com', 'admin', '2018-08-04 20:24:40', NULL, NULL),
(5, '82342347', 'Wahyoe Sardono', '021874854', 'sadono@mail.com', 'admin', '2018-08-09 06:57:42', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_slideshow`
--

CREATE TABLE `m_slideshow` (
  `id` int(20) NOT NULL,
  `foto_url` text,
  `caption_a` text,
  `caption_b` text,
  `seq_no` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `m_slideshow`
--

INSERT INTO `m_slideshow` (`id`, `foto_url`, `caption_a`, `caption_b`, `seq_no`) VALUES
(18, 'image_8.jpeg', 'fg', 'df', '1'),
(19, 'image_7.jpeg', 'as', 'ddf', '2'),
(22, '4.jpg', 'nice car', 'oke', '3');

-- --------------------------------------------------------

--
-- Table structure for table `m_sosmed`
--

CREATE TABLE `m_sosmed` (
  `id` int(20) NOT NULL,
  `socmed_name` varchar(25) DEFAULT NULL,
  `socmed_url` varchar(5) DEFAULT NULL,
  `user_insert` varchar(50) DEFAULT NULL,
  `date_insert` varchar(50) DEFAULT NULL,
  `user_update` varchar(50) DEFAULT NULL,
  `date_update` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `m_sosmed`
--

INSERT INTO `m_sosmed` (`id`, `socmed_name`, `socmed_url`, `user_insert`, `date_insert`, `user_update`, `date_update`) VALUES
(14, 'BB201', '2', 'admin', '2018-08-03 11:37:04', NULL, NULL),
(15, 'B777', '2', 'admin', '2018-08-09 06:53:17', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_unit`
--

CREATE TABLE `m_unit` (
  `id` int(20) NOT NULL,
  `blok_tower` varchar(25) DEFAULT NULL,
  `lantai` varchar(5) DEFAULT NULL,
  `no_unit` varchar(5) DEFAULT NULL,
  `luas` varchar(25) DEFAULT NULL,
  `tipe` varchar(25) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `harga` varchar(25) DEFAULT NULL,
  `user_insert` varchar(50) DEFAULT NULL,
  `date_insert` varchar(50) DEFAULT NULL,
  `user_update` varchar(50) DEFAULT NULL,
  `date_update` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `m_unit`
--

INSERT INTO `m_unit` (`id`, `blok_tower`, `lantai`, `no_unit`, `luas`, `tipe`, `foto`, `harga`, `user_insert`, `date_insert`, `user_update`, `date_update`) VALUES
(14, 'BB201', '2', '8979B', '20M', 'Coco', '6bf1b3816fb22c494382a2c060db1900.jpg', '400000000', 'admin', '2018-08-03 11:37:04', NULL, NULL),
(15, 'B777', '2', '88', '20', '66', 'tetew.png', '70000000', 'admin', '2018-08-09 06:53:17', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_user`
--

CREATE TABLE `m_user` (
  `id` int(20) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `user_insert` varchar(50) DEFAULT NULL,
  `date_insert` varchar(50) DEFAULT NULL,
  `user_update` varchar(50) DEFAULT NULL,
  `date_update` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `m_user`
--

INSERT INTO `m_user` (`id`, `username`, `password`, `user_insert`, `date_insert`, `user_update`, `date_update`) VALUES
(1, 'admin', 'YQ==', NULL, NULL, NULL, NULL),
(3, 'ghjyfrhthtr', 'Yg==', 'admin', '2018-09-09 15:12:55', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_booking_fee`
--

CREATE TABLE `t_booking_fee` (
  `id` int(20) NOT NULL,
  `kode_ttbf` varchar(50) DEFAULT NULL,
  `id_customer` int(20) DEFAULT NULL,
  `id_sales` int(20) DEFAULT NULL,
  `upload_bukti_transfer` varchar(255) DEFAULT NULL,
  `priority_code` varchar(25) DEFAULT NULL,
  `date_assign` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `t_booking_fee`
--

INSERT INTO `t_booking_fee` (`id`, `kode_ttbf`, `id_customer`, `id_sales`, `upload_bukti_transfer`, `priority_code`, `date_assign`) VALUES
(7, 'TBFHN3478', 8, 2, 'user-img-background.jpg', 'PCDTUR3IZ', '2018-08-07 16:51:59'),
(11, 'TBFCGOCZO', 11, 5, '17861766_1247250208721754_3705567923298905677_n.jpg', 'PCDK8TN3O', '2018-08-09 07:12:21');

-- --------------------------------------------------------

--
-- Table structure for table `t_closing`
--

CREATE TABLE `t_closing` (
  `id` int(20) NOT NULL,
  `id_pu` int(20) DEFAULT NULL,
  `date_assign` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `t_pppu`
--

CREATE TABLE `t_pppu` (
  `id` int(20) NOT NULL,
  `id_pu` int(20) DEFAULT NULL,
  `status` varchar(2) DEFAULT NULL,
  `date_assign` varchar(50) DEFAULT NULL,
  `user_assign` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `t_pppu`
--

INSERT INTO `t_pppu` (`id`, `id_pu`, `status`, `date_assign`, `user_assign`) VALUES
(4, 20, 'Y', '2018-08-09 08:22:45', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `t_pu`
--

CREATE TABLE `t_pu` (
  `id` int(20) NOT NULL,
  `no_pu` varchar(50) DEFAULT NULL,
  `id_customer` int(20) DEFAULT NULL,
  `id_sales` int(20) DEFAULT NULL,
  `id_bank` int(20) DEFAULT NULL,
  `id_bf` int(20) DEFAULT NULL,
  `id_unit` int(20) DEFAULT NULL,
  `cicilan` varchar(5) DEFAULT NULL,
  `date_assign` varchar(50) DEFAULT NULL,
  `user_assign` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `t_pu`
--

INSERT INTO `t_pu` (`id`, `no_pu`, `id_customer`, `id_sales`, `id_bank`, `id_bf`, `id_unit`, `cicilan`, `date_assign`, `user_assign`) VALUES
(20, 'LKLP9X72', 8, 2, 3, 7, 14, '12', '2018-08-07', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `t_refund`
--

CREATE TABLE `t_refund` (
  `id` int(20) NOT NULL,
  `id_pu` int(20) DEFAULT NULL,
  `date_assign` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_about`
--
ALTER TABLE `m_about`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `m_admin_pppu`
--
ALTER TABLE `m_admin_pppu`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `m_akun_admin_pppu`
--
ALTER TABLE `m_akun_admin_pppu`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `m_akun_sales`
--
ALTER TABLE `m_akun_sales`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `m_akun_superadmin`
--
ALTER TABLE `m_akun_superadmin`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `m_bank`
--
ALTER TABLE `m_bank`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `m_cat_foto`
--
ALTER TABLE `m_cat_foto`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `m_client`
--
ALTER TABLE `m_client`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `m_customer`
--
ALTER TABLE `m_customer`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `m_googlemaps`
--
ALTER TABLE `m_googlemaps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_pricelist_item`
--
ALTER TABLE `m_pricelist_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_sales`
--
ALTER TABLE `m_sales`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `m_slideshow`
--
ALTER TABLE `m_slideshow`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `m_sosmed`
--
ALTER TABLE `m_sosmed`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `m_unit`
--
ALTER TABLE `m_unit`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `m_user`
--
ALTER TABLE `m_user`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `t_booking_fee`
--
ALTER TABLE `t_booking_fee`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `t_closing`
--
ALTER TABLE `t_closing`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `t_pppu`
--
ALTER TABLE `t_pppu`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `t_pu`
--
ALTER TABLE `t_pu`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `t_refund`
--
ALTER TABLE `t_refund`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_about`
--
ALTER TABLE `m_about`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `m_admin_pppu`
--
ALTER TABLE `m_admin_pppu`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `m_akun_admin_pppu`
--
ALTER TABLE `m_akun_admin_pppu`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `m_akun_sales`
--
ALTER TABLE `m_akun_sales`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `m_akun_superadmin`
--
ALTER TABLE `m_akun_superadmin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `m_bank`
--
ALTER TABLE `m_bank`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `m_cat_foto`
--
ALTER TABLE `m_cat_foto`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `m_client`
--
ALTER TABLE `m_client`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `m_customer`
--
ALTER TABLE `m_customer`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `m_googlemaps`
--
ALTER TABLE `m_googlemaps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `m_pricelist_item`
--
ALTER TABLE `m_pricelist_item`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m_sales`
--
ALTER TABLE `m_sales`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `m_slideshow`
--
ALTER TABLE `m_slideshow`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `m_sosmed`
--
ALTER TABLE `m_sosmed`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `m_unit`
--
ALTER TABLE `m_unit`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `m_user`
--
ALTER TABLE `m_user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_booking_fee`
--
ALTER TABLE `t_booking_fee`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `t_closing`
--
ALTER TABLE `t_closing`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_pppu`
--
ALTER TABLE `t_pppu`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `t_pu`
--
ALTER TABLE `t_pu`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `t_refund`
--
ALTER TABLE `t_refund`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
