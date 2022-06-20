<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top navigation">
    <div class="container-fluid">
        <!-- offcanvas trigger -->
        <div class="d-flex">
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
        <span  data-bs-target="#offcanvasExample"><i class="bi bi-chevron-right"></i></span>
      </button>
        <!-- offcanvas trigger -->
        <a class="navbar-brand  ms-sm-5 " href="#">
          <img src="assets/images/logo_donate.png" alt="logo" width="140px" height="60px">
        </a>
        </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="d-flex ms-auto">
            <div class="input-group my-3 my-lg-0">
                <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn clrBTN" type="button" id="button-addon2"><i class="bi bi-search"></i></button>
              </div>
        </form>
        <ul class="navbar-nav mb-2 mb-lg-0">
          
         
          <li class="nav-item dropdown ms-1">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-fill"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li><a class="dropdown-item" href="#">Notification</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul> 
        </ul>   
      </div>
    </div>
  </nav>
<!-- navbar -->
<!-- offcanvas -->
  
<div class="offcanvas offcanvas-start sidebar-nav text-dark navigation" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div>
        <div class="d-flex justify-content-center align-item-center py-3 d-block d-lg-none">
            <img src="assets/images/logo_donate.png" alt="logo" width="190px" height="60px" >
        </div>
    </div>
    <div class="offcanvas-body ">
      <nav class="navbar-dark col-8 mx-auto position-relative fw-bold" style="height:90%;">
        <ul class="navbar-nav mt-5">
            <li class="d-flex mb-3 ">
                <a href="dashboard-d" class="nav-link px-3 active">
                  <span class="me-2"><i class="bi bi-speedometer2 text-dark"></i></span>
                  <span class="text-dark">Dashboard</span>
                </a>
            </li>
            <li class="d-flex mb-3">
                <a href="requests-d" class="nav-link px-3">
                  <span class="me-2"><i class="bi bi-bell text-dark"></i></span>
                  <span class="text-dark">Requests</span>
                </a>
            </li>
            <li class="d-flex mb-3">
                <a href="test" class="nav-link px-3">
                  <span class="me-2"><img src="assets/images/icons8-donor-64.png" class="pb-1" alt="logo" width="20px" height="20px"/></span>
                  <span class="text-dark">Test</span>
                </a>
            </li>
            <!-- <li class="d-flex">
                <a href="patients" class="nav-link px-3">
                  <span class="me-2"><img src="assets/images/icons8-donor-32.png" class="pb-1" alt="logo" width="20px" height="20px"/></span>
                  <span class="text-dark"></span>
                </a> -->
        </ul>
        <div class="d-flex position-absolute bottom-0">
            <a href="logout" class="nav-link px-3 logout">
                <span class="me-2"><i class="bi bi-box-arrow-right text-dark"></i></span>
                <span class="text-dark">Logout</span>
            </a>
        </div> 
      </nav>
    </div>
  </div>
<!-- offcanvas -->