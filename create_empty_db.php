<?php
$query1 = "CREATE TABLE `a_students` (
	`id` INT(11) NOT NULL,
	`full_name` VARCHAR(35) NOT NULL COLLATE 'utf8_general_ci',
	`birth_date` DATE NOT NULL,
	`establishment` VARCHAR(35) NOT NULL COLLATE 'utf8_general_ci',
	`education_level` VARCHAR(35) NOT NULL COLLATE 'utf8_general_ci',
	`address` VARCHAR(35) NOT NULL COLLATE 'utf8_general_ci',
	`el_wali` VARCHAR(35) NOT NULL COLLATE 'utf8_general_ci',
	`phone_nbr1` VARCHAR(25) NOT NULL COLLATE 'utf8_general_ci',
	`phone_nbr2` VARCHAR(25) NOT NULL COLLATE 'utf8_general_ci',
	`notes` TEXT(150) NOT NULL COLLATE 'utf8_general_ci',
	`date` DATE NOT NULL,
	PRIMARY KEY (`id`) USING BTREE
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB";

$query2 = "CREATE TABLE `b_report` (
	`no` INT(11) NOT NULL AUTO_INCREMENT,
	`id` INT(11) NOT NULL,
	`c_date` VARCHAR(20) NOT NULL COLLATE 'utf8_general_ci',
	`enter_time` VARCHAR(10) NOT NULL COLLATE 'utf8_general_ci',
	`exit_time` VARCHAR(10) NOT NULL COLLATE 'utf8_general_ci',
	PRIMARY KEY (`no`) USING BTREE,
	INDEX `id` (`id`) USING BTREE,
	CONSTRAINT `b_report_ibfk_1` FOREIGN KEY (`id`) REFERENCES `library_talibat_db`.`a_students` (`id`) ON UPDATE CASCADE ON DELETE CASCADE
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
AUTO_INCREMENT=1";

$query3 = "CREATE TABLE `users` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`user_name` VARCHAR(32) NOT NULL COLLATE 'utf8_general_ci',
	`password` VARCHAR(32) NOT NULL COLLATE 'utf8_general_ci',
	PRIMARY KEY (`id`) USING BTREE
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
AUTO_INCREMENT=3";

//1st user
$user1 = 'admin';
$pwd1 = md5('admin');

//2nd user
$user2 = 'library';
$pwd2 = md5('library123456789');

$query4 = "INSERT INTO users VALUES
            (1,'$user1','$pwd1'),
            (2,'$user2','$pwd2')";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (
  mysqli_query($conn, $query1) and
  mysqli_query($conn, $query2) and
  mysqli_query($conn, $query3) and
  mysqli_query($conn, $query4)
) {
  echo "Tables Created Successfully";
} else {
  echo "ERROR! can not create tables!";
}
