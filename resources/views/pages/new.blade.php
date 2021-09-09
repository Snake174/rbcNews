@extends('layouts.default')

@section('content')
<div class="d-flex justify-content-center">
    @if ($new->image != '')
        <img src="{{ $new->image }}" class="img-fluid" />
    @endif
</div>
<div>
    <p>{{ $new->description }}</p>
</div>
<a href="/" class="btn btn-primary">Назад</a>
@endsection
