<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> ARKWAYS</title>
    <link rel="shortcut icon" type="image/png" href="./assets/images/logos/favicon.png" />

    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n " crossorigin="anonymous">
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

    <link rel="stylesheet" href="/assets/css/styles.min.css" />
    <link rel="stylesheet" href="/assets/css/styles.css">
    <link rel="stylesheet" href="/assets/libs/simplebar/dist/simplebar.css">
    <link rel="stylesheet" href="/assets/libs/simplebar/dist/simplebar.min.css">



    <style>

    </style>
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
        <!-- Sidebar End -->
        <!-- Main wrapper -->
        <div class="body-wrapper">
            <!-- Header Start -->
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
            <div class="container-fluid">
                <div class="row">

                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-12">
                            <div class="card shadow border-tiffany-2">
                                <div class="card-body">
                                    <div class="row alig n-items-start">
                                        <div class="col-11">
                                            <h5 class="card-title mb-9 fw-semibold"> Last 7 days Sales </h5>
                                        </div>
                                        <div class="col-1">
                                            <div class="d-flex justify-content-end">
                                                <div
                                                    class="text-white bg-tiffany rounded-circle p-6 d-flex align-items-center justify-content-center">
                                                    <i class="ti ti-report-analytics fs-6 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="earning"></div>
                                <div style="background: #77cbb9; opacity: 0.05">
                                    <h5>....</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5  d-flex align-items-stretch">
                        <div class="card shadow w-100  border-tiffany-2">
                            <div class="card-body p-4">
                                <div class="mb-4 d-flex justify-content-start align-items-center">
                                    <h5 class="card-title ms-2 fw-semibold col-9">Recent Transactions</h5>
                                    <a href="{{ route ('transaction.show') }}" class="btn btn-outline-link col-3">
                                        <button type="button">Show All</button>
                                    </a>
                                </div>
                                <ul class="timeline-widget mb-0 pb-5 position-relative mb-n5">
                                    @foreach ($transactions->take(4) as $transaction)
                                    <li class="timeline-item position-relative overflow-hidden grid grid-cols-7 ">
                                        <div
                                            class="timeline-time text-dark flex-shrink-0 text-end text-muted col-span-3">
                                            <?php
                                                $dateTimeParts = explode(' ', $transaction->created_at);
                                                $date = $dateTimeParts[0];
                                                $time = $dateTimeParts[1];
                                            ?>
                                            {{$date}}<br>{{$time}}
                                        </div>
                                        <div
                                            class="timeline-badge-wrap d-flex flex-column align-items-center col-span-1">
                                            <span class="timeline-badge border-2-tiffany flex-shrink-0 my-8"></span>
                                            <span class="timeline-badge-border d-block flex-shrink-0"></span>
                                        </div>
                                        <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold col-span-3">
                                            {{$transaction->customer->name}}
                                            <p class=" d-block fw-normal text-tiffany">{{$transaction->ref_no}}</p>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="card shadow w-100  border-tiffany-2">
                            <div class="card-body p-4 d-flex flex-wrap">
                                <div class="w-100 text-center">
                                    <button id="addTrans" type="button"
                                        class="btn btn-primary m-2 mx-2 py-3 w-40 fs-4 fw-semibold border-0 bg-tiffany">
                                        Add Transaction
                                    </button>
                                    <a href="{{ route ('customer.signup') }}" method="get">
                                        <button type="button"
                                            class="btn btn-primary m-2 py-3 mx-2 w-40 fs-4 fw-semibold border-0 bg-tiffany">
                                            Add New Customers
                                        </button>
                                    </a><br>
                                    <a href="{{ route ('customer.show') }}" method="get">
                                        <button type="button"
                                            class="btn btn-primary m-2 py-3 mx-2 w-40 fs-4 fw-semibold border-0 bg-tiffany">
                                            Show All Customers
                                        </button>
                                    </a>
                                    <a href="{{ route ('transaction.show') }}"><button type="button"
                                            class="btn btn-primary m-2 py-3 mx-2 w-40 fs-4 fw-semibold border-0 bg-tiffany">
                                            View Transactions
                                        </button></a>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow w-100 border-tiffany-2">
                            <div class="card-body p-4 d-flex flex-wrap">
                                <div class="w-100 text-center">
                                    <div class="grid grid-cols-3 divide-x text-center">
                                        <div>
                                            <h5 class="pt-2 card-title fw-semibold ">
                                                Registered Customers
                                            </h5>
                                            <h1 class="text-4xl fw-semibold m-4">{{$totalCustomers}}</h1>
                                        </div>
                                        <div>
                                            <h5 class="pt-2 card-title fw-semibold">
                                                Total Transactions
                                            </h5>
                                            <h1 class="text-4xl fw-semibold m-4">{{$totalTransactions}}</h1>
                                        </div>
                                        <div>
                                            <h5 class="pt-2 card-title fw-semibold">
                                                Referred Transactions
                                            </h5>
                                            <h1 class="text-4xl fw-semibold m-4">{{$totalReferralTransactions}}</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                
                <div class="card shadow border-tiffany-2">
                    <div class="card-body d-flex flex-column">
                        <h1 class="card-title ms-2 fw-semibold mb-3">
                            Registered Customers
                        </h1>
                        <input type="text" class="form-control mb-4 live-search-box" placeholder="Search">
                        <div class="card shadow">
                            <div class="live-search-list-wrapper message-body overflow-y-auto">
                                <ul class="live-search-list">
                                    @foreach ($customers as $customer)
                                    <li>
                                        <a href="{{URL::to('customer', $customer->id)}}">
                                            <div class="card-body p-3 d-flex flex-wrap">
                                                <div class="w-100 text-center">
                                                    <div class="grid grid-cols-3 divide-x text-center">
                                                        <div>
                                                            <h5 class="">
                                                                @if ($customer->name)
                                                                {{$customer->name}}
                                                                @else
                                                                N/A
                                                                @endif
                                                            </h5>
                                                        </div>
                                                        <div>
                                                            <h5 class="">
                                                                @if ($customer->doc_no)
                                                                {{$customer->doc_no}}
                                                                @else
                                                                N/A
                                                                @endif
                                                            </h5>
                                                        </div>
                                                        <div>
                                                            <h5 class=" ">
                                                                @if ($customer->mobile_no)
                                                                {{$customer->mobile_no}}
                                                                @else
                                                                N/A
                                                                @endif
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <a href="{{ route ('customer.signup') }}" class="btn btn-primary bg-tiffany border-0 p-2.5">
                            <button class="">Add New Customer</button>
                        </a>
                    </div>
                </div>

                <div class="fixed top-0 left-0 w-screen h-screen flex items-center justify-center backdrop-blur bg-opacity-50 transform scale-0 transition-transform duration-300"
                    id="addTransModal">
                    <div class="card shadow w-50">
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex align-items-center justify-content-between">
                                <h1 class="fw-bolder card-title ">Add Transaction</h1>
                                <button id="addClose"
                                    class="btn btn-primary bg-tiffany border-0 self-end mb-2">Close</button>
                            </div>
                            <form action="{{ route('transaction.store') }}" method="post">
                                @csrf
                                <select class="selectpicker my-3" data-size="7" data-live-search="true"
                                    data-title="Search Customer" id="state_list" data-width="100%" required
                                    name="customer" id="customer-dropdown">
                                    @foreach ($customers as $index => $customer)
                                    <option value="{{ $customer->id }}"
                                        data-transaction-count="{{ $customer->transactions->where('trans_type', '==', 'Paid')->count()}}"
                                        data-free-sale="{{ $customer->transaction_count }}"
                                        data-referral-count="{{ $customer->referral_count }}"
                                        data-free-referral-count="{{ $customer->transactions->where('trans_type', '==', 'FreeReferral')->count() }}"
                                        data-free-count="{{ $customer->transactions->where('trans_type', '==', 'Free')->count() }}"
                                        class="text-center {{ $index % 2 === 0 ? '' : 'bg-tiffany-2' }}">
                                        @if ($customer->name)
                                        <span class="fw-bold">
                                            {{$customer->name}}
                                        </span>
                                        @else
                                        N/A
                                        @endif
                                        &nbsp;|&nbsp;
                                        @if ($customer->doc_no)
                                        {{ $customer->doc_no }}
                                        @else
                                        N/A
                                        @endif
                                        &nbsp;|&nbsp;
                                        @if ($customer->mobile_no)
                                        {{ $customer->mobile_no }}
                                        @else
                                        N/A
                                        @endif
                                    </option>
                                    @endforeach
                                </select>

                                <h1 id="message"
                                    class="display-none mb-4 fs-5 text-tiffany fw-bold bg-tiffany-2 rounded p-2 text-center">
                                    Customer is eligible for a free sale</h1>
                                <input class="display-none" id="trans_type" name="trans_type" placeholder="trans_type">
                                <input class="display-none" id="ref_count" name="ref_count" placeholder="ref_count">
                                <input class="display-none" id="free_count" name="free_count" placeholder="free_count">
                                <input class="form-control mb-4" id="ref_no" name="ref_no" placeholder="Transaction ID">
                                <a href="" class="w-100">
                                    <button class=" p-2.5 btn btn-primary bg-tiffany border-0 w-100">Submit
                                    </button>
                                </a>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="py-6 px-6 text-center footer">
                    <p class="mb-0 fs-4">Developed by <a href="https://mercurius-inc.com" target="_blank"
                            class="pe-1 text-primary text-decoration-underline">Mercurius Inc.</a></p>
                </div>
            </div>
        </div>
    </div>


</body>
<script>
    let sales = @json($sales);

    if (Object.keys(sales).length > 0) {
        const keys = Object.keys(sales);
        delete sales[keys[keys.length - 1]];
    }

 
    $(document).ready(function () {
        $('#state_list').on('change', function () {
            var selectedCustomer = $(this).val(); // Get the selected customer's value
            console.log(selectedCustomer);
            var transType = document.getElementById("trans_type");
            let message = document.getElementById("message");
            let refCount = document.getElementById("ref_count");
            let transCount = document.getElementById("free_count");



            // Check if the selected customer has transaction_count equal to 1
            if (selectedCustomer && selectedCustomer !== "Search Customer") {
                var transactionCount = parseInt($('#state_list option:selected').data('transaction-count'));
                var freeCount = parseInt($('#state_list option:selected').data('free-count'));
                var referralCount = parseInt($('#state_list option:selected').data('referral-count'));
                var freeSale = parseInt($('#state_list option:selected').data('free-sale'));
                var freeReffCount = parseInt($('#state_list option:selected').data('free-referral-count'));
                @php
                    $latestTransaction = $customer->transactions()->latest()->first();

                    if ($latestTransaction) {
                        $lastSale = $latestTransaction->trans_type;
                    } else {
                        $lastSale = null;
                    }
                @endphp

               let lastSale = "{{$lastSale}}";

                console.log(lastSale);
                // console.log(transactionCount % 6);
                // console.log(transactionCount % 5);

                if (referralCount != 0 && transactionCount != 0 || ((transactionCount) % 5 == 0)) {
                    $('#message').show();
                } else {
                    $('#message').hide(); // Hide the message if no customer is selected
                }

                if (referralCount != 0 )  {
                    transType.value = "FreeReferral";
                    refCount.value = 0;
                    transCount = 1;
                    console.log("FreeReff Test:1")
                } else if (referralCount == 0 && transactionCount != 0 && ((transactionCount) % 5) == 0 && lastSale == "Paid" ) {
                    transType.value = "Free";
                    console.log("Free Test:1")
                    refCount.value = referralCount;
                    transCount.value = 0;
                    console.log(transactionCount);
                    console.log(freeCount);
                    console.log(freeReffCount);
                } else {
                    transType.value = "Paid";
                    console.log("Paid Test:2")
                    console.log(referralCount);
                    refCount.value = referralCount;
                    transCount.value = freeSale;
                }

            } else {
                $('#message').hide();
            }

            if (selectedCustomer && selectedCustomer !== "Search Customer") {
                var referralCount = parseInt($('#state_list option:selected').data('referral-count'));
                if (transactionCount != 0 && (transactionCount - freeCount - freeReffCount) % 5 == 0 ||
                    referralCount != 0) {
                    $('#message').show();
                } else {
                    $('#message').hide();
                }
            } else {
                $('#message').hide();
            }
        });
    });
</script>
<script src="./assets/libs/jquery/dist/jquery.min.js"></script>
<script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="./assets/js/sidebarmenu.js"></script>
<script src="./assets/js/app.min.js"></script>
<script src="./assets/libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="./assets/libs/simplebar/dist/simplebar.js"></script>
<script src="./assets/js/dashboard.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="./assets/js/search.js"></script>

</html>