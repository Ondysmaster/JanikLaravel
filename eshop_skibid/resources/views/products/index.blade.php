<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> bomboklad </h1>
@foreach($products as $product) 
<tr>
              <th>{{$product->id}}</th>
             
  </tr>
@endforeach
<h3> ciao </h3>
</body>
</html>