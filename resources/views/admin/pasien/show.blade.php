<x-app-layout>
  <x-slot name="name">Detail Data Pasien</x-slot>
  <x-slot name="header">Detail Data Pasien - {{ $pasien->id }}</x-slot>

  <div class="table-responsive">
    <table class="table text-nowrap mb-0">
      <thead class="table-light">
        <tr>
          <th>Nama Pasien</th>
          <td>: {{ ucwords($pasien->nama) }}</td>
        </tr>
        <tr>
          <th>Tempat Tanggal Lahir</th>
          <td>: {{ ucwords($pasien->tempatlahir) }}, {{ $pasien->tgllahir }}</td>
        </tr>
        <tr>
          <th>Umur</th>
          <td>: {{ \Carbon\Carbon::parse($pasien->tgllahir)->diff(\Carbon\Carbon::now())->format('%y Tahun');}}</td>
        </tr>
        <tr>
          <th>Jenis Kelamin</th>
          <td>: {{ ucwords($pasien->jkelamin) }}</td>
        </tr>
        <tr>
          <th>Alamat</th>
          <td>: {{ ucwords($pasien->alamat) }}</td>
        </tr>
        <tr>
          <th>No. Hp</th>
          <td>: {{ ucwords($pasien->telpon) }}</td>
        </tr>
        <tr>
          <th>Hari Hemodialisa</th>
          <td>: {{ ucwords($pasien->hari) }}</td>
        </tr>
        <tr>
          <th>Shift Hemodialisa</th>
          <td>: {{ ucwords($pasien->shift) }}</td>
        </tr>
        <tr>
          <th>Keterangan Hemodialisa</th>
          <td>: {{ ucwords($pasien->keterangan) }}</td>
        </tr>
      </thead>
    </table>
  </div>

</x-app-layout>