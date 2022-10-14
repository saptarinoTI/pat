<x-app-layout>
  <x-slot name="name">Data Traveling Dialisis</x-slot>
  <x-slot name="header">Data Traveling Dialisis</x-slot>
  @if (auth()->user()->level == 'admin')
  <x-slot name="link">{{ route('traveling.create') }}</x-slot>
  @endif

  <div class="table-responsive">
    <table class="table text-nowrap mb-0">
      <thead class="table-light">
        <tr>
          <th>No RM</th>
          <th>Nama</th>
          <th>Tempat Tanggal Lahir</th>
          <th>Jenis Kelamin</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($traveling as $tra)
        <tr>
          <td>{{ ucwords($tra->pasien->id) }}</td>
          <td>{{ ucwords($tra->pasien->nama) }}</td>
          <td>{{ ucwords($tra->pasien->tempatlahir) }}, {{ ucwords($tra->pasien->tgllahir) }}</td>
          <td>{{ ucwords($tra->pasien->jkelamin) }}</td>
          <td class="d-flex gap-2">
            <x-authShowBtn link="{{ route('traveling.show', $tra->id) }}" />
            @if (auth()->user()->level == 'admin')
            <x-authEditBtn link="{{ route('traveling.edit', $tra->id) }}" />
            <x-authDeleteBtn link="{{ route('traveling.destroy', $tra->id) }}" />
            @endif
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</x-app-layout>