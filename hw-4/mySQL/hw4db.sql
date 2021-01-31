-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2021 at 09:14 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hw4db`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `poster` varchar(300) DEFAULT NULL,
  `length` varchar(10) NOT NULL,
  `yr` varchar(4) NOT NULL,
  `director` varchar(50) NOT NULL,
  `writter` varchar(50) NOT NULL,
  `production` varchar(50) NOT NULL,
  `cast` varchar(150) NOT NULL,
  `plot` tinytext NOT NULL,
  `genres` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `poster`, `length`, `yr`, `director`, `writter`, `production`, `cast`, `plot`, `genres`) VALUES
(25, 'Jurassic Park', 'https://cdn.europosters.eu/image/1300/posters/jurassic-park-i75969.jpg', '127', '1993', 'Steven Spielberg', 'Michael Crichton', 'Amblin Entertainment', 'Sam Neill, Laura Dern, Jeff Goldblum', 'A pragmatic \"paleontologist\" visiting an almost complete theme park is tasked with protecting a couple of kids after a power failure causes the park\'s cloned dinosaurs to run loose.', 'action, sci-fi, adventure'),
(26, 'Predator', 'https://cdn.shopify.com/s/files/1/1416/8662/products/predator_1987_original_film_art_cbfd239f-4f3c-47f8-9be6-b1215ed23cde_1200x.jpg?v=1602264534', '107', '1987', 'John McTiernan', 'Jim Thomas', 'Lawrence Gordon Productions', 'Arnold Schwarzenegger, Carl Weathers, Kevin Peter Hall', 'A team of commandos on a mission in a Central American jungle find themselves hunted by an extraterrestrial warrior. ', 'Action, Adventure, Sci-Fi'),
(27, 'Ghostbusters', 'https://images-na.ssl-images-amazon.com/images/I/91mjR0cmayL._AC_SL1500_.jpg', '105', '1984', 'Ivan Reitman', 'Dan Aykroyd', 'Columbia-Delphi Productions', 'Bill Murray, Dan Aykroyd, Sigourney Weaver', ' Three former parapsychology professors set up shop as a unique ghost removal service. ', 'Action, Comedy, Fantasy'),
(28, 'Men in Black', 'https://i.pinimg.com/originals/42/08/61/42086177105c5c189e1c47a1e7021778.jpg', '98', '1997', 'Barry Sonnenfeld', 'Lowell Cunningham', 'Columbia Pictures', 'Tommy Lee Jones, Will Smith, Linda Fiorentino', ' A police officer joins a secret organization that polices and monitors extraterrestrial interactions on Earth. ', 'Action, Adventure, Comedy'),
(29, 'The Godfather', 'https://m.media-amazon.com/images/M/MV5BM2MyNjYxNmUtYTAwNi00MTYxLWJmNWYtYzZlODY3ZTk3OTFlXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg', '175', '1972', 'Francis Ford Coppola', 'Mario Puzo', 'Paramount Pictures', 'Marlon Brando, Al Pacino, James Caan', 'An organized crime dynasty\'s aging patriarch transfers control of his clandestine empire to his reluctant son. ', 'Crime, Drama'),
(30, 'Pulp Fiction', 'https://i.pinimg.com/originals/36/b1/0a/36b10aa4b63950458999594ca442178e.jpg', '154', '1994', 'Quentin Tarantino', 'Quentin Tarantino', 'A Band Apart', 'John Travolta, Uma Thurman, Samuel L. Jackson', ' The lives of two mob hitmen, a boxer, a gangster and his wife, and a pair of diner bandits intertwine in four tales of violence and redemption. ', 'Crime, Drama'),
(31, 'The Lord of the Rings: The Fellowship of the Ring', 'https://images-na.ssl-images-amazon.com/images/I/81EBp0vOZZL._AC_SL1329_.jpg', '178', '2001', 'Peter Jackson', 'J.R.R. Tolkien', 'New Line Cinema', 'Elijah Wood, Ian McKellen, Orlando Bloom', ' A meek Hobbit from the Shire and eight companions set out on a journey to destroy the powerful One Ring and save Middle-earth from the Dark Lord Sauron. ', 'Action, Adventure, Drama'),
(32, 'Toy Story', 'https://m.media-amazon.com/images/M/MV5BMDU2ZWJlMjktMTRhMy00ZTA5LWEzNDgtYmNmZTEwZTViZWJkXkEyXkFqcGdeQXVyNDQ2OTk4MzI@._V1_.jpg', '81', '1995', 'John Lasseter', 'Pete Docter', 'Walt Disney Pictures', 'Tom Hanks, Tim Allen, Don Rickles', ' A cowboy doll is profoundly threatened and jealous when a new spaceman figure supplants him as top toy in a boy\'s room. ', 'Animation, Adventure, Comedy');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) NOT NULL,
  `movieID` int(10) NOT NULL,
  `userID` int(10) NOT NULL,
  `review` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `movieID`, `userID`, `review`) VALUES
(1, 32, 5, '9'),
(2, 32, 1, '10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(15) NOT NULL,
  `fName` varchar(20) NOT NULL,
  `lName` varchar(20) NOT NULL,
  `pswd` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `admin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `fName`, `lName`, `pswd`, `email`, `admin`) VALUES
(1, 'peraAdmin', 'Petar', 'Petrovic', 'pera123', 'petar@hw.com', 1),
(3, 'markoAdmin', 'Marko', 'Markovic', 'mare123', 'marko@hw.com', 1),
(4, 'djoloAdmin', 'Djordje', 'Djordjevic', 'djole123', 'djordje@hw.com', 1),
(5, 'ivanAdmin', 'Ivan', 'Ivanovic', 'ivan123', 'ivan@hw.com', 1),
(6, 'majaAdmin', 'Marija', 'Marjanovic', 'maja123', 'marija@hw.com', 1),
(8, 'stefa97', 'Stefan', 'Stefanovic', 'stefke123', 'stefan@hw.com', 0),
(9, 'janko434', 'Janko', 'Jankovic', 'janko123', 'janko@hw.com', 0),
(25, 'gogi556', 'Goran', 'Petrovic', 'gogi123', 'goran@hw.com', 0),
(27, 'ivana23', 'Ivana', 'Ivanovic', 'ivana123', 'ivana@hw.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
