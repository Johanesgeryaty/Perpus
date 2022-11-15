
<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Nisn</th>
            <th>Email</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Tanggal Lahir</th>
            <th>No HP</th>
            <th>Alamat</th>
        </tr>
    </thead>
    <tbody>
        @php $no = 1; @endphp
        @foreach ($users as $user)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->nisn }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->kelas }}</td>
            <td>{{ $user->jurusan }}</td>
            <td>{{ $user->tanggal_lahir }}</td>
            <td>{{ $user->ho_hp }}</td>
            <td>{{ $user->alamat }}</td>
        </tr>
        @endforeach
    </tbody>
</table>