@extends('layouts.portfolio')

@section('title', $portfolio['name'] . ' - Portfolio')

@section('content')

<!-- About Section -->

<section id="about" class="section">

    <div class="container">

        <h2 class="section-title">About Phone</h2>
        
        @foreach ($portfolio['about'] as $spec)
        <li>{{ $spec }}</li>
        @endforeach

        <!-- About content -->

    </div>

</section>

@endsection