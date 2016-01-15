	<?php require_once('Connections/conn_vote.php'); ?>
	<?php
	if (!function_exists("GetSQLValueString")) {
	function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
	{
	  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

	  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

	  switch ($theType) {
	    case "text":
	      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
	      break;    
	    case "long":
	    case "int":
	      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
	      break;
	    case "double":
	      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
	      break;
	    case "date":
	      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
	      break;
	    case "defined":
	      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
	      break;
	  }
	  return $theValue;
	}
	}

	mysql_select_db($database_conn_vote, $conn_vote);
	$query_rs_vote = "SELECT * FROM poll";
	$rs_vote = mysql_query($query_rs_vote, $conn_vote) or die(mysql_error());
	$row_rs_vote = mysql_fetch_assoc($rs_vote);
	$totalRows_rs_vote = mysql_num_rows($rs_vote);

	$resultQuestion1 = mysql_query("SELECT * FROM poll WHERE question='Session on Camping'");
	$num_rowsQuestion1 = mysql_num_rows($resultQuestion1);

	$resultQuestion2 = mysql_query("SELECT * FROM poll WHERE question='Session on-How to use compass for navigation'");
	$num_rowsQuestion2 = mysql_num_rows($resultQuestion2);

	$resultQuestion3 = mysql_query("SELECT * FROM poll WHERE question='Guest lecture from professional trekker'");
	$num_rowsQuestion3 = mysql_num_rows($resultQuestion3);

	$resultQuestion4 = mysql_query("SELECT * FROM poll WHERE question='Quiz Competition-Related to Trekking & First-aid'");
	$num_rowsQuestion4 = mysql_num_rows($resultQuestion4);

	$resultQuestion5 = mysql_query("SELECT * FROM poll WHERE question='Artificial rock climbing'");
	$num_rowsQuestion5 = mysql_num_rows($resultQuestion5);

	$resultQuestion6 = mysql_query("SELECT * FROM poll WHERE question='Session on trekking equipment-How to use them'");
	$num_rowsQuestion6 = mysql_num_rows($resultQuestion6);

	$resultQuestion7 = mysql_query("SELECT * FROM poll WHERE question='Mountain Biking'");
	$num_rowsQuestion7 = mysql_num_rows($resultQuestion7);

	$resultQuestion8 = mysql_query("SELECT * FROM poll WHERE question='Marathon'");
	$num_rowsQuestion8 = mysql_num_rows($resultQuestion8);

	$resultQuestion9 = mysql_query("SELECT * FROM poll WHERE question='Plantation drive'");
	$num_rowsQuestion9 = mysql_num_rows($resultQuestion9);

	$resultQuestion10 = mysql_query("SELECT * FROM poll WHERE question='Urban fitness test Competition'");
	$num_rowsQuestion10 = mysql_num_rows($resultQuestion10);

	$resultQuestion11 = mysql_query("SELECT * FROM poll WHERE question='Sanitation drive'");
	$num_rowsQuestion11 = mysql_num_rows($resultQuestion11);

	$resultQuestion12 = mysql_query("SELECT * FROM poll WHERE question='Discover games'");
	$num_rowsQuestion12 = mysql_num_rows($resultQuestion12);

	$percentQuestion1 = ($num_rowsQuestion1 / $totalRows_rs_vote)*100;
	$percentQuestion2 = ($num_rowsQuestion2 / $totalRows_rs_vote)*100;
	$percentQuestion3 = ($num_rowsQuestion3 / $totalRows_rs_vote)*100;
	$percentQuestion4 = ($num_rowsQuestion4 / $totalRows_rs_vote)*100;
	$percentQuestion5 = ($num_rowsQuestion5 / $totalRows_rs_vote)*100;
	$percentQuestion6 = ($num_rowsQuestion6 / $totalRows_rs_vote)*100;
	$percentQuestion7 = ($num_rowsQuestion7 / $totalRows_rs_vote)*100;
	$percentQuestion8 = ($num_rowsQuestion8 / $totalRows_rs_vote)*100;
	$percentQuestion9 = ($num_rowsQuestion9 / $totalRows_rs_vote)*100;
	$percentQuestion10 = ($num_rowsQuestion10 / $totalRows_rs_vote)*100;
	$percentQuestion11 = ($num_rowsQuestion11 / $totalRows_rs_vote)*100;
	$percentQuestion12 = ($num_rowsQuestion12 / $totalRows_rs_vote)*100;

	?>

	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html lang="en">

	        <head>

	            <meta charset="utf-8">
	            <meta http-equiv="X-UA-Compatible" content="IE=edge">
	            <meta name="viewport" content="width=device-width, initial-scale=1">
	            <meta name="description" content="">
	            <meta name="author" content="">

	            <title>VIT Trekking Club</title>
	            <link rel="shortcut icon" href="img/trek.jpg">

	            <!-- Bootstrap Core CSS -->
	            <link href="css/bootstrap.min.css" rel="stylesheet">

	            <!-- Custom CSS -->
	            <link href="css/style.css" rel="stylesheet">
	            <link href="style.css" rel="stylesheet">
	            

	            <!-- Custom Fonts -->
	            <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	            <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	            <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

	            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	            <!--[if lt IE 9]>
	            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	            <![endif]-->

	        </head>
	    <body id="page-top" data-spy="scroll" data-target="navbar-fixed-top">

	            <!-- Navigation -->
	            <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
	                <div class="container">
	                    <div class="navbar-header">
	                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
	                            <i class="fa fa-bars"></i>
	                        </button>
	                        <a class="navbar-brand page-scroll" href="#page-top">
	                            <i class="fa fa-play-circle"></i>  <span class="light">VIT Trekking Club</span>
	                        </a>
	                    </div>

	                    <!-- Collect the nav links, forms, and other content for toggling -->
	                    <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
	                        <ul class="nav navbar-nav">
	                            <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
	                            <li class="hidden">
	                            <a href="#page-top"></a>
	                            </li>
	                            <li>
	                            <a class="page-scroll" href="index.html">BACK TO HOME</a>
	                            </li>
	                        
	                        </ul>
	                    </div>
	                    <!-- /.navbar-collapse -->
	                </div>
	                <!-- /.container -->
	            </nav>


		<section id="poll" class="container ">
			
			<div class="col-lg-8 col-lg-offset-2">
			<legend class="text-center">Thank You For Giving Your Precious Time.</legend>
			<fieldset>
		
			<legend>Results</legend>
			<div>
			<h4 class="text-center">Total votes: <?php echo $totalRows_rs_vote ?></h4>
			</div>

			<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
</style>
<table class="tg">
  <tr>
    <th class="tg-031e"><?php echo $num_rowsQuestion1 ?></th>
    <th class="tg-031e">Session on Camping</th>
    <th class="tg-031e"><?php echo round($percentQuestion1,2); ?>%</th>
  </tr>
  <tr>
    <td class="tg-031e"><?php echo $num_rowsQuestion2 ?></td>
    <td class="tg-031e">Session on-How to use compass for navigation</td>
    <td class="tg-031e"><?php echo round($percentQuestion2,2); ?>%</td>
  </tr>
  <tr>
    <td class="tg-031e"><?php echo $num_rowsQuestion3 ?></td>
    <td class="tg-031e">Guest lecture from professional trekker</td>
    <td class="tg-031e"><?php echo round($percentQuestion3,2); ?>%</td>
  </tr>
  <tr>
    <td class="tg-031e"><?php echo $num_rowsQuestion4 ?></td>
    <td class="tg-031e">Quiz Competition-Related to Trekking &amp; First-Aid</td>
    <td class="tg-031e"><?php echo round($percentQuestion4,2); ?>%</td>
  </tr>
  <tr>
    <td class="tg-031e"><?php echo $num_rowsQuestion5 ?></td>
    <td class="tg-031e">Artificial rock climbing</td>
    <td class="tg-031e"><?php echo round($percentQuestion5,2); ?>%</td>
  </tr>
  <tr>
    <td class="tg-031e"><?php echo $num_rowsQuestion6 ?></td>
    <td class="tg-031e">Session on trekking equipment-How to use them</td>
    <td class="tg-031e"><?php echo round($percentQuestion6,2); ?>%</td>
  </tr>
  <tr>
    <td class="tg-031e"><?php echo $num_rowsQuestion7 ?></td>
    <td class="tg-031e">Mountain Biking</td>
    <td class="tg-031e"><?php echo round($percentQuestion7,2); ?>%</td>
  </tr>
  <tr>
    <td class="tg-031e"><?php echo $num_rowsQuestion8 ?></td>
    <td class="tg-031e">Marathon</td>
    <td class="tg-031e"><?php echo round($percentQuestion8,2); ?>%</td>
  </tr>
  <tr>
    <td class="tg-031e"><?php echo $num_rowsQuestion9 ?></td>
    <td class="tg-031e">Plantation drive</td>
    <td class="tg-031e"><?php echo round($percentQuestion9,2); ?>%</td>
  </tr>
  <tr>
    <td class="tg-031e"><?php echo $num_rowsQuestion10 ?></td>
    <td class="tg-031e">Urban fitness test Competition</td>
    <td class="tg-031e"><?php echo round($percentQuestion10,2); ?>%</td>
  </tr>
  <tr>
    <td class="tg-031e"><?php echo $num_rowsQuestion11 ?></td>
    <td class="tg-031e">Sanitation drive</td>
    <td class="tg-031e"><?php echo round($percentQuestion11,2); ?>%</td>
  </tr>
  <tr>
    <td class="tg-031e"><?php echo $num_rowsQuestion12 ?></td>
    <td class="tg-031e">Discover games</td>
    <td class="tg-031e"><?php echo round($percentQuestion12,2); ?>%</td>
  </tr>
</table>


			<div class="text-center" style="padding-top:20px;">
				<button class="btn btn-info btn-lg btn-default btn-link"><a href="poll.php">Back to Voting</a></button>
			</div>
			
		
		</fieldset>
		</div>
		</section>
		<footer>
	        <div class="container text-center">
	            <p>Copyright &copy; VIT Trekking Club 2015</p>
	        </div>
	        </footer>

	    
	        <script src="js/jquery.js"></script>

	    
	        <script src="js/bootstrap.min.js"></script>

	    
	        <script src="js/jquery.easing.min.js"></script>

	        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

	        <script src="js/trek.js"></script>
		
	</body>
	</html>

	<?php
	  mysql_free_result($rs_vote);
	?>