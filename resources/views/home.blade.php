@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fblr11-1.fna.fbcdn.net/v/t51.2885-19/s320x320/126151620_3420222801423283_6498777152086077438_n.jpg?_nc_ht=instagram.fblr11-1.fna.fbcdn.net&_nc_ohc=SlB411Nqh8QAX_gcL9U&tp=1&oh=c048208e63c61a5809b759ee497d6764&oe=5FE646F1" style="width: 150px; height: 150px;" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ Auth::user()->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>1433</strong> posts</div>
                <div class="pr-5"><strong>12.2m</strong> followers</div>
                <div class="pr-5"><strong>31</strong> following</div>
            </div>
            <div class="pt-3"><strong>Google</strong></div>
            <div>Google unfiltered—sometimes with filters.</div>
        </div>
    </div>

    <div class="row">
        <div class="col-4">
            <img src="https://instagram.fblr11-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/125123383_421128075953602_2700889116817136844_n.jpg?_nc_ht=instagram.fblr11-1.fna.fbcdn.net&_nc_cat=110&_nc_ohc=dv5aVtI0_CIAX8IPjJU&tp=1&oh=2f77177100f05f7ea0af5f4d9ac19b1e&oe=5FE4EBE5" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fblr11-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/124672763_2184737365004095_200507008860196167_n.jpg?_nc_ht=instagram.fblr11-1.fna.fbcdn.net&_nc_cat=107&_nc_ohc=Bx7GceE9VOAAX_maCRo&tp=1&oh=faaf41d47b9c987130ae0bffe322cef6&oe=5FE630DC" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fblr11-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/124676168_919549901910541_4940926738312175478_n.jpg?_nc_ht=instagram.fblr11-1.fna.fbcdn.net&_nc_cat=101&_nc_ohc=FOJYdwqd-noAX8VmWQd&tp=1&oh=97ed7d3040f0bf57405a67f6202dc12e&oe=5FBDB45F" class="w-100">
        </div>
    </div>
</div>
@endsection
