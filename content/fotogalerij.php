<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Projecten & Foto's</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  </head>
  <?php
  	include ('session.php')
	/* include login sessions for the use of user information */
  ?>
  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">SB Admin</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <?php 
                if(isset($_SESSION['login_user'])){
                    switch ($row['User_Type_ID']){
                        case 1:
                            echo '<li><a href="index.php"><i class="fa fa-home"></i> Hoofdpagina</a></li>
                                <li class="active"><a href="fotogalerij.php"><i class="fa fa-camera"></i> Fotogalerij</a></li>
                                <li><a href="cv.php"><i class="fa fa-table"></i> CV en Werkervaring</a></li>
                                <li><a href="Gastenboek.php"><i class="fa fa-edit"></i> Gastenboek</a></li>
                                <li><a href="contact.php"><i class="fa fa-envelope"></i> Contact Opnemen</a></li>
                                <li><a href="styling.php"><i class="fa fa-wrench"></i> Styling</a></li>
                                <li><a href="beoordeling.php"><i class="fa fa-trophy"></i> Beoordeling</a></li>
                                <li><a href="studentenoverzicht.php"><i class="fa fa-list-alt"></i> Overzicht alle studenten</a></li>
                                <li><a href="registration.php"><i class="fa fa-list-alt"></i> Registratie </a></li>';
                            break;
                        case 2:
                            echo '<li><a href="index.php"><i class="fa fa-home"></i> Hoofdpagina</a></li>
                                <li class="active"><a href="fotogalerij.php"><i class="fa fa-camera"></i> Fotogalerij</a></li>
                                <li><a href="cv.php"><i class="fa fa-table"></i> CV en Werkervaring</a></li>
                                <li><a href="Gastenboek.php"><i class="fa fa-edit"></i> Gastenboek</a></li>
                                <li><a href="contact.php"><i class="fa fa-envelope"></i> Contact Opnemen</a></li>
                                <li><a href="styling.php"><i class="fa fa-wrench"></i> Styling</a></li>
                                <li><a href="beoordeling.php"><i class="fa fa-trophy"></i> Beoordeling</a></li>
                                <li><a href="studentenoverzicht.php"><i class="fa fa-list-alt"></i> Overzicht alle studenten</a></li>
                                <li><a href="registration.php"><i class="fa fa-list-alt"></i> Registratie </a></li>';
                            break;
                        case 5:
                            echo '<li><a href="index.php"><i class="fa fa-home"></i> Hoofdpagina</a></li>
                                <li class="active"><a href="fotogalerij.php"><i class="fa fa-camera"></i> Fotogalerij</a></li>
                                <li><a href="Gastenboek.php"><i class="fa fa-edit"></i> Gastenboek</a></li>
                                <li><a href="contact.php"><i class="fa fa-envelope"></i> Contact Opnemen</a></li>
                                <li><a href="beoordeling.php"><i class="fa fa-trophy"></i> Beoordeling</a></li>
                                <li><a href="studentenoverzicht.php"><i class="fa fa-list-alt"></i> Overzicht alle studenten</a></li>';
                            break;
                        case 4:
                            echo '<li><a href="index.php"><i class="fa fa-home"></i> Hoofdpagina</a></li>
                                <li class="active"><a href="fotogalerij.php"><i class="fa fa-camera"></i> Fotogalerij</a></li>
                                <li><a href="fotogalerij.php"><i class="fa fa-camera"></i> Fotogalerij</a></li>
                                <li><a href="Gastenboek.php"><i class="fa fa-edit"></i> Gastenboek</a></li>
                                <li><a href="styling.php"><i class="fa fa-wrench"></i> Styling</a></li>
                                <li><a href="contact.php"><i class="fa fa-envelope"></i> Contact Opnemen</a></li>';
                            break;
                        case 6:
                            echo '<li><a href="index.php"><i class="fa fa-home"></i> Hoofdpagina</a></li>
                                <li class="active"><a href="fotogalerij.php"><i class="fa fa-camera"></i> Fotogalerij</a></li>
                                <li><a href="Gastenboek.php"><i class="fa fa-edit"></i> Gastenboek</a></li>
                                <li><a href="studentenoverzicht.php"><i class="fa fa-list-alt"></i> Overzicht alle studenten</a></li>
                                <li><a href="contact.php"><i class="fa fa-envelope"></i> Contact Opnemen</a></li>';
                            break;
                        case 7:
                            echo '<li><a href="index.php"><i class="fa fa-home"></i> Hoofdpagina</a></li>
                                <li class="active"><a href="fotogalerij.php"><i class="fa fa-camera"></i> Fotogalerij</a></li>
                                <li><a href="Gastenboek.php"><i class="fa fa-edit"></i> Gastenboek</a></li>
                                <li><a href="contact.php"><i class="fa fa-envelope"></i> Contact Opnemen</a></li>';
                            break;
                    }
                }
                else{
                    echo '<li class="active"><a href="index.php"><i class="fa fa-home"></i> Hoofdpagina</a></li>';
                }
            ?>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
              <li class ='dropdown-header'>
                    <form  method="post" action="search_submit.php?go"  id="searchform" style="padding-top:4%;"> 
                    <input  type="text" name="name"> 
                    <input  type="submit" name="submit" value="Search"> 
                    </form> 
              </li>
            <li class="dropdown user-dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                    <?php
                    if($_SESSION['login_user'] != null){
                        echo $row['User_Name'];
                        echo '<ul class="dropdown-menu">
                        <li><a href="logout.php"><i class="fa fa-power-off"></i> Log Out</a></li>
                        </ul>';
                    }else {
                        echo '<li><a href="login.php"><i class="fa fa-power-off"></i> Log In</a></li>';
                    }
                    ?> 
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Projecten & Foto's</h1>
            <ol class="breadcrumb">
              <li><a href="index.html"><i class="icon-dashboard"></i> Dashboard</a></li>
              <li class="active"><i class="icon-file-alt"></i> Blank Page</li>
			  <li><a href="projectupload.php"><input type="submit" name="uploadproject" value="Upload a new project"></a></li>
            </ol>
          </div>
        </div><!-- /.row -->
		<?php
		
		$dir = 'projects/'.$_SESSION['portfolio'].'/projectpicture/';
		$files = scandir($dir);
		
		rsort($files);
		foreach ($files as $file) {
			if ($file != '.' && $file != '..') {
				echo '<a href="projectbescrijving.php?Project=projects/'.$_SESSION['portfolio'].'/'.$file.'"> >"<img src="' . $dir . $file . '"/></a>';
			}
		}
		
		
		
		
		
		?>
      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

  </body>
</html>