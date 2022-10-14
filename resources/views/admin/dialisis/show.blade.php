<x-app-layout>
  <x-slot name="name">Detail Data Dialisis Book</x-slot>
  <x-slot name="header">Detail Data Dialisis Book</x-slot>

  <div class="table-responsive">
    <table class="table text-nowrap mb-0 ">
      <thead class="bg-success">
        <tr>
          <th class="text-white fw-bold" scope="col">Data Pasien</th>
          <th class="text-white fw-bold" scope="col">Pemeriksaan</th>
          <th class="text-white fw-bold" scope="col">Pre HD</th>
          <th class="text-white fw-bold" scope="col">Post HD</th>
        </tr>
      </thead>
      <tbody class="table-light">
        <tr>
          <td>
            <strong>
              {{ $dia->pasien->id }} - {{ ucwords($dia->pasien->nama) }}
            </strong>
          </td>
          <th>Berat Badan</th>
          <td>
            {{ $dia->pre_beratbadan; }}
          </td>
          <td>
            {{ $dia->post_beratbadan; }}
          </td>
        </tr>
        <tr>
          <td><strong>Tanggal</strong> : {{ $dia->tanggal }}</td>
          <th rowspan="2">Tekanan Darah</td>
          <td rowspan="2">
            {{ $dia->pre_tdarah; }}
          </td>
          <td rowspan="2">
            {{ $dia->post_tdarah; }}
          </td>
        </tr>
        <tr>
          <td><strong>HD Ke</strong> :
            {{ $dia->hd; }}
          </td>
        </tr>
        <tr>
          <td rowspan="2"><strong>HF</strong> :
            {{ ucwords(strtolower($dia->hf)); }}
          </td>
          <th>BUN</th>
          <td>
            {{ $dia->pre_bun; }}
          </td>
          <td>
            {{ $dia->post_bun; }}
          </td>
        </tr>
        <tr>
          <td style="padding: 18px 0;"></td>
          <td style="padding: 18px 0;"></td>
          <td style="padding: 18px 0;"></td>
        </tr>
        </thead>
    </table>
  </div>

</x-app-layout>