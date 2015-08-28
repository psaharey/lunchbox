<?php session_start(); 	session_unset(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Lunch Box | Forgot Password</title>
  <meta name="description" content="Angularjs, Html5, Music, Landing, 4 in 1 ui kits package" />
  <meta name="keywords" content="AngularJS, angular, bootstrap, admin, dashboard, panel, app, charts, components,flat, responsive, layout, kit, ui, route, web, app, widgets" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="../bower_components/animate.css/animate.css" type="text/css" />
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="../bower_components/simple-line-icons/css/simple-line-icons.css" type="text/css" />
  <link rel="stylesheet" href="css/font.css" type="text/css" />
  <link rel="stylesheet" href="css/app.css" type="text/css" />

</head>
<body>
<div class="app app-header-fixed  ">
  
<div class="container w-xl w-auto-xs" ng-init="app.settings.container = false;">
  <a href class="navbar-brand block m-t">LUNCH BOX</a>
  <div class="m-b-lg">
   <div class="wrapper text-center" style="padding: 1px;">
      <i class="glyphicon glyphicon-comment text-md text-muted wrapper-sm"></i> Input your email to get your password
    </div>
    <form name="reset" ng-init="isCollapsed=true">
      <div class="list-group list-group-sm">
        <div class="list-group-item">
          <input type="email" placeholder="Email" name="email" value="" class="form-control no-border" required>
        </div>
      </div>
      <button type="submit" ng-disabled="reset.$invalid" class="btn btn-lg btn-primary btn-block"  ng-click="isCollapsed = !isCollapsed" >Send</button>
    </form>
    <div collapse="isCollapsed" class="m-t">
      <?php
			include_once('controllers/class/UserClass.php');
			$obj= new customer();
			if($_REQUEST['email']!='')
			{
				echo $obj->forgot($_REQUEST['email']);
			}
		?>
    </div>
  </div>
  <div class="text-center" ng-include="'tpl/blocks/page_footer.html'"> <p> <small class="text-muted">Health Project &copy; 2015</small></p> </div>
</div>


</div>

<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<script src="../bower_components/bootstrap/dist/js/bootstrap.js"></script>
<script src="js/ui-load.js"></script>
<script src="js/ui-jp.config.js"></script>
<script src="js/ui-jp.js"></script>
<script src="js/ui-nav.js"></script>
<script src="js/ui-toggle.js"></script>

</body>
</html>
