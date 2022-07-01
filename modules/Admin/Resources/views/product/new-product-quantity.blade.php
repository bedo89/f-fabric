@section('page_title', 'Add Product Quantity')
@section('page_class', 'admin-catalog sticky-footer')

@extends('admin::layouts.master')

@section('content')
@include('admin::includes.header')

<main class="sticky-footer">
    <div class="container">
        <div class="row">
            
            @include('includes.flash')
            
            <form class="col s12" method="POST" action="{{ Request::url() }}">
                {{ csrf_field() }}
                <div class="row">
                    <div class="input-field col s12 m6">
                        <input id="lower_limit" type="text" name="lower_limit" class="validate" value="{{ old('lower_limit') }}" />
                        <label for="lower_limit">Lower Limit</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <input id="upper_limit" type="text" name="upper_limit" class="validate" value="{{ old('upper_limit') }}" />
                        <label for="upper_limit">Upper Limit</label>
                    </div>
                    <div class="input-field col s12">
                        <button class="btn teal waves-effect waves-light right" type="submit">Save</button>
                        <a class="btn grey lighten-1 waves-effect waves-light right btn-push-left" href="{{ route('admin::view.product', ['id' => $product->id]) }}">Cancel</a>
                    </div>
                </div>
            </form>
            
        </div>
    </div>
</main>

@include('admin::includes.footer')
@stop