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
    <section>
        <h1> danh sách môn học </h1>
            <table class ="container my-3">
                <thead>
                    <tr>
                        <th>Mã môn học</th>
                        <th>Tên môn học </th>
                        <th>Số tiết</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $stt=0;
                    @endphp
                    @foreach ($MH as $item)
                        @php
                            $stt++;
                        @endphp
                        <tr>
                            <td>{{$stt}}</td>
                            <td>{{$item->MaMH}}</td>
                            <td>{{$item->TenMH}}</td>
                            <td>{{$item->SoTiet}}</td>
                            <td class="text-center">
                                <a href="/monhoc/detail/{{$item->MaMH}}" class="btn btn-success">chi tiết</a>
                                <a href="/monhoc/edit/{{$item->MaMH}}" class="btn btn-primary">Sửa</a>
                                <a href="/monhoc/delete/{{$item->MaMH}}" class="btn btn-danger">Xóa </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
    </section>
</body>
</html>