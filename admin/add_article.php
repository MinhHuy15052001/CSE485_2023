<?php
    require "../includes/database-connection.php";

    if(isset($_POST["add"])){
        $bv_id = $_POST["txtArID"];
        $bv_ten = $_POST["txtArName"];
        $bv_bh = $_POST["txtArSName"];
        $bv_tt = $_POST["txtArSum"];
        
        if($bv_id == ""){echo "Vui lòng nhập mã bài viết <br/>";}
        if($bv_ten == ""){echo "Vui lòng nhập tên bài viết ";}
        if($bv_bh == ""){echo "Vui lòng nhập tên bài hát ";}
        if($bv_tt == ""){echo "Vui lòng nhập tóm tắt ";}

        if($bv_id !="" && $bv_ten!="" && $bv_bh!="" && $bv_tt!="" ){
            $sql = "INSERT INTO baiviet(ma_bviet,tieude,ten_bhat,tomtat) VALUES ('$bv_id','$bv_ten','$bv_bh','$bv_tt')";
            $qr = mysqli_query($conn,$sql);
            header("location: article.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music for Life</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style_login.css">
</head>
<body>
<?php require '../includes/admin_header.php';
    
    ?>
    <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm">
                <h3 class="text-center text-uppercase fw-bold">Thêm mới</h3>
                <form action="" method="post">
                <div class="row">
            <div class="col-sm">
                <form method="post" action="" >
                <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblArId">Mã bài viết</span>
                        <input type="text" class="form-control" name="txtArID" value="">
                    </div>

                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblArName">Tiêu đề</span>
                        <input type="text" class="form-control" name="txtArName" value = "">
                    </div>

                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblArSName">Tên bài hát</span>
                        <input type="text" class="form-control" name="txtArSName" value = "">
                    </div>

                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblARSum">Tóm tắt</span>
                        <input type="text" class="form-control" name="txtArSum" value = "">
                    </div>

                    <div class="form-group  float-end ">
                        <input type="submit" value="Lưu lại" class="btn btn-success" name = "add">
                        <a href="article.php" class="btn btn-warning ">Quay lại</a>
                    </div>
                </form>
            </div>
        </div>
                </form>
            </div>
        </div>
    </main>
    <?php require '../includes/admin_footer.php';
    
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>