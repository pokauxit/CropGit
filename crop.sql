CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `staff_user` varchar(50) NOT NULL COMMENT 'Username',
  `staff_pass` varchar(50) NOT NULL COMMENT 'Password',
  `staff_name` varchar(100) NOT NULL COMMENT 'ชื่อ',
  `staff_level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `staff` (`staff_id`, `staff_user`, `staff_pass`, `staff_name`, `staff_level`) VALUES
(1, 'user', 'pwd', 'เลิศศักดิ์  หงษ์จันทร์', 1);

CREATE TABLE `standard` (
  `sid` int(11) NOT NULL,
  `standard_name` varchar(45) NOT NULL,
  `org` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `standard` (`sid`, `standard_name`, `org`) VALUES
(1, 'การปลูกผัก a', 'กรมวิชาการเกษตร'),
(2, 'sdf', 'dfadsdfsdsfds');


CREATE TABLE `type_plant` (
  `type_id` int(11) NOT NULL COMMENT 'รหัสชนิดพืช',
  `type_name` varchar(100) NOT NULL COMMENT 'ชื่อชนิด',
  `note` varchar(200) NOT NULL COMMENT 'หมายเหตุ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `type_plant` (`type_id`, `type_name`, `note`) VALUES
(1, 'พืชไร่hh', 'กกกhh'),
(3, 'hhhh', 'fff');

ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

ALTER TABLE `standard`
  ADD PRIMARY KEY (`sid`);

ALTER TABLE `type_plant`
  ADD PRIMARY KEY (`type_id`);

ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `standard`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `type_plant`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสชนิดพืช', AUTO_INCREMENT=4;