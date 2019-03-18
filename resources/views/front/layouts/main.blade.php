@extends('front.layouts.app')

@section('main')

    <div class="p-8 | md:p-16">
        @include('front.layouts.partials.unverified-email-warning')
        @include('front.layouts.partials.flashMessage')
        
        @yield('content')
    </div>

@endsection