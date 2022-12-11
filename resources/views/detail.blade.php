<!DOCTYPE html>
<html lang="eng">
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

</head>

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
        <h2><b>{{ $data->name }}</b></h2>
        <p>Detail Mobil {{ $data->name }}</p>
        <div class='d-flex justify-content-center align-items-start gap-5 mt-5'>
            <img src='{{ asset('storage/'.$data->images) }}' class="col-6" alt="No Image"></img>
            <div class="col-6">
                <form enctype='multipart/form-data' method="POST">
                    @csrf
                    @method("PUT")
                    <input type="hidden" name="id" value="{{ $data->id }}">
                    <div class="mb-3">
                        <label for="nama_mobil"><b>Nama Mobil</b></label>
                        <input type="text" name="nama_mobil" class="form-control form-control-readonly" value="{{ $data->name}}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="nama_pemilik"><b>Nama Pemilik</b></label>
                        <input type="text" name="pemilik_mobil" class="form-control"value="{{ $data->owner}}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="merk_mobil"><b>Merk</b></label>
                        <input type="text" name ="merk_mobil" class="form-control" value="{{ $data->brand}}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal"><b>Tanggal Beli</b></label>
                        <input type="date" id='tanggal' name="tanggal_beli" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi"><b>Deskripsi</b></label>
                        <textarea class="form-control" rows="3" name="deskripsi" readonly>{{ $data->description}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="Foto"><b>Foto</b></label>
                        <input type="file" name="Foto" id="Foto"  class="form-control" value="">
                    </div>
                    <div class="mb-3">
                        <label for="status_pembayaran"><b>Status Pembayaran</b></label>
                        <div class="mb-3">
                            @if($data->status == "Lunas")
                                <input type="radio" name="status_pembayaran" id="status_pembayaran" value="Lunas"  checked  readonly>
                                <label for="Lunas">Lunas</label>
                            @else
                                <input type="radio" name="status_pembayaran" id="status_pembayaran" value="Belum-Lunas" checked  readonly>
                                <label for="Belum Lunas">Belum Lunas</label>
                            @endif
                        </div>
                    </div>
                    <button type="submit" class='btn btn-primary'>Edit</button>
                    <br></br>
                </form>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
            <script>
                var date = new Date()"<?php echo"$tanggal"?>";
                console.log(date);
                var currentDate = date.toISOString().substring(0,10);
                document.getElementById('tanggal').value = currentDate;
            </script>
        </div>
