@extends('front.masterpage')
@section('content')

<div class="content content-fixed content-profile">
      <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
        <div class="media d-block d-lg-flex">
          <div class="profile-sidebar pd-lg-r-25  m-2 ">
            <div class="row">
              <div class="col-sm-3 col-md-2 col-lg-12">
                <div class="avatar avatar-xxl avatar-online"><img src="img/img16.jpg" class="rounded-circle" alt=""></div>
              </div><!-- col -->
              <div class="col-sm-8 col-md-7 col-lg-12 mg-t-20 mg-sm-t-0 mg-lg-t-25">
                <h5 class="mg-b-2 tx-spacing--1">Katherine Pechon</h5>
                <p class="tx-color-03 mg-b-25">Administrator</p>
                <div class="d-flex mg-b-25">
                  <button class="btn btn-xs btn-white flex-fill">Active</button>
                  <button class="btn btn-xs btn-primary flex-fill mg-l-10">Update</button>
                </div>

                <div class="d-flex">
                  <div class="profile-skillset flex-fill">
                    <h4><a href="" class="link-01">1.4k</a></h4>
                    <label>Stars</label>
                  </div>
                  <div class="profile-skillset flex-fill">
                    <h4><a href="" class="link-01">2.8k</a></h4>
                    <label>Followers</label>
                  </div>
                  <div class="profile-skillset flex-fill">
                    <h4><a href="" class="link-01">437</a></h4>
                    <label>Following</label>
                  </div>
                </div>
              </div><!-- col -->
            
            </div><!-- row -->

          </div><!-- profile-sidebar -->
         
         
        </div><!-- media -->
      </div><!-- container -->
    </div>

@endsection
