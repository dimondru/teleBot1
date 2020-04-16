@extends('layout.app')
@section('content')
    @foreach($massages as $item)
        <p>{{ $item->list }}</p>
    @endforeach
@endsection

