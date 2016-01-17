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

    $editFormAction = $_SERVER['PHP_SELF'];
    if (isset($_SERVER['QUERY_STRING'])) {
      $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
    }

    if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
      $insertSQL = sprintf("INSERT INTO poll (id, question) VALUES (%s, %s)",
                           GetSQLValueString($_POST['id'], "int"),
                           GetSQLValueString($_POST['Poll'], "text"));

      mysql_select_db($database_conn_vote, $conn_vote);
      $Result1 = mysql_query($insertSQL, $conn_vote) or die(mysql_error());

      $insertGoTo = "results.php";
      if (isset($_SERVER['QUERY_STRING'])) {
        $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
        $insertGoTo .= $_SERVER['QUERY_STRING'];
      }
      header(sprintf("Location: %s", $insertGoTo));
    }

    $colname_rs_vote = "-1";
    if (isset($_GET['recordID'])) {
      $colname_rs_vote = $_GET['recordID'];
    }
    mysql_select_db($database_conn_vote, $conn_vote);
    $query_rs_vote = sprintf("SELECT * FROM poll WHERE id = %s", GetSQLValueString($colname_rs_vote, "int"));
    $rs_vote = mysql_query($query_rs_vote, $conn_vote) or die(mysql_error());
    $row_rs_vote = mysql_fetch_assoc($rs_vote);
    $totalRows_rs_vote = mysql_num_rows($rs_vote);
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
                        <a class="navbar-brand page-scroll" href="index.html">
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

            <section id="poll" class="container content-section">
                <div >
                    <div class="col-lg-8 col-lg-offset-2">
                      <legend class="text-center">Poll for the event you want Trekking club to do this Semester!!</legend>
                        <fieldset>
                            <form action="<?php echo $editFormAction; ?>" id="form1" name="form1" method="POST">
                              <label>
                                <input type="radio" name="Poll" value="Session on Camping" id="Poll_0" />
                                  Session on Camping-How to make tents?
                              </label>
                              <label>
                                <input type="radio" name="Poll" value="Session on-How to use compass for navigation" id="Poll_1" />
                                  Session on-How to use compass for navigation?
                              </label>
                              <label>
                                <input type="radio" name="Poll" value="Guest lecture from professional trekker" id="Poll_2" />
                                  Guest lecture from professional trekker
                              </label>
                              <label>
                                <input type="radio" name="Poll" value="Quiz Competition-Related to Trekking & First-aid" id="Poll_3" />
                                  Quiz Competition-Related to Trekking & First-aid
                              </label>
                              <label>
                                <input type="radio" name="Poll" value="Artificial rock climbing" id="Poll_4" />
                                  Artificial rock climbing
                              </label>
                              <label>
                                <input type="radio" name="Poll" value="Session on trekking equipment-How to use them" id="Poll_5" />
                                  Session on trekking equipment-How to use them?
                              </label>
                              <label>
                                <input type="radio" name="Poll" value="Mountain Biking" id="Poll_6" />
                                  Mountain Biking...
                              </label>
                              <label>
                                <input type="radio" name="Poll" value="Marathon" id="Poll_7" />
                                  Marathon
                              </label>
                              <label>
                                <input type="radio" name="Poll" value="Plantation drive" id="Poll_8" />
                                  Plantation drive
                              </label>
                              <label>
                                <input type="radio" name="Poll" value="Urban fitness test Competition" id="Poll_9" />
                                  Urban fitness test Competition
                              </label>
                              <label>
                                <input type="radio" name="Poll" value="Sanitation drive" id="Poll_10" />
                                  Sanitation drive
                              </label>
                              <label>
                                <input type="radio" name="Poll" value="Discover games" id="Poll_11" />
                                  Discover games
                              </label>
                              <div class="text-center">
                              <button type="submit" name="submit" id="submit" value="Vote" class="btn btn-info btn-lg btn-default">Submit</button>
                              <!--input type="submit" name="submit" id="submit" value="Vote" /-->
                              </div>
                              <input type="hidden" name="id" value="form1" />
                              <input type="hidden" name="MM_insert" value="form1" />
                            </form>
                          </fieldset>
                    </div>
                </div>
            </section>
            <!-- Footer -->
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

    </body>
    </html>
    <?php
      mysql_free_result($rs_vote);
    ?>