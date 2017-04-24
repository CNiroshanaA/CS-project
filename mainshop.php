<?php
require_once('configuration.php');
require_once('session.php');
$username = mysql_result(mysql_query("SELECT uname FROM sg_users WHERE uid='$uid'"),0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Senara -Main</title>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="css/sb-admin.css" rel="stylesheet">

<!-- Morris Charts CSS -->
<link href="css/plugins/morris.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script src="js/auto_log.js"></script>
</head>

<body>
<div id="wrapper"> 
  
  <!-- Navigation -->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="mainshop.php">Senara Graphic</a> </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
      <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $username; ?><b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li class="divider"></li>
          <li> <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a> </li>
        </ul>
      </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav side-nav">
        <li class="active"> <a href="mainshop.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a> </li>
        <li> <a href="retail.php"><i class="fa fa-fw fa-shopping-cart"></i> Retail shop</a> </li>
        <li> <a href="pos.php"><i class="fa fa-fw fa-table"></i> P-O-S</a> </li>
        <li> <a href="invoice.php"><i class="fa fa-fw fa-edit"></i> Invoice</a> </li>
        <li> <a href="customer.php"><i class="fa fa-fw fa-user"></i> Customer</a> </li>
        <li> <a href="stock.php"><i class="fa fa-fw fa-cubes"></i> Stock</a> </li>
        <li> <a href="item.php"><i class="fa fa-fw fa-file"></i> Item</a> </li>
        <li> <a href="manual.php"><i class="fa fa-fw fa-thumbs-up"></i> Manual data</a> </li>
        <li> <a href="log.php"><i class="fa fa-fw fa-list"></i> Logs</a> </li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </nav>
  <div id="page-wrapper">
    <div class="container-fluid"> 
      
      <!-- Page Heading -->
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header"> Dashboard <small>Statistics Overview</small> </h1>
          
        </div>
      </div>
      <!-- /.row -->
      
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="panel panel-green">
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-3"> <i class="fa fa-comments fa-5x"></i> </div>
                <div class="col-xs-9 text-right">
                  <div class="huge">26</div>
                  <div>No of sales today</div>
                </div>
              </div>
            </div>
            <a href="#">
            <div class="panel-footer"> <span class="pull-left">View Details</span> <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div>
            </a> </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="panel panel-red">
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-3"> <i class="fa fa-tasks fa-5x"></i> </div>
                <div class="col-xs-9 text-right">
                  <div class="huge">12</div>
                  <div>items for Reorder</div>
                </div>
              </div>
            </div>
            <a href="#">
            <div class="panel-footer"> <span class="pull-left">View Details</span> <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div>
            </a> </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="panel panel-green">
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-3"> <i class="fa fa-shopping-cart fa-5x"></i> </div>
                <div class="col-xs-9 text-right">
                  <div class="huge">124</div>
                  <div>No of sales today</div>
                </div>
              </div>
            </div>
            <a href="#">
            <div class="panel-footer"> <span class="pull-left">View Details</span> <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div>
            </a> </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="panel panel-red">
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-3"> <i class="fa fa-support fa-5x"></i> </div>
                <div class="col-xs-9 text-right">
                  <div class="huge">13</div>
                  <div>items for Reorder</div>
                </div>
              </div>
            </div>
            <a href="#">
            <div class="panel-footer"> <span class="pull-left">View Details</span> <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div>
            </a> </div>
        </div>
      </div>
      <!-- /.row -->
      <br>
      <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> This year Total Sales</h3>
            </div>
            <div class="panel-body">
              <div id="morris-area-chart"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
      <!-- /.row --> 
      
    </div>
    <!-- /.container-fluid --> 
    
  </div>
  <!-- /#page-wrapper --> 
  
</div>
<!-- /#wrapper --> 
<?php mysql_close($connection); ?>
<!-- jQuery --> 
<script src="js/jquery.js"></script> 

<!-- Bootstrap Core JavaScript --> 
<script src="js/bootstrap.min.js"></script> 

<!-- Morris Charts JavaScript --> 
<script src="js/plugins/morris/raphael.min.js"></script> 
<script src="js/plugins/morris/morris.min.js"></script> 
<script src="js/plugins/morris/morris-data.js"></script>
</body>
</html>
