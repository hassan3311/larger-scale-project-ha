-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2024 at 12:57 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: rentals
--

-- --------------------------------------------------------

--
-- Table structure for table tbl_cities
--

CREATE TABLE tbl_cities (
  id int(11) NOT NULL,
  name varchar(191) NOT NULL,
  province_id int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table tbl_cities
--

INSERT INTO tbl_cities (id, name, province_id) VALUES
(1, 'Lahore', 1),
(2, 'Ameritsir', 2);

-- --------------------------------------------------------

--
-- Table structure for table tbl_countries
--

CREATE TABLE tbl_countries (
  id int(11) NOT NULL,
  name varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table tbl_countries
--

INSERT INTO tbl_countries (id, name) VALUES
(1, 'Pakistan'),
(2, 'India');

-- --------------------------------------------------------

--
-- Table structure for table tbl_properties
--

CREATE TABLE tbl_properties (
  id int(11) NOT NULL,
  title varchar(191) NOT NULL,
  description varchar(191) NOT NULL,
  price float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table tbl_properties
--

INSERT INTO tbl_properties (id, title, description, price) VALUES
(1, 'Ryk ', 'Ryk Society', 2500000);

-- --------------------------------------------------------

--
-- Table structure for table tbl_property_addresses
--

CREATE TABLE tbl_property_addresses (
  id int(11) NOT NULL,
  address varchar(191) NOT NULL,
  country_id int(11) NOT NULL,
  property_id int(11) NOT NULL,
  city_id int(11) NOT NULL,
  province_id int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table tbl_property_addresses
--

INSERT INTO tbl_property_addresses (id, address, country_id, property_id, city_id, province_id) VALUES
(1, 'house#5, st# 2', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table tbl_provinces
--

CREATE TABLE tbl_provinces (
  id int(11) NOT NULL,
  name varchar(191) NOT NULL,
  country_id int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table tbl_provinces
--

INSERT INTO tbl_provinces (id, name, country_id) VALUES
(1, 'Punjab', 1),
(2, 'Punjab', 2),
(3, 'sindh', 1);

-- --------------------------------------------------------

--
-- Table structure for table tbl_roles
--

CREATE TABLE tbl_roles (
  id int(11) NOT NULL,
  name varchar(191) NOT NULL,
  description varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table tbl_roles
--

INSERT INTO tbl_roles (id, name, description) VALUES
(1, 'admin', 'admin roles has to manage the website'),
(2, 'host', 'host roles has to manage the website'),
(3, 'renter', 'renter roles has to manage the website'),
(4, 'manager', 'manager roles manage the website');

-- --------------------------------------------------------

--
-- Table structure for table tbl_users
--

CREATE TABLE tbl_users (
  id int(11) NOT NULL,
  fname varchar(191) NOT NULL,
  lname varchar(191) NOT NULL,
  nicename varchar(191) NOT NULL,
  email varchar(191) NOT NULL,
  password varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table tbl_users
--

INSERT INTO tbl_users (id, fname, lname, nicename, email, password) VALUES
(1, 'Ahsan', 'mirza', 'mirza', 'ahsan123@gmail.com', '123456'),
(2, 'user', 'host', 'userhost', 'user@host.com', 'user123'),
(3, 'user', 'renter', 'userrenter', 'user@renter.com', 'renter123');

-- --------------------------------------------------------

--
-- Table structure for table tbl_user_roles
--

CREATE TABLE tbl_user_roles (
  user_id int(11) NOT NULL,
  role_id int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table tbl_user_roles
--

INSERT INTO tbl_user_roles (user_id, role_id) VALUES
(1, 1),
(2, 2),
(3, 3),
(2, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table tbl_cities
--
ALTER TABLE tbl_cities
  ADD PRIMARY KEY (id),
  ADD KEY city_provence_id_foreign_key (province_id);

--
-- Indexes for table tbl_countries
--
ALTER TABLE tbl_countries
  ADD PRIMARY KEY (id);

--
-- Indexes for table tbl_properties
--
ALTER TABLE tbl_properties
  ADD PRIMARY KEY (id);

--
-- Indexes for table tbl_property_addresses
--
ALTER TABLE tbl_property_addresses
  ADD PRIMARY KEY (id);

--
-- Indexes for table tbl_provinces
--
ALTER TABLE tbl_provinces
  ADD PRIMARY KEY (id),
  ADD KEY provencies_country_id_foreign_key (country_id);

--
-- Indexes for table tbl_roles
--
ALTER TABLE tbl_roles
  ADD PRIMARY KEY (id);

--
-- Indexes for table tbl_users
--
ALTER TABLE tbl_users
  ADD PRIMARY KEY (id);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table tbl_cities
--
ALTER TABLE tbl_cities
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table tbl_countries
--
ALTER TABLE tbl_countries
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table tbl_properties
--
ALTER TABLE tbl_properties
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table tbl_property_addresses
--
ALTER TABLE tbl_property_addresses
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table tbl_provinces
--
ALTER TABLE tbl_provinces
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table tbl_roles
--
ALTER TABLE tbl_roles
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table tbl_users
--
ALTER TABLE tbl_users
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table tbl_cities
--
ALTER TABLE tbl_cities
  ADD CONSTRAINT city_provence_id_foreign_key FOREIGN KEY (province_id) REFERENCES tbl_provinces (id) ON DELETE CASCADE;

--
-- Constraints for table tbl_provinces
--
ALTER TABLE tbl_provinces
  ADD CONSTRAINT provencies_country_id_foreign_key FOREIGN KEY (country_id) REFERENCES tbl_countries (id) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;