CREATE TABLE `gastos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item` varchar(64) NOT NULL,
  `valor` decimal(11,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
