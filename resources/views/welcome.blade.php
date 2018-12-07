@extends('layouts.app')

@section('content')
    
    <div class="bxslider">
        <div><img src="/img/img1.jpg" title="Funky roots"></div>
        <div><img src="/img/img1.jpg" title="Funky roots"></div>
    </div>

    
    @foreach($founds as $found)
    
    @endforeach
    @foreach($missings as $missing)
    
    @endforeach
    
@endsection
