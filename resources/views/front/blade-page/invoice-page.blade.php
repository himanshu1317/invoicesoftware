@extends('front.masterpage')

@section('content')





<div class="container-fluid" >
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
            <button class="btn btn-sm pd-x-15 btn-white btn-uppercase"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-save wd-10 mg-r-5"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline points="17 21 17 13 7 13 7 21"></polyline><polyline points="7 3 7 8 15 8"></polyline></svg> Save</button>
            <button class="btn btn-sm pd-x-15 btn-white btn-uppercase mg-l-5"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-upload wd-10 mg-r-5"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="17 8 12 3 7 8"></polyline><line x1="12" y1="3" x2="12" y2="15"></line></svg> Export</button>
            <button class="btn btn-sm pd-x-15 btn-white btn-uppercase mg-l-5"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 wd-10 mg-r-5"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share</button>
            <button class="btn btn-sm pd-x-15 btn-primary btn-uppercase mg-l-5"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sliders wd-10 mg-r-5"><line x1="4" y1="21" x2="4" y2="14"></line><line x1="4" y1="10" x2="4" y2="3"></line><line x1="12" y1="21" x2="12" y2="12"></line><line x1="12" y1="8" x2="12" y2="3"></line><line x1="20" y1="21" x2="20" y2="16"></line><line x1="20" y1="12" x2="20" y2="3"></line><line x1="1" y1="14" x2="7" y2="14"></line><line x1="9" y1="8" x2="15" y2="8"></line><line x1="17" y1="16" x2="23" y2="16"></line></svg> Settings</button>
          </div>
        </div>
  <div class="row">
  <div class="col-sm-3 scrollable-container">
    <div class="row">
       
    </div>
</div>


<style>
.invoice-container {
    width: 250px;
    height: 300px;
    border: 1px solid #ddd;
    padding: 10px;
    overflow: hidden;
}

.small-text {
    font-size: 10px;
    line-height: 1.2;
}

.table-nvoice {
    font-size: 9px;
}

.table-invoice th,
.table-invoice td {
    padding: 2px;
}

button {
    font-size: 10px;
    margin-top: 5px;
}

</style>

<script>
function printContainer() {
    window.print();
}
</script>


<div class="col-sm-9  " id="printableContent" >
<div class="row border border-dark m-3 ">
    <div class="col-sm-12">
<div class="row">
    <div class="col-sm-12 text-center" style="height: 200px; border:1px solid red" >
      <h1> invoice header</h1>
    </div>
</div>




    <div class="row">
    <div class="col-sm-12 text-center " style="height: 100px; border:1px solid red" >
     <h1 class="my-auto">  invoice Footer</h1>
    </div>
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
    #printableContent, #printableContent * {
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
