
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

SET AUTOCOMMIT = 0;

START TRANSACTION;

SET time_zone = "+00:00";



/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;

/*!40101 SET NAMES utf8mb4 */;





CREATE TABLE `admin` 
(
 
`username`  varchar(30) NOT NULL,
  
`password` varchar(30) NOT NULL

)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;





INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');





CREATE TABLE `bookclass` 
(
 
 `training_name` varchar(30) NOT NULL,

`trainer_name` varchar(30) NOT NULL,
  
`start_date` date NOT NULL,
  
`trainingid` int(30) NOT NULL,
  
`useruid` varchar(30) DEFAULT NULL

) 

ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




INSERT INTO `bookclass` (`training_name`, `trainer_name`, `start_date`, `trainingid`, `useruid`) 
VALUES
('Boxing', 'Shivarama', '2019-11-08', 1, 'tejas'),

('Boxing', 'Raju', '2019-11-09', 1, 'sam'),

('Power Yoga', 'Raju', '2019-11-09', 5, 'sam'),

('Sports Workout', 'Raju', '2019-11-09', 8, 'kavya'),

('Football', 'Shivarama', '2019-11-09', 3, 'kavya');







CREATE TABLE `packages` 
(
 
 `amount` int(30) NOT NULL,
 
 `packagename` varchar(100) NOT NULL

)
 
ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




INSERT INTO `packages` (`amount`, `packagename`) 
VALUES
(10990, '3 Months Unlimited Classes'),

(11490, '6 Month Select Pack'),

(13590, '3 Month Unlimited Classes'),

(15490, '10 Months Unlimited Classes'),

(17990, '6 Month Unlimited Classes'),

(21990, '9 Month Unlimited Classes');




CREATE TABLE `payments` (
 
 `amount` int(30) NOT NULL,
  
`userid` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;





INSERT INTO `payments` (`amount`, `userid`) 
VALUES
(21990, 4),

(21990, 3),

(15490, 3),

(13590, 4),

(21990, 5),

(11490, 5);






CREATE TABLE `trainer` (
  
`trainerid` int(30) NOT NULL,
 
 `name` varchar(40) NOT NULL,

  `email` varchar(30) NOT NULL,
  
`phone` varchar(30) NOT NULL,

  `traineruid` varchar(30) NOT NULL,
  
`trainerpwd` varchar(30) NOT NULL,

  `gender` varchar(10) DEFAULT NULL
) 
ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;






INSERT INTO `trainer` (`trainerid`, `name`, `email`, `phone`, `traineruid`, `trainerpwd`, `gender`) 
VALUES
(5, 'Shivarama', 'shiva@gmail.com', '9845535689', 'shiv', '1234', 'Male'),

(7, 'aaa', 'aaa@gmail.com', '07899051710', 'aaa', 'aaa', 'Male'),

(8, 'Raju', 'raju@gmail.com', '9658743295', 'raju', '1234', 'Male');





CREATE TABLE `trainer_skills` 
(
  `trainerid` int(30) NOT NULL,

  `training_name` varchar(30) DEFAULT NULL,
 
 `trainingid` int(10) DEFAULT NULL
) 
ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;





INSERT INTO `trainer_skills` (`trainerid`, `training_name`, `trainingid`) 
VALUES
(5, 'Boxing', 1),

(5, 'Football', 3),

(5, 'Dance Fitness', 2),

(8, 'Boxing', 1),

(8, 'Gym Access', 4),

(8, 'Sports Workout', 8),

(8, 'Dance Fitness', 2),

(8, 'Football', 3),

(8, 'Power Yoga', 5);






CREATE TABLE `trainings` (

  `trainingid` int(30) NOT NULL,

  `training_name` varchar(40) NOT NULL,
  
`duration` varchar(30) NOT NULL
) 
ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;






INSERT INTO `trainings` (`trainingid`, `training_name`, `duration`) 
VALUES
(1, 'Boxing', '2 Months'),

(2, 'Dance Fitness', '3 Months'),

(3, 'Football', '2 Months'),

(4, 'Gym Access', '2 Months'),

(5, 'Power Yoga', '2 Months'),

(6, 'Prowl', '2 Months'),

(7, 'S & C', '2 Months'),

(8, 'Sports Workout', '2 Months'),

(9, 'Yoga', '2 Months');




CREATE TABLE `users`
 (
  `userid` int(10) NOT NULL,

  `user_first` varchar(30) NOT NULL,

  `user_last` varchar(30) NOT NULL,
  
`user_email` varchar(30) NOT NULL,

  `user_uid` varchar(30) NOT NULL,
  
`user_pwd` varchar(30) NOT NULL,
 
 `phone` varchar(30) DEFAULT NULL,

  `gender` varchar(10) DEFAULT NULL
) 
ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;






INSERT INTO `users` (`userid`, `user_first`, `user_last`, `user_email`, `user_uid`, `user_pwd`, `phone`, `gender`) 
VALUES
(3, 'Tejas', 'S', 'tejasharish89@gmail.com', 'tejas', '9148820600', '07899051710', 'Male'),

(4, 'Kavyashree', 'S', 'kavyashreesom@gmail.com', 'kavya', '1234', '9148820600', 'Female'),

(5, 'Sammed', 'DP', 'sammedjaindp@gmail.com', 'sam', '1234', '6362882357', 'Male');





ALTER TABLE `packages`
  ADD PRIMARY KEY (`amount`);





ALTER TABLE `trainer`
  ADD PRIMARY KEY (`trainerid`);




ALTER TABLE `trainings`
  ADD PRIMARY KEY (`trainingid`);





ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);





ALTER TABLE `trainer`
  MODIFY `trainerid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;





ALTER TABLE `trainings`
  MODIFY `trainingid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;





ALTER TABLE `users`
  MODIFY `userid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
