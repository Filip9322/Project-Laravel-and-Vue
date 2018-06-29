@extends('layouts.app')

@section('content')
<div id="crud" class="container">
    <div class="row flex-column">
        <?php /**
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
        */ ?>
        <div class="col-xs-12">
            <h1 class="page-header">Laravel y Vuejs</h1>
        </div>
        <div class="col-sm-7">
            <a href="#" class="btn btn-primary pull-right mb-4">New TODO</a>
            <table class="table table-hover table-sprite">
                <thead>
                    <tr>
                        <th>Check</th>
                        <th>ID</th>
                        <th>TODOS</th>
                        <th colspan="2" >&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="keep in keeps">
                        <td class="checkbox"><input type="checkbox" value="@{{ keep.id }}"></td>
                        <td width="10px" >@{{ keep.id }}</td>
                        <td>@{{ keep.name_TODO}}</td>
                        <td width="10px" >
                            <a href="#" class="btn btn-warning btm-sm">Edit</a>
                        </td>
                        <td>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-sm-5">
            <pre>
                @{{ $data }}
            </pre>
        </div>
    </div>
</div>
@endsection