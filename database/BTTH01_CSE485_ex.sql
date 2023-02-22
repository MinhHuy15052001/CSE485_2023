-- Câu a

SELECT * FROM baiviet WHERE ma_tloai = (SELECT ma_tloai FROM theloai where ten_tloai = 'Nhạc trữ tình');

-- Câu b

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