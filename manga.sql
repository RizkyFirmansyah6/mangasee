-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2018 at 12:58 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manga`
--

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id_genre` int(11) NOT NULL,
  `genre` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id_genre`, `genre`) VALUES
(1, 'Action'),
(2, 'Adult'),
(3, 'Adventure'),
(4, 'Comedy'),
(5, 'Doujinshi'),
(6, 'Drama'),
(7, 'Ecchi'),
(8, 'Fantasy'),
(9, 'Gender Bender'),
(10, 'Harem'),
(11, 'Hentai'),
(12, 'Historical'),
(13, 'Horror'),
(14, 'Isekai'),
(15, 'Josei'),
(16, 'Lolicon'),
(17, 'Martial Arts'),
(18, 'Mature'),
(19, 'Mecha'),
(20, 'Mistery'),
(21, 'Psychological'),
(22, 'Romance'),
(23, 'School Life'),
(24, 'Sci-fi'),
(25, 'Seinen'),
(26, 'Seinen Supranatural'),
(27, 'Shotacon'),
(28, 'Shoujo'),
(29, 'Shoujo Ai'),
(30, 'Shounen'),
(31, 'Shounen Ai'),
(32, 'Slice of Life'),
(33, 'Smut'),
(34, 'Sport'),
(35, 'Sports'),
(36, 'Supernatural'),
(37, 'Tragedy'),
(38, 'Yaoi'),
(39, 'Yuri');

-- --------------------------------------------------------

--
-- Table structure for table `genre_manga`
--

CREATE TABLE `genre_manga` (
  `id_manga` int(11) NOT NULL,
  `id_genre` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre_manga`
--

INSERT INTO `genre_manga` (`id_manga`, `id_genre`) VALUES
(1, 1),
(1, 4),
(1, 6),
(1, 17),
(1, 30),
(1, 36),
(2, 36),
(2, 30),
(2, 22),
(2, 8),
(2, 6),
(2, 4),
(2, 3),
(2, 1),
(3, 1),
(3, 6),
(3, 13),
(3, 18),
(3, 20),
(3, 25),
(3, 36),
(9, 30),
(9, 4),
(2, 4),
(9, 32),
(10, 6),
(10, 25),
(10, 32),
(10, 37);

-- --------------------------------------------------------

--
-- Table structure for table `isi_manga`
--

CREATE TABLE `isi_manga` (
  `id_isi` int(11) NOT NULL,
  `id_manga` int(11) NOT NULL,
  `chapter` varchar(30) NOT NULL,
  `page` int(3) NOT NULL,
  `image` varchar(100) NOT NULL,
  `date_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `isi_manga`
--

INSERT INTO `isi_manga` (`id_isi`, `id_manga`, `chapter`, `page`, `image`, `date_posted`) VALUES
(1, 1, '1', 1, '001.jpg', '2018-06-06 02:43:22'),
(2, 1, '1', 2, '002.jpg', '2018-06-06 02:43:22'),
(3, 1, '1', 3, '003.jpg', '2018-06-06 02:43:22'),
(4, 1, '1', 4, '004.jpg', '2018-06-06 02:43:22'),
(5, 1, '1', 5, '005.jpg', '2018-06-06 02:43:22'),
(6, 1, '1', 6, '006.jpg', '2018-06-06 02:43:22'),
(7, 1, '1', 7, '007.jpg', '2018-06-06 02:43:22'),
(8, 1, '1', 8, '008.jpg', '2018-06-06 02:43:22'),
(9, 1, '1', 9, '009.jpg', '2018-06-06 02:43:22'),
(10, 1, '1', 10, '010.jpg', '2018-06-06 02:43:22'),
(11, 1, '1', 11, '011.jpg', '2018-06-06 02:43:22'),
(12, 1, '1', 12, '012.jpg', '2018-06-06 02:43:22'),
(13, 1, '1', 13, '013.jpg', '2018-06-06 02:43:22'),
(14, 1, '1', 14, '014.jpg', '2018-06-06 02:43:22'),
(15, 1, '1', 15, '015.jpg', '2018-06-06 02:43:22'),
(16, 1, '1', 16, '016.jpg', '2018-06-06 02:43:22'),
(17, 1, '1', 17, '017.jpg', '2018-06-06 02:43:22'),
(18, 1, '1', 18, '018.jpg', '2018-06-06 02:43:22'),
(19, 1, '1', 19, '019.jpg', '2018-06-06 02:43:22'),
(20, 1, '1', 20, '020.jpg', '2018-06-06 02:43:23'),
(21, 1, '1', 21, '021.jpg', '2018-06-06 02:43:23'),
(22, 1, '1', 22, '022.jpg', '2018-06-06 02:43:23'),
(23, 1, '1', 23, '023.jpg', '2018-06-06 02:43:23'),
(24, 1, '1', 24, '024.jpg', '2018-06-06 02:43:23'),
(25, 1, '1', 25, '025.jpg', '2018-06-06 02:43:23'),
(26, 1, '1', 26, '026.jpg', '2018-06-06 02:43:23'),
(27, 1, '1', 27, '027.jpg', '2018-06-06 02:43:23'),
(28, 1, '1', 28, '028.jpg', '2018-06-06 02:43:23'),
(29, 1, '1', 29, '029.jpg', '2018-06-06 02:43:23'),
(30, 1, '1', 30, '030.jpg', '2018-06-06 02:43:23'),
(31, 1, '1', 31, '031.jpg', '2018-06-06 02:43:23'),
(32, 1, '1', 32, '032.jpg', '2018-06-06 02:43:23'),
(33, 1, '1', 33, '033.jpg', '2018-06-06 02:43:23'),
(34, 1, '1', 34, '034.jpg', '2018-06-06 02:48:22'),
(35, 1, '1', 35, '035.jpg', '2018-06-06 02:46:34'),
(36, 1, '1', 36, '036.jpg', '2018-06-06 02:46:34'),
(37, 1, '1', 37, '037.jpg', '2018-06-06 02:46:34'),
(38, 1, '1', 38, '038.jpg', '2018-06-06 02:46:34'),
(39, 1, '1', 39, '039.jpg', '2018-06-06 02:46:34'),
(40, 1, '1', 40, '040.jpg', '2018-06-06 02:46:34'),
(41, 1, '1', 41, '041.jpg', '2018-06-06 02:46:34'),
(42, 1, '1', 42, '042.jpg', '2018-06-06 02:46:34'),
(43, 1, '1', 43, '043.jpg', '2018-06-06 02:46:34'),
(44, 1, '1', 44, '044.jpg', '2018-06-06 02:46:34'),
(45, 1, '1', 45, '045.jpg', '2018-06-06 02:46:34'),
(46, 1, '1', 46, '046.jpg', '2018-06-06 02:46:34'),
(47, 1, '1', 47, '047.jpg', '2018-06-06 02:46:34'),
(48, 1, '1', 48, '048.jpg', '2018-06-06 02:46:34'),
(49, 1, '1', 49, '049.jpg', '2018-06-06 02:46:34'),
(50, 1, '1', 50, '050.jpg', '2018-06-06 02:46:34'),
(51, 1, '1', 51, '051.jpg', '2018-06-06 02:46:34'),
(52, 1, '1', 52, '052.jpg', '2018-06-06 02:46:34'),
(53, 1, '1', 53, '053.jpg', '2018-06-06 02:46:34'),
(54, 1, '1', 54, '054.jpg', '2018-06-06 02:46:34'),
(55, 1, '1', 55, '055.jpg', '2018-06-06 02:46:34'),
(56, 1, '1', 56, '056.jpg', '2018-06-06 02:46:34'),
(57, 1, '1', 57, '057.jpg', '2018-06-06 02:46:35'),
(58, 1, '2', 1, '001.jpg', '2018-06-06 05:21:26'),
(59, 1, '2', 2, '002.jpg', '2018-06-06 05:21:26'),
(60, 1, '2', 3, '003.jpg', '2018-06-06 05:21:26'),
(61, 1, '2', 4, '004.jpg', '2018-06-06 05:21:26'),
(62, 1, '2', 5, '005.jpg', '2018-06-06 05:21:26'),
(63, 1, '2', 6, '006.jpg', '2018-06-06 05:21:26'),
(64, 1, '2', 7, '007.jpg', '2018-06-06 05:21:26'),
(65, 1, '2', 8, '008.jpg', '2018-06-06 05:21:26'),
(66, 1, '2', 9, '009.jpg', '2018-06-06 05:21:26'),
(67, 1, '2', 10, '010.jpg', '2018-06-06 05:21:26'),
(68, 1, '2', 11, '011.jpg', '2018-06-06 05:21:26'),
(69, 1, '2', 12, '012.jpg', '2018-06-06 05:21:26'),
(70, 1, '2', 13, '013.jpg', '2018-06-06 05:21:26'),
(71, 1, '2', 14, '014.jpg', '2018-06-06 05:21:26'),
(72, 1, '2', 15, '015.jpg', '2018-06-06 05:21:26'),
(73, 1, '2', 16, '016.jpg', '2018-06-06 05:21:26'),
(74, 1, '2', 17, '017.jpg', '2018-06-06 05:21:26'),
(75, 1, '2', 18, '018.jpg', '2018-06-06 05:21:26'),
(76, 1, '2', 19, '019.jpg', '2018-06-06 05:21:26'),
(77, 1, '2', 20, '020.jpg', '2018-06-06 05:21:26'),
(78, 1, '2', 21, '021.jpg', '2018-06-06 05:21:26'),
(79, 1, '2', 22, '022.jpg', '2018-06-06 05:21:26'),
(80, 1, '2', 23, '023.jpg', '2018-06-06 05:21:26'),
(81, 1, '2', 24, '024.jpg', '2018-06-06 05:21:26');

-- --------------------------------------------------------

--
-- Table structure for table `manga`
--

CREATE TABLE `manga` (
  `id_manga` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `alt_name` varchar(100) DEFAULT NULL,
  `author` varchar(100) NOT NULL,
  `year` int(4) NOT NULL,
  `status` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `cover` varchar(200) NOT NULL,
  `is_recomended` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manga`
--

INSERT INTO `manga` (`id_manga`, `title`, `alt_name`, `author`, `year`, `status`, `description`, `cover`, `is_recomended`) VALUES
(1, 'Bleach', NULL, 'Kubo Tite', 2001, 'Completed', 'Ichigo Kurosaki has always been able to see ghosts, but this ability doesn\'t change his life nearly as much as his close encounter with Rukia Kuchiki, a Soul Reaper and member of the mysterious Soul Society. While fighting a Hollow, an evil spirit that preys on humans who display psychic energy, Rukia attempts to lend Ichigo some of her powers so that he can save his family, but much to her surprise, Ichigo absorbs every last drop of her energy. Now a full-fledged Soul Reaper himself, Ichigo quickly learns that the world he inhabits is one full of dangerous spirits, and along with Rukia, who is slowly regaining her powers, it\'s Ichigo\'s job to both protect the innocent from Hollows and to help the spirits themselves find peace.', 'Bleach.jpg', 1),
(2, 'Ao no Exorcist', 'Ao no Futsumashi, Blue Exorcist', 'KATOU Kazue', 2009, 'Ongoing', 'This world consists of two dimensions joined as one, like a mirror. The first is the world in which the humans live, Assiah. The other is the world of demons, Gehenna. Ordinarily, travel between the two, and indeed any kind of contact between the two, is impossible. However, the demons can pass over into this world by possessing anything that exist within it. Satan may be the king of demons, but there\'s one thing he doesn\'t have, and that\'s a substance in the human world which is powerful enough to contain him! For that purpose he created Rin, his son with a human woman, but will is son agree to his plans? Or will he become something else...? An exorcist?', 'Ao-No-Exorcist.jpg', 0),
(3, 'Ajin', 'Ajin: Demi-Human', 'MIURA Tsuina', 2012, 'Ongoing', 'The story follows a high school student named named Kei Nagai, who is caught in a traffic accident, dies, but immediately revives and learns he is not human, but an Ajin, a mysterious creature that cannot die. Scared, he runs away from humans but is helped by his friend Kai, who joins him in his flee from civilization. He then becomes involved in a conflict between human and Ajin and must choose a side.', 'Ajin.jpg', 0),
(9, 'Barakamon', '', 'YOSHINO Satsuki', 2009, 'Ongoing', 'On a quest to discover why a famous curator critiqued his calligraphy as \"rigid and bland,\" handsome, arrogant, self-centred Handa Seishu forced to continue his work while living on a remote island.\r\nA city-slicker to the core, Handa is surprised (and annoyed) by his wacky new neighbors and their odd habits - people traveling around on tractors as if they were cars, unwanted visitors who never use the front door, annoying kids using his home as a base...the list of grievances grows by the minute. \r\nCan a city guy really adapt to an easy-going island life? Find out in this silly comedy full of innocence and laughter!', 'Barakamon1.jpg', 0),
(10, '3-gatsu no Lion', 'March Comes in Like a Lion', 'UMINO Chica', 2008, 'Ongoing', 'Kiriyama Rei is a 17 year old professional shogi player and very good at it, but in real life, he has nothing. Quiet and not very social, Rei has no family, no friends, and he doesn\'t go to school. He is acquainted with Akari, a neighboring woman single-handedly raising her two younger sisters, Momo and Hinata.', '3-Gatsu-No-Lion.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `is_suspended` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `is_admin`, `is_suspended`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'rizky.firmansyah55@gmail.com', 1, 0),
(2, 'rizky', '49d8712dd6ac9c3745d53cd4be48284c', 'firmansyah.rizky66@gmail.com', 0, 0),
(3, 'member', 'aa08769cdcb26674c6706093503ff0a3', 'member123@gmail.com', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id_genre`);

--
-- Indexes for table `isi_manga`
--
ALTER TABLE `isi_manga`
  ADD PRIMARY KEY (`id_isi`);

--
-- Indexes for table `manga`
--
ALTER TABLE `manga`
  ADD PRIMARY KEY (`id_manga`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `isi_manga`
--
ALTER TABLE `isi_manga`
  MODIFY `id_isi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `manga`
--
ALTER TABLE `manga`
  MODIFY `id_manga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
