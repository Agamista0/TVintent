<?php include "includes/new_post.php" ?>

<?php include "includes/Edit_post.php" ?>

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
    <!-- Wizard CSS -->
    <link href="../plugins/bower_components/jquery-wizard-master/css/wizard.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/stylePhoto.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    <link href="node_modules/froala-editor/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    
</head>

<body>

     <!-- Preloader -->
  <div id="wrapper">
      <!-- Navigation -->
      <nav class="navbar navbar-default navbar-static-top m-b-0">
      <div class="navbar-header" > <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)"
                  data-toggle="collapse" data-target=".navbar-collapse" ><i class="ti-menu"></i></a>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                  <li ><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i
                              class="icon-arrow-left-circle ti-menu"></i></a></li>
                  
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


                  <li> <a href="index.php" class="waves-effect"><i class="linea-icon linea-basic fa-fw"
                              data-icon="v"></i> <span class="hide-menu"> Dashboard </a>
                  </li>

                  <li> <a href="/home.php" class="waves-effect"><i class="icon-home inea-basic fa-fw"
                              data-icon="v"></i> <span class="hide-menu"> Home </a>
                  </li>

                  <li> <a href="#" class="waves-effect active"><i data-icon="&#xe00b;"
                              class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Blog<span
                                  class="fa arrow"></span></span></a>
                      <ul class="nav nav-second-level">
                          <li><a href="/admin/index.php">All Posts</a></li>
                          <li><a href="new-post.php">Create Post</a></li>
                  </li>
              </ul>
              </li>
              <li class="nav-small-cap">--- Other</li>
              </li>

              <li><a href="includes/logOut.php" class="waves-effect"><i class="icon-logout fa-fw"></i> <span
                          class="hide-menu">Log out</span></a></li>
                        </ul>
          </div>
      </div>


    <!-- Left navbar-header end -->
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title"><?php echo $email;?></h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="index.php">Dashboard</a></li>
                        <li><a href="index.php">Posts</a></li>
                        <li class="active">New</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- .row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">Create New Blog Post</h3>
                        <p class="text-muted m-b-30 font-13"> A blog post contains the picture, title and its content.
                        </p>
                        <div id="exampleValidator" class="wizard">
                            <ul class="wizard-steps" role="tablist">
                                <li class="active" role="tab">
                                    <h4><span><i class="ti-cloud-up"></i></span>photo</h4>
                                </li>
                                <li role="tab">
                                    <h4><span><i class="ti-marker-alt"></i></span>Title</h4>
                                </li>
                                <li role="tab">
                                    <h4><span><i class="ti-book"></i></span>Content</h4>
                                </li>
                            </ul>
                            <form id="validation" class="form-horizontal" method="post" enctype="multipart/form-data" >
                                <div class="wizard-content">
                                    <div class="wizard-pane active" role="tabpanel">
                                        <div class="form-group">
                                            <label class="col-xs-3 control-label">photo</label>
                                            <div class="col-xs-5">
                                                <div class="div-photo">
                                                    <label   class="label-photo" for="inputTag">
                                                        Select Image <br />
                                                        <i class="fa fa-2x fa-camera"></i>
                                                        <input  name="picture" class="input-photo" id="inputTag" type="file" />
                                                        <br />
                                                        <span id="imageName"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="wizard-pane" role="tabpanel">
                                            <div class="form-group">
                                                <label class="col-xs-3 control-label">Post Title</label>
                                                <div class="col-xs-5">
                                                    <input type="text" class="form-control" name="title" maxlength ="90" value="<?php echo $title ?>" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wizard-pane" role="tabpanel">
                                            <div class="form-group">
                                                <label class="col-xs-3 control-label" >Content</label>
                                                <div class="col-xs-5">
                                                <textarea id="editor" name="editor" value="<?php echo $content ; ?>" ></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input id="btnCreate" type="submit" name="submit" value="submit" 
                                        class="btn btn-info btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light" >
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
        <footer class="footer text-center" style="font-family: cursive;"> Copyright © 2023 TVintent </footer>
    </div>
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

    <!-- /#page-wrapper -->
    <script src="https://use.fontawesome.com/3a2eaf6206.js"></script>
    <script type="text/javascript" src="node_modules/froala-editor/js/froala_editor.pkgd.min.js"></script>
    <!-- /#wrapper -->
    <!-- jQuery -->
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
    <!--Counter js -->
    <script src="../plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="../plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!--Morris JavaScript -->
    <script src="../plugins/bower_components/raphael/raphael-min.js"></script>
    <script src="../plugins/bower_components/morrisjs/morris.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <script src="js/dashboard1.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="../plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="../plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js"></script>
    <script src="../plugins/bower_components/toast-master/js/jquery.toast.js"></script>
    <!--Style Switcher -->
    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    

    
    <script> var editor = new FroalaEditor('#editor'); </script>

    <script>
        let input = document.getElementById("inputTag");
        let imageName = document.getElementById("imageName")

        input.addEventListener("change", ()=>{
            let inputImage = document.querySelector("input[type=file]").files[0];

            imageName.innerText = inputImage.name;
        })
    </script>

</body>
</html>