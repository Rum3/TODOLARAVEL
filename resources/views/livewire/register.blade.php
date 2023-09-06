<div>
    <form wire:submit.prevent="storeTodo" class="register">
        @csrf

        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" wire:model="name" class="form-control" id="name" name="name">
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" wire:model="email" class="form-control" id="email" name="email">
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="password">Password</label>
            <input type="password" wire:model="password" class="form-control" id="password" name="password">
            @error('password') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" wire:model="password_confirmation" class="form-control" id="password_confirmation" name="password_confirmation">
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>
