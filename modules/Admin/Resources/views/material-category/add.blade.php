@section('page_title', 'Add New Material Group')
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
                            <input id="title" type="text" name="title" class="validate" value="{{ old('title') }}"/>
                            <label for="title">Title</label>
                        </div>

                        <div class="input-field col s12">
                            <button class="btn teal waves-effect waves-light right" type="submit">Save</button>
                            <a class="btn grey lighten-1 waves-effect waves-light right btn-push-left" href="{{ route('admin::view.material-categories') }}">Cancel</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </main>

    @include('admin::includes.footer')
@stop