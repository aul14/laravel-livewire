<div>
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
                        <button class="btn btn-sm btn-info text-white">Edit</button>
                        <button class="btn btn-sm btn-danger text-white">Hapus</button>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>
