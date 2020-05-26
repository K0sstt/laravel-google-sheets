<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Second</th>
    </tr>
    </thead>
    <tbody>
    @foreach($rows as $row)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $row[0] }}</td>
            <td>{{ $row[1] }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
