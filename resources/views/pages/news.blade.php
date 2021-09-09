@extends('layouts.default')

@section('content')
<div class="row">
    @foreach ($news as $n)
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="card">
                <div class="card-body">
                    <p class="card-text">{{ $n->title }}</p>
                    <a href="/news/{{ $n->id }}" class="btn btn-primary">Перейти к новости</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
