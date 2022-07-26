@extends('admin.admin_master')

@section('admin')

    <div class="py-12">
        
        <div class="container">
        <div class="row">

        <div class="col-md-8">
        <div class="card">

        <div class="card-header">All Categories</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">SL No</th>
      <th scope="col">Category Name</th>
      <th scope="col">Created At</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <!-- @php($i = 1) -->
    @foreach($categories as $category) 
    <tr>
      <th scope="row"> {{ $categories->firstItem()+$loop->index }} </th> 
      <!-- get a number of the first element in result + the index of the current item -->
      <td> {{ $category->category_name }} </td>
      <td> 
        @if($category->created_at == null)
        <span class="text-danger">No Date Set</span>
        @else
      {{ Carbon\Carbon::parse($category->created_at)->diffForHumans() }} 
        @endif
    </td>
    <td><a href="{{ route('categories.edit', $category->id) }}" class="btn btn-info">Edit</a>
    <a href="{{ route('softdelete.categories', $category->id) }}" class="btn btn-danger">Delete</a>
    </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{ $categories->links() }}
    </div>
    </div>

    <div class="col-md-4">
        <div class="card">
        <div class="card-header">Add Category</div>

        <div class="card-body">
        
<form action="{{ route('categories.store') }}" method="POST">
    @csrf
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Category Name</label>
    <input type="text" name="category_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    @error('category_name')
    <span class="text-danger"> {{ $message }}</span>
    @enderror
</div>
  
  <button type="submit" class="btn btn-primary">Add Category</button>
</form>
</div>
        </div>
        </div>

        </div>
        </div>


<!-- Trash Part -->


        <div class="container">
        <div class="row">

        <div class="col-md-8">
        <div class="card">

        <div class="card-header">Trash Category List</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">SL No</th>
      <th scope="col">Category Name</th>
      <th scope="col">Created At</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <!-- @php($i = 1) -->
    @foreach($trashCat as $category) 
    <tr>
      <th scope="row"> {{ $categories->firstItem()+$loop->index }} </th> 
      <!-- get a number of the first element in result + the index of the current item -->
      <td> {{ $category->category_name }} </td>
      <td> 
        @if($category->created_at == null)
        <span class="text-danger">No Date Set</span>
        @else
      {{ Carbon\Carbon::parse($category->created_at)->diffForHumans() }} 
        @endif
    </td>
    <td><a href="{{ route('categories.restore', $category->id) }}" class="btn btn-info">Restore</a>
    <a href="{{ route('categories.permdelete', $category->id) }}" class="btn btn-danger">PermDelete</a>
    </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{ $trashCat->links() }}
    </div>
    </div>

    <div class="col-md-4">
        
        </div>

        </div>
        </div>

<!-- End Trash -->

    </div>
@endsection
