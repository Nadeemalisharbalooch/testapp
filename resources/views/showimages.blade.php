<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">  
    <title>Document</title>
</head>
<body>
<h1 class="bg bg-primary">Here Show Images</h1>
@foreach($imgs as $img)

@endforeach
<h1>static file</h1>
<img class="img-fluid img-thumbnail" width="100px" src="{{asset('/storage/images/fLfsoxnPc6cBgaiXhRn6IcXk16efpHTMv8Y6qaPt.png') }}" alt="Here Images">
</body>
  <h2></h2>
</html>