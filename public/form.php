<?php
include_once '../src/template_autoload.php';
$twig->load('header.twig')->display(array('title' => 'Profile'));
?>

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
        <div class="form-group">
            <label>
                <input type="radio" name="gender" value="female">Female
            </label>
            <label>
                <input type="radio" name="gender" value="male">Male
            </label>
        </div>
	<div class="checkbox">
		<label>
			<input type="checkbox"> Check me out
		</label>
	</div>
	<button type="submit" class="btn btn-default">Submit</button>
</form>
</div>

<?php
include_once '../src/template_autoload.php';
$twig->load('footer.twig')->display(array());
?>