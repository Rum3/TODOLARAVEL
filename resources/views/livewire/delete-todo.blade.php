<div>
    <form wire:submit.prevent="deleteTodo">
        @csrf
        <input type="hidden" name="todoId" value="{{ $todoId }}">
        <button type="submit" class="delete">DELETE</button>
    </form>
</div>