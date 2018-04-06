
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kerul.net PHP-DB</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Loading Flat UI Pro -->
    <link href="css/flat-ui-pro.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.png">

</head>
<body>
    <!-- Static navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                </button>
                <a class="navbar-brand" href="http://KERUL.net" target="_blank">KERUL.net</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="http://www.kuis.edu.my" target="_blank">KUIS</a></li>
                    <li><a href="http://FSTM.kuis.edu.my" target="_blank">FSTM.kuis.edu.my</a></li>
                    <li><a href="http://php.net/mysqli" target="_blank">PHP.net/mysqli</a></li>
                </ul>

            </div>
        </div>
    </div><!-- end nav-bar-inverse -->
	<!-- header-navbar.php -->

    <div class="container">
        <br>
        <br>
        <div class="row">
            <div class="col-md-9" name="maincontent" id="maincontent">

                <!-- ***********Edit your content STARTS from here******** -->
                <h5>Template for PHP-MySQL Exercises</h5>
                Simple Staff Search<br>
                <form class="form-inline" role="form" name="" action="" method="GET">

                    <input class="form-control" name="staffname" type="text" placeholder="Staff name...">
                    <input class="btn btn-embosed btn-primary" type="submit" value="Search">

                </form>
                <hr>

                <!-- ***********Edit your content ENDS here******** -->

            </div><!-- end main content -->

			
			
            <!-- sidebar-menu.PHP -->
            <div class="col-md-3">

                <div class="panel panel-info">
                    <div class="panel-heading"><h5>HR system menus</h5></div>
                    <div class="panel-body">
                        <a href="../mycompanyhr" class="btn btn-info btn-block">Home Directory
                            <span class="fui-home"></span></a>
                        <a href="php-db-template.php" class="btn btn-info btn-block">Simple Staff Search
                            <span class="fui-search"></span></a>
                        <a href="advance-search.php" class="btn btn-info btn-block">Advance Search
                            <span class="fui-search"></span></a>
                        <a href="insert-form.php" class="btn btn-info btn-block">Insert New Staff
                            <span class="fui-plus"></span></a>
                        <a href="search-update-delete.php" class="btn btn-danger btn-block">Update/Delete Staff
                            <span class="fui-cross"></span></a>
                        <a href="logout.php" class="btn btn-info btn-block">Logout
                            <span class="fui-export"></span></a>
                        <a href="http://php.net/mysqli" class="btn btn-info btn-block" target="_blank">mysqli Ref</a>
                    </div>
                </div>
            </div>  <!-- end sidebar-menu -->

        </div><!-- end row -->

    </div><!-- end container -->

	
	<!-- footer.php -->
    <div class="mtl pbl">
        <p align="center"><img src="img/logo-myhr.jpg" width="100%"></p>
        <div class="bottom-menu bottom-menu-inverse">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-2">
                        <a href="http://KERUL.net" target="new" class="bottom-menu-brand">KERUL.net</a>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <ul class="bottom-menu-list">
                            <li><a href="http://fstm.kuis.edu.my" target="_blank">FSTM.kuis.edu.my</a></li>
                            <li><a href="http://www.kuis.edu.my" target="_blank">KUIS</a></li>
                            <li><a href="http://php.net/mysqli" target="_blank">PHP.net/mysqli</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-2">
                        <ul class="bottom-menu-iconic-list">
                            <li><a href="http://facebook.com/kerul.net" class="fui-facebook" target="new"></a></li>
                            <li><a href="http://twitter.com/khirulnizam" class="fui-twitter" target="new"></a></li>
                            <li><a href="tel:+60129034614" class="fui-chat" target="new"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- /bottom-menu-inverse -->
    </div>

    <!-- import all JavaScript library -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- jQuery (necessary for Flat UI's JavaScript plugins) -->
    <script src="js/vendor/video.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/flat-ui-pro.js"></script>

</body>
</html>