@extends('layouts.app')

@section('main')

    <h1 class="current-series">current series</h1>

    <div class="bg_black">
        <div class="container">
           <div class="comics">
           @foreach($comics as $index => $comic)
                <div class="comic">
                    
                        <a href="{{route('page', ['id' => $index])}}">
                            <div href='/home' style="background-image: url({{ $comic['thumb']}});" class="comic-thumb"></div>
                        
                        </a>
                    
                    <div class="comic-title">
                        <span > {{ ($comic['series']) }} </span>
                    </div>
                </div>
            @endforeach
           </div>
        </div>
    </div>

    
@endsection