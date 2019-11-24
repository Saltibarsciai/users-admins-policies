<div class="card">
    <div class="card-title text-center text-uppercase ">
        Your tasks
    </div>
    <ul class="list-group">
        @foreach($data->tasks as $task)
            <li class="list-group-item card-deck">
                <div class="list-group-item">
                    {{$task->name}}
                </div>
                <form class="list-group-item" method="post" action="{{route('tasks.update', [$task->id])}}">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="status" value="{{$task->is_completed ? 0: 1}}"/>
                    <input type="submit" value="" class="checkbox checkbox-state-{{$task->is_completed}}"/>
                </form>
            </li>
        @endforeach

    </ul>
</div>
