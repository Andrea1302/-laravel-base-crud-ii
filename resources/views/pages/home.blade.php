@extends('layouts.main-layout')

@section('content')
<div class="home">
    {{-- create  --}}
    <a class="btn btn-secondary" href="{{route('create')}}">Create</a>



    <ul>
        @foreach ($comics as $comic)
        <li>
            <a href="{{route('show', $comic -> id )}}">
                {{$comic -> title}}
            </a>
            <a id="edit" href="{{route('edit', $comic -> id )}}"><i class="fas fa-pencil-alt"></i></a>
            <a id="delete" href="{{route('delete',$comic -> id)}}"><i class="far fa-trash-alt"></i></a>
        </li>
        @endforeach
       
    </ul>
</div>
    
@endsection