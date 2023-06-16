<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body class="bg-light">
    <form action="{{ url('tugas')}}" method='post'>
        @csrf
            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <a href="{{ url('tugas') }}" class="btn btn-secondary"><< kembali</a>
                    <div class="mb-3 row">
                        <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='judul' value="{{ Session::get('judul') }}" id="judul">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='deskripsi' value="{{ Session::get('deskripsi') }}" id="deskripsi">
                        </div>
                    </div>
                
                    <div class="mb-3 row">
                        <label for="deskripsi" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">Submit</button></div>
                    </div>
                </div>
        </form>

</body>
</html>