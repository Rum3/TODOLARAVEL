<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Todo List</title>
</head>
<body>
    <div>
        <div>
            <div>
                <h3>To-do List</h3>
                <livewire:add-todo />
                @if(count($todolists))
                <ul>    
                    @foreach($todolists as $todolist)
                        <li class="list-group-item">
                            {{$todolist->content}}
                                <livewire:update :todolistId="$todolist->id" >
                                <livewire:delete-todo :todoId="$todolist->id" />
                        </li>
                    @endforeach
                </ul>
                @else
                <p>No tasks</p>
                @endif
            </div>
            @if(count($todolists))
            <div>
                You have {{ count($todolists)}} pending tasks
            </div>
                @else
                @endif
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="{{ asset('livewire/livewire.js') }}"></script>
    @livewireScripts
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>