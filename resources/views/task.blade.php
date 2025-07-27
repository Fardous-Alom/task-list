@extends('layouts.app');
@section('title', $task-> title);
@section('content');
<div>
  <p>Task description: {{$task -> description}}</p>
  <p>Long description: {{$task -> long_description}}</p>
  <p>Create: {{$task -> created_at}}</p>
  <p>Update: {{$task -> updated_at}}</p>
  <p>This is task number: {{$task -> id}}</p>
</div>
@endsection 