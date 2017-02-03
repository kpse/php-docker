<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<title>Php deployment</title>
</head>
<body>
<div class="well">
	<form action="action.php" method="post">
	<div class="form-group">
		<label for="name">You name</label>
		<input type="text" class="form-control" id="name" name="name" placeholder="Your name">
	</div>
	<div class="form-group">
		<label for="age">you age</label>
		<input type="text" class="form-control" id="age" name="age" placeholder="How old are you">
	</div>

	<div class="checkbox">
		<label>
			<input type="checkbox"> Check me out
		</label>
	</div>
	<button type="submit" class="btn btn-default">Submit</button>
</form>
</div>

</body>
</html>