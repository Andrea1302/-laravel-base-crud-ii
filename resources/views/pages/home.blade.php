@extends('layouts.main-layout')

@section('content')
<div class="create">
    <a href="{{route('create')}}">Create</a>
</div>
<div class="home">

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