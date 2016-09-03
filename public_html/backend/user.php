<?php
include_once "htmlHeader.php";
?>
<!-- page content -->
<div class="right_col" role="main">

    <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Overview
                        <small>Weekly progress</small>
                    </h2>
                    <div class="filter">
                        <div id="reportrange" class="pull-right"
                             style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                            <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="col-md-9 col-sm-12 col-xs-12">
                        <div class="demo-container" style="height:280px">
                            <div id="placeholder33x" class="demo-placeholder"></div>
                        </div>
                        <div class="tiles">
                            <div class="col-md-4 tile">
                                <span>Total Sessions</span>
                                <h2>68</h2>
                                <span class="sparkline11 graph" style="height: 160px;">
                                          <canvas width="200" height="60"
                                                  style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                      </span>
                            </div>
                            <div class="col-md-4 tile">
                                <span>Total Users</span>
                                <h2>64</h2>
                                <span class="sparkline22 graph" style="height: 160px;">
                                          <canvas width="200" height="60"
                                                  style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                      </span>
                            </div>
                            <div class="col-md-4 tile">
                                <span>Page Views</span>
                                <h2>68</h2>
                                <span class="sparkline33 graph" style="height: 160px;">
                                          <canvas width="200" height="60"
                                                  style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                      </span>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 bg-white">
                        <div class="x_title">
                            <h2>Other Percentages</h2>
                            <div class="clearfix"></div>
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-6">
                            <div>
                                <p>Bounce Rate</p>
                                <div class="">
                                    <div class="progress progress_sm" style="width: 76%;">
                                        <div class="progress-bar bg-green" role="progressbar"
                                             data-transitiongoal="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <p>New Sessions</p>
                                <div class="">
                                    <div class="progress progress_sm" style="width: 76%;">
                                        <div class="progress-bar bg-green" role="progressbar"
                                             data-transitiongoal="94.12"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-6">
                            <div>
                                <p>Old/Returning Sessions</p>
                                <div class="">
                                    <div class="progress progress_sm" style="width: 76%;">
                                        <div class="progress-bar bg-green" role="progressbar"
                                             data-transitiongoal="5.88"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Viewers' location
                    <small>geo-presentation</small>
                </h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a>
                            </li>
                            <li><a href="#">Settings 2</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="dashboard-widget-content">
                    <div class="col-md-4 hidden-small">
                        <h2 class="line_30">n Views from m countries</h2>

                        <table class="countries_list">
                            <tbody>
                            <tr>
                                <td>United Kingdom</td>
                                <td class="fs15 fw700 text-right">69.12%</td>
                            </tr>
                            <tr>
                                <td>(Not Set)</td>
                                <td class="fs15 fw700 text-right">14.71%</td>
                            </tr>
                            <tr>
                                <td>Canada</td>
                                <td class="fs15 fw700 text-right">10.29%</td>
                            </tr>
                            <tr>
                                <td>Argentina</td>
                                <td class="fs15 fw700 text-right">1.47%</td>
                            </tr>
                            <tr>
                                <td>India</td>
                                <td class="fs15 fw700 text-right">1.47%</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div id="world-map-gdp" class="col-md-8 col-sm-12 col-xs-12" style="height:230px;"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="x_panel fixed_height_320">
            <div class="x_title">
                <h2>Operating System
                    <small>Sessions</small>
                </h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a>
                            </li>
                            <li><a href="#">Settings 2</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <table class="" style="width:100%">
                    <tr>
                        <th style="width:37%;">
                            <p>Most Used</p>
                        </th>
                        <th>
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                <p class="">Type</p>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                <p class="">Percentage</p>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <canvas id="canvas1" height="140" width="140"
                                    style="margin: 15px 10px 10px 0"></canvas>
                        </td>
                        <td>
                            <table class="tile_info">
                                <tr>
                                    <td>
                                        <p><i class="fa fa-square blue"></i>Windows </p>
                                    </td>
                                    <td>10.77%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><i class="fa fa-square green"></i>Macintosh </p>
                                    </td>
                                    <td>80%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><i class="fa fa-square purple"></i>(Not Set) </p>
                                    </td>
                                    <td>9.23%</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="x_panel fixed_height_320">
            <div class="x_title">
                <h2>Browser
                    <small>Sessions</small>
                </h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a>
                            </li>
                            <li><a href="#">Settings 2</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <table class="" style="width:100%">
                    <tr>
                        <th style="width:37%;">
                            <p>Most Used</p>
                        </th>
                        <th>
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                <p class="">Type</p>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                <p class="">Percentage</p>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <canvas id="canvas2" height="140" width="140"
                                    style="margin: 15px 10px 10px 0"></canvas>
                        </td>
                        <td>
                            <table class="tile_info">
                                <tr>
                                    <td>
                                        <p><i class="fa fa-square blue"></i>Chrome </p>
                                    </td>
                                    <td>65%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><i class="fa fa-square green"></i>Mozilla </p>
                                    </td>
                                    <td>10%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><i class="fa fa-square purple"></i>Edge </p>
                                    </td>
                                    <td>20%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><i class="fa fa-square aero"></i>Safari </p>
                                    </td>
                                    <td>5%</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="x_panel fixed_height_320">
            <div class="x_title">
                <h2>City
                    <small>Sessions</small>
                </h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a>
                            </li>
                            <li><a href="#">Settings 2</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <table class="" style="width:100%">
                    <tr>
                        <th style="width:37%;">
                            <p>Top 5</p>
                        </th>
                        <th>
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                <p class="">City </p>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                <p class="">Percentage </p>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <canvas id="canvas3" height="140" width="140"
                                    style="margin: 15px 10px 10px 0"></canvas>
                        </td>
                        <td>
                            <table class="tile_info">
                                <tr>
                                    <td>
                                        <p><i class="fa fa-square blue"></i>(Not Set) </p>
                                    </td>
                                    <td>85.29%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><i class="fa fa-square green"></i>Toronto </p>
                                    </td>
                                    <td>10.29%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><i class="fa fa-square purple"></i>Rivadavia </p>
                                    </td>
                                    <td>1.47%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><i class="fa fa-square aero"></i>Gdynia </p>
                                    </td>
                                    <td>1.47%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><i class="fa fa-square red"></i>Honolulu </p>
                                    </td>
                                    <td>1.47%</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /page content -->

<!-- jQuery Smart Wizard -->
<script>
    $(document).ready(function () {
        $('#wizard').smartWizard();

        $('#wizard_verticle').smartWizard({
            transitionEffect: 'slide'
        });

        $('.buttonPrevious').addClass('btn btn-primary');
        $('.buttonNext').addClass('btn btn-success');
        $('.buttonFinish').addClass('btn btn-default');
    });
</script>
<!-- /jQuery Smart Wizard -->

<!-- Flot -->
<script>
    $(document).ready(function () {
        var data1 = [
            [gd(2012, 1, 1), 17],
            [gd(2012, 1, 2), 74],
            [gd(2012, 1, 3), 6],
            [gd(2012, 1, 4), 39],
            [gd(2012, 1, 5), 20],
            [gd(2012, 1, 6), 85],
            [gd(2012, 1, 7), 7]
        ];

        var data2 = [
            [gd(2012, 1, 1), 82],
            [gd(2012, 1, 2), 23],
            [gd(2012, 1, 3), 66],
            [gd(2012, 1, 4), 9],
            [gd(2012, 1, 5), 119],
            [gd(2012, 1, 6), 6],
            [gd(2012, 1, 7), 9]
        ];
        $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
            data1, data2
        ], {
            series: {
                lines: {
                    show: false,
                    fill: true
                },
                splines: {
                    show: true,
                    tension: 0.4,
                    lineWidth: 1,
                    fill: 0.4
                },
                points: {
                    radius: 0,
                    show: true
                },
                shadowSize: 2
            },
            grid: {
                verticalLines: true,
                hoverable: true,
                clickable: true,
                tickColor: "#d5d5d5",
                borderWidth: 1,
                color: '#fff'
            },
            colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
            xaxis: {
                tickColor: "rgba(51, 51, 51, 0.06)",
                mode: "time",
                tickSize: [1, "day"],
                //tickLength: 10,
                axisLabel: "Date",
                axisLabelUseCanvas: true,
                axisLabelFontSizePixels: 12,
                axisLabelFontFamily: 'Verdana, Arial',
                axisLabelPadding: 10
            },
            yaxis: {
                ticks: 8,
                tickColor: "rgba(51, 51, 51, 0.06)",
            },
            tooltip: false
        });

        function gd(year, month, day) {
            return new Date(year, month - 1, day).getTime();
        }
    });
</script>
<!-- /Flot -->

<!-- Flot for graph-->
<script>
    $(document).ready(function () {
        //define chart clolors ( you maybe add more colors if you want or flot will add it automatic )
        var chartColours = ['#96CA59', '#3F97EB', '#72c380', '#6f7a8a', '#f7cb38', '#5a8022', '#2c7282'];

        //generate random number for charts
        randNum = function () {
            return (Math.floor(Math.random() * (1 + 40 - 20))) + 20;
        };

        var d1 = [];
        //var d2 = [];

        //here we generate data for chart
        for (var i = 0; i < 30; i++) {
            d1.push([new Date(Date.today().add(i).days()).getTime(), randNum() + i + i + 10]);
            //    d2.push([new Date(Date.today().add(i).days()).getTime(), randNum()]);
        }

        var chartMinDate = d1[0][0]; //first day
        var chartMaxDate = d1[20][0]; //last day

        var tickSize = [1, "day"];
        var tformat = "%d/%m/%y";

        //graph options
        var options = {
            grid: {
                show: true,
                aboveData: true,
                color: "#3f3f3f",
                labelMargin: 10,
                axisMargin: 0,
                borderWidth: 0,
                borderColor: null,
                minBorderMargin: 5,
                clickable: true,
                hoverable: true,
                autoHighlight: true,
                mouseActiveRadius: 100
            },
            series: {
                lines: {
                    show: true,
                    fill: true,
                    lineWidth: 2,
                    steps: false
                },
                points: {
                    show: true,
                    radius: 4.5,
                    symbol: "circle",
                    lineWidth: 3.0
                }
            },
            legend: {
                position: "ne",
                margin: [0, -25],
                noColumns: 0,
                labelBoxBorderColor: null,
                labelFormatter: function (label, series) {
                    // just add some space to labes
                    return label + '&nbsp;&nbsp;';
                },
                width: 40,
                height: 1
            },
            colors: chartColours,
            shadowSize: 0,
            tooltip: true, //activate tooltip
            tooltipOpts: {
                content: "%s: %y.0",
                xDateFormat: "%d/%m",
                shifts: {
                    x: -30,
                    y: -50
                },
                defaultTheme: false
            },
            yaxis: {
                min: 0
            },
            xaxis: {
                mode: "time",
                minTickSize: tickSize,
                timeformat: tformat,
                min: chartMinDate,
                max: chartMaxDate
            }
        };
        var plot = $.plot($("#placeholder33x"), [{
            label: "Email Sent",
            data: d1,
            lines: {
                fillColor: "rgba(150, 202, 89, 0.12)"
            }, //#96CA59 rgba(150, 202, 89, 0.42)
            points: {
                fillColor: "#fff"
            }
        }], options);
    });
</script>
<!-- /Flot -->

<!-- Doughnut Chart -->
<script>
    $(document).ready(function () {
        var options = {
            legend: false,
            responsive: false
        };

        new Chart(document.getElementById("canvas1"), {
            type: 'doughnut',
            tooltipFillColor: "rgba(51, 51, 51, 0.55)",
            data: {
                labels: [
                    "(Not Set)",
                    "Macintosh",
                    "Windows"
                ],
                datasets: [{
                    data: [6, 52, 7],
                    backgroundColor: [
                        // "#BDC3C7",
                        "#9B59B6",
                        //"#E74C3C",
                        "#26B99A",
                        "#3498DB"
                    ],
                    hoverBackgroundColor: [
                        //"#CFD4D8",
                        "#B370CF",
                        //"#E95E4F",
                        "#36CAAB",
                        "#49A9EA"
                    ]
                }]
            },
            options: options
        });
        new Chart(document.getElementById("canvas2"), {
            type: 'doughnut',
            tooltipFillColor: "rgba(51, 51, 51, 0.55)",
            data: {
                labels: [
                    "Safari",
                    "Edge",
                    "Mozilla",
                    "Chrome"
                ],
                datasets: [{
                    data: [5, 20, 10, 65],
                    backgroundColor: [
                        "#BDC3C7",
                        "#9B59B6",
                        "#26B99A",
                        "#3498DB"
                    ],
                    hoverBackgroundColor: [
                        "#CFD4D8",
                        "#B370CF",
                        "#36CAAB",
                        "#49A9EA"
                    ]
                }]
            },
            options: options
        });
        new Chart(document.getElementById("canvas3"), {
            type: 'doughnut',
            tooltipFillColor: "rgba(51, 51, 51, 0.55)",
            data: {
                labels: [
                    "Gdynia",
                    "Rivadavia",
                    "Honolulu",
                    "Toronto",
                    "(Not Set)"
                ],
                datasets: [{
                    data: [1, 1, 1, 7, 58],
                    backgroundColor: [
                        "#BDC3C7",
                        "#9B59B6",
                        "#E74C3C",
                        "#26B99A",
                        "#3498DB"
                    ],
                    hoverBackgroundColor: [
                        "#CFD4D8",
                        "#B370CF",
                        "#E95E4F",
                        "#36CAAB",
                        "#49A9EA"
                    ]
                }]
            },
            options: options
        });
    });
</script>
<!-- /Doughnut Chart -->

<!-- JQVMap -->
<script>
    $(document).ready(function () {
        $('#world-map-gdp').vectorMap({
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#666666',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#E6F2F0', '#149B7E'],
            normalizeFunction: 'polynomial'
        });
    });
</script>
<!-- /JQVMap -->

<!-- bootstrap-daterangepicker -->
<script>
    $(document).ready(function () {

        var cb = function (start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        };

        var optionSet1 = {
            startDate: moment().subtract(29, 'days'),
            endDate: moment(),
            minDate: '01/01/2012',
            maxDate: '12/31/2015',
            dateLimit: {
                days: 60
            },
            showDropdowns: true,
            showWeekNumbers: true,
            timePicker: false,
            timePickerIncrement: 1,
            timePicker12Hour: true,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            opens: 'left',
            buttonClasses: ['btn btn-default'],
            applyClass: 'btn-small btn-primary',
            cancelClass: 'btn-small',
            format: 'MM/DD/YYYY',
            separator: ' to ',
            locale: {
                applyLabel: 'Submit',
                cancelLabel: 'Clear',
                fromLabel: 'From',
                toLabel: 'To',
                customRangeLabel: 'Custom',
                daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                firstDay: 1
            }
        };
        $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
        $('#reportrange').daterangepicker(optionSet1, cb);
        $('#reportrange').on('show.daterangepicker', function () {
            console.log("show event fired");
        });
        $('#reportrange').on('hide.daterangepicker', function () {
            console.log("hide event fired");
        });
        $('#reportrange').on('apply.daterangepicker', function (ev, picker) {
            console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
        });
        $('#reportrange').on('cancel.daterangepicker', function (ev, picker) {
            console.log("cancel event fired");
        });
        $('#options1').click(function () {
            $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
        });
        $('#options2').click(function () {
            $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
        });
        $('#destroy').click(function () {
            $('#reportrange').data('daterangepicker').remove();
        });
    });
</script>
<!-- /bootstrap-daterangepicker -->

<!-- jQuery Sparklines -->
<script>
    $(document).ready(function () {
        $(".sparkline_one").sparkline([2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 5, 6, 4, 5, 6, 3, 5, 4, 5, 4, 5, 4, 3, 4, 5, 6, 7, 5, 4, 3, 5, 6], {
            type: 'bar',
            height: '125',
            barWidth: 13,
            colorMap: {
                '7': '#a1a1a1'
            },
            barSpacing: 2,
            barColor: '#26B99A'
        });

        $(".sparkline11").sparkline([0, 0, 0, 0, 0, 0, 0, 0, 3, 1, 1, 0, 4, 0, 0, 30, 0, 23, 0, 3, 0], {
            type: 'line',
            height: '40',
            width: '200',
            lineColor: '#26B99A',
            fillColor: '#ffffff',
            lineWidth: 3,
            spotColor: '#34495E',
            minSpotColor: '#34495E'
        });

        $(".sparkline22").sparkline([0, 0, 0, 0, 0, 0, 0, 0, 3, 1, 1, 0, 4, 0, 0, 30, 0, 23, 0, 3, 0], {
            type: 'line',
            height: '40',
            width: '200',
            lineColor: '#26B99A',
            fillColor: '#ffffff',
            lineWidth: 3,
            spotColor: '#34495E',
            minSpotColor: '#34495E'
        });
        $(".sparkline33").sparkline([0, 0, 0, 0, 0, 0, 0, 0, 3, 1, 1, 0, 4, 0, 0, 30, 0, 23, 0, 3, 0], {
            type: 'line',
            height: '40',
            width: '200',
            lineColor: '#26B99A',
            fillColor: '#ffffff',
            lineWidth: 3,
            spotColor: '#34495E',
            minSpotColor: '#34495E'
        });
    });
</script>
<!-- /jQuery Sparklines -->

<?php
include_once "htmlFooter.php";
?>
