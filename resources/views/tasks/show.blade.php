@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h1> {{ $task->body }}</h1>
    </div>
@endsection