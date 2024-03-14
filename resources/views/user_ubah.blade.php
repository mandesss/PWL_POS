<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Ubah Data User</title>
</head>
<body>
    <h1>Form Ubah Data User</h1>
    <a href="/user">Kembali</a>
    <br><br>

    <form method="post" action="/user/ubah_simpan/{{$data->user_id}}">
        
        {{csrf_field()}}
        {{method_field('PUT')}}

        <label>Username</label>
        <input type="text" name="username" id="Masukkan Username" value="{{$data->username}}">
        <br>
        <label>Nama</label>
        <input type="text" name="nama" id="Masukkan Nama" value="{{$data->nama}}">
        <br>
        <label>Password</label>
        <input type="text" name="password" id="Masukkan Password" value="{{$data->password}}">
        <br>
        <label>Level ID</label>
        <input type="number" name="level_id" id="Masukkan ID Level" value="{{$data->level_id}}">
        <br><br>
        <input type="submit" class="btn btn-success" value="Ubah">

    </form>
</body>
</html>