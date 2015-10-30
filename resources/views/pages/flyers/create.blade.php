@inject('countries', 'App\Http\Utilities\Country')

@extends('layouts.master')

@section('title_name') Flyers Create @endsection

@section('content')

    <h1>Selling Home?</h1>

    <hr>

    <div class="row">



        <form method="post" action="/flyers" role="form" enctype="multipart/form-data">

            <div class="form-group">
                <label class="control-label" for="street">Street:</label>
                <input type="text" class="form-control" name="street" id="street"  placeholder=" {{ old('street') }}">

            </div>

            <div class="form-group">
                <label class="control-label" for="city">City:</label>
                <input type="text" class="form-control" name="city" id="city"  placeholder=" {{ old('city') }}">

            </div>

            <div class="form-group">
                <label class="control-label" for="name">Name:</label>


            </div>

            <div class="form-group">
                <label class="control-label" for="zip">Zip/Postal Code:</label>
                <input type="text" class="form-control" name="zip" id="zip"  placeholder=" {{ old('zip') }}">

            </div>

            <div class="form-group">
                <label class="control-label" for="country">Country:</label>
                <select class="form-control" name="country" id="country">

                    @foreach($countries::all() as $country => $code)
                        <option value="{{ $code }}"> {{ $country }}</option>
                    @endforeach
                </select>

            </div>




            <div class="form-group">
                <label class="control-label" for="state">State:</label>
                <input type="text" class="form-control" name="state" id="state"  placeholder=" {{ old('state') }}">

            </div>


            <hr>


            <div class="form-group">
                <label class="control-label" for="price">Sales Price:</label>
                <input type="text" class="form-control" name="price" id="price"  placeholder=" {{ old('price') }}">

            </div>

            <div class="form-group">
                <label class="control-label" for="description">Home Description:</label>
                <textarea class="form-control" name="description" id="description"  rows="10">
                    {{ old('description') }}
                </textarea>

            </div>

            <div class="form-group">
                <label class="control-label" for="photos">Photos:</label>
                <input type="text" class="form-control" name="photos" id="photos"  placeholder=" {{ old('photos') }}">

            </div>


            <div class="form-group">

                <button type="submit" class="btn btn-primary">Create Flyer</button>

            </div>


        </form>
    </div> {{--row--}}

@endsection