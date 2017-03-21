@extends('main')
@section('title','| Stores')
@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>All Shops</h1>
        </div>

        <div class="col-md-2">
            <a href="{{ route('stores.create')}}" class="btn btn-primary  btn1-spacing">Create Shop</a>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
        
    </div>  
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Name</th>
                    <th>Domain</th>
              
                    <th></th>
                </thead>
                
                <tbody>
                      @foreach( $stores as $store )
                        <tr>
                            <td>{{ $store->id }}</td>  
                           
                            <td>{{ $store->slug }}</td>
                            <td>{{ $store->domain }}</td>
                            

                            <td><a  href="{{route('stores.edit',$store->id)}}" class="btn btn-default">Edit</a>
                            <a href="{{route('stores.update',$store->id)}}" class="btn btn-default">Block</a></td>
                            
                        </tr>

                    @endforeach
                </tbody>    
                
            </table>
            <div class="text-center">
              
            </div>
        </div>
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