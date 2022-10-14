<x-app-layout>
  <x-slot name="name">Tambah Data Traveling Dialisis</x-slot>
  <x-slot name="header">Tambah Data Traveling Dialisis</x-slot>

  <div class="container">
    <form action="{{ route('traveling.store') }}" method="POST" class="my-3">
      @csrf

      <x-authSelect name="pasien_id" input="ID Pasien (RM)">
        <option>Pilih salah satu</option>
        @foreach ($pasien as $p)
        <option value="{{ $p->id }}">{{ $p->id }} - {{ ucwords($p->nama) }}</option>
        @endforeach
      </x-authSelect>
      @error('pasien_id')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Asal Hemodialisa" type="text" name="asal_hd" />
      @error('asal_hd')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Tujuan Hemodialisa" type="text" name="tujuan_hd" />
      @error('tujuan_hd')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authSelect name="diagnosa" input="Diagnosa">
        <option>Pilih salah satu</option>
        <option value="esrd">ESRD</option>
        <option value="akut on ckd">Akut ON CKD</option>
        <option value="pre op">Pre OP</option>
      </x-authSelect>
      @error('diagnosa')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Hemodialisa Pertama" type="date" name="pertama" />
      @error('pertama')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Hemodialisa Terakhir" type="date" name="terakhir" />
      @error('terakhir')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authSelect name="frekuensi" input="Frekuensi Hemodialisis">
        <option>Pilih salah satu</option>
        <option value="per minggu">Per Minggu</option>
        <option value="1x/minggu">1x/Minggu</option>
        <option value="2x/minggu">2x/Minggu</option>
        <option value="3x/minggu">3x/Minggu</option>
      </x-authSelect>
      @error('frekuensi')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Mesin" type="text" name="mesin" />
      @error('mesin')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Dialiser" type="text" name="dialiser" />
      @error('dialiser')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authSelect name="dialisat" input="Dialisat">
        <option>Pilih salah satu</option>
        <option value="bicarbonat">Bicarbonat</option>
        <option value="asetat">Asetat</option>
      </x-authSelect>
      @error('dialisat')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authSelect name="aliran_dialisat" input="Kecepatan Aliran Dialisat">
        <option>Pilih salah satu</option>
        <option value="500 ml/menit">500 ml/menit</option>
        <option value="300 ml/menit">300 ml/menit</option>
      </x-authSelect>
      @error('aliran_dialisat')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authSelect name="aliran_darah" input="Kecepatan Aliran Darah">
        <option>Pilih salah satu</option>
        <option value="-150 ml/menit">-150 ml/menit</option>
        <option value="150-199 ml/menit">150-199 ml/menit</option>
        <option value="200-249 ml/menit">200-249 ml/menit</option>
        <option value="+250 ml/menit">+250 ml/menit</option>
      </x-authSelect>
      @error('aliran_darah')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authSelect name="lama" input="Lama Hemodialisis">
        <option>Pilih salah satu</option>
        <option value="-3 jam">-3 jam</option>
        <option value="3-4 jam">3-4 jam</option>
        <option value="+4 jam">+4 jam</option>
      </x-authSelect>
      @error('lama')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Ultrafiltrasi" type="text" name="ultrafiltrasi" />
      @error('ultrafiltrasi')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="UF Profiling" type="text" name="uf_profiling" />
      @error('uf_profiling')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authSelect name="heparinisasi" input="Heparinisasi">
        <option>Pilih salah satu</option>
        <option value="kontinue">Kontinue</option>
        <option value="intermitten">Intermitten</option>
        <option value="lmwh">LMWH</option>
        <option value="freeheparin">FreeHeparin</option>
      </x-authSelect>
      @error('heparinisasi')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authSelect name="akses_faskuler" input="Akses Faskuler">
        <option>Pilih salah satu</option>
        <option value="femoral">Femoral</option>
        <option value="cimino">Cimino</option>
        <option value="jugular cath">Jugular Cath</option>
        <option value="subclavia cath">Subclavia Cath</option>
      </x-authSelect>
      @error('akses_faskuler')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authSelect name="hbsag" input="HbsAg">
        <option>Pilih salah satu</option>
        <option value="positif">Positif</option>
        <option value="negatif">Negatif</option>
      </x-authSelect>
      @error('hbsag')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authSelect name="antihcv" input="Anti HCV">
        <option>Pilih salah satu</option>
        <option value="positif">Positif</option>
        <option value="negatif">Negatif</option>
      </x-authSelect>
      @error('antihcv')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authSelect name="antihiv" input="Anti HIV">
        <option>Pilih salah satu</option>
        <option value="positif">Positif</option>
        <option value="negatif">Negatif</option>
      </x-authSelect>
      @error('antihiv')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Tanggal Pemeriksaan" type="date" name="tglceklab" />
      @error('tglceklab')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Penyulit HD" type="text" name="penyulit_hd" />
      @error('penyulit_hd')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Berat Badan Kering" type="text" name="beratbadan_kering" />
      @error('beratbadan_kering')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Berat Badan Terakhir" type="text" name="beratbadan_akhir" />
      @error('beratbadan_akhir')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Tekanan Darah" type="text" name="tekanan_darah" />
      @error('tekanan_darah')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Hasil Laboratorium HB" type="number" name="lab_HB" />
      @error('lab_HB')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Hasil Laboratorium Ureum" type="number" name="lab_ureum" />
      @error('lab_ureum')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Hasil Laboratorium Kreatinin" type="number" name="lab_kreatinin" />
      @error('lab_kreatinin')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Hasil Laboratorium Natrium" type="number" name="lab_natrium" />
      @error('lab_natrium')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Hasil Laboratorium Kalium" type="number" name="lab_kalium" />
      @error('lab_kalium')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Hasil Laboratorium Prot/Total" type="number" name="lab_prot" />
      @error('lab_prot')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Hasil Laboratorium Albumin" type="number" name="lab_albumin" />
      @error('lab_albumin')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Obat-obatan" type="text" name="obat" />
      @error('obat')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Tranfusi Terakhir" type="date" name="tranfusi_terakhir" />
      @error('tranfusi_terakhir')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Golongan Darah" type="text" name="goldar" />
      @error('goldar')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Reaksi Tranfusi" type="text" name="reaksi_transfusi" />
      @error('reaksi_transfusi')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Keterangan" type="text" name="keterangan" />
      @error('keterangan')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authSimpanBtn />

    </form>
  </div>

</x-app-layout>