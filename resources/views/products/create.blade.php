@include('partials.errors')

<form action="{{route('products.store')}}" method="POST">
    @csrf
    <label for="name">Name:</label><input type="text" name="name">
    <label for="price">Price:</label><input type="text" name="price">
    <input type="submit">
</form>
