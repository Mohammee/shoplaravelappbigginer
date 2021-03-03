@extends('layout.layout')

@section('content')
    
<h1 class="my-4" > Products Maneger </h1>

<a href="{{route('product.create')}}" class="btn btn-primary">Create Product</a>
<br/>
<br/>

@if ($message = Session::get('message'))
<div class="alert alert-primary" role="alert">
   {{$message}}
  </div>
@endif
  <table class='table table-striped table-hover'>

    @php $i = 1 @endphp
      <thead>
          <tr>
          <th>#</th>
          <th>Name</th>
          <th>Price</th>
          <th colspan="2">Controller</th>
          <tr>
      </thead>
      <tbody>
          @foreach ($products as $product)
          <tr>
            <td>{{$i++}}</td>
            <td>{{$product->name}}</td>
            <td>${{$product->price}}</td>
            <td>
               <a href="{{route('product.edit',$product->id)}}"><button class="btn btn-primary">Edit</button></a>
               <form action="{{route('product.destroy',$product->id)}}" method="POST" style="display:inline">
                @csrf
                 @method('DELETE')
                 <input type="submit"  value="Delete" onclick="return confirm('Are you sure?')" class="btn btn-danger">
            </form>
            </td>
            </tr>
          @endforeach
          
      </tbody>
  </table>
  {!!$products->links('pagination::bootstrap-4')!!}
  <br/><br/>
@endsection