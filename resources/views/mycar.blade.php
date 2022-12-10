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
                  <a class="nav-link text-white" aria-current="page" href="/mycar">My Car</a>
                </div>
              @endif
            </div>
            @if(Auth::user())
            <div class="d-flex">
              <div>
                <a class="nav-link text-white" aria-current="page" href="/">Add Car</a>
              </div>
              <div>
                <a class="nav-link text-white active" aria-current="page" href="/">{{Auth::user()->name}}</a>
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
    <h5><strong>MyShowRoom</h5></strong>
    <p>List Show Room Feni-1202200017</p>
</div><br></br>

<div class="container">
    <div class='row row-cols-3 gap-6'>
        @foreach ($data as $tampil)
        <div class='card'>
            <img class='card-img-top' src='{{ asset('storage/'.$tampil->images) }}' alt='No Image'/>
            <div class='card-body'>
                <h5 class='card-title'><center><b>{{ $tampil->name}}</b></center></h5>
                <p class='card-text'>{{ substr($tampil->description, 0, 50);}}...</p>
            </div>
            <div class='card-footer'>
                <a href='/detail/{{ $tampil->id}}' button class='btn btn-primary' type='Details'>Detail</a>
                <a href='/delete/{{ $tampil->id}}' button class='btn btn-danger' type='Delete'>Delete</a>
            </div>
        </div>
        @endforeach
    </div>

{{-- <div class="toast-container position-fixed bottom-0 end-0 p-3">
  <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="..." class="rounded me-2" alt="...">
      <strong class="me-auto">Bootstrap</strong>
      <small>11 mins ago</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  </div>
</div><br></br> --}}

<footer>
    <div>
        {{-- <p>Jumlah Mobil: <?php echo mysqli_num_rows($sql)?></p> --}}
    </div>
</footer>