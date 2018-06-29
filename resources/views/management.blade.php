@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @forelse ($todosos as $todoso)
            <div class="col-6">
                <img class="img-thumbnail" src="http://lorempixel.com/600/338?{{ $todoso['rowid'] }} " alt="{{ $todoso['name_TODO']}}">
                <p class="card-text" data-todo="{{ $todoso['rowid'] }}">
                    {{ $todoso['name_TODO'] }} y {{ $todoso['rowid'] }}
                </p>
            </div>             
        @empty
            <p>No nada aun creado</p>
        @endforelse
    </div>
</div>
@endsection