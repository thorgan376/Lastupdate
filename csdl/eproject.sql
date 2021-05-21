-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 20, 2021 lúc 11:55 PM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET AUTOCOMMIT = 0;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `eproject`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `PRODUCT_ID` char(5) NOT NULL,
  `PRODUCT_NAME` varchar(200) DEFAULT NULL,
  `PRODUCTIMG` varchar(100) DEFAULT NULL,
  `para1` varchar(50) DEFAULT NULL,
  `para2` varchar(50) DEFAULT NULL,
  `para3` varchar(50) DEFAULT NULL,
  `para4` varchar(50) DEFAULT NULL,
  `para5` varchar(50) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `infomation` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`PRODUCT_ID`, `PRODUCT_NAME`, `PRODUCTIMG`, `para1`, `para2`, `para3`, `para4`, `para5`, `price`, `infomation`) VALUES
('a1', 'Toshiba Inverter RAS-H', './image/image/topselling5.jpg', '350x586x435', '130 ~ 310 (W)', 'Chinese', '', 'fanid', '399.000 VND', 'Mezzanine fan Electromechanical QDM400 will be an effective and economical solution in hot summer days. This product will make your home space cool and comfortable. Mezzanine fan Electromechanical QDM400 can easily adjust the height by turning the brake screw to raise and lower the retraction pipe and the direction of rotation with the retraction button. In addition, you can arbitrarily adjust the angle of the fan head deflector, allowing cool breeze to spread throughout the room. With its luxurious design and beautiful gray color, the QDM400 Electromechanical Fan Mezzanine Fan suits all modern living spaces and styles. Extremely durable motor and flame protection provide long-term service value for the user. The 3-speed keypad is easy to choose according to your needs.'),
('a2', 'SenKo BXK45', './image/image/fan2.jpg', '350x586x434', '130 ~ 310 (W)', 'China', '', 'fanid', '453.000 VND', 'Mezzanine fan Electromechanical QDM400 will be an effective and economical solution in hot summer days. This product will make your home space cool and comfortable. Mezzanine fan Electromechanical QDM400 can easily adjust the height by turning the brake screw to raise and lower the retraction pipe and the direction of rotation with the retraction button. In addition, you can arbitrarily adjust the angle of the fan head deflector, allowing cool breeze to spread throughout the room. With its luxurious design and beautiful gray color, the QDM400 Electromechanical Fan Mezzanine Fan suits all modern living spaces and styles. Extremely durable motor and flame protection provide long-term service value for the user. The 3-speed keypad is easy to choose according to your needs.'),
('a3', 'SenKo BX1212', './image/image/shopping.jpg', '350x586x435', '128 ~ 320 (W)', 'China', '', 'fanid', '457.000 VND', 'Mezzanine fan Electromechanical QDM400 will be an effective and economical solution in hot summer days. This product will make your home space cool and comfortable. Mezzanine fan Electromechanical QDM400 can easily adjust the height by turning the brake screw to raise and lower the retraction pipe and the direction of rotation with the retraction button. In addition, you can arbitrarily adjust the angle of the fan head deflector, allowing cool breeze to spread throughout the room. With its luxurious design and beautiful gray color, the QDM400 Electromechanical Fan Mezzanine Fan suits all modern living spaces and styles. Extremely durable motor and flame protection provide long-term service value for the user. The 3-speed keypad is easy to choose according to your needs.'),
('a4', 'Tiross TS-952', './image/image/download.jpg', '350x586x435', '130 ~ 310 (W)', 'Campuchia', '', 'fanid', '403.000 VND', 'Mezzanine fan Electromechanical QDM400 will be an effective and economical solution in hot summer days. This product will make your home space cool and comfortable. Mezzanine fan Electromechanical QDM400 can easily adjust the height by turning the brake screw to raise and lower the retraction pipe and the direction of rotation with the retraction button. In addition, you can arbitrarily adjust the angle of the fan head deflector, allowing cool breeze to spread throughout the room. With its luxurious design and beautiful gray color, the QDM400 Electromechanical Fan Mezzanine Fan suits all modern living spaces and styles. Extremely durable motor and flame protection provide long-term service value for the user. The 3-speed keypad is easy to choose according to your needs.'),
('a5', 'Tiross HK-536', './image/image/images.jpg', '350x571x435', '130 ~ 300 (W)', 'Campuchia', '', 'fanid', '399.000 VND', 'Mezzanine fan Electromechanical QDM400 will be an effective and economical solution in hot summer days. This product will make your home space cool and comfortable. Mezzanine fan Electromechanical QDM400 can easily adjust the height by turning the brake screw to raise and lower the retraction pipe and the direction of rotation with the retraction button. In addition, you can arbitrarily adjust the angle of the fan head deflector, allowing cool breeze to spread throughout the room. With its luxurious design and beautiful gray color, the QDM400 Electromechanical Fan Mezzanine Fan suits all modern living spaces and styles. Extremely durable motor and flame protection provide long-term service value for the user. The 3-speed keypad is easy to choose according to your needs.'),
('b1', 'LG DUALCOOL Inverter ', './image/image/topselling2.jpg', '857x348x190', '720x500x230', '2,696 (W)', 'Korean', 'airconditionerid', '13.090.000 VND', 'Dual Inverter compressors continuously adjust the speed of the compressor to maintain the desired temperature. What is more, the Dual Inverter Compressor â„¢ with a wider operating frequency range provides greater savings than conventional compressors. Easy and convenient placement when cleaning with the EZ slide filter. Moreover, the elegant large temperature display on the cold surface makes it easy for the viewer to monitor the set temperature and air quality in the room.'),
('b2', 'LG V10ENW1', './image/image/air-conditioner.jpg', '845x398x194', '854x358x188', '2,579 (W)', 'Korean', 'airconditionerid', '9.590.000 VND', 'Dual Inverter compressors continuously adjust the speed of the compressor to maintain the desired temperature. What is more, the Dual Inverter Compressor â„¢ with a wider operating frequency range provides greater savings than conventional compressors. Easy and convenient placement when cleaning with the EZ slide filter. Moreover, the elegant large temperature display on the cold surface makes it easy for the viewer to monitor the set temperature and air quality in the room.'),
('b3', 'Toshiba RAS-H10D', './image/image/airconditioner2.jpg', '857x348x190', '720 X 500 X 230', '2,696 (W)', 'Japan', 'airconditionerid', '11.045.000 VND', 'Dual Inverter compressors continuously adjust the speed of the compressor to maintain the desired temperature. What is more, the Dual Inverter Compressor â„¢ with a wider operating frequency range provides greater savings than conventional compressors. Easy and convenient placement when cleaning with the EZ slide filter. Moreover, the elegant large temperature display on the cold surface makes it easy for the viewer to monitor the set temperature and air quality in the room.'),
('b4', 'Daikin FTF25UV1V', './image/image/air3.jpg', '861x355x187', '721 X 504 X 228', '2,735 (W)', 'Japan', 'airconditionerid', '11.045.000 VND', 'Dual Inverter compressors continuously adjust the speed of the compressor to maintain the desired temperature. What is more, the Dual Inverter Compressor â„¢ with a wider operating frequency range provides greater savings than conventional compressors. Easy and convenient placement when cleaning with the EZ slide filter. Moreover, the elegant large temperature display on the cold surface makes it easy for the viewer to monitor the set temperature and air quality in the room.'),
('b5', 'LG B10END Inverter', './image/image/air4.jpg', '857x348x190', '720 X 500 X 230', '2,696 (W)', 'Japan', 'airconditionerid', '11.045.000 VND', 'Dual Inverter compressors continuously adjust the speed of the compressor to maintain the desired temperature. What is more, the Dual Inverter Compressor â„¢ with a wider operating frequency range provides greater savings than conventional compressors. Easy and convenient placement when cleaning with the EZ slide filter. Moreover, the elegant large temperature display on the cold surface makes it easy for the viewer to monitor the set temperature and air quality in the room.'),
('c1', 'Smart light C-life', './image/image/lightbulb1.jpg', '80 (W)', '2.150 Hours', 'China', '', 'lightbulbid', '250.000 VND', 'C-Life is General Electric is latest generation of bulbs, designed exclusively for the Google Assistant virtual assistant, certified Made for Google. GE C-Life bulbs use Bluetooth mesh networks, do not use Wifi, so the use of many bulbs does not affect the current Wifi network. The actions to turn on, turn off lights, timer, and schedule are all done on the Google Home app. If connected to a C-Reach Smart Bridge, Smart Switch, or Smart Plug device (sold separately), the C-Life bulb can connect to the Alexa virtual assistant for voice commands.'),
('c2', 'LED light FG37', './image/image/lightbulb2.jpg', '82 (W)', '20.140 Hours', 'Japan', '', 'lightbulbid', '120.000 VND', 'Led bulb with power of 82w with white light. Easy to install with very popular E27 lamp holder. Aluminum heatsink, for increased gloss life. Led bulb life up to 20140h. This Led Bulb is used to install in warehouses, factories, indoors with a large lighting area or used for photographic lights, soft boxes to give the best light quality. Led bulbs have 4 types with capacities of 50w, 80w, 100w, 150w with white light, high power, easy to install with very popular E27 lamp holders.'),
('c3', 'LED light CM39', './image/image/lightbulb3.jpg', '100 (W)', '24.000 Hours', 'China', '', 'lightbulbid', '130.000 VND', 'Led bulb with power of 82w with white light. Easy to install with very popular E27 lamp holder. Aluminum heatsink, for increased gloss life. Life expectancy up to 24000 hours. This Led Bulb is used to install in warehouses, factories, indoors with a large lighting area or used for photographic lights, soft boxes to give the best light quality. Led bulbs have 4 types with capacities of 50w, 80w, 100w, 150w with white light, high power, easy to install with very popular E27 lamp holders.'),
('c4', 'MAXBEN LED KJ17', './image/image/lightbulb4.jpg', '80 (W)', '20.240 Hours', 'China', '', 'lightbulbid', '150.000 VND', 'Led bulb with power of 82w with white light. Easy to install with very popular E27 lamp holder. Aluminum heatsink, for increased gloss life. Life expectancy up to 24000 hours. This Led Bulb is used to install in warehouses, factories, indoors with a large lighting area or used for photographic lights, soft boxes to give the best light quality. Led bulbs have 4 types with capacities of 50w, 80w, 100w, 150w with white light, high power, easy to install with very popular E27 lamp holders.'),
('c5', 'YTA-95Z1', './image/image/lightbulb5.jpg', '90 (W)', '20.140 Hours', 'China', '', 'lightbulbid', '200.000 VND', 'Led bulb with power of 82w with white light. Easy to install with very popular E27 lamp holder. Aluminum heatsink, for increased gloss life. Life expectancy up to 24000 hours. This Led Bulb is used to install in warehouses, factories, indoors with a large lighting area or used for photographic lights, soft boxes to give the best light quality. Led bulbs have 4 types with capacities of 50w, 80w, 100w, 150w with white light, high power, easy to install with very popular E27 lamp holders.'),
('d1', 'Panasonic Countertop', './image/image/topselling4.jpg', '20 (L)', '439.5x338.2x256.2', '800 (W)', 'Japan', 'microwaveid', '1.147.000 VND', 'Oven type: Microwave. Capacity: 20L. Capacity: 800W. Function: cooking, reheating and thawing. Control panel: Buttons. Size: 439.5 x 338.2 x 256.2mm Compact design with subtle and modern lines, not only helps to save maximum room space but also adorns the look of your home. In addition, the oven door is also designed with an easy-to-operate button for easy and quick use.'),
('d2', 'T240WHT Microwave', './image/image/topselling3.jpg', '20.5 (L)', '435.5x338.3x245.9', '810 (W)', 'China', 'microwaveid', '993.000 VND', 'Oven type: Microwave. Capacity: 20.5L. Wattage: 810W. Function: cooking, reheating and thawing. Control panel: Buttons. Size: 435.5 x 338.3 x 245.9mm Compact design with subtle and modern lines, not only helps to save maximum room space but also adorns the look of your home. In addition, the oven door is also designed with an easy-to-operate button for easy and quick use.'),
('d3', 'Panasonic MY435', './image/image/microwave3.jpg', '21 (L)', '449.5x339.2x257.2', '1000 (W)', 'Japan', '', '3.090.000 VND', 'Oven type: Microwave. Capacity: 21L. Capacity: 1000W. Function: cooking, reheating and thawing. Control panel: Buttons. Size: 439.5 x 338.2 x 256.2mm Compact design with subtle and modern lines, not only helps to save maximum room space but also adorns the look of your home. In addition, the oven door is also designed with an easy-to-operate button for easy and quick use.'),
('d4', 'LG GF316', './image/image/microwave4.jpg', '22 (L)', '440.5x341.2x256.5', '1050 (W)', 'Korean', '', '4.000.000 VND', 'Oven type: Microwave. Capacity: 20L. Capacity: 800W. Function: cooking, reheating and thawing. Control panel: Buttons. Size: 439.5 x 338.2 x 256.2mm Compact design with subtle and modern lines, not only helps to save maximum room space but also adorns the look of your home. In addition, the oven door is also designed with an easy-to-operate button for easy and quick use.'),
('d5', 'Toshiba TFM435', './image/image/microwave5.jpg', '20 (L)', '439.5x338.2x256.2', '810 (W)', 'Japan', '', '2.045.000 VND', 'Oven type: Microwave. Capacity: 20L. Capacity: 810W. Function: cooking, reheating and thawing. Control panel: Buttons. Size: 439.5 x 338.2 x 256.2mm Compact design with subtle and modern lines, not only helps to save maximum room space but also adorns the look of your home. In addition, the oven door is also designed with an easy-to-operate button for easy and quick use.'),
('e1', 'LG Smart Inverter (Black)', './image/image/topselling1.jpg', '209 (L)', '555x1,520x620', '1.300 (W)', 'Korean', 'fridgeid', '16.590.000 VND', 'Detailed Specifications Refrigerator Samsung Inverter 208 liters RT20HAR8DBU / SV Product characteristics, Usable capacity: 209 liters, Number of doors: 2 wings, Number of users: 2 - 3 people, Freezer capacity: 54 liters, Freezer capacity: 155 liters, Inverter technology: Inverter Refrigerator, Declared power consumption according to TCVN: ~ 31.2 kWh / day, Power saving mode: Digital Inverter Technology, Refrigeration technology: Multi-dimensional cooling, Antibacterial and deodorizing technology: Deodorizer activated carbon filter, Food preservation technology: Large vegetable compartment keeps Big Box moisture, Utilities: Large vegetable compartment, Inverter saves electricity, Cabinet type: Top freezer, Refrigerator door material: Mirror polish metal, Material of freezer tray: Tempered glass, Size - Weight: Height 1.520 mm - Width 620 mm - Depth 555 mm - Weight 50.5 kg, Place of production: Vietnam Origin: Korean,  Release date: 2020, Genuine warranty: 24 months, Brand: LG.'),
('e2', 'Samsung Inventer', './image/image/fridge2.jpg', '215 (L)', '565x1,532x620', '1.400 (W)', 'Korean', 'fridgeid', '24.590.000 VND', 'Detailed Specifications Refrigerator Samsung Inverter 208 liters RT20HAR8DBU / SV Product characteristics, Usable capacity: 209 liters, Number of doors: 2 wings, Number of users: 2 - 3 people, Freezer capacity: 54 liters, Freezer capacity: 155 liters, Inverter technology: Inverter Refrigerator, Declared power consumption according to TCVN: ~ 31.2 kWh / day, Power saving mode: Digital Inverter Technology, Refrigeration technology: Multi-dimensional cooling, Antibacterial and deodorizing technology: Deodorizer activated carbon filter, Food preservation technology: Large vegetable compartment keeps Big Box moisture, Utilities: Large vegetable compartment, Inverter saves electricity, Cabinet type: Top freezer, Refrigerator door material: Mirror polish metal, Material of freezer tray: Tempered glass, Size - Weight: Height 1.520 mm - Width 620 mm - Depth 555 mm - Weight 50.5 kg, Place of production: Vietnam Origin: Korean, Release date: 2020, Genuine warranty: 24 months, Brand: Samsung.'),
('e3', 'Toshiba KF316', './image/image/fridge3.jpg', '210 (L)', '555x1,520x620', '1.350 (W)', 'Japan', 'fridgeid', '21.590.000 VND', 'Detailed Specifications Refrigerator Samsung Inverter 208 liters RT20HAR8DBU / SV Product characteristics, Usable capacity: 209 liters, Number of doors: 2 wings, Number of users: 2 - 3 people, Freezer capacity: 54 liters, Freezer capacity: 155 liters, Inverter technology: Inverter Refrigerator, Declared power consumption according to TCVN: ~ 31.2 kWh / day, Power saving mode: Digital Inverter Technology, Refrigeration technology: Multi-dimensional cooling, Antibacterial and deodorizing technology: Deodorizer activated carbon filter, Food preservation technology: Large vegetable compartment keeps Big Box moisture, Utilities: Large vegetable compartment, Inverter saves electricity, Cabinet type: Top freezer, Refrigerator door material: Mirror polish metal, Material of freezer tray: Tempered glass, Size - Weight: Height 1.520 mm - Width 620 mm - Depth 555 mm - Weight 50.5 kg, Place of production: Vietnam Origin: Korean, Release date: 2020, Genuine warranty: 24 months, Brand: Toshiba.'),
('e4', 'Panasonic MD86', './image/image/fridge4.jpg', ' 211 (L)', ' 555x1,530x620', '1.400 (W)', 'Japan', 'fridgeid', '17.590.000 VND', 'Detailed Specifications Refrigerator Samsung Inverter 208 liters RT20HAR8DBU / SV Product characteristics, Usable capacity: 209 liters, Number of doors: 2 wings, Number of users: 2 - 3 people, Freezer capacity: 54 liters, Freezer capacity: 155 liters, Inverter technology: Inverter Refrigerator, Declared power consumption according to TCVN: ~ 31.2 kWh / day, Power saving mode: Digital Inverter Technology, Refrigeration technology: Multi-dimensional cooling, Antibacterial and deodorizing technology: Deodorizer activated carbon filter, Food preservation technology: Large vegetable compartment keeps Big Box moisture, Utilities: Large vegetable compartment, Inverter saves electricity, Cabinet type: Top freezer, Refrigerator door material: Mirror polish metal, Material of freezer tray: Tempered glass, Size - Weight: Height 1.520 mm - Width 620 mm - Depth 555 mm - Weight 50.5 kg, Place of production: Vietnam Origin: Korean, Release date: 2020, Genuine warranty: 24 months, Brand: Panasonic.'),
('e5', 'Toshiba JR435', './image/image/fridge5.jpg', '219 (L)', '567x1,540x630', '1.600 (W)', 'Japan', 'fridgeid', '26.590.000 VND', 'Detailed Specifications Refrigerator Samsung Inverter 208 liters RT20HAR8DBU / SV Product characteristics, Usable capacity: 209 liters, Number of doors: 2 wings, Number of users: 2 - 3 people, Freezer capacity: 54 liters, Freezer capacity: 155 liters, Inverter technology: Inverter Refrigerator, Declared power consumption according to TCVN: ~ 31.2 kWh / day, Power saving mode: Digital Inverter Technology, Refrigeration technology: Multi-dimensional cooling, Antibacterial and deodorizing technology: Deodorizer activated carbon filter, Food preservation technology: Large vegetable compartment keeps Big Box moisture, Utilities: Large vegetable compartment, Inverter saves electricity, Cabinet type: Top freezer, Refrigerator door material: Mirror polish metal, Material of freezer tray: Tempered glass, Size - Weight: Height 1.520 mm - Width 620 mm - Depth 555 mm - Weight 50.5 kg, Place of production: Vietnam Origin: Korean,  Release date: 2020, Genuine warranty: 24 months, Brand: LG.');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `customer_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `customer_id`, `createdate`) VALUES
('1', 'A45gjf', '2021-04-28 16:49:42');

-- --------------------------------------------------------

--
-- Table structure for table `cart_detail`
--

CREATE TABLE `cart_detail` (
  `id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL DEFAULT '1',
  `order_amount` int(11) NOT NULL,
  `total_product_price` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart_detail`
--

INSERT INTO `cart_detail` (`id`, `cart_id`, `product_id`, `order_amount`, `total_product_price`) VALUES
(1, 1, 1, 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `customer_id` varchar(50) NOT NULL,
  `customer_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL UNIQUE,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `phone_number` int(20) NOT NULL UNIQUE,
  `address` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`customer_id`, `customer_name`, `email`, `password`, `phone_number`, `address`) VALUES
('A45gjf', 'David', 'admin@gmail.com', '123', 3, '3');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `id_sp`, `image`) VALUES
(1, 1, './image/image/topselling1.jpg'),
(2, 1, './image/image/topselling1.jpg'),
(3, 2, './image/image/topselling2.jpg'),
(4, 2, './image/image/topselling2.jpg'),
(5, 3, './image/image/topselling3.jpg'),
(6, 3, './image/image/topselling3.jpg'),
(7, 4, './image/image/topselling4.jpg'),
(8, 4, './image/image/topselling4.jpg'),
(9, 5, './image/image/topselling5.jpg'),
(10, 5, './image/image/topselling5.jpg'),
(11, 6, './image/image/fan2.jpg'),
(12, 6, './image/image/fan2.jpg'),
(13, 7, './image/image/shopping.jpg'),
(14, 7, './image/image/shopping.jpg'),
(15, 8, './image/image/download.jpg'),
(16, 8, './image/image/download.jpg'),
(17, 9, './image/image/images.jpg'),
(18, 9, './image/image/images.jpg'),
(19, 10, './image/image/air-conditioner.jpg'),
(20, 10, './image/image/air-conditioner.jpg'),
(21, 11, './image/image/airconditioner2.jpg'),
(22, 11, './image/image/airconditioner2.jpg'),
(23, 12, './image/image/air3.jpg'),
(24, 12, './image/image/air3.jpg'),
(25, 13, './image/image/air4.jpg'),
(26, 13, './image/image/air4.jpg'),
(27, 14, './image/image/lightbulb1.jpg'),
(28, 14, './image/image/lightbulb1.jpg'),
(29, 15, './image/image/lightbulb2.jpg'),
(30, 15, './image/image/lightbulb2.jpg'),
(31, 16, './image/image/lightbulb3.jpg'),
(32, 16, './image/image/lightbulb3.jpg'),
(33, 17, './image/image/lightbulb4.jpg'),
(34, 17, './image/image/lightbulb4.jpg'),
(35, 18, './image/image/lightbulb5.jpg'),
(36, 18, './image/image/lightbulb5.jpg'),
(37, 19, './image/image/microwave3.jpg'),
(38, 19, './image/image/microwave3.jpg'),
(39, 20, './image/image/microwave4.jpg'),
(40, 20, './image/image/microwave4.jpg'),
(41, 21, './image/image/microwave5.jpg'),
(42, 21, './image/image/microwave5.jpg'),
(43, 22, './image/image/fridge2.jpg'),
(44, 22, './image/image/fridge2.jpg'),
(45, 23, './image/image/fridge3.jpg'),
(46, 23, './image/image/fridge3.jpg'),
(47, 24, './image/image/fridge4.jpg'),
(48, 24, './image/image/fridge4.jpg'),
(49, 25, './image/image/fridge5.jpg'),
(50, 25, './image/image/fridge5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `producer`
--

CREATE TABLE `producer` (
  `producer_id` int(11) NOT NULL,
  `producer_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL UNIQUE,
  `status` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `producer`
--

INSERT INTO `producer` (`producer_id`, `producer_name`, `status`) VALUES
(1, 'Toshiba', '1'),
(2, 'LG', '1'),
(3, 'Senko', '1'),
(4, 'Tiross', '1'),
(5, 'Daikin', '1'),
(6, 'Samsung', '1'),
(7, 'Panasonic', '1'),
(8, 'No brand', '1');

-- --------------------------------------------------------

--
-- Table structure for table `producttype`
--

CREATE TABLE `producttype` (
  `product_type_id` int(11) NOT NULL,
  `type_name` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL UNIQUE,
  `status` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `type` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL UNIQUE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `producttype`
--

INSERT INTO `producttype` (`product_type_id`, `type`, `type_name`, `status`) VALUES
(1,'a', 'Fan', '1'),
(2,'b', 'Air conditioner', '1'),
(3,'e', 'Fridge', '1'),
(4,'c', 'Light Bulb', '1'),
(5,'d', 'Microwave', '1');

-- --------------------------------------------------------

--
-- Table structure for table `product_admin`
--

CREATE TABLE `product_admin` (
  `productid` int(11) NOT NULL,
  `productname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL UNIQUE,
  `productorder` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `image` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `price` float(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `producttype` varchar(10) NOT NULL,
  `producer` int(11) NOT NULL,
  `status` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_admin`
--

INSERT INTO `product_admin` (`productid`, `productname`, `productorder`, `image`, `price`, `amount`, `producttype`, `producer`, `status`) VALUES
(5, 'Toshiba Inverter RAS-H', '1', './image/image/topselling5.jpg', 399000, 11, 'a', 1, '1'),
(6, 'SenKo BXK45', '2', './image/image/fan2.jpg', 453000, 11, 'a', 3, '1'),
(7, 'SenKo BX1212', '3', './image/image/shopping.jpg', 457000, 11, 'a', 3, '1'),
(8, 'Tiross TS-952 ', '4', './image/image/download.jpg', 403000, 11, 'a', 4, '1'),
(9, 'Tiross HK-536', '5', './image/image/images.jpg', 399000, 51, 'a', 4, '1'),
(2, 'LG DUALCOOL Inverter', '1', './image/image/topselling2.jpg', 13090000, 7, 'b', 2, '1'),
(10, 'LG V10ENW1', '2', './image/image/air-conditioner.jpg', 9590000, 14, 'b', 2, '1'),
(11, 'Toshiba RAS-H10D', '3', './image/image/airconditioner2.jpg', 11045000, 4, 'b', 1, '1'),
(12, 'Daikin FTF25UV1V', '4', './image/image/air3.jpg', 11045000, 4, 'b', 5, '1'),
(13, 'LG B10END Inverter', '5', './image/image/air4.jpg', 11045000, 13, 'b', 2, '1'),
(14, 'Smart light C-life', '1', './image/image/lightbulb1.jpg', 250000, 16, 'c', 8, '1'),
(15, 'LED light FG37', '2', './image/image/lightbulb2.jpg', 120000, 12, 'c', 8, '1'),
(16, 'LED light CM39', '3', './image/image/lightbulb3.jpg', 130000, 12, 'c', 8, '1'),
(17, 'MAXBEN LED KJ17', '4', './image/image/lightbulb4.jpg', 150000, 12, 'c', 8, '1'),
(18, 'YTA-95Z1', '5', './image/image/lightbulb5.jpg', 200000, 16, 'c', 8, '1'),
(4, 'Panasonic Countertop', '1', './image/image/topselling4.jpg', 1147000, 16, 'd', 7, '1'),
(3, 'T240WHT Microwave', '2', './image/image/topselling3.jpg', 993000, 16, 'd', 8, '1'),
(19, 'Panasonic MY435', '3', './image/image/microwave3.jpg', 3090000, 10, 'd', 7, '1'),
(20, 'LG GF316', '4', './image/image/microwave4.jpg', 4000000, 12, 'd', 2, '1'),
(21, 'Toshiba TFM435', '5', './image/image/microwave5.jpg', 2045000, 12, 'd', 1, '1'),
(1, 'LG Smart Inverter (Black)', '1', './image/image/topselling1.jpg', 16590000, 12, 'e', 2, '1'),
(22, 'Samsung Inventer', '2', './image/image/fridge2.jpg', 24590000, 13, 'e', 6, '1'),
(23, 'Toshiba KF316', '3', './image/image/fridge3.jpg', 21590000, 13, 'e', 1, '1'),
(24, 'Panasonic MD86', '4', './image/image/fridge4.jpg', 17590000, 13, 'e', 7, '1'),
(25, 'Toshiba JR435', '5', './image/image/fridge5.jpg', 26590000, 13, 'e', 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_title` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `news_image` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `status` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news_image`, `content`, `status`) VALUES
(1, 'New Product', 'Jet.jpg', 'A', '1'),
(2, 'Issue Prodcut', 'image001.png', 'B', '1'),
(3, 'Problem in finding product u are lookn for', 'image001_11.jpg', 'C', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_detail`
--
ALTER TABLE `cart_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `producer`
--
ALTER TABLE `producer`
  ADD PRIMARY KEY (`producer_id`);

--
-- Indexes for table `producttype`
--
ALTER TABLE `producttype`
  ADD PRIMARY KEY (`product_type_id`);

--
-- Indexes for table `product_admin`
--
ALTER TABLE `product_admin`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL UNIQUE AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `cart_detail`
--
ALTER TABLE `cart_detail`
  MODIFY `id` int(11) NOT NULL UNIQUE AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `producer`
--
ALTER TABLE `producer`
  MODIFY `producer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `producttype`
--
ALTER TABLE `producttype`
  MODIFY `product_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
