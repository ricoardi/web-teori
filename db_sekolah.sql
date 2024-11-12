-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 12, 2024 at 07:22 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `id_dosen` int(10) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `homebase` varchar(50) NOT NULL,
  `bidang_ilmu` varchar(50) NOT NULL,
  `foto_dosen` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_dosen`
--

INSERT INTO `tb_dosen` (`id_dosen`, `nama_dosen`, `homebase`, `bidang_ilmu`, `foto_dosen`, `alamat`) VALUES
(1, 'Dr. RISHI SUPARIANTO, S.H., M.H', 'Fakultas Ilmu Komputer', 'Hukum', '1.jpg', 'prabumulih'),
(2, 'Dr. Yuniar Pratiwi, S.Si., M.Si.', 'Fakultas Teknik', 'Teknik Lingkungan', '2.jpg', 'prabumulih2'),
(3, 'Suhartini, S.Kom, M.Kom', 'Fakultas Ilmu Komputer', 'Komputer', '3.png', 'prabumulih 3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mapel`
--

CREATE TABLE `tb_mapel` (
  `id_mapel` int(10) NOT NULL,
  `nama_mapel` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `jumlah_jam` int(2) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `cover_buku` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mapel`
--

INSERT INTO `tb_mapel` (`id_mapel`, `nama_mapel`, `deskripsi`, `jumlah_jam`, `kelas`, `cover_buku`, `keterangan`) VALUES
(1, 'Bahasa Indonesia', 'Bahasa Indonesia adalah mata kuliah dasar yang dapat memberikan pengetahuan dalam berbahasa setiap hari, dengan menggunakan kata-kata baku dalam bahasa indonesia dengan benar.', 4, '1', 'cover1.jpg', 'Mata Pelajaran bahasa Indonesia selama 2 Mata Pelajaran'),
(2, 'Bahasa Inggris', 'Mata pelajaran Bahasa Inggris merupakan salah satu mata pelajaran yang diajarkan guna meningkatkan keterampilan anak didik untuk berbahasa. Inti dasar penguasaan bahasa adalah sebagai suatu alat untuk berkomunikasi.', 3, '2', 'cover2.jpg', 'Mata Pelajaran bahasa inggris memiliki 3 mata pelajaran'),
(3, 'Matematika', 'Mata pelajaran matematika adalah ilmu yang mempelajari tentang besaran, struktur, bangun ruang, dan perubahan-perubahan yang terjadi pada suatu bilangan. Matematika merupakan ilmu pasti yang menjadi dasar dari ilmu-ilmu lain.', 4, '3', 'cover3.jpg', 'mata pelajaran matematika berjumlah 2 mata pelajaran'),
(4, 'Pendidikan Agama Islam', 'Pendidikan Agama Islam (PAI) adalah mata pelajaran yang bertujuan untuk mengajarkan, membimbing, dan mendidik peserta didik agar dapat memahami, menghayati, dan mengamalkan ajaran Islam. Materi-materi yang disampaikan dalam PAI meliputi: Al-Qur\'an-hadis, Akidah-akhlak, Fikih, Sejarah kebudayaan Islam, Bahasa Arab.', 2, '3', 'cover4.jpg', 'mata pelajaran pendidikan agama berjumlah 2 mata pelajaran'),
(5, 'Pendidikan Pancasila', 'Pendidikan Pancasila adalah mata pelajaran yang mempelajari tentang Pancasila sebagai ideologi, dasar negara, dan pandangan hidup bangsa Indonesia. Mata pelajaran ini bertujuan untuk mengembangkan kepribadian, sikap, dan kemampuan warga negara.', 2, '4', 'cover5.jpg', 'mata pelajaran pendidikan pancasila berjumlah 2 mata pelajaran'),
(8, 'Matematika', 'Buku Ini adalah buku ajar matematika', 2, '2', 'cover.jpg', 'hhhh'),
(11, 'Bahasa Indonesia', 'Buku Ini adalah buku ajar', 1, '3', 'cover.jpg', 'buku bahasa indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(10) UNSIGNED NOT NULL,
  `nisn` varchar(15) DEFAULT NULL,
  `nama_siswa` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(25) DEFAULT NULL,
  `foto_siswa` varchar(50) DEFAULT NULL,
  `alamat` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nisn`, `nama_siswa`, `jenis_kelamin`, `foto_siswa`, `alamat`) VALUES
(1, '212233', 'Ahmad Yasir', 'Laki-laki', 'img3.jpg', 'Palembang Kota'),
(2, '212329', 'Khanawati Suryani', 'Perempuan', 'khana wijaya.jpg', 'Muara Kuang'),
(3, '9827190', 'Fajriah, M.Kom', 'Perempuan', 'fajriyah.jpg', 'Karang Raja'),
(4, '979798', 'Abdul Hamid', 'Laki-laki', 'Jepri.jpeg', 'Surabaya'),
(5, '1122', 'Superman', 'Laki-laki', '1122.jpg', 'India'),
(7, '987978', 'Ambarwati', 'Laki-laki', '987978.png', 'Prabu');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  MODIFY `id_dosen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  MODIFY `id_mapel` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
