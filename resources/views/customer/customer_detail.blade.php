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
    <link rel="stylesheet" href="../assets/css/styles.css" />


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


            <div class="container-sm">
                <div class="row">
                    <div class="card shadow-lg  border-tiffany-2 rounded-3">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <h1 class="fw-bolder text-uppercase text-tiffany fs-12 m-7 ms-0">{{ $customer->name }}
                                </h1>
                                <div class="d-flex gap-2">
                                    <button
                                        class="btn btn-primary bg-tiffany border-0 px-3 gap-2 d-flex align-items-center justify-content-between w-max ">
                                        <p class="fs-3"><a class="text-white"
                                                href="{{ route('customer.edit', ['id' => $customer->id]) }}">Edit Customer</a></p>
                                        <i class="ti ti-pencil fs-4"></i>
                                    </button>
                                    <button
                                        class="btn btn-primary  bg-danger border-0 px-3 gap-2  d-flex align-items-center justify-content-between">
                                        <p class="fs-3"><a class="text-white"
                                                href="{{URL::to('customer/show_customer/delete', $customer->id)}}"
                                                onclick="return confirm ('Are you sure to delete this customer {{$customer->id}}?')">Delete</a>
                                        </p>
                                        <i class="ti ti-trash fs-4"></i>
                                    </button>
                                </div>
                            </div>
                            <h1 class="fs-7 fw-bolder">
                                Personal Details
                            </h1>
                            <div class="grid grid-cols-7 col grid-rows-4 mt-4 row-gap-4 border-y py-4">
                                <h1 class="fs-4 fw-bolder opacity-85 col-span-2">
                                    Document No.
                                </h1>

                                <h1 class="fs-4 fw-bold opacity-85 col-span-5 text-tiffany">
                                    @if ($customer->doc_no)
                                    {{ $customer->doc_no }}
                                    @else
                                    Not Available
                                    @endif
                                </h1>

                                <h1 class="fs-4 fw-bolder opacity-85 col-span-2">
                                    Phone No.
                                </h1>

                                <h1 class="fs-4 fw-bold opacity-85 col-span-5 text-tiffany">
                                    @if ($customer->mobile_no)
                                    {{ $customer->mobile_no }}
                                    @else
                                    Not Available
                                    @endif
                                </h1>

                                <h1 class="fs-4 fw-bolder opacity-85 col-span-2">
                                    Email
                                </h1>

                                <h1 class="fs-4 fw-bold opacity-85 col-span-5 text-tiffany">
                                    @if ($customer->primary_email)
                                    {{ $customer->primary_email }}
                                    @else
                                    Not Available
                                    @endif
                                </h1>

                                <h1 class="fs-4 fw-bolder opacity-85 col-span-2">
                                    Dath of Birth
                                </h1>

                                <h1 class="fs-4 fw-bold col-span-5 opacity-85 text-tiffany">
                                    @if ($customer->dob)
                                    {{ $customer->dob }}
                                    @else
                                    Not Available
                                    @endif
                                </h1>
                            </div>

                            <div class="border-bottom">
                                <h1 class="fs-7 my-4 fw-bolder">
                                    Document Attached
                                </h1>
                                <div class="grid grid-cols-7 my-2 mb-4 row-gap-4 align-items-center">
                                    <h1 class="fs-4 fw-bolder opacity-85 col-span-2">
                                        File Status
                                    </h1>

                                    <div class="col-span-5 gap-3 d-flex align-items-center">

                                        @if ($customer->document_images)
                                        @php
                                        $documentPath = asset('storage/' . $customer->document_images);
                                        $extension = pathinfo($customer->document_images, PATHINFO_EXTENSION);
                                        @endphp
                                        <a href="{{ route('download.document', ['customerId' => $customer->id]) }}"
                                            class="btn btn-primary bg-tiffany border-0">Download</a>
                                        @else
                                        <h1 class="fs-4 fw-bold col-span-5 opacity-85 text-tiffany">No File Attached
                                        </h1>
                                        @endif

                                        <!-- <button class="btn btn-primary bg-tiffany border-0">Download</button> -->
                                    </div>
                                </div>
                            </div>

                            <div class="border-bottom">
                                <h1 class="fs-7 my-4 fw-bolder">
                                    Transactions
                                </h1>
                                <div class="grid grid-cols-7 my-2 mb-4 row-gap-4 ">
                                    <h1 class="fs-4 fw-bolder opacity-85 col-span-2">
                                        Total Transactions
                                    </h1>

                                    <h1 id="totalTrans" class="fs-4 fw-bold opacity-85 col-span-5 text-tiffany">
                                        {{ $customer->transactions->count() }}
                                    </h1>
                                </div>
                                <div class="grid grid-cols-7 my-2 mb-4 row-gap-4">
                                    <h1 class="fs-4 fw-bolder opacity-85 col-span-2 ">
                                        Free Sale Eligibility
                                    </h1>
                                    <div class="h-7 w-40 bg-neutral-200 rounded-pill col-span-5">
                                        <h1 id="empty" class="fw-bolder fs-5 text-center"></h1>
                                        <div id="freesales" class="h-7 text-center bg-tiffany rounded-pill">
                                            <h1 id="salestext" class="fw-bolder fs-5 pt-1 text-center text-white">
                                                <span id="freesalescount">
                                                    {{ $customer->transactions->count()%6 }}</span>/5
                                            </h1>
                                        </div>
                                    </div>
                                    <div class="col-span-2"></div>
                                    <div class="col-span-5">
                                    @if ($customer->transactions->where('trans_type' , '==', 'Paid')->count()%6 == 5) 
                                    <a href="{{ route ('transaction.signup') }}" method="get"><button
                                            class="btn btn-primary bg-tiffany border-0 px-3  gap-2 d-flex align-items-center justify-content-between">
                                            Avail Free Sale</button></a>
                                    @endif
                                    </div>
                                </div>
                            </div>

                            <div class="border-bottom mb-2">
                                <h1 class="fs-7 my-4 fw-bolder">
                                    Referrals
                                </h1>
                                <div class="grid grid-cols-7 my-2 mb-4 row-gap-4 ">
                                    <h1 class="fs-4 fw-bolder opacity-85 col-span-2">
                                        Total Referrals
                                    </h1>

                                    <h1 id="reff" class="fs-4 fw-bold opacity-85 col-span-5 text-tiffany">
                                        {{ $customer->customers->count() }}
                                    </h1>
                                </div>
                                <div class="grid grid-cols-7 my-2 mb-4 row-gap-4">
                                    @php
                                        $i = 0;
                                    @endphp
                                    @foreach ($customer->customers as $customer)
                                        <h1 class="fs-4 fw-bolder opacity-85 col-span-2">
                                            {{$customer->name}} 's Transactions
                                        </h1>

                                        <div class="h-7 w-40 bg-neutral-200 rounded-pill col-span-5">
                                            <h1 id="ref-empty-{{$i}}" class="fw-bolder fs-5 text-center"></h1>
                                            <div id="referral-{{$i}}"
                                                class="h-7 text-center bg-tiffany rounded-pill">
                                                <h1 id="referralsaletext-{{$i}}"
                                                    class="fw-bolder fs-5 pt-1 text-center text-white">
                                                    <span
                                                        id="referralsalecount-{{$i}}">{{ $customer->transactions->count() }}</span>/3
                                                </h1>
                                            </div>
                                        </div>


                                        @php
                                            $i++;
                                        @endphp
                                    @endforeach
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <footer>
                <div class="py-6 px-6 text-center footer">
                    <p class="mb-0 fs-4">Developed by <a href="https://mercurius-inc.com" target="_blank"
                            class="pe-1 text-primary text-decoration-underline">Mercurius Inc.</a></p>
                </div>
            </footer>

        </div>
    </div>
    </div>
</body>

<script>

let bar = document.getElementById("freesales");
let count = document.getElementById("freesalescount").innerHTML;
let salestext = document.getElementById("salestext");
let empty = document.getElementById("empty");
let totalTrans = document.getElementById("totalTrans").innerHTML;



function freesales() {
    if (count == 5 ) {
        salestext.innerHTML = ("Eligible")
        empty.style.visibility = "hidden";
    } else if (totalTrans == 0) {
        empty.innerHTML = "No Transactions";
        bar.style.visibility = "hidden";
        salestext.style.visibility = "hidden";
    } else
        bar.style.width = (count * 20) + "%";
}
freesales();

let reff = document.querySelector("#reff").innerHTML;
console.log(reff);

// Select all referral elements and iterate over them
let referralElements = document.querySelectorAll("[id^='referral-']");
for (let i = 0; i < referralElements.length; i++) {
    updateReferralStatus(i);
}

function updateReferralStatus(i) {
    let referral = document.querySelector("#referral-" + i);
    let referralsaletext = document.querySelector("#referralsaletext-" + i);
    let referralsalecount = document.querySelector("#referralsalecount-" + i);
    let refempty = document.querySelector("#ref-empty-" + i);

    // Define a function to update referral status
    let saleCount = parseInt(referralsalecount.innerHTML);
    if (saleCount >= 3) {
        referralsaletext.innerHTML = "Availed";
        refempty.style.visibility = "hidden";
    } else if (saleCount === 0) {
        refempty.innerHTML = "No Transactions";
        referral.style.visibility = "hidden";
        referralsaletext.style.visibility = "hidden";
    } else {
        referral.style.width = (saleCount / 3 * 100) + "%";
    }
}


</script>
<script src="../assets/libs/simplebar/dist/simplebar.js"></script>
<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
<script src="../assets/js/app.min.js"></script>



</html>