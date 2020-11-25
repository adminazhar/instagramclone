@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fblr11-1.fna.fbcdn.net/v/t51.2885-19/s320x320/126151620_3420222801423283_6498777152086077438_n.jpg?_nc_ht=instagram.fblr11-1.fna.fbcdn.net&_nc_ohc=SlB411Nqh8QAX_gcL9U&tp=1&oh=c048208e63c61a5809b759ee497d6764&oe=5FE646F1" style="width: 150px; height: 150px;" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{$user->username}}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>1433</strong> posts</div>
                <div class="pr-5"><strong>12.2m</strong> followers</div>
                <div class="pr-5"><strong>31</strong> following</div>
            </div>
            <div class="pt-3"><strong>{{$user->name}}</strong></div>
            <div>Google unfiltered—sometimes with filters.</div>
        </div>
    </div>

    <div class="row">
        <div class="col-4">
            <img src="https://instagram.fblr11-1.fna.fbcdn.net/v/t51.2885-15/e35/c0.90.720.720a/s480x480/126886674_199616491735155_6222917163103274777_n.jpg?_nc_ht=instagram.fblr11-1.fna.fbcdn.net&_nc_cat=103&_nc_ohc=tClqRF4QXbsAX-MZoPq&tp=1&oh=5f29012a6a3bfb717ac76fce622505cb&oe=5FC0514B" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fblr11-1.fna.fbcdn.net/v/t51.2885-15/e35/s480x480/126865025_2635975796713532_1705066428929774853_n.jpg?_nc_ht=instagram.fblr11-1.fna.fbcdn.net&_nc_cat=108&_nc_ohc=ZUtyC-WrutEAX-xrrlM&tp=1&oh=27e652a8c766d51b2c4c688cddc64ce5&oe=5FC09B19" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fblr11-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/126425915_816136545888733_4459336767092666341_n.jpg?_nc_ht=instagram.fblr11-1.fna.fbcdn.net&_nc_cat=101&_nc_ohc=bPyjKBA3cfcAX_YXhkX&tp=1&oh=644bf5164023a5ab8991044e36bc182b&oe=5FC083AD" class="w-100">
        </div>

    </div>
</div>
@endsection
