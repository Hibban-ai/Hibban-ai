@extends('layout.main')
@section('container')
        <div class="row justify-content-center">
            <div class="col-lg-5">
                {{-- Jika kita berhasil melakukan registrasi alert ini akan muncul , alert ini diatur didalam RegisterController --}}
                @if (session('success'))
                    <d<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('template/plugins/images/vicon.png') }}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login</title>
    <style>
      *{
        padding: 0;
        margin : 0;
        box-sizing: border-box;
      }
      body{
        background-image: url('{{ asset('template/plugins/images/background.jpg') }} ');
        background-size: 100%;
        margin-top: 4%;
        margin-bottom: 4%;
        margin-left: 10%;
      }
      .row{
        background: transparent;
        border-radius: 30px;
        box-shadow: 7px 5px 7px grey;
        height: 90%;
        width: 90%;
        
      }
      img{
        border-top-left-radius: 30px;
        border-bottom-left-radius: 30px;
        border-top-right-radius: 30px;
        border-bottom-right-radius: 30px;
      }
      .btn1{
        border: none;
        outline: none;
        height : 50px;
        width: 100%;
        background-color: #2962FF;
        color: white;
        border-radius: 4px;
        fotn-weight: bold;
      }
      .btn1:hover{
        background: black;
        color: white;
        border: 1px solid;
        transition: 1s;
      }
      h1{
        color: white;
      }
      h4{
        color: white;
      }
    </style>
  </head>
  <body>
    <section class="Form">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <img src="{{ asset('template/plugins/images/login-logo.png') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-7 px-4 pt-5">
            <h1 class="font-weight-bold py-3">Login</h1>
            <h4>Van Resto</h4>
            <form action="{{ route('authenticate')}}" method="post">
              @csrf
              @if ($message = Session::get('error'))
                <br>
                <div class="alert alert-danger col-lg-9" role="alert">
                  {{$message}}
                </div>
              @endif
              <div class="form-row">
                <div class="col-lg-9">
                  <input type="text" class="form-control my-4 p-3" name="username" placeholder="Username..." autocomplete="off" required>
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-9">
                  <input type="password" class="form-control my-4 p-3" name="password" placeholder="Password" required>
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-9">
                  <button type="submit" class="btn1 mt-3 mb-5"><span>Login</span></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>iv class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session ('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="container">
                    <main class="form-register">
                        <form action="/register" method="POST">
                           @csrf
                            <h1 class="h3 mb-3 fw-normal">Register</h1>

                            <div class="form-floating">
                                <input type="text" name="name" class="form-control mt-2" id="name" placeholder="name">
                                <label for="name">Name</label>
                            </div>
                            <div class="form-floating">
                                <input type="email" name="email" class="form-control mt-2" id="email" placeholder="name@example.com">
                                <label for="email">Email address</label>
                            </div>
                            <div class="form-floating">
                                <input type="password" name="password" class="form-control mt-2" id="password" placeholder="Password">
                                <label for="password">Password</label>
                            </div>

                            <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Submit</button>
                            
                        </form>
                        <small class="d-block text-center mt-3">Sudah punya akun? <a href="/login">Login</a></small>
                    </main>
                </div>
            </div>
        </div>
@endsection