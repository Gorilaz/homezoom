@extends('main')
@section('title','| Stores')
@section('content')
<div class="container">
    <div class ="row">
         <div class="col-md-6 col-md-offset-3">

            <div class="page-header">
                <h1>Stores</h1>
            </div>

    

            <div>
                <a href="{{ route('stores.create')}}" class="btn btn-primary ">Create shop</a>
                  
                <button type="button" class="btn btn-success btn-filter pull-right">Filter</button>
               
            </div>
            <p></p>

            <table class="table table-striped">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Domain</th>
              
                    <th></th>
                </tr>
                @foreach( $stores as $store )
                    <tr data-id="{{ $store->id }}">
                        
                        <td>{{ $store->id }}</td>    
                            	               
                        <td>{{ $store->slug }}</td>
                        <td>{{ $store->domain }}</td>  

                        <td class="tools">
                            <button class="btn btn-sm btn-info btn-edit">Edit</button>
                             <button class="btn btn-sm btn-danger btn-delete">Block</button>

                        </td>
                    </tr>
                @endforeach        
            </table>
        </div>
    </div>            
    
</div>
@endsection