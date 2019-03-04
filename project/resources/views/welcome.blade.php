<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="This is a online examination system">
    <meta name="keywords" content="Exam system|exam|exams">

    <link rel="icon" href="http://phpstack-127383-671298.cloudwaysapps.com/public/uploads/settings/XgMk8k0PuYQoIG1.png"
          type="image/x-icon"/>
    <title> Dashboard</title>
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chartist/0.10.1/chartist.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/plottable.js/2.2.0/plottable.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/c3/0.4.11/c3.min.css">
    <style>
        @-webkit-keyframes rotate-forever {
            0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @-moz-keyframes rotate-forever {
            0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes rotate-forever {
            0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        .loading-spinner {
            -webkit-animation-duration: 0.75s;
            -moz-animation-duration: 0.75s;
            animation-duration: 0.75s;
            -webkit-animation-iteration-count: infinite;
            -moz-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            -webkit-animation-name: rotate-forever;
            -moz-animation-name: rotate-forever;
            animation-name: rotate-forever;
            -webkit-animation-timing-function: linear;
            -moz-animation-timing-function: linear;
            animation-timing-function: linear;
            height: 60px;
            width: 60px;
            border-radius: 50%;
            display: inline-block;
        }

    </style>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript"
            src="https://cdn.rawgit.com/Mikhus/canvas-gauges/gh-pages/download/2.1.2/all/gauge.min.js"></script>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/chartist/0.10.1/chartist.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script type="text/javascript" src="https://static.fusioncharts.com/code/latest/fusioncharts.js"></script>
    <script type="text/javascript"
            src="https://static.fusioncharts.com/code/latest/themes/fusioncharts.theme.fint.js"></script>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script
        type="text/javascript">google.charts.load('current', {'packages': ['corechart', 'gauge', 'geochart', 'bar', 'line']})</script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/5.0.7/highcharts.js"></script>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/5.0.7/js/modules/offline-exporting.js"></script>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/highmaps/5.0.7/js/modules/map.js"></script>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/highmaps/5.0.7/js/modules/data.js"></script>
    <script type="text/javascript" src="https://code.highcharts.com/mapdata/custom/world.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.2.6/raphael.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/justgage/1.2.2/justgage.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.2.6/raphael.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js"></script>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/plottable.js/2.8.0/plottable.min.js"></script>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/progressbar.js/1.0.1/progressbar.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/c3/0.4.11/c3.min.js"></script>
    <script>
        $(function () {
            $('.charts').each(function () {
                var chart = $(this).find('.charts-chart');
                var loader = $(this).find('.charts-loader');
                var time = loader.data('duration');

                if (loader.hasClass('enabled')) {
                    chart.css({visibility: 'hidden'});
                    loader.fadeIn(350);

                    setTimeout(function () {
                        loader.fadeOut(350, function () {
                            chart.css({opacity: 0, visibility: 'visible'}).animate({opacity: 1}, 350);
                        });
                    }, time)
                }
            });
        })
    </script>

    <link href="http://phpstack-127383-671298.cloudwaysapps.com/public/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
          href="http://phpstack-127383-671298.cloudwaysapps.com/public/css/bootstrap-datepicker.min.css">
    <link href="http://phpstack-127383-671298.cloudwaysapps.com/public/css/sweetalert.css" rel="stylesheet"
          type="text/css">

    <link href="http://phpstack-127383-671298.cloudwaysapps.com/public/css/bootstrap-tour.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="http://phpstack-127383-671298.cloudwaysapps.com/public/css/plugins/morris.css" rel="stylesheet">
    <!-- Proxima Nova Fonts CSS -->
    <link href="http://phpstack-127383-671298.cloudwaysapps.com/public/css/proximanova.css" rel="stylesheet">
    <!-- Custom CSS -->

    <link href="http://phpstack-127383-671298.cloudwaysapps.com/public/css/default-theme.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="http://phpstack-127383-671298.cloudwaysapps.com/public/css/custom-fonts.css" rel="stylesheet"
          type="text/css">
    <link href="http://phpstack-127383-671298.cloudwaysapps.com/public/css/materialdesignicons.css" rel="stylesheet"
          type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>


</head>

<body ng-app="academia">


<div id="wrapper" class="">
    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><span
                    class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span
                    class="icon-bar"></span> <span class="icon-bar"></span></button>
            <a class="navbar-brand" href="http://phpstack-127383-671298.cloudwaysapps.com/"><img
                    src="http://phpstack-127383-671298.cloudwaysapps.com/public/uploads/settings/oFmfSdcCmahEiSu.png"
                    alt="i-School Management System"></a>
        </div>

        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">

            <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/user/search">
                    <i class="fa fa-search"></i> Search Student </a>

            </li>

            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-topbar-event"></i> Latest Users </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-notif" aria-labelledby="dd-notification">
                    <div class="dropdown-menu-notif-list" id="latestUsers">
                        <div class="dropdown-menu-notif-item">
                            <div class="photo">
                                <img
                                    src="http://phpstack-127383-671298.cloudwaysapps.com/public/uploads/users/thumbnail/default.png"
                                    alt="">
                            </div>
                            <a href="http://phpstack-127383-671298.cloudwaysapps.com/users/details/manrah-334">Manrah</a>
                            Was Joined As student
                            <div class="color-blue-grey-lighter">3 months ago</div>
                        </div>
                        <div class="dropdown-menu-notif-item">
                            <div class="photo">
                                <img
                                    src="http://phpstack-127383-671298.cloudwaysapps.com/public/uploads/users/thumbnail/default.png"
                                    alt="">
                            </div>
                            <a href="http://phpstack-127383-671298.cloudwaysapps.com/users/details/warner-329">Warner</a>
                            Was Joined As student
                            <div class="color-blue-grey-lighter">3 months ago</div>
                        </div>
                        <div class="dropdown-menu-notif-item">
                            <div class="photo">
                                <img
                                    src="http://phpstack-127383-671298.cloudwaysapps.com/public/uploads/users/thumbnail/default.png"
                                    alt="">
                            </div>
                            <a href="http://phpstack-127383-671298.cloudwaysapps.com/users/details/lorelai-knapp-328">Lorelai
                                Knapp</a> Was Joined As student
                            <div class="color-blue-grey-lighter">3 months ago</div>
                        </div>
                        <div class="dropdown-menu-notif-item">
                            <div class="photo">
                                <img
                                    src="http://phpstack-127383-671298.cloudwaysapps.com/public/uploads/users/thumbnail/default.png"
                                    alt="">
                            </div>
                            <a href="http://phpstack-127383-671298.cloudwaysapps.com/users/details/yael-guzman-327">Yael
                                Guzman</a> Was Joined As student
                            <div class="color-blue-grey-lighter">3 months ago</div>
                        </div>
                        <div class="dropdown-menu-notif-item">
                            <div class="photo">
                                <img
                                    src="http://phpstack-127383-671298.cloudwaysapps.com/public/uploads/users/thumbnail/default.png"
                                    alt="">
                            </div>
                            <a href="http://phpstack-127383-671298.cloudwaysapps.com/users/details/kimora-joyce-326">Kimora
                                Joyce</a> Was Joined As student
                            <div class="color-blue-grey-lighter">3 months ago</div>
                        </div>
                    </div>

                    <div class="dropdown-menu-notif-more">
                        <a href="http://phpstack-127383-671298.cloudwaysapps.com/users/users">See More</a>
                    </div>
                </div>
            </li>

            <li class="dropdown profile-menu">
                <div class="dropdown-toggle top-profile-menu" data-toggle="dropdown">
                    <div class="username">
                        <h2>Karter Vaughan</h2>

                    </div>

                    <div class="profile-img"><img
                            src="http://phpstack-127383-671298.cloudwaysapps.com/public/uploads/users/thumbnail/default.png"
                            alt=""></div>
                    <div class="mdi mdi-menu-down"></div>
                </div>
                <ul class="dropdown-menu">
                    <li>

                        <a href="http://phpstack-127383-671298.cloudwaysapps.com/users/edit/karter-vaughan-12">
                            <sapn><i class="fa fa-user" aria-hidden="true"></i> My Profile</sapn>
                        </a>
                    </li>
                    <li>
                        <a href="http://phpstack-127383-671298.cloudwaysapps.com/users/change-password/karter-vaughan-12">
                            <sapn><i class="fa fa-key" aria-hidden="true"></i> Change Password</sapn>
                        </a>
                    </li>


                    <li>
                        <a href="http://phpstack-127383-671298.cloudwaysapps.com/feedback/list">
                            <sapn><i class="fa fa-commenting-o" aria-hidden="true"></i> Feedback</sapn>
                        </a>
                    </li>

                    <li>
                        <a href="http://phpstack-127383-671298.cloudwaysapps.com/admin/notifications">
                            <sapn><i class="fa fa-bell-o" aria-hidden="true"></i> Notifications</sapn>
                        </a>
                    </li>
                    <li>
                        <a href="http://phpstack-127383-671298.cloudwaysapps.com/messages"><span><i
                                    class="fa fa-comments-o" aria-hidden="true"><h6
                                        class="badge badge-success">0</h6></i></span>
                            Messages </a>
                    </li>
                    <li>
                        <a href="http://phpstack-127383-671298.cloudwaysapps.com/languages/list">
                            <sapn><i class="fa fa-language" aria-hidden="true"></i>
                                Languages
                            </sapn>
                        </a>
                    </li>

                    <li>
                        <a href="http://phpstack-127383-671298.cloudwaysapps.com/logout">
                            <sapn><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</sapn>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <!-- /.navbar-collapse -->
    </nav>

    <div class="alert alert-info demo-alert">
        &nbsp;&nbsp;&nbsp;<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Info!</strong> CRUD Operations Are Disabled In Demo Version
    </div>

    <aside class="left-sidebar">
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li class=active>
                    <a href="http://phpstack-127383-671298.cloudwaysapps.com/">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        Dashboard
                    </a>
                </li>

                <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/users/dashboard"><i class="fa fa-users"
                                                                                                 aria-hidden="true"></i>
                        Users </a></li>


                <li>

                    <a data-toggle="collapse" data-target="#academic"
                       href="http://phpstack-127383-671298.cloudwaysapps.com/academicoperations/dashboard">

                        <i class="fa fa-university" aria-hidden="true"></i>
                        Academics Operations </a>

                    <ul id="academic" class="collapse sidemenu-dropdown">
                        <!-- <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/student/attendance/karter-vaughan-12"> <i class="fa fa-check-circle"></i>Attendance</a></li> -->

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/certificates/dashboard"> <i
                                    class="fa fa-certificate"></i> Certificates</a></li>

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/student/transfers"> <i
                                    class="fa fa-exchange"></i> Transfers</a></li>

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/timetable"> <i
                                    class="fa fa-clock-o"></i> Timetable</a></li>

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/academicoperations/offline-exams">
                                <i class="fa fa-external-link" aria-hidden="true"></i> Offline Exams </a></li>

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/student/class-attendance"> <i
                                    class="fa fa-check-square-o" aria-hidden="true"></i> Class Attendance Report</a>
                        </li>

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/student/class-marks"> <i
                                    class="fa fa-line-chart" aria-hidden="true"></i> Class Marks Report</a></li>

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/student/list"><i
                                    class="fa fa-users" aria-hidden="true"></i> Student List</a></li>

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/student/completed/list"><i
                                    class="fa fa-graduation-cap" aria-hidden="true"></i> Students Completed List</a>
                        </li>

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/student/detained/list"><i
                                    class="fa fa-user-circle-o" aria-hidden="true"></i> Students Detained List</a></li>

                    </ul>

                </li>
                <li>

                    <a data-toggle="collapse" data-target="#exams"
                       href="http://phpstack-127383-671298.cloudwaysapps.com/exams/dashboard"><i
                            class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        </i>
                        Exams </a>

                    <ul id="exams" class="collapse sidemenu-dropdown">
                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/exams/categories"> <i
                                    class="fa fa-random"></i>Categories</a></li>
                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/exams/questionbank"> <i
                                    class="fa fa-question"></i>Question Bank</a></li>

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/exams/quizzes"> <i
                                    class="icon-total-time"></i> Quiz</a></li>
                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/exams/exam-series"> <i
                                    class="fa fa-list-ol"></i> Exam Series</a></li>

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/offlineexmas/quiz/categories"> <i
                                    class="fa fa-sort-amount-asc" aria-hidden="true"></i>
                                Offline Exams Categories</a></li>

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/exam/instructions/list"> <i
                                    class="fa fa-hand-o-right"></i> Instructions</a></li>

                    </ul>

                </li>


                <li>

                    <a data-toggle="collapse" data-target="#coupons" href="javascript:void()"><i
                            class="fa fa-hashtag"></i>
                        Coupons </a>

                    <ul id="coupons" class="collapse sidemenu-dropdown">
                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/coupons/list"> <i
                                    class="fa fa-list"></i>List</a></li>
                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/coupons/add"> <i
                                    class="fa fa-plus"></i>Add</a></li>

                    </ul>

                </li>

                <li>

                    <a data-toggle="collapse" data-target="#lms"
                       href="http://phpstack-127383-671298.cloudwaysapps.com/lms/dashboard"><i class="fa fa-leanpub"
                                                                                               aria-hidden="true"></i>
                        </i>
                        LMS </a>

                    <ul id="lms" class="collapse sidemenu-dropdown">
                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/lms/categories"> <i
                                    class="fa fa-random"></i>Categories</a></li>
                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/lms/content"> <i
                                    class="icon-books"></i>Contents</a></li>
                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/lms/series"> <i
                                    class="fa fa-list-ol"></i>Series</a></li>
                    </ul>
                </li>


                <li>

                    <a data-toggle="collapse" data-target="#library"
                       href="http://phpstack-127383-671298.cloudwaysapps.com/library/librarydashboard"><i
                            class="fa fa-book" aria-hidden="true"></i>

                        Central Library </a>

                    <ul id="library" class="collapse sidemenu-dropdown">

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/library/assets"> <i
                                    class="fa fa-database"></i>Asset Types</a></li>

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/library/master"> <i
                                    class="fa fa-book" aria-hidden="true"></i> Master Data</a></li>
                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/library/publishers"> <i
                                    class="fa fa-paint-brush"></i>Publishers</a></li>
                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/library/authors"> <i
                                    class="fa fa-mortar-board"></i>Authors</a></li>
                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/library/users/student"> <i
                                    class="fa fa-user"></i>Students</a></li>
                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/library/users/staff"><i
                                    class="fa fa-user-circle" aria-hidden="true"></i>
                                Staff</a></li>
                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/library/librarydashboard/books"> <i
                                    class="fa fa-book"></i>Student Book Return</a></li>
                        <li>
                            <a href="http://phpstack-127383-671298.cloudwaysapps.com/library/librarydashboard/books/staffbooks">
                                <i class="fa fa-address-book" aria-hidden="true"></i>Staff Book Return</a></li>


                    </ul>


                </li>


                <li>

                    <a data-toggle="collapse" data-target="#settings"
                       href="http://phpstack-127383-671298.cloudwaysapps.com/fee/reports"><i class="fa fa-exchange"
                                                                                             aria-hidden="true"></i></i>
                        Fee Management </a>

                    <ul id="settings" class="collapse sidemenu-dropdown">
                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/fee/categories"> <i
                                    class="fa fa-th"></i>Fee Categories</a></li>

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/fee/particulars"> <i
                                    class="fa fa-bars"></i> Fee Particulars</a></li>

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/fee/payfee"> <i class="fa fa-money"
                                                                                                     aria-hidden="true"></i>Pay
                                Fee</a></li>

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/fee/reports/daily"> <i
                                    class="icon-total-time"></i> Fee Paid Reports</a></li>

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/fee/offline/payments"> <i
                                    class="fa fa-bar-chart"></i> Offline Fee Payments</a></li>


                    </ul>
                </li>


                <li>

                    <a data-toggle="collapse" data-target="#hostel" href="#"><i class="fa fa-building"
                                                                                aria-hidden="true"></i></i>
                        Hostel Management </a>

                    <ul id="hostel" class="collapse sidemenu-dropdown">

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/hostel"> <i
                                    class="fa fa-long-arrow-right"></i>Hostel</a></li>
                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/hostel/room_type"> <i
                                    class="fa fa-long-arrow-right"></i>Room Type</a></li>
                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/hostel-room"> <i
                                    class="fa fa-long-arrow-right"></i>Hostel Rooms</a></li>
                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/student/hostel/assign"> <i
                                    class="fa fa-long-arrow-right"></i>Assign Hostel To Student</a></li>

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/hostel-fee-assign"> <i
                                    class="fa fa-long-arrow-right"></i>Assign Hostel Fee</a></li>

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/hostel-fee-pay"> <i
                                    class="fa fa-long-arrow-right"></i>Pay Fee</a></li>

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/hostel-fee-reports"> <i
                                    class="fa fa-long-arrow-right"></i>Fee Reports</a></li>
                    </ul>

                </li>


                <li>

                    <a data-toggle="collapse" data-target="#transport" href="#"><i class="fa fa-bus"
                                                                                   aria-hidden="true"></i></i>
                        Transport Management </a>

                    <ul id="transport" class="collapse sidemenu-dropdown">

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/driver"> <i
                                    class="fa fa-long-arrow-right"></i>Drivers</a></li>

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/vehicle/routes"> <i
                                    class="fa fa-long-arrow-right"></i>Routes</a></li>


                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/vehicles"> <i
                                    class="fa fa-long-arrow-right"></i>Vehicles</a></li>

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/route-assigned/vehicles"> <i
                                    class="fa fa-long-arrow-right"></i>Assign Routes</a></li>

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/student/vehicle/assign"> <i
                                    class="fa fa-long-arrow-right"></i>Assign Students</a></li>

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/transport-fee-assign"> <i
                                    class="fa fa-long-arrow-right"></i>Assign Fee</a></li>

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/transport-fee-pay"> <i
                                    class="fa fa-long-arrow-right"></i>Pay Fee</a></li>

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/transport-fee-reports"> <i
                                    class="fa fa-long-arrow-right"></i>Fee Reports</a></li>

                    </ul>

                </li>


                <li>

                    <a data-toggle="collapse" data-target="#payroll" href="javascript:void()"><i
                            class="fa fa-money"></i>
                        Payroll </a>

                    <ul id="payroll" class="collapse sidemenu-dropdown">

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/payroll/salary_templates"> <i
                                    class="fa fa-calculator"></i>Salary Template</a></li>

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/payroll/manage_salary"> <i
                                    class="fa fa-beer"></i>Manage Salary</a></li>

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/pay-salary"> <i
                                    class="fa fa-money"></i>Make Payment</a></li>

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/salary/reports"> <i
                                    class="fa fa-list"></i>Reports</a></li>


                    </ul>

                </li>


                <li>

                    <a data-toggle="collapse" data-target="#expenses" href="javascript:void()"><i
                            class="fa fa-credit-card"></i>
                        Expenses </a>

                    <ul id="expenses" class="collapse sidemenu-dropdown">
                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/expense-categories/list"> <i
                                    class="fa fa-list"></i>Expense Categories List</a></li>
                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/expense-categories/add"> <i
                                    class="fa fa-plus"></i>Add Expense Category</a></li>

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/expenses/list"> <i
                                    class="fa fa-list"></i>Expense List</a></li>
                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/expenses/add"> <i
                                    class="fa fa-plus"></i>Add Expense</a></li>

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/overall-reports"> <i
                                    class="fa fa-bar-chart"></i>Over All Reports</a></li>

                    </ul>

                </li>


                <li>

                    <a data-toggle="collapse" data-target="#inventory"><i class="fa fa-leanpub"
                                                                          aria-hidden="true"></i></i>Inventory
                    </a>

                    <ul id="inventory" class="collapse sidemenu-dropdown">
                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/inventory/category/list"> <i
                                    class="fa fa-long-arrow-right"></i>Categories</a></li>
                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/inventory/store/list"> <i
                                    class="fa fa-long-arrow-right"></i>Stores</a></li>
                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/inventory/item/list"> <i
                                    class="fa fa-long-arrow-right"></i>Items</a></li>
                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/inventory/itemstock/list"> <i
                                    class="fa fa-long-arrow-right"></i>Stock Items</a></li>
                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/inventory/itemssupplier/list"> <i
                                    class="fa fa-long-arrow-right"></i>Suppliers</a></li>
                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/inventory/issueitem/list"> <i
                                    class="fa fa-long-arrow-right"></i>Issue Item</a></li>
                    </ul>
                </li>


                <li>

                    <a data-toggle="collapse" data-target="#assets" href="#"><i class="fa fa-th-large"
                                                                                aria-hidden="true"></i></i>
                        Assets Management </a>

                    <ul id="assets" class="collapse sidemenu-dropdown">

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/asset-location"> <i
                                    class="fa fa-long-arrow-right"></i>Asset Locations</a></li>

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/asset-category"> <i
                                    class="fa fa-long-arrow-right"></i>Asset Categories</a></li>

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/asset-vendor"> <i
                                    class="fa fa-long-arrow-right"></i>Vendors</a></li>

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/asset-items"> <i
                                    class="fa fa-long-arrow-right"></i>Assets</a></li>

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/asset-purchase"> <i
                                    class="fa fa-long-arrow-right"></i>Purchases</a></li>

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/asset-assign"> <i
                                    class="fa fa-long-arrow-right"></i>Assign Asset</a></li>

                    </ul>

                </li>


                <li>

                    <a data-toggle="collapse" data-target="#visitors"
                       href="http://phpstack-127383-671298.cloudwaysapps.com/all-visitors"><i class="fa fa-users"></i>
                        Visitor Management </a>


                </li>


                <li>

                    <a data-toggle="collapse" data-target="#certificates"
                       href="http://phpstack-127383-671298.cloudwaysapps.com/certificate"><i class="fa fa-certificate"
                                                                                             aria-hidden="true"></i>
                        </i>
                        Certificates Management </a>
                </li>


                <li>

                    <a data-toggle="collapse" data-target="#online_marks_reports"
                       href="http://phpstack-127383-671298.cloudwaysapps.com/student/reports"><i
                            class="fa fa-file-text-o" aria-hidden="true"></i>

                        Reports </a>

                    <ul id="online_marks_reports" class="collapse sidemenu-dropdown">

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/student/view"> <i
                                    class="fa fa-link"></i>Consolidate Reports</a></li>

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/student/online-exam/reports"> <i
                                    class="fa fa-file-text-o"></i>Online Marks Reports</a></li>

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/student/class-marks"> <i
                                    class="fa fa-chain-broken"></i>Offline Marks Reports</a></li>

                    </ul>

                </li>


                <li>

                    <a data-toggle="collapse" data-target="#reports"><i class="fa fa-flag" aria-hidden="true"></i>

                        Payment Reports </a>

                    <ul id="reports" class="collapse sidemenu-dropdown">

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/payments-report/online"> <i
                                    class="fa fa-link"></i>Online Payments</a></li>
                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/payments-report/offline"> <i
                                    class="fa fa-chain-broken"></i>Offline Payments</a></li>
                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/payments-report/export"> <i
                                    class="fa fa-file-excel-o"></i>Export</a></li>
                    </ul>

                </li>


                <li>

                    <a data-toggle="collapse" data-target="#certificates"
                       href="http://phpstack-127383-671298.cloudwaysapps.com/certificate-notification"><i
                            class="fa fa-bell" aria-hidden="true"></i>
                        </i>
                        Certificate Notifications </a>
                </li>


                <li>

                    <a data-toggle="collapse" data-target="#alumni" href="javascript:void(0);"><i class="fa fa-users"
                                                                                                  aria-hidden="true"></i>

                        Alumni </a>

                    <ul id="alumni" class="collapse sidemenu-dropdown">

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/alumni/users/list"> <i
                                    class="fa fa-long-arrow-right" aria-hidden="true"></i>Users</a></li>

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/alumni/events/list"> <i
                                    class="fa fa-long-arrow-right" aria-hidden="true"></i>Events</a></li>

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/alumni/stories/list"> <i
                                    class="fa fa-long-arrow-right" aria-hidden="true"></i>Stories</a></li>

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/alumni/notice-board/list"> <i
                                    class="fa fa-long-arrow-right" aria-hidden="true"></i>Notice Board</a></li>

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/alumni/gallery/list"> <i
                                    class="fa fa-long-arrow-right" aria-hidden="true"></i>Gallery</a></li>

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/alumni/donations/list"> <i
                                    class="fa fa-long-arrow-right" aria-hidden="true"></i>Donations</a></li>

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/donations-list"> <i
                                    class="fa fa-long-arrow-right" aria-hidden="true"></i>User Donations</a></li>


                    </ul>
                </li>


                <li>

                    <a data-toggle="collapse" data-target="#master_settings"
                       href="http://phpstack-127383-671298.cloudwaysapps.com/settings/dashboard"><i class="fa fa-cog"
                                                                                                    aria-hidden="true"></i>

                        Master Settings </a>

                    <ul id="master_settings" class="collapse sidemenu-dropdown">

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/courses/dashboard"> <i
                                    class="fa fa-cogs" aria-hidden="true"></i> Master Setup</a></li>

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/mastersettings/settings"> <i
                                    class="icon-settings"></i> Settings</a></li>


                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/mastersettings/religions"> <i
                                    class="fa fa-rebel" aria-hidden="true"></i>Religions Master</a></li>

                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/mastersettings/categories"> <i
                                    class="fa fa-arrows" aria-hidden="true"></i>Categories Master</a></li>


                        <li><a href="http://phpstack-127383-671298.cloudwaysapps.com/email/templates"> <i
                                    class="fa fa-telegram" aria-hidden="true"></i> Email Templates</a></li>

                    </ul>
                </li>


            </ul>
        </div>
    </aside>

    <aside class="right-sidebar" id="rightSidebar">
        <button class="sidebat-toggle" id="sidebarToggle" href='javascript:'><i class="mdi mdi-menu"></i></button>
        <div class="panel panel-right-sidebar">
            <div class="panel-heading">
                <h2>User Statistics</h2></div>


            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <canvas id="myChart0" width="100" height="110"></canvas>
                    </div>
                </div>
            </div>


            <div class="panel panel-primary">
                <div class="panel-heading">Recent Exam Takers</div>

                <div class="panel-body">
                    <ul class="list-replay list-sidebar">


                        <li>
                            <a href="http://phpstack-127383-671298.cloudwaysapps.com/users/details/alivia-collier-24">
                                <img
                                    src="http://phpstack-127383-671298.cloudwaysapps.com/public/uploads/users/thumbnail/default.png"
                                    alt="">

                                <h4>Alivia Collier (33.33 %)</h4>
                                <p>Quiz Name: Vocabulary </p>

                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </aside>


    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <ol class="breadcrumb">

                        <li><i class="fa fa-home"></i> Dashboard</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="card card-green text-xs-center helper_step5">
                        <div class="card-block">
                            <h4 class="card-title">
                                <i class="fa fa-users" aria-hidden="true"></i>

                            </h4>
                            <p class="card-text">Users</p>
                        </div>
                        <a class="card-footer text-muted"
                           href="http://phpstack-127383-671298.cloudwaysapps.com/users/dashboard">
                            View All
                        </a>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card card-blue text-xs-center helper_step2">
                        <div class="card-block">
                            <h4 class="card-title">
                                <i class="fa fa-university" aria-hidden="true"></i>
                            </h4>
                            <p class="card-text">Academics</p>
                        </div>
                        <a class="card-footer text-muted"
                           href="http://phpstack-127383-671298.cloudwaysapps.com/academicoperations/dashboard">
                            View All
                        </a>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card card-red text-xs-center helper_step3">
                        <div class="card-block">
                            <h4 class="card-title">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </h4>
                            <p class="card-text">Exams</p>
                        </div>
                        <a class="card-footer text-muted"
                           href="http://phpstack-127383-671298.cloudwaysapps.com/exams/dashboard">
                            View All
                        </a>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card card-yellow text-xs-center helper_step4">
                        <div class="card-block">
                            <h4 class="card-title">
                                <i class="fa fa-leanpub" aria-hidden="true"></i>
                            </h4>
                            <p class="card-text">LMS</p>
                        </div>
                        <a class="card-footer text-muted"
                           href="http://phpstack-127383-671298.cloudwaysapps.com/lms/dashboard">
                            View All
                        </a>
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="card card-black text-xs-center helper_step6">
                        <div class="card-block">
                            <h4 class="card-title">
                                <i class="fa fa-book" aria-hidden="true"></i>
                            </h4>
                            <p class="card-text">Central Library</p>
                        </div>
                        <a class="card-footer text-muted"
                           href="http://phpstack-127383-671298.cloudwaysapps.com/library/librarydashboard">
                            View All
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-yellow text-xs-center helper_step7">
                        <div class="card-block">
                            <h4 class="card-title">
                                <i class="fa fa-language" aria-hidden="true"></i>
                            </h4>
                            <p class="card-text">Languages</p>
                        </div>
                        <a class="card-footer text-muted"
                           href="http://phpstack-127383-671298.cloudwaysapps.com/languages/list">
                            View All
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-green text-xs-center helper_step8">
                        <div class="card-block">
                            <h4 class="card-title">
                                <i class="fa fa-cog" aria-hidden="true"></i>
                            </h4>
                            <p class="card-text">Settings</p>
                        </div>
                        <a class="card-footer text-muted"
                           href="http://phpstack-127383-671298.cloudwaysapps.com/settings/dashboard">
                            View All
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-blue text-xs-center helper_step1">
                        <div class="card-block">
                            <h4 class="card-title">
                                <i class="fa fa-cogs" aria-hidden="true"></i>
                            </h4>
                            <p class="card-text">Master Setup</p>
                        </div>
                        <a class="card-footer text-muted"
                           href="http://phpstack-127383-671298.cloudwaysapps.com/courses/dashboard">
                            View All
                        </a>
                    </div>
                </div>


            </div>

            <!-- /.container-fluid -->
            <div class="row">


                <div class="col-md-6 helper_step9">
                    <!-- USERS LIST -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <a href="http://phpstack-127383-671298.cloudwaysapps.com/users/students"
                               class="uppercase text-white pull-right">View All</a>
                            Latest Students
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <ul class="users-list clearfix list-unstyled">

                                <li>
                                    <img
                                        src="http://phpstack-127383-671298.cloudwaysapps.com/public/uploads/users/thumbnail/default.png"
                                        alt="User Image">
                                    <a class="users-list-name"
                                       href="http://phpstack-127383-671298.cloudwaysapps.com/users/details/manrah-334">Manrah</a>
                                    <span class="users-list-date">3 months before</span>
                                </li>

                                <li>
                                    <img
                                        src="http://phpstack-127383-671298.cloudwaysapps.com/public/uploads/users/thumbnail/default.png"
                                        alt="User Image">
                                    <a class="users-list-name"
                                       href="http://phpstack-127383-671298.cloudwaysapps.com/users/details/warner-329">Warner</a>
                                    <span class="users-list-date">3 months before</span>
                                </li>

                                <li>
                                    <img
                                        src="http://phpstack-127383-671298.cloudwaysapps.com/public/uploads/users/thumbnail/default.png"
                                        alt="User Image">
                                    <a class="users-list-name"
                                       href="http://phpstack-127383-671298.cloudwaysapps.com/users/details/lorelai-knapp-328">Lorelai
                                        Knapp</a>
                                    <span class="users-list-date">3 months before</span>
                                </li>

                                <li>
                                    <img
                                        src="http://phpstack-127383-671298.cloudwaysapps.com/public/uploads/users/thumbnail/default.png"
                                        alt="User Image">
                                    <a class="users-list-name"
                                       href="http://phpstack-127383-671298.cloudwaysapps.com/users/details/yael-guzman-327">Yael
                                        Guzman</a>
                                    <span class="users-list-date">3 months before</span>
                                </li>

                                <li>
                                    <img
                                        src="http://phpstack-127383-671298.cloudwaysapps.com/public/uploads/users/thumbnail/default.png"
                                        alt="User Image">
                                    <a class="users-list-name"
                                       href="http://phpstack-127383-671298.cloudwaysapps.com/users/details/kimora-joyce-326">Kimora
                                        Joyce</a>
                                    <span class="users-list-date">3 months before</span>
                                </li>

                                <li>
                                    <img
                                        src="http://phpstack-127383-671298.cloudwaysapps.com/public/uploads/users/thumbnail/default.png"
                                        alt="User Image">
                                    <a class="users-list-name"
                                       href="http://phpstack-127383-671298.cloudwaysapps.com/users/details/payten-walls-325">Payten
                                        Walls</a>
                                    <span class="users-list-date">3 months before</span>
                                </li>

                                <li>
                                    <img
                                        src="http://phpstack-127383-671298.cloudwaysapps.com/public/uploads/users/thumbnail/default.png"
                                        alt="User Image">
                                    <a class="users-list-name"
                                       href="http://phpstack-127383-671298.cloudwaysapps.com/users/details/camryn-carney-324">Camryn
                                        Carney</a>
                                    <span class="users-list-date">3 months before</span>
                                </li>

                                <li>
                                    <img
                                        src="http://phpstack-127383-671298.cloudwaysapps.com/public/uploads/users/thumbnail/default.png"
                                        alt="User Image">
                                    <a class="users-list-name"
                                       href="http://phpstack-127383-671298.cloudwaysapps.com/users/details/nayeli-fuller-323">Nayeli
                                        Fuller</a>
                                    <span class="users-list-date">3 months before</span>
                                </li>
                            </ul>
                            <!-- /.users-list -->
                        </div>

                        <!-- /.box-footer -->
                    </div>
                    <!--/.box -->
                </div>

                <div class="col-md-6 helper_step10">
                    <!-- USERS LIST -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <a href="http://phpstack-127383-671298.cloudwaysapps.com/users/staff"
                               class="uppercase text-white pull-right">View All</a>
                            Latest Faculty

                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <ul class="users-list clearfix list-unstyled">

                                <li>
                                    <img
                                        src="http://phpstack-127383-671298.cloudwaysapps.com/public/uploads/users/thumbnail/default.png"
                                        alt="User Image">
                                    <a class="users-list-name"
                                       href="http://phpstack-127383-671298.cloudwaysapps.com/staff/details/haylie-ray-11">Haylie
                                        Ray</a>
                                    <span class="users-list-date">3 months before</span>
                                </li>

                                <li>
                                    <img
                                        src="http://phpstack-127383-671298.cloudwaysapps.com/public/uploads/users/thumbnail/default.png"
                                        alt="User Image">
                                    <a class="users-list-name"
                                       href="http://phpstack-127383-671298.cloudwaysapps.com/staff/details/phoebe-turner-10">Phoebe
                                        Turner</a>
                                    <span class="users-list-date">3 months before</span>
                                </li>

                                <li>
                                    <img
                                        src="http://phpstack-127383-671298.cloudwaysapps.com/public/uploads/users/thumbnail/default.png"
                                        alt="User Image">
                                    <a class="users-list-name"
                                       href="http://phpstack-127383-671298.cloudwaysapps.com/staff/details/jovanny-mays-9">Jovanny
                                        Mays</a>
                                    <span class="users-list-date">3 months before</span>
                                </li>

                                <li>
                                    <img
                                        src="http://phpstack-127383-671298.cloudwaysapps.com/public/uploads/users/thumbnail/default.png"
                                        alt="User Image">
                                    <a class="users-list-name"
                                       href="http://phpstack-127383-671298.cloudwaysapps.com/staff/details/dorian-stevenson-8">Dorian
                                        Stevenson</a>
                                    <span class="users-list-date">3 months before</span>
                                </li>

                                <li>
                                    <img
                                        src="http://phpstack-127383-671298.cloudwaysapps.com/public/uploads/users/thumbnail/default.png"
                                        alt="User Image">
                                    <a class="users-list-name"
                                       href="http://phpstack-127383-671298.cloudwaysapps.com/staff/details/jaelynn-nguyen-7">Jaelynn
                                        Nguyen</a>
                                    <span class="users-list-date">3 months before</span>
                                </li>

                                <li>
                                    <img
                                        src="http://phpstack-127383-671298.cloudwaysapps.com/public/uploads/users/thumbnail/2157.jpeg"
                                        alt="User Image">
                                    <a class="users-list-name"
                                       href="http://phpstack-127383-671298.cloudwaysapps.com/staff/details/ruben-meyers-6">Ruben
                                        Meyers</a>
                                    <span class="users-list-date">3 months before</span>
                                </li>

                                <li>
                                    <img
                                        src="http://phpstack-127383-671298.cloudwaysapps.com/public/uploads/users/thumbnail/2156.jpeg"
                                        alt="User Image">
                                    <a class="users-list-name"
                                       href="http://phpstack-127383-671298.cloudwaysapps.com/staff/details/ronald-rivera-5">Ronald
                                        Rivera</a>
                                    <span class="users-list-date">3 months before</span>
                                </li>

                                <li>
                                    <img
                                        src="http://phpstack-127383-671298.cloudwaysapps.com/public/uploads/users/thumbnail/2155.jpeg"
                                        alt="User Image">
                                    <a class="users-list-name"
                                       href="http://phpstack-127383-671298.cloudwaysapps.com/staff/details/dalton-tapia-4">Dalton
                                        Tapia</a>
                                    <span class="users-list-date">3 months before</span>
                                </li>
                            </ul>
                            <!-- /.users-list -->
                        </div>
                        <!-- /.box-body -->

                    </div>
                    <!--/.box -->
                </div>


                <div class="col-md-12 helper_step11">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Recent Online Payments</div>

                        <table class="table">
                            <thead>
                            <tr>
                                <th><strong>Name</strong></th>
                                <th><strong>Item</strong></th>
                                <th><strong>Gateway</strong></th>
                                <th><strong>Paid</strong></th>
                                <th><strong>Status</strong></th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <td>Alivia Collier</td>
                                <td>Plants</td>
                                <td>Paypal</td>

                                <td>0.00</td>
                                <td>
					 				<span class="label label-danger">
					 				Cancelled
					 				</span>
                                </td>

                            </tr>

                            <tr>
                                <td>Alivia Collier</td>
                                <td>Plants</td>
                                <td>Paypal</td>

                                <td>0.00</td>
                                <td>
					 				<span class="label label-danger">
					 				Cancelled
					 				</span>
                                </td>

                            </tr>

                            <tr>
                                <td>Alivia Collier</td>
                                <td>Sentence Formation</td>
                                <td>Payu</td>

                                <td>0.00</td>
                                <td>
					 				<span class="label label-danger">
					 				Cancelled
					 				</span>
                                </td>

                            </tr>

                            </tbody>
                        </table>

                    </div>
                </div>


                <div class="col-md-12 helper_step12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Recent Offline Payments</div>

                        <table class="table">
                            <thead>
                            <tr>
                                <th><strong>Name</strong></th>
                                <th><strong>Item</strong></th>
                                <th><strong>Gateway</strong></th>
                                <th><strong>Paid</strong></th>
                                <th><strong>Status</strong></th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <td>Alivia Collier</td>
                                <td>Magnetism</td>
                                <td>Offline</td>

                                <td>0.00</td>
                                <td>
					 				<span class="label label-danger">
					 				Cancelled
					 				</span>
                                </td>

                            </tr>

                            <tr>
                                <td>Alivia Collier</td>
                                <td>Grammer</td>
                                <td>Offline</td>

                                <td>10.00</td>
                                <td>
					 				<span class="label label-success">
					 				Success
					 				</span>
                                </td>

                            </tr>

                            <tr>
                                <td>Alivia Collier</td>
                                <td>Sentence Formation</td>
                                <td>Offline</td>

                                <td>0.00</td>
                                <td>
					 				<span class="label label-danger">
					 				Cancelled
					 				</span>
                                </td>

                            </tr>

                            </tbody>
                        </table>

                    </div>
                </div>


            </div>
        </div>
        <!-- /#page-wrapper -->

        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" style="text-align:center;color:#44a1ef;">Fee Management
                            Instructions</h4>
                    </div>


                    <div class="modal-body">

                        <ol type="1">
                            <li style="margin: 0 0 10px 0;"><font size="3px">First Create The Fee Particulars ( Ex:-
                                    Uniform Fee, Tution Fee)</font></li>
                            <li style="margin: 0 0 10px 0;"><font size="3px">Create Fee Category ( Ex:- 2017-2018
                                    Computer Science 1st Year 1st Semester)</font></li>
                            <li><font size="3px">Assign Fee Particulars To Respected Fee Category</font></li>
                            <b>Note : </b><font color="#F5B041">Once Particulars Are Assigned To Fee Category You Cannot
                                Delete Fee Category</font>
                            <li><font size="3px">Create Fee Schedules For Selected Fee Category</font></li>
                            <b>Note : </b><font color="red">If Any Payment Is Done You Cannot Update Fee
                                Schedules</font>
                            <li style="margin: 0 0 10px 0;"><font size="3px" color="#44a1ef"><b>You Can Add Non Term Fee
                                        Particulars Even Payment Is Done</b></font></li>
                        </ol>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="http://phpstack-127383-671298.cloudwaysapps.com/public/js/jquery-1.12.1.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="http://phpstack-127383-671298.cloudwaysapps.com/public/js/bootstrap.min.js"></script>


    <!--JS Control-->
    <script src="http://phpstack-127383-671298.cloudwaysapps.com/public/js/main.js"></script>
    <script src="http://phpstack-127383-671298.cloudwaysapps.com/public/js/sweetalert-dev.js"></script>


    <script src="http://phpstack-127383-671298.cloudwaysapps.com/public/js/bootstrap-tour.min.js"></script>
    <script>

        // Instance the tour
        var tour = new Tour({
            debug: false,
            storage: false,
            keyboard: 1,
            backdrop: 1,
            template: "<div class='popover tour helper-popover'>"
                + "<div class='arrow'></div>"
                + "<h3 class='popover-title'></h3>"
                + "<div class='popover-content'></div>"
                + '<div class="popover-navigation">'
                + '<div class="btn-group">'
                + '<button class="btn btn-sm btn-primary" data-role="prev"  tabindex="-1">« Prev</button> <button class="btn btn-sm btn-primary" data-role="next">Next »</button>  </div> &nbsp;<button class="btn btn-sm btn-danger" data-role="end">End tour</button> </div>',


            steps: [{
                "id": "1486374118509",
                "element": ".helper_step1",
                "title": "Master Step",
                "content": "Click to mange master setup",
                "placement": "top",
                "sort_order": "1"
            }, {
                "id": "1486374139057",
                "element": ".helper_step2",
                "title": "Academics",
                "content": "Click to manage academics",
                "placement": "top",
                "sort_order": "2"
            }, {
                "id": "1486374167065",
                "element": ".helper_step3",
                "title": "Exams",
                "content": "Click to manage Exams",
                "placement": "top",
                "sort_order": "3"
            }, {
                "id": "1486374194087",
                "element": ".helper_step4",
                "title": "LMS",
                "content": "Click to manage LMS management",
                "placement": "top",
                "sort_order": "4"
            }, {
                "id": "1486374217029",
                "element": ".helper_step5",
                "title": "Users",
                "content": "Click manage users",
                "placement": "top",
                "sort_order": "5"
            }, {
                "id": "1486374238500",
                "element": ".helper_step6",
                "title": "Library",
                "content": "Click manage library",
                "placement": "top",
                "sort_order": "6"
            }, {
                "id": "1486374275626",
                "element": ".helper_step7",
                "title": "Languages",
                "content": "Click to mange languages",
                "placement": "top",
                "sort_order": "7"
            }, {
                "id": "1486374297984",
                "element": ".helper_step8",
                "title": "Settings",
                "content": "Click to manage settings",
                "placement": "top",
                "sort_order": "8"
            }, {
                "id": "1486374338359",
                "element": ".helper_step9",
                "title": "Latest Students",
                "content": "Students",
                "placement": "top",
                "sort_order": "9"
            }, {
                "id": "1486374353022",
                "element": ".helper_step10",
                "title": "Latest Staff",
                "content": "Staff",
                "placement": "top",
                "sort_order": "10"
            }, {
                "id": "1486374398155",
                "element": ".helper_step11",
                "title": "Recent Online Payments",
                "content": "",
                "placement": "top",
                "sort_order": "11"
            }, {
                "id": "1486374416554",
                "element": ".helper_step12",
                "title": "Recent Offline Payments",
                "content": "",
                "placement": "top",
                "sort_order": "12"
            }]
        });


        function startTour() {
            if (tour.ended()) {
                tour.restart();
            } else {
                tour.init();
                tour.start();
            }
        }
    </script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.1/Chart.js"></script>
    <script type="text/javascript">


        var ctx = document.getElementById("myChart0").getContext("2d");
        var myChart = new Chart(ctx, {
            type: 'pie',
            animation: {
                animateScale: true,
            },
            data: {
                labels: ["Owner", "Admin", "Staff", "Student", "Parent", "Librarian", "Assistant_librarian", "Clerk", "Hr", "Receptionist", "Transport_manager", "Hostel_manager", "Alumni", "Coordinator"],
                datasets: [

                    {
                        label: ["lbl"],
                        data: [1, 1, 11, 308, 3, 1, 1, 1, 1, 1, 1, 1, 3, 1],
                        backgroundColor: ["rgba(47,195,99,0.2)", "rgba(225,115,105,0.2)", "rgba(62,105,215,0.2)", "rgba(12,104,203,0.2)", "rgba(73,193,194,0.2)", "rgba(130,94,64,0.2)", "rgba(171,220,123,0.2)", "rgba(0,251,106,0.2)", "rgba(113,62,135,0.2)", "rgba(166,205,104,0.2)", "rgba(196,194,109,0.2)", "rgba(218,25,113,0.2)", "rgba(6,238,131,0.2)", "rgba(202,163,107,0.2)"],
                        borderColor: ["rgba(47,195,99,0.2)", "rgba(225,115,105,0.2)", "rgba(62,105,215,0.2)", "rgba(12,104,203,0.2)", "rgba(73,193,194,0.2)", "rgba(130,94,64,0.2)", "rgba(171,220,123,0.2)", "rgba(0,251,106,0.2)", "rgba(113,62,135,0.2)", "rgba(166,205,104,0.2)", "rgba(196,194,109,0.2)", "rgba(218,25,113,0.2)", "rgba(6,238,131,0.2)", "rgba(202,163,107,0.2)"],
                        borderWidth: 1
                    },
                ],

            },
            options: {
                scales: {},
                title: {
                    display: true,
                    text: ''
                },

            }
        });


    </script>
    <script>

        function showFeeInstructions(feecat_id) {
            $('#myModal').modal('show');
        }
    </script>
    <!-- Google Analytics -->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('send', 'pageview');
    </script>
    <!-- End Google Analytics -->


    <div class="ajax-loader" id="ajax_loader"><img
            src="http://phpstack-127383-671298.cloudwaysapps.com/public/images/ajax-loader.svg"> Please Wait...
    </div>

</body>

</html>
