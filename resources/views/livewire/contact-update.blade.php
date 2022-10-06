<div>
    <form action="javascript:void(0)" class="form" wire:submit.prevent="update">
        <input type="hidden" name="" wire:model="contactId">
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <input type="text" wire:model="name" name="" id=""
                        class="form-control @error('name') is-invalid  @enderror" placeholder="name">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col">
                    <input wire:model="phone" type="text" name="" id=""
                        class="form-control @error('phone') is-invalid  @enderror" placeholder="phone">
                    @error('phone')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <button type="submit" class="btn my-3 btn-sm btn-primary btn-edit text-white">Submit</button>
    </form>
</div>
