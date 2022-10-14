<form action="{{ $link }}" method="POST">
  @csrf
  @method('delete')
  <button type="submit" class="btn btn-sm btn-danger">Delete</button>
</form>