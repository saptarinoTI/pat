<x-app-layout>
  <x-slot name="name">Data Dialisis Book</x-slot>
  <x-slot name="header">Data Dialisis Book</x-slot>
  <x-slot name="link">{{ route('dialisis.create') }}</x-slot>

  <div class="table-responsive">
    <table class="table text-nowrap mb-0">
      <thead class="table-light">
        <tr>
          <th>No RM</th>
          <th>Nama</th>
          <th>Tempat Tanggal Lahir</th>
          <th>Jenis Kelamin</th>
          <th>HD Ke-</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($dialisis as $dia)
        <tr>
          <td>{{ $dia->pasien_id }}</td>
          <td>{{ ucwords($dia->pasien->nama) }}</td>
          <td>{{ ucwords($dia->pasien->tempatlahir) }}, {{ $dia->pasien->tgllahir }}</td>
          <td>{{ ucwords($dia->pasien->jkelamin) }}</td>
          <td>{{ ucwords($dia->hd) }}</td>
          <td class="d-flex gap-2">
            <x-authShowBtn link="{{ route('dialisis.show', $dia->id) }}" />
            <x-authEditBtn link="{{ route('dialisis.edit', $dia->id) }}" />
            <x-authDeleteBtn link="{{ route('dialisis.destroy', $dia->id) }}" />
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</x-app-layout>