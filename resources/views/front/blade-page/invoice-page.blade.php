@extends('front.masterpage')

@section('content')





<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mx-3 mg-lg-b-25 mg-xl-b-30">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Select Template</li>
                </ol>
            </nav>
            <h4 class="mg-b-0 tx-spacing--1">Select Template</h4>
        </div>
        <div class="d-none d-md-block">
            <button class="btn btn-sm pd-x-15 btn-white btn-uppercase"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-save wd-10 mg-r-5">
                    <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path>
                    <polyline points="17 21 17 13 7 13 7 21"></polyline>
                    <polyline points="7 3 7 8 15 8"></polyline>
                </svg> Save</button>
            <button class="btn btn-sm pd-x-15 btn-white btn-uppercase mg-l-5"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-upload wd-10 mg-r-5">
                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                    <polyline points="17 8 12 3 7 8"></polyline>
                    <line x1="12" y1="3" x2="12" y2="15"></line>
                </svg> Export</button>
            <button class="btn btn-sm pd-x-15 btn-white btn-uppercase mg-l-5"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 wd-10 mg-r-5">
                    <circle cx="18" cy="5" r="3"></circle>
                    <circle cx="6" cy="12" r="3"></circle>
                    <circle cx="18" cy="19" r="3"></circle>
                    <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                    <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                </svg> Share</button>
            <button class="btn btn-sm pd-x-15 btn-primary btn-uppercase mg-l-5"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sliders wd-10 mg-r-5">
                    <line x1="4" y1="21" x2="4" y2="14"></line>
                    <line x1="4" y1="10" x2="4" y2="3"></line>
                    <line x1="12" y1="21" x2="12" y2="12"></line>
                    <line x1="12" y1="8" x2="12" y2="3"></line>
                    <line x1="20" y1="21" x2="20" y2="16"></line>
                    <line x1="20" y1="12" x2="20" y2="3"></line>
                    <line x1="1" y1="14" x2="7" y2="14"></line>
                    <line x1="9" y1="8" x2="15" y2="8"></line>
                    <line x1="17" y1="16" x2="23" y2="16"></line>
                </svg> Settings</button>
        </div>
    </div>
    <div class="row">

    </div>
    <div class="row ">
        <div class="col-sm-4 scrollable-container p-1">
            <div class="row shadow py-2">

                <div class="container ">
                    <div class="d-sm-flex align-items-center justify-content-between py-2">
                       <select name="" class="form-control w-50" id="">
                        <option value="">All Invoices</option>
                       </select>
                        <div class="mg-t-20 mg-sm-t-0">
                            <button class="btn btn-white"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer mg-r-5">
                                    <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                    <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                                    <rect x="6" y="14" width="12" height="8"></rect>
                                </svg> Print</button>


                        </div>
                    </div>




                    <div class="table-responsive overflow-initial customviews-table  ">
                        <table id="vertically-scrolled-table" class="table zi-table table-hover       header-fixed"><!---->
                            <tbody>
                                <tr tabindex="-1" id="2243871000000035179" class="ember-view table-active ">
                                    <td class="   bulk-selection-cell cursor-pointer text-end" style="width: 38px;min-width: 38px;max-width: 38px;"><input aria-label="Select this row" id="ember233" class="ember-checkbox ember-view cursor-pointer align-middle" type="checkbox" aria-checked="false"></td>
                                    <td class="ps-1 pe-3">
                                        <div class="list-primary"><span class="float-end amount">₹330.00</span>
                                            <div id="f749ee56-9ca0-4a27-998a-bf4b3a686dc0" class="name">Mr. suraj kumar</div> <!---->
                                        </div>
                                        <div class="list-secondary">
                                            <div class="d-flex flex-wrap align-items-center"><a id="ember234" class="ember-view active text-regular" href="#/invoices/2243871000000035179"><span class="text-dark-shade-blue">INV-000004</span> <!----> <!----></a> <span class="dot-seperator mx-3 mt-1"></span> <span class="text-dark-shade-blue me-3">18/02/2025</span> <!----><!----></div>
                                            <div class="mt-2"><!----> <span class="stat text-open">Due in 15 days</span> 
                                           
                                                    </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr tabindex="-1" id="2243871000000035153" class="ember-view  ">
                                    <td class="   bulk-selection-cell cursor-pointer text-end" style="width: 38px;min-width: 38px;max-width: 38px;"><input aria-label="Select this row" id="ember239" class="ember-checkbox ember-view cursor-pointer align-middle" type="checkbox"></td>
                                    <td class="ps-1 pe-3">
                                        <div class="list-primary"><span class="float-end amount">₹4,430.00</span>
                                            <div id="dd5ff752-ba86-42d9-8f90-0ab2ac29450c" class="name">test</div> <!---->
                                        </div>
                                        <div class="list-secondary">
                                            <div class="d-flex flex-wrap align-items-center"><a id="ember240" class="ember-view text-regular" href="#/invoices/2243871000000035153"><span class="text-dark-shade-blue">INV-000003</span> <!----> <!----></a> <span class="dot-seperator mx-3 mt-1"></span> <span class="text-dark-shade-blue me-3">16/02/2025</span> <!----><!----></div>
                                            <div class="mt-2"><!----> <span class="stat text-overdue">Overdue by 2 days</span> 
                                           
                                                    </div>
                                        </div>
                                    </td>
                                </tr>
                              
                               
                            </tbody>
                        </table> <!---->
                    </div>
                </div>






            </div>
        </div>




        <script>
            function printContainer() {
                window.print();
            }
        </script>

        <div class="col-sm-8 ">
            <div class="row shadow  m-1">
                <div class="col-sm-12" id="printableContent">
                    <div class="row pt-4">
                        <div class="col-sm-3 ">
                            <img src="{{ asset('images/digivity-logo.png') }}" class="w-100" alt="">
                        </div>
                    </div>
                    <div class="row">

                        <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0 p-5">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label class="tx-sans tx-uppercase tx-10 tx-medium tx-spacing-1 tx-color-03">Billed From</label>
                                    <h6 class="tx-15 mg-b-10">ThemePixels, Inc.</h6>
                                    <p class="mg-b-0">201 Something St., Something Town, YT 242, Country 6546</p>
                                    <p class="mg-b-0">Tel No: 324 445-4544</p>
                                    <p class="mg-b-0">Email: youremail@companyname.com</p>
                                </div><!-- col -->
                                <div class="col-sm-6 tx-right d-none d-md-block">
                                    <label class="tx-sans tx-uppercase tx-10 tx-medium tx-spacing-1 tx-color-03">Invoice Number</label>
                                    <h1 class="tx-normal tx-color-04 mg-b-10 tx-spacing--2">#DF032AZ00022</h1>
                                </div><!-- col -->
                                <div class="col-sm-6 col-lg-8 mg-t-40 mg-sm-t-0 mg-md-t-40">
                                    <label class="tx-sans tx-uppercase tx-10 tx-medium tx-spacing-1 tx-color-03">Billed To</label>
                                    <h6 class="tx-15 mg-b-10">{{ $customer->email }}</h6>
                                    <p class="mg-b-0">4033 Patterson Road, Staten Island, NY 10301</p>
                                    <p class="mg-b-0">Tel No: 324 445-4544</p>
                                    <p class="mg-b-0">Email: youremail@companyname.com</p>
                                </div><!-- col -->
                                <div class="col-sm-6 col-lg-4 mg-t-40">
                                    <label class="tx-sans tx-uppercase tx-10 tx-medium tx-spacing-1 tx-color-03">Invoice Information</label>
                                    <ul class="list-unstyled lh-7">
                                        <li class="d-flex justify-content-between">
                                            <span>Invoice Number</span>
                                            <span>DF032AZ00022</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <span>Product ID</span>
                                            <span>32334300</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <span>Issue Date</span>
                                            <span>January 20, 2023</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <span>Due Date</span>
                                            <span>April 21, 2023</span>
                                        </li>
                                    </ul>
                                </div><!-- col -->
                            </div><!-- row -->

                            <div class="table-responsive mg-t-40">
                                <table class="table table-invoice bd-b">
                                    <thead>
                                        <tr>
                                            <th class="wd-20p">Type</th>

                                            <th class="tx-center">QNTY</th>
                                            <th class="tx-right">Unit Price</th>
                                            <th class="tx-right">Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="tx-nowrap">Website Design</td>

                                            <td class="tx-center">2</td>
                                            <td class="tx-right">$150.00</td>
                                            <td class="tx-right">$300.00</td>
                                        </tr>
                                        <tr>
                                            <td class="tx-nowrap">Firefox Plugin</td>

                                            <td class="tx-center">1</td>
                                            <td class="tx-right">$1,200.00</td>
                                            <td class="tx-right">$1,200.00</td>
                                        </tr>
                                        <tr>
                                            <td class="tx-nowrap">iPhone App</td>

                                            <td class="tx-center">2</td>
                                            <td class="tx-right">$850.00</td>
                                            <td class="tx-right">$1,700.00</td>
                                        </tr>
                                        <tr>
                                            <td class="tx-nowrap">Android App</td>

                                            <td class="tx-center">3</td>
                                            <td class="tx-right">$850.00</td>
                                            <td class="tx-right">$2,550.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="row justify-content-between">
                                <div class="col-sm-6 col-lg-6 order-2 order-sm-0 mg-t-40 mg-sm-t-0">
                                    <label class="tx-sans tx-uppercase tx-10 tx-medium tx-spacing-1 tx-color-03">Notes</label>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                                </div><!-- col -->
                                <div class="col-sm-6 col-lg-4 order-1 order-sm-0">
                                    <ul class="list-unstyled lh-7 pd-r-10">
                                        <li class="d-flex justify-content-between">
                                            <span>Sub-Total</span>
                                            <span>$5,750.00</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <span>Tax (5%)</span>
                                            <span>$287.50</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <span>Discount</span>
                                            <span>-$50.00</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Total Due</strong>
                                            <strong>$5,987.50</strong>
                                        </li>
                                    </ul>
                                </div>

                                <div class="w-100 d-flex justify-content-end">
                                    <button onclick="printContainer()" class="btn btn-white"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer mg-r-5">
                                            <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                            <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                                            <rect x="6" y="14" width="12" height="8"></rect>
                                        </svg> Print</button>
                                    <button class="btn btn-white mg-l-5"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail mg-r-5">
                                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                            <polyline points="22,6 12,13 2,6"></polyline>
                                        </svg> Email</button>
                                    <button class="btn btn-primary mg-l-5"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card mg-r-5">
                                            <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                                            <line x1="1" y1="10" x2="23" y2="10"></line>
                                        </svg> Pay</button>
                                </div><!-- col -->

                            </div><!-- row -->
                        </div><!-- container -->
                    </div>
                </div>
                <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
                    <div class="d-sm-flex align-items-center justify-content-between">


                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

<!-- Print Styles -->
<style>
    @media print {
        body * {
            visibility: hidden;
        }

        #printableContent,
        #printableContent * {
            visibility: visible;
        }

        #printableContent {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            padding: 20px;
        }

        .btn {
            display: none;
        }

        @page {
            margin: 0;
            size: auto;
            width: 100%;
            height: auto;
        }
    }
</style>

<script>
    function printContainer() {
        window.print();
    }
</script>
@endsection