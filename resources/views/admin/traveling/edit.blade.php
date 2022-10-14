<x-app-layout>
  <x-slot name="name">Edit Data Traveling Dialisis</x-slot>
  <x-slot name="header">Edit Data Traveling Dialisis</x-slot>

  <div class="container">
    <form action="{{ route('traveling.update', $tra->id) }}" method="POST" class="my-3">
      @csrf
      @method('put')

      <x-authInput input="ID Pasien (RM)" type="text" name="pasien_id" value="{{ $tra->pasien->id }}" readonly />
      @error('pasien_id')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Asal Hemodialisa" type="text" name="asal_hd" value="{{ $tra->asal_hd }}" />
      @error('asal_hd')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Tujuan Hemodialisa" type="text" name="tujuan_hd" value="{{ $tra->tujuan_hd }}" />
      @error('tujuan_hd')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authSelect name="diagnosa" input="Diagnosa">
        <option>Pilih salah satu</option>
        <option value="esrd" {{ ($tra->diagnosa == "esrd") ? 'selected' : '' }}>ESRD</option>
        <option value="akut on ckd" {{ ($tra->diagnosa == "akut on ckd") ? 'selected' : '' }}>Akut ON CKD</option>
        <option value="pre op" {{ ($tra->diagnosa == "pre op") ? 'selected' : '' }}>Pre OP</option>
      </x-authSelect>
      @error('diagnosa')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Hemodialisa Pertama" type="date" name="pertama" value="{{ $tra->pertama }}" />
      @error('pertama')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Hemodialisa Terakhir" type="date" name="terakhir" value="{{ $tra->terakhir }}" />
      @error('terakhir')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authSelect name="frekuensi" input="Frekuensi Hemodialisis">
        <option>Pilih salah satu</option>
        <option value="per minggu" {{ ($tra->frekuensi == "per minggu") ? 'selected' : '' }}>Per Minggu</option>
        <option value="1x/minggu" {{ ($tra->frekuensi == "1x/minggu") ? 'selected' : '' }}>1x/Minggu</option>
        <option value="2x/minggu" {{ ($tra->frekuensi == "2x/minggu") ? 'selected' : '' }}>2x/Minggu</option>
        <option value="3x/minggu" {{ ($tra->frekuensi == "3x/minggu") ? 'selected' : '' }}>3x/Minggu</option>
      </x-authSelect>
      @error('frekuensi')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Mesin" type="text" name="mesin" value="{{ $tra->mesin }}" />
      @error('mesin')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Dialiser" type="text" name="dialiser" value="{{ $tra->dialiser }}" />
      @error('dialiser')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authSelect name="dialisat" input="Dialisat">
        <option>Pilih salah satu</option>
        <option value="bicarbonat" {{ ($tra->dialisat == "bicarbonat") ? 'selected' : '' }}>Bicarbonat</option>
        <option value="asetat" {{ ($tra->dialisat == "asetat") ? 'selected' : '' }}>Asetat</option>
      </x-authSelect>
      @error('dialisat')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authSelect name="aliran_dialisat" input="Kecepatan Aliran Dialisat">
        <option>Pilih salah satu</option>
        <option value="500 ml/menit" {{ ($tra->aliran_dialisat == "500 ml/menit") ? 'selected' : '' }}>500 ml/menit
        </option>
        <option value="300 ml/menit" {{ ($tra->aliran_dialisat == "300 ml/menit") ? 'selected' : '' }}>300 ml/menit
        </option>
      </x-authSelect>
      @error('aliran_dialisat')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authSelect name="aliran_darah" input="Kecepatan Aliran Darah">
        <option>Pilih salah satu</option>
        <option value="-150 ml/menit" {{ ($tra->aliran_darah == "-150 ml/menit") ? 'selected' : '' }}>-150 ml/menit
        </option>
        <option value="150-199 ml/menit" {{ ($tra->aliran_darah == "150-199 ml/menit") ? 'selected' : '' }}>150-199
          ml/menit</option>
        <option value="200-249 ml/menit" {{ ($tra->aliran_darah == "200-249 ml/menit") ? 'selected' : '' }}>200-249
          ml/menit</option>
        <option value="+250 ml/menit" {{ ($tra->aliran_darah == "+250 ml/menit") ? 'selected' : '' }}>+250 ml/menit
        </option>
      </x-authSelect>
      @error('aliran_darah')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authSelect name="lama" input="Lama Hemodialisis">
        <option>Pilih salah satu</option>
        <option value="-3 jam" {{ ($tra->lama == "-3 jam") ? 'selected' : '' }}>-3 jam</option>
        <option value="3-4 jam" {{ ($tra->lama == "3-4 jam") ? 'selected' : '' }}>3-4 jam</option>
        <option value="+4 jam" {{ ($tra->lama == "+4 jam") ? 'selected' : '' }}>+4 jam</option>
      </x-authSelect>
      @error('lama')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Ultrafiltrasi" type="text" name="ultrafiltrasi" value="{{ $tra->ultrafiltrasi }}" />
      @error('ultrafiltrasi')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="UF Profiling" type="text" name="uf_profiling" value="{{ $tra->uf_profiling }}" />
      @error('uf_profiling')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authSelect name="heparinisasi" input="Heparinisasi">
        <option>Pilih salah satu</option>
        <option value="kontinue" {{ ($tra->heparinisasi == "kontinue") ? 'selected' : '' }}>Kontinue</option>
        <option value="intermitten" {{ ($tra->heparinisasi == "intermitten") ? 'selected' : '' }}>Intermitten</option>
        <option value="lmwh" {{ ($tra->heparinisasi == "lmwh") ? 'selected' : '' }}>LMWH</option>
        <option value="freeheparin" {{ ($tra->heparinisasi == "freeheparin") ? 'selected' : '' }}>FreeHeparin</option>
      </x-authSelect>
      @error('heparinisasi')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authSelect name="akses_faskuler" input="Akses Faskuler">
        <option>Pilih salah satu</option>
        <option value="femoral" {{ ($tra->akses_faskuler == "femoral") ? 'selected' : '' }}>Femoral</option>
        <option value="cimino" {{ ($tra->akses_faskuler == "cimino") ? 'selected' : '' }}>Cimino</option>
        <option value="jugular cath" {{ ($tra->akses_faskuler == "jugular cath") ? 'selected' : '' }}>Jugular Cath
        </option>
        <option value="subclavia cath" {{ ($tra->akses_faskuler == "subclavia cath") ? 'selected' : '' }}>Subclavia Cath
        </option>
      </x-authSelect>
      @error('akses_faskuler')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authSelect name="hbsag" input="HbsAg">
        <option>Pilih salah satu</option>
        <option value="positif" {{ ($tra->hbsag == "positif") ? 'selected' : '' }}>Positif</option>
        <option value="negatif" {{ ($tra->hbsag == "negatif") ? 'selected' : '' }}>Negatif</option>
      </x-authSelect>
      @error('hbsag')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authSelect name="antihcv" input="Anti HCV">
        <option>Pilih salah satu</option>
        <option value="positif" {{ ($tra->antihcv == "positif") ? 'selected' : '' }}>Positif</option>
        <option value="negatif" {{ ($tra->antihcv == "negatif") ? 'selected' : '' }}>Negatif</option>
      </x-authSelect>
      @error('antihcv')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authSelect name="antihiv" input="Anti HIV">
        <option>Pilih salah satu</option>
        <option value="positif" {{ ($tra->antihiv == "positif") ? 'selected' : '' }}>Positif</option>
        <option value="negatif" {{ ($tra->antihiv == "negatif") ? 'selected' : '' }}>Negatif</option>
      </x-authSelect>
      @error('antihiv')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Tanggal Pemeriksaan" type="date" name="tglceklab" value="{{ $tra->tglceklab }}" />
      @error('tglceklab')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Penyulit HD" type="text" name="penyulit_hd" value="{{ $tra->penyulit_hd }}" />
      @error('penyulit_hd')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Berat Badan Kering" type="text" name="beratbadan_kering"
        value="{{ $tra->beratbadan_kering }}" />
      @error('beratbadan_kering')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Berat Badan Terakhir" type="text" name="beratbadan_akhir"
        value="{{ $tra->beratbadan_akhir }}" />
      @error('beratbadan_akhir')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Tekanan Darah" type="text" name="tekanan_darah" value="{{ $tra->tekanan_darah }}" />
      @error('tekanan_darah')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Hasil Laboratorium HB" type="number" name="lab_HB" value="{{ $tra->lab_HB }}" />
      @error('lab_HB')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Hasil Laboratorium Ureum" type="number" name="lab_ureum" value="{{ $tra->lab_ureum }}" />
      @error('lab_ureum')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Hasil Laboratorium Kreatinin" type="number" name="lab_kreatinin"
        value="{{ $tra->lab_kreatinin }}" />
      @error('lab_kreatinin')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Hasil Laboratorium Natrium" type="number" name="lab_natrium"
        value="{{ $tra->lab_natrium }}" />
      @error('lab_natrium')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Hasil Laboratorium Kalium" type="number" name="lab_kalium" value="{{ $tra->lab_kalium }}" />
      @error('lab_kalium')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Hasil Laboratorium Prot/Total" type="number" name="lab_prot" value="{{ $tra->lab_prot }}" />
      @error('lab_prot')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Hasil Laboratorium Albumin" type="number" name="lab_albumin"
        value="{{ $tra->lab_albumin }}" />
      @error('lab_albumin')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Obat-obatan" type="text" name="obat" value="{{ $tra->obat }}" />
      @error('obat')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Tranfusi Terakhir" type="date" name="tranfusi_terakhir"
        value="{{ $tra->tranfusi_terakhir }}" />
      @error('tranfusi_terakhir')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Golongan Darah" type="text" name="goldar" value="{{ $tra->goldar }}" />
      @error('goldar')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Reaksi Tranfusi" type="text" name="reaksi_transfusi" value="{{ $tra->reaksi_transfusi }}" />
      @error('reaksi_transfusi')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Keterangan" type="text" name="keterangan" value="{{ $tra->keterangan }}" />
      @error('keterangan')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authSimpanBtn />

    </form>
  </div>

</x-app-layout>