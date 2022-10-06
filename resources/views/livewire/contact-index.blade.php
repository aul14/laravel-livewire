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
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>
                        <button wire:click="getContact({{ $contact->id }})"
                            class="btn btn-sm btn-info btn-edit text-white">Edit</button>
                        <button wire:click="destroy({{ $contact->id }})"
                            class="btn
                            btn-sm btn-danger text-white">Hapus</button>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>

<script>
    $(document).on('click', '.btn-edit', function(e) {
        $("html, body").animate({
            scrollTop: 0
        }, "slow");
        return false;
    });
</script>
