<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <title>PRELIM</title>
</head>
<body>
<!--nav-->
<nav class="navbar bg-dark justify-content-between" style="position:sticky;position: -webkit-sticky;top:0;">
  <a class="navbar-brand" href="{{url('/')}}" style="margin-left:20px;font-family:Agency FB;color:#f48ba9;">
    <img  style="-webkit-filter: invert(1);filter: invert(1);" src="https://www.niu.edu/protecting-the-pack/images/icons/icon-vaccine.png" width="30" height="30" class="d-inline align-top" alt="">
        BHL VACCINE
    </a>
  <p class="d-inline" style="margin-right:20px;font-family:Agency FB;color:#f48ba9;">
  <img  style="-webkit-filter: invert(1);filter: invert(1);" src="https://cdn-icons-png.flaticon.com/512/481/481302.png" width="30" height="25" class="d-inline align-top" alt="">
    &nbsp; +63910 - 272 - 943
    </p>
</nav>
<!--bg-->
    <div>
            <div style="background-image: linear-gradient(to bottom right, rgba(0, 0, 0, 0.6) 0%,rgba(0, 0, 0, 0.6) 100%), url(https://biobuzz.io/wp-content/uploads/2020/11/SARS-CoV-2.png);background-attachment:fixed; background-repeat: no-repeat; background-position:center;">
                    <div class="containter text-white text-center" style="font-family: Century Gothic;font-size:28px;padding-top:80px;padding-bottom:80px;">
                        <p class="d-inline"><p class="d-inline" style="color:#86cbed;">TOGETHER WE CEN REDUCE COVIDE-19 </p> ,LET'S STOP IT !</p>
                    </div>
            </div>

            <div>
            @if (session('errors'))
                <div class="alert alert-danger">
                    <div class="container">
                        Please fix the following errors.
                        <ul>
                            @foreach(session('errors')->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
            @if (session('Error'))
                <div class="alert alert-danger">
                    <div class="container">
                        {{session('Error') }}
                    </div>
                </div>
            @endif
            @if (session('Message'))
                <div class="alert alert-success">
                    <div class="container">
                        {{session('Message') }}
                    </div>
                </div>
            @endif
            <!--form-->
            <div class="container" style="padding-bottom:30px;">
                    <div class="row">
                        <div class="col-12 col-md-7 containter text-center" style="font-family: Century Gothic;font-size:28px;padding-top:70px;padding-bottom:60px;">
                            <p class="d-inline">Let's help our frontliners!</p>
                            <img style="margin-top:10px;" src="https://info.qliqsoft.com/hubfs/Vaccine%20Assistant%20Injection.png" class="img-fluid" alt="Responsive image">
                        </div>
                        <div class="col-6 col-md-5" style="margin-top:100px;">
                          <br><br>  @yield('content')
                        </div>
                    </div>
            </div>
    </div>
</body>
</html>