<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

</head>
<body>
    <section class="container my-3">
        <form action="" method="post">
            <div class="card">
                <div class="card-header">
                <h3>Thông tin chi tiết khoa</h3>
                </div>
                <div class="card-body">
                    <div class="div">
                        <label for="MaKhoa">Makhoa</label>
                        <div class="div">
                            <input type="text" class="form-control" aria-describedby="MaKH" {{$khoa->MaKhoa}}>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                <a href="/khoa" class="btn btn-primary">Back</a>
                </div>
            </div>
        </form>
    </section>
    
    
</body>
</html>