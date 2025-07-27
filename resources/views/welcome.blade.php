<h1>This is welcome page</h1>
<div>
    @if(count($tasks))
    <p>There are tasks.</p>
    @foreach ($tasks as $task)
    <div>
        <a href="{{route('tasks.show',['id'=>$task->id])}}">
            <h3>{{$task ->title}}</h3>
        </a>
        </div>

    @endforeach
    @else
    <p>There are no task.</p>
    @endif
</div>