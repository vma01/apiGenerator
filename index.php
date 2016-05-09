<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EPOM API Generator</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../dist/css/timeline.css" rel="stylesheet">
    
    <link href="../dist/css/additional.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">
    
     <!-- Validator css -->
    <link href="../dist/css/bootstrapValidator.min.css" rel="stylesheet">
     <!-- Style example code highlightjs-->
    <!--<link href="../dist/stylescode/default.css" rel="stylesheet">-->
    <link href="http://google-code-prettify.googlecode.com/svn/trunk/src/prettify.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">EPOM API Generators</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i>Publisher API<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">                                
                                <li>
                                    <a href="#">Site Management<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Site Management API<span class="fa arrow"></span></a>
                                            <ul class="nav nav-fourth-level">
                                                <li>
                                                    <a href="create_site.html">Create Site</a>
                                                </li>
                                                <li>
                                                    <a href="#">Update Site</a>
                                                </li>
                                                <li>
                                                    <a href="delete.html">Delete Site</a>
                                                </li>
                                                <li>
                                                    <a href="get_sites.html">Get Sites</a>
                                                </li>
                                                <li>
                                                    <a href="delete.html">Get Sites, Zones and Placements</a>
                                                </li>
                                                <li>
                                                    <a href="#">Get Site Zones</a>
                                                </li>
                                                <li>
                                                    <a href="get_sites.html">Get Publishing Categories</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Site Pricing API<span class="fa arrow"></span></a>
                                            <ul class="nav nav-fourth-level">
                                                <li>
                                                    <a href="#">Get Site Pricing</a>
                                                </li>
                                                <li>
                                                    <a href="#">Set Site Pricing</a>
                                                </li>
                                                <li>
                                                    <a href="#">Update the Country Pricing for given Site</a>
                                                </li>
                                                <li>
                                                    <a href="#">Remove Country Pricing for given Site</a>
                                                </li>
                                                <li>
                                                    <a href="#">Update Country Pricing for given Site</a>
                                                </li>
                                                <li>
                                                    <a href="#">Remove Country Pricing for given Site</a>
                                                </li>
                                                <li>
                                                    <a href="#">Get Site CPM Threshold Summary</a>
                                                </li>
                                                <li>
                                                    <a href="#">Set Site CPM Thresholds</a>
                                                </li>
                                                <li>
                                                    <a href="#">Delete Site CPM Threshold</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Site Rules API<span class="fa arrow"></span></a>
                                            <ul class="nav nav-fourth-level">
                                                <li>
                                                    <a href="#">Enable Rules</a>
                                                </li>
                                                <li>
                                                    <a href="#">Disable Rules</a>
                                                </li>
                                                <li>
                                                    <a href="#">Add new Rule group</a>
                                                </li>
                                                <li>
                                                    <a href="#">Remove new Rule group</a>
                                                </li>
                                                <li>
                                                    <a href="#">Return Rule groups</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Site Targeting API<span class="fa arrow"></span></a>
                                            <ul class="nav nav-fourth-level">
                                                <li>
                                                    <a href="#">Enable Targeting</a>
                                                </li>
                                                <li>
                                                    <a href="#">Get Site Targetings</a>
                                                </li>
                                                <li>
                                                    <a href="#">Set Mobile Carrier Targeting</a>
                                                </li>
                                                <li>
                                                    <a href="#">Get Site Targeting Types</a>
                                                </li>
                                                <li>
                                                    <a href="#">Get Mobile Carriers for Mobile Carrier Targeting</a>
                                                </li>
                                                <li>
                                                    <a href="#">Set Browser Targeting</a>
                                                </li>
                                                <li>
                                                    <a href="#">Get Browsers for Browser Targeting</a>
                                                </li>
                                                <li>
                                                    <a href="#">Get Firefox Browser versions for Browser Targeting</a>
                                                </li>
                                                <li>
                                                    <a href="#">Get Chrome Browser versions for Browser Targeting</a>
                                                </li>
                                                <li>
                                                    <a href="#">Get Safari Browser versions for Browser Targeting</a>
                                                </li>
                                                <li>
                                                    <a href="#">Get IE Browser versions for Browser Targeting</a>
                                                </li>
                                                <li>
                                                    <a href="#">Set OS Targeting</a>
                                                </li>
                                                <li>
                                                    <a href="#">Get Operating Systems for OS Targeting</a>
                                                </li>
                                                <li>
                                                    <a href="#">Set Device Targeting</a>
                                                </li>
                                                <li>
                                                    <a href="#">Get Device Formats for Device Format Targeting</a>
                                                </li>
                                                <li>
                                                    <a href="#">Set Device Vendor Targeting</a>
                                                </li>
                                                <li>
                                                    <a href="#">Get Device Vendors for Device Vendor Targeting</a>
                                                </li>
                                                <li>
                                                    <a href="#">Set Screen Resolution Targeting</a>
                                                </li>
                                                <li>
                                                    <a href="#">Get resolutions for Screen Resolution Targeting</a>
                                                </li>
                                                <li>
                                                    <a href="#">Set Location Targeting</a>
                                                </li>
                                                <li>
                                                    <a href="#">Set Country Targeting</a>
                                                </li>
                                                <li>
                                                    <a href="#">Get Regions for Country Targeting</a>
                                                </li>
                                                <li>
                                                    <a href="#">Get Cities for Country Region</a>
                                                </li>
                                                <li>
                                                    <a href="#">Set Language Targeting</a>
                                                </li>
                                                <li>
                                                    <a href="#">Get languages for Language Targeting</a>
                                                </li>
                                                <li>
                                                    <a href="#">Set Cookie Targeting</a>
                                                </li>
                                                <li>
                                                    <a href="#">Set Domain Targeting</a>
                                                </li>
                                                <li>
                                                    <a href="#">Set Channel Targeting</a>
                                                </li>
                                                <li>
                                                    <a href="#">Set WiFi Traffic Targeting</a>
                                                </li>
                                                <li>
                                                    <a href="#">Set Day of the Week Targeting</a>
                                                </li>
                                                <li>
                                                    <a href="#">Set Custom Parameter Targeting</a>
                                                </li>
                                                <li>
                                                    <a href="#">Set IP Targeting</a>
                                                </li>
                                                <li>
                                                    <a href="#">Set Time Range Targeting</a>
                                                </li>
                                                <li>
                                                    <a href="#">Remove Targeting</a>
                                                </li>
                                                <li>
                                                    <a href="#">Disable Targeting</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Zone Management API<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Placement Management API<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i>Advertiser API<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Advertiser Management API<span class="fa arrow"></span></a>
                                        <ul class="nav nav-third-level">
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                        </ul>
                                </li>
                                <li>
                                    <a href="#">Campaign Management API<span class="fa arrow"></span></a>
                                        <ul class="nav nav-third-level">
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                        </ul>
                                </li>
                                <li>
                                    <a href="#">Banner Management API<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Publisher API</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="content"> 
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Publisher API Methods Improvement
                            </div>
                            <div class="panel-body">
                                <div id="morris-area-chart"></div>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../bower_components/raphael/raphael-min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
    
    <script src="../bower_components/morrisjs/morris.min.js"></script>
    <script src="../js/morris-data.js"></script>
    
    <!-- Validator js  -->
    <script src="../dist/js/bootstrapValidator.js"></script>
    <!-- Style example code highlightjs  -->
    <!--<script src="../dist/js/highlight.pack.js"></script>-->
    <script src="http://google-code-prettify.googlecode.com/svn/trunk/src/prettify.js"></script>
    
    <script>prettyPrint();</script>
    
    <script>
        $(document).ready(function(e) {
            $('#side-menu').find('a').on('click', function(e){
                e.preventDefault();
                var $desc = $('.content');
                switch($(this).attr('href')) {
                    case 'delete.html' :
                            $desc.load('fragments/delete.html');
                            break;
                    case 'get_sites.html' :
                            $desc.load('fragments/get_sites.html');
                            break;
                    case 'create_site.html' :
                            $desc.load('fragments/create_site.html');
                            break;
                    case 'iris.html' :
                            $desc.load('fragments/irises.html');
                            break;
                    case 'alstromeria.html' :
                            $desc.load('fragments/peruvian.html');
                            break;
                }
            });
        });
    </script>
</body>
</html>
