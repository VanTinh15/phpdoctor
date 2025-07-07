-- MySQL dump 10.13  Distrib 8.4.4, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: csdl_datlichkham
-- ------------------------------------------------------
-- Server version	8.4.4

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `appointments`
--

DROP TABLE IF EXISTS `appointments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `appointments` (
  `appointment_id` int NOT NULL AUTO_INCREMENT,
  `patient_id` int DEFAULT NULL,
  `doctor_id` int DEFAULT NULL,
  `appointment_date` date DEFAULT NULL,
  `appointment_time` varchar(100) DEFAULT NULL,
  `appointment_status` varchar(45) DEFAULT 'Đang chờ',
  `created_at` date DEFAULT NULL,
  `app_describe` text,
  `hospital_id` int DEFAULT NULL,
  `specializations_id` int DEFAULT NULL,
  PRIMARY KEY (`appointment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `appointments`
--

LOCK TABLES `appointments` WRITE;
/*!40000 ALTER TABLE `appointments` DISABLE KEYS */;
INSERT INTO `appointments` VALUES (1,1,1,'2025-07-10','08:00 - 08:30','Đã hoàn thành','2025-07-01','Khám tổng quát định kỳ',1,1),(2,2,2,'2025-07-11','09:00 - 09:30','Đang chờ','2025-07-02','Khám tai mũi họng',2,2),(3,3,3,'2025-07-12','10:00 - 10:30','Bị hủy','2025-07-03','Khám sau phẫu thuật',3,3),(4,4,4,'2025-07-13','11:00 - 11:30','Đã hoàn thành','2025-07-04','Khám tim mạch',1,4),(5,5,5,'2025-07-14','14:00 - 14:30','Đang chờ','2025-07-05','Khám nội tiết',2,5),(6,1,1,'2025-07-07','15:00 - 16:00','Huỷ lịch khám','2025-07-05','dang test',1,1),(7,1,1,'2025-07-08','10:00 - 11:00','Đang chờ','2025-07-05','co van đề',1,1),(8,1,1,'2025-07-08','09:00 - 10:00','Chấp nhận lịch khám','2025-07-05','có cần vấn đề không',1,1);
/*!40000 ALTER TABLE `appointments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `article` (
  `article_id` int NOT NULL AUTO_INCREMENT,
  `category_id` varchar(50) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `content` text,
  `image` varchar(255) DEFAULT NULL,
  `views` int DEFAULT NULL,
  `doctor_id` int DEFAULT NULL,
  PRIMARY KEY (`article_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article`
--

LOCK TABLES `article` WRITE;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` VALUES (1,'0','Cách phòng tránh cúm mùa','Cúm mùa là bệnh lây lan cao, cần giữ gìn vệ sinh cá nhân.','cum.jpg',120,1),(2,'0','Dinh dưỡng cho người tiểu đường','Người bệnh nên ăn nhiều rau xanh, hạn chế đường.','tieuduong.jpg',250,2),(3,'0','Tập thể dục giúp tim khỏe','Vận động đều đặn giúp giảm nguy cơ tim mạch.','tim.jpg',180,3),(4,'0','Bí quyết ngủ ngon','Giấc ngủ ảnh hưởng đến sức khỏe tinh thần.','giacngu.png',300,4),(5,'0','Uống đủ nước mỗi ngày','Cơ thể cần từ 1.5 đến 2 lít nước mỗi ngày.','nuoc.jpg',90,5);
/*!40000 ALTER TABLE `article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category` (
  `category_id` int NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(100) NOT NULL,
  `content` text,
  `sponsor` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'dinhduong.jpg','Dinh dưỡng','Thông tin về dinh dưỡng cho người bệnh','Vinamilk'),(2,'timmach.jpg','Tim mạch','Kiến thức về bệnh tim và huyết áp','Bệnh viện Tim Hà Nội'),(3,'nhikhoa.jpg','Nhi khoa','Chăm sóc sức khỏe trẻ em','Nestlé'),(4,'ungthu.jpg','Ung thư','Thông tin về phát hiện sớm và điều trị','Quỹ Ngày mai tươi sáng'),(5,'tamly.jpg','Tâm lý','Chăm sóc sức khỏe tinh thần','MindCare');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `community`
--

DROP TABLE IF EXISTS `community`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `community` (
  `community_id` int NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(100) NOT NULL,
  `topic` varchar(100) DEFAULT NULL,
  `category_id` varchar(50) DEFAULT NULL,
  `member` int DEFAULT NULL,
  PRIMARY KEY (`community_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `community`
--

LOCK TABLES `community` WRITE;
/*!40000 ALTER TABLE `community` DISABLE KEYS */;
INSERT INTO `community` VALUES (1,'benhda.jpg','Cộng đồng da liễu','Bệnh ngoài da','SK01',450),(2,'tim.jpg','Cộng đồng tim mạch','Tim mạch và huyết áp','SK02',320),(3,'sinhly.jpg','Cộng đồng nội tiết','Nội tiết - Tiểu đường','SK03',210),(4,'dinhduong.jpg','Cộng đồng dinh dưỡng','Ăn uống & sức khỏe','DD01',500),(5,'suckhoetinhthan.jpg','Sức khỏe tinh thần','Cân bằng cảm xúc','SK05',275);
/*!40000 ALTER TABLE `community` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contact` (
  `contact_id` int NOT NULL AUTO_INCREMENT,
  `contact_name` varchar(45) NOT NULL,
  `contact_email` varchar(45) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `replied` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (1,'Nguyễn Văn A','a.nguyen@gmail.com','Hỏi về lịch khám','Tôi muốn đặt lịch khám tim mạch.',0),(2,'Lê Thị B','b.le@gmail.com','Phản hồi dịch vụ','Nhân viên rất nhiệt tình, tôi hài lòng.',1),(3,'Phạm Văn C','c.pham@gmail.com','Câu hỏi về bài viết','Bài viết \"Dinh dưỡng\" có nguồn từ đâu?',1),(4,'Trần Thị D','d.tran@gmail.com','Hủy cuộc hẹn','Tôi muốn hủy lịch hẹn ngày 12.',0),(5,'Hoàng Văn E','e.hoang@gmail.com','Đề xuất chuyên mục','Tôi muốn thêm mục sức khỏe tâm thần.',1);
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `doctor` (
  `doctor_id` int NOT NULL AUTO_INCREMENT,
  `doctor_name` varchar(100) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `department` varchar(500) DEFAULT NULL,
  `profile_description` text,
  `experience` varchar(100) DEFAULT NULL,
  `degree` varchar(255) DEFAULT NULL,
  `awards_certifications` varchar(255) DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `specializations_id` int DEFAULT NULL,
  `hospital_id` int DEFAULT NULL,
  PRIMARY KEY (`doctor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctor`
--

LOCK TABLES `doctor` WRITE;
/*!40000 ALTER TABLE `doctor` DISABLE KEYS */;
INSERT INTO `doctor` VALUES (1,'BS. Nguyễn Văn An','team-2.jpg','','Chuyên điều trị bệnh nội khoa.','10 năm','ĐH Y Hà Nội','Bác sĩ ưu tú',1,1,1),(2,'BS. Trần Thị Bình','team-1.jpg','','Giỏi điều trị viêm xoang, viêm họng.','8 năm','ĐH Y Dược TP.HCM','Chứng nhận quốc tế',2,2,2),(3,'BS. Lê Văn Cường','team-2.jpg','','Khám và điều trị bệnh lý tim.','12 năm','ĐH Y Huế','Giải thưởng ngành tim mạch',3,3,3),(4,'BS. Phạm Thị Dung','team-3.jpg','','Chuyên nội tiết và tiểu đường.','9 năm','ĐH Y Cần Thơ','Giấy khen bộ y tế',4,4,1),(5,'BS. Hồ Văn Em','team-4.jpg','','Tư vấn dinh dưỡng và ăn kiêng.','7 năm','ĐH Y Hải Phòng','Chứng chỉ dinh dưỡng WHO',5,5,2);
/*!40000 ALTER TABLE `doctor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `health`
--

DROP TABLE IF EXISTS `health`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `health` (
  `health_id` int NOT NULL AUTO_INCREMENT,
  `age` int DEFAULT NULL,
  `weight` decimal(5,2) DEFAULT NULL,
  `height` decimal(5,2) DEFAULT NULL,
  `examination_history` text,
  `partient_id` int DEFAULT NULL,
  PRIMARY KEY (`health_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `health`
--

LOCK TABLES `health` WRITE;
/*!40000 ALTER TABLE `health` DISABLE KEYS */;
INSERT INTO `health` VALUES (1,30,65.50,170.00,'Khám tim mạch 2023, bình thường',1),(2,45,70.00,165.00,'Khám tiểu đường 2024, đang điều trị',2),(3,28,55.20,160.00,'Khám da liễu do dị ứng',3),(4,60,75.00,172.00,'Khám huyết áp định kỳ',4),(5,35,68.00,175.00,'Tư vấn dinh dưỡng giảm cân',5);
/*!40000 ALTER TABLE `health` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hospital`
--

DROP TABLE IF EXISTS `hospital`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hospital` (
  `hospital_id` int NOT NULL AUTO_INCREMENT,
  `hospital_name` varchar(255) DEFAULT NULL,
  `hospital_address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `hospital_email` varchar(255) DEFAULT NULL,
  `specializations` varchar(255) DEFAULT NULL,
  `clinic` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`hospital_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hospital`
--

LOCK TABLES `hospital` WRITE;
/*!40000 ALTER TABLE `hospital` DISABLE KEYS */;
INSERT INTO `hospital` VALUES (1,'Bệnh viện Bạch Mai','78 Giải Phóng','Hà Nội','02438683731','contact@bachmai.vn','Nội tổng quát, Tim mạch','Phòng khám nội, tim'),(2,'Bệnh viện Chợ Rẫy','201B Nguyễn Chí Thanh','TP.HCM','02838554137','info@choray.vn','Ngoại thần kinh, Nội tiết','Phòng khám đa khoa'),(3,'Bệnh viện Trung ương Huế','16 Lê Lợi','Huế','02343825353','contact@bvtwhue.vn','Hô hấp, Da liễu','Khám chuyên khoa'),(4,'Bệnh viện Hữu Nghị','1 Trần Khánh Dư','Hà Nội','02439717234','lienhe@huunghi.vn','Dinh dưỡng, Nội tiết','Phòng khám ngoài giờ'),(5,'Bệnh viện Nhi Đồng 1','341 Sư Vạn Hạnh','TP.HCM','02839271119','nhi1@bvnd1.vn','Nhi khoa','Phòng khám nhi');
/*!40000 ALTER TABLE `hospital` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hospital_specializations`
--

DROP TABLE IF EXISTS `hospital_specializations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hospital_specializations` (
  `id` int NOT NULL AUTO_INCREMENT,
  `hospital_id` int DEFAULT NULL,
  `specializations_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hospital_specializations`
--

LOCK TABLES `hospital_specializations` WRITE;
/*!40000 ALTER TABLE `hospital_specializations` DISABLE KEYS */;
INSERT INTO `hospital_specializations` VALUES (1,1,1),(2,1,2),(3,2,4),(4,3,3),(5,4,1);
/*!40000 ALTER TABLE `hospital_specializations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_record`
--

DROP TABLE IF EXISTS `patient_record`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `patient_record` (
  `patient_id` int NOT NULL AUTO_INCREMENT,
  `patient_name` varchar(100) DEFAULT NULL,
  `pa_address` varchar(255) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `gender` char(10) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `pa_img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`patient_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_record`
--

LOCK TABLES `patient_record` WRITE;
/*!40000 ALTER TABLE `patient_record` DISABLE KEYS */;
INSERT INTO `patient_record` VALUES (1,'Nguyễn Văn A','Phường 1, Quận 1, TP.HCM','1995-06-10','Nam','0901234567',6,'a.jpg'),(2,'Trần Thị B','Phường 2, Quận Bình Thạnh, TP.HCM','1980-02-20','Nữ','0912345678',7,'b.jpg'),(3,'Lê Cường','Phường Linh Trung, TP. Thủ Đức','2012-09-15','Nam','0987654321',8,'c.jpg'),(4,'Phạm Dung','Quận Hoàng Mai, Hà Nội','1958-03-05','Nữ','0932123456',9,'d.jpg'),(5,'Vũ Hồng','Quận Đống Đa, Hà Nội','1997-12-01','Nữ','0967876543',10,'e.jpg');
/*!40000 ALTER TABLE `patient_record` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `schedule`
--

DROP TABLE IF EXISTS `schedule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `schedule` (
  `schedule_id` int NOT NULL AUTO_INCREMENT,
  `schedule_time` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`schedule_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `schedule`
--

LOCK TABLES `schedule` WRITE;
/*!40000 ALTER TABLE `schedule` DISABLE KEYS */;
INSERT INTO `schedule` VALUES (1,'07:00 - 08:00'),(2,'08:00 - 09:00'),(3,'09:00 - 10:00'),(4,'10:00 - 11:00'),(5,'14:00 - 15:00'),(6,'15:00 - 16:00'),(7,'16:00 - 17:00');
/*!40000 ALTER TABLE `schedule` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `specializations`
--

DROP TABLE IF EXISTS `specializations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `specializations` (
  `specializations_id` int NOT NULL AUTO_INCREMENT,
  `specialization_name` varchar(125) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`specializations_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `specializations`
--

LOCK TABLES `specializations` WRITE;
/*!40000 ALTER TABLE `specializations` DISABLE KEYS */;
INSERT INTO `specializations` VALUES (1,'Tim mạch','Chẩn đoán và điều trị các bệnh liên quan đến tim'),(2,'Tai - Mũi - Họng','Chuyên điều trị các bệnh về tai, mũi, họng'),(3,'Da liễu','Điều trị các bệnh về da liễu, dị ứng, nấm'),(4,'Nhi khoa','Chăm sóc sức khỏe trẻ em'),(5,'Dinh dưỡng','Tư vấn và xây dựng chế độ ăn hợp lý');
/*!40000 ALTER TABLE `specializations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `user_role` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'bacsi_nam','123456','nam@benhvien.vn','doctor'),(2,'bacsi_mai','123456','mai@benhvien.vn','doctor'),(3,'bacsi_long','123456','long@benhvien.vn','doctor'),(4,'bacsi_phuc','123456','phuc@benhvien.vn','doctor'),(5,'bacsi_lan','123456','lan@benhvien.vn','doctor'),(6,'nguyenvana','123456','vana@gmail.com','patient'),(7,'tranthib','123456','thib@gmail.com','patient'),(8,'lecuong','123456','cuongle@gmail.com','patient'),(9,'phamd','123456','pham.d@gmail.com','patient'),(10,'vuhong','123456','hongvu@gmail.com','patient'),(11,'admin','123','admin@benhvien.vn','admin');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-07-05 22:50:49
