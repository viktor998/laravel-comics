@extends('layouts.app')

@section('main')

    <div class="bg_blue">
        <img src="{{$comic['thumb']}}" alt="">
    </div>
    <div class="container comic_page">

        
        <div class="content mt-16">
            <div class="text mr-8">
                <h1 class='title'>
                     {{$comic['title']}} 
                </h1> 
                <div class="price_available">
                    <p>U.S. Price:  {{$comic['price']}} </p>
                    <p>AVAILABLE</p>
                    <span>Check Availability</span>
                </div>
                <div class="description">
                     {{$comic['description']}} 
                </div>
            </div>
            <div class="ads">
                <p>ADVERTISEMENT</p>
                <img src="../images/adv.jpg" alt="">
            </div>
        </div>
        
        
            @foreach($comic['artists'] as $artist)
                <span>  {{$artist}} </span> 
                
            @endforeach
        
    </div>

    
    

   



    
    
@endsection

