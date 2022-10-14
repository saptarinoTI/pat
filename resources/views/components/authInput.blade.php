<!-- Input -->
<div class="mt-3">
  <label class="form-label" for="{{ $name }}">{{ $input }}</label>
  <input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}"
    class="form-control @error('{{ $name }}') is-invalid @enderror" {!! $attributes->merge(['value',
  'readonly', 'required'])!!}>
</div>