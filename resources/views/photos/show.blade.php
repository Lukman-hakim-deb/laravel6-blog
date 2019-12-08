@extends('layouts.app')

@section('content')

<div class="row d-flex justify-content-center">
    <div class="col-md-8">
        <div class="card mb-4 shadow-sm">
            <img src="{{ asset($photo->url) }}" alt="">
            <div class="card-body">
                <h1>{{ $photo->title }}</h1>
                <p class="card-text">{!! $photo->description !!}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">{{ $photo->created_at->diffForHumans() }}</small>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection