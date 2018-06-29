@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="content">
            <div class="tittle m-b-mb">
                Laratter
            </div>

            @if (isset($teacher))
            <p>Profesor: {{ $teacher }}</p>
            @endif
            
            <div class="links">
                @foreach ($links as $link => $text)
                <a href="{{ $link }}">{{ $text }}</a>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection