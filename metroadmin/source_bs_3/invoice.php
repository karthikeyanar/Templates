<?php include_once 'start-page.php' ?>
<title>Pepper - Blank</title>
<?php include_once 'meta.php' ?>
<?php include_once 'style.php' ?>
<?php include_once 'body-start.php' ?>
<?php include_once 'header.php' ?>
<?php include_once 'start-page-container.php' ?>
<?php include_once 'sidebar.php' ?>
<?php include_once 'start-page-content.php' ?>
<div class="page-header">
	<h1>Invoice</h1>
</div>
<ul class="breadcrumb">
	<li><a href="index.php">Home</a> <i class="fa fa-angle-right"></i></li>
	<li><a href="blank.php">Samples</a> <i class="fa fa-angle-right"></i></li>
	<li><a href="invoice.php">Invoice</a></li>
	<li class="pull-right"><a href="#" data-dismiss='breadcrumb' class="close">&times</a></li>
</ul>
<div class="row">
	<div class="col-md-6">
		<h2>Pepper Admin</h2>
	</div>
	<div class="col-md-6 text-right">
		<h2>#1234567 / 10 Jan 2014</h2>
	</div>
</div>
<hr/>
<div class="row">
	<div class="col-md-6">
		<h3>Client</h3>
		<address>
		  <strong>Twitter, Inc.</strong><br>
		  795 Folsom Ave, Suite 600<br>
		  San Francisco, CA 94107<br>
		  <abbr title="Phone">P:</abbr> (123) 456-7890
		</address>
	</div>
	<div class="col-md-6 text-right">
		<h3>Payment Details</h3>
		<ul class="list-unstyled">
			<li>
				<strong>V.A.T Reg #:</strong> 1234567(DEMO)78
			</li>
			<li>
				<strong>Account Name:</strong> Test Company Ltd
			</li>
			<li>
				<strong>SWIFT code:</strong> 71637861831238
			</li>
		</ul>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>
						#
					</th>
					<th>
						Product
					</th>
					<th class="text-right">
						Quantity
					</th>
					<th class="text-right">
						Price
					</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						1
					</td>
					<td>
						Mother Board
					</td>
					<td class="text-right">
						1
					</td>
					<td class="text-right">
						$5000
					</td>
				</tr>
				<tr>
					<td>
						2
					</td>
					<td>
						Processor
					</td>
					<td class="text-right">
						1
					</td>
					<td class="text-right">
						$1000
					</td>
				</tr>
				<tr>
					<td>
						3
					</td>
					<td>
						Keyboard
					</td>
					<td class="text-right">
						1
					</td>
					<td class="text-right">
						$100
					</td>
				</tr>
				<tr>
					<td>
						4
					</td>
					<td>
						Mouse
					</td>
					<td class="text-right">
						1
					</td>
					<td class="text-right">
						$50
					</td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="3" class="no-line text-right">
						<strong>Sub Total</strong>
					</td>
					<td class="text-right">
						$6050
					</td>
				</tr>
				<tr>
					<td colspan="3" class="no-line text-right">
						<strong>Discount</strong>
					</td>
					<td class="text-right">
						5%
					</td>
				</tr>
				<tr>
					<td colspan="3" class="no-line text-right">
						<strong>VAT</strong>
					</td>
					<td class="text-right">
						$2
					</td>
				</tr>
				<tr>
					<td colspan="3" class="no-line text-right">
						<strong>Grand Total</strong>
					</td>
					<td class="text-right">
						$6050
					</td>
				</tr>
			</tfoot>
		</table>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<div class="well well-sm">
			<address>
			  <strong>Twitter, Inc.</strong><br>
			  795 Folsom Ave, Suite 600<br>
			  San Francisco, CA 94107<br>
			  <abbr title="Phone">P:</abbr> (123) 456-7890
			</address>
			<address>
			  <strong>Full Name</strong><br>
			  <a href="mailto:#">first.last@example.com</a>
			</address>
		</div>
	</div>
	<div class="col-md-6 text-right">
		 <a onclick="javascript:window.print();" class="btn btn-md btn-primary">Print <i class="fa fa-print"></i></a>
		 <a class="btn btn-md btn-success">Submit Your Invoice <i class="fa fa-check"></i></a>
	</div>
</div>
<?php include_once 'end-page-content.php' ?>
<?php include_once 'footer.php' ?>
<?php include_once 'end-page-container.php' ?>
<?php include_once 'script.php' ?>
<?php include_once 'applicationscript.php' ?>
<?php include_once 'end-page.php' ?>
