-- Câu a

SELECT * FROM baiviet WHERE ma_tloai = 2;

-- Câu b

SELECT * FROM `baiviet` WHERE ma_tgia = (SELECT  ma_tgia FROM tacgia where ten_tgia = 'Nhacvietplus')

-- Câu c



-- Câu d

