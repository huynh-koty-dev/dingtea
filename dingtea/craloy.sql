
create DATABASE trasuacraloy;
USE trasuacraloy;

CREATE TABLE `admin` (
  `ma_ad` int(11) NOT NULL,
  `ten_dn_ad` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ten_ad` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



INSERT INTO `admin` (`ma_ad`, `ten_dn_ad`, `mat_khau`, `ten_ad`) VALUES
(-1, 'admin', '000000', 'admin');


CREATE TABLE `chitietdonhang` (
  `ma_dh` int(11) NOT NULL,
  `ma_ts` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `ghi_chu` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `don_gia` int(11) NOT NULL,
  `tong_gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



CREATE TABLE `donhang` (
  `ma_dh` int(11) NOT NULL,
  `ten_kh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_dh` datetime NOT NULL,
  `noi_giao` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `trang_thai` tinyint(4) NOT NULL,
  `ma_nv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



CREATE TABLE `feedback` (
  `ma_feedback` int(11) NOT NULL,
  `ten_nguoi_lh` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_nguoi_lh` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noi_dung` text COLLATE utf8_unicode_ci NOT NULL,
  `ngay_lh` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



INSERT INTO `feedback` (`ma_feedback`, `ten_nguoi_lh`, `email_nguoi_lh`, `noi_dung`, `ngay_lh`) VALUES
(1, 'Van', 'Van@gmail.com', 'Sản phẩm tốt', '2020-11-18 17:35:04');



CREATE TABLE `loaitrasua` (
  `ma_loai_ts` int(11) NOT NULL,
  `ten_loai` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



INSERT INTO `loaitrasua` (`ma_loai_ts`, `ten_loai`) VALUES
(1, 'Milk Tea'),
(2, 'Fresh Tea'),
(3, 'Rich And Aromatic'),
(4, 'Monster Bobo Latte'),
(5, 'Fruit Juice'),
(6, 'Matcha'),
(7, 'Yakult/Yogurt'),
(8, 'Cream Mousse'),
(9, 'Fruit Tea'),
(10, 'Fruit Milk Tea');




CREATE TABLE `monthem` (
  `ma_mt` int(11) NOT NULL,
  `ten_mt` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `gia_mt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



INSERT INTO `monthem` (`ma_mt`, `ten_mt`, `gia_mt`) VALUES
(1, 'Rau câu', 7000),
(2, 'Pudding', 7000),
(3, 'Đậu đỏ', 7000),
(4, 'Thạch cafe', 7000),
(5, 'Thạch băng tuyết', 7000),
(6, 'KHoai môn', 7000),
(7, 'Macchiato Cream Chesse', 10000),
(8, 'Trân châu QQ đường đen', 10000),
(9, 'Nha Đam', 7000),
(10, 'Hạt trái cây', 10000),
(11, 'Sủi bọt', 12000),
(12, 'Trân châu sợi', 7000),
(13, 'Trân châu trắng', 10000),
(14, 'Trân châu đen', 7000);



CREATE TABLE `nhanvien` (
  `ma_nv` int(11) NOT NULL,
  `ten_nv` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Äang Ä‘á»• dá»¯ liá»‡u cho báº£ng `nhanvien`
--

INSERT INTO `nhanvien` (`ma_nv`, `ten_nv`, `sdt`, `email`, `dia_chi`) VALUES
(-1, 'nhân viên mặc định', '1', '@', '@');

-- --------------------------------------------------------

--
-- Cáº¥u trÃºc báº£ng cho báº£ng `subscribers`
--

CREATE TABLE `subscribers` (
  `ma_sub` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Äang Ä‘á»• dá»¯ liá»‡u cho báº£ng `subscribers`
--

INSERT INTO `subscribers` (`ma_sub`, `email`) VALUES
(1, 'lgkidz1@gmail.com'),
(4, 'thefirstclone01@gmail.com');

-- --------------------------------------------------------

--
-- Cáº¥u trÃºc báº£ng cho báº£ng `thanhvien`
--

CREATE TABLE `thanhvien` (
  `ma_tv` int(11) NOT NULL,
  `ten_tv` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `gioi_tinh` tinyint(4) NOT NULL,
  `ten_dn_tv` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau_tv` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ban` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Äang Ä‘á»• dá»¯ liá»‡u cho báº£ng `thanhvien`
--

INSERT INTO `thanhvien` (`ma_tv`, `ten_tv`, `sdt`, `diachi`, `email`, `gioi_tinh`, `ten_dn_tv`, `mat_khau_tv`, `ban`) VALUES
(1, 'Nông Thị Hồng', '0974232266', 'Hà Nội', 'hong@gmail.com', 0, '', '000000', 0),
(2, 'Đỗ Khắc Đệ', '0642735589', 'Hà Nội', 'chi@gmail.com', 0, '', '123', 0);


CREATE TABLE `tintuc` (
  `ma_tin` int(11) NOT NULL,
  `tieu_de` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` text COLLATE utf8_unicode_ci NOT NULL,
  `gio_dang` datetime NOT NULL,
  `hinh_anh` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



INSERT INTO `tintuc` (`ma_tin`, `tieu_de`, `noi_dung`, `gio_dang`, `hinh_anh`) VALUES
(1, 'Mách bạn những đồ uống “không thể chối từ” khi đến Craloy ', '', '2020-02-28 00:00:00', ''),
(7, 'Bạn đã thử trà sữa của chúng mình chưa?', '', '2020-03-26 11:16:51', ''),
(10, 'Kem tuyết cho những ngày hè nóng nực?', '', '2020-04-15 23:31:19', ''),
(11, 'Khai trương chuỗi cửa hàng Craloy', '', '2020-05-18 23:59:12','');




CREATE TABLE `trasua` (
  `ma_ts` int(11) NOT NULL,
  `ma_loai_ts` int(11) NOT NULL,
  `ten_ts` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `gia_ts` int(11) NOT NULL,
  `hinh_anh_ts` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ma_mt` int(11) NOT NULL,
  `mo_ta` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `saoI` int(11) NOT NULL,
  `saoII` int(11) NOT NULL,
  `saoIII` int(11) NOT NULL,
  `saoIV` int(11) NOT NULL,
  `saoV` int(11) NOT NULL,

  FOREIGN KEY (`ma_loai_ts`) REFERENCES `loaitrasua`(`ma_loai_ts`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

drop table trasua
INSERT INTO `trasua` (`ma_ts`, `ma_loai_ts`, `ten_ts`, `gia_ts`, `hinh_anh_ts`, `mo_ta`, `saoI`, `saoII`, `saoIII`, `saoIV`, `saoV`) VALUES
(9, 1, 'Trà sữa đậu đỏ', 31000, 'red_bean_milk_tea.jpg', '', 0, 0, 0, 0, 0),
(10, 1, 'Trà sữa khoai môn', 26000, 'taro_milk_tea.jpg', '', 0, 0, 0, 0, 0),
(11, 10, 'Trà sữa dâu tây', 38000, 'strawberry_milk_tea.jpg', '', 0, 0, 0, 0, 0),
(12, 2, 'Trà kim tuyền', 26000, 'jin_xuan_tea.jpg', '', 0, 0, 0, 0, 0),
(13, 2, 'Trà Ô long', 29000, 'oo_long_tea.jpg', '', 0, 0, 0, 0, 0),
(14, 1, 'Trà sữa đường đen', 26000, 'brown_sugar_pearl_milk_tea.jpg', '', 0, 0, 0, 0, 0),
(15, 1, 'Trà sữa Hokkaido', 32000, 'golden_venetian_milk_tea.jpg', '', 0, 0, 0, 0, 0),
(17, 7, 'Sữa chua yogurt bưởi', 38000, 'grapefruit_yogurt.jpg', '', 0, 0, 0, 0, 0),
(18, 7, 'Sữa chua yogurt chanh leo', 29000, 'passion_fruit_yogurt.jpg', '', 0, 0, 0, 0, 0),
(19, 6, 'Matcha Nhật Bản', 29000, 'classic_matcha.jpg', '', 0, 0, 0, 0, 0),
(20, 9, 'Top Fruit Tea', 29000, 'top_fruit_tea.jpg', '', 0, 0, 0, 0, 0);

create table `size`(
`ma_size` int(11) NOT NULL ,
`ten_size` varchar(10) COLLATE utf8_unicode_ci NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `size` (`ma_size`, `ten_size`) VALUES 
(1,'M.'),
(2,'L.');

ALTER TABLE `size`
  ADD PRIMARY KEY (`ma_size`);
  
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ma_ad`);


ALTER TABLE `chitietdonhang`
  ADD KEY `ma_dh` (`ma_dh`),
  ADD KEY `ma_ts` (`ma_ts`);


ALTER TABLE `donhang`
  ADD PRIMARY KEY (`ma_dh`),
  ADD KEY `ma_nv` (`ma_nv`);


ALTER TABLE `feedback`
  ADD PRIMARY KEY (`ma_feedback`);


ALTER TABLE `loaitrasua`
  ADD PRIMARY KEY (`ma_loai_ts`);


ALTER TABLE `monthem`
  ADD PRIMARY KEY (`ma_mt`);


ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`ma_nv`);


ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`ma_sub`),
  ADD UNIQUE KEY `email` (`email`);


ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`ma_tv`);


ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`ma_tin`);


ALTER TABLE `trasua`
  ADD PRIMARY KEY (`ma_ts`),
  ADD KEY `ma_loai_ts` (`ma_loai_ts`),
  ADD KEY `ma_mt` (`ma_mt`);
  

ALTER TABLE `admin`
  MODIFY `ma_ad` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `donhang`
  MODIFY `ma_dh` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `feedback`
  MODIFY `ma_feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `loaitrasua`
  MODIFY `ma_loai_ts` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
 
ALTER TABLE `size`
  MODIFY `ma_size` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;  

ALTER TABLE `monthem`
  MODIFY `ma_mt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

ALTER TABLE `nhanvien`
  MODIFY `ma_nv` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `subscribers`
  MODIFY `ma_sub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `thanhvien`
  MODIFY `ma_tv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

ALTER TABLE `tintuc`
  MODIFY `ma_tin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

ALTER TABLE `trasua`
  MODIFY `ma_ts` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`ma_dh`) REFERENCES `donhang` (`ma_dh`);


ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`ma_nv`) REFERENCES `donhang` (`ma_nv`);


ALTER TABLE `trasua`
  ADD CONSTRAINT `trasua_ibfk_2` FOREIGN KEY (`ma_loai_ts`) REFERENCES `loaitrasua` (`ma_loai_ts`);


ALTER TABLE `trasua`
  ADD FOREIGN KEY (`ma_mt`) REFERENCES `monthem`(`ma_mt`);
  
COMMIT;

SELECT * FROM `monthem`
INSERT INTO feedback(ten_nguoi_lh,email_nguoi_lh,noi_dung,ngay_lh) VALUES('$ten_lh','$email_lh','$comment_lh',curtime())

SELECT t.*,l.ten_loai FROM `trasua` AS t INNER JOIN `loaitrasua` AS l ON t.ma_loai_ts = l.ma_loai_ts;
