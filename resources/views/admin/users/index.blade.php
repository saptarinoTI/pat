<x-app-layout>
  <x-slot name="name">Users Login</x-slot>
  <x-slot name="header">Users Login</x-slot>
  <x-slot name="link">{{ route('users.create') }}</x-slot>

  <div class="table-responsive">
    <table class="table text-nowrap mb-0">
      <thead class="table-light">
        <tr>
          <th>Username</th>
          <th>Name</th>
          <th>Level</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
        <tr>
          <td>{{ $user->id }}</td>
          <td>{{ ucwords($user->name) }}</td>
          <td>{{ ucwords($user->level) }}</td>
          <td class="d-flex gap-2">
            <x-authEditBtn link="{{ route('users.edit', $user->id) }}" />
            <x-authDeleteBtn link="{{ route('users.destroy', $user->id) }}" />
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</x-app-layout>