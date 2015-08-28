<?php session_start(); 	session_unset(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Lunch Box | Login</title>
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
  

<div class="container w-xxl w-auto-xs" ng-controller="SigninFormController" ng-init="app.settings.container = false;">
	<a href class="navbar-brand block m-t">LUNCH BOX</a>
	<div class="m-b-lg">
	   <div class="wrapper text-center" style="background-color: rgba(107, 186, 102, 0.22)">
		 <i class="icon-arrow-right" style="margin-right: 5px;"></i><strong> SIGNIN to get in touch</strong>
		</div>
		<form name="form" class="form-validation">
			<div class="text-danger wrapper text-center" ng-show="authError">
			<?php
				include_once('controllers/class/UserClass.php');
				$obj= new customer();
				if($_REQUEST['email']!='')
				{
					$msg=$obj->login($_REQUEST['email'],$_REQUEST['password']);
					if($msg=='done')
					{
						echo "<script> window.location.assign('fill-details.php')</script>";
					}
					else echo $msg;
				}
			?>
			</div>
			<div class="list-group list-group-sm">
				<div class="list-group-item">
				  <input type="email" placeholder="Email" class="form-control no-border" name="email" required>
				</div>
				<div class="list-group-item">
				   <input type="password" placeholder="Password" class="form-control no-border" name="password" required>
				</div>
			</div>
			<button type="submit" class="btn btn-lg btn-primary btn-block" ng-click="login()" ng-disabled='form.$invalid'>Log in</button>
			<div class="text-center m-t m-b"><a href="forgot.php">Forgot password?</a></div>
			<div class="line line-dashed"></div>
			<p class="text-center"><small>Do not have an account?</small></p>
			<a href="signup.php" class="btn btn-lg btn-default btn-block">Create an account</a>
		</form>
	</div>
	<div class="text-center" ng-include="'tpl/blocks/page_footer.html'"><p><small class="text-muted">Health Project &copy; 2015</small></p></div>
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
