-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2019 at 01:50 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `polygonproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `id_sepeda` int(50) NOT NULL,
  `jumlah` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id_cart`, `email`, `id_sepeda`, `jumlah`) VALUES
(20, 'elsha@gmail.com', 9, 2),
(21, 'elsha@gmail.com', 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `sepeda`
--

CREATE TABLE `sepeda` (
  `id_sepeda` int(50) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `harga` int(200) NOT NULL,
  `color` varchar(20) NOT NULL,
  `size` varchar(20) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `Frame` varchar(50) NOT NULL,
  `Fork` varchar(50) NOT NULL,
  `Shifter` varchar(50) NOT NULL,
  `Pedal` varchar(50) NOT NULL,
  `kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sepeda`
--

INSERT INTO `sepeda` (`id_sepeda`, `nama`, `harga`, `color`, `size`, `description`, `Frame`, `Fork`, `Shifter`, `Pedal`, `kategori`) VALUES
(1, 'RELIC JR 26', 2800000, 'Black', 'Medium', 'Tujuan Polygon yang utama adalah menciptakan sepeda untuk semua orang, termasuk membuat sepeda yang ringan dan aman untuk rider muda. Polygon Youth didesain dengan geometri untuk ukuran rider yang lebih kecil dengan parts yang berkualitas tinggi agar sesuai digunakan untuk rider muda. Seri Polygon Youth ditujukkan untuk setiap rider muda untuk merasakan pengalaman bersepeda yang nyaman dan sepeda yang sangat menyenangkan digunakan untuk petualangan mereka!', 'AL6 RIGID FRAME, 10X135MM, IS MOUNT', 'SR SUNTOUR XCT SUSPENSION FORK, TRAVEL 80MM', 'SHIMANO TOURNEY ST-TX800', 'PLASTIC PEDAL', 'junior'),
(2, 'RELIC24', 2550000, 'Grey', 'Medium', 'Tujuan Polygon yang utama adalah menciptakan sepeda untuk semua orang, termasuk membuat sepeda yang ringan dan aman untuk rider muda. Polygon Youth didesain dengan geometri untuk ukuran rider yang lebih kecil dengan parts yang berkualitas tinggi agar sesuai digunakan untuk rider muda. Seri Polygon Youth ditujukkan untuk setiap rider muda untuk merasakan pengalaman bersepeda yang nyaman dan sepeda yang sangat menyenangkan digunakan untuk petualangan mereka!', 'AL6 ALLOY FRAME', 'ZOOM HL SUSPENSION FORK 60MM', 'SHIMANO SL-RS45', 'PLASTIC PEDALS', 'junior'),
(3, 'RELIC20', 2250000, 'BLUE', 'Medium', 'Tujuan Polygon yang utama adalah menciptakan sepeda untuk semua orang, termasuk membuat sepeda yang ringan dan aman untuk rider muda. Polygon Youth didesain dengan geometri untuk ukuran rider yang lebih kecil dengan parts yang berkualitas tinggi agar sesuai digunakan untuk rider muda. Seri Polygon Youth ditujukkan untuk setiap rider muda untuk merasakan pengalaman bersepeda yang nyaman dan sepeda yang sangat menyenangkan digunakan untuk petualangan mereka!', 'AL6 ALLOY FRAME', 'ZOOM SUSPENSION FORK 40MM', 'SHIMANO TOURNEY SLRS356RSPL', 'PLASTIC PEDALS', 'junior'),
(4, 'HELIOS LT9X', 73000000, 'BLACK', '46', 'Road performance bike built with a UCI approved ACX frame that is astonishingly responsive, smooth, and fast', 'ACX PERFORMANCE ROAD, 130MM O.L.D., INTERNAL ROUTE', 'ACX PERFORMANCE ROAD, CARBON TAPER STEERER', 'SHIMANO DURA ACE Di2 ST-R9150', '-', 'road'),
(5, 'BEND FXNEW', 10450000, 'CHARCOAL', '50', 'Bend FX4 sepeda Urban Sport, yang didesain dengan performa terbaik untuk kecepatan dan kenyamanan di perkotaan. Menggunakan roda ukuran 700C untuk akselerasi dan pedaling yang lebih efektif. Dirancang secara khusus dengan menggunakan flatbar, membuat posisi bersepeda lebih tegak, santai dan nyaman. Dilengkapi groupset 20 speed dengan performa terbaik di kelasnya dan Hydraulic disc brakes untuk performa pengereman yang lebih baik. Didesain dengan performa road bike dengan posisi yang lebih nyaman untuk bersepeda jarak jauh dalam kota.', 'URBAN SPORT ALX W/ FLATMOUNT, FENDER READY', 'URBAN SPORT ALX W/ E-THRU & FLATMOUNT, FENDER READ', 'SHIMANO TIAGRA SL-4700 2X10 SPEED', 'ALLOY BODY & CAGE', 'road'),
(6, 'DEVINE R7', 17250000, 'BLACK', '47', 'DIVINE adalah seri sepeda balap pertama perempuan dari Polygon yang didesain dengan geometri yang dirancang secara khusus sesuai dengan anatomi tubuh perempuan Asia untuk performa bersepeda yang maksimal dan nyaman. Dilengkapi dengan komponen terbaik untuk mengakomodasi kebutuhan berkendara perempuan Asia – mulai perempuan yang baru mulai bersepeda hingga perempuan yang ingin meningkatkan performa bersepeda mereka. Dropbar dipilih dengan ukuran yang menyesuaikan ukuran bahu perempuan Asia dengan stem yang lebih pendek untuk handling dan kontrol yang maksimal. Standover yang lebih pendek untuk naik turun sepeda yang lebih aman dan nyaman. Performa Divine dimaksimalkan dengan groupset Shimano 105, dengan internal cable routing tampilan sepeda menjadi lebih menawan dan tubeless ready wheelset dihadirkan untuk kemudahan konversi wheel pilihan pengguna. Kini, perempuan Indonesia dapat mendapatkan pengalaman bersepeda yang berbeda!', 'ACX PERFORMANCE ROAD, 130MM O.L.D., INTERNAL ROUTE', 'ACX PERFORMANCE ROAD, ALLOY TAPER STEERER', 'SHIMANO 105 ST-R7000', '-', 'road'),
(7, 'STRATTOS S7', 17250000, 'BLACK ORANGE RED', '51', 'Strattos S7 menggunakan frame ACX carbon yang hadir dengan desain terbaru. Dirancang dengan geometri road bike yang dirancang untuk menghadirkan performa kecepatan maksimal. Mengadaptasi tapered carbon fork yang ringan dan kuat, internal cable untuk tampilan yang lebih rapi. Dilengkapi fitur tubeless ready, dimana pesepeda memungkinkan mengadaptasi ban tubeless yang dirancang dengan tidak menggunakan ban dalam, untuk efisiensi, tidak mudah bocor sehingga mendapatkan traksi yang maksimal. Strattos S7, boost your speed!', 'ACX PERFORMANCE ROAD, 130MM O.L.D., INTERNAL ROUTE', 'ACX PERFORMANCE ROAD, ALLOY TAPER STEERER', 'SHIMANO 105 ST-R7000', '-', 'road'),
(8, 'RAZOR ELITE', 7350000, 'CHARCOAL', 'PRO', 'Polygon Razor Elite merupakan sepeda BMX yang dirancang dengan akselerasi dan kecepatan tinggi, cocok untuk pesepeda BMX profesional dan penghobi. Dirancang dengan frame alloy AL6 alloy yang sangat ringan dan responsif dan dengan fork berbahan carbon BOX. Razor tersedia untuk ukuran frame Pro dan Pro XL untuk mengakomodasi dan menyesuaikan tinggi pengendara untuk berkompetisi di kompetisi lokal ataupun acara berstandar UCI (Union Cycliste Internationale).', 'AL6, BMX RACE, 110 O.L.D.', 'BOX XL 20-MIL, CARBON', '-', 'PLASTIC PEDAL', 'mountain'),
(9, 'TRID ZZ', 19900000, 'BLACK', '13', 'Polygon Trid ZZ adalah sepeda slopestyle terlahir dari riset mendalam selama beberapa tahun untuk menciptakan sepeda full suspension dirt jump yang kompetitif di level dunia sekelas FMB World Tour. Diciptakan melalui riset bersama pro-rider dunia, Sam Reynolds dan Kurt Sorge yang teruji memenangkan kompetisi dunia. Trid ZZ dirancang untuk melakukan lompatan besar dan trik saat di udara. Dirancang dengan frame berbahan alloy ALX yang kokoh, 69-degree tapered headtube dengan reach 426 mm serta tinggi BB 331 mm. Komponen yang mumpuni untuk digunakan untuk melakukan berbagai trik. Hadir dengan fork RockShox Pike DJ bersuspensi 100mm dan Rockshox Monarch pada bagian rear shock, drive train seri SRAM GX DH 7 speed dan hydraulic disc brakes dari Sram. Bagi setiap pecinta dunia dirt jump yangmenginginkan sepeda slope style bersuspensi dan frame yang kokoh, Trid ZZ akan menjadi sepeda terbaikmu.', 'AL6 SLOPE STYLE, 100MM TRAVEL, POSTMOUNT 160MM, -', 'SRAM GX DH X-ACTUATION', 'SRAM GX DH X-ACTUATION', 'FLAT PEDAL NYLON COMPOSITE', 'mountain'),
(10, 'MONARCH M5', 2250000, 'BLACK', '16', 'Seperti seorang raja, Polygon Sepeda Monarch tidak pernah berhenti menunjukkan keunggulannya sebagai salah satu sepeda terlaris dalam kategori sepeda gunung XC Sport. Kini telah hadir edisi terbaru yaitu sepeda Polygon Sepeda Monarch M5. Dalam edisi ini sepeda Monarch 5 tersedia dalam ukuran frame 16” dengan ban berdiameter 26” yang pas digunakan oleh remaja hingga dewasa. Cocok sebagai teman dalam segala macam aktivitas, seperti berolahraga, tamasya, hingga berpetualang lintas alam. Dengan harga ekonomis, rasakan pengalaman bersepeda yang tak terlupakan bersama Polygon Sepeda Monarch M5.', 'AL6 ALLOY FRAME', 'SUNTOUR SF18 XCE', 'SHIMANO ST-EF41', 'PLASTIC', 'mountain'),
(11, 'RAYZ THREE', 5500000, 'BLACK', '16', 'Sepeda gunung serbaguna yang akan menemani mobilitas anda mulai dari kantor hingga bersepeda santai di weekend. Dirancang dengan frame alloy AL6 yang ringan dan kuat, serta geometri yang modern untuk kenyamanan optimum. Hadir dengan roda berukuran 27,5” untuk traksi lebih baik, dilengkapi dengan rearshock air suspension untuk meredam benturan lebih baik dan tubing seat tube yang lebih kokoh. Rayz 3 menjadi teman yang menyenangkan untuk bersepeda sehari-hari dan setiap aktivitas sport Anda.', 'AL6 ALLOY DUAL SUSPENSION FRAME', 'SUNTOUR SF16-XCM-DS 27.5, TRAVEL 100', 'SHIMANO SLM310L', 'PLASTIC FLAT PEDAL', 'mountain'),
(12, 'CLEO 4', 3950000, 'CREAM', '14', 'Cleo 2 dirancang khusus sebagai sepeda komuter khusus wanita yang cocok untuk medan perkotaan hingga medan off road ringan. Didesain khusus dengan geometri sepeda gunung, Cleo 2 menggunakan frame alloy yang kuat dan ringan, roda berukuran 27.5?, posisi duduk yang lebih tegak dan nyaman. Cleo 2 diciptakan untuk wanita yang ingin berpetualang lebih jauh.', 'ALUTECH XC SPORT 27.5”', 'SUNTOUR XCM, 120MM (27.5”)', 'SHIMANO ALTUS SL-M310', 'FLAT PEDAL NYLON COMPOSITE', 'mountain'),
(13, 'CASCADE 4', 3300000, 'BLACK GREEN', 'SMALL', 'Cascade 4, sepeda gunung serbaguna yang akan menemani mobilitas anda mulai dari kantor hingga bersepeda santai di weekend. Dirancang dengan frame alloy AL6 yang ringan dan kuat, serta geometri yang modern untuk kenyamanan optimum. Hadir dengan roda berukuran 27,5” untuk traksi lebih baik, travel bersuspensi 100 mm untuk meredam benturan lebih baik dan disc brake yang akan meningkatkan kontrol sepeda lebih optimum.Cascade 4 menjadi teman yang menyenangkan untuk bersepeda sehari-hari dan setiap aktivitas sport Anda.', 'AL6 XC SPORT', 'SUNTOUR XCM 100MM TRAVEL', 'SHIMANO ST-TX800 3X8 SPEED', 'ALLOY CAGE W/ REFLECTOR', 'mountain'),
(14, 'PREMIER 5', 4500000, 'BLACK ORANGE', '16', 'Premier 5 dirancang menjadi sepeda gunung serbaguna untuk pengendara yang membutuhkan sepeda yang menunjang rutinitas bersepeda gunung sehari-hari atau untuk off road ringan di akhir pekan. Dirancang dengan frame alloy AL6 yang ringan dengan daya tahan prima serta geometri modern untuk bersepeda lebih nyaman. Hadir dengan Wheel Fit Size System, dimana ukuran roda diperhitungkan secara khusus mengikuti ukuran frame sepeda dan pengguna untuk efisiensi yang optimal. Hadir dengan dua pilihan yakni frame ukuran S, M, L dengan roda 27,5” dan frame ukuran L dan XL untuk roda berukuran 29”. Seri Premier akan membuat Anda tetap antusias bersepeda di sepajang tahun!', 'ALUTECH XC SPORT 27.5” & 29”', 'SUNTOUR XCM-HLO, 120MM (27.5”) / 100MM (29”) TRAVE', 'SHIMANO ALTUS SL-M2000', '-', 'mountain'),
(15, 'IMPRESSION AX DISK', 6250000, 'GREY', '17', 'Polygon Impression didesain untuk Anda yang ingin menghabiskan waktu dengan bersepeda bersama teman ataupun pasangan. Didesain dengan alloy frame, dan posisi duduk yang nyaman, dan roda berukuran 27,5?. Polygon Impression, menjadi pilihan yang sempurna untuk riders yang ingin merasakan sensasi bersepeda yang berbeda bersama orang terkasih.', 'AL6 TANDEM, 10X135MM', 'HI-TEN STEEL RIGID FORK', 'SHIMANO ST-TX800-8R', 'PLASTIC PEDAL', 'urban'),
(16, 'URBANO I3', 4600000, 'CREAM', '11', 'Polygon Urbano I3 hadir dengan design dan varian warna terbaru, cocok untuk Riders yang ingin menjelajahi ibukota dengan posisi berkendara yang lebih tegak dengan kenyamanan yang maksimal dilengkapi dengan fender dan rear cargo rack untuk memudahkan mobilitas keseharian Riders.', '6061 ALLOY FRAME', 'HI-TENSILE FORK', 'SHIMANO SL-3S41E 3-SPEED, NEXUS', 'FOLDABLE PEDAL', 'urban'),
(17, 'ZENITH TOWN 3', 4900000, 'BLACK', 'SMALL', 'Zenith hadir dengan gaya retro yang stylish dengan desain frame yang dirancang secara khusus untuk kemudahan berkendara dan handling lebih stabil. Sesuai untuk pesepeda yang menginginkan sepeda yang cocok untuk berkeliling kota. Menggunakan frame berbahan alloy yang dirancang untuk posisi bersepeda yang lebih tegak, grips dan sadel dilapisi kulit vintage, dan roda dengan gaya retro. Sepeda yang teringan di kelasnya, dan Shimano Nexus 3 speed inetrnal Hub, Seri Zenith town yang menawarkan kenyamanan, stylish dan sesuai dengan gaya hidup perkotaan.', 'AL6 COMMUTER NEXUS', 'HI-TEN STEEL RIGID FORK', 'SHIMANO NEXUS SL-3S41E', 'VP COMPONENT, VP-191, ALLOY', 'urban'),
(18, 'SIERRA DELUXE SPORT', 4300000, 'BLACK', '48', 'Polygon Sierra Deluxe Sport merupakan sepeda dengan style khas Eropa yang nyaman, menggunakan frame berbahan AL6 yang ringan, posisi berkendara yang tegak. Sepeda klasik dengan full fender, rear rack, chain guards, dan lampu depan dan belakang untuk keamanan dan kenyamanan digunakan saat melewati berbagai medan dan cuaca. Sierra Deluxe Sport Gent dan Lady , kebebasan hanya dapat dirasakan dengan bersepeda!', 'AL6 CITY, 10X135MM', 'SR SUNTOUR NEX, TRAVEL 63MM, STANDARD STEERER', 'SHIMANO TOURNEY ST-EF41', 'FEIMIN FP-980, ALLOY', 'urban'),
(19, 'PATH 9', 9575000, 'BLACK', '43', ' Path 9 merupakan sepeda komuter tipe speed utility yang mengkombinasikan kecepatan, kelincahan, dan gaya sepeda perkotaan. Merupakan “Ultimate Commuter Bike”, didesain dengan mengkombinasikan efisiensi dari road bike dan geometri sepeda commuter. Path 9 menggunakan AL6 alloy speed utility frame yang ringan dan kuat, Shimano XT/LX drive train, dilengkapi dengan hydraulic disc brakes untuk performa pengereman yang lebih optimal, fender untuk melindungi saat kondisi hujan, rear carrier untuk mengakomodasi perlengkapan Anda, serta lampu depan dan belakang untuk menunjang kegiatan bersepeda Anda. Dipadukan dengan ban 700x35c yang gesit untuk kenyamanan ekstra. Path 9, sepeda tepat untuk para komuter yang cerdas!', 'AL6 PAVEMENT, 10X135MM O.L.D., IS MOUNT, INTERNAL ', 'ALUTECH ALLOY RIGID FORK', 'SHIMANO DEORE LX SL-T670', 'FEIMIN FP-980, ALLOY', 'urban'),
(20, 'HEIST 2', 4250000, '41', 'RED', 'Heist 2 adalah sepeda hybrid yang menawarkan kombinasi sempurna dari sepeda balap dan sepeda gunung. Sepeda hybrid yang cepat, kuat, nyaman dan ideal untuk digunakan bersepeda di perkotaan. Pengendara urban dengan aktivitas commuting yang rutin patut mencoba model ini. Perpaduan material frame ALX yang ringan dengan fork Suntour NCX trekking, Shimano Deore 30 speed drive train, hydraulic disc brakes untuk performa pengereman lebih maksimal. Dengan raise handlebar, Heist 2 menghasilkan posisi duduk yang nyaman. Polygon Heist 2 juga dilengkapi ban 700c untuk akselerasi lebih cepat dan nyaman.', 'AL6 HYBRID, 10X135MM, IS MOUNT', 'SR SUNTOUR NEX, TRAVEL 63MM, STANDARD STEERER', 'SHIMANO ALTUS SL-M310', 'ALLOY STANDARD PEDAL', 'urban');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(30) NOT NULL,
  `firstname` varchar(20) DEFAULT NULL,
  `lastname` varchar(20) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `firstname`, `lastname`, `username`, `password`) VALUES
('elsha@gmail.com', 'Elsha', 'N Anindya', 'elsha', 'elsha');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indexes for table `sepeda`
--
ALTER TABLE `sepeda`
  ADD PRIMARY KEY (`id_sepeda`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `sepeda`
--
ALTER TABLE `sepeda`
  MODIFY `id_sepeda` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
