@extends('layouts.app')

@section('title', 'Edit Lapangan')


@section('content')
    @include('layouts.navbar')

    <div class="container">

        <div class="col-md-10 bg-light manage-wrapper">
            <h3><i class="uil uil-plus me-1"></i>Edit Lapangan</h3>
            <p>Manage the Fields dont forget to recheck it</p>
            <hr>
            <form action="{{ url ('products/'. $product->id)}}" method="POST">
             
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Nama Lapangan</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Masukan Nama Lapangan" name="name"
                    value="{{$product->name}}">
                    @error('name') <small class="text-danger">{{ $message }}</small>@enderror
                
                </div>
                <div class="mb-3">
                    <label class="form-label">Image URL</label>
                    <input type="text" class="form-control" placeholder="Masukan Image URL" name="image_url"
                    value="{{$product->image_url}}">
                    @error('image_url') <small class="text-danger">{{ $message }}</small>@enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <input type="number" class="form-control" placeholder="Masukan Harga" name="price"
                    value="{{$product->name}}">
                    @error('price') <small class="text-danger">{{ $message }}</small>@enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control" placeholder="tulis deskripsi" rows="30"
                    >{{$product->description}}</textarea>
                    @error('description') <small class="text-danger">{{ $message }}</small>@enderror

                <div class="mb-3">
                    <label class="form-label">Open Hours</label>
                    <input type="text" class="form-control" placeholder="Masukan Open Hours" name="open_hours"
                    value="{{$product->open_hours}}">
                    @error('open_hours') <small class="text-danger">{{ $message }}</small>@enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Contact</label>
                    <input type="number" class="form-control" placeholder="Masukan Open Hours" name="contact"
                    value="{{$product->contact}}">
                    @error('contact') <small class="text-danger">{{ $message }}</small>@enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Category</label>
                    <input type="text" name="category" class="form-control" placeholder="Masukan Category"
                    value="{{$product->category}}">
                    @error('category') <small class="text-danger">{{ $message }}</small>@enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Location</label>
                    <input type="text" class="form-control" placeholder="Masukan Location" name="location"
                    value="{{$product->location}}">
                    @error('location') <small class="text-danger">{{ $message }}</small>@enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>

    </div>
@endsection



