<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab labore ratione deserunt dolor tempora. Ab, debitis pariatur. Minima accusamus repudiandae atque nostrum sapiente ea iusto ipsam, illo porro, asperiores nesciunt!</p>

	<form action="{{ route('file.upload') }}" method="post" enctype="multipart/form-data">
		@csrf
		@method('put')
		<input type="file" name="image[]" multiple="true">
		<button type="submit" value="Submit">Submit</button>
	</form>
	
</body>
</html>