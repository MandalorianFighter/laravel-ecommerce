@extends('admin.admin_master')

@section('admin')

    <div class="py-12">
        
        <div class="container">
        <div class="row">

        <div class="col-md-8">
        <h4>Blog - Articles</h4>
        </div>
        
        <div class="col-md-2">
        <a href="{{ route('article.add') }}"><button class="btn btn-info">Add Article</button></a>
        </div>
        <div class="col-md-2">
        <a href="{{ route('admin.articles.trashed') }}"><button class="btn btn-secondary">Trashed Articles</button></a>
        </div>
        <br><br>


        <div class="col-md-12">
        <div class="card">

        <div class="card-header">All Published Articles</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col" width="5%">SL No</th>
      <th scope="col" width="15%">Title</th>
      <th scope="col" width="20%">Entry Content</th>
      <th scope="col" width="10%">Entry Image</th>
      <th scope="col" width="20%">Url Link</th>
      <th scope="col" width="10%">Category Name</th>
      <th scope="col" width="10%">Author Name</th>
      <th scope="col" width="10%">Action</th>
    </tr>
  </thead>
  <tbody>
    @php($i = 1)
    @foreach($articles as $article) 
    <tr>
      <th scope="row"> {{ $i++ }} </th> 
      
      <td> {{ Illuminate\Support\Str::limit($article->title, 100) }} </td>
      <td> {{ Illuminate\Support\Str::limit($article->entry_content, 100) }} </td>
      <td><img src="{{ asset($article->entry_img) }}" style="height:80px;"></td>
      <td> <a href="{{ route('blog.single', $article->id) }}">{{ route('blog.single', $article->id) }}</a> </td>
      <td> {{ $article->category->category_name }} </td>
      <td> {{ $article->author->full_name }} </td>
      
    <td><a href="{{ route('article.edit', $article->id) }}" class="btn btn-info">Edit</a><br><br>
    <a href="{{ route('softdelete.article', $article->id) }}" class="btn btn-danger">SoftDelete</a>
    </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{ $articles->links() }}
    </div>
    </div>
        </div>


    </div>

@endsection