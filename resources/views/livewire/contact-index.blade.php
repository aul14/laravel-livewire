<div>

    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('message') }}
            <button class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if ($statusUpdate)
        <livewire:contact-update></livewire:contact-update>
    @else
        <livewire:contact-create></livewire:contact-create>
    @endif

    <hr>
    <div class="row">
        <div class="col-sm-2">
            <select wire:model="paginate" name="" id="" class="form-control form-control-sm">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
        </div>
        <div class="col">
            <input wire:model="search" type="text" class="form-control form-control-sm float-end w-auto"
                placeholder="search">
        </div>
    </div>
    <hr>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = ($contacts->currentpage() - 1) * $contacts->perpage() + 1; ?>
            @foreach ($contacts as $key => $contact)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>
                        <button wire:click="getContact({{ $contact->id }})"
                            class="btn btn-sm btn-info btn-edit text-white">Edit</button>
                        <button wire:click="destroy({{ $contact->id }})" onclick="return confirm('Are you sure?')"
                            class="btn
                            btn-sm btn-danger text-white">Hapus</button>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    {{ $contacts->links() }}
</div>

<script>
    $(document).on('click', '.btn-edit', function(e) {
        $("html, body").animate({
            scrollTop: 0
        }, "slow");
        return false;
    });
</script>
