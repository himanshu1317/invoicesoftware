@extends('front.masterpage')

@section('content')

<style>

.invoice-footer {
    /* background: #222; */
    /* color: #fff; */
    text-align: center;
    padding: 30px 20px;
    font-size: 14px;
    border-top: 4px solid #ff5733;
}

.footer-container {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    gap: 20px;
}

.footer-logo img {
    max-width: 120px;
    border-radius: 10px;
}

.footer-info h3 {
    font-size: 18px;
    margin-bottom: 5px;
    font-weight: bold;
    color: #ffbd69;
}

.footer-info p {
    margin: 5px 0;
    font-size: 14px;
}

.footer-info a {
    color: #33d9b2;
    text-decoration: none;
    font-weight: bold;
    transition: 0.3s;
}

.footer-info a:hover {
    color: #ffbd69;
    text-decoration: underline;
}

.footer-bottom {
    margin-top: 20px;
}

.footer-line {
    width: 100%;
    margin: 10px auto;
    border: none;
    height: 3px;
    /* border-bottom: 3px solid #ff5733; */
    background: #ff5733;
}

.copyright {
    font-size: 12px;
    color: #bbb;
    margin-top: 10px;
}


.invoice-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 15px 20px;
    border-bottom: 3px solid #ff5733;
}

.logo img {
    max-width: 120px; /* Adjust logo size */
    height: auto;
}

.company-details {
    flex-grow: 1; /* Allow text to take up space */
    text-align: center;
}

.company-name {
    font-size: 1.8rem;
    font-weight: bold;
    text-transform: uppercase;
}

.address {
    font-size: 1rem;
    color: #666;
}


.custom-hr-container {
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 20px 0;
    gap: 10px;
}


.arrow-left, .arrow-right {
    font-size: 24px;
    color: #ff5733;
    font-weight: bold;
}




.terms-container ul {
    list-style: disc;
    padding-left: 20px;
}

.terms-container ul li {
    margin-bottom: 8px;
    line-height: 1.5;
}

.agreement {
    font-weight: bold;
    color: #d9534f;
    text-align: center;
}



:root {
  --background-color: black;
  --text-color: hsl(0, 100.00%, 50.40%);
}


.wrapper {
  display: grid;
  place-content: center;
  /* background-color: var(--background-color); */
  /* min-height: 100vh; */
  font-family: "Oswald", sans-serif;
  font-size: clamp(1.5rem, 1rem + 18vw, 2rem);
  font-weight: 700;
  text-transform: uppercase;
  color: var(--text-color);
}

.wrapper > div {
  grid-area: 1/1/-1/-1;
}
.top {
  clip-path: polygon(0% 0%, 100% 0%, 100% 48%, 0% 58%);
}
.bottom {
  clip-path: polygon(0% 60%, 100% 50%, 100% 100%, 0% 100%);
  color: transparent;
  background: -webkit-linear-gradient(177deg, black 53%, var(--text-color) 65%);
  background: linear-gradient(177deg, black 53%, var(--text-color) 75%);
  background-clip: text;
  -webkit-background-clip: text;
  transform: translateX(-0.02em);
}


    .invoice-header {
        text-align: center;
        /* padding: 25px; */
        /* background-color: #007bff; */
        /* color: white; */
        border-radius: 8px;
        margin-bottom: 20px;
    }

    .invoice-header h1 {
        margin: 0;
        font-size: 28px;
        letter-spacing: 1px;
    }

    .invoice-header p {
        margin: 5px 0;
        font-size: 14px;
    }

    .contact {
        font-weight: bold;
        font-size: 16px;
    }
</style>




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
                    <table class="table table-hover align-middle shadow-sm border rounded">
    <thead class="table-dark">
        <tr>
            <th class="text-center" style="width: 50px;">
                <input type="checkbox" class="form-check-input">
            </th>
            <th>Customer Name</th>
            <th>Invoice Number</th>
            <th>Invoice Date</th>
            <th>Due Date</th>
            <th class="text-end">Amount</th>
            <th class="text-center">Status</th>
        </tr>
    </thead>
    <tbody>
        @if ($invoices->count() > 0)
            @foreach ($invoices as $invoice)
                <tr>
                    <!-- Checkbox -->
                    <td class="text-center">
                        <input type="checkbox" class="form-check-input">
                    </td>

                    <!-- Customer Name -->
                    <td>
                        <strong class="text-dark">
                            {{ $invoice->customer->name ?? 'N/A' }} {{ $invoice->customer->lastname ?? '' }}
                        </strong>
                    </td>

                    <!-- Invoice Number -->
                    <td>
                        <a href="#/invoices/{{ $invoice->id }}" class="btn btn-sm btn-outline-primary">
                            #{{ $invoice->invoice_number }}
                        </a>
                    </td>

                    <!-- Invoice Date -->
                    <td>
                        <span class="text-muted">
                            {{ \Carbon\Carbon::parse($invoice->invoice_date)->format('d M, Y') }}
                        </span>
                    </td>

                    <!-- Due Date -->
                    <td>
                        <span class="text-muted">
                            {{ \Carbon\Carbon::parse($invoice->due_date)->format('d M, Y') }}
                        </span>
                    </td>

                    <!-- Amount -->
                    <td class="text-end">
                        <span class="badge bg-success p-2">₹{{ number_format($invoice->paid_amount, 2) }}</span>
                    </td>

                    <!-- Status -->
                    <td class="text-center">
                        <span class="badge {{ now()->gt(\Carbon\Carbon::parse($invoice->due_date)) ? 'bg-danger' : 'bg-warning' }}">
                            {{ now()->gt(\Carbon\Carbon::parse($invoice->due_date)) ? 'Overdue' : 'Due in ' . now()->diffInDays(\Carbon\Carbon::parse($invoice->due_date)) . ' days' }}
                        </span>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="7" class="text-center text-muted py-4">No invoices found.</td>
            </tr>
        @endif
    </tbody>
</table>

                    </div>
                </div>






            </div>
        </div>




        <script>
            function printContainer() {
                window.print();
            }
        </script>

        <div class="col-sm-8  ">
            <div class="row shadow  m-1">
                <div class="  col-sm-12" id="printableContent">
                <div class="container">
    <div class="invoice-header d-flex align-items-center justify-content-between">
        <!-- Company Logo -->
        <div class="logo">
            <img src="{{ asset('images/inv-logo.png') }}" alt="Company Logo">
        </div>
        
        <!-- Company Name & Address -->
        <div class="company-details text-center">
            <h1 class="company-name">Digivity Technology Pvt. Ltd.</h1>
            <p class="address">Plot No. 2, Knowledge Park III, Greater Noida, Uttar Pradesh 201306</p>
        </div>
    </div>
</div>

                    <div class="row">

                        <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0 px-5">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label class="tx-sans tx-uppercase tx-10 tx-medium tx-spacing-1 tx-color-03">Billed From</label>
                                    <h6 class="tx-15 mg-b-10">Digivity Technology Pvt. Ltd.</h6>
                                    <p class="mg-b-0">Plot No. 2, Knowledge Park III, Greater Noida, Uttar Pradesh 201306</p>
                                    <p class="mg-b-0">+91 8299898209</p>
                                    <p class="mg-b-0">digivity.in@gmail.com</p>
                                </div><!-- col -->
                                <div class="col-sm-6 tx-right d-none d-md-block">
                                    <label class="tx-sans tx-uppercase tx-10 tx-medium tx-spacing-1 tx-color-03">Invoice Number</label>
                                    <h1 class="tx-normal tx-color-04 mg-b-10 tx-spacing--2">#{{ $invoice->invoice_number }}</h1>
                                </div><!-- col -->
                                <div class="col-sm-6 col-lg-8 mg-t-40 mg-sm-t-0 mg-md-t-40">
                                    <label class="tx-sans tx-uppercase tx-10 tx-medium tx-spacing-1 tx-color-03">Billed To</label>
                                    <p class="mg-b-0">{{ $invoice->customer->address ?? '' }}</p>
                                    <p class="mg-b-0">{{ $invoice->customer->phone ?? '' }}</p>
                                    <p class="mg-b-0">{{ $invoice->customer->email ?? '' }}</p>
                                </div><!-- col -->
                                <div class="col-sm-6 col-lg-4 mg-t-40">
                                    <label class="tx-sans tx-uppercase tx-10 tx-medium tx-spacing-1 tx-color-03">Invoice Information</label>
                                    <ul class="list-unstyled lh-7">
                                        <!-- <li class="d-flex justify-content-between">
                                            <span>Invoice Number</span>
                                            <span>DF032AZ00022</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <span>Product ID</span>
                                            <span>32334300</span>
                                        </li> -->
                                        <li class="d-flex justify-content-between">
                                            <span>Issue Date</span>
                                            <span>{{ $invoice->invoice_date }}</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <span>Due Date</span>
                                            <span>{{ $invoice->due_date }}</span>
                                        </li>
                                    </ul>
                                </div><!-- col -->
                            </div><!-- row -->

                            <div class="table-responsive mg-t-40">
                                <table class="table table-invoice bd-b">
                                    <thead class="text-center">
                                        <tr class="bg-dark text-light">
                                            <th class="wd-20p">Product Name</th>

                                            <th class="tx-center">QNTY</th>
                                            <th class="tx-center">Unit Price</th>
                                            <th class="tx-center">Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">


                                    @foreach ($invoice->items as $item)
    <tr>
        <td>{{ $item->product_name }}</td>
        <td>{{ $item->quantity }}</td>
        <td>₹{{ number_format($item->unit_price, 2) }}</td>
    </tr>
@endforeach



                                    </tbody>
                                </table>
                            </div>

                            <div class="row justify-content-between">
                                <div class="col-sm-6 col-lg-6 order-2 order-sm-0 mg-t-40 mg-sm-t-0">
                                    <label class="tx-sans tx-uppercase tx-10 tx-medium tx-spacing-1 tx-color-03">Notes</label>
                                    <p>
                                        {{ $invoice->customer_note }}
                                    </p>


                                </div><!-- col -->
                                <div class="col-sm-6 col-lg-4 order-1 order-sm-0">
                                    <ul class="list-unstyled lh-7 pd-r-10">
                                        <li class="d-flex justify-content-between">
                                            <span>Sub-Total</span>
                                            <span>₹{{ number_format($item->quantity + $item->unit_price, 2) }}</span>
                                        </li>
                                        <!-- <li class="d-flex justify-content-between">
                                            <span>Tax (5%)</span>
                                            <span>00.00</span>
                                        </li> -->
                                        <li class="d-flex justify-content-between">
                                            <span>Discount</span>
                                            <span>{{ $item->itemdiscount }} 
                                            {{ $item->itemdiscounttype == 'percentage' ? '%' : '₹' }}

                                        
                                        
                                        </span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Total </strong>
                                            <strong>{{ $item->itemdiscount }} </strong>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Paid </strong>
                                            <strong>{{ $invoice->paid_amount }}</strong>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Balance</strong>
                                            <strong>{{ $invoice->due_amount }}</strong>
                                        </li>
                                    </ul>
                                </div>
                                <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0 ">
                    <div class="d-sm-flex align-items-center justify-content-between">
                   <div class="terms-container">
                   


    <h5 >Terms & Conditions :-</h5>
    <p>Welcome to <strong>Digivity Technology Pvt. Ltd.</strong>! Please read these terms and conditions carefully before proceeding.</p>
    
    <ul>
        <li><strong>Payment Terms:</strong> All invoices must be paid within 15 days of issuance. Late payments may incur additional charges.</li>
        <li><strong>Product/Service Warranty:</strong> Our products/services come with a standard 6-month warranty. Any misuse or unauthorized modifications void the warranty.</li>
        <!-- <li><strong>Refund Policy:</strong> Refunds are only applicable within 7 days of purchase, provided the product/service is unused.</li>
        <li><strong>Liability:</strong> We are not responsible for any direct or indirect damages caused due to improper usage.</li>
        <li><strong>Changes to Terms:</strong> We reserve the right to update these terms at any time without prior notice.</li> -->
    </ul>

    <p>For any queries, please contact us at <a href="mailto:digivity.in@gmail.com">digivity.in@gmail.com</a>.</p>

    <p class="agreement">By proceeding, you agree to abide by these terms and conditions.</p>
</div> 


                    </div>
                </div>
                               
    <div class="footer-bottom text-center">
        <hr class="footer-line">
        <p class="copyright">© 2025 Digivity Technology Pvt. Ltd. | All Rights Reserved</p>
    </div>




                                <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0 ">
                    <div class="d-sm-flex align-items-center justify-content-between">
                    <!-- <div class="terms-container">
                   


    <h2>Terms & Conditions</h2>
    <p>Welcome to <strong>Digivity Technology Pvt. Ltd.</strong>! Please read these terms and conditions carefully before proceeding.</p>
    
    <ul>
        <li><strong>Payment Terms:</strong> All invoices must be paid within 15 days of issuance. Late payments may incur additional charges.</li>
        <li><strong>Product/Service Warranty:</strong> Our products/services come with a standard 6-month warranty. Any misuse or unauthorized modifications void the warranty.</li>
        <li><strong>Refund Policy:</strong> Refunds are only applicable within 7 days of purchase, provided the product/service is unused.</li>
        <li><strong>Liability:</strong> We are not responsible for any direct or indirect damages caused due to improper usage.</li>
        <li><strong>Changes to Terms:</strong> We reserve the right to update these terms at any time without prior notice.</li>
    </ul>

    <p>For any queries, please contact us at <a href="mailto:digivity.in@gmail.com">digivity.in@gmail.com</a>.</p>

    <p class="agreement">By proceeding, you agree to abide by these terms and conditions.</p>
</div> -->


                    </div>
                </div>

                              

                            </div><!-- row -->
                        </div><!-- container -->
                    </div>
                </div>
               
            </div>
        </div>


    </div>


    <div class="w-100 d-flex justify-content-end py-4">
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