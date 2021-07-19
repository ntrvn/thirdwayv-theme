@extends('layouts.app')

@section('content')

<section class="career-container">

    <div class="follow-container" style="top: 30vh">
        <div class="">
            <h5>FOLLOW US</h5>
        </div>
        <div class="icons">
            <i class="bi bi-facebook"></i>
            <i class="bi bi-twitter"></i>
            <i class="bi bi-instagram"></i>
            <i class="bi bi-messenger"></i>
            <i class="bi bi-linkedin"></i>        
        </div>
    </div>
    <div style="clear: both;"></div>

</section>
    {!! get_field("career_top_subtitle") !!}

    <div class="follow-container" style="top: 30vh">
        <div class="">
            <h5>FOLLOW US</h5>
        </div>
        <div class="icons">
            <i class="bi bi-facebook"></i>
            <i class="bi bi-twitter"></i>
            <i class="bi bi-instagram"></i>
            <i class="bi bi-messenger"></i>
            <i class="bi bi-linkedin"></i>        
        </div>
    </div>

</section>

<section class="careers-screen-container">
    {!! get_field("career_page_title_and_description") !!}

    {!! get_field("career_4_columns") !!}

    {!! get_field("career_work_benefits") !!}
</section>

<section class="careers-screen-container">

    {!! get_field("open_positions_title_and_description") !!}

    {!! get_field("career_2_column") !!}

    <div style="clear: both;"></div>

    
    <div class="career-contact-section careers-resume">
        {!! get_field("bottom_descriptions") !!}    
    </div>

</section>

@endsection