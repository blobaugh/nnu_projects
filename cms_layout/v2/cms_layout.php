<html>
<head>
	<title>cms layout</title>
	<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
	
	<script src="js/jquery.treeview.min.js" type="text/javascript"></script>
	<script src="js/jquery.cookie.js" type="text/javascript"></script>
	<script src="js/jquery.tools.min.js"></script>
	
	
   
	<link rel="stylesheet" href="css/cms-layout.css" />
	<link rel="stylesheet" href="css/jquery.treeview.css" />
	
	<script type="text/javascript">

		function pageLoaded() {
			//$('loading').hide();
			$('body').fadeIn('slow');
		}
		$(window)
		$(document).ready(function(){
		//	$('body').fadeIn('slow'); // The content of the body is set to hide in css. Show it when ready
			$("#browser").treeview(); 
			
			$("#tabs").tabs("layout-top-bar");
			
			/* Detects when a tab is clicked on and handles it accordingly */
			$("span.clickable").click( function(){ 
				if($(this).attr('href')) {
				//	$("#workspace").hide();
				//	$("#loading").show("slow");
					
					//$("#workspace").text($(this).text());
					$("#workspace").load($(this).attr("href"));
				//	$("#loading").hide();
				//	$("#workspace").fadeIn('slow');
				}
			});
			

			
		
			
		});
		
		
	</script>
	

<style type="text/css">
	
</style>
</head>
<body onload="pageLoaded();" style="display: none">

<div id="layout-top-menu">
	<div class="bottom" id="tabs">
		<span class="clickable">Site</span>  
		<span class="clickable">Elements</span> 
		<span class="clickable">Tools</span> 
		<span class="clickable">Reports</span>
	</div>
	
	<div id="layout-top-info">Welcome Ben Lobaugh | <span class="clickable">Messages (0/0)</span> | <span class="clickable">Tasks (0/0)</span> | <span class="clickable">Logout</span></div>
</div>

<div id="layout-top-bar">
	<!-- THESE ELEMENTS WILL COME FROM THE DATABASE. THERE WILL BE LINKS THAT COME FROM THE DB WITH A TITLE, CSS, AND LINKHREF -->
	<div>
		<span class="clickable" href="testfile.html">Home</span>
		<span class="clickable">Users</span>
	</div>
	<div>2</div>
	<div>3</div>
	<div>4</div>
	
</div>

<table id="layout-wrap" width="100%" height="89%">
	<tr>
		<td id="layout-tree" width="240">
			<img src="images/icons/server.png" width="16" height="16" alt="Site Name"> Site Name
			<ul id="browser" class="filetree">
					<li><span class="folder clickable">Folder 1</span>
						<ul>

							<li><span class="file clickable">Item 1.1</span></li>
						</ul>
					</li>
					<li><span class="folder clickable">Folder 2</span>
						<ul>
							<li><span class="folder clickable">Subfolder 2.1</span>
								<ul id="folder21">

									<li><span class="file clickable">File 2.1.1</span></li>
									<li><span class="file clickable">File 2.1.2</span></li>
								</ul>
							</li>
							<li><span class="file clickable">File 2.2</span></li>
						</ul>
					</li>

					<li class="closed"><span class="folder clickable">Folder 3 (closed at start)</span>
						<ul>
							<li><span class="file clickable">File 3.1</span></li>
						</ul>
					</li>
					<li><span class="file clickable">File 4</span></li>
				</ul>
			
		</td>
		<td id="layout-workspace">
			<div id="loading">
				<center><img src="images/ajax-loader.gif"  alt="Loading..." /><br /><br /><br />Page Loading...</center>
			</div>
			<div id="workspace">workspace</div>
		</td>
	</tr>
	<tr>
		<td colspan="2" id="layout-footer">(CompanyName),  thank you for choosing Blobms</td>
	</tr>
</table>
</body>

</html>