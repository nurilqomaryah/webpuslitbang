<!DOCTYPE html>
<html>
<head>
    <title>Tutorial Laravel #30 : Membuat Upload File Dengan Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<div class="row">
    <div class="container">
        <h2 class="text-center my-5">Tutorial Laravel #30 : Membuat Upload File Dengan Laravel</h2>
        <div class="col-lg-8 mx-auto my-5">
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }} <br/>
                    @endforeach
                </div>
            @endif
            <form action="/upload/proses" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <b>Judul Post</b><br/>
                    <input type="text" name="judul_post">
                </div>
                <div class="form-group">
                    <b>Isi Post</b>
                    <textarea class="form-control" name="isi_post"></textarea>
                </div>
                <div class="form-group">
                    <b>File Gambar</b><br/>
                    <input type="file" name="img_post">
                </div>
                <div class="form-group">
                    <b>Kategori</b><br/>
                    <input type="text" name="nama_kategori">
                </div>
                <div class="form-group">
                    <b>Tag</b><br/>
                    <input type="text" name="nama_tag">
                </div>
                <input type="submit" value="Save" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
</body>
</html>
