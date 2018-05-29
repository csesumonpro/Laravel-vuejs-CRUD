<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css
">
        <title>Laravel</title>
    </head>
    <body>
    <div class="container" id="app">
        <h2  class="text-center text-info">Vue Js Laravel CRUD</h2><hr/>
        <div class="row">
            <div class="col-md-6">
                <form action="" method="post" @submit.prevent = "add_product()">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="hidden" name="id" v-model="product.id">
                        <input v-model="product.name" type="text" class="form-control" name="name" id="name" placeholder="Enter Product Name">
                    </div>
                    <div class="form-group">
                        <label for="name">Descriptiom</label>
                        <input v-model="product.desc" type="text" class="form-control" name="desc" id="desc" placeholder="Enter Product Description">
                    </div>
                    <div class="form-group">
                        <label for="name">Price</label>
                        <input v-model="product.price" type="number" class="form-control" name="price" id="price" placeholder="Enter Product PRice">
                    </div>
                    <button type="submit" class="btn btn-primary" v-if="edit_false">Add Product</button>
                    <button @submit.prevent = "update_product()" type="submit" class="btn btn-primary" v-else>Update Product</button>
                </form>
            </div>
            <div class="col-md-6">
                <table class="table table-hover" width="100%">
                    <thead>
                    <tr>
                        <th width="10%">SL</th>
                        <th width="20%">Name</th>
                        <th width="40%">Description</th>
                        <th width="10%">Price</th>
                        <th width="20%">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="(product,index) in products">
                        <td>@{{ product.id }}</td>
                        <td>@{{ product.name }}</td>
                        <td>@{{ product.desc }}</td>
                        <td>$@{{product.price}}</td>
                        <td>
                            {{--<a href="{{url('/edit-product/')}} ">Edit </a>--}}
                            <button @click.prevent = "edit_product(product.id)" ><i class="fa fa-pencil-square-o"></i></button>
                            <button @click.prevent = "delete_product(product.id,index)"><i class="fa fa-trash"></i></button>

                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="{{asset('/js/app.js')}}"></script>
    </body>
</html>
