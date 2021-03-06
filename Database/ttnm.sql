-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 17, 2022 lúc 09:16 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ttnm`
--
CREATE DATABASE IF NOT EXISTS `ttnm` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ttnm`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `animal`
--

CREATE TABLE `animal` (
  `ID_Animal` int(11) NOT NULL,
  `Ten_KH` varchar(600) NOT NULL,
  `Ten_TV` varchar(100) NOT NULL,
  `Ten_Local` varchar(100) NOT NULL,
  `Gioi` varchar(20) NOT NULL DEFAULT 'Animalia',
  `Nganh` varchar(200) NOT NULL,
  `Lop` varchar(50) NOT NULL,
  `Bo` varchar(50) NOT NULL,
  `Ho` varchar(50) NOT NULL,
  `Hinhthai` varchar(6000) NOT NULL,
  `Moitruong_song` varchar(6000) NOT NULL,
  `Giatri_sudung` varchar(100) NOT NULL,
  `Diadiem` varchar(100) DEFAULT NULL,
  `Tinhtrang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `animal`
--

INSERT INTO `animal` (`ID_Animal`, `Ten_KH`, `Ten_TV`, `Ten_Local`, `Gioi`, `Nganh`, `Lop`, `Bo`, `Ho`, `Hinhthai`, `Moitruong_song`, `Giatri_sudung`, `Diadiem`, `Tinhtrang`) VALUES
(1, 'Ichthyophis nguyenorum Nishikawa, Matsui, and Orlov, 2012', 'Ếch giun nguyễn', 'Rắn trun đĩa', 'Animalia', 'chordata', 'AMPHIBIA (Linnaeus, 1758)', 'GYMNOPHIONA (Muller, 1832)', 'Ichthyophiidae Taylor, 1968', 'Đặc điểm chẩn loại: cơ thể tròn, dẹt mặt bụng; chóp đuôi cùn, không có dạng mũ; không có đốm màu vàng mặt bụng; đầu rộng nhất ở góc mép miệng, hẹp dần về trước; mút mõm tròn; lỗ mũi nằm gần bờ trước mép miệng; số vòng quanh thân: 312 – 318; sọc vàng rộng chạy liên tục từ sau mắt đến huyệt (Nishikawa et al.,2012). \r\nĐặc điểm hình thái: SVL 201,3 mm. Dài đuôi: 2,6 – 3,5; rộng đuôi: 2,8 – 3,5. Rộng đầu (HW: 6,6). Dài đầu hơn rộng đầu (HL/HW: 1,25-1,47). Cơ thể hơi tròn, dài, dạng rắn. Đầu dẹp, láng; rộng nhất ở mép miệng, hẹo về phía đầu. Mút mõm tròn; dài mõm bằng với ngang đầu ở vị trí mắt. Mắt nhỏ, không mi mắt, có một đôi râu (tentacle) ngắn nằm phía trước mắt. Hai bên thân có sọc  màu vàng bắt đầu từ sau mép miệng đến lỗ huyệt. Số nếp gấp quanh thân: 280 – 300; ở đuôi: 7-8. Đuôi ngắn hơi dẹt ở mặt bụng, phần đỉnh cùn, không có đốm màu cam hay vàng  ở mặt bụng. Mặt lưng có màu tím đen, bụng màu hoa cà nhạt, hai bên sườn có sọc màu vàng liên tục, không đứt quãng, chạy từ khoảng giữa hàm trên (mấu xúc - tu) đến gần mút đuôi. Mắt có viền mỏng màu trắng đục.\r\nGhi chú:  Loài Ichthyophis bannanicus phân biệt với Ichthyophis nguyenorum dựa trên các đặc điểm: số nếp vòng quanh cơ thể của I. nguyenorum (312 – 318) ít hơn so với I. bannanicus (340); sọc bên thân của I. nguyenorum kéo dài đến mút đuôi so với sọc bị đứt quãng ở phía sau đuôi của I. bannanicus Nishikawa et al. (2012).', 'Sống ở các vực nước (ao, vũng...) có nhiều bùn và lá mục, hay các khu vực đất nông nghiệp. Thức ăn gồm côn trùng, giun đất, nhện và những loài không xương sống nhỏ khác.', 'Chưa xác định', 'Rừng Tràm Mỹ Phước, Sóc Trăng', 'LC (Least concern)'),
(2, 'Duttaphrynus melanostictus (Schneider, 1799)', 'Cóc nhà', 'Cóc', 'Animalia', 'chordata', 'AMPHIBIA (Linnaeus, 1758)', 'ANURA (Fischer, 1813)', 'Bufonidae Gray, 1825', 'Đặc điểm chẩn loại: Kích thước cơ thể trung bình, mắt khỏe; phía trên ổ mắt, phía sau ổ mắt, phía trên màng nhĩ và phía trước mắt có nhiều gai nhọn; mõm nhọn, tuyến mang tai lớn, có chều dài hơn chiều rộng; cơ thể có nhiều nốt sần lớn và nhỏ; ngón tay thứ I dài hơn ngón tay thứ II; khớp cổ chân chạm giữa tuyến mang tai khi xếp dọc theo thân', 'Duttaphrynus melanostictus là loài phổ biến, được bắt gặp trên sinh cảnh rừng tràm đặc dụng, rừng tràm khai thác; phân bố rộng khắp khu vực khảo sát .Là loài hoạt động về đêm, kiếm mồi trên nền rừng và trú ngụ trong các hốc cây. Đầu mùa mưa thường tập trung ở các vũng nước đọng trong khu vực và các con đực gọi bạn tình suốt từ tối đến khoảng 8 giờ sáng.', 'Làm thực phẩm', 'Rừng Tràm Mỹ Phước, Sóc Trăng', 'Không có giá trị bảo tồn'),
(3, 'Kaloula pulchra Gray, 1831', 'Ễnh ương', 'Ễnh ương', 'Animalia', 'chordata', 'AMPHIBIA (Linnaeus, 1758)', 'ANURA (Fischer, 1813)', 'Microhylidae (Cóc miệng nhỏ)', '\"Đặc điểm chẩn loại: Ngón chi dẹp và đầu ngón tay mở rộng; toàn bộ mặt lưng màu nâu với 2 dãy màu vàng sáng hoặc vàng nâu chạy dọc từ giữa 2 mắt qua phía trên mắt và kéo dai đến háng; trên ngón có vết tích của màng bơi.\r\nĐặc điểm hình thái: Kích thước trung bình (SVL: 80.3). Cơ thể có hình tam giác khi nhìn từ bên trên, đầu ngắn so với chiều dài thân (HL/SVL: 0,24); chiều dài đầu nhỏ hơn chiều rộng đầu (HL/HW: 0,74); khóe mắt nhỏ; vùng má xiên và hướng lên; mũi tù và ngắn, lỗ mũi nằm gần chóp mỏ và hướng sang 2 bên; khoảng cách giữa hai lỗ mũi tương đương mí mắt trên; màng nhĩ không rõ ràng; nếp gấp mờ vòng qua chẩm đến sau mắt và kết thúc ở ngay trước cánh tay.\r\nDa trơn láng với các nốt sần rải rác trên lưng, nhiều nhất ở phần dưới của mặt lưng, phía sau đùi và một số trên cánh tay. Mặt lưng màu nâu sẫm. Hai dảy màu vàng sáng được bao bọc bởi viền màu nâu đậm hoặc đen bắt đầu từ giữa hai mắt và kéo dài đến háng; hai dảy màu liền nhau ở giữa 2 mắt, hẹp ở sau mắt và nở rộng trên mặt lưng. Một số cá thể giữa lưng có vệt đen hoặc nâu sậm kéo dài từ giữa 2 mắt đến tận xương cụt. Các nốt sần trên lưng có màu tương tự màu của hai dảy màu trên lưng. Trên các chi có màu không đều, các mảng nhỏ màu vàng sáng không đều xen lẫn trên nền màu nâu sẫm; một vệt màu sáng không liên tục phía trên mặt lưng của ống chân sau. Mặt bụng màu trắng sáng với các hoa văn xám dạng khói, phần da trên cổ họng màu đậm hơn trên bụng.\r\nCánh tay hơi dài; ngón tay dài và có vết tích của màng bơi; to dần từ gốc ngón đến đầu ngón, đĩa ngón rộng theo chiều ngang. Ngón thứ nhất ngắn hơn ngón thứ 2; củ bàn vừa phải; có 3 củ bàn, củ bàn ngoài dài, củ bàn giữa nhỏ nhất, bàn tay trơn và không có nốt sần phụ. Thứ tự chiều dài tương đối của các ngón tay: III>IV>II>I.\r\nChân ngắn, chỉ 1/3 xương đùi tự do; cổ chân chạm đến nách khi xếp song song với trục cơ thể. Hai gót chân không chạm nhau khi gập gối và xếp vuông góc trục cơ thể. Bàn chân dài hơn bàn tay nhưng các ngón chân mảnh khảnh hơn; đĩa ngón chân nhỏ tròn, không rộng theo chiều ngang như đĩa ngón tay; ngón chân có vết tích của màng bơi. Có 2 củ bàn chân; củ bàn chân trong dài, nhô cao, cạnh không rõ ràng; củ bàn chân ngoài nhỏ tròn. Thứ tự chiều dài tương đối các ngón chân: IV>III>V>II>I.\"', '\"Một mẫu cái duy nhất của loài này được tìm thấy trên nền rừng trong khu vực rừng tràm Mỹ Phước khai thác vào mùa mưa (tháng 7). Là loài hoạt động về đêm, thường ẩn nấp trong các hốc cây, hoặc bên dưới lớp lá mục trong mùa khô. Thường ra ngoài kiếm ăn khi độ ẩm không khí cao hoặc sau cơn mưa. Sinh sản vào mùa mưa, con đực thường phát tiếng kêu đặc trưng khi đang ngâm mình trên mặt nước (Kalamadi et al. 2002).\r\nGhi chú: qua phỏng vấn, người dân sinh sống xung quanh khu vực nghiên cứu cho biết trước đây chưa từng tìm thấy loài này trong tự nhiên.\"', 'Chưa xác định', 'Rừng Tràm Mỹ Phước, Sóc Trăng', 'Không có giá trị bảo tồn'),
(4, 'Microhyla heymonsii Vogt, 1911', 'Nhái bầu heymon', 'Nhóc nhen', 'Animalia', 'chordata', 'AMPHIBIA (Linnaeus, 1758)', 'ANURA (Fischer, 1813)', 'Microhylidae (cóc miệng nhỏ)', 'Kích thước cơ thể nhỏ; lưng phẳng, màu xám hoặc nâu ở trên, thường có đường kẻ giữa lưng và một hoặc 2 đốm đen ở ngay trung tâm của lưng. Mặt bên của đầu và thân có vệt đen kéo dài đến háng. Màng nhĩ ẩn; ba củ bàn tay lớn và rõ ràng; kích thước gần bằng nhau. Hai củ bàn chân, củ bàn ngoài lớn hơn. Màng bơi giữa các ngón nhỏ và mảnh. Đầu ngón mở rộng thành các đĩa', 'Vào mùa mưa, các các thể của Microhyla heymonsi thường được tìm thấy trên nền rừng, trên các thảm lá mục hoặc cỏ. Chúng thường tập trung nhiều ở các vũng nước đọng hoặc các khu vực ngập nước cạn vào mùa mưa. Con đực có tiếng kêu đặc trưng nhờ túi âm ở cổ họng. Các sinh cảnh trong khu vực có sự hiện diện của loài này gồm rừng tràm đặc dụng và rừng tràm khai thác.', 'Chưa xác định', 'Rừng Tràm Mỹ Phước, Sóc Trăng', 'Không có giá trị bảo tồn'),
(5, 'Hylarana erythraea (Schlegel, 1837)', 'Chàng xanh', 'Bù tọt', 'Animalia', 'chordata', 'AMPHIBIA (Linnaeus, 1758)', 'ANURA (Fischer, 1813)', 'Ranidae Rafinesque, 1814', 'Cơ thể có kích thước tương đối lớn, thường có màu xanh với nếp gấp da trên lưng rộng màu vàng, dảy màu đen ở mặt bên của đầu và cơ thể, mũi nhọn và nhô ra, ngón tay mảnh khảnh, ngón thứ nhất hơi ngắn hơn ngón thứ 2, ngón chân gần như có màng bao phủ hoàn toàn, đĩa nhỏ trên đầu ngón, cổ chân chạm chóp mũi, không có hoa văn vòng quanh chi nhưng có các dấu song song chân, có túi thanh âm, con đực có chai sinh dục trên ngón tay thứ 1.', 'Chàng xanh được tìm thấy trên các sinh cảnh rừng tràm đặc dụng, rừng dừa nước và lung ở Rừng tràm Mỹ Phước. Là loài hoạt động về đêm, chúng được tìm thấy nhiều vào mùa mưa ở ven các kênh nước, ao nước nhỏ, trên lớp thực vật nổi hoặc cả trên cành cây cách mặt đất từ 1-1,5m.', 'Chưa xác định', 'Rừng Tràm Mỹ Phước, Sóc Trăng', 'Không có giá trị bảo tồn'),
(6, 'Polypedates megacephalus Hallowell, 1861', 'Ếch cây mép trắng', 'Hót cổ', 'Animalia', 'chordata', 'AMPHIBIA (Linnaeus, 1758)', 'ANURA (Fischer, 1813)', 'Rhacophoridae Hoffman, 1932', ': Loài có kích thước lớn, chiều dài đầu thân lên đến 75mm (Taylor); được đặc trưng bởi phần da trên đầu dính chặt với vùng mũi và xương trán; con đực có túi thanh âm; chiều rộng gian ổ mắt rộng hơn chiều rộng mí mắt trên; màng nhĩ rõ ràng; ngón tay có màng rất ít, ngón chân có màng bao phủ 2/3 hoặc nhiều hơn; chiều rộng đĩa ngón nhỏ hơn màng nhĩ; cổ bàn chân chạm giữa mắt với lỗ mũi hoặc chóp mũi khi gập sát thân; răng lá mía phát triển; hoa văn chữ x trên vùng đầu – vai.', 'Là loài phân bố đa dạng trong các sinh cảnh từ rừng tràm đặc dụng, rừng tràm trồng, rừng dừa nước trong khu vực Rừng tràm Mỹ Phước. Các cá thể được phát hiện ở các vị trí ven các vũng nước nhỏ, trên cành cây hoặc bụi cây cách mặt đất khoảng 1m. Thường tìm thấy nhiều vào mùa mưa, có tập tính đẻ trứng vào các tổ bọt tự tạo bên trên hoặc cạnh các vũng nước.', 'Chưa xác định', 'Rừng Tràm Mỹ Phước, Sóc Trăng', 'Không có giá trị bảo tồn'),
(7, 'Calotes versicolor (Daudin, 1802)', 'Nhông xanh, Nhông hàng rào, Kì nhông', 'Kì nhông', 'Animalia', 'chordata', 'REPTILIA LAURENTI, 1768', 'SQUAMATA OPPEL, 18411', 'Agamidae Gray, 1827', 'Chiều dài đầu thân (SVL) đến 95mm (quần thể ở Đông Nam Á); cơ thể mạnh mẽ, dẹp; đầu khá lớn (đặc biệt ở con đực trưởng thành); vảy nhọn ở phía sau và bên trên; không có nếp gấp trước cánh tay hoặc lỗ trước vai, có 2 gai khá rõ trên màng nhĩ; có 40-45 hàng vảy giữa thân. Màu sắc trên thân đa dạng, đầu màu vàng cam hoặc đỏ sáng, con đực có thêm mảng đen ở cổ, và mờ dần đến màu hơi xám ở các thời điểm khác nhau. Con cái cũng có màu vàng đến xám sau khi giao phối', 'Trong khu vực nghiên cứu, Calotes versicolor (DAUDIN, 1802) là loài phổ biến, có mặt ở các sinh cảnh rừng tràm khai thác, rừng tràm đặc dụng; hoạt động ban ngày, thường được phát hiện nhiều nhất trong khoảng thời gian từ 8 giờ sáng đến 10 giờ.  Ban đêm chúng thường ngủ trên các cành cây nhỏ cách mặt đất từ 1m - 3m. Con non được phát hiện nhiều vào đầu mùa mưa trong các tháng 7 và 8.', 'Chưa xác định', 'Rừng Tràm Mỹ Phước, Sóc Trăng', 'Không có giá trị bảo tồn'),
(8, 'Gehyra multilata (Weigmann,1835)', 'Thằn lằn 4 móng', 'Thằn lằn nhà', 'Animalia', 'chordata', 'REPTILIA LAURENTI, 1768', 'SQUAMATA OPPEL, 18411', 'Gekkonidae Gray, 1825', 'Vảy dưới ngón rộng, phân chia, 2 hàng vảy nhỏ hoăc nhiều hơn, màng giữa ngón rất nhỏ, màng giữa ngón chân lớn hơn, 2-3 cặp vảy sau hàm, 25-41 vảy mang lỗ feromol trước huyệt xếp hình vòng cung, giữa tạo thành góc; vảy trên mũi hơi lớn tiếp xúc với các vảy khác ở giữa; đuôi dẹp, thường phẳng ở mặt dưới, mặt bên có nhiều hoặc ít răng cưa, da dễ đứt.', 'Là loài hoạt động về đêm, được tìm thấy trên các thân gỗ lớn, trên các tường và công trình xây dựng nhân tạo trong khu rừng tràm Mỹ Phước. Chia sẻ môi trường sống với các loài Hemidactylus frenatus, Hemidactylus platyurus, Hemidactylus garnotii.', 'Chưa xác định', 'Rừng Tràm Mỹ Phước, Sóc Trăng', 'Không có giá trị bảo tồn'),
(9, 'Hemidactylus garnotii (Conant and Collins, 1991)', 'Thạch sùng garnot', 'Thằn lằn', 'Animalia', 'chordata', 'REPTILIA LAURENTI, 1768', 'SQUAMATA OPPEL, 18411', 'Gekkonidae Gray, 1825', '\"Đặc điểm chẩn loại:  mút mõm tù, dài mõm-mắt lớn hơn khoảng cách giữa mắt-tai (SnEye 5,13; EyeEar 3,66); lỗ mũi ở giữa tấm mõm.; đường kính tai không quá 1/2 lần đường kính mắt (EarL 1,87; OrbD4,28); 11 tấm mép trên, 10 tấm mép dưới; tấm cằm gấp hai lần tấm mép; tấm mõm rộng bằng cao.\r\n\r\nĐặc điểm hình thái: Đầu lớn (HL 7,91; HW 6,43; HH 4,18).  Lỗ tai bé, gần tròn, đường kính tai không quá 1/2 lần đường kính mắt. Tấm cằm có dạng hình tam giác, dài hơn 2 lần các tấm mép bên cạnh. Hai đôi tấm sau cằm, đôi I lớn hơn đôi II và  tiếp xúc nhau. Vảy vùng họng dạng hạt. Đuôi rất dẹp, sắc, có răng cưa ở hai bên, phía trên phủ các vảy nhỏ đồng dạng, mặt dưới phẳng với những vảy lớn xếp gối lên nhau và một hàng vảy ngang mở rộng ở giữa đùi. Thân màu nâu xám với các đốm hoặcvết không rõ ràng, thường có những điểm nhỏ màu trắng; có vạch tối dọc theo haibên đầu. Bụng trắng.  \r\n\"', 'Ban ngày thường trú trong các hốc cây nhỏ hoặc bên trong lớp vỏ cây mục, ban đêm kiếm mồi trên thân tràm và các thân gỗ lớn trong khu vực rừng tràm Mỹ Phước. Là loài ít gặp; chia sẻ sinh cảnh với loài Hemidactylys frenatus và Hemidactylus platyurus. ', 'Chưa xác định', 'Rừng Tràm Mỹ Phước, Sóc Trăng', 'Không có giá trị bảo tồn'),
(10, 'Hemidactylus frenatus Schlegel in Duméril & Bibron, 1836', 'Thạch sùng đuôi sần', 'Thạch sùng', 'Animalia', 'chordata', 'REPTILIA LAURENTI, 1768', 'SQUAMATA OPPEL, 18411', 'Gekkonidae Gray, 1825', 'Cơ thể được bao phủ bởi các vảy dạng hạt nhỏ lẫn với một vài vảy trơn tròn hoặc hơi có dạng sóng, nốt sần hình nón; con đực có một chuỗi liên tiếp các lỗ trước huyệt, 14-19 lỗ ở mỗi bên; 2 cặp vảy sau môi dưới, cặp bên ngoài lớn tương tự cặp bên trong, cả 2 đều chạm vảy hàm dưới; trên đuôi có các nốt sần dạng gai cao xếp theo hình xoắn ốc ', 'Là loài hoạt động về đêm, sinh sống cùng với con người, thương tìm thấy trong tường nhà hoặc các công trình nhân tạo. Trong tự nhiên, loài này kiếm ăn trên các thân cây gỗ lớn, thức ăn là các loài côn trùng sống trong khu vực. Chúng thường đẻ trứng vào các hốc cây khô, kín đáo, trứng nhỏ, màu trắng ngà và không dính.', 'Chưa xác định', 'Rừng Tràm Mỹ Phước, Sóc Trăng', 'Không có giá trị bảo tồn'),
(11, 'Duttaphrynus melanostictus (Schneider, 1799)', 'Cóc nhà', 'Cóc', 'Animalia', 'chordata', 'AMPHIBIA (Linnaeus, 1758)', 'ANURA (Fischer, 1813)', 'Bufonidae Gray, 1825', 'Kích thước cơ thể trung bình, mắt khỏe; phía trên ổ mắt, phía sau ổ mắt, phía trên màng nhĩ và phía trước mắt có nhiều gai nhọn; mõm nhọn, tuyến mang tai lớn, có chều dài hơn chiều rộng; cơ thể có nhiều nốt sần lớn và nhỏ; ngón tay thứ I dài hơn ngón tay thứ II; khớp cổ chân chạm giữa tuyến mang tai khi xếp dọc theo thân.', 'Là loài phổ biến trong khu rừng tràm Mỹ Phước, thường được tìm thấy trong các khu vực đất cao, trên các bờ kênh nước. Cóc nhà hoạt động vào ban đêm, ăn các loài côn trùng sống trong khu vực. Xuất hiện nhiều trong các sinh cảnh rừng tràm đặc dụng, rừng tràm khai thác vào đầu mùa mưa.', 'Làm thực phẩm', 'Rừng Tràm Mỹ Phước, Sóc Trăng', 'Không có giá trị bảo tồn'),
(12, 'Fejervarya limnocharis (Gravenhorst, 1829)', 'Nhái Ngóe', 'Nhái', 'Animalia', 'chordata', 'AMPHIBIA (Linnaeus, 1758)', 'ANURA (Fischer, 1813)', 'Dicroglossidae Anderson, 1871 ', 'Đầu ngón hơi phồng, không hoặc hơi rộng hơn chữa số, ngón đầu tên dài hơn ngón thứ 2, ngón chân có màng bao phủ từ 1/2 tới 2/3, củ bàn chân ngoài tách biệt với màng, củ bàn chân trong dẹp và củ bàn chân ngoài nhỏ, lung có nhiều nếp gấp và nốt sần nhỏ, con đực có túi kêu màu đen', 'Là loài phổ biến trong khu vực rừng tràm Mỹ Phước, thường được tìm thấy trong sinh cảnh rừng tràm khai thác, rừng tràm đặc dụng. Nhái sọc hoạt động ban đêm, thức ăn là các loài côn trùng sống trong khu vực. Xuất hiện nhiều vào đầu mùa mưa, con đực có túi thanh âm phát tiếng kêu đặc trưng thu hút con cái. Con đực và con cái có hiện tượng \"bắt cặp\" khi giao phối; con cái đẻ trứng vào các ao hoặc vũng nước đọng trong khu vực; trứng dính vào nhau thành mảng lớn nổi trên mặt nước.', 'Làm thực phẩm', 'Rừng Tràm Mỹ Phước, Sóc Trăng', 'LC (Least concern)'),
(13, 'Fejervarya cancrivora (Gravenhorst, 1829)', 'Ếch cua', 'Ếch', 'Animalia', 'chordata', 'AMPHIBIA (Linnaeus, 1758)', 'ANURA (Fischer, 1813)', 'Dicroglossidae Anderson, 1871 ', '\"Đặc điểm chẩn loại:  lỗ mũi hướng thẳng lên, khoảng gian mắt rộng ½ độ rộng mi mắt. Lỗ mũi lệch về phía mút mõm. Vùng má lõm, xiên. Màng nhĩ rõ. Ngón tay I dài hơn ngón tay II. Khớp cổ bàn tiếp xúc mắt, hai gối chạm nhau khi gập hai chân lại. Mép ngoài các ngón chân có rìa da mỏng, nếp gấp vùng xương cổ bàn mỏng. Củ bàn trong mảnh, dài, không có củ bàn ngoài. Lưng có nhiều nếp da ngắn, gián đoạn; các nếp da ngắn hai bên lưng nối nhau thành hàng. Răng xương lá mía xiên. Màng da ¾ . Giữa vùng trán có một điểm mắt nhỏ, màu trắng. \r\n\r\nĐặc điểm hình thái: Cơ thể có kích thước trung bình, đầu hẹp.  (SVL: 48.5-57.5 mm) Dài đầu lớn hơn rộng đầu (HL/HW: 1,13-1,24 ). Mút mõm tròn.  Lỗ mũi hình oval, có van nhỏ. Dài mũi lớn hơn đường kính mắt (ED/SNL: 0,59 – 0,71 mm). Lưỡi lớn; con ngươi mắt tròn. Chủy khóe mắt tròn, vùng gian mắt- mũi lõm, vùng gian ổ mắt phẳng. chiều rộng mi mắt trên lớn hơn khoảng cách giữa 2 hốc mắt (IO/UEW: 0,53-0,64). U lồi vùng thái dương tròn. Đường kính màng nhĩ lớn hơn khoảng cách từ màng nhĩ đến mắt (E-T/TD: 0,48-0,65); đường kính màng nhĩ nhỏ hơn đường kính mắt (TD/ED: 0,7-0,72), có một nếp gấp da chạy từ sau mắt vòng lên trên màng nhĩ và kéo xuống đến trước cánh tay. \r\nCơ thể có màu nâu, xanh nâu, xám với những vệt đậm, không đều, nằm rải rác quanh mép miệng và chi sau. Bụng có màu trắng đôi khi có những vệt đậm màu nằm rải rác, da trơn, láng. Mặt lưng có nhiều nếp da ngắn, chạy dọc cơ thể. Hai bên đầu và phần hông sau có các mụn tuyến nhỏ. Các ngón tay dài, mút nhọn, một số ngón có rèm da. Thứ tự các ngón chi trước: III>IV>I>II.  Ngón chân dài có màng da và rèm da, độ dài các ngón theo thứ tự: IV>III>V>II>I. \r\n\"', 'F. cancrivora là loài lưỡng cư có sự thích nghi cao với nồng độ muối ổn định trong môi trường nước.  Chúng chỉ cần vài giờ để thích nghi với môi trường sống khi chuyển từ nước ngọt sang nước mặn nhờ quá trình tích lũy ure làm tăng nồng độ các chất trong tế bào. F. cancrivora có thể sống ở môi trường có nồng độ muối 650 - 950 mOsm/L trong nhiều tháng. ', 'Làm thực phẩm', 'Rừng Tràm Mỹ Phước, Sóc Trăng', 'LC (Least concern)'),
(14, 'Fejervarya sp.', 'Nhái cơm', 'Nhái cơm', 'Animalia', 'chordata', 'AMPHIBIA (Linnaeus, 1758)', 'BỘ ANURA (Fischer, 1813)', 'Dicroglossidae Anderson, 1871', '\"Đặc điểm chẩn loại:  Lỗ mũi hướng lên trên; khoảng gian mắt hơi rộng hơn một nữa chiều rộng mi mắt trên; lỗ mũi gần chóp mũi hơn gần mắt; vùng má phẳng, xiên; màng nhĩ rõ ràng; ngón tai thứ I dài hơn ngón thứ II; khớp xương chài chạm vùng má khi xếp chân dọc cơ thể; khi xếp chân 2 đầu gối xếp chồng nhau; có nếp gấp cổ chân mờ; có củ bàn trong chân, không có củ bàn ngoài; nhiều nếp gấp trên lưng; nếp gấp mặt bên trên lưng thấp, dài hơi các nếp gấp ở phần giữa lưng; ngón chân có màng kéo dài đến ¾ chiều dài ngón.\r\n	Đặc điểm hình thái: Kích thước cơ thể nhỏ (SVL: 48,5-57,5); chiều dài đầu hơi lớn hơn chiều ngang (HL/HW: 1,13 – 1,24). Mũi nhọn; lỗ mũi tròn, có viền xung quanh, gần chóp mũi hơn gần mắt; gốc mắt rõ ràng, vùng má xiên, hơi lõm với một gờ trơn; chiều rộng mi mắt lớn hơn khoảng gian mắt (IO/UEW: 0,53-0,64); nếp gấp bên trên màng nhĩ nhỏ, mở rộng về phía trên màng nhĩ và xéo xuống dưới ở phía sau; đường kính màng nhĩ không lớn hơn khoảng cách mắt tới màng nhĩ (E-T/TD: 0,48-0,65); tuyến gốc mõm dài, thấp, không chạm màng nhĩ.\r\nDa trên lưng nhiều gờ dạng tuyến, một vài cái có dạng gờ dài, nhiều nốt sần nhỏ; các hàng ở hai bên nhiều hoặc ít rõ ràng. Da cằm, bụng và mặt dưới của đùi trơn; thỉnh thoảng có các nốt sần nhỏ ở mặt sau của đùi; cánh tay ngắn, ngón tay không có màng, đầu ngón hơi phồng thành nốt nhỏ; ngón thứ I hơi dài hơn ngón thứ II; củ ngón rõ ràng; 2 củ bàn rõ ràng, củ dưới ngón tay cái phát triển, chai sinh dục phát triển ở con đực; ngón chân có màng ¾; củ bàn trong dài, rõ ràng, củ bàn ngoài nhỏ, tròn; củ ngón phát triển; chân ngắn, khớp chày chạm vùng má; khi xếp chân vuông góc cơ thể, hai đầu gối chồng lên nhau.\r\nMặt trên màu nâu đến nâu - vàng nhạt với các đốm màu xám đen; các đốm trên cánh tay và chân ít phân biệt; các vệt ở hàm trên rõ ràng; hầu hết các hàng gờ da lớn ở bên ngoài của phần phía bên lưng; cằm với các đốm đen nhạt không đều dạng lavender, mặt dưới cơ thể màu trắng xám khói; cạnh trước và mặt dưới của bàn chân màu lavender, đầu ngón tay và chân màu kem.\r\n\"', 'Chúng có sinh cảnh chung với 2 loài lưỡng cư khác là ếch cua (F. cancrivora) và nhái ngóe (F. limnocharis). Trong khu vực nghiên cứu, đây là loài phổ biến, phân bố trên các sinh cảnh rừng tràm đặc dụng, rừng tràm khai thác. Được tìm thấy nhiều vào đầu mùa mưa trên nền rừng ẩm ướt, ven các kênh dẫn nước hoặc xung quanh các vũng nước đọng.', 'Làm thực phẩm', 'Rừng Tràm Mỹ Phước, Sóc Trăng', 'Không có giá trị bảo tồn'),
(15, 'Hoplobatrachus rugulosus (Wiegmann, 1834)', 'Ếch đồng', 'Ếch', 'Animalia', 'chordata', 'AMPHIBIA (Linnaeus, 1758)', 'ANURA (Fischer, 1813)', 'Dicroglossidae Anderson, 1871', 'Kích thước lớn, chân và tay tương đối ngắn, ngón chân có màng bao phủ gần như hoàn toàn, đầu ngón không có đĩa ngón, hơi phồng ở đầu ngón; không có củ bàn trong ở chân, khoảng 10 hàng nếp gấp da trên lưng, gian ổ mắt nhỏ hơn nhiều so với chiều rộng mi mắt trên.', 'Ếch đồng là loài phổ biến trong khu vực rừng tràm Mỹ Phước; được tìm thấy nhiều vào mùa mưa, đặc biệt vào đầu mùa mưa. Ếch đồng sinh sản vào đầu mùa mưa, con đực phát âm thanh to thu hút con cái. Ếch đực và ếch cái có hiện tượng \"bắt cặp\" khi giao phối. Trong khu vực rừng tràm Mỹ Phước, ếch đồng được tìm thấy trong sinh cảnh rừng tràm khai thác và rừng tràm đặc dụng.', 'Làm thực phẩm', 'Rừng Tràm Mỹ Phước, Sóc Trăng', 'LC (Least concern)'),
(16, 'Occidozyga lima (Gravenhorst, 1829)', 'Cóc nước sần', 'Nhái bầu', 'Animalia', 'chordata', 'AMPHIBIA (Linnaeus, 1758)', 'ANURA (Fischer, 1813)', 'Bufonidae Gray, 1825', 'Là một loài cóc nước nhỏ; lưỡi dài, tự do, đầu lưỡi tròn; ngón tay nhọn, ngón thứ nhất bằng ngón thứ 2, 2 hoặc 3 củ bàn tay; 2 củ bàn chân, và 1 nốt sần rõ ràng ở cuối xương chày; da rất nhám, có nhiều nốt sần hoặc gai nhỏ, có nhiều hàng nốt sần tạo thành các đường dọc hai bên thân, trên lưng và cằm; con đực với túi âm ở trong miệng; các vệt sẫm màu vắt ngang trên đùi và lưng; ngón tay có màng bơi nhỏ trong gốc ngón, ngón chân có màng bơi phủ hết ngón', 'Các mẫu của loài cóc nước sần được tìm thấy trong mùa mưa ở các sinh cảnh rừng tràm đặc dụng, rừng dừa nước, lung. Vào đầu mùa mưa, chúng thường tập trung trong các ao nước nhỏ vào ban đêm, các con đực phát tiếng kêu thu hút con cái.', 'Chưa xác định', 'Rừng Tràm Mỹ Phước, Sóc Trăng', 'Không có giá trị bảo tồn'),
(17, 'Occidozyga martensii (Peters, 1867)', 'Cóc nước marten', 'Nhái nhớt', 'Animalia', 'chordata', 'AMPHIBIA (Linnaeus, 1758)', 'ANURA (Fischer, 1813)', 'Dicroglossidae Anderson, 1871 ', 'Cơ thể có kích thước nhỏ, ngắn và mập; các chi tương đối ngắn; bàn tay không có màng; bàn chân có màng phát triển chạm 2/3 chiều dài ngón; chóp ngón mở rộng thành dạng đệm tròn. Cấu trúc da khá đa dạng từ dạng trơn đến có nhiều nốt sần trên lưng; mặt dưới luôn trơn. Đầu nhỏ, mũi hình tam giác ngắn; màng nhĩ nhỏ vừa đủ nhận biết; nếp gấp trên màng nhĩ rõ ràng. Mắt phồng lên và hướng sang 2 bên. Màu sắc mặt lưng đa dạng; phần lớn màu xám hoặc nâu, thường có sọc màu vàng hoặc cam rõ ràng trên lưng, hoặc một vệt rộng màu xám đen dọc viền đen với 2 sọc cam; phổ biến là màu đỏ - rỉ sét ở sau đầu. Mặt dưới màu trắng sáng, cổ họng có các đốm đen li ti màu xám mờ. Con ngươi hình thoi với mống mắt có các sọc màu đồng xếp đồng quy', 'Occcidozyga martensii là loài phổ biến trong rừng tràm Mỹ Phước, được tìm thấy nhiều vào đầu mùa mưa. Chúng thường được tìm thấy trên nền rừng, xung quanh các vũng nước đọng hoặc ở khu vực nước nông có lớp thực vật nổi dày, rậm rạp. Trong rừng tràm Mỹ Phước chúng phân bố trong các sinh cảnh rừng tràm đặc dụng, rừng tràm khai thác. ', 'Chưa xác định', 'Rừng Tràm Mỹ Phước, Sóc Trăng', 'LC (Least concern)'),
(18, 'Microhyla heymonsii Vogt, 1911', 'Nhái bầu heymon', 'Nhái bầu đỏ', 'Animalia', 'chordata', ' AMPHIBIA (Linnaeus, 1758)', 'ANURA (Fischer, 1813)', 'Microhylidae', 'Kích thước cơ thể nhỏ; lưng phẳng, màu xám hoặc nâu ở trên, thường có đường kẻ giữa lưng và một hoặc 2 đốm đen ở ngay trung tâm của lưng. Mặt bên của đầu và thân có vệt đen kéo dài đến háng. Màng nhĩ ẩn; ba củ bàn tay lớn và rõ ràng; kích thước gần bằng nhau. Hai củ bàn chân, củ bàn ngoài lớn hơn. Màng bơi giữa các ngón nhỏ và mảnh. Đầu ngón mở rộng thành các đĩa', 'Nhái bầu đỏ được tìm thấy trong thời gian khảo sát mùa mưa, thường được tìm thấy trên nền rừng trong khu vực rừng tràm khai thác, quanh các vũng nước đọng hoặc gần bờ kênh. Con đực có túi kêu dưới cổ họng, ban đêm thường tập trung quanh khu vực có nước để phát tiếng kêu thu hút con cái. ', 'Chưa xác định', 'Rừng Tràm Mỹ Phước, Sóc Trăng', 'LC (Least concern)'),
(19, 'Hylarana erythraea (Schlegel, 1837)', 'Chàng xanh', 'Bù tọt', 'Animalia', 'chordata', 'AMPHIBIA (Linnaeus, 1758)', 'ANURA (Fischer, 1813)', 'Ranidae Rafinesque, 1814', 'Cơ thể có kích thước tương đối lớn, thường có màu xanh với nếp gấp da trên lưng rộng màu vàng, dảy màu đen ở mặt bên của đầu và cơ thể, mũi nhọn và nhô ra, ngón tay mảnh khảnh, ngón thứ nhất hơi ngắn hơn ngón thứ 2, ngón chân gần như có màng bao phủ hoàn toàn, đĩa nhỏ trên đầu ngón, cổ chân chạm chóp mũi, không có hoa văn vòng quanh chi nhưng có các dấu song song chân, có túi thanh âm, con đực có chai sinh dục trên ngón tay thứ I.', 'Cơ thể có kích thước tương đối lớn, thường có màu xanh với nếp gấp da trên lưng rộng màu vàng, dảy màu đen ở mặt bên của đầu và cơ thể, mũi nhọn và nhô ra, ngón tay mảnh khảnh, ngón thứ nhất hơi ngắn hơn ngón thứ 2, ngón chân gần như có màng bao phủ hoàn toàn, đĩa nhỏ trên đầu ngón, cổ chân chạm chóp mũi, không có hoa văn vòng quanh chi nhưng có các dấu song song chân, có túi thanh âm, con đực có chai sinh dục trên ngón tay thứ I.', 'Chưa xác định', 'Rừng Tràm Mỹ Phước, Sóc Trăng', 'LC (Least concern)'),
(20, 'Polypedates megacephalus Hallowell, 1861', 'Ếch cây mép trắng', 'Hót cổ', 'Animalia', 'chordata', 'AMPHIBIA (Linnaeus, 1758)', 'ANURA (Fischer, 1813)', 'Rhacophoridae Hoffman, 1932', 'Loài có kích thước lớn, chiều dài đầu thân lên đến 75mm (Taylor); được đặc trưng bởi phần da trên đầu dính chặt với vùng mũi và xương trán; con đực có túi thanh âm; chiều rộng gian ổ mắt rộng hơn chiều rộng mí mắt trên; màng nhĩ rõ ràng; ngón tay có màng rất ít, ngón chân có màng bao phủ 2/3 hoặc nhiều hơn; chiều rộng đĩa ngón nhỏ hơn màng nhĩ; cổ bàn chân chạm giữa mắt với lỗ mũi hoặc chóp mũi khi gập sát thân; răng lá mía phát triển; hoa văn chữ x trên vùng đầu – vai.', 'Ếch cây mép trắng sống chủ yếu trên cây trong các khu vực ẩm độ cao, thức ăn là các loài côn trùng sống trong khu vực. Ếch cây mép trắng phân bố khá phổ biến trong khu vực rừng tràm Mỹ Phước, thường được tìm thấy trong các sinh cảnh rừng tràm đặc dụng, rừng tràm khai thác, rừng dừa nước. Con đực và cái có hiện tượng \"bắt cặp\" khi giao phối. Con cái tiết ra dịch nhầy và dùng chân sau đánh lên thành đám bọt lớn; trứng được đẻ vào trong đám bọt xung quanh các vũng nước hoặc bên trên khu vực có nước.Trứng phát triển thành nòng nọc trong tổ bọt trước khi chúng cọ quậy làm mềm bọt và rơi xuống khu vực nước bên dưới. ', 'Chưa xác định', 'Rừng Tràm Mỹ Phước, Sóc Trăng', 'LC (Least concern)'),
(21, 'Calotes versicolor (Daudin, 1802)', 'Nhông hàng rào', 'Kì nhông', 'Animalia', 'chordata', 'REPTILIA LAURENTI, 1768', 'SQUAMATA OPPEL, 18411', 'Agamidae Gray, 1827', 'Chiều dài đầu thân (SVL) đến 95mm (quần thể ở Đông Nam Á); cơ thể mạnh mẽ, dẹp; đầu khá lớn (đặc biệt ở con đực trưởng thành); vảy nhọn ở phía sau và bên trên; không có nếp gấp trước cánh tay hoặc lỗ trước vai, có 2 gai khá rõ trên màng nhĩ; có 40-45 hàng vảy giữa thân. Màu sắc trên thân đa dạng, đầu màu vàng cam hoặc đỏ sáng, con đực có thêm mảng đen ở cổ, và mờ dần đến màu hơi xám ở các thời điểm khác nhau. Con cái cũng có màu vàng đến xám sau khi giao phối', 'Kì nhông là loài phổ biến trong rừng tràm Mỹ Phước, chúng thường được tìm thấy trong sinh cảnh rừng tràm đặc dụng, rừng tràm khai thác, trên các nhánh cây thấp từ 1 đến 2m hoặc. Thức ăn của chúng là những loài côn trùng nhỏ sống trong khu vực. Kì nhông hoạt động ban ngày, ban đêm ngủ trên ngọn các cành cây nhỏ. ', 'Chưa xác định', 'Rừng Tràm Mỹ Phước, Sóc Trăng', 'LC (Least concern)'),
(22, 'Hemidactylus platyurus (Schneider, 1797)', 'Thạch sùng đuôi dẹp', 'Thằn lằn', 'Animalia', 'chordata', 'REPTILIA LAURENTI, 1768', 'SQUAMATA OPPEL, 18411', 'Gekkonidae Gray, 1825', 'Các ngón chân có màng và mở rộng; tấm dưới ngón chân không phân chia; đốt ngón xa dài, mỏng, mọc tại bên trên phần mở rộng của đầu ngón; 2 cặp vảy sau hàm mở rộng, cặp thứ 2 ở bên lớn hơn cặp thứ nhất ở trong; nếp gấp bụng rõ ràng, được vảy nhỏ bao phủ; có màng da rộng ở phía sau chân sau; 16-20 lỗ đùi mỗi bên, xếp thành hàng thẳng và tiếp xúc ở giữa thân', 'Thạch sùng đuôi dẹp là loài phổ biến sinh sống trong hoặc xung quanh khu dân cư. Trong tự nhiên, chúng thường được tìm thấy trên các thân cây gỗ lớn, kiếm ăn cả ngày và đêm; thức ăn là các loài côn trùng nhỏ sinh sống trong khu vực. Trong rừng tràm Mỹ Phước, loài này được tìm thấy trong sinh cảnh rừng tràm khai thác. ', 'Chưa xác định', 'Rừng Tràm Mỹ Phước, Sóc Trăng', 'Không có giá trị bảo tồn'),
(23, 'Takydromus sexlineatus Daudin, 1802', 'Thằn lằn đuôi dài', 'Thằn lằn đuôi dài', 'Animalia', 'chordata', 'REPTILIA LAURENTI, 1768', 'SQUAMATA OPPEL, 18411', 'Lacertidae Gray, 1825', '\"Loài thằn lằn cỡ nhỏ, dài đuôi dài gấp sáu lần chiều dài thân. Dài thân 30 - 60mm, dài đuôi 160 - 180mm. Mõm nhọn, tấm mõm rộng. Hai tấm trán ở đỉnh tiếp xúc với nhau, rộng và ngắn hơn tấm trước trán. Tấm đỉnh lớn, cách nhau rõ bởi tấm gian đỉnh và tấm chẩm bé hơn. Có 2 - 3 tấm thái dương chạm tấm đỉnh.Các vảy vùng thái dương nổi gờ rất rõ. Có 3 cặp tấm sau cằm.\r\n\r\nThân có 6 hàng vảy dọc, rộng, nổi gờ rõ, 4 hàng vảy ở giữa tiếp tục kéo dài đến đuôi. Vảy bên thân bé, có 12 hàng vảy rộng ở bụng, các vảy này cũng nổi gờ rõ. Từ nếp gấp vai đến bẹn có 26 vảy. Tấm hậu môn lớn và có 2 vảy dài, bé hơn nằm ở hai bên.Ở con đực và con cái đều có 1 lỗ đùi ở mỗi bên. Mép trên có từ 6  -8 tấm vảy và 5 - 8 tấm ở mép dưới mỗi bên.\r\n\r\nThân màu xanh xám đến nâu xám, phần đầu có màu thẫm hơn. Cằm và cổ họng có màu trắng đục đến hơi vàng. Mặt trên của các chi và phần sau của gốc đuôi màu xám nhạt. Ở các cá thể đực có một dải hẹp màu trắng xám chạy từ góc sau tấm đỉnh đến giữa thân và mờ dần về phía đuôi. Từ vai đến bẹn là các đốm trắng xám nhỏ hình bầu dục xếp thành hàng dọc.\"', 'Là loài hoạt động ban ngày, thường kiếm ăn trên các tán cây thấp, thức ăn là các loài côn trùng sinh sống trong khu vực. Hoa văn trên cơ thể có khả năng ngụy trang lẫn vào môi trường xung quanh. Buổi sáng chúng thường phơi nắng hấp thu nhiệt và hoạt động nhiều khi nhiệt độ cao. Ban đêm ngủ trên các nhánh cây thấp và bụi cây.', 'Chưa xác định', 'Rừng Tràm Mỹ Phước, Sóc Trăng', 'LC (Least concern)'),
(24, 'Eutropis multifasciata (Kuhl, 1820)', 'Thằn lằn bóng hoa', 'Rắn mối', 'Animalia', 'chordata', 'REPTILIA LAURENTI, 1768', 'SQUAMATA OPPEL, 18411', 'Scincidae Opell, 1811', 'Vảy trên mũi chạm nhau hoặc hơi tách biệt với nhau; một vảy sau mũi; vảy trước trán tiếp xúc nhau; vảy má thứ nhất không cao hơn vảy má thứ 2; không có đĩa ở dưới mi mắt; vảy thường có 3 sóng, hiếm khi nhiều  hơn; 30-34 hàng vảy giữa thân; các đường trên lưng giữa các vảy thường mờ, tối; hai bên thân màu sậm với nhiều điểm dạng mắt.', 'Là loài phổ biến trong khu vực rừng tràm Mỹ Phước, hoạt động ban ngày, thường được tìm thấy trong sinh cảnh rừng tràm đặc dụng, rừng tràm khai thác. Kiếm ăn trên nền rừng, thức ăn của chúng là những loài côn trùng trong khu vực. Thường có tập tính phơi nắng vào buổi sáng hoặc sau các cơn mưa lớn.', 'Làm thực phẩm', 'Rừng Tràm Mỹ Phước, Sóc Trăng', 'Không có giá trị bảo tồn'),
(25, 'Python molurus (Linnaeus, 1758)', 'Trăn lưới', 'Trăn đất', 'Animalia', 'chordata', 'REPTILIA LAURENTI, 1768', 'SQUAMATA OPPEL, 18411', 'Pythonidae Fitzinger, 1826', '\"Đặc điểm chẩn loại:  Rắn lành cỡ rất lớn trong họ nhà Trăn Pythonidae, dài tới 8m (kích thước trung bình khoảng từ 4 - 6m). Đầu dài, nhỏ. Hai tấm vảy môi trên có trên mỗi tấm vảy một lỗ (lỗ môi là cơ quan cảm giác nhiệt). Có hai cựa nhỏ, hình móng nằm ở hai bên khe huyệt. Cựa trăn cái ngắn, ẩn sâu trong hốc bên khe huyệt. Đầu có màu nâu xám, mặt trên đầu có hoa văn hình mũi mác di từ cổ, mũi nhọn hướng về phía đầu mõm. Mặt trên lưng có màu xám nhạt hay vàng nhạt có một dãy những vết lớn dài, màu nâu đỏ viền đen. Mặt bụng màu vàng hay nâu vàng có những đốm nâu hay đen (Smith 1984).\r\nĐặc điểm hình thái:  Đầu hình tam giác, chiều dài gần 2 lần chiều rộng. Lỗ mũi tách biệt bởi 2 vảy mũi. Có 2 cặp vảy trước trán, cặp vảy phía sau nhỏ hơn; vảy trán phân chia. Vùng vảy chẩm và vùng vảy thái dương không đều. Có 10 – 13 vảy môi trên, vảy thứ VI hoặc thứ VII ở dưới mắt hoặc tách biệt với mắt bởi hàng vảy dưới mắt; 2 vảy môi trên đầu tiên có các hốc cảm nhiệt rõ ràng. Mắt được bao quanh bởi 2 hoặc 3 vảy trước mắt, 1 vảy trên mắt, 2 hoặc 3, hiếm khi 4 vảy sau mắt, 1, 2 hiếm khi 3 vảy dưới mắt. Các vảy bao quanh mắt, ngoại trừ vảy trên mắt thường hợp nhất hoặc được phân chia bởi đường đứt nhỏ. Vảy môi trên có 2 hố vảy sâu. 16-22 vảy hàm dưới. Vảy cằm  nhỏ và không đều. Rãnh môi dưới rõ ràng. Vảy trơn, 60-75 hàng vảy giữa thân. 256-270 vảy bụng; 65-70 vảy dưới đuôi. Vảy hậu môn phân chia.\"', 'Đặc điểm sinh thái học: Thường sống ở các rừng thưa, savan, cây bụi hay ven các rừng già, ở các đồi núi thấp có nhiều bụi rậm khô ráo. Chúng ưa sống gần các vực nước, đầm lầy. Có thể leo lên cây và thích cuốn mình vào những cành cây chìa ra trên mặt nước. ở đồng bằng Nam bộ, chúng ưa sống ở những nơi đầm lầy, rừng tràm, rừng sú vẹt ngập nước, đôi khi còn xâm nhập cả vào những khu vực có vườn cây. Chúng chủ yếu đi kiếm mồi vào ban đêm, nhiều nhất vào lúc xẩm tối. Trăn đất ăn những loài thú nhỏ (chủ yếu gặm nhấm, đôi khi cả hươu nai cỡ nhỏ, chim và những loài ếch nhái, bò sát). Sinh sản hàng năm. Ở khu vực Đồng Bằng Sông Cửu Long giao phối từ tháng 10 đến tháng giêng năm sau. Trăn chửa khoảng hai tháng đến ba tháng sáu ngày, đẻ từ 15 đến 60 quả trứng. Trăn mẹ ấp trứng bằng cách cuộn lấy ổ trứng. Sau khoảng hai tháng (56 - 85 ngày) thì trứng nở: Trăn sơ sinh dài khoảng 52 - 61cm và nặng khoảng 80 - 140g. Lột xác lần đầu khoảng 7 - 10 ngày sau khi nở.', 'Làm thực phẩm, đồ thời trang.', 'Rừng Tràm Mỹ Phước, Sóc Trăng', 'Làm thực phẩm, đồ thời trang.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `collectiondata`
--

CREATE TABLE `collectiondata` (
  `ID_CD` int(11) NOT NULL,
  `ID_User` int(11) NOT NULL,
  `ID_Animal` int(11) NOT NULL,
  `Ten_Data` varchar(100) NOT NULL,
  `PostDate_Data` varchar(40) NOT NULL,
  `CollectionDate_Data` varchar(20) NOT NULL,
  `Hinh` varchar(100) DEFAULT NULL,
  `VerifiedStatus` int(11) NOT NULL DEFAULT 0 CHECK (`VerifiedStatus` >= 0 and `VerifiedStatus` <= 1),
  `VerifiedDate` varchar(100) NOT NULL DEFAULT 'Not verified',
  `Like_Number` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `collectiondata`
--

INSERT INTO `collectiondata` (`ID_CD`, `ID_User`, `ID_Animal`, `Ten_Data`, `PostDate_Data`, `CollectionDate_Data`, `Hinh`, `VerifiedStatus`, `VerifiedDate`, `Like_Number`) VALUES
(1, 1, 1, 'Ếch giun nguyễn 1', '8/4/2018 14:07:15', '4/13/2018', NULL, 0, 'Not verified', 0),
(2, 1, 2, 'Cóc nhà', '8/4/2018 14:16:22', '4/13/2018', NULL, 0, 'Not verified', 0),
(3, 1, 3, 'Ễnh ương 1', '8/4/2018 14:24:39', '7/3/2018', NULL, 0, 'Not verified', 0),
(4, 1, 4, 'Nhái bầu heymon', '8/4/2018 14:35:54', '7/4/2018', NULL, 0, 'Not verified', 0),
(5, 1, 5, 'Chàng xanh', '8/4/2018 14:46:07', '4/17/2018', NULL, 0, 'Not verified', 0),
(6, 1, 6, 'Ếch cây mép trắng', '8/4/2018 15:05:35', '4/14/2018', NULL, 0, 'Not verified', 0),
(7, 1, 7, 'Nhông xanh, Nhông hàng rào, Kì nhông', '8/4/2018 16:02:09', '4/18/2018', NULL, 0, 'Not verified', 0),
(8, 1, 8, 'Thằn lằn 4 móng 1', '8/4/2018 16:26:10', '4/14/2018', NULL, 0, 'Not verified', 0),
(9, 1, 9, 'Thạch sùng garnot 1', '8/4/2018 23:26:26', '7/3/2018', NULL, 0, 'Not verified', 0),
(10, 1, 10, 'Thạch sùng đuôi sần 1', '8/4/2018 23:42:29', '4/16/2018', NULL, 0, 'Not verified', 0),
(11, 1, 11, 'Cóc nhà', '8/8/2018 19:28:55', '4/13/2018', NULL, 0, 'Not verified', 0),
(12, 1, 1, 'Ếch giun nguyễn 2', '8/8/2018 22:09:14', '4/13/2018', NULL, 0, 'Not verified', 0),
(13, 1, 13, 'Nhái Ngóe', '8/8/2018 22:34:32', '4/13/2018', NULL, 0, 'Not verified', 0),
(14, 1, 14, 'Ếch cua', '8/8/2018 22:36:45', '7/3/2018', NULL, 0, 'Not verified', 0),
(15, 1, 15, 'Nhái cơm', '8/8/2018 22:44:07', '4/13/2018', NULL, 0, 'Not verified', 0),
(16, 1, 16, 'Ếch đồng', '8/8/2018 22:52:37', '4/17/2018', NULL, 0, 'Not verified', 0),
(17, 1, 17, 'Cóc nước sần', '8/8/2018 22:59:13', '5/5/2018', NULL, 0, 'Not verified', 0),
(18, 1, 18, 'Cóc nước marten', '8/9/2018 6:47:51', '5/6/2018', NULL, 0, 'Not verified', 0),
(19, 1, 3, 'Ễnh ương 2', '8/9/2018 6:54:05', '7/3/2018', NULL, 0, 'Not verified', 0),
(20, 1, 20, 'Nhái bầu heymon', '8/9/2018 7:11:37', '7/4/2018', NULL, 0, 'Not verified', 0),
(21, 1, 21, 'Chàng xanh', '8/9/2018 7:20:31', '4/17/2018', NULL, 0, 'Not verified', 0),
(22, 1, 22, 'Ếch cây mép trắng', '8/9/2018 7:34:47', '4/14/2018', NULL, 0, 'Not verified', 0),
(23, 1, 23, 'Nhông hàng rào', '8/9/2018 8:35:35', '4/18/2018', NULL, 0, 'Not verified', 0),
(24, 1, 8, 'Thằn lằn 4 móng 2', '8/9/2018 8:47:49', '4/14/2018', NULL, 0, 'Not verified', 0),
(25, 1, 9, 'Thạch sùng garnot 2', '8/9/2018 9:53:09', '7/3/2018', NULL, 0, 'Not verified', 0),
(26, 1, 10, 'Thạch sùng đuôi sần 2', '8/9/2018 10:10:20', '4/16/2018', NULL, 0, 'Not verified', 0),
(27, 1, 22, 'Thạch sùng đuôi dẹp', '8/9/2018 10:18:15', '5/7/2018', NULL, 0, 'Not verified', 0),
(28, 1, 23, 'Thằn lằn đuôi dài', '8/9/2018 10:48:59', '5/8/2018', NULL, 0, 'Not verified', 0),
(29, 1, 24, 'Thằn lằn bóng hoa', '8/9/2018 10:59:23', '7/9/2018', NULL, 0, 'Not verified', 0),
(30, 1, 25, 'Trăn lưới', '8/9/2018 11:10:41', 'Không có', NULL, 0, 'Not verified', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment_cd`
--

CREATE TABLE `comment_cd` (
  `ID_CMT` int(11) NOT NULL,
  `ID_CD` int(11) NOT NULL,
  `ID_User` int(11) NOT NULL,
  `Noidung_CMT` varchar(1000) NOT NULL,
  `Thoigian_CMT` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coordinate`
--

CREATE TABLE `coordinate` (
  `ID_Animal` int(11) NOT NULL,
  `Vido` varchar(40) NOT NULL,
  `Kinhdo` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `coordinate`
--

INSERT INTO `coordinate` (`ID_Animal`, `Vido`, `Kinhdo`) VALUES
(1, '9.571639 N', '105.748757 E '),
(1, '9.563858 N', '105.742898 E '),
(1, '9.572843 N', '105.745688 E '),
(2, '9.567941 N', '105.745900 E '),
(2, '9.571219 N', '105.746927 E '),
(2, '9.570929 N', '105.744803 E '),
(2, '9.566659 N', '105.742109 E '),
(3, '9.572816 N', '105.747786 E '),
(4, '9.570890 N', '105.747758 E '),
(4, '9.569821 N', '105.742266 E '),
(5, '9.563974 N', '105.742907 E '),
(5, '9.574045 N', '105.734023 E '),
(5, '9.575835 N', '105.739572 E '),
(5, '9.566833 N', '105.733836 E '),
(6, '9.562804 N', '105.735163 E '),
(6, '9.565287 N', '105.742496 E '),
(6, '9.568298 N', '105.743803 E '),
(6, '9.567662 N', '105.733728 E '),
(6, '9.575595 N', '105.746317 E '),
(7, '9.575614 N', '105.749954 E '),
(7, '9.573805 N', '105.751692 E '),
(7, '9.568964 N', '105.745518 E '),
(8, '9.572150 N', '105.749171 E '),
(8, '9.571834 N', '105.748832 E '),
(8, '9.574353 N', '105.750457 E '),
(9, '9.570530 N', '105.746281 E '),
(9, '9.570154 N', '105.745585 E '),
(10, '9.568512 N', '105.745714 E '),
(10, '9.565689 N', '105.746787 E '),
(10, '9.572158 N', '105.748482 E '),
(11, '9.567941 N', '105.745900 E '),
(11, '9.571219 N', '105.746927 E '),
(11, '9.570929 N', '105.744803 E '),
(11, '9.566659 N', '105.742109 E '),
(12, '9.575814 N', '105.746348 E '),
(12, '9.575835 N', '105.739632 E '),
(12, '9.570419 N', '105.732745 E '),
(12, '9.564791 N', '105.737014 E '),
(12, '9.563098 N', '105.744053 E '),
(13, '9.566779 N', '105.746481 E '),
(13, '9.567480 N', '105.740065 E '),
(13, '9.566335 N', '105.742257 E '),
(14, '9.568883 N', '105.744345 E '),
(14, '9.563726 N', '105.736029 E '),
(14, '9.562971 N', '105.743106 E '),
(14, '9.569341 N', '105.745378 E '),
(14, '9.575449 N', '105.738078 E '),
(15, '9.574483 N', '105.735084 E '),
(15, '9.563477 N', '105.735868 E '),
(16, '9.564849 N', '105.737191 E '),
(16, '9.570315 N', '105.748801 E '),
(16, '9.577027 N', '105.742940 E '),
(17, '9.572058 N', '105.745009 E '),
(17, '9.568216 N', '105.741847 E '),
(17, '9.567883 N', '105.733726 E '),
(18, '9.570890 N', '105.747758 E '),
(18, '9.569821 N', '105.742266 E '),
(19, '9.563974 N', '105.742907 E '),
(19, '9.574045 N', '105.734023 E '),
(19, '9.575835 N', '105.739572 E '),
(19, '9.566833 N', '105.733836 E '),
(20, '9.562804 N', '105.735163 E '),
(20, '9.565287 N', '105.742496 E '),
(20, '9.568298 N', '105.743803 E '),
(20, '9.567662 N', '105.733728 E '),
(20, '9.575595 N', '105.746317 E '),
(21, '9.575614 N', '105.749954 E '),
(21, '9.573805 N', '105.751692 E '),
(21, '9.568964 N', '105.745518 E '),
(22, '9.573264 N', '105.747454 E '),
(22, '9.571806 N', '105.744368 E '),
(23, '9.575381 N', '105.750288 E '),
(24, '9.574122 N', '105.751436 E '),
(25, '9.575423 N', '105.749730 E ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `favoritelist_animal`
--

CREATE TABLE `favoritelist_animal` (
  `ID_User` int(11) NOT NULL,
  `ID_Animal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `favoritelist_animal`
--

INSERT INTO `favoritelist_animal` (`ID_User`, `ID_Animal`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 22),
(1, 23),
(1, 24),
(1, 25);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `information`
--

CREATE TABLE `information` (
  `ID_User` int(11) NOT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Hoten_User` varchar(30) DEFAULT NULL,
  `Ngaysinh_User` int(11) DEFAULT NULL,
  `Ngaytao_User` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `information`
--

INSERT INTO `information` (`ID_User`, `Email`, `Hoten_User`, `Ngaysinh_User`, `Ngaytao_User`) VALUES
(2, 'minhluu2608@gmail.com', NULL, NULL, 0),
(3, 'minhluu2608@gmail.com', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `picture`
--

CREATE TABLE `picture` (
  `ID_Animal` int(11) NOT NULL,
  `Link_Picture` varchar(300) NOT NULL,
  `Default_Pic` int(11) NOT NULL DEFAULT 0 CHECK (`Default_Pic` >= 0 and `Default_Pic` <= 1)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `picture`
--

INSERT INTO `picture` (`ID_Animal`, `Link_Picture`, `Default_Pic`) VALUES
(1, './img/animal/img/echgiunnguyen_1.jpg', 1),
(1, './img/animal/img/echgiunnguyen_2.jpg', 0),
(1, './img/animal/img/echgiunnguyen_3.jpg', 0),
(1, './img/animal/img/echgiunnguyen_4.jpg', 0),
(1, './img/animal/img/echgiunnguyen_5.jpg', 0),
(2, './img/animal/img/cocnha_1.jpg', 1),
(2, './img/animal/img/cocnha_2.jpg', 0),
(2, './img/animal/img/cocnha_3.jpg', 0),
(2, './img/animal/img/cocnha_4.jpg', 0),
(11, './img/animal/img/cocnha_1.jpg', 1),
(11, './img/animal/img/cocnha_2.jpg', 0),
(11, './img/animal/img/cocnha_3.jpg', 0),
(11, './img/animal/img/cocnha_4.jpg', 0),
(3, './img/animal/img/enhuong_1.jpg', 1),
(3, './img/animal/img/enhuong_2.jpg', 0),
(4, './img/animal/img/nhaibauheymon_1.JPG', 1),
(4, './img/animal/img/nhaibauheymon_2.JPG', 0),
(4, './img/animal/img/nhaibauheymon_3.JPG', 0),
(4, './img/animal/img/nhaibauheymon_4.JPG', 0),
(4, './img/animal/img/nhaibauheymon_5.JPG', 0),
(18, './img/animal/img/nhaibauheymon_1.JPG', 1),
(18, './img/animal/img/nhaibauheymon_2.JPG', 0),
(18, './img/animal/img/nhaibauheymon_3.JPG', 0),
(18, './img/animal/img/nhaibauheymon_4.JPG', 0),
(18, './img/animal/img/nhaibauheymon_5.JPG', 0),
(5, './img/animal/img/changxanh_1.jpg', 1),
(5, './img/animal/img/changxanh_2.jpg', 0),
(5, './img/animal/img/changxanh_3.jpg', 0),
(5, './img/animal/img/changxanh_4.jpg', 0),
(5, './img/animal/img/changxanh_5.jpg', 0),
(19, './img/animal/img/changxanh_1.jpg', 1),
(19, './img/animal/img/changxanh_2.jpg', 0),
(19, './img/animal/img/changxanh_3.jpg', 0),
(19, './img/animal/img/changxanh_4.jpg', 0),
(19, './img/animal/img/changxanh_5.jpg', 0),
(6, './img/animal/img/echcaymeptrang_1.jpg', 1),
(6, './img/animal/img/echcaymeptrang_2.jpg', 0),
(6, './img/animal/img/echcaymeptrang_3.jpg', 0),
(6, './img/animal/img/echcaymeptrang_4.jpg', 0),
(6, './img/animal/img/echcaymeptrang_5.jpg', 0),
(20, './img/animal/img/echcaymeptrang_1.jpg', 1),
(20, './img/animal/img/echcaymeptrang_2.jpg', 0),
(20, './img/animal/img/echcaymeptrang_3.jpg', 0),
(20, './img/animal/img/echcaymeptrang_4.jpg', 0),
(20, './img/animal/img/echcaymeptrang_5.jpg', 0),
(7, './img/animal/img/nhongxanh_1.jpg', 1),
(7, './img/animal/img/nhongxanh_2.jpg', 0),
(7, './img/animal/img/nhongxanh_3.jpg', 0),
(7, './img/animal/img/nhongxanh_4.jpg', 0),
(8, './img/animal/img/thanlan4mong_1.jpg', 1),
(8, './img/animal/img/thanlan4mong_2.jpg', 0),
(8, './img/animal/img/thanlan4mong_3.jpg', 0),
(8, './img/animal/img/thanlan4mong_4.jpg', 0),
(8, './img/animal/img/thanlan4mong_5.jpg', 0),
(9, './img/animal/img/thachsunggarnot_1.jpg', 1),
(9, './img/animal/img/thachsunggarnot_2.jpg', 0),
(9, './img/animal/img/thachsunggarnot_3.jpg', 0),
(9, './img/animal/img/thachsunggarnot_4.jpg', 0),
(9, './img/animal/img/thachsunggarnot_5.jpg', 0),
(10, './img/animal/img/thachsungduoisan_1.jpg', 1),
(10, './img/animal/img/thachsungduoisan_2.jpg', 0),
(10, './img/animal/img/thachsungduoisan_3.jpg', 0),
(12, './img/animal/img/nhaingoe_1.jpg', 1),
(12, './img/animal/img/nhaingoe_2.jpg', 0),
(12, './img/animal/img/nhaingoe_3.jpg', 0),
(12, './img/animal/img/nhaingoe_4.jpg', 0),
(12, './img/animal/img/nhaingoe_5.jpg', 0),
(13, './img/animal/img/echcua_1.jpg', 1),
(13, './img/animal/img/echcua_2.jpg', 0),
(13, './img/animal/img/echcua_3.jpg', 0),
(14, './img/animal/img/nhaicom_1.jpg', 1),
(14, './img/animal/img/nhaicom_2.jpg', 0),
(14, './img/animal/img/nhaicom_3.jpg', 0),
(14, './img/animal/img/nhaicom_4.jpg', 0),
(14, './img/animal/img/nhaicom_5.jpg', 0),
(15, './img/animal/img/echdong_1.jpg', 1),
(15, './img/animal/img/echdong_2.jpg', 0),
(15, './img/animal/img/echdong_3.jpg', 0),
(15, './img/animal/img/echdong_4.jpg', 0),
(16, './img/animal/img/cocnuocsan_1.jpg', 1),
(16, './img/animal/img/cocnuocsan_2.jpg', 0),
(16, './img/animal/img/cocnuocsan_3.jpg', 0),
(17, './img/animal/img/cocnuocmarten_1.jpg', 1),
(17, './img/animal/img/cocnuocsan_2.jpg', 0),
(17, './img/animal/img/cocnuocsan_3.jpg', 0),
(23, './img/animal/img/thanlanduoidai_1.jpg', 1),
(23, './img/animal/img/thanlanduoidai_2.jpg', 0),
(23, './img/animal/img/thanlanduoidai_3.jpg', 0),
(23, './img/animal/img/thanlanduoidai_4.jpg', 0),
(23, './img/animal/img/thanlanduoidai_5.jpg', 0),
(24, './img/animal/img/thanlanbonghoa_1.jpg', 1),
(24, './img/animal/img/thanlanbonghoa_2.jpg', 0),
(24, './img/animal/img/thanlanbonghoa_3.jpg', 0),
(23, './img/animal/img/thanlanbonghoa_4.jpg', 0),
(23, './img/animal/img/thanlanbonghoa_5.jpg', 0),
(25, './img/animal/img/tranluoi_1.jpg', 1),
(25, './img/animal/img/tranluoi_2.jpg', 0),
(25, './img/animal/img/tranluoi_3.jpg', 0),
(25, './img/animal/img/tranluoi_4.jpg', 0),
(25, './img/animal/img/tranluoi_5.jpg', 0),
(21, './img/animal/img/nhongxanh_1.jpg', 1),
(21, './img/animal/img/nhongxanh_2.jpg', 0),
(21, './img/animal/img/nhongxanh_3.jpg', 0),
(21, './img/animal/img/nhongxanh_4.jpg', 0),
(22, './img/animal/img/thanlanduoidep_1.jpg', 1),
(22, './img/animal/img/thanlanduoidep_2.jpg', 0),
(22, './img/animal/img/thanlanduoidep_3.jpg', 0),
(22, './img/animal/img/thanlanduoidep_4.jpg', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_account`
--

CREATE TABLE `user_account` (
  `ID_User` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Privileges` varchar(50) NOT NULL,
  `PublicStatus` int(11) NOT NULL DEFAULT 0 CHECK (`PublicStatus` >= 0 and `PublicStatus` <= 1),
  `BANStatus` int(11) NOT NULL DEFAULT 0 CHECK (`BANStatus` >= 0 and `BANStatus` <= 1)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user_account`
--

INSERT INTO `user_account` (`ID_User`, `Username`, `Password`, `Privileges`, `PublicStatus`, `BANStatus`) VALUES
(1, 'DemoUser', 'demo', 'Admin', 0, 0),
(2, 'GuestUser', '2608', 'User', 0, 0),
(3, 'minhluu2608', '2608', 'User', 0, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`ID_Animal`);

--
-- Chỉ mục cho bảng `collectiondata`
--
ALTER TABLE `collectiondata`
  ADD PRIMARY KEY (`ID_CD`),
  ADD KEY `ID_User` (`ID_User`),
  ADD KEY `ID_Animal` (`ID_Animal`);

--
-- Chỉ mục cho bảng `comment_cd`
--
ALTER TABLE `comment_cd`
  ADD PRIMARY KEY (`ID_CMT`),
  ADD KEY `ID_User` (`ID_User`),
  ADD KEY `ID_CD` (`ID_CD`);

--
-- Chỉ mục cho bảng `coordinate`
--
ALTER TABLE `coordinate`
  ADD KEY `ID_Animal` (`ID_Animal`);

--
-- Chỉ mục cho bảng `favoritelist_animal`
--
ALTER TABLE `favoritelist_animal`
  ADD UNIQUE KEY `ID_User` (`ID_User`,`ID_Animal`),
  ADD KEY `ID_Animal` (`ID_Animal`);

--
-- Chỉ mục cho bảng `information`
--
ALTER TABLE `information`
  ADD KEY `ID_User` (`ID_User`);

--
-- Chỉ mục cho bảng `picture`
--
ALTER TABLE `picture`
  ADD KEY `ID_Animal` (`ID_Animal`);

--
-- Chỉ mục cho bảng `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`ID_User`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `animal`
--
ALTER TABLE `animal`
  MODIFY `ID_Animal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `collectiondata`
--
ALTER TABLE `collectiondata`
  MODIFY `ID_CD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `comment_cd`
--
ALTER TABLE `comment_cd`
  MODIFY `ID_CMT` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `user_account`
--
ALTER TABLE `user_account`
  MODIFY `ID_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `collectiondata`
--
ALTER TABLE `collectiondata`
  ADD CONSTRAINT `collectiondata_ibfk_1` FOREIGN KEY (`ID_User`) REFERENCES `user_account` (`ID_User`),
  ADD CONSTRAINT `collectiondata_ibfk_2` FOREIGN KEY (`ID_Animal`) REFERENCES `animal` (`ID_Animal`);

--
-- Các ràng buộc cho bảng `comment_cd`
--
ALTER TABLE `comment_cd`
  ADD CONSTRAINT `comment_cd_ibfk_1` FOREIGN KEY (`ID_User`) REFERENCES `user_account` (`ID_User`),
  ADD CONSTRAINT `comment_cd_ibfk_2` FOREIGN KEY (`ID_CD`) REFERENCES `collectiondata` (`ID_CD`);

--
-- Các ràng buộc cho bảng `coordinate`
--
ALTER TABLE `coordinate`
  ADD CONSTRAINT `coordinate_ibfk_1` FOREIGN KEY (`ID_Animal`) REFERENCES `animal` (`ID_Animal`);

--
-- Các ràng buộc cho bảng `favoritelist_animal`
--
ALTER TABLE `favoritelist_animal`
  ADD CONSTRAINT `favoritelist_animal_ibfk_1` FOREIGN KEY (`ID_User`) REFERENCES `user_account` (`ID_User`),
  ADD CONSTRAINT `favoritelist_animal_ibfk_2` FOREIGN KEY (`ID_Animal`) REFERENCES `animal` (`ID_Animal`);

--
-- Các ràng buộc cho bảng `information`
--
ALTER TABLE `information`
  ADD CONSTRAINT `information_ibfk_1` FOREIGN KEY (`ID_User`) REFERENCES `user_account` (`ID_User`);

--
-- Các ràng buộc cho bảng `picture`
--
ALTER TABLE `picture`
  ADD CONSTRAINT `picture_ibfk_1` FOREIGN KEY (`ID_Animal`) REFERENCES `animal` (`ID_Animal`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
