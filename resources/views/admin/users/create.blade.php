<x-app-layout>
  <x-slot name="name">Tambah Users Login</x-slot>
  <x-slot name="header">Tambah Users Login</x-slot>

  <div class="container">
    <form action="{{ route('users.store') }}" method="POST" class="my-3">
      @csrf
      <x-authInput input="Username" type="number" name="id" />
      @error('id')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Name" type="text" name="name" />
      @error('name')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Password" type="password" name="password" />
      @error('password')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authSelect name="level" input="Level">
        <option>Pilih salah satu</option>
        <option value="admin">Admin</option>
        <option value="perawat">Perawat</option>
      </x-authSelect>
      @error('level')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authSimpanBtn />

    </form>
  </div>

</x-app-layout>