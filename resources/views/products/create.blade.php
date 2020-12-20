<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<form action="{{route('save-product')}}" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="ProductName">Product Name</label>
        <input type="text" class="form-control" id="ProductName" name="product_name" placeholder="name">
    </div>
    <div class="form-group">
        <label for="ProductPrice">Price</label>
        <input type="text" class="form-control" id="ProductPrice" name="product_price" placeholder="price">
    </div>

      <input type="file" name="product_photo">
@csrf
    <button type="submit" class="btn btn-primary">save</button>
</form>
