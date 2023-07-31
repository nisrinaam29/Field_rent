@extends('layouts.app')

@section('title', 'Manage Lapangan')

@section('content')
    @include('layouts.navbar')

    <div class="container">

        <div class="col-md-18 bg-light manage-wrapper">
            <h1>halaman manage lapangan</h1>
            <p>Manage the Fields dont orget to recheck it</p>
            <hr>
            <a href="{{ url('products/add') }}" class="btn btn-dark btn-sm mb-3">Add Fields</a>
            @if (session('status_sukses'))
                <div class="aler alert-sucsess" role="alert">
                    <i class="uil ui-grin-tongue-wink-alt me-1"></i>{{ session('status_sukses') }}
            @endif
            <table class="table table-success table-striped">
                <thead>
                    <tr>
                        <th>#</th>

                        <th>Name</th>
                        <th>Image URL</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Open Hours</th>
                        <th>Category</th>
                        <th>Location</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $loop->iteration }} </td>

                            <td>{{ $product->name }}</td>
                            <td>{{ $product->image_url }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->open_hours }}</td>
                            <td>{{ $product->category }}</td>
                            <td>{{ $product->location }}</td>
                            <td>
                                <a href="{{ url('products/' . $product->id) }}" class="text-primary"><i
                                        class="uil uil-edit"></i>
                                    </a>



                                <a href="{{ url('products/'. $product->id)}}" class="text-danger" 
                                onclick="event.preventDefault();document.getElementById
                                ('delete-form-{{ $product->id}}').submit();">
                                    <i class="uil uil-trash-alt"></i>
                                
                                    <form id="delete-form-{{ $product->id }}"
                                        action="{{ url('products/'. $product->id) }}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>


                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
