@extends('main')
@section('title','| Create New Shop')
@section('stylesheets')
    {!! Html::style('css/parsley.css') !!}
@endsection

@section('content')
<div class='row'>
    <div class="col-md-6 col-md-offset-3">
        <h1>Create New Shop</h1>
        <hr>
        
        {!! Form::open(array('route' => 'stores.store','data-parsley-validate'=>'')) !!}

            {{Form::label('slug','Slug:') }}
            {{Form::text('slug',null,array('class'=>'form-control','required'=>'','minlength'=>'5','maxlength'=>'255')) }}
             {{Form::label('domain','Domain:') }}
            {{Form::text('domain',null,array('class'=>'form-control','required'=>'','minlength'=>'5','maxlength'=>'255')) }}
           
            {{Form::submit('Create Shop',array('class'=>'btn btn-lg btn-success btn-block',
                        'style'=>'margin-top:10px;'))}}
                
        {!! Form::close() !!}
        
    </div>
</div>

@endsection

@section('scripts')
    {!! Html::script('js/parsley.min.js') !!}
@endsection