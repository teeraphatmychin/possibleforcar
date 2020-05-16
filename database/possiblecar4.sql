-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 19, 2019 at 01:57 AM
-- Server version: 5.7.26-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `possiblecar4`
--

-- --------------------------------------------------------
INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'toyota', '2020-05-16 17:10:56', '2020-05-16 17:10:56'),
(2, 'honda', '2020-05-16 17:11:10', '2020-05-16 17:11:10'),
(3, 'isuzu', '2020-05-16 17:37:07', '2020-05-16 17:37:07'),
(4, 'mitsubishi', '2020-05-16 17:37:16', '2020-05-16 17:37:16'),
(5, 'ford', '2020-05-16 17:37:23', '2020-05-16 17:37:23'),
(6, 'mazda', '2020-05-16 17:37:31', '2020-05-16 17:37:31'),
(7, 'mg', '2020-05-16 17:37:34', '2020-05-16 17:37:34'),
(8, 'nissan', '2020-05-16 17:37:38', '2020-05-16 17:37:38');


INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'toyota', '2020-05-16 17:34:08', '2020-05-16 17:34:08'),
(2, 'honda', '2020-05-16 17:34:14', '2020-05-16 17:34:14'),
(3, 'isuzu', '2020-05-16 17:35:54', '2020-05-16 17:35:54'),
(4, 'mitsubishi', '2020-05-16 17:36:09', '2020-05-16 17:36:09'),
(5, 'ford', '2020-05-16 17:36:14', '2020-05-16 17:36:14'),
(6, 'mazda', '2020-05-16 17:36:22', '2020-05-16 17:36:22'),
(7, 'mg', '2020-05-16 17:36:28', '2020-05-16 17:36:28'),
(8, 'nissan', '2020-05-16 17:36:34', '2020-05-16 17:36:34');
--
-- Table structure for table `ajax_cruds`
--

CREATE TABLE `ajax_cruds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `list_blogs`
--

CREATE TABLE `list_blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subject_blog` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_by_blog` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_blog` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `article_blog` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `list_cars`
--

CREATE TABLE `list_cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `year_model` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sum_price` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `engine` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` longtext COLLATE utf8_unicode_ci,
  `detail` longtext COLLATE utf8_unicode_ci,
  `status_car` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `list_cars`
--

INSERT INTO `list_cars` (`id`, `brand`, `model`, `year_model`, `price`, `sum_price`, `image`, `type`, `engine`, `title`, `detail`, `status_car`, `created_at`, `updated_at`) VALUES
(4, 'Suzuki', 'Swift', '2019', '499,000', NULL, '192768148.png', NULL, NULL, 'Suzuki Swift (ซูซูกิ สวิฟท์)  รุ่นก่อนหน้านี้ ที่ได้สร้างประวัติการณ์ยอดจอง และยอดขดายถล่มทลายจนทำให้ลูกค้าที่จองรถยนต์ต้องรอนานกันหลายเดือน จนทำให้สามารถขึ้นเป็นรถยนต์อีโคคาร์ขายดีอันดับหนึ่งมาหลายปี ครั้งนี้กลับมาอีกครั้ง พร้อมการอัพเกรดใหม่ทั้งหมด ไม่ว่าจะเป็นรูปลักษณ์ใหม่ สดใส และสปอร์ตสวยงามมากขึ้น ขุมพลังลูกใหม่ เกียร์ลูกใหม่ รวมไปถึงแพลตฟอร์มการออกแบบ และเทคโนโลยีใหม่ๆ\r\n\r\n', 'รูปลักษณ์ใหม่ สปอร์ต กระชับ สดใหม่มากขึ้น\r\n\r\nเริ่มต้นกันที่รูปลักษณ์ภายนอกกันก่อน การออกแบบเส้นสาย และทรวดทรงรถยนต์โดยรวมยังมีสไตล์และคอนเซปต์รุ่นก่อนหน้า แต่มีการเปลี่ยนแปลงมิติตัวถังใหม่ทั้งหมด รวมไปถึงแพลตฟอร์มของรถยนต์ใหม่อย่าง Heartech ที่เลือกใช้วัสดุที่มีน้ำหนักเบาลง แต่แข็งแกร่งมากขึ้น รวมไปถึงลักษณ์โครงสร้างตัวถังโดยรวมที่เตี้ยลงแต่กว้างขึ้น\r\n\r\nมิติตัวถังใหม่จะอยู่ที่ ยาว x กว้าง x สูง = 1,735 x 3,840 x 1,495 มิลลิเมตร / ระยะฐานล้อ : 2,450 มิลลิเมตร / ความสูงใต้ท้องรถ จะอยู่ที่ 120 มิลลิเมตร และน้ำหนักตัวถังรถยนต์ 875-910 กิโลกรัม ซึ่งหลังคาเตี้ยลง (-15 มม.) ความยาวรวมสั้นลง (-10 มม.) ตัวถังรถกว้างขึ้น (+40 มม.) ระยะฐานล้อยาวขึ้น (+20 มม.) น้ำหนักลดลง หากเทียบกันกับ Swift รุ่นก่อนหน้า\r\n\r\nภายในออกแบบลงตัวและมีความสปอร์ตแอบซิ่งให้เห็นอยู่เล็กๆ\r\n\r\nนอกจากรูปลักษณ์ภายนอกที่มีความสปอร์ตกว่ารุ่นก่อนแล้ว ภายในก็ไม่แพ้กันแต่อย่างใด เริ่มต้นกันที่แผงคอนโซลหน้ากับการออกแบบใหม่ทั้งหมด แม้วัสดุจะยังคงเป็นพลาสติกขึ้นรูปทั้งหมด แต่ความตั้งใจในการออกแบบแสดงให้เห็นถึงความสปอร์ตที่แอบแฝงอยู่เล็กๆ น้อยๆ ในทุกการออกแบบ\r\n\r\nแผงคอนโซล 2 ชั้น โทนดำ ตัดด้วยเส้นสายของแผงพลาสติกสีขาว ช่องแอร์ด้านข้างมีขนาดเล็กลง และในส่วนช่องแอร์กลางพถูกเปลี่ยนมาเป็นแบบวงกลมตามสมัยนิยม จอทัชสกรีนกลางขนาด 7 นิ้ว รองรับ Apple CarPlay ที่ค่อนข้างสมูทใช้งานง่ายพร้อม Navi สำหรับรุ่น GLX-Navi พวงมาลัยแบบมัลติฟังก์ชั่น แบบ 3 ก้าน ท้ายตัด ทำได้ดีทีเดียวฟังก์ชั่นการใช้งานครบๆ ไม่ว่าจะเป็นปุ่มควบคุมชุดเครื่องเสียง ปุ่มควบคุม ระบบบลูทูธ ปุ่มควบคุมระบบ cruise control ก็มีมาให้โดยสามารถควบคุมได้บริเวณด้านขวาของพวงมาลัย ในส่วนเกียร์ยังมีเค้าโครงเดิมของรุ่นก่อนหน้าแต่ก็มีการตกแต่งเพิ่มเติมลวดลายเปียโนแบล็คบริเวณคันเกียร์พร้อมโหมด S ที่กดได้บริเวณข้างหัวเกียร์ เบาะดีไซน์ใหม่ เพิ่มเติมความยาวของปีกข้างเพื่อให้การนั่งขับขี่และนั่งโดยสารมีความกระชับและลดแรงโยนระหว่างเข้าโค้ง แต่ยังคงเป็นเบาะผ้า และปรับด้วยมือทั้งหมดอยู่แม้จะเป็นรุ่นท็อปสุด GLX-Navi ก็ตาม ในส่วนห้องโดยสารโดยรวมมีความโปร่งกว่ารุ่นก่อน แม้ความสูงหลังคาจะลดลง แต่ได้เรื่องความกว้าง และแพลตฟอร์มโครงสร้างใหม่ ที่ทำให้รถโปร่งนั่งสบายขึ้น', NULL, '2019-07-06 17:54:44', '2019-07-06 17:54:44'),
(5, 'MG', 'MG3', '2018', '519,000', NULL, '1408506311.jpg', NULL, NULL, 'ALL NEW MG3 อัพเกรดความ FUN สไตล์อังกฤษในรูปโฉมใหม่ เพื่อตอบสนองความสนุกในสไตล์ที่ไม่ซ้ำใครไม่ว่าจะเป็นกระจังหน้าดีไซน์ใหม่ มาพร้อมไฟหน้าแบบ PROJECTOR เติมความสดใสด้วยสีสันแนว BRIT DUO COLOUR STYLING เปิดโลกมุมมองความสนุกให้กว้างขึ้น กับหลังคา SUNROOF แบบปรับไฟฟ้าและเสริมบุคลิกความสนุกให้โดดเด่นยิ่งขึ้น ด้วยไฟท้าย LED LIGHT GUIDE ทั้งหมดนี้เพื่อความ FUN ที่โดดเด่นในแบบเรา', NULL, 'flash', '2019-07-06 17:55:07', '2019-07-06 17:55:07'),
(6, 'Toyota', 'Altis', '2018', '799,000', NULL, '1513517938.png', NULL, NULL, 'โตโยต้า โคโรล่า อัลติส รุ่นปรับโฉมใหม่ ที่ต้องบอกเลยว่ารููปลักษณ์ภายนอกมาพร้อมความสปอร์ตสวยงามและโดดเด่นมากยิ่งขึ้นจริงๆ โดยเฉพาะด้านหน้ารถยนต์ โคโรล่า อัลติส รุ่นปรับปรุงโฉมรุ่นนี้ มีการปรับปรุงใหม่รวมคัน ด้านหน้ามีการเปลี่ยนกระจังหน้าดีไซน์ใหม่เพื่สอดรับกับชุดโคมไฟหน้าแบบ Bi-Beam LED Projector ปรับระดับ เปิด-ปิด อัตโนมัติ พร้อมไฟ LED Daytime Running Light มือจับเปิดประตูปรับปรุงใหม่แบบ Grip-Type พร้อมแถบโครเมี่ยม ล้ออัลลอยขนาด 16 นิ้ว แบบทูโทนลวดลายใหม่เช่นกัน และล้ออัลลอยทูโทน ขนาด 17 นิ้ว สำหรับรุ่น ESPORT รวมไปถึงชุดโคมไฟท้ายที่ออกแบบใหม่ปรับเปลี่ยนสีสันเป็นแบบ ทูโทน พร้อมไฟ LED แบบ Light Guiding', 'เครื่องยนต์มีให้เลือกทั้ง 1.6 ลิตร และ 1.8 ลิตร\r\n\r\nทางด้านขุมพลัง โตโยต้า โคโรล่า อัลติส รุ่นปรับโฉมใหม่ ไม่มีการปรับปรุงหรือเปลี่ยนแปลงแต่อย่างใด ยังมาพร้อมตัวเลือกเครื่องยนต์เบนซิน 4 สูบแถวเรียง DOHC Dual VVT-i ขนาด 1.6 ลิตร 125 แรงม้า และแรงบิดสูงสุดที่ 157 นิวตันเมตร ที่ 5,200 รอบต่อนาที\r\n\r\nและเครื่องยนต์เบนซิน 4 สูบแถวเรียง DOHC Dual VVT-i ขนาด 1.8 ลิตร 141 แรงม้า และแรงบิดสูงสุดที่ 177 นิวตันเมตร ที่ 4,000 รอบต่อนาที พร้อมรองรับน้ำมัน E85 ส่งกำลังด้วยชุดเกียร์อัตโนมัติแบบ CVT-i ที่มีการปรับเปลียนเกียร์เองได้ 7 สปีด ด้วยการเปลี่ยนที่เกียร์ หรือ Paddle Shift', NULL, '2019-07-06 17:55:27', '2019-07-06 17:55:27'),
(7, 'Honda', 'Jazz', '2018', '555,000', NULL, '862218485.jpg', NULL, NULL, 'ฮอนด้า แจ๊ซ ใหม่ มาพร้อมดีไซน์สปอร์ตโฉบเฉี่ยวและทันสมัย ด้วยกระจังหน้าและกันชนหน้า-หลังดีไซน์ใหม่ ไฟหน้าพร้อมไฟส่องสว่างสำหรับการขับขี่ในเวลากลางวัน (DRL) แบบ LED และล้ออัลลอยดีไซน์ใหม่ เสริมความสปอร์ตภายในห้องโดยสารด้วยเบาะนั่งสีดำลายใหม่', 'พิเศษกับครั้งแรกในการแนะนำ ฮอนด้า แจ๊ซ ใหม่ รุ่น RS นำเสนอความสปอร์ตในทุกมุมมอง ด้วยการออกแบบดีไซน์เฉพาะสไตล์ RS รอบคัน โดดเด่นด้วยกระจังหน้าดีไซน์ใหม่พร้อมสัญลักษณ์ RS ไฟหน้าพร้อมไฟส่องสว่างสำหรับการขับขี่ในเวลากลางวัน (DRL) แบบ LED โฉบเฉี่ยวยิ่งขึ้นด้วยกันชนหน้า พร้อมไฟตัดหมอกและกันชนหลังแบบสปอร์ตในสไตล์ที่เป็นเอกลักษณ์ของรุ่น RS กระจกมองข้างสีดำ และล้ออัลลอยดีไซน์สปอร์ตขนาด 16 นิ้ว ภายในห้องโดยสารสะท้อนความสปอร์ตยิ่งขึ้นด้วยเบาะนั่งดีไซน์ใหม่ตกแต่งด้วยด้ายสีส้ม และสีภายนอกใหม่ สีส้มฟีนิกซ์ เฉพาะรุ่น RS\r\n\r\nพื้นที่ห้องโดยสารกว้างขวาง สะดวกสบาย รองรับทุกไลฟ์สไตล์ด้วยเบาะนั่งอัลตร้าซีท สามารถพับและปรับเปลี่ยนเพื่อเพิ่มพื้นที่ได้ถึง 4 โหมดการใช้งาน พร้อมห้องสัมภาระท้ายขนาดใหญ่ และอุปกรณ์ อำนวยความสะดวกครบครัน อาทิ มาตรวัดเรืองแสง พร้อมหน้าจอแสดงข้อมูลการขับขี่ MID ระบบปรับอากาศอัตโนมัติพร้อมแผงควบคุมแบบสัมผัส ระบบสตาร์ทเครื่องยนต์แบบอัจฉริยะ ระบบเครื่องเสียงหน้าจอสัมผัสขนาด 6.8 นิ้ว รองรับการเชื่อมต่อโทรศัพท์ไร้สาย รองรับการเชื่อมต่อภาพและเสียงผ่าน HDMI และพวงมาลัยแบบมัลติฟังก์ชั่น เป็นต้น\r\n\r\nพลังขับเคลื่อนสุดเร้าใจในทุกการขับขี่ ด้วยเครื่องยนต์ 4 สูบ 16 วาล์ว i-VTEC ขนาด 1.5 ลิตร ให้กำลังสูงสุด 117 แรงม้า ด้วยแรงบิดสูงสุดที่ 146 นิวตัน-เมตรที่ 4,700 รอบต่อนาที ผสานระบบเกียร์อัตโนมัติ CVT ที่พัฒนาภายใต้เทคโนโลยีเอิร์ธดรีม ให้อัตราเร่งและประสิทธิภาพการประหยัดน้ำมันที่ดีเยี่ยม ตอบสนองทุกการขับขี่ด้วยระบบควบคุมการเปลี่ยนเกียร์ที่พวงมาลัยแบบ 7 สปีด สะดวกสบายด้วยระบบควบคุมความเร็วอัตโนมัติ พร้อมระบบช่วยขับขี่แบบประหยัดน้ำมัน ECO Assist รองรับพลังงานทางเลือก E85 \r\n\r\nมั่นใจทุกการขับขี่ด้วยมาตรฐานความปลอดภัยครบครัน อาทิ โครงสร้างตัวถังนิรภัย G-Force Control หรือ G-CON ปกป้องห้องโดยสารจากการชนรอบทิศทาง ถุงลม 6 ตำแหน่ง ระบบช่วยควบคุมการทรงตัวขณะเข้าโค้ง (VSA) ระบบช่วยการออกตัวขณะอยู่บนทางลาดชัน (HSA) ระบบเบรกป้องกันล้อล็อก (ABS) พร้อมระบบกระจายแรงเบรก (EBD) และกล้องส่องภาพด้านหลังปรับมุมมองได้ 3 ระดับ เป็นต้น', NULL, '2019-07-06 17:55:44', '2019-07-06 17:55:44'),
(8, 'Toyota', 'Yaris', '2019', '479,000', NULL, '361340152.jpg', NULL, NULL, 'Toyota Yaris ATIV ซีดานอีโคคาร์รุ่นใหม่ล่าสุด ที่มาพร้อมความสปอร์ต ทันสมัย เส้นสายรอบคันรถยนต์ที่โฉบเฉี่ยว ซึ่งถือเป็นการดีไซน์ใหม่ล่าสุดของค่าย Toyota เลยทีเดียว นอกจากรูปลักษณ์ภายนอกที่โดดเด่นแล้ว จุดเด่นอีกประการของรุ่นคือการออกแบบภายใน กับการดีไซน์ใหม่หมดจดเช่นเดียวกันกับภายนอก ซึ่งความโปร่งของห้องโดยสาร ทำให้สามารถนั่งโดยสารได้ด้วยความสะดวกสบายทุกที่นั่ง การดีไซน์เบาะทั้งตอนหน้าและตอนหลังที่เน้นความกว้างขวางสบาย อีกทั้งยังมีระยะวางขาเหลือๆ กว่าใครอีกด้วย นอกจากนี้ภายในยังมีการจัดวางอุปกรณ์และฟังก์ชั่นต่างๆ ที่ใช้งานง่าย และออพชั่นแบบแน่นคันเป็นครั้งแรกของรถยนต์ ซีดาน อีโคคาร์ ในตลาดประเทศไทย', 'ซึ่งออพชั่นที่มีมาให้ก็มีอยู่ในทุกรุ่นที่ทำตลาดตั้งแต่รุ่นเริ่มต้นจนไปถึงรุ่นท็อปเลยทีเดียว ไม่ว่าจะเป็น ระบบเบรก ABS, ระบบกระจายแรงเบรก EBD, ระบบเสริมแรงเบรก BA, ระบบควบคุมการทรงตัว VSC, ระบบป้องกันการลื่นไถล TRC และทีเด็ดคงจะหนีไม่พ้น ถุงลมนิรภัย 7 ตำแหน่ง (คู่หน้า-ด้านข้าง-ม่านนิรภัย-และหัวเข่า)\r\n\r\nToyota Yaris ATIV มาพร้อมเครื่องยนต์เบนซิน Dual VVT-i 1.2 ลิตร ให้กำลังแรงม้าสูงสุด 86 แรงม้า พร้อมแรงบิดสูงสุด 108 นิวตันเมตร ส่งกำลังด้วยชุดเกียร์อัตโนมัติ Super CVT-i พร้อม Shift Lock\r\n\r\n', NULL, '2019-07-06 17:56:08', '2019-07-06 17:56:08'),
(9, 'Honda', 'Civic', '2019', '874,000', NULL, '1101604923.jpg', NULL, NULL, NULL, 'ความปลอดภัยที่เหนือกว่ารถยนต์รุ่นอื่นในระดับเดียวกัน อาทิ ระบบแสดงภาพมุมอับสายตาขณะเปลี่ยนเลน (Honda LaneWatch) ระบบเบรกมือไฟฟ้า (Electric Parking Brake) ระบบ Auto Brake Hold และระบบล็อกรถอัตโนมัติเมื่อกุญแจรีโมทอยู่ห่างจากตัวรถ (Walk Away Auto Lock)\r\n\r\nซึ่งนอกจากฮอนด้า ซีวิค ตัวถังซีดานแล้ว ฮอนด้ายังได้เพิ่มซีวิค ตัวถังแฮทช์แบ็ก 5 ประตู เพื่อเป็นอีกหนึ่งทางเลือกให้กับผู้ที่สนใจ นำเสนอภายใต้แนวคิดการออกแบบ “Stylish Athlete” เน้นความปราดเปรียว และดีไซน์ร่วมสมัย มาพร้อมสเกิร์ตรอบคันสีส้มทัสกัน บ่งบอกถึงอารมณ์ความสปอร์ตในสไตล์ยุโรป โดดเด่นและดุดันยิ่งขึ้นด้วยสปอยเลอร์หลัง ชุดตกแต่งซุ้มล้อหน้าแบบโครเมียม คิ้วบันได สแตนเลส พร้อมไฟ LED LITE BLUE ให้ความรู้สึกพรีเมียมยิ่งขึ้น และล้อแม็กขนาด 17 นิ้ว สีดำด้าน\r\n\r\nยิ่งไปกว่านั้นยังได้เพิ่มสีใหม่ แดงแรลลี่ เพื่อสะท้อนความเป็นรถยนต์ที่ร้อนแรงแห่งยุค', NULL, '2019-07-06 17:56:28', '2019-07-06 17:56:28'),
(10, 'Nissan', 'Teana', '2019', '1,339,000', NULL, '412268883.jpg', NULL, NULL, 'Nissan Teana (นิสสัน เทียน่า) ได้รับการออกแบบให้ตัวรถเพรียวยาวและลู่ลมตามหลักอากาศพลศาสตร์ ลดแรงต้านอากาศที่เกิดขึ้นขณะขับขี่ ใต้ท้องรถที่ถูกดีไซน์เพื่อให้อากาศไหลผ่านได้อย่างรวดเร็ว ลดแรงเสียดทานอากาศได้อย่างมีประสิทธิภาพ ผลลัพธ์ที่ได้ คือ ลดเสียงรบกวนภายในห้องโดยสาร ขับเคลื่อนได้อย่างปราดเปรียว และช่วยประหยัดน้ำมัน เครื่องยนต์ทรงพลัง เปี่ยมด้วยสมรรถนะ มีค่ามลพิษต่ำ และประหยัดน้ำมันยิ่งขึ้น', 'ในส่วนของเครื่องยนต์ มีให้เลือก ทั้งเครื่องยนต์ 2.0 ลิตร MR20DE 4 สูบ 16 วาล์ว 1,997 ซีซี 136 แรงม้า ที่ 5,600 รอบต่อนาทีและแรงบิดสูงสุด 190 นิวตัน-เมตร ที่4,400 รอบต่อนาที ให้พลังตอบสนองดีเยี่ยมตอบรับทุกการขับขี่ ทำงานพร้อมระบบวาล์วแปรผัน C-VTCให้แรงบิดสูงที่รอบต่ำ ทั้งยังพัฒนาเครื่องยนต์ให้ประหยัดน้ำมันเยี่ยม และเครื่องยนต์ 2.5 ลิตร QR25DE 4 สูบ 16 วาล์ว 173 แรงม้า แรงบิดสูงสุดที่ 234 แรงเต็มสมรรถนะ ผสานการทำงานกับระบบวาล์วแปรผันคู่ Twin C-VTC (Twin Continuously Variable-valve Timing Control) ควบคุมการเปิดและปิดของวาล์วไอดีและไอเสีย ให้ทำงานสัมพันธ์กัน', 'flash', '2019-07-06 17:57:00', '2019-07-06 17:57:00'),
(11, 'Toyota', 'Fortuner', '2018', '1,239,000', NULL, '954638533.jpg', NULL, NULL, 'โตโยต้า ฟอร์จูนเนอร์ (Toyota Fortuner) ปรับโฉมใหม่ที่มาพร้อมการปรับปรุงให้มีความลงตัวมากยิ่งขึ้น พร้อมเพิ่มเติมออพชั่นใหม่เช่น ชุดกระจังหน้าดีไซน์ใหม่ กระจกไฟเลี้ยว บันไดข้าง และชุดโคมไฟท้ายดีไซน์ใหม่ และออพชั่นไฟตัดหมอกแบบ LED ในส่วนภายในมีการเพิ่มเติมออพชั่นเบาะนั่งปรับไฟฟ้าแบบ 8 ทิศทาง และเพิ่มเติมออพชั่นดิสก์เบรค 4 ล้อในทุกรุ่นย่อย ยกเว้นรุ่น 2.4G MT', 'โดย Toyota Fortuner รุ่นปรับปรุงใหม่มาพร้อมตัวเลือกเครื่องยนต์ดีเซล 2.4 และ 2.8 ลิตร ที่มาพร้อมระบบขับเคลื่อน 2 ล้อ และ 4 ล้อ ซึ่งถือเป็นรุ่นแรกสำหรับรถยนต์เซกเมนต์นี้ในตลาดที่มีระบบขับเคลื่อน 4 ล้อ ในเครื่องเยนต์ 2.4 ลิตร และยังมีเครื่องยนต์เบนซิน 2.7 ลิตร เป็นตัวเลือกให้อีกด้วย \r\n\r\nตัวถังของฟอร์จูนเนอร์กว้างขวางมากขึ้น มิติมีขนาดยาวขึ้นโดยอยู่ที่ 4,795 มม. และกว้างขึ้นเป็น 1,855 มม. เทียบกับรุ่นเดิมซึ่งมีความกว้างและยาวอยู่ที่ 4,705 มม. และ 1,840 มม. ตามลำดับ พื้นที่ภายในห้องโดยสารจึงกว้างขวางมากขึ้น และมีความปราดเปรียวมากขึ้น ด้วยความสูงที่ลดลงจาก 1,850 มม. เป็น 1,835 มม. ทำให้ตัวรถมีความลู่ลมและโฉบเฉี่ยวยิ่งกว่าเดิม\r\n\r\nแนวคิดการออกแบบฟอร์จูนเนอร์ใหม่คือ Cool & Tough เน้นผสมผสานความบึกบึนแข็งแกร่งเข้ากับสไตล์ที่ปราดเปรียวคล่องตัว เหมาะสำหรับการใช้งานทุกวัน ทั้งการจราจรในเมืองใหญ่ก็ขับขี่ได้สนุก และลุยได้ทุกเส้นทางนอกเมืองก็มั่นใจ ดีไซน์ด้านหน้าและด้านข้างถูกปรับเปลี่ยนใหม่ให้ดูทันสมัยขึ้น แผงกันชนที่โฉบเฉี่ยวภูมิฐาน กระจังหน้าถูกออกแบบให้ไหลลื่นไปกับกรอบไฟหน้า กระจกมองข้างพร้อมไฟเลี้ยวแอลอีดี ล้ออลูมิเนียมมีขนาดใหญ่ขึ้นจาก 17 นิ้ว เป็น 18 นิ้ว ไฟหลังมีลักษณะเปรียวบางกว่ารุ่นก่อนหน้า เน้นความเฉียบคมและประณีต ไฟเบรกเป็นแบบแอลอีดีล้ำสมัย เสาอากาศครีบฉลามยังช่วยเติมกลิ่นอายความสปอร์ต\r\n\r\nเพิ่มความพรีเมียมภายใน ห้องโดยสารเน้นบรรยากาศพรีเมียมกว่ารุ่นเดิมด้วยแผงคอนโซดีไซน์ใหม่หมด พร้อมมาตราวัดเรืองแสง Optitron และจอ Muti-Information Display ที่แสดงข้อมูลที่เป็นประโยชน์ต่อการขับขี่ตลอดการเดินทาง นอกจากนั้นยังปรับเปลี่ยนภายในด้วยการเพิ่มจุดสัมผัสที่นุ่มนวลมากขึ้น โดยใช้วัสดุหนังและหนังสังเคราะห์คุณภาพสูง เมื่อผสมผสานกับดีไซน์หรูหราและการตัดเย็บด้วยความประณีต ฟอร์จูนเนอร์ใหม่จึงไม่เพียงโดดเด่นกว่าฟอร์จูนเนอร์รุ่นก่อนหน้า แต่ยังเหนือกว่ารถระดับเดียวกันอีกด้วย\r\n\r\nเพียบพร้อมไปด้วยระบบความปลอดภัยทั้ง Active Safety และ Passive Safety ', NULL, '2019-07-06 17:57:23', '2019-07-06 17:57:23'),
(12, 'MG', 'ZS_EV1', '2019', '1,190,000', NULL, '618105800.jpg', NULL, NULL, 'ในโลกยุคปัจจุบันที่เทคโนโลยีมีความสำคัญต่อการดำรงชีวิตอย่างมาก MG จึงเชื่อว่าเทคโนโลยีที่ดีที่สุด ต้องสามารถอำนวยความสะดวกสบาย ให้เราสามารถใช้ชีวิตได้ง่าย และต้องตอบโจทย์ทุกการใช้งาน', 'ภายใต้แนวคิด BRIT DYNAMIC ที่เต็มไปด้วยแรงบันดาลใจในทุกรายละเอียด สมบูรณ์แบบในทุกด้าน ทั้งสมรรถนะ (PERFORMANCE) การควบคุม (HANDING) การออกแบบ (DESIGN) และความปลอดภัย (SAFETY) สะท้อนความพรีเมียมสไตล์อังกฤษแบบเหนือระดับได้อย่างลงตัว', NULL, '2019-07-06 17:58:19', '2019-07-06 17:58:19'),
(13, 'Mazda', 'Mazda2', '2018', '530,000', NULL, '1150199012.png', NULL, NULL, 'มาสด้า2 (Mazda2) ด้วยดีไซน์ที่บ่งบอกถึง DNA สปอร์ตพรีเมี่ยมในทุกมิติ จากปรัชญาการออกแบบโคโดะ ดีไซน์ KODO Design : Soul of Motion ถ่ายทอดความงามของการเคลื่อนไหวอันทรงพลัง ผ่านรูปทรงและเส้นสายที่พลิ้วไหว เฉียบคม ตั้งแต่กระจังหน้า ด้านข้าง ไปจนถึงไฟท้าย โฉบเฉี่ยวยิ่งขึ้นด้วยเสาอากาศแบบครีบฉลาม ให้สัมผัสที่เร้าใจ สะกดทุกสายตาให้จับจ้องกับรูปลักษณ์โดดเด่นอย่างแท้จริง', 'ทางด้านขุมพลังยังมาพร้อมเครื่องยนต์ 2 แบบทั้งเครื่องยนต์ดีเซลเทอร์โบ Skyactiv-D 1.5 ลิตร ให้กำลังแรงม้าสูงสุดที่ 105 แรงม้า และเครื่องยนต์เบนซิน Skyactiv-G 1.3 ลิตร ให้กำลังแรงม้าสูงสุดที่ 93 แรงม้า พร้อมตัวเลือกโหมดการขับขี่\r\n\r\nความสนุกเร้าใจเกิดขึ้นได้เสมอ ทั้งกับไลฟ์สไตล์ที่เป็นคุณ หรือช่วงเวลาท้าท้ายใหม่ๆ กับ Activity ที่คุณเลือก ยิ่งในมาสด้า2 ใหม่ 2018 คอลเลคชั่น ยนตรกรรมที่ให้คุณสัมผัสถึงความเร้าใจได้ไม่เคยหยุด สะท้อนตัวตนที่ไม่ซ้ำทางใคร ด้วยดีไซน์ที่บ่งบอกถึง DNA ความสปอร์ตพรีเมี่ยม พร้อมเทคโนโลยีสกายแอคทีฟ SKYACITV-VEHICLE DYNAMICS อีกขั้นของเทคโนโลยีสกายแอคทีฟที่ให้สมรรถนะการขับขี่เหนือชั้น และ MZD CONNECT เชื่อมต่อโซเชียลได้ไม่มีสะดุด ครบครันด้วยเทคโนโลยีความปลอดภัยสุดล้ำ i-ACTIVSENSE ให้คุณสนุกเร้าใจได้ถึงขีดสุด', 'flash', '2019-07-06 17:58:50', '2019-07-06 20:26:56');

-- --------------------------------------------------------

--
-- Table structure for table `list_customers`
--

CREATE TABLE `list_customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customer_phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customer_social` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `brand` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `car_down` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `installment` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customer_status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sell_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `list_customers`
--

INSERT INTO `list_customers` (`id`, `customer_name`, `customer_phone`, `customer_social`, `brand`, `model`, `car_down`, `installment`, `customer_status`, `sell_name`, `created_at`, `updated_at`) VALUES
(1, 'อาจริยา', '0877858281', 'AchariyaAim', NULL, 'MH ZS EV', NULL, NULL, NULL, NULL, '2019-07-13 16:03:04', '2019-07-13 16:03:04'),
(2, 'คุณโจ้', NULL, 'Line ID', NULL, 'ฟอร์จูนเนอร์ 2.4 V 4WD AT', '50%', NULL, NULL, NULL, '2019-07-13 18:02:38', '2019-07-13 18:02:38'),
(3, 'ชัช', '0890588648', '0890588648', 'Mitsubishi', 'Pajero sport 2 4 Gt Premium  Minor change สี เทา', '20%', NULL, NULL, NULL, NULL, NULL),
(4, 'โดด', '0910499286', '0910499286', 'MG', 'MG3X สีดำ', '15,000', NULL, NULL, NULL, NULL, NULL),
(5, 'ศุทธหทัย เกิดสมจิตร', '0646186115', NULL, 'Honda', 'Jazz', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'ปาริชาติ  คำมี', '0930378217', '0930378217', 'Mazda', 'Mazda 2 สีเทา', NULL, '7,000', NULL, NULL, NULL, NULL),
(7, 'Apishy St', NULL, 'Apishy St', 'Mazda', 'Mazda 2', '100,000', '5 ปี', NULL, NULL, NULL, NULL),
(8, 'สุขุม เดชะวงศ์สุวรรณ', '0816236549', '0816236549', 'Toyota', 'Vios mid 2019 สีขาว', '30% หรือมากกว่า', '12,000 ', NULL, NULL, NULL, NULL),
(9, NULL, '0819772727', '0819772727', 'Toyota ', 'Rocco 2.8 A/T 2x4', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'siwuch', NULL, 'siwuch', 'Toyota', 'Revo', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Panupong Nonthasri', NULL, 'Panupong Nonthasri', 'Toyota', 'Revo C Cab 2.4 J Z-Edition​ ตัวเตี้ย', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'หทัยรัตน์', NULL, 'maelek.p', 'Honda', 'Civic hatchback', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Joy', NULL, 'JoyJazz', 'MG', 'NewMG3 Two Toneรุ่น X สีแดง', '20%', '7 ปี', NULL, NULL, NULL, NULL),
(14, 'Baifern Lipikar', NULL, 'Baifern Lipikar', 'Mazda', 'Mazda 2', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Nonthawat Wado', '0854037932', 'Nonthawat Wado', 'Mazda', 'Mazda 3', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Beam Matorresta', NULL, 'Beam Matorresta', 'Mazda', 'Mazda 2', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'สุพารัตน์ แซ่ซั่ว', '0868408754', 'Sandy24580', 'Honda', 'City', '200,000', '6,000-7,000 ', NULL, NULL, NULL, NULL),
(18, 'Pai Naka', NULL, 'Pai Naka', 'Mazda', 'Mazda 2', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'ธีรพล อ้ายมีเหตุผล ', NULL, 'ธีรพล อ้ายมีเหตุผล ', 'Mitsubishi', 'Triton', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'Noey Napatchanan', NULL, 'Noey Napatchanan', 'Mazda', 'Mazda 2 hi con', NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'khaowpoon', NULL, 'khaowpoon', 'Mazda ', 'Mazda 2', NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'Pon Attawut Sunokabut', NULL, 'Pon Attawut Sunokabut', 'Toyota', 'Revo ', NULL, '8,000', NULL, NULL, NULL, NULL),
(23, 'รัตนา จันทร์ทอง ', NULL, 'รัตนา จันทร์ทอง ', 'Toyota', 'Revo', NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'komeb', NULL, 'komeb', 'Mazda', 'Mazda CX3', NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'Santipap Tong-on', NULL, 'Santipap Tong-on', 'Toyota', 'Revo G', NULL, NULL, NULL, NULL, NULL, NULL),
(26, NULL, '0931582565', '0931582565', 'Mazda', 'Mazda 2', NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'vichada sirikul', NULL, '1234_prem', 'Toyota', 'Yaris ATIV', NULL, '6,000', NULL, NULL, NULL, NULL),
(28, NULL, NULL, 'Fashjjo', 'Toyota', 'Revo C Cab 2.4 J Z-Edition ตัวเตี้ย', NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'Beer', NULL, 'sanani0076', 'Mitsubishi', 'Xpander', NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'จักรกริช', NULL, 'Master.mavis', 'Mitsubishi', 'Xpander', NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'jaroenpong', NULL, 'yungying.jaroenpong', 'Mitsubishi', 'Xpander', NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'ariya.kordwichai', NULL, 'jj_jiib', 'Mazda', 'Mazda 2', NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'ToTo Jung ', NULL, 'toto_jung', 'Mitsubishi', 'Xpander', NULL, NULL, NULL, NULL, NULL, NULL),
(34, 'จักรกริช', '0917605554', 'Master.mavis', 'Honda', 'Brv สีแดง', '25%', NULL, NULL, NULL, NULL, NULL),
(35, 'nitiphon', NULL, 'nitiphon.game', 'Mazda', 'Mazda 3', NULL, NULL, NULL, NULL, NULL, NULL),
(36, 'wijitra', NULL, 'sw.wijitra', 'Toyota', 'Yaris', NULL, NULL, NULL, NULL, NULL, NULL),
(37, NULL, '0891132974', '0891132974', 'Nissan', 'Navara เกียร์ออโต้ 4 ประตู', NULL, NULL, NULL, NULL, NULL, NULL),
(38, 'golf', NULL, 'golfvvan', 'Mazda', 'Mazda 3', NULL, NULL, NULL, NULL, NULL, NULL),
(39, 'ณัฐนิษฐ์ษา สังข์มณี', NULL, 'Kariiko25', 'Honda', 'Civic EL สีขาว', '150,000', NULL, NULL, NULL, NULL, NULL),
(40, 'ตุ๊กตา', '0648392056', 'ตุ๊กตา', NULL, 'อีซูซุ', NULL, NULL, NULL, NULL, '2019-07-18 10:24:43', '2019-07-18 10:24:43');

-- --------------------------------------------------------

--
-- Table structure for table `list_sells`
--

CREATE TABLE `list_sells` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sell_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sell_phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ID_line` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `showroom` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `province` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_08_01_183154_create_pages_table', 1),
(4, '2018_08_04_122319_create_settings_table', 1),
(5, '2019_07_04_223408_create_list_cars_table', 1),
(6, '2019_07_04_223737_create_list_blogs_table', 1),
(7, '2019_07_04_223749_create_list_customers_table', 1),
(8, '2019_07_07_111650_create_ajax_cruds_table', 1),
(9, '2019_07_08_184117_create_roles_table', 1),
(10, '2019_07_08_184538_create_role_user_table', 1),
(11, '2019_07_10_044905_create_list_sells_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2019-07-13 02:45:45', '2019-07-13 02:45:45'),
(2, 'author', '2019-07-13 02:45:45', '2019-07-13 02:45:45'),
(3, 'user', '2019-07-13 02:45:45', '2019-07-13 02:45:45');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, NULL),
(2, 2, 3, NULL, NULL),
(3, 3, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'chin', 'teeraphatmychin@gmail.com', NULL, '$2y$10$JUV6NYYqZj9Y74twh6X74OhBT0jlyNTCLF7c4FsaSu51NadPEkgHS', NULL, '2019-07-13 02:45:45', '2019-07-13 02:45:45'),
(2, 'possiblecar.4', 'possiblecar.4@gmail.com', NULL, '$2y$10$OCUYf0QV96aiuO/e4oP3CuvuYFKmlh.qkbPgIMYH6W326LoTmkDNe', NULL, '2019-07-13 02:45:45', '2019-07-13 02:45:45'),
(3, 'Author', 'author@author.com', NULL, '$2y$10$4BzsAiaCV6C1tlJG9LLv0epwGOmXOmmo/KJEa1jTV12vBXP4yh5wi', NULL, '2019-07-13 02:45:45', '2019-07-13 02:45:45'),
(4, 'User', 'user@user.com', NULL, '$2y$10$iAuE8LX50U14jLoKMYlQL.CB5uEo4XU2Ehos1q2ixQABNFS22Y/Vy', NULL, '2019-07-13 02:45:45', '2019-07-13 02:45:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ajax_cruds`
--
ALTER TABLE `ajax_cruds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_blogs`
--
ALTER TABLE `list_blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_cars`
--
ALTER TABLE `list_cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_customers`
--
ALTER TABLE `list_customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_sells`
--
ALTER TABLE `list_sells`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ajax_cruds`
--
ALTER TABLE `ajax_cruds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `list_blogs`
--
ALTER TABLE `list_blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `list_cars`
--
ALTER TABLE `list_cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `list_customers`
--
ALTER TABLE `list_customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `list_sells`
--
ALTER TABLE `list_sells`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
