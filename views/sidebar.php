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
                <input id="search" type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn clrBTN" type="button" id="button-addon2"><i class="bi bi-search"></i></button>
              </div>
        </form>
        <!-- <ul class="navbar-nav mb-2 mb-lg-0">
          
         
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
        </ul>    -->
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
            <li class="d-flex mb-3 py-0">
                <a href="dashboard" class="nav-link px-3 active d-flex py-0">
                  <span class=""><img src="assets/images/dashb.png" alt="logo" width="50px" height="50px"></span>
                  <span class="text-whitek my-auto">Dashboard</span>
                </a>
            </li>


            <!-- <li class="d-flex mb-3 py-O">
                <a href="requests" class="nav-link px-3 d-flex py-0">
                <span class=""><img src="assets/images/requests.png" alt="logo" width="50px" height="50px"></span>
                  <span class="text-white my-auto">Requests</span>
                </a>
            </li> -->
           <!--  -->
            <li class="mb-3 py-0">
              <a class="nav-link px-3 d-flex py-0 sidebar-link" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                <span class=""><img src="assets/images/requests.png" alt="logo" width="50px" height="50px"></span>
                <span class="text-white my-auto pe-2">Requests</span>
                <span class="right-icon mx-auto"> <i class="bi bi-chevron-down"></i> </span>
              </a>
              <div class="collapse bg-secondary" id="collapseExample">
                <div>
                  <ul class="navbar-nav ps-3">
                    <li class="h-50 my-2 me-2">
                      <a href="adminReq1" class="nav-link px-3 h-50">
                      <!-- <span><img src="assets/images/requests.png" alt="logo" width="50px" height="50px"></span> -->
                      <span class="text-white my-auto">For Blood</span>
                      </a>
                    </li>
                    <li class="h-50 my-2 me-2">
                      <a href="adminReq2" class="nav-link px-3 h-50">
                      <!-- <span><img src="assets/images/requests.png" alt="logo" width="50px" height="50px"></span> -->
                      <span class="text-white my-auto">For Donation</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
            <!--  -->
            <li class="d-flex mb-3">
                <a href="donors" class="nav-link px-3 d-flex py-0">
                <span class=""><img src="assets/images/donors.png" alt="logo" width="50px" height="50px"></span>
                  <span class="text-white my-auto">Donors</span>
                </a>
            </li>
            <li class="d-flex">
                <a href="patients" class="nav-link px-3 d-flex py-0">
                <span class=""><img src="assets/images/patient.png" alt="logo" width="50px" height="50px"></span>
                  <span class="text-white my-auto">Patients</span>
                </a>
        </ul>
        <div class="d-flex position-absolute bottom-0">
            <a href="logout" class="nav-link px-3">
            <span class="me-2 "><img src="assets/images/logout.png" alt="logo" width="50px" height="50px"></span>                <span class="text-white">Logout</span>
            </a>
        </div> 
      </nav>
    </div>
  </div>
<!-- offcanvas -->