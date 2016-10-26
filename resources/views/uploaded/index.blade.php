@extends("layouts.application")

@section("content")

 
  <h1>Photo Galery</h1> 
{!! link_to(route('upload.create'), 'Create', ['class' => 'btn btn-raised btn-warning']) !!}


<div class="container">
<div class="row">
   
<div class=''>
<div id="gambar">
  @foreach($pages as $page)
  
  
 
  <div class="item">
  <p>Deskripsi:{!! $page->deskripsi !!}</p>
   <img src="{!! '/upload_gambar/'. $page->id . '/thumb_' . $page->foto !!}" />
    {!! link_to(route('upload.edit', $page->id), 'Edit', ['class' => 'btn btn-raised btn-warning']) !!}
  </div>
  
  @endforeach
 </div>
 </div>

<div class="row">
  
lorem ipsum

</div> 
<script src="js/masonry/masonry.js"></script>
@stop