<tr>
    {{-- <td>{{$loop->iteration}}</td> --}}
    <td>{{$product->product_name}}</td>
    <td>$ {{$product->price}}</td>
    <td>{{Str::limit($product->description, 30, '...')}}</td>
</tr>



        @foreach(...)
            

        @endforeach