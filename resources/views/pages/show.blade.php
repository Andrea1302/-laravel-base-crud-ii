
@extends('layouts.main-layout')


@section('content')
   <div id="show">
    
        <h1>
            {{$comic -> title}}
        </h1>

        <h5>
            {{$comic -> author}}
        </h5>

        <div id="data_show">
            {{$comic -> release_date}}
        </div>
    </div> 
@endsection