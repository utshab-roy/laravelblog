@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <ul>
            @foreach($tasks as $task)
                <a href="/tasks/{{ $task->id }}">
                    <li>{{ $task->body }}</li>
                </a>
            @endforeach
        </ul>
    </div>
@endsection
