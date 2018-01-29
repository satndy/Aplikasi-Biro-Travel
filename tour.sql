-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2018 at 04:19 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tour`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
`id` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `user_admin` varchar(20) NOT NULL,
  `pass_admin` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `foto`, `user_admin`, `pass_admin`, `level`, `nama`) VALUES
(3, 'Kuning.jpg', 'werert', 'qweqwewq', '2', 'hhhj'),
(4, '_20160421_074522.JPG', 'admin', 'admin', '1', 'Arissandy'),
(6, '0d5e159404933b4185268a4d13c574ee.jpg', 'operator', 'operator', '2', 'Pandu');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bukti`
--

CREATE TABLE IF NOT EXISTS `tbl_bukti` (
`id_bukti` int(11) NOT NULL,
  `id_pesan` int(11) NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_bukti`
--

INSERT INTO `tbl_bukti` (`id_bukti`, `id_pesan`, `file`) VALUES
(19, 32, 'TMPDOODLE1483291958727.jpg'),
(20, 32, 'TMPDOODLE1483291958727.jpg'),
(22, 36, 'fungsi-jantung-1.jpg'),
(23, 37, 'abu.jpg'),
(24, 37, 'Kuning.jpg'),
(25, 38, 'google.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_daerah`
--

CREATE TABLE IF NOT EXISTS `tbl_daerah` (
  `id_provinsi` int(11) NOT NULL,
  `id_daerah` int(11) NOT NULL,
  `nama_daerah` varchar(35) NOT NULL,
  `biaya` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_daerah`
--

INSERT INTO `tbl_daerah` (`id_provinsi`, `id_daerah`, `nama_daerah`, `biaya`) VALUES
(1, 1, 'Blitar', 50000),
(2, 2, 'Semarang', 150000),
(3, 3, 'Bogor', 200000),
(5, 4, 'Sleman', 175000),
(1, 5, 'Surabaya', 65000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hotel`
--

CREATE TABLE IF NOT EXISTS `tbl_hotel` (
`id_hotel` int(11) NOT NULL,
  `hotel` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `ket_hotel` text NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_hotel`
--

INSERT INTO `tbl_hotel` (`id_hotel`, `hotel`, `harga`, `ket_hotel`, `foto`) VALUES
(1, 'Hotel Tugu Sri Lestari', 420000, '<p style="text-align: justify;"><strong>Dirancang</strong> <em>untuk</em> wisata <img src="plugins/tinymce/plugins/emoticons/img/smiley-innocent.gif" alt="" />plesir dan bisnis, Campago Resort Hotel terletak strategis di Bukittinggi; salah satu daerah lokal terkenal. Hotel ini tidak terlalu jauh dari pusat kota, hanya dari sini dan umumnya hanya membutuhkan waktu 90 menit untuk mencapai bandara. Dengan lokasinya yang strategis, hotel ini menawarkan akses mudah ke destinasi yang wajib dilihat di kota ini.</p>\r\n<p style="text-align: justify;">Fasilitas dan pelayanan yang ditawarkan Campago Resort Hotel menjaminkan penginapan menyenangkan bagi para tamu. Ketika menginap di properti yang luar biasa ini, para tamu dapat menikmati wi-fi di tempat-tempat umum, ruang merokok , concierge, layanan laundry, tur.</p>\r\n<p style="text-align: justify;">Campago Resort Hotel memiliki 22 kamar tidur yang semuanya dirancang dengan citarasa tinggi untuk menyediakan kenyamanan seperti televisi, meja tulis, internet (wireless), AC, kulkas. Hotel ini menyediakan sejumlah fasilitas rekreasi seperti kolam (anak), taman, lapangan tenis, klub anak. Fasilitas super dan lokasi yang cemerlang menjadikan Campago Resort Hotel tempat yang sempurna untuk menikmati penginapan Anda selama di Bukittinggi.</p>\r\n<h3>Kebijakan Hotel</h3>\r\n<ul>\r\n<li>Minimum umur tamu adalah: 1 tahun</li>\r\n<li>Tamu berumur diatas 7 tahun dianggap sebagai tamu dewasa</li>\r\n<li>Ekstra bed tergantung pada kamar yang Anda pilih, silahkan cek kebijakan setiap kamar untuk detil lebih lanjut</li>\r\n</ul>\r\n<table style="margin-left: auto; margin-right: auto;">\r\n<tbody>\r\n<tr>\r\n<td>Bayi dibawah 1 tahun</td>\r\n<td>Tidak diizinkan untuk menginap</td>\r\n</tr>\r\n<tr>\r\n<td>Bayi 1 tahun</td>\r\n<td>Menginap gratis dengan menggunakan tempat tidur yang tersedia. Catatan, biaya tambahan kemungkinan dikenakan jika Anda membutuhkan ranjang bayi</td>\r\n</tr>\r\n<tr>\r\n<td>Anak-anak 2-7 tahun</td>\r\n<td>Harus menggunakan ekstra bed</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<h3>Fasilitas Hotel</h3>\r\n<table>\r\n<tbody>\r\n<tr>\r\n<td>Fasilitas</td>\r\n<td>coffee shop, concierge, fasilitas rapat,layanan kamar, layanan kamar 24 jam, layanan laundry, restoran, ruang keluarga, ruang merokok, wi-fi di tempat-tempat umum, Wi-Fi gratis di semua kamar</td>\r\n</tr>\r\n<tr>\r\n<td>Olahraga dan Rekreasi</td>\r\n<td>klub anak, kolam (anak), lapangan tenis, taman</td>\r\n</tr>\r\n<tr>\r\n<td>Internet dalam Kamar</td>\r\n<td>Akses WiFi gratis</td>\r\n</tr>\r\n<tr>\r\n<td>Parkir</td>\r\n<td>tempat parkir mobil</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'tugu.png'),
(2, 'Hotel Grand Mansion', 460000, '<p style="text-align: justify;">Dirancang untuk wisata plesir dan bisnis, Campago Resort Hotel terletak strategis di Bukittinggi; salah satu daerah lokal terkenal. Hotel ini tidak terlalu jauh dari pusat kota, hanya dari sini dan umumnya hanya membutuhkan waktu 90 menit untuk mencapai bandara. Dengan lokasinya yang strategis, hotel ini menawarkan akses mudah ke destinasi yang wajib dilihat di kota ini.</p>\r\n<p style="text-align: justify;">Fasilitas dan pelayanan yang ditawarkan Campago Resort Hotel menjaminkan penginapan menyenangkan bagi para tamu. Ketika menginap di properti yang luar biasa ini, para tamu dapat menikmati wi-fi di tempat-tempat umum, ruang merokok , concierge, layanan laundry, tur.</p>\r\n<p style="text-align: justify;">Campago Resort Hotel memiliki 22 kamar tidur yang semuanya dirancang dengan citarasa tinggi untuk menyediakan kenyamanan seperti televisi, meja tulis, internet (wireless), AC, kulkas. Hotel ini menyediakan sejumlah fasilitas rekreasi seperti kolam (anak), taman, lapangan tenis, klub anak. Fasilitas super dan lokasi yang cemerlang menjadikan Campago Resort Hotel tempat yang sempurna untuk menikmati penginapan Anda selama di Bukittinggi.</p>\r\n<h3>Kebijakan Hotel</h3>\r\n<ul>\r\n<li>Minimum umur tamu adalah: 1 tahun</li>\r\n<li>Tamu berumur diatas 7 tahun dianggap sebagai tamu dewasa</li>\r\n<li>Ekstra bed tergantung pada kamar yang Anda pilih, silahkan cek kebijakan setiap kamar untuk detil lebih lanjut</li>\r\n</ul>\r\n<table style="margin-left: auto; margin-right: auto;">\r\n<tbody>\r\n<tr>\r\n<td>Bayi dibawah 1 tahun</td>\r\n<td>Tidak diizinkan untuk menginap</td>\r\n</tr>\r\n<tr>\r\n<td>Bayi 1 tahun</td>\r\n<td>Menginap gratis dengan menggunakan tempat tidur yang tersedia. Catatan, biaya tambahan kemungkinan dikenakan jika Anda membutuhkan ranjang bayi</td>\r\n</tr>\r\n<tr>\r\n<td>Anak-anak 2-7 tahun</td>\r\n<td>Harus menggunakan ekstra bed</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<h3>Fasilitas Hotel</h3>\r\n<table>\r\n<tbody>\r\n<tr>\r\n<td>Fasilitas</td>\r\n<td>coffee shop, concierge, fasilitas rapat,layanan kamar, layanan kamar 24 jam, layanan laundry, restoran, ruang keluarga, ruang merokok, wi-fi di tempat-tempat umum, Wi-Fi gratis di semua kamar</td>\r\n</tr>\r\n<tr>\r\n<td>Olahraga dan Rekreasi</td>\r\n<td>klub anak, kolam (anak), lapangan tenis, taman</td>\r\n</tr>\r\n<tr>\r\n<td>Internet dalam Kamar</td>\r\n<td>Akses WiFi gratis</td>\r\n</tr>\r\n<tr>\r\n<td>Parkir</td>\r\n<td>tempat parkir mobil</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'grand.png'),
(3, 'Hotel Saptra Mandala', 895000, '<p style="text-align: justify;">Dirancang untuk wisata plesir dan bisnis, Campago Resort Hotel terletak strategis di Bukittinggi; salah satu daerah lokal terkenal. Hotel ini tidak terlalu jauh dari pusat kota, hanya dari sini dan umumnya hanya membutuhkan waktu 90 menit untuk mencapai bandara. Dengan lokasinya yang strategis, hotel ini menawarkan akses mudah ke destinasi yang wajib dilihat di kota ini.</p>\r\n<p style="text-align: justify;">Fasilitas dan pelayanan yang ditawarkan Campago Resort Hotel menjaminkan penginapan menyenangkan bagi para tamu. Ketika menginap di properti yang luar biasa ini, para tamu dapat menikmati wi-fi di tempat-tempat umum, ruang merokok , concierge, layanan laundry, tur.</p>\r\n<p style="text-align: justify;">Campago Resort Hotel memiliki 22 kamar tidur yang semuanya dirancang dengan citarasa tinggi untuk menyediakan kenyamanan seperti televisi, meja tulis, internet (wireless), AC, kulkas. Hotel ini menyediakan sejumlah fasilitas rekreasi seperti kolam (anak), taman, lapangan tenis, klub anak. Fasilitas super dan lokasi yang cemerlang menjadikan Campago Resort Hotel tempat yang sempurna untuk menikmati penginapan Anda selama di Bukittinggi.</p>\r\n<h3>Kebijakan Hotel</h3>\r\n<ul>\r\n<li>Minimum umur tamu adalah: 1 tahun</li>\r\n<li>Tamu berumur diatas 7 tahun dianggap sebagai tamu dewasa</li>\r\n<li>Ekstra bed tergantung pada kamar yang Anda pilih, silahkan cek kebijakan setiap kamar untuk detil lebih lanjut</li>\r\n</ul>\r\n<table style="margin-left: auto; margin-right: auto;">\r\n<tbody>\r\n<tr>\r\n<td>Bayi dibawah 1 tahun</td>\r\n<td>Tidak diizinkan untuk menginap</td>\r\n</tr>\r\n<tr>\r\n<td>Bayi 1 tahun</td>\r\n<td>Menginap gratis dengan menggunakan tempat tidur yang tersedia. Catatan, biaya tambahan kemungkinan dikenakan jika Anda membutuhkan ranjang bayi</td>\r\n</tr>\r\n<tr>\r\n<td>Anak-anak 2-7 tahun</td>\r\n<td>Harus menggunakan ekstra bed</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<h3>Fasilitas Hotel</h3>\r\n<table>\r\n<tbody>\r\n<tr>\r\n<td>Fasilitas</td>\r\n<td>coffee shop, concierge, fasilitas rapat,layanan kamar, layanan kamar 24 jam, layanan laundry, restoran, ruang keluarga, ruang merokok, wi-fi di tempat-tempat umum, Wi-Fi gratis di semua kamar</td>\r\n</tr>\r\n<tr>\r\n<td>Olahraga dan Rekreasi</td>\r\n<td>klub anak, kolam (anak), lapangan tenis, taman</td>\r\n</tr>\r\n<tr>\r\n<td>Internet dalam Kamar</td>\r\n<td>Akses WiFi gratis</td>\r\n</tr>\r\n<tr>\r\n<td>Parkir</td>\r\n<td>tempat parkir mobil</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'saptra.png'),
(5, 'Hotel Patria Garden', 290000, '<p style="text-align: justify;">Jika apa yang Anda cari adalah hotel yang terletak strategis di Bukittinggi, carilah Hotel Benteng. Hanya 30. Km dari sini, hotel bintang 1 ini dapat secara mudah diakses dari bandara. Dengan lokasinya yang strategis, hotel ini menawarkan akses mudah ke destinasi yang wajib dilihat di kota ini.</p>\r\n<p style="text-align: justify;">Hotel Benteng juga menawari banyak fasilitas untuk memperkaya penginapan Anda di Bukittinggi. Ketika menginap di properti yang luar biasa ini, para tamu dapat menikmati tur, wi-fi di tempat-tempat umum, layanan antar jemput, kotak penyimpanan aman, transfer bandara/hotel.</p>\r\n<p style="text-align: justify;">Para tamu dapat memilih dari 37 kamar yang semuanya dilengkapi dengan atmosfir damai dan harmonis. Lagipula, beberapa persembahan rekreasi dari hotel ini akan menjamin Anda jauh dari kebosanan selama penginapan Anda. Apapun rencana kunjungan Anda, Hotel Benteng adalah pilihan bagus untuk penginapan di Bukittinggi.</p>\r\n<h3>Kebijakan Hotel</h3>\r\n<ul>\r\n<li>Tamu berumur diatas 10 tahun dianggap sebagai tamu dewasa.</li>\r\n<li>Ekstra bed tergantung pada kamar yang Anda pilih, silahkan cek kebijakan setiap kamar untuk detil lebih lanjut.</li>\r\n</ul>\r\n<table style="margin-left: auto; margin-right: auto;">\r\n<tbody>\r\n<tr>\r\n<td>Bayi 0-1 tahun</td>\r\n<td>Menginap gratis dengan menggunakan tempat tidur yang tersedia. Catatan, biaya tambahan kemungkinan dikenakan jika Anda membutuhkan ranjang bayi</td>\r\n</tr>\r\n<tr>\r\n<td>Anak-anak 2-10 tahun</td>\r\n<td>Harus menggunakan ekstra bed</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<h3>Fasilitas Hotel</h3>\r\n<table>\r\n<tbody>\r\n<tr>\r\n<td>Fasilitas</td>\r\n<td>bar, fasilitas rapat, kotak penyimpanan aman, layanan antar jemput, layanan kamar, layanan kamar 24 jam, layanan laundry, restoran, sewa sepeda, transfer bandara/hotel, wi-fi di tempat-tempat umum, Wi-Fi gratis di semua kamar</td>\r\n</tr>\r\n<tr>\r\n<td>Internet dalam Kamar</td>\r\n<td>Akses WiFi gratis</td>\r\n</tr>\r\n<tr>\r\n<td>Parkir</td>\r\n<td>tempat parkir mobil</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'garden.png'),
(6, 'Hotel Puri Perdana', 185000, '<p style="text-align: justify;">Ketika mengunjungi Bukittinggi, Anda akan merasa berada di rumah di Hotel Mitra Arena, dimana menawarkan akomodasi yang berkualitas dengan layanan luar biasa. Dari sini, para tamu dapat menikmati akses mudah ke semua hal yang dapat ditemukan di sebuah kota yang hidup. Dengan lokasinya yang strategis, hotel ini menawarkan akses mudah ke destinasi yang wajib dilihat di kota ini.</p>\r\n<p style="text-align: justify;">Di Hotel Mitra Arena, setiap usaha dilakukan untuk membuat tamu merasa nyaman. Dan untuk hal ini, hotel menyediakan yang terbaik untuk pelayanan dan perlengkapannya. Hotel ini menawarkan sejumlah fasilitas di tempat untuk memuaskan segala jenis tamu.</p>\r\n<p style="text-align: justify;">Sebagai tambahan, semua kamar tamu memiliki sejumlah kenyamanan seperti AC, kulkas, shower, televisi, ruangan bebas rokok untuk menyenangi semakin banyak tamu. Baik Anda adalah orang yang senang fitness atau hanya ingin bersantai setelah beraktivitas sepanjang hari, Anda akan dihibur dengan fasilitas rekreasi kelas atas seperti taman. Ketika Anda mencari penginapan yang nyaman di Bukittinggi, jadikanlah Hotel Mitra Arena rumah Anda ketika Anda berlibur.</p>\r\n<h3>Kebijakan Hotel</h3>\r\n<ul>\r\n<li>Tamu berumur diatas 12 tahun dianggap sebagai tamu dewasa.</li>\r\n<li>Ekstra bed tergantung pada kamar yang Anda pilih, silahkan cek kebijakan setiap kamar untuk detil lebih lanjut.</li>\r\n</ul>\r\n<table style="margin-left: auto; margin-right: auto;">\r\n<tbody>\r\n<tr>\r\n<td>Bayi 0-2 tahun</td>\r\n<td>Menginap gratis dengan menggunakan tempat tidur yang tersedia. Catatan, biaya tambahan kemungkinan dikenakan jika Anda membutuhkan ranjang bayi</td>\r\n</tr>\r\n<tr>\r\n<td>Anak-anak 3-12 tahun</td>\r\n<td>Menginap gratis jika menggunakan ranjang yang tersedia.</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<h3>Fasilitas Hotel</h3>\r\n<table>\r\n<tbody>\r\n<tr>\r\n<td>Fasilitas</td>\r\n<td>restoran, ruang merokok</td>\r\n</tr>\r\n<tr>\r\n<td>Olahraga dan Rekreasi</td>\r\n<td>taman</td>\r\n</tr>\r\n<tr>\r\n<td>Parkir</td>\r\n<td>tempat parkir mobil</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'puri.png'),
(7, 'Hotel Saptra Mandala', 235000, '<p style="text-align: justify;">Ketika mengunjungi Bukittinggi, Anda akan merasa berada di rumah di Hotel Mitra Arena, dimana menawarkan akomodasi yang berkualitas dengan layanan luar biasa. Dari sini, para tamu dapat menikmati akses mudah ke semua hal yang dapat ditemukan di sebuah kota yang hidup. Dengan lokasinya yang strategis, hotel ini menawarkan akses mudah ke destinasi yang wajib dilihat di kota ini.</p>\r\n<p style="text-align: justify;">Di Hotel Mitra Arena, setiap usaha dilakukan untuk membuat tamu merasa nyaman. Dan untuk hal ini, hotel menyediakan yang terbaik untuk pelayanan dan perlengkapannya. Hotel ini menawarkan sejumlah fasilitas di tempat untuk memuaskan segala jenis tamu.</p>\r\n<p style="text-align: justify;">Sebagai tambahan, semua kamar tamu memiliki sejumlah kenyamanan seperti AC, kulkas, shower, televisi, ruangan bebas rokok untuk menyenangi semakin banyak tamu. Baik Anda adalah orang yang senang fitness atau hanya ingin bersantai setelah beraktivitas sepanjang hari, Anda akan dihibur dengan fasilitas rekreasi kelas atas seperti taman. Ketika Anda mencari penginapan yang nyaman di Bukittinggi, jadikanlah Hotel Mitra Arena rumah Anda ketika Anda berlibur.</p>\r\n<h3>Kebijakan Hotel</h3>\r\n<ul>\r\n<li>Tamu berumur diatas 12 tahun dianggap sebagai tamu dewasa.</li>\r\n<li>Ekstra bed tergantung pada kamar yang Anda pilih, silahkan cek kebijakan setiap kamar untuk detil lebih lanjut.</li>\r\n</ul>\r\n<table style="margin-left: auto; margin-right: auto;">\r\n<tbody>\r\n<tr>\r\n<td>Bayi 0-2 tahun</td>\r\n<td>Menginap gratis dengan menggunakan tempat tidur yang tersedia. Catatan, biaya tambahan kemungkinan dikenakan jika Anda membutuhkan ranjang bayi</td>\r\n</tr>\r\n<tr>\r\n<td>Anak-anak 3-12 tahun</td>\r\n<td>Menginap gratis jika menggunakan ranjang yang tersedia.</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<h3>Fasilitas Hotel</h3>\r\n<table>\r\n<tbody>\r\n<tr>\r\n<td>Fasilitas</td>\r\n<td>restoran, ruang merokok</td>\r\n</tr>\r\n<tr>\r\n<td>Olahraga dan Rekreasi</td>\r\n<td>taman</td>\r\n</tr>\r\n<tr>\r\n<td>Parkir</td>\r\n<td>tempat parkir mobil</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'saptra.png'),
(8, 'Rumah Sendiri', 250000, '<p>Sangant nyaman sekali</p>', '20150101_093040A.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_paket`
--

CREATE TABLE IF NOT EXISTS `tbl_paket` (
`id_paket` int(11) NOT NULL,
  `nama_paket` varchar(50) NOT NULL,
  `harga_paket` int(11) NOT NULL,
  `ket_paket` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_paket`
--

INSERT INTO `tbl_paket` (`id_paket`, `nama_paket`, `harga_paket`, `ket_paket`) VALUES
(1, 'Paket Hemat', 250000, '<p><span style="color: #ffcc00;">Makam Bung Karno+Sumber Udel+Kampung Coklat</span></p>'),
(2, 'Paket Super', 350000, '<p><span style="color: #ffcc00;">Makam Bung Karno+Sumber Udel+Kampung Coklat+Pantai Pudak</span></p>'),
(5, 'Paket Super Lengkap', 450000, '<p><span style="color: #ffcc00;">Makam Bung Karno+Sumber Udel+Kampung Coklat+Pantai Pudak+Air Terjun Goa Luweng</span></p>'),
(6, 'Promo Tahun Baru', 215000, '<p><span style="color: #ffcc00;">Makam Bung Karno+Green Park+Taman Sentul</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pesan`
--

CREATE TABLE IF NOT EXISTS `tbl_pesan` (
`id_pesan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `id_hotel` int(11) NOT NULL,
  `id_daerah` int(11) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `tgl_tour` date NOT NULL,
  `status` char(2) NOT NULL DEFAULT 'S1'
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_pesan`
--

INSERT INTO `tbl_pesan` (`id_pesan`, `id_user`, `id_paket`, `id_hotel`, `id_daerah`, `tgl_pesan`, `tgl_tour`, `status`) VALUES
(2, 14, 1, 3, 2, '2016-12-07', '2016-12-22', 'S1'),
(23, 22, 1, 2, 1, '2016-12-31', '2016-12-30', 'S1'),
(24, 22, 1, 2, 2, '2017-01-01', '2017-02-01', 'S2'),
(25, 22, 1, 6, 3, '2017-01-01', '2017-02-01', 'S1'),
(27, 22, 2, 1, 3, '2017-01-01', '2017-01-31', 'S1'),
(28, 13, 2, 2, 2, '2017-01-01', '2017-01-31', 'S1'),
(29, 13, 1, 2, 4, '2017-01-01', '2017-01-30', 'S1'),
(32, 23, 2, 6, 4, '2017-01-01', '2017-01-20', 'S2'),
(35, 13, 2, 5, 1, '2017-01-05', '2017-01-09', 'S1'),
(36, 26, 5, 3, 2, '2017-01-05', '2017-01-11', 'S2'),
(37, 27, 2, 2, 1, '2017-01-10', '2017-01-27', 'S1'),
(38, 22, 2, 1, 1, '2018-01-04', '2018-01-24', 'S2'),
(39, 22, 1, 1, 1, '2018-01-10', '2018-01-31', 'S1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_provinsi`
--

CREATE TABLE IF NOT EXISTS `tbl_provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `nama_provinsi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_provinsi`
--

INSERT INTO `tbl_provinsi` (`id_provinsi`, `nama_provinsi`) VALUES
(1, 'Jawa Timur'),
(2, 'Jawa tengah'),
(3, 'Jawa Barat'),
(4, 'Jakarta'),
(5, 'Yogyagarta'),
(6, 'Banten');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
`id_user` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `no_rek` varchar(50) NOT NULL,
  `nama_rek` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(12) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jekel` varchar(1) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `foto`, `nama_user`, `email_user`, `no_hp`, `no_rek`, `nama_rek`, `username`, `password`, `tgl_lahir`, `jekel`, `alamat`) VALUES
(13, '12765752_956409104429484_1143384278_o.jpg', 'satria s', 'satryasetya@gmail.com', '0857903849', '234234', 'satria', 'satria', '12345', '2000-12-04', 'L', 'jalan trowulan bendogerit blitar bfd'),
(14, '12787165_956409067762821_230243529_o.jpg', 'huda', 'huda@gmail.com', '0987234234', '1232555555', 'huda', 'aduh', '12345', '2012-02-01', 'P', '    sananwetan'),
(22, 'IMG_20160426_021428.jpg', 'riris', 'rindris@gmail.com', '0857901234', '77412548', 'riris', 'riris', 'riris', '2017-01-05', 'P', 'Sentul Kota bLitar'),
(23, 'IMG_20160426_035246.jpg', 'rani', 'rani@gmail.com', '085790365889', '8899987', 'rani', 'rani', 'rani', '2016-12-14', 'P', 'jalan wates blitar'),
(26, '0d5e159404933b4185268a4d13c574ee.jpg', 'Elsa', 'elsa@gmail.com', '08579012345', '7741254852', 'Elsa', 'elsa', 'elsa', '2000-12-08', 'P', 'Gunung Frozen'),
(27, 'ungu.jpg', 'ungu', 'lelela@gmail.com', '087654321', '03-01644944', 'lele', 'lellebv', 'fortravel', '2016-12-30', 'P', 'qwertyuiop');

-- --------------------------------------------------------

--
-- Table structure for table `tempat`
--

CREATE TABLE IF NOT EXISTS `tempat` (
`id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `konten` varchar(500) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempat`
--

INSERT INTO `tempat` (`id`, `nama`, `konten`, `gambar`) VALUES
(2, 'Pantai Serang', '<p>Pantai yang berlokasi di selatan kota Blitar ini merupakan pantai yang waasdsadsad</p>', '3d-beach-cool-hd-wallpapers-background.jpg'),
(6, 'Aloon Aloon Blitar', '<p><strong>Alun-alun Blitar terletak di antara kantor pemerintahan dan masjid agung. Kantor Walikota Blitar di sebelah selatan,</strong> sedangkan Masjid Agung Blitar di sebelah utara. Pada Alun-alun Kota Blitar vegetasi yang ada ialah pohon palem, tanaman perdu, dan rumput. Ciri khusus yang dimiliki oleh alun-alun salah satunya ialah adanya pohon beringin. Untuk mempertahankan kesan kesejarahan yang dimiliki alun-alun, bentuk bangunan yang ada di dalam tetap dipertahankan.</p>', 'alon-alon.png'),
(7, 'Waterpark Sumber Udel', 'Water Park Sumber Udel adalah salah satu tempat wisata di Blitar lainnya yang ramai dikunjungi orang. Arena bermain disini ada banyak meliputi kolam arus, kolam olimpiade berkelas nasional, gentong raksasa dll. Banyak pelancong dari Tulungagung dan bahkan dari Kediri datang bermain ke taman air di Blitar ini. ', 'sumberudel.png'),
(8, 'Taman Kebon Rojo', 'Kebon Rojo, yang memiliki nama resmi Taman Wisata Kebonrejo, Ini adalah tempat wisata di Blitar yang selalu ramai dikunjungi orang, terlebih di saat akhir pekan. Pada hari-hari tertentu, Taman Wisata Kebonrojo juga dijadikan sebagai tempat acara anak-anak, di antaranya lomba melukis anak, hiburan anak-anak, dan lainnya. Bersantai dan bermain adalah pilihan kegiatan yang paling menarik di tempat ini. Menyantap jajanan dan aneka makanan yang dijual di areal Kebon Rojo adalah pilihan lain yang tak ', 'kebonrojo.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_bukti`
--
ALTER TABLE `tbl_bukti`
 ADD PRIMARY KEY (`id_bukti`), ADD KEY `id_pesan` (`id_pesan`);

--
-- Indexes for table `tbl_daerah`
--
ALTER TABLE `tbl_daerah`
 ADD PRIMARY KEY (`id_daerah`), ADD KEY `id_provinsi` (`id_provinsi`);

--
-- Indexes for table `tbl_hotel`
--
ALTER TABLE `tbl_hotel`
 ADD PRIMARY KEY (`id_hotel`);

--
-- Indexes for table `tbl_paket`
--
ALTER TABLE `tbl_paket`
 ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
 ADD PRIMARY KEY (`id_pesan`), ADD KEY `id_user` (`id_user`), ADD KEY `id_paket` (`id_paket`), ADD KEY `id_hotel` (`id_hotel`), ADD KEY `id_paket_2` (`id_paket`), ADD KEY `id_paket_3` (`id_paket`), ADD KEY `id_daerah` (`id_daerah`);

--
-- Indexes for table `tbl_provinsi`
--
ALTER TABLE `tbl_provinsi`
 ADD PRIMARY KEY (`id_provinsi`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
 ADD PRIMARY KEY (`id_user`), ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tempat`
--
ALTER TABLE `tempat`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_bukti`
--
ALTER TABLE `tbl_bukti`
MODIFY `id_bukti` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tbl_hotel`
--
ALTER TABLE `tbl_hotel`
MODIFY `id_hotel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_paket`
--
ALTER TABLE `tbl_paket`
MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `tempat`
--
ALTER TABLE `tempat`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_bukti`
--
ALTER TABLE `tbl_bukti`
ADD CONSTRAINT `tbl_bukti_ibfk_1` FOREIGN KEY (`id_pesan`) REFERENCES `tbl_pesan` (`id_pesan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_daerah`
--
ALTER TABLE `tbl_daerah`
ADD CONSTRAINT `tbl_daerah_ibfk_1` FOREIGN KEY (`id_provinsi`) REFERENCES `tbl_provinsi` (`id_provinsi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
ADD CONSTRAINT `tbl_pesan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tbl_pesan_ibfk_2` FOREIGN KEY (`id_paket`) REFERENCES `tbl_paket` (`id_paket`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tbl_pesan_ibfk_3` FOREIGN KEY (`id_hotel`) REFERENCES `tbl_hotel` (`id_hotel`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tbl_pesan_ibfk_4` FOREIGN KEY (`id_daerah`) REFERENCES `tbl_daerah` (`id_daerah`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
