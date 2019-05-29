<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>เพิ่มข้อมูล</title>
</head>
<?php 
    if(!empty($_REQUEST['menu_id'])) {
        require_once("db.php");
        
        $sql ="INSERT INTO menu VALUE('".$_REQUEST['menu_id']."','".$_REQUEST['menu_name']."','".$_REQUEST['menu_type']."','".$_REQUEST['menu_price']."')";
       // $rs = $conn->query($sql);
        echo $sql;
            if( $conn->query($sql)){
                echo "Add complete!!!!<br/>";
                echo "Click <a href='index.php'>Click</a> back to index page<br/>";
                exit;
            }else{
                echo "Add incomplete!!!!'.$conn->error.'<br/>";
            }
    }
        

        
?>
<body>
    <a href="index.php">Back</a>
    <h1>เพิ่มข้อมูล</h1><br>

    <a href="insert.php">เพิ่มข้อมูล</a>
    <a href="search.php">ค้นหาข้อมูล</a>
    <a href="update.php">แก้ไขข้อมูล</a>
    <a href="delete.php">ลบข้อมูล</a>

    <div class="container"><br><br>
        <form action="insert.php" method="POST">
            รหัสเมนูอาหาร: <input type="text" id="menu_id" name="menu_id" value="รหัสเมนูอาหาร"><br><br>
            ชื่อเมนูอาหาร: <input type="text" id="menu_name" name="menu_name" value="ชื่อเมนูอาหาร"><br><br>
            ประเภทอาหาร: <select name="menu_type" id="menu_type">
                <option value="0">--เลือกประเภทอาหาร--</option>
                <option value="1">1:อาหารคาว</option>
                <option value="2">2:อาหารหวาน</option>
                <option value="3">3:อาหารว่าง</option>        
                </select><br><br>
            ราคาอาหาร: <input type="number" id="menu_price" name="menu_price" value="ราคาอาหาร"><br><br>
        
            <button type="submit" class="btn btn-primary" id="insert" name="insert">เพิ่มข้อมูล</button>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>