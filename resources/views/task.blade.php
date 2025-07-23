@extends('layouts.app');
@section('title', $task-> title);
@section('content');
<div>
  
  <p>This is task {{$task -> id}}</p>
</div>
@endsection