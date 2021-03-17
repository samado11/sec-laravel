<!DOCTYPE html>
<html>
<head>
	<title>SEC</title>
	<link href="http://getbootstrap.com/dist/css/bootstrap.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-body">
				
				<form action="{{}}" enctype="multipart/form-data" method="post">
					@csrf
					<div class="row">
						<div class="col-md-6">
							<input class="form-control" name="image" type="file">
						</div>
						<div class="col-md-6">
							<button class="btn btn-success" type="submit">Upload</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>