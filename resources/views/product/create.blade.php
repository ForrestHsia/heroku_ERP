<form method='post' action='{{route("products.store")}}'>
    <input type="text" name="title" />
    @csrf
    <button type="submit">提交</button>
</form>