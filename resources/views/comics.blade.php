@extends('layouts.app')

@section('main')

    <h1 class="current-series">current series</h1>

    <div class="bg_black">
        <div class="container">
            <div class="comics mb-12">
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

            <div class="button">
                <input class='btn' type="button" value="LOAD MORE">
            </div>
        </div>

        <div class="bg_blue_2">

            <div class="container">
                <div class="in">
                    <div class="in-0">
                        <div class="img-cut">
                            <img src="/images/buy-comics-digital-comics.png" alt="">
                        </div>
                        <span>digital comics </span>
                        
                    </div>
                    <div class="in-1">
                        <div class="img-cut">
                            <img src="/images/buy-comics-merchandise.png" alt="">
                        </div>
                        <span>shop dc</span>
                        
                    </div>
                    <div class="in-2">
                        <div class="img-cut">
                            <img src="/images/buy-comics-subscriptions.png" alt="">
                        </div>
                        <span>comic shop locator</span>
                        
                    </div>
                    <div class="in-3">
                        <div class="img-cut">
                            <img src="/images/buy-comics-shop-locator.png" alt="">
                        </div>
                        <span>subscriptions</span>
                        
                    </div>
                    <div class="in-3">
                        <div class="img-cut">
                            <img src="/images/buy-dc-power-visa.svg" alt="">
                        </div>
                        <span>dc power visa</span>
                        
                    </div>
                </div>
            </div>
    </div>

    
@endsection