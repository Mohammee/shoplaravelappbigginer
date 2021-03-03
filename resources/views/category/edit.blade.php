@extends('layout.layout')

@section('content')
     
<h2 class="my-4"> Edit Category </h2>
<form method="post" action="{{route('category.update',$category->id)}}">
    @csrf
    @method('PUT')
    <div class="mb-3">
    <label for="cat" class="form-label">Name</label>
    <input type="text" name="name" id="cat" class="form-control" value="{{$category->name}}">
</div>
    <input type="submit" value="Update" class="btn btn-primary">
</form>
<br/><br/>
@endsection