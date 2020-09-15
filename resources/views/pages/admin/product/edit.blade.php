@extends('layouts.admin')
@section('title','Product')
@section('content')

<!-- Section Content -->
<div
class="section-content section-dashboard-home"
data-aos="fade-up"
>
<div class="container-fluid">
  <div class="dashboard-heading">
    <h2 class="dashboard-title">
      Product
    </h2>
    <p class="dashboard-subtitle">
      Edit Product 
    </p>
  </div>
  <div class="dashboard-content">
    <div class="row">
      <div class="col-md-12">
        @if($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
        <div class="card">
          <div class="card-body">
            <form action="{{ route('product.update', $item->id) }}" method="POST">
              @method('PUT')
              @csrf
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Nama Product</label>
                    <input type="text" name="name" class="form-control" required value="{{ $item->name }}">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Pemilik Product</label>
                    <select name="users_id" class="form-control">
                      <option value="{{ $item->users_id }}" selected>{{ $item->user->name }}</option>
                      @foreach ($users as $user)
                      <option value="{{ $user->id }}">{{ $user->name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Kategori Product</label>
                    <select name="categories_id" class="form-control">
                      <option value="{{ $item->categories_id }}" selected>{{ $item->category->name }}</option>
                      @foreach ($categories as $category)
                      <option value="{{ $category->id }}">{{ $category->name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Harga Product</label>
                    <input type="number" name="price" class="form-control" required value="{{ $item->price }}">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Deskripsi Product</label>
                    <textarea name="description" id="editor" cols="30" rows="10">{!! $item->description !!}</textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col text-right">
                  <button class="btn btn-success px-5" type="submit">Update Now</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</div>
</div>
<!-- End Of Section Content -->

@endsection


@push('addon-script')
<script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
<script>
  CKEDITOR.replace( 'editor' );
</script>
@endpush