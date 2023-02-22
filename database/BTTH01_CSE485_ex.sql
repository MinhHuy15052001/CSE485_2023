-- Câu a Liệt kê các bài viết về các bài hát thuộc thể loại Nhạc trữ tình

SELECT * FROM baiviet WHERE ma_tloai = (SELECT ma_tloai FROM theloai where ten_tloai = 'Nhạc trữ tình');

-- Câu b Liệt kê các bài viết của tác giả “Nhacvietplus”

SELECT * FROM `baiviet` WHERE ma_tgia = (SELECT ma_tgia FROM tacgia where ten_tgia = 'Nhacvietplus')

-- Câu c Liệt kê các thể loại nhạc chưa có bài viết cảm nhận nào

SELECT *
FROM theloai
WHERE ma_tloai 
NOT IN(    
SELECT ma_tloai
from baiviet 
group by ma_tloai
)

-- Câu d Liệt kê các bài viết với các thông tin sau: mã bài viết, tên bài viết, tên bài hát, tên tác giả, tênthể loại, ngày viết.
SELECT ma_bviet,tieude,ten_bhat,ten_tgia,ten_tloai,ngayviet
FROM baiviet,tacgia,theloai
WHERE tacgia.ma_tgia=baiviet.ma_tgia AND baiviet.ma_tloai=theloai.ma_tloai
-- Câu e Tìm thể loại có số bài viết nhiều nhất
SELECT ma_tloai, ten_tloai 
FROM theloai
WHERE ma_tloai IN(
SELECT ma_tloai 
FROM baiviet
GROUP BY ma_tloai
HAVING COUNT(ma_tloai) = (SELECT COUNT(ma_tloai) 
FROM baiviet
GROUP BY ma_tloai
ORDER BY COUNT(ma_tloai) DESC
LIMIT 1)
)


-- Câu i Tạo 1 view có tên vw_Music để hiển thị thông tin về Danh sách các bài viết kèm theo Tên thể loại và tên tác giả
CREATE VIEW vw_Music AS
SELECT ma_bviet, tieude, ten_bhat, baiviet.ma_tloai, tomtat, noidung, baiviet.ma_tgia, ngayviet, hinhanh, ten_tgia, ten_tloai
FROM tacgia, baiviet, theloai
WHERE tacgia.ma_tgia = baiviet.ma_tgia AND baiviet.ma_tloai = theloai.ma_tloai

SELECT * FROM vw_Music

/* Câu j Tạo 1 thủ tục có tên sp_DSBaiViet với tham số truyền vào là Tên thể loại và trả về danh sách
Bài viết của thể loại đó. Nếu thể loại không tồn tại thì hiển thị thông báo lỗi.*/
CREATE PROCEDURE sp_DSBaiViet (IN input_ten_danhmuc VARCHAR(255))
BEGIN
DECLARE danhmuc_id INT;

IF danhmuc_id IS NULL THEN
SELECT 'Thể loại không tồn tại' AS message;
ELSE

SELECT * FROM baiviet WHERE ma_tloai = danhmuc_id;
END IF;
END

--Thực thi thủ tục
CALL sp_DSBaiViet('Tên thể loại cần tìm');