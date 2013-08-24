<?php 
function checkactive_toggle($filename){
	$path = $_SERVER["REQUEST_URI"];
	$file = basename($path);  
	if($filename == $file){
		echo " active";
	}
}
function checkactive($filename){
	$path = $_SERVER["REQUEST_URI"];
	$file = basename($path);    
	if($filename == $file){
		echo "class=\"active\"";
	}
}
function openaccordion($rootname){
	writeclassname($rootname," active");
}
function openaccordionbody($rootname){
	writeclassname($rootname," in");
}
function writeclassname($rootname,$classname){
	$path = $_SERVER["REQUEST_URI"];
	$file = basename($path);    
	if($rootname=="uielements"){
		if($file == "elements.php"
			|| $file == "styled_elements.php"
			|| $file == "iphone_style_checkbox.php"
			|| $file == "advanced_elements.php"
		)
		{
			echo $classname;
		}
	} else if($rootname=="components"){
		if($file == "chart.php"
			|| $file == "form_editor.php"
			|| $file == "dropdowns.php"
			|| $file == "button_dropdowns.php"
			|| $file == "alert_confirm.php"
			|| $file == "labels_badges.php"
			|| $file == "modal.php"
			|| $file == "buttons.php"
			|| $file == "slider.php"
			|| $file == "icons.php"
			|| $file == "file_input.php"
		)
		{
			echo $classname;
		}
	} else if($rootname=="forms"){
		if($file == "form_basic.php"
			|| $file == "form_validation.php"
		)
		{
			echo $classname;
		}
	} else if($rootname=="tables"){
		if($file == "table.php"
			|| $file == "dynamic_table.php"
			|| $file == "custom_table.php"
		)
		{
			echo $classname;
		}
	} else if($rootname=="samples"){
		if($file == "login.php"
			|| $file == "calendar.php"
			|| $file == "file_manager.php"
			|| $file == "timesheet.php"
			|| $file == "invoice.php"
			|| $file == "shopping_cart.php"
			|| $file == "products.php"
			|| $file == "blank.php"
		)
		{
			echo $classname;
		} 
	}
}
?>
<!-- menu -->
<div id="menu">
	<div class="nav-tabs-box">
		<ul class="nav nav-tabs container">
		  <li class="<?php checkactive_toggle("index.php");?>"><a  href="index.php">Dashboard</a></li>
		  <li class="<?php echo openaccordion("uielements");?>"><a href="#uielements" data-toggle="tab">UI Elements</a></li>
		  <li class="<?php echo openaccordion("components");?>"><a href="#components" data-toggle="tab">Components</a></li>
		  <li class="<?php echo openaccordion("forms");?>"><a href="#forms" data-toggle="tab">Forms</a></li>
		  <li class="<?php echo openaccordion("tables");?>"><a href="#tables" data-toggle="tab">Tables</a></li>
		  <li class="<?php echo openaccordion("samples");?>"><a href="#samples" data-toggle="tab">Samples</a></li>
		</ul>
	</div>
	<div class="tab-content-box">
		<div class="tab-content container">
			 <div class="tab-pane <?php echo openaccordion("uielements");?>" id="uielements">
			 	<ul>
					<li>
						<a <?php checkactive("elements.php");?> href="elements.php">Elements</a>
					</li>
					<li>
						<a <?php checkactive("styled_elements.php");?> href="styled_elements.php">Styled Elements</a>
					</li>
					<li>
						<a <?php checkactive("iphone_style_checkbox.php");?> href="iphone_style_checkbox.php">iPhone Style CheckBox</a>
					</li>
					<li>
						<a <?php checkactive("advanced_elements.php");?> href="advanced_elements.php">Advanced Elements</a>
					</li>
				</ul>
			 </div>
			 <div class="tab-pane <?php echo openaccordion("components");?>" id="components">
			 	<ul>
					<li>
						<a <?php checkactive("modal.php");?> href="modal.php">Modal</a>
					</li>
					<li>
						<a <?php checkactive("alert_confirm.php");?> href="alert_confirm.php">Alrert & Confirm
						</a>
					</li>
					<li>
						<a <?php checkactive("labels_badges.php");?> href="labels_badges.php">Labels and badges
						</a>
					</li>
					<li>
						<a <?php checkactive("buttons.php");?> href="buttons.php">Buttons
						</a>
					</li>
					<li>
						<a <?php checkactive("icons.php");?> href="icons.php">Icons
						</a>
					</li>
					<li>
						<a <?php checkactive("slider.php");?> href="slider.php">Slider
						</a>
					</li>
					<li>
						<a <?php checkactive("file_input.php");?> href="file_input.php">File Input
						</a>
					</li>
					<li>
						<a <?php checkactive("chart.php");?> href="chart.php">Chart
						</a>
					</li>
					<li>
						<a <?php checkactive("form_editor.php");?> href="form_editor.php">Editor
						</a>
					</li>
					<li>
						<a <?php checkactive("dropdowns.php");?> href="dropdowns.php">Dropdowns
						</a>
					</li>
					<li>
						<a <?php checkactive("button_dropdowns.php");?> href="button_dropdowns.php">Button Dropdowns
						</a>
					</li>
				</ul>
			 </div>
			 <div class="tab-pane <?php echo openaccordion("forms");?>" id="forms">
		 		<ul>
					<li>
						<a <?php checkactive("form_basic.php");?> href="form_basic.php">Basic
						</a>
					</li>
					<li>
						<a <?php checkactive("form_validation.php");?> href="form_validation.php">Validation
						</a>
					</li>
				</ul>
			 </div>
			 <div class="tab-pane <?php echo openaccordion("tables");?>" id="tables">
		 		<ul>
					<li>
						<a <?php checkactive("table.php");?> href="table.php">Basic
						</a>
					</li>
					<li>
						<a <?php checkactive("dynamic_table.php");?> href="dynamic_table.php">Dynamic
						</a>
					</li>
					<li>
						<a <?php checkactive("custom_table.php");?> href="custom_table.php">Custom
						</a>
					</li>
				</ul>
			 </div>
			 <div class="tab-pane <?php echo openaccordion("samples");?>" id="samples">
			 	<ul>
					<li>
						<a <?php checkactive("login.php");?> href="login.php">Login
						</a>
					</li>
					<li>
						<a <?php checkactive("blank.php");?> href="blank.php">Blank
						</a>
					</li>
					<li>
						<a <?php checkactive("calendar.php");?> href="calendar.php">Calendar
						</a>
					</li>
					<li>
						<a <?php checkactive("file_manager.php");?> href="file_manager.php">File Manager
						</a>
					</li>
					<li>
						<a <?php checkactive("timesheet.php");?> href="timesheet.php">Timesheet
						</a>
					</li>
					<li>
						<a <?php checkactive("products.php");?> href="products.php">Products
						</a>
					</li>
					<li>
						<a <?php checkactive("invoice.php");?> href="invoice.php">Invoice
						</a>
					</li>
					<li>
						<a <?php checkactive("shopping_cart.php");?> href="shopping_cart.php">Shopping Cart
						</a>
					</li>
				</ul>
			 </div>
		</div>
	</div>
</div>
<!-- end menu -->