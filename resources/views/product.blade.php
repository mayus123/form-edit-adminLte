@extends('layout.app')

@section('content')
    <div class="row">
        <div class="container">
            <table class="table">
                <thead class="bg-primary">
                    <tr>
                        <th scope="col" class="text-center">id</th>
                        <th scope="col" class="text-center">Product Title</th>
                        <th scope="col" class="text-center">Product Slug</th>
                        <th scope="col" class="text-center">Product Image</th>
                        <th scope="col" class="text-center">Edit</th>
                        <th scope="col" class="text-center">Delete</th>
                    </tr>
                </thead>
                <tbody class="bg-info">
                    @foreach($data as $produk)
                        <tr>
                            <td class="text-center" >{{ $produk->product_id }}</td>
                            <td class="text-center" style="width: 300px">{{ $produk->product_title }}</td>
                            <td class="text-center">{{ $produk->product_slug }}</td>
                            <td class="text-center"><img src="{{ url('img/product/' . $produk->product_image) }}" alt="" width="200" height="130"></td>
                            <td class="text-center">
                                <a href="product/edit/{{ $produk->product_id }}" class="btn btn-success">Edit</a>
                            </td>
                            <td class="text-center">
                                <button class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="editorm" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                    </div>
                </div>
            </div> -->

        </div>
    </div>
@endsection