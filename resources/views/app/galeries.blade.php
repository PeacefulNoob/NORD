@extends('layouts.main')

@section('content')
<main class="main-content mt-4">
    <div class="jumbotron jumbotron-fluid ourLate h-50  ">
        <div class="container-fluid galeries ">
            <h1>List of all galeries</h1>
            <hr class="my-4">


        </div>
    </div>

    @if(count($albums)>0)
    <div class="glavniR">
        @foreach($albums as $album)
        <div class="col-sm-6	col-md-4	col-lg-3	col-xl-3   {{$album->id}} p-4" data-aos="zoom-in-up" data-aos-once="true">
            <div id="mediaContainer" class="mediaDiv glry-img">
                <a class="cat" href="/app/gallery_media/{{$album->id}}">
                    <img class="picInd" data-src="/images/cover_image/{{$album->cover_image}}" alt="Cover picture">
                    <div class="overlay">
                        <div class="col-md-6 headOver">
                            <h4 class="heading">{{$album->name}}</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        @endforeach
    </div>
    @else
    <div class="h-100">
        <p style="color:white">No albums</p>

    </div>
    @endif
</main>
@endsection