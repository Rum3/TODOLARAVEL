<div>
    <form class="form" wire:submit.prevent="store">
    @csrf
        <input type="text" wire:model="content" id="content" />
        <button type="submit">Add</button>
    </form>
</div>

