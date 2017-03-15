@extends('layouts.template')

@section('title','Edit Member Details')

@section('content')
    <div class="panel-body">
        <h1><center><strong>Edit Member Details</strong></center></h1>

        <div class="col-sm-8 col-sm-offset-2">
            <form action="{{ route('posts.update', ['id' => $post->id]) }}" method="post">
                {{ csrf_field() }}

                {{--Pass in the PUT method--}}
                <input type="hidden" name="_method" value="PUT">

                <div class="form-group col-sm-3">
                    <label for="firstname">First Name:</label>*
                    <input name="firstname" type="text" class="form-control" value="{{ $post->firstname }}">
                </div>
                <div class="form-group col-sm-3">
                    <label for="middlename">Middle Name:</label>
                    <input name="middlename" type="text" class="form-control" value="{{ $post->middlename }}">
                </div>
                <div class="form-group col-sm-3">
                    <label for="lastname">Last Name:</label>*
                    <input name="lastname" type="text" class="form-control" value="{{ $post->lastname }}">
                </div>
                <div class="form-group col-sm-3">
                    <label for="gender">Gender:</label>*
                    <select name="gender" class="form-control" required>
                        <option disabled selected></option>
                        <option value="0" @if( $post->gender == 0) selected @endif>Female</option>
                        <option value="1" @if( $post->gender == 1) selected @endif>Male</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="address_line1">Address Line 1:</label>*
                    <input name="address_line1" type="text" class="form-control" value="{{ $post->address_line1 }}">
                </div>
                <div class="form-group">
                    <label for="address_line2">Address Line 2:</label>*
                    <input name="address_line2" type="text" class="form-control" value="{{ $post->address_line2 }}">
                </div>
                <div class="form-group">
                    <label for="address_line3">Address Line 3:</label>*
                    <input name="address_line3" type="text" class="form-control" value="{{ $post->address_line3 }}">
                </div>
                <div class="form-group">
                    <label for="postcode">Postcode:</label>*
                    <input name="postcode" type="number" class="form-control" maxlength="6"  value="{{ $post->postcode }}">
                </div>
                <div class="form-group">
                    <label for="ec_person">Emergency Contact Person:</label>*
                    <input name="ec_person" type="text" class="form-control" value="{{ $post->ec_person }}">
                </div>
                <div class="form-group">
                    <label for="ec_relationship">Relationship to you:</label>*
                    <input name="ec_relationship" type="text" class="form-control" value="{{ $post->ec_relationship }}">
                </div>
                <div class="form-group">
                    <label for="ec_phone_number">Emergency Contact Number:</label>*
                    <input name="ec_phone_number" type="number" class="form-control" maxlength="12"  value="{{ $post->ec_phone_number }}">
                </div>

                <div class="form-group">
                    <label for="longterm_goal">Long Term Goal:</label>*
                    <textarea name="longterm_goal" id="" cols="30" rows="10" class="form-control">{{ $post->longterm_goal }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/posts" class="btn btn-default pull-right">Go Back</a>
            </form>
        </div>
    </div>
@endsection