@extends('front.masterpage')

@section('content')

<div id="loader">
    <div class="spinner"></div>
</div>

<div class="container-fluid  mb-3 d-flex flex-column min-vh-100">
  <div class="row my-3">
    <div class="col-12">
      <div class="card card-body bg-dark">
        <div class="d-md-flex align-items-center justify-content-between">
          <div class="media align-sm-items-center">
            <div class="media-body mg-l-15">
              <div class="d-flex align-items-baseline">
                <div class="dropdown">
                  <a class="btn  dropdown-toggle text-light" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Active Customers
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">All Customers</a>
                    <a class="dropdown-item" href="#">Active Customers</a>
                    <a class="dropdown-item" href="#">Duplicate Customers</a>
                    <a class="dropdown-item" href="#">Inactive Customers</a>
                    <a class="dropdown-item" href="#">Customer Portal Enable</a>
                    <a class="dropdown-item" href="#">Customer Portal Disable</a>
                    <a class="dropdown-item" href="#">Overdue Customers</a>
                    <a class="dropdown-item" href="#">Unpaid Customers</a>
                    <a class="dropdown-item" href="#">New Customers View</a>
                  </div>
                </div>
              </div>
            </div><!-- media-body -->
          </div><!-- media -->
          <div class="d-flex flex-column flex-sm-row mg-t-20 mg-md-t-0">
            <a href="{{route('customer.form')}}" class="btn btn-sm btn-primary btn-uppercase pd-x-15">Add New </a>
            <button class="btn btn-sm btn-white btn-uppercase pd-x-15 mg-t-5 mg-sm-t-0 mg-sm-l-5">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 mg-r-5">
                <circle cx="18" cy="5" r="3"></circle>
                <circle cx="6" cy="12" r="3"></circle>
                <circle cx="18" cy="19" r="3"></circle>
                <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
              </svg> Export Data
            </button>
            <button class="btn btn-sm btn-white btn-uppercase pd-x-15 mg-t-5 mg-sm-t-0 mg-sm-l-5">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye mg-r-5">
                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                <circle cx="12" cy="12" r="3"></circle>
              </svg> Report
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Table Section -->
  <div class="row">
    <div class="col-12">
      <table class="table table-custom" id="example" style="width:100%">
        <thead>
          <tr>
            <th>S.no</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Company</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($customers as $customer)
            <tr>
              <td>{{  $loop->iteration }}</td>
              <td>{{ $customer->name }}</td>
              <td>{{ $customer->email }}</td>
              <td>{{ $customer->phone }}</td>
              <td>{{ $customer->address }}</td>
             
              <td>
    <div class="dropdown">
        <button class="btn btn-sm btn-danger dropdown-toggle" type="button" id="actionDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            Action
        </button>
        <ul class="dropdown-menu" aria-labelledby="actionDropdown">
            <li><a class="dropdown-item" href="{{route('create-invoice')}}">Make Invoice</a></li>
            <li><a class="dropdown-item" href="#">Change Status</a></li>
            <li><a class="dropdown-item" href="#">Download</a></li>
            <li><a class="dropdown-item" href="#">Details</a></li>
        </ul>
    </div>
</td>

              
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

</div>

@endsection

@push('scripts')
  <script>
    $(document).ready(function() {
      $('#example').DataTable({
        responsive: true,
        paging: true,
        searching: true,
        ordering: true
      });
    });
  </script>
@endpush

