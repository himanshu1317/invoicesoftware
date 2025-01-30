@extends('front.masterpage')

@section('content')



<div class="container ">
<div class="content tx-13 ">
      <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0 w-75">
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
            <h6 class="tx-15 mg-b-10">Juan Dela Cruz</h6>
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
                <!-- <th class="wd-40p d-none d-sm-table-cell">Description</th> -->
                <th class="tx-center">QNTY</th>
                <th class="tx-right">Unit Price</th>
                <th class="tx-right">Amount</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="tx-nowrap">Website Design</td>
                <!-- <td class="d-none d-sm-table-cell tx-color-03">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam...</td> -->
                <td class="tx-center">2</td>
                <td class="tx-right">$150.00</td>
                <td class="tx-right">$300.00</td>
              </tr>
              <tr>
                <td class="tx-nowrap">Firefox Plugin</td>
                <!-- <td class="d-none d-sm-table-cell tx-color-03">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque...</td> -->
                <td class="tx-center">1</td>
                <td class="tx-right">$1,200.00</td>
                <td class="tx-right">$1,200.00</td>
              </tr>
              <tr>
                <td class="tx-nowrap">iPhone App</td>
                <!-- <td class="d-none d-sm-table-cell tx-color-03">Et harum quidem rerum facilis est et expedita distinctio</td> -->
                <td class="tx-center">2</td>
                <td class="tx-right">$850.00</td>
                <td class="tx-right">$1,700.00</td>
              </tr>
              <tr>
                <td class="tx-nowrap">Android App</td>
                <!-- <td class="d-none d-sm-table-cell tx-color-03">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut</td> -->
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

            <button class="btn btn-secondary w-100" onclick="printPage()">Print</button>

           
          </div><!-- col -->
        </div><!-- row -->
      </div><!-- container -->
    </div>
</div>

<style>
@media print {

    .btn {
        display: none; /* Hide buttons during print */
    }
}
</style>

<script>
    
function printPage() {
    window.print();
}


</script>


@endsection