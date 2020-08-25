@extends('components.app')

@section('content')
    @include('_publish_tweet_panel')
    <div class="border border-gray-300 rounded-lg">
        @foreach($tweets as $tweet)
            @include('_tweet')
        @endforeach
    </div>
@endsection

