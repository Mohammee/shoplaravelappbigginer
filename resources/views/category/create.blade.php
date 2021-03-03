@extends('layout.layout')

@section('content')
     
<h2 class="my-4"> Create Category </h2>

<a href="{{route('category.index')}}" class="btn btn-primary">Return to Category</a>
<form method="post" action="{{route('category.store')}}">
    @csrf
    <br/>
    <label for="cat" class="form-label">Name</label>
    <input type="text" name="name" id="cat" class="form-control">
    <br/>
    <input type="submit" value="Create" class="btn btn-primary">

</form>
<br/><br/>
@endsection