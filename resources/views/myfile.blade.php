<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<style>
			input[type="file" i]{
				background-color: green;
				border: none;
			}
			.multiple-image{
				width: 160px;
				height:130px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<div class="title">
						<h2 class="pt-5">Upload Multiple Image Form</h2>
					</div>
					<form action="{{ route('myfile.upload') }}" method="post" enctype="multipart/form-data">
						@csrf
						@method('put')
						<div class="form-group">
							<input class="form-control" type="text" name="name"><br>
						</div>
						<div class="form-group">
							    <input type="file" name="image[]" multiple="true">
							</span>
						</div>
						<button class="btn btn-danger" type="submit">Submit</button>
					</form>
				</div>
				<div class="col-md-2"></div>
			</div>
		</div>
		<br><br>
		<div class="container">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Image</th>
						<th scope="col">Created_at</th>
						<th scope="col">Updated_at</th>
					</tr>
				</thead>
				<tbody>
					@foreach($images as $key => $image)
					
					<tr>
						<td>{{ $key + 1 }}</td>
						<td>
							@foreach(json_decode($image->image) as $key => $getimage)
							<img class="img-responsive multiple-image" src="{{ asset('public/myimage/'. $getimage) }}" alt="">
							@endforeach
						</td>
						<td>{{ $image->created_at }}</td>
						<td>{{ $image->updated_at }}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<br>
		<br>
		<br>
		<br>
		<br>
	</body>
</html>