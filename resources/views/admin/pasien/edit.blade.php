<x-app-layout>
  <x-slot name="name">Edit Data Pasien</x-slot>
  <x-slot name="header">Edit Data Pasien</x-slot>

  <div class="container">
    <form action="{{ route('pasien.update', $pasien->id) }}" method="POST" class="my-3">
      @csrf
      @method('put')
      <x-authInput input="No. RM" type="number" name="id" value="{{ $pasien->id }}" readonly />
      @error('id')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Name" type="text" name="name" value="{{ $pasien->nama }}" />
      @error('name')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Tempat Lahir" type="text" name="tempatlahir" value="{{ $pasien->tempatlahir }}" />
      @error('tempatlahir')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Tanggal Lahir" type="date" name="tgllahir" value="{{ $pasien->tgllahir }}" />
      @error('tgllahir')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authSelect name="jkelamin" input="Jenis Kelamin">
        <option>Pilih salah satu</option>
        <option value="laki-laki" {{ ($pasien->jkelamin == 'laki-laki') ? 'selected' : '' }}>Laki-laki</option>
        <option value="perempuan" {{ ($pasien->jkelamin == 'perempuan') ? 'selected' : '' }}>Perempuan</option>
      </x-authSelect>
      @error('jkelamin')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Alamat" type="text" name="alamat" value="{{ $pasien->alamat }}" />
      @error('alamat')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="No. Telpon" type="number" name="telpon" value="{{ $pasien->telpon }}" />
      @error('telpon')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Hari" type="text" name="hari" value="{{ $pasien->hari }}" />
      @error('hari')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authSelect name="shift" input="Shift">
        <option>Pilih salah satu</option>
        <option value="pagi" {{ ($pasien->shift == 'pagi') ? 'selected' : '' }}>Pagi</option>
        <option value="sore" {{ ($pasien->shift == 'sore') ? 'selected' : '' }}>Sore</option>
      </x-authSelect>
      @error('shift')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Keterangan" type="text" name="keterangan" value="{{ $pasien->keterangan }}" />
      @error('keterangan')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authSimpanBtn />

    </form>
  </div>

</x-app-layout>