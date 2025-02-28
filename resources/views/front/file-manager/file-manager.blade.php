@extends('front.masterpage')

@section('content')


<div id="loader">
  <div class="spinner"></div>
</div>
<div class="container-fluid">

  <div class="col-sm-12">

    <!-- Professional Tab Navigation -->
    <div class="nav-container">
      <ul class="nav-tabs-custom" role="tablist">
        <li><a href="#filedashboard" class="active" data-bs-toggle="tab" role="tab">Dashboard</a></li>
        <li><a href="#maildata" data-bs-toggle="tab" role="tab">File</a></li>

        <!-- Report Dropdown -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">
            Report
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#salesReport" data-bs-toggle="tab">Sales Report</a></li>
            <li><a class="dropdown-item" href="#customerReport" data-bs-toggle="tab">Customer Report</a></li>
            <li><a class="dropdown-item" href="#paymentReport" data-bs-toggle="tab">Payment Report</a></li>
          </ul>
        </li>

        <li><a href="#mailsetting" data-bs-toggle="tab" role="tab">Setting</a></li>
      </ul>
    </div>



    <div class="tab-content">


      <!-- start customer dashboard -->
      <div class="tab-pane fade show active" id="filedashboard" role="tabpanel">

        <div class="content-body" id="content">
          <div class=" pd-x-0">

            <div class="row row-xs">
              <div class="col-lg-8 col-xl-9">
                <div class="card">
                  <div class="card-header bd-b-0 pd-t-20 pd-lg-t-25 pd-l-20 pd-lg-l-25 d-flex flex-column flex-sm-row align-items-sm-start justify-content-sm-between">
                    <div>
                      <h6 class="mg-b-5">Website Audience Metrics</h6>
                      <p class="tx-12 tx-color-03 mg-b-0">Audience to which the users belonged while on the current date range.</p>
                    </div>
                    <div class="btn-group mg-t-20 mg-sm-t-0">
                      <button class="btn btn-xs btn-white btn-uppercase">Day</button>
                      <button class="btn btn-xs btn-white btn-uppercase">Week</button>
                      <button class="btn btn-xs btn-white btn-uppercase active">Month</button>
                    </div><!-- btn-group -->
                  </div><!-- card-header -->
                  <div class="card-body pd-lg-25">
                    <div class="row align-items-sm-end">
                      <div class="col-lg-7 col-xl-8">
                        <div class="chart-six"><canvas id="chartBar1"></canvas></div>
                      </div>
                      <div class="col-lg-5 col-xl-4 mg-t-30 mg-lg-t-0">
                        <div class="row">
                          <div class="col-sm-6 col-lg-12">
                            <div class="d-flex align-items-center justify-content-between mg-b-5">
                              <h6 class="tx-uppercase tx-10 tx-spacing-1 tx-color-02 tx-semibold mg-b-0">New Users</h6>
                              <span class="tx-10 tx-color-04">65% goal reached</span>
                            </div>
                            <div class="d-flex align-items-end justify-content-between mg-b-5">
                              <h5 class="tx-normal tx-rubik lh-2 mg-b-0">13,596</h5>
                              <h6 class="tx-normal tx-rubik tx-color-03 lh-2 mg-b-0">20,000</h6>
                            </div>
                            <div class="progress ht-4 mg-b-0 op-5">
                              <div class="progress-bar bg-teal wd-65p" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                          <div class="col-sm-6 col-lg-12 mg-t-30 mg-sm-t-0 mg-lg-t-30">
                            <div class="d-flex align-items-center justify-content-between mg-b-5">
                              <h6 class="tx-uppercase tx-10 tx-spacing-1 tx-color-02 tx-semibold mg-b-0">Page Views</h6>
                              <span class="tx-10 tx-color-04">45% goal reached</span>
                            </div>
                            <div class="d-flex justify-content-between mg-b-5">
                              <h5 class="tx-normal tx-rubik mg-b-0">83,123</h5>
                              <h5 class="tx-normal tx-rubik tx-color-03 mg-b-0"><small>250,000</small></h5>
                            </div>
                            <div class="progress ht-4 mg-b-0 op-5">
                              <div class="progress-bar bg-orange wd-45p" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                          <div class="col-sm-6 col-lg-12 mg-t-30">
                            <div class="d-flex align-items-center justify-content-between mg-b-5">
                              <h6 class="tx-uppercase tx-10 tx-spacing-1 tx-color-02 tx-semibold mg-b-0">Page Sessions</h6>
                              <span class="tx-10 tx-color-04">20% goal reached</span>
                            </div>
                            <div class="d-flex justify-content-between mg-b-5">
                              <h5 class="tx-normal tx-rubik mg-b-0">16,869</h5>
                              <h5 class="tx-normal tx-rubik tx-color-03 mg-b-0"><small>85,000</small></h5>
                            </div>
                            <div class="progress ht-4 mg-b-0 op-5">
                              <div class="progress-bar bg-pink wd-20p" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                          <div class="col-sm-6 col-lg-12 mg-t-30">
                            <div class="d-flex align-items-center justify-content-between mg-b-5">
                              <h6 class="tx-uppercase tx-10 tx-spacing-1 tx-color-02 tx-semibold mg-b-0">Bounce Rate</h6>
                              <span class="tx-10 tx-color-04">85% goal reached</span>
                            </div>
                            <div class="d-flex justify-content-between mg-b-5">
                              <h5 class="tx-normal tx-rubik mg-b-0">28.50%</h5>
                              <h5 class="tx-normal tx-rubik tx-color-03 mg-b-0"><small>30.50%</small></h5>
                            </div>
                            <div class="progress ht-4 mg-b-0 op-5">
                              <div class="progress-bar bg-primary wd-85p" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div><!-- row -->

                      </div>
                    </div>
                  </div><!-- card-body -->
                </div><!-- card -->
              </div>
              <div class="col-md-6 col-lg-4 col-xl-3 mg-t-10 mg-lg-t-0">
                <div class="card">
                  <div class="card-header">
                    <h6 class="mg-b-0">Sessions By Channel</h6>
                  </div><!-- card-header -->
                  <div class="card-body pd-lg-25">
                    <div class="chart-seven"><canvas id="chartDonut"></canvas></div>
                  </div><!-- card-body -->
                  <div class="card-footer pd-20">
                    <div class="row">
                      <div class="col-6">
                        <p class="tx-10 tx-uppercase tx-medium tx-color-03 tx-spacing-1 tx-nowrap mg-b-5">Organic Search</p>
                        <div class="d-flex align-items-center">
                          <div class="wd-10 ht-10 rounded-circle bg-pink mg-r-5"></div>
                          <h6 class="tx-normal tx-rubik mg-b-0">1,320 <small class="tx-color-04">25%</small></h6>
                        </div>
                      </div><!-- col -->
                      <div class="col-6">
                        <p class="tx-10 tx-uppercase tx-medium tx-color-03 tx-spacing-1 mg-b-5">Email</p>
                        <div class="d-flex align-items-center">
                          <div class="wd-10 ht-10 rounded-circle bg-primary mg-r-5"></div>
                          <h6 class="tx-normal tx-rubik mg-b-0">987 <small class="tx-color-04">20%</small></h6>
                        </div>
                      </div><!-- col -->
                      <div class="col-6 mg-t-20">
                        <p class="tx-10 tx-uppercase tx-medium tx-color-03 tx-spacing-1 mg-b-5">Referrral</p>
                        <div class="d-flex align-items-center">
                          <div class="wd-10 ht-10 rounded-circle bg-teal mg-r-5"></div>
                          <h6 class="tx-normal tx-rubik mg-b-0">2,010 <small class="tx-color-04">30%</small></h6>
                        </div>
                      </div><!-- col -->
                      <div class="col-6 mg-t-20">
                        <p class="tx-10 tx-uppercase tx-medium tx-color-03 tx-spacing-1 mg-b-5">Social Media</p>
                        <div class="d-flex align-items-center">
                          <div class="wd-10 ht-10 rounded-circle bg-orange mg-r-5"></div>
                          <h6 class="tx-normal tx-rubik mg-b-0">1,054 <small class="tx-color-04">25%</small></h6>
                        </div>
                      </div><!-- col -->
                    </div><!-- row -->
                  </div><!-- card-footer -->
                </div><!-- card -->
              </div>
              <div class="col-md-6 col-lg-5 mg-t-10">
                <div class="card">
                  <div class="card-header pd-b-0 bd-b-0 pd-t-20 pd-lg-t-25 pd-l-20 pd-lg-l-25">
                    <h6 class="mg-b-5">Acquisition</h6>
                    <p class="tx-12 tx-color-03 mg-b-0">Tells you where your visitors originated from, such as search engines, social networks or website referrals. <a href="#">Learn more</a></p>
                  </div><!-- card-header -->
                  <div class="card-body pd-sm-20 pd-lg-25">
                    <div class="row row-sm">
                      <div class="col-sm-5 col-md-12 col-lg-6 col-xl-5">
                        <div class="media">
                          <div class="wd-40 ht-40 rounded bd bd-2 bd-primary d-flex flex-shrink-0 align-items-center justify-content-center op-6">
                            <i data-feather="bar-chart-2" class="wd-20 ht-20 tx-primary stroke-wd-3"></i>
                          </div>
                          <div class="media-body mg-l-10">
                            <h4 class="tx-normal tx-rubik tx-spacing--2 lh-1 mg-b-5">33.50%</h4>
                            <p class="tx-10 tx-uppercase tx-medium tx-color-03 tx-spacing-1 tx-nowrap mg-b-0">Bounce Rate</p>
                          </div><!-- media-body -->
                        </div><!-- media -->
                      </div><!-- col -->
                      <div class="col-sm-5 col-md-12 col-lg-6 col-xl-5 mg-t-20 mg-sm-t-0 mg-md-t-20 mg-lg-t-0">
                        <div class="media">
                          <div class="wd-40 ht-40 rounded bd bd-2 bd-gray-500 d-flex flex-shrink-0 align-items-center justify-content-center op-6">
                            <i data-feather="bar-chart-2" class="wd-20 ht-20 tx-gray-500 stroke-wd-3"></i>
                          </div>
                          <div class="media-body mg-l-10">
                            <h4 class="tx-normal tx-rubik tx-spacing--2 lh-1 mg-b-5">9,065</h4>
                            <p class="tx-10 tx-uppercase tx-medium tx-color-03 tx-spacing-1 tx-nowrap mg-b-0">Page Sessions</p>
                          </div><!-- media-body -->
                        </div><!-- media -->
                      </div><!-- col -->
                    </div><!-- row -->

                    <div class="chart-eight">
                      <div id="flotChart1" class="flot-chart"></div>
                    </div>
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- col -->
              <div class="col-sm-7 col-md-8 col-lg-4 col-xl mg-t-10">
                <div class="card">
                  <div class="card-header">
                    <h6 class="mg-b-0">Device Sessions</h6>
                  </div><!-- card-header -->
                  <div class="card-body">
                    <div class="row row-xs">
                      <div class="col-4 col-lg">
                        <div class="d-flex align-items-baseline">
                          <span class="d-block wd-8 ht-8 rounded-circle bg-primary"></span>
                          <span class="d-block tx-10 tx-uppercase tx-medium tx-spacing-1 tx-color-03 mg-l-7">Mobile</span>
                        </div>
                        <h4 class="tx-normal tx-rubik tx-spacing--1 mg-l-15 mg-b-0">6,098</h4>
                      </div><!-- col -->
                      <div class="col-4 col-lg">
                        <div class="d-flex align-items-baseline">
                          <span class="d-block wd-8 ht-8 rounded-circle bg-teal"></span>
                          <span class="d-block tx-10 tx-uppercase tx-medium tx-spacing-1 tx-color-03 mg-l-7">Desktop</span>
                        </div>
                        <h4 class="tx-normal tx-rubik tx-spacing--1 mg-l-15 mg-b-0">3,902</h4>
                      </div><!-- col -->
                      <div class="col-4 col-lg">
                        <div class="d-flex align-items-baseline">
                          <span class="d-block wd-8 ht-8 rounded-circle bg-gray-300"></span>
                          <span class="d-block tx-10 tx-uppercase tx-medium tx-spacing-1 tx-color-03 mg-l-7">Other</span>
                        </div>
                        <h4 class="tx-normal tx-rubik tx-spacing--1 mg-l-15 mg-b-0">1,065</h4>
                      </div><!-- col -->
                    </div><!-- row -->

                    <div class="chart-nine">
                      <div id="flotChart2" class="flot-chart"></div>
                    </div>
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- col -->
              <div class="col-sm-5 col-md-4 col-lg-3 mg-t-10">
                <div class="card">
                  <div class="card-header">
                    <h6 class="mg-b-0">Top Traffic Source</h6>
                  </div><!-- card-header -->
                  <div class="card-body tx-center">
                    <h4 class="tx-normal tx-rubik tx-40 tx-spacing--1 mg-b-0">29,931</h4>
                    <p class="tx-12 tx-uppercase tx-semibold tx-spacing-1 tx-color-02">Organic Search</p>
                    <p class="tx-12 tx-color-03 mg-b-0">Measures your user's sources that generate traffic metrics to your website for this month.</p>
                  </div><!-- card-body -->
                  <div class="card-footer bd-t-0 pd-t-0">
                    <div class="d-grid">
                      <button class="btn btn-sm btn-block btn-outline-primary btn-uppercase tx-spacing-1">Learn More</button>
                    </div>
                  </div><!-- card-footer -->
                </div><!-- card -->
              </div><!-- col -->
              <div class="col-lg-4 col-md-6 mg-t-10">
                <div class="card">
                  <div class="card-body pd-y-20 pd-x-25">
                    <div class="row row-sm">
                      <div class="col-7">
                        <h3 class="tx-normal tx-rubik tx-spacing--1 mg-b-5">3,605</h3>
                        <h6 class="tx-12 tx-semibold tx-uppercase tx-spacing-1 tx-primary mg-b-5">Click Through</h6>
                        <p class="tx-11 tx-color-03 mg-b-0">No. of clicks to ad that consist of a single impression.</p>
                      </div>
                      <div class="col-5">
                        <div class="chart-ten">
                          <div id="flotChart3" class="flot-chart"></div>
                        </div>
                      </div>
                    </div>
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- col -->
              <div class="col-lg-4 col-md-6 mg-t-10">
                <div class="card">
                  <div class="card-body pd-y-20 pd-x-25">
                    <div class="row row-sm">
                      <div class="col-7">
                        <h3 class="tx-normal tx-rubik tx-spacing--1 mg-b-5">3,266</h3>
                        <h6 class="tx-12 tx-semibold tx-uppercase tx-spacing-1 tx-teal mg-b-5">View Through</h6>
                        <p class="tx-11 tx-color-03 mg-b-0">Estimated daily unique views per visitor on the ads.</p>
                      </div>
                      <div class="col-5">
                        <div class="chart-ten">
                          <div id="flotChart4" class="flot-chart"></div>
                        </div>
                      </div>
                    </div>
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- col -->
              <div class="col-lg-4 col-md-6 mg-t-10">
                <div class="card">
                  <div class="card-body pd-y-20 pd-x-25">
                    <div class="row row-sm">
                      <div class="col-7">
                        <h3 class="tx-normal tx-rubik tx-spacing--1 mg-b-5">8,765</h3>
                        <h6 class="tx-12 tx-semibold tx-uppercase tx-spacing-1 tx-pink mg-b-5">Total Conversions</h6>
                        <p class="tx-11 tx-color-03 mg-b-0">Estimated total conversions on ads per impressions to ads.</p>
                      </div>
                      <div class="col-5">
                        <div class="chart-ten">
                          <div id="flotChart5" class="flot-chart"></div>
                        </div>
                      </div>
                    </div>
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- col -->
              <div class="col-lg-6 mg-t-10">
                <div class="card">
                  <div class="card-header d-flex align-items-start justify-content-between">
                    <h6 class="lh-5 mg-b-0">Total Visits</h6>
                    <a href="#" class="tx-13 link-03 d-flex align-items-center">Mar 01 - Mar 20, 2023 <ion-icon name="chevron-down-outline"></ion-icon></a>
                  </div><!-- card-header -->
                  <div class="card-body pd-y-15 pd-x-10">
                    <div class="table-responsive">
                      <table class="table table-borderless table-sm tx-13 tx-nowrap mg-b-0">
                        <thead>
                          <tr class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase">
                            <th class="wd-5p">Link</th>
                            <th>Page Title</th>
                            <th class="text-right">Percentage (%)</th>
                            <th class="text-right">Value</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="align-middle text-center"><a href="#"><i data-feather="external-link" class="wd-12 ht-12 stroke-wd-3"></i></a></td>
                            <td class="align-middle tx-medium">Homepage</td>
                            <td class="align-middle text-right">
                              <div class="wd-150 d-inline-block">
                                <div class="progress ht-4 mg-b-0">
                                  <div class="progress-bar bg-teal wd-65p" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </td>
                            <td class="align-middle text-right"><span class="tx-medium">65.35%</span></td>
                          </tr>
                          <tr>
                            <td class="align-middle text-center"><a href="#"><i data-feather="external-link" class="wd-12 ht-12 stroke-wd-3"></i></a></td>
                            <td class="align-middle tx-medium">Our Services</td>
                            <td class="align-middle text-right">
                              <div class="wd-150 d-inline-block">
                                <div class="progress ht-4 mg-b-0">
                                  <div class="progress-bar bg-primary wd-85p" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </td>
                            <td class="text-right"><span class="tx-medium">84.97%</span></td>
                          </tr>
                          <tr>
                            <td class="align-middle text-center"><a href="#"><i data-feather="external-link" class="wd-12 ht-12 stroke-wd-3"></i></a></td>
                            <td class="align-middle tx-medium">List of Products</td>
                            <td class="align-middle text-right">
                              <div class="wd-150 d-inline-block">
                                <div class="progress ht-4 mg-b-0">
                                  <div class="progress-bar bg-warning wd-45p" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </td>
                            <td class="text-right"><span class="tx-medium">38.66%</span></td>
                          </tr>
                          <tr>
                            <td class="align-middle text-center"><a href="#"><i data-feather="external-link" class="wd-12 ht-12 stroke-wd-3"></i></a></td>
                            <td class="align-middle tx-medium">Contact Us</td>
                            <td class="align-middle text-right">
                              <div class="wd-150 d-inline-block">
                                <div class="progress ht-4 mg-b-0">
                                  <div class="progress-bar bg-pink wd-15p" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </td>
                            <td class="text-right"><span class="tx-medium">16.11%</span></td>
                          </tr>
                          <tr>
                            <td class="align-middle text-center"><a href="#"><i data-feather="external-link" class="wd-12 ht-12 stroke-wd-3"></i></a></td>
                            <td class="align-middle tx-medium">Product 50% Sale</td>
                            <td class="align-middle text-right">
                              <div class="wd-150 d-inline-block">
                                <div class="progress ht-4 mg-b-0">
                                  <div class="progress-bar bg-teal wd-60p" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </td>
                            <td class="text-right"><span class="tx-medium">59.34%</span></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- col -->
              <div class="col-lg-6 mg-t-10">
                <div class="card">
                  <div class="card-header d-sm-flex align-items-start justify-content-between">
                    <h6 class="lh-5 mg-b-0">Browser Used By Users</h6>
                    <a href="#" class="tx-13 link-03 d-flex align-items-center">Mar 01 - Mar 20, 2023 <ion-icon name="chevron-down-outline"></ion-icon></a>
                  </div><!-- card-header -->
                  <div class="card-body pd-y-15 pd-x-10">
                    <div class="table-responsive">
                      <table class="table table-borderless table-sm tx-13 tx-nowrap mg-b-0">
                        <thead>
                          <tr class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase">
                            <th class="wd-5p">&nbsp;</th>
                            <th>Browser</th>
                            <th class="text-right">Sessions</th>
                            <th class="text-right">Bounce Rate</th>
                            <th class="text-right">Conversion Rate</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><i class="fab fa-chrome tx-primary op-6"></i></td>
                            <td class="tx-medium">Google Chrome</td>
                            <td class="text-right">13,410</td>
                            <td class="text-right">40.95%</td>
                            <td class="text-right">19.45%</td>
                          </tr>
                          <tr>
                            <td><i class="fab fa-firefox tx-orange"></i></td>
                            <td class="tx-medium">Mozilla Firefox</td>
                            <td class="text-right">1,710</td>
                            <td class="text-right">47.58%</td>
                            <td class="text-right">19.99%</td>
                          </tr>
                          <tr>
                            <td><i class="fab fa-safari tx-primary"></i></td>
                            <td class="tx-medium">Apple Safari</td>
                            <td class="text-right">1,340</td>
                            <td class="text-right">56.50%</td>
                            <td class="text-right">11.00%</td>
                          </tr>
                          <tr>
                            <td><i class="fab fa-edge tx-primary"></i></td>
                            <td class="tx-medium">Microsoft Edge</td>
                            <td class="text-right">713</td>
                            <td class="text-right">59.62%</td>
                            <td class="text-right">4.69%</td>
                          </tr>
                          <tr>
                            <td><i class="fab fa-opera tx-danger"></i></td>
                            <td class="tx-medium">Opera</td>
                            <td class="text-right">380</td>
                            <td class="text-right">52.50%</td>
                            <td class="text-right">8.75%</td>
                          </tr>
                        </tbody>
                      </table>
                    </div><!-- table-responsive -->
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- col -->
              <div class="col mg-t-10">
                <div class="card card-dashboard-table">
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>&nbsp;</th>
                          <th colspan="3">Acquisition</th>
                          <th colspan="3">Behavior</th>
                          <th colspan="3">Conversions</th>
                        </tr>
                        <tr>
                          <th>Source</th>
                          <th>Users</th>
                          <th>New Users</th>
                          <th>Sessions</th>
                          <th>Bounce Rate</th>
                          <th>Pages/Session</th>
                          <th>Avg. Session</th>
                          <th>Transactions</th>
                          <th>Revenue</th>
                          <th>Rate</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><a href="#">Organic search</a></td>
                          <td><strong>350</strong></td>
                          <td><strong>22</strong></td>
                          <td><strong>5,628</strong></td>
                          <td><strong>25.60%</strong></td>
                          <td><strong>1.92</strong></td>
                          <td><strong>00:01:05</strong></td>
                          <td><strong>340,103</strong></td>
                          <td><strong>$2.65M</strong></td>
                          <td><strong>4.50%</strong></td>
                        </tr>
                        <tr>
                          <td><a href="#">Social media</a></td>
                          <td><strong>276</strong></td>
                          <td><strong>18</strong></td>
                          <td><strong>5,100</strong></td>
                          <td><strong>23.66%</strong></td>
                          <td><strong>1.89</strong></td>
                          <td><strong>00:01:03</strong></td>
                          <td><strong>321,960</strong></td>
                          <td><strong>$2.51M</strong></td>
                          <td><strong>4.36%</strong></td>
                        </tr>
                        <tr>
                          <td><a href="#">Referral</a></td>
                          <td><strong>246</strong></td>
                          <td><strong>17</strong></td>
                          <td><strong>4,880</strong></td>
                          <td><strong>26.22%</strong></td>
                          <td><strong>1.78</strong></td>
                          <td><strong>00:01:09</strong></td>
                          <td><strong>302,767</strong></td>
                          <td><strong>$2.1M</strong></td>
                          <td><strong>4.34%</strong></td>
                        </tr>
                        <tr>
                          <td><a href="#">Email</a></td>
                          <td><strong>187</strong></td>
                          <td><strong>14</strong></td>
                          <td><strong>4,450</strong></td>
                          <td><strong>24.97%</strong></td>
                          <td><strong>1.35</strong></td>
                          <td><strong>00:02:07</strong></td>
                          <td><strong>279,300</strong></td>
                          <td><strong>$1.86M</strong></td>
                          <td><strong>3.99%</strong></td>
                        </tr>
                      </tbody>
                    </table>
                  </div><!-- table-responsive -->
                </div><!-- card -->
              </div><!-- col -->
            </div><!-- row -->
          </div><!-- container -->
        </div>

      </div>

      <!-- end customer dashboard -->
      <!-- custometr list code -->


      <div class="tab-pane fade" id="maildata" role="tabpanel">
       
      <div class="content-body pd-0">
        <div class="filemgr-wrapper filemgr-wrapper-two">
          <div class="filemgr-sidebar">
            <div class="filemgr-sidebar-header">
              <div class="dropdown dropdown-icon flex-fill">
                <button class="btn btn-xs btn-white w-100" data-bs-toggle="dropdown" aria-expanded="false">New <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                <div class="dropdown-menu tx-13" style="">
                  <a href="#" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg><span>Folder</span></a>
                  <a href="#" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg><span>Notes</span></a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg><span>Word Document</span></a>
                  <a href="#" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg><span>Powepoint</span></a>
                  <a href="#" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg><span>Excel Spreadsheet</span></a>
                </div><!-- dropdown-menu -->
              </div><!-- dropdown -->
              <div class="dropdown dropdown-icon flex-fill mg-l-10">
                <button class="btn btn-xs btn-primary w-100" data-bs-toggle="dropdown" aria-expanded="false">Upload <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                <div class="dropdown-menu tx-13" style="">
                  <a href="#" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg><span>File</span></a>
                  <a href="#" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg><span>Folder</span></a>
                </div><!-- dropdown-menu -->
              </div><!-- dropdown -->
            </div><!-- filemgr-sidebar-header -->
            <div class="filemgr-sidebar-body ps ps--active-y">
              <div class="pd-t-20 pd-b-10 pd-x-10">
                <label class="tx-sans tx-uppercase tx-medium tx-10 tx-spacing-1 tx-color-03 pd-l-10">My Drive</label>
                <nav class="nav nav-sidebar tx-13">
                  <a href="#" class="nav-link active"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg> <span>All Files</span></a>
                  <a href="#" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-monitor"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg> <span>My Devices</span></a>
                  <a href="#" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> <span>Recents</span></a>
                  <a href="#" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg> <span>Important</span></a>
                  <a href="#" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg> <span>Deleted Files</span></a>
                </nav>
              </div>
              <div class="pd-10">
                <label class="tx-sans tx-uppercase tx-medium tx-10 tx-spacing-1 tx-color-03 pd-l-10">File Library</label>
                <nav class="nav nav-sidebar tx-13">
                  <a href="#" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg> <span>Documents</span></a>
                  <a href="#" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg> <span>Images</span></a>
                  <a href="#" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg> <span>Videos</span></a>
                  <a href="#" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-music"><path d="M9 18V5l12-2v13"></path><circle cx="6" cy="18" r="3"></circle><circle cx="18" cy="16" r="3"></circle></svg> <span>Audio</span></a>
                  <a href="#" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-package"><line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg> <span>Zip Files</span></a>
                </nav>
              </div>
              <div class="pd-y-10 pd-x-20">
                <label class="tx-sans tx-uppercase tx-medium tx-10 tx-spacing-1 tx-color-03 mg-b-15">Storage Status</label>

                <div class="media">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-database wd-30 ht-30"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path></svg>
                  <div class="media-body mg-l-10">
                    <div class="tx-12 mg-b-4">10.2GB used of 50GB</div>
                    <div class="progress ht-3 mg-b-20">
                      <div class="progress-bar wd-15p" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div><!-- media-body -->
                </div><!-- media -->
                <p class="tx-12">Get 2TB (2,000GB) of storage now and get 40% off. Offers ends soon. <a href="#">Learn more</a></p>
              </div>
            <div class="ps__rail-x" style="left: 0px; top: 57px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 57px; height: 533px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 52px; height: 481px;"></div></div></div><!-- filemgr-sidebar-body -->
          </div><!-- filemgr-sidebar -->

          <div class="filemgr-content">
            <div class="filemgr-content-header">
              <h4 class="mg-b-0">All Files</h4>
              <nav class="nav d-none d-sm-flex mg-l-auto">
                <a href="#" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line><line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line></svg></a>
                <a href="#" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg></a>
                <a href="#" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg></a>
              </nav>
            </div><!-- filemgr-content-header -->
            <div class="filemgr-content-body ps ps--active-y">
              <div class="pd-20 pd-lg-25 pd-xl-30">

                <label class="d-block tx-medium tx-10 tx-uppercase tx-sans tx-spacing-1 tx-color-03 mg-b-15">Recently Accessed Files</label>
                <div class="row row-xs">
                  <div class="col-6 col-sm-4 col-md-3 col-xl">
                    <div class="card card-file">
                      <div class="dropdown-file">
                        <a href="#" class="dropdown-link" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg></a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a href="#modalViewDetails" data-bs-toggle="modal" class="dropdown-item details"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>View Details</a>
                          <a href="#" class="dropdown-item important"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>Mark as Important</a>
                          <a href="#modalShare" data-bs-toggle="modal" class="dropdown-item share"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></svg>Share</a>
                          <a href="#" class="dropdown-item download"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>Download</a>
                          <a href="#modalCopy" data-bs-toggle="modal" class="dropdown-item copy"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>Copy to</a>
                          <a href="#modalMove" data-bs-toggle="modal" class="dropdown-item move"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>Move to</a>
                          <a href="#" class="dropdown-item rename"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>Rename</a>
                          <a href="#" class="dropdown-item delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>Delete</a>
                        </div>
                      </div><!-- dropdown -->
                      <div class="card-file-thumb tx-danger">
                        <i class="far fa-file-pdf"></i>
                      </div>
                      <div class="card-body">
                        <h6><a href="#" class="link-02">Medical Certificate.pdf</a></h6>
                        <span>10.45kb</span>
                      </div>
                      <div class="card-footer"><span class="d-none d-sm-inline">Last accessed: </span>2 hours ago</div>
                    </div>
                  </div><!-- col -->
                  <div class="col-6 col-sm-4 col-md-3 col-xl">
                    <div class="card card-file">
                      <div class="dropdown-file">
                        <a href="#" class="dropdown-link" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg></a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a href="#modalViewDetails" data-bs-toggle="modal" class="dropdown-item details"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>View Details</a>
                          <a href="#" class="dropdown-item important"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>Mark as Important</a>
                          <a href="#modalShare" data-bs-toggle="modal" class="dropdown-item share"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></svg>Share</a>
                          <a href="#" class="dropdown-item download"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>Download</a>
                          <a href="#modalCopy" data-bs-toggle="modal" class="dropdown-item copy"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>Copy to</a>
                          <a href="#modalMove" data-bs-toggle="modal" class="dropdown-item move"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>Move to</a>
                          <a href="#" class="dropdown-item rename"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>Rename</a>
                          <a href="#" class="dropdown-item delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>Delete</a>
                        </div>
                      </div><!-- dropdown -->
                      <div class="card-file-thumb tx-primary">
                        <i class="far fa-file-word"></i>
                      </div>
                      <div class="card-body">
                        <h6><a href="#" class="link-02">Job Contract.docx</a></h6>
                        <span>22.67kb</span>
                      </div>
                      <div class="card-footer"><span class="d-none d-sm-inline">Last accessed: </span>5 hours ago</div>
                    </div>
                  </div><!-- col -->
                  <div class="col-6 col-sm-4 col-md-3 col-xl mg-t-10 mg-sm-t-0">
                    <div class="card card-file">
                      <div class="dropdown-file">
                        <a href="#" class="dropdown-link" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg></a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a href="#modalViewDetails" data-bs-toggle="modal" class="dropdown-item details"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>View Details</a>
                          <a href="#" class="dropdown-item important"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>Mark as Important</a>
                          <a href="#modalShare" data-bs-toggle="modal" class="dropdown-item share"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></svg>Share</a>
                          <a href="#" class="dropdown-item download"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>Download</a>
                          <a href="#modalCopy" data-bs-toggle="modal" class="dropdown-item copy"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>Copy to</a>
                          <a href="#modalMove" data-bs-toggle="modal" class="dropdown-item move"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>Move to</a>
                          <a href="#" class="dropdown-item rename"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>Rename</a>
                          <a href="#" class="dropdown-item delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>Delete</a>
                        </div>
                      </div><!-- dropdown -->
                      <div class="card-file-thumb tx-indigo">
                        <i class="far fa-file-image"></i>
                      </div>
                      <div class="card-body">
                        <h6><a href="#" class="link-02">IMG_063037.jpg</a></h6>
                        <span>4.1mb</span>
                      </div>
                      <div class="tx-11 tx-color-04 mg-t-10"><span class="d-none d-sm-inline">Last accessed: </span>6 hours ago</div>
                    </div>
                  </div><!-- col -->
                  <div class="col-6 col-sm-4 col-md-3 col-xl mg-t-10 mg-md-t-0">
                    <div class="card card-file">
                      <div class="dropdown-file">
                        <a href="#" class="dropdown-link" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg></a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a href="#modalViewDetails" data-bs-toggle="modal" class="dropdown-item details"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>View Details</a>
                          <a href="#" class="dropdown-item important"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>Mark as Important</a>
                          <a href="#modalShare" data-bs-toggle="modal" class="dropdown-item share"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></svg>Share</a>
                          <a href="#" class="dropdown-item download"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>Download</a>
                          <a href="#modalCopy" data-bs-toggle="modal" class="dropdown-item copy"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>Copy to</a>
                          <a href="#modalMove" data-bs-toggle="modal" class="dropdown-item move"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>Move to</a>
                          <a href="#" class="dropdown-item rename"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>Rename</a>
                          <a href="#" class="dropdown-item delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>Delete</a>
                        </div>
                      </div><!-- dropdown -->
                      <div class="card-file-thumb tx-info">
                        <i class="far fa-file-audio"></i>
                      </div>
                      <div class="card-body">
                        <h6><a href="#" class="link-02">Music_One.mp3</a></h6>
                        <span>3.40mb</span>
                      </div>
                      <div class="card-footer"><span class="d-none d-sm-inline">Last accessed: </span>6 hours ago</div>
                    </div>
                  </div><!-- col -->
                  <div class="col-6 col-sm-4 col-md-3 col-xl mg-t-10 mg-xl-t-0">
                    <div class="card card-file">
                      <div class="dropdown-file">
                        <a href="#" class="dropdown-link" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg></a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a href="#modalViewDetails" data-bs-toggle="modal" class="dropdown-item details"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>View Details</a>
                          <a href="#" class="dropdown-item important"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>Mark as Important</a>
                          <a href="#modalShare" data-bs-toggle="modal" class="dropdown-item share"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></svg>Share</a>
                          <a href="#" class="dropdown-item download"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>Download</a>
                          <a href="#modalCopy" data-bs-toggle="modal" class="dropdown-item copy"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>Copy to</a>
                          <a href="#modalMove" data-bs-toggle="modal" class="dropdown-item move"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>Move to</a>
                          <a href="#" class="dropdown-item rename"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>Rename</a>
                          <a href="#" class="dropdown-item delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>Delete</a>
                        </div>
                      </div><!-- dropdown -->
                      <div class="card-file-thumb tx-primary">
                        <i class="far fa-file-word"></i>
                      </div>
                      <div class="card-body">
                        <h6><a href="#" class="link-02">Job Requirements.docx</a></h6>
                        <span>17.19kb</span>
                      </div>
                      <div class="card-footer"><span class="d-none d-sm-inline">Last accessed: </span>7 hours ago</div>
                    </div>
                  </div><!-- col -->
                </div><!-- row -->

                <hr class="mg-y-40 bd-0">
                <label class="d-block tx-medium tx-10 tx-uppercase tx-sans tx-spacing-1 tx-color-03 mg-b-15">Folders</label>
                <div class="row row-xs">
                  <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="media media-folder">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>
                      <div class="media-body">
                        <h6><a href="#" class="link-02">Downloads</a></h6>
                        <span>2 files, 14.05mb</span>
                      </div><!-- media-body -->
                      <div class="dropdown-file">
                        <a href="#" class="dropdown-link" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg></a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a href="#modalViewDetails" data-bs-toggle="modal" class="dropdown-item details"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>View Details</a>
                          <a href="#" class="dropdown-item important"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>Mark as Important</a>
                          <a href="#modalShare" data-bs-toggle="modal" class="dropdown-item share"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></svg>Share</a>
                          <a href="#" class="dropdown-item download"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>Download</a>
                          <a href="#modalCopy" data-bs-toggle="modal" class="dropdown-item copy"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>Copy to</a>
                          <a href="#modalMove" data-bs-toggle="modal" class="dropdown-item move"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>Move to</a>
                          <a href="#" class="dropdown-item rename"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>Rename</a>
                          <a href="#" class="dropdown-item delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>Delete</a>
                        </div>
                      </div><!-- dropdown -->
                    </div><!-- media -->
                  </div><!-- col -->
                  <div class="col-sm-6 col-lg-4 col-xl-3 mg-t-10 mg-sm-t-0">
                    <div class="media media-folder">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>
                      <div class="media-body">
                        <h6><a href="#" class="link-02">Personal Stuff</a></h6>
                        <span>8 files, 76.3mb</span>
                      </div><!-- media-body -->
                      <div class="dropdown-file">
                        <a href="#" class="dropdown-link" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg></a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a href="#modalViewDetails" data-bs-toggle="modal" class="dropdown-item details"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>View Details</a>
                          <a href="#" class="dropdown-item important"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>Mark as Important</a>
                          <a href="#modalShare" data-bs-toggle="modal" class="dropdown-item share"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></svg>Share</a>
                          <a href="#" class="dropdown-item download"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>Download</a>
                          <a href="#modalCopy" data-bs-toggle="modal" class="dropdown-item copy"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>Copy to</a>
                          <a href="#modalMove" data-bs-toggle="modal" class="dropdown-item move"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>Move to</a>
                          <a href="#" class="dropdown-item rename"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>Rename</a>
                          <a href="#" class="dropdown-item delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>Delete</a>
                        </div>
                      </div><!-- dropdown -->
                    </div><!-- media -->
                  </div><!-- col -->
                  <div class="col-sm-6 col-lg-4 col-xl-3 mg-t-10 mg-lg-t-0">
                    <div class="media media-folder">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>
                      <div class="media-body">
                        <h6><a href="#" class="link-02">3D Objects</a></h6>
                        <span>5 files, 126.3mb</span>
                      </div><!-- media-body -->
                      <div class="dropdown-file">
                        <a href="#" class="dropdown-link" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg></a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a href="#modalViewDetails" data-bs-toggle="modal" class="dropdown-item details"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>View Details</a>
                          <a href="#" class="dropdown-item important"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>Mark as Important</a>
                          <a href="#modalShare" data-bs-toggle="modal" class="dropdown-item share"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></svg>Share</a>
                          <a href="#" class="dropdown-item download"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>Download</a>
                          <a href="#modalCopy" data-bs-toggle="modal" class="dropdown-item copy"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>Copy to</a>
                          <a href="#modalMove" data-bs-toggle="modal" class="dropdown-item move"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>Move to</a>
                          <a href="#" class="dropdown-item rename"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>Rename</a>
                          <a href="#" class="dropdown-item delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>Delete</a>
                        </div>
                      </div><!-- dropdown -->
                    </div><!-- media -->
                  </div><!-- col -->
                  <div class="col-sm-6 col-lg-4 col-xl-3 mg-t-10 mg-xl-t-0">
                    <div class="media media-folder">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>
                      <div class="media-body">
                        <h6><a href="#" class="link-02">Recordings</a></h6>
                        <span>0 files</span>
                      </div><!-- media-body -->
                      <div class="dropdown-file">
                        <a href="#" class="dropdown-link" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg></a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a href="#modalViewDetails" data-bs-toggle="modal" class="dropdown-item details"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>View Details</a>
                          <a href="#" class="dropdown-item important"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>Mark as Important</a>
                          <a href="#modalShare" data-bs-toggle="modal" class="dropdown-item share"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></svg>Share</a>
                          <a href="#" class="dropdown-item download"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>Download</a>
                          <a href="#modalCopy" data-bs-toggle="modal" class="dropdown-item copy"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>Copy to</a>
                          <a href="#modalMove" data-bs-toggle="modal" class="dropdown-item move"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>Move to</a>
                          <a href="#" class="dropdown-item rename"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>Rename</a>
                          <a href="#" class="dropdown-item delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>Delete</a>
                        </div>
                      </div><!-- dropdown -->
                    </div><!-- media -->
                  </div><!-- col -->
                  <div class="col-sm-6 col-lg-4 col-xl-3 mg-t-10">
                    <div class="media media-folder">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>
                      <div class="media-body">
                        <h6><a href="#" class="link-02">Support</a></h6>
                        <span>1 file, 20mb</span>
                      </div><!-- media-body -->
                      <div class="dropdown-file">
                        <a href="#" class="dropdown-link" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg></a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a href="#modalViewDetails" data-bs-toggle="modal" class="dropdown-item details"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>View Details</a>
                          <a href="#" class="dropdown-item important"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>Mark as Important</a>
                          <a href="#modalShare" data-bs-toggle="modal" class="dropdown-item share"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></svg>Share</a>
                          <a href="#" class="dropdown-item download"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>Download</a>
                          <a href="#modalCopy" data-bs-toggle="modal" class="dropdown-item copy"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>Copy to</a>
                          <a href="#modalMove" data-bs-toggle="modal" class="dropdown-item move"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>Move to</a>
                          <a href="#" class="dropdown-item rename"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>Rename</a>
                          <a href="#" class="dropdown-item delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>Delete</a>
                        </div>
                      </div><!-- dropdown -->
                    </div><!-- media -->
                  </div><!-- col -->
                </div><!-- row -->

                <hr class="mg-y-40 bd-0">
                <label class="d-block tx-medium tx-10 tx-uppercase tx-sans tx-spacing-1 tx-color-03 mg-b-15">Files</label>
                <div class="row row-xs">
                  <div class="col-6 col-sm-4 col-md-3 col-xl">
                    <div class="card card-file">
                      <div class="dropdown-file">
                        <a href="#" class="dropdown-link" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg></a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a href="#modalViewDetails" data-bs-toggle="modal" class="dropdown-item details"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>View Details</a>
                          <a href="#" class="dropdown-item important"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>Mark as Important</a>
                          <a href="#modalShare" data-bs-toggle="modal" class="dropdown-item share"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></svg>Share</a>
                          <a href="#" class="dropdown-item download"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>Download</a>
                          <a href="#modalCopy" data-bs-toggle="modal" class="dropdown-item copy"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>Copy to</a>
                          <a href="#modalMove" data-bs-toggle="modal" class="dropdown-item move"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>Move to</a>
                          <a href="#" class="dropdown-item rename"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>Rename</a>
                          <a href="#" class="dropdown-item delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>Delete</a>
                        </div>
                      </div><!-- dropdown -->
                      <div class="card-file-thumb tx-primary">
                        <i class="far fa-file-word"></i>
                      </div>
                      <div class="card-body">
                        <h6><a href="#" class="link-02">Job Requirements.docx</a></h6>
                        <p>Word Document</p>
                        <span>10.45kb</span>
                      </div>
                    </div>
                  </div><!-- col -->
                  <div class="col-6 col-sm-4 col-md-3 col-xl">
                    <div class="card card-file">
                      <div class="dropdown-file">
                        <a href="#" class="dropdown-link" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg></a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a href="#modalViewDetails" data-bs-toggle="modal" class="dropdown-item details"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>View Details</a>
                          <a href="#" class="dropdown-item important"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>Mark as Important</a>
                          <a href="#modalShare" data-bs-toggle="modal" class="dropdown-item share"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></svg>Share</a>
                          <a href="#" class="dropdown-item download"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>Download</a>
                          <a href="#modalCopy" data-bs-toggle="modal" class="dropdown-item copy"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>Copy to</a>
                          <a href="#modalMove" data-bs-toggle="modal" class="dropdown-item move"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>Move to</a>
                          <a href="#" class="dropdown-item rename"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>Rename</a>
                          <a href="#" class="dropdown-item delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>Delete</a>
                        </div>
                      </div><!-- dropdown -->
                      <div class="card-file-thumb tx-orange">
                        <i class="far fa-file-powerpoint"></i>
                      </div>
                      <div class="card-body">
                        <h6><a href="#" class="link-02">My Presentation.ppt</a></h6>
                        <p>Presentation File</p>
                        <span>135kb</span>
                      </div>
                    </div>
                  </div><!-- col -->
                  <div class="col-6 col-sm-4 col-md-3 col-xl mg-t-10 mg-sm-t-0">
                    <div class="card card-file">
                      <div class="dropdown-file">
                        <a href="#" class="dropdown-link" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg></a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a href="#modalViewDetails" data-bs-toggle="modal" class="dropdown-item details"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>View Details</a>
                          <a href="#" class="dropdown-item important"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>Mark as Important</a>
                          <a href="#modalShare" data-bs-toggle="modal" class="dropdown-item share"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></svg>Share</a>
                          <a href="#" class="dropdown-item download"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>Download</a>
                          <a href="#modalCopy" data-bs-toggle="modal" class="dropdown-item copy"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>Copy to</a>
                          <a href="#modalMove" data-bs-toggle="modal" class="dropdown-item move"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>Move to</a>
                          <a href="#" class="dropdown-item rename"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>Rename</a>
                          <a href="#" class="dropdown-item delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>Delete</a>
                        </div>
                      </div><!-- dropdown -->
                      <div class="card-file-thumb tx-success">
                        <i class="far fa-file-excel"></i>
                      </div>
                      <div class="card-body">
                        <h6><a href="#" class="link-02">Inventory.xls</a></h6>
                        <p>Spreadsheet File</p>
                        <span>22.67kb</span>
                      </div>
                    </div>
                  </div><!-- col -->
                  <div class="col-6 col-sm-4 col-md-3 col-xl mg-t-10 mg-md-t-0">
                    <div class="card card-file">
                      <div class="dropdown-file">
                        <a href="#" class="dropdown-link" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg></a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a href="#modalViewDetails" data-bs-toggle="modal" class="dropdown-item details"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>View Details</a>
                          <a href="#" class="dropdown-item important"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>Mark as Important</a>
                          <a href="#modalShare" data-bs-toggle="modal" class="dropdown-item share"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></svg>Share</a>
                          <a href="#" class="dropdown-item download"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>Download</a>
                          <a href="#modalCopy" data-bs-toggle="modal" class="dropdown-item copy"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>Copy to</a>
                          <a href="#modalMove" data-bs-toggle="modal" class="dropdown-item move"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>Move to</a>
                          <a href="#" class="dropdown-item rename"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>Rename</a>
                          <a href="#" class="dropdown-item delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>Delete</a>
                        </div>
                      </div><!-- dropdown -->
                      <div class="card-file-thumb tx-danger">
                        <i class="far fa-file-pdf"></i>
                      </div>
                      <div class="card-body">
                        <h6><a href="#" class="link-02">GettingStarted.pdf</a></h6>
                        <p>PDF File</p>
                        <span>94kb</span>
                      </div>
                    </div>
                  </div><!-- col -->
                  <div class="col-6 col-sm-4 col-md-3 col-xl mg-t-10 mg-xl-t-0">
                    <div class="card card-file">
                      <div class="dropdown-file">
                        <a href="#" class="dropdown-link" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg></a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a href="#modalViewDetails" data-bs-toggle="modal" class="dropdown-item details"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>View Details</a>
                          <a href="#" class="dropdown-item important"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>Mark as Important</a>
                          <a href="#modalShare" data-bs-toggle="modal" class="dropdown-item share"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></svg>Share</a>
                          <a href="#" class="dropdown-item download"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>Download</a>
                          <a href="#modalCopy" data-bs-toggle="modal" class="dropdown-item copy"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>Copy to</a>
                          <a href="#modalMove" data-bs-toggle="modal" class="dropdown-item move"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>Move to</a>
                          <a href="#" class="dropdown-item rename"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>Rename</a>
                          <a href="#" class="dropdown-item delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>Delete</a>
                        </div>
                      </div><!-- dropdown -->
                      <div class="card-file-thumb tx-success">
                        <i class="far fa-file-excel"></i>
                      </div>
                      <div class="card-body">
                        <h6><a href="#" class="link-02">Financial_Final.xls</a></h6>
                        <p>Spreadsheet File</p>
                        <span>61.1kb</span>
                      </div>
                    </div>
                  </div><!-- col -->
                  <div class="d-none d-xl-block wd-100p ht-10"></div>
                  <div class="col-6 col-sm-4 col-md-3 col-xl mg-t-10">
                    <div class="card card-file">
                      <div class="dropdown-file">
                        <a href="#" class="dropdown-link" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg></a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a href="#modalViewDetails" data-bs-toggle="modal" class="dropdown-item details"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>View Details</a>
                          <a href="#" class="dropdown-item important"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>Mark as Important</a>
                          <a href="#modalShare" data-bs-toggle="modal" class="dropdown-item share"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></svg>Share</a>
                          <a href="#" class="dropdown-item download"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>Download</a>
                          <a href="#modalCopy" data-bs-toggle="modal" class="dropdown-item copy"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>Copy to</a>
                          <a href="#modalMove" data-bs-toggle="modal" class="dropdown-item move"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>Move to</a>
                          <a href="#" class="dropdown-item rename"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>Rename</a>
                          <a href="#" class="dropdown-item delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>Delete</a>
                        </div>
                      </div><!-- dropdown -->
                      <div class="card-file-thumb tx-indigo">
                        <i class="far fa-file-image"></i>
                      </div>
                      <div class="card-body">
                        <h6><a href="#" class="link-02">DesignMockup.psd</a></h6>
                        <p>Photoshop File</p>
                        <span>105.4mb</span>
                      </div>
                    </div>
                  </div><!-- col -->
                  <div class="col-6 col-sm-4 col-md-3 col-xl mg-t-10">
                    <div class="card card-file">
                      <div class="dropdown-file">
                        <a href="#" class="dropdown-link" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg></a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a href="#modalViewDetails" data-bs-toggle="modal" class="dropdown-item details"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>View Details</a>
                          <a href="#" class="dropdown-item important"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>Mark as Important</a>
                          <a href="#modalShare" data-bs-toggle="modal" class="dropdown-item share"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></svg>Share</a>
                          <a href="#" class="dropdown-item download"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>Download</a>
                          <a href="#modalCopy" data-bs-toggle="modal" class="dropdown-item copy"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>Copy to</a>
                          <a href="#modalMove" data-bs-toggle="modal" class="dropdown-item move"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>Move to</a>
                          <a href="#" class="dropdown-item rename"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>Rename</a>
                          <a href="#" class="dropdown-item delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>Delete</a>
                        </div>
                      </div><!-- dropdown -->
                      <div class="card-file-thumb tx-gray-600">
                        <i class="far fa-file-alt"></i>
                      </div>
                      <div class="card-body">
                        <h6><a href="#" class="link-02">Instructions.txt</a></h6>
                        <p>Text Document</p>
                        <span>43.9kb</span>
                      </div>
                    </div>
                  </div><!-- col -->
                  <div class="col-6 col-sm-4 col-md-3 col-xl mg-t-10">
                    <div class="card card-file">
                      <div class="dropdown-file">
                        <a href="#" class="dropdown-link" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg></a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a href="#modalViewDetails" data-bs-toggle="modal" class="dropdown-item details"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>View Details</a>
                          <a href="#" class="dropdown-item important"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>Mark as Important</a>
                          <a href="#modalShare" data-bs-toggle="modal" class="dropdown-item share"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></svg>Share</a>
                          <a href="#" class="dropdown-item download"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>Download</a>
                          <a href="#modalCopy" data-bs-toggle="modal" class="dropdown-item copy"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>Copy to</a>
                          <a href="#modalMove" data-bs-toggle="modal" class="dropdown-item move"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>Move to</a>
                          <a href="#" class="dropdown-item rename"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>Rename</a>
                          <a href="#" class="dropdown-item delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>Delete</a>
                        </div>
                      </div><!-- dropdown -->
                      <div class="card-file-thumb tx-primary">
                        <i class="far fa-file-word"></i>
                      </div>
                      <div class="card-body">
                        <h6><a href="#" class="link-02">Journal.docx</a></h6>
                        <p>Word Document</p>
                        <span>33.4kb</span>
                      </div>
                    </div>
                  </div><!-- col -->
                  <div class="col-6 col-sm-4 col-md-3 col-xl mg-t-10">
                    <div class="card card-file">
                      <div class="dropdown-file">
                        <a href="#" class="dropdown-link" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg></a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a href="#modalViewDetails" data-bs-toggle="modal" class="dropdown-item details"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>View Details</a>
                          <a href="#" class="dropdown-item important"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>Mark as Important</a>
                          <a href="#modalShare" data-bs-toggle="modal" class="dropdown-item share"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></svg>Share</a>
                          <a href="#" class="dropdown-item download"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>Download</a>
                          <a href="#modalCopy" data-bs-toggle="modal" class="dropdown-item copy"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>Copy to</a>
                          <a href="#modalMove" data-bs-toggle="modal" class="dropdown-item move"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>Move to</a>
                          <a href="#" class="dropdown-item rename"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>Rename</a>
                          <a href="#" class="dropdown-item delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>Delete</a>
                        </div>
                      </div><!-- dropdown -->
                      <div class="card-file-thumb tx-info">
                        <i class="far fa-file-audio"></i>
                      </div>
                      <div class="card-body">
                        <h6><a href="#" class="link-02">MusicTwo.mp3</a></h6>
                        <p>Mp3 File</p>
                        <span>4.1mb</span>
                      </div>
                    </div>
                  </div><!-- col -->
                  <div class="col-6 col-sm-4 col-md-3 col-xl mg-t-10">
                    <div class="card card-file">
                      <div class="dropdown-file">
                        <a href="#" class="dropdown-link" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg></a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a href="#modalViewDetails" data-bs-toggle="modal" class="dropdown-item details"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>View Details</a>
                          <a href="#" class="dropdown-item important"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>Mark as Important</a>
                          <a href="#modalShare" data-bs-toggle="modal" class="dropdown-item share"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></svg>Share</a>
                          <a href="#" class="dropdown-item download"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>Download</a>
                          <a href="#modalCopy" data-bs-toggle="modal" class="dropdown-item copy"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>Copy to</a>
                          <a href="#modalMove" data-bs-toggle="modal" class="dropdown-item move"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>Move to</a>
                          <a href="#" class="dropdown-item rename"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>Rename</a>
                          <a href="#" class="dropdown-item delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>Delete</a>
                        </div>
                      </div><!-- dropdown -->
                      <div class="card-file-thumb tx-gray-600">
                        <i class="far fa-file-alt"></i>
                      </div>
                      <div class="card-body">
                        <h6><a href="#" class="link-02">ReadMe.txt</a></h6>
                        <p>Text Document</p>
                        <span>43.9kb</span>
                      </div>
                    </div>
                  </div><!-- col -->
                  <div class="d-none d-xl-block wd-100p ht-10"></div>
                  <div class="col-6 col-sm-4 col-md-3 col-xl mg-t-10">
                    <div class="card card-file">
                      <div class="dropdown-file">
                        <a href="#" class="dropdown-link" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg></a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a href="#modalViewDetails" data-bs-toggle="modal" class="dropdown-item details"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>View Details</a>
                          <a href="#" class="dropdown-item important"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>Mark as Important</a>
                          <a href="#modalShare" data-bs-toggle="modal" class="dropdown-item share"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></svg>Share</a>
                          <a href="#" class="dropdown-item download"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>Download</a>
                          <a href="#modalCopy" data-bs-toggle="modal" class="dropdown-item copy"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>Copy to</a>
                          <a href="#modalMove" data-bs-toggle="modal" class="dropdown-item move"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>Move to</a>
                          <a href="#" class="dropdown-item rename"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>Rename</a>
                          <a href="#" class="dropdown-item delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>Delete</a>
                        </div>
                      </div><!-- dropdown -->
                      <div class="card-file-thumb tx-pink">
                        <i class="far fa-file-video"></i>
                      </div>
                      <div class="card-body">
                        <h6><a href="#" class="link-02">MiniMovie.mp4</a></h6>
                        <p>MP4 File</p>
                        <span>22.2mb</span>
                      </div>
                    </div>
                  </div><!-- col -->
                  <div class="col-6 col-sm-4 col-md-3 col-xl mg-t-10">
                    <div class="card card-file">
                      <div class="dropdown-file">
                        <a href="#" class="dropdown-link" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg></a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a href="#modalViewDetails" data-bs-toggle="modal" class="dropdown-item details"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>View Details</a>
                          <a href="#" class="dropdown-item important"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>Mark as Important</a>
                          <a href="#modalShare" data-bs-toggle="modal" class="dropdown-item share"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></svg>Share</a>
                          <a href="#" class="dropdown-item download"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>Download</a>
                          <a href="#modalCopy" data-bs-toggle="modal" class="dropdown-item copy"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>Copy to</a>
                          <a href="#modalMove" data-bs-toggle="modal" class="dropdown-item move"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>Move to</a>
                          <a href="#" class="dropdown-item rename"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>Rename</a>
                          <a href="#" class="dropdown-item delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>Delete</a>
                        </div>
                      </div><!-- dropdown -->
                      <div class="card-file-thumb tx-orange">
                        <i class="far fa-file-code"></i>
                      </div>
                      <div class="card-body">
                        <h6><a href="#" class="link-02">home.html</a></h6>
                        <p>HTML Document</p>
                        <span>43.9kb</span>
                      </div>
                    </div>
                  </div><!-- col -->
                  <div class="col-6 col-sm-4 col-md-3 col-xl mg-t-10">
                    <div class="card card-file">
                      <div class="dropdown-file">
                        <a href="#" class="dropdown-link" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg></a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a href="#modalViewDetails" data-bs-toggle="modal" class="dropdown-item details"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>View Details</a>
                          <a href="#" class="dropdown-item important"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>Mark as Important</a>
                          <a href="#modalShare" data-bs-toggle="modal" class="dropdown-item share"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></svg>Share</a>
                          <a href="#" class="dropdown-item download"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>Download</a>
                          <a href="#modalCopy" data-bs-toggle="modal" class="dropdown-item copy"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>Copy to</a>
                          <a href="#modalMove" data-bs-toggle="modal" class="dropdown-item move"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>Move to</a>
                          <a href="#" class="dropdown-item rename"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>Rename</a>
                          <a href="#" class="dropdown-item delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>Delete</a>
                        </div>
                      </div><!-- dropdown -->
                      <div class="card-file-thumb tx-primary">
                        <i class="far fa-file-code"></i>
                      </div>
                      <div class="card-body">
                        <h6><a href="#" class="link-02">style.css</a></h6>
                        <p>CSS File</p>
                        <span>43.9kb</span>
                      </div>
                    </div>
                  </div><!-- col -->
                  <div class="col-6 col-sm-4 col-md-3 col-xl mg-t-10">
                    <div class="card card-file">
                      <div class="dropdown-file">
                        <a href="#" class="dropdown-link" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg></a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a href="#modalViewDetails" data-bs-toggle="modal" class="dropdown-item details"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>View Details</a>
                          <a href="#" class="dropdown-item important"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>Mark as Important</a>
                          <a href="#modalShare" data-bs-toggle="modal" class="dropdown-item share"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></svg>Share</a>
                          <a href="#" class="dropdown-item download"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>Download</a>
                          <a href="#modalCopy" data-bs-toggle="modal" class="dropdown-item copy"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>Copy to</a>
                          <a href="#modalMove" data-bs-toggle="modal" class="dropdown-item move"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>Move to</a>
                          <a href="#" class="dropdown-item rename"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>Rename</a>
                          <a href="#" class="dropdown-item delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>Delete</a>
                        </div>
                      </div><!-- dropdown -->
                      <div class="card-file-thumb tx-purple">
                        <i class="far fa-file-code"></i>
                      </div>
                      <div class="card-body">
                        <h6><a href="#" class="link-02">package.json</a></h6>
                        <p>JSON File</p>
                        <span>2.3kb</span>
                      </div>
                    </div>
                  </div><!-- col -->
                  <div class="col-6 col-sm-4 col-md-3 col-xl mg-t-10">
                  </div><!-- col -->
                </div><!-- row -->
              </div>
            <div class="ps__rail-x" style="left: 0px; top: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 533px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 209px;"></div></div></div><!-- filemgr-content-body -->
          </div><!-- filemgr-content -->

        </div><!-- filemgr-wrapper -->
      </div>


      </div>


      <!--end custometr list code -->


      <div class="tab-pane fade" id="mailreport" role="tabpanel">
        <div class="row text-center">
          <div class="col-sm-6 mx-auto">
            <img src="img/img22.png" class="w-100" alt="">
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="mailsetting" role="tabpanel">
       <!-- start mail page -->

    

setting





       <!-- end mail page -->
      </div>

      <div class="tab-pane fade" id="salesReport" role="tabpanel">
        <div class="row text-center">
          <div class="col-sm-6 mx-auto ">
            <img src="img/img22.png" class="w-100" alt="">
          </div>
        </div>
      </div>

      <div class="tab-pane fade" id="paymentReport" role="tabpanel">
        <div class="row text-center">
          <div class="col-sm-6 mx-auto">
            <img src="img/img22.png" class="w-100" alt="">
          </div>
        </div>
      </div>

      <div class="tab-pane fade" id="customerReport" role="tabpanel">
        <div class="row text-center">
          <div class="col-sm-6 mx-auto">
            <img src="img/img22.png" class="w-100" alt="">
          </div>
        </div>
      </div>

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