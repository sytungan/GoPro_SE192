-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2020 at 08:35 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `goprosedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `catdb`
--

CREATE TABLE `catdb` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catdb`
--

INSERT INTO `catdb` (`cat_id`, `cat_name`, `cat_description`) VALUES
(1, 'Math', 'Very hard'),
(2, 'English', 'Very easy'),
(4, 'Sử', 'Dân ta có lòng nồng nàn yêu nước'),
(5, 'DSA', 'Học kì sau qua môn');

-- --------------------------------------------------------

--
-- Table structure for table `examdb`
--

CREATE TABLE `examdb` (
  `id` int(20) NOT NULL,
  `name` text NOT NULL,
  `subject` text NOT NULL,
  `author` text NOT NULL,
  `question` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`question`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `examdb`
--

INSERT INTO `examdb` (`id`, `name`, `subject`, `author`, `question`) VALUES
(1, 'Đề thi trường THPT số 1 Phù Cát', 'Toán', 'Hồ Quang Khải', '{\r\n  \"exam\": [\r\n      {\r\n          \"question\":\"1\",\r\n          \"content\": \"How many EX ?\",\r\n          \"answerA\": \"Want\",\r\n          \"answerB\": \"True\",\r\n          \"answerC\": \"Tree\",\r\n          \"answerD\": \"For\",\r\n          \"answerE\": \"Fine\",\r\n          \"key\": \"A\"\r\n      }, \r\n      {\r\n          \"question\":\"2\",\r\n          \"content\": \"How many NYC ?\",\r\n          \"answerA\": \"Want\",\r\n          \"answerB\": \"True\",\r\n          \"answerC\": \"Tree\",\r\n          \"answerD\": \"For\",\r\n          \"answerE\": \"Fine\",\r\n          \"key\": \"B\"\r\n      }\r\n  ]\r\n}'),
(2, 'Đề thi minh họa 2017', 'GDCD', 'Bộ GD&ĐT', '{\r\n  \"exam\": [\r\n      {\r\n          \"question\":\"1\",\r\n          \"content\": \"Quyền nào dưới đây của công dân là cơ sở để hình thành cơ quan quyền lực nhà nước?\",\r\n          \"answerA\": \"Khiếu nại và tố cáo\",\r\n          \"answerB\": \"Bầu cử và ứng cử\",\r\n          \"answerC\": \"Tham gia quản lí xã hội\",\r\n          \"answerD\": \"Tự do ngôn luận, báo chí\",\r\n          \"key\": \"A\"\r\n      }, \r\n      {\r\n          \"question\":\"2\",\r\n          \"content\": \"Bất cứ công dân nào điều khiển xe gắn máy vào đường ngược chiều đều bị cảnh sát giao thông lập biên bản xử phạt là thể hiện bình đẳng về trách nhiệm\",\r\n          \"answerA\": \"Pháp lý\",\r\n          \"answerB\": \"Cá nhân\",\r\n          \"answerC\": \"Xã hội\",\r\n          \"answerD\": \"Cộng đồng\",\r\n          \"key\": \"B\"\r\n      }, \r\n      {\r\n          \"question\":\"3\",\r\n          \"content\": \"Bắt người phạm tội quả tang là công dân thực hiện đúng quyền bất khả xâm phạm về\",\r\n          \"answerA\": \"Địa vị\",\r\n          \"answerB\": \"Danh tính\",\r\n          \"answerC\": \"Đời tư\",\r\n          \"answerD\": \"Thân thể\",\r\n          \"key\": \"B\"\r\n      }, \r\n      {\r\n          \"question\":\"4\",\r\n          \"content\": \"Nhà nước tạo mọi điều kiện để công dân thuộc các dân tộc khác nhau đều được bình đẳng về\",\r\n          \"answerA\": \"cơ hội học tập\",\r\n          \"answerB\": \"nhu cầu hưởng thụ\",\r\n          \"answerC\": \"mức thuế thu nhập\",\r\n          \"answerD\": \"phát triển kĩ năng\",\r\n          \"key\": \"B\"\r\n      }, \r\n      {\r\n          \"question\":\"5\",\r\n          \"content\": \"Quyền khiếu nại thể hiện mối quan hệ giữa\",\r\n          \"answerA\": \"cộng đồng và cá nhân\",\r\n          \"answerB\": \"nhà nước và công dân\",\r\n          \"answerC\": \"nhà nước và xã hội\",\r\n          \"answerD\": \"cộng đồng và đoàn thể\",\r\n          \"key\": \"B\"\r\n      }, \r\n      {\r\n          \"question\":\"6\",\r\n          \"content\": \"Phát biểu ý kiến trong các buổi sinh hoạt lớp là học sinh thực hiện quyền\",\r\n          \"answerA\": \"chủ động phán quyết\",\r\n          \"answerB\": \"tự do ngôn luận\",\r\n          \"answerC\": \"tích cực đàm phán\",\r\n          \"answerD\": \"công khai phê bình\",\r\n          \"key\": \"B\"\r\n      }, \r\n      {\r\n          \"question\":\"7\",\r\n          \"content\": \"Tiếp cận các phương tiện thông tin đại chúng là công dân thực hiện quyền được\",\r\n          \"answerA\": \"Điều phối\",\r\n          \"answerB\": \"Đãi ngộ\",\r\n          \"answerC\": \"Phát triển\",\r\n          \"answerD\": \"Đầu tư\",\r\n          \"key\": \"B\"\r\n      }, \r\n      {\r\n          \"question\":\"8\",\r\n          \"content\": \"Vợ chồng cùng bàn bạc và thống nhất phương pháp giáo dục con cái là thể hiện nội dung quyền bình đẳng hôn nhân và gia đình trong\",\r\n          \"answerA\": \"môi trường xã hội\",\r\n          \"answerB\": \"định hướng nghề nghiệp\",\r\n          \"answerC\": \"quan hệ nhân thân\",\r\n          \"answerD\": \"phạm vi gia tộc\",\r\n          \"key\": \"B\"\r\n      }, {\r\n          \"question\":\"9\",\r\n          \"content\": \"Quyền nào dưới đây của công dân là cơ sở để hình thành cơ quan quyền lực nhà nước?\",\r\n          \"answerA\": \"Khiếu nại và tố cáo\",\r\n          \"answerB\": \"Bầu cử và ứng cử\",\r\n          \"answerC\": \"Tham gia quản lí xã hội\",\r\n          \"answerD\": \"Tự do ngôn luận, báo chí\",\r\n          \"key\": \"A\"\r\n      }, \r\n      {\r\n          \"question\":\"10\",\r\n          \"content\": \"Bất cứ công dân nào điều khiển xe gắn máy vào đường ngược chiều đều bị cảnh sát giao thông lập biên bản xử phạt là thể hiện bình đẳng về trách nhiệm\",\r\n          \"answerA\": \"Pháp lý\",\r\n          \"answerB\": \"Cá nhân\",\r\n          \"answerC\": \"Xã hội\",\r\n          \"answerD\": \"Cộng đồng\",\r\n          \"key\": \"B\"\r\n      }, \r\n      {\r\n          \"question\":\"11\",\r\n          \"content\": \"Bắt người phạm tội quả tang là công dân thực hiện đúng quyền bất khả xâm phạm về\",\r\n          \"answerA\": \"Địa vị\",\r\n          \"answerB\": \"Danh tính\",\r\n          \"answerC\": \"Đời tư\",\r\n          \"answerD\": \"Thân thể\",\r\n          \"key\": \"B\"\r\n      }, \r\n      {\r\n          \"question\":\"12\",\r\n          \"content\": \"Nhà nước tạo mọi điều kiện để công dân thuộc các dân tộc khác nhau đều được bình đẳng về\",\r\n          \"answerA\": \"cơ hội học tập\",\r\n          \"answerB\": \"nhu cầu hưởng thụ\",\r\n          \"answerC\": \"mức thuế thu nhập\",\r\n          \"answerD\": \"phát triển kĩ năng\",\r\n          \"key\": \"B\"\r\n      }, \r\n      {\r\n          \"question\":\"13\",\r\n          \"content\": \"Quyền khiếu nại thể hiện mối quan hệ giữa\",\r\n          \"answerA\": \"cộng đồng và cá nhân\",\r\n          \"answerB\": \"nhà nước và công dân\",\r\n          \"answerC\": \"nhà nước và xã hội\",\r\n          \"answerD\": \"cộng đồng và đoàn thể\",\r\n          \"key\": \"B\"\r\n      }, \r\n      {\r\n          \"question\":\"14\",\r\n          \"content\": \"Phát biểu ý kiến trong các buổi sinh hoạt lớp là học sinh thực hiện quyền\",\r\n          \"answerA\": \"chủ động phán quyết\",\r\n          \"answerB\": \"tự do ngôn luận\",\r\n          \"answerC\": \"tích cực đàm phán\",\r\n          \"answerD\": \"công khai phê bình\",\r\n          \"key\": \"B\"\r\n      }, \r\n      {\r\n          \"question\":\"15\",\r\n          \"content\": \"Tiếp cận các phương tiện thông tin đại chúng là công dân thực hiện quyền được\",\r\n          \"answerA\": \"Điều phối\",\r\n          \"answerB\": \"Đãi ngộ\",\r\n          \"answerC\": \"Phát triển\",\r\n          \"answerD\": \"Đầu tư\",\r\n          \"key\": \"B\"\r\n      }, \r\n      {\r\n          \"question\":\"16\",\r\n          \"content\": \"Vợ chồng cùng bàn bạc và thống nhất phương pháp giáo dục con cái là thể hiện nội dung quyền bình đẳng hôn nhân và gia đình trong\",\r\n          \"answerA\": \"môi trường xã hội\",\r\n          \"answerB\": \"định hướng nghề nghiệp\",\r\n          \"answerC\": \"quan hệ nhân thân\",\r\n          \"answerD\": \"phạm vi gia tộc\",\r\n          \"key\": \"B\"\r\n      }, {\r\n          \"question\":\"17\",\r\n          \"content\": \"Quyền nào dưới đây của công dân là cơ sở để hình thành cơ quan quyền lực nhà nước?\",\r\n          \"answerA\": \"Khiếu nại và tố cáo\",\r\n          \"answerB\": \"Bầu cử và ứng cử\",\r\n          \"answerC\": \"Tham gia quản lí xã hội\",\r\n          \"answerD\": \"Tự do ngôn luận, báo chí\",\r\n          \"key\": \"A\"\r\n      }, \r\n      {\r\n          \"question\":\"18\",\r\n          \"content\": \"Bất cứ công dân nào điều khiển xe gắn máy vào đường ngược chiều đều bị cảnh sát giao thông lập biên bản xử phạt là thể hiện bình đẳng về trách nhiệm\",\r\n          \"answerA\": \"Pháp lý\",\r\n          \"answerB\": \"Cá nhân\",\r\n          \"answerC\": \"Xã hội\",\r\n          \"answerD\": \"Cộng đồng\",\r\n          \"key\": \"B\"\r\n      }, \r\n      {\r\n          \"question\":\"19\",\r\n          \"content\": \"Bắt người phạm tội quả tang là công dân thực hiện đúng quyền bất khả xâm phạm về\",\r\n          \"answerA\": \"Địa vị\",\r\n          \"answerB\": \"Danh tính\",\r\n          \"answerC\": \"Đời tư\",\r\n          \"answerD\": \"Thân thể\",\r\n          \"key\": \"B\"\r\n      }, \r\n      {\r\n          \"question\":\"20\",\r\n          \"content\": \"Nhà nước tạo mọi điều kiện để công dân thuộc các dân tộc khác nhau đều được bình đẳng về\",\r\n          \"answerA\": \"cơ hội học tập\",\r\n          \"answerB\": \"nhu cầu hưởng thụ\",\r\n          \"answerC\": \"mức thuế thu nhập\",\r\n          \"answerD\": \"phát triển kĩ năng\",\r\n          \"key\": \"B\"\r\n      }, \r\n      {\r\n          \"question\":\"21\",\r\n          \"content\": \"Quyền khiếu nại thể hiện mối quan hệ giữa\",\r\n          \"answerA\": \"cộng đồng và cá nhân\",\r\n          \"answerB\": \"nhà nước và công dân\",\r\n          \"answerC\": \"nhà nước và xã hội\",\r\n          \"answerD\": \"cộng đồng và đoàn thể\",\r\n          \"key\": \"B\"\r\n      }, \r\n      {\r\n          \"question\":\"22\",\r\n          \"content\": \"Phát biểu ý kiến trong các buổi sinh hoạt lớp là học sinh thực hiện quyền\",\r\n          \"answerA\": \"chủ động phán quyết\",\r\n          \"answerB\": \"tự do ngôn luận\",\r\n          \"answerC\": \"tích cực đàm phán\",\r\n          \"answerD\": \"công khai phê bình\",\r\n          \"key\": \"B\"\r\n      }, \r\n      {\r\n          \"question\":\"23\",\r\n          \"content\": \"Tiếp cận các phương tiện thông tin đại chúng là công dân thực hiện quyền được\",\r\n          \"answerA\": \"Điều phối\",\r\n          \"answerB\": \"Đãi ngộ\",\r\n          \"answerC\": \"Phát triển\",\r\n          \"answerD\": \"Đầu tư\",\r\n          \"key\": \"B\"\r\n      }, \r\n      {\r\n          \"question\":\"24\",\r\n          \"content\": \"Vợ chồng cùng bàn bạc và thống nhất phương pháp giáo dục con cái là thể hiện nội dung quyền bình đẳng hôn nhân và gia đình trong\",\r\n          \"answerA\": \"môi trường xã hội\",\r\n          \"answerB\": \"định hướng nghề nghiệp\",\r\n          \"answerC\": \"quan hệ nhân thân\",\r\n          \"answerD\": \"phạm vi gia tộc\",\r\n          \"key\": \"B\"\r\n      }, {\r\n          \"question\":\"25\",\r\n          \"content\": \"Quyền nào dưới đây của công dân là cơ sở để hình thành cơ quan quyền lực nhà nước?\",\r\n          \"answerA\": \"Khiếu nại và tố cáo\",\r\n          \"answerB\": \"Bầu cử và ứng cử\",\r\n          \"answerC\": \"Tham gia quản lí xã hội\",\r\n          \"answerD\": \"Tự do ngôn luận, báo chí\",\r\n          \"key\": \"A\"\r\n      }, \r\n      {\r\n          \"question\":\"26\",\r\n          \"content\": \"Bất cứ công dân nào điều khiển xe gắn máy vào đường ngược chiều đều bị cảnh sát giao thông lập biên bản xử phạt là thể hiện bình đẳng về trách nhiệm\",\r\n          \"answerA\": \"Pháp lý\",\r\n          \"answerB\": \"Cá nhân\",\r\n          \"answerC\": \"Xã hội\",\r\n          \"answerD\": \"Cộng đồng\",\r\n          \"key\": \"B\"\r\n      }, \r\n      {\r\n          \"question\":\"27\",\r\n          \"content\": \"Bắt người phạm tội quả tang là công dân thực hiện đúng quyền bất khả xâm phạm về\",\r\n          \"answerA\": \"Địa vị\",\r\n          \"answerB\": \"Danh tính\",\r\n          \"answerC\": \"Đời tư\",\r\n          \"answerD\": \"Thân thể\",\r\n          \"key\": \"B\"\r\n      }, \r\n      {\r\n          \"question\":\"28\",\r\n          \"content\": \"Nhà nước tạo mọi điều kiện để công dân thuộc các dân tộc khác nhau đều được bình đẳng về\",\r\n          \"answerA\": \"cơ hội học tập\",\r\n          \"answerB\": \"nhu cầu hưởng thụ\",\r\n          \"answerC\": \"mức thuế thu nhập\",\r\n          \"answerD\": \"phát triển kĩ năng\",\r\n          \"key\": \"B\"\r\n      }, \r\n      {\r\n          \"question\":\"29\",\r\n          \"content\": \"Quyền khiếu nại thể hiện mối quan hệ giữa\",\r\n          \"answerA\": \"cộng đồng và cá nhân\",\r\n          \"answerB\": \"nhà nước và công dân\",\r\n          \"answerC\": \"nhà nước và xã hội\",\r\n          \"answerD\": \"cộng đồng và đoàn thể\",\r\n          \"key\": \"B\"\r\n      }, \r\n      {\r\n          \"question\":\"30\",\r\n          \"content\": \"Phát biểu ý kiến trong các buổi sinh hoạt lớp là học sinh thực hiện quyền\",\r\n          \"answerA\": \"chủ động phán quyết\",\r\n          \"answerB\": \"tự do ngôn luận\",\r\n          \"answerC\": \"tích cực đàm phán\",\r\n          \"answerD\": \"công khai phê bình\",\r\n          \"key\": \"B\"\r\n      }, \r\n      {\r\n          \"question\":\"31\",\r\n          \"content\": \"Tiếp cận các phương tiện thông tin đại chúng là công dân thực hiện quyền được\",\r\n          \"answerA\": \"Điều phối\",\r\n          \"answerB\": \"Đãi ngộ\",\r\n          \"answerC\": \"Phát triển\",\r\n          \"answerD\": \"Đầu tư\",\r\n          \"key\": \"B\"\r\n      }, \r\n      {\r\n          \"question\":\"32\",\r\n          \"content\": \"Vợ chồng cùng bàn bạc và thống nhất phương pháp giáo dục con cái là thể hiện nội dung quyền bình đẳng hôn nhân và gia đình trong\",\r\n          \"answerA\": \"môi trường xã hội\",\r\n          \"answerB\": \"định hướng nghề nghiệp\",\r\n          \"answerC\": \"quan hệ nhân thân\",\r\n          \"answerD\": \"phạm vi gia tộc\",\r\n          \"key\": \"B\"\r\n      }, {\r\n          \"question\":\"33\",\r\n          \"content\": \"Quyền nào dưới đây của công dân là cơ sở để hình thành cơ quan quyền lực nhà nước?\",\r\n          \"answerA\": \"Khiếu nại và tố cáo\",\r\n          \"answerB\": \"Bầu cử và ứng cử\",\r\n          \"answerC\": \"Tham gia quản lí xã hội\",\r\n          \"answerD\": \"Tự do ngôn luận, báo chí\",\r\n          \"key\": \"A\"\r\n      }, \r\n      {\r\n          \"question\":\"34\",\r\n          \"content\": \"Bất cứ công dân nào điều khiển xe gắn máy vào đường ngược chiều đều bị cảnh sát giao thông lập biên bản xử phạt là thể hiện bình đẳng về trách nhiệm\",\r\n          \"answerA\": \"Pháp lý\",\r\n          \"answerB\": \"Cá nhân\",\r\n          \"answerC\": \"Xã hội\",\r\n          \"answerD\": \"Cộng đồng\",\r\n          \"key\": \"B\"\r\n      }, \r\n      {\r\n          \"question\":\"35\",\r\n          \"content\": \"Bắt người phạm tội quả tang là công dân thực hiện đúng quyền bất khả xâm phạm về\",\r\n          \"answerA\": \"Địa vị\",\r\n          \"answerB\": \"Danh tính\",\r\n          \"answerC\": \"Đời tư\",\r\n          \"answerD\": \"Thân thể\",\r\n          \"key\": \"B\"\r\n      }, \r\n      {\r\n          \"question\":\"36\",\r\n          \"content\": \"Nhà nước tạo mọi điều kiện để công dân thuộc các dân tộc khác nhau đều được bình đẳng về\",\r\n          \"answerA\": \"cơ hội học tập\",\r\n          \"answerB\": \"nhu cầu hưởng thụ\",\r\n          \"answerC\": \"mức thuế thu nhập\",\r\n          \"answerD\": \"phát triển kĩ năng\",\r\n          \"key\": \"B\"\r\n      }, \r\n      {\r\n          \"question\":\"37\",\r\n          \"content\": \"Quyền khiếu nại thể hiện mối quan hệ giữa\",\r\n          \"answerA\": \"cộng đồng và cá nhân\",\r\n          \"answerB\": \"nhà nước và công dân\",\r\n          \"answerC\": \"nhà nước và xã hội\",\r\n          \"answerD\": \"cộng đồng và đoàn thể\",\r\n          \"key\": \"B\"\r\n      }, \r\n      {\r\n          \"question\":\"38\",\r\n          \"content\": \"Phát biểu ý kiến trong các buổi sinh hoạt lớp là học sinh thực hiện quyền\",\r\n          \"answerA\": \"chủ động phán quyết\",\r\n          \"answerB\": \"tự do ngôn luận\",\r\n          \"answerC\": \"tích cực đàm phán\",\r\n          \"answerD\": \"công khai phê bình\",\r\n          \"key\": \"B\"\r\n      }, \r\n      {\r\n          \"question\":\"39\",\r\n          \"content\": \"Tiếp cận các phương tiện thông tin đại chúng là công dân thực hiện quyền được\",\r\n          \"answerA\": \"Điều phối\",\r\n          \"answerB\": \"Đãi ngộ\",\r\n          \"answerC\": \"Phát triển\",\r\n          \"answerD\": \"Đầu tư\",\r\n          \"key\": \"B\"\r\n      }, \r\n      {\r\n          \"question\":\"40\",\r\n          \"content\": \"Vợ chồng cùng bàn bạc và thống nhất phương pháp giáo dục con cái là thể hiện nội dung quyền bình đẳng hôn nhân và gia đình trong\",\r\n          \"answerA\": \"môi trường xã hội\",\r\n          \"answerB\": \"định hướng nghề nghiệp\",\r\n          \"answerC\": \"quan hệ nhân thân\",\r\n          \"answerD\": \"phạm vi gia tộc\",\r\n          \"key\": \"B\"\r\n      } \r\n  ]\r\n}\r\n'),
(15, 'Đề mẫu', 'Toán', 'Hồ Quang Khải', '{\"exam\":[{\"question\":\"1\",\"content\":\"Nguyu00e1u00bbu0085n Huu00e1u00bbu0087 hay QT\",\"answerA\":\"Lu1edbn hu01a1n\",\"answerB\":\"Quang Trung\",\"answerC\":\"Nguyu1ec5n Huu1ec7\",\"answerD\":\"u0110u00e1p u00e1n khu00e1c\",\"key\":\"A\"},{\"question\":\"2\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"3\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"4\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"5\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"6\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"7\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"8\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"9\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"10\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"11\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"12\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"13\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"14\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"15\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"16\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"17\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"18\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"19\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"20\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"21\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"22\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"23\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"24\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"25\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"26\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"27\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"28\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"29\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"30\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"31\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"32\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"33\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"34\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"35\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"36\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"37\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"38\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"39\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"40\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"null\"}]}'),
(16, 'Đề mẫu', 'Toán', 'Hồ Quang Khải', '{\"exam\":[{\"question\":\"1\",\"content\":\"Nguyễn Huệ\",\"answerA\":\"Lớn hơn\",\"answerB\":\"Lớn Hơn\",\"answerC\":\"Nhỏ hơn\",\"answerD\":\"Đáp án khác\",\"key\":\"D\"},{\"question\":\"2\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"3\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"4\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"5\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"6\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"7\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"8\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"9\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"10\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"11\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"12\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"13\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"14\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"15\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"16\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"17\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"18\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"19\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"20\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"21\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"22\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"23\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"24\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"25\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"26\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"27\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"28\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"29\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"30\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"31\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"32\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"33\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"34\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"35\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"36\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"37\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"38\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"39\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"40\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"null\"}]}'),
(17, 'Đề thi thử BK', 'Toán', 'Hồ Quang Khải', '{\"exam\":[{\"question\":\"1\",\"content\":\"Hình vuông có mấy cạnh?\",\"answerA\":\"3\",\"answerB\":\"4\",\"answerC\":\"5\",\"answerD\":\"6\",\"key\":\"B\"},{\"question\":\"2\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"3\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"4\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"5\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"6\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"7\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"8\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"9\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"10\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"11\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"12\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"13\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"14\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"15\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"16\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"17\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"18\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"19\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"20\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"21\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"22\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"23\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"24\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"25\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"26\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"27\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"28\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"29\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"30\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"31\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"32\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"33\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"34\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"35\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"36\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"37\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"38\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"39\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"40\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"null\"}]}');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `file` text NOT NULL,
  `url` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pendingexamdb`
--

CREATE TABLE `pendingexamdb` (
  `id` int(20) NOT NULL,
  `name` text NOT NULL,
  `subject` text NOT NULL,
  `author` text NOT NULL,
  `question` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendingexamdb`
--

INSERT INTO `pendingexamdb` (`id`, `name`, `subject`, `author`, `question`) VALUES
(3, 'Đề thi trường THPT số 3 BK', 'Anh', 'Hồ Đình Lợi', '\r\n{\r\n    \"exam\": [\r\n        {\r\n            \"question\":\"Câu 1\",\r\n            \"content\": \"How many exxxxxx ?\",\r\n            \"answerA\": \"Want\",\r\n            \"answerB\": \"True\",\r\n            \"answerC\": \"Tree\",\r\n            \"answerD\": \"For\",\r\n            \"answerE\": \"Fine\",\r\n            \"key\": \"A\"\r\n        }, \r\n        {\r\n            \"question\":\"Câu 2\",\r\n            \"content\": \"How many year ?\",\r\n            \"answerA\": \"Want\",\r\n            \"answerB\": \"True\",\r\n            \"answerC\": \"Tree\",\r\n            \"answerD\": \"For\",\r\n            \"answerE\": \"Fine\",\r\n            \"key\": \"B\"\r\n        }\r\n    ]\r\n}\r\n'),
(4, 'Đề thi trường THPT BK non x3', 'Lý', 'Nguyễn Quang Khiêm', '\r\n{\r\n    \"exam\": [\r\n        {\r\n            \"question\":\"Câu 1\",\r\n            \"content\": \"How many Pi ?\",\r\n            \"answerA\": \"Want\",\r\n            \"answerB\": \"True\",\r\n            \"answerC\": \"Tree\",\r\n            \"answerD\": \"For\",\r\n            \"answerE\": \"Fine\",\r\n            \"key\": \"A\"\r\n        }, \r\n        {\r\n            \"question\":\"Câu 2\",\r\n            \"content\": \"How many year for Pi ?\",\r\n            \"answerA\": \"Want\",\r\n            \"answerB\": \"True\",\r\n            \"answerC\": \"Tree\",\r\n            \"answerD\": \"For\",\r\n            \"answerE\": \"Fine\",\r\n            \"key\": \"B\"\r\n        }\r\n    ]\r\n}\r\n'),
(14, 'Đề mẫu', 'Toán', 'Hồ Đình An', '{\"exam\":[{\"question\":\"1\",\"content\":\"Nguy?n Hu? hay Quang Trung\",\"answerA\":\"Lu1edbn hu01a1n\",\"answerB\":\"Lu1edbn Hu01a1n\",\"answerC\":\"Nhu1ecf hu01a1n\",\"answerD\":\"u0110u00e1p u00e1n khu00e1c\",\"key\":\"B\"},{\"question\":\"2\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"3\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"4\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"5\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"6\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"7\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"8\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"9\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"10\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"11\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"12\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"13\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"14\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"15\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"16\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"17\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"18\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"19\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"20\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"21\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"22\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"23\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"24\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"25\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"26\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"27\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"28\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"29\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"30\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"31\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"32\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"33\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"34\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"35\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"36\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"37\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"38\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"39\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"\"},{\"question\":\"40\",\"content\":\"\",\"answerA\":\"\",\"answerB\":\"\",\"answerC\":\"\",\"answerD\":\"\",\"key\":\"null\"}]}');

-- --------------------------------------------------------

--
-- Table structure for table `replydb`
--

CREATE TABLE `replydb` (
  `reply_id` int(11) NOT NULL,
  `reply_content` text NOT NULL,
  `reply_date` date NOT NULL,
  `reply_topic` text NOT NULL,
  `reply_by` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `replydb`
--

INSERT INTO `replydb` (`reply_id`, `reply_content`, `reply_date`, `reply_topic`, `reply_by`) VALUES
(1, 'Quang Trung là anh Nguyễn Huệ, tui ở Tây Sơn nên biết chắc', '2020-06-30', '36', 11),
(3, 'Quang Trung là anh Nguyễn Huệ, tui ở Tây Sơn nên biết chắc', '2020-06-30', '37', 11);

-- --------------------------------------------------------

--
-- Table structure for table `tkb`
--

CREATE TABLE `tkb` (
  `subject21` text NOT NULL,
  `subject22` text NOT NULL,
  `subject23` text NOT NULL,
  `subject24` text NOT NULL,
  `subject25` text NOT NULL,
  `subject31` text NOT NULL,
  `subject32` text NOT NULL,
  `subject33` text NOT NULL,
  `subject34` text NOT NULL,
  `subject35` text NOT NULL,
  `subject41` text NOT NULL,
  `subject42` text NOT NULL,
  `subject43` text NOT NULL,
  `subject44` text NOT NULL,
  `subject45` text NOT NULL,
  `subject51` text NOT NULL,
  `subject52` text NOT NULL,
  `subject53` text NOT NULL,
  `subject54` text NOT NULL,
  `subject55` text NOT NULL,
  `subject61` text NOT NULL,
  `subject62` text NOT NULL,
  `subject63` text NOT NULL,
  `subject64` text NOT NULL,
  `subject65` text NOT NULL,
  `subject71` text NOT NULL,
  `subject72` text NOT NULL,
  `subject73` text NOT NULL,
  `subject74` text NOT NULL,
  `subject75` text NOT NULL,
  `subject81` text NOT NULL,
  `subject82` text NOT NULL,
  `subject83` text NOT NULL,
  `subject84` text NOT NULL,
  `subject85` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tkb`
--

INSERT INTO `tkb` (`subject21`, `subject22`, `subject23`, `subject24`, `subject25`, `subject31`, `subject32`, `subject33`, `subject34`, `subject35`, `subject41`, `subject42`, `subject43`, `subject44`, `subject45`, `subject51`, `subject52`, `subject53`, `subject54`, `subject55`, `subject61`, `subject62`, `subject63`, `subject64`, `subject65`, `subject71`, `subject72`, `subject73`, `subject74`, `subject75`, `subject81`, `subject82`, `subject83`, `subject84`, `subject85`) VALUES
('Toán', 'Lý', 'Hóa', 'Văn', '', '', '', '', '', '', '', '', '', '', '', 'Lý ', 'Hóa', 'Sinh', 'Sử', 'DSA', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `topicdb`
--

CREATE TABLE `topicdb` (
  `topic_id` int(8) NOT NULL,
  `topic_subject` varchar(255) NOT NULL,
  `topic_date` date NOT NULL,
  `topic_cat` int(8) NOT NULL,
  `topic_by` int(8) NOT NULL,
  `topic_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topicdb`
--

INSERT INTO `topicdb` (`topic_id`, `topic_subject`, `topic_date`, `topic_cat`, `topic_by`, `topic_content`) VALUES
(9, 'dat', '2020-06-29', 2, 5, '123'),
(12, 'Hasagi', '2020-06-29', 2, 5, '123'),
(32, 'Dat2', '2020-06-29', 2, 11, '1234'),
(36, 'Quang Trung hay Nguyễn Huệ???', '2020-06-30', 4, 11, ''),
(37, 'Quang Trung hay Nguyễn Huệ???', '2020-06-30', 1, 11, 'QT hay NH');

-- --------------------------------------------------------

--
-- Table structure for table `userdb`
--

CREATE TABLE `userdb` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_role` varchar(25) NOT NULL,
  `user_active` int(1) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_level` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdb`
--

INSERT INTO `userdb` (`user_id`, `user_name`, `user_pass`, `user_role`, `user_active`, `user_email`, `user_level`) VALUES
(1, 'thewjn92', '123', 'Student', 1, 'thewjn92@gmail.com', 0),
(2, 'thewjn93', 'sha1(123)', 'Student', 1, 'thewjn92@gmail.com', 0),
(3, 'thewjn113', '123', 'Student', 1, 'thewjn113@gmail.com', 0),
(4, 'thewjn114', '123', 'Student', 1, 'thewjn113@gmail.com', 0),
(5, 'dat123', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Student', 1, 'thewjn92@gmail.com', 0),
(6, 'dat1234', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Student', 1, 'thewjn92@gmail.com', 0),
(7, 'dat', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Student', 1, 'thewjn113@gmail.com', 0),
(8, '123', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'Student', 1, '', 0),
(9, 'an123', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Student', 1, 'thewjn113@gmail.com', 0),
(10, 'sieunhangao', '123', 'Teacher', 1, 'thewjn92@gmail.com', 1),
(11, 'Khiem', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Student', 1, 'thewjn92@gmail.com', 1),
(12, 'Khanh', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Student', 1, 'thewjn113@gmail.com', 0),
(13, 'qe', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Student', 1, 'thewjn92@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catdb`
--
ALTER TABLE `catdb`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `examdb`
--
ALTER TABLE `examdb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendingexamdb`
--
ALTER TABLE `pendingexamdb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replydb`
--
ALTER TABLE `replydb`
  ADD PRIMARY KEY (`reply_id`);

--
-- Indexes for table `topicdb`
--
ALTER TABLE `topicdb`
  ADD PRIMARY KEY (`topic_id`);

--
-- Indexes for table `userdb`
--
ALTER TABLE `userdb`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catdb`
--
ALTER TABLE `catdb`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `examdb`
--
ALTER TABLE `examdb`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pendingexamdb`
--
ALTER TABLE `pendingexamdb`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `replydb`
--
ALTER TABLE `replydb`
  MODIFY `reply_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `topicdb`
--
ALTER TABLE `topicdb`
  MODIFY `topic_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `userdb`
--
ALTER TABLE `userdb`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
