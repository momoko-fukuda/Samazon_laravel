@foreach($products as $product)
    {{$product->name}}
    {{$product->description}}
    {{$product->price}}
    <!--↓個別のページにいく-->
    <a href="{{route('products.show', $product)}}">Show</a>
    <!--個別の編集ページにいく-->
    <a href="{{route('products.edit', $product)}}">edit</a>
    
    <form action="/products/{{$product->id}}" method="POST" onsubmit="if(confirm('Delete? Are you sure?')){return true}else{return false};">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <button type="submit">Delete</button>
    
    </form>
@endforeach

<!--新規作成ページにいく-->
<a href="{{route('products.create')}}">New</a>