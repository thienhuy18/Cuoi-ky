-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 07, 2023 lúc 03:47 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mydb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `songID` varchar(50) NOT NULL,
  `comment` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`songID`, `comment`) VALUES
('Chìm Sâu', 'This song is good'),
('Chìm Sâu', 'I love it');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ellipsis`
--

CREATE TABLE `ellipsis` (
  `song` varchar(50) NOT NULL,
  `lyrics` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `ellipsis`
--

INSERT INTO `ellipsis` (`song`, `lyrics`) VALUES
('Chìm Sâu', 'Tại vì sao bao nhiêu lâu nay anh thì thầm thả gió cuốn bay đi?\n\r\nChạm vào môi đan vào tay của em ta đi chung bước với thời gian\n\r\nMột nụ hôn thay cho bao nụ hồng em có muốn ngay khi\n\r\nTa vừa gặp nhau?\n\r\nYou got me, got me chìm sâu (got me, got me chìm sâu)\n\r\nBut I am all go\n\r\nBaby, anh không muốn em phải buông lệ sầu hoen đôi chân mi\n\r\nYou got me, got me chìm sâu (got me, got me chìm sâu)\n\r\nBut I am all go\n\r\nAnh chỉ mong em hạnh phúc trên cuộc đời này kể cả khi ta phân li\n\r\nMy mind is a mess (my mind)\n\r\nEm đẹp từng cm (yeah)\n\r\nBae dont foolin me (yeah)\n\r\nEm chỉ cần sayin yes\n\r\nBởi vì anh sẽ cố dẫn em vào tròng (sẽ dẫn em vào tròng)\n\r\nNói hết những câu thật lòng (yeah, nói hết thật lòng)\n\r\nSmoke weed get high, mặc kệ bad vibe của last night\n\r\nVì cho dù là còn thương, hay cho dù là đã quên\n\r\nChỉ cần còn tình yêu là ta sẽ đến được thiên đường\n\r\nMình quấn quýt vào nhau (vào nhau), thật lâu (thật lâu)\n\r\nRồi sẽ phải đến lúc em gật đầu\n\r\nYou got me, got me chìm sâu (got me, got me chìm sâu)\n\r\nBut I am all go\n\r\nBaby, anh không muốn em phải buông lệ sầu hoen đôi chân mi\n\r\nYou got me, got me chìm sâu (got me, got me chìm sâu)\n\r\nBut Im all go\n\r\nAnh chỉ mong em hạnh phúc trên cuộc đời này kể cả khi ta phân li\n\r\nLà bởi vì em quá xinh đẹp! Quá đỗi yêu kiều?\n\r\nXung quanh bao nhiêu cậu trai muốn chiếm tim em\n\r\nNhưng chỉ có anh ở đây si mê em nhường này\n\r\nVậy đừng phí thêm thời gian, hãy hôn anh đúng khi màn đêm\n\r\nBuông trên phím đàn, ta như mơ màng\n\r\nĐôi chân miên man đam mê tiếng nhạc, hooh-hooh-hooh-huh\n\r\nVà để rồi khi, bình minh vương trên môi êm\n\r\nAnh nâng đôi tay, để nói với em\n\r\nYou got me, got me chìm sâu (got me, got me chìm sâu)\n\r\nBut Im all go (but Im all go)\n\r\nBaby, anh không muốn em phải buông lệ sầu hoen đôi chân mi\n\r\nYou got me, got me chìm sâu (got me, got me chìm sâu)\n\r\nBut Im all go (but Iam all go)\n\r\nAnh chỉ mong em hạnh phúc trên cuộc đời này kể cả khi ta phân li'),
('Ngủ Một Mình', 'Hãy ở lại với anh thêm một ngày nữa thôi\r\nVì anh không muốn phải ngủ một mình đêm nay đâu\r\nBên ngoài và uống say hay là ta nằm đây cả đêm\r\nChỉ là anh không muốn phải ngủ một mình đêm nay\r\nYeah yeah\r\nBaby nói cho anh nghe em hãy nói cho anh nghe những điều mà\r\nĐiều em muốn sau khi đêm nay trôi qua\r\nLà một trái tim hay những món quà\r\nEm muốn đôi tay anh đặt ở những nơi đâu\r\nAnh đã nhắm đôi môi từ những ngày đầu\r\nIm needing all your love\r\nNhưng em sẽ chẳng thể thấy anh khi qua ngày mai\r\nBởi vì thiên bình đây chẳng thể nào bên ai mãi mãi\r\nHãy hứa không nói cho ai\r\nHình em gửi anh làm sao mà có thể yeah\r\nThay những khi mà em đằng sau nằm ôm anh\r\nHãy ở lại với anh thêm một ngày nữa thôi\r\nVì anh không muốn phải ngủ một mình đêm nay đâu\r\nBên ngoài và uống say hay là ta nằm đây cả đêm\r\nBởi vì anh không muốn phải ngủ một mình đêm nay\r\nChẳng phải đón hay đưa\r\nCứ việc lên nhà anh như cách em từng đến thôi\r\nĐây đâu phải là lần duy nhất của em ở đây\r\nUh dù là ta chẳng phải của nhau\r\nNhưng chỉ mình anh được hôn lên tóc em\r\nChẳng phải quay mặt về nơi khác lúc em thay đồ\r\nHoh oh\r\nAnh biết điều đó là sai nhưng không cho em gặp ai\r\nPhải ở bên anh đến ngày mai yah\r\nPhải ở đến ngày mai yah\r\nBởi vì chúng ta cũng chỉ là\r\nHai con người cô đơn đến với nhau\r\nHãy ở lại với anh thêm một ngày nữa thôi\r\nVì anh không muốn phải ngủ một mình đêm nay đâu\r\nBên ngoài và uống say hay là ta nằm đây cả đêm\r\nChỉ là anh không muốn phải ngủ một mình đêm nay\r\nBởi vì anh không muốn phải ngủ một mình đêm nay\r\nChỉ là anh không muốn phải ngủ một mình đêm nay\r\nYeah yeah\r\nBaby nói cho anh nghe baby nói cho anh nghe những điều là'),
('Waiting For You', 'Chiều đang dần buông hạt mưa rơi xuống không gian lắng yên\r\nSuy tư vấn vương ngồi mộng mơ\r\nĐơn phương nhớ đến một nàng thơ\r\nGió đông ùa về mang những ê chề (woh)\r\nNgỡ là trái tim khô cằn héo úa sẽ thôi buồn đau\r\nNhưng thật cay đắng khi biết là (ú oà)\r\nMình chỉ là một người đến sau (hey)\r\nBiết em đã có người ở gần bên\r\nNhưng anh sẽ vẫn đứng ngay đây và chờ em\r\nMưa giông bão tố chẳng quan tâm đến ngày đêm\r\nKẻ si tình này chọn ở phía sau thầm nhớ mong em bae bae\r\nVì say mê ánh mắt yêu luôn cả bờ môi\r\nMuốn nói với cả thế giới chỉ thương em mà thôi\r\nĐắm đuối uh cháy lên ngọn lửa tình yêu\r\nBùng lên mạnh mẽ và thiêu đốt baby that’s what I feel\r\nMy girl I’m waiting for you\r\nMột bông hồng xinh tươi thắm huh trông em kiêu sa\r\nĐôi chân thướt tha mặn mà (uh)\r\nHương thơm miên man dịu dàng (uh)\r\nDáng duyên nụ cười say đắm yêu người\r\nNgỡ là trái tim khô cằn héo úa sẽ thôi buồn đau\r\nNhưng thật cay đắng khi biết là (ú oà)\r\nMình chỉ là một người đến sau (hey)\r\nBiết em đã có người ở gần bên\r\nNhưng anh sẽ vẫn đứng ngay đây và chờ em\r\nMưa giông bão tố chẳng quan tâm đến ngày đêm\r\nKẻ si tình này chọn ở phía sau thầm nhớ mong em bae bae\r\nVì say mê ánh mắt yêu luôn cả bờ môi\r\nMuốn nói với cả thế giới chỉ thương em mà thôi\r\nĐắm đuối uh cháy lên ngọn lửa tình yêu\r\nBùng lên mạnh mẽ và thiêu đốt baby that’s what I feel\r\nMy girl I’m waiting for you\r\nI’m waiting for you (oh oh)\r\nI’m waiting for you (oh oh)\r\nChờ em về đây với anh\r\nMình cùng đan bàn tay\r\nẤm áp bao đêm ngày\r\nYeah\r\nChờ em chờ em ừ thì chờ em\r\nChờ em chờ em chờ đến bao giờ\r\nBiển khô cạn trời không còn đầy sao\r\nThì anh vẫn nơi đây và chờ em\r\nBiết em đã có người ở gần bên\r\nNhưng anh sẽ vẫn đứng ngay đây và chờ em\r\nMưa giông bão tố chẳng quan tâm đến ngày đêm\r\nKẻ si tình này chọn ở phía sau thầm nhớ mong em bae bae\r\nVì say mê ánh mắt yêu luôn cả bờ môi\r\nMuốn nói với cả thế giới chỉ thương em mà thôi\r\nĐắm đuối uh cháy lên ngọn lửa tình yêu\r\nBùng lên mạnh mẽ và thiêu đốt baby that’s what I feel\r\nMy girl I’m waiting for you'),
('Tiny Love', 'Làm lại từ những thứ đơn giản nhất chuyện trò như lúc mới yêu\r\nTình mình như thứ nước hoa phảng phất nồng nàn như bát bún riêu\r\nNày người yêu dấu nếu trong một chốc buồn sầu đeo bám chúng ta\r\nThì đừng vội trách cớ sao tàn khốc vì niềm đau ấy sẽ qua\r\nSẽ qua thôi những u buồn thế gian\r\nTình yêu sẽ cháy nhưng không tro tàn\r\nYou re my ti ti tiny love\r\nBaby you re my ti ti tiny love\r\nYou re my ti ti tiny love\r\nBaby you re my time time timeless love\r\nMột chiều ta đứng kế bên nhìn ngắm cuộc đời như những bức tranh\r\nDạo từng khu phố lúc xưa chìm đắm mà giờ sao thấy mới toanh\r\nĐồng hồ nhanh quá mới đây mà hết đời người như những giấc mơ\r\nLàm gì cho đáng để sau này vết lời mình như những ý thơ\r\nÝ thơ trong những đau buồn thế gian\r\nTình yêu sẽ cháy nhưng không tro tàn\r\nYou re my ti ti tiny love\r\nBaby you re my ti ti tiny love\r\nYou re my ti ti tiny love\r\nBaby you re my time time timeless love\r\nI wanna love you till the end of time\r\nThings gonna change but not my mind\r\nI needed love just like I need you\r\nI love you my tiny tiny baby blue'),
('Chúng Ta Của Hiện Tại', 'Mùa thu mang giấc mơ quay về\r\nVẫn nguyên vẹn như hôm nào\r\nLá bay theo gió xôn xao\r\nChốn xưa em chờ\r\nĐoạn đường ngày nào nơi ta từng đón đưa\r\nCòn vấn vương không phai mờ\r\nGiấu yêu thương trong vần thơ\r\nChúng ta...\r\nLà áng mây bên trời vội vàng ngang qua\r\nChúng ta...\r\nChẳng thể nâng niu những câu thề\r\nCứ như vậy thôi, không một lời, lặng lẽ thế chia xa\r\nChiều mưa bên hiên vắng buồn,\r\nCòn ai thương ai, mong ai?\r\nĐiều anh luôn giữ kín trong tim\r\nThương em đôi mắt ướt nhòa\r\nĐiều anh luôn giữ kín trong tim này\r\nThương em đâu đó khóc òa\r\nĐiều anh luôn giữ kín trong tim này\r\nNgày mai nắng gió, sương hao gầy\r\nCó ai thương, lắng lo cho em?\r\n(Whoo-whoo-whoo)\r\nĐiều anh luôn giữ kín trong tim\r\nThương em, anh mãi xin là\r\nĐiều anh luôn giữ kín trong tim này\r\nThương em vì thương thôi mà\r\nĐiều anh luôn giữ kín trong tim này\r\nDù cho nắng tắt, xuân thay màu\r\nHéo khô đi tháng năm xưa kia\r\n(Anh nguyện ghi mãi trong tim)\r\n\"Nắng vương trên cành héo khô những kỉ niệm xưa kia\r\nNgày mai, người luyến lưu về giấc mơ từng có, liệu có ta?\"\r\nCó anh nơi đó không?\r\nCó anh nơi đó không?\r\n(Liệu có ta?)\r\nChúng ta...\r\nLà áng mây bên trời vội vàng ngang qua\r\nChúng ta...\r\nChẳng thể nâng niu những câu thề\r\nCứ như vậy thôi, không một lời, lặng lẽ thế chia xa\r\nChiều mưa bên hiên vắng buồn,\r\nCòn ai thương ai, mong ai?\r\nĐiều anh luôn giữ kín trong tim\r\nThương em đôi mắt ướt nhòa\r\nĐiều anh luôn giữ kín trong tim này\r\nThương em đâu đó khóc òa\r\nĐiều anh luôn giữ kín trong tim này\r\nNgày mai nắng gió, sương hao gầy\r\nCó ai thương, lắng lo cho em?\r\n(Whoo-whoo-whoo)\r\nĐiều anh luôn giữ kín trong tim\r\nThương em, anh mãi xin là\r\nĐiều anh luôn giữ kín trong tim này\r\nThương em vì thương thôi mà\r\nĐiều anh luôn giữ kín trong tim này\r\nDù cho nắng tắt, xuân thay màu\r\nHéo khô đi tháng năm xưa kia\r\n(Anh nguyện ghi mãi trong tim)\r\nNo, no, no\r\nNo, no, no\r\nĐiều anh luôn giữ kín trong tim (Giữ kín trong tim này)\r\nGiữ mãi trong tim này (Giữ mãi trong tim này)\r\nGiữ mãi trong tim mình (Giữ mãi trong tim mình)\r\nGiữ...\r\nCó anh nơi đó không?\r\nCó anh nơi đó không?\r\n(Whoo-whoo-whoo-whoo)\r\nĐiều anh luôn giữ kín trong tim (No, No)\r\nĐiều anh luôn giữ kín trong tim này (No, No)\r\nĐiều anh luôn giữ kín trong tim này\r\n(Ngày mai, nắng gió, sương hao gầy)\r\n(Có ai thương, lắng lo cho em?)\r\nĐiều anh luôn giữ kín trong tim (No, No)\r\nĐiều anh luôn giữ kín trong tim này (No, No)\r\nĐiều anh luôn giữ kín trong tim này\r\n(Dù cho nắng tắt, xuân thay màu)\r\n(Héo khô đi tháng năm xưa kia)\r\n(Anh nguyện ghi mãi trong tim)\r\nĐiều anh luôn giữ kín trong tim\r\nThương em đôi mắt ướt nhòa\r\nĐiều anh luôn giữ kín trong tim này\r\nThương em đâu đó khóc òa\r\nĐiều anh luôn giữ kín trong tim này\r\nNgày mai nắng gió, sương hao gầy\r\nCó ai thương, lắng lo cho em?\r\n(Whoo-whoo-whoo)\r\nĐiều anh luôn giữ kín trong tim\r\nThương em, anh mãi xin là\r\nĐiều anh luôn giữ kín trong tim này\r\nThương em vì thương thôi mà\r\nĐiều anh luôn giữ kín trong tim này\r\nDù cho nắng tắt, xuân thay màu\r\nHéo khô đi tháng năm xưa kia\r\n(Anh nguyện ghi mãi trong tim)'),
('Die For You', 'Im findin ways to articulate the feelin Im goin through\r\nI just cant say I dont love you\r\nCause I love you, yeah\r\nIts hard for me to communicate the thoughts that I hold\r\nBut tonight, Im gon let you know\r\nLet me tell the truth\r\nBaby, let me tell the truth, yeah\r\nYou know what Im thinkin, see it in your eyes\r\nYou hate that you want me, hate it when you cry\r\nYoure scared to be lonely, specially in the night\r\nIm scared that Ill miss you, happens every time\r\nI dont want this feelin, I cant afford love\r\nI try to find a reason to pull us apart\r\nIt aint workin, cause youre perfect, and I know that youre worth it\r\nI cant walk away, oh\r\nEven though were goin through it\r\nAnd it makes you feel alone\r\nJust know that I would die for you\r\nBaby, I would die for you, yeah\r\nThe distance and the time between us\r\nItll never change my mind\r\nCause baby, I would die for you\r\nBaby, I would die for you, yeah\r\nIm findin ways to manipulate the feelin youre goin through\r\nBut, baby girl, Im not blamin you\r\nJust dont blame me, too, yeah\r\nCause I cant take this pain forever\r\nAnd you wont find no one thats better\r\nCause Im right for you, babe\r\nI think Im right for you, babe\r\nYou know what Im thinkin, see it in your eyes\r\nYou hate that you want me, hate it when you cry\r\nIt aint workin, cause youre perfect, and I know that youre worth it\r\nI cant walk away, oh\r\nEven though were goin through it\r\nAnd it makes you feel alone\r\nJust know that I would die for you\r\nBaby, I would die for you, yeah\r\nThe distance and the time between us\r\nItll never change my mind\r\nCause baby, I would die for you, uh\r\nBaby, I would die for you, yeah\r\nI would die for you, I would lie for you\r\nKeep it real with you, I would kill for you\r\nMy baby\r\nIm just sayin, yeah\r\nI would die for you, I would lie for you\r\nKeep it real with you, I would kill for you\r\nMy baby\r\nNa-na-na, na-na-na, na-na, ooh\r\nEven though were goin through it\r\nAnd it makes you feel alone\r\nJust know that I would die for you\r\nBaby, I would die for you, yeah\r\nThe distance and the time between us\r\nItll never change my mind\r\nCause baby, I would die for you\r\nBaby, I would die for you, yeah (oh, babe)'),
('HUMBLE', 'Nobody pray for me\r\nIt been that day for me\r\nWay (yeah, yeah!)\r\nAyy, I remember syrup sandwiches and crime allowances\r\nFinesse a nigga with some counterfeits, but now Im countin this\r\nParmesan where my accountant lives; in fact, Im downin this\r\nDUSSÉ with my boo bae tastes like Kool-Aid for the analysts\r\nGirl, I can buy yo ass the world with my paystub\r\nOoh, that pussy good, wont you sit it on my taste buds?\r\nI get way too petty once you let me do the extras\r\nPull up on your block, then break it down, we playin Tetris\r\nA.m. to the p.m., p.m. to the a.m., funk\r\nPiss out your per diem, you just gotta hate em, funk\r\nIf I quit your BM, I still ride Mercedes, funk\r\nIf I quit this season, I still be the greatest, funk\r\nMy left stroke just went viral\r\nRight stroke put lil baby in a spiral\r\nSoprano C, we like to keep it on a high note\r\nIts levels to it, you and I know\r\nBitch, be humble (hol up, bitch)\r\nSit down (hol up, lil, hol up, lil bitch)\r\nBe humble (hol up, bitch)\r\nSit down (hol up, sit down, lil, sit down, lil bitch)\r\nWho dat nigga thinkin that he frontin on Man-Man?\r\nGet the fuck off my stage, Im the Sandman (Sandman)\r\nGet the fuck off my dick, that aint right\r\nI make a play fucking up your whole life\r\nIm so fuckin sick and tired of the Photoshop\r\nShow me somethin natural like afro on Richard Pryor\r\nShow me somethin natural like ass with some stretch marks\r\nStill will take you down right on your mamas couch in Polo socks\r\nAyy, this shit way too crazy, ayy, you do not amaze me, ayy\r\nI blew cool from AC, ayy, Obama just paged me, ayy\r\nI dont fabricate it, ayy, most of yall be fakin, ayy\r\nI stay modest bout it, ayy, she elaborate it, ayy\r\nThis that Grey Poupon, that Evian, that TED Talk, ayy\r\nWatch my soul speak, you let the meds talk, ayy\r\nIf I kill a nigga, it wont be the alcohol, ayy\r\nIm the realest nigga after all\r\nBitch, be humble (hol up, bitch)'),
('Paris In The Rain', 'All I know is (ooh ooh ooh)\r\nWe could go anywhere, we could do\r\nAnything, girl, whatever the mood were in\r\nYeah all I know is (ooh ooh ooh)\r\nGetting lost late at night, under stars\r\nFinding love standing right where we are, your lips\r\nThey pull me in the moment\r\nYou and I alone and\r\nPeople may be watching, I dont mind\r\nCause anywhere with you feels right\r\nAnywhere with you feels like\r\nParis in the rain\r\nParis in the rain\r\nWe dont need a fancy town\r\nOr bottles that we cant pronounce\r\nCause anywhere, babe\r\nIs like Paris in the rain\r\nWhen Im with you ooh ooh ooh\r\nWhen Im with you ooh ooh ooh\r\nParis in the rain\r\nParis in the rain\r\nI look at you now and I want this forever\r\nI might not deserve it but theres nothing better\r\nDont know how I ever did it all without you\r\nMy heart is about to, about to jump out of my chest\r\nFeelings they come and they go, that they do\r\nFeelings they come and they go, not with you\r\nThe late nights\r\nAnd the street lights\r\nAnd the people\r\nLook at me girl\r\nAnd the whole world could stop\r\nAnywhere with you feels right\r\nAnywhere with you feels like\r\nParis in the rain\r\nParis in the rain\r\nWe dont need a fancy town\r\nOr bottles that we cant pronounce\r\nCause anywhere, babe\r\nIs like Paris in the rain\r\nWhen Im with you ooh ooh\r\nWhen Im with you ooh ooh\r\nParis in the rain\r\nParis in the rain\r\nOh\r\nGirl, when Im not with you\r\nAll I do is miss you\r\nSo come and set the mood right\r\nUnderneath the moonlight\r\n(Days in Paris\r\nNights in Paris)\r\nPaint you with my eyes closed\r\nWonder where the time goes\r\n(Yeah, isnt it obvious?\r\nIst it obvious?)\r\nSo come and set the mood right\r\nUnderneath the moonlight\r\nCause anywhere with you feels right\r\nAnywhere with you feels like\r\nParis in the rain\r\nParis in the rain\r\nWalking down an empty street\r\nPuddles underneath our feet'),
('SICKO MODE', 'Astro, yeah\r\nSun is down, freezin cold\r\nThats how we already know winters here\r\nMy dawg would prolly do it for a Louis belt\r\nThats just all he know, he dont know nothin else\r\nI tried to show em, yeah\r\nI tried to show em, yeah, yeah\r\nYeah, yeah, yeah\r\nGone on you with the pick and roll\r\nYoung LaFlame, he in sicko mode\r\nWoo, made this here with all the ice on in the booth\r\nAt the gate outside, when they pull up, they get me loose\r\nYeah, Jump Out boys, that s Nike boys, hoppin out coupes\r\nThis shit way too big, when we pull up give me the loot\r\n(Gimme the loot!)\r\nWas off the Remy, had a Papoose\r\nHad to hit my old town to duck the news\r\nTwo-four hour lockdown, we made no moves\r\nNow its 4AM and Im back up poppin with the crew\r\nI just landed in, Chase B mixes pop like Jamba Juice\r\nDifferent colored chains, think my jeweler really sellin fruits\r\nAnd they chokin, man, know the crackers wish it was a noose\r\nSome-some-some, someone said\r\nTo win the retreat, we all in too deep\r\nP-p-playin for keeps, dont play us for weak (someone said)\r\nTo win the retreat, we all in too deep\r\nP-p-playin for keeps, dont play us for weak (yeah)\r\nThis shit way too formal, yall know I dont follow suit\r\nStacey Dash, most of these girls aint got a clue\r\nAll of these hoes I made off records I produced\r\nI might take all my exes and put em all in a group\r\nHit my esés, I need the bootch\r\nBout to turn this function to Bonnaroo\r\nTold her, \"Hop in, you comin too\"\r\nIn the 305, bitches treat me like Im Uncle Luke\r\n(Dont stop, pop that pussy!)\r\nHad to slop the top off, its just a roof (uh)\r\nShe said, \"Where we goin?\" I said, \"The moon\"\r\nWe aint even make it to the room\r\nShe thought it was the ocean, its just the pool\r\nNow I got her open, its just the Goose\r\nWho put this shit together? Im the glue (someone said)\r\nShorty FaceTimed me out the blue\r\nSomeone said (playin for keeps)\r\nSomeone said, motherfuck what someone said\r\n(Dont play us for weak)\r\nYeah\r\nAstro\r\nYeah, yeah\r\nTay Keith, fuck these niggas up (Ay, ay)\r\nShes in love with who I am\r\nBack in high school, I used to bus it to the dance (yeah)\r\nNow I hit the FBO with duffles in my hands\r\nI did half a Xan, thirteen hours til I land\r\nHad me out like a light, ayy, yeah\r\nLike a light, ayy, yeah\r\nLike a light, ayy\r\nSlept through the flight, ayy\r\nKnocked for the night, ayy, 767, man\r\nThis shit got double bedroom, man\r\nI still got scores to settle, man\r\nI crept down the block (down the block), made a right (yeah, right)\r\nCut the lights (yeah, what?), paid the price (yeah)\r\nNiggas think its sweet (nah, nah), its on sight (yeah, what?)\r\nNothin nice (yeah), baguettes in my ice (aww, man)\r\nJesus Christ (yeah), checks over stripes (yeah)\r\nThats what I like (yeah), thats what we like (yeah)\r\nLost my respect, you not a threat\r\nWhen I shoot my shot, that shit wetty like Im Sheck (bitch!)\r\nSee the shots that I took (ayy), wet like Im Book (ayy)\r\nWet like Im Lizzie, I be spinnin Valley\r\nCircle blocks til Im dizzy (yeah, what?)\r\nLike where is he? (Yeah, what?)\r\nNo one seen him (yeah, yeah)\r\nim tryna clean em (yeah)\r\nShes in love with who I am\r\nBack in high school, I used to bus it to the dance\r\nNow I hit the FBO with duffles in my hand (woo!)\r\nI did half a Xan, thirteen hours til I land\r\nHad me out like a light, like a light\r\nLike a light, like a light\r\nLike a light (yeah), like a light\r\nLike a light\r\nYeah, passed the dawgs a celly\r\nSendin texts, aint sendin kites, yeah\r\nHe said, \"Keep that on lock\"\r\nI said, \"You know this shit, its stife\", yeah\r\nIts absolute (yeah), Im back reboot (its lit!)\r\nLaFerrari to Jamba Juice, yeah (skrrt, skrrt)\r\nWe back on the road, they jumpin off, no parachute, yeah\r\nShawty in the back\r\nShe said she workin on her glutes, yeah (oh my God)\r\nAint by the book, yeah\r\nThis how it look, yeah\r\nBout a check, yeah\r\nJust check the foots, yeah\r\nPass this to my daughter, Ima show her what it took (yeah)\r\nBaby mama cover Forbes, got these other bitches shook, yeah\r\nYe-ah'),
('Industry Baby', 'Baby back, ayy\r\nCouple racks, ayy\r\nCouple Grammys on him\r\nCouple plaques, ayy\r\nThats a fact, ayy\r\nThrow it back, ayy\r\nThrow it back, ayy\r\nAnd this one is for the champions\r\nI aint lost since I began, yeah\r\nFunny how you said it was the end, yeah\r\nThen I went did it again, yeah\r\nI told you long ago, on the road\r\nI got what they waitin for\r\nI dont run from nothin, dog\r\nGet your soldiers, tell em I aint layin low\r\nYou was never really rootin for me anyway\r\nWhen im back up at the top, I wanna hear you say\r\nHe dont run from nothin, dog\r\nGet your soldiers, tell em that the break is over\r\nUh, need to, uh\r\nNeed to get this album done\r\nNeed a couple number ones\r\nNeed a plaque on every song\r\nNeed me like one with Nicki now\r\nTell a rap nigga, \"I dont see ya, \" ha\r\nIm a pop nigga like Bieber, ha\r\nI dont fuck bitches, Im queer, ha\r\nBut these niggas bitches like Madea\r\nYeah, yeah, yeah (yeah)\r\nAyy, oh, lets do it\r\nI aint fall off, I just aint release my new shit\r\nI blew up, now everybody tryna sue me\r\nYou call me Nas, but the hood call me Doobie, yeah\r\nAnd this one is for the champions\r\nI aint lost since I began, yeah\r\nFunny how you said it was the end, yeah\r\nThen I went did it again, yeah\r\nI told you long ago, on the road\r\nI got what they waitin for (I got what they waitin for)\r\nI dont run from nothin, dog\r\nGet your soldiers, tell em I aint layin low\r\n(Bitch, I aint runnin from no one)\r\nYou was never really rootin for me anyway (like, ooh-ooh)\r\nWhen Im back up at the top I wanna hear you say (like, ooh-ooh)\r\nHe dont run from nothin, dog\r\nGet your soldiers, tell em that the break is over\r\nMy track record so clean\r\nThey couldnt wait to just bash me\r\nI must be gettin too flashy\r\nYall shouldnt have let the world gas me (woo)\r\nIts too late cause Im here to stay\r\nAnd these girls know that Im nasty (mm)\r\nI sent her back to her boyfriend\r\nWith my handprint on her ass cheek\r\nCity talkin, we takin notes\r\nTell em all to keep makin posts\r\nWish he could but he cant get close\r\nOG so proud of me that he chokin up while he makin toasts\r\nIm the type that you cant control\r\nSaid I would then I made it so (so)\r\nI dont clear up rumors (ayy)\r\nWheres yall sense of humor? (Ayy)\r\nIm done makin jokes cause they got old like baby boomers\r\nTurn my haters to consumers\r\nI make vets feel like they juniors (juniors)\r\nSay your time is comin soon but just like Oklahoma (mm)\r\nMine is comin sooner (mm)\r\nIm just a late bloomer (mm)\r\nI didnt peak in high school, Im still out here gettin cuter (woo)\r\nAll these social networks and computers\r\nGot these pussies walkin round like they aint losers (losers)\r\nI told you long ago, on the road\r\nI got what they waitin for (I got what they waitin for)\r\nI dont run from nothin, dog\r\nGet your soldiers, tell em I aint layin low\r\n(Bitch, I aint runnin from no one)\r\nYou was never really rootin for me anyway (like, ooh-ooh)\r\nWhen Im back up at the top I wanna hear you say (like, ooh-ooh)\r\nHe dont run from nothin, dog\r\nGet your soldiers, tell em that the break is over\r\nYeah\r\nIm the industry baby,\r\nIm the industry baby\r\nYeah');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `playlists`
--

CREATE TABLE `playlists` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `song` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `playlists`
--

INSERT INTO `playlists` (`id`, `name`, `song`) VALUES
(1, 'A', 'Chim Sau'),
(3, 'C', 'Chim Sau'),
(2, 'B', 'Chim Sau'),
(0, 'A', 'Chim Sau'),
(0, 'B', 'Chim Sau'),
(0, 'D', 'Chim Sau'),
(0, 'A', 'Chim Sau'),
(0, 'Huy', 'Chim Sau'),
(0, 'A', 'Chim Sau'),
(0, 'C', 'Chim Sau'),
(0, 'A', 'Ngủ Một Mình'),
(0, 'A', 'Chìm Sâu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `song`
--

CREATE TABLE `song` (
  `songID` varchar(10) NOT NULL,
  `songName` varchar(30) NOT NULL,
  `songImg` varchar(100) NOT NULL,
  `singer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `songs`
--

CREATE TABLE `songs` (
  `name` varchar(50) NOT NULL,
  `singer` varchar(50) NOT NULL,
  `genres` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `songs`
--

INSERT INTO `songs` (`name`, `singer`, `genres`, `url`) VALUES
('Ngủ Một Mình', 'HIEUTHUHAI', 'Rap', 'songs/NguMotMinh-HIEUTHUHAINegavKewtiie-8267763.mp3'),
('Chúng Ta Của Hiện Tại', 'Sơn Tùng M-TP', 'Pop', 'songs/Chung Ta Cua Hien Tai - Son Tung M-TP.mp3'),
('Die For You', 'The Weeknd', 'Pop', 'songs/Die For You (Remix)(audiosong.in).mp3'),
('SICKO MODE', 'Travis Scott', 'Rap', 'songs/Travis_Scott_Ft_Drake_-_Sicko_Mode_Amebo9ja.com.mp3'),
('Waiting For You', 'MONO', 'Pop', 'songs/Waiting For You - MONO_ Onionn.mp3'),
('Tiny Love', 'Thịnh Suy', 'Indie', 'songs/tiny love - Thinh Suy - NhacHay360.mp3'),
('Paris In The Rain', 'Lauv', 'Indie', 'songs/Lauv Paris In The Rain Lyric Video.mp3'),
('HUMBLE', 'Kendrick Lamar', 'Rap', 'songs/Kendrick-Lamar-HUMBLE..mp3'),
('Industry Baby', 'Lil Nas X', 'Rap', 'songs/Lil-Nas-X-Ft-Jack-Harlow-Industry-Baby-(TrendyBeatz.com).mp3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
