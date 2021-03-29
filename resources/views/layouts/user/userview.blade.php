<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $product)
        <tr>
            <td>{{$product->name}},{{$product->name}}</td>
            <td>{{$product->email}}</td>
            <td>{{$product->price}}</td>
        </tr>
     @endforeach
   
    
  </tbody>
</table>