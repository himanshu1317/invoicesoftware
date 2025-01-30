
<footer class="bg-dark text-light text-center py-3 mt-auto">
        <p class="mb-0">&copy; {{ date('Y') }} Your Company. All Rights Reserved.</p>
    </footer>

</div>
<script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('lib/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('lib/ionicons/ionicons/ionicons.esm.js')}}" type="module"></script>
    <script src="{{asset('lib/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('lib/chart.js/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('lib/jquery.flot/jquery.flot.js')}}"></script>
    <script src="{{asset('lib/jquery.flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('lib/jquery.flot/jquery.flot.resize.js')}}"></script>

    <script src="{{asset('js/custom.js')}}"></script>
    <script src="{{asset('js/dashforge.js')}}"></script>
    <script src="{{asset('js/dashforge.aside.js')}}"></script>
    <script src="{{asset('js/dashforge.sampledata.js')}}"></script>

    <!-- append theme customizer -->
    <script src="{{asset('lib/js-cookie/js.cookie.js')}}"></script>
    <script src="{{asset('js/dashforge.settings.js')}}"></script>
     <!-- jQuery -->
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>


    <script>
    $(document).ready(function() {
    $('#example').DataTable({
        responsive: true,
        pageLength: 10, // Number of rows per page
        lengthMenu: [5, 10, 25, 50], // Page length options
        order: [[0, 'asc']], // Default sorting by the first column
        language: {
            search: "Filter records:", // Customize the search input placeholder
            lengthMenu: "Show _MENU_ entries per page"
        }
    });
});

</script>

    <!-- <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script> -->
  
    <script>
      $(function(){
        'use strict'

        var ctx1 = document.getElementById('chartBar1').getContext('2d');
        new Chart(ctx1, {
          type: 'bar',
          data: {
            labels: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
            datasets: [{
              data: [150,110,90,115,125,160,160,140,100,110,120,120],
              backgroundColor: '#66a4fb'
            },{
              data: [180,140,120,135,155,170,180,150,140,150,130,130],
              backgroundColor: '#65e0e0'
            }]
          },
          options: {
            maintainAspectRatio: false,
            legend: {
              display: false,
                labels: {
                  display: false
                }
            },
            scales: {
              xAxes: [{
                display: false,
                barPercentage: 0.5
              }],
              yAxes: [{
                gridLines: {
                  color: '#ebeef3'
                },
                ticks: {
                  fontColor: '#8392a5',
                  fontSize: 10,
                  min: 80,
                  max: 200
                }
              }]
            }
          }
        });


        /** PIE CHART **/
        var datapie = {
          labels: ['Organic Search', 'Email', 'Referral', 'Social Media'],
          datasets: [{
            data: [20,20,30,25],
            backgroundColor: ['#f77eb9', '#7ebcff','#7ee5e5','#fdbd88']
          }]
        };

        var optionpie = {
          maintainAspectRatio: false,
          responsive: true,
          legend: {
            display: false,
          },
          animation: {
            animateScale: true,
            animateRotate: true
          }
        };

        // For a pie chart
        var ctx2 = document.getElementById('chartDonut');
        var myDonutChart = new Chart(ctx2, {
          type: 'doughnut',
          data: datapie,
          options: optionpie
        });


        $.plot('#flotChart1', [{
            data: df1,
            color: '#c0ccda',
            lines: {
              fill: true,
              fillColor: '#f5f6fa'
            }
          },{
              data: df3,
              color: '#0168fa',
              lines: {
                fill: true,
                fillColor: '#d1e6fa'
              }
            }], {
    			series: {
    				shadowSize: 0,
            lines: {
              show: true,
              lineWidth: 1.5
            }
    			},
          grid: {
            borderWidth: 0,
            labelMargin: 0
          },
    			yaxis: {
            show: false,
            max: 65
          },
    			xaxis: {
            show: false,
            min: 40,
            max: 100
          }
    		});


        $.plot('#flotChart2', [{
          data: df2,
          color: '#66a4fb',
          lines: {
            show: true,
            lineWidth: 1.5,
            fill: .03
          }
        },{
          data: df1,
          color: '#00cccc',
          lines: {
            show: true,
            lineWidth: 1.5,
            fill: true,
            fillColor: '#fff'
          }
        },{
          data: df3,
          color: '#e3e7ed',
          bars: {
            show: true,
            lineWidth: 0,
            barWidth: .5,
            fill: 1
          }
        }], {
          series: {
            shadowSize: 0
          },
          grid: {
            aboveData: true,
            color: '#e5e9f2',
            borderWidth: {
              top: 0,
              right: 1,
              bottom: 1,
              left: 1
            },
            labelMargin: 0
          },
    			yaxis: {
            show: false,
            min: 0,
            max: 100
          },
    			xaxis: {
            show: true,
            min: 40,
            max: 80,
            ticks: 6,
            tickColor: 'rgba(0,0,0,0.04)'
          }
    		});

        var df3data1 = [[0,12],[1,10],[2,7],[3,11],[4,15],[5,20],[6,22],[7,19],[8,18],[9,20],[10,17],[11,19],[12,18],[13,14],[14,9]];
        var df3data2 = [[0,0],[1,0],[2,0],[3,2],[4,5],[5,2],[6,12],[7,15],[8,10],[9,8],[10,10],[11,7],[12,2],[13,4],[14,0]];
        var df3data3 = [[0,2],[1,1],[2,2],[3,4],[4,2],[5,1],[6,0],[7,0],[8,5],[9,2],[10,8],[11,6],[12,9],[13,2],[14,0]];
        var df3data4 = [[0,0],[1,5],[2,2],[3,0],[4,2],[5,7],[6,10],[7,12],[8,8],[9,6],[10,4],[11,2],[12,0],[13,0],[14,0]];

        var flotChartOption1 = {
          series: {
            shadowSize: 0,
            bars: {
              show: true,
              lineWidth: 0,
              barWidth: .5,
              fill: 1
            }
          },
          grid: {
            aboveData: true,
            color: '#e5e9f2',
            borderWidth: 0,
            labelMargin: 0
          },
    			yaxis: {
            show: false,
            min: 0,
            max: 25
          },
    			xaxis: {
            show: false
          }
    		};

        $.plot('#flotChart3', [{
          data: df3data1,
          color: '#e5e9f2'
        },{
          data: df3data2,
          color: '#66a4fb'
        }], flotChartOption1);


        $.plot('#flotChart4', [{
          data: df3data1,
          color: '#e5e9f2'
        },{
          data: df3data3,
          color: '#7ee5e5'
        }], flotChartOption1);

        $.plot('#flotChart5', [{
          data: df3data1,
          color: '#e5e9f2'
        },{
          data: df3data4,
          color: '#f77eb9'
        }], flotChartOption1);

      })
    </script>
   <script>
          $('#example1').DataTable({
  language: {
    searchPlaceholder: 'Search...',
    sSearch: '',
    lengthMenu: '_MENU_ items/page',
  }
});

        </script>  <script>
          $('#example1').DataTable({
  language: {
    searchPlaceholder: 'Search...',
    sSearch: '',
    lengthMenu: '_MENU_ items/page',
  }
});

        </script>
 <script>
    window.addEventListener('load', () => {
      const loader = document.getElementById('loader');
      const content = document.getElementById('content');
      loader.style.display = 'none';
      content.style.display = 'block';
    });
  </script>