<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Lunch Box | Signup</title>
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
<div class="container w-xxl w-auto-xs" ng-controller="SignupFormController" ng-init="app.settings.container = false;">
    <a href class="navbar-brand block m-t">LUNCH BOX</a>
    <div class="m-b-lg">
        <div class="wrapper text-center">
          <i class="glyphicon glyphicon-user text-md text-muted wrapper-sm"></i> <strong>SIGNUP for best health tracking tool</strong>
        </div>
        <form name="form" class="form-validation" action="">
            <?php
				include_once('controllers/class/UserClass.php');
				$obj= new customer();
				if($_REQUEST['email']!='')
				{
					$other=array(
						'age'=>$_REQUEST['age'],
						'Gender'=>$_REQUEST['Gender'],
						'id'=>$_REQUEST['id'],
						'timing'=>$_REQUEST['timing'],
						'workdays'=>$_REQUEST['workdays']
					);
					echo $obj->customerSignup($_REQUEST['name'],$_REQUEST['email'],$_REQUEST['password'],$other);
				}
		    ?>
			<div class="list-group list-group-sm">
				<div class="list-group-item">
				  <input placeholder="Name" class="form-control no-border" value="" name="name" required>
				</div>
				<div class="list-group-item">
				  <input type="email" placeholder="Email" class="form-control no-border" value="" name="email" required>
				</div>
				<div class="list-group-item">
				   <input type="password" placeholder="Password" class="form-control no-border" value="" name="password" required>
				</div>
				<div class="list-group-item">
				   <input type="text" placeholder="Age" class="form-control no-border" name="age" value="" required>
				</div>
				<div class="list-group-item">
					<Select class="form-control no-border" name="Gender" required>
						<option value="">Gender</option>
						<option value="male">Male</option>
						<option value="female">Female</option>
					</select>
				</div>
				<div class="list-group-item">
				   <input type="text" placeholder="ID Number" class="form-control no-border" name="id" value="" required>
				</div>
				<div class="list-group-item">
				   <input type="text" placeholder="Office Timing ex. 9am-5pm" class="form-control no-border" name="timing" value="" required>
				</div>
				<div class="list-group-item">
				   <input type="text" placeholder="Working days ex. 5" class="form-control no-border" name="workdays" value="" required>
				</div>
			</div>
			<div class="checkbox m-b-md m-t-none">
				<label class="i-checks">
				  <input type="checkbox" ng-model="agree" required><i></i> Agree the <a href>terms and policy</a>
				</label>
			</div>
			<button type="submit" class="btn btn-lg btn-primary btn-block" ng-click="signup()" ng-disabled='form.$invalid'>Sign up</button>
			<div class="line line-dashed"></div>
			<p class="text-center"><small>Already have an account?</small></p>
			<a href="login.php"  class="btn btn-lg btn-default btn-block">Sign in</a>
        </form>
    </div>
    <div class="text-center" ng-include="'tpl/blocks/page_footer.html'">
        <p><small class="text-muted">Health Project &copy; 2015</small></p>
    </div>
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