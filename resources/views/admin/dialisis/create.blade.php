<x-app-layout>
  <x-slot name="name">Tambah Data Dialisis Book</x-slot>
  <x-slot name="header">Tambah Data Dialisis Book</x-slot>

  <div class="container">
    <form action="{{ route('dialisis.store') }}" method="POST" class="my-3">
      @csrf

      @if (auth()->user()->level == 'pasien')
      <x-authInput input="ID Pasien (RM)" type="text" name="pasien_id" value="{{ $pasien }}" readonly />
      @error('pasien_id')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      @else
      {{-- <x-authSelect name="pasien_id" input="ID Pasien (RM)">
        <option>Pilih salah satu</option>
        @foreach ($pasien as $p)
        <option value="{{ $p->id }}">{{ $p->id }} - {{ ucwords($p->nama) }}</option>
        @endforeach
      </x-authSelect> --}}
      <div class="mt-3">
        <label class="form-label" for="pasien_id">ID Pasien (RM)</label>
        <select name="pasien_id" id="pasien_id" class="form-select @error('pasien_id') is-invalid @enderror" required
          onchange="autofill()">
          <option>Pilih salah satu</option>
          @foreach ($pasien as $p)
          <option value="{{ $p->id }}">{{ $p->id }} - {{ ucwords($p->nama) }}</option>
          @endforeach
        </select>
      </div>
      @error('pasien_id')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror
      @endif

      <x-authInput input="Tanggal" type="date" name="tanggal" />
      @error('tanggal')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="HD Ke-" type="text" name="hd" value="{{ $hdke }}" readonly />
      @error('hd')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authSelect name="hf" input="HF">
        <option>Pilih salah satu</option>
        <option value="baru">Baru</option>
        <option value="reuse">ReUse</option>
      </x-authSelect>
      @error('dialisat')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Berat Badan Pre HD" type="text" name="pre_beratbadan" />
      @error('pre_beratbadan')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Berat Badan Post HD" type="text" name="post_beratbadan" />
      @error('post_beratbadan')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Tekanan Darah Pre HD" type="text" name="pre_tdarah" />
      @error('pre_tdarah')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Tekanan Darah Post HD" type="text" name="post_tdarah" />
      @error('post_tdarah')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="BUN Pre HD" type="text" name="pre_bun" />
      @error('pre_bun')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="BUN Post HD" type="text" name="post_bun" />
      @error('post_bun')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authSimpanBtn />

    </form>
  </div>

</x-app-layout>