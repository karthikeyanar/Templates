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
<div id="left-sidebar" class="page-sidebar">
    <ul class="nav page-sidebar-menu" id="pageSidebarmenu">
        <li>
            <a class="navbar-brand" href="index.php">Pepper</a>
        </li>
        <li class="page-sidebar-search">
            <div class="input-group custom-search-form">
                <input type="text" class="form-control" placeholder="Search..." />
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
            <!-- /input-group -->
        </li>
        <li class=<?php checkactive_toggle("index.php");?>>
            <a href="index.php">
                <i class="fa fa-laptop"></i>
                <span class="title">Dashboard</span>
                <?php echo selected_ul_menu("index.php");?>
            </a>
        </li>
        <li class=<?php echo openaccordion("components");?>>
            <a href="javascript:;">
                <i class="fa fa-cog"></i>
                <span class="title">UI Features</span>
                <span class="fa arrow"></span>
            </a>
            <ul class="nav nav-level-2 collapse">
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
        <li class=<?php echo openaccordion("forms");?>>
            <a href="javascript:;">
                <i class="fa fa-tasks"></i>
                <span class="title">Forms</span>
                <span class="fa arrow"></span>
            </a>
            <ul class="nav nav-level-2 collapse">
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
            <ul class="nav nav-level-2 collapse">
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
        <li class=<?php echo openaccordion("samples");?>>
            <a href="javascript:;">
                <i class="fa fa-pencil"></i>
                <span class="title">Samples</span>
                <span class="fa arrow"></span>
            </a>
            <ul class="nav nav-level-2 collapse">
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
<!-- end page-sidebar -->