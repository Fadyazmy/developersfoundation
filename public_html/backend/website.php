<!DOCTYPE html>
<!--TODO: fix JS hieght thing-->
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Developers' Foundation | </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Dropzone.js -->
    <link href="vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="vendors/starrr/dist/starrr.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">

<!-- Step 1: Create the containing elements. -->

<section id="auth-button"></section>
<section id="view-selector"></section>
<section id="timeline"></section>

<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>Developers' Foundation</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile">
                    <div class="profile_pic">
                        <?php echo $userPic; ?>
                        <img src="production/images/img.jpg" alt="<?php echo $user->{'displayName'}; ?>"
                             class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2><?php echo $user->{'displayName'}; ?></h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br/>

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>Dashboard</h3>
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="javascript:void(0)">Dashboard</a></li>
                                    <li><a href="javascript:void(0)">Dashboard2</a></li>
                                    <li><a href="javascript:void(0)">Dashboard3</a></li>
                                </ul>
                            </li>
                            <!--<li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="form.html">General Form</a></li>
                                    <li><a href="form_advanced.html">Advanced Components</a></li>
                                    <li><a href="form_validation.html">Form Validation</a></li>
                                    <li><a href="form_wizards.html">Form Wizard</a></li>
                                    <li><a href="form_upload.html">Form Upload</a></li>
                                    <li><a href="form_buttons.html">Form Buttons</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-desktop"></i> UI Elements <span
                                        class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="general_elements.html">General Elements</a></li>
                                    <li><a href="media_gallery.html">Media Gallery</a></li>
                                    <li><a href="typography.html">Typography</a></li>
                                    <li><a href="icons.html">Icons</a></li>
                                    <li><a href="glyphicons.html">Glyphicons</a></li>
                                    <li><a href="widgets.html">Widgets</a></li>
                                    <li><a href="invoice.html">Invoice</a></li>
                                    <li><a href="inbox.html">Inbox</a></li>
                                    <li><a href="calendar.html">Calendar</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="tables.html">Tables</a></li>
                                    <li><a href="tables_dynamic.html">Table Dynamic</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span
                                        class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="chartjs.html">Chart JS</a></li>
                                    <li><a href="chartjs2.html">Chart JS2</a></li>
                                    <li><a href="morisjs.html">Moris JS</a></li>
                                    <li><a href="echarts.html">ECharts</a></li>
                                    <li><a href="other_charts.html">Other Charts</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
                                    <li><a href="fixed_footer.html">Fixed Footer</a></li>
                                </ul>
                            </li>-->
                        </ul>
                    </div>
                    <div class="menu_section">
                        <h3>Quick Links</h3>
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-laptop"></i> Developers' Foundation
                                <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="https://developersfoundation.ca/">Home Page</a></li>
                                    <li><a href="https://microsoft.developersfoundation.ca/">Microsoft</a></li>
                                </ul>
                            </li>
                            <!--<li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="page_403.html">403 Error</a></li>
                                    <li><a href="page_404.html">404 Error</a></li>
                                    <li><a href="page_500.html">500 Error</a></li>
                                    <li><a href="plain_page.html">Plain Page</a></li>
                                    <li><a href="login.html">Login Page</a></li>
                                    <li><a href="pricing_tables.html">Pricing Tables</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span
                                        class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="#level1_1">Level One</a>
                                    <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li class="sub_menu"><a href="level2.html">Level Two</a>
                                            </li>
                                            <li><a href="#level2_1">Level Two</a>
                                            </li>
                                            <li><a href="#level2_2">Level Two</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#level1_2">Level One</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span
                                        class="label label-success pull-right">Coming Soon</span></a></li>-->
                        </ul>
                    </div>

                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                               aria-expanded="false">
                                <img src="production/images/img.jpg" alt=""><?php echo $user->{'displayName'}; ?>
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="javascript:;"> Profile</a></li>
                                <li>
                                    <a href="javascript:;">
                                        <!--<span class="badge bg-red pull-right">50%</span>-->
                                        <span>Settings</span>
                                    </a>
                                </li>
                                <li><a href="javascript:;">Help</a></li>
                                <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>

                        <li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown"
                               aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-green">6</span>
                            </a>
                            <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                <li>
                                    <a>
                                        <span class="image"><img src="production/images/img.jpg"
                                                                 alt="Profile Image"/></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="production/images/img.jpg"
                                                                 alt="Profile Image"/></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="production/images/img.jpg"
                                                                 alt="Profile Image"/></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="production/images/img.jpg"
                                                                 alt="Profile Image"/></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <div class="text-center">
                                        <a>
                                            <strong>See All Alerts</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Form</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Client Form</h2>
                                <!-- <ul class="nav navbar-right panel_toolbox">
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
                                </ul> -->
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                                <!-- Smart Wizard -->
                                <div id="wizard" class="form_wizard wizard_horizontal">
                                    <ul class="wizard_steps">
                                        <li>
                                            <a href="#step-1">
                                                <span class="step_no">1</span>
                            <span class="step_descr">
                                              Step 1<br/>
                                              <small>Basic Website Info</small>
                                          </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#step-2">
                                                <span class="step_no">2</span>
                            <span class="step_descr">
                                              Step 2<br/>
                                              <small>Exec Info </small>
                                          </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#step-3">
                                                <span class="step_no">3</span>
                            <span class="step_descr">
                                              Step 3<br/>
                                              <small>Content Edit</small>
                                          </span>
                                            </a>
                                        </li>
                                    </ul>

                                    <!-- Steps form stuff goes in here -->
                                    <div id="step-1">
                                        <form class="form-horizontal form-label-left">
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                                       for="web-title">Website Title <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="text" id="web-title" required="required"
                                                           class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                                       for="web-description">Website Description<span
                                                        class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <textarea id="web-description" name="web-description"
                                                              required="required"
                                                              class="form-control col-md-7 col-xs-12"
                                                              rows="3"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                                       for="web-title">Logo <span class="required">*</span>
                                                </label>
                                                <div class="col-md-2">
                                                    <img class="img-responsive avatar-view"
                                                         src="production/images/picture.jpg" width="100%">
                                                </div>
                                                <div class="btn-group col-md-7">
                                                    <br/><br/>
                                                    <input type="file" data-role="magic-overlay"
                                                           data-target="#pictureBtn"
                                                           data-edit="insertImage"/>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                    <div id="step-2">
                                        <h2 class="StepTitle"><strong>Exec info</strong></h2>
                                        <div class="x_content" id="exec-list">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-2 col-md-offset-1">
                                                        <img src="production/images/user.png" alt="..."
                                                             class="img-circle profile_img" width="100%">
                                                        <div class="col-sm-9 col-sm-offset-3">
                                                            <br/>
                                                            <button type="submit" class="btn btn-success"
                                                                    name="picturePlaceHolder1"
                                                                    onclick="document.getElementsByName('pictureToUpload1')[0].click();return false;">
                                                                Upload Picture
                                                            </button>
                                                            <input type="file" name="pictureToUpload1"
                                                                   data-role="magic-overlay"
                                                                   data-target="#pictureBtn"
                                                                   data-edit="insertImage" style="display: none"
                                                                   onchange="fileSubmit(this)"/>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="col-md-10 col-md-offset-2">
                                                            <br/>
                                                            <input type="text" id="exec-name1" required="required"
                                                                   class="form-control col-md-7 col-xs-12"
                                                                   placeholder="Name">
                                                        </div>
                                                        <div class="col-md-10 col-md-offset-2">
                                                            <br/>
                                                            <input type="text" id="exec-position1" required="required"
                                                                   class="form-control col-md-7 col-xs-12"
                                                                   placeholder="Position">
                                                        </div>
                                                        <div class="col-md-10 col-md-offset-2">
                                                            <br/>
                                                         <textarea id="exec-description1" name="exec-description"
                                                                   class="form-control col-md-7 col-xs-12"
                                                                   rows="5"
                                                                   placeholder="Information goes here"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="x_content" id="exec-list2">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-2 col-md-offset-1">
                                                        <img src="production/images/user.png" alt="..."
                                                             class="img-circle profile_img" width="100%">
                                                        <div class="col-sm-9 col-sm-offset-3">
                                                            <br/>
                                                            <button type="submit" class="btn btn-success"
                                                                    name="picturePlaceHolder2"
                                                                    onclick="document.getElementsByName('pictureToUpload2')[0].click();return false;">
                                                                Upload Picture
                                                            </button>
                                                            <input type="file" name="pictureToUpload2"
                                                                   data-role="magic-overlay"
                                                                   data-target="#pictureBtn"
                                                                   data-edit="insertImage" style="display: none"
                                                                   onchange="fileSubmit(this)"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="col-md-10 col-md-offset-2">
                                                            <br/>
                                                            <input type="text" id="exec-name2" required="required"
                                                                   class="form-control col-md-7 col-xs-12"
                                                                   placeholder="Name">
                                                        </div>
                                                        <div class="col-md-10 col-md-offset-2">
                                                            <br/>
                                                            <input type="text" id="exec-position2" required="required"
                                                                   class="form-control col-md-7 col-xs-12"
                                                                   placeholder="Position">
                                                        </div>
                                                        <div class="col-md-10 col-md-offset-2">
                                                            <br/>
                                                         <textarea id="exec-description2" name="exec-description"
                                                                   class="form-control col-md-7 col-xs-12"
                                                                   rows="5"
                                                                   placeholder="Information goes here"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-md-offset-10 pull-right">
                                            <button type="submit" class="btn btn-success">Add</button>
                                            <button type="submit" class="btn btn-primary">Remove</button>
                                        </div>

                                    </div>
                                    <div id="step-3">
                                        <h2 class="StepTitle">Content Edit</h2>
                                        <div class="x_content">
                                            <select id="heard" class="form-control" required="">
                                                <option value="" disabled>Select which area you want to edit</option>
                                                <option value="press">temp1</option>
                                                <option value="net">temp2</option>
                                                <option value="mouth">temp3</option>
                                            </select>
                                            <div id="alerts"></div>
                                            <div class="btn-toolbar editor" data-role="editor-toolbar"
                                                 data-target="#editor">
                                                <div class="btn-group">
                                                    <a class="btn dropdown-toggle" data-toggle="dropdown"
                                                       title="Font"><i
                                                            class="fa fa-font"></i><b class="caret"></b></a>
                                                    <ul class="dropdown-menu">
                                                    </ul>
                                                </div>

                                                <div class="btn-group">
                                                    <a class="btn dropdown-toggle" data-toggle="dropdown"
                                                       title="Font Size"><i
                                                            class="fa fa-text-height"></i>&nbsp;<b
                                                            class="caret"></b></a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a data-edit="fontSize 5">
                                                                <p style="font-size:17px">Huge</p>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a data-edit="fontSize 3">
                                                                <p style="font-size:14px">Normal</p>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a data-edit="fontSize 1">
                                                                <p style="font-size:11px">Small</p>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="btn-group">
                                                    <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i
                                                            class="fa fa-bold"></i></a>
                                                    <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i
                                                            class="fa fa-italic"></i></a>
                                                    <a class="btn" data-edit="strikethrough" title="Strikethrough"><i
                                                            class="fa fa-strikethrough"></i></a>
                                                    <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i
                                                            class="fa fa-underline"></i></a>
                                                </div>

                                                <div class="btn-group">
                                                    <a class="btn" data-edit="insertunorderedlist"
                                                       title="Bullet list"><i
                                                            class="fa fa-list-ul"></i></a>
                                                    <a class="btn" data-edit="insertorderedlist" title="Number list"><i
                                                            class="fa fa-list-ol"></i></a>
                                                    <a class="btn" data-edit="outdent"
                                                       title="Reduce indent (Shift+Tab)"><i
                                                            class="fa fa-dedent"></i></a>
                                                    <a class="btn" data-edit="indent" title="Indent (Tab)"><i
                                                            class="fa fa-indent"></i></a>
                                                </div>

                                                <div class="btn-group">
                                                    <a class="btn" data-edit="justifyleft"
                                                       title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                                                    <a class="btn" data-edit="justifycenter"
                                                       title="Center (Ctrl/Cmd+E)"><i
                                                            class="fa fa-align-center"></i></a>
                                                    <a class="btn" data-edit="justifyright"
                                                       title="Align Right (Ctrl/Cmd+R)"><i
                                                            class="fa fa-align-right"></i></a>
                                                    <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i
                                                            class="fa fa-align-justify"></i></a>
                                                </div>

                                                <div class="btn-group">
                                                    <a class="btn dropdown-toggle" data-toggle="dropdown"
                                                       title="Hyperlink"><i
                                                            class="fa fa-link"></i></a>
                                                    <div class="dropdown-menu input-append">
                                                        <input class="span2" placeholder="URL" type="text"
                                                               data-edit="createLink"/>
                                                        <button class="btn" type="button">Add</button>
                                                    </div>
                                                    <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i
                                                            class="fa fa-cut"></i></a>
                                                </div>

                                                <div class="btn-group">
                                                    <a class="btn" title="Insert picture (or just drag & drop)"
                                                       id="pictureBtn"><i class="fa fa-picture-o"></i></a>
                                                    <input type="file" data-role="magic-overlay"
                                                           data-target="#pictureBtn"
                                                           data-edit="insertImage" style="display: none;"/>
                                                </div>

                                                <div class="btn-group">
                                                    <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i
                                                            class="fa fa-undo"></i></a>
                                                    <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i
                                                            class="fa fa-repeat"></i></a>
                                                </div>
                                            </div>

                                            <div id="editor" class="editor-wrapper placeholderText"
                                                 contenteditable="true"></div>
                                            <textarea name="descr" id="descr" style="display:none;"></textarea>

                                        </div>
                                    </div>
                                    <!-- end of forms for each step -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

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

<!-- jQuery -->
<script src="vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="vendors/nprogress/nprogress.js"></script>
<!-- Dropzone.js -->
<script src="vendors/dropzone/dist/min/dropzone.min.js"></script>
<!-- jQuery Smart Wizard -->
<script src="vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>

<!-- Custom Theme Scripts -->
<script src="build/js/custom.min.js"></script>

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

</body>
</html>