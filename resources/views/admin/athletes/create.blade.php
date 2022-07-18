@extends('layouts.dashboard');

@section('content')

  <form class="mt-3" action="" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
      <label for="name" class="form-label">Nome atleta</label>
      <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
    </div>

    <div class="form-group">
      <label for="gender">Example select</label>
      <select class="form-control" id="gender">
        <option>Donna</option>
        <option>Uomo</option>
      </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection