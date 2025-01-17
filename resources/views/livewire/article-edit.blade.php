<div>
    <form class="p-5 shadow rounded" wire:submit="update">
        @if (session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
        @endif
        <div class="mb-3">
            <label for="title" class="form-label">TITOLO</label>
            <input type="text" class="form-control" id="title" wire:model="title">
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">TITOLO</label>
            <textarea wire:model="body" id="body" class="form-control" cols="30" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">SUBMIT</button>
        <a wire:click="destroy" class="btn btn-danger">DELETE</a>
    </form>
</div>
