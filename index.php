<!DOCTYPE html>
<html>
  <head>
  	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<link rel="stylesheet" href="css/bootstrap_overrides.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <title>Шаблон Bootstrap 101</title>
  </head>
  <body>
  	<div class="container dark">
  		<div class="row">
  			<div class="col-xs-6 col-sm-4 col-md-4"><a href="#" class="logo">Control Panel</a></div>
  			<div class="col-xs-6 col-sm-4 col-md-4 col-md-offset-4 col-sm-offset-4 text-right">
  				<div class="auth-data hidden-xs"><span class="glyphicon glyphicon-user"></span> Admin <span class="glyphicon glyphicon-chevron-down"></span></div>
				<div class="visible-xs">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
			</div>
  		</div>
   	</div>
   	<div class="container">
   		<div class="row">
   			<div class="col-sm-3 col-md-3">
   				<h2><span class="glyphicon glyphicon-briefcase"></span> Toolbox</h2>
   				<div class="toolbar border-top">
   					<ul class="list-group top-marging">
					  <li class="list-group-item no-border"><a href="#"><span class="glyphicon glyphicon-flash"></span> Alerts</a></li>
					  <li class="list-group-item no-border"><a href="#"><span class="glyphicon glyphicon-link"></span> Links</a></li>
					  <li class="list-group-item no-border"><a href="#"><span class="glyphicon glyphicon-list-alt"></span> Reports</a></li>
					  <li class="list-group-item no-border"><a href="#"><span class="glyphicon glyphicon glyphicon-book"></span> Books</a></li>
					  <li class="list-group-item no-border"><a href="#"><span class="glyphicon glyphicon glyphicon-briefcase"></span> Tools</a></li>
					  <li class="list-group-item no-border"><a href="#"><span class="glyphicon glyphicon glyphicon-time"></span> Real-Time</a></li>
					  <li class="list-group-item no-border"><a href="#"><span class="glyphicon glyphicon glyphicon-plus"></span> Advanced...</a></li>
					</ul>
   				</div>
   			</div>
   			<div class="col-sm-9 col-md-9">
   				<h2><span class="glyphicon glyphicon-dashboard"></span> Dashboard</h2>
   				<div class="dashboard border-top">
   					<div class="row">
   						<div class="col-md-7">
   							<div class="panel panel-default top-marging">
								<div class="panel-heading">Inbox-messages <span class="badge right-float">3</span></div>
							</div>
							<div class="border-top bottom-margin"></div>
							<div class="panel panel-default">
						      <div class="panel-heading">
						        <h2 class="panel-title">Processing status</h2>
						      </div>
						      <div class="panel-body">
						      	Complite
						        <div class="progress">
								  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
								    <span class="sr-only">40% Complete (success)</span>
								  </div>
								</div>
								In progress
								<div class="progress">
								  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
								    <span class="sr-only">20% Complete</span>
								  </div>
								</div>
								At risk
								<div class="progress">
								  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
								    <span class="sr-only">60% Complete (danger)</span>
								  </div>
								</div>
						      </div>
						    </div>
   						</div>
   						<div class="col-md-5">
							<ul class="inline-list">
								<li class="inline-list-item"><a href="#"><span class="glyphicon glyphicon-cog light-blue"></span></a></li>
								<li class="inline-list-item"><a href="#"><span class="glyphicon glyphicon-heart light-blue"></span></a></li>
								<li class="inline-list-item">
									<a href="#" class="comments">
										<span class="glyphicon glyphicon-comment light-blue"></span><span class="badge light-blue comments-num">3</span>
									</a>
								</li>
								<li class="inline-list-item"><a href="#"><span class="glyphicon glyphicon-user light-blue"></span></a></li>
								<li class="inline-list-item"><a href="#"><span class="glyphicon glyphicon-plus-sign light-blue"></span></a></li>
							</ul>
							<div class="border-top bottom-margin"></div>
							<p>This is responsive dashboard-style layout that uses <a href="">Bootstrap-3</a>. You can use this 
							template as a starting point to create something more unique.</p>
							<p>Visit the Bootstrap Playground at <a href="#">link</a> to tweak thid layout, or discover 1000's of 
							Bootstrap Code examples and snippets.</p>
							<div class="border-top bottom-margin"></div>
							<div class="text-center">
								<div class="btn-group bottom-margin">
									<button type="button" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span><br />Servise</button>
									<button type="button" class="btn btn-info"><span class="glyphicon glyphicon-cloud"></span><br />Cloud</button>
									<button type="button" class="btn btn-info"><span class="glyphicon glyphicon-cog"></span><br />Tools</button>
									<button type="button" class="btn btn-info"><span class="glyphicon glyphicon-question-sign"></span><br />Help</button>
								</div>
							</div>
   						</div>
   					</div>
   				</div>
   			</div>
   		</div>
		<div class="border-top bottom-margin"></div>
   	</div>
	
	<div class="container">
		<p class="top-marging"><a href="#"><b><span class="glyphicon glyphicon-list-alt"></span> Reports</a></b></p>
		<div class="border-top top-marging bottom-margin"></div>
		<div class="row">
			<div class="col-md-8">
				<table class="table table-striped">
				  <thead>
					<tr>
					  <th>Visits</th>
					  <th>ROI</th>
					  <th>Source</th>
					  <th>Description and Notes</th>
					</tr>
				  </thead>
				  <tbody>
					<tr>
					  <td>45</td>
					  <td>2.45%</td>
					  <td>Direct</td>
					  <td>Sam sapien massa, aliquam in cursus ut, ullamcorper in tortor. Aliquam mauris arcu,
					  tristiqie a lobortis vitae? condimetium feigeat justo.</td>
					</tr>
					<tr>
					  <td>289</td>
					  <td>56.2%</td>
					  <td>Referral</td>
					  <td>Sam sapien massa, aliquam in cursus ut, ullamcorper in tortor. Aliquam mauris arcu,
					  tristiqie a lobortis vitae? condimetium feigeat justo.</td>
					</tr>
					<tr>
					  <td>98</td>
					  <td>25%</td>
					  <td>Type</td>
					  <td>Sam sapien massa, aliquam in cursus ut, ullamcorper in tortor. Aliquam mauris arcu,
					  tristiqie a lobortis vitae? condimetium feigeat justo.</td>
					</tr>
					<tr>
					  <td>109</td>
					  <td>8%</td>
					  <td>..</td>
					  <td>Sam sapien massa, aliquam in cursus ut, ullamcorper in tortor. Aliquam mauris arcu,
					  tristiqie a lobortis vitae? condimetium feigeat justo.</td>
					</tr>
					<tr>
					  <td>34</td>
					  <td>14%</td>
					  <td>..</td>
					  <td>Sam sapien massa, aliquam in cursus ut, ullamcorper in tortor. Aliquam mauris arcu,
					  tristiqie a lobortis vitae? condimetium feigeat justo.</td>
					</tr>
				  </tbody>
				</table>
				
				<!-- Nav tabs -->
				<ul class="nav nav-tabs">
				  <li class="active"><a href="#home" data-toggle="tab">Profile</a></li>
				  <li><a href="#profile" data-toggle="tab">Messages</a></li>
				  <li><a href="#messages" data-toggle="tab">Settings</a></li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content">
				  <div class="tab-pane active" id="home">
					<h4><span class="glyphicon glyphicon-user"></span></h4>
					<p>Sam sapien massa, aliquam in cursus ut, ullamcorper in tortor. Aliquam mauris arcu,
					  tristiqie a lobortis vitae? condimetium feigeat justo. Sam sapien massa, aliquam in cursus ut, ullamcorper in tortor. Aliquam mauris arcu,
					  tristiqie a lobortis vitae? condimetium feigeat justo.</p>
				  </div>
				  <div class="tab-pane" id="profile">...</div>
				  <div class="tab-pane" id="messages">...</div>
				</div>
				<div class="border-top bottom-margin"></div>
				<div class="panel panel-default">
				  <div class="panel-heading well">
					<h3 class="panel-title">New requests</h3>
				  </div>
				  <div class="panel-body">
					<div class="list-group">
					  <a href="#" class="list-group-item active">
						Hostin virtual mailbox serv..
					  </a>
					  <a href="#" class="list-group-item">dedicated server doesn't</a>
					  <a href="#" class="list-group-item">RHEL 6 is installe on new</a>
					</div>
				  </div>
				</div>
				<div class="border-top bottom-margin"></div>
				<div class="alert alert-info">
					<button type="button" class="close">&times;</button>
				  Heads up! This alert needs your attention, but it's not super important.
				</div>
			</div>
			<div class="col-md-4">
				<ul class="list-group top-marging">
				  <li class="list-group-item no-border"><a href="#"><span class="glyphicon glyphicon-th-list"></span> Layouts & Templates</a></li>
				  <li class="list-group-item no-border"><a href="#"><span class="glyphicon glyphicon-briefcase"></span> Toolvox</a></li>
				  <li class="list-group-item no-border"><a href="#"><span class="glyphicon glyphicon-link"></span> Widgets</a></li>
				  <li class="list-group-item no-border"><a href="#"><span class="glyphicon glyphicon glyphicon-book"></span> Pages</a></li>
				  <li class="list-group-item no-border"><a href="#"><span class="glyphicon glyphicon glyphicon-briefcase"></span> Reports</a></li>
				  <li class="list-group-item no-border"><a href="#"><span class="glyphicon glyphicon glyphicon-star"></span> Social Media</a></li>
				</ul>
				
				<div class="panel panel-default">
				  <div class="panel-heading well">
					<h3 class="panel-title">Submit Request <span class="glyphicon glyphicon-wrench right-float"></span></h3>
				  </div>
				  <div class="panel-body">
					<form role="form">
					  <div class="form-group">
						<label for="exampleInputEmail1">Name</label>
						<input type="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1">Title</label>
						<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					  </div>
					  <div class="form-group">
						<label for="exampleInputFile">Details</label>
						<textarea class="form-control" rows="2"></textarea>
					  </div>
					  <div class="form-group">
						<label for="exampleInputFile">Select</label>
							<select class="form-control">
							  <option>General question</option>
							  <option>General question</option>
							</select>
					  </div>
					  <button type="submit" class="btn btn-primary">Post</button>
					</form>
				  </div>
				</div>
				
				<div class="panel panel-default">
				  <div class="panel-heading well">
					<h3 class="panel-title">Engagement</h3>
				  </div>
				  <div class="panel-body">
					<div class="row">
					  <div class="col-xs-4 col-sm-4 col-md-4">
						
						  <img class="img-circle" data-src="holder.js/100%x180" alt="..." width="80" height="80">
						
					  </div>
					  <div class="col-xs-4 col-sm-4 col-md-4">
						
						  <img class="img-circle" data-src="holder.js/100%x180" alt="..." width="80" height="80">
						
					  </div>
					  <div class="col-xs-4 col-sm-4 col-md-4">
						
						  <img class="img-circle" data-src="holder.js/100%x180" alt="..." width="80" height="80">
						
					  </div>
					</div>
				  </div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid footer">
		<p class="text-center">This Bootstrap 3 dashboard layouts compliments of <a href="#">example</a></p>
	</div>

    <script src="http://code.jquery.com/jquery-latest.js"></script>
  </body>
</html>