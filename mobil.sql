CREATE DATABASE mobil

CREATE TABLE Admin(
  id_admin INT(4) NOT NULL,
  nama VARCHAR(30) NOT NULL,
  username VARCHAR(15) NOT NULL,
  email VARCHAR(30) NOT NULL,
  alamat VARCHAR(50) NOT NULL,
  no_telp VARCHAR (15) NOT NULL,
  PASSWORD VARCHAR(32) NOT NULL
)

INSERT INTO Admin (id_admin, username, nama, email, alamat, no_telp,PASSWORD) VALUES
(1, 'admin', 'admin' ,'firstrental@gmail.com', 'Medan', '081396199737','admin');



CREATE TABLE mobil (
  id_mobil INT(11) NOT NULL,
  no_mobil VARCHAR(10) NOT NULL,
  merk VARCHAR(20) NOT NULL,
  gambar VARCHAR(100) NOT NULL,
  harga INT(7) NOT NULL,
  STATUS ENUM('0','1') NOT NULL
) 
INSERT INTO mobil (id_mobil, no_mobil, merk, gambar, harga, STATUS) VALUES
(1, 'BK 1234 CC', 'Toyota Avanza', 'gambar1.jpg', 500000, '1'),
(2, 'BK 5788 AX', 'Nissan Grand Livina', 'gambar2.jpeg', 510000, '1'),
(3, 'BK 1257 AA', 'Honda Jazz', 'gambar3.jpg', 600000, '1'),
(4, 'BK 6545 UI', 'Honda Civic', 'gambar4.jpg', 650000, '1'),
(5, 'B 44 YY', 'Mitsubishi Pajero Sport', 'gambar5.jpg', 700000, '1'),
(6, 'BB 4175 BE', 'Ford Ranger', 'gambar6.jpg', 710000, '1'),
(7, 'BK 899 RO', 'Tesla Model X', 'gambar7.jpg', 780000, '0'),
(8, 'BB 767 MS', 'Wuling Almaz', 'gambar8.jpg', 680000, '1');


CREATE TABLE `konfirmasi` (
  `id_konfirmasi` INT(11) NOT NULL,
  `id_transaksi` INT(11) NOT NULL,
  `bukti` VARCHAR(100) NOT NULL
) 
INSERT INTO `konfirmasi` (`id_konfirmasi`, `id_transaksi`, `bukti`) VALUES
(1, 1, '104012020184503.jpg');

CREATE TABLE pelanggan (
  id_pelanggan INT(11) NOT NULL,
  no_ktp CHAR(16) NOT NULL,
  nama VARCHAR(30) NOT NULL,
  email VARCHAR(30) NOT NULL,
  no_telp CHAR(12) NOT NULL,
  alamat VARCHAR(50) DEFAULT NULL,
  username VARCHAR(10) NOT NULL,
  PASSWORD VARCHAR(32) NOT NULL
)

INSERT INTO `pelanggan` (`id_pelanggan`, `no_ktp`, `nama`, `email`, `no_telp`, `alamat`, `username`, `password`) VALUES
(1, '23456789876', 'Mentari', 'dmentari.1024@gmail.com', '081396199737', 'Siborongborong', 'Mentari', 'Mentari');


CREATE TABLE `transaksi` (
  `id_transaksi` INT(11) NOT NULL,
  `id_pelanggan` INT(11) NOT NULL,
  `id_mobil` INT(11) NOT NULL,
  `tgl_sewa` DATETIME NOT NULL,
  `tgl_ambil` DATETIME DEFAULT NULL,
  `tgl_kembali` DATETIME DEFAULT NULL,
  `lama` TINYINT(1) NOT NULL,
  `total_harga` INT(7) NOT NULL,
  `status` ENUM('0','1') NOT NULL,
  `jaminan` VARCHAR(30) NOT NULL,
  `jatuh_tempo` DATETIME NOT NULL,
  `konfirmasi` ENUM('0','1') DEFAULT NULL,
  `pembatalan` ENUM('0','1') DEFAULT NULL
) 

INSERT INTO `transaksi` (`id_transaksi`, `id_pelanggan`, `id_mobil`, `tgl_sewa`, `tgl_ambil`, `tgl_kembali`, `lama`, `total_harga`, `status`, `jaminan`, `jatuh_tempo`, `konfirmasi`, `pembatalan`) VALUES
(1, 1, 1, '2020-01-04 18:44:30', '2020-01-04 18:44:30', NULL, 1, 510000, '0', 'Sertifikat Rumah',  '2020-01-04 21:44:30', '1', '0');

CREATE TABLE `detail_transaksi` (
  `id_detail` INT(11) NOT NULL,
  `id_transaksi` INT(11) NOT NULL
)


ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);
  
  ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `fk_transaksi` (`id_transaksi`);
  
  ALTER TABLE `konfirmasi`
  ADD PRIMARY KEY (`id_konfirmasi`),
  ADD KEY `fk_transaksi` (`id_transaksi`);
  
  ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);
  
  ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);
  
  ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `fk_pelanggan` (`id_pelanggan`),
  ADD KEY `fk_mobil` (`id_mobil`);
  
  ALTER TABLE `admin`
  MODIFY `id_admin` INT(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
  
  ALTER TABLE `detail_transaksi`
  MODIFY `id_detail` INT(11) NOT NULL AUTO_INCREMENT;
  
  ALTER TABLE `konfirmasi`
  MODIFY `id_konfirmasi` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

  ALTER TABLE `mobil`
  MODIFY `id_mobil` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;