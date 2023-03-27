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
    <title>Customers</title>
</head>
<body>
    <h3>Customer Data</h3>
    <br>
   <!-- <ul>
    @foreach($customers as $customer)
        <li>  {{ $customer->firstname }} {{ $customer->lastname }}</li>
        <li>  {{ $customer->email }}</li>
        <li>  {{ $customer->contactNumber }}</li>
        <li>  {{ $customer->address }}</li>
        <br>
        @endforeach
    </ul>
    -->
    <table class="table table-striped">
    <thead>
    <tr class="thead-dark">
      <th scope="col">Id</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">Email</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>
    @if(Session::has ('success'))
    <div class="alert alert-warning" role="alert">
      {{ Session::get('success') }}
      </div>
      @endif
      @foreach($customers as $customer)
    <tr>
      <th scope="row" class="thead-dark">{{ $customer->id }}</th>
    
      <td>{{ $customer->firstname }}</td>
      <td>{{ $customer->lastname }}</td>
      <td>{{ $customer->email }}</td>
      <td>{{ $customer->contactNumber }}</td>
      <td>{{ $customer->address }}</td>
      <td><a href="edit/{{$customer->id}}" class="text-info-emphasis">Edit</a></td>
      <td>
      <form action= "delete/{{$customer->id}}">
      <button type="submit" class="btn btn-danger">Delete</button>
      </form>
      </td>
    </tr>
       @endforeach
  </tbody>
</table>
</body>
</html>
 
@include('partials.footer')  
 
      

