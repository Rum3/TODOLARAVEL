<form wire:submit.prevent="authenticate">
    @csrf
    <div class="mb-3 row">
        <label for="email" class="col-md-4 col-form-label text-md-end text-start">Email Address</label>
        <div class="col-md-6">
            <input type="email" class="form-control" wire:model="email">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="password" class="col-md-4 col-form-label text-md-end text-start">Password</label>
        <div class="col-md-6">
            <input type="password" class="form-control" wire:model="password">
        </div>
    </div>
    @if ($errors->any())
        <div class="mb-3 row">
            <div class="col-md-6 offset-md-4">
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endif
    <div class="mb-3 row">
        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Login">
    </div>
</form>
