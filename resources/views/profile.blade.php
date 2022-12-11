<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Modul 4 WAD</title>
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
      height: 27px;

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
                  <a class="nav-link text-white" aria-current="page" href="/mycar">My Car</a>
                </div>
              @endif
            </div>
            @if(Auth::user())
            <div class="d-flex gap-3">
              <div class="">
                <a class="btn bg-white text-primary" aria-current="page" href="/addcar">Add Car</a>
              </div>
              <div>
                  <div class="btn-group">
                      <button type="button" class="btn bg-white text-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      {{Auth::user()->name}}
                      </button>
                      <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="/profile">Profile</a></li>
                      <li><a class="dropdown-item" href="/logout">Logout</a></li>
                      </ul>
                  </div>
              </div>
            </div>
            @else
            <div>
              <a class="nav-link text-white" aria-current="page" href="/login">Login</a>
            </div>
            @endif
          </div>
        </div>
      </nav>
    <br></br>

  <div class="container">
    @if (count($errors) > 0)
      <div class="alert alert-danger">
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </div>
    @endif
        <center><h4><strong>Profile</h4></strong><center>
    </div><br></br>

    <div >
    <form action="/profile" method="POST" class="container">
        @csrf
        @method('PUT')
        <div class="mb-3 row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
            <input type="text" name="email" readonly class="form-control-plaintext" id="email" value="{{$data->email}}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
            <input type="text" name="nama" class="form-control" id="name" placeholder="Feni Juniarti" value="{{$data->name}}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="no_hp" class="col-sm-2 col-form-label">Nomor Handphone</label>
            <div class="col-sm-10">
            <input type="text" name="no_hp" class="form-control" id="no_hp" placeholder="082171251241" value="{{$data->no_hp}}">
            </div>
        </div>
        <hr />
        <div class="mb-3 row">
            <label for="password" class="col-sm-2 col-form-label">Kata Sandi</label>
            <div class="col-sm-10">
            <input type="password" name="password" class="form-control" id="password" placeholder="Kata Sandi">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="password" class="col-sm-2 col-form-label">Konfirmasi Kata Sandi</label>
            <div class="col-sm-10">
            <input type="password" name="repassword" class="form-control" id="password" placeholder="Konfirmasi Kata Sandi">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="warna" class="col-sm-2 col-form-label">Warna Navbar</label>
            <div class="col-sm-10">
            <input type="text" name="warna" class="form-control" id="warna" placeholder="Blue">
            </div>
        </div>

        <center><input class='btn btn-primary' name="submit" value="Update" type="submit"></button><br></br></center>
    </form>


</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>
