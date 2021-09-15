<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('asset/style.css') }}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <!-- js -->
        <script src="js/app.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <body>
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid mb-3">
    
    <a class="navbar-brand"><div class="sidebar-heading text-center  primary-text fs-2 fw-bold text-uppercase ">
                    <i class="fas fa-user-secret me-2" ></i>Inventaris 
                    </a>
</div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
       
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
       
         <!-- Side Bar -->
        <div class="d-flex" id="wrapper">
            <div  id="sidebar-wrapper">
                <div class="list-group list-group-flush my-3">

                <ul class="list-group">
                    <li class="nav-item">
                    <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                        <i class="fas fa-tachometer-alt me-3"></i>Dashboard
                    </a>
                    </li>
                    <li class="nav-item"> 
                    <a href="/form/tambahdata" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                        <i class="fas fa-plus me-3"></i>Tambah Data
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="/aturan" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                        <i class="fas fa-book me-3"></i>Aturan
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="/databarang" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                         <i class="fas fa-box me-3"></i>Data Barang
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="/dataruangan" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                        <i class="fas fa-archway me-3"></i>Data Ruangan

                    </a>
                    </li>
                    <li class="nav-item dropdown">
                    <a href="/user" class="nav-link dropdown-toggle second-text fw-bold" id="navbar-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-users me-3"></i>Users
                    </a>
                    <div class="dropdown-menu">
                     <a class="dropdown-item" href="#">Super Admin</a>
                     <a class="dropdown-item" href="#">Admin</a>
                     <div class="dropdown-devider"></div>
                     <a class="dropdown-item" href="#">User</a>
                    
                    </div>
                   
                    </li>
                </ul>

                </div>
            </div>
            <!-- Side Bar End -->
            
            

                <!-- <nav id="navbar ">
                        <button class="nav-toggle" >
                            <span class="bar-top openbtn" onclick="openNav()"></span>
                            <span class="bar-mid"></span>
                            <span class="bar-bot" onclick="closeNav()"></span>
                        </button>

                </nav>
                    <script>
                    (function () {
                        var toggle = document.querySelector('.nav-toggle');
  
                         toggle.addEventListener('click', function(e) {
                          this.classList.toggle('opened');
                        });   
                        })();
                        function openNav() {
    document.getElementById("navbar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
  }
  
  /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
  function closeNav() {
    document.getElementById("navbar").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
  }
                    </script>
                 -->
                <div class="container-fluid px-4">
                    @yield('content')
                </div>
            </div>
         </div>
    </body>
</html>
