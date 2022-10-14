<!-- Input -->
<div class="mt-3">
  <label class="form-label" for="{{ $name }}">{{ $input }}</label>
  <select name="{{ $name }}" id="{{ $name }}" class="form-select @error('{{ $name }}') is-invalid @enderror" required>
    {{ $slot }}
  </select>
</div>