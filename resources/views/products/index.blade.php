<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: auto;
            text-align: center;
            font-family: arial;
        }

        .price {
            color: grey;
            font-size: 22px;
        }

        .card button {
            border: none;
            outline: 0;
            padding: 12px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        .card button:hover {
            opacity: 0.7;
        }
    </style>
</head>
<body>

<h2>Products</h2>
<div class="row">
    @foreach($products as $product)

        <div class="col-md-3">
        <div class="card">
            <img src= "{{ URL::to('/') }}/uploads/products_images/{{$product->photo}}" alt="" style="width:100%">
            <h1>{{$product->name}}</h1>
            <p class="price">{{$product->price}} TL</p>
            <p>Created_by: {{$product->user[0]->name}}</p>
        </div>
        </div>

    @endforeach
</div>


</body>
</html>
