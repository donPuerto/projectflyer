@extends('layouts.master')

@section('title_name') Flyers Create @endsection

@section('content')

    <h1>Selling Home?</h1>

    <hr>

    <div class="row">



        <form method="post" action="/flyers" role="form" enctype="multipart/form-data">

            @include('pages.flyers.form')

        </form>
    </div> {{--row--}}

@endsection