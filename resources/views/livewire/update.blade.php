<div>
    <div class="form-group">
        <label for="content">Съдържание на задачата</label>
        <textarea wire:model="content" class="form-control" id="content" rows="3"></textarea>
    </div>
    <button wire:click="updateTodoList" class="btn btn-primary">Запази</button>
</div>

