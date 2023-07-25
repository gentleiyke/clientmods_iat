
                        <div class="row">
                            <div class="col-xl-5">
                                <!-- card -->
                                <div class="row align-items-center">
                                            <div class="card">
                                                <div class="card-header align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">Investor's Details</h4>
                                                    <div class="flex-shrink-0">
                                                        <ul class="nav justify-content-end nav-tabs-custom rounded card-header-tabs" role="tablist">
                                                            <li class="nav-item">
                                                                <a class="nav-link" data-bs-toggle="tab" href="#home2" role="tab">
                                                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                                    <span class="d-none d-sm-block">Wallet Details</span> 
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link active" data-bs-toggle="tab" href="#messages2" role="tab">
                                                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                                    <span class="d-none d-sm-block">Personal Details</span>   
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div><!-- end card header -->
                                    
                                                <div class="card-body">
                                                   
                                                    <!-- Tab panes -->
                                                    <div class="tab-content text-muted">
                                                        <style type="text/css">
                                                            .homepanel {
                                                                display: flex;

                                                            }
                                                        </style>
                                                        <div class="tab-pane" id="home2" role="tabpanel">
                                                            <div class="homepanel">
                                                                <div class="col-sm-6">
                                                                    <div id="wallet-balance" data-colors='["#777aca", "#5156be", "#a8aada"]' class="apex-charts"></div>
                                                                </div>
                                                                <div class="col-sm-4 align-self-center">
                                                                    <div class="mt-4 mt-sm-0">
                                                                        <div class="mt-4 pt-2">
                                                                            <p class="mb-2"><i class="mdi mdi-circle align-middle font-size-10 me-2 text-success"></i> 
                                                                                <?php echo walletDash($_SESSION["uid"], "wallet"); ?>
                                                                            </p>
                                                                            <span class="text-muted font-size-14 fw-normal"><?php echo walletDash($_SESSION["uid"], "walletaddress"); ?></span>
                                                                            <h6><?php echo ($_SESSION["role"] == "1" ? "$" . current_fund() : "UNLIMITED"); ?> = <span class="text-muted font-size-14 fw-normal">$ 4025.32</span></h6>
                                                                        </div>
                        
                                                                        <div class="mt-4 pt-2">
                                                                            <p class="mb-2"><i class="mdi mdi-circle align-middle font-size-10 me-2 text-primary"></i> Ethereum</p>
                                                                            <h6>4.5701 ETH = <span class="text-muted font-size-14 fw-normal">$ 1123.64</span></h6>
                                                                        </div>
                        
                                                                        <div class="mt-4 pt-2">
                                                                            <p class="mb-2"><i class="mdi mdi-circle align-middle font-size-10 me-2 text-info"></i> Litecoin</p>
                                                                            <h6>35.3811 LTC = <span class="text-muted font-size-14 fw-normal">$ 2263.09</span></h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane active" id="messages2" role="tabpanel">
                                                            <p class="mb-0">
                                                                <dl class="row mb-0">
                                                                    <dt class="col-sm-3">Full Name</dt>
                                                                    <dd class="col-sm-8">
                                                                        <?php echo getDashProfile($_SESSION["uid"], "fname"); ?>
                                                                    </dd>

                                                                    <dt class="col-sm-3">Email Address</dt>
                                                                    <dd class="col-sm-8">
                                                                        <?php echo getDashProfile($_SESSION["uid"], "email"); ?>
                                                                    </dd>

                                                                    <dt class="col-sm-3">Phone</dt>
                                                                    <dd class="col-sm-8">
                                                                        <?php echo getDashProfile($_SESSION["uid"], "phone"); ?>
                                                                    </dd>

                                                                    <dt class="col-sm-3">Gender</dt>
                                                                    <dd class="col-sm-8">
                                                                        <?php echo getDashProfile($_SESSION["uid"], "gender"); ?>
                                                                    </dd>

                                                                    <dt class="col-sm-3">Marital Status</dt>
                                                                    <dd class="col-sm-8">
                                                                        <?php echo getDashProfile($_SESSION["uid"], "marital"); ?>
                                                                    </dd>

                                                                    <dt class="col-sm-3">Country</dt>
                                                                    <dd class="col-sm-8">
                                                                        <?php echo getDashProfile($_SESSION["uid"], "country"); ?>
                                                                    </dd>

                                                                    <dt class="col-sm-3">Status</dt>
                                                                    <dd class="col-sm-8">
                                                                    <!--modified the html tags -->
                                                                    <span class="text-success"><strong>
                                                                        <?php 
                                                                                if (verifyAccount()) {
                                                                                    echo "VERIFIED";
                                                                                } else {
                                                                                    echo "NOT VERIFIED";
                                                                                }
                                                                        ?>
                                                                    </strong></span>
                                                                    </dd>
                                                                </dl>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div><!-- end card-body -->
                                            </div>
                                        </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                            <div class="col-xl-7">
                                <div class="row">
                                    <?php if($_SESSION["role"]=="1"){ ?>
                                    <div class="col-xl-8">
                                        <!-- card -->
                                        <div class="card card-h-100">
                                            <!-- card body -->
                                            <div class="card-body">
                                                <div class="d-flex flex-wrap align-items-center mb-4">
                                                    <h5 class="card-title me-2">Investment Overview</h5>
                                                    <!--<div class="ms-auto">
                                                        <select class="form-select form-select-sm">
                                                            <option value="MAY" selected="">May</option>
                                                            <option value="AP">April</option>
                                                            <option value="MA">March</option>
                                                            <option value="FE">February</option>
                                                            <option value="JA">January</option>
                                                            <option value="DE">December</option>
                                                        </select>
                                                    </div>-->
                                                </div>
            
                                                <div class="row align-items-center">
                                                    <div class="col-sm">
                                                        <?php $a = floatval(number_format(getDashBar(),0)); ?>
                                                        <div class="progress progress-striped progress-bar-animated active" style="height: 15px;">
                                                            <div style="width: <?php echo $a; ?>%;padding:5px;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="<?php echo $a; ?>" role="progressbar" class="progress-bar progress-bar-success"><span style="font-weight: bold;"><?php echo $a; ?>% OF ACTIVE PLAN COMPLETED SUCCESSFULLY</span></div>
                                                        </div>
                                                        <div class="mt-2">
                                                            <p class="mb-2 text-muted text-center text-uppercase font-size-11"><?php echo $a; ?>% OF INVESTMENT PLAN COMPLETED</p>
                                                        </div>
                                                        <style type="text/css">
                                                            .dwc {
                                                                display: flex;
                                                                justify-content: center;
                                                            }
                                                            .dwc div {
                                                                margin: 10px;
                                                            }
                                                        </style>
                                                        <div class="dwc mt-2">
                                                            <div class="col-xl-6 col-md-6">
                                                                <a href="/account/withdraw" class="btn btn-primary btn-sm">Withdrawal</a>
                                                            </div>
                                                            <div class="col-xl-6 col-md-6">
                                                                <a href="/buypoints" class="btn btn-primary btn-sm">Deposit</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm align-self-center">
                                                        <div class="mt-4 mt-sm-0">
                                                            <!--<p class="mb-1">Invested Amount</p>
                                                            <h4>$ <?php //echo investAmount(); ?></h4>

                                                            <p class="text-muted mb-4"> + 0.0012.23 ( 0.2 % ) <i class="mdi mdi-arrow-up ms-1 text-success"></i></p>-->

                                                            <div class="row g-0">
                                                                <div class="col-6">
                                                                    <div>
                                                                        <p class="mb-2 text-muted text-uppercase font-size-11">ROI</p>
                                                                        <h5 class="fw-medium"><?php echo getDashProduct($_SESSION["uid"], "devident_rate"); ?> % daily</h5>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div>
                                                                        <p class="mb-2 text-muted text-uppercase font-size-11">Referral</p>
                                                                        <h5 class="fw-medium"><?php echo getDashProduct($_SESSION["uid"], "referral_rate"); ?> %</h5>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="mt-2">
                                                                <a class="btn btn-primary btn-sm"><?php echo getDashProduct($_SESSION["uid"], "product_name"); ?></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <!-- end col -->
        
                                    <div class="col-xl-4">
                                        <!-- card -->
                                        <div class="card bg-primary text-white shadow-primary card-h-100">
                                            <!-- card body -->
                                            <div class="card-body p-0">
                                                <div id="carouselExampleCaptions" class="carousel slide text-center widget-carousel" data-bs-ride="carousel">                                                   
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <div class="text-center p-4">
                                                                <i class="mdi mdi-bitcoin widget-box-1-icon"></i>
                                                                <div class="avatar-md m-auto">
                                                                    <span class="avatar-title rounded-circle bg-soft-light text-white font-size-24">
                                                                        <i class="mdi mdi-currency-btc"></i>
                                                                    </span>
                                                                </div>
                                                                <h4 class="mt-3 lh-base fw-normal text-white"><b>Bitcoin</b> News</h4>
                                                                <p class="text-white-50 font-size-13">Bitcoin prices fell sharply amid the global sell-off in equities. Negative news
                                                                    over the Bitcoin past week has dampened Bitcoin basics
                                                                    sentiment for bitcoin. </p>
                                                                <button type="button" class="btn btn-light btn-sm">View details <i class="mdi mdi-arrow-right ms-1"></i></button>
                                                            </div>
                                                        </div>
                                                        <!-- end carousel-item -->
                                                        <div class="carousel-item">
                                                            <div class="text-center p-4">
                                                                <i class="mdi mdi-ethereum widget-box-1-icon"></i>
                                                                <div class="avatar-md m-auto">
                                                                    <span class="avatar-title rounded-circle bg-soft-light text-white font-size-24">
                                                                        <i class="mdi mdi-ethereum"></i>
                                                                    </span>
                                                                </div>
                                                                <h4 class="mt-3 lh-base fw-normal text-white"><b>ETH</b> News</h4>
                                                                <p class="text-white-50 font-size-13">Bitcoin prices fell sharply amid the global sell-off in equities. Negative news
                                                                    over the Bitcoin past week has dampened Bitcoin basics
                                                                    sentiment for bitcoin. </p>
                                                                <button type="button" class="btn btn-light btn-sm">View details <i class="mdi mdi-arrow-right ms-1"></i></button>
                                                            </div>
                                                        </div>
                                                        <!-- end carousel-item -->
                                                        <div class="carousel-item">
                                                            <div class="text-center p-4">
                                                                <i class="mdi mdi-litecoin widget-box-1-icon"></i>
                                                                <div class="avatar-md m-auto">
                                                                    <span class="avatar-title rounded-circle bg-soft-light text-white font-size-24">
                                                                        <i class="mdi mdi-litecoin"></i>
                                                                    </span>
                                                                </div>
                                                                <h4 class="mt-3 lh-base fw-normal text-white"><b>Litecoin</b> News</h4>
                                                                <p class="text-white-50 font-size-13">Bitcoin prices fell sharply amid the global sell-off in equities. Negative news
                                                                    over the Bitcoin past week has dampened Bitcoin basics
                                                                    sentiment for bitcoin. </p>
                                                                <button type="button" class="btn btn-light btn-sm">View details <i class="mdi mdi-arrow-right ms-1"></i></button>
                                                            </div>
                                                        </div>
                                                        <!-- end carousel-item -->
                                                    </div>
                                                    <!-- end carousel-inner -->
                                                    
                                                    <div class="carousel-indicators carousel-indicators-rounded">
                                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                                                            aria-current="true" aria-label="Slide 1"></button>
                                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                    </div>
                                                    <!-- end carousel-indicators -->
                                                </div>
                                                <!-- end carousel -->
                                            </div>
                                            <!-- end card body -->
                                        </div>
                                        <!-- end card -->
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->
                            </div>
                            <!-- end col -->
                        </div> <!-- end row-->

                        <div class="row">

                        <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Login History</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body px-0">
                                        <div class="px-3" data-simplebar style="height: 370px !important">
                                            <?php LoginHistory(4); ?>
                                        </div>    
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                        </div>

                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Transactions</h4>
                                    <div class="flex-shrink-0">
                                        <!--<ul class="nav justify-content-end nav-tabs-custom rounded card-header-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#transactions-all-tab" role="tab">
                                                        All 
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#transactions-buy-tab" role="tab">
                                                        Buy 
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#transactions-sell-tab" role="tab">
                                                        Sell  
                                                    </a>
                                                </li>
                                            </ul>-->
                                            <!-- end nav tabs -->
                                        </div>
                                    </div><!-- end card header -->

                                    <div class="card-body px-0">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="transactions-all-tab" role="tabpanel">
                                                <div class=" overflow-hidden table-responsive px-3" data-simplebar style="height: 370px !important;">
                                                    <!--<table class="table align-middle table-nowrap table-borderless">
                                                        <tbody>
                                                            <tr>
                                                                <td style="width: 50px;">
                                                                    <div class="font-size-22 text-success">
                                                                        <i class="bx bx-down-arrow-circle d-block"></i>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div>
                                                                        <h5 class="font-size-14 mb-1">Buy BTC</h5>
                                                                        <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="text-end">
                                                                        <h5 class="font-size-14 mb-0">0.016 BTC</h5>
                                                                        <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="text-end">
                                                                        <h5 class="font-size-14 text-muted mb-0">$125.20</h5>
                                                                        <p class="text-muted mb-0 font-size-12">Amount</p>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>-->
                                                    <?php getTransList(5); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Notable Holidays</h4>
                                    <span class="fw-medium alert alert-info">Weekend/Holidays excluded</span>
                                </div><!-- end card header -->

                                    <div class="card-body px-0">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="transactions-all-tab" role="tabpanel">
                                                <div class="overflow-hidden table-responsive px-3" data-simplebar style="height: 370px !important;">
                                                    <?php getHolidays(7); ?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-xl-8">
                                <!-- card -->
                                <div class="card">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap align-items-center mb-4">
                                            <h5 class="card-title me-2">Market Overview</h5>
                                            <div class="ms-auto">
                                                <div>
                                                    <button type="button" class="btn btn-soft-primary btn-sm">
                                                        ALL
                                                    </button>
                                                    <button type="button" class="btn btn-soft-secondary btn-sm">
                                                        1M
                                                    </button>
                                                    <button type="button" class="btn btn-soft-secondary btn-sm">
                                                        6M
                                                    </button>
                                                    <button type="button" class="btn btn-soft-secondary btn-sm active">
                                                        1Y
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <?php  
                                            $api = '3J3NHWMVT27KPNEM';
                                            $get_data = file_get_contents('https://www.alphavantage.co/query?function=NEWS_SENTIMENT&tickers=COIN,CRYPTO:BTC,FOREX:USD&topics=financial_markets&sort=LATEST&limit=20&apikey='.$api);
                                            $response = json_decode($get_data, true);

                                            //$errors = $response['response']['errors'];
                                            //$data = $response['response']['data'][0];
                                            // print_r(array($response));
                                            // print_r(array($response[0]));
                                            // print_r($response[0][feed][0][title]);
                                            // echo $response[0][feed][0][title];
                                            
                                        ?>

                                        <div class="row align-items-center">
                                            <div class="col-xl-8">
                                                <div>
                                                    <div id="market-overview" data-colors='["#5156be", "#34c38f"]' class="apex-charts"></div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="p-4">
                                                    <div>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-sm m-auto">
                                                                <span class="avatar-title rounded-circle bg-soft-light text-dark font-size-16">
                                                                    1
                                                                </span>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <span class="font-size-16">Coinmarketcap</span>
                                                            </div>
        
                                                            <div class="flex-shrink-0">
                                                                <span class="badge rounded-pill badge-soft-success font-size-12 fw-medium">+2.5%</span>
                                                            </div>
                                                        </div>
                                                    </div>
        
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-sm m-auto">
                                                                <span class="avatar-title rounded-circle bg-soft-light text-dark font-size-16">
                                                                    2
                                                                </span>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <span class="font-size-16">Binance</span>
                                                            </div>
        
                                                            <div class="flex-shrink-0">
                                                                <span class="badge rounded-pill badge-soft-success font-size-12 fw-medium">+8.3%</span>
                                                            </div>
                                                        </div>
                                                    </div>
        
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-sm m-auto">
                                                                <span class="avatar-title rounded-circle bg-soft-light text-dark font-size-16">
                                                                    3
                                                                </span>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <span class="font-size-16">Coinbase</span>
                                                            </div>
        
                                                            <div class="flex-shrink-0">
                                                                <span class="badge rounded-pill badge-soft-danger font-size-12 fw-medium">-3.6%</span>
                                                            </div>
                                                        </div>
                                                    </div>
        
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-sm m-auto">
                                                                <span class="avatar-title rounded-circle bg-soft-light text-dark font-size-16">
                                                                    4
                                                                </span>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <span class="font-size-16">Yobit</span>
                                                            </div>
        
                                                            <div class="flex-shrink-0">
                                                                <span class="badge rounded-pill badge-soft-success font-size-12 fw-medium">+7.1%</span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-sm m-auto">
                                                                <span class="avatar-title rounded-circle bg-soft-light text-dark font-size-16">
                                                                    5
                                                                </span>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <span class="font-size-16">Bitfinex</span>
                                                            </div>
        
                                                            <div class="flex-shrink-0">
                                                                <span class="badge rounded-pill badge-soft-danger font-size-12 fw-medium">-0.9%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-4 pt-2">
                                                        <a href="" class="btn btn-primary w-100">See All Balances <i
                                                                class="mdi mdi-arrow-right ms-1"></i></a>
                                                    </div>
        
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row-->
        
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Trading</h4>
                                        <div class="flex-shrink-0">
                                            <ul class="nav nav-tabs-custom card-header-tabs" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-bs-toggle="tab" href="#buy-tab" role="tab">Buy</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#sell-tab" role="tab">Sell</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="buy-tab" role="tabpanel">
                                                <div class="float-end ms-2">
                                                    <h5 class="font-size-14"><i class="bx bx-wallet text-primary font-size-16 align-middle me-1"></i> <a href="#!" class="text-reset text-decoration-underline">$4335.23</a></h5>
                                                </div>
                                                <h5 class="font-size-14 mb-4">Buy Coins</h5>
                                                <div>
                                                    <div class="form-group mb-3">
                                                        <label>Payment method :</label>
                                                        <select class="form-select">
                                                            <option>Direct Bank Payment</option>
                                                            <option>Credit / Debit Card</option>
                                                            <option>Paypal</option>
                                                            <option>Payoneer</option>
                                                            <option>Stripe</option>
                                                        </select>
                                                    </div>

                                                    <div>
                                                        <label>Add Amount :</label>
                                                        <div class="input-group mb-3">
                                                            <label class="input-group-text">Amount</label>
                                                            <select class="form-select" style="max-width: 90px;">
                                                                <option value="BT" selected>BTC</option>
                                                                <option value="ET">ETH</option>
                                                                <option value="LT">LTC</option>
                                                            </select>
                                                            <input type="text" class="form-control" placeholder="0.00121255">
                                                        </div>

                                                        <div class="input-group mb-3">
                                                            <label class="input-group-text">Price</label>
                                                            <input type="text" class="form-control" placeholder="$58,245">
                                                            <label class="input-group-text">$</label>
                                                        </div>

                                                        <div class="input-group mb-3">
                                                            <label class="input-group-text">Total</label>
                                                            <input type="text" class="form-control" placeholder="$36,854.25">
                                                        </div>
                                                    </div>  

                                                    <div class="text-center">
                                                        <button type="button" class="btn btn-success w-md">Buy Coin</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end tab pane -->
                                            <div class="tab-pane" id="sell-tab" role="tabpanel">
                                                <div class="float-end ms-2">
                                                    <h5 class="font-size-14"><i class="bx bx-wallet text-primary font-size-16 align-middle me-1"></i> <a href="#!" class="text-reset text-decoration-underline">$4235.23</a></h5>
                                                </div>
                                                <h5 class="font-size-14 mb-4">Sell Coins</h5>

                                                <div>

                                                    <div class="form-group mb-3">
                                                        <label>Wallet ID :</label>
                                                        <input type="email" class="form-control" placeholder="1cvb254ugxvfcd280ki">
                                                    </div>

                                                    <div>
                                                        <label>Add Amount :</label>
                                                        <div class="input-group mb-3">
                                                            <label class="input-group-text">Amount</label>
                                                            
                                                            <select class="form-select" style="max-width: 90px;">
                                                                <option value="BT" selected>BTC</option>
                                                                <option value="ET">ETH</option>
                                                                <option value="LT">LTC</option>
                                                            </select>
                                                            <input type="text" class="form-control" placeholder="0.00121255">
                                                        </div>

                                                        <div class="input-group mb-3">
                                                        
                                                            <label class="input-group-text">Price</label>
                                                            
                                                            <input type="text" class="form-control" placeholder="$23,754.25">
                                                            
                                                            <label class="input-group-text">$</label>
                                                        </div>

                                                        <div class="input-group mb-3">
                                                            <label class="input-group-text">Total</label>
                                                            <input type="text" class="form-control" placeholder="$6,852.41">
                                                        </div>
                                                    </div>  

                                                    <div class="text-center">
                                                        <button type="button" class="btn btn-danger w-md">Sell Coin</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end tab pane -->
                                        </div>
                                        <!-- end tab content -->
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row-->