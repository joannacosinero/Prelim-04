<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="position:sticky;position: -webkit-sticky;top:0;>
  <div class="container-fluid">
    <a class="navbar-brand" href="{{url('/land')}}" style="margin-left:15px;font-family:Agency FB;color:#f48ba9;">
      <img  style="-webkit-filter: invert(1);filter: invert(1);" src="https://www.niu.edu/protecting-the-pack/images/icons/icon-vaccine.png" width="30" height="30" class="d-inline align-top" alt="">
          BHL VACCINE
      </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav"  style="margin-left: 70%;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" style="font-family: Tw Cen MT;font-size:20px; margin-right: 15px; color:#E2C2B9;" href="{{url('/dashboard')}}">Home</a>
        </li> &nbsp;
        <li class="nav-item">
          <a class="nav-link" style="font-family: Tw Cen MT;font-size:20px; margin-right: 15px; color:#E2C2B9;" href="{{url('/send-mail')}}">Email</a>
        </li> &nbsp;
        <li class="nav-item">
          <a class="nav-link" style="font-family: Tw Cen MT;font-size:20px; margin-right: 15px; color:#E2C2B9;" href="{{url('/login')}}">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>