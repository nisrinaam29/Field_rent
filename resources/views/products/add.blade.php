@extends('layouts/app')


@section('title', 'Tambah Lapangan')

@section('content')
    @include('layouts.navbar')

    <div class="container">

        <div class="col-md-10 bg-light manage-wrapper">
            <h3><i class="uil uil-plus me-1"></i>Halaman Tambah Lapangan</h3>
            <p>Manage the Fields dont forget to recheck it</p>
            <hr>
            <form action="{{ url ('products/add')}}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nama Lapangan</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Masukan Nama Lapangan" name="name"
                    value="{{old('name')}}">
                    @error('name') <small class="text-danger">{{ $message }}</small>@enderror
                
                </div>
                <div class="mb-3">
                    <label class="form-label">Image URL</label>
                    <input type="text" class="form-control" placeholder="Masukan Image URL" name="image_url"
                    value="{{old('image_url')}}">
                    @error('name') <small class="text-danger">{{ $message }}</small>@enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <input type="number" class="form-control" placeholder="Masukan Harga" name="price"
                    value="{{old('price')}}">
                    @error('price') <small class="text-danger">{{ $message }}</small>@enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control"  rows="30"
                    >{{old('description')}}</textarea>
                    @error('name') <small class="text-danger">{{ $message }}</small>@enderror

                <div class="mb-3">
                    <label class="form-label">Open Hours</label>
                    <input type="text" class="form-control" placeholder="Masukan Open Hours" name="open_hours"
                    value="{{old('open_hours')}}">
                    @error('open_hours') <small class="text-danger">{{ $message }}</small>@enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Contact</label>
                    <input type="number" class="form-control" placeholder="Masukan Open Hours" name="contact"
                    value="{{old('contact')}}">
                    @error('contact') <small class="text-danger">{{ $message }}</small>@enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Category</label>
                    <input type="text" name="category" class="form-control" placeholder="Masukan Category"
                    value="{{old('category')}}">
                    @error('category') <small class="text-danger">{{ $message }}</small>@enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Location</label>
                    <input type="text" class="form-control" placeholder="Masukan Location" name="location"
                    value="{{old('location')}}">
                    @error('location') <small class="text-danger">{{ $message }}</small>@enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>

    </div>
@endsection
