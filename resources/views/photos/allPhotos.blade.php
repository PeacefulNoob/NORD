@extends('layouts.main')

@section('content')
<main class="myMain">
        <div class="container-fluid photos">
<table class="table table-hover">
    <thead>
    <tr>
        <th>ID</th> 
        <th>AlbumID</th> 
        <th>Title</th>
        <th>Description</th>
        <th>Photo</th>
        <th>Size</th> 
        <th>created_at</th> 
        <th>updated_at</th> 
        <th>Options</th>

      </tr>
    </thead>
    <tbody>
@foreach($photos as $photo)
<tr>
   
    <th>{{$photo->id}}</th> 
        <th>{{$photo->album_id}}</th> 
        <th>{{$photo->title}}</th>
        <th>{{$photo->description}}</th>
        <th>{{$photo->photo}}</th>
        <th>{{$photo->size}}</th> 
        <th>{{$photo->created_at}}</th> 
        <th>{{$photo->updated_at}}</th> 
        <th><button type="button" class="btn btn-success">Edit</button></th>
  </tr>
  @endforeach
  </tbody>
</table>

</div>
</main>

@endsection 