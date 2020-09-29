<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Form Edit</title>
</head>
<body>
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
                        <input type="text" class="form-control" name="product_image" id="images" value="{{ $data->product_image}}">
                    </div>
                    <!-- <div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div> -->
                </form>
            </div>
        </div>
    </div>
</body>
</html>