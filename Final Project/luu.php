<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<style>
    body{
        padding-top: 50px;
    }
    table{

        text-align: center;
    }
    tr.item{
        border-top: 1px solid #5e5e5e;
        border-bottom: 1px solid #5e5e5e;
    }

    tr.item:hover{
        background-color: #d9edf7;
    }

    tr.item td{
        min-width: 150px;
    }

    tr.header{
        font-weight: bold;
    }

    a{
        text-decoration: none;
    }
    a:hover{
        color: deeppink;
        font-weight: bold;
    }
</style>


<div class="container" style="width: 600px">
    <h2>Thêm chuyến bay</h2>
    <form action="addproduct.php" method ="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Tên chuyến bay:</label>
            <input type="text" class="form-control" id="name" placeholder="Mời bạn nhập tên chuyến bay" name="name">
        </div>
		<div class="form-group">
            <label for="fromwhere">Nơi đi:</label>
            <input type="text" class="form-control" id="fromwhere" placeholder="Mời bạn nhập nơi đi" name="fromwhere">
        </div>
		<div class="form-group">
            <label for="towhere">Nơi đến:</label>
            <input type="text" class="form-control" id="towhere" placeholder="Mời bạn nhập nơi đến" name="towhere">
        </div>
        <div class="form-group">
            <label for="price">Giá:</label>
            <input type="text" class="form-control" id="price" placeholder="Mời bạn nhập giá" name="price">
        </div>
		<div class="form-group">
            <label for="description">Mô tả:</label>
            <input type="text" class="form-control" id="description" placeholder="Mời bạn nhập mô tả" name="description">
        </div>
		<div class="form-group">
              <label for="image">Image:</label>
              <div class="input-group">
                <input type="file" id="image" name="image" required>
              </div>
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
        <button type="reset" class="btn btn-default">Reset</button>
    </form>

    <br>
    <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        Vui lòng nhập tên sản phẩm.
    </div>
</div>


</body>
</html>