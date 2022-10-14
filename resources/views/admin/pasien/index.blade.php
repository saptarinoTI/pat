<x-app-layout>
  <x-slot name="name">Data Pasien</x-slot>
  <x-slot name="header">Data Pasien</x-slot>
  @if (auth()->user()->level == 'admin')
  <x-slot name="link">{{ route('pasien.create') }}</x-slot>
  @endif

  <div class="table-responsive">
    <table class="table text-nowrap mb-0">
      <thead class="table-light">
        <tr>
          <th>No RM</th>
          <th>Nama</th>
          <th>Tempat Tanggal Lahir</th>
          <th>Jenis Kelamin</th>
          <th>Hari HD</th>
          <th>Shift HD</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($pasien as $pas)
        <tr>
          <td>{{ $pas->id }}</td>
          <td>{{ ucwords($pas->nama) }}</td>
          <td>{{ ucwords($pas->tempatlahir) }}, {{ $pas->tgllahir }}</td>
          <td>{{ ucwords($pas->jkelamin) }}</td>
          <td>{{ ucwords($pas->hari) }}</td>
          <td>{{ ucwords($pas->shift) }}</td>
          <td class="d-flex gap-2">
            <x-authShowBtn link="{{ route('pasien.show', $pas->id) }}" />
            @if (auth()->user()->level == 'admin')
            <x-authEditBtn link="{{ route('pasien.edit', $pas->id) }}" />
            <x-authDeleteBtn link="{{ route('pasien.destroy', $pas->id) }}" />
            @endif
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</x-app-layout>