@include('partials.header')


<h5>Add New Product</h5>
<form action="/saveProduct" method="POST">
    @csrf
    
 
<div class="mb-3">
      <label for="productName" class="form-label">Product Name</label>
      <input 
      type="text" 
      class="form-control" 
      aria-describedby="emailHelp"
      name="productName">
    
    </div>


    <div class="mb-3">
      <label for="quantity" class="form-label">Quantity</label>
      <input 
      type="text" 
      class="form-control" 
      aria-describedby="emailHelp"
      name="quantity">
   
    </div>



    <div class="mb-3">
      <label for="price" class="form-label">Price</label>
      <input 
      type="text" 
      class="form-control" 
      id="exampleInputEmail1" 
      aria-describedby="emailHelp"
      name="price">
   
    </div>


    <button type="submit" class="btn btn-dark mb-3">Submit</button>
  </form>