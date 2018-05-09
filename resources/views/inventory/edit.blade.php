@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">Inventory Form</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="post" action="{{action('InventoryController@update',$id)}}}">
                            {{csrf_field()}}
                            <input name="_method" type="hidden" value="PATCH">
                            <div class="form-group">

                                <label for="name" style="align-content: center">Product Name</label>

                                <input type="text" class="form-control" id="name" name="name"  value="{{$inventory->name}}" placeholder="Product Name" required>

                            </div>

                            <div class="form-group">

                                <label for="quantity">Quantity</label>
                                <input type="text" class="form-control" id="quantity" name="quantity"  value="{{$inventory->quantity}}" placeholder="Quantity" required>

                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-lg text-center">Update</button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection