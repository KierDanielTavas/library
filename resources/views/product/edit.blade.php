@include('partials.header')


<h5>Edit Product</h5>
<form action="/updateProduct" method="POST">
    @csrf
    
    <input type="hidden" id="id" name="id" value="{{$product->id}}"> 
 
<div class="mb-3">
      <label for="productName" class="form-label">Product Name</label>
      <input 
      type="text" 
      class="form-control" 
      aria-describedby="emailHelp"
      value="{{$product->productName}}"
      name="productName">
    </div>


    <div class="mb-3">
      <label for="quantity" class="form-label">Quantity</label>
      <input 
      type="text" 
      class="form-control" 
      aria-describedby="emailHelp"
      name="quantity"
      value="{{$product->quantity}}">
    </div>



    <div class="mb-3">
      <label for="price" class="form-label">Price</label>
      <input 
      type="text" 
      class="form-control" 
      id="exampleInputEmail1" 
      aria-describedby="emailHelp"
      name="price"
      value="{{$product->price}}">
    </div>
   

    <button type="submit" class="btn btn-dark mb-3">Submit</button>
  </form>