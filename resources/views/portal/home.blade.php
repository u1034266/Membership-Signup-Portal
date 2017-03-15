@extends('layouts.publicHomeTemplate')

@section('title','Member Signup Portal')

@section('content')
    {{-- Container to hold registration form --}}
    <div>
        <div class="col-sm-8 col-sm-offset-2 well well-lg" id="well_header">
            <h2>Member Portal - Signup Form</h2>
            <p>Welcome to my cool Membership Signup Form. To become a registered member, please complete the following form.</p>
        </div>
        <div class="col-sm-8 col-sm-offset-2 well well-lg">
            <form action="{{ route('posts.store') }}" method="post">
                {{ csrf_field() }}

                <div class="form-group col-sm-3">
                    <label for="firstname">First Name:</label>*
                    <input name="firstname" type="text" class="form-control" required>
                </div>
                <div class="form-group col-sm-3">
                    <label for="middlename">Middle Name:</label>
                    <input name="middlename" type="text" class="form-control">
                </div>
                <div class="form-group col-sm-3">
                    <label for="lastname">Last Name:</label>*
                    <input name="lastname" type="text" class="form-control" required>
                </div>
                <div class="form-group col-sm-3">
                    <label for="gender">Gender:</label>*
                    <select name="gender" class="form-control" required>
                        <option disabled selected></option>
                        <option value="0">Female</option>
                        <option value="1">Male</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="address_line1">Address Line 1:</label>*
                    <input name="address_line1" type="text" class="form-control" placeholder="House, unit number. Eg. 123 or Unit 1/234" required>
                </div>
                <div class="form-group">
                    <label for="address_line2">Address Line 2:</label>*
                    <input name="address_line2" type="text" class="form-control" placeholder="Street name and type. Eg. Purpose St" required>
                </div>
                <div class="form-group">
                    <label for="address_line3">Address Line 3:</label>*
                    <input name="address_line3" type="text" class="form-control" placeholder="Suburb, Stage. Eg. Destiny, QLD" required>
                </div>
                <div class="form-group">
                    <label for="postcode">Postcode:</label>*
                    <input name="postcode" type="number" class="form-control" maxlength="6" placeholder="Postcode. Eg. 1234" required>
                </div>
                <div class="form-group">
                    <label for="ec_person">Emergency Contact Person:</label>*
                    <input name="ec_person" type="text" class="form-control" required placeholder="Name of emergency contact.">
                </div>
                <div class="form-group">
                    <label for="ec_relationship">Relationship to you:</label>*
                    <input name="ec_relationship" type="text" class="form-control" required placeholder="Eg. Parent, Guardian, etc..">
                </div>
                <div class="form-group">
                    <label for="ec_phone_number">Emergency Contact Number:</label>*
                    <input name="ec_phone_number" type="number" class="form-control" maxlength="12"  required>
                </div>

                <div class="form-group">
                    <label for="longterm_goal">Long Term Goal:</label>*
                    <textarea name="longterm_goal" id="" cols="30" rows="10" class="form-control" required placeholder="Please enter your long term goal here."></textarea>
                </div>
                <div>
                    <small><em>* Required fields</em></small>
                </div>

                <button type="submit" class="btn btn-primary">Sign Up</button>
            </form>
        </div>
    </div>
@endsection