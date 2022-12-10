
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>MODUL4_FENI | Register</title>

    <style>
    .container{
      position: absolute;
      width: 502px;
      height: 40px;
      left: 750px;

      background: #FFFFFF;
    }
    .left img {
      width: 700px;
      height: 100%;
      border-top-left-radius: 15px;
      border-bottom-left-radius: 15px;
    }
    input[type="submit"]{
    width: 118px;
    height: 45px;
    background: #3563E9;
    border-radius: 8px;
    border: none;
    cursor: pointer;

    font-family: 'Raleway';
    font-style: normal;
    font-weight: 500;
    font-size: 18px;
    line-height: 21px;
    text-align: center;
    letter-spacing: 0.46px;

    color: #FFFFFF;
    }
    </style>

  </head><br></br>


  <body>
    <div class="container">
        <h4><strong>Register</h4></strong>
    </div><br></br>

  <div class="container">
    @if (count($errors) > 0)
      <div class="alert alert-danger">
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </div>
    @endif
    <form action="/registrasi" method="POST">
        @csrf
        @method('POST')
        <div class="mb-2">
          <label for="email" class="form-label">Email</label>
          <input type="email" id="email" class="form-control" placeholder="" value="{{old('email')}}" name="email" required>
        </div>
        <div class="mb-2">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" id="nama" class="form-control" placeholder="" value="{{old('nama')}}" name="nama" required aria-label="nama">
        </div>
        <div class="mb-2">
          <label for="no_hp" class="form-label">Nomor Handphone</label>
          <input type="tel" id="nomor_hp" class="form-control" placeholder="" value="{{old('no_hp')}}" name="no_hp" required>
        </div>
        <div class="mb-2">
          <label for="password" class="form-label">Kata Sandi</label>
          <input type="password" class="form-control" id="password" placeholder="" value="" name="password" required>
        </div>
        <div class="mb-2">
          <label for="repassword" class="form-label">Konfirmasi Kata Sandi</label>
          <input type="password" class="form-control" id="repassword" placeholder="" value="" name="repassword" required>
        </div>
        <span id='cek' style="color: red;"></span>
        <div class="row mt-1 mb-2">
            <input type="submit" id="" name="submit" value="Daftar"><br></br>
        </div>
    </form>
      <h6 class="mb-4" style="text-align: center;">Anda sudah punya akun? <a href="/login">Login</a></h6>
  </div>
  </div>
</div>
  <div class="left">
      <img src="rubicon.jpg" alt="">
  </div>
  <script>
    function check(){
        let x=document.getElementById("password");
        let y=document.getElementById("repassword");
        let z=document.getElementById("cek");
        if (x.value!=y.value){
            z.innerHTML = "Kata sandi tidak cocok";
        }else{
            z.innerHTML = "";
        }
    }
</script>

    

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