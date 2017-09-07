<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page_title')</title>
    {!! Html::style('back/css/bootstrap.min.css') !!}
    {!! Html::style('back/font-awesome/css/font-awesome.css') !!}
    {!! Html::style('back/css/animate.css') !!}
    {!! Html::style('back/css/style.css') !!}
    <!-- jquery datatables-->
    {!! Html::style('back/css/plugins/dataTables/datatables.min.css') !!}
</head>
<body>
    <div id="wrapper">
    <!-- START SIDEBAR -->
    @include('layouts.partials.sidebar')
    <div id="page-wrapper" class="gray-bg">
      <!-- START MAIN HEADER -->
      @include('layouts.partials.main_header')
      <div class="row wrapper border-bottom white-bg page-heading">
          <div class="col-lg-10">
              @yield('page_header')
              @yield('breadcrumb')
          </div>
          <div class="col-lg-2">

          </div>
      </div>
      <div class="wrapper wrapper-content">


        <!--Flash Session message-->
            <div class="row">
              <div class="col-md-12">
                @if(Session::has('successMessage'))
                  <div class="alert alert-success alert-dismissible" role="alert" id="alert-success">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <strong>Success...!</strong> <span id="success-info"> {{ Session::get('successMessage') }}</span>
                  </div>
                @endif
                @if(Session::has('errorMessage'))
                  <div class="alert alert-error alert-dismissible" role="alert" id="alert-error">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <strong>Error...!</strong> <span id="error-info"> {{ Session::get('errorMessage') }}</span>
                  </div>
                @endif
              </div>
            </div>
          <!--//Flash Session message-->
          @yield('content')

        <!-- START FOOTER -->
        @include('layouts.partials.footer')
      </div>
      <!-- START RIGHT SIDEBAR -->
      @include('layouts.partials.right_sidebar')
    </div>

    <!-- Mainly scripts -->
    {!! Html::script('back/js/jquery-2.1.1.js') !!}
    {!! Html::script('back/js/bootstrap.min.js') !!}
    {!! Html::script('back/js/plugins/metisMenu/jquery.metisMenu.js') !!}
    {!! Html::script('back/js/plugins/slimscroll/jquery.slimscroll.min.js') !!}

    <!-- Flot -->
    {!! Html::script('back/js/plugins/flot/jquery.flot.js') !!}
    {!! Html::script('back/js/plugins/flot/jquery.flot.tooltip.min.js') !!}
    {!! Html::script('back/js/plugins/flot/jquery.flot.spline.js') !!}
    {!! Html::script('back/js/plugins/flot/jquery.flot.resize.js') !!}
    {!! Html::script('back/js/plugins/flot/jquery.flot.pie.js') !!}
    {!! Html::script('back/js/plugins/flot/jquery.flot.symbol.js') !!}
    {!! Html::script('back/js/plugins/flot/jquery.flot.time.js') !!}

    <!-- Peity -->
    {!! Html::script('back/js/plugins/peity/jquery.peity.min.js') !!}
    {!! Html::script('back/js/demo/peity-demo.js') !!}

    <!-- Custom and plugin javascript -->
    {!! Html::script('back/js/inspinia.js') !!}
    {!! Html::script('back/js/plugins/pace/pace.min.js') !!}

    <!-- jQuery UI -->
    {!! Html::script('back/js/plugins/jquery-ui/jquery-ui.min.js') !!}

    <!-- Jvectormap -->
    {!! Html::script('back/js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') !!}
    {!! Html::script('back/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') !!}

    <!-- EayPIE -->
    {!! Html::script('back/js/plugins/easypiechart/jquery.easypiechart.js') !!}

    <!-- Sparkline -->
    {!! Html::script('back/js/plugins/sparkline/jquery.sparkline.min.js') !!}

    <!-- Sparkline demo data  -->
    {!! Html::script('back/js/demo/sparkline-demo.js') !!}

    <!-- DataTables -->
    {!! Html::script('back/js/plugins/dataTables/datatables.min.js') !!}
    <script>
        $(document).ready(function() {
            $('.chart').easyPieChart({
                barColor: '#f8ac59',
//                scaleColor: false,
                scaleLength: 5,
                lineWidth: 4,
                size: 80
            });

            $('.chart2').easyPieChart({
                barColor: '#1c84c6',
//                scaleColor: false,
                scaleLength: 5,
                lineWidth: 4,
                size: 80
            });

            var data2 = [
                [gd(2012, 1, 1), 7], [gd(2012, 1, 2), 6], [gd(2012, 1, 3), 4], [gd(2012, 1, 4), 8],
                [gd(2012, 1, 5), 9], [gd(2012, 1, 6), 7], [gd(2012, 1, 7), 5], [gd(2012, 1, 8), 4],
                [gd(2012, 1, 9), 7], [gd(2012, 1, 10), 8], [gd(2012, 1, 11), 9], [gd(2012, 1, 12), 6],
                [gd(2012, 1, 13), 4], [gd(2012, 1, 14), 5], [gd(2012, 1, 15), 11], [gd(2012, 1, 16), 8],
                [gd(2012, 1, 17), 8], [gd(2012, 1, 18), 11], [gd(2012, 1, 19), 11], [gd(2012, 1, 20), 6],
                [gd(2012, 1, 21), 6], [gd(2012, 1, 22), 8], [gd(2012, 1, 23), 11], [gd(2012, 1, 24), 13],
                [gd(2012, 1, 25), 7], [gd(2012, 1, 26), 9], [gd(2012, 1, 27), 9], [gd(2012, 1, 28), 8],
                [gd(2012, 1, 29), 5], [gd(2012, 1, 30), 8], [gd(2012, 1, 31), 25]
            ];

            var data3 = [
                [gd(2012, 1, 1), 800], [gd(2012, 1, 2), 500], [gd(2012, 1, 3), 600], [gd(2012, 1, 4), 700],
                [gd(2012, 1, 5), 500], [gd(2012, 1, 6), 456], [gd(2012, 1, 7), 800], [gd(2012, 1, 8), 589],
                [gd(2012, 1, 9), 467], [gd(2012, 1, 10), 876], [gd(2012, 1, 11), 689], [gd(2012, 1, 12), 700],
                [gd(2012, 1, 13), 500], [gd(2012, 1, 14), 600], [gd(2012, 1, 15), 700], [gd(2012, 1, 16), 786],
                [gd(2012, 1, 17), 345], [gd(2012, 1, 18), 888], [gd(2012, 1, 19), 888], [gd(2012, 1, 20), 888],
                [gd(2012, 1, 21), 987], [gd(2012, 1, 22), 444], [gd(2012, 1, 23), 999], [gd(2012, 1, 24), 567],
                [gd(2012, 1, 25), 786], [gd(2012, 1, 26), 666], [gd(2012, 1, 27), 888], [gd(2012, 1, 28), 900],
                [gd(2012, 1, 29), 178], [gd(2012, 1, 30), 555], [gd(2012, 1, 31), 993]
            ];


            var dataset = [
                {
                    label: "Number of orders",
                    data: data3,
                    color: "#1ab394",
                    bars: {
                        show: true,
                        align: "center",
                        barWidth: 24 * 60 * 60 * 600,
                        lineWidth:0
                    }

                }, {
                    label: "Payments",
                    data: data2,
                    yaxis: 2,
                    color: "#1C84C6",
                    lines: {
                        lineWidth:1,
                            show: true,
                            fill: true,
                        fillColor: {
                            colors: [{
                                opacity: 0.2
                            }, {
                                opacity: 0.4
                            }]
                        }
                    },
                    splines: {
                        show: false,
                        tension: 0.6,
                        lineWidth: 1,
                        fill: 0.1
                    },
                }
            ];


            var options = {
                xaxis: {
                    mode: "time",
                    tickSize: [3, "day"],
                    tickLength: 0,
                    axisLabel: "Date",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: 'Arial',
                    axisLabelPadding: 10,
                    color: "#d5d5d5"
                },
                yaxes: [{
                    position: "left",
                    max: 1070,
                    color: "#d5d5d5",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: 'Arial',
                    axisLabelPadding: 3
                }, {
                    position: "right",
                    clolor: "#d5d5d5",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: ' Arial',
                    axisLabelPadding: 67
                }
                ],
                legend: {
                    noColumns: 1,
                    labelBoxBorderColor: "#000000",
                    position: "nw"
                },
                grid: {
                    hoverable: false,
                    borderWidth: 0
                }
            };

            function gd(year, month, day) {
                return new Date(year, month - 1, day).getTime();
            }

            var previousPoint = null, previousLabel = null;

            $.plot($("#flot-dashboard-chart"), dataset, options);

            var mapData = {
                "US": 298,
                "SA": 200,
                "DE": 220,
                "FR": 540,
                "CN": 120,
                "AU": 760,
                "BR": 550,
                "IN": 200,
                "GB": 120,
            };

            $('#world-map').vectorMap({
                map: 'world_mill_en',
                backgroundColor: "transparent",
                regionStyle: {
                    initial: {
                        fill: '#e4e4e4',
                        "fill-opacity": 0.9,
                        stroke: 'none',
                        "stroke-width": 0,
                        "stroke-opacity": 0
                    }
                },

                series: {
                    regions: [{
                        values: mapData,
                        scale: ["#1ab394", "#22d6b1"],
                        normalizeFunction: 'polynomial'
                    }]
                },
            });
        });
    </script>
    @yield('additional_scripts')
</body>
</html>
