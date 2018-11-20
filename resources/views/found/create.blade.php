@extends('layouts.app')

@section('content')
    <div class="card">
        <h2 class="card-header">Fill up details for Found person</h2>
        <form method="post" action="{{ route('storeFound') }}" class="card-body">
            
            @csrf
            <h3>Found Person's Information</h3>
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input id="first_name" type="text" name="first_name" class="form-control {{ $errors->has('first_name') ?
            "is-invalid" : "" }}" value="{{ old('first_name') }}" placeholder="Person First Name">
                @if($errors->has('first_name'))
                    <strong class="invalid-feedback">{{ $errors->first('first_name') }}</strong>
                @endif
            </div>
            
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input id="last_name" type="text" name="last_name" class="form-control {{ $errors->has('last_name') ? "is-invalid"
            : "" }}" value="{{ old('last_name') }}" placeholder="Enter Person Last Name">
                @if($errors->has('last_name'))
                    <strong class="invalid-feedback">{{ $errors->first('last_name') }}</strong>
                @endif
            </div>
            
            <div class="form-group">
                <label for="age">Age of found person</label>
                <input id="age" type="text" name="age" class="form-control {{ $errors->has('age') ? "is-invalid" : "" }}"
                       value="{{ old('age') }}" placeholder="Age of found person">
                @if($errors->has('age'))
                    <strong class="invalid-feedback">{{ $errors->first('age') }}</strong>
                @endif
            </div>
            
            <div class="form-group">
                <label for="place">Place where last seen</label>
                <input id="place" type="text" name="place" class="form-control {{ $errors->has('place') ? "is-invalid" : "" }}" value="{{ old('place') }}" placeholder="Place where last seen">
                @if($errors->has('place'))
                    <strong class="invalid-feedback">{{ $errors->first('place') }}</strong>
                @endif
            </div>
            
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" type="text" name="description" class="form-control {{ $errors->has('description') ?
            "is-invalid" : "" }}"  placeholder="Description" rows="7">{{ old('description') }}</textarea>
                @if($errors->has('description'))
                    <strong class="invalid-feedback">{{ $errors->first('description') }}</strong>
                @endif
            </div>
            
            
            
            <h3>Applicant Information</h3>
            <hr>
            <div class="form-group">
                <label for="applicant">Applicant Name</label>
                <input id="applicant" type="text" name="applicant" class="form-control {{ $errors->has('applicant') ? "is-invalid"
            : "" }}" value="{{ old('applicant') }}" placeholder="Enter Your Name">
                @if($errors->has('applicant'))
                    <strong class="invalid-feedback">{{ $errors->first('applicant') }}</strong>
                @endif
            </div>
            
            <div class="form-group">
                <label for="address">Your Address</label>
                <input id="address" type="text" name="address" class="form-control {{ $errors->has('address') ? "is-invalid" : "" }}" value="{{ old('address') }}" placeholder="Your Address">
                @if($errors->has('address'))
                    <strong class="invalid-feedback">{{ $errors->first('address') }}</strong>
                @endif
            </div>
            
            <div class="form-group">
                <label for="email">Your Email Adress</label>
                <input id="email" type="text" name="email" class="form-control {{ $errors->has('email') ? "is-invalid" : "" }}" value="{{ old('email') }}" placeholder="Your Email Adress">
                @if($errors->has('email'))
                    <strong class="invalid-feedback">{{ $errors->first('email') }}</strong>
                @endif
            </div>
            
            <div class="form-group">
                <label for="contact">Contact Number</label>
                <input id="contact" type="text" name="contact" class="form-control {{ $errors->has('contact') ? "is-invalid" : "" }}" value="{{ old('contact') }}" placeholder="Contact Number">
                @if($errors->has('contact'))
                    <strong class="invalid-feedback">{{ $errors->first('contact') }}</strong>
                @endif
            </div>
            
            
            <div class="form-group">
                <button class="btn btn-success" type="submit">Submit</button>
            </div>
        
        </form>
    </div>
@endsection