 <!DOCTYPE html>
 <html>
 <head>
     <title></title>
     <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
 </head>
 <body>
 

 <h1>User Page</h1>
 <table border="1px">
     <tr>
         <th>Name</th>
         <th>Details</th>
         <th>Price</th>

     </tr>

     @foreach($data as $product)
        <tr>
            <td>{{$product->name}},{{$product->name}}</td>
            <td>{{$product->detail}}</td>
            <td>{{$product->price}}</td>
        </tr>
     @endforeach


 </table>
 <p>Red background </p>

 </body>
 </html>