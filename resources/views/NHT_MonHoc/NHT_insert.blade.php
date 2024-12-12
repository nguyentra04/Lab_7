<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>nlc them moi thong tin mon hoc</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" >
</head>
<body>
    <section class="container my-3">
        <div class="card">
            <div class="card-header">
                <h3>them moi thong tin mon hoc</h3>
        <form action="{{route('monhoc.NHTinsert')}}" method="POST">
            @csrf
            <div class="card-body">
                <div class="mb-3 row">
                    <label for="MaMH" class="col-sm-2 col-form-label">ma mon hoc</label>
                    <div class="col-sm-10">
                      <input type="text"  class="form-control" id="MaMH" name="MaMH" value="{{old('MaMH')}}">
                      @error('MaMH')
                          <div class ="text-danger">{{$message}}</div>
                      @enderror
                    </div>
                  </div>
            </div>
            <div class="mb-3 row">
                <label for="TenMH" class="col-sm-2 col-form-label">ten  mon hoc</label>
                <div class="col-sm-10">
                  <input type="text"  class="form-control" id="nlctenmh" name="TenMH" value="{{old('TenMH')}}">
                    @error('TenMH')
                        <div class ="text-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="SoTiet" class="col-sm-2 col-form-label">so tiet</label>
                <div class="col-sm-10">
                  <input type="text"  class="form-control" id="SoTiet" name="SoTiet" value="{{old('SoTiet')}}">
                    @error('SoTiet')
                        <div class ="text-danger">{{$message}}</div>
                    @enderror
                </div>
              </div>
            <div class="card-footer">
                <button class="btn btn-primary mx-2">submit</button>
                <a href="/monhoc" class="btn btn-primary">Back</a>
            </div>
            </div>
        </form>
    </section>
</body>
</html>