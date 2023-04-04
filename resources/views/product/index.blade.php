@include('partials.header')
<x-nav/>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Products</title>
</head>
<body>
<div class="p-3 mb-2 bg-secondary text-white">
    <h3>Jumpman Product Data</h3>
    <br>
    <table class="table table-striped table-dark">
    <thead>
    <tr class="thead-dark">
      <th scope="col">Product Id</th>
      <th scope="col">Product Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
    @if(Session::has ('success'))
    <div class="alert alert-danger" role="alert">
      {{ Session::get('success') }}
      </div>
      @endif
      @foreach($products as $product)
    <tr>
      <th scope="row" class="thead-dark">{{ $product->id }}</th>
    
      <td>{{ $product->productName }}</td>
      <td>{{ $product->quantity }}</td>
      <td>{{ $product->price }}</td>
      <td><a href="edit/{{$product->id}}" class="text-info-emphasis">Edit</a></td>
      <td>
      <form action= "delete/{{$product->id}}">
      <button type="submit" class="btn btn-danger">Delete</button>
      </form>
      </td>
    </tr>
       @endforeach
  </tbody>
</table>
</div>
</body>
</html>
 
@include('partials.footer')  
 
      

