<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modernize Free</title>


    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

    <link rel="shortcut icon" type="image/png" href="./assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="/assets/css/styles.css" />


</head>

<body>

<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-center">
                    <a href="/home">
                        <h1 class="fs-10  p-2-5 mt-3 fw-bolder hide-menu rounded bg-tiffany">ARKWAYS</h1>
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap mb-2">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Home</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="/home" aria-expanded="false">
                                <span>
                                    <i class="ti ti-layout-dashboard"></i>
                                </span>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-small-cap mb-2">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Customers</span>
                        </li>
                        <li class="sidebar-item mb-2">
                            <a class="sidebar-link" href="{{ route ('customer.show') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-article"></i>
                                </span>
                                <span class="hide-menu">View All Customers</span>
                            </a>
                        </li>
                        <li class="sidebar-item mb-2">
                            <a href="{{ route ('customer.show') }}" id="searchBtn2" class="sidebar-link cursor-pointer">
                                <span>
                                    <i class="ti ti-user-search"></i>
                                </span>
                                <span class="hide-menu">Search Customers</span>
                            </a>
                        </li>
                        <li class="sidebar-item mb-2">
                            <a class="sidebar-link" href="{{ route ('customer.signup') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-user-plus"></i>
                                </span>
                                <span class="hide-menu">Add New Customer</span>
                            </a>
                        </li>
                        <li class="sidebar-item mb-2">
                            <a class="sidebar-link cursor-pointer" href="{{ route ('transaction.signup') }}">
                                <span>
                                    <i class="ti ti-coin-euro"></i>
                                </span>
                                <span class="hide-menu">Add Transaction</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route ('transaction.show') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-report-money"></i>
                                </span>
                                <span class="hide-menu">View All Transactions</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Profile</span>
                        </li>
                        <li class="sidebar-item">
                            @guest
                            @if (Route::has('login'))
                            @endif
                            @else
                            <a class="sidebar-link" href="{{ route('logout') }}" aria-expanded="false" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <span>
                                    <i class="ti ti-user"></i>
                                </span>
                                <span class="hide-menu">Logout</span>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            @endguest

                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse"
                                href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="../assets/images/profile/user-1.jpg" alt="" width="35" height="35"
                                        class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop2">
                                    <div class="message-body">
                                        @guest
                                        @if (Route::has('login'))
                                        @endif
                                        @else
                                        <a class="btn btn-outline-primary border-tiffany mx-3 mt-2 d-block"
                                            href="{{ route('logout') }}" aria-expanded="false" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                        @endguest
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!--  Header End -->


            <div class="container-fluid container-sm">
                <div class="row">
                    <div class="card shadow-lg  border-tiffany-2">
                        <h1 class="card-title m-4 mb-2 fw-bolder fs-7">Edit Customer</h1>
                        <div class="card-body">
                            <form class="row g-3" action="{{ route ('customer.update', $DEF->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                
                              	<div class="d-flex flex-row gap-lg-2 flex-wrap justify-content-between">
                                    <div class=" w-48">
                                        <label for="" class="form-label">Name &nbsp; <span
                                                class="text-tiffany fw-normal">(Required)</span></label>
                                        <input type="text" class="form-control" id="name" name="name" required value = "{{$DEF->name}}">
                                    </div>
                                    <div class="w-48">
                                        <label for="" class="form-label">Doc No. &nbsp; <span
                                                class="text-tiffany fw-normal">(Required)</span></label>
                                        <input type="text" class="form-control" id="doc_no" name="doc_no"required value = "{{$DEF->doc_no}}">
                                    </div>
                                    <div class=" w-48">
                                        <label for="" class="form-label">Phone No. &nbsp; <span
                                                class="text-tiffany fw-normal">(Optional)</span></label>
                                        <input type="text" class="form-control" id="mobile_no" name="mobile_no" value = "{{$DEF->mobile_no}}">
                                    </div>
                                    <div class=" w-48">
                                        <label for="dob" class="form-label">Date/Birth &nbsp; <span
                                                class="text-tiffany fw-normal">(Optional)</span></label>
                                        <input type="date" class="form-control" id="dob" name="dob" value = "{{$DEF->dob}}">
                                    </div>
                                    <div class="mb-3 w-48">
                                        <label for="" class="form-label">Email &nbsp; <span
                                                class="text-tiffany fw-normal">(Optional)</span></label>
                                        <input type="email" class="form-control" id="primary_email" name="primary_email" aria-describedby="emailHelp" value = "{{$DEF->primary_email}}">
                                    </div>
                                    <div class="mb-3 w-48">
                                        <label for="" class="form-label">Attachment &nbsp; <span
                                                class="text-tiffany fw-normal">(Optional)</span></label>
                                        <input type="file" class="form-control" id="document" name="document" value = "{{$DEF->document_images}}">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary bg-tiffany border-0 p-2 fs-5 mt-2 w-100"
                                    value="Save">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <footer>
                <div class="py-6 px-6 text-center footer">
                    <p class="mb-0 fs-4">Developed by <a href="#" target="_blank"
                            class="pe-1 text-primary text-decoration-underline">Mercurius Inc.</a></p>
                </div>
            </footer>

        </div>
    </div>
    </div>


</body>
<script src="/assets/libs/simplebar/dist/simplebar.js"></script>
<script src="/assets/libs/jquery/dist/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="/assets/js/app.min.js"></script>



</html>