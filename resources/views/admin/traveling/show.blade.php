<x-app-layout>
  <x-slot name="name">Detail Data Traveling Dialisis</x-slot>
  <x-slot name="header">Detail Data Traveling Dialisis - {{ $tra->pasien->id }}</x-slot>

  <div class="table-responsive">
    <table class="table text-nowrap mb-0">
      <thead class="table-light">
        <tr>
          <th>Nama Pasien</th>
          <td>: {{ ucwords($tra->pasien->nama) }}</td>
        </tr>
        <tr>
          <th>Tempat Tanggal Lahir</th>
          <td>: {{ ucwords($tra->pasien->tempatlahir) }}, {{ $tra->pasien->tgllahir }}</td>
        </tr>
        <tr>
          <th>Umur</th>
          <td>: {{ \Carbon\Carbon::parse($tra->pasien->tgllahir)->diff(\Carbon\Carbon::now())->format('%y Tahun');}}
          </td>
        </tr>
        <tr>
          <th>Jenis Kelamin</th>
          <td>: {{ ucwords($tra->pasien->jkelamin) }}</td>
        </tr>
        <tr>
          <th>Alamat</th>
          <td>: {{ ucwords($tra->pasien->alamat) }}</td>
        </tr>
        <tr>
          <th>No. Hp</th>
          <td>: {{ ucwords($tra->pasien->telpon) }}</td>
        </tr>
        <tr>
          <th>Asal Hemodialisa</th>
          <td>: {{ ucwords($tra->asal_hd) }}</td>
        </tr>
        <tr>
          <th>Tujuan Hemodialisa</th>
          <td>: {{ ucwords($tra->tujuan_hd) }}</td>
        </tr>
        <tr>
          <th>Diagnosa</th>
          <td>: {{ ucwords($tra->diagnosa) }}</td>
        </tr>
        <tr>
          <th>Hemodialisa Pertama</th>
          <td>: {{ ucwords($tra->pertama) }}</td>
        </tr>
        <tr>
          <th>Hemodialisa Terakhir</th>
          <td>: {{ ucwords($tra->terakhir) }}</td>
        </tr>
        <tr>
          <th>Frekuensi Hemodialisis</th>
          <td>: {{ ucwords($tra->frekuensi) }}</td>
        </tr>
        <tr>
          <th>Mesin</th>
          <td>: {{ ucwords($tra->mesin) }}</td>
        </tr>
        <tr>
          <th>Dialiser</th>
          <td>: {{ ucwords($tra->dialiser) }}</td>
        </tr>
        <tr>
          <th>Dialisat</th>
          <td>: {{ ucwords($tra->dialisat) }}</td>
        </tr>
        <tr>
          <th>Kecepatan Aliran Dialisat</th>
          <td>: {{ ucwords($tra->aliran_dialisat) }}</td>
        </tr>
        <tr>
          <th>Kecepatan Aliran Darah</th>
          <td>: {{ ucwords($tra->aliran_darah) }}</td>
        </tr>
        <tr>
          <th>Lama Hemodialisis</th>
          <td>: {{ ucwords($tra->lama) }}</td>
        </tr>
        <tr>
          <th>Ultrafiltrasi</th>
          <td>: {{ ucwords($tra->ultrafiltrasi) }}</td>
        </tr>
        <tr>
          <th>UF Profiling</th>
          <td>: {{ ucwords($tra->uf_profiling) }}</td>
        </tr>
        <tr>
          <th>Heparinisasi</th>
          <td>: {{ ucwords($tra->heparinisasi) }}</td>
        </tr>
        <tr>
          <th>Akses Faskuler</th>
          <td>: {{ ucwords($tra->akses_faskuler) }}</td>
        </tr>
        <tr>
          <th>HbsAg</th>
          <td>: {{ ucwords($tra->hbsag) }}</td>
        </tr>
        <tr>
          <th>Anti HCV</th>
          <td>: {{ ucwords($tra->antihcv) }}</td>
        </tr>
        <tr>
          <th>Anti HIV</th>
          <td>: {{ ucwords($tra->antihiv) }}</td>
        </tr>
        <tr>
          <th>Tanggal Pemeriksaan</th>
          <td>: {{ ucwords($tra->tglceklab) }}</td>
        </tr>
        <tr>
          <th>Penyulit HD</th>
          <td>: {{ ucwords($tra->penyulit_hd) }}</td>
        </tr>
        <tr>
          <th>Berat Badan Kering</th>
          <td>: {{ ucwords($tra->beratbadan_kering) }}</td>
        </tr>
        <tr>
          <th>Berat Badan Terakhir</th>
          <td>: {{ ucwords($tra->beratbadan_akhir) }}</td>
        </tr>
        <tr>
          <th>Tekanan Darah</th>
          <td>: {{ ucwords($tra->tekanan_darah) }}</td>
        </tr>
        <tr>
          <th>Hasil Laboratorium HB</th>
          <td>: {{ ucwords($tra->lab_HB) }}</td>
        </tr>
        <tr>
          <th>Hasil Laboratorium Ureum</th>
          <td>: {{ ucwords($tra->lab_ureum) }}</td>
        </tr>
        <tr>
          <th>Hasil Laboratorium Kreatinin</th>
          <td>: {{ ucwords($tra->lab_kreatinin) }}</td>
        </tr>
        <tr>
          <th>Hasil Laboratorium Natrium</th>
          <td>: {{ ucwords($tra->lab_natrium) }}</td>
        </tr>
        <tr>
          <th>Hasil Laboratorium Kalium</th>
          <td>: {{ ucwords($tra->lab_kalium) }}</td>
        </tr>
        <tr>
          <th>Hasil Laboratorium Prot/Total</th>
          <td>: {{ ucwords($tra->lab_prot) }}</td>
        </tr>
        <tr>
          <th>Hasil Laboratorium Albumin</th>
          <td>: {{ ucwords($tra->lab_albumin) }}</td>
        </tr>
        <tr>
          <th>Obat-obatan</th>
          <td>: {{ ucwords($tra->obat) }}</td>
        </tr>
        <tr>
          <th>Tranfusi Terakhir</th>
          <td>: {{ ucwords($tra->tranfusi_terakhir ) }}</td>
        </tr>
        <tr>
          <th>Golongan Darah</th>
          <td>: {{ ucwords($tra->goldar ) }}</td>
        </tr>
        <tr>
          <th>Reaksi Tranfusi</th>
          <td>: {{ ucwords($tra->reaksi_transfusi ) }}</td>
        </tr>
        <tr>
          <th>Keterangan</th>
          <td>: {{ ucwords($tra->keterangan ) }}</td>
        </tr>
      </thead>
    </table>
  </div>

</x-app-layout>