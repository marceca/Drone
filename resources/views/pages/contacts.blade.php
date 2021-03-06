@extends('layouts.app')


@section('head')
<style>
    p:hover{
        font-style: normal;
    }
</style>
@stop
@section('content')

@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading" style="text-align: center"><h3>Contact us today!</h3></div>

            <p>Phone number: (xxx)-xxx-xxxx</p>
            <p>City: city</p>
            <p>State: state</p>
            <p>Address: address</p>
            <p>&nbsp;</p>
        </div>
    </div>


    <div class="col-md-6" style="left: 27px;">
        <div class="panel panel-default">
            <div class="panel-heading" style="text-align: center;"><h3>Where you can find us!</h3></div>

                        {{-- USED BOOTSTRAP-SOCIAL --}}

            <a href="http://facebook.com" target="_blank" class="btn btn-block btn-social btn-facebook" style="padding: 5px; color: #3B5998;">
                <span class="fa fa-facebook"></span>
                Facebook
            </a>
            <a href="http://twitter.com" target="_blank" class="btn btn-block btn-social btn-twitter" style="padding: 5px;color: #55ACEE;">
                <span class="fa fa-twitter"></span>
                Twitter
            </a>
            <a href="https://www.instagram.com/checkamar/" target="_blank" class="btn btn-block btn-social btn-instagram" style="padding: 5px; color: #3F729B">
                <span class="fa fa-instagram"></span>
                Instagram
            </a>
            <a href="http://www.youtube.com" target="_blank" class="btn btn-block btn-social btn-youtube" style="padding: 5px; color: #CC181E">
                <span class="fa fa-youtube"></span>
                Youtube
            </a>
        </div>
    </div>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <p style="text-align: center;">If you would like us to contact you then please fill out the form below. We will do our best to contact you today!</p>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center"><h3>Let's talk about your project!</h3></div>




                                {{-- FORM --}}

                <form action="{{ url('/submit') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group col-sm-6">
                        <label for="firstName"><h6>First Name:</h6></label>
                        <input type="text" class="form-control" name="firstName" placeholder="First name">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="lastName"><h6>Last Name:</h6></label>
                        <input type="text" class="form-control" name="lastName" placeholder="Last name">
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="city"><h6>City:</h6></label>
                        <input type="text" class="form-control" name="city" placeholder="City">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="State" class="control-label"><h6>State:</h6></label>
                        <select class="form-control" name="state">
                            <option value="" disabled selected>Select your option</option>
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                            <option value="AZ">Arizona</option>
                            <option value="AR">Arkansas</option>
                            <option value="CA">California</option>
                            <option value="CO">Colorado</option>
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="DC">District Of Columbia</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="HI">Hawaii</option>
                            <option value="ID">Idaho</option>
                            <option value="IL">Illinois</option>
                            <option value="IN">Indiana</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NV">Nevada</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NM">New Mexico</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="ND">North Dakota</option>
                            <option value="OH">Ohio</option>
                            <option value="OK">Oklahoma</option>
                            <option value="OR">Oregon</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="SD">South Dakota</option>
                            <option value="TN">Tennessee</option>
                            <option value="TX">Texas</option>
                            <option value="UT">Utah</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WA">Washington</option>
                            <option value="WV">West Virginia</option>
                            <option value="WI">Wisconsin</option>
                            <option value="WY">Wyoming</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="email"><h6>Email:</h6></label>
                        <input type="email" class="form-control" name="email" placeholder="Email address">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="number"><h6>Phone Number:</h6></label>
                        <input type="integer" class="form-control center-block" name="number" placeholder="(xxx)-xxx-xxxx">
                    </div>
                    <div class="form-group col-sm-9">
                        <label for="typeOfProject" class="control-label"><h6>Category:</h6></label>
                        <select class="form-control" name="typeOfProject">
                            <option value="" disabled selected>Select your option</option>
                            <option value="construction">Construction</option>
                            <option value="realEstate">Real Estate</option>
                            <option value="events">Events</option>
                            <option value="landscape">Landscape</option>
                            <option value="architecture">Architecture</option>
                            <option value="landscapeDesign">Landscape Design</option>
                            <option value="surveying">Surveying</option>
                            <option value="sports">Sports</option>
                            <option value="websiteBoosting">Website Boosting</option>
                            <option value="personal">Personal</option>
                            <option value="weddings">Weddings</option>
                            <option value="agriculture">Agriculture</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-3">
                        <label for="typeOfProject" class="control-label"><h6>Type of service:</h6></label>
                            <select class="form-control" name="typeOfProject">
                            <option value="" disabled selected>Select your option</option>
                            <option value="photography">Aerial Photography</option>
                            <option value="video">Aerial Videography</option>
                            <option value="both">Both</option>
                            <option value="notSure">Not sure</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-12">
                        <label for="aboutYourProject">About your project:</label>
                        <textarea class="form-control" name="aboutYourProject" placeholder="About your project"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success center-block btn-round">Send Project Information</button>
                </form>



            </div>
        </div>
    </div>
</div>
@stop