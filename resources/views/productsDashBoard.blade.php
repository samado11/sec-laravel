

<!DOCTYPE html>
<html lang="en">
<head>
  <title>SEC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>products form</h2>
  <form action="/productsAdminPost" enctype="multipart/form-data" method="post">
					@csrf
    <div class="form-group">
      <label >arabic Title:</label>
      <input type="text" class="form-control" id="title_ar" placeholder="Enter arabic title" name="title_ar">
    </div>
	<div class="form-group">
      <label >English Title:</label>
      <input type="text" class="form-control" id="title_en" placeholder="Enter english title" name="title_en">
    </div>
	<div class="form-group">
      <label >arabic details:</label>
      <input type="text" class="form-control" id="details_ar" placeholder="Enter arabic details" name="details_ar">
    </div>
	<div class="form-group">
      <label >English details:</label>
      <input type="text" class="form-control" id="details_en" placeholder="Enter english details" name="details_en">
    </div>
    <div class="form-group">
      <label for="pwd">image:</label>
      <input class="form-control" name="image" id="image" type="file">
    </div>
    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>