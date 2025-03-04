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
        <li><a href="#contactDetails" class="active" data-bs-toggle="tab" role="tab">Dashboard</a></li>
        <li><a href="#contactInformation" data-bs-toggle="tab" role="tab">Customer List</a></li>
        <li><a href="#contactLogs" data-bs-toggle="tab" role="tab">Report</a></li>
        <li><a href="#customersetting" data-bs-toggle="tab" role="tab">Setting</a></li>
    </ul>
</div>



    <div class="tab-content">
      <div class="tab-pane fade show active" id="contactDetails" role="tabpanel">
       
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
      <div class="tab-pane fade" id="contactInformation" role="tabpanel">
      <div class="container-fluid  mb-3 d-flex flex-column min-vh-100">
         
         <div class="row my-3">
     <div class="col-12">
         <div class="card card-body">
             <div class="row g-3">
                 
                
 
                 <!-- Type Filter -->
                 <div class="col-md-2">
                     <div class="dropdown-container">
                         <select class="form-control dropdown-indicator" id="customerType">
                             <option value="">All Customers</option>
                             <option value="active">Active Customers</option>
                             <option value="duplicate">Duplicate Customers</option>
                             <option value="inactive">Inactive Customers</option>
                             <option value="overdue">Overdue Customers</option>
                             <option value="unpaid">Unpaid Customers</option>
                             <option value="new">New Customers</option>
                         </select>
                     </div>
                 </div>
 
                 <!-- Date Filter -->
                 <div class="col-md-2">
                     <input type="date" class="form-control" id="filterDate">
                 </div>
 
                 <!-- Name Filter -->
                 <div class="col-md-2">
                     <input type="text" class="form-control" id="filterName" placeholder="Search by Name">
                 </div>
 
                 <!-- Balance Filter -->
                 <div class="col-md-2">
                     <div class="dropdown-container">
                         <select class="form-control dropdown-indicator" id="balanceFilter">
                             <option value="">All</option>
                             <option value="paid">Paid</option>
                             <option value="unpaid">Unpaid</option>
                             <option value="overdue">Overdue</option>
                         </select>
                     </div>
                 </div>
 
                 <!-- Service Type Filter -->
                 <div class="col-md-2">
                     <div class="dropdown-container">
                         <select class="form-control dropdown-indicator" id="serviceType">
                             <option value="">All Services</option>
                             <option value="website">Website</option>
                             <option value="erp">ERP Software</option>
                             <option value="digital_marketing">Digital Marketing</option>
                             <option value="seo">SEO</option>
                             <option value="graphics">Graphics Design</option>
                         </select>
                     </div>
                 </div>
 
                 <!-- Add New Customer Button -->
                 <div class="col-md-2 text-end">
                     <button type="button" class="btn btn-sm btn-success w-100" data-bs-toggle="modal" data-bs-target="#addCustomerModal">
                         <i class="feather icon-user-plus"></i> Add New Customer
                     </button>
                 </div>
             </div>
 
             <!-- Buttons -->
             <div class="d-flex justify-content-end mt-3">
                 <button class="btn btn-sm btn-primary me-2" id="applyFilter">
                     <i class="feather icon-filter"></i> Apply Filter
                 </button>
                 <button class="btn btn-sm btn-secondary" id="resetFilter">
                     <i class="feather icon-x"></i> Reset
                 </button>
             </div>
         </div>
     </div>
 </div>
 
 
 <!-- Add New Customer Button -->
 
 
 <!-- Add New Customer Modal -->
 <div class="modal fade" id="addCustomerModal" tabindex="-1" aria-labelledby="addCustomerModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="addCustomerModalLabel">Add New Customer</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <form id="addCustomerForm">
                     <div class="row g-3">
                         <!-- First Name -->
                         <div class="col-md-6">
                             <label class="form-label">First Name</label>
                             <input type="text" class="form-control" id="firstName" required>
                         </div>
 
                         <!-- Last Name -->
                         <div class="col-md-6">
                             <label class="form-label">Last Name</label>
                             <input type="text" class="form-control" id="lastName" required>
                         </div>
 
                         <!-- Business Type -->
                         <div class="col-md-12">
                             <label class="form-label">Business Type</label>
                             <input type="text" class="form-control" id="businessType" required>
                         </div>
 
                         <!-- Address -->
                         <div class="col-md-12">
                             <label class="form-label">Address</label>
                             <input type="text" class="form-control" id="address" required>
                         </div>
 
                         <!-- Phone Number -->
                         <div class="col-md-6">
                             <label class="form-label">Phone Number</label>
                             <input type="text" class="form-control" id="phoneNumber" required>
                         </div>
 
                         <!-- Email -->
                         <div class="col-md-6">
                             <label class="form-label">Email</label>
                             <input type="email" class="form-control" id="email" required>
                         </div>
 
                         <!-- Service Type -->
                         <div class="col-md-12">
                             <label class="form-label">Service Type</label>
                             <select class="form-control" id="serviceType">
                                 <option value="website">Website</option>
                                 <option value="erp">ERP Software</option>
                                 <option value="digital_marketing">Digital Marketing</option>
                                 <option value="seo">SEO</option>
                                 <option value="graphics">Graphics Design</option>
                             </select>
                         </div>
                     </div>
                 </form>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                 <button type="submit" class="btn btn-primary" id="saveCustomer">Save Customer</button>
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
                     <td>{{ $loop->iteration }}</td>
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
      </div>
      <div class="tab-pane fade" id="contactLogs" role="tabpanel">
      <div class="row text-center">
     <div class="col-sm-6 mx-auto">
     <img src="img/img22.png" class="w-100" alt="">
     </div>
      </div>
      </div>

      <div class="tab-pane fade" id="customersetting" role="tabpanel">
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