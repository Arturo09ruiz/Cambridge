<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <br>
    <div class="col-lg-offset-4 col-lg-4">
        <h1>Upload A File</h1>
        <form action="/store" enctype="multipart/form-data" method="POST">
            {{ csrf_field() }} 
            <input type="file" name="image">
            <br>
            <input type="submit" value="Upload">
        </form>
    </div> 
</body>
</html>
