<?php
/**
 * Created by PhpStorm.
 * User: harrisonchow
 * Date: 7/10/16
 * Time: 11:12 AM
 */

$websiteSubmit = false;
$analytics = false;
$users = false;

if (isset($includeFile) && $includeFile != "") {
    switch ($includeFile) {
        case "website-submit":
            $websiteSubmit = true;
            break;
        case "analytics-main":
            $analytics = true;
            break;
        case "users":
            $users = true;
            break;
    }
}
?>

<!-- footer content -->
<footer>
    <div class="pull-right">
        &copy; 2016 <a href="https://developersfoundation.ca/">Developers' Foundation</a>, made with love
    </div>
    <div class="clearfix"></div>
</footer>
<!-- /footer content -->
</div>
</div>

<!--SweetAlert -->
<script src="assets/js/sweetalert.min.js"></script>
<!-- jQuery -->
<script src="vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="vendors/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<script src="vendors/Chart.js/dist/Chart.min.js"></script>
<!-- Dropzone.js -->
<script src="vendors/dropzone/dist/min/dropzone.min.js"></script>
<!-- gauge.js -->
<script src="vendors/gauge.js/dist/gauge.min.js"></script>
<!-- jQuery Smart Wizard -->
<script src="vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
<!-- JS Parse Database -->
<script src="assets/js/parse-1.6.14.min.js"></script>
<!-- FullCalendar -->
<script src="vendors/moment/min/moment.min.js"></script>
<script src="vendors/fullcalendar/dist/fullcalendar.min.js"></script>
<!-- bootstrap-wysiwyg -->
<script src="vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
<script src="vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
<script src="vendors/google-code-prettify/src/prettify.js"></script>
<!-- jQuery Sparklines -->
<script src="vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- Flot -->
<script src="vendors/Flot/jquery.flot.js"></script>
<script src="vendors/Flot/jquery.flot.pie.js"></script>
<script src="vendors/Flot/jquery.flot.time.js"></script>
<script src="vendors/Flot/jquery.flot.stack.js"></script>
<script src="vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="production/js/flot/jquery.flot.orderBars.js"></script>
<script src="production/js/flot/date.js"></script>
<script src="production/js/flot/jquery.flot.spline.js"></script>
<script src="production/js/flot/curvedLines.js"></script>
<!-- JQVMap -->
<script src="vendors/jqvmap/dist/jquery.vmap.js"></script>
<script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="production/js/moment/moment.min.js"></script>
<script src="production/js/datepicker/daterangepicker.js"></script>
<!-- bootstrap-progressbar -->
<script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- Data Table -->
<script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="vendors/jszip/dist/jszip.min.js"></script>
<script src="vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="vendors/pdfmake/build/vfs_fonts.js"></script>

<!-- jQuery Tags Input -->
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/bootstrap-tokenfield.js"></script>

<!-- Custom Theme Scripts -->
<script src="build/js/custom.min.js"></script>

<!-- FullCalendar -->
<script>
    $(window).load(function () {
        var date = new Date(),
            d = date.getDate(),
            m = date.getMonth(),
            y = date.getFullYear(),
            started,
            categoryClass;

        var calendar = $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            selectable: true,
            selectHelper: true,
            select: function (start, end, allDay) {
                $('#fc_create').click();

                started = start;
                ended = end;

                $(".antosubmit").on("click", function () {
                    var title = $("#title").val();
                    if (end) {
                        ended = end;
                    }

                    categoryClass = $("#event_type").val();

                    if (title) {
                        calendar.fullCalendar('renderEvent', {
                                title: title,
                                start: started,
                                end: end,
                                allDay: allDay
                            },
                            true // make the event "stick"
                        );
                    }

                    $('#title').val('');

                    calendar.fullCalendar('unselect');

                    $('.antoclose').click();

                    return false;
                });
            },
            eventClick: function (calEvent, jsEvent, view) {
                $('#fc_edit').click();
                $('#title2').val(calEvent.title);

                categoryClass = $("#event_type").val();

                $(".antosubmit2").on("click", function () {
                    calEvent.title = $("#title2").val();

                    calendar.fullCalendar('updateEvent', calEvent);
                    $('.antoclose2').click();
                });

                calendar.fullCalendar('unselect');
            },
            editable: true,
            events: [{
                title: 'All Day Event',
                start: new Date(y, m, 1)
            }, {
                title: 'Long Event',
                start: new Date(y, m, d - 5),
                end: new Date(y, m, d - 2)
            }, {
                title: 'Meeting',
                start: new Date(y, m, d, 10, 30),
                allDay: false
            }, {
                title: 'Lunch',
                start: new Date(y, m, d + 14, 12, 0),
                end: new Date(y, m, d, 14, 0),
                allDay: false
            }, {
                title: 'Birthday Party',
                start: new Date(y, m, d + 1, 19, 0),
                end: new Date(y, m, d + 1, 22, 30),
                allDay: false
            }, {
                title: 'Click for Google',
                start: new Date(y, m, 28),
                end: new Date(y, m, 29),
                url: 'http://google.com/'
            }]
        });
    });
</script>

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

<!-- bootstrap-wysiwyg -->
<script>
    $(document).ready(function () {
        function initToolbarBootstrapBindings() {
            var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
                    'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
                    'Times New Roman', 'Verdana'
                ],
                fontTarget = $('[title=Font]').siblings('.dropdown-menu');
            $.each(fonts, function (idx, fontName) {
                fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));
            });
            $('a[title]').tooltip({
                container: 'body'
            });
            $('.dropdown-menu input').click(function () {
                return false;
            })
                .change(function () {
                    $(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
                })
                .keydown('esc', function () {
                    this.value = '';
                    $(this).change();
                });

            $('[data-role=magic-overlay]').each(function () {
                var overlay = $(this),
                    target = $(overlay.data('target'));
                overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
            });

            if ("onwebkitspeechchange" in document.createElement("input")) {
                var editorOffset = $('#editor').offset();

                $('.voiceBtn').css('position', 'absolute').offset({
                    top: editorOffset.top,
                    left: editorOffset.left + $('#editor').innerWidth() - 35
                });
            } else {
                $('.voiceBtn').hide();
            }
        }

        function showErrorAlert(reason, detail) {
            var msg = '';
            if (reason === 'unsupported-file-type') {
                msg = "Unsupported format " + detail;
            } else {
                console.log("error uploading file", reason, detail);
            }
            $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
                '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
        }

        initToolbarBootstrapBindings();

        $('#editor').wysiwyg({
            fileUploadError: showErrorAlert
        });

        window.prettyPrint;
        prettyPrint();
    });
</script>
<!-- /bootstrap-wysiwyg -->


<?php
if ($websiteSubmit) {
    echo '
<!-- PNotify TODO: MOVE THIS TO HEADER -->
    <link href="vendors/pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <link href="vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">
<!-- PNotify -->
    <script src="vendors/pnotify/dist/pnotify.js"></script>
    <script src="vendors/pnotify/dist/pnotify.buttons.js"></script>
    <script src="vendors/pnotify/dist/pnotify.nonblock.js"></script>';
    echo "<script src='assets/js/website-submit.js'></script>";

    // add gallery file submit functionality
    echo "<script src='assets/js/gallery-submit.js'></script>";
} elseif ($analytics) {
    echo '
    <!-- jQuery Smart Wizard -->
<script>
    $(document).ready(function () {
        $(\'#wizard\').smartWizard();

        $(\'#wizard_verticle\').smartWizard({
            transitionEffect: \'slide\'
        });

        $(\'.buttonPrevious\').addClass(\'btn btn-primary\');
        $(\'.buttonNext\').addClass(\'btn btn-success\');
        $(\'.buttonFinish\').addClass(\'btn btn-default\');
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
                color: \'#fff\'
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
                axisLabelFontFamily: \'Verdana, Arial\',
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
        var chartColours = [\'#96CA59\', \'#3F97EB\', \'#72c380\', \'#6f7a8a\', \'#f7cb38\', \'#5a8022\', \'#2c7282\'];

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
                    return label + \'&nbsp;&nbsp;\';
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
            type: \'doughnut\',
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
            type: \'doughnut\',
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
            type: \'doughnut\',
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
        $(\'#world-map-gdp\').vectorMap({
            map: \'world_en\',
            backgroundColor: null,
            color: \'#ffffff\',
            hoverOpacity: 0.7,
            selectedColor: \'#666666\',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: [\'#E6F2F0\', \'#149B7E\'],
            normalizeFunction: \'polynomial\'
        });
    });
</script>
<!-- /JQVMap -->

<!-- bootstrap-daterangepicker -->
<script>
    $(document).ready(function () {

        var cb = function (start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
            $(\'#reportrange span\').html(start.format(\'MMMM D, YYYY\') + \' - \' + end.format(\'MMMM D, YYYY\'));
        };

        var optionSet1 = {
            startDate: moment().subtract(29, \'days\'),
            endDate: moment(),
            minDate: \'01/01/2012\',
            maxDate: \'12/31/2015\',
            dateLimit: {
                days: 60
            },
            showDropdowns: true,
            showWeekNumbers: true,
            timePicker: false,
            timePickerIncrement: 1,
            timePicker12Hour: true,
            ranges: {
                \'Today\': [moment(), moment()],
                \'Yesterday\': [moment().subtract(1, \'days\'), moment().subtract(1, \'days\')],
                \'Last 7 Days\': [moment().subtract(6, \'days\'), moment()],
                \'Last 30 Days\': [moment().subtract(29, \'days\'), moment()],
                \'This Month\': [moment().startOf(\'month\'), moment().endOf(\'month\')],
                \'Last Month\': [moment().subtract(1, \'month\').startOf(\'month\'), moment().subtract(1, \'month\').endOf(\'month\')]
            },
            opens: \'left\',
            buttonClasses: [\'btn btn-default\'],
            applyClass: \'btn-small btn-primary\',
            cancelClass: \'btn-small\',
            format: \'MM/DD/YYYY\',
            separator: \' to \',
            locale: {
                applyLabel: \'Submit\',
                cancelLabel: \'Clear\',
                fromLabel: \'From\',
                toLabel: \'To\',
                customRangeLabel: \'Custom\',
                daysOfWeek: [\'Su\', \'Mo\', \'Tu\', \'We\', \'Th\', \'Fr\', \'Sa\'],
                monthNames: [\'January\', \'February\', \'March\', \'April\', \'May\', \'June\', \'July\', \'August\', \'September\', \'October\', \'November\', \'December\'],
                firstDay: 1
            }
        };
        $(\'#reportrange span\').html(moment().subtract(29, \'days\').format(\'MMMM D, YYYY\') + \' - \' + moment().format(\'MMMM D, YYYY\'));
        $(\'#reportrange\').daterangepicker(optionSet1, cb);
        $(\'#reportrange\').on(\'show.daterangepicker\', function () {
            console.log("show event fired");
        });
        $(\'#reportrange\').on(\'hide.daterangepicker\', function () {
            console.log("hide event fired");
        });
        $(\'#reportrange\').on(\'apply.daterangepicker\', function (ev, picker) {
            console.log("apply event fired, start/end dates are " + picker.startDate.format(\'MMMM D, YYYY\') + " to " + picker.endDate.format(\'MMMM D, YYYY\'));
        });
        $(\'#reportrange\').on(\'cancel.daterangepicker\', function (ev, picker) {
            console.log("cancel event fired");
        });
        $(\'#options1\').click(function () {
            $(\'#reportrange\').data(\'daterangepicker\').setOptions(optionSet1, cb);
        });
        $(\'#options2\').click(function () {
            $(\'#reportrange\').data(\'daterangepicker\').setOptions(optionSet2, cb);
        });
        $(\'#destroy\').click(function () {
            $(\'#reportrange\').data(\'daterangepicker\').remove();
        });
    });
</script>
<!-- /bootstrap-daterangepicker -->

<!-- jQuery Sparklines -->
<script>
    $(document).ready(function () {
        $(".sparkline_one").sparkline([2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 5, 6, 4, 5, 6, 3, 5, 4, 5, 4, 5, 4, 3, 4, 5, 6, 7, 5, 4, 3, 5, 6], {
            type: \'bar\',
            height: \'125\',
            barWidth: 13,
            colorMap: {
                \'7\': \'#a1a1a1\'
            },
            barSpacing: 2,
            barColor: \'#26B99A\'
        });

        $(".sparkline11").sparkline([0, 0, 0, 0, 0, 0, 0, 0, 3, 1, 1, 0, 4, 0, 0, 30, 0, 23, 0, 3, 0], {
            type: \'line\',
            height: \'40\',
            width: \'200\',
            lineColor: \'#26B99A\',
            fillColor: \'#ffffff\',
            lineWidth: 3,
            spotColor: \'#34495E\',
            minSpotColor: \'#34495E\'
        });

        $(".sparkline22").sparkline([0, 0, 0, 0, 0, 0, 0, 0, 3, 1, 1, 0, 4, 0, 0, 30, 0, 23, 0, 3, 0], {
            type: \'line\',
            height: \'40\',
            width: \'200\',
            lineColor: \'#26B99A\',
            fillColor: \'#ffffff\',
            lineWidth: 3,
            spotColor: \'#34495E\',
            minSpotColor: \'#34495E\'
        });
        $(".sparkline33").sparkline([0, 0, 0, 0, 0, 0, 0, 0, 3, 1, 1, 0, 4, 0, 0, 30, 0, 23, 0, 3, 0], {
            type: \'line\',
            height: \'40\',
            width: \'200\',
            lineColor: \'#26B99A\',
            fillColor: \'#ffffff\',
            lineWidth: 3,
            spotColor: \'#34495E\',
            minSpotColor: \'#34495E\'
        });
    });
</script>
<!-- /jQuery Sparklines -->
    ';
} elseif ($users) {
    echo '<!-- jQuery Smart Wizard -->
<script>
    $(document).ready(function () {
        $(\'#wizard\').smartWizard();

        $(\'#wizard_verticle\').smartWizard({
            transitionEffect: \'slide\'
        });

        $(\'.buttonPrevious\').addClass(\'btn btn-primary\');
        $(\'.buttonNext\').addClass(\'btn btn-success\');
        $(\'.buttonFinish\').addClass(\'btn btn-default\');
    });
</script>
<!-- /jQuery Smart Wizard -->
<!-- Datatables -->
<script>
    $(document).ready(function () {
        var handleDataTableButtons = function () {
            if ($("#datatable-buttons").length) {
                $("#datatable-buttons").DataTable({
                    dom: "Bfrtip",
                    buttons: [
                        {
                            extend: "copy",
                            className: "btn-sm"
                        },
                        {
                            extend: "csv",
                            className: "btn-sm"
                        },
                        {
                            extend: "excel",
                            className: "btn-sm"
                        },
                        {
                            extend: "pdfHtml5",
                            className: "btn-sm"
                        },
                        {
                            extend: "print",
                            className: "btn-sm"
                        },
                    ],
                    responsive: true
                });
            }
        };

        TableManageButtons = function () {
            "use strict";
            return {
                init: function () {
                    handleDataTableButtons();
                }
            };
        }();

        $(\'#datatable\').dataTable();
        $(\'#datatable-keytable\').DataTable({
            keys: true
        });

        $(\'#datatable-responsive\').DataTable();

        $(\'#datatable-scroller\').DataTable({
            ajax: "js/datatables/json/scroller-demo.json",
            deferRender: true,
            scrollY: 380,
            scrollCollapse: true,
            scroller: true
        });

        var table = $(\'#datatable-fixed-header\').DataTable({
            fixedHeader: true
        });

        TableManageButtons.init();
    });
</script>
<!-- /Datatables -->

<!-- Auto Tag -->
<script>
$(document).ready(function () {
  $(\'#tags_0\').tokenfield({
  autocomplete: {
    source: [\'red\',\'blue\',\'green\',\'yellow\',\'violet\',\'brown\',\'purple\',\'black\',\'white\'],
    delay: 100
  },
  showAutocompleteOnFocus: true
});
});
</script>
<!-- / Auto Tag -->
';
}
?>

</body>
</html>
