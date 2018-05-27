CREATE TABLE IF NOT EXISTS `sales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `item` varchar(50) CHARACTER SET latin1 NOT NULL,
  `date` date NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8;

INSERT INTO `sales` (`id`, `name`, `item`, `date`, `amount`) VALUES
(1, 'Andrew', 'Television', '2016-06-07', 2500),
(2, 'Bryan', 'Washing Machine', '2016-07-10', 1100),
(3, 'Cherly', 'Water Dispenser', '2016-08-11', 95),
(4, 'Dean', 'Refrigerator', '2016-09-15', 583),
(5, 'Esryl', 'Wall Fan', '2016-10-11', 45),
(6, 'Franky', 'Steam Iron', '2016-10-17', 0),
(7, 'Gerry', 'Air Conditioner', '2016-11-17', 325);