<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>upload file</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<br>
			<form action="{{ route('upload.file')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
				{{ csrf_field() }}
				<input type="file" name="file"><br>
				<input type="submit" class="btn btn-info">
			</form>
		</div>
		<div class="row">
			<h2>Show Files</h2>
			<img src="{{ asset('storage/upload/ab.jpg') }}" alt="">
		</div>
	</div>
</body>
</html>