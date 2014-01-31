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
function selected_ul_menu($rootname){
	writeclassname($rootname," <span class=\"selected\"></span>");
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
			|| $file == "panels.php"
			|| $file == "tiles.php"
			|| $file == "colors.php"
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
			|| $file == "form_controls.php"
			|| $file == "form_controls2.php"
			|| $file == "form_components.php"
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
<div class="page-sidebar navbar-collapse collapse">
	<ul class="page-sidebar-menu">
		<li class="sidbar-toggler-menu"><div class="sidebar-toggler"><i class="icon-metro icon-back  icon-white"></i></div></li>
		<li>
			<form class="sidebar-search">
				<div class="input-group">
				 	<span class="input-group-addon remove">
						<a href="javascript:;"><i class="fa fa-times"></i></a>
					</span>
					<input type="text" class="form-control" placeholder="Search..." />
					<span class="input-group-btn">
				        <button class="btn submit" type="button"><i class="fa fa-search"></i></button>
				    </span>
				</div>
			</form> 
		</li>
		<li class="<?php checkactive_toggle("index.php");?>"><a href="index.php"><i class="fa fa-laptop"></i><span class="title">Dashboard</span><?php echo selected_ul_menu("index.php");?></a></li>
		<li class="<?php echo openaccordion("components");?>">
			<a href="javascript:;"><i class="fa fa-cog"></i><span class="title">Components</span><span class="arrow"></span></a>
			<ul class="sub-menu">
				<li <?php checkactive("modal.php");?>>
					<a href="modal.php">Modal</a>
				</li>
				<li <?php checkactive("alert_confirm.php");?>>
					<a href="alert_confirm.php">Alrert & Confirm</a>
				</li>
				<li <?php checkactive("labels_badges.php");?>>
					<a href="labels_badges.php">Labels and badges</a>
				</li>
				<li <?php checkactive("buttons.php");?>>
					<a href="buttons.php">Buttons</a>
				</li>
				<li <?php checkactive("panels.php");?>>
					<a href="panels.php">Panels</a>
				</li>
				<li <?php checkactive("tiles.php");?>>
					<a href="tiles.php">Tiles</a>
				</li>
				<li <?php checkactive("icons.php");?>>
					<a href="icons.php">Icons</a>
				</li>
				<li <?php checkactive("colors.php");?>>
					<a href="colors.php">Colors</a>
				</li>
				<li <?php checkactive("slider.php");?>>
					<a href="slider.php">Slider</a>
				</li>
				<li <?php checkactive("file_input.php");?>>
					<a href="file_input.php">File Input</a>
				</li>
				<li <?php checkactive("chart.php");?>>
					<a href="chart.php">Chart</a>
				</li>
				<li <?php checkactive("form_editor.php");?>>
					<a href="form_editor.php">Editor</a>
				</li>
				<li <?php checkactive("dropdowns.php");?>>
					<a href="dropdowns.php">Dropdowns</a>
				</li>
				<li <?php checkactive("button_dropdowns.php");?>>
					<a href="button_dropdowns.php">Button Dropdowns</a>
				</li>
			</ul>
		</li>
		<li class="<?php echo openaccordion("forms");?>">
			<a href="javascript:;"><i class="fa fa-tasks"></i><span class="title">Forms</span><span class="arrow"></span></a>
			<ul class="sub-menu">
				<li <?php checkactive("form_controls.php");?>><a href="form_controls.php">Form Controls</a></li>
				<li <?php checkactive("form_controls2.php");?>><a href="form_controls2.php">Form Controls 2</a></li>
				<li <?php checkactive("form_components.php");?>><a href="form_components.php">Form Components</a></li>
				<li <?php checkactive("form_basic.php");?>><a href="form_basic.php">Basic</a></li>
				<li <?php checkactive("form_validation.php");?>><a href="form_validation.php">Validation</a></li>
			</ul>
		</li>
		<li class="<?php echo openaccordion("tables");?>">
			<a href="javascript:;"><i class="fa fa-table"></i><span class="title">Tables</span><span class="arrow"></span></a>
			<ul class="sub-menu">
				<li <?php checkactive("table.php");?>>
					<a href="table.php">Basic</a>
				</li>
				<li <?php checkactive("dynamic_table.php");?>>
					<a href="dynamic_table.php">Dynamic</a>
				</li>
				<li <?php checkactive("custom_table.php");?>>
					<a href="custom_table.php">Custom</a>
				</li>
			</ul>
		</li>
		<li class="<?php echo openaccordion("samples");?>">
			<a href="javascript:;"><i class="fa fa-pencil"></i><span class="title">Samples</span><span class="arrow"></span></a>
			<ul class="sub-menu">
				<li <?php checkactive("login.php");?>>
					<a href="login.php">Login</a>
				</li>
				<li <?php checkactive("blank.php");?>>
					<a href="blank.php">Blank</a>
				</li>
				<li <?php checkactive("calendar.php");?>>
					<a href="calendar.php">Calendar</a>
				</li>
				<li <?php checkactive("file_manager.php");?>>
					<a href="file_manager.php">File Manager</a>
				</li>
				<li <?php checkactive("timesheet.php");?>>
					<a href="timesheet.php">Timesheet</a>
				</li>
				<li <?php checkactive("products.php");?>>
					<a href="products.php">Products</a>
				</li>
				<li <?php checkactive("invoice.php");?>>
					<a href="invoice.php">Invoice</a>
				</li>
				<li <?php checkactive("shopping_cart.php");?>>
					<a href="shopping_cart.php">Shopping Cart</a>
				</li>
			</ul>
		</li>
	</ul>
</div>
<!-- end sidebar -->