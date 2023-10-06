<?php include "includes/index.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/icons/906343.png" type="image/x-icon">
    <title>Website Admin</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="../plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="../plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    

</head>
<body>
      <!-- Preloader -->
  <div id="wrapper">
      <!-- Navigation -->
      <nav class="navbar navbar-default navbar-static-top m-b-0">
      <div class="navbar-header" > <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)"
                  data-toggle="collapse" data-target=".navbar-collapse" ><i class="ti-menu"></i></a>
                  <div class="content-sea">
                    <ul style="position: relative; left: 12%;" class="nav navbar-top-links navbar-left hidden-xs">
                  <li ><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i
                              class="icon-arrow-left-circle ti-menu"></i></a></li>
                  <li>
                  <form role="search" class="app-search hidden-xs" >
                   <input type="text" id="search-input" placeholder="Search..." class="form-control">
                    <a><i class="fa fa-search"></i></a>
                </form>
                  </li>
              </ul>
              <ul class="nav navbar-top-links navbar-right pull-right">

                  <li class="right-side-toggle"> <a class="waves-effect waves-light" href="javascript:void(0)"><i
                              ></i></a></li>
              </ul>
          </div>
      </nav>

      <!-- Left navbar-header -->
      <div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
        <ul class="nav" id="side-menu">
            <li>
                    <a href="index.php" class="waves-effect">
                        <i class="linea-icon linea-basic fa-fw" data-icon="v"></i>
                        <span class="hide-menu"> Dashboard </span>
                    </a>
            </li>
            <li>
                <a href="/home.php" class="waves-effect">
                    <i class="icon-home inea-basic fa-fw" data-icon="v"></i>
                    <span class="hide-menu"> Home </span>
                </a>
            </li>
            <li>
                <a href="#" class="waves-effect active">
                    <i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i>
                    <span class="hide-menu"> Blog
                        <span class="fa arrow"></span>
                    </span>
                </a>
                <ul class="nav nav-second-level">
                    <li><a href="/admin/index.php">All Posts</a></li>
                    <li><a href="new-post.php">Create Post</a></li>
                </ul>
            </li>
            <li class="nav-small-cap">--- Other</li>
            <li>
                <a href="includes/logOut.php" class="waves-effect">
                    <i class="icon-logout fa-fw"></i>
                    <span class="hide-menu"> Log out </span>
                </a>
            </li>
        </ul>
    </div>
</div>
      
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?php echo $email;?></h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Home</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>

                <!-- /.row -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <div class="row row-in">
                                <div class="col-lg-3 col-sm-6 row-in-br">
                                    <div class="col-in row">
                                        <div class="col-md-6 col-sm-6 col-xs-6"> <i data-icon="E" class="linea-icon linea-basic"></i>
                                            <h5 class="text-muted vb">Company Blog Posts</h5> </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <h3 class="counter text-right m-t-15 text-danger"><?php echo mysqli_num_rows($query_posts);?></h3> </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--row -->
             
                <div class="row">
                    
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box" style="height: 450px; overflow-y: scroll;">
                            <div class="row sales-report">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h2>TV Intent</h2>
                                    <p>Blog Posts</p>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 ">
                                    <h1 class="text-right text-success m-t-20" id="numPost"><?php echo mysqli_num_rows($query_posts);?></h1> </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table" >
                                <thead >
                                    <tr >
                                        <th  >TITLE</th>
                                        <th  >DATE OF CREATION</th>
                                        <th  >POST OPTIONS</th>
                                    </tr>

                                    </thead>
                                    <tbody id="table-container" >

                                        <?php include "includes/table_index.php" ?>

                                        </div>
                                    </tbody> 
                                </table> 
                                
                                     </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            
                
            </div>
        
            <!-- /.container-fluid -->
             <!-- /.container-fluid -->
        <footer class="footer text-center" style="font-family: cursive;"> Copyright © 2023 TVintent </footer>
    </div>
    <!-- /#page-wrapper -->
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
      <!-- Bootstrap Core JavaScript -->
      <script src="bootstrap/dist/js/tether.min.js"></script>
      <script src="bootstrap/dist/js/bootstrap.min.js"></script>
      <script src="../plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
      <!-- Menu Plugin JavaScript -->
      <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
      <!--slimscroll JavaScript -->
      <script src="js/jquery.slimscroll.js"></script>
      <!--Wave Effects -->
      <script src="js/waves.js"></script>
      <!-- Form Wizard JavaScript -->
      <script src="../plugins/bower_components/jquery-wizard-master/dist/jquery-wizard.min.js"></script>
      <!-- FormValidation -->
      <link rel="stylesheet"
          href="../plugins/bower_components/jquery-wizard-master/libs/formvalidation/formValidation.min.css">
      <!-- FormValidation plugin and the class supports validating Bootstrap form -->
      <script src="../plugins/bower_components/jquery-wizard-master/libs/formvalidation/formValidation.min.js"></script>
      <script src="../plugins/bower_components/jquery-wizard-master/libs/formvalidation/bootstrap.min.js"></script>
      <!-- Custom Theme JavaScript -->
      <script src="js/custom.min.js"></script>

      <!--Style Switcher -->
      <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
         <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
      <!-- Bootstrap Core JavaScript -->
      <script src="bootstrap/dist/js/tether.min.js"></script>
      <script src="bootstrap/dist/js/bootstrap.min.js"></script>
      <script src="../plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
      <!-- Menu Plugin JavaScript -->
      <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
      <!--slimscroll JavaScript -->
      <script src="js/jquery.slimscroll.js"></script>
      <!--Wave Effects -->
      <script src="js/waves.js"></script>
      <!-- Form Wizard JavaScript -->
      <script src="../plugins/bower_components/jquery-wizard-master/dist/jquery-wizard.min.js"></script>
      <!-- FormValidation -->
      <link rel="stylesheet"
          href="../plugins/bower_components/jquery-wizard-master/libs/formvalidation/formValidation.min.css">
      <!-- FormValidation plugin and the class supports validating Bootstrap form -->
      <script src="../plugins/bower_components/jquery-wizard-master/libs/formvalidation/formValidation.min.js"></script>
      <script src="../plugins/bower_components/jquery-wizard-master/libs/formvalidation/bootstrap.min.js"></script>
      <!-- Custom Theme JavaScript -->
      <script src="js/custom.min.js"></script>

      <!--Style Switcher -->
      <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  


      </body>

      </html>
    
</body>
</html>
      <script>
        $(document).ready(function() {
        // Handle search query change event
        $("#search-input").on("input", function() {
            var searchTerm = $(this).val();
            if (searchTerm !== " ") {
                $.ajax({
                    url: 'includes/view_data.php',
                    type: 'GET',
                    data: { search: searchTerm },
                    dataType: 'json',
                    success: function(response) {
                        $('#table-container').html(response.html);
                        $('#numPost').html(response.numPosts);
                    },
                    error: function() {
                        alert('An error occurred while processing the search.');
                    }
                });
            }
        });
    });
      </script>

      </body>

      </html>