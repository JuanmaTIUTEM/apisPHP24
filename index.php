<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Apis PHP</title>
</head>
<header>
	<!-- Latest compiled and minified CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</header>
<body>
	<main class="container-fluid border">
		<?php 
			require_once './views/menu.php';
		?>
	</main>
	<div id="addUser" class="container border mt-3 p-2" style="display: none;">
		<?php 
			include './views/addUser.php';
		 ?>
	</div>
	<div id="listUsers" class="container border mt-3 p-2" style="display: none;">
		<?php 
			include './views/listUsers.php';
		 ?>
	</div>

</body>
	<!-- Latest compiled JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

	<script src="./js/logic.js"></script>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script type="text/javascript">
		
	</script>
</html>