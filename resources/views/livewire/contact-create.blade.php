<div>
    <form action="javascript:void(0)" class="form" wire:submit.prevent="store">
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <input type="text" wire:model="name" name="" id="" class="form-control"
                        placeholder="name">
                </div>
                <div class="col">
                    <input wire:model="phone" type="text" name="" id="" class="form-control"
                        placeholder="phone">
                </div>
            </div>
        </div>
        <button type="submit" class="btn my-3 btn-sm bg-blue-500 hover:bg-blue-700 text-white">Submit</button>
    </form>
</div>
