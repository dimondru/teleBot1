@extends('layout.app')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>Текст</th>
            <th>Время</th>
            <th>Пользователь</th>
        </tr>
        </thead>
        <tbody>
        @foreach($massages as $item)
            <tr>
                <th>{{ $item->id }}</th>
                <th>{{ $item->text }}</th>
                <th>{{ $item->created_at }}</th>
                <th>{{ $item->chat_id }}</th>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

