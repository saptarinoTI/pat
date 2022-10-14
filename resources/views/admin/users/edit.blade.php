<x-app-layout>
  <x-slot name="name">Edit Users Login</x-slot>
  <x-slot name="header">Edit Users Login</x-slot>

  <div class="container">
    <form action="{{ route('users.update', $user->id) }}" method="POST" class="my-3">
      @csrf
      @method('put')
      <x-authInput input="Username" type="number" name="id" required value="{{ $user->id }}" readonly />
      @error('id')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Name" type="text" name="name" required value="{{ $user->name }}" />
      @error('name')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authInput input="Password" type="password" name="password" />
      @error('password')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authSelect name="level" input="Level" required>
        <option>Pilih salah satu</option>
        <option value="admin" {{ ($user->level == 'admin') ? 'selected' : '' }}>Admin</option>
        <option value="perawat" {{ ($user->level == 'perawat') ? 'selected' : '' }}>Perawat</option>
      </x-authSelect>
      @error('level')
      <div class="text-danger m-0 p-0"><small>{{ $message }}</small></div>
      @enderror

      <x-authSimpanBtn />
    </form>
  </div>

</x-app-layout>