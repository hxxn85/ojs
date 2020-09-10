<?php 
	require_once("../include/db_info.inc.php");
	require_once("../include/setlang.php");
	include("../template/$OJ_TEMPLATE/css.php");
?>

<html>
<head>
  <title>JudgeOnline Administration</title>
<style>
.flex_container {
	display: flex;
	flex-direction: column;
	width: 100%;
	height: 100%;
}
.header {
	height: "auto";
}
.content {
	display: flex;
	flex: 1;
}
.aside {
	display: flex;
	flex-direction: column;
	flex: auto;
	width: 25%;
}
.main {
	display: flex;
	flex: auto;
}
</style>
</head>


<div class='container'; max-width:100%">
<header class="header">
	<?php include("nav.php"); ?>
</header>

<div class="content">
	<div class="aside"><?php include("menu2.php"); ?></div>
	<div class="main"><?php include("help.php"); ?></div>
</div>

</html>
