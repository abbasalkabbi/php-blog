-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 22, 2021 at 07:18 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `adminuser` varchar(250) NOT NULL,
  `adminpass` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `adminuser`, `adminpass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `time`) VALUES
(1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt assumenda ipsum facilis.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit magnam necessitatibus unde rem modi sunt, ipsam molestiae eaque quam atque. Iste eos voluptas tempora commodi quibusdam dicta accusantium perspiciatis natus corporis impedit excepturi debitis reiciendis iure, aliquam aperiam nemo ipsam vitae omnis eligendi saepe. Nobis voluptate eveniet placeat sint consequatur? Sapiente rem magni exercitationem eos ipsam, a perferendis reprehenderit iusto delectus repellat sed doloribus architecto corporis!\r\n', '2021-06-22'),
(2, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt minus porro quidem, vel repellendus aperiam corrupti doloribus laboriosam, quo reprehenderit nemo ipsum enim quisquam voluptate?', '        Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores sapiente minus magni, adipisci iste nam veniam velit soluta voluptatum facilis, doloremque magnam libero cum cupiditate consequuntur ipsum quos hic dolore. Molestiae saepe pariatur quisquam laudantium. Culpa cumque alias architecto consequuntur sequi laudantium, perspiciatis optio. Exercitationem excepturi ullam repudiandae, incidunt accusantium laudantium laborum officiis vitae cum at veritatis maxime placeat illum voluptatem dolores dolorem harum perferendis magni eaque aliquid mollitia distinctio, dolorum ad commodi. Doloremque id culpa, vel ducimus libero et quidem alias? Reprehenderit esse doloremque aliquid temporibus at maiores natus repellat, recusandae cum, adipisci tenetur voluptates, doloribus odio aperiam eum earum et voluptatum explicabo suscipit porro amet. Error vel consequatur quos ducimus quidem possimus magni repellendus omnis fugiat ipsum, facilis, facere cum rem consectetur nemo laborum quia eum dolorum similique numquam repudiandae voluptatibus ipsa itaque tempore? Ipsam corrupti praesentium hic ipsa, quae, dolor quo, sint labore quasi numquam nobis accusantium.\r\n', '2021-06-22'),
(3, '        Lorem ipsum dolor sit amet consectetur.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, dicta voluptate. At laudantium iste aliquid distinctio non dolores laborum? Laudantium iure aliquid vero corporis, sit deserunt magni molestiae, rem omnis, tenetur nemo molestias voluptatibus minus placeat expedita voluptate magnam. Voluptatem iste unde necessitatibus ut doloremque minima odit quisquam tempore eos inventore vitae totam culpa reprehenderit natus, saepe facere odio quia eveniet porro omnis. Perferendis molestiae ipsam deleniti et quis error eveniet quos. Velit, saepe! Necessitatibus sunt quibusdam itaque, laborum modi aliquam harum obcaecati ipsa distinctio vitae officiis magnam perferendis saepe repellendus, reiciendis mollitia numquam, magni excepturi. Blanditiis vel iste assumenda quasi magnam, amet necessitatibus veniam. Quidem, tempora et rem, necessitatibus eius quasi nostrum nemo optio quis dolorum voluptas vitae quam? Laudantium similique est corrupti! Aliquam placeat quae id consequuntur porro quis minus pariatur quidem repellat repudiandae, voluptas fuga numquam doloribus explicabo ut voluptates recusandae, aperiam soluta est natus. Et, expedita sequi nesciunt ut possimus enim architecto nihil doloribus? Ducimus, quae expedita. Eum et aperiam quisquam architecto natus consequatur id rerum vero exercitationem inventore, incidunt, dicta sequi aliquid veritatis qui mollitia recusandae pariatur aspernatur, nemo fuga totam error doloremque dolor. Sint neque laudantium cupiditate corporis quia quae laboriosam, soluta recusandae praesentium, eius perferendis vero, atque nisi eveniet! Eos aspernatur deserunt harum consequatur, sit maxime voluptates molestiae, fugiat, et velit quas? Nemo quaerat architecto voluptates soluta porro saepe, quisquam, quam tenetur explicabo illum odio eum. Totam rem nam voluptas deleniti maxime. Quae dolores architecto aperiam! Porro alias fugiat, velit atque quam delectus ut ducimus sint praesentium incidunt quisquam minima, voluptatibus tempore dolorem natus nesciunt id unde. Quidem incidunt possimus voluptatum deleniti quae eaque nemo accusamus laboriosam adipisci optio ea cumque ipsa velit enim, amet molestias magni laborum iusto vitae obcaecati dignissimos ad. Perspiciatis tenetur incidunt ex, non vitae assumenda officiis? Ex expedita reprehenderit consequuntur, dolor quam minima voluptatum nihil qui. Tempora eligendi debitis non quisquam porro ut atque illo earum officia qui. Illo non porro consectetur ipsum corporis cupiditate cumque necessitatibus iure aperiam neque dolores perspiciatis repudiandae maiores, quia, facilis mollitia accusantium reiciendis, perferendis nemo labore. Nam, hic, corporis cum debitis ad harum culpa tempore a dolore dolor quae ducimus fuga deleniti nemo quod? Inventore repudiandae asperiores dicta a omnis dolor accusantium minima perferendis quis quaerat, accusamus minus assumenda consequatur ad vel culpa dignissimos enim molestiae. Velit asperiores maiores explicabo cupiditate consequatur quis voluptatibus voluptatum ex blanditiis nesciunt unde magnam illo id a eius repellendus qui optio, facilis natus commodi voluptate aperiam architecto quas. Aut quasi nostrum ex cumque, voluptatum, debitis eaque magni enim soluta harum molestias dicta nemo est consequuntur quo distinctio, labore velit fugiat quod pariatur quis esse maiores ea. Ipsam, animi! Ratione totam debitis similique. Nobis odit possimus aut at quae aspernatur doloremque porro mollitia, dolorum dicta ea sit consectetur perspiciatis tenetur magni maxime et minima numquam excepturi voluptatibus dolorem quos alias! Neque debitis mollitia incidunt commodi? Magnam deserunt quidem quo itaque suscipit tenetur, blanditiis, ea illo dolor molestiae ad vitae fugiat quibusdam placeat iusto recusandae exercitationem, quis libero!\r\n', '2021-06-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
