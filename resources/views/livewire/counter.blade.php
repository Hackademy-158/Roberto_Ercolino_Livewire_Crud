<div>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <button class="btn btn-danger m-2" wire:click="decrement">-1</button>
                <button class="btn btn-info m-2" wire:click="increment">+1</button>
                <button class="btn btn-light m-2" wire:click="incrementByNumber({{$num_five}})">+5</button>
                <button class="btn btn-dark m-2" wire:click="decrementByNumber({{$num_five}})">-5</button>
            </div>
            <div class="col-12 d-flex justify-content-center">{{$value}}</div>
        </div>
    </div>
</div>
