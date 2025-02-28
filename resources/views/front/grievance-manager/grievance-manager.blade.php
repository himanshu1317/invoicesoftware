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
        <li><a href="#maildashboard" class="active" data-bs-toggle="tab" role="tab">Dashboard</a></li>
        <li><a href="#maildata" data-bs-toggle="tab" role="tab">Mail</a></li>

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
      <div class="tab-pane fade show active" id="maildashboard" role="tabpanel">

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
       
<div class=" ht-100v pd-0">
 

  <div class="content-body pd-0">
    <div class="mail-wrapper mail-wrapper-two">
      <div class="mail-sidebar">
        <div class="mail-sidebar-body ps ps--active-y">
          <div class="d-grid pd-20">
            <button id="mailComposeBtn" class="btn btn-primary btn-block tx-uppercase tx-10 tx-medium tx-sans tx-spacing-4">Compose</button>
          </div>
          <div class="pd-b-10 pd-x-10">
            <nav class="nav nav-sidebar tx-13">
              <a href="#" class="nav-link active"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path></svg> <span>Inbox</span> <span class="badge">20</span></a>
              <a href="#" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-monitor"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg> <span>Starred</span> <span class="badge">3</span></a>
              <a href="#" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> <span>Important</span> <span class="badge">10</span></a>
              <a href="#" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg> <span>Sent Mail</span> <span class="badge">8</span></a>
              <a href="#" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg> <span>Drafts</span> <span class="badge">15</span></a>
              <a href="#" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-slash"><circle cx="12" cy="12" r="10"></circle><line x1="4.93" y1="4.93" x2="19.07" y2="19.07"></line></svg> <span>Spam</span> <span class="badge">128</span></a>
              <a href="#" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg> <span>Trash</span> <span class="badge">6</span></a>
            </nav>
          </div>
          <div class="pd-10">
            <label class="tx-sans tx-uppercase tx-medium tx-10 tx-spacing-1 tx-color-03 pd-l-10">Label</label>
            <nav class="nav nav-sidebar tx-13">
              <a href="#" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg> <span>Social</span></a>
              <a href="#" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg> <span>Promotions</span></a>
              <a href="#" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg> <span>Updates</span></a>
              <a href="#" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg> <span>Business</span></a>
              <a href="#" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg> <span>Finance</span></a>
            </nav>
          </div>

          <div class="pd-y-15 pd-x-10">
            <label class="tx-sans tx-uppercase tx-medium tx-10 tx-spacing-1 tx-color-03 pd-l-10">Tags</label>
            <nav class="nav nav-sidebar tx-13">
              <a href="#" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7.01" y2="7"></line></svg> <span>Facebook</span></a>
              <a href="#" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7.01" y2="7"></line></svg> <span>Twitter</span></a>
            </nav>
          </div>
        <div class="ps__rail-x" style="left: 0px; top: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 588px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 544px;"></div></div></div><!-- mail-sidebar-body -->
      </div><!-- mail-sidebar -->

      <div class="mail-group">
        <div class="mail-group-header justify-content-between">
          <h6 class="tx-uppercase tx-semibold mg-b-0">Inbox</h6>
          <div class="dropdown tx-13">
            <span class="tx-color-03">Sort:</span> <a href="#" class="dropdown-link link-02">Date</a>
          </div><!-- dropdown -->
        </div><!-- mail-group-header -->
        <div class="mail-group-body ps ps--active-y">

          <label class="mail-group-label">Today</label>
          <ul class="list-unstyled media-list mg-b-0">
            <li class="media unread">
              <div class="avatar"><span class="avatar-initial rounded-circle bg-indigo">d</span></div>
              <div class="media-body mg-l-15">
                <div class="tx-color-03 d-flex align-items-center justify-content-between mg-b-2">
                  <span class="tx-12">Dyanne Aceron</span>
                  <span class="tx-11">1:20pm</span>
                </div>
                <h6 class="tx-13">Just asking questions</h6>
                <p class="tx-12 tx-color-03 mg-b-0">Aenean commodo ligula eget dolor. Ae nean massa. Cum sociis natoque </p>
              </div><!-- media-body -->
            </li>
            <li class="media selected">
              <div class="avatar"><img src="img/img6.jpg" class="rounded-circle" alt=""></div>
              <div class="media-body mg-l-15">
                <div class="tx-color-03 d-flex align-items-center justify-content-between mg-b-2">
                  <span class="tx-12">Reynante Labares</span>
                  <span class="tx-11">11:40am</span>
                </div>
                <h6 class="tx-13">30 Seconds Survey to Your Next Job</h6>
                <p class="tx-12 tx-color-03 mg-b-0">Aenean commodo ligula eget dolor. Ae nean massa. Cum sociis natoque </p>
              </div><!-- media-body -->
            </li>
            <li class="media">
              <div class="avatar"><span class="avatar-initial rounded-circle bg-gray-800">r</span></div>
              <div class="media-body mg-l-15">
                <div class="tx-color-03 d-flex align-items-center justify-content-between mg-b-2">
                  <span class="tx-12">Rolando Paloso</span>
                  <span class="tx-11">10:54am</span>
                </div>
                <h6 class="tx-13">Watch, Listen and Play Longer</h6>
                <p class="tx-12 tx-color-03 mg-b-0">Aenean commodo ligula eget dolor. Ae nean massa. Cum sociis natoque </p>
              </div><!-- media-body -->
            </li>
            <li class="media">
              <div class="avatar"><span class="avatar-initial rounded-circle bg-pink">s</span></div>
              <div class="media-body mg-l-15">
                <div class="tx-color-03 d-flex align-items-center justify-content-between mg-b-2">
                  <span class="tx-12">Socrates Itumay</span>
                  <span class="tx-11">09:50am</span>
                </div>
                <h6 class="tx-13">Pre-Order Sale: Mastering CSS</h6>
                <p class="tx-12 tx-color-03 mg-b-0">Aenean commodo ligula eget dolor. Ae nean massa. Cum sociis natoque </p>
              </div><!-- media-body -->
            </li>
          </ul>
          <label class="mail-group-label">Yesterday</label>
          <ul class="list-unstyled media-list mg-b-0">
            <li class="media">
              <div class="avatar"><img src="img/img8.jpg" class="rounded-circle" alt=""></div>
              <div class="media-body mg-l-15">
                <div class="tx-color-03 d-flex align-items-center justify-content-between mg-b-2">
                  <span class="tx-12">Yassi Pressman</span>
                  <span class="tx-11">8:20pm</span>
                </div>
                <h6 class="tx-13">Envato Contributor Payment</h6>
                <p class="tx-12 tx-color-03 mg-b-0">Commodo ligula eget dolor. Aenean massa cum sociis natoqu</p>
              </div><!-- media-body -->
            </li>
            <li class="media unread selected">
              <div class="avatar"><span class="avatar-initial rounded-circle bg-teal">i</span></div>
              <div class="media-body mg-l-15">
                <div class="tx-color-03 d-flex align-items-center justify-content-between mg-b-2">
                  <span class="tx-12">Isidore Dilao</span>
                  <span class="tx-11">06:42pm</span>
                </div>
                <h6 class="tx-13">America's Best Dance Cruise</h6>
                <p class="tx-12 tx-color-03 mg-b-0">Aenean commodo ligula eget dolor. Ae nean massa. Cum sociis natoque </p>
              </div><!-- media-body -->
            </li>
          </ul>
          <label class="mail-group-label">January 20</label>
          <ul class="list-unstyled media-list mg-b-0">
            <li class="media">
              <div class="avatar"><img src="img/img10.jpg" class="rounded-circle" alt=""></div>
              <div class="media-body mg-l-15">
                <div class="tx-color-03 d-flex align-items-center justify-content-between mg-b-2">
                  <span class="tx-12">Dexter Dela Cruz</span>
                  <span class="tx-11">4:18pm</span>
                </div>
                <h6 class="tx-13">A Flaming Pile of Garbage</h6>
                <p class="tx-12 tx-color-03 mg-b-0">Commodo ligula eget dolor. Aenean massa cum sociis natoqu</p>
              </div><!-- media-body -->
            </li>
            <li class="media selected">
              <div class="avatar"><span class="avatar-initial rounded-circle bg-primary">a</span></div>
              <div class="media-body mg-l-15">
                <div class="tx-color-03 d-flex align-items-center justify-content-between mg-b-2">
                  <span class="tx-12">Adrian Monino</span>
                  <span class="tx-11">06:42pm</span>
                </div>
                <h6 class="tx-13">America's Best Dance Cruise</h6>
                <p class="tx-12 tx-color-03 mg-b-0">Aenean commodo ligula eget dolor. Ae nean massa. Cum sociis natoque </p>
              </div><!-- media-body -->
            </li>
          </ul>
          <label class="mail-group-label">January 18</label>
          <ul class="list-unstyled media-list mg-b-0">
            <li class="media">
              <div class="avatar"><img src="img/img9.jpg" class="rounded-circle" alt=""></div>
              <div class="media-body mg-l-15">
                <div class="tx-color-03 d-flex align-items-center justify-content-between mg-b-2">
                  <span class="tx-12">Annie Christensen</span>
                  <span class="tx-11">7:26pm</span>
                </div>
                <h6 class="tx-13">Just asking questions</h6>
                <p class="tx-12 tx-color-03 mg-b-0">Commodo ligula eget dolor. Aenean massa cum sociis natoqu</p>
              </div><!-- media-body -->
            </li>
            <li class="media selected">
              <div class="avatar"><span class="avatar-initial rounded-circle bg-primary">a</span></div>
              <div class="media-body mg-l-15">
                <div class="tx-color-03 d-flex align-items-center justify-content-between mg-b-2">
                  <span class="tx-12">Adrian Monino</span>
                  <span class="tx-11">06:42pm</span>
                </div>
                <h6 class="tx-13">Watch, Listen and Play Longer</h6>
                <p class="tx-12 tx-color-03 mg-b-0">Aenean commodo ligula eget dolor. Ae nean massa. Cum sociis natoque </p>
              </div><!-- media-body -->
            </li>
            <li class="media">
              <div class="avatar"><img src="img/img7.jpg" class="rounded-circle" alt=""></div>
              <div class="media-body mg-l-15">
                <div class="tx-color-03 d-flex align-items-center justify-content-between mg-b-2">
                  <span class="tx-12">Robert Restificar</span>
                  <span class="tx-11">12:01pm</span>
                </div>
                <h6 class="tx-13">Envato Contributor Payment</h6>
                <p class="tx-12 tx-color-03 mg-b-0">Commodo ligula eget dolor. Aenean massa cum sociis natoqu</p>
              </div><!-- media-body -->
            </li>
            <li class="media">
              <div class="avatar"><span class="avatar-initial rounded-circle bg-purple">r</span></div>
              <div class="media-body mg-l-15">
                <div class="tx-color-03 d-flex align-items-center justify-content-between mg-b-2">
                  <span class="tx-12">Raymart Serencio</span>
                  <span class="tx-11">10:13am</span>
                </div>
                <h6 class="tx-13">Sale: Javascript Beginners</h6>
                <p class="tx-12 tx-color-03 mg-b-0">Aenean commodo ligula eget dolor. Ae nean massa. Cum sociis natoque </p>
              </div><!-- media-body -->
            </li>
          </ul>
          <div class="d-grid pd-t-1 pd-b-5 pd-x-5">
            <a href="#" class="btn btn-xs btn-block btn-light bd-0 tx-uppercase tx-10 tx-spacing-1 tx-medium mn-ht-0">Load more</a>
          </div>
        <div class="ps__rail-x" style="left: 0px; top: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 533px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 194px;"></div></div></div><!-- mail-group-body -->
      </div><!-- mail-group -->

      <div class="mail-content">
        <div class="mail-content-header">
          <a href="#" id="mailContentClose" class="link-02 d-none d-lg-block d-xl-none mg-r-20"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg></a>
          <div class="media">
            <div class="avatar avatar-sm"><img src="img/img7.jpg" class="rounded-circle" alt=""></div>
            <div class="media-body mg-l-10">
              <h6 class="mg-b-2 tx-13">Reynante Labares</h6>
              <span class="d-block tx-11 tx-color-03">Today, 11:40am</span>
            </div><!-- media-body -->
          </div><!-- media -->
          <nav class="nav nav-icon-only mg-l-auto">
            <a href="#" data-bs-toggle="tooltip" class="nav-link d-none d-sm-block" aria-label="Archive" data-bs-original-title="Archive"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-archive"><polyline points="21 8 21 21 3 21 3 8"></polyline><rect x="1" y="3" width="22" height="5"></rect><line x1="10" y1="12" x2="14" y2="12"></line></svg></a>
            <a href="#" data-bs-toggle="tooltip" class="nav-link d-none d-sm-block" aria-label="Report Spam" data-bs-original-title="Report Spam"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-slash"><circle cx="12" cy="12" r="10"></circle><line x1="4.93" y1="4.93" x2="19.07" y2="19.07"></line></svg></a>
            <a href="#" data-bs-toggle="tooltip" class="nav-link d-none d-sm-block" aria-label="Mark Unread" data-bs-original-title="Mark Unread"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg></a>
            <a href="#" data-bs-toggle="tooltip" class="nav-link d-none d-sm-block" aria-label="Add Label" data-bs-original-title="Add Label"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg></a>
            <a href="#" data-bs-toggle="tooltip" class="nav-link d-none d-sm-block" aria-label="Add Tag" data-bs-original-title="Add Tag"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7.01" y2="7"></line></svg></a>
            <span class="nav-divider d-none d-sm-block"></span>
            <a href="#" data-bs-toggle="tooltip" class="nav-link d-none d-sm-block" aria-label="Mark Important" data-bs-original-title="Mark Important"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></a>
            <a href="#" data-bs-toggle="tooltip" class="nav-link d-none d-sm-block" aria-label="Trash" data-bs-original-title="Trash"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a>
            <a href="#" data-bs-toggle="tooltip" class="nav-link d-none d-sm-block" aria-label="Print" data-bs-original-title="Print"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg></a>
            <a href="#" data-bs-toggle="tooltip" class="nav-link d-sm-none" aria-label="Options" data-bs-original-title="Options"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg></a>
          </nav>
        </div><!-- mail-content-header -->
        <div class="mail-content-body ps">
          <div class="pd-20 pd-lg-25 pd-xl-30">
            <h5 class="mg-b-30">30 Seconds Survey to Your Next Job</h5>

            <h6 class="tx-semibold mg-b-0">Ms. Katherine Lumaad</h6>
            <span class="tx-color-03">ThemePixels, Inc.</span>
            <p class="tx-color-03">San Francisco, CA, United States</p>

            <p>Greetings!</p>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
            <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. </p>
            <p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem.</p>
            <p>
              <span>Sincerely yours,</span><br>
              <strong>Envato Design Team</strong>
            </p>
          </div>
          <div class="pd-20 pd-lg-25 pd-xl-30 pd-t-0-f">
            <div id="editor-container" class="tx-13 tx-lg-14 ht-100 ql-container ql-snow"><div class="ql-editor" data-gramm="false" contenteditable="true" data-placeholder="Compose an epic..."><p>Type here to Reply or Forward</p></div><div class="ql-clipboard" contenteditable="true" tabindex="-1"></div><div class="ql-tooltip ql-hidden"><a class="ql-preview" target="_blank" href="about:blank"></a><input type="text" data-formula="e=mc^2" data-link="https://quilljs.com" data-video="Embed URL"><a class="ql-action"></a><a class="ql-remove"></a></div></div>
            <div class="d-flex align-items-center justify-content-between mg-t-10">
              <div id="toolbar-container" class="bd-0-f pd-0-f ql-toolbar ql-snow">
                <span class="ql-formats">
                  <button class="ql-bold" type="button"><svg viewBox="0 0 18 18"> <path class="ql-stroke" d="M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z"></path> <path class="ql-stroke" d="M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z"></path> </svg></button>
                  <button class="ql-italic" type="button"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="7" x2="13" y1="4" y2="4"></line> <line class="ql-stroke" x1="5" x2="11" y1="14" y2="14"></line> <line class="ql-stroke" x1="8" x2="10" y1="14" y2="4"></line> </svg></button>
                  <button class="ql-underline" type="button"><svg viewBox="0 0 18 18"> <path class="ql-stroke" d="M5,3V9a4.012,4.012,0,0,0,4,4H9a4.012,4.012,0,0,0,4-4V3"></path> <rect class="ql-fill" height="1" rx="0.5" ry="0.5" width="12" x="3" y="15"></rect> </svg></button>
                </span>
                <span class="ql-formats">
                  <button class="ql-link" type="button"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="7" x2="11" y1="7" y2="11"></line> <path class="ql-even ql-stroke" d="M8.9,4.577a3.476,3.476,0,0,1,.36,4.679A3.476,3.476,0,0,1,4.577,8.9C3.185,7.5,2.035,6.4,4.217,4.217S7.5,3.185,8.9,4.577Z"></path> <path class="ql-even ql-stroke" d="M13.423,9.1a3.476,3.476,0,0,0-4.679-.36,3.476,3.476,0,0,0,.36,4.679c1.392,1.392,2.5,2.542,4.679.36S14.815,10.5,13.423,9.1Z"></path> </svg></button>
                  <button class="ql-image" type="button"><svg viewBox="0 0 18 18"> <rect class="ql-stroke" height="10" width="12" x="3" y="4"></rect> <circle class="ql-fill" cx="6" cy="7" r="1"></circle> <polyline class="ql-even ql-fill" points="5 12 5 11 7 9 8 10 11 7 13 9 13 12 5 12"></polyline> </svg></button>
                </span>
              </div>
              <button class="btn btn-primary">Reply</button>
            </div>
          </div>
        <div class="ps__rail-x" style="left: 0px; top: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div><!-- mail-content-body -->
      </div><!-- mail-content -->
    </div><!-- mail-wrapper -->
  </div>
</div><!-- content -->


<script>
  'use strict'

  $(document).ready(function(){
    if(window.matchMedia('(min-width: 1200px)').matches) {
      $('.aside').addClass('minimize');
    }
  })

  window.darkMode = function(){
    $('.btn-white').addClass('btn-dark').removeClass('btn-white');
  }

  window.lightMode = function() {
    $('.btn-dark').addClass('btn-white').removeClass('btn-dark');
  }

  var hasMode = Cookies.get('df-mode');
  if(hasMode === 'dark') {
    darkMode();
  } else {
    lightMode();
  }
</script>

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