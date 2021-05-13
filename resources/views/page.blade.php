@extends('layouts.app')

@section('main')

    <div class="bg_blue">
        <img src="{{$comic['thumb']}}" alt="">
    </div>
    <div class="comic_page">

        
        <div class="container">
        <div class="content mt-16">
            <div class="text mr-24">
                <h1 class='title'>
                     {{$comic['title']}} 
                </h1> 
                <div class="price_available mt-8 mb-8">
                    <p class='ml-6'>U.S. Price:  <strong>{{$comic['price']}}</strong> </p>
                    <p class='avv'>AVAILABLE</p>
                    <h4>Check Availability</h4>
                    
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
        </div>

        <div class="talent-specs mt-16 pb-16">
            <div class="container">
                <div class="talent">
                    <h1 class='mt-4 mb-4'>Talent</h1>
                    <hr>
                    <div class="art-by pt-2 pb-2">
                        <span>Art by:</span>
                        <div class="artists">
                            @foreach($comic['artists'] as $artist)
                                <h5>  {{$artist}},   </h5> 
                            @endforeach
                        </div>
                    </div>
                    <hr>
                    <div class="written-by pt-2 pb-2">
                        <span>Written by:</span>
                        <div class="artists">
                            @foreach($comic['writers'] as $writer)
                                <h5>  {{$writer}},   </h5> 
                            @endforeach
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="specs">
                    <h1 class='mt-4 mb-4'>Specs</h1>
                    <hr>
                    <div class="series pt-2 pb-2">
                        <span>Series:</span>
                        <div class="serie">
                            
                                <p class='title'>  {{$comic['series']}}   </p> 
                            
                        </div>
                    </div>
                    <hr>
                    <div class="prices pt-2 pb-2">
                        <span>U.S. Price:</span>
                        <div class="price">
                           
                                <p>  {{$comic['price']}}   </p> 
                            
                        </div>
                    </div>
                    <hr>
                    <div class="sale-date pt-2 pb-2">
                        <span>U.S. Price:</span>
                        <div class="date">
                           
                                <p>  {{$comic['sale_date']}}   </p> 
                            
                        </div>
                    </div>
                    <hr>
                </div>

               
            </div>
           
        </div>

         <div class="info-container">
            <div class="container">
                <div class="info">
                    <div class="info-0">
                        <span>digital comics </span>
                        <div class="image-cut">
                            <img src="/images/cta-icons.png" alt="">
                        </div>
                    </div>
                    <div class="info-1">
                        <span>shop dc</span>
                        <div class="image-cut">
                            <img src="/images/cta-icons.png" alt="">
                        </div>
                    </div>
                    <div class="info-2">
                        <span>comic shop locator</span>
                        <div class="image-cut">
                            <img src="/images/cta-icons.png" alt="">
                        </div>
                    </div>
                    <div class="info-3">
                        <span>subscriptions</span>
                        <div class="image-cut">
                            <img src="/images/cta-icons.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
         </div>
        
        
            
        
    </div>

    
    

   



    
    
@endsection

