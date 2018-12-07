@extends('layouts.app')

@section('content')
    @foreach($founds as $found)
        <h2>{{ $found->first_name }}</h2>
    @endforeach
@endsection