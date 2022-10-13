-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<< HEAD
-- Generation Time: Oct 13, 2022 at 06:13 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29
=======
-- Waktu pembuatan: 10 Okt 2022 pada 04.26
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.3.29
>>>>>>> 2342c370a6f6c061f44f8cae2a5bb262a9a9ec1d

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
<<<<<<< HEAD
('article_20220930798', 'qmak', 'BUKAN RONALDO INILAH DAFTAR pp', 1665133393, '<p>.</p>\r\n\r\n<p>Aenean porttitor tincidunt augue nec sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque non pellentesque diam. Nunc facilisis condimentum diam, a condimentum nisi facilisis sit amet. Donec elit risus, cursus id felis tristique, ultrices dapibus massa. In nulla nunc, mollis quis arcu accumsan, placerat pretium massa. Donec non arcu vulputate, varius orci ut, elementum sem.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p dir=\"auto\">&nbsp;</p>\r\n\r\n<p dir=\"auto\">&nbsp;</p>\r\n', 'logo-pt-inti.jpg', 'artikel', 0),
('article_20220984264', 'qmak', 'Cara Kebal Bor Kepala', 1665043789, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent arcu orci, tristique ac tellus eget, mollis sollicitudin tellus. Maecenas maximus magna eu nulla finibus, eget blandit ligula dapibus. Nullam iaculis eros malesuada, rutrum mi quis, commodo nisl. Vivamus tempus est id ligula laoreet, a porttitor magna suscipit. Phasellus placerat bibendum nulla, at rutrum tortor faucibus ut. Mauris auctor dictum volutpat. Donec eget ultrices dolor. Sed id erat eget tellus ultricies varius. Proin ac dolor a odio finibus aliquam. Aliquam sagittis feugiat tellus, at pulvinar elit laoreet eu. Quisque orci lacus, aliquam at sagittis sit amet, iaculis eu ligula.</p>\r\n\r\n<p>Curabitur enim leo, aliquet nec consequat non, aliquam quis est. Nulla at nibh urna. Aenean dictum purus velit, a euismod ipsum sodales eu. In dolor urna, pulvinar sit amet accumsan non, volutpat in turpis. Integer nulla augue, laoreet viverra sollicitudin sed, consectetur id sapien. Curabitur sodales sem ac dui euismod tempor. Aliquam erat volutpat.</p>\r\n\r\n<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer suscipit turpis a turpis luctus eleifend. Integer tempus, est quis consectetur ultrices, tellus quam consequat est, vitae commodo metus purus id leo. Donec in magna ac sapien fermentum dapibus. Fusce semper sed arcu in accumsan. Maecenas vel mollis purus. Nam vel sapien non felis vestibulum aliquam sed ac nisi. Nam vulputate nec sapien sit amet posuere.</p>\r\n\r\n<p>Quisque interdum ligula maximus, egestas purus ut, tempor lorem. Nam sit amet auctor lacus. Duis tincidunt, felis quis gravida pharetra, arcu leo malesuada nulla, vel ultrices tellus elit et ex. Donec quis lacus at augue varius bibendum at vel velit. Nulla nec volutpat massa, non vulputate purus. Integer scelerisque fringilla lorem eget rhoncus. Proin consectetur sit amet diam vel laoreet. Pellentesque faucibus libero a hendrerit dictum. Morbi mollis ante vitae massa auctor vehicula. Proin volutpat, mi ut iaculis sollicitudin, nulla elit placerat metus, eu venenatis mauris est vitae ligula. In ultricies, orci id molestie feugiat, libero nisi porttitor ligula, vitae scelerisque leo ante sed nibh. Cras sit amet lectus sapien. Integer auctor pellentesque leo, ac pulvinar nulla aliquet tempor. Sed nec vehicula massa. Praesent sodales dolor eget orci consectetur commodo.</p>\r\n\r\n<p>Nam felis lacus, blandit imperdiet lorem sit amet, dignissim fringilla sem. Proin sit amet facilisis nibh. Fusce eu justo vehicula, rutrum felis non, mattis libero. Donec tempor venenatis felis, sit amet interdum lectus. Nunc semper diam a magna fringilla rhoncus. Sed sit amet condimentum velit, hendrerit maximus ex. Phasellus dictum luctus libero, vel efficitur purus iaculis feugiat. Etiam ultrices eros ac vestibulum laoreet. Curabitur accumsan diam eget pretium placerat. Aliquam in magna pharetra nibh pellentesque sagittis. In molestie justo in magna ornare sagittis. Vivamus ut est neque. Proin pellentesque eros quis metus porttitor dapibus. Nulla facilisi. Nullam vulputate laoreet sollicitudin.</p>\r\n\r\n<p>Etiam eget facilisis felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi diam, suscipit eget sem id, malesuada eleifend purus. Etiam sagittis nisl at massa luctus malesuada. Quisque eu turpis dapibus sapien bibendum viverra et id sapien. Nam euismod tincidunt lectus, id auctor tortor convallis ut. Mauris imperdiet felis erat, et porta leo lobortis eget. Suspendisse quis magna tristique, scelerisque velit eu, egestas lectus. In hac habitasse platea dictumst.</p>\r\n\r\n<p>Nam vel magna vitae eros aliquet rhoncus ut ac mi. Duis fringilla varius massa vitae condimentum. Praesent porttitor maximus tellus non tincidunt. Cras elementum mi augue, ut suscipit nisi aliquet non. Aliquam tincidunt eros vel ipsum malesuada, nec rhoncus justo scelerisque. Nulla vulputate tincidunt orci, vitae suscipit neque luctus ac. Fusce auctor nibh mauris. Morbi sollicitudin libero nec sapien semper, sed euismod ante imperdiet. Nulla nibh purus, accumsan ut feugiat quis, iaculis quis quam. Pellentesque rutrum sem sit amet diam tempus mollis. Duis ut augue urna. Nunc at diam et lacus suscipit maximus non sed sem. Nunc id ante varius, vestibulum turpis ac, fermentum metus.</p>\r\n\r\n<p>Pellentesque feugiat hendrerit maximus. Vestibulum sem ipsum, suscipit mollis fringilla tincidunt, posuere non ipsum. Pellentesque at nisi ac nulla faucibus viverra sed eget augue. Donec in eros vel turpis maximus molestie ac at metus. Maecenas mattis nisi eu dapibus tempus. Etiam a faucibus lorem. Aliquam sed nunc auctor, semper nisl nec, gravida lacus. Sed dignissim id ipsum sit amet cursus. Curabitur iaculis consectetur nunc. In tempor pretium sapien, nec aliquet diam efficitur vel. Vivamus et ante sagittis, ullamcorper dui vel, commodo nisl. Nulla magna sem, fermentum vel feugiat a, tincidunt sed magna. Vestibulum dignissim ullamcorper fringilla. Pellentesque aliquet posuere diam, a aliquam eros tempus vel.</p>\r\n\r\n<p>Sed lobortis, erat at posuere sollicitudin, nisl sapien condimentum nibh, nec malesuada metus tortor vestibulum felis. Mauris ac urna eget quam aliquam tincidunt. Cras nec dolor imperdiet, mattis tortor a, bibendum libero. Morbi tristique odio non libero iaculis luctus. Nullam at pharetra tellus. Fusce placerat malesuada ligula ut convallis. Maecenas porta velit sit amet rutrum imperdiet. Aliquam pharetra risus id ex facilisis, eu aliquet nunc dapibus. Ut euismod turpis mollis massa dignissim, nec rhoncus urna ornare. Donec faucibus non odio nec condimentum. Nulla facilisi. Donec tempor dapibus nisl sed volutpat. Aliquam erat volutpat.</p>\r\n\r\n<p style=\"text-align:justify\">Pellentesque faucibus pulvinar velit eu pellentesque. Duis eleifend lacus non facilisis ullamcorper. Duis ligula diam, euismod in dictum vel, accumsan at nulla. Sed a nibh dapibus, eleifend libero nec, accumsan urna. Suspendisse sit amet ligula porttitor, blandit est at, finibus felis. Mauris feugiat pretium accumsan. Fusce vel nisl sed ante dictum facilisis id a sem.</p>\r\n', '5(1).png', 'pengumuman', 0),
('article_20221011933', 'bagas', 'Cara Menggandakan Uang', 1664785082, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque hendrerit faucibus rhoncus. Praesent nibh quam, scelerisque ac libero eu, porttitor convallis tellus. Nam scelerisque pretium lacus a vehicula. Nunc aliquet, sapien ut condimentum imperdiet, elit metus placerat sapien, at aliquam urna quam cursus ligula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed semper sed risus nec pretium. Donec vitae convallis quam.</p>\r\n\r\n<p>Pellentesque sit amet convallis lectus, eget faucibus mauris. Duis quis ante purus. Mauris in augue et tortor pretium ultrices et non nisi. Mauris lacinia metus libero, ac facilisis nibh sagittis tempor. Maecenas posuere eget mi eu volutpat. Nam vitae maximus tortor. Pellentesque sodales sodales lorem, et ultrices sapien eleifend eu. Cras efficitur mauris sed mi accumsan, eget pharetra ex dapibus. Morbi tincidunt est et ullamcorper iaculis. Aliquam erat volutpat. Nulla sit amet elit erat. Vivamus sit amet accumsan sapien. Mauris pellentesque volutpat sem, ut pellentesque diam hendrerit scelerisque. In id magna pellentesque velit tempus euismod. Duis eu tellus velit.</p>\r\n\r\n<p>Nam sit amet nibh vel dui porta varius eget egestas erat. Donec facilisis erat metus, ac placerat lectus vulputate et. Sed feugiat metus risus, ac lobortis elit bibendum eget. Maecenas sollicitudin quis enim in efficitur. Pellentesque fringilla euismod enim, et aliquam elit commodo eget. Phasellus vitae orci ultrices, tristique orci ac, commodo lorem. Morbi laoreet tincidunt orci id tincidunt.</p>\r\n\r\n<p>Aliquam eget felis gravida, feugiat neque vel, malesuada nibh. Nulla eu tortor et augue iaculis bibendum quis pretium ligula. Sed vitae elit libero. Vivamus blandit faucibus tortor, dignissim ornare ante feugiat ac. Nulla maximus lorem rhoncus lectus vehicula, et commodo lorem dapibus. Donec odio odio, vulputate porttitor nunc quis, efficitur volutpat sem. Nullam in nisl at nunc ullamcorper volutpat. Aenean porta nibh eget diam auctor ultrices. Vestibulum congue euismod dictum. Nulla facilisi. Nullam imperdiet ornare ligula et sagittis. In eget mauris at metus convallis aliquet. Phasellus euismod velit tellus, sed rhoncus lorem luctus eu.</p>\r\n\r\n<p>Ut vitae luctus libero, in semper erat. Ut fringilla risus id elit rutrum mattis. Donec varius orci dolor, sed tincidunt arcu faucibus at. Donec vel dapibus mauris. Donec porta vitae lacus sed luctus. Suspendisse id congue nibh, non viverra nibh. Vivamus porta mauris sit amet tincidunt facilisis. Vivamus malesuada rhoncus dolor, et pellentesque risus facilisis imperdiet. Phasellus at placerat turpis. Morbi tristique lorem non luctus sollicitudin. Suspendisse a purus aliquet, porttitor lacus sit amet, volutpat libero. Fusce at nisi in diam scelerisque tristique quis eu quam. Vestibulum eget libero ut nulla fermentum faucibus. Donec varius lobortis consectetur. Fusce pharetra nisi urna, eget eleifend odio porttitor quis. Fusce blandit, eros sed tincidunt ultrices, justo nisl facilisis ipsum, et vehicula risus orci et dolor.</p>\r\n', 'mailchimp-lsdA8QpWN_A-unsplash.jpg', 'artikel', 1),
('article_20221013600', 'qmak', 'Cara Mengerti Wanita', 1665134193, '<p>Nothing</p>\r\n', 'mailchimp-lsdA8QpWN_A-unsplash.jpg', 'berita', 1),
('article_20221089948', 'qmak', 'awawawawaw', 1665134076, '<p>waaa</p>\r\n', 'giordano-rossoni-sx1f8vqTsu8-unsplash.jpg', 'berita', 1),
('article_20221096725', 'qmak', 'test pdf', 1665217345, '<p>kkkkkk</p>\r\n', 'LAPORAN_PKL_KARIN_ALFADITA_(8105145060)_AP-B14.pdf', 'pengumuman', 1);
=======
('article_20221017765', 'Reza', 'jnjknkjn', 1664868471, '<p>jkhkjhkjkj</p>\r\n', 'Capture.PNG', 'berita', 1);
>>>>>>> 2342c370a6f6c061f44f8cae2a5bb262a9a9ec1d

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

<<<<<<< HEAD
INSERT INTO `user` (`id_user`, `name`, `username`, `password`, `avatar`, `role`) VALUES
(12, 'bagas', 'bagas', '$2y$10$CrLziiF2CoaMRWBSUxB7fulhDUdiwBWGFIgnZlLSRZBqd/xD6e2fO', 'default.jpg', 1),
(421, 'qmak', 'qmak', '$2y$10$CrLziiF2CoaMRWBSUxB7fulhDUdiwBWGFIgnZlLSRZBqd/xD6e2fO', '', 1);
=======
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
>>>>>>> 2342c370a6f6c061f44f8cae2a5bb262a9a9ec1d

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id_video` varchar(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` mediumtext NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id_video`, `title`, `url`, `date_created`) VALUES
('video20221011638', 'Man City', 'https://youtu.be/SFJg7-1uWCY', 1665458491),
('video20221030508', 'Eggvos', 'https://youtu.be/535TvREn350', 1665461990),
('video20221052794', 'Cobaa Aja dulu', 'https://youtu.be/c_Tv_VukoB0', 0);

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
<<<<<<< HEAD
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);
=======
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
>>>>>>> 2342c370a6f6c061f44f8cae2a5bb262a9a9ec1d
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
