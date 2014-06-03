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
function openaccordionsubmenu($rootname){
	writeclassname($rootname," in");
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
		)
		{
			echo $classname;
		}
	} else if($rootname=="components"){
		if($file == "chart.php"
			|| $file == "general.php"
			|| $file == "form_editor.php"
			|| $file == "modal.php"
			|| $file == "buttons.php"
			|| $file == "typography.php"
			|| $file == "panels.php"
			|| $file == "tiles.php"
			|| $file == "slider.php"
			|| $file == "icons.php"
			|| $file == "file_input.php"
		)
		{
			echo $classname;
		}
	} else if($rootname=="plugins"){
		if($file == "colorpicker.php"
		||$file == "datepicker.php"
		||$file == "date_range_picker.php"
		)
		{
			echo $classname;
		}
	} else if($rootname=="layouts"){
		if($file == "box_layout.php"
		|| $file == "sidebar_collapse_layout.php"
		|| $file == "sidebar_fixed_layout.php"
		|| $file == "tab_layout.php"
		)
		{
			echo $classname;
		}
	} else if($rootname=="forms"){
		if($file == "form_layout.php"
			|| $file == "form_validation.php"
			|| $file == "form_controls.php"
			|| $file == "form_components.php"
		)
		{
			echo $classname;
		}
	} else if($rootname=="tables"){
		if($file == "table.php"
			|| $file == "data_table.php" 
		)
		{
			echo $classname;
		}
	} else if($rootname=="samples"){
		if($file == "signup.php"
			|| $file == "signup.php"
			|| $file == "lock.php"
			|| $file == "404.php"
			|| $file == "500.php"
			|| $file == "calendar.php"
			|| $file == "file_manager.php"
			|| $file == "timeline.php"
			|| $file == "inbox.php"
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
<?php if($IS_TAB_LAYOUT == "1") { ?>
<!-- page tab layout -->
<div class="page-tab-menu">
	<ul>
<?php } else { ?>
<!-- page sidebar -->
<div id="left-sidebar" class="page-sidebar page-sidebar-left">
	<div class="sidebar-content">
		<ul class="nav page-sidebar-menu">
			<li>
				<div class="sidebar-toggler-wrapper">
					<button type="button" class="navbar-toggle sidebar-toggler">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
			</li>
			<li class="page-sidebar-search">
				<div class="input-group custom-search-form">
					<input type="text" class="form-control input-sm" placeholder="Search..." />
					<span class="input-group-btn">
						<button class="btn btn-default btn-sm" type="button">
							<i class="fa fa-search"></i>
						</button>
					</span>
				</div>
				<a href="javascript:;" id="close-search">&times</a>
				<a href="javascript:;" id="open-search"><i class="fa fa-search"></i></a>
			</li>
<?php } ?>
			<li class=<?php checkactive_toggle("index.php");?>>
				<a href="index.php">
					<i class="fa fa-laptop"></i>
					<span class="title">Dashboard</span>
					<?php echo selected_ul_menu("index.php");?>
				</a>
			</li>
			<li class=<?php echo openaccordion("layouts");?>>
				<a href="javascript:;">
					<i class="fa fa-cog"></i>
					<span class="title">Layouts</span>
					<span class="fa arrow"></span>
				</a>
				<ul class="nav sub-menu collapse<?php echo openaccordionsubmenu("layouts");?>">
					<li <?php checkactive("box_layout.php");?>>
						<a href="box_layout.php">Box Layout</a>
					</li> 
					<li <?php checkactive("sidebar_collapse_layout.php");?>>
						<a href="sidebar_collapse_layout.php">Sidebar Collapse Layout</a>
					</li> 
					<li <?php checkactive("sidebar_fixed_layout.php");?>>
						<a href="sidebar_fixed_layout.php">Sidebar Fixed Layout</a>
					</li> 
					<li <?php checkactive("tab_layout.php");?>>
						<a href="tab_layout.php">Tab Layout</a>
					</li> 
				</ul>
			</li>
			<li class=<?php echo openaccordion("components");?>>
				<a href="javascript:;">
					<i class="fa fa-cog"></i>
					<span class="title">UI Features</span>
					<span class="fa arrow"></span>
				</a>
				<ul class="nav sub-menu collapse<?php echo openaccordionsubmenu("components");?>">
					<li <?php checkactive("general.php");?>>
						<a href="general.php">General</a>
					</li>
					<li <?php checkactive("modal.php");?>>
						<a href="modal.php">Modal</a>
					</li>
					<li <?php checkactive("buttons.php");?>>
						<a href="buttons.php">Buttons</a>
					</li>
					<li <?php checkactive("typography.php");?>>
						<a href="typography.php">Typography</a>
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
				</ul>
			</li>
			<li class=<?php echo openaccordion("plugins");?>>
				<a href="javascript:;">
					<i class="fa fa-cog"></i>
					<span class="title">Plugins</span>
					<span class="fa arrow"></span>
				</a>
				<ul class="nav sub-menu collapse<?php echo openaccordionsubmenu("plugins");?>">
					<li <?php checkactive("datepicker.php");?>>
						<a href="datepicker.php">Date Picker</a>
					</li>
					<li <?php checkactive("date_range_picker.php");?>>
						<a href="date_range_picker.php">Date Range Picker</a>
					</li>
					<li <?php checkactive("colorpicker.php");?>>
						<a href="colorpicker.php">Color Picker</a>
					</li>
				</ul>
			</li>
			<li class=<?php echo openaccordion("forms");?>>
				<a href="javascript:;">
					<i class="fa fa-tasks"></i>
					<span class="title">Forms</span>
					<span class="fa arrow"></span>
				</a>
				<ul class="nav sub-menu collapse<?php echo openaccordionsubmenu("forms");?>">
					<li <?php checkactive("form_controls.php");?>>
						<a href="form_controls.php">Form Controls</a>
					</li>
					<li <?php checkactive("form_components.php");?>>
						<a href="form_components.php">Form Components</a>
					</li>
					<li <?php checkactive("form_layout.php");?>>
						<a href="form_layout.php">Form Layouts</a>
					</li>
					<li <?php checkactive("form_validation.php");?>>
						<a href="form_validation.php">Form Validation</a>
					</li>
				</ul>
			</li>
			<li class=<?php echo openaccordion("tables");?>>
				<a href="javascript:;">
					<i class="fa fa-table"></i>
					<span class="title">Tables</span>
					<span class="fa arrow"></span>
				</a>
				<ul class="nav sub-menu collapse<?php echo openaccordionsubmenu("tables");?>">
					<li <?php checkactive("table.php");?>>
						<a href="table.php">Basic</a>
					</li>
					<li <?php checkactive("data_table.php");?>>
						<a href="data_table.php">Data Table</a>
					</li>
				</ul>
			</li>
			<li class=<?php echo openaccordion("tables");?>>
				<a href="javascript:;">
					<i class="fa fa-pencil"></i>
					<span class="title">Samples</span>
					<span class="fa arrow"></span>
				</a>
				<ul class="nav sub-menu collapse<?php echo openaccordionsubmenu("tables");?>">
					<li <?php checkactive("signup.php");?>>
						<a href="signup.php">Sign In</a>
					</li>
					<li <?php checkactive("signup.php");?>>
						<a href="signup.php">Sign Up</a>
					</li>
					<li <?php checkactive("lock.php");?>>
						<a href="lock.php">Lock Screen</a>
					</li>
					<li <?php checkactive("blank.php");?>>
						<a href="blank.php">Blank</a>
					</li>
					<li <?php checkactive("404.php");?>>
						<a href="404.php">404</a>
					</li>
					<li <?php checkactive("500.php");?>>
						<a href="500.php">500</a>
					</li>
					<li <?php checkactive("calendar.php");?>>
						<a href="calendar.php">Calendar</a>
					</li>
					<li <?php checkactive("timeline.php");?>>
						<a href="timeline.php">Timeline</a>
					</li>
					<li <?php checkactive("inbox.php");?>>
						<a href="inbox.php">Inbox</a>
					</li>
					<li <?php checkactive("invoice.php");?>>
						<a href="invoice.php">Invoice</a>
					</li>
				</ul>
			</li>
			<li class=<?php echo openaccordion("menulevels");?>>
				<a href="javascript:;">
					<i class="fa fa-pencil"></i>
					<span class="title">Menu Levels</span>
					<span class="fa arrow"></span>
				</a>
				<?php if($IS_TAB_LAYOUT == "1") { ?>
					<ul>
						<li>
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu Level 1<span class="caret"></span></a>
							  <ul class="dropdown-menu" role="menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li class="divider"></li>
									<li><a href="#">Separated link</a></li>
								</ul>
						</li>
					</ul>
				<?php } ?>
				<?php if($IS_TAB_LAYOUT == "0") { ?>
					<ul class="nav sub-menu collapse<?php echo openaccordionsubmenu("menulevels");?>">
						<li><a href="#">Menu Level 1.1</a>
						<li><a href="#">Menu Level 1.2</a>
						<li>
							<a href="#">Menu Level 1.3<span class="fa arrow"></span></a>
							<ul class="nav sub-menu collapse">
								<li><a href="#">Menu Level 2.1</a>
								<li>
									<a href="#">Menu Level 2.2<span class="fa arrow"></span></a>
									<ul class="nav sub-menu collapse">
										<li><a href="#">Menu Level 3.1</a>
											<ul class="nav sub-menu collapse">
												<li><a href="#">Menu Level 4.1</a></li> 
												<li><a href="#">Menu Level 4.2</a></li> 
											</ul>
										</li> 
										<li><a href="#">Menu Level 3.2</a></li> 
									</ul>
								</li> 
								<li><a href="#">Menu Level 2.3</a>
							</ul>
						</li>
					</ul>
				<?php } ?>
			</li>
<?php if($IS_TAB_LAYOUT == "1") { ?>
		</ul>
	</div>
<!-- end page tab layout -->
<?php } ?>
<?php if($IS_TAB_LAYOUT == "0") { ?>
		</ul>
	</div>
</div>
<!-- end page-sidebar -->
<?php } ?>
