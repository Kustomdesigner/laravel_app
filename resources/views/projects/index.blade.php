@extends('layout')

@section('title')
  Projects
@endsection

@section('content')
  <h1>My Projects</h1>

  <ul>
    @foreach ($projects as $project)
       <li>{{ $project->title }} <br/> {{ $project->description }} </li>
    @endforeach
  </ul>

  @endsection