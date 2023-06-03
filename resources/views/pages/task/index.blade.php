@extends('layouts.app')
@section('title', 'Tasks')

@section('content')
<h1>Tasks</h1>
<p class="fs-5 col-md-8">Quickly and easily get started with Bootstrap's compiled, production-ready files with this barebones example featuring some basic HTML and helpful links. Download all our examples to get started.</p>

<hr class="col-3 col-md-2 mb-5">

<div class="row g-5">
    <div class="col-md-6">
        <h2>My Tasks</h2>
        <ul class="list-group">
            @foreach ($tasks as $task)
            <li class="list-group-item d-flex justify-content-between align-items-center user-select-auto">
                <a href="{{ route('tasks.view', [$task->id]) }}"> {{ $task->title }}</a>
                <span class="badge bg-primary rounded-pill">{{ $task->items_count }}</span>
            </li>
            @endforeach
        </ul>
    </div>

    <div class="col-md-6">
        <h2>Guides</h2>
        <p>Read more detailed instructions and documentation on using or contributing to Bootstrap.</p>
        <ul class="icon-list">
            <li><a href="../getting-started/introduction/">Bootstrap quick start guide</a></li>
            <li><a href="../getting-started/webpack/">Bootstrap Webpack guide</a></li>
            <li><a href="../getting-started/parcel/">Bootstrap Parcel guide</a></li>
            <li><a href="../getting-started/build-tools/">Contributing to Bootstrap</a></li>
        </ul>
    </div>
</div>
@endsection
