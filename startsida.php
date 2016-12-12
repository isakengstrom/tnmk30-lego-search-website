<?php

?>
<!doctype html>
<html>
	<head>
		<title>Lego DB searcher 2000</title>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700" rel="stylesheet">
		<link href="utseende.css" rel="stylesheet" type="text/css"/>
		<script src="searchtab.js"></script>
		<script src="validator.js"></script>
		<link href="utseende_search_bitar.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<div class="colContainer">
			<div id="startContainer">
				<h1 id="startHeader">welcome to <span>Lego Database Finder<span></h1>
			</div>
			<div id="searchBarContainerBG">
			</div>
			<div id="searchBarContainer">
				<div id="searchTabContainer">
					<div id="searchSelected" onclick="changeTab(this.id)">
						<h3>Bit</h3>
					</div>
					<div id="searchUnselected" onclick="changeTab(this.id)">
						<h3>Sats</h3>
					</div>
				</div>
				<form action="search_sats.php" method="post">
					<input type="text" name="keyword" onclick="checkLength()">
					<input type="submit" value="search" name="search" onclick="checkLength()">
				</form>
			</div>



<!--- NOT END OF FILE. NEED TO INCLUDE --->
