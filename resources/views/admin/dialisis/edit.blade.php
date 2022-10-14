<x-app-layout>
  <x-slot name="name">Edit Data Dialisis Book</x-slot>
  <x-slot name="header">Edit Data Dialisis Book</x-slot>

  <div class="container">
    <form action="{{ route('dialisis.update', $dia->id) }}" method="POST" class="my-3">
      @csrf
      @method('put')

      <x-authInput readonly input="ID Pasien (RM)" type="text" name="pasien_id" value="{{ $dia->pasien_id }}" />
      @error('pasien_id')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Tanggal" type="date" name="tanggal" value="{{ $dia->tanggal }}" />
      @error('tanggal')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="HD Ke-" type="text" name="hd" value="{{ $dia->hd }}" />
      @error('hd')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authSelect name="hf" input="HF">
        <option>Pilih salah satu</option>
        <option value="baru" {{ ($dia->hf == "baru") ? 'selected' : '' }}>Baru</option>
        <option value="reuse" {{ ($dia->hf == "reuse") ? 'selected' : '' }}>ReUse</option>
      </x-authSelect>
      @error('dialisat')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Berat Badan Pre HD" type="text" name="pre_beratbadan" value="{{ $dia->pre_beratbadan }}" />
      @error('pre_beratbadan')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Berat Badan Post HD" type="text" name="post_beratbadan" value="{{ $dia->post_beratbadan }}" />
      @error('post_beratbadan')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Tekanan Darah Pre HD" type="text" name="pre_tdarah" value="{{ $dia->pre_tdarah }}" />
      @error('pre_tdarah')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Tekanan Darah Post HD" type="text" name="post_tdarah" value="{{ $dia->post_tdarah }}" />
      @error('post_tdarah')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="BUN Pre HD" type="text" name="pre_bun" value="{{ $dia->pre_bun }}" />
      @error('pre_bun')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="BUN Post HD" type="text" name="post_bun" value="{{ $dia->post_bun }}" />
      @error('post_bun')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authSimpanBtn />

    </form>
  </div>

</x-app-layout>