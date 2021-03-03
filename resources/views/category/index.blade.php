@extends('layout.layout')

@section('content')
    
<h1 class="my-4" > Categories Maneger </h1>

<a href="{{route('category.create')}}" class="btn btn-primary">Create Category</a>
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
          <th colspan="2">Controller</th>
          <tr>
      </thead>
      <tbody>
          @foreach ($categories as $category)
          <tr>
            <td>{{$i++}}</td>
            <td>{{$category->name}}</td>
            <td>
               <a href="{{route('category.edit',$category->id)}}"><button class="btn btn-primary">Edit</button></a>
               <form action="{{route('category.destroy',$category->id)}}" method="POST" style="display:inline">
                @csrf
                 @method('DELETE')
                 <input type="submit"  value="Delete" onclick="return confirm('Are you sure?')" class="btn btn-danger">
            </form>
            </td>
            </tr>
          @endforeach
          
      </tbody>
  </table>
  {!!$categories->links('pagination::bootstrap-4')!!}
  <br/><br/>
@endsection