<div class="d-flex justify-content-around">
    <form wire:submit="store" class="p-5 shadow rounded">
        @if (session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
        @endif
        <div class="mb-3">
            <label for="title" class="form-label">TITOLO</label>
            <input type="text" class="form-control" id="title" wire:model.live.debounce.1000ms="title">
            @error('title')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">TITOLO</label>
            <textarea wire:model.live.blur="body" id="body" class="form-control" cols="30" rows="10"></textarea>
            @error('body')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">SUBMIT</button>
    </form>

    <div class="card rounded w-50">
        <div class="card-title text-center"><h4>{{$title}}</h4></div>
        <div class="card-body">{{$body}}</div>
    </div>
</div>
