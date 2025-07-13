<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Create Product</title>
</head>
<body>
  <h3>Create product</h3>
  <form action="{{route('product.store')}}" method="POST">
    @csrf
    {{-- @method('post') --}}
    <label for="name">Name</label>
    <input type="text" name="name" id="name" required>
    <label for="category">Quantity</label>
    <input type="number" name="quantity" id="quantity" required>
    <label for="price">Price</label>
    <input type="number" name="price" id="price" required>
    <label for="description">Description</label>
    <textarea name="description" id="description" required></textarea>
    <button type="submit">Create</button>
  </form>
</body>
</html>