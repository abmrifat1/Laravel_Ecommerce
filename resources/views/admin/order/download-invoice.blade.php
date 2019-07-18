<table border="1">
    <tr>
        <th>Product Name</th>
        <th>Product Price</th>
        <th>Product Quantity</th>
    </tr>

    @foreach($products as $product)
        <tr>
            <td>{{$product->product_name}}</td>
            <td>{{$product->product_price}}</td>
            <td>{{$product->product_quantity}}</td>
        </tr>
     @endforeach
</table>