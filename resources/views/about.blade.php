@extends('layouts.app')

@section('content')

<div class="banner-container">
    <img src="{{asset('images/banner/v-1.jpg')}}" alt="" class="banner-image">
    <div class= "banner-text">ABOUT US</div>
</div>
<div class="theme-page padding-bottom-61">
    <div class="row gray full-width page-header vertical-align-table">
        <div class="row full-width padding-top-bottom-50 vertical-align-cell">
            <div class="row">
                {{-- <div class="page-header-left">
                    <h1>CONTACT US</h1>
                </div> --}}
                <div class="page-header-right">
                    <div class="bread-crumb-container">
                        <label>You Are Here:</label>
                        <ul class="bread-crumb">
                            <li>
                                <a title="HOME" href="{{route('home')}}">
                                    HOME
                                </a>
                            </li>
                            <li class="separator">
                                &#47;
                            </li>
                            <li>
                                ABOUT US
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection