<?php
    require "../includes/database-connection.php";
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
                <a href="add_author.php" class="btn btn-success">Thêm mới tác giả</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên Tác già</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM tacgia";
                        $qr = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_array($qr)){
                    ?>
                    <tr>
                        <th scope="row"><?= $row['ma_tgia']; ?></th>
                        <td><?= $row['ten_tgia']; ?></td><br>
                        <td>
                            <a href="edit_author.php?id=<?= $row['ma_tgia'];?>"><i class = "fa-solid fa-pen-to-square"></i></a>
                        </td>
                        <td>
                            <a href="delete_author.php?id=<?= $row['ma_tgia'];?>"><i class = " fa-solid fa-trash "></i></a>
                        </td>
                    </tr>
                    <?php
                        };
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <?php require '../includes/admin_footer.php';
    
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>