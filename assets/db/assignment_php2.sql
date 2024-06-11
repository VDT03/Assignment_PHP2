-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th6 06, 2024 lúc 01:36 AM
-- Phiên bản máy phục vụ: 8.0.30
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `assignment_php2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL,
  `title` varchar(560) NOT NULL,
  `image` varchar(260) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `content` text NOT NULL,
  `id_tag` int NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `image`, `content`, `id_tag`, `created_at`, `updated_at`) VALUES
(3, 'New Zealand muốn xây dựng khuôn khổ quan hệ mới với Việt Nam', NULL, 'Chiều 5/6,  Thủ tướng Phạm Minh Chính tiếp Phó Thủ tướng, Bộ trưởng Ngoại giao New Zealand Winston Peters đang có chuyến thăm chính thức Việt Nam và đồng chủ trì Hội nghị Bộ trưởng Ngoại giao hai nước lần thứ 2.\r\n\r\nThủ tướng bày tỏ hài lòng về sự phát triển mạnh mẽ của quan hệ song phương.\r\n\r\nNgười đứng đầu Chính phủ đề nghị hai bên tăng cường các biện pháp nhằm sớm đưa kim ngạch thương mại hai chiều đạt mục tiêu 3 tỷ USD, đồng thời đẩy mạnh kết nối hai nền kinh tế có tính bổ trợ cao. Việt Nam hoan nghênh các doanh nghiệp New Zealand tăng cường đầu tư vào Việt Nam trong các lĩnh vực New Zealand có thế mạnh.\r\nHai nước cần đẩy mạnh hợp tác trong những lĩnh vực mới như ứng phó với biến đổi khí hậu, chuyển đổi năng lượng, tăng trưởng xanh, kinh tế số.\r\n\r\nNhân dịp này, Thủ tướng cũng đánh giá cao và đề nghị Chính phủ New Zealand tiếp tục quan tâm, tạo điều kiện cho cộng đồng người Việt Nam tại New Zealand sinh sống, học tập và làm việc, qua đó đóng góp cho sự phát triển cũng như quan hệ hai nước.\r\n\r\nPhó Thủ tướng, Bộ trưởng Ngoại giao Winston Peters khẳng định, New Zealand coi trọng vai trò của Việt Nam ở khu vực và quan hệ Đối tác Chiến lược Việt Nam-New Zealand. Ông mong muốn trên cơ sở quan hệ tốt đẹp hiện có, hai bên sẽ sớm xây dựng khuôn khổ quan hệ mới.\r\n\r\nBộ Ngoại giao New Zealand sẽ hợp tác chặt chẽ với Bộ Ngoại giao Việt Nam trong việc thu xếp các chuyến thăm và tiếp xúc giữa lãnh đạo cấp cao hai nước, tổ chức các hoạt động kỷ niệm 50 năm thiết lập quan hệ ngoại giao (1975-2025).\r\n\r\nHai bên nhất trí tiếp tục hợp tác chặt chẽ và tích cực ủng hộ lẫn nhau tại các diễn đàn đa phương; nhất trí phối hợp hiệu quả trong giai đoạn Việt Nam đảm nhiệm vai trò nước điều phối quan hệ ASEAN-New Zealand (7/2024-7/2027). \r\n\r\nPhó Thủ tướng, Bộ trưởng Ngoại giao Winston Peters nhấn mạnh, New Zealand coi trọng vai trò trung tâm của ASEAN và quan hệ Đối tác chiến lược với ASEAN, bày tỏ mong muốn sớm đưa mối quan hệ này lên tầm cao mới.\r\n\r\nTrao đổi về vấn đề Biển Đông, hai bên nhất trí ủng hộ quan điểm của ASEAN về vấn đề Biển Đông, giải quyết các tranh chấp bằng biện pháp hòa bình trên cơ sở luật pháp quốc tế, trong đó có UNCLOS 1982, bảo đảm an toàn, an ninh, tự do hàng hải và hàng không ở Biển Đông.\r\n\r\nTại Hội nghị Bộ trưởng Ngoại giao Việt Nam - New Zealand lần hai do Bộ trưởng Ngoại giao Bùi Thanh Sơn và Phó Thủ tướng, Bộ trưởng Ngoại giao Winston Peters đồng chủ trì, hai bên hài lòng về sự phát triển tích cực, hiệu quả của quan hệ Việt Nam - New Zealand trên các lĩnh vực.\r\nHai bên nhấn mạnh hợp tác kinh tế - thương mại còn nhiều tiềm năng và nhất trí triển khai các biện pháp mạnh mẽ, đột phá hơn nữa nhằm đạt mục tiêu kim ngạch thương mại hai chiều 3 tỷ USD vào năm 2026.\r\n\r\nBao gồm tăng cường kết nối hai nền kinh tế, mở rộng tiếp cận thị trường, thực thi hiệu quả cam kết trong khuôn khổ các Hiệp định thương mại tự do, sớm mở đường bay thẳng giữa hai nước.\r\n\r\nHai bên nhất trí mở rộng và làm sâu sắc hợp tác trong các lĩnh vực mới như nông nghiệp sạch, kinh tế xanh, kinh tế số, chuyển đổi năng lượng trong Chương trình Hành động triển khai quan hệ Đối tác chiến lược giai đoạn 2024 - 2027 sẽ được sớm xây dựng.\r\n\r\nPhó Thủ tướng, Bộ trưởng Ngoại giao Winston Peters khẳng định, Đông Nam Á là khu vực New Zealand dành ưu tiên cao trong triển khai chính sách đối ngoại mới, mong muốn thúc đẩy hợp tác thực chất, toàn diện và gắn kết hơn nữa; khẳng định ủng hộ vai trò trung tâm của ASEAN.\r\n\r\nBộ trưởng Bùi Thanh Sơn nhấn mạnh Việt Nam sẽ nỗ lực đẩy mạnh hơn nữa hợp tác giữa ASEAN và New Zealand trên cương vị nước điều phối quan hệ ASEAN - New Zealand giai đoạn 7/2024 - 7/2027. Bộ trưởng Bùi Thanh Sơn cũng đề nghị New Zealand phối hợp thúc đẩy hợp tác giữa ASEAN và Diễn đàn các nước đảo Thái Bình Dương.\r\n\r\nHai bên nhất trí sẽ tổ chức hội nghị lần thứ 3 tại New Zealand năm 2025.', 3, '2024-06-06 01:25:45', '2024-06-06 01:25:45'),
(4, 'Real Madrid lần thứ 15 vô địch Champions League', NULL, 'Carvajal và Vinicius cùng nhau ghi bàn giúp Real Madrid đánh bại Dortmund với tỷ số 2-0, qua đó kéo dài kỷ lục 15 lần vô địch Champions League.\r\nTrận chung kết Champions League diễn ra có phần trái với dự đoán khi Real Madrid với thế \"cửa trên\" lại gặp rất nhiều khó khăn trước khát khao và quyết tâm của Dortmund.\r\n\r\nChính đội bóng Bundesliga mới là những người tạo ra nhiều cơ hội nguy hiểm hơn trong hiệp một. Nếu không có sự xuất sắc của thủ môn Courtois cùng may mắn thì Real Madrid đã phải nhận bàn thua.\r\n\r\nQua giờ giải lao, các học trò của HLV Edin Terzic vẫn là những người chơi phòng ngự chủ động. Bước ngoặt đến ở phút 74 khi Toni Kroos đá phạt góc để Carvajal đánh đầu lái bóng tung lưới Dortmund.\r\n\r\nBàn mở tỷ số giúp đội bóng được dẫn dắt bởi HLV Carlo Ancelotti thi đấu thoải mái hơn, trong khi Dortmund loay hoay trong việc hóa giải hàng phòng ngự của đại diện La Liga.\r\n\r\nCục diện trận chung kết trên sân Wembley được định đoạt ở phút 83, Bellingham kiến tạo để Vinicius dứt điểm không tốt nhưng bóng đi đập đất khiến thủ thành Gregor Kobel cũng không thể cản phá.\r\n\r\nThắng trận 2-0 trước Dortmund, \"Kền kền trắng\" kéo dài kỷ lục vô địch Champions League lên con số 15.\r\n\r\nGhi bàn:\r\n\r\nReal Madrid: Carvajal (74\'), Vinicius (83\')\r\n\r\nĐội hình ra sân:\r\n\r\nReal Madrid (4-3-1-2): Courtois, Carvajal, Rudiger, Nacho, Mendy, Valverde, Camavinga, Kroos (Luka Modric 85\'), Bellingham (Joselu 85\'), Rodrygo (Éder Militao 90\'), Vinicius (Lucas Vázquez 90\')\r\n\r\nDortmund (4-2-3-1): Kobel, Ryerson, Hummels, Schlotterbeck, Maatsen, Sabitzer, Can (Donyell Malen 80\'), Sancho (Jamie Bynoe-Gittens 87\'), Brandt (Sébastien Haller 80\'), Adeyemi (Marco Reus 72\'), Fullkrug\r\n\r\nKẾT THÚC\r\n\r\nTrận đấu kết thúc với chiến thắng 2-0 dành cho Real Madrid trước Dortmund. Kết quả này giúp đội bóng Hoàng gia Tây Ban Nha đoạt chiếc cúp vô địch Champions League lần thứ 15 trong lịch sử.', 1, '2024-06-06 01:28:15', '2024-06-06 01:28:15'),
(5, 'Ngân hàng tiếp tục rao bán khoản nợ gần 215 lượng vàng SJC kéo dài 20 năm', NULL, 'Khoản nợ gần 215 lượng vàng SJC của một khách hàng cá nhân vay từ năm 2004, đến nay, ngân hàng mong muốn thu về hơn 9 tỷ đồng.\r\nCông ty TNHH MTV Quản lý nợ và khai thác tài sản Ngân hàng Nông nghiệp và Phát triển Nông thôn Việt Nam (Agribank AMC) vừa thông báo hạ giá bán đấu giá khoản nợ 2.149,11 chỉ vàng SJC (tương đương gần 215 lượng) của bà Doãn Thị Ngân.\r\n\r\nGiá bán nhà băng muốn thu về từ khoản nợ này là 9,226 tỷ đồng. Con số này đã giảm đáng kể so với mức giá khởi điểm 14,13 tỷ đồng được thông báo lần đầu tiên vào cuối năm 2023, nhưng vẫn không thay đổi so với mức giá thông báo lần gần nhất hồi tháng 4 năm nay.\r\n\r\nGiá trị khoản nợ tạm tính đến 13/7/2023 là 2.149,11 chỉ vàng SJC, tương đương 14,313 tỷ đồng (giá vàng ngày 13/7/2023 là 6.660.000 đồng/chỉ). \r\n\r\nĐây là khoản vay theo hợp đồng tín dụng ký từ năm 2004 giữa Công ty Vàng bạc đá quý Agribank (đã sáp nhập nguyên trạng vào Agribank) và khách hàng Doãn Thị Ngân.\r\n\r\nTài sản bảo đảm liên quan đến khoản nợ gồm: nhà, đất tọa lạc tại địa chỉ số 17/1, đường 62, P.Thảo Điền, Q.2 (nay là TP.Thủ Đức), TP.HCM.\r\n\r\nThời gian đấu giá dự kiến diễn ra vào ngày 14/6 tới. Đây là lần thứ tư Agribank AMC thông báo đấu giá khoản nợ nói trên.\r\n\r\nSo với giá khởi điểm lần đầu rao bán, mức giá trên đã giảm 4,9 tỷ đồng. Trong hai lần thông báo đấu giá gần nhất, giá khởi điểm của khoản nợ lần lượt là 10,8 tỷ đồng và 9,226 tỷ đồng. \r\n\r\nNgoài khoản nợ bằng vàng khó thanh lý nói trên, tháng 4 vừa qua, Agribank cũng thông báo bán hai khoản nợ bằng vàng của hai khách hàng tại Agribank Chi nhánh TP.HCM. Giá khởi điểm cho hai khoản nợ này là 45,781 tỷ đồng.\r\n\r\nCụ thể, khoản nợ thứ nhất của một nam khách hàng được hình thành từ năm 2008. Giá trị tạm tính đến 31/3/2023 là: nợ gốc hơn 14,8 tỷ đồng; nợ lãi vàng hơn 977,7 chỉ vàng SJC; nợ lãi VND hơn 7,76 tỷ đồng.\r\n\r\nNgoài ra, khách hàng này còn có khoản nợ tạm tính đến ngày 31/3/2023 gồm: dư nợ gốc hơn 16,95 tỷ đồng; nợ lãi vàng hơn 1.117,4 chỉ vàng SJC; nợ lãi VND hơn 8,88 tỷ đồng.\r\n\r\nTổng giá trị khoản nợ theo hai hợp đồng tín dụng nói trên là hơn 62,325 tỷ đồng. Trong đó, dư nợ gốc hơn 31,76 tỷ đồng; nợ lãi vàng quy đổi hơn 13,92 tỷ đồng; nợ lãi VND hơn 16,64 tỷ đồng.\r\n\r\nKhoản nợ còn lại của một nữ khách hàng tại Agribank Chi nhánh TP.HCM được rao bán cũng được hình thành từ năm 2008. \r\n\r\nGiá trị ghi sổ khoản nợ tạm tính đến ngày 31/3/2023 là hơn 26,38 tỷ đồng. Trong đó, dư nợ gốc gần 9,5 tỷ đồng; nợ lãi vàng quy đổi hơn 9,22 tỷ đồng, nợ lãi VND gần 7,67 tỷ đồng.\r\n\r\nTổng giá trị khoản nợ của hai cá nhân nói trên lên đến xấp xỉ 90 tỷ đồng. Tuy nhiên, ngân hàng chỉ đưa ra mức giá khởi điểm là 45,781 tỷ đồng.', 2, '2024-06-06 01:30:00', '2024-06-06 01:30:00'),
(6, 'Hà Nội lên phương án ứng phó ngập lụt do mưa bão', NULL, 'Sở GTVT Hà Nội vừa ban hành kế hoạch phòng, chống thiên tai, phương án ứng phó với các loại hình thiên tai và tìm kiếm cứu nạn năm 2024.\r\nPhương án phân luồng riêng cho từng \"điểm đen\" ngập lụt\r\n\r\nTheo Giám đốc Sở GTVT Hà Nội Nguyễn Phi Thường, vài năm gần đây, do biến đổi khí hậu xuất hiện các hiện tượng thời tiết cực đoan, lốc xoáy, mưa giông, gió rật mạnh và mưa đá xảy ra trên địa bàn.\r\n\r\nĐây là hiện tượng thiên nhiên khó lường khi xảy ra cần hết sức tập trung trong công tác chỉ đạo, phòng chống, khắc phục hậu quả. Đặc biệt chú trọng đề phòng lốc xoáy, gió giật xảy ra tại luồng, khe các tòa nhà cao tầng khi có mưa giông hoặc thời tiết cực đoan xảy ra.\r\n\r\nVới những trận mưa có lượng mưa từ 50-70mm/h và những trận mưa trên 100mm/h năm 2024 xảy ra trên địa bàn xuất hiện 30 điểm úng ngập dự kiến.\r\n\r\nThanh tra Sở sẽ được giao phối hợp với các đơn vị tổ chức lập chốt trực gác barie, thiết lập các biển báo báo hiệu vị trí và độ sâu mực nước, biển báo hướng dẫn giao thông, để cảnh báo cho các phương tiện qua lại...\r\n\r\nĐối với các vị trí sâu nguy hiểm (hố đào trần, hố ga, cầu cống...) bị ngập chìm phải rào chắn, biển báo hiệu cảnh báo, ban đêm thắp đèn chiếu sáng.\r\n\r\nĐặc biệt tại các đầu cống, hố ga nơi có dòng chảy xiết lưu lượng nước lớn phải có cọc tiêu thông báo nguy hiểm để đề phòng tai nạn xảy ra.\r\n\r\nTại các điểm bị úng ngập sâu phương tiện đi lại khó khăn trong trong thành phố ở các vị trí nhà chờ xe buýt, bến xe, bến tàu... bố trí lực lượng và phương tiện xe để hỗ trợ và vận chuyển nhân dân còn bị mắc kẹt ra vị trí an toàn và thuận lợi để di chuyển.\r\n\r\nSở GTVT cũng có phương án phân luồng giao thông các \"điểm đen\" ngập lụt. Căn cứ theo từng vị trí ngập cụ thể để tổ chức giao thông đảm bảo linh hoạt, phù hợp thực tế, đặc biệt tại những vị trí có thể bị ngập sâu. Đồng thời giao cho Thanh tra Sở phối hợp với các đơn vị tổ chức lập chốt trực gác barie, thiết lập các biển báo báo hiệu vị trí và độ sâu mực nước, biển báo hướng dẫn giao thông, để cảnh báo cho các phương tiện qua lại; phân luồng, tổ chức giao thông để đảm bảo an toàn cho các phương tiện và tài sản của người dân.\r\n\r\nĐáng chú ý, Hà Nội cũng lên kế hoạch ứng phó với 5 tình huống cụ thể như bão vào Hà Nội gây mưa rất to và kéo dài, nhiều tuyến đường nội đô bị ngập sâu nguy hiểm, nhiều cây cối, cột điện bị đổ chắn ngang đường gây cản trở giao thông. Một số tuyến đường huyết mạnh nối Thủ đô Hà Nội với các tỉnh lân cận bị ngập, sạt lở nghiêm trọng khu vực nội thành bị tê liệt mất điện, mất nước gây ảnh hưởng và làm xáo trộn sinh hoạt hàng ngày của nhân dân... \r\n\r\nNgoài ra còn có tình huống giả định, xảy ra vỡ đê quan trọng trên địa bàn và cùng một lúc xảy ra tai nạn giao thông nghiêm trọng trên các tuyến đường sắt, đường bộ, đường thuỷ đi qua trung tâm, làm chết và bị thương nhiều người, giao thông trên các tuyến đường này bị chia cắt, các phương tiện không lưu thông được...\r\n\r\nTại từng tình huống, Hà Nội đều đưa ra kế hoạch ứng phó cụ thể, phương án xử lý, cách thức phối hợp, đảm bảo an ninh, an toàn, giao thông thông suốt, hạn chế tối đa thiệt hại cũng như giảm bớt ảnh hưởng đến việc đi lại của người dân. ', 4, '2024-06-06 01:32:10', '2024-06-06 01:32:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tags`
--

CREATE TABLE `tags` (
  `id` int NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `tags`
--

INSERT INTO `tags` (`id`, `name`) VALUES
(1, 'Thể thao'),
(2, 'Tài chính'),
(3, 'Chính trị'),
(4, 'Môi trường');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id_user` int NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` int NOT NULL,
  `user_name` varchar(260) NOT NULL,
  `role` tinyint NOT NULL DEFAULT '2' COMMENT '1 là admin, 2 là customer',
  `is_active` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 là active, 0 là locked'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id_user`, `email`, `password`, `user_name`, `role`, `is_active`) VALUES
(1, 'vutai0122@gmail.com', 23122003, 'Vũ Đức Tài', 1, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_news_id` (`id_tag`);

--
-- Chỉ mục cho bảng `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`id_tag`) REFERENCES `tags` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
