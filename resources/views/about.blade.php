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

    <div class="row full-width gray page-padding-top-section">
        <div class="row">
            <h2 class="box-header">HISTORY</h2>
            <p class="description align-left">SSF Entrepreneur Inc. is an Enterprise that was established in 2004 in accordance with a corporation pursuant to section 2. Of the Liberian Corporation Act of 1976 amended 1977. SSF has during its fifteen-year history developed into Liberia's leading construction company.The company has grown organically by re-investing its earnings to fund growth.
                One of SSF's key focus is the development of young talent</p>

                <blockquote class="blockquote-top">*The company has grown organically by re-investing its earnings to fund the company’s growth.</blockquote>

            <p class="description align-left">One of SSF’s key focus is the development of young talent.</p>

            <h2 class="box-header page-margin-top">REGIONAL PRESENCE</h2>
            <p class="description align-left">Whilst our head office is based in Monrovia, Liberia, we have over the 
                past few years completed projects/contracts in twelve of Liberia’s fifteen 
                counties:</p>

            <h4 class="box-header page-margin-top">We currently have branch offices in:</h4>
            <table class="margin-top-40">
                <tbody>
                    <tr>
                        <td>Bomi</td>
                        <td>Grand Cape Mount</td>
                    </tr>
                    <tr>
                        <td>Grand Kru</td>
                        <td>Lofa</td>
                    </tr>
                    <tr>
                        <td>Margibi</td>
                        <td>Nimba</td>
                    </tr>
                </tbody>
            </table>
            <p class="description align-left">SSF remains flexible having successfully completed projects in some of 
                the most remote parts of Liberia. Many of our contracts have involved 
                projects categorized as “deep rural”.</p>
            
                <h2 class="box-header page-margin-top">EMPOWERMENT</h2>
                <p class="description align-left">Central to the way that SSF does business is the development and 
                    empowerment of our staff, associated suppliers and Subcontractors, 
                    consistent with our mantra of <span class="t1-date">“TRULY EMPOWERED”</span>.</p>

                <p class="description align-left">In terms of working with SMME’s, SSF has a proven track record as 
                    recognized in a number of industry awards in the development of small 
                    and medium enterprises. </p>
                       
                       <h4 class="box-header page-margin-top">The support offered to empower these 
                        businesses can take various forms:</h4>
                        <table class="margin-top-40">
                            <tbody>
                                <tr>
                                    <td>Bridging Finance</td>
                                    <td>Loan</td>
                                </tr>
                                <tr>
                                    <td>Technical Skills</td>
                                    <td>Guarantee Facilities</td>
                                </tr>
                            </tbody>
                        </table>

                       <h2 class="box-header page-margin-top">CORPORATE SOCIAL INVESTMENT</h2>
                       <p class="description align-left">SSF has a stated objective to contribute to the development of the 
                        communities in which we operate.</span>.</p>
                       <h4 class="box-header page-margin-top">Our contributions over the years have taken many forms such as:</h4>
                        <table class="margin-top-40">
                            <tbody>
                                <tr>
                                    <td>The building of Schools</td>
                                    <td>Home Renovations</td>
                                </tr>
                                <tr>
                                    <td>Water Wells for Communities</td>
                                    <td>Internship Programs</td>
                                </tr>
                            </tbody>
                        </table>
                   

                
            {{-- <ul class="services-list clearfix page-margin-top">
                <li>
                    <a href="{{route('road')}}" title="Interior Renovation">
                        <img src="images/samples/480x320/image_07.jpg" alt="">
                    </a>
                    <h4 class="box-header"><a href="{{route('road')}}" title="Road Construction">ROAD CONSTRUCTION</a></h4>
                    <p>We construct the best road in the whole of liberia as a rate compared to none in the industry.</p>
                </li>
                <li>
                    <a href="{{route('building')}}" title="Bulding Construction">
                        <img src="images/samples/480x320/image_05.jpeg" alt="">
                    </a>
                    <h4 class="box-header"><a href="{{route('building')}}" title="building construction">BUILDING CONSTRUCTION</a></h4>
                    <p>From initial design and project specification to archieving a high end finish.</p>
                </li>
                <li>
                    <a href="{{route('civil')}}" title="civil engineering">
                        <img src="images/samples/480x320/image_04.jpeg" alt="">
                    </a>
                    <h4 class="box-header"><a href="{{route('civil')}}" title="civil engineering">CIVIL ENGINEERING</a></h4>
                    <p>We offer quality engineering services with precision and timeliness.</p>
                </li>
            </ul> --}}
            {{-- <div class="align-center margin-top-67 padding-bottom-87">
                <a class="more" href="index94f6.html?page=services" title="VIEW ALL SERVICES">VIEW ALL SERVICES</a>
            </div> --}}
        </div>
    </div>


@endsection