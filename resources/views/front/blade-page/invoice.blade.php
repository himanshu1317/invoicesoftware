@extends('front.masterpage')



@section('content')



<div class="container">
  <div class="row my-3">
    <div class="col-12">
      <div class="card card-body">
        <div class="d-md-flex align-items-center justify-content-between">
          <div class="media align-sm-items-center">

            <div class="media-body mg-l-15">
              <div class="d-flex align-items-baseline">
                <div class="dropdown ">
                  <a class="btn  dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Active Customers
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">All Customers</a>
                    <a class="dropdown-item" href="#">Active Customers </a>
                    <a class="dropdown-item" href="#">Duplicate Customers</a>
                    <a class="dropdown-item" href="#">Inactive Customers</a>
                    <a class="dropdown-item" href="#">Customer Portal Enable</a>
                    <a class="dropdown-item" href="#">Customer Portal Desable</a>
                    <a class="dropdown-item" href="#">Overdue Customers</a>
                    <a class="dropdown-item" href="#">Unpaid Customers</a>
                    <a class="dropdown-item" href="#">New Customers View</a>


                  </div>
                </div>

              </div>
            </div><!-- media-body -->
          </div><!-- media -->
          <div class="d-flex flex-column flex-sm-row mg-t-20 mg-md-t-0">
            <a href="{{route('invoice-form')}}" class="btn btn-sm btn-primary btn-uppercase pd-x-15">
              New</a>
            <button class="btn btn-sm btn-white btn-uppercase pd-x-15 mg-t-5 mg-sm-t-0 mg-sm-l-5"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 mg-r-5">
                <circle cx="18" cy="5" r="3"></circle>
                <circle cx="6" cy="12" r="3"></circle>
                <circle cx="18" cy="19" r="3"></circle>
                <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
              </svg> Share</button>
            <button class="btn btn-sm btn-white btn-uppercase pd-x-15 mg-t-5 mg-sm-t-0  mg-sm-l-5"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye mg-r-5">
                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                <circle cx="12" cy="12" r="3"></circle>
              </svg> Watch</button>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="row">
    <div data-label="example" class="df-example demo-table">
      <!-- <div id="example_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length" id="example_length"><label><select name="example_length" aria-controls="example" class="select2-hidden-accessible" data-select2-id="select2-data-1-nd68" tabindex="-1" aria-hidden="true"><option value="10" data-select2-id="select2-data-3-hw86">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-2-4kki" style="width: 58px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-example_length-6e-container" aria-controls="select2-example_length-6e-container"><span class="select2-selection__rendered" id="select2-example_length-6e-container" role="textbox" aria-readonly="true" title="10">10</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> items/page</label></div><div id="example_filter" class="dataTables_filter"><label><input type="search" class="" placeholder="Search..." aria-controls="example"></label></div> -->
      <table id="example" class="display responsive nowrap" style="width:100%" aria-describedby="example_info">
        <thead>
          <tr>
          <th class="wd-25p sorting " tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 108.062px;">S.no</th>
            <th class="wd-25p sorting " tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 108.062px;">Name</th>
            <th class="wd-25p sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 170.469px;">Email</th>
            <th class="wd-25p sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 102.562px;">Mobile</th>
            <th class="wd-25p sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 64.4688px;">Company</th>
            <th class="wd-20p sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 100.438px;">Action</th>
          </tr>
        </thead>
        <tbody>
      
@foreach ($invoice as $invlist )
<tr>
  <td>{{$invlist->id}}</td>
</tr>

@endforeach


        </tbody>
      </table>
      <!-- <div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div><div class="dataTables_paginate paging_simple_numbers" id="example_paginate"><a class="paginate_button previous disabled" aria-controls="example" aria-disabled="true" aria-role="link" data-dt-idx="previous" tabindex="-1" id="example_previous">Previous</a><span><a class="paginate_button current" aria-controls="example" aria-role="link" aria-current="page" data-dt-idx="0" tabindex="0">1</a><a class="paginate_button " aria-controls="example" aria-role="link" data-dt-idx="1" tabindex="0">2</a><a class="paginate_button " aria-controls="example" aria-role="link" data-dt-idx="2" tabindex="0">3</a><a class="paginate_button " aria-controls="example" aria-role="link" data-dt-idx="3" tabindex="0">4</a><a class="paginate_button " aria-controls="example" aria-role="link" data-dt-idx="4" tabindex="0">5</a><a class="paginate_button " aria-controls="example" aria-role="link" data-dt-idx="5" tabindex="0">6</a></span><a class="paginate_button next" aria-controls="example" aria-role="link" data-dt-idx="next" tabindex="0" id="example_next">Next</a></div></div> -->
    </div>
  </div>
</div>







@endsection