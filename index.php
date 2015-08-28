<?php include('header.php');?>
  <!-- content -->
  <div id="content" class="app-content" role="main">
    <div class="app-content-body ">
		<div class="hbox hbox-auto-xs hbox-auto-sm" ng-init="app.settings.asideFolded = false;   app.settings.asideDock = false;  ">
		  <!-- main -->
		  <div class="col">
			<!-- main header -->
			<div class="bg-light lter b-b wrapper-md">
			  <div class="row">
				<div class="col-sm-6 col-xs-12">
				  <h1 class="m-n font-thin h3 text-black">Dashboard</h1>
				  <i class="glyphicon glyphicon-comment text-md text-muted wrapper-sm"></i> <small class="text-muted"> Welcome <?php echo $name;?> for your dashboard</small>
				</div>
				<div class="col-sm-6 text-right hidden-xs">
				  <div class="inline m-r text-left">
					<div class="m-b-xs"><button class="btn m-b-xs btn-info btn-primary btn-addon"><i class="icon-note"></i>Update Diet tracker</button></div>
				  </div>
				  <div class="inline text-left">
					<div class="m-b-xs"><button class="btn m-b-xs btn-sm btn-primary btn-addon"><i class="icon-note"></i>Update Exercise tracker</button></div>
				  </div>
				</div>
			  </div>
			</div>
			<!-- / main header -->
			<div class="wrapper-md" ng-controller="FlotChartDemoCtrl">
			  <!-- tasks -->
			  <div class="panel wrapper">
				<div class="row">
				  <div class="col-md-6 b-r b-light no-border-xs">
					<a href class="text-muted pull-right text-lg"><i class="icon-arrow-right"></i></a>
					<h4 class="font-thin m-t-none m-b-md text-muted">Demographic details</h4>
					<div class=" m-b">
					  <div class="m-b">
						<span class="label text-base bg-warning pos-rlt m-r"><i class="arrow right arrow-warning"></i> Age</span>
						<a href>30 Years</a>
					  </div>
					  <div class="m-b">
						<span class="label text-base bg-info pos-rlt m-r"><i class="arrow right arrow-info"></i>Gender </span>
						<a href>Male</a>
					  </div>
					  <div class="m-b">
						<span class="label text-base bg-primary pos-rlt m-r"><i class="arrow right arrow-primary"></i> Height</span>
						<a href>167 cms</a>
					  </div>
					  <div class="m-b">
						<span class="label text-base bg-danger pos-rlt m-r"><i class="arrow right arrow-danger"></i> Weight</span>
						<a href>75 kgs</a>
					  </div>
					  <div class="m-b">
						<span class="label text-base bg-danger pos-rlt m-r"><i class="arrow right arrow-danger"></i> BMI </span>
						<a href>26.9 You are overweight</a>
					  </div>
					  <div class="m-b">
						<span class="label text-base bg-info pos-rlt m-r"><i class="arrow right arrow-info"></i>BP </span>
						<a href> 130 mmHg </a>
					  </div>
					  <div class="m-b">
						<span class="label text-base bg-primary pos-rlt m-r"><i class="arrow right arrow-primary"></i> Waist measurement</span>
						<a href>91.44 cms </a>
					  </div>
					  <div class="m-b">
						<span class="label text-base bg-success pos-rlt m-r"><i class="arrow right arrow-success"></i> Hip measurement</span>
						<a href>101.6 cms </a>
					  </div>
					  <div class="m-b">
						<span class="label text-base bg-warning pos-rlt m-r"><i class="arrow right arrow-warning"></i> W: H measurement</span>
						<a href>0.9 WHR </a>
					  </div>
					</div>
				  </div>
				  <div class="col-md-6 b-r b-light no-border-xs">
					<a href class="text-muted pull-right text-lg"><i class="icon-arrow-right"></i></a>
					<h4 class="font-thin m-t-none m-b-md text-muted">Your assessment result</h4>
					<div class=" m-b">
					  <div class="form-group">
						  <label class="col-sm-10 control-label">History of diabetes</label>
						  <div class="col-sm-2"><label class="i-switch m-t-xs m-r"><input type="checkbox" disabled=""><i></i></label></div>
						</div>
					  
						<div class="form-group">
						  <label class="col-sm-10 control-label">History of HTN</label>
						  <div class="col-sm-2"><label class="i-switch m-t-xs m-r"><input type="checkbox" disabled=""><i></i></label></div>
						</div>
					  
						<div class="form-group">
						  <label class="col-sm-10 control-label">History of stroke / neurological symptoms</label>
						  <div class="col-sm-2"><label class="i-switch m-t-xs m-r"><input type="checkbox" disabled=""><i></i></label></div>
						</div>
					  
						<div class="form-group">
						  <label class="col-sm-10 control-label">History of hospitalization</label>
						  <div class="col-sm-2"><label class="i-switch m-t-xs m-r"><input type="checkbox" disabled=""><i></i></label></div>
						</div>
					  
						<div class="form-group">
						  <label class="col-sm-10 control-label">History of Smoking</label>
						  <div class="col-sm-2"><label class="i-switch m-t-xs m-r"><input type="checkbox" disabled=""><i></i></label></div>
						</div>
					  
						<div class="form-group">
						  <label class="col-sm-10 control-label">History of consuming alcohol</label>
						  <div class="col-sm-2"><label class="i-switch bg-danger m-t-xs m-r"><input type="checkbox" disabled="" checked=""><i></i></label></div>
						</div>
					  
					</div>
				  </div>
				</div>
			  </div>
			  <!-- / tasks -->
			  <!-- stats -->
			  <div class="row">
				<div class="col-md-4">
				  <div class="row row-sm text-center">
					<div class="col-xs-12">
					  <div class="panel padder-v item">
						<div class="h1 text-info font-thin h1">1,717</div>
						<span class="text-muted text-xs">BMR (Calories/day)</span>
						<div class="top text-right w-full">
						  <i class="fa fa-caret-down text-warning m-r-sm"></i>
						</div>
					  </div>
					</div>
					<div class="col-xs-12">
					  <a href class="block panel padder-v bg-primary item">
						<span class="text-white font-thin h1 block">1017</span>
						<span class="text-muted text-xs">Total Cals consumed</span>
						<span class="bottom text-right w-full">
						  <i class="fa fa-caret-down text-warning m-r-sm"></i>
						</span>
					  </a>
					</div>
					<div class="col-xs-12">
					  <a href class="block panel padder-v bg-info item">
						<span class="text-white font-thin h1 block">700</span>
						<span class="text-muted text-xs">Cals to consume left</span>
						<span class="top text-left">
						  <i class="fa fa-caret-up text-warning m-l-sm"></i>
						</span>
					  </a>
					</div>
				  </div>
				</div>
				<div class="col-md-8">            
					<div class="row row-sm" style="background-color: #fff;">
					  <div class="col-xs-4 text-center">
						<div ui-jq="easyPieChart" ui-options="{
							percent: 50,
							lineWidth: 4,
							trackColor: '#e8eff0',
							barColor: '#7266ba',
							scaleColor: false,
							size: 115,
							rotate: 90,
							lineCap: 'butt'
						  }" class="inline m-t">
						  <div>
							<span class="text-primary h4">2</span>
						  </div>
						</div>
						<div class="text-muted font-bold text-xs m-t m-b" style="text-transform: uppercase;">Physical activity score<br>( 0-4 )</div>
					  </div>
					  <div class="col-xs-4 text-center">
						<div ui-jq="easyPieChart" ui-options="{
							percent: 75,
							lineWidth: 4,
							trackColor: '#e8eff0',
							barColor: '#23b7e5',
							scaleColor: false,
							size: 115,
							rotate: 180,
							lineCap: 'butt'
						  }" class="inline m-t">
						  <div>
							<span class="text-info h4">4.5</span>
						  </div>
						</div>
						<div class="text-muted font-bold text-xs m-t m-b" style="text-transform: uppercase;">Meal habits<br>( 0-6 )</div>
					  </div>
					  <div class="col-xs-4 text-center">
						<div ui-jq="easyPieChart" ui-options="{
							percent: 50,
							lineWidth: 4,
							trackColor: '#e8eff0',
							barColor: '#f05050',
							scaleColor: false,
							size: 115,
							rotate: 90,
							lineCap: 'butt'
						  }" class="inline m-t">
						  <div>
							<span class="text-danger h4">50%</span>
						  </div>
						</div>
						<div class="text-muted font-bold text-xs m-t m-b" style="text-transform: uppercase;">Nature of work<br> ( any score is bad )</div>
					  </div>
					</div>            
				  </div>
			  </div>
			  <!-- / stats -->
			  
			</div>
		  </div>
		  <!-- / main -->
		  <!-- right col -->
		  <div class="col w-md bg-white-only b-l bg-auto no-border-xs">
			<div class="nav-tabs-alt">
				<ul class="nav nav-tabs" role="tablist">
					<li class="active"><a href="#follow" data-toggle="tab" aria-expanded="true"><div class="m-b text-md">Recent Activity</div></a></li>
				</ul>
			  </div>
			<div class="padder-md">      
			  <!-- streamline -->
			  <div class="m-b text-md"></div>
			  <div class="streamline b-l m-b">
				<div class="sl-item">
				  <div class="m-l">
					<div class="text-muted">5 minutes ago</div>
					<p><a href class="text-info">You</a> completed your diet tracker update.</p>
				  </div>
				</div>
				<div class="sl-item b-success b-l">
				  <div class="m-l">
					<div class="text-muted">12:00-12:30</div>
					<p>Drink 4-5 glasses of water by this time</p>
				  </div>
				</div>
				<div class="sl-item">
				  <div class="m-l">
					<div class="text-muted">11:30</div>
					<p>Time for workout</p>
				  </div>
				</div>
				<div class="bg-info wrapper-sm m-l-n m-r-n m-b r r-2x">
				  Previous Activity
				</div>
				<div class="sl-item b-primary b-l">
				  <div class="m-l">
					<div class="text-muted">Thu, 27 Aug</div>
					<p>Finished task <a href class="text-info">4-5 glasses of water by this time</a>.</p>
				  </div>
				</div>
				<div class="sl-item b-warning b-l">
				  <div class="m-l">
					<div class="text-muted">Wed, 26 Aug</div>
					<p>Finished task <a href class="text-info">Hot soup; </a>.</p>
				  </div>
				</div>
			  </div>
			  <!-- / streamline -->
			</div>
			
		  <!-- aside right -->
		  <div class="app-aside-right pos-fix no-padder w-md w-auto-xs bg-white b-l animated fadeInRight hide">
			<div class="vbox">
			  <div class="wrapper b-b b-t b-light m-b">
				<a href class="pull-right text-muted text-md" ui-toggle-class="show" target=".app-aside-right"><i class="icon-close"></i></a>
				Chat
			  </div>
			  <div class="row-row">
				<div class="cell">
				  <div class="cell-inner padder">
					<!-- chat list -->
					<div class="m-b">
					  <a href class="pull-left thumb-xs avatar"><img src="img/a2.jpg" alt="..."></a>
					  <div class="clear">
						<div class="pos-rlt wrapper-sm b b-light r m-l-sm">
						  <span class="arrow left pull-up"></span>
						  <p class="m-b-none">Hi John, What's up...</p>
						</div>
						<small class="text-muted m-l-sm"><i class="fa fa-ok text-success"></i> 2 minutes ago</small>
					  </div>
					</div>
					<div class="m-b">
					  <a href class="pull-right thumb-xs avatar"><img src="img/a3.jpg" class="img-circle" alt="..."></a>
					  <div class="clear">
						<div class="pos-rlt wrapper-sm bg-light r m-r-sm">
						  <span class="arrow right pull-up arrow-light"></span>
						  <p class="m-b-none">Lorem ipsum dolor :)</p>
						</div>
						<small class="text-muted">1 minutes ago</small>
					  </div>
					</div>
					<div class="m-b">
					  <a href class="pull-left thumb-xs avatar"><img src="img/a2.jpg" alt="..."></a>
					  <div class="clear">
						<div class="pos-rlt wrapper-sm b b-light r m-l-sm">
						  <span class="arrow left pull-up"></span>
						  <p class="m-b-none">Great!</p>
						</div>
						<small class="text-muted m-l-sm"><i class="fa fa-ok text-success"></i>Just Now</small>
					  </div>
					</div>
					<!-- / chat list -->
				  </div>
				</div>
			  </div>
			  <div class="wrapper m-t b-t b-light">
				<form class="m-b-none">
				  <div class="input-group">
					<input type="text" class="form-control" placeholder="Say something">
					<span class="input-group-btn">
					  <button class="btn btn-default" type="button">SEND</button>
					</span>
				  </div>
				</form>
			  </div>
			</div>
		  </div>
		  <!-- / aside right -->

		  </div>
		  <!-- / right col -->
		</div>
    </div>
  </div>
  <!-- / content -->
<?php include_once('footer.html');?>