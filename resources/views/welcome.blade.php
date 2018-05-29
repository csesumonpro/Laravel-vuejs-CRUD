<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <title>Laravel</title>
    </head>
    <body>
    <div class="container" id="app">
        <h2  class="text-center">Vue Js Laravel CRUD</h2><hr/>
        <div class="row">
            <div class="col-md-6">
                <form action="" method="post" role="form">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Product Name">
                    </div>
                    <div class="form-group">
                        <label for="name">Descriptiom</label>
                        <input type="text" class="form-control" name="desc" id="desc" placeholder="Enter Product Description">
                    </div>
                    <div class="form-group">
                        <label for="name">Price</label>
                        <input type="number" class="form-control" name="price" id="price" placeholder="Enter Product PRice">
                    </div>
                    <button type="submit" class="btn btn-primary">Add Product</button>
                </form>
            </div>
            <div class="col-md-6">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>01</td>
                        <td>First Product Name</td>
                        <td>First Product Description</td>
                        <td>$10</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </body>
</html>
