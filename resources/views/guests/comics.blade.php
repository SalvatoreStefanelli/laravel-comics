@extends('layouts.app')

@section('content')

<section id="comics">
    <div class="container">
        <div class="row">
            @foreach($volumes as $comic)
                    <div class="card">
                        <img src="{{$comic['thumb']}}" alt=""> 
                        <div class="card-content">
                            {{$comic['title']}}

                        </div>
                    </div>
            @endforeach
        </div>
    </div>
</section>


@endsection
