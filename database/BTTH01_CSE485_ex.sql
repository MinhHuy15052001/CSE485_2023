-- Câu a

SELECT * FROM baiviet WHERE ma_tloai = (SELECT ma_tloai FROM theloai where ten_tloai = 'Nhạc trữ tình');

-- Câu b

SELECT * FROM `baiviet` WHERE ma_tgia = (SELECT ma_tgia FROM tacgia where ten_tgia = 'Nhacvietplus')

-- Câu c



-- Câu d

