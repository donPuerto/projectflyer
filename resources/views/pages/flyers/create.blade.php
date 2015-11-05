@extends('layouts.master')

@section('title_name') Flyers Create @endsection

@section('content')

    <h1>Selling Home?</h1>

    <hr>

    <div class="row">



        <form method="post" action="/flyers" role="form" enctype="multipart/form-data" class="col-md-6">

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @include('pages.flyers.form')

        </form>
    </div> {{--row--}}

@endsection