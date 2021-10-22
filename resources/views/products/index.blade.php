@extends('products.layout')
<link href="../css/app.css" rel="stylesheet" type="text/css">
@section('content')
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Products</h3>
            </div>
            <div class="pull-right">
                <a class="p-2 pl-5 pr-5 bg-blue-500 text-gray-100 text-lg rounded-lg focus:border-4 border-blue-300" href="{{ route('products.create') }}" >Primary</a>
                <a class="btn btn-success" href="{{ route('products.create') }}">Add Product</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    
    <body class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">
    <div class="w-2/3 mx-auto">
  <div class="bg-white shadow-md rounded my-6">
    <table class="text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
      <thead>
        <tr>
          <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">ID</th>
          <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Nome</th>
          <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Preço</th>
          <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Detalhes</th> 
          <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Ações</th>
        </tr>
      </thead>
      <tbody>

    
        @foreach ($products as $product)
            
                    
                    <tr class="hover:bg-grey-lighter">
          <td class="py-4 px-6 border-b border-grey-light">{{ $product->id }}</td>
           <td class="py-4 px-6 border-b border-grey-light">{{ $product->name }}</td>
            <td class="py-4 px-6 border-b border-grey-light">{{ $product->price }}</td>
             <td class="py-4 px-6 border-b border-grey-light">{{ $product->detail }}</td>
            
             <form action="{{ route('products.destroy',$product->id) }}" method="POST">
          <td class="py-4 px-6 border-b border-grey-light">
            <a href="#" class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-green hover:bg-green-dark" href="{{ route('products.edit',$product->id) }}" >Editar</a>
            <a href="#" class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-blue hover:bg-blue-dark" href="{{ route('products.show',$product->id) }}" >View</a>
            
            @csrf
            @method('DELETE')
            <a href="#" class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-blue hover:bg-red-dark" href="{{ route('products.show',$product->id) }}" >Deletar</a>
          </td>
        </tr>
             @endforeach  
             
             </tbody>
    </table>
      {!! $products->links() !!}

@endsection
  </div>
</div>
     
</body>
</html>