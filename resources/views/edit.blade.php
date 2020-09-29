@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Form Edit</h1>
                <form action="/books/update" method="post" class="mt-5">
                    @csrf
                    <div class="form-group">
                        <label for="id">Product Id</label>
                        <input type="hidden" class="form-control" name="product_id" id="id" value="{{ $data->product_id}}">
                    </div>
                    <div class="form-group">
                        <label for="">Product Title</label>
                        <input type="text" class="form-control" name="product_title" id="title" value="{{ $data->product_title}}">
                    </div>
                    <div class="form-group">
                        <label for="">Product Slug</label>
                        <input type="text" class="form-control" name="product_slug" id="slug" value="{{ $data->product_slug}}">
                    </div>
                    <div class="form-group">
                        <label for="">Product Images</label>
                        <!-- <input type="button" id="images" value="Pilih Gambar" onclick="document.getElementById('images').click();" /> -->
                        <input type="file" class="form-control" name="product_image" id="images" value="{{ $data->product_image}}">
                    </div>
                    <div class="float-right mt-2">
                        <button type="submit"  class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
