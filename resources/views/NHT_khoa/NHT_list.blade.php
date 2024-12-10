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
        <h1> danh sach khoa</h1>
            <table class =""></table>
                <thead>
                    <tr>
                        <th>Makhoa</th>
                        <th>TenKhoa</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $stt=0;
                    @endphp
                    @foreach ($khoa as $item)
                        @php
                            $stt++;
                        @endphp
                        <tr>
                            <td>{{$stt}}</td>
                            <td>{{$item->MaKhoa}}</td>
                            <td>{{$item->TenKhoa}}</td>
                            <td class="text-center">
                                <a href="/khoa/detail/{{$item->MaKhoa}}" class="btn btn-success">chi tiết</a>
                                <a href="/khoa/edit/{{$item->MaKhoa}}" class="btn btn-primary">Sửa</a>
                                <a href="/khoa/delete/{{$item->MaKhoa}}" class="btn btn-danger">Xóa </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
    </section>
</body>
</html>