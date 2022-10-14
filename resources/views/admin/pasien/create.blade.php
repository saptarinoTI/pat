<x-app-layout>
  <x-slot name="name">Tambah Data Pasien</x-slot>
  <x-slot name="header">Tambah Data Pasien</x-slot>

  <div class="container">
    <form action="{{ route('pasien.store') }}" method="POST" class="my-3">
      @csrf
      <x-authInput input="No. RM" type="number" name="id" />
      @error('id')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Name" type="text" name="name" />
      @error('name')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Tempat Lahir" type="text" name="tempatlahir" />
      @error('tempatlahir')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Tanggal Lahir" type="date" name="tgllahir" />
      @error('tgllahir')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authSelect name="jkelamin" input="Jenis Kelamin">
        <option>Pilih salah satu</option>
        <option value="laki-laki">Laki-laki</option>
        <option value="perempuan">Perempuan</option>
      </x-authSelect>
      @error('jkelamin')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Alamat" type="text" name="alamat" />
      @error('alamat')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="No. Telpon" type="number" name="telpon" />
      @error('telpon')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Hari" type="text" name="hari" />
      @error('hari')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authSelect name="shift" input="Shift">
        <option>Pilih salah satu</option>
        <option value="pagi">Pagi</option>
        <option value="sore">Sore</option>
      </x-authSelect>
      @error('shift')
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