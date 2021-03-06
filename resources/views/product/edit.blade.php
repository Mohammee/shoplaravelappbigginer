@extends('layout.layout')

@section('content')
     
<h2 class="my-4"> Create Product </h2> 

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<a href="{{route('product.index')}}" class="btn btn-primary">Return to Product</a>
<form method="post" action="{{route('product.update',$product->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <br/>
    <label class="from-label" id="name"> Name</label>
    <br/>
    <input class="form-control" id="name" type="text" name="name" placeholder="Product Name" value="{{$product->name}}"  maxlength="50">
    <br/>

    <label class="from-label" id="price"> Price ($)</label>
    <br/>
    <input class="form-control" id="price" type="number" name="price" placeholder="Product price" value="{{$product->price}}" min="1" step="0.01" >
    <br/>

    <label class="from-label" id="des"> Description</label>
     <br/>
     <textarea class="form-control" id="des" name="description"  placeholder="Product Description">{{$product->description}}</textarea>
    <br/>

    <label class="form-label" id="cat">Choose Category :</label>
     <br/>
    <select class="form-control" name="category_id" id="cat">
        @foreach ($categories as $category)
        <option value="{{$category->id}}" @if($category->id == $product->category_id) selected @endif>{{$category->name}}</option>
        @endforeach
    </select>
    <br/>
    
    <label class="from-label" id="pho"> Upload File :</label>
    <input type="file" calss="form-control" name="photo" id="pho">
    <br/><br/>
    <input type="submit" value="Update" class="btn btn-primary">
</form>
<br/><br/>
@endsection 