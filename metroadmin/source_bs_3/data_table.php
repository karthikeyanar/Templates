<?php include_once 'start-page.php' ?>
<title>Pepper - Data Table</title>
<?php include_once 'meta.php' ?>
<?php include_once 'style.php' ?>
<!-- bootstrap datatable -->
<link href="css/plugins/datatable/datatable-bs3.css" rel="stylesheet" type="text/css" />
<?php include_once 'body-start.php' ?>
<?php include_once 'header.php' ?>
<?php include_once 'start-page-container.php' ?>
<?php include_once 'sidebar.php' ?>
<?php include_once 'start-page-content.php' ?>
<div class="row">
	<div class="col-md-4">
		<div class="page-header">
			<h1>Data Table</h1>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Default Paging</h3>
			</div>
			<div class="panel-body">
				<table cellpadding="0" cellspacing="0" border="0" class="datatable table table-striped table-bordered table-hover"
					id="example">
					<thead>
						<tr>
							<th>
								Rendering engine
							</th>
							<th>
								Browser
							</th>
							<th>
								Platform(s)
							</th>
							<th>
								Engine version
							</th>
							<th>
								CSS grade
							</th>
						</tr>
					</thead>
					<tbody>
						<tr class="odd gradeX">
							<td>
								Trident
							</td>
							<td>
								Internet Explorer 4.0
							</td>
							<td>
								Win 95+
							</td>
							<td class="center">
								4
							</td>
							<td class="center">
								X
							</td>
						</tr>
						<tr class="even gradeC">
							<td>
								Trident
							</td>
							<td>
								Internet Explorer 5.0
							</td>
							<td>
								Win 95+
							</td>
							<td class="center">
								5
							</td>
							<td class="center">
								C
							</td>
						</tr>
						<tr class="odd gradeA">
							<td>
								Trident
							</td>
							<td>
								Internet Explorer 5.5
							</td>
							<td>
								Win 95+
							</td>
							<td class="center">
								5.5
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="even gradeA">
							<td>
								Trident
							</td>
							<td>
								Internet Explorer 6
							</td>
							<td>
								Win 98+
							</td>
							<td class="center">
								6
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="odd gradeA">
							<td>
								Trident
							</td>
							<td>
								Internet Explorer 7
							</td>
							<td>
								Win XP SP2+
							</td>
							<td class="center">
								7
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="even gradeA">
							<td>
								Trident
							</td>
							<td>
								AOL browser (AOL desktop)
							</td>
							<td>
								Win XP
							</td>
							<td class="center">
								6
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Firefox 1.0
							</td>
							<td>
								Win 98+ / OSX.2+
							</td>
							<td class="center">
								1.7
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Firefox 1.5
							</td>
							<td>
								Win 98+ / OSX.2+
							</td>
							<td class="center">
								1.8
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Firefox 2.0
							</td>
							<td>
								Win 98+ / OSX.2+
							</td>
							<td class="center">
								1.8
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Firefox 3.0
							</td>
							<td>
								Win 2k+ / OSX.3+
							</td>
							<td class="center">
								1.9
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Camino 1.0
							</td>
							<td>
								OSX.2+
							</td>
							<td class="center">
								1.8
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Camino 1.5
							</td>
							<td>
								OSX.3+
							</td>
							<td class="center">
								1.8
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Netscape 7.2
							</td>
							<td>
								Win 95+ / Mac OS 8.6-9.2
							</td>
							<td class="center">
								1.7
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Netscape Browser 8
							</td>
							<td>
								Win 98SE+
							</td>
							<td class="center">
								1.7
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Netscape Navigator 9
							</td>
							<td>
								Win 98+ / OSX.2+
							</td>
							<td class="center">
								1.8
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.0
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td class="center">
								1
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.1
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td class="center">
								1.1
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.2
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td class="center">
								1.2
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.3
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td class="center">
								1.3
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.4
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td class="center">
								1.4
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.5
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td class="center">
								1.5
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.6
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td class="center">
								1.6
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.7
							</td>
							<td>
								Win 98+ / OSX.1+
							</td>
							<td class="center">
								1.7
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.8
							</td>
							<td>
								Win 98+ / OSX.1+
							</td>
							<td class="center">
								1.8
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Seamonkey 1.1
							</td>
							<td>
								Win 98+ / OSX.2+
							</td>
							<td class="center">
								1.8
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Epiphany 2.20
							</td>
							<td>
								Gnome
							</td>
							<td class="center">
								1.8
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Webkit
							</td>
							<td>
								Safari 1.2
							</td>
							<td>
								OSX.3
							</td>
							<td class="center">
								125.5
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Webkit
							</td>
							<td>
								Safari 1.3
							</td>
							<td>
								OSX.3
							</td>
							<td class="center">
								312.8
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Webkit
							</td>
							<td>
								Safari 2.0
							</td>
							<td>
								OSX.4+
							</td>
							<td class="center">
								419.3
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Webkit
							</td>
							<td>
								Safari 3.0
							</td>
							<td>
								OSX.4+
							</td>
							<td class="center">
								522.1
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Webkit
							</td>
							<td>
								OmniWeb 5.5
							</td>
							<td>
								OSX.4+
							</td>
							<td class="center">
								420
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Webkit
							</td>
							<td>
								iPod Touch / iPhone
							</td>
							<td>
								iPod
							</td>
							<td class="center">
								420.1
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Webkit
							</td>
							<td>
								S60
							</td>
							<td>
								S60
							</td>
							<td class="center">
								413
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Presto
							</td>
							<td>
								Opera 7.0
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Presto
							</td>
							<td>
								Opera 7.5
							</td>
							<td>
								Win 95+ / OSX.2+
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Presto
							</td>
							<td>
								Opera 8.0
							</td>
							<td>
								Win 95+ / OSX.2+
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Presto
							</td>
							<td>
								Opera 8.5
							</td>
							<td>
								Win 95+ / OSX.2+
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Presto
							</td>
							<td>
								Opera 9.0
							</td>
							<td>
								Win 95+ / OSX.3+
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Presto
							</td>
							<td>
								Opera 9.2
							</td>
							<td>
								Win 88+ / OSX.3+
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Presto
							</td>
							<td>
								Opera 9.5
							</td>
							<td>
								Win 88+ / OSX.3+
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Presto
							</td>
							<td>
								Opera for Wii
							</td>
							<td>
								Wii
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Presto
							</td>
							<td>
								Nokia N800
							</td>
							<td>
								N800
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Presto
							</td>
							<td>
								Nintendo DS browser
							</td>
							<td>
								Nintendo DS
							</td>
							<td class="center">
								8.5
							</td>
							<td class="center">
								C/A<sup>1</sup>
							</td>
						</tr>
						<tr class="gradeC">
							<td>
								KHTML
							</td>
							<td>
								Konqureror 3.1
							</td>
							<td>
								KDE 3.1
							</td>
							<td class="center">
								3.1
							</td>
							<td class="center">
								C
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								KHTML
							</td>
							<td>
								Konqureror 3.3
							</td>
							<td>
								KDE 3.3
							</td>
							<td class="center">
								3.3
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								KHTML
							</td>
							<td>
								Konqureror 3.5
							</td>
							<td>
								KDE 3.5
							</td>
							<td class="center">
								3.5
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeX">
							<td>
								Tasman
							</td>
							<td>
								Internet Explorer 4.5
							</td>
							<td>
								Mac OS 8-9
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								X
							</td>
						</tr>
						<tr class="gradeC">
							<td>
								Tasman
							</td>
							<td>
								Internet Explorer 5.1
							</td>
							<td>
								Mac OS 7.6-9
							</td>
							<td class="center">
								1
							</td>
							<td class="center">
								C
							</td>
						</tr>
						<tr class="gradeC">
							<td>
								Tasman
							</td>
							<td>
								Internet Explorer 5.2
							</td>
							<td>
								Mac OS 8-X
							</td>
							<td class="center">
								1
							</td>
							<td class="center">
								C
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Misc
							</td>
							<td>
								NetFront 3.1
							</td>
							<td>
								Embedded devices
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								C
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Misc
							</td>
							<td>
								NetFront 3.4
							</td>
							<td>
								Embedded devices
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeX">
							<td>
								Misc
							</td>
							<td>
								Dillo 0.8
							</td>
							<td>
								Embedded devices
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								X
							</td>
						</tr>
						<tr class="gradeX">
							<td>
								Misc
							</td>
							<td>
								Links
							</td>
							<td>
								Text only
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								X
							</td>
						</tr>
						<tr class="gradeX">
							<td>
								Misc
							</td>
							<td>
								Lynx
							</td>
							<td>
								Text only
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								X
							</td>
						</tr>
						<tr class="gradeC">
							<td>
								Misc
							</td>
							<td>
								IE Mobile
							</td>
							<td>
								Windows Mobile 6
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								C
							</td>
						</tr>
						<tr class="gradeC">
							<td>
								Misc
							</td>
							<td>
								PSP browser
							</td>
							<td>
								PSP
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								C
							</td>
						</tr>
						<tr class="gradeU">
							<td>
								Other browsers
							</td>
							<td>
								All others
							</td>
							<td>
								-
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								U
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Paging - Four Buttons</h3>
			</div>
			<div class="panel-body">
				<table cellpadding="0" cellspacing="0" border="0" class="datatable table table-striped table-bordered table-hover"
					id="example2">
					<thead>
						<tr>
							<th>
								Rendering engine
							</th>
							<th>
								Browser
							</th>
							<th>
								Platform(s)
							</th>
							<th>
								Engine version
							</th>
							<th>
								CSS grade
							</th>
						</tr>
					</thead>
					<tbody>
						<tr class="odd gradeX">
							<td>
								Trident
							</td>
							<td>
								Internet Explorer 4.0
							</td>
							<td>
								Win 95+
							</td>
							<td class="center">
								4
							</td>
							<td class="center">
								X
							</td>
						</tr>
						<tr class="even gradeC">
							<td>
								Trident
							</td>
							<td>
								Internet Explorer 5.0
							</td>
							<td>
								Win 95+
							</td>
							<td class="center">
								5
							</td>
							<td class="center">
								C
							</td>
						</tr>
						<tr class="odd gradeA">
							<td>
								Trident
							</td>
							<td>
								Internet Explorer 5.5
							</td>
							<td>
								Win 95+
							</td>
							<td class="center">
								5.5
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="even gradeA">
							<td>
								Trident
							</td>
							<td>
								Internet Explorer 6
							</td>
							<td>
								Win 98+
							</td>
							<td class="center">
								6
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="odd gradeA">
							<td>
								Trident
							</td>
							<td>
								Internet Explorer 7
							</td>
							<td>
								Win XP SP2+
							</td>
							<td class="center">
								7
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="even gradeA">
							<td>
								Trident
							</td>
							<td>
								AOL browser (AOL desktop)
							</td>
							<td>
								Win XP
							</td>
							<td class="center">
								6
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Firefox 1.0
							</td>
							<td>
								Win 98+ / OSX.2+
							</td>
							<td class="center">
								1.7
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Firefox 1.5
							</td>
							<td>
								Win 98+ / OSX.2+
							</td>
							<td class="center">
								1.8
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Firefox 2.0
							</td>
							<td>
								Win 98+ / OSX.2+
							</td>
							<td class="center">
								1.8
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Firefox 3.0
							</td>
							<td>
								Win 2k+ / OSX.3+
							</td>
							<td class="center">
								1.9
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Camino 1.0
							</td>
							<td>
								OSX.2+
							</td>
							<td class="center">
								1.8
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Camino 1.5
							</td>
							<td>
								OSX.3+
							</td>
							<td class="center">
								1.8
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Netscape 7.2
							</td>
							<td>
								Win 95+ / Mac OS 8.6-9.2
							</td>
							<td class="center">
								1.7
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Netscape Browser 8
							</td>
							<td>
								Win 98SE+
							</td>
							<td class="center">
								1.7
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Netscape Navigator 9
							</td>
							<td>
								Win 98+ / OSX.2+
							</td>
							<td class="center">
								1.8
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.0
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td class="center">
								1
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.1
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td class="center">
								1.1
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.2
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td class="center">
								1.2
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.3
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td class="center">
								1.3
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.4
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td class="center">
								1.4
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.5
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td class="center">
								1.5
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.6
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td class="center">
								1.6
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.7
							</td>
							<td>
								Win 98+ / OSX.1+
							</td>
							<td class="center">
								1.7
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.8
							</td>
							<td>
								Win 98+ / OSX.1+
							</td>
							<td class="center">
								1.8
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Seamonkey 1.1
							</td>
							<td>
								Win 98+ / OSX.2+
							</td>
							<td class="center">
								1.8
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Epiphany 2.20
							</td>
							<td>
								Gnome
							</td>
							<td class="center">
								1.8
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Webkit
							</td>
							<td>
								Safari 1.2
							</td>
							<td>
								OSX.3
							</td>
							<td class="center">
								125.5
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Webkit
							</td>
							<td>
								Safari 1.3
							</td>
							<td>
								OSX.3
							</td>
							<td class="center">
								312.8
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Webkit
							</td>
							<td>
								Safari 2.0
							</td>
							<td>
								OSX.4+
							</td>
							<td class="center">
								419.3
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Webkit
							</td>
							<td>
								Safari 3.0
							</td>
							<td>
								OSX.4+
							</td>
							<td class="center">
								522.1
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Webkit
							</td>
							<td>
								OmniWeb 5.5
							</td>
							<td>
								OSX.4+
							</td>
							<td class="center">
								420
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Webkit
							</td>
							<td>
								iPod Touch / iPhone
							</td>
							<td>
								iPod
							</td>
							<td class="center">
								420.1
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Webkit
							</td>
							<td>
								S60
							</td>
							<td>
								S60
							</td>
							<td class="center">
								413
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Presto
							</td>
							<td>
								Opera 7.0
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Presto
							</td>
							<td>
								Opera 7.5
							</td>
							<td>
								Win 95+ / OSX.2+
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Presto
							</td>
							<td>
								Opera 8.0
							</td>
							<td>
								Win 95+ / OSX.2+
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Presto
							</td>
							<td>
								Opera 8.5
							</td>
							<td>
								Win 95+ / OSX.2+
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Presto
							</td>
							<td>
								Opera 9.0
							</td>
							<td>
								Win 95+ / OSX.3+
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Presto
							</td>
							<td>
								Opera 9.2
							</td>
							<td>
								Win 88+ / OSX.3+
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Presto
							</td>
							<td>
								Opera 9.5
							</td>
							<td>
								Win 88+ / OSX.3+
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Presto
							</td>
							<td>
								Opera for Wii
							</td>
							<td>
								Wii
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Presto
							</td>
							<td>
								Nokia N800
							</td>
							<td>
								N800
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Presto
							</td>
							<td>
								Nintendo DS browser
							</td>
							<td>
								Nintendo DS
							</td>
							<td class="center">
								8.5
							</td>
							<td class="center">
								C/A<sup>1</sup>
							</td>
						</tr>
						<tr class="gradeC">
							<td>
								KHTML
							</td>
							<td>
								Konqureror 3.1
							</td>
							<td>
								KDE 3.1
							</td>
							<td class="center">
								3.1
							</td>
							<td class="center">
								C
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								KHTML
							</td>
							<td>
								Konqureror 3.3
							</td>
							<td>
								KDE 3.3
							</td>
							<td class="center">
								3.3
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								KHTML
							</td>
							<td>
								Konqureror 3.5
							</td>
							<td>
								KDE 3.5
							</td>
							<td class="center">
								3.5
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeX">
							<td>
								Tasman
							</td>
							<td>
								Internet Explorer 4.5
							</td>
							<td>
								Mac OS 8-9
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								X
							</td>
						</tr>
						<tr class="gradeC">
							<td>
								Tasman
							</td>
							<td>
								Internet Explorer 5.1
							</td>
							<td>
								Mac OS 7.6-9
							</td>
							<td class="center">
								1
							</td>
							<td class="center">
								C
							</td>
						</tr>
						<tr class="gradeC">
							<td>
								Tasman
							</td>
							<td>
								Internet Explorer 5.2
							</td>
							<td>
								Mac OS 8-X
							</td>
							<td class="center">
								1
							</td>
							<td class="center">
								C
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Misc
							</td>
							<td>
								NetFront 3.1
							</td>
							<td>
								Embedded devices
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								C
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Misc
							</td>
							<td>
								NetFront 3.4
							</td>
							<td>
								Embedded devices
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeX">
							<td>
								Misc
							</td>
							<td>
								Dillo 0.8
							</td>
							<td>
								Embedded devices
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								X
							</td>
						</tr>
						<tr class="gradeX">
							<td>
								Misc
							</td>
							<td>
								Links
							</td>
							<td>
								Text only
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								X
							</td>
						</tr>
						<tr class="gradeX">
							<td>
								Misc
							</td>
							<td>
								Lynx
							</td>
							<td>
								Text only
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								X
							</td>
						</tr>
						<tr class="gradeC">
							<td>
								Misc
							</td>
							<td>
								IE Mobile
							</td>
							<td>
								Windows Mobile 6
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								C
							</td>
						</tr>
						<tr class="gradeC">
							<td>
								Misc
							</td>
							<td>
								PSP browser
							</td>
							<td>
								PSP
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								C
							</td>
						</tr>
						<tr class="gradeU">
							<td>
								Other browsers
							</td>
							<td>
								All others
							</td>
							<td>
								-
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								U
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Paging - Two Buttons</h3>
			</div>
			<div class="panel-body">
				<table cellpadding="0" cellspacing="0" border="0" class="datatable table table-striped table-bordered table-hover"
					id="example3">
					<thead>
						<tr>
							<th>
								Rendering engine
							</th>
							<th>
								Browser
							</th>
							<th>
								Platform(s)
							</th>
							<th>
								Engine version
							</th>
							<th>
								CSS grade
							</th>
						</tr>
					</thead>
					<tbody>
						<tr class="odd gradeX">
							<td>
								Trident
							</td>
							<td>
								Internet Explorer 4.0
							</td>
							<td>
								Win 95+
							</td>
							<td class="center">
								4
							</td>
							<td class="center">
								X
							</td>
						</tr>
						<tr class="even gradeC">
							<td>
								Trident
							</td>
							<td>
								Internet Explorer 5.0
							</td>
							<td>
								Win 95+
							</td>
							<td class="center">
								5
							</td>
							<td class="center">
								C
							</td>
						</tr>
						<tr class="odd gradeA">
							<td>
								Trident
							</td>
							<td>
								Internet Explorer 5.5
							</td>
							<td>
								Win 95+
							</td>
							<td class="center">
								5.5
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="even gradeA">
							<td>
								Trident
							</td>
							<td>
								Internet Explorer 6
							</td>
							<td>
								Win 98+
							</td>
							<td class="center">
								6
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="odd gradeA">
							<td>
								Trident
							</td>
							<td>
								Internet Explorer 7
							</td>
							<td>
								Win XP SP2+
							</td>
							<td class="center">
								7
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="even gradeA">
							<td>
								Trident
							</td>
							<td>
								AOL browser (AOL desktop)
							</td>
							<td>
								Win XP
							</td>
							<td class="center">
								6
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Firefox 1.0
							</td>
							<td>
								Win 98+ / OSX.2+
							</td>
							<td class="center">
								1.7
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Firefox 1.5
							</td>
							<td>
								Win 98+ / OSX.2+
							</td>
							<td class="center">
								1.8
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Firefox 2.0
							</td>
							<td>
								Win 98+ / OSX.2+
							</td>
							<td class="center">
								1.8
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Firefox 3.0
							</td>
							<td>
								Win 2k+ / OSX.3+
							</td>
							<td class="center">
								1.9
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Camino 1.0
							</td>
							<td>
								OSX.2+
							</td>
							<td class="center">
								1.8
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Camino 1.5
							</td>
							<td>
								OSX.3+
							</td>
							<td class="center">
								1.8
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Netscape 7.2
							</td>
							<td>
								Win 95+ / Mac OS 8.6-9.2
							</td>
							<td class="center">
								1.7
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Netscape Browser 8
							</td>
							<td>
								Win 98SE+
							</td>
							<td class="center">
								1.7
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Netscape Navigator 9
							</td>
							<td>
								Win 98+ / OSX.2+
							</td>
							<td class="center">
								1.8
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.0
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td class="center">
								1
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.1
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td class="center">
								1.1
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.2
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td class="center">
								1.2
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.3
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td class="center">
								1.3
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.4
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td class="center">
								1.4
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.5
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td class="center">
								1.5
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.6
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td class="center">
								1.6
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.7
							</td>
							<td>
								Win 98+ / OSX.1+
							</td>
							<td class="center">
								1.7
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.8
							</td>
							<td>
								Win 98+ / OSX.1+
							</td>
							<td class="center">
								1.8
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Seamonkey 1.1
							</td>
							<td>
								Win 98+ / OSX.2+
							</td>
							<td class="center">
								1.8
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Epiphany 2.20
							</td>
							<td>
								Gnome
							</td>
							<td class="center">
								1.8
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Webkit
							</td>
							<td>
								Safari 1.2
							</td>
							<td>
								OSX.3
							</td>
							<td class="center">
								125.5
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Webkit
							</td>
							<td>
								Safari 1.3
							</td>
							<td>
								OSX.3
							</td>
							<td class="center">
								312.8
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Webkit
							</td>
							<td>
								Safari 2.0
							</td>
							<td>
								OSX.4+
							</td>
							<td class="center">
								419.3
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Webkit
							</td>
							<td>
								Safari 3.0
							</td>
							<td>
								OSX.4+
							</td>
							<td class="center">
								522.1
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Webkit
							</td>
							<td>
								OmniWeb 5.5
							</td>
							<td>
								OSX.4+
							</td>
							<td class="center">
								420
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Webkit
							</td>
							<td>
								iPod Touch / iPhone
							</td>
							<td>
								iPod
							</td>
							<td class="center">
								420.1
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Webkit
							</td>
							<td>
								S60
							</td>
							<td>
								S60
							</td>
							<td class="center">
								413
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Presto
							</td>
							<td>
								Opera 7.0
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Presto
							</td>
							<td>
								Opera 7.5
							</td>
							<td>
								Win 95+ / OSX.2+
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Presto
							</td>
							<td>
								Opera 8.0
							</td>
							<td>
								Win 95+ / OSX.2+
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Presto
							</td>
							<td>
								Opera 8.5
							</td>
							<td>
								Win 95+ / OSX.2+
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Presto
							</td>
							<td>
								Opera 9.0
							</td>
							<td>
								Win 95+ / OSX.3+
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Presto
							</td>
							<td>
								Opera 9.2
							</td>
							<td>
								Win 88+ / OSX.3+
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Presto
							</td>
							<td>
								Opera 9.5
							</td>
							<td>
								Win 88+ / OSX.3+
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Presto
							</td>
							<td>
								Opera for Wii
							</td>
							<td>
								Wii
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Presto
							</td>
							<td>
								Nokia N800
							</td>
							<td>
								N800
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Presto
							</td>
							<td>
								Nintendo DS browser
							</td>
							<td>
								Nintendo DS
							</td>
							<td class="center">
								8.5
							</td>
							<td class="center">
								C/A<sup>1</sup>
							</td>
						</tr>
						<tr class="gradeC">
							<td>
								KHTML
							</td>
							<td>
								Konqureror 3.1
							</td>
							<td>
								KDE 3.1
							</td>
							<td class="center">
								3.1
							</td>
							<td class="center">
								C
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								KHTML
							</td>
							<td>
								Konqureror 3.3
							</td>
							<td>
								KDE 3.3
							</td>
							<td class="center">
								3.3
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								KHTML
							</td>
							<td>
								Konqureror 3.5
							</td>
							<td>
								KDE 3.5
							</td>
							<td class="center">
								3.5
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeX">
							<td>
								Tasman
							</td>
							<td>
								Internet Explorer 4.5
							</td>
							<td>
								Mac OS 8-9
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								X
							</td>
						</tr>
						<tr class="gradeC">
							<td>
								Tasman
							</td>
							<td>
								Internet Explorer 5.1
							</td>
							<td>
								Mac OS 7.6-9
							</td>
							<td class="center">
								1
							</td>
							<td class="center">
								C
							</td>
						</tr>
						<tr class="gradeC">
							<td>
								Tasman
							</td>
							<td>
								Internet Explorer 5.2
							</td>
							<td>
								Mac OS 8-X
							</td>
							<td class="center">
								1
							</td>
							<td class="center">
								C
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Misc
							</td>
							<td>
								NetFront 3.1
							</td>
							<td>
								Embedded devices
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								C
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Misc
							</td>
							<td>
								NetFront 3.4
							</td>
							<td>
								Embedded devices
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeX">
							<td>
								Misc
							</td>
							<td>
								Dillo 0.8
							</td>
							<td>
								Embedded devices
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								X
							</td>
						</tr>
						<tr class="gradeX">
							<td>
								Misc
							</td>
							<td>
								Links
							</td>
							<td>
								Text only
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								X
							</td>
						</tr>
						<tr class="gradeX">
							<td>
								Misc
							</td>
							<td>
								Lynx
							</td>
							<td>
								Text only
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								X
							</td>
						</tr>
						<tr class="gradeC">
							<td>
								Misc
							</td>
							<td>
								IE Mobile
							</td>
							<td>
								Windows Mobile 6
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								C
							</td>
						</tr>
						<tr class="gradeC">
							<td>
								Misc
							</td>
							<td>
								PSP browser
							</td>
							<td>
								PSP
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								C
							</td>
						</tr>
						<tr class="gradeU">
							<td>
								Other browsers
							</td>
							<td>
								All others
							</td>
							<td>
								-
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								U
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Paging - Full</h3>
			</div>
			<div class="panel-body">
				<table cellpadding="0" cellspacing="0" border="0" class="datatable table table-striped table-bordered table-hover"
					id="example4">
					<thead>
						<tr>
							<th>
								Rendering engine
							</th>
							<th>
								Browser
							</th>
							<th>
								Platform(s)
							</th>
							<th>
								Engine version
							</th>
							<th>
								CSS grade
							</th>
						</tr>
					</thead>
					<tbody>
						<tr class="odd gradeX">
							<td>
								Trident
							</td>
							<td>
								Internet Explorer 4.0
							</td>
							<td>
								Win 95+
							</td>
							<td class="center">
								4
							</td>
							<td class="center">
								X
							</td>
						</tr>
						<tr class="even gradeC">
							<td>
								Trident
							</td>
							<td>
								Internet Explorer 5.0
							</td>
							<td>
								Win 95+
							</td>
							<td class="center">
								5
							</td>
							<td class="center">
								C
							</td>
						</tr>
						<tr class="odd gradeA">
							<td>
								Trident
							</td>
							<td>
								Internet Explorer 5.5
							</td>
							<td>
								Win 95+
							</td>
							<td class="center">
								5.5
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="even gradeA">
							<td>
								Trident
							</td>
							<td>
								Internet Explorer 6
							</td>
							<td>
								Win 98+
							</td>
							<td class="center">
								6
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="odd gradeA">
							<td>
								Trident
							</td>
							<td>
								Internet Explorer 7
							</td>
							<td>
								Win XP SP2+
							</td>
							<td class="center">
								7
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="even gradeA">
							<td>
								Trident
							</td>
							<td>
								AOL browser (AOL desktop)
							</td>
							<td>
								Win XP
							</td>
							<td class="center">
								6
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Firefox 1.0
							</td>
							<td>
								Win 98+ / OSX.2+
							</td>
							<td class="center">
								1.7
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Firefox 1.5
							</td>
							<td>
								Win 98+ / OSX.2+
							</td>
							<td class="center">
								1.8
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Firefox 2.0
							</td>
							<td>
								Win 98+ / OSX.2+
							</td>
							<td class="center">
								1.8
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Firefox 3.0
							</td>
							<td>
								Win 2k+ / OSX.3+
							</td>
							<td class="center">
								1.9
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Camino 1.0
							</td>
							<td>
								OSX.2+
							</td>
							<td class="center">
								1.8
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Camino 1.5
							</td>
							<td>
								OSX.3+
							</td>
							<td class="center">
								1.8
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Netscape 7.2
							</td>
							<td>
								Win 95+ / Mac OS 8.6-9.2
							</td>
							<td class="center">
								1.7
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Netscape Browser 8
							</td>
							<td>
								Win 98SE+
							</td>
							<td class="center">
								1.7
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Netscape Navigator 9
							</td>
							<td>
								Win 98+ / OSX.2+
							</td>
							<td class="center">
								1.8
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.0
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td class="center">
								1
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.1
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td class="center">
								1.1
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.2
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td class="center">
								1.2
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.3
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td class="center">
								1.3
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.4
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td class="center">
								1.4
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.5
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td class="center">
								1.5
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.6
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td class="center">
								1.6
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.7
							</td>
							<td>
								Win 98+ / OSX.1+
							</td>
							<td class="center">
								1.7
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Mozilla 1.8
							</td>
							<td>
								Win 98+ / OSX.1+
							</td>
							<td class="center">
								1.8
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Seamonkey 1.1
							</td>
							<td>
								Win 98+ / OSX.2+
							</td>
							<td class="center">
								1.8
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Gecko
							</td>
							<td>
								Epiphany 2.20
							</td>
							<td>
								Gnome
							</td>
							<td class="center">
								1.8
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Webkit
							</td>
							<td>
								Safari 1.2
							</td>
							<td>
								OSX.3
							</td>
							<td class="center">
								125.5
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Webkit
							</td>
							<td>
								Safari 1.3
							</td>
							<td>
								OSX.3
							</td>
							<td class="center">
								312.8
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Webkit
							</td>
							<td>
								Safari 2.0
							</td>
							<td>
								OSX.4+
							</td>
							<td class="center">
								419.3
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Webkit
							</td>
							<td>
								Safari 3.0
							</td>
							<td>
								OSX.4+
							</td>
							<td class="center">
								522.1
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Webkit
							</td>
							<td>
								OmniWeb 5.5
							</td>
							<td>
								OSX.4+
							</td>
							<td class="center">
								420
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Webkit
							</td>
							<td>
								iPod Touch / iPhone
							</td>
							<td>
								iPod
							</td>
							<td class="center">
								420.1
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Webkit
							</td>
							<td>
								S60
							</td>
							<td>
								S60
							</td>
							<td class="center">
								413
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Presto
							</td>
							<td>
								Opera 7.0
							</td>
							<td>
								Win 95+ / OSX.1+
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Presto
							</td>
							<td>
								Opera 7.5
							</td>
							<td>
								Win 95+ / OSX.2+
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Presto
							</td>
							<td>
								Opera 8.0
							</td>
							<td>
								Win 95+ / OSX.2+
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Presto
							</td>
							<td>
								Opera 8.5
							</td>
							<td>
								Win 95+ / OSX.2+
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Presto
							</td>
							<td>
								Opera 9.0
							</td>
							<td>
								Win 95+ / OSX.3+
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Presto
							</td>
							<td>
								Opera 9.2
							</td>
							<td>
								Win 88+ / OSX.3+
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Presto
							</td>
							<td>
								Opera 9.5
							</td>
							<td>
								Win 88+ / OSX.3+
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Presto
							</td>
							<td>
								Opera for Wii
							</td>
							<td>
								Wii
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Presto
							</td>
							<td>
								Nokia N800
							</td>
							<td>
								N800
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Presto
							</td>
							<td>
								Nintendo DS browser
							</td>
							<td>
								Nintendo DS
							</td>
							<td class="center">
								8.5
							</td>
							<td class="center">
								C/A<sup>1</sup>
							</td>
						</tr>
						<tr class="gradeC">
							<td>
								KHTML
							</td>
							<td>
								Konqureror 3.1
							</td>
							<td>
								KDE 3.1
							</td>
							<td class="center">
								3.1
							</td>
							<td class="center">
								C
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								KHTML
							</td>
							<td>
								Konqureror 3.3
							</td>
							<td>
								KDE 3.3
							</td>
							<td class="center">
								3.3
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								KHTML
							</td>
							<td>
								Konqureror 3.5
							</td>
							<td>
								KDE 3.5
							</td>
							<td class="center">
								3.5
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeX">
							<td>
								Tasman
							</td>
							<td>
								Internet Explorer 4.5
							</td>
							<td>
								Mac OS 8-9
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								X
							</td>
						</tr>
						<tr class="gradeC">
							<td>
								Tasman
							</td>
							<td>
								Internet Explorer 5.1
							</td>
							<td>
								Mac OS 7.6-9
							</td>
							<td class="center">
								1
							</td>
							<td class="center">
								C
							</td>
						</tr>
						<tr class="gradeC">
							<td>
								Tasman
							</td>
							<td>
								Internet Explorer 5.2
							</td>
							<td>
								Mac OS 8-X
							</td>
							<td class="center">
								1
							</td>
							<td class="center">
								C
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Misc
							</td>
							<td>
								NetFront 3.1
							</td>
							<td>
								Embedded devices
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								C
							</td>
						</tr>
						<tr class="gradeA">
							<td>
								Misc
							</td>
							<td>
								NetFront 3.4
							</td>
							<td>
								Embedded devices
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								A
							</td>
						</tr>
						<tr class="gradeX">
							<td>
								Misc
							</td>
							<td>
								Dillo 0.8
							</td>
							<td>
								Embedded devices
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								X
							</td>
						</tr>
						<tr class="gradeX">
							<td>
								Misc
							</td>
							<td>
								Links
							</td>
							<td>
								Text only
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								X
							</td>
						</tr>
						<tr class="gradeX">
							<td>
								Misc
							</td>
							<td>
								Lynx
							</td>
							<td>
								Text only
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								X
							</td>
						</tr>
						<tr class="gradeC">
							<td>
								Misc
							</td>
							<td>
								IE Mobile
							</td>
							<td>
								Windows Mobile 6
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								C
							</td>
						</tr>
						<tr class="gradeC">
							<td>
								Misc
							</td>
							<td>
								PSP browser
							</td>
							<td>
								PSP
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								C
							</td>
						</tr>
						<tr class="gradeU">
							<td>
								Other browsers
							</td>
							<td>
								All others
							</td>
							<td>
								-
							</td>
							<td class="center">
								-
							</td>
							<td class="center">
								U
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php include_once 'end-page-content.php' ?>
<?php include_once 'footer.php' ?>
<?php include_once 'end-page-container.php' ?>
<?php include_once 'script.php' ?>
<!-- data-table -->
<script src="js/plugins/datatable/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="js/plugins/datatable/datatable-bs3.js" type="text/javascript"></script>
<script type="text/javascript">
	/* Table initialisation */
	$(document).ready(function() {
		$('#example').dataTable({
			 "sPaginationType": "bs_normal"
		});
		$('#example2').dataTable({
			 "sPaginationType": "bs_four_button"
		});
		$('#example3').dataTable({
			 "sPaginationType": "bs_two_button"
		});
		$('#example4').dataTable({
			 "sPaginationType": "bs_full"
		});
		$('.datatable').each(function() {
            var datatable=$(this);
            // SEARCH - Add the placeholder for Search and Turn this into in-line form control
            var search_input=datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');
            search_input.attr('placeholder','Search');
            search_input.addClass('form-control');
            // LENGTH - Inline-Form control
            var length_sel=datatable.closest('.dataTables_wrapper').find('div[id$=_length] select');
            length_sel.addClass('form-control');
            datatable.bind('page',function(e) {
                window.console&&console.log('pagination event:',e) //this event must be fired whenever you paginate
            });
        });
	});
</script>
<?php include_once 'applicationscript.php' ?>
<?php include_once 'end-page.php' ?>