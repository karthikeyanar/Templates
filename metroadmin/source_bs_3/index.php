<?php include_once 'start-page.php' ?>
<title>Pepper - Dashboard</title>
<?php include_once 'meta.php' ?>
<?php include_once 'style.php' ?>
<link href="css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
<?php include_once 'body-start.php' ?>
<?php include_once 'header.php' ?>
<?php include_once 'start-page-container.php' ?>
<?php include_once 'sidebar.php' ?>
<?php include_once 'start-page-content.php' ?>
	<div class="page-header">
		<h1>
			Dashboard
		</h1>
	</div>
	<div class="row">
        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
            <div class="box bg-primary">
                <div class="icon">
                    <i class="fa fa-calendar"></i>
                </div>
                <div class="description">
                    <strong>14</strong> meetings
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
            <div class="box bg-danger">
                <div class="big-text">
                    3.28%
                </div>
                <div class="description">
                    <i class="fa fa-user"></i>
                    User Growth
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
            <div class="box bg-success">
                <div class="icon">
                    <i class="fa fa-user"></i>
                </div>
                <div class="description">
                    <strong>643</strong> customers
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
            <div class="box bg-warning">
                <div class="big-text">
                    +512
                </div>
                <div class="description">
                    <i class="fa fa-comments"></i>
                    Comments
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
            <div class="box bg-purple">
                <div class="icon">
                    <i class="fa fa-shopping-cart"></i>
                </div>
                <div class="description">
                    <strong>410</strong> orders
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
            <div class="box bg-primary">
                <div class="big-text">
                    6.42%
                </div>
                <div class="description">
                    <i class="fa fa-arrow-right"></i>
                    Traffic Growth
                </div>
            </div>
        </div>
    </div>
	<div class="row">
		<div class="col-md-9">
			<div class="panel panel-white">
				<div class="panel-heading">
					<h3 class="panel-title">
						Area Chart</h3>
				</div>
				<div class="panel-body">
					<div id="morris-area-chart" class="morris-chart">
                    </div>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="panel panel-white">
				<div class="panel-heading">
					<h3 class="panel-title">Donut Chart Example</h3>
				</div>
				<div class="panel-body">
					<div id="morris-donut-chart" class="morris-chart">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-white">
				<div class="panel-heading">
					<h3 class="panel-title">
						<i class="fa fa-comment-o"></i>Chats</h3>
				</div>
				<div class="panel-body">
					<div class="chat-content">
						<ul class="chat-list">
							<li class="chat in">
								<a href="#" class="img">
									<img class="chat-img" src="img/avatars/1.jpg">
								</a>
								<div class="chat-body bg-primary">
									<div class="name">Jarge</div><div class="datetime">May 25, 2013 10:00 AM</div>
									<p class="message">
										Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin
										commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
									</p>
								</div> 
							</li>
							<li class="chat out">
								<a href="#" class="img">
									<img class="chat-img" src="img/avatars/2.jpg">
								</a>
								<div class="chat-body bg-purple">
									<div class="name">Roy</div><div class="datetime">May 25, 2013 10:02 AM</div>
									<p class="message">
										Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin
										commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
									</p>
								</div> 
							</li>
							<li class="chat in">
								<a href="#" class="img">
									<img class="chat-img" src="img/avatars/1.jpg">
								</a>
								<div class="chat-body bg-primary">
									<div class="name">Jarge</div><div class="datetime">May 25, 2013 10:05 AM</div>
									<p class="message">
										Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin
										commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
									</p>
								</div>
							</li>
							<li class="chat out">
								<a href="#" class="img">
									<img class="chat-img" src="img/avatars/2.jpg">
								</a>
								<div class="chat-body bg-purple">
									<div class="name">Roy</div><div class="datetime">May 25, 2013 10:10 AM</div>
									<p class="message">
										Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin
										commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
									</p>
								</div>
							</li>
						</ul>
					</div>
					<div class="chat-send">
						<div class="input-group">
							<input type="text" id="msg" name="msg" class="form-control" placeholder="Message" />
							<span class="input-group-btn"><button id="send" class="btn btn-primary">
								<i class="fa fa-check"></i>
							</button></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<i class="fa fa-bell fa-fw"></i>Notifications
				</div>
				<!-- /.panel-heading -->
				<div class="panel-body">
					<div class="list-group">
						<a class="list-group-item" href="#"><i class="fa fa-comment fa-fw"></i>New Comment <span class="pull-right text-muted small"><em>4 minutes ago</em> </span></a><a class="list-group-item" href="#"><i class="fa fa-twitter fa-fw"></i>3 New Followers <span class="pull-right text-muted small"><em>12 minutes ago</em> </span></a>
						<a class="list-group-item" href="#"><i class="fa fa-envelope fa-fw"></i>Message Sent <span class="pull-right text-muted small"><em>27 minutes ago</em> </span></a>
						<a class="list-group-item" href="#"><i class="fa fa-tasks fa-fw"></i>New Task <span class="pull-right text-muted small"><em>43 minutes ago</em> </span></a>
						<a class="list-group-item" href="#"><i class="fa fa-upload fa-fw"></i>Server Rebooted <span class="pull-right text-muted small"><em>11:32 AM</em> </span></a>
						<a class="list-group-item" href="#"><i class="fa fa-bolt fa-fw"></i>Server Crashed! <span class="pull-right text-muted small"><em>11:13 AM</em> </span></a>
						<a class="list-group-item" href="#"><i class="fa fa-warning fa-fw"></i>Server Not Responding <span class="pull-right text-muted small"><em>10:57 AM</em> </span></a>
						<a class="list-group-item" href="#"><i class="fa fa-shopping-cart fa-fw"></i>New Order Placed <span class="pull-right text-muted small"><em>9:49 AM</em> </span></a>
						<a class="list-group-item" href="#"><i class="fa fa-money fa-fw"></i>Payment Received<span class="pull-right text-muted small"><em>Yesterday</em> </span></a>
					</div>
					<!-- /.list-group -->
					<a class="btn btn-primary btn-block" href="#">View All Alerts</a>
				</div>
				<!-- /.panel-body -->
			</div>
		</div>
	</div>
<?php include_once 'end-page-content.php' ?>
<?php include_once 'footer.php' ?>
<?php include_once 'end-page-container.php' ?>
<?php include_once 'script.php' ?>
<!-- Page-Level Plugin Scripts - Dashboard -->
<script src="js/plugins/morris/raphael-2.1.0.min.js"></script>
<script src="js/plugins/morris/morris.js"></script>
<script src="js/pages/dashboard.js" type="text/javascript"></script>
<?php include_once 'applicationscript.php' ?>
<?php include_once 'end-page.php' ?>