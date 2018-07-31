<!DOCTYPE html>
<html lang="en">
<head>
	<title>Create Freshdesk Ticket</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
		/* Textarea Fix */
		textarea {
			resize: none;
		}
		/* Center DIV */
		.centered {
			text-align: center;
			vertical-align: middle;
		}
	</style>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="centered">
				<h2>Create Freshdesk Ticket</h2>
			</div>
		</div>
		<form action="submit.php" method="post" name="form">
			<div class="row">
				<div class="centered">
					<div class="col-xs-6">
						<div class="form-group">
							<label>Text Input</label>
							<input type="text" class="form-control" name="text_input" required>
						</div>
					</div>
					<div class="col-xs-6">
						<div class="form-group">
							<label>Number Input</label>
							<input type="number" class="form-control" name="number_input" min="6" max="6" required>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="centered">
					<div class="col-xs-6">
						<div class="form-group">
							<label>Drop Down</label>
							<select class="form-control" name="drop_down" required>
								<option>-</option>
								<option value="Example 1">Example 1</option>
								<option value="Example 2">Example 2</option>
								<option value="Example 3">Example 3</option>
							</select>
						</div>
					</div>
					<div class="col-xs-6">
						<div class="form-group">
							<label>Date Field</label>
							<input type="date" class="form-control" name="date_field" required>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="centered">
					<label>Text Area</label>
				</div>
				<textarea rows="5" class="form-control" name="text_area"></textarea>
			</div>
			<br><br>
			<div class="row">
				<div class="centered">
					<div class="col-xs-12">
						<button type="submit" name="Submit" value="Submit" class="btn btn-default btn-sm">
							<span class="glyphicon glyphicon-plus"></span> Submit Ticket
						</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</body>
</html>