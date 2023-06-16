<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body class="bg-light">
    <main class="container">

        
        <!-- tabel -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
                
                <!-- tambah -->
                <div class="pb-3">
                  <a href="{{url ('tugas/create')}}" class="btn btn-primary">+ Tambah Data</a>
                </div>
          
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-3">Judul</th>
                            <th class="col-md-4">Deskripsi</th>

                            <th class="col-md-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php $i = $data->firstItem() ?>
                        @foreach ($data as $item)
                        <tr>
                          <td>{{ $i }}</td>
                          <td>{{ $item->judul }}</td>
                          <td>{{ $item->deskripsi }}</td>
                          <td>
                            <a href="{{ url('tugas/'.$item->id.'/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                            <form onsubmit="return confirm('Yakin akan menghapus data?')" class='d-inline' action="{{ url('tugas/'.$item->id) }}" method="post">
                            @csrf 
                            @method('DELETE')
                              <button type="submit" name="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                          </td>
                        </tr>
                      <?php $i++ ?>
                      @endforeach
                 
                    </tbody>
                </table>
               
          </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>