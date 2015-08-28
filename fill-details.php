<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>LUNCH BOX | Fill Details</title>
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
<!-- content start-->
  <div id="content" class="app-content" role="main">
    <!-- content body-->
	<div class="app-content-body "> 
		<div class="bg-light lter b-b wrapper-md">
		  <h1 class="m-n font-thin h3">Hi Puneet Verma, Please fill below details.</h1>
		</div>
		<div class="wrapper-md" ng-controller="FormDemoCtrl">
		  <div class="panel panel-default">
			<div class="panel-heading font-bold">
			  <i class="glyphicon glyphicon-comment text-md text-muted wrapper-sm"></i> We want to know more about you.
			</div>
			<div class="panel-body">
			  <form class="form-horizontal" method="get">
				<div class="form-group">
				  <label class="col-sm-2 control-label">Height in cms</label>
				  <div class="col-sm-10">
					<input id="slider" ui-jq="slider" ui-options="{ min: 55, max: 244, step: 1, value: 162}" class="slider slider-horizontal form-control" type="text">
				  </div>
				</div>
				<div class="line line-dashed b-b line-lg pull-in"></div>
				<div class="form-group">
				  <label class="col-sm-2 control-label">Weight in kgs</label>
				  <div class="col-sm-10">
					<input id="slider" ui-jq="slider" ui-options="{ min: 25, max: 400, step: 1, value: 55}" class="slider slider-horizontal form-control" type="text">
				  </div>
				</div>
				<div class="line line-dashed b-b line-lg pull-in"></div>
				<div class="form-group">
				  <label class="col-sm-2 control-label">Blood Pressure</label>
				  <div class="col-sm-10">
					<input id="slider" ui-jq="slider" ui-options="{ min: 90, max: 160, step: 1, value: 120}" class="slider slider-horizontal form-control" type="text">
				  </div>
				</div>
				<div class="line line-dashed b-b line-lg pull-in"></div>
				<div class="form-group">
				  <label class="col-sm-2 control-label">Measurements</label>
				  <div class="col-sm-10">
					<div class="row">
					  <div class="col-md-3">
						<input type="text" class="form-control" placeholder="Hip Measurement">
					  </div>
					  <div class="col-md-3">
						<input type="text" class="form-control" placeholder="Waist measurement">
					  </div>
					</div>
				  </div>
				</div>
				<div class="line line-dashed b-b line-lg pull-in"></div>
				<div class="form-group">
				  <label class="col-sm-2 control-label">Eating Habits</label>
				  <div class="col-sm-10">
					<div class="radio">
					  <label class="i-checks"><input type="radio" name="a" value="option1" checked><i></i> VEG</label>
					</div>
					<div class="radio">
					  <label class="i-checks"><input type="radio" name="a" value="option2"><i></i> NON VEG</label>
					</div>
					<div class="radio">
					  <label class="i-checks"><input type="radio" name="a" value="option3"><i></i> EGGETARIAN</label>
					</div>
				  </div>
				</div>
				<div class="line line-dashed b-b line-lg pull-in"></div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Intake of food / Meal habits</label> 
					<div class="col-sm-9">
						<div class="checkbox">
						  <label class="i-checks"><input type="checkbox" value=""><i></i> Breakfast</label>
						</div>
						<div class="checkbox">
						  <label class="i-checks"><input type="checkbox" value=""><i></i> Morning snacks</label>
						</div>
						<div class="checkbox">
						  <label class="i-checks"><input type="checkbox" value=""><i></i> Lunch</label>
						</div>
						<div class="checkbox">
						  <label class="i-checks"><input type="checkbox" value=""><i></i> Evening snacks</label>
						</div>
						<div class="checkbox">
						  <label class="i-checks"><input type="checkbox" value=""><i></i> Dinner</label>
						</div>
					</div>
				</div>
				<div class="line line-dashed b-b line-lg pull-in"></div>
				<div class="form-group">
				  <label class="col-sm-2 control-label">Smoking History</label>
				  <div class="col-sm-1">
					<label class="i-switch bg-danger m-t-xs m-r"><input type="checkbox"><i></i></label>
				  </div>
				  <label class="col-sm-2 control-label">H/O Diabetes in family</label>
				  <div class="col-sm-1">
					<label class="i-switch bg-danger m-t-xs m-r"><input type="checkbox"><i></i></label>
				  </div>
				  <label class="col-sm-2 control-label">H/O High BP in family</label>
				  <div class="col-sm-1">
					<label class="i-switch bg-danger m-t-xs m-r"><input type="checkbox"><i></i></label>
				  </div>
				  <label class="col-sm-2 control-label">H/O Low BP in family</label>
				  <div class="col-sm-1">
					<label class="i-switch bg-danger m-t-xs m-r"><input type="checkbox"><i></i></label>
				  </div>
				</div>	
				<div class="line line-dashed b-b line-lg pull-in"></div>
				<div class="form-group">
				  <div class="col-sm-3 col-sm-offset-1">
					<button type="button" class="btn btn-primary" onclick="location.href='index.php';">Skip to Dashboard</button>
				  </div>
				  <div class="col-sm-3 col-sm-offset-2" style="float:right">
					<button type="submit" class="btn btn-default" style="margin-right:20px">Cancel</button>
					<button type="submit" class="btn btn-success">Save changes</button>
				  </div>
				</div>
			  </form>
			</div>
		  </div>
		</div>



    </div> <!-- content body end-->
  </div>  <!-- / content -->
<?php include_once('footer.html');?>
