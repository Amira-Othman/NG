use TASK;
DROP TABLE IF EXISTS `Task_table`;
CREATE TABLE `Task_table` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
