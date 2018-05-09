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
                        <form method="POST" action="/inventory/store">
                            {{ csrf_field() }}
                            <div class="form-group">

                                <label for="name" style="align-content: center">Product Name</label>

                                <input type="text" class="form-control" id="name" name="name"  value="{{old('name')}}" placeholder="Product Name" required>

                            </div>

                            <div class="form-group">

                                <label for="quantity">Quantity</label>

                                <input type="text" class="form-control" id="quantity" name="quantity"  value="{{old('quantity')}}" placeholder="quantity" required>
                                @if($errors->first('quantity'))
                                    <div class="text-danger">{{$errors->first('quantity')}}</div>
                                @endif
                            </div>


                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-lg text-center">Add</button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection