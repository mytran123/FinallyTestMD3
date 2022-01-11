<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.2.0/css/all.css">

    <link rel="stylesheet" href="https://static.fontawesome.com/css/fontawesome-app.css">

</head>
<body>
<div class="card mb-4 container mt-5" style="height: 550px">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Thêm mới nhân viên
    </div>
    <form action="{{route('staffs.update')}}" method="post">
        @csrf
        <div class="col-12 row">
            <div class="col-6" >
                <div class="form-group col-md-6">
                    <label for="inputName">Mã nhân viên</label>
                    <input style="width: 500px" type="text" class="form-control" id="inputName" name="id" value="{{$staff->id}}">
                </div>
                <br>
                <div class="form-group col-md-6">
                    <label for="exampleFormControlSelect1">Chọn nhóm nhân viên</label>
                    <select style="width: 500px" name="group" class="form-control" id="exampleFormControlSelect1">
                        <option value="">Chọn</option>
                        <option value="Quản trị hệ thống">Quản trị hệ thống</option>
                        <option value="Quản trị nhân sự">Quản lý nhân sự</option>
                        <option value="Lễ tân">Lễ tân</option>
                        <option value="Quản trị phòng">Quản lý phòng</option>
                        <option value="Quản trị dịch vụ">Quản lý dịch vụ</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Tên</label>
                    <input style="width: 500px" type="text" class="form-control" id="inputPassword4" name="name" value="{{$staff->name}}">
                    @error('name')
                    <p style="color: red" >{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Ngày sinh</label>
                    <input style="width: 500px" type="text" class="form-control" id="inputPassword4" name="birthday" value="{{$staff->birthday}}">
                    @error('birthday')
                    <p style="color: red" >{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleFormControlSelect1">Giới tính</label>
                    <select style="width: 500px" name="gender" class="form-control" id="exampleFormControlSelect1">
                        <option>Nam</option>
                        <option>Nữ</option>
                    </select>
                </div>
            </div>
            <div class="col-6">

                <div class="form-group col-md-6">
                    <label for="inputName">Số điện thoại</label>
                    <input style="width: 500px" type="text" class="form-control" id="inputName" name="phone" value="{{$staff->phone}}">
                    @error('phone')
                    <p style="color: red" >{{$message}}</p>
                    @enderror
                </div>
                <br>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Số CMND</label>
                    <input style="width: 500px" type="text" class="form-control" id="inputEmail4" name="cmnd" value="{{$staff->cmnd}}">
                    @error('cmnd')
                    <p style="color: red" >{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Email</label>
                    <input style="width: 500px" type="text" class="form-control" id="inputPassword4" name="email" value="{{$staff->email}}">
                    @error('email')
                    <p style="color: red" >{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleFormControlTextarea1">Địa chỉ</label>
                    <input style="width: 500px" name="address" class="form-control" id="exampleFormControlTextarea1" rows="3" value="{{$staff->address}}"></input>
                    @error('address')
                    <p style="color: red" >{{$message}}</p>
                    @enderror
                </div>
                <div style="padding-left: 120px">
                    <a type="button" class="btn btn-danger" href="{{route('staffs.list')}}">Hủy</a>
                    <button type="submit" class="btn btn-success"><i class="fas fa-check"></i>Cập nhật</button>

                </div>
            </div>
        </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
        crossorigin="anonymous"></script>
</body>
</html>
