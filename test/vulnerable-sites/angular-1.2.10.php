<!DOCTYPE html>
<html>
	<head>
		<title>1.2.10</title>
		<script src="https://code.angularjs.org/1.2.10/angular.min.js"></script>
	</head>
	<body ng-app="">
		<a href="?vulnerable=payload">Payload</a>
		<?php if(isset($_GET['vulnerable'])): ?>
		<?= htmlentities($_GET['vulnerable']); ?>
		<?php endif; ?>
	</body>
</html>