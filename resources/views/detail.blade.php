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
            <div class="d-flex">
              <div>
                <a class="nav-link text-white" aria-current="page" href="/addcar">Add Car</a>
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
      </nav><br></br>
        
        <div class="container">
        <h2><b>{{ $data->name }}</b></h2>
        <p>Detail Mobil {{ $data->name }}</p>
        <div class='d-flex justify-content-center align-items-start gap-5 mt-5'>
                <img src='{{ asset('storage/'.$data->images) }}' class="col-6" alt="No Image"></img>
            <div class="col-6">
                <form enctype='multipart/form-data'>
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
                        <input type="date" name="tanggal_beli" class="form-control" placeholder="mm/dd/yyyy" value="{{ date_format($data->purchase_date, 'dd/mm/yyyy')}}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="Deskripsi"><b>Deskripsi</b></label>
                        <textarea class="form-control" rows="3" name="Deskripsi" readonly>{{ $data->description}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="Foto"><b>Foto</b></label>
                        {{-- <input type="file" name="Foto" id="Foto"  class="form-control" value="" readonly><span>{{ $data->foto_mobil}}</span> --}}
                    </div>
                    <div class="mb-3">
                        <label for="Status_Pembayaran"><b>Status Pembayaran</b></label>
                        <div class="mb-3">
                            <input type="radio" name="Status_Pembayaran" id="Status_Pembayaran" value="Lunas"  readonly>
                            <label for="Lunas">Lunas</label>
                            <input type="radio" name="Status_Pembayaran" id="Status_Pembayaran" value="Belum Lunas"  readonly>
                            <label for="Belum Lunas">Belum Lunas</label>
                        </div>
                    </div>
                    {{-- <a href='EditItem.php?id={{ $data->id_mobil}}' button class='btn btn-primary' type='Edit'>Edit</button></a><br></br> --}}  
                </form>
            </div>
        </div>