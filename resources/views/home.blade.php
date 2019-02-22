<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <div class="header">
        <h1>Tin tức</h1>
    </div>
    <div class="body">
        <div class="left">
            <ul class="list">
                <form action="#" method="post">
                @foreach($loaitin as $key)
                    <li>
                        <input type="radio" name="loai" value="{{$key->tenloai}}">{{$key->tenloai}}
                    </li>
                @endforeach
                    <input type="submit" value="Lọc">
                </form>
            </ul>

            <div class="addType">
                <h2>Thêm thể loại</h2>
                <form action="{{route('add')}}" method="post">
                    {{ csrf_field() }}
                    <input type="text" name="type">
                    <input type="submit" value="Thêm">
                </form>
            </div>
        </div>

        <div class="right">
            <h1>Bài viết</h1>
            <table>
                @foreach($baiviet as $key)
                    <tr>
                        <td class="img">
                            <img src="{{asset('img/baby.jpg')}}">
                        </td>
                        <td>
                            <h3>{{$key->tieude}}</h3>
                            <div class="content">
                                {{$key->noidung . "....."}}
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
            <div class="add">
                <h2>Viết bài</h2>
                <form action="#" method="post">
                    <table>
                        <tr>
                            <td>
                                Tiêu đề:
                            </td>
                            <td>
                                <input type="text" placeholder="Tiêu đề" name="tieude">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Nội dung:
                            </td>
                            <td>
                                <textarea rows="10" cols="20" placeholder="Nội dung"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Thể loại:
                            </td>
                            <td>
                                <select name="loaitin">
                                    @foreach($loaitin as $key)
                                        <option>{{$key->tenloai}}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan=2>
                                <input type="submit" value="Đăng bài">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>

{{isset($error) ? $error : 'không trùng'}}

</body>
</html>