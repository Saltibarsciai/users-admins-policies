<div class="card">
    <div class="card-title text-center text-uppercase p-3">
        Your minions
    </div>
    <ul class="list-group card-deck">
        @foreach($data as $item)
            <li class="list-group-item">
                <a href="{{route('users.show', $item->id)}}">{{$item->name}}</a>
            </li>
        @endforeach
    </ul>
</div>
