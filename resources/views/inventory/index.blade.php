@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">
                        <div class="text-right"> <a href="{{route('inventory.create')}}" class="btn btn-primary text-right">Add New Inventory</a></div>
                    </div>


                    <div class="table">
                        <table class="table table-bordered table-striped table-hover ">
                            <thead>
                            <tr>
                                <th>S.N.</th>
                                <th>Product Name</th>
                                <th>Product Quantity</th>
                                <th>Edit</th>
                                <th>Delete</th>


                            </tr>
                            </thead>
                            <tbody>
                            <?php $count = 1; ?>
                            @if(!empty($inventorys))
                                @foreach($inventorys as $inventory)
                                    <tr>
                                        <td>{{$count++}}</td>
                                        <td>{{ $inventory->name }}</td>
                                        <td>{{ $inventory->quantity }}</td>


                                        <td><a href="{{action('InventoryController@edit', $inventory->id)}}" class="btn btn-warning"><i class="far fa-edit"></i></a></td>
                                        <td>
                                            <form action="{{action('InventoryController@destroy', $inventory->id)}}" method="post">
                                                @csrf
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button class="btn btn-danger" onclick="return confirm('Are you Sure?')" type="submit"><i class="far fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection