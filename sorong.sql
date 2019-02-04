/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.1.34-MariaDB : Database - sorong
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sorong` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `sorong`;

/*Table structure for table `barang` */

DROP TABLE IF EXISTS `barang`;

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(255) NOT NULL,
  `stok_awal` int(11) NOT NULL,
  `stok_masuk` int(11) NOT NULL,
  `stok_keluar` int(11) NOT NULL,
  `stok_akhir` int(11) NOT NULL,
  `harga` varchar(15) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `file_laporan` varchar(255) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_keluar` date NOT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `barang` */

/*Table structure for table `homestay` */

DROP TABLE IF EXISTS `homestay`;

CREATE TABLE `homestay` (
  `id_anggota` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(50) NOT NULL,
  `check_in` datetime NOT NULL,
  `check_out` datetime NOT NULL,
  `kamar` varchar(10) NOT NULL,
  `jumlah_orang` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  PRIMARY KEY (`id_anggota`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `homestay` */

/*Table structure for table `jadwal_ibadah` */

DROP TABLE IF EXISTS `jadwal_ibadah`;

CREATE TABLE `jadwal_ibadah` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pemimpin_ibadah` varchar(100) NOT NULL,
  `tanggal_ibadah` date NOT NULL,
  `tempat_ibadah` varchar(100) NOT NULL,
  `alamat_ibadah` varchar(100) NOT NULL,
  `liturgi_ibadah` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `jadwal_ibadah` */

insert  into `jadwal_ibadah`(`id`,`pemimpin_ibadah`,`tanggal_ibadah`,`tempat_ibadah`,`alamat_ibadah`,`liturgi_ibadah`) values 
(1,'David','2019-02-07','sorong','ddfefef','mug.jpg'),
(3,'Theo','2019-02-15','aaaaaa','aaaa','gambar.png');

/*Table structure for table `jualan` */

DROP TABLE IF EXISTS `jualan`;

CREATE TABLE `jualan` (
  `id_jualan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jualan` varchar(100) NOT NULL,
  `harga_jualan` varchar(15) NOT NULL,
  `deskripsi_jualan` text NOT NULL,
  PRIMARY KEY (`id_jualan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `jualan` */

/*Table structure for table `materi` */

DROP TABLE IF EXISTS `materi`;

CREATE TABLE `materi` (
  `id_materi` int(11) NOT NULL AUTO_INCREMENT,
  `judul_materi` varchar(50) NOT NULL,
  `jenis_materi` varchar(50) NOT NULL,
  `isi_materi` text NOT NULL,
  `tanggal` date NOT NULL,
  `file_materi` varchar(255) NOT NULL,
  `nama_pengajar` varchar(50) NOT NULL,
  PRIMARY KEY (`id_materi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `materi` */

/*Table structure for table `profil_sekolah` */

DROP TABLE IF EXISTS `profil_sekolah`;

CREATE TABLE `profil_sekolah` (
  `id_profil` int(11) NOT NULL AUTO_INCREMENT,
  `nama_sekolah` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `peta` text NOT NULL,
  PRIMARY KEY (`id_profil`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `profil_sekolah` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`username`,`password`) values 
(1,'arnal','$2y$10$7GRUHsolxfsDHIdivo82kOnU0MIO/2vfAK.4y5a5XibXxyWotEnqC');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
