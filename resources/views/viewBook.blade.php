<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="./css/Read.css"/> -->
    <link rel="stylesheet" href="{{ asset('css/Read.css') }}"/>
</head>
<body>

<div class="navbar">
    <div class="namaapp">
        Library Website
    </div>

    <div class="namaapp-2">
        <div class="menu-1">
            <a class="linked" href="{{ route('input') }}">Add</a> 
        </div>

        <div class="menu-2">
            View
        </div>

  </div>
   
</div>


<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Judul buku</th>
      <th scope="col">Penulis buku</th>
      <th scope="col">Jumlah halaman</th>
      <th scope="col">Tahun terbit</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($books as $book)
      <tr>
      <td class="isi">{{ $book->Judul_buku }}</td>
      <td class="isi">{{ $book->Penulis_buku }}</td>
      <td class="isi">{{ $book->Jumlah_halaman }}</td>
      <td class="isi">{{ $book->Tahun_terbit }}</td>
      <td>
        <button class="tombolUpdate"> <a id="Updated" href="{{route('updateBook', $book->id )}}">Update</a> </button>

        <form action="{{ route('deleteBook', $book->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="tombolUpdate2">Delete</button>
        </form>
    </td>
    </tr>
      @endforeach
    
   
  </tbody>
</table>
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>