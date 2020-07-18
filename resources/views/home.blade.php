@extends('layouts.app')

@section('content')
    <div class="lg:flex">
        <div class="lg:flex-1">
            @include ('_sidebar-links')
        </div>
        
        <div class="lg:flex-2 lg:mx-10">
            @include('_publish-tweet-panel')

            <div class="border border-gray-300 rounded-lg">
                @include('_tweet')
                @include('_tweet')
                @include('_tweet')
                @include('_tweet')

            </div>
        <div> 
        <div class="lg:flex-1 bg-blue-100 rounded-lg">
            @include ('_friends-list')
        </div>
    </div>
@endsection
