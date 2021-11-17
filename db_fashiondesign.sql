
DROP TABLE IF EXISTS `baju_man`;

CREATE TABLE `baju_man` (
  `id_baju_man` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id_baju_man`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4;

/*Data for the table `baju_man` */

insert  into `baju_man`(`id_baju_man`,`nama`,`harga`,`gambar`,`link`) values 
(1,'Polo shirt Kaos Kerah lengan panjang Ua Golf',150000,'bm_1.jpg','https://tokopedia.link/TUDYQoAU4kb'),
(2,'KAOS POLO / KERAH / GOLF PRIA CUTI LAKOS ORIGINAL PIER ONE RETAIL 700K - S, Putih',99000,'bm_2.jpg','https://tokopedia.link/q9rYZawU4kb'),
(3,'Kaos Someone Gold Koi 172D Glow In The Dark - S',75000,'bm_3.jpg','https://tokopedia.link/zbescSEU4kb'),
(4,'Kith X MLB New York Yankees NY Embroidery T-Shirt Navy - M',189070,'bm_4.jpg','https://tokopedia.link/qA9i3NMU4kb'),
(5,'Human Made 2026 T-Shirt Black - M',179280,'bm_5.jpg','https://tokopedia.link/37BWfqPU4kb');

/*Table structure for table `baju_woman` */

DROP TABLE IF EXISTS `baju_woman`;

CREATE TABLE `baju_woman` (
  `id_baju_woman` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id_baju_woman`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4;

/*Data for the table `baju_woman` */

/*Table structure for table `celana_man` */

DROP TABLE IF EXISTS `celana_man`;

CREATE TABLE `celana_man` (
  `id_celana_man` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id_celana_man`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `celana_man` */

insert  into `celana_man`(`id_celana_man`,`nama`,`harga`,`gambar`,`link`) values 
(1,'Motz Chino Washing Basic Reguler Cream - XL',492750,'cm_1.jpg','https://tokopedia.link/pDHh8I6U4kb'),
(2,'https://tokopedia.link/CKfE9D2U4kb',179280,'cm_2.jpg','https://tokopedia.link/CKfE9D2U4kb'),
(3,'UNQ Slim Fit Chino Pants Olive - 33/85',179,'cm_3.jpg','https://tokopedia.link/tb2bi80U4kb');

/*Table structure for table `celana_woman` */

DROP TABLE IF EXISTS `celana_woman`;

CREATE TABLE `celana_woman` (
  `id_celana_woman` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id_celana_woman`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `celana_woman` */

/*Table structure for table `kategori` */

DROP TABLE IF EXISTS `kategori`;

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `pakaian_woman_id_pakaian_woman` varchar(255) NOT NULL,
  `pakaian_man_id_pakaian_man` varchar(255) NOT NULL,
  `user_id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_kategori`),
  KEY `kategori_pakaian_man_fk` (`pakaian_man_id_pakaian_man`),
  KEY `kategori_pakaian_woman_fk` (`pakaian_woman_id_pakaian_woman`),
  KEY `kategori_user_fk` (`user_id_user`),
  CONSTRAINT `kategori_pakaian_man_fk` FOREIGN KEY (`pakaian_man_id_pakaian_man`) REFERENCES `pakaian_man` (`id_pakaian_man`),
  CONSTRAINT `kategori_pakaian_woman_fk` FOREIGN KEY (`pakaian_woman_id_pakaian_woman`) REFERENCES `pakaian_woman` (`id_pakaian_woman`),
  CONSTRAINT `kategori_user_fk` FOREIGN KEY (`user_id_user`) REFERENCES `user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `kategori` */

/*Table structure for table `pakaian_man` */

DROP TABLE IF EXISTS `pakaian_man`;

CREATE TABLE `pakaian_man` (
  `id_pakaian_man` varchar(255) NOT NULL,
  `baju_man_id_baju_man` int(11) NOT NULL,
  `celana_man_id_celana_man` int(11) NOT NULL,
  `sepatu_man_id_sepatu` int(11) NOT NULL,
  PRIMARY KEY (`id_pakaian_man`),
  KEY `pakaian_man_baju_man_fk` (`baju_man_id_baju_man`),
  KEY `pakaian_man_celana_man_fk` (`celana_man_id_celana_man`),
  KEY `pakaian_man_sepatu_man_fk` (`sepatu_man_id_sepatu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `pakaian_man` */

/*Table structure for table `pakaian_woman` */

DROP TABLE IF EXISTS `pakaian_woman`;

CREATE TABLE `pakaian_woman` (
  `id_pakaian_woman` varchar(255) NOT NULL,
  `baju_woman_id_baju_woman` int(11) NOT NULL,
  `celana_woman_id_celana_woman` int(11) NOT NULL,
  `sepatu_woman_id_sepatu_woman` int(11) NOT NULL,
  PRIMARY KEY (`id_pakaian_woman`),
  KEY `pakaian_woman_baju_woman_fk` (`baju_woman_id_baju_woman`),
  KEY `pakaian_woman_celana_woman_fk` (`celana_woman_id_celana_woman`),
  KEY `pakaian_woman_sepatu_woman_fk` (`sepatu_woman_id_sepatu_woman`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `pakaian_woman` */

/*Table structure for table `sepatu_man` */

DROP TABLE IF EXISTS `sepatu_man`;

CREATE TABLE `sepatu_man` (
  `id_sepatu` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id_sepatu`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `sepatu_man` */

insert  into `sepatu_man`(`id_sepatu`,`nama`,`harga`,`gambar`,`link`) values 
(1,'BRODO - Sneakers Pria Active Zeal Beast Olive Orange IS - 41',530,'sm_1.jpg','https://tokopedia.link/8lmpaTtV4kb'),
(2,'Sneakers Pria BRODO Base Lite All White GS - 41',299000,'sm_2.jpg','https://tokopedia.link/5HtOl8rV4kb');

/*Table structure for table `sepatu_woman` */

DROP TABLE IF EXISTS `sepatu_woman`;

CREATE TABLE `sepatu_woman` (
  `id_sepatu_woman` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id_sepatu_woman`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `sepatu_woman` */

/*Table structure for table `user` */

CREATE TABLE USER (
    id_user  INTEGER NOT NULL,
    nama     VARCHAR(30) NOT NULL,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(60) NOT NULL,
    gender   CHAR(1) NOT NULL
);

ALTER TABLE USER ADD CONSTRAINT user_pk PRIMARY KEY ( id_user );

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `gender`) VALUES
	(69, 'Jhhonathan', 'jhonny', 'jhonny123', 'l');

