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

<?php
$includeFile = "analytics-main";
include_once "htmlFooter.php";
?>
