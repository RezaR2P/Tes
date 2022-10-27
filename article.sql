-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2022 at 05:16 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

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
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id_comment` varchar(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `comment` mediumtext NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id_comment`, `username`, `avatar`, `comment`, `date_created`) VALUES
('comment_20221037494', 'qmak', 'default.jpg', 'Jawa', 1666580249),
('comment_20221044533', 'qmak', 'default.jpg', 'Yatim', 1666579781),
('comment_20221061081', 'qmak', 'default.jpg', 'Negro', 1666580479),
('comment_20221075695', 'qmak', 'default.jpg', 'Jawa Yatim', 1666580762);

-- --------------------------------------------------------

--
-- Table structure for table `db_article`
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
-- Dumping data for table `db_article`
--

INSERT INTO `db_article` (`id_article`, `username`, `title`, `date`, `content`, `coverImage`, `category`, `comments`) VALUES
('article_20220930798', 'qmak', 'BUKAN RONALDO INILAH DAFTAR pp', 1665133393, '<p>.</p>\r\n\r\n<p>Aenean porttitor tincidunt augue nec sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque non pellentesque diam. Nunc facilisis condimentum diam, a condimentum nisi facilisis sit amet. Donec elit risus, cursus id felis tristique, ultrices dapibus massa. In nulla nunc, mollis quis arcu accumsan, placerat pretium massa. Donec non arcu vulputate, varius orci ut, elementum sem.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p dir=\"auto\">&nbsp;</p>\r\n\r\n<p dir=\"auto\">&nbsp;</p>\r\n', 'logo-pt-inti.jpg', 'artikel', 0),
('article_20220984264', 'qmak', 'Cara Kebal Bor Kepala', 1665043789, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent arcu orci, tristique ac tellus eget, mollis sollicitudin tellus. Maecenas maximus magna eu nulla finibus, eget blandit ligula dapibus. Nullam iaculis eros malesuada, rutrum mi quis, commodo nisl. Vivamus tempus est id ligula laoreet, a porttitor magna suscipit. Phasellus placerat bibendum nulla, at rutrum tortor faucibus ut. Mauris auctor dictum volutpat. Donec eget ultrices dolor. Sed id erat eget tellus ultricies varius. Proin ac dolor a odio finibus aliquam. Aliquam sagittis feugiat tellus, at pulvinar elit laoreet eu. Quisque orci lacus, aliquam at sagittis sit amet, iaculis eu ligula.</p>\r\n\r\n<p>Curabitur enim leo, aliquet nec consequat non, aliquam quis est. Nulla at nibh urna. Aenean dictum purus velit, a euismod ipsum sodales eu. In dolor urna, pulvinar sit amet accumsan non, volutpat in turpis. Integer nulla augue, laoreet viverra sollicitudin sed, consectetur id sapien. Curabitur sodales sem ac dui euismod tempor. Aliquam erat volutpat.</p>\r\n\r\n<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer suscipit turpis a turpis luctus eleifend. Integer tempus, est quis consectetur ultrices, tellus quam consequat est, vitae commodo metus purus id leo. Donec in magna ac sapien fermentum dapibus. Fusce semper sed arcu in accumsan. Maecenas vel mollis purus. Nam vel sapien non felis vestibulum aliquam sed ac nisi. Nam vulputate nec sapien sit amet posuere.</p>\r\n\r\n<p>Quisque interdum ligula maximus, egestas purus ut, tempor lorem. Nam sit amet auctor lacus. Duis tincidunt, felis quis gravida pharetra, arcu leo malesuada nulla, vel ultrices tellus elit et ex. Donec quis lacus at augue varius bibendum at vel velit. Nulla nec volutpat massa, non vulputate purus. Integer scelerisque fringilla lorem eget rhoncus. Proin consectetur sit amet diam vel laoreet. Pellentesque faucibus libero a hendrerit dictum. Morbi mollis ante vitae massa auctor vehicula. Proin volutpat, mi ut iaculis sollicitudin, nulla elit placerat metus, eu venenatis mauris est vitae ligula. In ultricies, orci id molestie feugiat, libero nisi porttitor ligula, vitae scelerisque leo ante sed nibh. Cras sit amet lectus sapien. Integer auctor pellentesque leo, ac pulvinar nulla aliquet tempor. Sed nec vehicula massa. Praesent sodales dolor eget orci consectetur commodo.</p>\r\n\r\n<p>Nam felis lacus, blandit imperdiet lorem sit amet, dignissim fringilla sem. Proin sit amet facilisis nibh. Fusce eu justo vehicula, rutrum felis non, mattis libero. Donec tempor venenatis felis, sit amet interdum lectus. Nunc semper diam a magna fringilla rhoncus. Sed sit amet condimentum velit, hendrerit maximus ex. Phasellus dictum luctus libero, vel efficitur purus iaculis feugiat. Etiam ultrices eros ac vestibulum laoreet. Curabitur accumsan diam eget pretium placerat. Aliquam in magna pharetra nibh pellentesque sagittis. In molestie justo in magna ornare sagittis. Vivamus ut est neque. Proin pellentesque eros quis metus porttitor dapibus. Nulla facilisi. Nullam vulputate laoreet sollicitudin.</p>\r\n\r\n<p>Etiam eget facilisis felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi diam, suscipit eget sem id, malesuada eleifend purus. Etiam sagittis nisl at massa luctus malesuada. Quisque eu turpis dapibus sapien bibendum viverra et id sapien. Nam euismod tincidunt lectus, id auctor tortor convallis ut. Mauris imperdiet felis erat, et porta leo lobortis eget. Suspendisse quis magna tristique, scelerisque velit eu, egestas lectus. In hac habitasse platea dictumst.</p>\r\n\r\n<p>Nam vel magna vitae eros aliquet rhoncus ut ac mi. Duis fringilla varius massa vitae condimentum. Praesent porttitor maximus tellus non tincidunt. Cras elementum mi augue, ut suscipit nisi aliquet non. Aliquam tincidunt eros vel ipsum malesuada, nec rhoncus justo scelerisque. Nulla vulputate tincidunt orci, vitae suscipit neque luctus ac. Fusce auctor nibh mauris. Morbi sollicitudin libero nec sapien semper, sed euismod ante imperdiet. Nulla nibh purus, accumsan ut feugiat quis, iaculis quis quam. Pellentesque rutrum sem sit amet diam tempus mollis. Duis ut augue urna. Nunc at diam et lacus suscipit maximus non sed sem. Nunc id ante varius, vestibulum turpis ac, fermentum metus.</p>\r\n\r\n<p>Pellentesque feugiat hendrerit maximus. Vestibulum sem ipsum, suscipit mollis fringilla tincidunt, posuere non ipsum. Pellentesque at nisi ac nulla faucibus viverra sed eget augue. Donec in eros vel turpis maximus molestie ac at metus. Maecenas mattis nisi eu dapibus tempus. Etiam a faucibus lorem. Aliquam sed nunc auctor, semper nisl nec, gravida lacus. Sed dignissim id ipsum sit amet cursus. Curabitur iaculis consectetur nunc. In tempor pretium sapien, nec aliquet diam efficitur vel. Vivamus et ante sagittis, ullamcorper dui vel, commodo nisl. Nulla magna sem, fermentum vel feugiat a, tincidunt sed magna. Vestibulum dignissim ullamcorper fringilla. Pellentesque aliquet posuere diam, a aliquam eros tempus vel.</p>\r\n\r\n<p>Sed lobortis, erat at posuere sollicitudin, nisl sapien condimentum nibh, nec malesuada metus tortor vestibulum felis. Mauris ac urna eget quam aliquam tincidunt. Cras nec dolor imperdiet, mattis tortor a, bibendum libero. Morbi tristique odio non libero iaculis luctus. Nullam at pharetra tellus. Fusce placerat malesuada ligula ut convallis. Maecenas porta velit sit amet rutrum imperdiet. Aliquam pharetra risus id ex facilisis, eu aliquet nunc dapibus. Ut euismod turpis mollis massa dignissim, nec rhoncus urna ornare. Donec faucibus non odio nec condimentum. Nulla facilisi. Donec tempor dapibus nisl sed volutpat. Aliquam erat volutpat.</p>\r\n\r\n<p style=\"text-align:justify\">Pellentesque faucibus pulvinar velit eu pellentesque. Duis eleifend lacus non facilisis ullamcorper. Duis ligula diam, euismod in dictum vel, accumsan at nulla. Sed a nibh dapibus, eleifend libero nec, accumsan urna. Suspendisse sit amet ligula porttitor, blandit est at, finibus felis. Mauris feugiat pretium accumsan. Fusce vel nisl sed ante dictum facilisis id a sem.</p>\r\n', '5(1).png', 'pengumuman', 0),
('article_20221011933', 'bagas', 'Cara Menggandakan Uang', 1664785082, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque hendrerit faucibus rhoncus. Praesent nibh quam, scelerisque ac libero eu, porttitor convallis tellus. Nam scelerisque pretium lacus a vehicula. Nunc aliquet, sapien ut condimentum imperdiet, elit metus placerat sapien, at aliquam urna quam cursus ligula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed semper sed risus nec pretium. Donec vitae convallis quam.</p>\r\n\r\n<p>Pellentesque sit amet convallis lectus, eget faucibus mauris. Duis quis ante purus. Mauris in augue et tortor pretium ultrices et non nisi. Mauris lacinia metus libero, ac facilisis nibh sagittis tempor. Maecenas posuere eget mi eu volutpat. Nam vitae maximus tortor. Pellentesque sodales sodales lorem, et ultrices sapien eleifend eu. Cras efficitur mauris sed mi accumsan, eget pharetra ex dapibus. Morbi tincidunt est et ullamcorper iaculis. Aliquam erat volutpat. Nulla sit amet elit erat. Vivamus sit amet accumsan sapien. Mauris pellentesque volutpat sem, ut pellentesque diam hendrerit scelerisque. In id magna pellentesque velit tempus euismod. Duis eu tellus velit.</p>\r\n\r\n<p>Nam sit amet nibh vel dui porta varius eget egestas erat. Donec facilisis erat metus, ac placerat lectus vulputate et. Sed feugiat metus risus, ac lobortis elit bibendum eget. Maecenas sollicitudin quis enim in efficitur. Pellentesque fringilla euismod enim, et aliquam elit commodo eget. Phasellus vitae orci ultrices, tristique orci ac, commodo lorem. Morbi laoreet tincidunt orci id tincidunt.</p>\r\n\r\n<p>Aliquam eget felis gravida, feugiat neque vel, malesuada nibh. Nulla eu tortor et augue iaculis bibendum quis pretium ligula. Sed vitae elit libero. Vivamus blandit faucibus tortor, dignissim ornare ante feugiat ac. Nulla maximus lorem rhoncus lectus vehicula, et commodo lorem dapibus. Donec odio odio, vulputate porttitor nunc quis, efficitur volutpat sem. Nullam in nisl at nunc ullamcorper volutpat. Aenean porta nibh eget diam auctor ultrices. Vestibulum congue euismod dictum. Nulla facilisi. Nullam imperdiet ornare ligula et sagittis. In eget mauris at metus convallis aliquet. Phasellus euismod velit tellus, sed rhoncus lorem luctus eu.</p>\r\n\r\n<p>Ut vitae luctus libero, in semper erat. Ut fringilla risus id elit rutrum mattis. Donec varius orci dolor, sed tincidunt arcu faucibus at. Donec vel dapibus mauris. Donec porta vitae lacus sed luctus. Suspendisse id congue nibh, non viverra nibh. Vivamus porta mauris sit amet tincidunt facilisis. Vivamus malesuada rhoncus dolor, et pellentesque risus facilisis imperdiet. Phasellus at placerat turpis. Morbi tristique lorem non luctus sollicitudin. Suspendisse a purus aliquet, porttitor lacus sit amet, volutpat libero. Fusce at nisi in diam scelerisque tristique quis eu quam. Vestibulum eget libero ut nulla fermentum faucibus. Donec varius lobortis consectetur. Fusce pharetra nisi urna, eget eleifend odio porttitor quis. Fusce blandit, eros sed tincidunt ultrices, justo nisl facilisis ipsum, et vehicula risus orci et dolor.</p>\r\n', 'mailchimp-lsdA8QpWN_A-unsplash.jpg', 'artikel', 1),
('article_20221091203', 'qmak', 'Apasok', 1666338644, '<p>Yahahahahahahahhahahahaahahhahahahhaha</p>\n', 'mailchimp-lsdA8QpWN_A-unsplash.jpg', 'berita', 1);

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `id_photo` varchar(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `photo` mediumtext NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`id_photo`, `username`, `title`, `photo`, `date_created`) VALUES
('photo_20221018484', 'qmak', 'Saya pun tak tau', 'logo-pt-inti.jpg', 1665992137),
('photo_20221035835', 'qmak', 'wawaw', 'Untitled_Workspace.png', 1665992995),
('photo_20221069033', 'qmak', 'Apakah Work', '3.png', 1666077580);

-- --------------------------------------------------------

--
-- Table structure for table `tautan`
--

CREATE TABLE `tautan` (
  `id_tautan` varchar(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `tautan` mediumtext NOT NULL,
  `category` varchar(255) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tautan`
--

INSERT INTO `tautan` (`id_tautan`, `username`, `title`, `tautan`, `category`, `date_created`) VALUES
('tautan_20221023992', 'qmak', 'Apa ya xixixi', 'https://www.dicoding.com/', 'serikatkerja', 1665994656),
('tautan_20221085416', 'bagas', 'PT INTI Persero', 'https://www.inti.co.id', 'inti', 1666079238),
('tautan_20221025926', 'bagas', 'Berita PT Inti', 'https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjA7aDjpOn6AhVhx3MBHR-DCQEQFnoECCUQAQ&url=https://www.liputan6.com/tag/pt-inti&usg=AOvVaw2P8GwuQb93a5Sg9CnDppgI', 'inti', 1666079560);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(20) NOT NULL,
  `name` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name`, `username`, `email`, `password`, `avatar`, `role`) VALUES
(0, 'qmak', 'budi', 'budi1@gmail.com', '$2y$10$fB9GkbnaaUF3bORuc.kRuet08fcloDwU0Ad4kNcJ2cu32EaMyURzu', 'default.jpg', 3),
(12, 'bagas', 'bagas', '0', '$2y$10$CrLziiF2CoaMRWBSUxB7fulhDUdiwBWGFIgnZlLSRZBqd/xD6e2fO', 'default.jpg', 1),
(421, 'qmak', 'qmak', '0', '$2y$10$CrLziiF2CoaMRWBSUxB7fulhDUdiwBWGFIgnZlLSRZBqd/xD6e2fO', 'default.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id_video` varchar(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` mediumtext NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id_video`, `username`, `title`, `url`, `date_created`) VALUES
('video20221011638', 'qmak', 'Man City', 'https://youtu.be/SFJg7-1uWCY', 1665458491),
('video20221030508', 'qmak', 'Eggvos', 'https://youtu.be/535TvREn350', 1665461990),
('video20221052794', 'qmak', 'Cobaa Aja dulu', 'https://youtu.be/c_Tv_VukoB0', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comment`);

--
-- Indexes for table `db_article`
--
ALTER TABLE `db_article`
  ADD PRIMARY KEY (`id_article`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
