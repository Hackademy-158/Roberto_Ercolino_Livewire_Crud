<div class="container">
    <div class="row justify-content-evenly">
        <div class="col-6 text-center">
            <input type="number" class="w-25 text-center" wire:model="number1">
        </div>
        <div class="col-6 text-center">
            <input type="number" class="w-25 text-center" wire:model="number2">
        </div>
    </div>

    <div class="row justify-content-evenly">
        <div class="col-12">
            <button class="btn btn-danger w-100" wire:click="sum"></button>
        </div>
    </div>

    <div class="col-12 d-flex justify-content-center">{{$result}}</div>
</div>
