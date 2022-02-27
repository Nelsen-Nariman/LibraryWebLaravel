<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="./css/update.css"> -->
    <link rel="stylesheet" href="{{ asset('css/update.css') }}"/>
    
</head>
<body>
<div class="navbar">
    <div class="namaapp">
        Library Website
    </div>

    <div class="namaapp-2">
        <div class="menu-1">
            <a class="linked2" href="{{ route('input') }}">Add</a> 
        </div>

        <div class="menu-2">
            <a class="linked" href="{{route('readBook')}}">View</a> 
        </div>

  </div>
   
</div>

<div class="background">
   

    <div class="kotak-gede">
        
        <div class="header">
            <div class="judul-1">
                Update Book
            </div>
            <div class="judul-2">
                Judul buku, Penulis buku, Jumlah halaman, Tahun terbit
            </div>
        </div>

        <hr>

        <div class="content">
            <div class="keterangan" style="width: 60%;">
            <form action="{{ route('updatingBook', $book->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label1">Judul buku<br></label>
                    <input type="text" class="form-control" id="Input1" name="judulBuku" style="width: 100%;" value="{{$book->Judul_buku}}">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label1">Penulis buku<br></label>
                    <input type="text" class="form-control" id="Input2" name="penulisBuku" style="width: 100%;" value="{{$book->Penulis_buku}}">
                </div>

                <div class="mb-3">
                    <label for="Input3" class="form-label1">Jumlah halaman<br></label>
                    <input type="text" class="form-control" id="Input3" name="jumlahHalaman" style="width: 100%;" value="{{$book->Jumlah_halaman}}">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label1">Tahun terbit<br></label>
                    <input type="text" class="form-control" id="Input4" name="tahunTerbit" style="width: 100%;" value="{{$book->Tahun_terbit}}">
                </div>
                
                
            </div>
        </div>
        
        <div class="tombol">
            <button id="TombolCreate" onclick="validate()">Save</button>
        </div>
        
    </form>
    </div>


</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    // Buat alert error yg sebiji sebiji:
    if(exist){
        alert(msg);
    }
    // var temp = msg.join('\n'); 
    // if(exist){
        // alert(temp[0][0]);
    //     console.log(temp);
    // }
</script>
    
</body>
</html>