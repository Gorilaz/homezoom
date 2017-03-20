@extends('main')
@section('title','| Stores')
@section('content')
<div class="container">

    <div class="page-header">
        <h1>Stores</h1>
    </div>

    <div>
        <button class="btn btn-success btn-create">Create</button>
          
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
                    <button class="btn btn-sm btn-danger btn-delete">Delete</button>

                </td>
            </tr>
        @endforeach        
    </table>    
    
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    
   /* function getParameter(theParameter) {
        var params = window.location.search.substr(1).split('&');

        for (var i = 0; i < params.length; i++) {
            var p = params[i].split('=');
            if (p[0] == theParameter) {
                return decodeURIComponent(p[1]);
            }
        }
        return false;
    }
    */
    $(document).on('click', '.btn-create', function () {
        location.href = '/stores/create;
    });

    $(document).on('click', '.btn-edit', function () {
        location.href = '/admin/stores/edit/' + $(this).closest('tr').data('id');
    });

  /*  var filter = function () {
        var page = getParameter('page');
        var input = $('#filterInput').val();
        var filter = '';
        var search = [];
        if (page) {
            page = 'page=' + page;
            search.push(page);
        }
        if (input) {
            filter = 'filter=' + input;
            search.push(filter);
        }
        if (!filter && !page) {
            window.location.search = '';
        } else
        {
            search = search.join('&');
            if (window.location.search.substr(1) != search) {
                window.location.search = '?' + search;
            }
        }
    }

*/
    $('#filterInput').keyup(function (event) {
        if (event.keyCode == 13) {
            filter();
        }
    });

    $(document).on('click', '.btn-filter', function () {
        filter();
    });

    $(document).on('click', '.btn-delete', function () {
        var id = $(this).closest('tr').data('id');
        bootbox.confirm("Are you sure?", function (result) {
            if (result)
            {
                location.href = '/stores/delete/' + id;
            }
        });
    });

/*    $('ul.pagination a').on('click', function (event) {
        event.preventDefault();
        var input = $('#filterInput').val();
        if (input)
        {
            window.location = this.href + '&filter=' + input;
        } else
        {
            window.location = this.href;
        }
    });
*/    
</script>
@stop