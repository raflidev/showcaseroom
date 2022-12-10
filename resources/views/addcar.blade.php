
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Modul4_Feni</title>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">


    <style>
        .nav-link button {
      display: flex;
      flex-direction: row;
      align-items: center;
      padding: 8px 22px;
      gap: 10px;

      position: absolute;
      width: 110px;
      height: 40px;
      left: 1133px;
      top: 18px;

        /* light/primary/origin */

        color: #3563E9;


        /* Inside auto layout */

        flex: none;
        order: 1;
        flex-grow: 0;

        width: 105px;
        height: 25px;

        /* white */

        background: #FFFFFF;
        border-radius: 5px;

        border: none;
        
    }
    
    </style>
    
</head>
<body>
    
    <nav class="bg-primary text-white py-3">
        <div class="container">
          <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex">
              <div>
                <a class="nav-link text-white active" aria-current="page" href="/">Home</a>
              </div>
              @if(Auth::user())
                <div>
                  <a class="nav-link text-white" aria-current="page" href="/">My Car</a>
                </div>
              @endif
            </div>
            @if(Auth::user())
            <div class="d-flex">
              <div>
                <a class="nav-link text-white" aria-current="page" href="/">Add Car</a>
              </div>
              <div>
                <a class="nav-link text-white" aria-current="page" href="/">{{Auth::user()->name}}</a>
              </div>
            </div>
            @else
            <div>
              Login
            </div>
            @endif
          </div>
        </div>
      </nav>
      <br><br>

<div class="container">
    @if (count($errors) > 0)
      <div class="alert alert-danger">
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </div>
    @endif
    <h5><strong>Tambah Mobil</h5></strong>
    <p>Tambah mobil Baru Anda ke List Show Room</p>
</div>

<div class="container mt-5" style="width:100%">
    <form action="/addcar" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="mb-3">
            <label for="nama_mobil" class="form-label">
                Nama Mobil
            </label>
            <input type="text" id="nama_mobil" class="form-control" placeholder="CIVIC TURBO" name="mobil">
        </div>
        <div class="mb-3">
            <label for="nama_pemilik" class="form-label">
                Nama Pemilik
            </label>
            <input type="text" id="nama_pemilik" class="form-control" placeholder="Nama-NIM" name="pemilik">
        </div>
        <div class="mb-3">
            <label for="merk_mobil" class="form-label">
                Merk
            </label>
            <input type="text" id="merk_mobil" class="form-control" placeholder="Civic" name="merk">
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">
                Tanggal Beli
            </label>
            <input type="date" id="tanggal" class="form-control" name="tanggal_beli" placeholder="mm/dd/yyyy">
        </div>
        <div class="mb-3">
            <label for="deskripsi_mobil" class="form-label">
                Deskripsi
            </label>
            <textarea class="form-control" id="deskripsi_mobil" rows="3" name="deskripsi">
            </textarea>
        </div>
        <div class="mb-3">
            <label for="Foto" class="form-label">
                Foto
            </label>
            <input class="form-control form-control-sm" id="Foto" name="Foto" type="file">
        </div>
        <div class="form-check">
            <input class="form-check-input" value="Lunas" type="radio" name="status_pembayaran" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                Lunas
                </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" value="Belum-Lunas" type="radio" name="status_pembayaran" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
                Belum Lunas
            </label>
        </div><br></br>
        <input type="submit" class="btn btn-primary" name="Selesai" value="Selesai">
    </form>
</div><br></br>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>
</html>