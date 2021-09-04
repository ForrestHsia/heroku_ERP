<form method='post' action='{{route("products.update",["product" => $product["id"]])}}'>
    <input type="text" name="title" />
    @csrf
    @method("PATCH")
    <button type="submit">提交</button>
</form>