@extends('layout')

@section('content')
    <div class="row">
        <div class="col-1">
            <h2 id="heading1">Digital</h2>
            <h3 id="heading2">Marketing</h3>
            <p id="text1">Lorem ipsum dolor sit amet, consectetur adipiscing. Vestibulum
                retrum metus at enim congue scelerisque. Sed suscipit metu
                non iaculis semper sonsectetur adipiscing elit.
            </p>
            <button type="button" class="learn-more-button">
                learn more
            </button>
        </div>
        <div class="col-2">
            <img class="main-image" src="images/main-page-image.jpg" alt="main page image"></div>
    </div>
    @if(session()->has('success'))
        <div class="successful-registration-message">
            <p> {{session()->get('success')}}</p>
        </div>
@endif
@endsection
