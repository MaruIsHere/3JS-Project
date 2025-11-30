@extends('layouts.app')

@section('title', 'Detail Product')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">
                    <i class="fas fa-box"></i> Detail Product
                </h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 text-center">
                        @if($product->image)
                            <img src="{{ asset('storage/products/' . $product->image) }}" 
                                 alt="Product Image" class="product-detail-image mb-3">
                        @else
                            <div class="product-detail-image bg-light d-flex align-items-center justify-content-center mx-auto mb-3">
                                <i class="fas fa-image fa-3x text-muted"></i>
                            </div>
                        @endif

                        <h4>{{ $product->name }}</h4>
                        <p class="text-muted">{{ $product->code }}</p>

                        <div class="mb-3">
                            <span class="badge {{ $product->status == 'active' ? 'bg-success' : 'bg-secondary' }} fs-6">
                                {{ ucfirst($product->status) }}
                            </span>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <table class="table table-borderless">
                            <tr>
                                <th width="30%">Product Code</th>
                                <td>: {{ $product->code }}</td>
                            </tr>
                            <tr>
                                <th>Product Name</th>
                                <td>: {{ $product->name }}</td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>: {{ $product->description }}</td>
                            </tr>
                            <tr>
                                <th>Information</th>
                                <td>: {{ $product->information }}</td>
                            <tr>
                                <th>Category</th>
                                <td>: {{ $product->category }}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>: 
                                    <span class="badge {{ $product->status == 'active' ? 'bg-success' : 'bg-secondary' }}">
                                        {{ ucfirst($product->status) }}
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th>Created</th>
                                <td>: {{ $product->created_at->format('d F Y H:i') }}</td>
                            </tr>
                            <tr>
                                <th>Last Updated</th>
                                <td>: {{ $product->updated_at->format('d F Y H:i') }}</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('products.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                    <div>
                        <a href="{{ route('products.edit', $product) }}" class="btn btn-warning">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <form action="{{ route('products.destroy', $product) }}" method="POST" class="d-inline" 
                              onsubmit="return confirm('Yakin ingin menghapus product ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <i class="fas fa-trash"></i> Hapus
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection