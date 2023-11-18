<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modernize Free</title>
    <link rel="shortcut icon" type="image/png" href="./assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="./assets/css/styles.min.css" />
    <link rel="stylesheet" href="./assets/css/styles.css" />

</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div class="position-relative overflow-hidden min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0 shadow-lg">
                            <div class="card-body">
                                <a href="#"
                                    class="text-nowrap logo-img text-center d-block py-3 w-100 text-tiffany fs-8 fw-bolder">
                                    ARKWAYS
                                </a>
                                
                                @if (Route::has('login'))
                                @auth

                                <a href="{{ route('login') }}">
                                    <button class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2 bg-tiffany border-0"
                                        type="submit"> Continue
                                    </button>
                                </a>
                                @else

                                <a href="{{ url('/home') }}">
                                    <button class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2 bg-tiffany border-0"
                                        type="submit"> Sign In
                                    </button>
                                </a>

                                @endauth
                                @endif

                                <p class="text-center mt-4 mb-0">Developed By: <span class="text-tiffany fw-semibold">Mercurius Inc</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
