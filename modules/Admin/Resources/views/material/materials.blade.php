@section('page_title', 'Materials')
@section('page_class', 'admin-catalog sticky-footer')

@extends('admin::layouts.master')

@section('content')
@include('admin::includes.header')

<main class="sticky-footer">
    <div class="container">
        <div class="row">
            
            @include('includes.flash')
            
            <div class="col s12">
                <div class="row">
                    <a class="btn teal waves-effect waves-light right" href="{{ route('admin::new.material') }}">Add New</a>
                </div>
            </div>
            @if (count($materials) > 0)
            <table class="responsive-table data-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Code</th>
                        <th>Category</th>
                        <th>Composition</th>
                        <th>GSM</th>
                        <th>Max Width</th>
                        <th>Created</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @include('admin::material.material-row')
                </tbody>
            </table>
            @else
            <p>I don't have any records!</p>
            @endif
            
        </div>
    </div>
</main>

@include('admin::includes.footer')
@stop

@section('end_body')
<script type="text/javascript">App.functions.loadDataOnScroll($('table.data-table tbody'), "{{ Request::url() }}", {{ $limit }}, {{ $offset }}, {{ $count }});</script>
@stop