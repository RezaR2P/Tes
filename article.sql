-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Okt 2022 pada 04.26
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `article`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_article`
--

CREATE TABLE `db_article` (
  `id_article` varchar(20) NOT NULL,
  `username` varchar(128) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` int(11) NOT NULL,
  `content` mediumtext NOT NULL,
  `coverImage` varchar(255) NOT NULL,
  `category` varchar(128) NOT NULL,
  `comments` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `db_article`
--

INSERT INTO `db_article` (`id_article`, `username`, `title`, `date`, `content`, `coverImage`, `category`, `comments`) VALUES
('article_20221017765', 'Reza', 'jnjknkjn', 1664868471, '<p>jkhkjhkjkj</p>\r\n', 'Capture.PNG', 'berita', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kliping_gambar`
--

CREATE TABLE `kliping_gambar` (
  `id_gambar` varchar(20) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `ukuran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` varchar(20) NOT NULL,
  `name` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `name`, `username`, `email`, `password`, `avatar`, `role`) VALUES
('user_20221012390', 'riki', 'riki', 'riki@gmail.com', '$2y$10$2BvlbCLSqMG8dYj1mh3cGO0pK8sPuBy0BXAJ354q0h4FYZDi7YiAu', 'default.jpg', 2),
('user_20221054686', 'Asep', 'asepdsds', 'akunbott0p@gmail.com', '$2y$10$3fD/26rVZXB/tREg9CT52eqrUIRKwJ134VS9sOoEYks9zwQcmtnum', 'default.jpg', 2),
('user_20221073642', 'Reza', 'Reza', 'rmdanp@gmail.com', '', 'default.jpg', 2),
('user_20221084855', 'Bagas', 'Bagasadsdsa', 'bagasqmak@gmail.com', '$2y$10$iAvplw9oxeZUvP6bQueSBeTAER5ybENtS.4ApY/f.BRV5mNDj0WSa', 'default.jpg', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(1, 'rezaramdanp@gmail.com', 'FswcMAVPI6rTkSDazYSg7XZMZ8GAfimey05NyqKdwdQ=', 1664868736),
(2, 'rezaramdanp@gmail.com', '2AGudowrd1JOQQAESXa5vhvbeWb5Y3FtXLEI5ud0bJ4=', 1664868751),
(3, 'rezaramdanp@gmail.com', 'wnZiGujchJZMmKyweytzW+8qESzGwfKRua0hjdxu2jw=', 1664870161),
(4, 'rezaramdanp@gmail.com', 'LppdWeKXTDCoM7afbp7CurTkiGyAJQ48iHYXF1G9w+Q=', 1664870570),
(5, 'rezaramdanp@gmail.com', 'Uipg0XjtIc/CzDaht7TpXJ1SJi92JpX/xLR0YJY4FxU=', 1664870576),
(6, 'rezaramdanp@gmail.com', 'CK/m31gypi5h1I7vx74S22HUvV7zSjh678RgoBsCwbg=', 1664870947),
(7, 'rezaramdanp@gmail.com', 'pJGUb8wC5/FbLASuAJaK99WD3icBi4Tt0WIHZ01dOMQ=', 1664871065),
(8, 'rezaramdanp@gmail.com', 'oeL2yuzOThxLSys2OymhsbzDamTS6hxcw0us/d3eZRM=', 1664871361),
(9, 'rezaramdanp@gmail.com', 'LXlGxypSoUxNEb+dHE3pC0q5vUtM4CFFa1OmKgN8zig=', 1664871721),
(10, 'rezaramdanp@gmail.com', 'aJvo+FEuJ1xg06TVPCD5BChyfK4n/u9ltEzzP8noCWw=', 1664871764),
(11, 'rezaramdanp@gmail.com', 'XdvVtzUFNAS9/lGT8n+m2ykJHpYIkIBfYeNo0aSb5o0=', 1664871947),
(12, 'rezaramdanp@gmail.com', 'B2pTbGHdBgLTnFLPQ3ACnin3XX5q6myYUND3uzBeD2w=', 1664871992),
(13, 'rezaramdanp@gmail.com', '+epZAAjfifujUEliPkuIkheJjpxSu7F+zzpq/VmKfHE=', 1664901439),
(14, 'rezaramdanp@gmail.com', 'D2Nt7jntW2v0Ye9doewcj9JadphnF38AZfuUXg1S+V8=', 1664901614),
(15, 'rezaramdanp@gmail.com', 'YwdY5RSFHydo6egQCkUwBP1TGozVXyBGJNwu1HOud8A=', 1664901640),
(16, 'rezaramdanp@gmail.com', '3Jz/qMaJj7na1oMvFmX52XvmINrUpcckWUe1+BotmVM=', 1664901835),
(17, 'rezaramdanp@gmail.com', 'XK+i2z1IEA7Y0QjjD6+oXnCgFcnLx1p+O4XEmgvqU98=', 1664901862),
(18, 'rezaramdanp@gmail.com', '7NZUrWn1e70Szbnr7ZpYqRAAzntbHYspD+W5XbmKWuM=', 1664902424),
(19, 'rezaramdanp@gmail.com', '90bXzQYwwZk0D7ZkchlAsja2viU/E8w+GvP/pcq2x6A=', 1664902494),
(20, 'rezaramdanp@gmail.com', 'bRKpkuw3/7D51JFeeFoBT8jkKqsgsyDg++NhHGmJqqo=', 1664902593),
(21, 'rezaramdanp@gmail.com', 'O/MlCkP/9UIkgljOyDEg5d9XT2fuIlKWS9tOEeI707Y=', 1664903327),
(22, 'rezaramdanp@gmail.com', 'SyHtX4wkiDw6w/5ePwfRXqoowIwuSpnWWf4gLN9hIsM=', 1664903709),
(23, 'bagasqmak@gmail.com', 'Y/U9ktbTpTFJD+1eD5oDxiEPTf/wAjx1B89HQCPRiG8=', 1664953162),
(24, 'bagasqmak@gmail.com', 'drNlKRldqX+Ep7T7NJMrytwD7nLsSi3LDVug9wgauso=', 1664953197),
(25, 'rezaramdanp@gmail.com', 'CtUo9ysfFG50BSHog9tQAeRxFaq8C5kOCk/UjSjwGI8=', 1664953531),
(26, 'akunbott0p@gmail.com', 'QLsZeR5JsSZC9Aq5f9WuBDJyjT4NYZ8ZieCFdoDXhM0=', 1664953648),
(27, 'bagasqmak@gmail.com', 'PEP9ng7EV74h21YzOKSk9D8ghKOmuBI8OLj6YLJFUrs=', 1664954070),
(28, 'rezaramdanp@gmail.com', 'XwZT6x6FhgjlrI5jWApo0qVCZ301ONS4Qgd4jaBDb5w=', 1664956662),
(29, 'rezaramdanp@gmail.com', 'Um+JtykYOrGtzLasbQYaey/3nXl9++ejv4OFo9AmffM=', 1664956696),
(30, 'rezaramdanp@gmail.com', 'CIQkFex57o3Avkt+oi+kmk05cpn5vj2RfXNpWfC1M68=', 1665038412),
(31, 'rezaramdanp@gmail.com', 'qxS08NMgdq8rxs8NdiX87uBrN9eiJC7HQvWVvJWhmyQ=', 1665038460);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `db_article`
--
ALTER TABLE `db_article`
  ADD PRIMARY KEY (`id_article`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
